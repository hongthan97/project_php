<?php 
require_once('models/sale.php');
require_once('models/customer.php');
require_once('models/products.php');
require_once('models/bill_detail.php');
require_once('models/employees.php');
class SaleController{
	var $sale_model;

	function __construct(){
		$this->sale_model = new Sale();
	}
	function payment(){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$product = new Product();
		$ma_nv = $_SESSION['info']['ma_nv'];
		$ma_kh = $_SESSION['customer']['ma_kh'];
		$cart = $_SESSION['cart'];

		$bill = array();
		$bill['ma_hd'] = $ma_kh.'_'.$ma_nv.'_'.time();
		$bill['ma_nv'] = $ma_nv;
		$bill['ma_kh'] = $ma_kh;
		$bill['ngay_ban'] = date('Y-m-d H:i:s');
		$bill['trang_thai'] = 0;

		$bill_model = new Sale();
		$bill_model->insert($bill);

		$tong_tien = 0;
		foreach ($cart as $value) {
			$bill_detail['ma_hd'] = $bill['ma_hd'];
			$bill_detail['ma_sp'] = $value['ma_sp'];
			$bill_detail['ten_sp'] = $value['ten_sp'];
			$bill_detail['so_luong'] = $value['so_luong_mua'];
			$bill_detail['gia_ban'] = $value['don_gia'];
			$bill_detail['thanh_tien'] = $value['so_luong_mua']*$value['don_gia'];
			$tong_tien += $bill_detail['thanh_tien'];

			$bill_detail_model = new BillDetail();
			$stt = $bill_detail_model->insert($bill_detail);

			$so_luong_con = $product->quant($bill_detail['ma_sp']);
			$product->reduceQuant($bill_detail['ma_sp'],$bill_detail['so_luong'],$so_luong_con);
		}

		$bill_update['ma_hd'] = $bill['ma_hd'];
		$bill_update['tong_tien'] = $tong_tien;
		$bill_model->update($bill_update);
		$this->lai_thang_nay();
		unset($_SESSION['cart']);
		unset($_SESSION['customer']);
		header('Location: ?mod=sale&act=billdetail&ma_hd='. $bill['ma_hd'] .'');
	}
	function reduce(){
		$code = $_GET['ma_sp'];
		$_SESSION['cart'][$code]['so_luong_mua'] --;
		setcookie('giam_di_1','msg',time()+2);
		header('Location: index.php?mod=sale&act=sale');
	}
	function remove(){
		$code = $_GET['ma_sp'];
		
		unset($_SESSION['cart'][$code]);
		setcookie('loai_bo','msg',time()+2);
		
		
		header('Location: index.php?mod=sale&act=sale');
	}
	function add2cart(){
		$code = $_GET['ma_sp'];
		$product = new Product();
		$data = $product->find($code);
		
		$so_luong_con = $data['so_luong'];
		
		if (isset($_SESSION['cart'][$code])) {
			$_SESSION['cart'][$code]['so_luong'] = $so_luong_con;
			if($_SESSION['cart'][$code]['so_luong_mua'] < $so_luong_con){				
				$_SESSION['cart'][$code]['so_luong_mua'] ++;
				setcookie('mua_moi','msg',time()+2);
			}else{
				setcookie('het_hang','msg',time()+2);
			}
			
		} else {
			$data['so_luong_mua'] = 1;
			$_SESSION['cart'][$code] = $data;
			setcookie('mua_them_1','msg',time()+2);
		}
		
		header('Location: index.php?mod=sale&act=sale');
	}
	function deletepayment(){
		unset($_SESSION['cart']);
		setcookie('huy_don_hang', 'msg', time()+2);
		header('Location: index.php?mod=sale&act=sale');
	}
	function sale(){
		if (isset($_SESSION['customer'])) {
			$customer = $_SESSION['customer'];
			$product = new Product();
			$data = $product->All();
			$cart = array();
			if (isset($_SESSION['cart'])) {
				$cart = $_SESSION['cart'];
			}
			require_once('views/sale/sale_form.php');
		} else {
			header('Location: ?mod=sale&act=createbill');
		}
	}
	function purchase(){
		if (isset($_GET['ma_kh'])) {
			unset($_SESSION['chi_tiet_hoa_don']);
			unset($_SESSION['chi_tiet_san_pham']);
			$code = $_GET['ma_kh'];
			$customer = new Customer();
			$result = $customer->find($code);
			$_SESSION['customer'] = $result;
			header('Location: ?mod=sale&act=sale');
		} else {
			header('Location: ?mod=sale&act=createbill');
		}
	}
	function bill(){
		if (isset($_SESSION['customer'])&&isset($_SESSION['cart'])) {
			unset($_SESSION['customer']);
			unset($_SESSION['cart']);
			
		}
		$customer = new Customer();
		$data = $customer->All();
		require ('views/sale/create_bill.php');
	}

	function billdetail(){
		$code = $_GET['ma_hd'];
		$hoa_don_model = new Sale();
		$khach_hang_model = new Customer();
		$nhan_vien_model = new Employees();
		$hoa_don = $hoa_don_model->find($code);
		$ma_kh = $hoa_don['ma_kh'];
		$ma_nv = $hoa_don['ma_nv'];
		$khach_hang = $khach_hang_model->find($ma_kh);
		$nhan_vien = $nhan_vien_model->find($ma_nv);
		$ten_kh = $khach_hang['ten_kh'];
		$ten_nv = $nhan_vien['ten_nv'];
		
		$ngay_ban = $hoa_don['ngay_ban'];
		$tong_tien = $hoa_don['tong_tien'];

		$chi_tiet_model = new BillDetail();
		$chi_tiet = $chi_tiet_model->find_bill_detail($code);
		
		$chi_tiet_hoa_don = array();
		$chi_tiet_hoa_don['ma_hd'] = $code;
		$chi_tiet_hoa_don['ma_kh'] = $ma_kh;
		$chi_tiet_hoa_don['ma_nv'] = $ma_nv;
		$chi_tiet_hoa_don['ngay_ban'] = $ngay_ban;
		$chi_tiet_hoa_don['tong_tien'] = $tong_tien;

		$_SESSION['chi_tiet_hoa_don'] = $chi_tiet_hoa_don;
		$_SESSION['chi_tiet_san_pham'] = $chi_tiet;
		require_once('views/sale/bill_detail.php');
		
	}

	function sendmail(){
		if (isset($_SESSION['chi_tiet_hoa_don'])&&isset($_SESSION['chi_tiet_san_pham'])) {
			require_once('mail.php');
			$ma_kh = $_GET['ma_kh'];

			$customer_model = new Customer();
			$result = $customer_model->find($ma_kh);
			$email = $result['email'];
			$ten_kh = $result['ten_kh'];

			$_SESSION['chi_tiet_hoa_don']['ten_kh'] = $ten_kh;

			$email_recive = $email;
			$name = $ten_kh;
			
			ob_start();
    // Chỗ này có thể truy vấn Database và xuất ra ngay kết quả 
    // => tất cả đều lưu vào biến $content
			include_once('views/sale/mail_form.php');
			$contents = ob_get_contents();
			ob_end_clean();
			$subject = 'Bạn đã đặt hàng thành công!';
			send_email($email_recive,$name,$contents,$subject);

			header('Location: ?mod=sale&act=createbill');
		} else {
			header('Location: ?mod=sale&act=createbill');
		}
	}

	function billprint(){
		$ma_kh = $_SESSION['chi_tiet_hoa_don']['ma_kh'];
		$customer_model = new Customer();
		$result = $customer_model->find($ma_kh);
		$ten_kh = $result['ten_kh'];
		$_SESSION['chi_tiet_hoa_don']['ten_kh'] = $ten_kh;
		require_once('views/sale/bill_print.php');
	}

	function lai_thang_nay(){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$month = date('m');
		$_SESSION['info']['month'] = $month;
		$ma_nv = $_SESSION['info']['ma_nv'];
		$info = $this->sale_model->lai_thang_nay($month,$ma_nv);
		$_SESSION['info']['lai'] = $info['lai'];
	}

}
?>
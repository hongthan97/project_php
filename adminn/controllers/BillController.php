<?php 
include_once('models/bill.php');
include_once('models/bill_detail.php');
include_once('models/customer.php');
require_once('models/products.php');
class BillController{
	var $bill_model;
	var $bill_detail_model;
	var $customer_model;
	function __construct(){
		$this->bill_model = new Bill();
		$this->bill_detail_model = new BillDetail();
		$this->customer_model = new Customer();
	}
	function sendmailonline(){
		if (isset($_SESSION['chi_tiet_hoa_don_online'])&&isset($_SESSION['chi_tiet_san_pham_online'])) {
			require_once('mail.php');
			$ma_kh = $_SESSION['chi_tiet_hoa_don_online']['ma_kh'];

			$customer_model = new Customer();
			$result = $customer_model->find($ma_kh);
			$email = $result['email'];
			$ten_kh = $result['ten_kh'];

			$_SESSION['chi_tiet_hoa_don_online']['ten_kh'] = $ten_kh;

			$email_recive = $email;
			$name = $ten_kh;
			
			ob_start();
    // Chỗ này có thể truy vấn Database và xuất ra ngay kết quả 
    // => tất cả đều lưu vào biến $content
			include_once('views/sale/mail_form_online.php');
			$contents = ob_get_contents();
			ob_end_clean();
			$subject = 'Bạn đã đặt hàng thành công đang chuyển hàng tới!';
			send_email($email_recive,$name,$contents,$subject);

			header('Location: ?mod=bill&act=list');
		} else {
			header('Location: ?mod=bill&act=list');
		}
	}
	function unsetbill(){
		$ma_hd = $_GET['ma_hd'];

		$bill_detail_model = $this->bill_detail_model->delete($ma_hd);

		$bill_model = $this->bill_model->delete($ma_hd);

		if ($bill_detail_model == 1 && $bill_model == 1) {
			setcookie('huy_hoa_don','msg',time()+3);
			header('Location: ?mod=bill&act=list');
		}
	}
	function list(){
		$data = $this->bill_model->bill_all();
		include_once('views/bill/list.php');
	}
	function detail(){
		$ma_hd = $_GET['ma_hd'];
		$detail = $this->bill_detail_model->find_bill_detail($ma_hd);
		$row = $this->bill_model->find($ma_hd);
		$thong_tin_kh = $this->customer_model->find($row['ma_kh']);
		require_once('views/bill/detail.php');
	}
	function reducequant(){
		$ma_hd = $_GET['ma_hd'];
		$detail = $this->bill_detail_model->find_bill_detail($ma_hd);
		$_SESSION['chi_tiet_san_pham_online'] = $detail;
		foreach ($detail as $value) {
			$product = new Product();
			$so_luong_con = $product->quant($value['ma_sp']);
			$product->reduceQuant($value['ma_sp'],$value['so_luong'],$so_luong_con);
		}
		$bill_update['ma_hd'] = $ma_hd;
		$bill_update['trang_thai'] = 0;
		$this->bill_model->update($bill_update);
		$this->lai_thang_nay();
		setcookie('xu_li_thanh_cong','msg',time()+5);

		$_SESSION['chi_tiet_hoa_don_online'] = $this->bill_model->find($ma_hd);

		header('Location: ?mod=bill&act=sendmailonline');
	}
	function lai_thang_nay(){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$month = date('m');
		$_SESSION['info']['month'] = $month;
		$ma_nv = $_SESSION['info']['ma_nv'];
		$info = $this->bill_model->lai_thang_nay($month,$ma_nv);
		$_SESSION['info']['lai'] = $info['lai'];
	}
}
?>
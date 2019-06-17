<?php 
session_start();
require_once('models/shop.php');
require_once('models/bill.php');
class ShopController{
	
	function billdetail(){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		if (isset($_SESSION['email_khach_hang'])) {
			$email_khach_hang = $_SESSION['email_khach_hang'];
			
			$shop = new Shop();
			$data = $shop->findcustomer($email_khach_hang);
			$ma_kh = $data['ma_kh'];

			$bill = array();
			$bill['ma_kh'] = $ma_kh;
			$bill['ma_hd'] = $ma_kh.'_onl_'.time();
			$bill['ngay_ban'] = date('Y-m-d H:i:s');
			$bill['trang_thai'] = 1;

			$bill_model = new Bill();
			$bill_model->inserthoadon($bill);

			$bill_detail = array();
			$cart = $_SESSION['cart'];
			$tong_tien = 0;
			foreach ($cart as $value) {
				$bill_detail['ma_hd'] = $bill['ma_hd'];
				$bill_detail['ma_sp'] = $value['ma_sp'];
				$bill_detail['ten_sp'] = $value['ten_sp'];
				$bill_detail['so_luong'] = $value['so_luong_mua'];
				$bill_detail['gia_ban'] = $value['don_gia'];
				$bill_detail['thanh_tien'] = $value['so_luong_mua']*$value['don_gia'];
				$tong_tien += $bill_detail['thanh_tien'];
				$showbill[] = $bill_detail;
				$bill_detail_model = new Bill();
				$stt = $bill_detail_model->insertbilldetail($bill_detail);

			}

			$bill_update['ma_hd'] = $bill['ma_hd'];
			$bill_update['tong_tien'] = $tong_tien;
			$bill_update_model = new Bill();
			$bill_update_model->updatetongtien($bill_update);

			$row['ma_hd'] = $bill['ma_hd'];
			$row['ma_kh'] = $ma_kh;
			$thong_tin_khach_hang = $bill_model->findkhach($ma_kh);
			$row['ten_kh'] = $thong_tin_khach_hang['ten_kh'];
			$row['so_dt'] = $thong_tin_khach_hang['so_dt'];
			$row['ma_nv'] = 'Mua hàng trực tuyến';
			$row['ngay_ban'] = $bill['ngay_ban'];
			$row['tong_tien'] = $tong_tien;

			$_SESSION['bill_print']['ma_hd'] = $row['ma_hd'];
			$_SESSION['bill_print']['ma_kh'] = $row['ma_kh'];
			$_SESSION['bill_print']['ten_kh'] = $row['ten_kh'];
			$_SESSION['bill_print']['so_dt'] = $row['so_dt'];
			$_SESSION['bill_print']['ma_nv'] = $row['ma_nv'];
			$_SESSION['bill_print']['ngay_ban'] = $row['ngay_ban'];
			$_SESSION['bill_print']['tong_tien'] = $row['tong_tien'];

			$_SESSION['show_bill'] = $showbill;
			
			require_once('views/headfoot/header.php');
			require_once('views/bill/bill_detail.php');
			require_once('views/headfoot/footer.php');
		}
	}
	function checkemailtontai(){
		$data = $_POST;
		$email = $_POST['email'];
		$shop = new Shop();
		$result = $shop->findemail($email);
		if (isset($result)) {
			$_SESSION['email_khach_hang'] = $email;
			setcookie('thanh_cong','msg',time()+3);
			header('Location: ?mod=shop&act=billdetail');
			
		} else {
			setcookie('email_khong_ton_tai','msg',time()+3);
			header('Location: ?mod=shop&act=bill');
			
		}
	}
	function checkemaildangki(){
		$thong_tin_khach_hang = $_POST;
		$email = $thong_tin_khach_hang['email'];
		$shop = new Shop();
		$data = $shop->findemail($email);
		if (isset($data)) {
			setcookie('email_da_ton_tai','msg',time()+3);
			header('Location: ?mod=shop&act=bill');
		} else {
			$_SESSION['email_khach_hang'] = $thong_tin_khach_hang['email'];
			$shop = new Shop();
			$shop->insertkhachhang($thong_tin_khach_hang);
			setcookie('thanh_cong','msg',time()+3);
			header('Location: ?mod=shop&act=billdetail');
		}
		
	}
	function reduce(){
		$ma_sp = $_GET['ma_sp'];
		if ($_SESSION['cart'][$ma_sp]['so_luong_mua']==1) {
			unset($_SESSION['cart'][$ma_sp]);
			setcookie('xoa_thanh_cong','msg',time()+2);
		} else {
			$_SESSION['cart'][$ma_sp]['so_luong_mua'] --;
			setcookie('giam_di_1','msg',time()+2);
		}
		header('Location: ?mod=shop&act=cart');
		
	}
	function add2cart(){
		$ma_sp = $_GET['ma_sp'];
		$shop = new Shop();
		$data = $shop->find($ma_sp);	
		$so_luong_con = $data['so_luong'];	
		if (isset($_SESSION['cart'][$ma_sp])) {
			$_SESSION['cart'][$ma_sp]['so_luong'] = $so_luong_con;
			if($_SESSION['cart'][$ma_sp]['so_luong_mua'] < $so_luong_con){
				$_SESSION['cart'][$ma_sp]['so_luong_mua'] += 1;
				setcookie('mua_them_1','msg',time()+2);
				header('Location: ?mod=shop&act=cart');
			}else{
				setcookie('het_hang', 'msg', time()+2);
				header('Location: ?mod=shop&act=list&select=shop');
			}	
		} else {
			if($so_luong_con == 0){
				setcookie('het_hang', 'msg', time()+2);
				header('Location: ?mod=shop&act=list&select=shop');

			}else{
				$data['so_luong_mua'] = 1;
				$_SESSION['cart'][$ma_sp] = $data;
				setcookie('add2cart','msg',time()+2);
				header('Location: ?mod=shop&act=cart');
			}			
		}
		
	}

	function cart(){
		if (isset($_GET['select'])) {
			$select = $_GET['select'];
		}
		
		if (isset($_SESSION['cart'])) {
			$cart = $_SESSION['cart'];
		} else {
			
		}
		
		require_once('views/headfoot/header.php');
		require_once('views/shop/cart.php');
		require_once('views/headfoot/footer.php');
	}
	
	function find(){
		$ma_sp = $_GET['ma_sp'];
		$shop = new Shop();
		$row = $shop->find($ma_sp);
		require_once('views/headfoot/header.php');
		require_once('views/shop/detail.php');
		require_once('views/headfoot/footer.php');
	}
	function sapxep(){
		if (isset($_POST['sapxep'])) {
			$sap_xep = $_POST['sapxep'];
			$shop = new Shop();
			$result = $shop->sapxep($sap_xep);
			require_once('views/headfoot/header.php');
			require_once('views/shop/shop_body.php');
			require_once('views/headfoot/footer.php');
		} else {
			header('Location: ?mod=shop&act=list');
		}
		
	}
	function locgia(){
		if (isset($_POST['gia'])) {
			$data = $_POST['gia'];
			$shop = new Shop();
			$result = $shop->locgia($data);
			require_once('views/headfoot/header.php');
			require_once('views/shop/shop_body.php');
			require_once('views/headfoot/footer.php');
		} else {
			header('Location: ?mod=shop&act=list');
		}
		
	}
	function list(){
		if (isset($_GET['select'])) {
			$select = $_GET['select'];
		}
		
		$shop = new Shop();
		$result = $shop->All();
		require_once('views/headfoot/header.php');
		require_once('views/shop/shop_body.php');
		require_once('views/headfoot/footer.php');
	}
	function lockieu(){
		$kieu = $_GET['kieu'];
		if ($kieu == 'bh') {
			$code = 'Bó hoa';
		} elseif ($kieu == 'gh') {
			$code = 'Giỏ hoa';
		} elseif ($kieu == 'kh') {
			$code = 'Kệ hoa';
		} elseif ($kieu == 'hh') {
			$code = 'Hộp hoa';
		}
		$shop = new Shop();
		$result = $shop->lockieu($code);
		require_once('views/headfoot/header.php');
		require_once('views/shop/shop_body.php');
		require_once('views/headfoot/footer.php');
	}
	
	function locchude(){
		$chude = $_GET['chude'];
		if ($chude == 'sn') {
			$code = 'Sinh nhật';
		} elseif ($chude == 'cm') {
			$code = 'Chúc mừng';
		} elseif ($chude == 'hc') {
			$code = 'Hoa cưới';
		} elseif ($chude == 'kt') {
			$code = 'Hoa khai trương';
		}
		$shop = new Shop();
		$result = $shop->locchude($code);
		require_once('views/headfoot/header.php');
		require_once('views/shop/shop_body.php');
		require_once('views/headfoot/footer.php');
	}
	function delete(){
		session_start();
		unset($_SESSION['cart']);
		unset($_SESSION['email_khach_hang']);
		unset($_SESSION['show_bill']);
		unset($_SESSION['bill_print']);
		header('Location: ?mod=shop&act=list');
	}
	function billform(){
		$cart = $_SESSION['cart'];
		$tong_tien = 0;
		foreach ($cart as $value) {
			$tong_tien += $value['so_luong_mua']*$value['don_gia'];
		}

		require_once('views/headfoot/header.php');
		require_once('views/shop/bill_form.php');
		require_once('views/headfoot/footer.php');
	}
	function remove(){
		$ma_sp = $_GET['ma_sp'];
		$shop = new Shop();	
		if (isset($_SESSION['cart'][$ma_sp])) {
			unset($_SESSION['cart'][$ma_sp]);
			setcookie('huy_thanh_cong','msg',time()+2);
		}
		header('Location: ?mod=shop&act=cart');
	}
	function search(){
		$data = $_POST['tim_kiem'];
		$shop = new Shop();
		$result = $shop->search($data);
		require_once('views/headfoot/header.php');
		require_once('views/shop/shop_body.php');
		require_once('views/headfoot/footer.php');
	}
	function billprint(){
		if (isset($_SESSION['bill_print'])&&isset($_SESSION['show_bill'])) {
			require_once('views/bill/bill_print.php');
		} else {
			header('Location: ?mod=shop&cart');
		}
	}
	function contact(){
		require_once('views/headfoot/header.php');
		require_once('views/shop/contact.php');
		require_once('views/headfoot/footer.php');
	}
}
?>
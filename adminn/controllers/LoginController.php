<?php 
include_once('models/login.php');
class LoginController{
	var $login_model;
	function __construct(){
		$this->login_model = new Login();
	}
	function form(){
		
		include_once('views/login/login_form.php');
		
	}
	function checkcaptcha(){

		require_once('recaptcha_login.php');
		
	}
	function checklogin(){
		$data = $_SESSION['login_data'];
	
		$result = $this->login_model->checklogin($data);

		if (isset($result)) {
			if ($result['trang_thai']==1) {
				session_start();
				$_SESSION['info'] = $result;
				$_SESSION['islogin'] = 1;
				$this->lai_thang_nay();
				unset($_SESSION['login_data']);
				setcookie('dang_nhap_thanh_cong','msg',time()+4);
				header('Location: index.php?mod=dashbroad');
			} else {
				setcookie('dang_nhap_that_bai','msg',time()+4);
				unset($_SESSION['login_data']);
				header('Location: index.php?mod=login&act=form');
			}
			
		} else {
			setcookie('dang_nhap_that_bai','msg',time()+4);
			unset($_SESSION['login_data']);
			header('Location: index.php?mod=login&act=form');
		}
	}

	function lai_thang_nay(){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$month = date('m');
		$_SESSION['info']['month'] = $month;
		$ma_nv = $_SESSION['info']['ma_nv'];
		$info = $this->login_model->lai_thang_nay($month,$ma_nv);
		$_SESSION['info']['lai'] = $info['lai'];
	}
	
}
?>
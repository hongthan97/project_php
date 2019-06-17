<?php 
require_once('models/settings.php');
class SettingsController{
	var $settings_model;

	function __construct(){
		$this->settings_model = new Settings();
	}

	function settings(){
		$ma_nv = $_SESSION['info']['ma_nv'];
		$row = $this->settings_model->find($ma_nv);
		require_once('views/settings/settings.php');
	}
	function update(){
		$data = $_POST;
		$ma_nv = $data['ma_nv'];
		$checkmail = $this->settings_model->checkmail($data['email']);
		if ($data['ma_nv']!=$checkmail['ma_nv']&&isset($checkmail)) {
			setcookie('email_da_ton_tai_update','msg',time()+3);
			header("Location: index.php?mod=settings&act=settings");
		} else {
			$file = "public/img_nv/";
			$name_file = basename($_FILES['img_nv']['name']);
			$link_file = $file.basename($_FILES['img_nv']['name']);
			move_uploaded_file($_FILES['img_nv']['tmp_name'], $link_file);
			if (!empty($_FILES['img_nv']['name'])) {
				$data['img'] = $name_file;
				$_SESSION['info']['img'] = $name_file;
			}
			$status = $this->settings_model->update($data);
			if($status == 1){
				setcookie('cap_nhat_thanh_cong_settings','msg',time()+4);

				header('Location: index.php?mod=settings&act=settings');
			}else{
                // Thông báo lỗi
			}
		}
	}
	function password(){
		$data = $_POST;
		$status = $this->settings_model->change_pass($data);
		if($status == NULL){
			setcookie('doi_mat_khau_settings','msg',time()+4);
			header('Location: index.php?mod=settings&act=settings');
		}else{
			setcookie('mat_khau_cu_sai_settings', 'msg',time()+3);
			header("Location: index.php?mod=settings&act=settings");
		}
	}
}
?>
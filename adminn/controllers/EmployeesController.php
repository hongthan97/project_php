<?php
require_once('models/employees.php'); 

class EmployeesController{
	var $employees_model;

	function __construct(){
		$this->employees_model = new Employees();
	}
	function delete(){
		$code = $_GET['ma_nv'];
		$status = $this->employees_model->delete($code);
		if($status == 1){
			setcookie('xoa_thanh_cong', 'msg', time()+4);
			header('Location: index.php?mod=employees&act=list');
		}else{
                // Thông báo lỗi
		}
	}
	function password(){
		$data = $_POST;
		$status = $this->employees_model->change_pass($data);
		if($status == NULL){
			setcookie('doi_mat_khau','msg',time()+4);
			header('Location: index.php?mod=employees&act=list');
		}else{
			setcookie('mat_khau_cu_sai', 'msg',time()+3);
			header("Location: index.php?mod=employees&act=edit&ma_nv=$status");
		}
	}
	function update(){
		$data = $_POST;
		$ma_nv = $data['ma_nv'];
		$checkmail = $this->employees_model->checkmail($data['email']);

		if ($data['ma_nv']!=$checkmail['ma_nv']&&isset($checkmail)) {
			setcookie('email_da_ton_tai_update','msg',time()+3);
			header("Location: index.php?mod=employees&act=edit&ma_nv=$ma_nv");
		} else {
			$file = "public/img_nv/";
			$name_file = basename($_FILES['img_nv']['name']);
			$link_file = $file.basename($_FILES['img_nv']['name']);
			move_uploaded_file($_FILES['img_nv']['tmp_name'], $link_file);
			if (!empty($_FILES['img_nv']['name'])) {
				$data['img'] = $name_file;
				$_SESSION['info']['img'] = $name_file;
			}
			$status = $this->employees_model->update($data);
			if($status == 1){
				setcookie('cap_nhat_thanh_cong','msg',time()+4);

				header('Location: index.php?mod=employees&act=list');
			}else{
                // Thông báo lỗi
			}
		}
		
		
	}
	function edit(){
		$code = $_GET['ma_nv'];
		$row = $this->employees_model->find($code);
		require_once('views/employees/edit.php');
	}
	function list(){
		$data = $this->employees_model->All();
		require_once('views/employees/list.php');

	}

	function detail(){
		$code = $_GET['ma_nv'];
		$row = $this->employees_model->find($code);
		require_once('views/employees/detail.php');
	}

	function add(){
		require_once('views/employees/add.php');
	}

	function store(){
		$data = $_POST;
		$checkmail = $this->employees_model->checkmail($data['email']);

		if (isset($checkmail)) {
			setcookie('email_da_ton_tai_store','msg',time()+3);
			header('Location: index.php?mod=employees&act=add');
		} else {
			$mat_khau = md5($data['mat_khau']);
			$file = "public/img_nv/";
			$name_file = basename($_FILES['img_nv']['name']);
			$link_file = $file.basename($_FILES['img_nv']['name']);
			move_uploaded_file($_FILES['img_nv']['tmp_name'], $link_file);
			if (!empty($_FILES['img_nv']['name'])) {
				$data['img'] = $name_file;
			}
			$data['mat_khau'] = $mat_khau;
			unset($data['xac_nhan_mat_khau']);
			$status = $this->employees_model->insert($data);
			if($status == 1){
				setcookie('them_thanh_cong','msg',time()+4);
				header('Location: index.php?mod=employees&act=list');
			}else{
                // Thông báo lỗi
			}
		}
		
	}
}
?>


<?php 
require_once('models/types.php');

class TypesController{
	var $type_model;

	function __construct(){
		$this->type_model = new Type();
	}
	function update(){
		$data = $_POST;
		$file = "public/img_sp/";
		$name_file = basename($_FILES['img_sp']['name']);
		$link_file = $file.basename($_FILES['img_sp']['name']);
		move_uploaded_file($_FILES['img_sp']['tmp_name'], $link_file);
		if (!empty($_FILES['img_sp']['name'])) {
			$data['img'] = $name_file;
		}

		$status = $this->type_model->update($data);
		
		if($status == 1){
			setcookie('cap_nhat_thanh_cong','msg',time()+4);
			header('Location: index.php?mod=types&act=list');
		}else{
                // Thông báo lỗi
		}
	}
	function store(){
		//b1: lấy dữ liệu bên add.php
		
		$data = $_POST;
		$file = "public/img_sp/";
		$name_file = basename($_FILES['img_sp']['name']);
		$link_file = $file.basename($_FILES['img_sp']['name']);
		move_uploaded_file($_FILES['img_sp']['tmp_name'], $link_file);
		if (!empty($_FILES['img_sp']['name'])) {
			$data['img'] = $name_file;
		}
		//gọi phương thức model
		$status = $this->type_model->insert($data);
		if($status == 1){
			setcookie('them_thanh_cong','msg',time()+4);
			header('Location: index.php?mod=types&act=list');
		}else{
                // Thông báo lỗi
		}
	}
	function edit(){
		$code = $_GET['ma_loai'];
		
		$row = $this->type_model->find($code);
		require_once('views/types/edit.php');
	}
	function delete(){
		$code = $_GET['ma_loai'];
		
		$status = $this->type_model->delete($code);
		if($status == 1){
			setcookie('xoa_thanh_cong','msg',time()+4);
			header('Location: index.php?mod=types&act=list');
		}else{
                // Thông báo lỗi
		}
	}
	function list(){
		
		$data = $this->type_model->All();

		require_once('views/types/list.php');
	}
	function add(){
		require_once('views/types/add.php');
	}
}
?>
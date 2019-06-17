<?php 
require_once('models/products.php');

class ProductsController{
	var $product_model;

	function __construct(){
		$this->product_model = new Product();
	}

	function edit(){
		$code = $_GET['ma_sp'];
		
		$row = $this->product_model->find($code);
		require_once('views/products/edit.php');
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
		
		$status = $this->product_model->update($data);
		if($status == 1){
			setcookie('cap_nhat_thanh_cong','msg',time()+4);
			header('Location: index.php?mod=products&act=list');
		}else{
                // Thông báo lỗi
		}
	}


	function add(){
		require_once('views/products/add.php');
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
		$status = $this->product_model->insert($data);
		if($status == 1){
			setcookie('them_thanh_cong','msg',time()+4);
			header('Location: index.php?mod=products&act=list');
		}else{
                // Thông báo lỗi
		}
	}
	function list(){
		
		$data = $this->product_model->All();
		require_once('views/products/list.php');
	}

	function detail(){
		$ma_sp = $_GET['ma_sp'];
		
		$row = $this->product_model->find($ma_sp);
		require_once('views/products/detail.php');

	}

	function delete(){
		$code = $_GET['ma_sp'];
		
		$status = $this->product_model->delete($code);
		if($status == 1){
			setcookie('xoa_thanh_cong','msg',time()+4);
			header('Location: index.php?mod=products&act=list');
		}else{
                // Thông báo lỗi
		}
	}
}
?>



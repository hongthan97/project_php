<?php 
include_once('models/customer.php');

class CustomerController{
	var $customer_model;

	function __construct(){
		$this->customer_model = new Customer();
	}
	function update(){
		$data = $_POST;
		$ma_kh = $data['ma_kh'];
		$checkmail = $this->customer_model->checkmail($data['email']);
		
		if ($data['ma_kh']!=$checkmail['ma_kh']&&isset($checkmail)) {
			setcookie('email_da_ton_tai_update','msg',time()+3);
			header("Location: index.php?mod=customer&act=edit&ma_kh=$ma_kh");
		} else {
			$status = $this->customer_model->update($data);
			if($status == 1){
				setcookie('cap_nhat_thanh_cong', 'msg', time()+4);
				header('Location: index.php?mod=customer&act=list');
			}else{
                // Thông báo lỗi
			}
		}
	}
	function store(){
		//b1: lấy dữ liệu bên add.php
		$data = $_POST;
		$checkmail = $this->customer_model->checkmail($data['email']);
		if (isset($checkmail)) {
			setcookie('email_da_ton_tai_store','msg',time()+3);
			header('Location: index.php?mod=customer&act=add');
		} else {
			$status = $this->customer_model->insert($data);
			if($status == 1){
				setcookie('them_thanh_cong', 'msg', time()+4);
				header('Location: index.php?mod=customer&act=list');
			}else{
                // Thông báo lỗi
			}
		}
		
	}

	function delete(){
		$code = $_GET['ma_kh'];

		$status = $this->customer_model->delete($code);

		if($status == 1){
			setcookie('xoa_thanh_cong', 'msg', time()+4);
			header('Location: index.php?mod=customer&act=list');
		}else{
                // Thông báo lỗi
		}
	}

	function list(){
		$data = $this->customer_model->All();
		include_once('views/customer/list.php');
	}

	function detail(){
		$code = $_GET['ma_kh'];
		$row = $this->customer_model->find($code);
		require_once('views/customer/detail.php');
	}

	function add(){
		require_once('views/customer/add.php');
	}

	function edit(){
		$code = $_GET['ma_kh'];
		$row = $this->customer_model->find($code);
		require_once('views/customer/edit.php');
	}
}
?>
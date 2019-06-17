<?php 
require_once('models/dashbroad.php');
class DashbroadController{
	var $dashbroad_model;

	function __construct(){
		$this->dashbroad_model = new Dashbroad();
	}
	function view(){
		
		$hoa_don_chua_xu_li = $this->dashbroad_model->chua_xu_li();
		$so_nhan_vien = $this->dashbroad_model->so_nhan_vien();
		$so_san_pham = $this->dashbroad_model->so_san_pham();
		$tong_so_hd = $this->dashbroad_model->tong_so_hd();
		$lien_he = $this->dashbroad_model->lien_he();
		
		require_once('views/dashbroad/dashbroad.php');
	}
}
?>
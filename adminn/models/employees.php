<?php 
include_once('model.php');
class Employees extends Model{
	var $table_name = 'nhan_vien';

	var $primary_key = 'ma_nv';

	function change_pass($nhan_vien){
		
		$mat_khau_cu = md5($nhan_vien['nhap_lai_mat_khau']);
		if ($mat_khau_cu!=$nhan_vien['mat_khau']) {
			
			return $nhan_vien['ma_nv'];
		} else {
			$mat_khau = md5($nhan_vien['new_pass']);
			$query = "UPDATE nhan_vien SET mat_khau='".$mat_khau."' WHERE ma_nv='".$nhan_vien['ma_nv']."'";
			$result = $this->conn->query($query);
			
			return NULL;
		}
		
	}
	function checkmail($email){
		$query = "SELECT * FROM nhan_vien WHERE email = '".$email."'";
		$result = $this->conn->query($query);
		$tai_khoan = $result->fetch_assoc();
		
		return $tai_khoan;
	}
	
}
?>
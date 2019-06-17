<?php
include_once('model.php'); 
class Customer extends Model{
	var $table_name = 'khach_hang';

	var $primary_key = 'ma_kh';

	function checkmail($email){
		$query = "SELECT * FROM khach_hang WHERE email = '".$email."'";
		$result = $this->conn->query($query);
		$tai_khoan = $result->fetch_assoc();
		
		return $tai_khoan;
	}
}
?>
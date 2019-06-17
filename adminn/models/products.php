<?php

include_once('model.php');
class Product extends Model{
	
	var $table_name = 'products';

	var $primary_key = 'ma_sp';

	function reduceQuant($ma_sp,$so_luong_mua,$so_luong_hien_tai){
		$so_luong_con = $so_luong_hien_tai - $so_luong_mua;
		$query = "UPDATE ".$this->table_name." SET so_luong = ".$so_luong_con." WHERE ".$this->primary_key." = '".$ma_sp."'";

		$result = $this->conn->query($query);

		return $result;
	}
	function quant($ma_sp){
		$query = "SELECT * FROM ".$this->table_name." WHERE " .$this->primary_key." ='".$ma_sp."' ";

		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();

		return $row['so_luong'];
	}
}

?>
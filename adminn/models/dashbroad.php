<?php 
include_once('model.php');
/**
 * 
 */
class Dashbroad extends Model
{
	
	function chua_xu_li(){
		$query = "SELECT COUNT(*) AS chua_xu_li FROM hoa_don WHERE trang_thai = 1";
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
	}
	function so_nhan_vien(){
		$query = "SELECT COUNT(ma_nv) AS so_nhan_vien FROM nhan_vien";
		$result = $this->conn->query($query);
		
		$row = $result->fetch_assoc();
		
		return $row;
	}
	function so_san_pham(){
		$query = "SELECT COUNT(ma_sp) AS so_san_pham FROM products";
		$result = $this->conn->query($query);
		
		$row = $result->fetch_assoc();
		
		return $row;
	}
	function tong_so_hd(){
		$query = "SELECT COUNT(ma_hd) AS tong_so_hd FROM hoa_don";
		$result = $this->conn->query($query);
		
		$row = $result->fetch_assoc();
		
		return $row;
	}
	function lien_he(){
		$query = "SELECT * FROM nhan_vien WHERE trang_thai = 1 LIMIT 4";
		$result = $this->conn->query($query);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
}
?>
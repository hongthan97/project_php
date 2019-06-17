<?php
require_once('connect.php'); 
class Shop{
	var $conn;
	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}
	function search($data){
		$query = "SELECT * FROM products WHERE ten_sp LIKE N'%".$data."%'";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		
		return $data;
	}
	function insertkhachhang($data){
		
		// Cau lenh truy van co so du lieu
		$query = "INSERT INTO khach_hang (ten_kh,so_dt,email,dia_chi)  VALUES ('".$data['ten_kh']."','".$data['so_dt']."','".$data['email']."','".$data['dia_chi']."')";

		// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);

	}
	function sapxep($code){
		$data = $code;
		
		if ($data == 1) {
			$query = "SELECT * FROM products ORDER BY don_gia ASC";
		} else {
			$query = "SELECT * FROM products ORDER BY don_gia DESC";
		}
		
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find($code){
		$query = "SELECT * FROM products WHERE ma_sp = '".$code."'";
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();

		return $row;
	}
	function locgia($data){
		$so_luong = $data;
		if ($so_luong==1) {
			$query = "SELECT * FROM products WHERE don_gia BETWEEN 10000 AND 100000 ORDER BY don_gia ASC";
		} elseif ($so_luong==2) {
			$query = "SELECT * FROM products WHERE don_gia BETWEEN 100000 AND 500000 ORDER BY don_gia ASC";
		} elseif ($so_luong==3) {
			$query = "SELECT * FROM products WHERE don_gia BETWEEN 500000 AND 2000000 ORDER BY don_gia ASC";
		}
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function All(){
		$query = "SELECT * FROM products LIMIT 10";

	// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function lockieu($code){
		$query = "SELECT * FROM products WHERE kieu_dang = '".$code."'";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	
	function locchude($code){
		$query = "SELECT * FROM products WHERE chu_de = '".$code."'";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function findcustomer($code){
		$query = "SELECT * FROM khach_hang WHERE email = '".$code."'";
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
	}
	function findemail($code){
		$query = "SELECT * FROM khach_hang WHERE email = '".$code."'";
		$result = $this->conn->query($query);
		$tai_khoan = $result->fetch_assoc();
		return $tai_khoan;
	}
}
?>
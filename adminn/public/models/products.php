<?php
include_once('models/connect.php');
class Product{
	var $conn;
	
	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}

	function All(){
		require_once('connect.php');
			// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM products";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	function find($ma_sp){
		require_once('connect.php');

		$query = "SELECT * FROM products WHERE ma_sp ='".$ma_sp."' ";

		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();

		return $row;
	}

	function change($san_pham){
		require_once('connect.php');
	    $file = "public/img_sp/";
	    $name_file = basename($_FILES['img_sp']['name']);
	    $link_file = $file.basename($_FILES['img_sp']['name']);
	    move_uploaded_file($_FILES['img_sp']['tmp_name'], $link_file);

	    if (empty($_FILES['img_sp']['name'])) {
	    	$query = "UPDATE products SET kieu_dang='".$san_pham['kieu_dang']."',chu_de='".$san_pham['chu_de']."',ten_sp='".$san_pham['ten_sp']."',so_luong='".$san_pham['so_luong']."',don_gia='".$san_pham['don_gia']."' WHERE ma_sp='".$san_pham['ma_sp']."'";
	    	
	    } else {
	    	$query = "UPDATE products SET kieu_dang='".$san_pham['kieu_dang']."',chu_de='".$san_pham['chu_de']."',ten_sp='".$san_pham['ten_sp']."',so_luong='".$san_pham['so_luong']."',don_gia='".$san_pham['don_gia']."',anh_sp='".$name_file."' WHERE ma_sp='".$san_pham['ma_sp']."'";
	    	 
	    }
	    
	    setcookie('cap_nhat_thanh_cong','msg',time()+4);

		$row = $this->conn->query($query);

		return $row;
	}

	function insert($san_pham){
		require_once('connect.php');
		$file = "public/img_sp/";
		$name_file = basename($_FILES['img_sp']['name']);
		$link_file = $file.basename($_FILES['img_sp']['name']);
		move_uploaded_file($_FILES['img_sp']['tmp_name'], $link_file);
		$query = "INSERT INTO products (kieu_dang,chu_de,ten_sp,so_luong,don_gia,anh_sp) VALUES ('".$san_pham['kieu_dang']."','".$san_pham['chu_de']."','".$san_pham['ten_sp']."','".$san_pham['so_luong']."','".$san_pham['don_gia']."','".$name_file."')";
		$status = $this->conn->query($query);
		setcookie('them_thanh_cong','msg',time()+4);
		return $status;
	}

	function clear($ma_sp){
		require_once('connect.php');
		$query = "DELETE FROM products WHERE ma_sp = '".$ma_sp."'";
		$status = $this->conn->query($query);
		setcookie('xoa_thanh_cong','msg',time()+4);
		return $status;
	}
}

?>
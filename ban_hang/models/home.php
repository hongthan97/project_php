<?php 
require_once('connect.php');
class Home{
	var $conn;
	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}
	function All(){
		$query = "SELECT * FROM loai_san_pham";

	// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function update_bh($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 1";
		$row = $this->conn->query($query);
	}
	function update_cm($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 2";
		$row = $this->conn->query($query);
	}
	function update_gh($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 3";
		$row = $this->conn->query($query);
	}
	function update_hc($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 4";
		$row = $this->conn->query($query);
	}
	function update_kt($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 5";
		$row = $this->conn->query($query);
	}
	function update_hh($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 6";
		$row = $this->conn->query($query);
	}
	function update_kh($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 7";
		$row = $this->conn->query($query);
	}
	function update_sn($data){
		$query = "UPDATE loai_san_pham SET min = '".$data."' WHERE ma_loai = 8";
		$row = $this->conn->query($query);
	}
	function find_bh(){
		$query = "SELECT * FROM products WHERE kieu_dang = 'Bó hoa' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find_gh(){
		$query = "SELECT * FROM products WHERE kieu_dang = 'Giỏ hoa' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find_kh(){
		$query = "SELECT * FROM products WHERE kieu_dang = 'Kệ hoa' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find_hh(){
		$query = "SELECT * FROM products WHERE kieu_dang = 'Hộp hoa' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find_kt(){
		$query = "SELECT * FROM products WHERE chu_de = 'Hoa khai trương' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find_sn(){
		$query = "SELECT * FROM products WHERE chu_de = 'Sinh nhật' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find_cm(){
		$query = "SELECT * FROM products WHERE chu_de = 'Chúc mừng' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function find_hc(){
		$query = "SELECT * FROM products WHERE chu_de = 'Hoa cưới' ORDER BY don_gia ASC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
}
?>
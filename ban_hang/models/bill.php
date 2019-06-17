<?php 
require_once('connect.php'); 
class Bill{
	var $conn;
	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}
	function insertbilldetail($data){
		// Cau lenh truy van co so du lieu
		$query = "INSERT INTO chi_tiet_hoa_don (ma_hd,ma_sp,ten_sp,so_luong,gia_ban,thanh_tien)  VALUES ('".$data['ma_hd']."','".$data['ma_sp']."','".$data['ten_sp']."','".$data['so_luong']."','".$data['gia_ban']."','".$data['thanh_tien']."')";

		// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);
	}
	function inserthoadon($data){
		// Cau lenh truy van co so du lieu
		$query = "INSERT INTO hoa_don (ma_hd,ma_kh,ngay_ban,trang_thai)  VALUES ('".$data['ma_hd']."','".$data['ma_kh']."','".$data['ngay_ban']."','".$data['trang_thai']."')";

		// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);

	}
	function updatetongtien($data){

		$query = "UPDATE hoa_don SET tong_tien='".$data['tong_tien']."' WHERE ma_hd='".$data['ma_hd']."'";
	    
	    
		$result = $this->conn->query($query);
	}
	function findkhach($code){
		$query = "SELECT * FROM khach_hang WHERE ma_kh = '".$code."'";
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();

		return $row;
	}
}
?>
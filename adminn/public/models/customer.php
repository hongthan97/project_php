<?php
include_once('models/connect.php'); 
class Customer{
	var $conn;

	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}

	function update($data){
		$query = "UPDATE khach_hang SET ten_kh='".$data['ten_kh']."',so_dt='".$data['so_dt']."',email='".$data['email']."',dia_chi='".$data['dia_chi']."' WHERE ma_kh='".$data['ma_kh']."'";


		$result = $this->conn->query($query);

		return $result;
	}

	function insert($khach_hang){

		$query = "INSERT INTO khach_hang (ten_kh,so_dt,email,dia_chi)  VALUES ('".$khach_hang['ten_kh']."','".$khach_hang['so_dt']."','".$khach_hang['email']."','".$khach_hang['dia_chi']."')";

		// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);

		return $result;
	}

	function All(){

		$query = "SELECT * FROM khach_hang";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;

	}

	function find($ma_kh){

		$query = "SELECT * FROM khach_hang WHERE ma_kh ='".$ma_kh."' ";

		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();

		return $row;

	}

	function delete($ma_kh){
		
		$query = "DELETE FROM khach_hang WHERE ma_kh = '".$ma_kh."'";
		$status = $this->conn->query($query);

		return $status;
	}
}
?>
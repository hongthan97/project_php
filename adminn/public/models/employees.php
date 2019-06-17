<?php 
include_once('models/connect.php');
class Employees{
	var $conn;

	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}
	function update($nhan_vien){
		
		$file = "public/img_nv/";
		$name_file = basename($_FILES['img_nv']['name']);
		$link_file = $file.basename($_FILES['img_nv']['name']);
		move_uploaded_file($_FILES['img_nv']['tmp_name'], $link_file);

		if (empty($_FILES['img_nv']['name'])) {
			$query = "UPDATE nhan_vien SET ten_nv='".$nhan_vien['ten_nv']."',so_dt='".$nhan_vien['so_dt']."',email='".$nhan_vien['email']."',trang_thai='".$nhan_vien['trang_thai']."' WHERE ma_nv='".$nhan_vien['ma_nv']."'";

		} else {
			$query = "UPDATE nhan_vien SET ten_nv='".$nhan_vien['ten_nv']."',so_dt='".$nhan_vien['so_dt']."',email='".$nhan_vien['email']."',trang_thai='".$nhan_vien['trang_thai']."',anh_nv='".$name_file."' WHERE ma_nv='".$nhan_vien['ma_nv']."'";

		}


		$row = $this->conn->query($query);

		return $row;
	}
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
	function All(){
		

		$query = "SELECT * FROM nhan_vien";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->conn->query($query);
		$nhan_vien = array();
		while ($row = $result->fetch_assoc()) {
			$nhan_vien[] = $row;
		}

		return $nhan_vien;

	}

	function find($ma_nv){
		
		$query = "SELECT * FROM nhan_vien WHERE ma_nv ='".$ma_nv."' ";

		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();

		return $row;

	}

	function insert($nhan_vien){
		
		$mat_khau = md5($nhan_vien['mat_khau']);
		$file = "public/img_nv/";
		$name_file = basename($_FILES['img_nv']['name']);
		$link_file = $file.basename($_FILES['img_nv']['name']);
		move_uploaded_file($_FILES['img_nv']['tmp_name'], $link_file);
		$query = "INSERT INTO nhan_vien (ten_nv,so_dt,email,mat_khau,trang_thai,anh_nv)  VALUES ('".$nhan_vien['ten_nv']."','".$nhan_vien['so_dt']."','".$nhan_vien['email']."','".$mat_khau."','".$nhan_vien['trang_thai']."','".$name_file."')";
		$status = $this->conn->query($query);
		
		return $status;
	}

	function delete($ma_nv){
		$query = "DELETE FROM nhan_vien WHERE ma_nv = '".$ma_nv."'";
		$status = $this->conn->query($query);

		return $status;
	}
}
?>
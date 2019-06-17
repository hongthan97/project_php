<?php 
include_once('models/connect.php');
class Login{
	var $conn;

	function __construct(){
		$conn_obj = new Connection();

		$this->conn = $conn_obj->conn;
	}

	function checklogin($data){
		$email = $data['email'];
		$mat_khau = md5($data['mat_khau']);
		$query="SELECT * FROM nhan_vien WHERE email='".$email."' and mat_khau='".$mat_khau."'";
		$result = $this->conn->query($query);
		$tai_khoan = $result->fetch_assoc();
		return $tai_khoan;
	}
	function lai_thang_nay($month,$code){
		$query = "SELECT
		hoa_don.ma_nv,
		nhan_vien.ten_nv,
		nhan_vien.img,
		COUNT(hoa_don.ma_hd) AS so_hoa_don,
		chi_tiet_hoa_don.gia_ban * SUM(chi_tiet_hoa_don.so_luong) - products.gia_nhap * SUM(chi_tiet_hoa_don.so_luong) AS lai
		FROM
		hoa_don,
		nhan_vien,
		chi_tiet_hoa_don,
		products
		WHERE
		hoa_don.ma_nv = nhan_vien.ma_nv
		AND hoa_don.trang_thai = 0
		AND chi_tiet_hoa_don.ma_hd = hoa_don.ma_hd
		AND products.ma_sp = chi_tiet_hoa_don.ma_sp
		AND MONTH (hoa_don.ngay_ban) = '".$month."'
		AND hoa_don.ma_nv = '".$code."'
		GROUP BY
		hoa_don.ma_nv
		ORDER BY
		lai DESC";

		$result = $this->conn->query($query);
		
		$row = $result->fetch_assoc();
			
		return $row;
	}
}

?>
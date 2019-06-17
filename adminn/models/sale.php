<?php

include_once('model.php');
class Sale extends Model{
	
	var $table_name = 'hoa_don';

	var $primary_key = 'ma_hd';

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
<?php 
include_once('model.php');
/**
 * 
 */
class Statistic extends Model
{
	function tien_lai(){
		$query = "SELECT
		MONTH (hoa_don.ngay_ban) AS thang,
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
		GROUP BY
		MONTH (hoa_don.ngay_ban)
		ORDER BY
		lai DESC";

		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function lai_thang($thang){
		$query = "SELECT
		MONTH (hoa_don.ngay_ban) AS thang,
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
		AND MONTH (hoa_don.ngay_ban) = '".$thang."'
		GROUP BY
		MONTH (hoa_don.ngay_ban)
		ORDER BY
		lai DESC";

		$result = $this->conn->query($query);
		
		$data = $result->fetch_assoc();
		return $data;
	}
	function thong_ke_thu_chi(){
		$query = "SELECT
		products.ten_sp,
		products.ma_sp,
		SUM(chi_tiet_hoa_don.so_luong) AS so_luong_da_ban,
		products.gia_nhap,
		products.gia_nhap * SUM(chi_tiet_hoa_don.so_luong) AS tong_gia_nhap,
		products.don_gia,
		chi_tiet_hoa_don.gia_ban * SUM(chi_tiet_hoa_don.so_luong) AS tong_thanh_tien,
		chi_tiet_hoa_don.gia_ban * SUM(chi_tiet_hoa_don.so_luong) - products.gia_nhap * SUM(chi_tiet_hoa_don.so_luong) AS lai
		FROM
		products,
		chi_tiet_hoa_don,
		hoa_don
		WHERE
		products.ten_sp = chi_tiet_hoa_don.ten_sp
		AND products.ma_sp = chi_tiet_hoa_don.ma_sp
		AND hoa_don.ma_hd = chi_tiet_hoa_don.ma_hd
		AND hoa_don.trang_thai = 0
		GROUP BY
		ten_sp,
		ma_sp";

		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function thong_ke_san_pham(){
		$query = "SELECT
		chi_tiet_hoa_don.ma_sp,
		chi_tiet_hoa_don.ten_sp,
		products.img,
		SUM(chi_tiet_hoa_don.so_luong) AS so_lan_duoc_chon,
		SUM(chi_tiet_hoa_don.thanh_tien) AS tong_tien
		FROM
		chi_tiet_hoa_don,
		products
		WHERE
		chi_tiet_hoa_don.ma_sp = products.ma_sp
		GROUP BY
		chi_tiet_hoa_don.ma_sp
		ORDER BY
		SUM(chi_tiet_hoa_don.so_luong) DESC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function thong_ke_hoa_don_theo_thang(){
		$query = "SELECT
		MONTH (ngay_ban) AS thang,
		COUNT(ma_hd) AS so_hoa_don,
		SUM(tong_tien) AS tong_tien_ban_duoc
		FROM
		hoa_don
		GROUP BY
		thang
		ORDER BY
		thang DESC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		
		return $data;

	}
	function thong_ke_khach_hang(){
		$query = "SELECT
		COUNT(hoa_don.ma_hd) AS so_hoa_don,
		hoa_don.ma_kh,
		khach_hang.ten_kh,
		SUM(hoa_don.tong_tien) AS tien_mua
		FROM
		hoa_don,
		khach_hang
		WHERE
		hoa_don.trang_thai = 0 AND
		hoa_don.ma_kh = khach_hang.ma_kh
		GROUP BY
		hoa_don.ma_kh
		ORDER BY
		SUM(hoa_don.tong_tien) DESC";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;

	}
	function tong_tien_theo_thang(){
		$query = "SELECT MONTHNAME(ngay_ban) AS thang,SUM(tong_tien) AS tong_tien FROM hoa_don GROUP BY MONTH(ngay_ban)";
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function thong_ke_nhan_vien(){
		$query = "SELECT
		ma_nv,
		COUNT(ma_hd) AS so_hoa_don,
		SUM(tong_tien) AS tong_tien_ban_duoc
		FROM
		hoa_don
		WHERE
		trang_thai = 0
		GROUP BY
		ma_nv
		ORDER BY
		SUM(tong_tien) DESC";

		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function lai_nhan_vien(){
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
		GROUP BY
		hoa_don.ma_nv
		ORDER BY
		lai DESC
		
		";

		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
}
?>
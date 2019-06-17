<?php 
require_once('models/statistic.php');
class StatisticController{
	var $statistic_model;

	function __construct(){
		$this->statistic_model = new Statistic();
	}
	function list(){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$thang = date("m");
		$lai_thang = $this->statistic_model->lai_thang($thang);

		$thu_chi = $this->statistic_model->thong_ke_thu_chi();

		$hoa_don_theo_thang = $this->statistic_model->thong_ke_hoa_don_theo_thang();

		$thong_ke_khach_hang = $this->statistic_model->thong_ke_khach_hang();
		$best_customer = $thong_ke_khach_hang[0];

		$tong_tien_theo_thang = $this->statistic_model->tong_tien_theo_thang();

		$thong_ke_san_pham = $this->statistic_model->thong_ke_san_pham();
		$san_pham_ban_chay = $thong_ke_san_pham[0];

		$thong_ke_nhan_vien = $this->statistic_model->thong_ke_nhan_vien();

		$thong_ke_lai_nhan_vien = $this->statistic_model->lai_nhan_vien();
		$best_seller = $thong_ke_lai_nhan_vien[0];

		$tien_lai = $this->statistic_model->tien_lai();
		require_once('views/statistic/statistic.php');
	}
}
?>
<?php 
	require_once('models/home.php');
	class HomeController{
		function list(){
			$home = new Home();
			$result = $home->All();

			$bo_hoa = $home->find_bh();
			$bo_hoa_min = $bo_hoa[0]['don_gia'];
			$home->update_bh($bo_hoa_min);

			$gio_hoa = $home->find_gh();
			$gio_hoa_min = $gio_hoa[0]['don_gia'];
			$home->update_gh($gio_hoa_min);

			$ke_hoa = $home->find_kh();
			$ke_hoa_min = $ke_hoa[0]['don_gia'];
			$home->update_kh($ke_hoa_min);

			$hop_hoa = $home->find_hh();
			$hop_hoa_min = $hop_hoa[0]['don_gia'];
			$home->update_hh($hop_hoa_min);

			$sinh_nhat = $home->find_sn();
			$sinh_nhat_min = $sinh_nhat[0]['don_gia'];
			$home->update_sn($sinh_nhat_min);

			$chuc_mung = $home->find_cm();
			$chuc_mung_min = $chuc_mung[0]['don_gia'];
			$home->update_cm($chuc_mung_min);

			$hoa_cuoi = $home->find_hc();
			$hoa_cuoi_min = $hoa_cuoi[0]['don_gia'];
			$home->update_hc($hoa_cuoi_min);

			$hoa_khai_truong = $home->find_kt();
			$hoa_khai_truong_min = $hoa_khai_truong[0]['don_gia'];
			$home->update_kt($hoa_khai_truong_min);
			require_once('views/home/home.php');
		}
	}
 ?>
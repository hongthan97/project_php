<?php 
	class Checklogin{
		function check(){
			if (!isset($_SESSION['islogin'])) {
				header('Location: index.php?mod=login&act=form');
			}
		}
		function checkpermission(){
		if (isset($_SESSION['info'])) {
			if ($_SESSION['info']['loai_tk']!='admin') {
				header('Location: index.php?mod=products&act=list');
			}
		}
	}
	}
 ?>
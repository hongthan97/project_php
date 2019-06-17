<?php 
include_once('models/logout.php');
class LogoutController{
	function logout(){
		session_start();
		session_destroy();
		setcookie('logout','msg',time()+3);
		header('Location: index.php?mod=login&act=form');
	}
}
?>
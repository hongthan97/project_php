<?php 
$mod = '';
$act = ''; 
if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
}
if (isset($_GET['act'])) {
	$act = $_GET['act'];
}
switch ($mod) {
	case 'home':
	require_once('controllers/HomeController.php');
	$home = new HomeController();
	switch ($act) {
		case 'list':
		$home->list();
		break;

		default:
				# code...
		break;
	}
	break;
	case 'shop':
	require_once('controllers/ShopController.php');
	$shop = new ShopController();
	switch ($act) {
		case 'billdetail':
		$shop->billdetail();
		break;
		case 'bill':
		$shop->billform();
		break;
		case 'checkemailtontai':
		$shop->checkemailtontai();
		break;
		case 'checkemaildangki':
		$shop->checkemaildangki();
		break;
		case 'list':
		$shop->list();	
		break;
		case 'lockieu':
		$shop->lockieu();
		break;
		case 'locchude':
		$shop->locchude();
		break;
		case 'locgia':
		$shop->locgia();
		break;
		case 'detail':
		$shop->find();
		break;
		case 'add2cart':
		$shop->add2cart();
		break;
		case 'cart':
		$shop->cart();
		break;
		case 'reduce':
		$shop->reduce();
		break;
		case 'delete':
		$shop->delete();
		break;
		case 'sapxep':
		$shop->sapxep();
		break;
		case 'remove':
		$shop->remove();
		break;
		case 'search':
		$shop->search();
		break;
		case 'billprint':
		$shop->billprint();
		break;
		case 'contact':
		$shop->contact();
		break;
		default:
					# code...
		break;
	}
	break;

	default:
	require_once('controllers/HomeController.php');
	$home = new HomeController();
	$home->list();
	break;
}
?>
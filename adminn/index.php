<?php
session_start(); 
$mod = '';
$act = ''; 
if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
}
if (isset($_GET['act'])) {
	$act = $_GET['act'];
}

switch ($mod) {
	case 'bill':
	require_once('controllers/BillController.php');
	require_once('controllers/Checklogin.php');
	$bill = new BillController();
	$login = new Checklogin();
	$login->check();
	$login->checkpermission();
	switch ($act) {
		case 'list':
		$bill->list();
		break;
		case 'detail':
		$bill->detail();
		break;
		case 'reducequant':
		$bill->reducequant();
		break;
		case 'unsetbill':
		$bill->unsetbill();
		break;
		case 'sendmailonline':
		$bill->sendmailonline();
		break;
		default:
		
		break;
	}
	break;
	case 'login':
	require_once('controllers/LoginController.php');
	$login = new LoginController();
	switch ($act) {
		case 'form':
		$login->form();
		break;
		case 'checklogin':
		$login->checklogin();
		break;
		case 'checkcaptcha':
		$login->checkcaptcha();
		break;
		default:
			# code...
		break;
	}
	break;
	
	case 'logout':
	require_once('controllers/LogoutController.php');
	$logout = new LogoutController();
	$logout->logout();
	break;

	case 'dashbroad':
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	$login->checkpermission();
	require_once('controllers/DashbroadController.php');
	$dashbroad = new DashbroadController();
	$view = $dashbroad->view();
	break;

	case 'products':
	require_once('controllers/ProductsController.php');
	require_once('controllers/Checklogin.php');
	$product = new ProductsController();
	$login = new Checklogin();
	$login->check();
	switch ($act) {
		case 'list':
		$product->list();
		break;
		case 'detail':
		$product->detail();
		break;
		case 'edit':
		$product->edit();
		break;
		case 'update':
		$product->update();
		break;
		case 'delete':
		$product->delete();
		break;
		case 'add':
		$product->add();
		break;
		case 'store':
		$product->store();
		break;

		default:
		echo "<br> Không có chức năng này";
		break;	
	}
	break;

	case 'employees':
	require_once('controllers/EmployeesController.php');
	$employees = new EmployeesController();
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	$login->checkpermission();
	switch ($act) {
		case 'list':
		$employees->list();
		break;
		case 'detail':
		$employees->detail();
		break;
		case 'add':
		$employees->add();
		break;
		case 'store':
		$employees->store();
		break;
		case 'update':
		$employees->update();
		break;
		case 'edit':
		$employees->edit();
		break;
		case 'password':
		$employees->password();
		break;
		case 'delete':
		$employees->delete();
		break;
		default:
		echo "Không có chức năng này";
		break;
	}
	break;

	case 'customer':
	require_once('controllers/CustomerController.php');
	$customer = new CustomerController();
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	switch ($act) {
		case 'delete':
		$customer->delete();
		break;
		case 'store':
		$customer->store();
		break;
		case 'update':
		$customer->update();
		break;
		case 'edit':
		$customer->edit();
		break;
		case 'list':
		$customer->list();
		break;
		case 'detail':
		$customer->detail();
		break;
		case 'add':
		$customer->add();
		break;
		default:
					# code...
		break;
	}
	break;

	case 'sale':
	require_once('controllers/SaleController.php');
	$sale = new SaleController();
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	switch ($act) {
		case 'add2cart':
		$sale->add2cart();
		break;
		case 'reduce':
		$sale->reduce();
		break;
		case 'createbill':
		$sale->bill();
		break;
		case 'purchase':
		$sale->purchase();
		break;
		case 'sale':
		$sale->sale();
		break;
		case 'remove':
		$sale->remove();
		break;
		case 'payment':
		$sale->payment();
		break;
		case 'deletepayment':
		$sale->deletepayment();
		break;
		case 'billdetail':
		$sale->billdetail();
		break;
		case 'sendmail':
		$sale->sendmail();
		break;
		case 'billprint':
		$sale->billprint();
		break;
		default:
			# code...
		break;
	}
	break;
	
	case 'settings':
	require_once('controllers/SettingsController.php');
	$settings = new SettingsController();
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	switch ($act) {
		case 'settings':
		$settings->settings();
		break;
		case 'update':
		$settings->update();
		break;
		case 'password':
		$settings->password();
		break;
		default:
				# code...
		break;
	}
	break;

	case 'types':
	require_once('controllers/TypesController.php');
	$types = new TypesController();
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	switch ($act) {
		case 'list':
		$types->list();
		break;
		case 'add':
		$types->add();
		break;
		case 'store':
		$types->store();
		break;
		case 'edit':
		$types->edit();
		break;
		case 'update':
		$types->update();
		break;
		case 'delete':
		$types->delete();
		break;
		default:
				# code...
		break;
	}
	break;
	

	case 'statistic':
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	$login->checkpermission();
	require_once('controllers/StatisticController.php');
	$statistic = new StatisticController();
	$statistic->list();
	break;

	default:
	require_once('controllers/Checklogin.php');
	$login = new Checklogin();
	$login->check();
	$login->checkpermission();
	require_once('controllers/DashbroadController.php');
	$dashbroad = new DashbroadController();
	$view = $dashbroad->view();

	break;
}



?>

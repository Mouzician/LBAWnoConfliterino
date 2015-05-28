<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_adminside.php');
  	include_once($BASE_DIR.'database/contact.php');

	check_sc_set();
	check_sc_notset();

	$mail = $_GET['mail'];
	$user = $_GET['name'];

	if(isset($_SESSION['admin']))
		$admin = $_SESSION['admin'];

	else if(isset($_COOKIE['admin']))
		$admin = $_COOKIE['admin'];
	
	$smarty->assign('mail', $mail);
	$smarty->assign('admin', $admin);
	$smarty->assign('user', $user);
  
  	$smarty->display('admin/contact.tpl');
?>
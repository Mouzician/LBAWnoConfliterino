<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_adminside.php');
  	include_once($BASE_DIR.'database/users.php');

	check_sc_set();
	check_sc_notset();

	$clientes = getAllClients();

	$smarty->assign('clientes', $clientes);
  
  	$smarty->display('admin/clientes.tpl');
?>
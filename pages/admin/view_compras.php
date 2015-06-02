<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_adminside.php');
  	include_once($BASE_DIR.'database/compras.php');

	check_sc_set();
	check_sc_notset();

	$result = getLastCompras();
	
	$smarty->assign('compras', $result);
  
  	$smarty->display('admin/compras.tpl');
?>

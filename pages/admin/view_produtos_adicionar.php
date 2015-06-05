<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_adminside.php');

	check_sc_set();
	check_sc_notset();
  	

  	$smarty->display('admin/produtos_adicionar.tpl');
?>
<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_adminside.php');
  	include_once($BASE_DIR.'database/contact.php');

	check_sc_set();
	check_sc_notset();

	$result = getAllReclamacoes();
	
	$smarty->assign('reclamacao', $result);
  
  	$smarty->display('admin/comentarios.tpl');
?>

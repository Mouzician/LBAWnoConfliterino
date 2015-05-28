<?php	
  	include_once('../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_clientside.php');

  	check_sc_set();
  	check_sc_set_admin();
  
 	$smarty->display('signin.tpl');
?>

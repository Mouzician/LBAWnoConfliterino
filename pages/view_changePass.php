<?php
  	include_once('../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_clientside.php');
  	include_once($BASE_DIR.'database/users.php');
    include_once($BASE_DIR.'database/produtos.php');
    include_once($BASE_DIR.'database/images.php');

	check_sc_set_admin();
  	check_sc_notset();

  	if(isset($_SESSION['username']))
  		$username = $_SESSION['username']; 
  	else if	(isset($_COOKIE['username']))
  		$username = $_COOKIE['username'];

  	$dados = getCliente($username);

  	$smarty->assign('dados', $dados);

  	$smarty->display('change_pass.tpl');

?>
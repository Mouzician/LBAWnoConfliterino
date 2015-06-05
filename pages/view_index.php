<?php
  	include_once('../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/produtos.php');
  	include_once($BASE_DIR.'database/utilities.php');
    

  	check_sc_set_admin();

  	$num_utilizadores = statsutilizadores();
  	$num_compras = statscompras();

    $top_produtos = getTopProdutos();
    
  	if(isset($_SESSION['username']))
        $username = $_SESSION['username'];
  	else if	(isset($_COOKIE['username']))
        $username = $_COOKIE['username'];

  	$smarty->assign('num_utilizadores', $num_utilizadores);
  	$smarty->assign('username', $username);
  	$smarty->assign('num_compras' , $num_compras);
    $smarty->assign('top', $top_produtos);
    
  	$smarty->display('index.tpl');
?>
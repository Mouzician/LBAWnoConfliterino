<?php
  	include_once('../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_clientside.php');
  	include_once($BASE_DIR.'database/produtos.php');

  	check_sc_set_admin();

  	if(isset($_SESSION['username']))
        $username = $_SESSION['username'];
  	else if	(isset($_COOKIE['username']))
        $username = $_COOKIE['username'];

  	$nome = $_GET['produto'];
    if(empty ($nome)){
         $smarty->display('index.tpl');
    }
  	else{
        
        $username = $_SESSION['username'];

        $produto = getProduto($nome);

  	     $smarty->assign('produto', $produto);
  	$smarty->assign('username', $username);
  
  	$smarty->display('single.tpl');
    
        
    }
        
?>

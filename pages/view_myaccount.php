<?php
  	include_once('../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_clientside.php');
  	include_once($BASE_DIR.'database/users.php');
    include_once($BASE_DIR.'database/produtos.php');
    include_once($BASE_DIR.'database/wishlist.php');
    include_once($BASE_DIR.'database/compras.php');
    include_once($BASE_DIR.'database/images.php');

  	check_sc_set_admin();
  	check_sc_notset();

  	if(isset($_SESSION['username']))
  		$username = $_SESSION['username']; 
  	else if	(isset($_COOKIE['username']))
  		$username = $_COOKIE['username'];

    $dados = getCliente($username);
    $image = getImgCliente($username);
    $data = $dados['datanascimento']; 
    $birthdate = new DateTime($data);
    $today = new DateTime('today');
    $idade = $birthdate->diff($today)->y;
    //$smarty->assign('var', $var);
    $smarty->assign('dados', $dados);
    $compras = getHistoricoCompras($username);
    $wishlist = getWishlist($username);


  	$data = $dados['datanascimento'];
  	$birthdate = new DateTime($data);
  	$today = new DateTime('today');

    $imgur = $image['caminho'];

  	$idade = $birthdate->diff($today)->y;
  	$smarty->assign('imgur', $imgur);
  	$smarty->assign('dados', $dados);
    $smarty->assign('compras', $compras);
    $smarty->assign('wishlist', $wishlist);
  	$smarty->assign('idade', $idade);
  	$smarty->display('myaccount.tpl');

?>

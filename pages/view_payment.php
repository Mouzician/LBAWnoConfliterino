<?php
  	include_once('../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
  	include_once($BASE_DIR.'database/users.php');    
    include_once($BASE_DIR.'database/produtos.php');
	
  	check_sc_set_admin();
  	check_sc_notset();

  	if(isset($_SESSION['username']))
  		$username = $_SESSION['username'];
  	else if	(isset($_COOKIE['username']))
  		$username = $_COOKIE['username'];
        
    $pagamento = $_GET['price'];

        
    $dados = getCliente($username);
  	$idU = $dados['idutilizador'];
  	$car = getCarrinho($idU);
  	$pros = getProdsCarrinho($car);
  	$produtos = getAllProductsId($pros);

  	$smarty->assign('produtos', $produtos);
  	$smarty->assign('dados', $dados); 
    $smarty->assign('pagamento', $pagamento); 
    
  	$smarty->display('payment.tpl');
?>
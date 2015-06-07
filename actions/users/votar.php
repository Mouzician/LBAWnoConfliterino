<?php
  	include_once('../../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
  	include_once($BASE_DIR.'database/users.php');
    include_once($BASE_DIR.'database/produtos.php');

    check_sc_set_admin();
  	check_sc_notset();

  	if(isset($_SESSION['username']))
  		$nomeU = $_SESSION['username']; 
  	else if	(isset($_COOKIE['username']))
  		$nomeU = $_COOKIE['username'];

    $pontuacao = $_POST['rating'];

    $nomeP = $_GET['prodn'];

    $last = $_SERVER['HTTP_REFERER'];

    $idP = getIdProdutoNome($nomeP);
	
	Votar($nomeU, $idP, $pontuacao);
  
  	header('Location: ' . $last);
    exit();
?>
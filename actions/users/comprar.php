<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'database/compras.php');

	if(isset($_SESSION['username']))
      $nomeU = $_SESSION['username']; 
    else if (isset($_COOKIE['username']))
      $nomeU = $_COOKIE['username'];
	$morada = $_POST['morada'];
	$modopagamento = $_POST['pagaoqdeves'];
    $valor = $_POST['valor'];
    
    //var_dump($valor);
    //var_dump($nomeU);
    //var_dump($morada);
    //var_dump($modopagamento);

    Comprar($valor,$morada, $nomeU, $modopagamento);

   echo  "<script type='text/javascript'>";
    echo "window.close();";
    echo "</script>";

?>
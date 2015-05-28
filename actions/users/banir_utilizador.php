<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'database/users.php');

	$nome_utilizador = $_POST['name'];
	
	BanClient($nome_utilizador);
  
  	header('Location: ' . $BASE_URL . 'pages/admin/view_clientes.php');
    exit();
?>
<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'database/users.php');

	$id_Produto = $_POST['idP'];

	var_dump($id_Produto);
	
	BanClient($nome_utilizador);
  
  	header('Location: ' . $BASE_URL . 'pages/admin/view_clientes.php');
    exit();
?>
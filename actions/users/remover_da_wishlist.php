<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'database/users.php');

	$nomeproduto = $_POST['name'];
	
	RemoverDaWishlist($nomeproduto);

  	header('Location: ' . $BASE_URL . 'pages/view_myaccount.php');
    exit();
?>
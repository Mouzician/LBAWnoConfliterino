<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'database/users.php');


	$idR = $_POST['idregistado'];
	$idA = $_POST['idanonimo'];
	$utilizador = $_POST['nome'];

	//var_dump($idA);
	if(isset($_SESSION['username']))
  		$username = $_SESSION['username']; 
  	else if	(isset($_COOKIE['username']))
  		$username = $_COOKIE['username'];

	if($utilizador == "anonimo"){
		RemoveComentarioAnonimo($idA);
	}
	else {
		RemoveComentario($idR);
	}	
	
  	header('Location: ' . $BASE_URL . 'pages/admin/view_comentarios.php');
    exit();

?>
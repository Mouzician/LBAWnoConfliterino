<?php
	include_once('../../config/init.php');
  	include_once($BASE_DIR .'database/users.php');  

	$nome = $_POST['nome'];
  	$username = $_POST['username'];
  	$password = $_POST['password'];
    $dataNascimento =  $_POST['dataN'];
  	$email = $_POST['email'];
    $morada = $_POST['morada'];

    if(check_createUser($username, $email) != false){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
    else 
        createUser($nome, $username, $email, $morada, $dataNascimento, $password);
 
  	$_SESSION['success_messages'][] = 'User registered successfully';
  	header('Location: ' . $BASE_URL);
  	exit();
?>

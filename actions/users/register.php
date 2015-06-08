<?php
	include_once('../../config/init.php');
  	include_once($BASE_DIR .'database/users.php');  

	$nome = $_POST['nome'];
  	$username = $_POST['username'];
  	$password = $_POST['password'];
    $dataNascimento = $_POST['dataN'];
  	$email = $_POST['email'];
    $morada = $_POST['morada'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];

    $file = $_POST['userFile'];
    //var_dump($pais);

    $path = $BASE_DIR. 'images/users/' ; // Upload directory
    $pathSaveImage = 'images/users/';
    $file_name = $_FILES['userFile']['name'];
    $file_anonimo = 'teste.png';
    
    //var_dump($file_name);

    if(check_createUser($username, $email) != false){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
    else {

      if(isset($file)){
          $info = pathinfo($file_name);
          move_uploaded_file($_FILES['userFile']['tmp_name'], $path.$info['basename']);
          createUser($nome, $username, $email, $morada, $dataNascimento, $password, $pais, $estado, $pathSaveImage.$file_name);
      }
      else 
        createUser($nome, $username, $email, $morada, $dataNascimento, $password, $pais, $estado, $pathSaveImage.$file_anonimo);

    }
  	$_SESSION['success_messages'][] = 'User registered successfully';
  	header('Location: ' . $BASE_URL);
  	exit();
?>

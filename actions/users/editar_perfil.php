<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/users.php');

    check_sc_set_admin();
  	check_sc_notset();

  	if(isset($_SESSION['username']))
  		$OldName = $_SESSION['username']; 
  	else if	(isset($_COOKIE['username']))
  		$OldName = $_COOKIE['username'];

    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userMorada = $_POST['userMorada'];
    $userPais = $_POST['userPais'];
    $userEstado = $_POST['userEstado'];

    EditProfile($OldName,$userName, $userMorada, $userEmail, $userPais, $userEstado);
    header('Location: ' . $BASE_URL . 'pages/view_myaccount.php');
    exit();

?>
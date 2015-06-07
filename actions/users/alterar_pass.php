<?php
	include_once('../../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/users.php');

    check_sc_set_admin();
  	check_sc_notset();

  	if(isset($_SESSION['username']))
  		$username = $_SESSION['username']; 
  	else if	(isset($_COOKIE['username']))
  		$username = $_COOKIE['username'];

	$oldPass = $_POST['oldPass'];
  	$newPass = $_POST['newPass'];

	if(isLoginCorrect($username, $oldPass)) {
		changePassword($username, $newPass);
    	header('Location: ' . $BASE_URL . 'pages/view_myaccount.php');
	} 
	else {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

    exit();

?>
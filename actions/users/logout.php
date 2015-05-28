<?php
  	include_once('../../config/init.php');
  
  	session_destroy();

  	if(isset($_COOKIE['username']))
  		setcookie('username', '', time() - 3600, $BASE_URL);
  	else if (isset($_COOKIE['admin']))
  		setcookie('admin', '', time() - 3600, $BASE_URL);
  
  	header('Location: ' . $BASE_URL);
?>

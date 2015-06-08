<?php
	include_once('../../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/users.php');

    check_sc_set_admin();
  	check_sc_notset();

    if(isset($_SESSION['username']))
      $username = $_SESSION['username']; 
    else if (isset($_COOKIE['username']))
      $username = $_COOKIE['username'];

    $path = $BASE_DIR. 'images/users/' ; // Upload directory
    $pathSaveImage = 'images/users/';
    $file_name = $_FILES['userFile']['name'];
    $info = pathinfo($file_name);
    move_uploaded_file($_FILES['userFile']['tmp_name'], $path.$info['basename']);
    updateFoto($username,$pathSaveImage.$file_name);
    
    header('Location: ' . $BASE_URL . 'pages/view_myaccount.php');
    exit();

?>
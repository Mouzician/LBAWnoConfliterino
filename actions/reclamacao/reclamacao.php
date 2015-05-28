<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/contact.php');  

    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userMsg = $_POST['userMsg'];

    sendEmail($userName, $userMsg, $userEmail);
    header('Location: ' . $BASE_URL);
    exit();

?>

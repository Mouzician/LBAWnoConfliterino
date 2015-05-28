<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');  

    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];

    //var_dump(LoginCredentials($username, $password)["utilizador"]);
    if (isLoginCorrect($username, $password)) {        
        if($remember == "on") {
            setcookie('username', $username, time() + 3600, $BASE_URL);
        }
        else if($remember == "") {
            $_SESSION['username'] = $username;            
        }

        header('Location: ' . $BASE_URL);
        exit();
    }
    //test credentials(admin/pass): ruiadmin/ruipass; andreadmin/andrepass; marioadmin/mariopass; chicoadmin/chicopass
    else if (isLoginCorrectAdmin($username, $password)) { 
        if($remember == "on") {
            setcookie('admin', $username, time() + 3600, $BASE_URL);
        }
        else if($remember == "") {
            $_SESSION['admin'] = $username;            
        }

        header('Location: ' . $BASE_URL . 'pages/admin/view_dashboard.php');
        exit();
    }
    else header('Location: ' . $_SERVER['HTTP_REFERER']);

?>

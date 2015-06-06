<?php
   include_once('../../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/users.php');
    include_once($BASE_DIR.'database/produtos.php');
    var_dump($idP);
    check_sc_set_admin();
  	check_sc_notset();

  	if(isset($_SESSION['username']))
  		$Name = $_SESSION['username']; 
  	else if	(isset($_COOKIE['username']))
  		$Name = $_COOKIE['username'];
        
    $nomeProd = $_POST['precoind'];
        
    $idU = getIDutilizador($Name);

    $idC = getCarrinho($idU);

    $idP = getIdProdutoNome($nomeProd);
	//var_dump($idP);
    //var_dump($idC);
	RemoverDoCart($idP, $idC);
    
    //var_dump("PASSOU");
  	header('Location: ' . $BASE_URL . 'pages/view_cart.php');
    exit();
?>
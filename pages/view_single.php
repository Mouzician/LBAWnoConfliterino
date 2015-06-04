<?php
  	include_once('../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_clientside.php');
  	include_once($BASE_DIR.'database/produtos.php');

  	check_sc_set_admin();

  	if(isset($_SESSION['username']))
        $username = $_SESSION['username'];
  	else if	(isset($_COOKIE['username']))
        $username = $_COOKIE['username'];

  	$nome = $_GET['produto'];
    $add = $_GET['add'];

    if(empty ($nome)){
         $smarty->display('index.tpl');
    }
    else if ($add == 'true') {
       
        $retorno = addWishlist($username , $nome);

        if($retorno == false) {
             echo "<script>
            alert('Already in your Wishlist!');
            </script>";
        }
        
          $username = $_SESSION['username'];

        $produto = getProduto($nome);

         $smarty->assign('produto', $produto);
         $smarty->assign('username', $username);
        $smarty->display('single.tpl');
      
    }
  	else{
        
        $username = $_SESSION['username'];

        $produto = getProduto($nome);

  	     $smarty->assign('produto', $produto);
  	     $smarty->assign('username', $username);
  
  	     $smarty->display('single.tpl');
    
        
    }
        
?>

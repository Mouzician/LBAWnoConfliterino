<?php
    include_once('../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/users.php');

    check_sc_set_admin();

    $file_name = $_GET['page_name'];

    if($file_name == "All"){
<<<<<<< HEAD

      $categoria = getAllProducts();

    }

    else{

     $categoria = getAllProductsCat($file_name);

    }
    
    $imagem = getImgProduto($categoria['nome']);

    var_dump($categoria['nome']);
    var_dump($imagem);

    $smarty->assign('categoria', $categoria);
    
    //var_dump($categoria);

=======

      $categoria = getAllProducts();

    }

    else{

     $categoria = getAllProductsCat($file_name);

    }
  
    $smarty->assign('categoria', $categoria);
    
    //var_dump($categoria);

>>>>>>> origin/master
    $smarty->display('products.tpl');
?>

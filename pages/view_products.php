<?php
    include_once('../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/users.php');

    check_sc_set_admin();

    $file_name = $_GET['page_name'];

    if($file_name == "All"){

      $categoria = getAllProducts();

    }

    else{

     $categoria = getAllProductsCat($file_name);

    }
    
    //$imagem = getImgProduto($categoria);

    //var_dump($categoria);
    //var_dump($imagem);

    $smarty->assign('categoria', $categoria);
    
    //var_dump($categoria);

    $smarty->display('products.tpl');
?>

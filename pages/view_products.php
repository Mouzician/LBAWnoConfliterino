<?php
    include_once('../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/produtos.php');

    check_sc_set_admin();

    $subcat_name = $_GET['page_name'];

    if($subcat_name == "All") {
        $allproducts = getAllProducts();
        $categoria = 'Todos os Produtos';
    }
    else {
        $allproducts = getAllProductsCat($subcat_name);
        for($i = 0; $i < count(getCat_SubCat()); $i++){
            if(getCat_SubCat()[$i]['nomesubcat'] == $subcat_name) {
                $categoria = getCat_SubCat()[$i]['nomecat'];
                $subcategoria = getCat_SubCat()[$i]['nomesubcat'];
                break;
            }
        }
    }           
    
    //$imagem = getImgProduto($categoria);
    //var_dump($categoria);
    //var_dump($imagem);

    $smarty->assign('categoria', $categoria);
    $smarty->assign('subcategoria', $subcategoria);
    $smarty->assign('allproducts', $allproducts);
    
    //var_dump($categoria);

    $smarty->display('products.tpl');
?>

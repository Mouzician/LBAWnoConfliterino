<?php
    include_once('../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/produtos.php');
    include_once($BASE_DIR.'database/images.php');

    check_sc_set_admin();

    $subcat_name = $_GET['page_name'];

    $passing = $_GET['passing'];
    
    if(!is_null($passing)){
        
        $allproducts = getAllProductsLike($passing);
        $categoria = 'Todos os Produtos';
        
        $smarty->assign('categoria', $categoria);
        $smarty->assign('subcategoria', $subcategoria);
        $smarty->assign('allproducts', $allproducts);
    

        $smarty->display('products.tpl');
        
    }

    else{
        
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

    $smarty->assign('categoria', $categoria);
    $smarty->assign('subcategoria', $subcategoria);
    $smarty->assign('allproducts', $allproducts);
    

    $smarty->display('products.tpl');
        
    }
?>

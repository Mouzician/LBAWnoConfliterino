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

        $_SESSION['prod'] = $allproducts;
        $smarty->assign('categoria', $categoria);
        $smarty->assign('subcategoria', $subcategoria);
        $smarty->assign('allproducts', $allproducts);

        $smarty->display('products.tpl');

    }

    else{

    if($subcat_name == "All") {
        if(isset($_POST['priceMinimun']) && isset($_POST['priceMaximum']))
        {
        $allproducts = getAllProductsPrice($_POST['priceMinimun'], $_POST['priceMaximum']);
        $categoria = 'Todos os Produtos';
        }
        else if(isset($_POST['order'])){
        $allproducts = $_SESSION['prod'];
        $categoria = 'Todos os Produtos';

        $order = $_POST['order'];
        if($order == "caro"){
            function sortByOrder($a, $b) {
            return $b['preco'] - $a['preco'];
            }

        usort($allproducts, 'sortByOrder');
        }
        else if($order == "barato"){
            function sortByOrder($a, $b) {
                return $a['preco'] - $b['preco'];
                }

            usort($allproducts, 'sortByOrder');
        }
    }
        else{
            $allproducts = getAllProducts();
        $categoria = 'Todos os Produtos';
    }
    }
    else if(isset($_POST['order'])){
        $allproducts = $_SESSION['prod'];
        for($i = 0; $i < count(getCat_SubCat()); $i++){
            if(getCat_SubCat()[$i]['nomesubcat'] == $subcat_name) {
                $categoria = getCat_SubCat()[$i]['nomecat'];
                $subcategoria = getCat_SubCat()[$i]['nomesubcat'];
                break;
            }
        }

        $order = $_POST['order'];
        if($order == "caro"){
            function sortByOrder($a, $b) {
            return $b['preco'] - $a['preco'];
            }

        usort($allproducts, 'sortByOrder');
        }
        else if($order == "barato"){
            function sortByOrder($a, $b) {
                return $a['preco'] - $b['preco'];
                }

            usort($allproducts, 'sortByOrder');
        }

    }
    else if(isset($_POST['priceMinimun']) && isset($_POST['priceMaximum'])){
        $allproducts = getAllProductsCatPrice($subcat_name, $_POST['priceMinimun'], $_POST['priceMaximum']);
        for($i = 0; $i < count(getCat_SubCat()); $i++){
            if(getCat_SubCat()[$i]['nomesubcat'] == $subcat_name) {
                $categoria = getCat_SubCat()[$i]['nomecat'];
                $subcategoria = getCat_SubCat()[$i]['nomesubcat'];
                break;
            }
        }
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

    $smarty->assign('getSub', $subcat_name);
    $smarty->assign('categoria', $categoria);
    $smarty->assign('subcategoria', $subcategoria);
    $smarty->assign('allproducts', $allproducts);

    $_SESSION['prod'] = $allproducts;

    $smarty->display('products.tpl');

    }
?>

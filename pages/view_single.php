<?php
    include_once('../config/init.php');
    include_once($BASE_DIR.'config/check_sc_clientside.php');
    include_once($BASE_DIR.'database/produtos.php');
    include_once($BASE_DIR.'database/users.php');

    check_sc_set_admin();

    if(isset($_SESSION['username']))
        $username = $_SESSION['username'];
    else if (isset($_COOKIE['username']))
        $username = $_COOKIE['username'];

    $nome = $_GET['produto'];
    $add = $_GET['add'];

    $idP = getIdProdutoNome($nome);

    //$nomeProduto = $_GET['name'];
    //var_dump($nomeProduto);

    if(empty ($nome)){
         $smarty->display('index.tpl');
    }
    else if ($add == 'true') {

        $retorno = addWishlist($username , $nome);

        if($retorno == false) {
             echo "<script>
            alert('O produto já se encontra na sua wishlist!');
            </script>";
        }

          $username = $_SESSION['username'];

        $produto = getProduto($nome);
        $ratg = PontuMed($idP);
         //var_dump($produto);
        $recomendados = getRecomendados($produto['nome']);
        //var_dump($recomendados);
      $images = getAllImages($nome);

        $singleArray = array();

        foreach ($images as $key => $value){
            $singleArray[$key] = $value['caminho'];
        }

        $smarty->assign('imagens', $singleArray);
        $smarty->assign('produto', $produto);
        $smarty->assign('ratg', $ratg);
        $smarty->assign('recomendados', $recomendados);
         $smarty->assign('username', $username);

         //$comments = getComments($nome);
         $smarty->assign('idProduto', $idP);
         //$smarty->assign ('comments', $comments);

        $smarty->display('single.tpl');

    }
    else if ($add == 'false') {

      $return = AdicionarCarrinho($username, $nome);

       if($return == false) {
             echo "<script>
            alert('O produto já se encontra no seu carrinho!');
            </script>";
        }


        $username = $_SESSION['username'];

        $produto = getProduto($nome);
        $ratg = PontuMed($idP);
         //var_dump($produto);
         $recomendados = getRecomendados($produto['nome']);
          //var_dump($recomendados);
         $images = getAllImages($nome);

        $singleArray = array();

        foreach ($images as $key => $value){
            $singleArray[$key] = $value['caminho'];
        }

        $smarty->assign('imagens', $singleArray);
         $smarty->assign('produto', $produto);
         $smarty->assign('ratg', $ratg);
          $smarty->assign('recomendados', $recomendados);
         $smarty->assign('username', $username);

         //pass the comments array
         //$comments = getComments($nome);
         //$smarty->assign ('comments', $comments);

         $smarty->assign('idProduto', $idP);

         $smarty->display('single.tpl');

    }
    else{

        $username = $_SESSION['username'];

        $produto = getProduto($nome);
        $ratg = PontuMed($idP);
        $images = getAllImages($nome);

        $singleArray = array();

        foreach ($images as $key => $value){
            $singleArray[$key] = $value['caminho'];
        }
         //var_dump($singleArray);

         $recomendados = getRecomendados($produto['nome']);
        //var_dump($recomendados);


         $smarty->assign('imagens', $singleArray);
         $smarty->assign('produto', $produto);
         $smarty->assign('ratg', $ratg);
         $smarty->assign('recomendados', $recomendados);
         $smarty->assign('username', $username);

         //$comments = getComments($nome);
         //$smarty->assign ('comments', $comments);

         $smarty->assign('idProduto', $idP);

         $smarty->display('single.tpl');


    }

?>

<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR.'database/produtos.php');

    //var_dump("OLE");

    $nome = $_POST['Nome']; 
    $preco = $_POST['Preco'];
   	$descricao = $_POST['Descricao'];

   	//var_dump($nome);
   	$idP = getIdProdutoNome($nome);
   	//var_dump($idP);
   	EditProduto($idP, $nome, $preco, $descricao);

    header('Location: ' . $BASE_URL . 'pages/admin/view_produtos.php');
    exit();
        
?>
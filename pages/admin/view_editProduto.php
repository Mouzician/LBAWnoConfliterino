<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR.'database/produtos.php');

    //var_dump("OLE");

    $nome = $_POST['name']; 
    
    $produto = getProduto($nome);
    //$preco = $produto['preco'];
    //$descricao = $produto['descricao'];
    //$caminho = $produto['caminho'];
    

    //$smarty->assign('nome', $nome);
    //$smarty->assign('preco', $preco);
    //$smarty->assign('descricao', $descricao);
    $smarty->assign('produto', $produto);
    $smarty->display('admin/edit_produto.tpl');
        
?>
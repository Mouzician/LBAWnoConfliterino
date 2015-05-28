<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR.'database/produtos.php');

    //var_dump("OLE");

    $did = $_POST['name']; 

    var_dump($did);

    deleteProd($did);

    header('Location: ' . $BASE_URL . 'pages/admin/view_produtos.php');
    exit();
        
?>
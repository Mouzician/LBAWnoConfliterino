<?php
include_once ('../../config/init.php');
include_once ('../../database/produtos.php');

if(isset($_POST['idProduto']) && isset($_POST['comment']) && !(isset($_SESSION['username']))
{

createCommentReg($_POST['idProduto'],$_POST['comment'], $_SESSION['username']);
}
else if(isset($_POST['idProduto']) && isset($_POST['comment'])){
  createCommentAnon($_POST['idProduto'],$_POST['comment']);
}

?>

<?php
include_once ('../../config/init.php');
include_once ('../../database/produtos.php');

$n = getProdutoNome($_POST['idProduto']);
if(isset($_POST['idProduto']) && isset($_POST['comment']) && isset($_SESSION['username']))
{
createCommentReg($_POST['idProduto'],$_POST['comment'], $_SESSION['username']);



header('Location: ' . $BASE_URL. 'pages/view_single.php?produto='.$n);
}
else if(isset($_POST['idProduto']) && isset($_POST['comment'])){
  createCommentAnon($_POST['idProduto'],$_POST['comment']);

  header('Location: ' . $BASE_URL. 'pages/view_single.php?produto='.$n);

}

?>

<?php
	include_once($BASE_DIR . 'database/users.php');
	include_once($BASE_DIR . 'database/produtos.php');

	function getIDwishlist($utilizador) {
        global $conn;

        $id = getIDutilizador($utilizador);
        
        $stmt = $conn->prepare("SELECT idWishlist FROM wishlist WHERE idUtilizador=?");
        $stmt->execute(array($id));
        $result = $stmt->fetch();

        return $result['idwishlist'];
    } 

   function getWishlist($utilizador) {
        global $conn;

        $wishlist = getIDproduto($utilizador);
        $array = array();
        $i=0;

        foreach ($wishlist as $wish) {
          	$stmt = $conn->prepare("SELECT nome, preco, descricao FROM produto WHERE idProduto=?");
          	$stmt->execute(array($wish['idproduto']));
          	$result = $stmt->fetch();
          	$array[$i] = $result;
          	$i++;
        }

        return $array;
    }

?>
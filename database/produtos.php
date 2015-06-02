<?php
	include_once($BASE_DIR . 'database/wishlist.php');

    function getIDSubCategoria($nome){
        global $conn;
        
        $result = $conn->prepare("SELECT idsubcategoria FROM subcategoria WHERE nome = ?");
        $result->execute(array($nome));
        $row = $result->fetch();
        
        return $row['idsubcategoria'];
    }

    function getCat_SubCat(){
        global $conn;
        
        $stmt = $conn->prepare("SELECT categoria.nome AS nomeCat, subcategoria.nome AS nomeSubCat FROM categoria INNER JOIN subcategoria ON subcategoria.idCategoria = categoria.idCategoria");
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        return $result;
    }

    //var_dump(getCat_SubCat());

	/*function insertProduto($nomeProduto, $selCat, $descricaoProduto, $preco) {		
		global $conn;
		
		$cat = getCategoria($selCat);
		$result = $conn->prepare("INSERT INTO produto VALUES(?, ?, ?, ?, NULL, ?, NULL) RETURNING idProduto");
		$result->execute(array(35, $nomeProduto, $preco, $descricaoProduto, $cat));
		$idP  = $result->(PDO::FETCH_ASSOC);
		$idProduto= $idP['idProduto'];
		
		if(!$result)
			return false;
		
		return $idProduto;
	}*/

	function deleteProd($nome) {
		global $conn;
		
        $stmt = $conn->prepare("DELETE FROM produto WHERE nome = ?");
        $stmt->execute(array($nome));
	}

	function getProduto($nome) {
	    global $conn;

	    $stmt = $conn->prepare("SELECT nome, preco, descricao, pontuacaomedia FROM produto Where nome = ?");
	    $stmt->execute(array($nome));
	    $result = $stmt->fetch();

	    return $result;
    }

	function getAllProducts() {
	    global $conn;

	    $stmt = $conn->prepare("SELECT nome, preco, descricao FROM produto");
	    $stmt->execute();
	    $result = $stmt->fetchAll();
	    //var_dump($result);

	    return $result;
    }    

    function getAllProductsCat($subcategoria) {
        global $conn;

        $subcat = getIDSubCategoria($subcategoria);

        $stmt = $conn->prepare("SELECT nome, preco, descricao FROM produto WHERE idsubcategoria = ?");
        $stmt->execute(array($subcat));
        $result = $stmt->fetchAll();

        return $result;
    }

    function getProdsCarrinho($car) {
        global $conn;

        $stmt = $conn->prepare("SELECT idProduto FROM produtocarrinho WHERE idcarrinhocompras = ?");
        $stmt->execute(array($car));
        $result = $stmt->fetchAll();

        return $result;
    }

    function getAllProductsId($idP) {
        global $conn;

        $array = array();
        $i = 0;

        foreach ($idP as $key) {
	        $stmt = $conn->prepare("SELECT nome, preco, descricao FROM produto WHERE idProduto = ?");
	        $stmt->execute(array($key['idproduto']));
	        $result = $stmt->fetch();

	        $all[$i] = $result;
	        $i++;
         }

        return $all;
    }

    function getIDproduto($utilizador) {
        global $conn;

        $id = getIDwishlist($utilizador);
        
        $stmt = $conn->prepare("SELECT idProduto FROM wishlistProduto WHERE idwishlist=?");
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        return $result;
    }

    function getCarrinho($idU) {
        global $conn;

        $stmt = $conn->prepare("SELECT idcarrinhocompras FROM carrinhocompras WHERE idUtilizador = ?");
        $stmt->execute(array($idU));
        $result = $stmt->fetch();

        return $result['idcarrinhocompras'];
    }

?>
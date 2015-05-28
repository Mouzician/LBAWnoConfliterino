<?php

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
	/*
	function getCategoria($nome){
    	global $conn;
		
	    $result = $conn->prepare("SELECT idCategoria FROM categoria Where nome = ?");
		$result->execute(array($nome));
		$row = $result->fetch();
		
		return $row['idCategoria'];
    }

    function getAllProducts() {

    global $conn;

    $stmt = $conn->prepare("SELECT nome, preco, descricao FROM produto");
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
	}

	function getAllProductsCat($categoria) {

    global $conn;

    $cat = getCategoria($categoria);

    $stmt = $conn->prepare("SELECT nome, preco, descricao, imagem FROM produto WHERE idCategoria = ?");
    $stmt->execute(array($cat));
    $result = $stmt->fetchAll();

    return $result;
	}

	function getLastCompras() {

	    global $conn;

	    $stmt = $conn->prepare("SELECT idUtilizador, valor, morada, data_compra, modoPagamento FROM compraa");
	    $stmt->execute();
	    $result = $stmt->fetchAll();

	    return $result;
	}*/

?>
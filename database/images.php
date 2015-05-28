<?php

	function insertImagemProduto($name, $idP) {
		
		global $conn;
		
		$result1 = $conn->prepare("INSERT INTO imagens VALUES(?, ?) RETURNING idImagem");
		$result1->execute(array(35, $name));
		$idI  = $result1->(PDO::FETCH_ASSOC);
		$idImagem = $idI['idImagem'];
		
		$result = $conn->prepare("INSERT INTO imagemProduto VALUES(?, ?, ?)");
		$result->execute(array(33, $idImagem, $idP));
		
		return $idImagem;
	}
	
?>
<?php
	/*
	function insertImagemProduto($name, $idP) {		
		global $conn;
		
		$result1 = $conn->prepare("INSERT INTO imagens VALUES(?, ?) RETURNING idImagem");
		$result1->execute(array(35, $name));
		$idI  = $result1->(PDO::FETCH_ASSOC);
		$idImagem = $idI['idImagem'];
		
		$result = $conn->prepare("INSERT INTO imagemProduto VALUES(?, ?, ?)");
		$result->execute(array(33, $idImagem, $idP));
		
		return $idImagem;
	}*/

    function getImgCliente($username) {
        global $conn;

        $stmt = $conn->prepare("SELECT caminho FROM imagem INNER JOIN utilizador ON utilizador.idImagem = imagem.idImagem WHERE utilizador.utilizador = ?");
        $stmt->execute(array($username));
        $result = $stmt->fetch();

        return $result;
    }

    function getImgProduto(&$nome) {
        global $conn;

        $stmt = $conn->prepare("SELECT idImagem FROM imagemproduto INNER JOIN produto ON produto.idProduto = imagemproduto.idProduto WHERE produto.nome = ?");
        $stmt->execute(array($nome));
        $result = $stmt->fetch();

        return $result;
    }
	
?>
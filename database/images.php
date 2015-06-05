<?php
	
	function insertImagemProduto($name, $idP) {		
		global $conn;
		
		$result1 = $conn->prepare("INSERT INTO imagem(caminho) VALUES(?) RETURNING idImagem");
		$result1->execute(array( $name));
		$idI  = $result1->fetch();
		$idImagem = $idI['idimagem'];

		$result = $conn->prepare("INSERT INTO imagemProduto(idImagem, idProduto) VALUES(?, ?)");
		$result->execute(array($idImagem, $idP));
		
	}

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
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

	function deleteProd($nome) {
		global $conn;
		
        $stmt = $conn->prepare("DELETE FROM produto WHERE nome = ?");
        $stmt->execute(array($nome));
	}

	function getProduto($nome) {
	    global $conn;

	    $stmt = $conn->prepare("SELECT produto.nome, produto.preco, produto.descricao, produto.pontuacaomedia, imagem.caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem Where nome = ?");
	    $stmt->execute(array($nome));
	    $result = $stmt->fetch();

	    return $result;
    }

    function getAllProducts() {
	    global $conn;

	    $stmt = $conn->prepare("SELECT produto.nome, produto.preco, produto.descricao, imagem.caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem");
	    $stmt->execute();
	    $result = $stmt->fetchAll();

	    return $result;
    } 

    function getAllProductsLike($likerino) {
	    global $conn;

	    $stmt = $conn->prepare("SELECT produto.nome, produto.preco, produto.descricao, imagem.caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem WHERE produto.nome ILIKE '%$likerino%'");
	    $stmt->execute();
	    $result = $stmt->fetchAll();

	    return $result;
    } 

    function getAllProductsCat($subcategoria) {
        global $conn;

        $subcat = getIDSubCategoria($subcategoria);

        $stmt = $conn->prepare("SELECT produto.nome, produto.preco, produto.descricao, imagem.caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem WHERE idsubcategoria = ?");
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
	        $stmt = $conn->prepare("SELECT produto.nome, produto.preco, produto.descricao, imagem.caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem WHERE produto.idProduto = ?");

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

    function getTopProdutos(){
        
         global $conn;

        $stmt = $conn->prepare("SELECT produto.nome, imagem.caminho, produto.preco,SUM(produtocompra.quantidade) AS TOP FROM produto INNER JOIN produtocompra ON produto.idProduto = produtocompra.idProduto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem GROUP BY produto.nome, produto.preco, imagem.caminho Limit 3");
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        return $result;

    }

    function adicionarProduto($nomeProduto, $subcategoria, $descricaoProduto, $preco) {

        global $conn;

        $nomedireito = htmlentities($subcategoria, ENT_COMPAT, 'UTF-8');
        //var_dump($nomedireito);

        $stmt1 = $conn->prepare("SELECT idsubcategoria FROM subcategoria WHERE nome = ?");
        $stmt1->execute(array($nomedireito));
        $idSubCategoria = $stmt1->fetch();
        //var_dump($idSubCategoria);

        $stmt = $conn->prepare("INSERT INTO produto (nome, preco, descricao, idsubcategoria, idpromocao) VALUES (?, ?, ?, ?, ?) RETURNING idProduto");
        $stmt->execute(array($nomeProduto, (float)$preco, $descricaoProduto, $idSubCategoria['idsubcategoria'], NULL));
        $idp = $stmt->fetch();
        //var_dump($idp);
        return $idp["idproduto"];
    }

    function getIdProdutoNome($nome) {

        global $conn;

        
        $stmt = $conn->prepare("SELECT idProduto FROM produto WHERE nome=?");
        $stmt->execute(array($nome));
        $result = $stmt->fetch();

        return $result['idproduto'];

    }

    function EditProduto($idP, $nome, $preco, $descricao) {

        global $conn;
         $stmt = $conn->prepare("UPDATE produto
            SET nome = '$nome', preco = '$preco', descricao = '$descricao' 
            WHERE  idProduto = '$idP'");

        $stmt->execute();
    }

?>
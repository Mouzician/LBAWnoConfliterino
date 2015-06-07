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

        $stmt = $conn->prepare("SELECT DISTINCT ON(produto.nome) produto.nome, produto.preco, produto.descricao, imagem.caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem");
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    function getAllProductsLike($likerino) {
	    global $conn;

	    $stmt = $conn->prepare("SELECT DISTINCT ON(produto.nome) produto.nome, produto.preco, produto.descricao, imagem.caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem WHERE produto.nome ILIKE '%$likerino%'");
	    $stmt->execute();
	    $result = $stmt->fetchAll();

	    return $result;
    } 

    function getAllProductsCat($subcategoria) {
        global $conn;

        $subcat = getIDSubCategoria($subcategoria);

        $stmt = $conn->prepare("SELECT DISTINCT ON(produto.nome) produto.nome, produto.preco, produto.descricao, imagem.caminho FROM produto
         INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem 
         WHERE idsubcategoria = ?");
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

    function getRecomendados($nome) {

        global $conn;

        $stmt1 = $conn->prepare("SELECT idSubCategoria FROM produto WHERE nome =?");
        $stmt1->execute(array($nome));
        $idSubC = $stmt1->fetch();

        $stmt = $conn->prepare("SELECT nome, descricao, preco FROM produto WHERE idSubCategoria =?");
        $stmt->execute(array($idSubC["idsubcategoria"]));
        $result = $stmt->fetchAll();

        $limit=0;
        $result2 = array();
        foreach ($result as $produto) {

             if($produto['nome'] == $nome) {continue;}
             
             array_push($result2, getProduto($produto['nome']));
             $limit++;
             if($limit == 3) { break;}
        }
       

        return $result2;
    }

    function getAllImages($nome) {

        global $conn;

        
        //var_dump($idSubCategoria);
        $stmt = $conn->prepare("SELECT idProduto FROM produto WHERE nome = ?");
        $stmt->execute(array($nome));
        $result = $stmt->fetch();
        
        $stmt1 = $conn->prepare("SELECT idImagem FROM imagemProduto WHERE idProduto = ?");
        $stmt1->execute(array($result["idproduto"]));
        $result2 = $stmt1->fetchAll();
        //var_dump($result2);

        $result3 = array();
        foreach ($result2 as $re) {
            $stmt3 = $conn->prepare("SELECT caminho FROM imagem WHERE idImagem = ?");
            $stmt3->execute(array($re['idimagem']));
            $result4 = $stmt3->fetch();
            array_push($result3,  $result4);
        }
        
       /* $stmt1 = $conn->prepare("SELECT caminho FROM imagem WHERE idImagem = ?");
        $stmt1->execute(array($result["idproduto"]));
        $result2 = $stmt1->fetchAll();
        var_dump($result2);*/
       return $result3;
    }

?>
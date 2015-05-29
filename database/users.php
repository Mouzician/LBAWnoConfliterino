<?php

    //generate a random string with $lenght size
    function generateRandomSalt($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    } 

    //hash user's password -- crypt() and salt
    function hashPassword($username, $pass, $salt) {
        global $conn;

        $halfsaltsize = strlen($salt)/2;
        $halfsizeinc = $halfsaltsize;
        $halfsizedec = $halfsaltsize - 1;
        
        $hashed = $pass;

        for ($i = 0; $i < $halfsaltsize; $i++) {
            $hashed = $salt[$halfsizedec].$hashed.$salt[$halfsizeinc];
            $halfsizeinc++;
            $halfsizedec--;
        }

        $encrypted = sha1($hashed);

        return $encrypted;
    }

    //check if usermane or email already exist
    function check_createUser($username, $email) {
        global $conn;

        $stmt1 = $conn->prepare("SELECT utilizador, email FROM utilizador WHERE utilizador = ? or email = ?");
        $stmt1->execute(array($username, $email));

        return $stmt1->fetch();
    }

    //create new user in register form
    function createUser($nome, $username, $email, $morada, $dataNascimento, $password) {
        global $conn;

        $randomsalt = generateRandomSalt(16);
        $hashed = hashPassword($username, $password, $randomsalt);
    
        $stmt = $conn->prepare("INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($nome, $morada, $email, $dataNascimento, $username, $hashed, $randomsalt, 2));
    }

    //check if client login is correct
    function isLoginCorrect($username, $password) {
        global $conn;

        $stmt1 = $conn->prepare("SELECT passSalt FROM utilizador WHERE utilizador = ?");
        $stmt1->execute(array($username));
        $salt = $stmt1->fetch();
        $hashed = hashPassword($username, $password, $salt['passsalt']);

        $stmt2 = $conn->prepare("SELECT utilizador, palavrapasse FROM utilizador WHERE utilizador = ? AND palavrapasse = ?");
        $stmt2->execute(array($username, $hashed));

        return $stmt2->fetch() == true;
    }

    //check if admin login is correct
    function isLoginCorrectAdmin($admin, $password) {
        global $conn;

        $stmt1 = $conn->prepare("SELECT passSalt FROM admin WHERE administrador = ?");
        $stmt1->execute(array($admin));
        $salt = $stmt1->fetch();
        $hashed = hashPassword($admin, $password, $salt['passsalt']);

        $stmt2 = $conn->prepare("SELECT administrador, palavrapasse FROM admin WHERE administrador = ? AND palavrapasse = ?");
        $stmt2->execute(array($admin, $hashed));

        return $stmt2->fetch() == true;
    }

    function updateProfile($nome, $username, $email, $morada, $dataNascimento, $password) {
        global $conn;
        
        $stmt = $conn->prepare('UPDATE utilizador SET morada=?, email=?, dataNascimento=? SET palavrapasse=?');

        $stmt->execute(array($realname, $phone, $birthdate, $email));

        return $res;
    }

 
    function getAllProducts() {

    global $conn;

    $stmt = $conn->prepare("SELECT produto.nome, preco, descricao, categoria.nome, caminho FROM categoria INNER JOIN produto ON produto.idCategoria = categoria.idCategoria INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem");
    $stmt->execute();
    $result = $stmt->fetchAll();

    //var_dump($result);

    return $result;
    }

    function getProduto($nome) {

    global $conn;

    $stmt = $conn->prepare("SELECT produto.nome, preco, descricao, pontuacaomedia, caminho FROM produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem WHERE produto.nome = ?");

    //$stmt = $conn->prepare("SELECT produto.nome, preco, descricao, caminho FROM  produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem WHERE produto.idCategoria = ? ");
    $stmt->execute(array($nome));
    $result = $stmt->fetch();

    return $result;
    }

    function getAllClients() {

        global $conn;

        $stmt = $conn->prepare("SELECT utilizador, morada, email, datanascimento FROM utilizador");
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    function getCliente($username) {
        global $conn;

        $stmt = $conn->prepare("SELECT idutilizador, nome, morada, email, datanascimento, utilizador FROM utilizador Where utilizador = ?");
        $stmt->execute(array($username));
        $result = $stmt->fetch();

        return $result;
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
        $stmt->execute($nome);
        $result = $stmt->fetch();

        return $result;
    }

    function BanClient($nomeutilizador) {

        global $conn;

        $stmt = $conn->prepare("SELECT email FROM utilizador WHERE utilizador = ?");
        $stmt->execute(array($nomeutilizador));
        $result = $stmt->fetch();
        
        $stmt = $conn->prepare("INSERT INTO utilizadoresbans (emailbanido ) VALUES (?)");
        $stmt->execute(array($result['email']));

        $stmt = $conn->prepare("DELETE FROM utilizador WHERE utilizador = ?");
        $stmt->execute(array($nomeutilizador));

    }

    function getCategoria($nome){
        global $conn;
        
        $result = $conn->prepare("SELECT idCategoria FROM categoria Where nome = ?");
        $result->execute(array($nome));
        $row = $result->fetch();
        
        return $row['idcategoria'];
    }

    function getAllProductsCat($categoria) {

        global $conn;

        $cat = getCategoria($categoria);

        //$stmt = $conn->prepare("SELECT nome, preco, descricao FROM produto WHERE idCategoria = ?");
        $stmt = $conn->prepare("SELECT produto.nome, preco, descricao, caminho FROM  produto INNER JOIN imagemProduto ON imagemProduto.idProduto = produto.idProduto INNER JOIN imagem ON imagem.idImagem = imagemProduto.idImagem WHERE produto.idCategoria = ? ");
        $stmt->execute(array($cat));
        $result = $stmt->fetchAll();

        return $result;
    }

    function getLastCompras() {

        global $conn;

        $stmt = $conn->prepare("SELECT idUtilizador, valor, morada, data_compra, modoPagamento FROM compra");
        $stmt->execute();
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
        $i=0;

        foreach ($idP as $key) {       

        $stmt = $conn->prepare("SELECT nome, preco, descricao FROM produto WHERE idProduto = ?");
        $stmt->execute(array($key['idproduto']));
        $result = $stmt->fetch();

        $all[$i] = $result;
        $i++;

         }

        return $all;
    }

    function getIDutilizador($utilizador) {

        global $conn;

        $stmt = $conn->prepare("SELECT idUtilizador FROM utilizador WHERE utilizador = ?");
        $stmt->execute(array($utilizador));
        $result = $stmt->fetch();

        
        return $result['idutilizador'];
    }

    function getHistoricoCompras($utilizador) {


        global $conn;
        $id = getIDutilizador($utilizador);
        
        $stmt = $conn->prepare("SELECT valor, morada, data_compra, modoPagamento FROM compra WHERE idUtilizador=?");
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();


        return $result;
    }

    function getIDwishlist($utilizador) {

        global $conn;
        $id = getIDutilizador($utilizador);
        
        $stmt = $conn->prepare("SELECT idWishlist FROM wishlist WHERE idUtilizador=?");
        $stmt->execute(array($id));
        $result = $stmt->fetch();

        return $result['idwishlist'];

    }

    function getIDproduto($utilizador) {

        global $conn;
        $id = getIDwishlist($utilizador);
        
        $stmt = $conn->prepare("SELECT idProduto FROM wishlistProduto WHERE idwishlist=?");
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        return $result;

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
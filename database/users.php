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

    function getIDutilizador($utilizador) {

        global $conn;

        $stmt = $conn->prepare("SELECT idUtilizador FROM utilizador WHERE utilizador = ?");
        $stmt->execute(array($utilizador));
        $result = $stmt->fetch();

        
        return $result['idutilizador'];
    }

?>
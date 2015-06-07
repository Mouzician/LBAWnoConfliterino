<?php
	include_once($BASE_DIR . 'database/users.php');

	function getLastCompras() {
        global $conn;

        $stmt = $conn->prepare("SELECT idUtilizador, valor, morada, data_compra, modoPagamento FROM compra");
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    function getHistoricoCompras($utilizador) {
        global $conn;

        $id = getIDutilizador($utilizador);
        
        $stmt = $conn->prepare("SELECT valor, morada, data_compra, modoPagamento FROM compra WHERE idUtilizador=?");
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        return $result;
    }

    function Comprar($valor,$morada, $nomeU, $modopagamento){
        
        global $conn;

        $id = getIDutilizador($nomeU);
        
        date_default_timezone_set('Portugal/Porto');
        $date = date('Y/m/d', time());
        
        $stmt = $conn->prepare("INSERT INTO compra (idutilizador, valor, morada, data_compra, modopagamento) VALUES ('$id', '$valor', '$morada', '$date', '$modopagamento')");
        $stmt->execute();
        
    }

?>
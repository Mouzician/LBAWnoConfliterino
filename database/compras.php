<?php
	include_once($BASE_DIR . 'database/users.php');

	function getLastCompras() {
        global $conn;

        $stmt = $conn->prepare("SELECT nome, valor, compra.morada, data_compra, modoPagamento FROM compra, utilizador WHERE compra.idUtilizador=utilizador.idutilizador");
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
        var_dump($id);
        date_default_timezone_set('Portugal/Porto');
        $date = date('Y/m/d', time());
        
        $stmt = $conn->prepare("INSERT INTO compra (idutilizador, valor, morada, data_compra, modopagamento) VALUES (?,?,?,?,?) RETURNING idcompra");
        $stmt->execute(array($id,$valor,$morada, $date, $modopagamento));
        $idC = $stmt->fetch();

        $stmt = $conn->prepare("SELECT idproduto FROM carrinhocompras, produtocarrinho WHERE idUtilizador=? AND produtocarrinho.idcarrinhocompras = carrinhocompras.idcarrinhocompras");
        $stmt->execute(array($id));
        $result = $stmt->fetchAll();

        foreach ($result as $p) {

        $stmt = $conn->prepare("INSERT INTO produtocompra (idcompra, idproduto, quantidade) VALUES (?,?,?)");
        $stmt->execute(array($idC['idcompra'],$p['idproduto'], 1));


        }


        
    }

?>
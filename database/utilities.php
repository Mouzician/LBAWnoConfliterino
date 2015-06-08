<?php
	
	function statsutilizadores() {		
		global $conn;

    	$stmt1 = $conn->prepare("SELECT COUNT(*) FROM utilizador");
     	$stmt1->execute();
     	$result = $stmt1->fetch();

     	return $result['count'];
	}

	function statscompras() {		
		global $conn;

    	$stmt1 = $conn->prepare("SELECT SUM(quantidade) FROM produtocompra");
     	$stmt1->execute();
     	$result = $stmt1->fetch();

     	return $result['sum'];
	}

     function statsCommentsRegistados() {      
        global $conn;

        $stmt1 = $conn->prepare("SELECT COUNT(comentarioregistado.idcomentarioregistado) FROM comentarioregistado");
        $stmt1->execute();
        $result = $stmt1->fetch();

        return $result['count'];
    }

     function statsCommentsAnonimos() {      
        global $conn;

        $stmt1 = $conn->prepare("SELECT COUNT(comentarioanonimo.idcomentarioanonimo) FROM comentarioanonimo");
        $stmt1->execute();
        $result = $stmt1->fetch();

        return $result['count'];
    }

     function statsReclamacoes() {      
        global $conn;

        $stmt1 = $conn->prepare("SELECT COUNT(idreclamacao) FROM reclamacao");
        $stmt1->execute();
        $result = $stmt1->fetch();

        return $result['count'];
    }

?>
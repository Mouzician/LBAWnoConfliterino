<?php

	function sendEmail($userName, $userMsg, $userEmail) {

		global $conn;
		
        $stmt = $conn->prepare("INSERT INTO reclamacao (username, texto, email) VALUES (?, ?, ?)");
        $stmt->execute(array($userName, $userMsg, $userEmail));
	}

	function getAllReclamacoes() {

    global $conn;

    $stmt = $conn->prepare("SELECT username, texto, email FROM reclamacao");
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
	}

?>
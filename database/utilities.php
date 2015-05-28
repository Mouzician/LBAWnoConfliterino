<?php
	include_once('../config/init.php');
	
	function statsutilizadores() {		
		global $conn;

    	$stmt1 = $conn->prepare("SELECT COUNT(*) FROM utilizador");
     	$stmt1->execute();
     	$result = $stmt1->fetch();

     	return $result['count'];
	}

	function statscompras() {		
		global $conn;

    	$stmt1 = $conn->prepare("SELECT COUNT(*) FROM compra");
     	$stmt1->execute();
     	$result = $stmt1->fetch();

     	return $result['count'];
	}

?>
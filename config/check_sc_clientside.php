<?php

	function check_sc_set() {
		if(isset($_SESSION['username']) || isset($_COOKIE['username'])) {
			header('Location: '.$BASE_DIR.'view_index.php');		
			exit();
		}
	}

	function check_sc_set_admin() {
		if(isset($_SESSION['admin']) || isset($_COOKIE['admin'])) {
			header('Location: '.$BASE_DIR.'admin/view_dashboard.php');
			exit();
		}
	}

	function check_sc_notset() {
		if(!isset($_SESSION['username']) && !isset($_COOKIE['username']) && !isset($_SESSION['admin']) && !isset($_COOKIE['admin'])) {
			header('Location: '.$BASE_DIR.'view_index.php');
			exit();
		}
	}

?>
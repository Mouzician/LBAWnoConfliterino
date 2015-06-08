<?php
  	include_once('../../config/init.php');
  	include_once($BASE_DIR.'config/check_sc_adminside.php');
  	include_once($BASE_DIR.'database/users.php');
  	include_once($BASE_DIR.'database/utilities.php');

	check_sc_set();
	check_sc_notset();	

	$num_utilizadores = statsutilizadores();
  	$num_compras = statscompras();
  	$num_commentsR =statsCommentsRegistados();
  	$num_commentsA =statsCommentsAnonimos();
  	$num_comments = $num_commentsR + $num_commentsA;
  	$num_reclamacoes = statsReclamacoes();

  	//var_dump($num_comments);
	$smarty->assign('num_reclamacoes', $num_reclamacoes);
	$smarty->assign('num_utilizadores', $num_utilizadores);
  	$smarty->assign('num_compras', $num_compras);
  	$smarty->assign('num_comments', $num_comments);


  	$smarty->display('admin/dashboard.tpl');
?>

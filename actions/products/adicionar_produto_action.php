<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/produtos.php');
	include_once($BASE_DIR . 'database/images.php');
	
	//$valid_formats = array("jpg", "png", "gif", "jpeg", "bmp");
	//$max_file_size = 1024*100000; //100 kb
	//$path = $BASE_DIR. 'images/products/ ' ; // Upload directory
	//$count = 0;

	$nomeProduto = $_POST['nomeProduto'];
	//$categoria = $_POST['categoria'];
	$subcategoria = $_POST['subcategoria'];
	$descricaoProduto = $_POST['descricaoProduto'];
	$preco = $_POST['preco'];
	
	var_dump($nomeProduto);
	var_dump($subcategoria);
	var_dump($descricaoProduto);
	var_dump($preco);
	adicionarProduto($nomeProduto, $subcategoria, $descricaoProduto, $preco);
	
	// Loop $_FILES to execute all files
	/*foreach ($_FILES['files']['name'] as $f => $name) {     
		if ($_FILES['files']['error'][$f] == 4) {
			continue; // Skip file if any error found
		}	       
		if ($_FILES['files']['error'][$f] == 0) {	           
			if ($_FILES['files']['size'][$f] > $max_file_size) {
				$message[] = "$name is too large!.";
				continue; // Skip large files
			}
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
			else{ // No error found! Move uploaded files 
				if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
				insertImagemProduto($path.$name, $idP);
				$count++; // Number of successfully uploaded file
			}
		}
	}*/
	
	header('Location: ' . $BASE_URL);
	exit();
?>
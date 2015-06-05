<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/produtos.php');
	include_once($BASE_DIR . 'database/images.php');
	
	$valid_formats = array("jpg", "png", "gif", "jpeg", "bmp");
	//$max_file_size = 1024*100000; //100 kb
	$path = $BASE_DIR. 'images/products/' ; // Upload directory
	$pathSaveImage = 'images/products/';

	$nomeProduto = $_POST['nomeProduto'];
	//$categoria = $_POST['categoria'];
	$subcategoria = $_POST['subcategoria'];
	$descricaoProduto = $_POST['descricaoProduto'];
	(float)$preco = $_POST['preco'];
	//$Files = $_POST['files'];
	
	/*$indicador = false;
	foreach ($_FILES['userFile']['name'] as $name) {
	
		// Check if file already exists
		if (file_exists($path.$info['basename'])) {

			$indicador = true;
		    echo "<script>
			alert('Já existe esse nome da imagem!');
			</script>";
		}
	}
	
	$count = 0;*/

	//if($indicador == false) {

	$idP = adicionarProduto($nomeProduto, $subcategoria, $descricaoProduto, (float)$preco);

		foreach ($_FILES['userFile']['name'] as $name) {


				$info = pathinfo($name);
				var_dump($info);
				var_dump($path.$info['basename']); 
				move_uploaded_file($_FILES['userFile']['tmp_name'][$count], $path.$info['basename']);
				insertImagemProduto($pathSaveImage.$name, $idP);
				$count++;
		}
	//}

		
	header('Location: ' . $BASE_URL);
	exit();

?>
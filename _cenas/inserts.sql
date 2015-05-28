	-----------------------------
	---------- INSERTS ----------
	-----------------------------

	-- IMAGEM --

	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\adminandreregado.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\andreiagaspar.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoAsusROG.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\mariapereira.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\adminfranciscocouto.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoAcerEssential.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\joaoantunes.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\adminmarioferreira.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\adrianateixeira.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoSamsungT335.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\adminruigoncalves.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoSamsungT335.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\carlagomes.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\ricardosilva.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoRatoX3000.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoEpsonExpression.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoLGG3D855.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoAppleMC184.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoCanonCanoScan.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoTP-LinkRouter3G.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoAsusX555LD-XO034H.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoAcerIconia.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoMcAfeeLiveSafe.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoVerbatimStore''n''Go.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoNokiaLumia830.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\produtoRazerVespula.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\catarinaalmeida.jpg');
	INSERT INTO imagem (caminho)
			 VALUES ('Pictures\\augustosousa.jpg');


	-- UTILIZADOR --

	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('Maria Pereira', 'Rua das Flores', 'mariapereira123@gmail.com', '1954-03-13', 'mariperi', 'mariarules', 'salt1', 4);
	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('Adriana Teixeira', 'Rua dos Azeites', 'adric23@gmail.com', '1998-09-23', 'adrisol', 'portugal123', 'salt2', 9);
	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('Andreia Gaspar', 'Avenida Manoel de Oliveira', 'agasparzinho@gmail.com', '1994-12-13', 'andreia349', 'passandreia', 'salt3', 2);
	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('João Antunes', 'Avenida D. Afonso Henriques', 'antunes1415@gmail.com', '1979-03-30', 'antunesbadass', 'antunes23pass', 'salt4', 7);
	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('Carla Gomes', 'Rua das Alminhas', 'carlita.gomes4@gmail.com', '1990-07-18', 'teisha', 'carlagpass', 'salt5', 13);
	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('Ricardo Silva', 'Rua Dr. Mário Soares', 'madrugz23@gmail.com', '1986-08-29', 'ricardaoS', 'ppdestroy', 'slat6', 14);
	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('Catarina Almeida', 'Rua dos Defuntos Ibéricos', 'katinha.almeida@gmail.com', '1989-11-26', 'kusha6', 'catapass', 'slat7', 27);
	INSERT INTO utilizador (nome, morada, email, dataNascimento, utilizador, palavrapasse, passSalt, idImagem)
			VALUES ('Augusto Sousa', 'Avenida da Boavista', 'aaugustosousa@gmail.com', '1957-08-17', 'mieic4ever', 'gusto23', 'salt8', 28);


	-- ADMIN --

	INSERT INTO admin (nome, administrador, palavrapasse, passSalt, idImagem)
			VALUES ('Rui Gonçalves', 'ruigonçalves', 'ruipass', 'saltrui', 11);
	INSERT INTO admin (nome, administrador, palavrapasse, passSalt, idImagem)
			VALUES ('André Regado', 'andreregado', 'andrepass', 'saltandre', 1);
	INSERT INTO admin (nome, administrador, palavrapasse, passSalt, idImagem)
			VALUES ('Mário Ferreira', 'marioferreira', 'mariopass', 'saltmario', 8);
	INSERT INTO admin (nome, administrador, palavrapasse, passSalt, idImagem)
			VALUES ('Francisco Couto', 'franciscocouto', 'franciscopass', 'saltxiko', 5);


	-- UTILIZADORESBANS --

	INSERT INTO utilizadoresbans (emailbanido)
			 VALUES ('mariapereira123@gmail.com');
	INSERT INTO utilizadoresbans (emailbanido)
			 VALUES ('antunes1415@gmail.com');


	-- CATEGORIA --

	INSERT INTO categoria (nome)
			 VALUES ('Informática');
	INSERT INTO categoria (nome)
			 VALUES ('Imagem e Som');
	INSERT INTO categoria (nome)
			 VALUES ('Comunicações');


	-- PROMOCAO --

	INSERT INTO promocao (dataInicio, dataFim, desconto)
			 VALUES ('2015-01-03 00:00:00', '2015-02-12 00:00:00', 15);
	INSERT INTO promocao (dataInicio, dataFim, desconto)
			 VALUES ('2015-06-20 14:00:00', '2015-07-18 14:00:00', 40);
	INSERT INTO promocao (dataInicio, dataFim, desconto)
			 VALUES ('2015-03-01 12:00:00', '2015-03-07 12:00:00', 20);


	-- PRODUTO --

	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria)
			VALUES ('Asus ROG GR8-R049R', 1099.99, 'Desktop Gaming Ultra High-Tech', 3.43, 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria, idPromocao)
			VALUES ('Samsung T335 Galaxy Tab 4 8.0 LTE', 269.99, 'Tablet para uso diário', 4.4, 2, 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria)
			VALUES ('Acer Essential 206HQLAb', 1079.99, 'Ecrã retina Ultra HD 4k', 3.78, 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria)
			VALUES ('Apple iMac 21'' i5-1,4GHz | 8GB', 1129.99, 'Um dos melhores produtos comercializados pela Apple, mais avançado que qualquer outro do género', 3.98, 1);
	INSERT INTO produto (nome, preco, descricao, idCategoria)
			VALUES ('Razer Tapete Rato Vespula', 36.99, 'Tapete de rato gaming', 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria, idPromocao)
			VALUES ('HP Rato Wireless X3000', 14.99, 'Rato de design fino e moderno, com características avançadas e duradouras.', 4.23, 1, 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria, idPromocao)
			VALUES ('Epson Expression Home XP-425 Wi-Fi', 99.99, 'Impressão, cópia e digitalização ao mais alto nível.', 2.89, 3, 3);
	INSERT INTO produto (nome, preco, descricao, idCategoria, idPromocao)
			VALUES ('LG G3 D855 - 32GB', 454.99, 'Smartphone Android de última geração, com câmera de 12Mpx', 1, 2);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria)
			VALUES ('Apple MC184, EN-INT', 69.99, 'Teclado para computadores Apple', 4.34, 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria, idPromocao)
			VALUES ('Canon CanoScan 9000F Mark II', 79.99, 'Scanner com digitalização a cores e scanning de filmes', 3.13, 1, 2);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria, idPromocao)
			VALUES ('TP-Link Router 3G Wireless N M5350', 1079.99, 'Equipado com um modem 3G incorporado, que permite velocidades acima dos 21.6Mbps', 3.36, 3, 1);
	INSERT INTO produto (nome, preco, descricao, idCategoria, idPromocao)
			VALUES ('Asus X555LD-XO034H', 699.99, 'Desktop com processador Intel® Core i7-4510H, 8GB de RAM e 1TB de Disco Rígido', 2, 2);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria)
			VALUES ('Acer Iconia W1-810', 129.99, 'Tablet Windows, com 8 polegadas de ecrã e processador Intel® Atom™ Z3735G Quad Core', 4.12, 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria, idPromocao)
			VALUES ('McAfee LiveSafe 2015 (Multiplataforma | 1 Ano)', 89.99, 'Antivírus McAfee, bloqueia as infeções dos seus dispositivos por vírus, malware a ameaças online mais recentes', 3.67, 2, 3);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria)
			VALUES ('Verbatim Store''n''Go 3.0 1TB', 84.95, 'Disco externo portátil com capacidade de 1TB, oferecendo uma transferência até 10 vezes mais rápida que USB2.0', 4.56, 1);
	INSERT INTO produto (nome, preco, descricao, pontuacaoMedia, idCategoria)
			VALUES ('Nokia Lumia 830', 244.99, 'Um dos mais avançados e modernos smartphones disponíveis atualmente no mercado.', 4.1, 3);


	-- IMAGEMPRODUTO --

	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (3, 1);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (6, 2);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (10, 3);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (12, 4);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (15, 5);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (16, 6);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (17, 7);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (18, 8);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (19, 9);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (20, 10);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (21, 11);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (22, 12);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (23, 13);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (24, 14);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (25, 15);
	INSERT INTO imagemProduto (idImagem, idProduto)
			VALUES (26, 16);


	-- COMPRA --

	INSERT INTO compra (idUtilizador, valor, morada, data_compra, modoPagamento)
			 VALUES (5, 407.56, 'Rua das Alminhas', '2015-03-23', 'PayPal');
	INSERT INTO compra (idUtilizador, valor, morada, data_compra, modoPagamento)
			 VALUES (2, 2403.97, 'Rua dos Azeites', DEFAULT, 'Cartão de Crédito');
	INSERT INTO compra (idUtilizador, valor, morada, data_compra, modoPagamento)
			 VALUES (5, 84.95, 'Avenida das Almas Penadas', '2015-03-29', 'PayPal');
	INSERT INTO compra (idUtilizador, valor, morada, data_compra, modoPagamento)
			 VALUES (7, 56.64, 'Rua dos Defuntos Ibéricos', DEFAULT, 'Referência Multibanco');
	INSERT INTO compra (idUtilizador, valor, morada, data_compra, modoPagamento)
			 VALUES (8, 315.16, 'Avenida da Boavista', '2015-04-10', 'Cartão de Crédito');


	-- COMENTARIOREGISTADO --

	INSERT INTO comentarioRegistado (idProduto, idUtilizador, comentario, ultima_atualizacao)
			 VALUES (2, 4, 'Gostei muito deste produto, recomendo a quem estiver indeciso entre diferentes marcas!', '2015-03-04 00:00:00');
	INSERT INTO comentarioRegistado (idProduto, idUtilizador, comentario)
			 VALUES (7, 1, 'Este produto não é dos melhores ppl, já comprei dois produtos desta marca e tive mts problemas.');


	-- COMENTARIOANONIMO --

	INSERT INTO comentarioAnonimo (idProduto, nome, comentario)
			 VALUES (3, 'Vitor Guerra', 'Melhor produto do mercado! Brutal mesmo!!');
	INSERT INTO comentarioAnonimo (idProduto, nome, comentario, ultima_atualizacao)
			 VALUES (4, 'TechGuy', 'Esta pen só traz chatices de certeza, perdi informaçao preciosa por causa deste fabricante duas vezes...', DEFAULT);


	-- PONTUACAO --

	INSERT INTO pontuacao (idProduto, idUtilizador, valor)
			 VALUES (2, 4, 5);
	INSERT INTO pontuacao (idProduto, idUtilizador, valor)
			 VALUES (3, 1, 2);
	INSERT INTO pontuacao (idProduto, idUtilizador, valor)
			 VALUES (7, 6, 4);
	INSERT INTO pontuacao (idProduto, idUtilizador, valor)
			 VALUES (12, 8, 3);
	INSERT INTO pontuacao (idProduto, idUtilizador, valor)
			 VALUES (15, 5, 4);
	INSERT INTO pontuacao (idProduto, idUtilizador, valor)
			 VALUES (14, 7, 5);
	INSERT INTO pontuacao (idProduto, idUtilizador, valor)
			 VALUES (4, 1, 3);


	-- RECLAMAÇAO --

	INSERT INTO reclamacao (username, texto, email)
			VALUES ('andre', 'Caro administrador, aqui à dias tive um problema com um produto que comprei através deste site, exijo que me seja feita a devoloção total do dinheiro', 'andre@andre');
	INSERT INTO reclamacao (username, texto, email)
			VALUES ('chico', 'Então é assim: isto é uma bandidagem de site, nao tem jeito nenhum os produtos que aqui vendem e vou fazer queixa à DECO!', 'chico@chico');
	INSERT INTO reclamacao (username, texto, email)
			VALUES ('rui', 'Boa Tarde, isto não será bem uma reclamação, mas antes uma sugestão. Sugiro aos senhores administradores que forneçam mais apoio ao cliente.', 'rui@rui');
	INSERT INTO reclamacao (username, texto, email)
			VALUES ('mario','Informo que estarei a processar o vosso site por má conduta cívica em relação aos cliente.', 'mario@mario');
	

	-- WISHLIST --

	INSERT INTO wishlist (idUtilizador)
			 VALUES (3);
	INSERT INTO wishlist (idUtilizador)
			 VALUES (2);
	INSERT INTO wishlist (idUtilizador)
			 VALUES (1);
	INSERT INTO wishlist (idUtilizador)
			 VALUES (4);
	INSERT INTO wishlist (idUtilizador)
			 VALUES (7);
	INSERT INTO wishlist (idUtilizador)
			 VALUES (6);


	-- CARRINHOCOMPRAS --

	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (5);
	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (2);
	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (7);
	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (8);
	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (2);
	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (1);
	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (3);
	INSERT INTO carrinhoCompras (idUtilizador)
			VALUES (5);


	-- PRODUTOCARRINHO --

	INSERT INTO produtoCarrinho (idCarrinhoCompras, idProduto, quantidade)
			VALUES (8, 4, DEFAULT);
	INSERT INTO produtoCarrinho (idCarrinhoCompras, idProduto, quantidade)
			VALUES (4, 9, 2);
	INSERT INTO produtoCarrinho (idCarrinhoCompras, idProduto, quantidade)
			VALUES (3, 1, 1);
	INSERT INTO produtoCarrinho (idCarrinhoCompras, idProduto, quantidade)
			VALUES (6, 2, DEFAULT);
	INSERT INTO produtoCarrinho (idCarrinhoCompras, idProduto, quantidade)
			VALUES (3, 13, 4);
	INSERT INTO produtoCarrinho (idCarrinhoCompras, idProduto, quantidade)
			VALUES (1, 4, 3);


	-- WISHLISTPRODUTO --

	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (2, 4);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (3, 1);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (4, 2);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (1, 3);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (4, 13);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (5, 10);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (3, 7);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (6, 12);
	INSERT INTO wishlistProduto (idWishlist, idProduto)
			VALUES (6, 2);
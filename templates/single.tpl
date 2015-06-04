{include file='common/head.tpl'}
	<title>MarKnad - Produto</title>
	<!-- Custom CSS files -->
	<link href="{$BASE_URL}css/form.css" rel="stylesheet" type="text/css" media="all">
	<link href="{$BASE_URL}css/etalage.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		{include file='common/navbar.tpl'}
	</div>

	<!-- start-single-page -->
	<!-- content -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
                    <a href="{$BASE_URL}" title="Ir para a página inicial"><img src="{$BASE_URL}images/icons/home.png" alt=""/></a>&nbsp;
                </li>
                <span>&gt;</span>
                <li>Produtos</li>&nbsp;
                <span>&gt;</span>
				<li>Computadores</a></li>
            </ul>
            <ul class="previous">
            	<li><a href="{$BASE_URL}">Voltar à página inicial</a></li>
        	</ul>
            <div class="clearfix"></div>
		</div>
	</div>	

	<!-- start content -->
	<div class="women_main">
		<div class="container">
			<div class="row single">
				<div class="col-md-9 span-single">
				    <div class="single_left">
				    	<!-- images to zoom -->
						<div class="grid images_3_of_2">
							<ul id="etalage">
								<li>									
									<img class="etalage_thumb_image" src="{$BASE_URL}images/products/HP2.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="{$BASE_URL}images/products/HP2.jpg" class="img-responsive" title="" />
								</li>
								<li>
									<img class="etalage_thumb_image" src="{$BASE_URL}images/products/HP2.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="{$BASE_URL}images/products/HP2.jpg" class="img-responsive" title="" />
								</li>
								<!--<li>
									<img class="etalage_thumb_image" src="{$BASE_URL}images/products/HP3.jpg" class="img-responsive"  />
									<img class="etalage_source_image" src="{$BASE_URL}images/products/HP3.jpg"class="img-responsive"  />
								</li>
						    	<li>
									<img class="etalage_thumb_image" src="{$BASE_URL}images/products/HP4.jpg" class="img-responsive"  />
									<img class="etalage_source_image" src="{$BASE_URL}images/products/HP4.jpg"class="img-responsive"  />
								</li>-->
							</ul>
							<div class="clearfix"></div>		
				  		</div>
				  		<!-- price/related/colors -->
				  		<div class="desc1 span_3_of_2">
							<h3>{$produto.nome}</h3>
							<p>{$produto.preco}€</p>
							<div class="det_nav">
								<h4>Equipado com :</h4>
								<ul>
									<li><a href="#"><figure> <img src="{$BASE_URL}images/assets/beats.png" class="img-responsive" alt="" /> <figcaption>Beats Audio</figcaption> </figure></a></li>
									<li><a href="#"><figure> <img src="{$BASE_URL}images/assets/connectedmusic.png" class="img-responsive" alt="" /> <figcaption>HP Music Connected</figcaption> </figure></a></li>
									<li><a href="#"><figure> <img src="{$BASE_URL}images/assets/simplepass.png" class="img-responsive" alt="" /> <figcaption>HP SimplePass</figcaption> </figure></a></li>
									<li><a href="#"><figure> <img src="{$BASE_URL}images/assets/wireless.png" class="img-responsive" alt="" /> <figcaption>Tecnologia sem fios</figcaption> </figure></a></li>
									</ul>
							</div>

							<div class="btn_form">
								<a href="{$BASE_URL}pages/view_single.php">Adicionar ao carrinho</a>
							</div>
							{if isset($username)}
							<a href="{$BASE_URL}pages/view_single.php?produto={$produto.nome}&add=true"><span>Adicionar Produto à wishlist!</span></a>
							{else}
    						<a href="{$BASE_URL}pages/view_signin.php"><span>Faça login para adicionar à wishlist!</span></a>
    						{/if}
						</div>
          	    		<div class="clearfix"></div>
          	   		</div>
          	   		<!-- details -->
          	   		<div class="single-bottom1">
						<h6>Descri&ccedil;&atilde;o geral de produto</h6>
						<p class="prod-desc"><p>
							{$produto.descricao}
						</p>
					</div>

					<!--coments box -->
					<div class="detailBox">
						<div class="titleBox">
							<label>Deixe aqui a sua opinião sobre o produto</label>
						</div>
						<div class="actionBox">
							<ul class="commentList">
								<li>
									<div class="commenterImage">
										<img src="http://lorempixel.com/50/50/people/6" />
									</div>
									<div class="commentText">
										<p class="">Hello this is a test comment.</p>

									</div>
								</li>
								<li>
									<div class="commenterImage">
										<img src="http://lorempixel.com/50/50/people/7" />
									</div>
									<div class="commentText">
										<p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p>
									</div>
								</li>
								<li>
									<div class="commenterImage">
										<img src="http://lorempixel.com/50/50/people/9" />
									</div>
									<div class="commentText">
										<p class="">Hello this is a test comment.</p>
									</div>
								</li>
							</ul>
							<form class="form-inline" role="form">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Your comments" />
								</div>
								<div class="form-group">
									<button class="btn btn-default">Adicionar</button>
								</div>
							</form>
						</div>
					</div>

					<!-- related products -->
					<div class="single-bottom2">
						<h6>Produtos Relacionados </h6>
						<!-- first related product -->
						<div class="product">
						  	<div class="product-desc">
								<div class="product-img">
		                           	<img src="{$BASE_URL}images/products/Toshiba1.jpg" class="img-responsive " alt=""/>
		                       	</div>
		                        <div class="prod1-desc">
		                           	<h5><a class="product_link" href="#">Toshiba Qosmio X70-B-103</a></h5>
		                           	<p class="product_descr">
										Tipo Performance<br />
										Processador Intel&reg; Core&trade; i7-4710HQ Quad Core<br />
										Mem&oacute;ria RAM 16 GB<br />
										Disco R&iacute;gido 2 TB<br />
										Placa Gr&aacute;fica AMD Radeon&trade; R9 M265X</p>									
							    </div>
							  	<div class="clearfix"></div>
					      	</div>
						  	<div class="product_price">
								<span class="price-access">€1499</span>								
								<button class="button1"><span>Adicionar ao carrinho</span></button>
		                  	</div>
						 	<div class="clearfix"></div>
				     	</div>
				     	<!-- second related product -->
				     	<div class="product">
							<div class="product-desc">
								<div class="product-img">
		                           	<img src="{$BASE_URL}images/products/Lenovo1.jpg" class="img-responsive " alt=""/>
		                       	</div>
		                   		<div class="prod1-desc">
		                            <h5><a class="product_link" href="#">Lenovo Z50-70</a></h5>
		                            <p class="product_descr">
										Tipo: Performance<br />
										Mem&oacute;ria RAM: 16 GB<br />
										Disco R&iacute;gido: 128GB SSD + 1TB HDD<br />
										Placa Gr&aacute;fica: NVIDIA&reg; GeForce&trade; GTX 860M +<br />
										Intel&reg; HD Graphics 4600</p>									
							   	</div>
							   	<div class="clearfix"></div>
					      	</div>
						  	<div class="product_price">
								<span class="price-access">€999</span>								
								<button class="button1"><span>Adicionar ao carrinho</span></button>
		               		</div>
						 	<div class="clearfix"></div>
				     	</div>
				     	<!-- third related product -->
					 	<div class="product">
						   	<div class="product-desc">
								<div class="product-img">
		                           	<img src="{$BASE_URL}images/products/Asus1.jpg" class="img-responsive " alt=""/>
		                   		</div>
		                       	<div class="prod1-desc">
		                           	<h5><a class="product_link" href="#">Asus ROG GL551JM-CN212H</a></h5>
		                           	<p class="product_descr"> <p>Tipo: Performance<br />
										Processador: Intel&reg; Core&trade; i7-4710HQ Quad Core<br />
										Mem&oacute;ria RAM: 16 GB<br />
										Disco R&iacute;gido: 128GB SSD + 1TB HDD<br />
										Placa Gr&aacute;fica: NVIDIA&reg; GeForce&trade; GTX 860M +<br />
										Intel&reg; HD Graphics 4600</p>									
						   		</div>
						   		<div class="clearfix"></div>
					    	</div>
							<div class="product_price">
								<span class="price-access">€1399</span>								
								<button class="button1"><span>Adicionar ao carrinho</span></button>
		                	</div>
							<div class="clearfix"></div>
				     	</div>
		   	  		</div>       		
	  			</div>
	 			<!-- sidebar -->
	  			<div class="col-md-3 span_1_of_right">
	  				<div class="w_nav1">
						<h4>Classificação</h4>
						<div class="rtng">
					    	<form action="" class="sky-form">
						     	<fieldset>					
							   		<section>
							     		<div class="rating">
											<input type="radio" name="stars-rating" id="stars-rating-5">
												<label for="stars-rating-5"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-4">
												<label for="stars-rating-4"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-3">
												<label for="stars-rating-3"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-2">
												<label for="stars-rating-2"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-1">
												<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng"></span>
											<div class="clearfix"></div>
								 		</div>
							  		</section>
						    	</fieldset>
						  	</form>
						</div>
						<p> </br> </p>
					</div>					
				</div>
		 	</div>
		</div>
	</div>

	<!--footer-->
    {include file='common/footer.tpl'}
    <!-- Scripts -->
	<script src="{$BASE_URL}javascript/bootstrap-rating-input.min.js"></script>	
	<script src="{$BASE_URL}javascript/jquery.etalage.min.js"></script>
	<script type="text/javascript" src="{$BASE_URL}javascript/etalage.js"></script>
	
</body>
</html>
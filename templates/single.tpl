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

								{foreach $imagens as $imagem}
								<li>									
									<img class="etalage_thumb_image" src="{$BASE_URL}{$imagem}" class="img-responsive" />
									<img class="etalage_source_image" src="{$BASE_URL}{$imagem}" class="img-responsive" />
									
								</li>
								{/foreach}

							</ul>
							
							<div class="clearfix"></div>		
				  		</div>
				  		<!-- price/related/colors -->
				  		<div class="desc1 span_3_of_2">
							<h3>{$produto.nome}</h3>
							<p>{$produto.preco}€</p>
							<div class="det_nav">
								<h4>Opinião dos nossos utilizadores :</h4>
								<ul>
                                    {if $ratg.count eq 0}
                                    <li><a href="#"><figure> <img src="{$BASE_URL}images/assets/sse.png" class="img-responsive" alt="" /></li> <li><figcaption>Não existem classificações ainda!</figcaption> </figure></a></li>
                                    {elseif $ratg.sum eq 0}
                                    <li><a href="#"><figure> <img src="{$BASE_URL}images/assets/sse.png" class="img-responsive" alt="" /> <li><figcaption >Não existem classificações ainda!</figcaption> </figure></a>
                                    {else}
                                    <li><a href="#"><figure> <img src="{$BASE_URL}images/assets/calou.png" class="img-responsive" alt="" /></li> <li><figcaption>Recomendação dos nossos utilizadores: {$ratg.sum/$ratg.count}</figcaption> </figure></a></li>
                                    {/if}
									</ul>
							</div>

							<div class="btn_form">
								<a href="{$BASE_URL}pages/view_single.php?produto={$produto.nome}&add=false">Adicionar ao carrinho</a>
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
							{foreach $comments as $row}
							<ul class="commentList">
								<li>
									<div class="commenterImage">
										<img src="{$BASE_URL}{$row.caminho}" />
									</div>
									<div class="commentText">
										<p class="">{$row.comentario}</p>

									</div>
								</li>
							</ul>
							{/foreach}
							<form class="form-inline" role="form" action="{$BASE_URL}actions/products/newComment.php" method="post">
								<div class="form-group">
									<input name="idProduto" type="number" value="{$idProduto}" hidden>
									<input name="comment" class="form-control" type="text" placeholder="Your comments" />
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-default">Adicionar</button>
								</div>
							</form>
						</div>
					</div>

					<!-- related products -->
					<div class="single-bottom2">
						<h6>Produtos Relacionados </h6>
						<!-- first related product -->
						<div class="product">
							{foreach $recomendados as $recomen}
							<form role ="form" method="post">
                            <input type="hidden" name="name" value="{$recomen.nome}">
						  	
						  	<div class="product-desc">
						  		
								<div class="product-img">
		                           	<img src="{$BASE_URL}{$recomen.caminho}" class="img-responsive " alt=""/>
		                       	</div>
		                        <div class="prod1-desc">
		                        	
		                           	<h5><a class="product_link" href="{$BASE_URL}pages/view_single.php?produto={$recomen.nome}">{$recomen.nome}</a></h5>
		                           	<p class="product_descr">
										{$recomen.descricao}</p>		
															
							    </div>
							  	<div class="clearfix"></div>
					      	</div>
						  	<div class="product_price">
								<span class="price-access">{$recomen.preco}</span>	
								<!--<button class="button1"><span>Adicionar ao carrinho</span></button>-->
		                  	</div>
		             
						 	<div class="clearfix"></div>
						 	 </form>
						{/foreach}
				     	</div>
		   	  		</div>       		
	  			</div>
	 			<!-- sidebar -->
	  			<div class="col-md-3 span_1_of_right">
	  				<div class="w_nav1">
						<h4>Dê a sua opinião!</h4>
						<div class="rtng">
					    	<form action="{$BASE_URL}actions/users/votar.php?prodn={$produto.nome}" method="POST">
						     	    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
                                    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
                                    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
                                    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
                                    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
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
	<script src="{$BASE_URL}javascript/rating.js"></script>	
	<script src="{$BASE_URL}javascript/jquery.etalage.min.js"></script>
	<script type="text/javascript" src="{$BASE_URL}javascript/etalage.js"></script>
	
</body>
</html>
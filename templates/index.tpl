{include file='common/head.tpl'}
	<title>MarKnad - Loja Online Informática</title>
</head>

<body>
	<!-- navbar + banner -->
	<div class="header" id="home">
		<!-- main navbar -->
		{include file='common/navbar.tpl'}
		<!-- banner -->
		<div class="banner">
			<div class="signing text-right">
				<div class="container">
					<div class="sign-in">
						{if isset($username)}
						<a href="{$BASE_URL}actions/users/logout.php">Log Out</a>
					{else}
    				<a href="{$BASE_URL}pages/view_signin.php">Aceda ao nosso site</a>
    				{/if}
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="banner-info text-center">
				<i class="shipping"></i>
				<h3>Loja Informática online</h3>
				<p>Se pretende adquirir algum produto eletrónico, não hesite em comprar na Marknad.</p>
				<a href="{$BASE_URL}pages/view_products.php?page_name=All">Todos os Produtos</a>
			</div>
		</div><!-- closes banner -->
	</div><!-- closes navbar + banner -->
	
	<!-- Top vendas	-->	
	<div class="container">
		<div class="recommand-section">
			<div class="recommand-section-head text-center">
				<h3><span>Top</span> Vendas</h3>
				<p>Os produtos mais vendidos</p>
			</div>
			<div class="recommand-section-grids">
				<div class="standards">						
					<div class="standard_content">
						<!-- 1st product -->
						<div class="tag-grid">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="{$BASE_URL}pages/view_single.php" class="b-link-stripe b-animate-go  thickbox">
						    		<img src="{$BASE_URL}images/products/portatiltoshiba.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Adicionar ao carrinho</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="{$BASE_URL}images/icons/icon-eye.png" class="img-responsive go" alt=""/></h2></div>
						    		</a>
									<div class="r-title">
										<h3>Portátil Toshiba</h3>
										<h4>$999</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<!-- 2nd product -->
						<div class="tag-grid">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="{$BASE_URL}pages/view_single.php" class="b-link-stripe b-animate-go  thickbox">
									<img src="{$BASE_URL}images/products/portatilasus.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Adicionar ao carrinho</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="{$BASE_URL}images/icons/icon-eye.png" class="img-responsive go" alt=""/></h2></div>
									</a>
									<div class="r-title">
										<h3>Portátil Asus</h3>
										<h4>$899</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<!-- 3rd product -->
						<div class="tag-grid">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="{$BASE_URL}pages/view_single.php" class="b-link-stripe b-animate-go  thickbox">
						     		<img src="{$BASE_URL}images/products/sony.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Adicionar ao carrinho</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="{$BASE_URL}images/icons/icon-eye.png" class="img-responsive go" alt=""/></h2></div>
						  			</a>
									<div class="r-title">
										<h3>Telemóvel Sony</h3>
										<h4>$199</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="recommand-section">
			<div class="recommand-section-head text-left">
				<h3>Utilizadores Registados: <span style="padding-right:120px">{$num_utilizadores}</span>  Produtos Vendidos: <span>{$num_compras}</span> </h3>
			</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	{include file='common/footer.tpl'}
	<!-- Scripts -->
	<script type="text/javascript" src="{$BASE_URL}javascript/scripts.js"></script>

</body>
</html>
{include file='common/head.tpl'}
	<title>MarKnad - Contacte-nos</title>
	<!-- Custom CSS files -->
    <link href="{$BASE_URL}css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		{include file='common/navbar.tpl'}
	</div>

	<!-- start Contact-page -->
	<!-- content-section-starts -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
                	<a href="{$BASE_URL}" title="Retornar à pagina inicial"><img src="{$BASE_URL}images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
             	<li>Reclamações / Sugestões</li>
            </ul>
            <ul class="previous">
               	<li><a href="{$BASE_URL}">Voltar à página inicial</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div class="contact">				
			<div class="contact-form">
			 	<h2>Contacte-nos</h2>
			 	<form method="post" action="{$BASE_URL}actions/reclamacao/reclamacao.php">
				   	<div>
				    	<span><label>Nome</label></span>
					    <span><input name="userName" type="text" class="textbox"></span>
					</div>
					<div>
					   	<span><label>E-mail</label></span>
					   	<span><input name="userEmail" type="email" class="textbox"></span>
					</div>
					<div>
					   	<span><label>Assunto</label></span>
					   	<span><textarea name="userMsg"> </textarea></span>
					</div>
					<div>
						<span><input type="submit" class="" value="Submeter"></span>
					</div>
				</form>
			</div>
  			<div class="clearfix"></div>		
		</div>
	</div>
	<!-- content-section-ends -->

	<!--footer-->
    {include file='common/footer.tpl'}
	
</body>
</html>
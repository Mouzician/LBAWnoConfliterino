{include file='../common/head.tpl'}
	<title>MarKnad - Responder</title>
	<!-- Custom CSS files -->
    <link href="{$BASE_URL}css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
	<!-- header-section-starts -->
	<!-- start Contact-page -->
	<!-- content-section-starts -->
	<div class="container">
		<div class="dreamcrub">
            <ul class="previous">
               	<li><a href="{$BASE_URL}pages/admin/view_reclamações.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div class="contact">
			<div class="contact-form">
			 	<h2>Remetente: {$user}</h2>
			 	<form method="post" action="{$BASE_URL}actions/reclamacao/reclamacao.php">
				   	<div>
				    	<span><label>Administrador Responsável</label></span>
					    <span><input name="userName" type="text" class="textbox" value="{$admin}" readonly></span>
					</div>
					<div>
					   	<span><label>E-mail do Cliente</label></span>
					   	<span><input name="userEmail" type="email" class="textbox" value="{$mail}" readonly></span>
					</div>
					<div>
					   	<span><label>Assunto</label></span>
					   	<span><textarea name="userMsg"> </textarea></span>
					</div>
					<div>
						<span><input type="submit" class="" value="Responder"></span>
					</div>
				</form>
			</div>
  			<div class="clearfix"></div>		
		</div>
	</div>
	<!-- content-section-ends -->

	<!--footer-->
    {include file='../common/footer.tpl'}
	
</body>
</html>
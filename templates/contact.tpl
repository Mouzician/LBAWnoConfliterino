<!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Contacte-nos</title>
	<!-- meta tags -->
    <meta name="author" content="MarKnad Inc.">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<meta http-equiv="content-Type" content="text/html; charset=utf-8">
	<!-- CSS Theme files -->
	<link href="{$BASE_URL}css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="{$BASE_URL}css/nav.css" rel="stylesheet" type="text/css" media="all">
	<link href="{$BASE_URL}css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="{$BASE_URL}css/cart.css" rel='stylesheet' type='text/css'>    
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>	
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
               	<li><a href="{$BASE_URL}">Voltar</a></li>
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
    <!-- Scripts -->
    <script src="{$BASE_URL}javascript/jquery.min.js"></script>
    <script src="{$BASE_URL}javascript/jquery.easydropdown.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/event_listener.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/footer_anim.js"></script>
	
</body>
</html>
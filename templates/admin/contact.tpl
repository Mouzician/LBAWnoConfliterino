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
    {include file='common/footer.tpl'}
    <!-- Scripts -->
    <script src="{$BASE_URL}javascript/jquery.min.js"></script>
    <script src="{$BASE_URL}javascript/jquery.easydropdown.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/event_listener.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/footer_anim.js"></script>
	
</body>
</html>
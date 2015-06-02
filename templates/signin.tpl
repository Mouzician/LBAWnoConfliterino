<!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Registo</title>
	<!-- meta tags -->
    <meta name="author" content="MarKnad Inc.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-Type" content="text/html; charset=utf-8">
	<!-- CSS Theme files -->
	<link href="{$BASE_URL}css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="{$BASE_URL}css/nav.css" rel="stylesheet" type="text/css" media="all">
	<link href="{$BASE_URL}css/style.css" rel="stylesheet" type="text/css" media="all">	
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		{include file='common/navbar.tpl'}
	</div>

	<!-- signup/previous bar -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
			    <li class="home">
                    <a href="{$BASE_URL}" title="Retornar à pagina inicial"><img src="{$BASE_URL}images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li>Acesso à loja</li>&nbsp;
            </ul>
            <ul class="previous">
               	<li><a href="javascript:history.back()">Voltar à página inicial</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<!-- main content -->
	<section id="main">
		<div class="login-content">
			<div class="container">
				<!-- login/signin/benefits -->
				<div class="login-signup-form">
					<!-- login box -->
					<div class="col-md-5 login text-center">
						<h4>Login</h4><br>
						<form role="form" id="form1" action="{$BASE_URL}actions/users/login.php" method="post">
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Username: <span class="require">*</span></label>
								<input name="username" type="text" value="">
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Password:<span class="require">*</span></label>
								<input name="password" type="password" value="">
							</div>
							<div class="clearfix"></div>
							<div class="sky-form span_99">
								<label class="checkbox"><input type="checkbox" name="remember">Remember me on this computer</label>
							</div>
							<div class="botton1">
								<input type="submit" value="Entrar" class="botton">
							</div>
						</form>
						<div class="forgetit">
							<a href="">Esqueceu-se da sua Password?</a>
							<input type="text" class="text" placeholder="Insira o seu e-mail"> 
							<input type="submit" value="Enviar" class="botton">
						</div>
					</div>
					<!-- signin box -->
					<div class="col-md-5 sign-up text-center">
						<h4>Registo</h4>
						<form role="form" id="form2" action="{$BASE_URL}actions/users/register.php" method="post">
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Nome:<span class="require">*</span></label>
								<input type="text" name="nome" value="">
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Username:<span class="require">*</span></label>
								<input type="text" name="username" value="">
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">E-mail:<span class="require">*</span></label>
								<input type="email" name="email" value="">
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Morada:<span class="require">*</span></label>
								<input type="text" name="morada" value="">
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop">Data de Nascimento:<span class="require">*</span></label>
								<input type="date" name="dataN" value="">
							</div>
							<div class="clearfix"></div>
				    		<div class="cus_info_wrap">
								<label class="labelTop">Password:<span class="require">*</span></label>
								<input type="password" name="password" value="">
							</div>
							<div class="clearfix"></div>
							<div class="cus_info_wrap">
								<label class="labelTop confirmpass">Confirme Password:<span class="require">*</span></label>
								<input type="password" name="cpassword" value="">
							</div>
							<div class="botton1">
								<input type="submit" value="Registar" class="botton">
							</div>
						</form>
					</div>
					<!-- benefits box -->
					<div class="col-md-2 benefits">
						<h4>Porquê criar uma conta?</h4>
						<p>Consiga comprar os produtos que já cobiça há tanto tempo.</p>
						<p>Acesso a novas interfaces como wishlist.</p>
						<p>Apoio a clientes através do e-mail da loja e do número de apoio ao cliente.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>

	<!--footer-->
    {include file='common/footer.tpl'}
    <!-- Scripts -->
	<script src="{$BASE_URL}javascript/jquery.min.js"></script>
	<script src="{$BASE_URL}javascript/jquery.easydropdown.js"></script>
	<script type="text/javascript" src="{$BASE_URL}javascript/event_listener.js"></script>
	<script type="text/javascript" src="{$BASE_URL}javascript/footer_anim.js"></script>

</body>
</html>
<!DOCTYPE html>

<html>
<head>
  	<title>MarKnad - Perfil de Antonio Rui</title>
	<!-- meta tags -->
    <meta name="author" content="MarKnad Inc.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-Type" content="text/html; charset=utf-8">
	<!-- CSS Theme files -->
	<link href="{$BASE_URL}css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="{$BASE_URL}css/nav.css" rel="stylesheet" type="text/css" media="all">
	<link href="{$BASE_URL}css/style.css" rel="stylesheet" type="text/css" media="all">	
	<link href="{$BASE_URL}css/styles.css" rel="stylesheet" type="text/css" media="all">
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- header-section-starts -->
    <div class="c-header" id="home">
        <!-- main navbar -->
		{include file='common/navbar.tpl'}
    </div>

  	<div id="w">
  		<div id="content" class="clearfix">
    		<div id="userphoto">
    			<img src="{$BASE_URL}{$imgur}" alt="default avatar">
    		</div> 

        	<h1>{$dados.utilizador}</h1>
			<nav  id="profiletabs">
        		<ul class="clearfix">
          			<li><a href="#activity">Histórico de Compras</a></li>
          			<li><a href="#settings">Dados Pessoais</a></li>
          			<li><a href="#wishlist">Wishlist</a></li>
        		</ul>
      		</nav>
      		<section id="settings" class="hidden">
        		<h1>Editar perfil:</h1>        
        		<p class="setting"><span>E-mail</span> {$dados.email}</p>      
        		<p class="setting"><span>Nome</span>{$dados.nome}</p>        
        		<p class="setting"><span>Idade</span>{$idade} </p>        
        		<p class="setting"><span>Morada</span> {$dados.morada}</p>
        	</section>

      		<section id="activity" class="hidden">
        		<h1>Histórico de Compras</h1>
            <table class="table table-bordered table-hover table-striped">
            <tr><td>Valor</td><td>Data Compra</td><td>Modo Pagamento</td></tr>
            {foreach $compras as $compra}
        		<tr><td>{$compra.valor}</td>
        		<td>{$compra.data_compra}</td>
        		<td>{$compra.modopagamento}</td></tr>
            {/foreach}
            </table>
    		</section>
        <div class="col-lg-12">
      		<section id="wishlist" class="hidden">
        		<h1>O teu wishlist:</h1>
        		<table class="table table-bordered table-hover table-striped">
            <tr><td>Nome Produto</td><td>Preço Produto</td><td>Descrição Produto</td></tr>
            {foreach $wishlist as $wish}
            <tr><td>{$wish.nome}</td>
            <td>{$wish.preco}</td>
            <td>{$wish.descricao}</td>
            <td><input type="button" class="btn btn-danger" value="Remover" onclick=""></td>
            </tr>
            {/foreach}
            </table>
			</section>
    </div>
		</div><!-- @end #content -->
  	</div><!-- @end #w -->

	

	<!--footer-->
    {include file='common/footer.tpl'}
    <!-- Scripts -->
    <script src="{$BASE_URL}javascript/jquery.min.js"></script>
    <script src="{$BASE_URL}javascript/jquery.easydropdown.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/account_changetab.js"></script>    
    <script type="text/javascript" src="{$BASE_URL}javascript/event_listener.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/footer_anim.js"></script>

</body>
</html>
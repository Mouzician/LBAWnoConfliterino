{include file='common/head.tpl'}
  	<title>MarKnad - Perfil de Antonio Rui</title>
	<!-- Custom CSS files -->	
	<link href="{$BASE_URL}css/styles.css" rel="stylesheet" type="text/css" media="all">
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
      		<section id="settings" class="hidden"></br>
        		<h1>Os teus dados:</h1>        
        		<p class="setting"><span>E-mail</span> {$dados.email}</p>      
        		<p class="setting"><span>Nome</span>{$dados.nome}</p>        
        		<p class="setting"><span>Idade</span>{$idade} </p>        
        		<p class="setting"><span>Morada</span> {$dados.morada}</p>
            <br> <br>
            <form role ="form" action ="{$BASE_URL}pages/view_editProfile.php?">
            <input type="submit" class="btn btn-info" value="Editar Perfil" style="float: right">
        	</section>

      		<section id="activity" class="hidden"></br>
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
        
            <form role ="form" action ="{$BASE_URL}actions/users/remover_da_wishlist.php" method="post">
                            <input type="hidden" name="name" value="{$wish.nome}">
                            <tr>
                               <tr><td>{$wish.nome}</td>
                              <td>{$wish.preco}</td>
                               <td>{$wish.descricao}</td>
                                <td><input type="submit" class="btn btn-danger" value="Remover" onclick=""></td>
                            </tr>
                        </form>
            {/foreach}
            </table>
			</section>
    </div>
		</div><!-- @end #content -->
  	</div><!-- @end #w -->

	<!--footer-->
    {include file='common/footer.tpl'}
    <!-- Scripts -->
    <script type="text/javascript" src="{$BASE_URL}javascript/account_changetab.js"></script>

</body>
</html>
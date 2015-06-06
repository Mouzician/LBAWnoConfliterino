{include file='common/head.tpl'}
	<title>MarKnad - Shopping cart</title>
    <!-- Custom CSS files -->
    <link href="{$BASE_URL}css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body>
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
                	<a href="{$BASE_URL}" title="Go to Home Page"><img src="{$BASE_URL}images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li>Shopping Cart</li>
          	</ul>
            <ul class="previous">
               	<li><a href="{$BASE_URL}">Voltar à página inicial</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

    <div class="row">
        <h1>Shopping Cart de {$dados.nome}</h1>
    </div>
    {foreach $produtos as $pps}
    <!-- list of products in the cart -->
    <input type="hidden" name="idP" value="{$pps.idProduto}">
	<ul class='item-list'>
        <li class='item'>
            <div class='item__information'>
                <div class='item__image'>
                    <img src='{$BASE_URL}{$pps.caminho}'>
                </div>
                <div class='item__body'>
                    <h2 class='item__title'>{$pps.nome}</h2>
                    <p class='item__description'>{$pps.descricao}</p>
                </div>
                <div class='item__price' id="{$pps.nome}price">{$pps.preco}</div>
                <input type="hidden" id="{$pps.nome}hidden" value="{$pps.preco}">
                
                <div style="position:absolute;right:40px; top:40px;">
            <form action="{$BASE_URL}actions/users/removecart.php" method="post"> 
            <input type="hidden" name="precoind" id="precoind" value="{$pps.nome}">
            <input type="submit" class="btn btn-info" value="Remover Produto!" onclick="">
            </form>
                </div>
            </div>
            <div class='item__interactions'>
                    <button class='item-increase' onclick="Increase('{$pps.nome}');return false;">+</button>
                    <button class='item-decrease' onclick="Decrease('{$pps.nome}');return false;">-</button>
                    <span id="{$pps.nome}">1</span>
            </div>
        </li>
    </ul>    
    {/foreach}

    <div class='summary js-summary'>
        <ul class='steps'>
            <li>
                <b>Subtotal:</b>
                <div class='sum'></div>
            </li>
            <li>
                <b>Taxes (5%):</b>
                <span class='taxes'></span>
            </li>
            <li>
                <b>Shipping:</b>
                <span class='total'></span>
            </li>
        </ul>
        <ul class='checkout'>
            <li>
                <b>Total:</b>
                <span class='total js-total' id="checkoutt"></span>
            </li>
            <li id="checkout-bt">
                <a class='button js-checkout-button' href="#" onclick="CheckItOut();return false;">Checkout</a>
            </li>
        </ul>
    </div>

    <!--footer-->
    {include file='common/footer.tpl'}
    <!-- Scripts -->
    <script src="{$BASE_URL}javascript/auxx.js"></script>  
    <script src="{$BASE_URL}javascript/soma.js"></script>
    <!--<script type="text/javascript" src="http://form.jotformeu.com/jsform/51564995375369"></script>-->
    <!--<script type="text/javascript" src="http://form.jotformeu.com/jsform/51564767478370"></script>-->

</body>
</html>
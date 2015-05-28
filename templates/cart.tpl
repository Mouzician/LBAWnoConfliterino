<!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Shopping cart</title>
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
               	<li><a href="{$BASE_URL}">Back to Previous Page</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

    <div class="row">
        <h1>Shopping Cart de {$dados.nome}</h1>
    </div>
    {foreach $produtos as $pps}
    <!-- list of products in the cart -->
    <form role ="form" action ="{$BASE_URL}actions/products/car_product.php" method="post">
    <input type="hidden" name="idP" value="{$pps.idProduto}">
	<ul class='item-list'>
        <li class='item'>
            <div class='item__information'>
                <div class='item__image'>
                    <img src='http://upload.wikimedia.org/wikipedia/pt/6/67/30_STM_-_Love_Lust_Faith_%2B_Dreams.jpeg'>
                </div>
                <div class='item__body'>
                    <h2 class='item__title'>{$pps.nome}</h2>
                    <p class='item__description'>{$pps.descricao}</p>
                </div>
                <div class='item__price'>{$pps.preco}</div>
            </div>
            <div class='item__interactions'>
                    <button class='item-increase' onclick="Increase()">+</button>
                    <button class='item-decrease' onclick="Decrease()">-</button>
                    <span id='quantity.Current()'> 1 </span>
            </div>
        </li>
    </ul>
</form>
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
                <span class='sum js-total'>$39.50</span>
            </li>
            <li id="checkout-bt">
                <a class='button js-checkout-button'>Checkout</a>
            </li>
        </ul>
    </div>

    <!--footer-->
    {include file='common/footer.tpl'}
    <!-- Scripts -->
    <script src="{$BASE_URL}javascript/jquery.min.js"></script>
    <script src="{$BASE_URL}javascript/jquery.easydropdown.js"></script>
    <script src="{$BASE_URL}javascript/soma.js"></script>
    <script src="{$BASE_URL}javascript/auxx.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/event_listener.js"></script>
    <script type="text/javascript" src="{$BASE_URL}javascript/footer_anim.js"></script>   

</body>
</html>
<?php /* Smarty version Smarty-3.1.15, created on 2015-06-02 18:15:17
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158388665556dd695059297-56373250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2715282b695a4609a97b20766eb3d95ffeaf2cab' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/cart.tpl',
      1 => 1432832508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158388665556dd695059297-56373250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'dados' => 0,
    'produtos' => 0,
    'pps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556dd6951bf088_42374840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556dd6951bf088_42374840')) {function content_556dd6951bf088_42374840($_smarty_tpl) {?><!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Shopping cart</title>
    <!-- meta tags -->
    <meta name="author" content="MarKnad Inc.">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
    <!-- CSS Theme files -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/nav.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/cart.css" rel='stylesheet' type='text/css'>    
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>	
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
        <!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<!-- start Contact-page -->
	<!-- content-section-starts -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Go to Home Page"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li>Shopping Cart</li>
          	</ul>
            <ul class="previous">
               	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Back to Previous Page</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

    <div class="row">
        <h1>Shopping Cart de <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
</h1>
    </div>
    <?php  $_smarty_tpl->tpl_vars['pps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pps']->key => $_smarty_tpl->tpl_vars['pps']->value) {
$_smarty_tpl->tpl_vars['pps']->_loop = true;
?>
    <!-- list of products in the cart -->
    <form role ="form" action ="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/car_product.php" method="post">
    <input type="hidden" name="idP" value="<?php echo $_smarty_tpl->tpl_vars['pps']->value['idProduto'];?>
">
	<ul class='item-list'>
        <li class='item'>
            <div class='item__information'>
                <div class='item__image'>
                    <img src='http://upload.wikimedia.org/wikipedia/pt/6/67/30_STM_-_Love_Lust_Faith_%2B_Dreams.jpeg'>
                </div>
                <div class='item__body'>
                    <h2 class='item__title'><?php echo $_smarty_tpl->tpl_vars['pps']->value['nome'];?>
</h2>
                    <p class='item__description'><?php echo $_smarty_tpl->tpl_vars['pps']->value['descricao'];?>
</p>
                </div>
                <div class='item__price'><?php echo $_smarty_tpl->tpl_vars['pps']->value['preco'];?>
</div>
            </div>
            <div class='item__interactions'>
                    <button class='item-increase' onclick="Increase()">+</button>
                    <button class='item-decrease' onclick="Decrease()">-</button>
                    <span id='quantity.Current()'> 1 </span>
            </div>
        </li>
    </ul>
</form>
    <?php } ?>

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
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.easydropdown.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/soma.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/auxx.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/event_listener.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/footer_anim.js"></script>   

</body>
</html><?php }} ?>

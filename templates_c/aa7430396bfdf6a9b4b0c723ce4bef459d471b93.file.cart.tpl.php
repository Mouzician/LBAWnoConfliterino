<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 01:30:58
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17393383345565c7d40b65d0-53920651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa7430396bfdf6a9b4b0c723ce4bef459d471b93' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/cart.tpl',
      1 => 1433525445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17393383345565c7d40b65d0-53920651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5565c7d42524c8_25215146',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'dados' => 0,
    'produtos' => 0,
    'pps' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5565c7d42524c8_25215146')) {function content_5565c7d42524c8_25215146($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Shopping cart</title>
    <!-- Custom CSS files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/cart.css" rel='stylesheet' type='text/css'>
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
">Voltar à página inicial</a></li>
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
    <form role ="form" action ="" method="post">
    <input type="hidden" name="idP" value="<?php echo $_smarty_tpl->tpl_vars['pps']->value['idProduto'];?>
">
	<ul class='item-list'>
        <li class='item'>
            <div class='item__information'>
                <div class='item__image'>
                    <img src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pps']->value['caminho'];?>
'>
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
                    <button class='item-increase' onclick="">+</button>
                    <button class='item-decrease' onclick="">-</button>
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
javascript/soma.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/auxx.js"></script>  

</body>
</html><?php }} ?>

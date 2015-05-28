<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.15, created on 2015-05-28 13:16:18
=======
<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:49:56
>>>>>>> origin/master
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60343730155532ba706b195-39052657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e486388f6539d71b97314955b702172e0a658c1' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/index.tpl',
<<<<<<< HEAD
      1 => 1432811776,
=======
      1 => 1432072776,
>>>>>>> origin/master
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60343730155532ba706b195-39052657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55532ba71cf521_02381173',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'username' => 0,
    'num_utilizadores' => 0,
    'num_compras' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55532ba71cf521_02381173')) {function content_55532ba71cf521_02381173($_smarty_tpl) {?><!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Loja online informática</title>
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
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- navbar + banner -->
	<div class="header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- banner -->
		<div class="banner">
			<div class="signing text-right">
				<div class="container">
					<div class="sign-in">
						<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Log Out</a>
					<?php } else { ?>
    				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_signin.php">Aceda ao nosso site</a>
    				<?php }?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="banner-info text-center">
				<i class="shipping"></i>
				<h3>Loja Informática online</h3>
				<p>Se pretende adquirir algum produto eletrónico, não hesite em comprar na Marknad.</p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=All">Todos os Produtos</a>
			</div>
		</div><!-- closes banner -->
	</div><!-- closes navbar + banner -->
	
	<!-- Top vendas	-->	
	<div class="container">
		<div class="recommand-section">
			<div class="recommand-section-head text-center">
				<h3><span>Top</span> Vendas</h3>
				<p>Os produtos mais vendidos</p>
			</div>
			<div class="recommand-section-grids">
				<div class="standards">						
					<div class="standard_content">
						<!-- 1st product -->
						<div class="tag-grid">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php" class="b-link-stripe b-animate-go  thickbox">
						    		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/products/portatiltoshiba.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Adicionar ao carrinho</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/icon-eye.png" class="img-responsive go" alt=""/></h2></div>
						    		</a>
									<div class="r-title">
										<h3>Portátil Toshiba</h3>
										<h4>$999</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<!-- 2nd product -->
						<div class="tag-grid">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php" class="b-link-stripe b-animate-go  thickbox">
									<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/products/portatilasus.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Adicionar ao carrinho</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/icon-eye.png" class="img-responsive go" alt=""/></h2></div>
									</a>
									<div class="r-title">
										<h3>Portátil Asus</h3>
										<h4>$899</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<!-- 3rd product -->
						<div class="tag-grid">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php" class="b-link-stripe b-animate-go  thickbox">
						     		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/products/sony.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><div class="atc"><p>Adicionar ao carrinho</p></div><div class="clearfix"></div><h2 class="b-animate b-from-left    b-delay03 "><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/icon-eye.png" class="img-responsive go" alt=""/></h2></div>
						  			</a>
									<div class="r-title">
										<h3>Telemóvel Sony</h3>
										<h4>$199</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="recommand-section">
			<div class="recommand-section-head text-left">
				<h3>Utilizadores Registados: <span style="padding-right:120px"><?php echo $_smarty_tpl->tpl_vars['num_utilizadores']->value;?>
</span>  Produtos Vendidos: <span><?php echo $_smarty_tpl->tpl_vars['num_compras']->value;?>
</span> </h3>
			</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- Scripts -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.easydropdown.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/scripts.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/event_listener.js"></script>

</body>
</html><?php }} ?>

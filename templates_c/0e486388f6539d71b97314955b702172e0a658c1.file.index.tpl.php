<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 13:14:07
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60343730155532ba706b195-39052657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e486388f6539d71b97314955b702172e0a658c1' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/index.tpl',
      1 => 1433675636,
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
    'username' => 0,
    'BASE_URL' => 0,
    'top' => 0,
    'num_utilizadores' => 0,
    'num_compras' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55532ba71cf521_02381173')) {function content_55532ba71cf521_02381173($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Loja Online Informática</title>
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
						<div class="tag-grid" style="height: 320px">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['top']->value[0]['nome'];?>
" class="b-link-stripe b-animate-go  thickbox">
						    		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['top']->value[0]['caminho'];?>
" class="img-responsive" alt="" />
						    		</a>
									<div class="r-title">
										<h3><?php echo $_smarty_tpl->tpl_vars['top']->value[0]['nome'];?>
</h3>
										<h4><?php echo $_smarty_tpl->tpl_vars['top']->value[0]['preco'];?>
</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<!-- 2nd product -->
						<div class="tag-grid" style="height: 350px">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['top']->value[1]['nome'];?>
" class="b-link-stripe b-animate-go  thickbox">
									<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['top']->value[1]['caminho'];?>
" class="img-responsive" alt="" />
									</a>
									<div class="r-title">
										<h3><?php echo $_smarty_tpl->tpl_vars['top']->value[1]['nome'];?>
</h3>
										<h4><?php echo $_smarty_tpl->tpl_vars['top']->value[1]['preco'];?>
</h4>
									</div>
		                		</div>
							</div>	
						</div>
						<!-- 3rd product -->
						<div class="tag-grid" style="height: 380px">
							<div class="portfolio app mix_all"  data-cat="app" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper">		
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['top']->value[2]['nome'];?>
" class="b-link-stripe b-animate-go  thickbox">
						     		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['top']->value[2]['caminho'];?>
" class="img-responsive" alt="" />
						  			</a>
									<div class="r-title">
										<h3><?php echo $_smarty_tpl->tpl_vars['top']->value[2]['nome'];?>
</h3>
										<h4><?php echo $_smarty_tpl->tpl_vars['top']->value[2]['preco'];?>
</h4>
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
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/scripts.js"></script>

</body>
</html><?php }} ?>

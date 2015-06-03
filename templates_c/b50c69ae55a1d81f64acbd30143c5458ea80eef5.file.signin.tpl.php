<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 17:20:33
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32489086955532baa12c6d2-78332579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b50c69ae55a1d81f64acbd30143c5458ea80eef5' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/signin.tpl',
      1 => 1433340108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32489086955532baa12c6d2-78332579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55532baa239689_68091461',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55532baa239689_68091461')) {function content_55532baa239689_68091461($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Registo</title>
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<!-- signup/previous bar -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
			    <li class="home">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Retornar à pagina inicial"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt=""/></a>&nbsp;
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
						<form role="form" id="form1" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
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
						<form role="form" id="form2" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post">
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
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>

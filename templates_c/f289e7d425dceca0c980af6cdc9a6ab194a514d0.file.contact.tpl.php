<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 15:47:27
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/admin/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677246339556ef196a31465-78107858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f289e7d425dceca0c980af6cdc9a6ab194a514d0' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/admin/contact.tpl',
      1 => 1433339243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677246339556ef196a31465-78107858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556ef196d4a6a6_47721378',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user' => 0,
    'admin' => 0,
    'mail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ef196d4a6a6_47721378')) {function content_556ef196d4a6a6_47721378($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Responder</title>
	<!-- Custom CSS files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
	<!-- header-section-starts -->
	<!-- start Contact-page -->
	<!-- content-section-starts -->
	<div class="container">
		<div class="dreamcrub">
            <ul class="previous">
               	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_reclamações.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div class="contact">
			<div class="contact-form">
			 	<h2>Remetente: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2>
			 	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/reclamacao/reclamacao.php">
				   	<div>
				    	<span><label>Administrador Responsável</label></span>
					    <span><input name="userName" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
" readonly></span>
					</div>
					<div>
					   	<span><label>E-mail do Cliente</label></span>
					   	<span><input name="userEmail" type="email" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
" readonly></span>
					</div>
					<div>
					   	<span><label>Assunto</label></span>
					   	<span><textarea name="userMsg"> </textarea></span>
					</div>
					<div>
						<span><input type="submit" class="" value="Responder"></span>
					</div>
				</form>
			</div>
  			<div class="clearfix"></div>		
		</div>
	</div>
	<!-- content-section-ends -->

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('../common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
</body>
</html><?php }} ?>

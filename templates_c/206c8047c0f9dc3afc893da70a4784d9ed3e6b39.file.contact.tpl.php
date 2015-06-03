<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 14:59:53
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1005628596556dd5aa21a0a2-11234307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206c8047c0f9dc3afc893da70a4784d9ed3e6b39' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/contact.tpl',
      1 => 1433336387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1005628596556dd5aa21a0a2-11234307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556dd5aa33f948_16049253',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556dd5aa33f948_16049253')) {function content_556dd5aa33f948_16049253($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Contacte-nos</title>
	<!-- Custom CSS files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
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
" title="Retornar à pagina inicial"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
             	<li>Reclamações / Sugestões</li>
            </ul>
            <ul class="previous">
               	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Voltar à página inicial</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div class="contact">				
			<div class="contact-form">
			 	<h2>Contacte-nos</h2>
			 	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/reclamacao/reclamacao.php">
				   	<div>
				    	<span><label>Nome</label></span>
					    <span><input name="userName" type="text" class="textbox"></span>
					</div>
					<div>
					   	<span><label>E-mail</label></span>
					   	<span><input name="userEmail" type="email" class="textbox"></span>
					</div>
					<div>
					   	<span><label>Assunto</label></span>
					   	<span><textarea name="userMsg"> </textarea></span>
					</div>
					<div>
						<span><input type="submit" class="" value="Submeter"></span>
					</div>
				</form>
			</div>
  			<div class="clearfix"></div>		
		</div>
	</div>
	<!-- content-section-ends -->

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
</body>
</html><?php }} ?>

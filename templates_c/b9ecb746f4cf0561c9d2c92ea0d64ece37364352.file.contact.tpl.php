<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:49:32
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322905566555b848fb885f5-90555307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9ecb746f4cf0561c9d2c92ea0d64ece37364352' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/contact.tpl',
      1 => 1432118970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322905566555b848fb885f5-90555307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555b848fcaf323_36221190',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user' => 0,
    'admin' => 0,
    'mail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b848fcaf323_36221190')) {function content_555b848fcaf323_36221190($_smarty_tpl) {?><!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Contacte-nos</title>
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

<body> <!--style="background:#f0f0f0;"-->
	<!-- header-section-starts -->
	<!-- start Contact-page -->
	<!-- content-section-starts -->
	<div id="wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ('admin/common/top_navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
</div>
	<!-- content-section-ends -->

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.easydropdown.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/event_listener.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/footer_anim.js"></script>
	
</body>
</html><?php }} ?>

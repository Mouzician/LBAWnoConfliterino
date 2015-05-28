<?php /* Smarty version Smarty-3.1.15, created on 2015-05-28 12:33:09
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13448418245566eee5daf001-36310645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbd8b9e1a4e0e6e58c515b1bcacf63d83b5d05ce' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/contact.tpl',
      1 => 1431512946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13448418245566eee5daf001-36310645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5566eee5f0ad46_80978354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5566eee5f0ad46_80978354')) {function content_5566eee5f0ad46_80978354($_smarty_tpl) {?><!DOCTYPE html>

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
">Voltar</a></li>
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

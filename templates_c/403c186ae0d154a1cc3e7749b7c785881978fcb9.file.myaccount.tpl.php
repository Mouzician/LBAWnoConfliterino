<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 15:04:07
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/myaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1354595521556dd68e3ca136-46238606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '403c186ae0d154a1cc3e7749b7c785881978fcb9' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/myaccount.tpl',
      1 => 1433336646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1354595521556dd68e3ca136-46238606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556dd68e55dbc0_53401053',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'imgur' => 0,
    'dados' => 0,
    'idade' => 0,
    'compras' => 0,
    'compra' => 0,
    'wishlist' => 0,
    'wish' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556dd68e55dbc0_53401053')) {function content_556dd68e55dbc0_53401053($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  	<title>MarKnad - Perfil de Antonio Rui</title>
	<!-- Custom CSS files -->	
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/styles.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
    <!-- header-section-starts -->
    <div class="c-header" id="home">
        <!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

  	<div id="w">
  		<div id="content" class="clearfix">
    		<div id="userphoto">
    			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imgur']->value;?>
" alt="default avatar">
    		</div> 

        	<h1><?php echo $_smarty_tpl->tpl_vars['dados']->value['utilizador'];?>
</h1>
			<nav  id="profiletabs">
        		<ul class="clearfix">
          			<li><a href="#activity">Histórico de Compras</a></li>
          			<li><a href="#settings">Dados Pessoais</a></li>
          			<li><a href="#wishlist">Wishlist</a></li>
        		</ul>
      		</nav>
      		<section id="settings" class="hidden">
        		<h1>Editar perfil:</h1>        
        		<p class="setting"><span>E-mail</span> <?php echo $_smarty_tpl->tpl_vars['dados']->value['email'];?>
</p>      
        		<p class="setting"><span>Nome</span><?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
</p>        
        		<p class="setting"><span>Idade</span><?php echo $_smarty_tpl->tpl_vars['idade']->value;?>
 </p>        
        		<p class="setting"><span>Morada</span> <?php echo $_smarty_tpl->tpl_vars['dados']->value['morada'];?>
</p>
        	</section>

      		<section id="activity" class="hidden">
        		<h1>Histórico de Compras</h1>
            <table class="table table-bordered table-hover table-striped">
            <tr><td>Valor</td><td>Data Compra</td><td>Modo Pagamento</td></tr>
            <?php  $_smarty_tpl->tpl_vars['compra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compra']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['compras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compra']->key => $_smarty_tpl->tpl_vars['compra']->value) {
$_smarty_tpl->tpl_vars['compra']->_loop = true;
?>
        		<tr><td><?php echo $_smarty_tpl->tpl_vars['compra']->value['valor'];?>
</td>
        		<td><?php echo $_smarty_tpl->tpl_vars['compra']->value['data_compra'];?>
</td>
        		<td><?php echo $_smarty_tpl->tpl_vars['compra']->value['modopagamento'];?>
</td></tr>
            <?php } ?>
            </table>
    		</section>
        <div class="col-lg-12">
      		<section id="wishlist" class="hidden">
        		<h1>O teu wishlist:</h1>
        		<table class="table table-bordered table-hover table-striped">
            <tr><td>Nome Produto</td><td>Preço Produto</td><td>Descrição Produto</td></tr>
            <?php  $_smarty_tpl->tpl_vars['wish'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wish']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wish']->key => $_smarty_tpl->tpl_vars['wish']->value) {
$_smarty_tpl->tpl_vars['wish']->_loop = true;
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['wish']->value['nome'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wish']->value['preco'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['wish']->value['descricao'];?>
</td>
            <td><input type="button" class="btn btn-danger" value="Remover" onclick=""></td>
            </tr>
            <?php } ?>
            </table>
			</section>
    </div>
		</div><!-- @end #content -->
  	</div><!-- @end #w -->

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/account_changetab.js"></script>

</body>
</html><?php }} ?>

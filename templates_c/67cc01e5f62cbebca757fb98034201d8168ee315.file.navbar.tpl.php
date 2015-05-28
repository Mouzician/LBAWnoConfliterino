<?php /* Smarty version Smarty-3.1.15, created on 2015-05-25 15:46:31
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:561926045556327b7d2f591-04381761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67cc01e5f62cbebca757fb98034201d8168ee315' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/common/navbar.tpl',
      1 => 1431518744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '561926045556327b7d2f591-04381761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556327b7db2b77_36349706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556327b7db2b77_36349706')) {function content_556327b7db2b77_36349706($_smarty_tpl) {?><div class="top-header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo/logo.png" alt="" /></a>
		</div>
		<ul class="header-top-right">
			<!-- start search-->
			<li class="search-box">
				<div id="sb-search" class="sb-search">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/search.php">
						<input class="sb-search-input" placeholder="Pesquisar" type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
				</div>
			</li>
			<!-- shopping cart -->
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_cart.php"><i class="cart"></i></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_myaccount.php"><i class="acc"></i></a></li>
		</ul>

		<div class="navigation">	
			<label class="mobile_menu" for="mobile_menu">
              	<span>Menu</span>
            </label>
            <input id="mobile_menu" type="checkbox">
			<ul class="nav">                      
              	<li class="dropdown1"><a href="#">Informática</a>
               		<ul class="dropdown2">
              			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Informática">Computadores</a></li>
                 		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Informática">Tablets</a></li>
				  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Informática">Periféricos</a></li>
				  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Informática">Acessórios</a></li>
				  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Informática">Armazenamento</a></li>
                	</ul>
              	</li>             
              	<li class="dropdown1"><a href="#">Imagem e Som</a>
              		<ul class="dropdown2">
                  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Imagem e Som">Televisões</a></li>
                  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Imagem e Som">Audio</a></li>
                  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Imagem e Som">Video</a></li>
                	</ul>
              	</li>          
           		<li class="dropdown1"><a href="#">Comunicações</a>
           			<ul class="dropdown2">
                 		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Comunicações">Telemóveis</a></li>
                  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Comunicações">Telefones</a></li>
                  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Comunicações">GPS</a></li>
                	</ul>
           		</li>        
            	<li class="dropdown1"><a href="#">Ajuda</a>
           			<ul class="dropdown2">
                 		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_contact.php">Contacte-nos</a></li>
                  		<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_FAQ.php">FAQ</a></li>
                	</ul>
           		</li> 
            </ul>
		</div>
	</div>
</div><!-- closes navbar --><?php }} ?>

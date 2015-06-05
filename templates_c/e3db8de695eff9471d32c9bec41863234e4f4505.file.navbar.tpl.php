<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 01:10:26
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137431579255532ba71fa727-60949529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3db8de695eff9471d32c9bec41863234e4f4505' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/common/navbar.tpl',
      1 => 1433545745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137431579255532ba71fa727-60949529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55532ba7261ab1_70989906',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55532ba7261ab1_70989906')) {function content_55532ba7261ab1_70989906($_smarty_tpl) {?><div class="top-header">
  <div class="container">
    <div class="logo">
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img style="height:auto; width:auto; max-height:50px;" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/logo/perfect.png" alt="" /></a>
    </div>
    <ul class="header-top-right">
      <!-- start search-->
      <li class="search-box">
        <div id="sb-search" class="sb-search">
          <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php">
            <input class="sb-search-input" placeholder="Pesquisar" type="text" name="passing" autocomplete="off" spellcheck="false">
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
pages/view_products.php?page_name=Computadores">Computadores</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Tablets">Tablets</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Periféricos">Periféricos</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Acessórios Informática">Acessórios</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Armazenamento">Armazenamento</a></li>
                  </ul>
                </li>             
                <li class="dropdown1"><a href="#">Imagem e Som</a>
                  <ul class="dropdown2">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Televisões">Televisões</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Audio">Audio</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Foto e Video">Foto e Video</a></li>
                  </ul>
                </li>          
              <li class="dropdown1"><a href="#">Comunicações</a>
                <ul class="dropdown2">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Telemóveis">Telemóveis</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=GPS">GPS</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_products.php?page_name=Acessórios Telemóvel">Acessórios</a></li>
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

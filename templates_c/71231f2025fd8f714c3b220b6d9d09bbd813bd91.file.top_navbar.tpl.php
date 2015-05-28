<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:45:26
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/common/top_navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:741336950555b3f1b6a8929-66385593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71231f2025fd8f714c3b220b6d9d09bbd813bd91' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/common/top_navbar.tpl',
      1 => 1432118723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '741336950555b3f1b6a8929-66385593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555b3f1b6c06c4_63920243',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b3f1b6c06c4_63920243')) {function content_555b3f1b6c06c4_63920243($_smarty_tpl) {?> <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php">MarKnad Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li>
            <a href="#">Administrador</a>
        </li>
        <li class="divider"></li>
        <li class="dropdown">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php"><i class="fa fa-sign-out"></i>Logout</a>
        </li>
    </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a><i class="fa fa-tags"></i> Produtos</a>
                    <ul class="sub-menu">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_produtos_adicionar.php"><i class="fa fa-tags"></i> Adicionar Produto</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_produtos.php"><i class="fa fa-tags"></i> Gerir Produtos</a>
                    </li>
                </ul>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_compras.php"><i class="fa fa-shopping-cart"></i> Compras</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_clientes.php"><i class="fa fa-users"></i> Clientes</a>
                    </li>
                    <li >
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_reclamações.php"><i class="fa fa-comments"></i> Reclamações</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav><?php }} ?>

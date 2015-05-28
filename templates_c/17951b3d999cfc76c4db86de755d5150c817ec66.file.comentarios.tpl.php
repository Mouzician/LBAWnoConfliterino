<?php /* Smarty version Smarty-3.1.15, created on 2015-05-19 18:11:49
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1588145334555b60c5d77a60-51367324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17951b3d999cfc76c4db86de755d5150c817ec66' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/comentarios.tpl',
      1 => 1431512945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1588145334555b60c5d77a60-51367324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'reclamacao' => 0,
    'complaint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555b60c5e9c592_95930222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b60c5e9c592_95930222')) {function content_555b60c5e9c592_95930222($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <title>MarKnad Admin - Reclamações</title>
    <?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php echo $_smarty_tpl->getSubTemplate ('admin/common/top_navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_produtos.php"><i class="fa fa-tags"></i> Produtos</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_compras.php"><i class="fa fa-shopping-cart"></i> Compras</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_clientes.php"><i class="fa fa-users"></i> Clientes</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_comentarios.php"><i class="fa fa-comments"></i> Reclamações</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

         <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Reclamaç~oes</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tags"></i> Reclamações
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
                <div class="col-lg-12">
                        
                        <h2>Lista de Reclamações </h2>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <tr><td>Nome User</td><td>Reclamação</td><td>Email</td></tr>
                            <?php  $_smarty_tpl->tpl_vars['complaint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['complaint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reclamacao']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['complaint']->key => $_smarty_tpl->tpl_vars['complaint']->value) {
$_smarty_tpl->tpl_vars['complaint']->_loop = true;
?>

                        <tr><td><?php echo $_smarty_tpl->tpl_vars['complaint']->value['username'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['complaint']->value['texto'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['complaint']->value['email'];?>
</td>
                        <td><input type="button" class="btn btn-danger" value="Responder" onclick=""></td>
                        </tr>
                        <?php } ?>
                   </table>
               </div>
                </div> 
            </div>
        </div>
    </div>

       
</body>

</html>
<?php }} ?>

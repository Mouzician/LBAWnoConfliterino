<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:47:13
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1580629451555b56ea8e3795-53573249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd70495d2635909830c029b553a07d228c3713242' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/clientes.tpl',
      1 => 1432072788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1580629451555b56ea8e3795-53573249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555b56eaa57376_72162687',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'clientes' => 0,
    'cli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b56eaa57376_72162687')) {function content_555b56eaa57376_72162687($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <title>MarKnad Admin - Clientes</title>
    <?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
            <?php echo $_smarty_tpl->getSubTemplate ('admin/common/top_navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Clientes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Clientes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-12">
                    <h2>Lista de Clientes</h2>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" width="100%" style="text-align: center;">
                            <tr><td>Nome User</td><td>Email User</td><td>Morada</td><td>Data de Nascimento</td></tr>
                               <?php  $_smarty_tpl->tpl_vars['cli'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cli']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cli']->key => $_smarty_tpl->tpl_vars['cli']->value) {
$_smarty_tpl->tpl_vars['cli']->_loop = true;
?>

                        <form role ="form" action ="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/banir_utilizador.php" method="post">
                                <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['cli']->value['utilizador'];?>
">
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['cli']->value['utilizador'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cli']->value['email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cli']->value['morada'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cli']->value['datanascimento'];?>
</td>
                        <td><input type="submit" class="btn btn-danger" value="Banir" onclick=""></td>
                        </tr>
                    </form>
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

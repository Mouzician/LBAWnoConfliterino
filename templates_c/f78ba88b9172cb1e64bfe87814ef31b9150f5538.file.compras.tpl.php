<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:47:06
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/compras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142486207555b60c3b95dc3-61936112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f78ba88b9172cb1e64bfe87814ef31b9150f5538' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/compras.tpl',
      1 => 1432061802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142486207555b60c3b95dc3-61936112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555b60c3cdf739_79977662',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'compras' => 0,
    'compra' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b60c3cdf739_79977662')) {function content_555b60c3cdf739_79977662($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <title>MarKnad Admin - Compras</title>
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
                        <h1 class="page-header">Últimas Compras</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tags"></i> Últimas Compras
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
                <div class="col-lg-12">
                        
                        <h2>Lista de Compras </h2>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <tr><td>Nome User</td><td>Valor</td><td>Morada</td><td>Data da Compra</td><td>Modo de Pagamento</td></tr>
                            <?php  $_smarty_tpl->tpl_vars['compra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compra']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['compras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compra']->key => $_smarty_tpl->tpl_vars['compra']->value) {
$_smarty_tpl->tpl_vars['compra']->_loop = true;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['compra']->value['idutilizador'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['compra']->value['valor'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['compra']->value['morada'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['compra']->value['data_compra'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['compra']->value['modopagamento'];?>
</td>
                        <td><input type="button" class="btn btn-danger" value="Cancelar" onclick=""></td>
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

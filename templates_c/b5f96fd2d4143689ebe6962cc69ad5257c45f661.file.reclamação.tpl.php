<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:47:27
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/reclamação.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1623862557555b7d9503d2e3-46870690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f96fd2d4143689ebe6962cc69ad5257c45f661' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/reclamação.tpl',
      1 => 1432072788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623862557555b7d9503d2e3-46870690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555b7d951b9315_64571660',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'reclamacao' => 0,
    'complaint' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b7d951b9315_64571660')) {function content_555b7d951b9315_64571660($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <title>MarKnad Admin - Reclamações</title>
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
                        <h1 class="page-header">Reclamações</h1>
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
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_contact.php?mail=<?php echo $_smarty_tpl->tpl_vars['complaint']->value['email'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['complaint']->value['username'];?>
"> Responder </a></td>
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

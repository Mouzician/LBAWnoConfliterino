<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 15:51:42
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/admin/clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2081654244556efe4ba1e702-46000018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bae278b1e372bee1592cda69331e9d974384112' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/admin/clientes.tpl',
      1 => 1433339500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081654244556efe4ba1e702-46000018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556efe4bb925e0_58398353',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'clientes' => 0,
    'cli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556efe4bb925e0_58398353')) {function content_556efe4bb925e0_58398353($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad Admin - Clientes</title>
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
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['cli']->value['utilizador'];?>
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

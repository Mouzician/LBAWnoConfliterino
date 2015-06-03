<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 15:53:04
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:900017592556ef1787c7e19-11429912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9fd9835ca05cb94f058f8dea7059ff6b88a88f7' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/admin/dashboard.tpl',
      1 => 1433339573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900017592556ef1787c7e19-11429912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556ef1788d2ec0_32125366',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556ef1788d2ec0_32125366')) {function content_556ef1788d2ec0_32125366($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad Admin - Dashboard</title>
    <!-- Morris Charts CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/admin_css/plugins/morris.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ('admin/common/top_navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- /.row -->        
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/plugins/morris/morris.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/admin_javascript/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php }} ?>

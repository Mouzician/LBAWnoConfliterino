<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 01:22:37
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202251323655722f3d96ace0-77096543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad98f1b256200a305cb1577a1341de373637509e' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/edit_profile.tpl',
      1 => 1433542374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202251323655722f3d96ace0-77096543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'dados' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55722f3da81da3_14205011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55722f3da81da3_14205011')) {function content_55722f3da81da3_14205011($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>MarKnad - Editar Perfil</title>
    <!-- Custom CSS files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
    <!-- header-section-starts -->
    <!-- start Contact-page -->
    <!-- content-section-starts -->
    <div class="container">
        <div class="dreamcrub">
            <ul class="previous">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_editProfile.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <h2>Editar Perfil de : <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
</h2>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/editar_perfil.php?">
                    <div>
                        <span><label>Nome</label></span>
                        <span><input name="userName" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
"></span>
                    </div>
                    <div>
                        <span><label>E-mail</label></span>
                        <span><input name="userEmail" type="email" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['email'];?>
"></span>
                    </div>
                    <div>
                        <span><label>Morada</label></span>
                        <span><input name="userMorada" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['morada'];?>
"></span>
                    </div>
                    <div>
                        <span><label>País</label></span>
                        <span><input name="userPais" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['pais'];?>
"></span>
                    </div>
                    <div>
                        <span><label>Estado/Distrito</label></span>
                        <span><input name="userEstado" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['dados']->value['estado'];?>
"></span>
                    </div>
                    <div>
                        <span><input type="submit" class="" value="Editar!"></span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>        
        </div>
    </div>
    <!-- content-section-ends -->

    <!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
</body>
</html><?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 13:25:50
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/edit_produto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1818664374557427a4a4c671-32141923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9915e3686554727a8cf5f782af431f1f70bb4f16' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/edit_produto.tpl',
      1 => 1433676273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1818664374557427a4a4c671-32141923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557427a4b4d1f2_99570972',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557427a4b4d1f2_99570972')) {function content_557427a4b4d1f2_99570972($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
pages/admin/view_produtos.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <h2>Editar Produto  : <?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
</h2>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/edit_prod.php?">
                    <div>
                        <span><label>Nome</label></span>
                        <span><input name="Nome" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
"></span>
                    </div>
                    <div>
                        <span><label>Preço</label></span>
                        <span><input name="Preco" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['preco'];?>
"></span>
                    </div>
                     <div>
                        <span><label>Descrição</label></span>
                        <span><input name="Descricao" type="text" class="textbox" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];?>
"></span>
                    </div>
                    <div>
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

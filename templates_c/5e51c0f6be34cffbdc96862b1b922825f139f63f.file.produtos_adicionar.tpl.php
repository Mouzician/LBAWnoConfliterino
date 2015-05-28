<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:45:28
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/produtos_adicionar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:359221415555c65c888e2f2-32842929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e51c0f6be34cffbdc96862b1b922825f139f63f' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/admin/produtos_adicionar.tpl',
      1 => 1432072788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359221415555c65c888e2f2-32842929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_555c65c897a239_89812265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555c65c897a239_89812265')) {function content_555c65c897a239_89812265($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
<head>
    <title>MarKnad Admin - Adicionar Produto</title>
    <?php echo $_smarty_tpl->getSubTemplate ('admin/common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                        <h1 class="page-header">Produtos</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tags"></i> Produtos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Adicionar Produtos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <div class="container">                                        
                <h2>Adicionar Produto</h2>
                <form role="form" id="form1" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/adicionar_produto_action.php" method="post">
                    <div class="form-group">
                        <label for="text">Nome:</label>
                        <input type="text" class="form-control" name="nomeProduto">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Categoria:</label>
                        <select name="selCat" class="form-control">
                            <option value="Informática"> Informática</option>
                            <option value="Imagem e Som"> Imagem e Som</option>
                            <option value="Comunicações"> Comunicações</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text">Preço:</label>
                        <input type="text" class="form-control" name="preco">
                    </div>
                    <div class="form-group">
                        <label for="comment">Descrição:</label>
                        <textarea class="form-control" rows="5" name="descricaoProduto"></textarea>
                    </div>
					<div class="form-group">
						<label>Carregar imagens:</label>
						<form action="" method="post" enctype="multipart/form-data">
						<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
                    </div>
                    <button type="submit" form="form1" class="btn btn-default">Adicionar!</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-05-25 15:46:31
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:819020758556327b7dd60e0-38385791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8c72508fea53386a55aff0a7e3e62c8616d14d' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/common/footer.tpl',
      1 => 1431512946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '819020758556327b7dd60e0-38385791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556327b7e11379_67585519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556327b7e11379_67585519')) {function content_556327b7e11379_67585519($_smarty_tpl) {?><!-- footer -->
<div class="footer">
	<div class="up-arrow">
		<a class="scroll" href="#home"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/up.png" alt="" /></a>
	</div>
	<div class="container">
		<div class="copyrights">
			<p>Marknad © 2015 All rights reserved</p>
		</div>
		<div class="footer-social-icons">
			<a href="#"><i class="fb"></i></a>
			<a href="#"><i class="tw"></i></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- search-scripts -->
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/classie.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/uisearch.js"></script>
<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script><?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 22:38:27
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142428500555532badef6bb6-31722717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb82027f850b6ea8e02039b965c37a1b28537200' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/single.tpl',
      1 => 1433709488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142428500555532badef6bb6-31722717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55532bae1470d4_60908272',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'imagens' => 0,
    'imagem' => 0,
    'produto' => 0,
    'username' => 0,
    'comments' => 0,
    'row' => 0,
    'idProduto' => 0,
    'recomendados' => 0,
    'recomen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55532bae1470d4_60908272')) {function content_55532bae1470d4_60908272($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - Produto</title>
	<!-- Custom CSS files -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/form.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/etalage.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<!-- start-single-page -->
	<!-- content -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Ir para a página inicial"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt=""/></a>&nbsp;
                </li>
                <span>&gt;</span>
                <li>Produtos</li>&nbsp;
                <span>&gt;</span>
				<li>Computadores</a></li>
            </ul>
            <ul class="previous">
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Voltar à página inicial</a></li>
        	</ul>
            <div class="clearfix"></div>
		</div>
	</div>	

	<!-- start content -->
	<div class="women_main">
		<div class="container">
			<div class="row single">
				<div class="col-md-9 span-single">
				    <div class="single_left">
				    	<!-- images to zoom -->
						<div class="grid images_3_of_2">
							
							<ul id="etalage">

								<?php  $_smarty_tpl->tpl_vars['imagem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagem']->key => $_smarty_tpl->tpl_vars['imagem']->value) {
$_smarty_tpl->tpl_vars['imagem']->_loop = true;
?>
								<li>									
									<img class="etalage_thumb_image" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagem']->value;?>
" class="img-responsive" />
									<img class="etalage_source_image" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagem']->value;?>
" class="img-responsive" />
									
								</li>
								<?php } ?>

							</ul>
							
							<div class="clearfix"></div>		
				  		</div>
				  		<!-- price/related/colors -->
				  		<div class="desc1 span_3_of_2">
							<h3><?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
</h3>
							<p><?php echo $_smarty_tpl->tpl_vars['produto']->value['preco'];?>
€</p>
							<div class="det_nav">
								<h4>Equipado com :</h4>
								<ul>
									<li><a href="#"><figure> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/beats.png" class="img-responsive" alt="" /> <figcaption>Beats Audio</figcaption> </figure></a></li>
									<li><a href="#"><figure> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/connectedmusic.png" class="img-responsive" alt="" /> <figcaption>HP Music Connected</figcaption> </figure></a></li>
									<li><a href="#"><figure> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/simplepass.png" class="img-responsive" alt="" /> <figcaption>HP SimplePass</figcaption> </figure></a></li>
									<li><a href="#"><figure> <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/wireless.png" class="img-responsive" alt="" /> <figcaption>Tecnologia sem fios</figcaption> </figure></a></li>
									</ul>
							</div>

							<div class="btn_form">
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
&add=false">Adicionar ao carrinho</a>
							</div>
							<?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
&add=true"><span>Adicionar Produto à wishlist!</span></a>
							<?php } else { ?>
    						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_signin.php"><span>Faça login para adicionar à wishlist!</span></a>
    						<?php }?>
						</div>
          	    		<div class="clearfix"></div>
          	   		</div>
          	   		<!-- details -->
          	   		<div class="single-bottom1">
						<h6>Descri&ccedil;&atilde;o geral de produto</h6>
						<p class="prod-desc"><p>
							<?php echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];?>

						</p>
					</div>

					<!--coments box -->
					<div class="detailBox">
						<div class="titleBox">
							<label>Deixe aqui a sua opinião sobre o produto</label>
						</div>
						<div class="actionBox">
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<ul class="commentList">
								<li>
									<div class="commenterImage">
										<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['caminho'];?>
" />
									</div>
									<div class="commentText">
										<p class=""><?php echo $_smarty_tpl->tpl_vars['row']->value['comentario'];?>
</p>

									</div>
								</li>
							</ul>
							<?php } ?>
							<form class="form-inline" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/newComment.php" method="post">
								<div class="form-group">
									<input name="idProduto" type="number" value="<?php echo $_smarty_tpl->tpl_vars['idProduto']->value;?>
" hidden>
									<input name="comment" class="form-control" type="text" placeholder="Your comments" />
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-default">Adicionar</button>
								</div>
							</form>
						</div>
					</div>

					<!-- related products -->
					<div class="single-bottom2">
						<h6>Produtos Relacionados </h6>
						<!-- first related product -->
						<div class="product">
							<?php  $_smarty_tpl->tpl_vars['recomen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recomen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recomendados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recomen']->key => $_smarty_tpl->tpl_vars['recomen']->value) {
$_smarty_tpl->tpl_vars['recomen']->_loop = true;
?>
							<form role ="form" method="post">
                            <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['recomen']->value['nome'];?>
">
						  	
						  	<div class="product-desc">
						  		
								<div class="product-img">
		                           	<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['recomen']->value['caminho'];?>
" class="img-responsive " alt=""/>
		                       	</div>
		                        <div class="prod1-desc">
		                        	
		                           	<h5><a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['recomen']->value['nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['recomen']->value['nome'];?>
</a></h5>
		                           	<p class="product_descr">
										<?php echo $_smarty_tpl->tpl_vars['recomen']->value['descricao'];?>
</p>		
															
							    </div>
							  	<div class="clearfix"></div>
					      	</div>
						  	<div class="product_price">
								<span class="price-access"><?php echo $_smarty_tpl->tpl_vars['recomen']->value['preco'];?>
</span>	
								<!--<button class="button1"><span>Adicionar ao carrinho</span></button>-->
		                  	</div>
		             
						 	<div class="clearfix"></div>
						 	 </form>
						<?php } ?>
				     	</div>
		   	  		</div>       		
	  			</div>
	 			<!-- sidebar -->
	  			<div class="col-md-3 span_1_of_right">
	  				<div class="w_nav1">
						<h4>Classificação</h4>
						<div class="rtng">
					    	<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/votar.php?prodn=<?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
" method="POST">
						     	    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
                                    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
                                    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
                                    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
                                    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
						  	</form>
						</div>
						<p> </br> </p>
					</div>					
				</div>
		 	</div>
		</div>
	</div>

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Scripts -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/rating.js"></script>	
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.etalage.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/etalage.js"></script>
	
</body>
</html><?php }} ?>

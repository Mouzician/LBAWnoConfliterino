<?php /* Smarty version Smarty-3.1.15, created on 2015-06-02 23:57:36
         compiled from "/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1466776749556dd5453571a0-06284798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9db8b4f502ff099b62b517d82b5829663befee7' => 
    array (
      0 => '/usr/users2/mieic2012/ei12185/public_html/LBAW/templates/products.tpl',
      1 => 1433282146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466776749556dd5453571a0-06284798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556dd5455339d4_47450752',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'categoria' => 0,
    'subcategoria' => 0,
    'allproducts' => 0,
    'product' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556dd5455339d4_47450752')) {function content_556dd5455339d4_47450752($_smarty_tpl) {?><!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Lista de Produtos</title>
	<!-- meta tags -->
    <meta name="author" content="MarKnad Inc.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-Type" content="text/html; charset=utf-8">
	<!-- CSS Theme files -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/nav.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/form.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css" rel="stylesheet" type="text/css" media="all">	
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<!-- category bar -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
        			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Go to Home Page"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li>
                	<?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['subcategoria']->value!=null) {?><span>&gt;</span>
                </li>                	
				<li>
					<span class="red">&nbsp;<?php echo $_smarty_tpl->tpl_vars['subcategoria']->value;?>
&nbsp;</span>
    			</li>
    			<?php }?>
        	</ul>
            <ul class="previous">
               	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Voltar à página inicial</a>
               	</li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div class="ft-ball">
			<!-- list of products -->

			<div class="cont span_2_of_3">
				<!-- sort-by and pages bar -->
		  		<div class="mens-toolbar">
              		<div class="sort">
               			<div class="sort-by">
		            		<label>Ordenar por </label>
		            		<select>
		                        <option value="">Popularidade</option>
		                        <option value="">Preço: mais caro</option>
		                        <option value="">Preço: mais barato</option>
		                    </select>
		                   <br/>
               			</div>
    				</div>
    			</div>
    			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				    <div class="col_1_of_single1 span_1_of_single1">

				    	<div class="view1 view-fifth1">
				  	  		<div class="top_box">
				  	  							    	
					  			<h3 class="m_1"><?php echo $_smarty_tpl->tpl_vars['product']->value['nome'];?>
</h3>
					  			<!--<p class="m_2"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</p>-->
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php?produto=<?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
">
				         			<div class="grid_img">
						   				<div class="css3"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cat']->value['caminho'];?>
" alt=""/></div>
					          			<div class="mask1">
	                       					<div class="info">Ver Produto</div>
			                 			</div>
	                    			</div>
                       				<div class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['preco'];?>
</div>
					   			</a>  

					   		</div>
					    </div>
		
						<div class="rtng">
					    	<form action="" class="sky-form">
						     	<fieldset>					
							   		<section>
							     		<div class="rating">
											<input type="radio" name="stars-rating" id="stars-rating-5">
												<label for="stars-rating-5"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-4">
												<label for="stars-rating-4"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-3">
												<label for="stars-rating-3"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-2">
												<label for="stars-rating-2"><i class="icon-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-1">
												<label for="stars-rating-1"><i class="icon-star"></i></label><span class="rtng">(5)</span>
											<div class="clearfix"></div>
								 		</div>
							  		</section>
						    	</fieldset>
						  	</form>
						 
						</div>

												   			
						<ul class="list2">
						  	<li>
						  		<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/plus.png" alt=""/>
						  		<ul class="icon1 sub-icon1 profile_img">
							  		<li><a class="active-icon c1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/view_single.php">Comprar </a>
										<ul class="sub-icon1 list">
											<li><h3>Adicionar ao carrinho de compras</h3><a href=""></a></li>
											<li><p>Poderá mais tarde fazer checkout e encomendar este produto</a></p></li>
										</ul>
							  		</li>
							 	</ul>
						   </li>
						</ul>
			    	    <div class="clear"></div>
			    	</div>

<?php } ?>


			<div class="clearfix"></div>

		</div>
	</div>

			<!-- sidebar -->
     	    <div class="rsidebar span_1_of_left">
				<section  class="sky-form">
				  	<!--<div class="product_right">
     					<h3 class="m_2">Categories</h3>
     			    	<select class="dropdown" tabindex="10">
            				<option value="0">Novidades</option>	
							<option value="1">Portátil</option>
							<option value="2">Desktop</option>
		           		</select>
				   		<select class="dropdown" tabindex="8">
							<option value="1">Notebook</option>
							<option value="2">Ultrabook</option>
							<option value="3">Mini</option>
							<option value="4">Híbrido</option>
			       		</select>
			       		<select class="dropdown" tabindex="8">
							<option value="1">Especialidades</option>
							<option value="2">Performance</option>
							<option value="3">Gráfico</option>
							<option value="4">Gaming</option>
							<option value="5">Som</option>
			       		</select>
			       		<select class="dropdown" tabindex="8">
							<option value="1">Saldos</option>
							<option value="2">Liquidação</option>
							<option value="3">Ocasiões</option>
			       		</select>
					</div>-->
					<h4>Processador</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Intel Atom, Pentium | AMD E, A4</label>
						</div>
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Intel Core i3 | AMD A6</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Intel Core i5 | AMD A8</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Intel Core i7</label>
						</div>
					</div>
				</section>
		        <section  class="sky-form">
					<h4>Marca</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asus</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Acer</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>HP</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Compaq</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Samsung</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Toshiba</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sony</label>
						</div>
					</div>
		       </section>
		       <section  class="sky-form">
					<h4>Dimensão ecrã</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Até 11 polegadas</label>
						</div>
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>12 a 14 polegadas</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>15 a 16 polegadas</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mais de 17 polegadas</label>
						</div>
					</div>
		       </section>
		       <section  class="sky-form">
					<h4>Preços</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Menos de 500€</label>
						</div>
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>De 500 a 700€</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>De 700 a 900€</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>De 1000 a 1200€</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mais de 1200€</label>
						</div>
					</div>
		       </section>
			</div>
		</div>


	<!-- content-section-ends -->

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Scripts -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.easydropdown.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/event_listener.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/footer_anim.js"></script>
	
</body>
</html><?php }} ?>

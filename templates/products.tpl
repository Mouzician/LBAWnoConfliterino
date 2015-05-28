<!DOCTYPE html>

<html>
<head>
	<title>MarKnad - Lista de Produtos</title>
	<!-- meta tags -->
    <meta name="author" content="MarKnad Inc.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-Type" content="text/html; charset=utf-8">
	<!-- CSS Theme files -->
	<link href="{$BASE_URL}css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="{$BASE_URL}css/nav.css" rel="stylesheet" type="text/css" media="all">
	<link href="{$BASE_URL}css/form.css" rel="stylesheet" type="text/css" media="all">
	<link href="{$BASE_URL}css/style.css" rel="stylesheet" type="text/css" media="all">	
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		{include file='common/navbar.tpl'}
	</div>

	<!-- category bar -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
        			<a href="{$BASE_URL}" title="Go to Home Page"><img src="{$BASE_URL}images/icons/home.png" alt=""/></a>&nbsp;
                    <span>&gt;</span>
                </li>
                <li>Computadores <span>&gt;</span>
				</li>
				<li>
					<span class="red">&nbsp;Informática&nbsp;</span>
    			</li>
        	</ul>
            <ul class="previous">
               	<li><a href="{$BASE_URL}">Voltar</a>
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
    						{foreach $categoria as $cat}
				    <div class="col_1_of_single1 span_1_of_single1">

				    	<div class="view1 view-fifth1">
				  	  		<div class="top_box">
				  	  							    	
					  			<h3 class="m_1">{$cat.nome}</h3>
					  			<!--<p class="m_2">{$cat.nome}</p>-->
								<a href="{$BASE_URL}pages/view_single.php?produto={$cat.nome}">
				         			<div class="grid_img">
						   				<div class="css3"><img src="{$BASE_URL}images/products/HP1.jpg" alt=""/></div>
					          			<div class="mask1">
	                       					<div class="info">Ver Produto</div>
			                 			</div>
	                    			</div>
                       				<div class="price">{$cat.preco}</div>
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
						  		<img src="{$BASE_URL}images/icons/plus.png" alt=""/>
						  		<ul class="icon1 sub-icon1 profile_img">
							  		<li><a class="active-icon c1" href="{$BASE_URL}pages/view_single.php">Comprar </a>
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

{/foreach}


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
    {include file='common/footer.tpl'}
    <!-- Scripts -->
	<script src="{$BASE_URL}javascript/jquery.min.js"></script>
	<script src="{$BASE_URL}javascript/jquery.easydropdown.js"></script>
	<script type="text/javascript" src="{$BASE_URL}javascript/event_listener.js"></script>
	<script type="text/javascript" src="{$BASE_URL}javascript/footer_anim.js"></script>
	
</body>
</html>
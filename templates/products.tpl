{include file='common/head.tpl'}
	<title>MarKnad - Lista de Produtos</title>
	<!-- Custom CSS files -->
	<link href="{$BASE_URL}css/form.css" rel="stylesheet" type="text/css" media="all">
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
                <li>
                	{$categoria} {if $subcategoria != NULL}<span>&gt;</span>
                </li>
				<li>
					<span class="red">&nbsp;{$subcategoria}&nbsp;</span>
    			</li>
    			{/if}
        	</ul>
            <ul class="previous">
               	<li><a href="{$BASE_URL}">Voltar à página inicial</a>
               	</li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="container" >
		<div class="ft-ball" >
			<!-- list of products -->

			<div class="cont span_2_of_3">
				<!-- sort-by and pages bar -->
		  		<div class="mens-toolbar" >
              		<div class="sort">
               			<div class="sort-by">
											<form id="myform" method="post" action="{$BASE_URL}pages/view_products.php?page_name={$getSub}">
			            			<input name="allProducts" type="hidden" value={$topass}? hidden>
			            		<select name="order" onchange="change()">
			            			<option disabled selected> -- select an option -- </option>
			                        <option value="caro">Preço: mais caro</option>
			                        <option value="barato">Preço: mais barato</option>
			                    </select>
			                    </form>
			                    <script>
									function change(){
	    								document.getElementById("myform").submit();
									}
								</script>
		                   <br/>
               			</div>
    				</div>
    			</div>
    			{foreach $allproducts as $product}
			    <div class="col_1_of_single1 span_1_of_single1" style='height:380px'>

			    	<div class="view1 view-fifth1">
			  	  		<div class="top_box">

				  			<h3 class="m_1">{$product.nome}</h3>
				  			<!--<p class="m_2">{$cat.nome}</p>-->
							<a href="{$BASE_URL}pages/view_single.php?produto={$product.nome}">
			         			<div class="grid_img">
					   				<div class="css3"><img src="{$BASE_URL}{$product.caminho}" alt=""/></div>
				          			<div class="mask1">
                       					<div class="info">Ver Produto</div>
		                 			</div>
                    			</div>
                                <br>
                   				<div class="price">{$product.preco}€</div>
				   			</a>
				   		</div>
				    </div>

					

					
		    	    <div class="clear"></div>
		    	</div>

{/foreach}


			<div class="clearfix"></div>

		</div>
	</div>

			<!-- sidebar -->
     	    <div class="rsidebar span_1_of_left">
				<section  class="sky-form">

					<h4>Price range</h4>

					<div class="row row1 scroll-pane">
						<form class="form-inline" role="form" action="{$BASE_URL}pages/view_products.php?page_name={$getSub}" method="post">
						<div class="col col-4">
							<label for=fader>Maximum Price</label>
								<input type=range name=priceMaximum min=0 max=2000 value=2000 id=fader step=1 oninput="outputUpdateMax(value)">
								<output for=fader id=pmax>2000</output>
								<label for=fader>Minimum Price</label>
								<input type=range name=priceMinimun min=0 max=2000 value=0 id=fader step=1 oninput="outputUpdateMin(value)">
								<output for=fader id=pmin>0</output>
								<div class="form-group">
									<input id="submit" type="submit" value="Submit" class="btn btn-default">
								</div>
								<script>
								function outputUpdateMin(pmin) {
								document.querySelector('#pmin').value = pmin;
								}
								</script>
								<script>
								function outputUpdateMax(pmax) {
								document.querySelector('#pmax').value = pmax;
								}
							</script>
						</div>
					</form>
					</div>
				</section>
			</div>
		</div>
	<!-- content-section-ends -->

	<!--footer-->
    {include file='common/footer.tpl'}

<script src="{$BASE_URL}javascript/rating.js"></script>

</body>
</html>

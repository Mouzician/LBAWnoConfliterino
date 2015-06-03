<?php /* Smarty version Smarty-3.1.15, created on 2015-06-03 16:09:54
         compiled from "/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/FAQ.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20289273165566eeea4467a7-57045608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6390596b5a413af7bcf9856afd35e676a2b5bef8' => 
    array (
      0 => '/usr/users2/mieic2012/ei12189/public_html/LBAW/templates/FAQ.tpl',
      1 => 1433340108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20289273165566eeea4467a7-57045608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5566eeea575046_25947949',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5566eeea575046_25947949')) {function content_5566eeea575046_25947949($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<title>MarKnad - FAQ</title>
	<!-- Custom CSS files -->   
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/reset.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/faq.css" rel="stylesheet">	
</head>

<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<!-- main navbar -->
		<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

	<!-- start Contact-page -->
	<!-- content-section-starts -->
	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" title="Retornar à pagina inicial"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/icons/home.png" alt="Home"/></a>&nbsp;
                    <span>&gt;</span>
                     <span>FAQ</span>
                </li>             	
            </ul>
            <ul class="previous">
               	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Voltar à página inicial</a></li>
            </ul>
            <div class="clearfix"></div>
		</div>
	</div>

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li class="cd-faq-title"><h2>A minha conta</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Registo</a>
				<div class="cd-faq-content">
					<p> Pode efectuar o registo na página inicial, sendo necessário um id, uma password e um email, tento assim oportunidade de efetuar compras entre outras coisas.
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">Como muda a password?</a>
				<div class="cd-faq-content">
					<p> Pode mudar a password no seu perfil, mencionando a password antiga e introduzindo a nova.
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="mobile" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Comprar na Marknad</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Compra</a>
				<div class="cd-faq-content">
					<p>Faça login, adicione o produto que pretende ao carrinho de compras e efectue o pagamento.
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">Meios de pagamento</a>
				<div class="cd-faq-content">
					<p> Se optar por pagar as suas encomendas por cartão de crédito, poderá fazê-lo com total segurança. Se preferir o pagamento por Multibanco, o site enviará para o seu email uma entidade, uma referência e o valor da sua encomenda que poderá liquidar em qualquer caixa ATM (ou Homebanking).
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="account" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Entregas</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Prazo da entrega</a>
				<div class="cd-faq-content">
					<p> Os prazos para entregas de encomendas, são estimados a partir da data do processamento das encomendas e em função do transportador e destino escolhido. Mas não irá ultrapassar os 14dias, ou seja, 2 semanas.
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">Os nossos transportadores</a>
				<div class="cd-faq-content">
					<p> A entrega das encomendas da Fnac.pt é efectuada através dos CTT Expresso, Adicional, DHL e lojas Fnac. <br> <br>
							CTT Expresso <br>
							Para entrega das expedições  em Portugal Continental, Ilhas e Países fora da Europa. <br>
							
							Entregam no dia útil seguinte (se CTT Expresso) ou até 3 dias (se CTT Económico) ou Sábado ( se CTT Sábado ).
							Não efectuam entregas de encomendas aos Domingos e aos Feriados.
							No caso de não conseguirem efectuar a entrega, é deixado um Aviso de Entrega na caixa de correio. A encomenda é colocada na estação de correios mais próxima da sua morada e ficará disponível para levantamento durante 3 dias úteis ou 10 dias (CTT Económico).
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="payments" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Serviço pós venda</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Trocas e devoluções</a>
				<div class="cd-faq-content">
					<p> Caso deseje proceder à troca de artigos, poderá contactar o Apoio ao Cliente da Marknad, no prazo de 30 dias a contar da sua data de recepção, que lhe fornecerá informações sobre o processo de troca/devolução. Em caso algum envie os artigos sem contacto prévio pois os mesmos não serão recepcionados.
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

	</div> <!-- cd-faq-items -->
	</br></br></br></br>

	<!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--Scripts -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery-2.1.1.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery.mobile.custom.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>

</body>
</html>
<?php }} ?>

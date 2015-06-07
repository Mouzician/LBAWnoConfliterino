{include file='common/head.tpl'}
    <title>MarKnad - Editar Perfil</title>
    <!-- Custom CSS files -->
    <link href="{$BASE_URL}css/cart.css" rel='stylesheet' type='text/css'>
</head>

<body> <!--style="background:#f0f0f0;"-->
    <!-- header-section-starts -->
    <!-- start Contact-page -->
    <!-- content-section-starts -->
    <div class="container">
        <div class="dreamcrub">
            <ul class="previous">
                <li><a href="{$BASE_URL}pages/admin/view_produtos.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <h2>Editar Produto  : {$produto.nome}</h2>
                <form method="post" action="{$BASE_URL}actions/products/edit_prod.php?">
                    <div>
                        <span><label>Nome</label></span>
                        <span><input name="Nome" type="text" class="textbox" value="{$produto.nome}"></span>
                    </div>
                    <div>
                        <span><label>Preço</label></span>
                        <span><input name="Preco" type="text" class="textbox" value="{$produto.preco}"></span>
                    </div>
                     <div>
                        <span><label>Descrição</label></span>
                        <span><input name="Descricao" type="text" class="textbox" value="{$produto.descricao}"></span>
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
    {include file='common/footer.tpl'}
    
</body>
</html>
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
                <li><a href="{$BASE_URL}pages/admin/view_editProfile.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <h2>Editar Perfil de : {$dados.nome}</h2>
                <form method="post" action="{$BASE_URL}actions/users/editar_perfil.php?">
                    <div>
                        <span><label>Nome</label></span>
                        <span><input name="userName" type="text" class="textbox" value="{$dados.nome}"></span>
                    </div>
                    <div>
                        <span><label>E-mail</label></span>
                        <span><input name="userEmail" type="email" class="textbox" value="{$dados.email}"></span>
                    </div>
                     <div>
                        <span><label>Morada</label></span>
                        <span><input name="userMorada" type="text" class="textbox" value="{$dados.morada}"></span>
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
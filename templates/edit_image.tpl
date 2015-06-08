{include file='common/head.tpl'}
    <title>MarKnad - Alterar Foto Perfil</title>
</head>

<body><!--style="background:#f0f0f0;"-->
    <!-- header-section-starts -->
    <div class="c-header" id="home">
        <!-- main navbar -->
        {include file='common/navbar.tpl'}
    </div>
    <!--style="background:#f0f0f0;"-->
    <!-- header-section-starts -->
    <!-- start Contact-page -->
    <!-- content-section-starts -->
    <div class="container">
        <div class="dreamcrub">
            <ul class="previous">
                <li><a href="{$BASE_URL}pages/view_myaccount.php">Voltar</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="contact">
            <div class="contact-form">
                <h2>Alterar foto de Perfil : {$dados.nome}</h2>
                <form role="form" id="form2" action="{$BASE_URL}actions/users/alterar_imagem.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                                <label>Carregar imagem de Perfil:</label>
                                <input type="file" name="userFile" value="upload">
                            </div> 
                    <div>
                        <span><input id="submit" type="submit" class="" value="Alterar!"></span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>        
        </div>
    </div>
    <!-- content-section-ends -->

    <!--footer-->
    {include file='common/footer.tpl'}
    <script src="{$BASE_URL}javascript/confirm_pass.js" type="text/javascript"></script>
    
</body>
</html>
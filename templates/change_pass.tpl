{include file='common/head.tpl'}
    <title>MarKnad - Alterar Password</title>
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
                <h2>Alterar password de: {$dados.nome}</h2>
                <form method="post" action="{$BASE_URL}actions/users/alterar_pass.php?">
                    <div>
                        <span><label>Password antiga</label></span>
                        <span><input name="oldPass" type="password" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Nova Password</label></span>
                        <span><input id="password" name="newPass" type="password" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Confirmar Password</label></span>
                        <span><input id="confPassword" name="confPass" type="password" class="textbox" onkeyup="checkPass(); return false;"></span>
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
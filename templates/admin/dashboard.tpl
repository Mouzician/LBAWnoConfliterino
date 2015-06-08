{include file='admin/common/header.tpl'}
    <title>MarKnad Admin - Dashboard</title>
    <!-- Morris Charts CSS -->
    <link href="{$BASE_URL}css/admin_css/plugins/morris.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        {include file='admin/common/top_navbar.tpl'}

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                      <div class="statContainer">
              
       
        <div class="statBubbleContainer">
        <div class="statBubble websitesLaunched">
             <a class="nounderline" href="{$BASE_URL}pages/admin/view_compras.php" title="Compras">
          <div class="statNum">
          {$num_compras}
          </div>

        </div>
          <h3>Compras Efetuadas</h3>
        </div>
        </a>


            
        <div class="statBubbleContainer">
        <div class="statBubble teamSize">
            <a class="nounderline" href="{$BASE_URL}pages/admin/view_clientes.php" title="Clientes">
          <div class="statNum">
          {$num_utilizadores}
          </div>
        </div>
          <h3>Utilizadores Registados</h3>
          
        </div>
        </a>
          
        
        <div class="statBubbleContainer">
        <div class="statBubble topSEORank">
            <a class="nounderline" href="{$BASE_URL}pages/admin/view_reclamações.php" title="Reclamações">
          <div class="statNum">
            {$num_reclamacoes}
          </div>
        </div>
          <h3>Reclamações Efetuados</h3>
        </div>
        </a>
          
        
        <div class="statBubbleContainer">
        <div class="statBubble facebookLikes">
            <a class="nounderline" href="{$BASE_URL}pages/admin/view_comentarios.php" title="Comentários">
          <div class="statNum">
          {$num_comments}
          </div>
        </div>
          <h3>Comentários Efetuados</h3>
        </div>
        </a>

        </div>  
                <!-- /.row -->        
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- jQuery -->
    <script src="{$BASE_URL}javascript/admin_javascript/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{$BASE_URL}javascript/admin_javascript/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{$BASE_URL}javascript/admin_javascript/plugins/morris/raphael.min.js"></script>
    <script src="{$BASE_URL}javascript/admin_javascript/plugins/morris/morris.min.js"></script>
    <script src="{$BASE_URL}javascript/admin_javascript/plugins/morris/morris-data.js"></script>

</body>

</html>

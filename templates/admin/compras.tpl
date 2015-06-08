{include file='admin/common/header.tpl'}
    <title>MarKnad Admin - Compras</title>
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
                        <h1 class="page-header">Últimas Compras</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{$BASE_URL}pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tags"></i> Últimas Compras
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
                <div class="col-lg-12">
                        
                        <h2>Lista de Compras </h2>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <tr><td>Nome User</td><td>Valor</td><td>Morada</td><td>Data da Compra</td><td>Modo de Pagamento</td></tr>
                            {foreach $compras as $compra}
                        <tr><td>{$compra.nome}</td>
                        <td>{$compra.valor}</td>
                        <td>{$compra.morada}</td>
                        <td>{$compra.data_compra}</td>
                        <td>{$compra.modopagamento}</td>
                        <td><input type="button" class="btn btn-danger" value="Cancelar" onclick=""></td>
                        </tr>
                        {/foreach}
                   </table>
               </div>
                </div> 
            </div>
        </div>
    </div>        


</body>

</html>

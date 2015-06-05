{include file='admin/common/header.tpl'}
    <title>MarKnad Admin - Produtos</title>
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
                        <h1 class="page-header">Produtos</h1>
                       <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="{$BASE_URL}pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tags"></i> Produtos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-circle"></i> Gerir Produtos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
                <div class="col-lg-12">
                        
                        <h2>Lista de Produtos </h2>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <tr><th >Nome Produto</th><th>Preço Produto</th><th>Descrição Produto</th><th colspan="2"> Manutenção </th></tr>
                            {foreach $products as $pro}                    
                        <tr>
                        <td >{$pro.nome}</td>
                        <td>{$pro.preco}</td>
                        <td>{$pro.descricao}</td>
                        <form role="form" id="form1" action="{$BASE_URL}actions/products/delete_prod.php" method="post">
                        <input type="hidden" name="name" value="{$pro.nome}">
                        <td><input type="submit" name ="submit" class="btn btn-danger btn-sm" value="Apagar Produto!" onclick=""></td>
                        </form>
                        <form role="form" id="form2" action="{$BASE_URL}pages/admin/view_editProduto.php" method="post">
                        <input type="hidden" name="name" value="{$pro.nome}">
                        <td><input type="submit" name ="submit" class="btn btn-info btn-sm" value="Editar Produto!" onclick=""></td>
                        </form>
                        {/foreach}
                   </table>
               </div>
                </div> 
            </div>
        </div>
    </div>

</body>

</html>



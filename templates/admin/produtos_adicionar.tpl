{include file='admin/common/header.tpl'}
    <title>MarKnad Admin - Adicionar Produto</title>
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
                                <i class="fa fa-plus"></i> Adicionar Produtos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <div class="container">                                        
                <h2>Adicionar Produto</h2>
                <form role="form" id="form1" action="{$BASE_URL}actions/products/adicionar_produto_action.php" method="post">
                    <div class="form-group">
                        <label for="text">Nome:</label>
                        <input type="text" class="form-control" name="nomeProduto">
                    </div>
                    <div class="form-group">
                    <label for="text">Categoria:</label>
                    <select id="country" class="form-control" name="country" ></select>
                </div>  
                <div class="form-group">
                    <label for="text">SubCategoria:</label>
                    <select name="state" class="form-control" id="state" ></select>
                </div>
                    <div class="form-group">
                        <label for="text">Preço:</label>
                        <input type="text" class="form-control" name="preco">
                    </div>
                    <div class="form-group">
                        <label for="comment">Descrição:</label>
                        <textarea class="form-control" rows="5" name="descricaoProduto"></textarea>
                    </div>
					<div class="form-group">
						<label>Carregar imagens:</label>
						<form action="" method="post" enctype="multipart/form-data">
						<input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
                    </div>
                    <button type="submit" form="form1" class="btn btn-default">Adicionar!</button>
                </form>
            </div>
        </div>
    </div>

</body>

 <script src="{$BASE_URL}javascript/admin_javascript/categories.js"></script>
    <script language="javascript">
        populateCountries("country", "state");
    </script>


</html>

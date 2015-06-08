{include file='admin/common/header.tpl'}
    <title>MarKnad Admin - Clientes</title>
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
                            Comentários
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{$BASE_URL}pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Comentários
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-12">
                    <h2>Lista de Comentários</h2>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" width="100%" style="text-align: center;">
                            <tr><td>Nome User</td><td>Comentário</td><td>Data do comentário</td></tr>
                               {foreach $comentarios as $re}

                        <form role ="form" action ="{$BASE_URL}actions/users/removerComentário.php" method="post">
                            <input type="hidden" name="idregistado" value="{$re.idcomentarioregistado}">
                            <input type="hidden" name="idanonimo" value="{$re.idcomentarioanonimo}">
                            <input type="hidden" name="nome" value="{$re.nome}">
                            <tr>
                                <td>{$re.nome}</td>
                                <td>{$re.comentario}</td>
                                <td>{$re.ultima_atualizacao}</td>
                                <td><input type="submit" class="btn btn-danger" value="Remover Comentário" onclick=""></td>
                            </tr>
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

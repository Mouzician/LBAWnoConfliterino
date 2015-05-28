<!DOCTYPE html>

<html lang="en">
<head>
    <title>MarKnad Admin - Clientes</title>
    {include file='admin/common/header.tpl'}
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
                            Clientes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{$BASE_URL}pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Clientes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-12">
                    <h2>Lista de Clientes</h2>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" width="100%" style="text-align: center;">
                            <tr><td>Nome User</td><td>Email User</td><td>Morada</td><td>Data de Nascimento</td></tr>
                               {foreach $clientes as $cli}

                        <form role ="form" action ="{$BASE_URL}actions/users/banir_utilizador.php" method="post">
                        <input type="hidden" name="name" value="{$cli.utilizador}">
                        <tr><td>{$cli.utilizador}</td>
                        <td>{$cli.email}</td>
                        <td>{$cli.morada}</td>
                        <td>{$cli.datanascimento}</td>
                        <td><input type="submit" class="btn btn-danger" value="Banir" onclick=""></td>
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

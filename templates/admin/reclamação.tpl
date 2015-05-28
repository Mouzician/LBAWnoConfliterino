<!DOCTYPE html>

<html lang="en">
<head>
    <title>MarKnad Admin - Reclamações</title>
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
                        <h1 class="page-header">Reclamações</h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="{$BASE_URL}pages/admin/view_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tags"></i> Reclamações
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            
                <div class="col-lg-12">
                        
                        <h2>Lista de Reclamações </h2>
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <tr><td>Nome User</td><td>Reclamação</td><td>Email</td></tr>
                            {foreach $reclamacao as $complaint}

                        <tr><td>{$complaint.username}</td>
                        <td>{$complaint.texto}</td>
                        <td>{$complaint.email}</td>
                        <td><a href="{$BASE_URL}pages/admin/view_contact.php?mail={$complaint.email}&name={$complaint.username}"> Responder </a></td>
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

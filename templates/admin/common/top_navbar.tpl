 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="{$BASE_URL}pages/admin/view_dashboard.php">MarKnad Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li>
            <a href="#">Administrador</a>
        </li>
        <li class="divider"></li>
        <li class="dropdown">
            <a href="{$BASE_URL}actions/users/logout.php"><i class="fa fa-sign-out"></i>Logout</a>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="{$BASE_URL}pages/admin/view_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a><i class="fa fa-tags"></i> Produtos</a>
            <ul class="sub-menu">
            <li>
                <a href="{$BASE_URL}pages/admin/view_produtos_adicionar.php"><i class="fa fa-tags"></i> Adicionar Produto</a>
            </li>
            <li>
                <a href="{$BASE_URL}pages/admin/view_produtos.php"><i class="fa fa-tags"></i> Gerir Produtos</a>
            </li>
        </ul>
            </li>
            <li>
                <a href="{$BASE_URL}pages/admin/view_compras.php"><i class="fa fa-shopping-cart"></i> Compras</a>
            </li>
            <li>
                <a href="{$BASE_URL}pages/admin/view_clientes.php"><i class="fa fa-users"></i> Clientes</a>
            </li>
            <li >
            <li>
                <a href="{$BASE_URL}pages/admin/view_reclamações.php"><i class="fa fa-comments"></i> Reclamações</a>
            </li>
            <li>
                <a href="{$BASE_URL}pages/admin/view_comentarios.php"><i class="fa fa-comments"></i> Comentários</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
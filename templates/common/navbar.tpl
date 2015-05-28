<div class="top-header">
  <div class="container">
    <div class="logo">
      <a href="{$BASE_URL}"><img src="{$BASE_URL}images/logo/logo.png" alt="" /></a>
    </div>
    <ul class="header-top-right">
      <!-- start search-->
      <li class="search-box">
        <div id="sb-search" class="sb-search">
          <form method="post" action="{$BASE_URL}actions/products/search.php">
            <input class="sb-search-input" placeholder="Pesquisar" type="search" name="search" id="search">
            <input class="sb-search-submit" type="submit" value="">
            <span class="sb-icon-search"> </span>
          </form>
        </div>
      </li>
      <!-- shopping cart -->
      <li><a href="{$BASE_URL}pages/view_cart.php"><i class="cart"></i></a></li>
      <li><a href="{$BASE_URL}pages/view_myaccount.php"><i class="acc"></i></a></li>
    </ul>

    <div class="navigation">  
      <label class="mobile_menu" for="mobile_menu">
                <span>Menu</span>
            </label>
            <input id="mobile_menu" type="checkbox">
      <ul class="nav">                      
                <li class="dropdown1"><a href="#">Informática</a>
                  <ul class="dropdown2">
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Informática">Computadores</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Informática">Tablets</a></li>
              <li><a href="{$BASE_URL}pages/view_products.php?page_name=Informática">Periféricos</a></li>
              <li><a href="{$BASE_URL}pages/view_products.php?page_name=Informática">Acessórios</a></li>
              <li><a href="{$BASE_URL}pages/view_products.php?page_name=Informática">Armazenamento</a></li>
                  </ul>
                </li>             
                <li class="dropdown1"><a href="#">Imagem e Som</a>
                  <ul class="dropdown2">
                      <li><a href="{$BASE_URL}pages/view_products.php?page_name=Imagem e Som">Televisões</a></li>
                      <li><a href="{$BASE_URL}pages/view_products.php?page_name=Imagem e Som">Audio</a></li>
                      <li><a href="{$BASE_URL}pages/view_products.php?page_name=Imagem e Som">Video</a></li>
                  </ul>
                </li>          
              <li class="dropdown1"><a href="#">Comunicações</a>
                <ul class="dropdown2">
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Comunicações">Telemóveis</a></li>
                      <li><a href="{$BASE_URL}pages/view_products.php?page_name=Comunicações">Telefones</a></li>
                      <li><a href="{$BASE_URL}pages/view_products.php?page_name=Comunicações">GPS</a></li>
                  </ul>
              </li>        
              <li class="dropdown1"><a href="#">Ajuda</a>
                <ul class="dropdown2">
                    <li><a href="{$BASE_URL}pages/view_contact.php">Contacte-nos</a></li>
                      <li><a href="{$BASE_URL}pages/view_FAQ.php">FAQ</a></li>
                  </ul>
              </li> 
            </ul>
    </div>
  </div>
</div><!-- closes navbar -->
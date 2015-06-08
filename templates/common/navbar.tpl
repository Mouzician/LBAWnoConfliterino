<div class="top-header">
  <div class="container">
    <div class="logo">
      <a href="{$BASE_URL}"><img style="height:auto; width:auto; max-height:62px;" src="{$BASE_URL}images/logo/mark.png" alt="" /></a>
    </div>
    <ul class="header-top-right">
      <!-- start search-->
      <li class="search-box">
        <div id="sb-search" class="sb-search">
          <form action="{$BASE_URL}pages/view_products.php">
            <input class="sb-search-input" placeholder="Pesquisar" type="text" name="passing" autocomplete="off" spellcheck="false">
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
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Computadores">Computadores</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Tablets">Tablets</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Periféricos">Periféricos</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Acessórios Informática">Acessórios</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Armazenamento">Armazenamento</a></li>
                  </ul>
                </li>             
                <li class="dropdown1"><a href="#">Imagem e Som</a>
                  <ul class="dropdown2">
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Televisões">Televisões</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Audio">Audio</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Foto e Video">Foto e Video</a></li>
                  </ul>
                </li>          
              <li class="dropdown1"><a href="#">Comunicações</a>
                <ul class="dropdown2">
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Telemóveis">Telemóveis</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=GPS">GPS</a></li>
                    <li><a href="{$BASE_URL}pages/view_products.php?page_name=Acessórios Telemóvel">Acessórios</a></li>
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
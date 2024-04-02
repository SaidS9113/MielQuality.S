  <!---------En tete de page----------->
  <header class="header" id="header">
      <div class="header-version-m-t-p"> <!--------Div header pour toute les versions----------->
          <i class="bx bx-menu-alt-left" id="menu-btn" style="font-size: 2.5rem;"></i>
          <!---------Menu défilant pour mbile et tablette----------->
          <nav class="mobile-first">
              <span id="close-btn" style="float:right; cursor:pointer;">&times;</span>
              <li class="logoNavbar"> <img src="../../img/logoP.png" alt=""></li>
              <ul class="listSite">
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="#">Boutique</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Connexion</a></li>
              </ul>
              <ul class="listReseauxScl">
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                  <li><a href=""><i class="fab fa-snapchat"></i></a></li>
                  <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                  <li><a href=""><i class="fa fa-envelope"></i></a></li>
              </ul>
          </nav>
          <!---------Barre de recherche pour la version pc----------->
          <div class="barre-recherche-pc">
              <div class="search">
                  <label class="" for=""></label>
                  <input type="search" id="" class="search-field mb-0" placeholder="Rechercher des produits..." value="" name="s" autocomplete="off">
                  <input type="hidden" name="post_type" value="product">
                  <button type="submit" value="Recherche" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                      <i class='bx bx-search'></i></button>
              </div>
          </div>
          <!---------Logo toujour au centre----------->
          <h1><a href="index.html"><img src="../../img/logoG.png" alt=""></a></h1>
          <!----icons(de recherche et panier) pour la version mobile et icons(De connexion et panier) pour la version tablette--->
          <div class="tablette-first_recherche_cart">
              <i class='bx bx-search'></i></button>
              <i class='bx bx-user' id="user-btn"></i>
              <i class='bx bx-shopping-bag' id="cart-icon"><sup id="cart-count">0</sup></i>
          </div>
      </div>
      <!--------Barre de recherche pour la tablette ----------->
      <div class="barre-recherche-tablette">
          <div class="search">
              <label class="" for=""></label>
              <input type="search" id="" class="search-field mb-0" placeholder="Rechercher des produits..." value="" name="s" autocomplete="off">
              <input type="hidden" name="post_type" value="product">
              <button type="submit" value="Recherche" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                  <i class='bx bx-search'></i></button>
          </div>
      </div>
      <!--------Menu pour la version pc----------->
      <nav class="version-desktop">
          <ul>
              <li><a href="index.php">Accueil</a></li>
              <li><a href="#">Boutique</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
          </ul>
      </nav>
      <!--------Panier----------->
      <div class="cart">
          <span id="close-btn-cart" style="float:right; cursor:pointer;">&times;</span>
          <h2 class="cart-title">PANIER</h2>
          <p class="panierVide">Votre panier est vide.</p>
      </div>
  </header>
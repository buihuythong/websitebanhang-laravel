<!-- Header -->
<header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="users/digital/images/english.png" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="users/digital/images/english.png" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="users/digital/images/francais.png" alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="users/digital/images/german.png" alt="language"> German </a></li>
              </ul>
            </div>
            <!-- End Header Language --> 
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
              </ul>
            </div>
            <!-- End Header Currency -->
            <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
          </div>
          <div class="col-xs-6"> 
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                <div class="phone hidden-xs">1 800 123 1234</div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12"> 
          <!-- Header Logo --> 
          <a class="logo" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="users/digital/images/logo.png"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/digital/cat" method="POST" id="search_mini_form" name="Categories">
              <select name="category_id" class="cate-dropdown hidden-xs">
                <option value="0">All Categories</option>
                <option value="36">Camera</option>
                <option value="37">Electronics</option>
                <option value="42">&nbsp;&nbsp;&nbsp;Cell Phones</option>
                <option value="43">&nbsp;&nbsp;&nbsp;Cameras</option>
                <option value="44">&nbsp;&nbsp;&nbsp;Laptops</option>
                <option value="45">&nbsp;&nbsp;&nbsp;Hard Drives</option>
                <option value="46">&nbsp;&nbsp;&nbsp;Monitors</option>
                <option value="47">&nbsp;&nbsp;&nbsp;Mouse</option>
                <option value="48">&nbsp;&nbsp;&nbsp;Digital Cameras</option>
                <option value="38">Desktops</option>
                <option value="39">Computer Parts</option>
                <option value="40">Televisions</option>
                <option value="41">Featured</option>
              </select>
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span>Search</span></button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"> <i class="icon-cart"></i>
                <div class="cart-box"><span class="title">My Cart</span><span id="cart-total"> 2 </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="users/digital/products-images/product1.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="Downloadable Product">Downloadable Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li>
                    <li class="item last odd"> <a class="product-image" href="#" title="  Sample Product "><img alt="  Sample Product " src="users/digital/products-images/product11.jpg" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="  Sample Product "> Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$320.00</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>
                      </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$420.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          <div class="signup"><a title="Login" href="login.html"><span>Sign up Now</span></a></div>
          <span class="or"> | </span>
          <div class="login"><a title="Login" href="login.html"><span>Log In</span></a></div>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner"> 
        
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul style="display:none;" class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="index.html"> <span>Home</span> </a>
                      <ul class="level0">
                        <li class="level1"><a href="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/fashion/index.html"><span>Fashion Store</span></a> </li>
                        <li class="level1"><a href="index.html"><span>Digital Store</span></a> </li>
                        <li class="level1"><a href="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/furniture/index.html"><span>Furniture Store</span></a> </li>
                        <li class="level1"><a href="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/jewellery/index.html"><span>Jewellery Store</span></a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-6 level-top"> <a class="level-top" href="#"> <span>Pages</span> </a>
                      <ul class="level0">
                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                        <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                          <ul class="level2">
                            <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="checkout_billing-info.html"><span>Checkout Billing Info</span></a></li>
                          </ul>
                        </li>
                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                        <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                        <li class="level1"> <a href="about.html"> <span>About us</span> </a> </li>
                        <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
                        <li class="level1"><a href="delivery.html"><span>Delivery</span></a> </li>
                        <li class="level1"><a href="faq.html"><span>FAQ</span></a> </li>
                        <li class="level1"><a href="quick_view.html"><span>Quick View</span></a> </li>
                        <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                        <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                        <li class="level1"><a href="sitemap.html"><span>Sitemap</span></a> </li>
                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="grid.html"> <span>Fashion</span> </a> </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span>Women</span> </a> </li>
                    <li class="level0 parent drop-menu"><a href="blog.html"><span>Blog</span> </a>
                      <ul class="level1">
                        <li class="level1 first"><a href="blog_posts_table_view.html"><span>Table View</span></a></li>
                        <li class="level1 nav-10-2"> <a href="blog_single_post.html"> <span>Single Post</span> </a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="contact.html"> <span>Contact</span> </a> </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        <!--End mobile-menu --> 
        <a class="logo-small" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="users/digital/images/logo-small.png"></a>
        <ul id="nav" class="hidden-xs">
          <li class="level0 parent drop-menu"><a href="index.html" class="active"><span>Home</span> </a>
            <ul class="level1">
              <li class="level1"><a href="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/fashion/index.html"><span>Fashion Store</span></a> </li>
              <li class="level1"><a href="index.html"><span>Digital Store</span></a> </li>
              <li class="level1"><a href="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/furniture/index.html"><span>Furniture Store</span></a> </li>
              <li class="level1"><a href="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/jewellery/index.html"><span>Jewellery Store</span></a> </li>
            </ul>
          </li>
          <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
            <ul class="level1">
              <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
              <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
              <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
              <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
              <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                <ul class="level2">
                  <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                  <li class="level2 nav-2-1-5 last"><a href="checkout_billing-info.html"><span>Checkout Billing Info</span></a></li>
                </ul>
              </li>
              <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
              <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
              <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
              <li class="level1"> <a href="about.html"> <span>About us</span> </a> </li>
              <li class="level1"><a href="compare.html"><span>Compare</span></a></li>
              <li class="level1"><a href="delivery.html"><span>Delivery</span></a> </li>
              <li class="level1"><a href="faq.html"><span>FAQ</span></a> </li>
              <li class="level1"><a href="quick_view.html"><span>Quick View</span></a> </li>
              <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
              <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
              <li class="level1"><a href="sitemap.html"><span>Sitemap</span></a> </li>
              <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
            </ul>
          </li>
          <li class="level0 nav-5 level-top first"> <a href="grid.html" class="level-top"> <span>Women</span> </a>
            <div class="level0-wrapper dropdown-6col" style="display:none;">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Styliest Bag</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Clutch Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Diaper Bags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hobo Handbags</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Material Bag</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Beaded Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fabric Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Handbags</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Handbags</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Shoes</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Flat Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Flat Sandals</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Boots</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Heels</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Jwellery</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bracelets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Necklaces &amp; Pendants</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pendants</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pins &amp; Brooches</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                  </ul>
                  <div class="nav-add">
                    <div class="push_item1">
                      <div class="push_img"> <a href="#"> <img  alt="women jwellery" src="users/digital/images/women-cate-banner.jpg"> </a> </div>
                    </div>
                    <div class="push_item1">
                      <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="users/digital/images/women-cate-banner1.jpg"> </a> </div>
                    </div>
                    <div class="push_item1 push_item1_last">
                      <div class="push_img"> <a href="#"> <img  alt="women_bag" src="users/digital/images/women-cate-banner2.jpg"> </a> </div>
                    </div>
                    <br class="clear">
                  </div>
                </div>
                <!--nav-block nav-block-center-->
                <div class="nav-block nav-block-right std grid12-4">
                  <p><a href="#"><img class="fade-on-hover" src="users/digital/images/nav-women-banner.jpg" alt="nav img"></a></p>
                </div>
                <!--nav-block nav-block-right std grid12-4--> 
              </div>
            </div>
          </li>
          <li class="level0 nav-7 level-top parent"> <a href="grid.html" class="level-top"> <span>Men</span> </a>
            <div class="level0-wrapper dropdown-6col" style="display: none;">
              <div class="level0-wrapper2"> 
                <!--nav-block nav-block-center-->
                <div class="nav-block nav-block-left std grid12-6">
                  <p><a href="#"><img class="fade-on-hover" src="users/digital/images/nav-men-banner.jpg" alt="nav img"></a></p>
                </div>
                <!--nav-block nav-block-right std grid12-4-->
                
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Shoes</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sport Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Shoes</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Canvas shoes</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Dresses</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casual Dresses</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Evening</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Designer</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Party</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Jackets</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Coats</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Formal Jackets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Leather Jackets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Blazers</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Watches</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fasttrack</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Casio</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Titan</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tommy-Hilfiger</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                  </ul>
                  <div class="nav-add">
                    <div class="push_item">
                      <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="users/digital/images/men-banner-img.jpg"> </a> </div>
                    </div>
                    <div class="push_item last">
                      <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="users/digital/images/men-banner-img1.jpg"> </a> </div>
                    </div>
                    <br class="clear">
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="level0 nav-5 level-top first"> <a class="level-top" href="grid.html"> <span>Electronics</span> </a>
            <div style="display:none;" class="level0-wrapper dropdown-6col">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col"> 
                  <!--mega menu-->
                  <ul class="level3">
                    <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Mobiles</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Samsung</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Nokia</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>iPhone</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sony</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category-->
                      <div class="cat-img"><img src="users/digital/images/e-img1.jpg" alt="Mobiles"></div>
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Mobiles Accesories</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Mobile Memory Cards</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cases &amp; Covers</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Mobile Headphones</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bluetooth Headsets</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category-->
                      <div class="cat-img"><img src="users/digital/images/e-img2.jpg" alt="Mobiles Accesories"></div>
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Cameras</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Camcorders</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Point &amp; Shoot</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Digital SLR</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Camera Accesories</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      
                      <!--sub sub category-->
                      <div class="cat-img"><img src="users/digital/images/e-img3.jpg" alt="Cameras"></div>
                    </li>
                    <!--level1 nav-6-1 parent item-->
                    
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Audio &amp; Video</span></a> 
                      <!--sub sub category-->
                      
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>MP3 Players</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>IPods</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Speakers</span></a> </li>
                        <!--level2 nav-6-1-1-->
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Video Players</span></a> </li>
                        <!--level2 nav-6-1-1-->
                      </ul>
                      <!--level1--> 
                      <!--sub sub category-->
                      <div class="cat-img"><img src="users/digital/images/e-img4.jpg" alt="Audio &amp; Video"></div>
                    </li>
                    <!--level1 nav-6-1 parent item-->
                  </ul>
                  <!--level0--> 
                </div>
                <!--nav-block nav-block-center-->
                <div class="nav-block nav-block-right std grid12-4">
                  <p><a href="#"><img class="fade-on-hover" src="users/digital/images/nav-img1.jpg" alt="nav img"></a></p>
                  <h3 class="heading">Responsive Magento Theme</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
                  <p><a class="btn-button-st" title="Shop collection now" href="#">Shop collection now</a></p>
                </div>
                <!--nav-block nav-block-right std grid12-4--> 
              </div>
            </div>
          </li>
          <li class="level0 nav-5 level-top parent"><a href="grid.html"><span>Furniture </span> </a>
            <div class="level0-wrapper dropdown-6col" style="display: none;">
              <div class="level0-wrapper2">
                <div class="nav-block nav-block-center">
                  <ul class="level0">
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Living Room</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Racks &amp; Cabinets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sofas</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Chairs</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tables</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Dining &amp; Bar</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dining Table Sets</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Serving Trolleys</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Bar Counters</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dining Cabinets</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Bedroom</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Coats</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Beds</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Chest of Drawers</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Wardrobes &amp; Almirahs</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Kitchen</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Kitchen Racks</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Kitchen Fillings</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Wall Units</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Benches &amp; Stools</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                    <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Kitchen</span></a> 
                      <!--sub sub category-->
                      <ul class="level1">
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Ray Ban</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fasttrack</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Police</span></a> </li>
                        <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Oakley</span></a> </li>
                      </ul>
                      <!--sub sub category--> 
                    </li>
                  </ul>
                </div>
              </div>
              <!--level0-wrapper2--> 
            </div>
          </li>
          <li class="level0 parent drop-menu"><a href="blog.html"><span>Blog</span> </a>
            <ul style="display: none;" class="level1">
              <li class="level1 first"><a href="blog_posts_table_view.html"><span>Table View</span></a> </li>
              <li class="level1 parent"><a href="blog_single_post.html"><span>Single Post</span></a> </li>
            </ul>
          </li>
          <li class="nav-custom-link level0 level-top parent"> <a class="level-top" href="#"><span>Custom</span></a>
            <div class="level0-wrapper custom-menu" style="left: 0px; display: none;">
              <div class="header-nav-dropdown-wrapper clearer">
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="users/digital/images/custom-img1.jpg" alt="custom img1"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="users/digital/images/custom-img2.jpg" alt="custom img2"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="users/digital/images/custom-img3.jpg" alt="custom img3"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
                <div class="grid12-5">
                  <div class="custom_img"><a href="#"><img src="users/digital/images/custom-img4.jpg" alt="custom img4"></a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue.</p>
                  <button class="learn_more_btn" title="Add to Cart" type="button"><span>Learn More</span></button>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 

  
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
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account </span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                <div class="phone hidden-xs">+84 948 147 100</div>
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
                @foreach($cat as $ca)
                <option value="41">{{$ca->name}}</option>
                @endforeach
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
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="{{ route('shopping')}}""> <i class="icon-cart"></i>
                @if(Session::has('cart'))
<?php 
    $product_cart=Session('cart')->items;
    
 ?>         
                <div class="cart-box" ><span class="title">My Cart</span><span id="cart-total"> {{ Session('cart')->totalQty }}</span></div>
                </a></div>
                
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item({{ Session('cart')->totalQty }})</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                   @foreach($product_cart as $pro)
                    <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="users/digital/products-images/{{$pro['item']['image'] }}" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="{{ route('delCart',$pro['item']['id']) }}" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                          <p class="product-name"> <a href="#" title="Downloadable Product">{{ $pro['item']['name'] }}</a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">${{$pro['item']['old_price']}} * {{ $pro['qty'] }} =$ {{$pro['price']}}</span> <span class="title-desc">Qty:</span> <strong>{{$pro['qty']}}</strong> </div>
                      </div>
                    </li>
                     @endforeach
                    
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price"><h4>${{Session('cart')->totalPrice}}</h4></span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                   <a href="{{ route('shopping') }}"> <button class="view-cart" type="button" ><span >View Cart</span></button>
                    </a>
                  </div>
                </div>
              </div>

            </div>
            @endif
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
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="index.html"> <span>Home 11</span> </a>
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
          @foreach($cat as $ca)
          <li class="level0 parent drop-menu"><a href="index.html" ><span><?php echo $ca->name ?></span> </a>
            <ul class="level1">
              @foreach($type as $ty)
              <?php 
              if($ty->cat_id==$ca->id){ ?>
              <li class="level1"><a href="http://htmldemo.magikcommerce.com/ecommerce/inspire-html-template/fashion/index.html"><span>
              <?php echo $ty->name; ?>
              </span></a> </li>
              <?php } ?>
              @endforeach
            </ul>
          </li>
          @endforeach
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 

  
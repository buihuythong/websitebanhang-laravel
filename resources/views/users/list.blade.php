@extends('users.master')
@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="index.html" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="grid.html" title="Go to Home Page">Women</a><span>&mdash;›</span></li>
          <li class="category13"><strong>Tops &amp; Tees</strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 
  <!-- Two columns content -->
  <section class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-9 col-xs-12 col-sm-push-3 wow">
          <div class="category-title">
            <h1>Tops &amp; Tees</h1>
          </div>
          <div class="category-description std">
            <div class="category-image"><img src="users/digital/images/category-banner-img.jpg" alt="cat imges " title="Sofas "> </div>
          </div>
          <div class="category-products">
            <div class="toolbar">
              <div class="sorter">
                <div class="view-mode"> <a href="grid.html" title="Grid" class="button button-grid">Grid</a>&nbsp; <span title="List" class="button button-active button-list">List</span>&nbsp; </div>
              </div>
              <div id="sort-by">
                <label class="left">Sort By: </label>
                <ul>
                  <li><a href="#">Position<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">Name</a></li>
                      <li><a href="#">Price</a></li>
                      <li><a href="#">Position</a></li>
                    </ul>
                  </li>
                </ul>
                <a class="button-asc left" href="#?dir=desc&amp;order=position" title="Set Descending Direction"><span style="color:#999;font-size:11px;" class="glyphicon glyphicon-arrow-up"></span></a> </div>
              <div class="pager">
                <div id="limiter">
                  <label>View: </label>
                  <ul>
                    <li><a href="#">15<span class="right-arrow"></span></a>
                      <ul>
                        <li><a href="#">20</a></li>
                        <li><a href="#">30</a></li>
                        <li><a href="#">35</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <ul id="products-list" class="products-list">
              <li class="item odd">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item even">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product2.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item odd">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product3.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item even">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product4.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item odd">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product5.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item even">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product6.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item odd">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product7.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item even">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product8.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item odd">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product9.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
              <li class="item last even">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image"  title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product10.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> Sample Product </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>Sed volutpat ac massa eget 
                        lacinia.  
                        Aenean volutpat lacus at dolor blandit </p>
                      <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                        tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="compare.html"><span>Add to Compare</span></a> </span> </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow">
          <div class="side-nav-categories">
            <div class="block-title"> Categories </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
              <ul>
                <li> <a class="active" href="#/women.html">Women</a> <span class="subDropdown minus"></span>
                  <ul class="level0_415" style="display:block">
                    <li> <a href="#/women/tops.html"> Tops </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/tops/evening-tops.html"> Evening Tops </a> </li>
                        <li> <a href="#/women/tops/shirts-blouses.html"> Shirts &amp; Blouses </a> </li>
                        <li> <a href="#/women/tops/tunics.html"> Tunics </a> </li>
                        <li> <a href="#/women/tops/vests.html"> Vests </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/women/bags.html"> Bags </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/bags/bags.html"> Bags </a> </li>
                        <li> <a href="#/women/bags/designer-handbags.html"> Designer Handbags </a> </li>
                        <li> <a href="#/women/bags/purses.html"> Purses </a> </li>
                        <li> <a href="#/women/bags/shoulder-bags.html"> Shoulder Bags </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/women/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                        <li> <a href="#/women/shoes/flat-sandals.html"> Flat Sandals </a> </li>
                        <li> <a href="#/women/shoes/boots.html"> Boots </a> </li>
                        <li> <a href="#/women/shoes/heels.html"> Heels </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/women/Jewellery.html"> Jewellery </a>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/Jewellery/bracelets.html"> Bracelets </a> </li>
                        <li> <a href="#/women/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                        <li> <a href="#/women/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/women/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                        <li> <a href="#/women/dresses/evening.html"> Evening </a> </li>
                        <li> <a href="#/women/dresses/designer.html"> Designer </a> </li>
                        <li> <a href="#/women/dresses/party.html"> Party </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/women/lingerie.html"> Lingerie </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/lingerie/bras.html"> Bras </a> </li>
                        <li> <a href="#/women/lingerie/bodies.html"> Bodies </a> </li>
                        <li> <a href="#/women/lingerie/necklaces-pendants.html"> Lingerie Sets </a> </li>
                        <li> <a href="#/women/lingerie/shapewear.html"> Shapewear </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/women/jackets.html"> Jackets </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/jackets/coats.html"> Coats </a> </li>
                        <li> <a href="#/women/jackets/jackets.html"> Jackets </a> </li>
                        <li> <a href="#/women/jackets/leather-jackets.html"> Leather Jackets </a> </li>
                        <li> <a href="#/women/jackets/blazers.html"> Blazers </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/women/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/women/swimwear/swimsuits.html"> Swimsuits </a> </li>
                        <li> <a href="#/women/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                        <li> <a href="#/women/swimwear/bikinis.html"> Bikinis </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                  </ul>
                  <!--level0--> 
                </li>
                <!--level 0-->
                <li> <a href="#/men.html">Men</a> <span class="subDropdown plus"></span>
                  <ul class="level0_455" style="display:none">
                    <li> <a href="#/men/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/men/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                        <li> <a href="#/men/shoes/boots.html"> Boots </a> </li>
                        <li> <a href="#/men/shoes/heels.html"> Heels </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/men/Jewellery.html"> Jewellery </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/men/Jewellery/bracelets.html"> Bracelets </a> </li>
                        <li> <a href="#/men/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                        <li> <a href="#/men/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/men/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/men/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                        <li> <a href="#/men/dresses/evening.html"> Evening </a> </li>
                        <li> <a href="#/men/dresses/designer.html"> Designer </a> </li>
                        <li> <a href="#/men/dresses/party.html"> Party </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/men/jackets.html"> Jackets </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/men/jackets/coats.html"> Coats </a> </li>
                        <li> <a href="#/men/jackets/jackets.html"> Jackets </a> </li>
                        <li> <a href="#/men/jackets/leather-jackets.html"> Leather Jackets </a> </li>
                        <li> <a href="#/men/jackets/blazers.html"> Blazers </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/men/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/men/swimwear/swimsuits.html"> Swimsuits </a> </li>
                        <li> <a href="#/men/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                  </ul>
                  <!--level0--> 
                </li>
                <!--level 0-->
                <li> <a href="#.html">Electronics</a> <span class="subDropdown plus"></span>
                  <ul class="level0_482" style="display:none">
                    <li> <a href="#/smartphones.html"> Smartphones </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/smartphones/samsung.html"> Samsung </a> </li>
                        <li> <a href="#/smartphones/apple.html"> Apple </a> </li>
                        <li> <a href="#/smartphones/blackberry.html"> Blackberry </a> </li>
                        <li> <a href="#/smartphones/nokia.html"> Nokia </a> </li>
                        <li> <a href="#/smartphones/htc.html"> HTC </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/cameras.html"> Cameras </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/cameras/digital-cameras.html"> Digital Cameras </a> </li>
                        <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                        <li> <a href="#/cameras/lenses.html"> Lenses </a> </li>
                        <li> <a href="#/cameras/filters.html"> Filters </a> </li>
                        <li> <a href="#/cameras/tripod.html"> Tripod </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                    <li> <a href="#/accesories.html"> Accesories </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/accesories/headsets.html"> HeadSets </a> </li>
                        <li> <a href="#/accesories/batteries.html"> Batteries </a> </li>
                        <li> <a href="#/accesories/screen-protectors.html"> Screen Protectors </a> </li>
                        <li> <a href="#/accesories/memory-cards.html"> Memory Cards </a> </li>
                        <li> <a href="#/accesories/cases.html"> Cases </a> </li>
                        <!--end for-each -->
                      </ul>
                      <!--level1--> 
                    </li>
                    <!--level1-->
                  </ul>
                  <!--level0--> 
                </li>
                <!--level 0-->
                <li> <a href="#/digital.html">Digital</a> </li>
                <!--level 0-->
                <li class="last"> <a href="#/fashion.html">Fashion</a> </li>
                <!--level 0-->
              </ul>
            </div>
            <!--box-content box-category--> 
          </div>
          <div class="block block-layered-nav">
            <div class="block-title"><span>Shop By</span></div>
            <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <dl id="narrow-by-list">
                <dt class="odd">Price</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                    <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                  </ol>
                </dd>
                <dt class="even">Manufacturer</dt>
                <dd class="even">
                  <ol>
                    <li> <a href="#">TheBrand</a> (9) </li>
                    <li> <a href="#">Company</a> (4) </li>
                    <li> <a href="#">LogoFashion</a> (1) </li>
                  </ol>
                </dd>
                <dt class="odd">Color</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#">Green</a> (1) </li>
                    <li> <a href="#">White</a> (5) </li>
                    <li> <a href="#">Black</a> (5) </li>
                    <li> <a href="#">Gray</a> (4) </li>
                    <li> <a href="#">Dark Gray</a> (3) </li>
                    <li> <a href="#">Blue</a> (1) </li>
                  </ol>
                </dd>
                <dt class="last even">Size</dt>
                <dd class="last even">
                  <ol>
                    <li> <a href="#">S</a> (6) </li>
                    <li> <a href="#">M</a> (6) </li>
                    <li> <a href="#">L</a> (4) </li>
                    <li> <a href="#">XL</a> (4) </li>
                  </ol>
                </dd>
              </dl>
            </div>
          </div>
          <div class="block block-cart">
            <div class="block-title"><span>My Cart</span></div>
            <div class="block-content">
              <div class="summary">
                <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$27.99</span> </p>
              </div>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-checkout"><span>Checkout</span></button>
              </div>
              <p class="block-subtitle">Recently added item(s) </p>
              <ul>
                <li class="item"> <a class="product-image" title="Fisher-Price Bubble Mower" href="#"><img width="80" alt="Fisher-Price Bubble Mower" src="users/digital/products-images/p1.jpg"></a>
                  <div class="product-details">
                    <div class="access"> <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a> </div>
                    <p class="product-name"> <a href="#">Skater Dress In Leaf Print Grouped Product</a> </p>
                    <strong>1</strong> x <span class="price">$19.99</span> </div>
                </li>
                <li class="item last"> <a class="product-image" title="Prince Lionheart Jumbo Toy Hammock" href="#"><img width="80" alt="Prince Lionheart Jumbo Toy Hammock" src="users/digital/products-images/p48.jpg"></a>
                  <div class="product-details">
                    <div class="access"> <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a> </div>
                    <p class="product-name"> <a href="#"> Sample Fashion Product Prince Lionheart </a> </p>
                    <strong>1</strong> x <span class="price">$8.00</span> 
                    <!--access clearfix--> 
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="block block-subscribe">
            <div class="block-title"><span>Newsletter</span></div>
            <form action="#" method="post" id="newsletter-validate-detail">
              <div class="block-content">
                <div class="form-subscribe-header"> Sign up for our newsletter:</div>
                <input type="text" name="email" id="newsletter" title="" class="input-text required-entry validate-email" placeholder="Enter your email address">
                <div class="actions">
                  <button type="submit" title="Submit" class="subscribe"><span>Subscribe</span></button>
                </div>
              </div>
            </form>
          </div>
          <div class="block block-compare">
            <div class="block-title "><span>Compare Products (2)</span></div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item odd">
                  <input type="hidden" class="compare-item-id" value="2173">
                  <a href="#" title="Remove This Item" class="btn-remove1"></a> <a class="product-name" href="#"> Sofa with Box-Edge Polyester Wrapped Cushions</a> </li>
                <li class="item last even">
                  <input type="hidden" class="compare-item-id" value="2174">
                  <a href="#" title="Remove This Item" class="btn-remove1"></a> <a class="product-name" href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a> </li>
              </ol>
              <div class="ajax-checkout">
                <button class="button button-compare" title="Submit" type="submit"><span>Compare</span></button>
                <button class="button button-clear" title="Submit" type="submit"><span>Clear</span></button>
              </div>
            </div>
          </div>
          <div class="block block-list block-viewed">
            <div class="block-title"><span>Recently Viewed</span> </div>
            <div class="block-content">
              <ol id="recently-viewed-items">
                <li class="item odd">
                  <p class="product-name"><a href="#"> Armchair with Box-Edge Upholstered Arm</a></p>
                </li>
                <li class="item even">
                  <p class="product-name"><a href="#"> Pearce Upholstered Slee pere</a></p>
                </li>
                <li class="item last odd">
                  <p class="product-name"><a href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a></p>
                </li>
              </ol>
            </div>
          </div>
          <div class="block block-poll">
            <div class="block-title"><span>Community Poll</span> </div>
            <form onSubmit="return validatePollAnswerIsSelected();" method="post" action="#" id="pollForm">
              <div class="block-content">
                <p class="block-subtitle">What is your favorite Magento feature?</p>
                <ul id="poll-answers">
                  <li class="odd">
                    <input type="radio" value="5" id="vote_5" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_5">Layered Navigation</label>
                    </span> </li>
                  <li class="even">
                    <input type="radio" value="6" id="vote_6" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_6">Price Rules</label>
                    </span> </li>
                  <li class="odd">
                    <input type="radio" value="7" id="vote_7" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_7">Category Management</label>
                    </span> </li>
                  <li class="last even">
                    <input type="radio" value="8" id="vote_8" class="radio poll_vote" name="vote">
                    <span class="label">
                    <label for="vote_8">Compare Products</label>
                    </span> </li>
                </ul>
                <div class="actions">
                  <button class="button button-vote" title="Vote" type="submit"><span>Vote</span></button>
                </div>
              </div>
            </form>
          </div>
          <div class="block block-tags">
            <div class="block-title"><span>Popular Tags</span></div>
            <div class="block-content">
              <ul class="tags-list">
                <li><a style="font-size:98.3333333333%;" href="#tagId/23/">Camera</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/109/">Hohoho</a></li>
                <li><a style="font-size:145%;" href="#tagId/27/">SEXY</a></li>
                <li><a style="font-size:75%;" href="#tagId/61/">Tag</a></li>
                <li><a style="font-size:110%;" href="#tagId/29/">Test</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/17/">bones</a></li>
                <li><a style="font-size:110%;" href="#tagId/12/">cool</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/184/">cool t-shirt</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/173/">crap</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/41/">good</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/16/">green</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/5/">hip</a></li>
                <li><a style="font-size:75%;" href="#tagId/51/">laptop</a></li>
                <li><a style="font-size:75%;" href="#tagId/20/">mobile</a></li>
                <li><a style="font-size:75%;" href="#tagId/70/">nice</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/42/">phone</a></li>
                <li><a style="font-size:98.3333333333%;" href="#tagId/30/">red</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/28/">tight</a></li>
                <li><a style="font-size:75%;" href="#tagId/2/">trendy</a></li>
                <li><a style="font-size:86.6666666667%;" href="#tagId/4/">young</a></li>
              </ul>
              <div class="actions"> <a class="view-all" href="#">View All Tags</a> </div>
            </div>
          </div>
          <div class="block block-banner"><a href="#"><img src="users/digital/images/block-banner.png" alt="block-banner"></a></div>
        </aside>
      </div>
    </div>
  </section>
  <!-- End Two columns content -->
@endsection
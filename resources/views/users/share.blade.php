@extends('users.master')
@section('content')
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
              <div class="pager">
                
              </div>
            </div>
            <ul id="products-list" class="products-list">
            	@foreach($product as $pro)
              <li class="item odd">
                <div class="col-item">
                  <div class="product_image">
                    <div class="images-container"> <a class="product-image" title="Sample Product" href="product-detail.html"> <img src="users/digital/products-images/product1.jpg" class="img-responsive" alt="a" /> </a>
                      <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                    </div>
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a title=" Sample Product" href="product-detail.html"> {{$pro->name}} </a></h2>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> ${{$pro->new_price}} </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price">${{$pro->old_price}} </span> </p>
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
              @endforeach
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
                @foreach($cat as $ca)
                <li class="last"> <a href="#/fashion.html">{{$ca->name}}</a> </li>
                @endforeach
                <!--level 0-->
              </ul>
            </div>
            <!--box-content box-category--> 
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
@endsection
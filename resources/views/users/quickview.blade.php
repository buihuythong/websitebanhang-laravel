<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmldemo.magikcommerce.com/ecommerce/inspire-html-template/digital/quick_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2015 08:05:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Inspire, premium HTML5 &amp; CSS3 template</title>
<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Style -->
<base href="{{ asset('') }}">
<link rel="stylesheet" href="users/digital/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="users/digital/css/fancybox.css" type="text/css">
<link rel="stylesheet" href="users/digital/css/style.css" type="text/css">
<link rel="stylesheet" href="users/digital/css/revslider.css" type="text/css">
<link rel="stylesheet" href="users/digital/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="users/digital/css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="users/digital/css/font-awesome.css" type="text/css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
</head>
<body class="cms-index-index">
<div style="background-color: rgb(119, 119, 119); opacity: 0.7; cursor: pointer; height: 1024px; display: block;" id="fancybox-overlay"></div>
<div style="width: 1190px; height: auto; top: 20%; left: 581px; display: block;" id="fancybox-wrap">
  <div id="fancybox-outer">
    <div style="border-width: 10px; width: 1170px; height: auto;" id="fancybox-content">
      <div style="width:auto;height:auto;overflow: auto;position:relative;">
        <div class="product-view">
          <div class="product-essential">
            <form action="#" method="post" id="product_addtocart_form">
              <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                <ul class="moreview" id="moreview">
                  <li class="moreview_thumb thumb_1"> <img class="moreview_thumb_image" src="users/digital/products-images/<?php echo $product->image?>"> <img class="moreview_source_image" src="users/digital/products-images/<?php echo $product->image?>" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="users/digital/products-images/<?php echo $product->image?>"></li>
                </ul>
                <div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
              </div>
              
              <!-- end: more-images -->
              
              <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                <div class="product-name">
                  <h1><?php echo $product->name?></h1>
                </div>
                <div class="ratings">
                  <div class="rating-box">
                    <div style="width:60%" class="rating"></div>
                  </div>
                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                </div>
                <p class="availability in-stock"><span>In Stock</span></p>
                <div class="price-block">
                  <div class="price-box">
                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $ <?php echo $product->new_price?> </span> </p>
                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $<?php echo $product->old_price?> </span> </p>
                  </div>
                </div>
                <div class="short-description">
                  <h2>Quick Overview</h2>
                  <p><?php echo $product->description?> </p>
                </div>
                <div class="add-to-box">
                  <div class="add-to-cart">
                    <label for="qty">Quantity:</label>
                    <div class="pull-left">
                      <div class="custom pull-left">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                        <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                      </div>
                    </div>
                   <a href="{{ route('addtoCart',$product->id) }}" onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Add to Cart</span>
                    </a>
                  </div>
                  <div class="email-addto-box">
                    <ul class="add-to-links">
                      <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
                      <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>
                    </ul>
                    <p class="email-friend"><a href="#" class=""><span>Email to Friend</span></a></p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--product-view--> 
        
      </div>
    </div>
    <a style="display: inline;" id="fancybox-close" href="index.html"></a> </div>
</div>

<!-- JavaScript --> 
<script type="text/javascript" src="users/digital/js/jquery.min.js"></script> 
<script type="text/javascript" src="users/digital/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="users/digital/js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript" src="users/digital/js/cloudzoom.js"></script> 
<script type="text/javascript" src="users/digital/js/common.js"></script> 
<script type="text/javascript" src="users/digital/js/owl.carousel.min.js"></script>
</body>

<!-- Mirrored from htmldemo.magikcommerce.com/ecommerce/inspire-html-template/digital/quick_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2015 08:05:56 GMT -->
</html>
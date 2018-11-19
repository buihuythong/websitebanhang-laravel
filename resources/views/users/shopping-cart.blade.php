@extends('users.master')
@section('content')
 <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart wow">
          <div class="page-title">
            <h2>Shopping Cart</h2>
          </div>
          <div class="table-responsive">
            <form method="post" action="#updatePost/">
              <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
              <fieldset>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <colgroup>
                  <col width="1">
                  <col>
                  <col width="1">
                  <col width="1">
                  <col width="1">
                  <col width="1">
                  <col width="1">
                  </colgroup>
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Product Name</span></th>
                      <th rowspan="1"></th>
                      <th colspan="1" class="a-center"><span class="nobr">Unit Price</span></th>
                      <th class="a-center" rowspan="1">Qty</th>
                      <th colspan="1" class="a-center">Subtotal</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">
                      <td class="a-right last" colspan="50">
                      	<a href="index.html"><button onclick="setLocation('#')" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Continue Shopping</span></span>
                      	</button>
                      	</a>
                        <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span><span>Update Cart</span></span></button>
                       
                        <button id="empty_cart_button" class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span><span>Clear Cart</span></span></button></td>
                        
                    </tr>
                  </tfoot>
                  <tbody>
                  	@if(Session::has('cart'))
<?php 
    $product_cart=Session('cart')->items;
      
 ?>         
                  	@foreach($product_cart as $pro)
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="Sample Product" href="#/women-s-crepe-printed-black/"><img width="75" alt="Sample Product" src="users/digital/products-images/{{$pro['item']['image']}}"></a></td>
                      <td><h2 class="product-name"> <a href="#/women-s-crepe-printed-black/">{{ $pro['item']['name'] }}</a> </h2></td>
                      <td class="a-center"><a title="Edit item parameters" class="edit-bnt" href="#configure/id/15945/"></a></td>
                      <td class="a-right"><span class="cart-price"> <span class="price">${{$pro['item']['old_price']}}</span> </span></td>
                      <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="{{$pro['qty']}}" name="cart[15945][qty]"></td>
                      <td class="a-right movewishlist"><span class="cart-price"> <span class="price">${{ $pro['item']['old_price']*$pro['qty'] }}</span> </span></td>
                      <td class="a-center last"><a class="button remove-item" title="Remove item" href="{{ route('delCart',$pro['item']['id']) }}"><span><span>Remove item</span></span></a></td>
                    </tr>
                    @endforeach
                    @endif
                   
                  </tbody>
                </table>
              </fieldset>
            </form>
          </div>
          <!-- BEGIN CART COLLATERALS -->
          <div class="cart-collaterals row">
            <div class="col-sm-4">
              <div class="shipping">
                <h3>Estimate Shipping and Tax</h3>
                <div class="shipping-form">
                  <form id="customer" method="POST" action="checkouta">
                    @csrf
                    <p>Enter your destination to get a shipping estimate.</p>
                    <ul class="form-list">
                      <li>
                        <label for="postcode">Họ tên *</label>
                        <div class="input-box">
                          <input type="text" value="" name="name" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                      <li>
                        <label for="postcode">Giới tính</label>
                        <div class="input-box">
                          <input type="text" value="" name="giotinh" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                      <li>
                        <label for="postcode">Email *</label>
                        <div class="input-box">
                          <input type="text" value="" name="email" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                      <li>
                        <label for="postcode">Điện thoại *</label>
                        <div class="input-box">
                          <input type="text" value="" name="sdt" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                      <li>
                        <label for="postcode">dia chi *</label>
                        <div class="input-box">
                          <input type="text" value="" name="dc" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                      <li>
                        <label for="postcode">Ghi chú</label>
                        <div class="input-box">
                          <input type="text" value="" name="note" id="postcode" class="input-text validate-postcode">
                        </div>
                      </li>
                    </ul>
                   
                    <!--buttons-set11-->
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="discount">
                <h3>Discount Codes</h3>
                <form method="post" action="#couponPost/" id="discount-coupon-form">
                  <label for="coupon_code">Enter your coupon code if you have one.</label>
                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                  <input type="text" value="" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                  <button value="Apply Coupon" onclick="discountForm.submit(false)" class="button coupon " title="Apply Coupon" type="button"><span>Apply Coupon</span></button>
                </form>
              </div>
            </div>
            <div class="totals col-sm-4">
              <h3>Shopping Cart Total</h3>
              <div class="inner">
                <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                  <colgroup>
                  <col>
                  <col width="1">
                  </colgroup>
                  <tbody>
                    <tr>
                    	@if(Session::has('cart'))
                      <td colspan="1" class="a-left" style=""> Subtotal </td>

                      <td class="a-right" style=""><span class="price"><h1>${{ Session('cart')->totalPrice}}</h1></span></td>
                       @endif
                    </tr>
                  </tbody>
                </table>
                <ul class="checkout">
                  <li>
                    <button onclick="thanhtoan()" class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span> Checkout</span></button>
                    
                  </li>
                  <br>
                  <br>
                </ul>
              </div>
              <!--inner--> 
              
            </div>
          </div>
          
          <!--cart-collaterals--> 
          
        </div>
        <div class="crosssel">
          <div class="new_title center">
            <h2>Based on your selection, you may be interested in the following items:</h2>
          </div>
          <div class="category-products">
            <ul id="crosssell-products-list" class="products-grid first odd">
              @foreach($product as $pro)
              <li class="item col-md-3 col-sm-6 col-xs-6">
                <div class="col-item">
                  <div class="sale-label sale-top-right">Sale</div>
                  <div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="a" class="img-responsive" src="users/digital/products-images/{{$pro->image}}"> </a></a>
                    <div class="actions">
                      <div class="actions-inner">
                        <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                        <ul class="add-to-links">
                          <li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>Add to Wishlist</span></a></li>
                          <li><a href="compare.html" title="Add to Compare" class="link-compare "><span>Add to Compare</span></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                  </div>
                  <div class="info">
                    <div class="info-inner">
                      <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> {{$pro->name}} </a> </div>
                      <!--item-title-->
                      <div class="item-content">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:50%"></div>
                          </div>
                        </div>
                        <div class="price-box">
                          <p class="special-price"> <span class="price"> $45.00 </span> </p>
                          <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                        </div>
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner--> 
                    
                    <!--actions-->
                    
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </li>
              @endforeach

             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    function thanhtoan()
    {
      document.getElementById("customer").submit();
    }
  </script>
@endsection
<!-- Slider -->
<div id="magik-slideshow" class="magik-slideshow">
    <div class="wow">
      <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
          <ul>
<<<<<<< HEAD
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='users/digital/images/slider_img_1.html'><img src='users/digital/images/slide-img1.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
=======
            @foreach($slide as $sl)
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='users/digital/images/slider_img_1.html'><img src='users/digital/images/<?php echo $sl->image ?>' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
>>>>>>> 8c5861f7049bfc8d489585f3bcc79ecda81877c6
              <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='15'  data-y='80'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Now start at $199!</div>
              <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='15'  data-y='135'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Big <span>Sale</span></div>
              <div    class='tp-caption sfb  tp-resizeme ' data-x='15'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
<<<<<<< HEAD
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='users/digital/images/slider_img_2.jpg' class="black-text"><img src='users/digital/images/slide-img2.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='15'  data-y='80'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Looking for</div>
              <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='15'  data-y='135'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span>Your</span> Laptop</div>
              <div    class='tp-caption sfb  tp-resizeme ' data-x='15'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="view-more">View More</a> <a href='#' class="buy-btn">Buy Now</a></div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>In augue urna, nunc, tincidunt, augue,
                augue facilisis facilisis.</div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='15'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </li>
=======
            @endforeach
           
>>>>>>> 8c5861f7049bfc8d489585f3bcc79ecda81877c6
          </ul>
          <div class="tp-bannertimer"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end Slider --> 
  <!-- header service -->
  <div class="header-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="icon-truck">&nbsp;</div>
            <span><strong>FREE SHIPPING</strong> on order over $99</span></div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="icon-support">&nbsp;</div>
            <span><strong>Customer Support</strong> Service</span></div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="icon-money">&nbsp;</div>
            <span><strong>3 days Money Back</strong> Guarantee</span></div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="content">
            <div class="icon-dis">&nbsp;</div>
            <span><strong class="orange">5% discount</strong> on order over $199</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header service --> 
  
  <!-- offer banner section -->
<<<<<<< HEAD
  <div class="offer-banner-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 wow"><a href="#"><img alt="offer banner1" src="users/digital/images/promo-banner1.jpg"></a></div>
        <div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 wow"><a href="#"><img alt="offer banner1" src="users/digital/images/promo-banner2.jpg"></a></div>
        <div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 wow"><a href="#"><img alt="offer banner1" src="users/digital/images/promo-banner3.jpg"></a></div>
      </div>
    </div>
  </div>
=======
  
>>>>>>> 8c5861f7049bfc8d489585f3bcc79ecda81877c6
  <!-- end offer banner section --> 
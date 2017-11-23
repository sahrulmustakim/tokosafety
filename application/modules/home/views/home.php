<div class="magik-slideshow wow bounceInUp animated" id="magik-slideshow">
    <div class="container">
      <div class="row">
        <div class="LHS-nav col-lg-3 col-md-4">
          <div id="magik-verticalmenu" class="block magik-verticalmenu">
            <div class="nav-title"> <span>Categories</span> </div>
            <div class="nav-content">
              <div class="navbar navbar-inverse">
                <div id="verticalmenu" class="verticalmenu" role="navigation">
                  <div class="navbar">
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                      <ul class="nav navbar-nav verticalmenu" style="overflow-y:auto;height:420px;">
                        <?php foreach ($categories->result() as $category){ ?>
                        <li>
                          <a href="<?=site_url('category/index/'.url_title(strtolower($category->title)).'/'.$category->id)?>">
                            <span class="menu-title"><?=$category->title?></span>
                          </a>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-12 col-md-12">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
              <?php foreach ($sliders->result() as $slider){ ?>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='http://admin.tokosafety68.com/public/<?php echo $slider->image?>'>
                  <img src='http://admin.tokosafety68.com/public/<?php echo $slider->image?>' data-bgposition='center top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  <div class='tp-caption ExtraLargeTitle sft tp-resizeme ' data-x='15'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><?php echo $slider->caption_top?></div>
                  <div class='tp-caption LargeTitle sfl tp-resizeme ' data-x='15'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><?php echo $slider->title?></div>
                  <div class='tp-caption sfb tp-resizeme ' data-x='15'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='<?=site_url('category/index/'.url_title(strtolower($slider->caption_top)).'/'.$slider->categories_id)?>' class="view-more">View More</a> </div>
                  <div class='tp-caption Title sft tp-resizeme ' data-x='15'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><?php echo $slider->description?></div>
                  <div class='tp-caption Title sft tp-resizeme ' data-x='15'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'><?php echo $slider->caption_bottom?></div>
                </li>
                <?php } ?>
              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
    <!-- header service -->
  
  <div class="container">
    <div class="header-service wow bounceInUp animated">
      <div class="col-lg-3 col-sm-6 col-xs-3" style="text-align:left;">
        <div class="content">
          <div class="icon-truck">&nbsp;</div>
          <span class="hidden-xs"><strong>OUR PRODUCTS</strong> total <?php echo $total_product?></span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3" style="text-align:center;">
        <div class="content">
          <div class="icon-support">&nbsp;</div>
          <span class="hidden-xs"><strong>Customer Support</strong> Service</span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3" style="text-align:center;">
        <div class="content">
          <div class="icon-money">&nbsp;</div>
          <span class="hidden-xs">from <strong>trusted brands</strong></span></div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3" style="text-align:right;">
        <div class="content">
          <div class="icon-dis">&nbsp;</div>
          <span class="hidden-xs"><strong>your safety</strong> is our duty</span></div>
      </div>
    </div>
  </div>
  <!-- end header service --> 
  <!-- <div class="offer-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInLeft animated animated"><a href="#"><img src="<?php echo base_url()?>assets/images/offer-banner1.jpg" alt="offer banner1"></a></div>
        <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInUp animated animated"><a href="#"><img src="<?php echo base_url()?>assets/images/offer-banner1.jpg" alt="offer banner2"></a></div>
        <div class="col-lg-4 col-xs-12 col-sm-4 wow bounceInRight animated animated"><a href="#"><img src="<?php echo base_url()?>assets/images/offer-banner1.jpg" alt="offer banner3"></a></div>
      </div>
    </div>
  </div> -->
   <section class="main-container col1-layout home-content-container">
    <div class="container">
      <div class="std">
        <div class="best-seller-pro wow bounceInUp animated">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>New Products</h2>
            </div>
            <div id="best-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4"> 
                
              <?php foreach ($newest->result() as $new){ ?>

                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">New</div>
                    <div class="product-image-area"> 
                      <a class="product-image" title="<?=$new->title?>" href="<?=site_url('product/index/'.url_title(strtolower($new->title)).'/'.$new->id)?>"> 
                        <img src="http://admin.tokosafety68.com/public/<?php echo $new->images1?>" class="img-responsive" alt="<?=$new->title?>" /> 
                      </a>
                      <div class="hover_fly"> 
                        <a class="quick-view" href="<?=site_url('product/index/'.url_title(strtolower($new->title)).'/'.$new->id)?>">
                        <div><i class="icon-eye-open"></i><span>View Detail</span></div>
                        </a> 
                        <a class="add_to_compare" href="<?=site_url('category/index/'.url_title(strtolower($new->category)).'/'.$new->categories_id)?>">
                        <div><i class="icon-th-list"></i><span><?=$new->category?></span></div>
                        </a> 
                      </div>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="<?=$new->title?>" href="<?=site_url('product/index/'.url_title(strtolower($new->title)).'/'.$new->id)?>"> <?=$new->title?> </a> </div>
                        <!--item-title-->
                      </div>
                      <!--info-inner-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
              <?php } ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End main container --> 
  
  <!-- offer banner section -->
  
  <!-- <div class="offer-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner1" src="<?php echo base_url()?>assets/images/offer-banner1.jpg"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner2" src="<?php echo base_url()?>assets/images/offer-banner1.jpg"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
        <div class="col-lg-4 col-xs-12 col-sm-4"><a href="#"><img alt="offer banner3" src="<?php echo base_url()?>assets/images/offer-banner1.jpg"></a>
          <div class="overlay"><a class="info" href="#">Learn More</a></div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- end offer banner section --> 
  
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Best Seller</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4"> 
          
        <?php foreach ($bestseller->result() as $best){ ?>

          <!-- Item -->
          <div class="item">
            <div class="col-item">
              <div class="sale-label sale-top-right">Best</div>
              <div class="product-image-area"> 
                <a class="product-image" title="<?=$best->title?>" href="<?=site_url('product/index/'.url_title(strtolower($best->title)).'/'.$best->id)?>"> 
                  <img src="http://admin.tokosafety68.com/public/<?php echo $best->images1?>" class="img-responsive" alt="<?=$best->title?>" /> 
                </a>
              </div>
              <div class="info">
                <div class="info-inner">
                  <div class="item-title"> <a title="<?=$best->title?>" href="<?=site_url('product/index/'.url_title(strtolower($best->title)).'/'.$best->id)?>"> <?=$best->title?> </a> </div>
                  <!--item-title-->
                </div>
                <!--info-inner-->
                <div class="actions">
                  <a href="<?=site_url('product/index/'.url_title(strtolower($best->title)).'/'.$best->id)?>">
                  <button type="button" title="View detail" class="button btn-cart"><span>View Detail</span></button>
                  </a>
                </div>
                <!--actions-->
                
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <?php } ?>
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider --> 
  <!-- promo banner section -->
  <!-- <div class="promo-banner-section container wow bounceInUp animated">
    <div class="row">
      <div class="col-lg-12"> <img alt="promo-banner3" src="<?php //echo base_url()?>assets/images/jewelry-banner.jpg"></div>
    </div>
  </div> -->
  <!-- End promo banner section --> 
  <!-- middle slider -->
  <section class="middle-slider container wow bounceInUp animated">
    <div class="row" style="padding-top: 20px !important;padding-bottom: 20px;">
      <div class="col-md-6">
        <div class="bag-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Hand Protection</h2>
            </div>
            <div id="bag-seller-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
              <?php foreach ($hands->result() as $hand){ ?>

                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> 
                      <a class="product-image" title="<?=$hand->title?>" href="<?=site_url('product/index/'.url_title(strtolower($hand->title)).'/'.$hand->id)?>"> 
                        <img src="http://admin.tokosafety68.com/public/<?php echo $hand->images1?>" class="img-responsive" alt="<?=$hand->title?>" />
                      </a>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="<?=$hand->title?>" href=""> <?=$hand->title?> </a> </div>
                        <!--item-title-->
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <a href="<?=site_url('product/index/'.url_title(strtolower($hand->title)).'/'.$hand->id)?>">
                          <button type="button" title="View Detail" class="button btn-cart"><span>View Detail</span></button>
                        </a>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <?php } ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="shoes-product-slider small-pr-slider cat-section">
          <div class="slider-items-products">
            <div class="new_title center">
              <h2>Tools</h2>
            </div>
            <div id="shoes-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col3"> 
                
                <?php foreach ($tools->result() as $tool){ ?>

                <!-- Item -->
                <div class="item">
                  <div class="col-item">
                    <div class="product-image-area"> 
                      <a class="product-image" title="<?=$tool->title?>" href="<?=site_url('product/index/'.url_title(strtolower($tool->title)).'/'.$tool->id)?>"> 
                        <img src="http://admin.tokosafety68.com/public/<?php echo $tool->images1?>" class="img-responsive" alt="<?=$tool->title?>" />
                      </a>
                    </div>
                    <div class="info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="<?=$tool->title?>" href=""> <?=$tool->title?> </a> </div>
                        <!--item-title-->
                      </div>
                      <!--info-inner-->
                      <div class="actions">
                        <a href="<?=site_url('product/index/'.url_title(strtolower($tool->title)).'/'.$tool->id)?>">
                          <button type="button" title="View Detail" class="button btn-cart"><span>View Detail</span></button>
                        </a>
                      </div>
                      <!--actions-->
                      
                      <div class="clearfix"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                
                <?php } ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End middle slider --> 
  
  <!-- Latest Blog -->
  <!-- <section class="latest-blog container wow bounceInUp animated">
    <div class="blog-title">
      <h2><span>Latest Blog</span></h2>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="blog-img"> <img src="<?php echo base_url()?>assets/images/blog-img1.jpg" alt="Image">
        <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
      </div>
      <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
      <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="blog-img"> <img src="<?php echo base_url()?>assets/images/blog-img1.jpg" alt="Image">
        <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
      </div>
      <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
      <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
    </div>
    <div class="col-xs-12 col-sm-4">
      <div class="blog-img"> <img src="<?php echo base_url()?>assets/images/blog-img1.jpg" alt="Image">
        <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
      </div>
      <h2><a href="blog_detail.html">Pellentesque habitant morbi</a> </h2>
      <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
    </div>
  </section> -->
  <!-- End Latest Blog -->
<?php foreach ($products->result() as $product){ ?>
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <ul>
          <li class="home"> <a href="<?=site_url()?>" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
          <li class=""> <a href="<?=site_url()?>" title="Go to Home Page">Product</a><span>&mdash;›</span></li>
          <li class="category13"><strong> <?=$product->title?> </strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end breadcrumbs --> 
  <!-- main-container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="row">
          <div class="product-view">
            <div class="product-essential">
			  <form action="#" method="post" id="product_addtocart_form">
                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
				<div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
				<ul class="moreview" id="moreview">
					<?php if($product->images1 <> ''){ ?>
				  	<li class="moreview_thumb thumb_1 moreview_thumb_active"> 
					  	<img class="moreview_thumb_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images1?>" alt="thumbnail"> 
					  	<img class="moreview_source_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images1?>" alt=""> 
					  	<span class="roll-over">Roll over image to zoom in</span> 
					  	<img  class="zoomImg" src="http://admin.tokosafety68.com/public/<?php echo $product->images1?>" alt="thumbnail">
					</li>
					<?php } ?>
					<?php if($product->images2 <> ''){ ?>
				  	<li class="moreview_thumb thumb_2"> 
					  	<img class="moreview_thumb_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images2?>" alt="thumbnail"> 
					  	<img class="moreview_source_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images2?>" alt=""> 
					  	<span class="roll-over">Roll over image to zoom in</span> 
					  	<img  class="zoomImg" src="http://admin.tokosafety68.com/public/<?php echo $product->images2?>" alt="thumbnail">
					</li>
					<?php } ?>
					<?php if($product->images3 <> ''){ ?>
				  	<li class="moreview_thumb thumb_3"> 
					  	<img class="moreview_thumb_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images3?>" alt="thumbnail"> 
					  	<img class="moreview_source_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images3?>" alt=""> 
					  	<span class="roll-over">Roll over image to zoom in</span> 
					  	<img  class="zoomImg" src="http://admin.tokosafety68.com/public/<?php echo $product->images3?>" alt="thumbnail">
					</li>
					<?php } ?>
					<?php if($product->images4 <> ''){ ?>
				  	<li class="moreview_thumb thumb_4"> 
					  	<img class="moreview_thumb_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images4?>" alt="thumbnail"> 
					  	<img class="moreview_source_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images4?>" alt=""> 
					  	<span class="roll-over">Roll over image to zoom in</span> 
					  	<img  class="zoomImg" src="http://admin.tokosafety68.com/public/<?php echo $product->images4?>" alt="thumbnail">
					</li>
					<?php } ?>
					<?php if($product->images5 <> ''){ ?>
				  	<li class="moreview_thumb thumb_5"> 
					  	<img class="moreview_thumb_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images5?>" alt="thumbnail"> 
					  	<img class="moreview_source_image" src="http://admin.tokosafety68.com/public/<?php echo $product->images5?>" alt=""> 
					  	<span class="roll-over">Roll over image to zoom in</span> 
					  	<img  class="zoomImg" src="http://admin.tokosafety68.com/public/<?php echo $product->images5?>" alt="thumbnail">
					</li>
					<?php } ?>
				</ul>
				<div class="moreview-control"> 
					<a href="javascript:void(0)" class="moreview-prev"></a> 
					<a href="javascript:void(0)" class="moreview-next"></a> 
				</div>
			  </div>
                <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
				  <div class="product-name">
                    <h2><?=$product->title?></h2>
                  </div>
                  <p class="availability in-stock">Availability: <span>In stock</span></p>
                  <!-- <div class="price-block">
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $309.99 </span> </p>
                    </div>
                  </div> -->
                  <div class="short-description">
                    <h2>Quick Overview</h2>
                    <p><?=$product->short_description?></p>
                  </div>
                  <!-- <div class="add-to-box">
                    <div class="add-to-cart">
                      <label for="qty">Quantity:</label>
                      <div class="pull-left">
                        <div class="custom pull-left">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                          <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                          <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                        </div>
                      </div>
                      <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Add to Cart</span></button>
                      <div class="email-addto-box">
                        <ul class="add-to-links">
                          <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                          <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                        </ul>
                        <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                      </div>
                    </div>
                  </div> -->
                  <div class="social">
                    <ul>
                      <li class="fb"><a href="#"></a></li>
                      <li class="tw"><a href="#"></a></li>
                      <li class="googleplus"><a href="#"></a></li>
                      <li class="rss"><a href="#"></a></li>
                      <li class="pintrest"><a href="#"></a></li>
                      <li class="linkedin"><a href="#"></a></li>
                      <li class="youtube"><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
            <div class="product-collateral">
              <div class="col-sm-12 wow bounceInUp animated">
                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                  <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description </a> </li>
                </ul>
                <div id="productTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="product_tabs_description">
                    <div class="std">
                      <p><?=$product->description?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="box-additional">
                  <div class="related-pro wow bounceInUp animated">
                    <div class="slider-items-products">
                      <div class="new_title center">
                        <h2>Related Products</h2>
                      </div>
                      <div id="related-products-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4"> 
						  
						<?php
						$sql = "SELECT * FROM products WHERE status='Active' AND categories_id='$product->categories_id' ORDER BY created_at DESC LIMIT 8";
						$query = $this->db->query($sql);
						foreach ($query->result() as $related){
						?>			

						<!-- Item -->
						<div class="item">
                            <div class="col-item">
                              	<div class="product-image-area"> 
								  	<a class="product-image" title="<?=$related->title?>" href="<?=site_url('product/index/'.url_title(strtolower($related->title)).'/'.$related->id)?>"> 
									  <img src="http://admin.tokosafety68.com/public/<?php echo $related->images1?>" class="img-responsive" alt="a" style="height:262px;" /> 
									</a>
                              	</div>
								<div class="info">
									<div class="info-inner">
										<div class="item-title"> 
											<a href="<?=site_url('product/index/'.url_title(strtolower($related->title)).'/'.$related->id)?>" title="<?=$related->title?>"> <?=$related->title?> </a> 
										</div>
									</div>
									<!--item-title-->
								</div>
								<!--info-inner-->
								<div class="clearfix"> </div>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End main-container --> 
<?php } ?>
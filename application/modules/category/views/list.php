<!-- breadcrumbs -->
<div class="breadcrumbs">
<div class="container">
  <div class="row">
	<ul>
	  <li class="home"> <a href="<?=site_url()?>" title="Go to Home Page">Home</a><span>&mdash;›</span></li>
	  <li class=""> <a href="<?=site_url()?>" title="Go to Home Page">Category</a><span>&mdash;›</span></li>
	  <li class="category13"><strong><?=$category_title?></strong></li>
	</ul>
  </div>
</div>
</div>
<!-- End breadcrumbs --> 
<!-- Two columns content -->
<div class="main-container col2-left-layout">
<div class="main container">
  <div class="row">
		<section class="col-main col-sm-9 col-sm-push-3 wow bounceInUp animated">
			<div class="category-title">
				<h1><?=$category_title?></h1>
			</div>
			<div class="category-products">
				<div class="toolbar">
					<div class="sorter">
						<div class="view-mode"> 
							<a href="<?=site_url('category/index/'.url_title(strtolower($category_title)).'/'.$category_id)?>" title="Grid" class="button button-grid">Grid</a>&nbsp; 
							<span title="List" class="button button-active button-list">List</span>&nbsp; 
						</div>
					</div>
					<div id="sort-by">
						<label class="left">Sort By: </label>
						<ul>
							<li><a href="#">Name<span class="right-arrow"></span></a>
							<ul>
								<li><a href="#">Name</a></li>
								<li><a href="#">Price</a></li>
								<li><a href="#">Position</a></li>
							</ul>
						</li>
					</ul>
					<a class="button-asc left" href="#" title="Set Descending Direction"><span class="glyphicon glyphicon-arrow-up"></span></a> </div>
					<!-- <div class="pager">
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
					</div> -->
				</div>
				<ol id="products-list" class="products-list">
					<?php foreach ($products->result() as $product){ ?>
					<li class="item odd">
						<div class="product-image"> 
							<a href="<?=site_url('product/index/'.url_title(strtolower($product->title)).'/'.$product->id)?>" title="<?=$product->title?>"> 
								<img class="small-image" src="http://admin.tokosafety68.com/public/<?php echo $product->images1?>" alt="<?=$product->title?>" width="230"> 
							</a> 
						</div>
						<div class="product-shop" style="width:65%;">
							<h2 class="product-name">
								<a title="<?=$product->title?>" href="<?=site_url('product/index/'.url_title(strtolower($product->title)).'/'.$product->id)?>"> 
									<?=$product->title?> 
								</a>
							</h2>
							<div class="desc std">
								<p><?=$product->short_description?></p>
								<a class="link-learn" title="<?=$product->title?>" href="<?=site_url('product/index/'.url_title(strtolower($product->title)).'/'.$product->id)?>">Learn More</a>
							</div>
							<div class="actions">
								<a href="<?=site_url('product/index/'.url_title(strtolower($product->title)).'/'.$product->id)?>">
								<button class="button btn-cart ajx-cart" title="View Detail" type="button"><span>View Detail</span></button>
								</a>
						</div>
					</li>
					<?php } ?>
				</ol>
			</div>
		</section>
		<aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
			<div class="side-nav-categories">
			<div class="block-title"> Categories </div>
			<!--block-title--> 
			<!-- BEGIN BOX-CATEGORY -->
			<div class="box-content box-category">
				<ul>
				<?php 
				$no=0;
				foreach ($categories->result() as $category){ 
				$no++;
				$class = '';
				if($categories->num_rows() == $no){
					$class .= 'last ';
				}
				if($category_title == $category->title){
					$class .= 'active ';
				}
				?>
				<li class="<?=$class?>"> <a href="<?=site_url('category/index/'.url_title(strtolower($category->title)).'/'.$category->id)?>"><?=$category->title?></a> </li>
				<?php } ?>
				</ul>
			</div>
			<!--box-content box-category--> 
			</div>
			
			<div class="block block-banner"><a href="#"><img src="<?php echo base_url()?>assets/images/rhs-banner.jpg" alt="block-banner"></a></div>

			<div class="block block-list block-viewed">
			<div class="block-title"> Recently Viewed </div>
			<div class="block-content">
				<ol id="recently-viewed-items">
				<li class="item odd">
					<p class="product-name"><a href="#"> Armchair with Box-Edge Upholstered Arm</a></p>
				</li>
				<li class="item even">
					<p class="product-name"><a href="#"> Pearce Upholstered Slee pere</a></p>
				</li>
				<li class="item even">
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
			
		</aside>
  </div>
</div>
</div>
<!-- End Two columns content -->
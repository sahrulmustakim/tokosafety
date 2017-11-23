<body>
<div class="page"> 
  <!-- Header -->
  <header class="header-container">
    <div class="header container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-md-4"> 
            <!-- Header Logo --> 
            <a class="logo" title="Toko Safety 68" href="<?php echo site_url()?>">
              <img alt="Kimberly" src="<?php echo base_url()?>assets/images/kimberly.png" style="height:40px;width:auto;padding-right:15px;">
              <img alt="Toko Safety 68" src="<?php echo base_url()?>assets/images/logo68.png" style="height:40px;width:auto;">
            </a> 
            <!-- End Header Logo --> 
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="cat" method="POST" id="search_mini_form" name="Categories">
              <select name="category_id" class="cate-dropdown hidden-xs">
                <option value="0">All Categories</option>
                <?php foreach ($categories->result() as $category){ ?>
                <option value="<?=$category->id?>"><?=$category->title?></option>
                <?php } ?>
              </select>
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
              <button id="submit-button" class="search-btn-bg"><span>Search</span></button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
   <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="nav-inner">
        <div class="logo-small"> 
            <a class="logo" title="Toko Safety 68" href="<?php echo site_url()?>">
                <img alt="Toko Safety 68" src="<?php echo base_url()?>assets/images/logo68-white.png">
                <!-- <img alt="Kimberly" src="<?php echo base_url()?>assets/images/logo-white.png"> -->
            </a> 
        </div>
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul class="submenu">
                <li>
                  <ul class="topnav">
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="#"> <span>Categories</span> </a>
                      <ul class="level0">
                        <?php foreach ($categories->result() as $category){ ?>
                          <li class="level1"> 
                            <a href="<?=site_url('category/index/'.url_title(strtolower($category->title)).'/'.$category->id)?>"> 
                              <span><?=$category->title?></span> 
                            </a> 
                          </li>
                        <?php } ?>
                      </ul>
                    </li>
                    <li class="level0 nav-6 level-top"> 
                      <a class="level-top" href="<?php echo site_url('aboutus')?>"> <span>About Us</span> </a>
                    </li>
                    <li class="level0 nav-6 level-top"> 
                      <a class="level-top" href="<?php echo site_url('contactus')?>"> <span>Contact Us</span> </a>
                    </li>
                    <li class="level0 nav-6 level-top"> 
                      <a class="level-top" href="<?php echo site_url('brands')?>"> <span>Brands</span> </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">
          <li id="nav-home" class="level0 parent drop-menu">
            <a href="<?php echo site_url()?>" <?php if($title=="Home"){ echo 'class="active"'; }else{ echo 'class="level-top"'; }?>><span>Home</span> </a>
          </li>
          <!-- <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
            <ul class="level1">
              <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
              <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
              <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
              <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
            </ul>
          </li> -->
          <li class="level0 nav-6 level-top"> 
            <a href="<?php echo site_url('aboutus')?>" <?php if($title=="About Us"){ echo 'class="active"'; }else{ echo 'class="level-top"'; }?>> <span>About Us</span> </a>
          </li>
          <li class="level0 nav-6 level-top"> 
            <a href="<?php echo site_url('contactus')?>" <?php if($title=="Contact Us"){ echo 'class="active"'; }else{ echo 'class="level-top"'; }?>> <span>Contact Us</span> </a>
          </li>
          <li class="level0 nav-6 level-top"> 
            <a href="<?php echo site_url('brands')?>" <?php if($title=="Brands"){ echo 'class="active"'; }else{ echo 'class="level-top"'; }?>> <span>Brands</span> </a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<!-- end nav -->

<?php
loadView($filelist);
?>

<footer class="footer wow bounceInUp animated">
    <div class="brand-logo ">
      <div class="container">
        <div class="slider-items-products">
          <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col6"> 
            <?php foreach ($brands->result() as $brand){ ?>
              <div class="item"> <a href="<?=$brand->link?>" target="_blank">
                <img src="http://admin.tokosafety68.com/public/<?php echo $brand->images?>" alt="Image"></a> 
              </div>
            <?php } ?>
            <?php foreach ($brands->result() as $brand){ ?>
              <div class="item"> <a href="<?=$brand->link?>" target="_blank">
                <img src="http://admin.tokosafety68.com/public/<?php echo $brand->images?>" alt="Image"></a> 
              </div>
            <?php } ?>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if($title<>"About Us"){ ?>
    <div class="footer-middle container" style="padding-top:30px;">
      <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-6">
          <div class="footer-logo">
            <a href="<?=base_url()?>" title="Toko Safety 68">
              <img src="<?php echo base_url()?>assets/images/logo68-2.png" alt="logo" style="width:65%;">
            </a>
          </div>
          <p><?php echo $contact_info?></p>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6">
          <h4>Menus</h4>
          <ul class="links">
            <li class="first"><a title="Home" href="<?=base_url()?>">Home</a></li>
            <li><a title="About Us" href="<?=site_url('aboutus')?>">About Us</a></li>
            <li><a title="Contact Us" href="<?=site_url('contactus')?>">Contact Us</a></li>
            <li><a title="Brands" href="<?=base_url('brands')?>">Brands</a></li>
          </ul>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
          <h4>Contact us</h4>
          <div class="contacts-info">
            <address>
              <i class="add-icon"></i> <?php echo $contact_address?>
            </address>
            <div class="phone-footer"><i class="phone-icon"></i> <?php echo $contact_phone?></div>
            <div class="email-footer"><i class="email-icon"></i> <a href="mailto:<?php echo $contact_email?>"><?php echo $contact_email?></a> </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 coppyright text-center"> &copy; 2017. All Rights Reserved. Designed by <a href="<?php echo base_url()?>">tokosafety68.com</a> </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
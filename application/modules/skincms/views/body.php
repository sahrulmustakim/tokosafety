    <div class="wrapper">

        <div class="sidebar" data-color="red" data-image="<?php echo base_url()?>assets/admin/img/sidebar-1.jpg">

            <div class="logo">
                <a href="<?php echo site_url('admin')?>" class="simple-text">
                    OneStopGPS CMS
                </a>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li <?php if($heading=="Images Data"){ echo 'class="active"'; }?>>
                        <a href="<?php echo site_url('admin/images')?>">
                            <i class="material-icons">images</i>
                            <p>Images Data</p>
                        </a>
                    </li>
                    <li <?php if($heading=="Happy Clients"){ echo 'class="active"'; }?>>
                        <a href="<?php echo site_url('admin/happy')?>">
                            <i class="material-icons">mood</i>
                            <p>Total Happy Clients</p>
                        </a>
                    </li>
                    <li <?php if($heading=="List Category Products"){ echo 'class="active"'; }?>>
                        <a href="<?php echo site_url('admin/category_product')?>">
                            <i class="material-icons">folder_open</i>
                            <p>List Category Products</p>
                        </a>
                    </li>
                    <li <?php if($heading=="List Products"){ echo 'class="active"'; }?>>
                        <a href="<?php echo site_url('admin/product')?>">
                            <i class="material-icons">work</i>
                            <p>List Products</p>
                        </a>
                    </li>
                    <li <?php if($heading=="Contact Us"){ echo 'class="active"'; }?>>
                        <a href="<?php echo site_url('admin/contact')?>">
                            <i class="material-icons">view_list</i>
                            <p>Contact Us</p>
                        </a>
                    </li>
                    <!-- <li <?php //if($heading=="Request"){ echo 'class="active"'; }?>>
                        <a href="<?php //echo site_url('admin/request')?>">
                            <i class="material-icons">send</i>
                            <p>Request</p>
                        </a>
                    </li>
                    <li <?php //if($heading=="Inbox"){ echo 'class="active"'; }?>>
                        <a href="<?php //echo site_url('admin/inbox')?>">
                            <i class="material-icons">email</i>
                            <p>Inbox <span class="button-badge">2</span></p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><?php echo $heading?></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#user" class="dropdown-toggle" data-toggle="dropdown">
                                   <p><i class="material-icons">person</i> <?php echo checkSession('fullname')?></p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('admin/logout')?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php
            loadView($content);
            ?>

            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy; 2017 <a href="http://acuityhub.com">AcuityHub</a>, Content Management System Website
                    </p>
                </div>
            </footer>
        </div>
    </div>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="icon" href="<?php echo base_url()?>assets/images/logo-small.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/logo-small.png" type="image/x-icon">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/admin/css/jquery.dataTables.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/css/dataTables.material.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/css/chartist-plugin-tooltip.css" rel="stylesheet">

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url()?>assets/admin/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url()?>assets/admin/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/admin/js/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/admin/js/material.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/admin/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/admin/js/dataTables.material.js" type="text/javascript"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()?>assets/admin/js/bootstrap-notify.js"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="<?php echo base_url()?>assets/admin/js/material-dashboard.js"></script>

    <?php if($content == 'admin/admin'){ ?>
    
    <!--  Charts Plugin -->
    <script src="<?php echo base_url()?>assets/admin/js/chartist.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/chartist-plugin-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/chartist-plugin-accessibility.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/chartist-plugin-pointlabels.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/chartist-plugin-fill-donut.js"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url()?>assets/admin/js/demo.js"></script>
    
    <?php } ?>
</head>

<body>
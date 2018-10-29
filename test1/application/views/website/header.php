<?php 

error_reporting(0);

 ?>
<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
        <!-- Open Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="<?php echo base_url() ?>assets/css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/rs-plugin/css/settings.css" media="screen" />


      <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

        <!-- Custom -->
        <link href="<?php echo base_url() ?>assets/css/style.css?v=1" rel="stylesheet" />

        <link href="<?php echo base_url() ?>assets/css/external/jquery.selectbox.css" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="<?php echo base_url() ?>assets/js/external/modernizr.custom.js"></script>
    

        <!-- Swiper slider -->
        <link href="<?php echo base_url() ?>assets/css/external/idangerous.swiper.css" rel="stylesheet" />
        <!-- Magnific-popup -->
        <link href="<?php echo base_url() ?>assets/css/external/magnific-popup.css" rel="stylesheet" />



</head>

<body>
    <div class="wrapper">
        <!-- Banner -->
        <!--<div class="banner-top">-->
        <!--    <img alt='top banner' src="">-->
        <!--</div>-->

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='<?php echo base_url() ?>' class="logo">
                    <img alt='logo' src="<?php echo base_url() ?>assets/logo1.png">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                    
                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url() ?>">Home</a></li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url() ?>web/aboutus">About Us</a></li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url() ?>web/showing">Now Showing</a></li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="<?php echo base_url() ?>web/comingsoon">Coming Soon</a></li>
                        <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Customer Services</a>

                            <ul>
                            <li class="menu__nav-item"><a href="<?php echo base_url() ?>web/ticketinfo">Ticket Info</a></li>
                            <li class="menu__nav-item"><a href="<?php echo base_url() ?>web/">Corporate</a></li>
                            <li class="menu__nav-item"><a href="<?php echo base_url() ?>web/">Promotion</a></li>
                            <!--<li class="menu__nav-item"><a href="<?php echo base_url() ?>web/membership">Membership</a></li>-->
                            <li class="menu__nav-item"><a href="<?php echo base_url() ?>web/contact">Contact Us</a></li>
                            </ul></li>
                            
                    </ul>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                      <div class="auth__show">
                        <span class="auth__image">
                          <img alt="" src="https://png.icons8.com/color/260/person-male.png">
                        </span>
                      </div>
                      <a href="#" class="btn btn--sign btn--singin">
                          <?php if (isset($_SESSION['adminID'])): ?>
                              <?php echo $_SESSION['user_name'] ?>
                          <?php endif ?>
                          <?php if (!isset($_SESSION['adminID'])): ?>
                              Account
                          <?php endif ?>
                      </a>
                        <ul class="auth__function">
                           <!--  <li><a href="#" class="auth__function-item">Watchlist</a></li>
                            <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                            <li><a href="#" class="auth__function-item">Discussion</a></li>
                            <li><a href="#" class="auth__function-item">Settings</a></li> -->
                            <?php if (isset($_SESSION['adminID'])): ?>
                     <li><a href="<?php echo base_url() ?>web/myaccount" class="auth__function-item btn-control--home">My Account</a></li>
<li><a href="<?php echo base_url() ?>web/logout" class="auth__function-item btn-control--home">Logout</a></li>

                          <?php endif ?>
                            <?php if (!isset($_SESSION['adminID'])): ?>
                     <li><a href="<?php echo base_url() ?>web/useraccount" class="auth__function-item btn-control--home">Login</a></li>
                     


                          <?php endif ?>
                           
                        </ul>

                    </div>
                   <!-- <a class="btn btn-md btn--warning btn--book " data-toggle="modal" href='#modal-id'></a>-->
                </div>

            </div>
        </header>

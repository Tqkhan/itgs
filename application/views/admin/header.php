<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminpage.thememinister.com/preview_page/theme/AdminPage_black_v1.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 06:35:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SME-ERP | <?php echo $title; ?></title>

        <!-- Favicon and touch icons -->
        <!--<link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets/dist/img/ico/favicon.png" type="image/x-icon">-->
        <!--<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">-->
        <!--<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">-->
        <!--<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">-->
        <!--<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url() ?>assets/assets/dist/img/ico/apple-touch-icon-144-precomposed.png">-->

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <link href="<?php echo base_url() ?>assets/assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins
        =====================================================================-->
        <!-- Toastr css -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css" />
        <!-- Monthly css -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/monthly/monthly.min.css" rel="stylesheet" type="text/css"/>
        <!-- amchat css -->
        <link href="<?php echo base_url() ?>assets/assets/plugins/amcharts/export.css" rel="stylesheet" type="text/css" />
        <!-- End page Label Plugins
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>assets/assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="<?php echo base_url() ?>assets/assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="<?php echo base_url() ?>assets/assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- End Theme Layout Style
        =====================================================================-->
           <link href="<?php echo base_url() ?>assets/assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="wrapper animsition">
            <!-- main header -->
              <header class="main-header">
                <!-- top navigation -->
                <nav class="navbar top-nav">
                    <div class="container">
                        <div class="navbar-header hidden-xs">
                            <a class="navbar-brand" href="#"> <img src="<?php echo base_url() ?>assets/assets/dist/img/logo22.png" alt=""></a>
                        </div>
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>

                                <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                                <li class="side-menu"><a href="#"><i class="ti-align-left"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->
                        <!-- /.navbar-header -->
                        <ul class="nav navbar-top-links navbar-right">

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-announcement"></i>
                                    <span class="label label-warning">8</span>
                                </a>
                                <ul class="dropdown-menu dropdown-notification">
                                    <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                                    <li>
                                        <a class="rad-content" href="#">
                                            <div class="pull-left"><i class="fa fa-html5 fa-2x color-red"></i>
                                            </div>
                                            <div class="rad-notification-body">
                                                <div class="lg-text">Introduction to fetch()</div>
                                                <div class="sm-text">The fetch API</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
                                </ul>  <!-- /.dropdown-alerts -->
                            </li>
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="profile.html"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                    <li><a href="mailbox.html"><i class="ti-email"></i>&nbsp; My Messages</a></li>
                                    <li><a href="lockscreen.html"><i class="ti-lock"></i>&nbsp; Lock Screen</a></li>
                                    <li><a href="#"><i class="ti-settings"></i>&nbsp; Settings</a></li>
                                    <li><a href="login.html"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li> <!-- /.dropdown -->
                        </ul> <!-- /.navbar-top-links -->
                    </div> <!-- /. container -->
                </nav> <!-- /. top navigation -->
                <!--  main navigation -->
                <nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="ti-close"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand hidden-md hidden-lg" href="#brand"><img src="assets/dist/img/logo2.png" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                                <li class="active"><a href="<?php echo base_url() ?>admin/dashboard"><i class="ti-home"></i> Dasboard</a></li>
                                <li class="dropdown ">
                                    <a href="<?php echo base_url() ?>admin/create_employee" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Employee Management</a>
                                    <!-- <ul class="dropdown-menu">-->
                                    <!--    <li><a href="<?php echo base_url() ?>admin/create_employee"><i class="fa fa-window-minimize"></i>Add Employee</a></li>-->
                                    <!--    <li><a href="<?php echo base_url() ?>admin/view_employee"><i class="fa fa-tablet"></i>View Employee</a></li>-->
                                    <!--</ul>-->
                                </li>
                                <li class="dropdown ">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap"></i>Organogram</a>
                                    <!-- <ul class="dropdown-menu">-->
                                    <!--    <li><a href="<?php echo base_url() ?>admin/create_student"><i class="fa fa-window-minimize"></i>Add Student</a></li>-->
                                    <!--    <li><a href="<?php echo base_url() ?>admin/view_student"><i class="fa fa-tablet"></i>View Students</a></li>-->
                                    <!--</ul>-->
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sitemap"></i>Report Hierarchy</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/create_product"><i class="fa fa-window-minimize"></i>Add Product</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/view_product"><i class="fa fa-tablet"></i>View Products</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/product_sale"><i class="fa fa-tablet"></i>Product Sale</a></li>
                                    </ul> -->
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-alt"></i>Performance Review</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/create_course"><i class="fa fa-window-minimize"></i>Add Course</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/view_course"><i class="fa fa-tablet"></i>View Course</a></li>
                                    </ul> -->
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-graduation-cap"></i>Training & Development</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/create_category"><i class="fa fa-window-minimize"></i>Add Category</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/view_category"><i class="fa fa-tablet"></i>View Category</a></li>
                                    </ul> -->
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-newspaper-o"></i>Memo/News</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/create_subcategory"><i class="fa fa-window-minimize"></i>Add Subcategory</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/view_subcategory"><i class="fa fa-tablet"></i>View Subcategory</a></li>
                                    </ul> -->
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i>Document & Forms</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/create_trainer"><i class="fa fa-window-minimize"></i>Add Trainer</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/view_trainer"><i class="fa fa-tablet"></i>View Trainer</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown">
                                    <a href="<?php echo base_url() ?>admin/view_recruitment" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i>Recruitment</a>
                                   <!--  <ul class="dropdown-menu">
                                       <li><a href=""><i class="fa fa-window-minimize"></i>Check Fee</a></li>
                                       <li><a href=""><i class="fa fa-tablet"></i>Fee Voucher</a></li>
                                   </ul> -->
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-google-wallet"></i>Compensation</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/create_expense"><i class="fa fa-window-minimize"></i>Add Expense</a></li>
                                        <li><a href="<?php echo base_url() ?>admin/view_expense"><i class="fa fa-tablet"></i>View Expenses</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shield"></i>Insurance Services</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/view_attendence"><i class="fa fa-tablet"></i>View Attendence</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i>Leaves Management</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/view_attendence"><i class="fa fa-tablet"></i>View Attendence</a></li>
                                    </ul> -->
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-suitcase"></i>Travel Management</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/view_attendence"><i class="fa fa-tablet"></i>View Attendence</a></li>
                                    </ul> -->
                                </li> <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comments"></i>Discussion Board</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/view_attendence"><i class="fa fa-tablet"></i>View Attendence</a></li>
                                    </ul> -->
                                </li> <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-check"></i>Approvals</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>admin/view_attendence"><i class="fa fa-tablet"></i>View Attendence</a></li>
                                    </ul> -->
                                </li>

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="ti-close"></i></a>
                        <h3 class="sidebar-heading">Activity</h3>
                        <div class="rad-activity-body">
                            <div class="rad-list-group group">
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-red pull-left"><i class="fa fa-phone"></i></div>
                                    <div class="rad-list-content"><strong>Client meeting</strong>
                                        <div class="md-text">Meeting at 10:00 AM</div>
                                    </div>
                                </a>
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-yellow pull-left"><i class="fa fa-refresh"></i></div>
                                    <div class="rad-list-content"><strong>Created ticket</strong>
                                        <div class="md-text">Ticket assigned to Dev team</div>
                                    </div>
                                </a>
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-primary pull-left"><i class="fa fa-check"></i></div>
                                    <div class="rad-list-content"><strong>Activity completed</strong>
                                        <div class="md-text">Completed the dashboard html</div>
                                    </div>
                                </a>
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-green pull-left"><i class="fa fa-envelope"></i></div>
                                    <div class="rad-list-content"><strong>New Invitation</strong>
                                        <div class="md-text">Max has invited you to join Inbox</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /.sidebar-menu -->
                        <h3 class="sidebar-heading">Tasks Progress</h3>
                        <ul class="sidebar-menu">
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task one
                                        <span class="label label-danger pull-right">40%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 40%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task two
                                        <span class="label label-success pull-right">20%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 20%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task Three
                                        <span class="label label-warning pull-right">60%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 60%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task four
                                        <span class="label label-primary pull-right">80%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" style="width: 80%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- End Side Menu -->
                </nav> <!-- /. main navigation -->
                <!--<div class="clearfix"></div>-->
            </header> <!-- /. main header -->
            <!-- /.content-wrapper -->

<!DOCTYPE html>
<html lang="en">


<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $title; ?></title>
        <!-- FEVICON AND TOUCH ICON -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>admin_assets/assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url() ?>admin_assets/assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url() ?>admin_assets/assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url() ?>admin_assets/assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url() ?>admin_assets/assets/dist/img/ico/apple-touch-icon-144-precomposed.png">
        <!-- STATRT GLOBAL MANDATORY STYLE -->
        <link href="<?php echo base_url() ?>admin_assets/assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- START PAGE LABEL PLUGINS -->
        <link href="<?php echo base_url() ?>admin_assets/assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>admin_assets/assets/plugins/fullcalendar/fullcalendar.print.min.css" rel="stylesheet" media='print' type="text/css"/>
        <link href="<?php echo base_url() ?>admin_assets/assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
        <!-- START THEME LAYOUT STYLE -->
        <link href="<?php echo base_url() ?>admin_assets/assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="<?php echo base_url() ?>admin_assets/assets/dist/css/skins/skin-dark-1.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>admin_assets/assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- multi select -->
        <link href="<?php echo  base_url()?>admin_assets/assets/plugins/amcharts/export.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

 <script src="<?php echo base_url() ?>assets/sweet/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/sweet/dist/sweetalert.css">

   <!-- include alertify.css -->
<link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/alertifyjs/css/alertify.css">

<!-- include semantic ui theme  -->
<link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/alertifyjs/css/themes/semantic.css">
<link href="<?php echo base_url() ?>admin_assets/assets/plugins/modals/modal-component.css" rel="stylesheet" type="text/css"/>
<!-- include alertify script -->
<script src="<?php echo base_url() ?>admin_assets/alertifyjs/alertify.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/dist/css/bootstrap-select.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>admin_assets/dist/js/bootstrap-select.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <link href="<?php echo base_url() ?>admin_assets/assets/dist/button/css/bootstrap-toggle.css" rel="stylesheet">
<link href="<?php echo  base_url()?>admin_assets/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/highlight.min.js"></script>
    <script src="<?php echo base_url() ?>admin_assets/assets/dist/button/doc/script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>admin_assets/assets/dist/button/js/bootstrap-toggle.js"></script>
    <style type="text/css">



/************************************************************
*************************Footer******************************
*************************************************************/

@import url(http://fonts.googleapis.com/css?family=Fjalla+One);
@import url(http://fonts.googleapis.com/css?family=Gudea);
.footer1 {
    background: #fff url("../images/footer/footer-bg.png") repeat scroll left top;
	padding-top: 40px;
	padding-right: 0;
	padding-bottom: 20px;
	padding-left: 0;/*	border-top-width: 4px;
	border-top-style: solid;
	border-top-color: #003;*/
}



.title-widget {
	color: #898989;
	font-size: 20px;
	font-weight: 300;
	line-height: 1;
	position: relative;


	margin-top: 0;
	margin-right: 0;
	margin-bottom: 25px;
	margin-left: 0;
	padding-left: 28px;
}

.title-widget::before {
    background-color: #ea5644;
    content: "";
    height: 22px;
    left: 0px;
    position: absolute;
    top: -2px;
    width: 5px;
}



.widget_nav_menu ul {
    list-style: outside none none;
    padding-left: 0;
}

.widget_archive ul li {
    background-color: rgba(0, 0, 0, 0.3);
    content: "";
    height: 3px;
    left: 0;
    position: absolute;
    top: 7px;
    width: 3px;
}


.widget_nav_menu ul li {
    font-size: 13px;
    font-weight: 700;
    line-height: 20px;
	position: relative;
    text-transform: uppercase;
	border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    margin-bottom: 7px;
    padding-bottom: 7px;
	width:95%;
}



.title-median {
    color: #636363;
    font-size: 20px;
    line-height: 20px;
    margin: 0 0 15px;
    text-transform: uppercase;
	font-family: Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.footerp p {font-family: Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif; }


.footer-bottom {
    background-color: #3e454c;
    min-height: 30px;
    width: 100%;
}
.copyright {
    color: #fff;
    line-height: 30px;
    min-height: 30px;
    padding: 7px 0;
    font-size: 12px;
}
.design {
    color: #fff;
    line-height: 30px;
    min-height: 30px;
    padding: 7px 0;
    text-align: right;
}
.design a {
    color: #fff;
}


/************************************************************
*************************Footer******************************
*************************************************************/
    </style>
    </head>
    <body>
        <div id="wrapper" class="wrapper animsition">
            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="material-icons">apps</i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img style="width: 244px; padding-left: 3px;" class="main-logo" src="<?php echo base_url() ?>admin_assets//img/logo.png" alt="">
                        <span></span>
                    </a>
                </div>
                <div class="nav-container">
                    <!-- /.navbar-header -->
                    <ul class="nav navbar-nav hidden-xs">
                        <li><a id="fullscreen" href="#"><i class="material-icons">fullscreen</i> </a></li>
                        <!-- /.Fullscreen -->
                        <li class="hidden-xs">
                            <a class="search-trigger" href="#">
                                <i class="material-icons">search</i>
                            </a>
                            <div class="fullscreen-search-overlay" id="search-overlay">
                                <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="ti-close"></i></a>
                                <div id="fullscreen-search-wrapper">
                                    <form method="get" id="fullscreen-searchform" action="#">
                                        <input type="text" value="" placeholder="Type keyword(s) here" id="fullscreen-search-input">
                                        <i class="ti-search fullscreen-search-icon"><input value="" type="submit"></i>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <!-- /.Full page search -->
                        <!--<li><a id="menu-toggle" href="#"><i class="material-icons">apps</i></a></li>-->
                        <!-- /.Sidebar menu toggle icon -->
                        <!--Start dropdown mega menu-->

                        <!--End dropdown mega menu-->

                    </ul>
                    <ul class="nav navbar-top-links navbar-right">
                        <!--<li class="dropdown">-->
                        <!--    <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
                        <!--        <i class="material-icons">chat</i>-->
                        <!--        <span class="label label-danger">9</span>-->
                        <!--    </a>-->
                        <!--    <ul class="dropdown-menu dropdown-messages">-->
                        <!--        <li class="rad-dropmenu-header"><a href="#">New Messages</a></li>-->
                        <!--        <li>-->
                        <!--            <a href="#" class="rad-content">-->
                        <!--                <div class="inbox-item">-->
                        <!--                    <div class="inbox-item-img"><img src="<?php echo base_url() ?>admin_assets/assets/dist/img/avatar.png" class="img-circle" alt=""></div>-->
                        <!--                    <strong class="inbox-item-author">Naeem Khan</strong>-->
                        <!--                    <span class="inbox-item-date">-13:40 PM</span>-->
                        <!--                    <p class="inbox-item-text">Hey! there I'm available...</p>-->
                        <!--                    <span class="profile-status available pull-right"></span>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--        </li>-->

                        <!--        <li class="rad-dropmenu-footer"><a href="#">View All messages</a></li>-->
                        <!--    </ul> -->
                        <!--</li>-->
                        <!--<li class="dropdown">-->
                        <!--    <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
                                <!--<i class="ti-flag-alt"></i>-->
                        <!--        <i class="material-icons">flag</i>-->
                        <!--        <span class="label label-success">4</span>-->
                                <!--<i class="ti-angle-down"></i>-->
                        <!--    </a>-->
                        <!--    <ul class="dropdown-menu dropdown-tasks">-->
                                <!--<li class="ui_popover_tooltip"></li>-->
                        <!--        <li class="rad-dropmenu-header"><a  href="#">Your Task</a></li>-->


                        <!--        <li>-->
                        <!--            <a href="#">-->
                        <!--                <div>-->
                        <!--                    <p><strong>Task 4</strong>-->
                        <!--                        <span class="pull-right sm-text">80% Complete</span></p>-->
                        <!--                    <div class="progress progress-striped active">-->
                        <!--                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">-->
                        <!--                            <span class="sr-only">80% Complete (danger)</span>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--        </li>-->
                        <!--        <li class="rad-dropmenu-footer"><a href="#">See All Tasks</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <li class="dropdown" id="click_notification" >
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">add_alert</i>
<span class="label label-success" id="count_notification"></span>                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>

    <?php if ($_SESSION['id']){
      $user_id=$_SESSION['id'];
    }else{
        $user_id=$_SESSION['login_id'];
    } ?>
        

                               <span class="label"><a href="<?php echo base_url() ?>admin/read_all_notification/<?php echo $user_id; ?>" class="pull-right">Read All</a></span>
                                <div id="get_notification" style="overflow:auto;height:300px;">

                                </div>
                            </ul>  <!-- /.dropdown-alerts -->
                            <!-- /.dropdown-alerts -->
                        </li>
                        <!-- /.Dropdown -->
                        <!-- akash code here -->
 <li class="dropdown" id="click_task_notification" >
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="glyphicon glyphicon-bell"></i> 
                                   <span class="label label-success" id="count_notification_task"></span>  
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li class="rad-dropmenu-header"><a href="#">Task Notifications</a></li>


                                <div id="get_notification2" style="height:300px;">

                                </div>
                            </ul>  <!-- /.dropdown-alerts -->
                            <!-- /.dropdown-alerts -->
                        </li>

          


            
            <script type="text/javascript">
                
             $('#click_task_notification').click(function(){
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/get_task_notification",
                        type:"get",
                        success:function(resp){
                            $('#get_notification2').html(resp);
                            task_notification_view()
                        }
                   
                });
            });

            function task_notification_view() {
                $('.not-id-task').click(function(e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id')
                    var href = $(this).attr('href')
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/view_notification_task/"+id,
                        type:"get",
                        success:function(resp){
                            window.location.href = href
                        }
                    });
                })
            }     


            function count_notification_task(){
                $(document).ready(function(){
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/task_notification_count",
                        type:"get",
                        success:function(resp){
                            // console.log(resp);
                            $('#count_notification_task').html(resp);
                        }
                    });
                });
            }
            count_notification_task();

            setInterval(count_notification_task,2000);


            </script>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">person_add</i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="profile.html"><i class="ti-user"></i>&nbsp; <?php echo $_SESSION['client_name']?><?php echo $_SESSION['employee_name']?><?php echo $_SESSION['login_name']?></a></li>
                                
                                <li><a href="<?php echo base_url() ?>admin/destroy"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                            </ul><!-- /.dropdown-user -->
                        </li><!-- /.Dropdown -->
                        <li class="log_out">
                            <a href="<?php echo base_url() ?>admin/destroy">
                                <i class="material-icons">power_settings_new</i>
                            </a>
                        </li><!-- /.Log out -->
                    </ul> <!-- /.navbar-top-links -->
                </div>
            </nav>
            <!-- /.Navigation -->
            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                   <?php include 'sidebar.php'; ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>


            <script>
            $('#click_notification').click(function(){
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/get_notification",
                        type:"get",
                        success:function(resp){
                            $('#get_notification').html(resp);
                            notification_view()
                        }
                   
                });
            });
            function notification_view() {
                $('.not-id').click(function(e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id')
                    var href = $(this).attr('href')
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/view_notification/"+id,
                        type:"get",
                        success:function(resp){
                            // console.log(resp);
                            //$('#count_notification').html(resp);
                            window.location.href = href
                        }
                    });
                })
            }
            </script>
            <script>
            function count_notification(){
                $(document).ready(function(){
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/count_notification",
                        type:"get",
                        success:function(resp){
                            // console.log(resp);
                            $('#count_notification').html(resp);
                        }
                    });
                });
            }
            count_notification();

            setInterval(count_notification,2000);

            </script>

            <!-- akash code here -->

            
            <script type="text/javascript">
                
             $('#click_task_notification').click(function(){
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/get_task_notification",
                        type:"get",
                        success:function(resp){
                            $('#get_notification2').html(resp);
                            task_notification_view()
                        }
                   
                });
            });

            function task_notification_view() {
                $('.not-id-task').click(function(e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id')
                    var href = $(this).attr('href')
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/view_notification_task/"+id,
                        type:"get",
                        success:function(resp){
                            window.location.href = href
                        }
                    });
                })
            }     


            function count_notification_task(){
                $(document).ready(function(){
                    $.ajax({
                        url:"<?php echo base_url() ?>admin/task_notification_count",
                        type:"get",
                        success:function(resp){
                            // console.log(resp);
                            $('#count_notification_task').html(resp);
                        }
                    });
                });
            }
            count_notification_task();

            setInterval(count_notification_task,2000);


            </script>
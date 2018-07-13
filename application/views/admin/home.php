<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>3GMMA - CRM</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <link href="assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins
        =====================================================================-->
        <!-- Toastr css -->
        <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <!-- Emojionearea -->
        <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css" />
        <!-- Monthly css -->
        <link href="assets/plugins/monthly/monthly.min.css" rel="stylesheet" type="text/css"/>
        <!-- amchat css -->
        <link href="assets/plugins/amcharts/export.css" rel="stylesheet" type="text/css" />
        <!-- End page Label Plugins
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- End Theme Layout Style
        =====================================================================-->
    </head>
    <body>
        <div class="wrapper animsition">
<!-- top menu -->
 <?php include 'top-menu.php';?>
<!-- top menu end -->
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-tools"></i>
                            </div>
                            <div class="header-title">
                                <h1>Adminpage - Responsive Bootstrap Admin Template Dashboard</h1>
                                <small>Very detailed & featured admin.</small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>  <!-- /.Content Header (Page header) -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number">696</span>K <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
                                    <div class="small">Visitors this Month</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number">321</span>M <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
                                    <div class="small">Total users</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number">789</span>K <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
                                    <div class="small">Social users </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number">5489</span>$ <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
                                    <div class="small">Total Sales</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div> <!--/. statistic box -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                <div class="panel panel-bd ">
                                    <div class="panel-body">
                                        <!-- amcharts -->
                                        <div id="chartdiv"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-panel"></i>
                                            <h4>CSS animations Chart</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <!--                                        <div class="flotChart" style="height: 340px;">
                                                                                        <div class="flotChart-demo" id="flot-line-chart"></div>
                                                                                    </div>-->
                                        <!-- amcharts -->
                                        <div id="chartdiv2"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Activities -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-stats-up"></i>
                                            <h4>Recent Activities</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="activity-list list-unstyled">
                                            <li class="activity-purple">
                                                <small class="text-muted">9 minutes ago</small>
                                                <p>You <span class="label label-success label-pill">recommended</span> Karen Ortega</p>
                                            </li>
                                            <li class="activity-danger">
                                                <small class="text-muted">15 minutes ago</small>
                                                <p>You followed Olivia Williamson</p>
                                            </li>
                                            <li class="activity-warning">
                                                <small class="text-muted">22 minutes ago</small>
                                                <p>You <span class="text-danger">subscribed</span> to Harold Fuller</p>
                                            </li>
                                            <li class="activity-primary">
                                                <small class="text-muted">30 minutes ago</small>
                                                <p>You updated your profile picture</p>
                                            </li>
                                            <li>
                                                <small class="text-muted">35 minutes ago</small>
                                                <p>You deleted homepage.psd</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-email"></i>
                                            <h4>Messages</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="message_inner">
                                            <div class="message_widgets">
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Naeem Khan</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar2.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Sala Uddin</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status away pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar3.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Mozammel Hoque</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar5.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Amir Khan</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Salman Khan</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Naeem Khan</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status available pull-right"></span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                                        <span class="inbox-item-date">-13:40 PM</span>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-user"></i>
                                            <h4>Chat</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="chat_list">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <!--<a href="#" data-toggle="tooltip" data-placement="left" title="Hooray!"></a>-->
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>Hello! ✋</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="Female">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>Hi, How are you?☺ What about our next meeting?😼</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>Yeah everything is fine 👍</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="male">
                                                    <i>10:02</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>Wow that's great 👏</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:03</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>What can you do with HTML VIEWER ?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="male">
                                                    <i>10:04</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>It helps to beautify/format your HTML.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar5.png" alt="male">
                                                    <i>10:04</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>It helps to save and share HTML content and show the HTML output</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/dist/img/avatar4.png" alt="male">
                                                    <i>10:05</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <img src="assets/dist/img/1f600.png" alt="">
                                                        <img src="assets/dist/img/1f60e.png" alt="">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="input-group">
                                            <input type="text" class="form-control emojionearea" placeholder="Your Message. . . ">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="button">Send</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calender -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-archive"></i>
                                            <h4>Calender</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <!-- monthly calender -->
                                        <div class="monthly_calender">
                                            <div class="monthly" id="m_calendar"></div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        This is panel footer
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="panel panel-bd lobidisable">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-pie-chart"></i>
                                            <h4>Colors Pie Chart</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <!-- amcharts -->
                                        <div id="chartPie"></div>
                                        <div class="chart-legend">
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color red"></div>
                                                <p>From Google</p>
                                                <p class="percentage">63.259 %</p>
                                            </div>
                                            <!-- /.chart legend item -->
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color blue"></div>
                                                <p>Your Website</p>
                                                <p class="percentage">25.321 %</p>
                                            </div>
                                            <!-- /.chart legend item -->
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color green"></div>
                                                <p>Other Search Engines</p>
                                                <p class="percentage">11.42 %</p>
                                            </div>
                                            <!-- /.chart legend item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-9">
                                <div class="panel panel-bd">
                                    <div class="panel-body">
                                        <!-- amcharts -->
                                        <div id="chartMap"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <i class="ti-truck"></i>
                                            <h4>Contacts</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Street Address</th>
                                                        <th>% Share</th>
                                                        <th>City</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Naeem Khan</td>
                                                        <td>123 456 7890</td>
                                                        <td>294-318 Duis Ave</td>
                                                        <td>
                                                            <div class="sparkline5"></div>
                                                        </td>
                                                        <td>Noakhali</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar2.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Tuhin Sarkar</td>
                                                        <td>123 456 7890</td>
                                                        <td>680-1097 Mi Rd.</td>
                                                        <td>
                                                            <div class="sparkline6"></div>
                                                        </td>
                                                        <td>Lavoir</td>
                                                        <td><a href="#" class="btn btn-success btn-xs active">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar6.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Tanjil Ahmed</td>
                                                        <td>456 789 1230</td>
                                                        <td>Ap #289-8161 In Avenue</td>
                                                        <td>
                                                            <div class="sparkline7"></div>
                                                        </td>
                                                        <td>Dhaka</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar3.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Sourav</td>
                                                        <td>789 123 4560</td>
                                                        <td>226-4861 Augue. St.</td>
                                                        <td>
                                                            <div class="sparkline5"></div>
                                                        </td>
                                                        <td>Rongpur</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <figure class="user-avatar small">
                                                                <img src="assets/dist/img/avatar7.png" class="img-responsive" alt="user-image">
                                                            </figure>
                                                        </td>
                                                        <td>Jahangir Alam</td>
                                                        <td>(01662) 59083</td>
                                                        <td>3219 Elit Avenue</td>
                                                        <td>
                                                            <div class="sparkline6"></div>
                                                        </td>
                                                        <td>Chittagong</td>
                                                        <td><a href="#" class="btn btn-success btn-xs">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-3 hidden-sm hidden-md">
                                <div class="social-widget">
                                    <ul>
                                        <li>
                                            <div class="fb_inner">
                                                <i class="fa fa-facebook"></i>
                                                <span class="sc-num">5,791</span>
                                                <small>Fans</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twitter_inner">
                                                <i class="fa fa-twitter"></i>
                                                <span class="sc-num">691</span>
                                                <small>Followers</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="g_plus_inner">
                                                <i class="fa fa-google-plus"></i>
                                                <span class="sc-num">147</span>
                                                <small>Followers</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dribble_inner">
                                                <i class="fa fa-dribbble"></i>
                                                <span class="sc-num">3,485</span>
                                                <small>Followers</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
                    <strong>Copyright &copy; 2016-2017 <a href="#">Thememinister</a>.</strong> All rights reserved. <i class="fa fa-heart color-green"></i>
                </div>
            </footer> <!-- /. footer -->
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="assets/plugins/bootsnav/js/bootsnav.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Counterup js -->
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <!-- Emojionearea -->
        <script src="assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/plugins/monthly/monthly.min.js" type="text/javascript"></script>
        <!-- amchat js -->
        <script src="assets/plugins/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/worldLow.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/serial.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/export.min.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/dark.js" type="text/javascript"></script>
        <script src="assets/plugins/amcharts/pie.js" type="text/javascript"></script>
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                // notification
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                                // positionClass: "toast-top-left"
                    };
                    toastr.success('Responsive Admin Template', 'Welcome to Adminpage');

                }, 1300);

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //Chat list
                $('.chat_list').slimScroll({
                    size: '3px',
                    height: '296px',
                    allowPageScroll: true,
                    railVisible: true
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '351px',
                    allowPageScroll: true,
                    railVisible: true
                            // position: 'left'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });

                //Sparklines Charts
                $('.sparkline1').sparkline([4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 7, 4, 3, 1, 5, 7, 6, 6, 5, 5, 4, 4, 3, 3, 4, 4, 5, 6, 7, 2, 3, 4], {
                    type: 'bar',
                    barColor: '#fff',
                    height: '40',
                    barWidth: '3',
                    barSpacing: 2
                });

                $(".sparkline2").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7, 6, 8, 3, 2, 6], {
                    type: 'discrete',
                    lineColor: '#fff',
                    width: '200',
                    height: '40'
                });

                $(".sparkline3").sparkline([5, 6, 7, 2, 0, -4, -2, -3, -4, 4, 5, 6, 3, 2, 4, -6, -5, -4, 6, 5, 4, 3, 4, -3, -5, -4, 5, 4, 3, 6, -2, -3, -4, -5, 5, 6, 3, 4, 5], {
                    type: 'bar',
                    barColor: '#fff',
                    negBarColor: '#c6c6c6',
                    width: '200',
                    height: '40'
                });

                $(".sparkline4").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                    type: 'line',
                    height: '40',
                    width: '100%',
                    lineColor: '#fff',
                    fillColor: 'rgba(255,255,255,0.1)'
                });

                $(".sparkline5").sparkline([32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15], {
                    type: 'line',
                    lineColor: '#558B2F',
                    fillColor: '#558B2F',
                    width: '100',
                    height: '20'
                });

                $(".sparkline6").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7], {
                    type: 'discrete',
                    lineColor: '#558B2F',
                    width: '100',
                    height: '20'
                });

                $(".sparkline7").sparkline([5, 6, 7, 2, 0, -4, -2, 4, 5, 6, 3, 2, 4, -6, -5, -4, 6, 5, 4, 3], {
                    type: 'bar',
                    barColor: '#558B2F',
                    negBarColor: '#c6c6c6',
                    width: '100',
                    height: '20'
                });

                //amchart
                var chart = AmCharts.makeChart("chartdiv", {
                    "type": "serial",
                    "theme": "dark",
                    "dataDateFormat": "YYYY-MM-DD",
                    "precision": 2,
                    "valueAxes": [{
                            "id": "v1",
                            "title": "Sales",
                            "position": "left",
                            "autoGridCount": false,
                            "labelFunction": function (value) {
                                return "$" + Math.round(value) + "M";
                            }
                        }, {
                            "id": "v2",
                            "title": "Market Days",
                            "gridAlpha": 0,
                            "position": "right",
                            "autoGridCount": false
                        }],
                    "graphs": [{
                            "id": "g3",
                            "valueAxis": "v1",
                            "lineColor": "#e1ede9",
                            "fillColors": "#e1ede9",
                            "fillAlphas": 1,
                            "type": "column",
                            "title": "Actual Sales",
                            "valueField": "sales2",
                            "clustered": false,
                            "columnWidth": 0.5,
                            "legendValueText": "$[[value]]M",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
                        }, {
                            "id": "g4",
                            "valueAxis": "v1",
                            "lineColor": "#558B2F",
                            "fillColors": "#558B2F",
                            "fillAlphas": 1,
                            "type": "column",
                            "title": "Target Sales",
                            "valueField": "sales1",
                            "clustered": false,
                            "columnWidth": 0.3,
                            "legendValueText": "$[[value]]M",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
                        }, {
                            "id": "g1",
                            "valueAxis": "v2",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#FFFFFF",
                            "bulletSize": 5,
                            "hideBulletsCount": 50,
                            "lineThickness": 2,
                            "lineColor": "#20acd4",
                            "type": "smoothedLine",
                            "title": "Market Days",
                            "useLineColorForBulletBorder": true,
                            "valueField": "market1",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                        }, {
                            "id": "g2",
                            "valueAxis": "v2",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#E5343D",
                            "bulletSize": 5,
                            "hideBulletsCount": 50,
                            "lineThickness": 2,
                            "lineColor": "#E5343D",
                            "type": "smoothedLine",
                            "dashLength": 5,
                            "title": "Market Days ALL",
                            "useLineColorForBulletBorder": true,
                            "valueField": "market2",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                        }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis": false,
                        "offset": 30,
                        "scrollbarHeight": 50,
                        "backgroundAlpha": 0,
                        "selectedBackgroundAlpha": 0.1,
                        "selectedBackgroundColor": "#888888",
                        "graphFillAlpha": 0,
                        "graphLineAlpha": 0.5,
                        "selectedGraphFillAlpha": 0,
                        "selectedGraphLineAlpha": 1,
                        "autoGridCount": true,
                        "color": "#AAAAAA"
                    },
                    "chartCursor": {
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha": 0,
                        "valueLineAlpha": 0.2
                    },
                    "categoryField": "date",
                    "categoryAxis": {
                        "parseDates": true,
                        "dashLength": 1,
                        "minorGridEnabled": true
                    },
                    "legend": {
                        "useGraphSettings": true,
                        "position": "top"
                    },
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "export": {
                        "enabled": true
                    },
                    "dataProvider": [{
                            "date": "2013-01-16",
                            "market1": 71,
                            "market2": 75,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-17",
                            "market1": 74,
                            "market2": 78,
                            "sales1": 4,
                            "sales2": 6
                        }, {
                            "date": "2013-01-18",
                            "market1": 78,
                            "market2": 88,
                            "sales1": 5,
                            "sales2": 2
                        }, {
                            "date": "2013-01-19",
                            "market1": 85,
                            "market2": 89,
                            "sales1": 8,
                            "sales2": 9
                        }, {
                            "date": "2013-01-20",
                            "market1": 82,
                            "market2": 89,
                            "sales1": 9,
                            "sales2": 6
                        }, {
                            "date": "2013-01-21",
                            "market1": 83,
                            "market2": 85,
                            "sales1": 3,
                            "sales2": 5
                        }, {
                            "date": "2013-01-22",
                            "market1": 88,
                            "market2": 92,
                            "sales1": 5,
                            "sales2": 7
                        }, {
                            "date": "2013-01-23",
                            "market1": 85,
                            "market2": 90,
                            "sales1": 7,
                            "sales2": 6
                        }, {
                            "date": "2013-01-24",
                            "market1": 85,
                            "market2": 91,
                            "sales1": 9,
                            "sales2": 5
                        }, {
                            "date": "2013-01-25",
                            "market1": 80,
                            "market2": 84,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-26",
                            "market1": 87,
                            "market2": 92,
                            "sales1": 4,
                            "sales2": 8
                        }, {
                            "date": "2013-01-27",
                            "market1": 84,
                            "market2": 87,
                            "sales1": 3,
                            "sales2": 4
                        }, {
                            "date": "2013-01-28",
                            "market1": 83,
                            "market2": 88,
                            "sales1": 5,
                            "sales2": 7
                        }, {
                            "date": "2013-01-29",
                            "market1": 84,
                            "market2": 87,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-30",
                            "market1": 81,
                            "market2": 85,
                            "sales1": 4,
                            "sales2": 7
                        }]
                });


                var chart = AmCharts.makeChart("chartdiv2", {
                    "type": "serial",
                    "theme": "dark",
                    "legend": {
                        "equalWidths": false,
                        "useGraphSettings": true,
                        "valueAlign": "left",
                        "valueWidth": 120
                    },
                    "dataProvider": [{
                            "date": "2012-01-01",
                            "distance": 227,
                            "townName": "New York",
                            "townName2": "New York",
                            "townSize": 25,
                            "latitude": 40.71,
                            "duration": 408
                        }, {
                            "date": "2012-01-02",
                            "distance": 371,
                            "townName": "Washington",
                            "townSize": 14,
                            "latitude": 38.89,
                            "duration": 482
                        }, {
                            "date": "2012-01-03",
                            "distance": 433,
                            "townName": "Wilmington",
                            "townSize": 6,
                            "latitude": 34.22,
                            "duration": 562
                        }, {
                            "date": "2012-01-04",
                            "distance": 345,
                            "townName": "Jacksonville",
                            "townSize": 7,
                            "latitude": 30.35,
                            "duration": 379
                        }, {
                            "date": "2012-01-05",
                            "distance": 480,
                            "townName": "Miami",
                            "townName2": "Miami",
                            "townSize": 10,
                            "latitude": 25.83,
                            "duration": 501
                        }, {
                            "date": "2012-01-06",
                            "distance": 386,
                            "townName": "Tallahassee",
                            "townSize": 7,
                            "latitude": 30.46,
                            "duration": 443
                        }, {
                            "date": "2012-01-07",
                            "distance": 348,
                            "townName": "New Orleans",
                            "townSize": 10,
                            "latitude": 29.94,
                            "duration": 405
                        }, {
                            "date": "2012-01-08",
                            "distance": 238,
                            "townName": "Houston",
                            "townName2": "Houston",
                            "townSize": 16,
                            "latitude": 29.76,
                            "duration": 309
                        }, {
                            "date": "2012-01-09",
                            "distance": 218,
                            "townName": "Dalas",
                            "townSize": 17,
                            "latitude": 32.8,
                            "duration": 287
                        }, {
                            "date": "2012-01-10",
                            "distance": 349,
                            "townName": "Oklahoma City",
                            "townSize": 11,
                            "latitude": 35.49,
                            "duration": 485
                        }, {
                            "date": "2012-01-11",
                            "distance": 603,
                            "townName": "Kansas City",
                            "townSize": 10,
                            "latitude": 39.1,
                            "duration": 890
                        }, {
                            "date": "2012-01-12",
                            "distance": 534,
                            "townName": "Denver",
                            "townName2": "Denver",
                            "townSize": 18,
                            "latitude": 39.74,
                            "duration": 810
                        }, {
                            "date": "2012-01-13",
                            "townName": "Salt Lake City",
                            "townSize": 12,
                            "distance": 425,
                            "duration": 670,
                            "latitude": 40.75,
                            "dashLength": 8,
                            "alpha": 0.4
                        }, {
                            "date": "2012-01-14",
                            "latitude": 36.1,
                            "duration": 470,
                            "townName": "Las Vegas",
                            "townName2": "Las Vegas"
                        }, {
                            "date": "2012-01-15"
                        }, {
                            "date": "2012-01-16"
                        }, {
                            "date": "2012-01-17"
                        }, {
                            "date": "2012-01-18"
                        }, {
                            "date": "2012-01-19"
                        }],
                    "valueAxes": [{
                            "id": "distanceAxis",
                            "axisAlpha": 0,
                            "gridAlpha": 0,
                            "position": "left",
                            "title": "distance"
                        }, {
                            "id": "latitudeAxis",
                            "axisAlpha": 0,
                            "gridAlpha": 0,
                            "labelsEnabled": false,
                            "position": "right"
                        }, {
                            "id": "durationAxis",
                            "duration": "mm",
                            "durationUnits": {
                                "hh": "h ",
                                "mm": "min"
                            },
                            "axisAlpha": 0,
                            "gridAlpha": 0,
                            "inside": true,
                            "position": "right",
                            "title": "duration"
                        }],
                    "graphs": [{
                            "alphaField": "alpha",
                            "balloonText": "[[value]] miles",
                            "dashLengthField": "dashLength",
                            "fillAlphas": 0.7,
                            "legendPeriodValueText": "total: [[value.sum]] mi",
                            "legendValueText": "[[value]] mi",
                            "title": "distance",
                            "type": "column",
                            "valueField": "distance",
                            "valueAxis": "distanceAxis"
                        }, {
                            "balloonText": "latitude:[[value]]",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "useLineColorForBulletBorder": true,
                            "bulletColor": "#FFFFFF",
                            "bulletSizeField": "townSize",
                            "dashLengthField": "dashLength",
                            "descriptionField": "townName",
                            "labelPosition": "right",
                            "labelText": "[[townName2]]",
                            "legendValueText": "[[value]]/[[description]]",
                            "title": "latitude/city",
                            "fillAlphas": 0,
                            "valueField": "latitude",
                            "valueAxis": "latitudeAxis"
                        }, {
                            "bullet": "square",
                            "bulletBorderAlpha": 1,
                            "bulletBorderThickness": 1,
                            "dashLengthField": "dashLength",
                            "legendValueText": "[[value]]",
                            "title": "duration",
                            "fillAlphas": 0,
                            "valueField": "duration",
                            "valueAxis": "durationAxis"
                        }],
                    "chartCursor": {
                        "categoryBalloonDateFormat": "DD",
                        "cursorAlpha": 0.1,
                        "cursorColor": "#000000",
                        "fullWidth": true,
                        "valueBalloonsEnabled": false,
                        "zoomable": false
                    },
                    "dataDateFormat": "YYYY-MM-DD",
                    "categoryField": "date",
                    "categoryAxis": {
                        "dateFormats": [{
                                "period": "DD",
                                "format": "DD"
                            }, {
                                "period": "WW",
                                "format": "MMM DD"
                            }, {
                                "period": "MM",
                                "format": "MMM"
                            }, {
                                "period": "YYYY",
                                "format": "YYYY"
                            }],
                        "parseDates": true,
                        "autoGridCount": false,
                        "axisColor": "#555555",
                        "gridAlpha": 0.1,
                        "gridColor": "#FFFFFF",
                        "gridCount": 50
                    },
                    "export": {
                        "enabled": true
                    }
                });

                /**
                 * SVG path for target icon
                 */
                var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

                /**
                 * SVG path for plane icon
                 */
                var planeSVG = "m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47";

                /**
                 * Create the map
                 */
                var map = AmCharts.makeChart("chartMap", {
                    "type": "map",
                    "theme": "dark",

                    "projection": "winkel3",
                    "dataProvider": {
                        "map": "worldLow",

                        "lines": [{
                                "id": "line1",
                                "arc": -0.85,
                                "alpha": 0.3,
                                "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191],
                                "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
                            }, {
                                "id": "line2",
                                "alpha": 0,
                                "color": "#E5343D",
                                "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191],
                                "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
                            }],
                        "images": [{
                                "svgPath": targetSVG,
                                "title": "Bangladesh",
                                "latitude": 23.684994,
                                "longitude": 90.356331
                            }, {
                                "svgPath": targetSVG,
                                "title": "Paris",
                                "latitude": 48.8567,
                                "longitude": 2.3510
                            }, {
                                "svgPath": targetSVG,
                                "title": "Toronto",
                                "latitude": 43.8163,
                                "longitude": -79.4287
                            }, {
                                "svgPath": targetSVG,
                                "title": "Los Angeles",
                                "latitude": 34.3,
                                "longitude": -118.15
                            }, {
                                "svgPath": targetSVG,
                                "title": "Havana",
                                "latitude": 23,
                                "longitude": -82
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "Russia",
                                "latitude": 61.524010,
                                "longitude": 105.318756
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "India",
                                "latitude": 20.593684,
                                "longitude": 78.962880
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "Iraq",
                                "latitude": 33.223191,
                                "longitude": 43.679291
                            }, {
                                "svgPath": planeSVG,
                                "positionOnLine": 0,
                                "color": "#000000",
                                "alpha": 0.1,
                                "animateAlongLine": true,
                                "lineId": "line2",
                                "flipDirection": true,
                                "loop": true,
                                "scale": 0.03,
                                "positionScale": 1.3
                            }, {
                                "svgPath": planeSVG,
                                "positionOnLine": 0,
                                "color": "#585869",
                                "animateAlongLine": true,
                                "lineId": "line1",
                                "flipDirection": true,
                                "loop": true,
                                "scale": 0.03,
                                "positionScale": 1.8
                            }]
                    },

                    "areasSettings": {
                        "unlistedAreasColor": "#5b69bc"
                    },

                    "imagesSettings": {
                        "color": "#E5343D",
                        "rollOverColor": "#E5343D",
                        "selectedColor": "#E5343D",
                        "pauseDuration": 0.2,
                        "animationDuration": 4,
                        "adjustAnimationSpeed": true
                    },

                    "linesSettings": {
                        "color": "#E5343D",
                        "alpha": 0.4
                    },

                    "export": {
                        "enabled": true
                    }

                });

                var chart = AmCharts.makeChart("chartPie", {
                    "type": "pie",
                    "theme": "dark",
                    "addClassNames": true,
                    "classNameField": "class",
                    "dataProvider": [{
                            "value": 4852,
                            "class": "color1"
                        }, {
                            "value": 9899,
                            "class": "color2"
                        }, {
                            "value": 7789,
                            "class": "color3"
                        }],
                    "valueField": "value",
                    "labelRadius": 5,

                    "radius": "42%",
                    "innerRadius": "60%",
                    "labelText": "[[title]]",
                    "export": {
                        "enabled": true
                    }
                });

            });
        </script>
    </body>

</html>
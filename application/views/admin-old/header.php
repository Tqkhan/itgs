<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SME-ERP | <?php echo $title; ?></title>

    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="<?php echo base_url() ?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url() ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
  

   <link href="<?php echo base_url() ?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- This is what you need -->
  <script src="<?php echo base_url() ?>assets/sweet/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/sweet/dist/sweetalert.css">


<?php 
$page=$_SESSION['page'];

?>
</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url() ?>uploads/profile/<?php echo $_SESSION['profile_img'] ?>"  width="60"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['login_name'] ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $_SESSION['role'] ?> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                           
                            <li><a href="<?php echo base_url() ?>admin/destroy">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        SME-ERP
                    </div>
                </li>
      
      <?php 
       ?>
                <li <?php if($page=="index") echo "class='active'" ?>>
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Dashboard</span> </a>
                </li>
              
               <?php 
if ($_SESSION['role']=="Ess") {
?>

                   <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Profile</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Leave Balance</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">My Qualifications</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">My Payslips</a></li>

                    </ul>
                </li>


                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Organogram</span> </a>
                </li>

                   <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Training & Development</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Enrollment</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Calendar</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Library</a></li>

                    </ul>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Performance Review</span> </a>
                </li>

                   <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">My Requests</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Leave Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Loan Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">IT Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Travel Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Complaints</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Admin Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Reimbursenent Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Visting Cards Requisition</a></li>

                    </ul>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Calender</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Check In/Out Work</span> </a>
                </li>
                 <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Company Information</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Memo/News</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Company Profile</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Product Profiles</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Management Structure</a></li>
                       

                    </ul>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Discussion board</span> </a>
                </li>
<?php
}else if ($_SESSION['role']=="Hr") {
?>

                <li >
                    <a href="<?php echo base_url() ?>admin/add_employee_hr"><i class="fa fa-bars"></i> <span class="nav-label">Employee Management</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/add_organogram_hr"><i class="fa fa-bars"></i> <span class="nav-label">Organogram</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/add_rephier_hr"><i class="fa fa-bars"></i> <span class="nav-label">Reporting Hierarchy</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Performance Review</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/add_training_hr"><i class="fa fa-bars"></i> <span class="nav-label">Training & Development</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Memo/News</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Documents & Forms</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/add_recruitment_hr"><i class="fa fa-bars"></i> <span class="nav-label">Recruitment</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Compensation</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Insurance Services</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Leaves Management
</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Travel Management
</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Discussion Board</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Approvals</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Disciplinary Actions</span> </a>
                </li>
        

<?php
}else if($_SESSION['role']=="Proc"){
    ?>

                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Vendor Management</span> </a>
                </li>
        
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Budgeting</span> </a>
                </li>
        
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Request Management</span> </a>
                </li>
        
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Reports</span> </a>
                </li>
        
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Inventory
</span> </a>
                </li>
        
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">PO Management
</span> </a>
                </li>
        
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Invoicing
</span> </a>
                </li>
        
    <?php
}else{
                ?>
               <?php if ($_SESSION['role']=="Admin" || $_SESSION['role']=="Super" ): ?>
                   <li <?php if($page=="create_employee" || $page=="view_employee") echo "class='active'" ?>>
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Employee</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/create_employee">Create</a></li>
                        <li <?php if( $page=="view_employee") echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/view_employee">View</a></li>

                    </ul>
                </li>
                 
                <?php endif ?> 
               

                <li <?php if($page=="create_lead" || $page=="view_lead") echo "class='active'" ?>>
                    <a href="#"><i class="fa fa-list-alt"></i> <span class="nav-label">Leads</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                     
                     <?php if ($_SESSION['role']=="Sales"): ?>
                           <li <?php if($page=="create_lead" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/create_lead">Create</a></li>
                     <?php endif ?>
                      
                     
                        <li <?php if($page=="view_lead" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/view_lead">View</a></li>

                    </ul>
                </li>
                <li <?php if($page=="create_rfq" || $page=="view_rfq") echo "class='active'" ?>>
                    <a href="#"><i class="fa fa-list-alt"></i> <span class="nav-label">RFQ</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                     <?php if ($_SESSION['role']=="Sales" ||$_SESSION['role']=="Finance"): ?>
                          <li <?php if($page=="create_rfq" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/create_rfq">Create</a></li>
                     <?php endif ?>

                        
                        <li <?php if($page=="view_rfq" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/view_rfq">View</a></li>

                    </ul>
                </li>

                <?php if ($_SESSION['role']=="Sales"): ?>
                     <li <?php if( $page=="view_customer") echo "class='active'" ?>>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Customers</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="view_customer" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/view_customer">View</a></li>

                    </ul>
                </li>
                <?php endif ?>
               

                <?php if ($_SESSION['role']=="Finance" || $_SESSION['role']=="Admin"): ?>
                    
          <li <?php if( $page=="create_payment") echo "class='active'" ?>>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Payment</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_payment" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/add_payment">Create</a></li>

                    </ul>
                </li>
         
          <li <?php if( $page=="view_invoice") echo "class='active'" ?>>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Invoice</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="view_invoice" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/f_process_invoice">process</a></li>

                    </ul>
                </li>
         
         
                                <?php endif ?>

             <?php if ($_SESSION['role']=="Admin"): ?>
                 
          <li <?php if( $page=="view_reports") echo "class='active'" ?>>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Reports</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="view_reports" ) echo "class='active'" ?>><a href="<?php echo base_url() ?>admin/view_reports">View</a></li>

                    </ul>
                </li>
         
             <?php endif ?>

             <?php } ?>

             <?php if ($_SESSION['role']=="Sales"): ?>
                           <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Profile</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Leave Balance</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">My Qualifications</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">My Payslips</a></li>

                    </ul>
                </li>


                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Organogram</span> </a>
                </li>

                   <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Training & Development</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Enrollment</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Calendar</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Training Library</a></li>

                    </ul>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Performance Review</span> </a>
                </li>

                   <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">My Requests</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Leave Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Loan Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">IT Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Travel Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Complaints</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Admin Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Reimbursenent Requisition</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Visting Cards Requisition</a></li>

                    </ul>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Calender</span> </a>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Check In/Out Work</span> </a>
                </li>
                 <li >
                    <a href="#"><i class="fa fa-tags"></i> <span class="nav-label">Company Information</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Memo/News</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Company Profile</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Product Profiles</a></li>
                        <li <?php if($page=="create_employee" ) echo "class='active'" ?>><a onclick="alert('Working')">Management Structure</a></li>
                       

                    </ul>
                </li>
                <li >
                    <a href="<?php echo base_url() ?>admin/"><i class="fa fa-bars"></i> <span class="nav-label">Discussion board</span> </a>
                </li>
             <?php endif ?>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <a class=" minimalize-styl-2 btn btn-primary " onclick="window.history.back()"><i class="fa fa-arrow-left"> Back</i> </a>
           <!--  <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo base_url() ?>admin/edit_profile">
                        <i class="fa fa-edit"></i> Edit Profile
                    </a>
                </li><li>
                    <a href="<?php echo base_url() ?>admin/destroy">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>


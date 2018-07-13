
            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="header-title">
                            <h1>View Customers</h1>
                            <small></small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">View Customers</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                    <!-- Form controls -->
                     <div class="panel-body" >
                      <div class="row">
                          <!-- Castomr card -->
                          <?php foreach ($customers as $customer): ?>
                          <div class="col-lg-4">
                            <div class="profile-widget">
                                <div class="panel-body" >
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-circle" src="<?php echo base_url()?>admin_assets/assets/dist/img/avatar.png" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h2 class=""><?php echo $customer['client_name'] ?></h2>
                                            <center><small><?php echo $customer['company_name'] ?></small>
                                            	<div>
                                				<span><?php echo $customer['client_phone'] ?></span> |
                                				<span><?php echo $customer['client_email'] ?></span> |
                                				<span><?php echo $customer['no_of_employees'] ?> Employees</span>
                            					</div>
                                            <!-- <p>03482597713 | talha@gmail.com | 10 Employees</p> -->
                                            </center>

                                        </div>
                                        <div class="pera"  >
                                            <p class="taxt" ><?php echo $customer['client_address'] ?></p>
                                            <a href="<?php echo base_url() ?>admin/view_customer_lead/<?php echo $customer['clientID'] ?>" class="pull-right">View Leads</a>
                                            <!-- <span class="read pull-right" >View Leads</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <?php endforeach ?>
                          <!-- Castomr card -->

                          <!-- Castomr card -->


                      </div>
<div style="height: 250px;"></div>
                    </div>
                    </div>
                </div>
                    </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

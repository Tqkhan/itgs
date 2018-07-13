<?php include "all_scripts.php" ?>
            <!-- /.Left Sidebar-->
            <div class="side-bar right-bar">
                <div class="">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs right-sidebar-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="material-icons">home</i></a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="material-icons">person_add</i></a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="material-icons">chat</i></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade  in active" id="home">
                            <ul id="styleOptions" title="switch styling">
                                <li><b>Dark Skin</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-blue.min"><img src="assets/dist/img/theme-color/1.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-dark.min"><img src="assets/dist/img/theme-color/2.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-red-light.min" class="skin-logo"><img src="assets/dist/img/theme-color/5.jpg" alt=""/></a></li>
                                <li><b>Dark Skin sidebar</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-default.min"><img src="assets/dist/img/theme-color/7.jpg" alt=""/> </a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-red-dark.min"><img src="assets/dist/img/theme-color/6.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-dark-1.min"><img src="assets/dist/img/theme-color/8.jpg" alt=""/></a></li>
                                <li><b>Light Skin sidebar</b></li>
                                <li><a href="javascript: void(0)" data-theme="skin-default-light.min" class="skin-logo"><img src="assets/dist/img/theme-color/3.jpg" alt=""/></a></li>
                                <li><a href="javascript: void(0)" data-theme="skin-white.min"><img src="assets/dist/img/theme-color/4.jpg" alt=""/></a> </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="profile">
                            <h3 class="sidebar-heading">Activity</h3>
                            <div class="rad-activity-body">
                                <div class="rad-list-group group">
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-red pull-left"><i class="fa fa-phone"></i></div>
                                        <div class="rad-list-content"><strong>Client meeting</strong>
                                            <div class="md-text">Meeting at 10:00 AM</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-yellow pull-left"><i class="fa fa-refresh"></i></div>
                                        <div class="rad-list-content"><strong>Created ticket</strong>
                                            <div class="md-text">Ticket assigned to Dev team</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-primary pull-left"><i class="fa fa-check"></i></div>
                                        <div class="rad-list-content"><strong>Activity completed</strong>
                                            <div class="md-text">Completed the dashboard html</div>
                                        </div>
                                    </a>
                                    <a href="#" class="rad-list-group-item">
                                        <div class="rad-list-icon bg-green pull-left"><i class="fa fa-envelope"></i></div>
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
                        <div role="tabpanel" class="tab-pane fade " id="messages">
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
                                        <strong class="inbox-item-author">Mozammel</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Tanzil</strong>
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
                                        <strong class="inbox-item-author">Tahamina</strong>
                                        <span class="inbox-item-date">-13:40 PM</span>
                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                        <strong class="inbox-item-author">Jhon</strong>
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
            <!-- /.Right Sidebar -->
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
                            <h1>NEW RFQ</h1>
                            <small></small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">NEW RFQ</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <!-- Form controls -->
                        <div class="col-sm-12">
                            <div class="panel panel-bd ">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>User Details</h4>
                                    </div>
                                </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="<?php echo base_url() ?>admin/insert_rfq" method="post" name="tech_form" enctype="multipart/form-data">
                            <div class="form-group row">

                                  <label for="example-text-input" class="col-sm-3 col-form-label">Sales Team Memeber
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                   <input type="hidden" name="employeeID" value="<?php echo $_SESSION['login_id'] ?>">
                                  <input type="text" style="color: #000" name="" class="form-control" value="<?php echo $_SESSION['login_name'];?>" placeholder="" readonly required/>

                                  </div>
                            </div>
                        <div class="panel-title">
                            <h4>Client Details</h4>
                            <hr>
                        </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Select Client
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <select class="form-control" name="clientID" id="clientID">
                                                <option value="">Select Client</option>
                                                <?php foreach ($clients as $client): ?>
                                                        <option value="<?php echo $client['clientID'] ?>"><?php echo $client['company_name'] ?></option>
                                                    <?php endforeach ?>
                                            </select>
                                  </div>

                            </div>
                            <div class="form-group row" id="client_name">
                                   <label for="example-text-input" class="col-sm-3 col-form-label">Client Name
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9" >
                                     <input class="form-control" type="text" value="" name="client_name" id="example-text-input" placeholder="Enter client name">
                                  </div>

                            </div>
                            <div class="form-group row" id="client_email">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Client Email
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9" >
                                      <input class="form-control" type="text" value="" name="client_email" id="example-text-input" placeholder="Enter client email">
                                  </div>

                            </div>
                            <div class="form-group row" id="company_name">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Company Name
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9" >
                                      <input class="form-control" type="text" value="" name="company_name" id="example-text-input" placeholder="enter company name">
                                  </div>

                            </div>
                            <div class="form-group row" id="client_phone">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Client Phone Number
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9" >
                                      <input class="form-control" type="text" value="" name="client_phone" id="example-text-input" placeholder="enter phone number">
                                  </div>

                            </div>
                            <div class="form-group row" id="no_of_employees">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">No. of Employees
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9" >
                                      <input class="form-control" type="text" value="" name="no_of_employees" id="example-text-input" placeholder="total number of employees">
                                  </div>

                            </div>
                            <div class="form-group row" id="client_address">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Client Address
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9" >
                                     <textarea class="form-control" name="client_address" id="exampleTextarea" rows="3"></textarea>
                                  </div>
                            </div>
                        <div class="panel-title">
                            <h4>Order Detail</h4>
                            <hr>
                        </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Order Type
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <select class="form-control select" name="order_type">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                  </div>

                            </div>
                            <div class="form-group row">
                                 <label for="example-text-input" class="col-sm-3 col-form-label">Quantity
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <input class="form-control" type="number" name="qty" value="" id="example-text-input" placeholder="enter quantity">
                                  </div>

                            </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Description
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <input class="form-control" type="text" name="description" value="" id="example-text-input" placeholder="enter your first name">
                                  </div>

                            </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Due Date
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <input class="form-control" type="Date" value="req_date" id="example-text-input" placeholder="">
                                  </div>

                            </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Other Notes
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <textarea class="form-control" id="exampleTextarea" name="order_notes" rows="3"></textarea>
                                  </div>

                            </div>
                            <!-- <div class="form-group row">
                                 <label for="example-text-input" class="col-sm-3 col-form-label">Attach File
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <input class="form-control" type="file" name="file" value="" id="example-text-input" placeholder="enter your last name">
                                  </div>

                            </div> -->
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Remarks
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                      <textarea class="form-control" name="remarks" id="exampleTextarea" rows="3" placeholder=""></textarea>
                                  </div>
                            </div>
                            <div class="form-group row">
                            <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>




                    </div>


                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->


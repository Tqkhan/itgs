
            <!-- /.Left Sidebar-->

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
                            <h1>Create Lead</h1>
                            <small></small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Create Lead</li>
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
                        <form  method="POST" id="lead_form" action="<?php echo base_url()?>admin/insert_request" enctype="multipart/form-data">
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Sales Team Memeber
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                      <input type="hidden" name="employeeID" value="<?php echo $_SESSION['login_id'] ?>">
                                                <input type="text" style="color: #000" name="" class="form-control" value="<?php echo $_SESSION['login_name'];?>" placeholder="" readonly required/>
                                  </div>
                            </div>
                        <div class="panel-title">
                            <h4>Client Details</h4>
                            <hr>
                        </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Select Client
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                  <input type="hidden" name="employeeID" value="<?php echo $_SESSION['login_id'] ?>">
                                      <select class="form-control" name="clientID" id="clientID">
                                                <option value="">Select Client</option>
                                                 <?php foreach ($clients as $client): ?>
                                                        <option value="<?php echo $client['clientID'] ?>"><?php echo $client['company_name'] ?></option>
                                                    <?php endforeach ?>
                                            </select>
                                  </div>
                                 <div id="client_name">

                                  <label for="example-text-input" class="col-sm-2 col-form-label">Client Name
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                     <input class="form-control" type="text" value="" name="client_name"  placeholder="Enter client name">
                                  </div>
                                 </div>
                            </div>
                            <div class="form-group row" id="client_email">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Client Email
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4" >
                                      <input class="form-control" type="text" value="" name="client_email"  placeholder="Enter client email">
                                  </div>
                                  <div id="company_name">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Company Name
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4" >
                                      <input class="form-control" type="text" value="" name="company_name"  placeholder="enter company name">

                                  </div>
                                  </div>
                            </div>
                            <div class="form-group row" id="client_phone">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Client Phone Number
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4" >
                                      <input class="form-control" type="text" value="" name="client_phone"  placeholder="enter phone number">
                                  </div>
                                  <div id="no_of_employees">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">No. of Employees
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4" >
                                      <input class="form-control" type="text" value="" name="no_of_employees"  placeholder="total number of employees">
                                  </div>
                                  </div>
                            </div>
                            <div class="form-group row" id="client_address">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Client Address
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-10" >
                                     <textarea class="form-control" name="client_address"  rows="3"></textarea>
                                  </div>
                            </div>
                        <div class="panel-title">
                            <h4>Order Detail</h4>
                            <hr>
                        </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Order Type
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                      <select class="form-control select" name="order_type">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                  </div>
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Quantity
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                      <input class="form-control" type="number" name="qty" value="" id="example-text-input" placeholder="enter quantity">
                                  </div>
                            </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Description
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                      <input class="form-control" type="text" name="description" value="" id="example-text-input" placeholder="enter your first name">
                                  </div>
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Due Date
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                      <input class="form-control" type="Date" name="req_date" value="" id="example-text-input" placeholder="">
                                  </div>
                            </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Other Notes
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                      <textarea class="form-control" name="order_notes" id="exampleTextarea" rows="3"></textarea>
                                  </div>
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Attach File
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-4">
                                      <input class="form-control" type="file" name="file" value="" id="example-text-input" placeholder="enter your last name">
                                  </div>
                            </div>
                            <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-2 col-form-label">Remarks
                                                              <span class="required">*</span></label>
                                  <div class="col-sm-10">
                                      <textarea class="form-control" name="remarks" id="exampleTextarea" rows="3" placeholder=""></textarea>
                                  </div>
                            </div>
                            <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-4">
                                <button type="button" name="submit2" value="Submit Lead"  class="btn btn-primary" id="insert_lead">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>




                    </div>


                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->


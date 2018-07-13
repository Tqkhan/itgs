
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME - ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Leads</a>
                        </li>
                        <li class="active">
                            <strong>Create Leads</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
          
         
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5 style="font-family: calibiri;">NEW LEAD</h5>
                       
                        </div>
                        <div class="ibox-content">
                                 <form class="form-horizontal" id="lead_form" method="post"  enctype="multipart/form-data">
                            <div class="panel panel-default">
                                
                           
                                <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">
                                        <h4><strong>User Details</strong></h4>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Sales Team Memeber</label>
                                                <div class="col-md-6 col-xs-12">
                                                <input type="hidden" name="employeeID" value="<?php echo $_SESSION['login_id'] ?>">
                                                <input type="text" style="color: #000" name="" class="form-control" value="<?php echo $_SESSION['login_name'];?>" placeholder="" readonly required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-xs-12">

                                                </div>
                                            </div>
                                 
                        <h4><strong>Client Details</strong></h4>

                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Select Client</label>
                                                <div class="col-md-6 col-xs-12">
                                                
                                                <select name="clientID" id="clientID" class="select form-control">
                                                    <option value="">Select Client</option>
                                                    <?php foreach ($clients as $client): ?>
                                                        <option value="<?php echo $client['clientID'] ?>"><?php echo $client['company_name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                 </div>
                                            </div>
                                            
                                            <div class="form-group" id="client_name">
                                            OR
                                            <br>
                                                <label class="col-md-3 col-xs-12 control-label" >Client Name</label>
                                                <div class="col-md-6 col-xs-12">
                                                <input type="text" class="form-control" name="client_name" style="color:#000;" value="" placeholder="Enter Client Name"  required/>
                                                 </div>
                                            </div>
                                            <div class="form-group" id="client_email">
                                                <label class="col-md-3 col-xs-12 control-label" >Client Email</label>
                                                <div class="col-md-6 col-xs-12">
                                                     <input type="text" class="form-control" name="client_email" value=""  style="color:#000;" placeholder="Enter Client Email" required/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="company_name">
                                                <label class="col-md-3 col-xs-12 control-label" >Company Name</label>
                                                <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="company_name" value=""  style="color:#000;" placeholder="Enter Company Name" required/>
                                            <p id="company_error"></p>
                                                </div>
                                            </div>
                                            <div class="form-group" id="client_phone">
                                                <label class="col-md-3 col-xs-12 control-label" >Client Phone Number</label>
                                                <div class="col-md-6 col-xs-12">
                                                  <input type="text" class="form-control" name="client_phone" value="" placeholder="Enter Phone Number" required/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="no_of_employees">
                                                <label class="col-md-3 col-xs-12 control-label" >No. of Employees</label>
                                                <div class="col-md-6 col-xs-12">
                                                     <input type="number" class="form-control" name="no_of_employees" value=""  style="color:#000;" placeholder="Total number of Employees" required/>
                                                </div>
                                            </div>
                                            <div class="form-group" id="client_address">
                                                <label class="col-md-3 col-xs-12 control-label" >Client Address</label>
                                                <div class="col-md-6 col-xs-12">
                                                    <textarea class="form-control" rows="2" name="client_address"></textarea>

                                                </div><br />

                                            </div>



                                        </div>

                                        <div class="col-md-6">
                                        <h4><strong>Order Detail</strong></h4>
                                        <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Order Type</label>
                                        <div class="col-md-6">
                                            <select class="form-control select" name="order_type">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                       <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Quantity</label>
                                                <div class="col-md-6 col-xs-12">
                                                     <input type="text" class="form-control" name="qty" value="" placeholder="Enter Quantity" required/>

                                                </div>
                                            </div>

                                              <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Description</label>
                                                <div class="col-md-6 col-xs-12">
                                                    <textarea class="form-control" rows="2" name="description"></textarea>

                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Due Date</label>
                                                <div class="col-md-6 col-xs-12">


                                                   <input type="date" class="form-control" name="req_date" value="" placeholder="" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Other Notes</label>
                                                <div class="col-md-6 col-xs-12">
                                                    <textarea class="form-control" rows="2" name="order_notes"></textarea>
                                                </div>
                                            </div>
                                          <div class="form-group">
                                              <label class="col-md-3 control-label">Attach File</label>
                                              <div class="col-md-6">
                                                  <input type="file" class="fileinput" name="file" id="filename1"/>
                                              </div>

                                              <?php if (isset($error)): ?>
                                                  <p class="label-danger"><?php $error; ?></p>
                                              <?php endif ?>
                                          </div>
                                              <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Remarks</label>
                                                <div class="col-md-6 col-xs-12">
                                            <textarea class="form-control" rows="2" name="remarks"></textarea>
                                                </div>
                                            </div>
                                             <div class="block">
                                    </div>

                                </div>

                                       
                                       <input type="button" name="submit2" value="Submit Lead" class="btn btn-danger pull-right btn_submit"  id="insert_lead"   />



                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
     

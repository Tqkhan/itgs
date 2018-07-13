
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME - ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Employees</a>
                        </li>
                        <li class="active">
                            <strong>Create Employee</strong>
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
                            <h5>Create Employee</h5>
                       
                        </div>
                        <div class="ibox-content">
                         <form id="jvalidate" role="form" class="form-horizontal" method="post" action="<?php echo base_url() ?>admin/insert_employee" enctype="multipart/form-data">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Eployee ID:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Enter Employee ID" value="" name="emp_id" required="required"/>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="login_name" id="name" value="" placeholder="Enter Employee Name" required="required"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee Login ID:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="login" value="" placeholder="Enter Employee Login ID" required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password:</label>
                                        <div class="col-md-9">
                                            <input type="text" value="" name="pass" class="form-control" placeholder="Enter Employee Password" required="required"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Designation:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="designation" value="" placeholder="Enter Employee Designation" required="required"/>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Number:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="contact_no" placeholder="Enter Contact Number" required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">CNIC:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nic" value="" placeholder="Enter CNIC Number" required="required"/>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Select Role</label>
                                        <div class="col-md-6 col-xs-12">
                                            <select class="form-control select" name="role">
                                                <option>Select Any One...</option>
                                                <option value="Admin">Admin</option>
                                                <option value="CSR">CSR</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Sales">Sales Officer</option>
                                                <option value="Finance">Finance Officer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image:</label>
                                        <div class="col-md-9">
                                            <input type="file" value="" name="profile_img" id="profilepic" class="form-control"/>
                                            </div>
                                    </div>
                                    <div class="btn-group pull-right">

                                        <button class="btn btn-primary" type="submit"  >Submit
                                         </button>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

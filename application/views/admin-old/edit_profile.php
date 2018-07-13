
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
                            <strong>Edit Profile</strong>
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
                            <h5>Edit Employee</h5>
                     
                        </div>
                        <div class="ibox-content">
                         <form id="jvalidate" role="form" class="form-horizontal" method="post" action="<?php echo base_url() ?>admin/update_employee" enctype="multipart/form-data">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee ID:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Enter Employee ID" name="emp_id" value="<?php echo $profile['emp_id'] ?>" required="required"/>
                                            </div>
                                    </div>
                                    <input type="hidden" name="login_id" value="<?php echo $_SESSION['login_id'] ?>">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="login_name" id="name"  placeholder="Enter Employee Name" value="<?php echo $profile['login_name'] ?>" required="required"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee Login ID:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="login" placeholder="Enter Employee Login ID" value="<?php echo $profile['login'] ?>" required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password:</label>
                                        <div class="col-md-9">
                                            <input type="text" name="pass" class="form-control" placeholder="Enter Employee Password" value="<?php echo $profile['pass'] ?>" required="required"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Designation:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="designation" placeholder="Enter Employee Designation" value="<?php echo $profile['designation'] ?>" required="required"/>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Contact Number:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="contact_no" placeholder="Enter Contact Number" value="<?php echo $profile['contact_no'] ?>" required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">CNIC:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nic" placeholder="Enter CNIC Number" value="<?php echo $profile['nic'] ?>" required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image:</label>
                                        <div class="col-md-9">
                                        <?php if ($profile['profile_img']!=""): ?>
                                            <img src="<?php echo base_url() ?>uploads/profile/<?php echo $profile['profile_img']  ?>" alt="" class="img-responsive img-square">
                                        <?php endif ?>
                                            <input type="file" value="" name="profile_img" id="profilepic" class="form-control"/>
                                            </div>
                                    </div>
                                    <div class="btn-group pull-right">

                                        <button class="btn btn-primary" type="submit"  >Update
                                         </button>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

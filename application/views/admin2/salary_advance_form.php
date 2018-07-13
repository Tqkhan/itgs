<?php 
$emp = $employee[0];
?>
            <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon style="margin-top: -9px;">
                            <i class="pe-7s-note"></i>
                        </div>
                        <div class=header-title>
                            <h1>Salary Addvance Form</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Salary Addvance Form</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Salary Addvance Application Form</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/add_salary_advance') ?>">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Employee's ID</label>
                                        <input type="text" class="form-control" id="" name="employee_id" value="<?php echo $emp['employee_id'] ?>"   placeholder="itgs-002" readonly="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Employee's Full Name</label>
                                            <input type="text" class="form-control" id=""  value="<?php echo $emp['employee_name'] ?>" placeholder="Umer" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Department</label>
                                        <input type="text" class="form-control" value="<?php echo $emp['department'] ?>" placeholder="Department" readonly="">
                                        </div>
                                       
                                        <div class="form-group col-lg-6">
                                            <label for="">Designation</label>
                                            <input type="text" class="form-control" value="<?php echo $emp['designation'] ?>" placeholder="Designation" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Joining Date</label>
                                        <input type="date" name="joining_date" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Application Date</label>
                                            <input type="date" name="application_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Requested Advance Amount</label>
                                        <input type="text" name="requested_advance_amount" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Reason for Advance Salary</label>
                                            <textarea class="form-control" name="reason_for_advance_salary" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                            
                                
                                   
                                    
                                   
                                   
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   </div>
                   </div>
                   </div>
                   </div> <!-- /.main content -->
                   <div style="height: 250px;"></div>
                </div>

    </div>


            </div>


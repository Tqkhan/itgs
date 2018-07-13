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
                            <h1>Requisition For Visiting Card</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Requisition For Visiting Card</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Requisition For Visiting Card</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/add_visiting_card') ?>">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Employee's ID</label>
                                        <input type="text" class="form-control" id="" name="employee_id" value="<?php echo $emp['employee_id'] ?>"  placeholder="itgs-002" readonly="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Employee's Full Name</label>
                                            <input type="text" class="form-control" id="" value="<?php echo $emp['employee_name'] ?>"  placeholder="Umer" readonly="">
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
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobile_number" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Email ID</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Company Name & Address</label>
                                        <input type="text" class="form-control" name="company_name" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Fax Number</label>
                                            <input type="text" name="fax_number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Website</label>
                                        <input type="text" name="website" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">No of Cards Required</label>
                                            <input type="number" name="no_of_cards" class="form-control">
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


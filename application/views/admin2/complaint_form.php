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
                            <h1>Employee Complaint Form</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Employee Complaint Form</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Employee Complaint Form Form</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/add_complaint') ?>">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Employee's ID</label>
                                        <input type="text" class="form-control" name="employee_id" value="<?php echo $emp['employee_id'] ?>"  id=""  placeholder="itgs-002" readonly="">
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
                                        <label for="">Date</label>
                                        <input type="date" name="date" class="form-control">
                                        </div>
                                       
                                        <div class="form-group col-lg-6">
                                            <label for="">Status</label>
                                            <input type="text" name="status" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Contact #</label>
                                        <input type="text" name="contact" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Date of Incident </label>
                                            <input type="date" name="date_of_incident" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Time of Incident </label>
                                        <input type="time" name="time_of_incident" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Location of Incident </label>
                                            <input type="test" name="location_of_incident" class="form-control" id=""  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                            <label for="">Nature of Incident </label>
                                            <input type="test" name="nature_of_incident" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Please describe the specific act(s)  </label>
                                            <textarea class="form-control" name="describe_the_specific" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                            
                                
                                     
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Home Phone</label>
                                        <textarea class="form-control" name="home_phone" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Cell Phone</label>
                                            <input type="text" name="cell_phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                            <label for="">Send To</label>
                                            <select class="form-control" name="send">
                                                <option>Select Options</option>
                                                <option value="CM">HOD</option>
                                                <option value="Hr">HR</option>
                                                <option value="Admin">CEO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="" style="font-weight: 600;">Are there others who have witnessed this behavior or others who have experienced a similar concern or problem? If so, please provide their name(s) and phone numbers.</label>
                                        <textarea class="form-control" id="exampleTextarea" name="witnessed" rows="2"></textarea>
                                        </div>
                                        
                                    </div>  
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="" style="font-weight: 600;">Do you have any suggestion for proposed action to address or resolve the complaint/concern?</label>
                                        <textarea class="form-control" id="exampleTextarea" name="suggestion" rows="2"></textarea>
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
                </div>

    </div>


            </div>


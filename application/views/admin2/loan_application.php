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
                            <h1>Employee Loan Application</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Employee Loan Application</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Employee Loan Application Form</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/add_loan') ?>">
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
                                        <label for="">Joining Date</label>
                                        <input type="date" name="joining_date" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Loan Application Date</label>
                                            <input type="date" name="loan_application_date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Requested Loan Amount</label>
                                        <input type="number" name="requested_loan_amount" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Reason for Loan</label>
                                            <textarea class="form-control" name="reason_for_loan" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                            
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Monthly Deduction</label>
                                        <input type="text" class="form-control" readonly="" name="monthly_deduction" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Requested Pay Back Period</label><small> (maximum 6 months);</small>
                                            <select class="form-control" name="pay_back_period" id="exampleSelect1">
                                                <option value="1">1 month</option>
                                                <option value="2">2 months</option>
                                                <option value="3">3 months</option>
                                                <option value="4">4 months</option>
                                                <option value="5">5 months</option>
                                                <option value="6">6 months</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="panel-title col-lg-12">
                <h4 style="margin-left: -20px;">Permanent Address</h4>
                 <div style="/* line-height: 51px; */background-color: black;border: 2px;border-color: black;height: 1px;margin-bottom: 4px;margin-top: -7px; width: 903px; margin-left: -20px;"></div>
            </div>
                                 <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Address</label>
                                        <textarea class="form-control" name="address" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control">
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
                                        <label for="" style="font-weight: 600;">If you have been displaced, please provide your temporary address and contact information</label>
                                        <textarea class="form-control" name="temporary_address" id="exampleTextarea" rows="2"></textarea>
                                        </div>
                                        
                                    </div> 
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>The approval process includes a review of the applicants standing with the ITGS length of service and annual compensation. Applications may not be approved for the full amount requested.</p>
                                            <p><strong>Applications will not be approved under certain circumstances including the following:</strong></p>
                                            <ul>
                                                <li>The employee’s continuing employment is not secure</li>
                                                <li>The employee is under disciplinary action</li>
                                                <li>There are any previous outstanding debts</li>
                                                <li>Employees, who separate before the loan is paid, must pay the remaining balance by the last day of employment.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12" style="background: #bdb4b4; border-radius: 4px; height: 27px;">
                                       <center>
                                            <strong><h3 style="margin-top: 2px; color: #374767; font-weight: 900px;">PROMISSORY NOTE</h3></strong>
                                        </address>
                                        </div>    
                                    </div>
                                    <div class="row" style="text-align: justify;     margin-top: 11px;">
                                        <div class="col-sm-12">
                                            <p>I agree that the application shall remain the property of the ITGS whether or not the loan is granted. I affirm that I know reason or condition that would prevent me from repaying this loan and that I do not presently have an outstanding debt to ITGS. I further understand that regularly scheduled payments are required even if I do not receive my salary, and if my employment terminates either voluntarily or involuntarily before this loan is paid,</p>
                                            <p>I promise that the amount remaining shall be paid in full as of the last day of my employment. If the loan is not paid in full prior to separation, the Company has the right to withhold the balance due from salary.</p>
                                            <p>I authorize Ingenioustribe Global Solutions (Pvt.) Ltd. to obtain such information as it may reasonably require relative to this application, including a credit history. I understand that approval of this loan does not constitute a promise of continued employment.
                                            </p>
                                           
                                        </div>
                                    </div>
                                    <address>
                                                <strong>Employee's Full Name</strong><br>
                                                <div class="row">
                                                   <div class="col-lg-3">
                                                        <input type="text" class="form-control"  value="<?php echo $emp['employee_name'] ?>"  placeholder="Umer" readonly="">
                                                   </div>
                                                </div>
                                               
                                            </address>
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

<script type="text/javascript">
    $('[name="pay_back_period"]').change(function() {
        var month = $(this).val()
        var amount = $('[name="requested_loan_amount"]').val()
        $('[name="monthly_deduction"]').val(parseInt(amount / month))
    })
    $('[name="requested_loan_amount"]').keyup(function() {
        var amount = $(this).val()
        var month = $('[name="pay_back_period"]').val()
        $('[name="monthly_deduction"]').val(parseInt(amount / month))
    })
</script>


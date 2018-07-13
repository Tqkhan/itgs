<?php 
$emp = $employee[0];
?>
  <style type="text/css">
        input[type="date"]:not(.has-value):before{
  color: lightgray;
  content: attr(placeholder);
}
</style>
          <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon style="margin-top: -9px;">
                            <i class="pe-7s-note"></i>
                        </div>
                        <div class=header-title>
                            <h1>Leave Request Form</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Leave Request Form</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Leave Request Form</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <form method="post" action="<?php echo base_url('admin/add_leave') ?>">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Employee's ID</label>
                                        <input type="text" class="form-control" name="employee_id" value="<?php echo $emp['employee_id'] ?>" id=""  placeholder="itgs-002" readonly="">
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
                                        <label for="">Requested Date</label>
                                        <input type="date" class="form-control" name="requested_date" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Employment Status</label>
                                        <input type="text" class="form-control" id="" name="status" value="<?php echo $emp['status'] ?>"  placeholder="Employment Status" readonly="">
                                        <!-- <select class="form-control" name="status">
                                            <option value="">Select Status</option>
                                            <option value="Intern">Intern</option>
                                            <option value="Contractual">Contractual</option>
                                            <option value="Probation">Probation</option>
                                            <option value="Permanent">Permanent</option>
                                        </select> -->
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                    <div class="form-group col-lg-6">
                                            <label for="">Nature of leave</label>
                                            <select class="form-control" name="nature_of_leave" id="exampleSelect1">
                                                <option value="annual">Annual</option>
                                                <option value="Casual">Casual</option>
                                                <option value="Sick">Sick</option>
                                                <option value="No Pay">No Pay</option>
                                                <option value="Matemity">Maternity</option>
                                                <option value="Half Day">Half Day</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Remarks</label>
                                            <textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Start Date</label>
                                        <input type="date" class="form-control fromdate" name="start_date" id="date1" >
                                            </div><div class="form-group col-lg-6">
                                                <label for="">End Date</label>
                                        <input type="date" class="form-control todate" name="end_date" id="date2" >
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Total Days</label>
                                            <input type="text" class="form-control calculated" name="total_days" id="calculated">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                            <label for="">Remarks</label>
                                            <textarea class="form-control" id="exampleTextarea" name="remarks" rows="2"></textarea>
                                        </div>
                                    </div>
                            
                                    
                                  
                                    </div>
                                    </div>  
                                    
                                   <div class="col-sm-12">
                                            <ul>
                                                <li>Leave will not normally granted if applicant is not submitted 48hours in advance, except sick leave.</li>
                                                <li>Application for annual leave should be submitted 15days before leave commences.</li>
                                                <li>Other than annual leave, please attach supporting documents for reference.</li>
                                                <li>Failure of applicants to resume duty after the leave period will be deemed negligence of duty and may be subject to summary dismissal by the company.</li>
                                            </ul>
                                            
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    
                                        </div>
                                   
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
$(document).ready(function () {
    var selector = function (dateStr) {
            var start = new Date($('.fromdate').val()),
            end   = new Date($('.todate').val()),
            diff  = new Date(end - start),
            days  = diff/1000/60/60/24;
            console.log(days)
            $('.calculated').val(days + 1);
        }

    $('.fromdate,.todate').change(selector)
    $('.fromdate').change(function() {
        $('.todate').attr('min', $(this).val())
    })
    $('[name="nature_of_leave"]').change(function() {
        if($(this).val() == 'Half Day'){
            $('.todate').parent().hide();
            $('.calculated').parent().hide();
        }
        else{
            $('.todate').parent().show();
            $('.calculated').parent().show();
        }
    })
});
</script>

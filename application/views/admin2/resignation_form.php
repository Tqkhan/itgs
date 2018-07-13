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
                            <h1>Resignation Form</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Resignation Form</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Resignation Form</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                <form method="post" action="">
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
                                        <input type="text" class="form-control" id="" value="<?php echo $emp['status'] ?>"  placeholder="Employment Status" readonly="">
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
                                        <div class="form-group col-lg-12">
                                            <label for="">Remarks</label>
                                            <textarea class="form-control" id="exampleTextarea" name="remarks" rows="2"></textarea>
                                        </div>
                                    </div>
                            
                                    
                                  
                                    </div>
                                    </div>  
                                    
                                   <div class="col-sm-12">
                                            
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

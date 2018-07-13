
            <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon style="margin-top: -9px;">
                            <i class="pe-7s-note"></i>
                        </div>
                        <div class=header-title>
                            <h1>Admin Creation</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Admin Creation</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Create Admin Form</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">
                                
                                <form method="post" action="<?php echo base_url() ?>admin/insert_employee_admin">
                                    <input type="hidden" name="request_id" value="<?php echo $employee['employee_id'] ?>">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Employee ID</label>
                                        <input type="text" class="form-control" id="" value="<?php echo $employee['employee_code'] ?>"  placeholder="" required name="employee_id">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" value="<?php echo $employee['full_name'] ?>" name="employee_name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Designation</label>
                                        <input type="text" name="designation" value="<?php echo $employee['designation'] ?>" class="form-control" id=""  placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Department</label>
                                            <input type="text" name="department" value="<?php echo $employee['department'] ?>" class="form-control" required>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="email" name="login_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Login Password</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                <input type="password" id="test1"  class="form-control" name="password" required><input id="test2" type="checkbox" /><small id="emailHelp" class="text-muted">Show password</small>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                        $('#phone-number', '#example-form')

  .keydown(function (e) {
    var key = e.charCode || e.keyCode || 0;
    $phone = $(this);

    // Auto-format- do not expose the mask as the user begins to type
    if (key !== 8 && key !== 9) {
      if ($phone.val().length === 4) {
        $phone.val($phone.val() + ')');
      }
      if ($phone.val().length === 5) {
        $phone.val($phone.val() + ' ');
      }     
      if ($phone.val().length === 9) {
        $phone.val($phone.val() + '-');
      }
    }

    // Allow numeric (and tab, backspace, delete) keys only
    return (key == 8 || 
        key == 9 ||
        key == 46 ||
        (key >= 49 && key <= 58) ||
        (key >= 96 && key <= 105)); 
  })
  
  .bind('focus click', function () {
    $phone = $(this);
    
    if ($phone.val().length === 0) {
      $phone.val('+(');
    }
    else {
      var val = $phone.val();
      $phone.val('').val(val); // Ensure cursor remains at the end
    }
  })
  
  .blur(function () {
    $phone = $(this);
    
    if ($phone.val() === '(') {
      $phone.val('');
    }
  });
  
(function ($) {
    $.toggleShowPassword = function (options) {
        var settings = $.extend({
            field: "#password",
            control: "#toggle_show_password",
        }, options);

        var control = $(settings.control);
        var field = $(settings.field)

        control.bind('click', function () {
            if (control.is(':checked')) {
                field.attr('type', 'text');
            } else {
                field.attr('type', 'password');
            }
        })
    };
}(jQuery));

//Here how to call above plugin from everywhere in your application document body
$.toggleShowPassword({
    field: '#test1',
    control: '#test2'
});
                      </script>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Role</label>
                                        <select class="form-control" id="exampleSelect1" name="role" required>
                                                <option>Pelase Select</option>
                                                <option value="TL" <?php if ($employee['role'] == 'TL') echo 'selected'; ?>>TL</option>
                                                <option value="CM" <?php if ($employee['role'] == 'CM') echo 'selected'; ?>>CM</option>
                                                <option value="TM" <?php if ($employee['role'] == 'TM') echo 'selected'; ?>>TM</option>
                                                <option value="Manager" <?php if ($employee['role'] == 'Manager') echo 'selected'; ?>>Manager</option>
                                                <option value="IT Executive" <?php if ($employee['role'] == 'IT Executive') echo 'selected'; ?>>IT Executive</option>
                                                <option value="Manager Finance" <?php if ($employee['role'] == 'Manager Finance') echo 'selected'; ?>>Manager Finance</option>
                                                <option value="Internal Auditor" <?php if ($employee['role'] == 'Internal Auditor') echo 'selected'; ?>>Internal Auditor</option>
                                                <option value="vendor" <?php if ($employee['role'] == 'vendor') echo 'selected'; ?>>Vendor</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6">
                                        <label for="">Report To</label>
                                        <select class="form-control" id="exampleSelect1" name="report_to" required>
                                                <option>Pelase Select</option>
                                                <option value="Ceo" <?php if($employee['employee_report'] == 'Ceo') echo 'selected' ?>>Ceo</option>
                                                <?php
                                                    foreach ($employees as $emp) {
                                                        if ($employee['employee_report'] == $emp['id']) {
                                                            echo '<option value="'.$emp['id'].'" selected>'.$emp['employee_name'].'</option>';
                                                        }
                                                        else{
                                                            echo '<option value="'.$emp['id'].'">'.$emp['employee_name'].'</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
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


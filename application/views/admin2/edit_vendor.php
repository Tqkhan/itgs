<?php $vendor = $vendor[0]; ?>
            <div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon style="margin-top: -9px;">
                            <i class="pe-7s-note"></i>
                        </div>
                        <div class=header-title>
                            <h1>Edit Vendor</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Edit Vendor</li>

                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Edit Vendor</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body">

                                <form method="post" action="<?php echo base_url() ?>admin/update_vendor">
                                    <input type="hidden" name="id" value="<?php echo $vendor['id'] ?>">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Vendor Name</label>
                                        <input type="text" class="form-control" id=""  placeholder="" required name="employee_name" value="<?php echo $vendor['employee_name'] ?>">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Vendor Company Name:</label>
                                            <input type="text" class="form-control" name="department" value="<?php echo $vendor['department'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">User Name</label>
                                        <input type="text" name="username" class="form-control" id="" value="<?php echo $vendor['username'] ?>"  placeholder="" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Password</label>
                                            <input type="password" name="password" class="form-control" value="<?php echo $vendor['password'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">@</span>
                                                <input type="email" name="login_name" value="<?php echo $vendor['login_name'] ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Address</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class=""></i></span>
                                                <input type="text" id="test1"  value="<?php echo $vendor['address'] ?>" class="form-control" name="address" required>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Contact (Mobile)</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                                <input type="number" name="contactm" value="<?php echo $vendor['contactm'] ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Contact (Landline)</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class=""></i></span>
                                                <input type="number" id="test1"  value="<?php echo $vendor['contactl'] ?>" class="form-control" name="contactl" required>
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


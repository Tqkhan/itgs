<style type="text/css">
    /* male femail radio*/
.inline{
  display: inline-block;
}

.rad{
  color:#999;
  font-size:13px;
  position:relative;
}
.rad span{
  position:relative;
   padding-left:20px;
}
.rad span:after{
  content:'';
  width:15px;
  height:15px;
  border:3px solid;
  position:absolute;
  left:0;
  top:1px;
  border-radius:100%;
  -ms-border-radius:100%;
  -moz-border-radius:100%;
  -webkit-border-radius:100%;
  box-sizing:border-box;
  -ms-box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
}
.rad input[type="radio"]{
   cursor: pointer;
  position:absolute;
  width:100%;
  height:100%;
  z-index: 1;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
}
.rad input[type="radio"]:checked + span{
  color:#0B8;
}
.rad input[type="radio"]:checked + span:before{
    content:'';
  width:5px;
  height:5px;
  position:absolute;
  background:#0B8;
  left:5px;
  top:6px;
  border-radius:100%;
  -ms-border-radius:100%;
  -moz-border-radius:100%;
  -webkit-border-radius:100%;
}
.margen{
    margin-left: 10px;
}
.s{
    margin-left: 8px;
}
.r{
    margin-left: 60px;
}
</style>
<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
<!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Client Creation Form</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Client Creation Form</li>
                </ol>
            </div>
        </div> <!-- /. Content Header (Page header) -->

        <form  id="example-form" method="post" action="<?php echo base_url() ?>admin/client_creation_insert" enctype="multipart/form-data">

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Create Client</h4>
                        </div>
                    </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Client Name<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="client_name" value="" id="example-text-input" placeholder="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Username<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="login_name" value="" id="example-text-input" placeholder="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Password<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="password field should contain first letter Capital with some special characters or numbers i.e. (ExamplE@123)" name="password" value="" id="test1" placeholder="" required=""><input id="test2" type="checkbox" />
                            <small id="emailHelp" class="text-muted">Show password</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Client Code<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="abbreviation" value="" id="example-text-input" placeholder="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Address<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="address" value="" id="example-text-input" placeholder="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Country / Region</label>
                        <div class="col-sm-9">
                            <select name="country_id" id="" class="form-control" required="">
                              <option value="">Select Country</option>
                              <?php foreach ($countries as $country): ?>
                                <option value="<?php echo $country['id'] ?>-<?php echo $country['country_code'] ?>"><?php echo $country['country_name'] ?>- <?php echo $country['country_code'] ?></option>
                              <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Contact<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="client_contact" value="" id="phone-number" maxlength="20" placeholder="" required="">
                        </div>
                        <script type="text/javascript" src="jquery.maskedinput-1.3.min.js"></script>
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
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="email" name="email" value="" id="example-text-input" placeholder="" required="">
                        </div>
                    </div>
                    <div class="form-group row after-add-sub">

                        <label for="example-text-input" class="col-sm-3 col-form-label">Notification Email<span class="required">*</span></label>
                        <div class="col-sm-7 ">
                           <input type="text" name="notification_email[]" class="form-control">

                        </div>
                        <div class="col-lg-2 delet">
                            <button type="button" class="add-sub btn btn-success ">Add More</button>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Website<span class="required">*</span></label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="website" value="" id="example-text-input" placeholder="" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Assign Manager</label>
                        <div class="col-sm-9">
                            <select name="employee_id" id="" class="form-control" required="">
                              <option value="">Select Employee</option>
                              <?php foreach ($employees as $employee): ?>
                                <option value="<?php echo $employee['id'] ?>"><?php echo $employee['employee_name'] ?></option>
                              <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Reg No<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="reg_num" value="" id="example-text-input" placeholder="" required="">
                        </div>
                        <label for="example-text-input" class="col-sm-2 col-form-label">Tax No<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="tax_num" value="" id="example-text-input" placeholder="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Client Services<span class="required">*</span></label>
                        <div class="col-sm-3 checkbox checkbox-primary s">
                          <?php
                            $scount=1;
                           foreach ($services as $service): ?>
                            <input id="checkbox<?php echo $scount ?>" class="r" type="checkbox" value="<?php echo $service['service_name'] ?>" name="service_id[]">
                                <label for="checkbox<?php echo $scount ?>" class="r" ><?php echo $service['service_name'] ?></label>
                          <?php
                            $scount++;
                          endforeach ?>


                        </div>
                        <label for="example-text-input" class="col-sm-2 col-form-label">Type<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <label class="rad inline">
                                  <input type="radio" name="client_type" value="INT" checked>
                                  <span> International </span>
                               </label>
                              <label class="rad inline margen">
                                  <input type="radio" name="client_type" value="LC">
                                  <span> Local </span>
                              </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Contract Start Date<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="contract_start_date" value="" id="txtFromDate" placeholder="" required="">
                        </div>
                        <label for="example-text-input" class="col-sm-2 col-form-label">Contract End Date<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="contract_end_date" value="" id="txtToDate" placeholder="" required="">
                        </div>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function(){
    $("#txtFromDate").datepicker({
        numberOfMonths: 2,
        onSelect: function(selected) {
          $("#txtToDate").datepicker("option","minDate", selected)
        }
    });
    $("#txtToDate").datepicker({
        numberOfMonths: 2,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
        }
    });
});
                    </script>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">ERP Registration Date<span class="required">*</span></label>
                        <div class="col-sm-3">
                            <input class="form-control" type="date" min="<?php echo date('Y-m-d',strtotime("+0 days"))?>" name="reg_date" value="" id="example-text-input" placeholder="" required="">
                        </div>
                        <label for="example-text-input" class="col-sm-2 col-form-label">Status<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <label class="rad inline">
                                  <input type="radio" name="status" value="1" checked>
                                  <span> Active </span>
                               </label>
                              <label class="rad inline margen">
                                  <input type="radio" name="status" value="0">
                                  <span> Blocked </span>
                              </label>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="example-text-input" class="col-sm-3 col-form-label">Create Sub Account<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <label class="rad inline">
                                  <input type="radio" name="sub_account" value="1" >
                                  <span> Yes </span>
                               </label>
                              <label class="rad inline margen">
                                  <input type="radio" name="sub_account" value="0" checked>
                                  <span> No </span>
                              </label>
                              <label class="rad inline margen">
                                  <input type="radio" name="is_parent" value="1" >
                              </label>
                              <label class="rad inline margen">
                                  <input type="radio" name="is_parent" value="0" checked >
                              </label>
                        </div>
                        <br><br><br>
                        <hr>
                        <div class="col-sm-12 lobipanel-parent-sortable ui-sortable" >
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="footable table table-hover footable-loaded">
                                            <thead>
                                                <tr>
                                                <th class="footable-sortable">
<span class="checkbox checkbox-primary">
                    <input id="scopecheck59" type="checkbox" class="check-all">
                    <label for="scopecheck59"></label>
                </span>
                                                  Check<span class="footable-sort-indicator"></span></th>
                                                    <th class="footable-sortable">Product Name<span class="footable-sort-indicator"></span></th>
                                                    <th class="footable-sortable">Price ($)<span class="footable-sort-indicator"></span></th>
                                                    <th class="footable-sortable">TAT (Days)<span class="footable-sort-indicator"></span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                       <?php
                                        $scopecount=1;
                                       foreach ($scopes as $scope): ?>
                                              <tr class="footable-even" style="display: table-row;">
                <td><span class="checkbox checkbox-primary">
                    <input id="scopecheck<?php echo $scopecount?>" type="checkbox" name="scope_id[]" value="<?php echo $scope['id'] ?>">
                    <label for="scopecheck<?php echo $scopecount?>"></label>
                </span></td>
                                  <td><span class="footable-toggle"></span><?php echo $scope['scope_name'] ?> </td>
                                  <td><input type="text" class="price_name"></td>
                                  <td><input type="text" class="avg_name"></td>

                                                </tr>
                                       <?php

                                        $scopecount++;
                                       endforeach ?>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <div class="form-group row">

                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>






                </div>
                </div>
            </div>
        </div>
       </form>
    </div>
</div>


</div> <!-- /.main content -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<!-- START CORE PLUGINS -->

<script>
  $('.check-all').click(function() {
    if($(this).is(':checked')){
      //alert('1')
      $('[name="scope_id[]"]').each(function() {
        if($(this).is(':checked')){
          $(this).click()
        }
      })
      $('[name="scope_id[]"]').click()
    }
    else{
      $('[name="scope_id[]"]').each(function() {
        if(!$(this).is(':checked')){
          $(this).click()
        }
      })
      $('[name="scope_id[]"]').click()
    }
    //$('[name="scope_id[]"]').click()
  })
    //$('.price_name').attr('name', '')
    //$('.avg_name').attr('name', '')
    $('[name="scope_id[]"]').click(function(){
      // var ch = $('[name="scope_id[]"]:checked').length
      // var total = $('[name="scope_id[]"]').length
      // if(ch != total){
      //   $('.check-all').removeAttr('checked')
      // }
        if($(this).is(':checked')){
            $(this).parent().parent().parent().find('.price_name').attr('name', 'price[]')
            $(this).parent().parent().parent().find('.avg_name').attr('name', 'avg_tat[]')
        }
        else{
            $(this).parent().parent().parent().find('.price_name').attr('name', '')
            $(this).parent().parent().parent().find('.avg_name').attr('name', '')
        }
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $("body").on("click",".add-sub",function(){
        var html = $(".after-add-sub").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".after-add-sub").last().after(html);
        $(".after-add-sub").last().find('input').not('input[type="radio"]').val('')
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-sub").remove();
    });
});
</script>
<?php $sub_client= $client[0] ?>

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
						<div class="header-icon" style="margin-top: -9px;">
								<i class="pe-7s-user"></i>
						</div>
						<div class="header-title">
								<h1>Client Edit Form</h1>
								<small></small>
								<ol class="breadcrumb">
										<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
										<li class="active">Client Edit Form</li>
								</ol>
						</div>
				</div> <!-- /. Content Header (Page header) -->

				<form method="post" id="example-form" action="<?php echo base_url() ?>admin/update_sub_client" enctype="multipart/form-data">
<input type="hidden" name="client_id" value="<?php echo $sub_client['client_id'] ?>">
				<div class="row">
						<div class="col-sm-12">
								<div class="panel panel-bd ">
										<div class="panel-heading">
												<div class="panel-title">
														<h4>Edit Client</h4>
												</div>
										</div>
								<div class="panel-body">
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Parent Client<span class="required">*</span></label>
												<div class="col-sm-9">
														<select name="parent_id" class="form-control select" type="text" id="example-text-input" required="">
														    <option>Select Parent Client </option>
														    <?php foreach ($clients as $client): ?>
                                                   <option value="<?php echo $client['client_id'] ?>" <?php if($sub_client['parent_id'] == $client['client_id']) echo 'selected' ?>><?php echo $client['client_name'] ?></option>
                                               <?php endforeach ?>
														</select>
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Client Name<span class="required">*</span></label>
												<div class="col-sm-9">
														<input class="form-control" type="text" name="client_name" value="<?php echo $sub_client['client_name'] ?>" id="example-text-input" placeholder="" required="">
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Username<span class="required">*</span></label>
												<div class="col-sm-9">
														<input class="form-control" type="text" name="login_name" value="<?php echo $sub_client['login_name'] ?>" id="example-text-input" placeholder="" required="">
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Password<span class="required">*</span></label>
												<div class="col-sm-9">
							<input class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="password field should contain first letter Capital with some special characters or numbers i.e. (ExamplE@123)" name="password" value="<?php echo $sub_client['password'] ?>" id="test1" placeholder="" required=""><input id="test2" type="checkbox" />
                            <small id="emailHelp" class="text-muted">Show password</small>
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Abbreviation<span class="required">*</span></label>
												<div class="col-sm-9">
														<input class="form-control" type="text" name="abbreviation" value="<?php echo $sub_client['abbreviation'] ?>" id="example-text-input" placeholder="" required="">
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Address<span class="required">*</span></label>
												<div class="col-sm-9">
														<input class="form-control" type="text" name="address" value="<?php echo $sub_client['address'] ?>" id="example-text-input" placeholder="" required="">
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Country / Region</label>
												<div class="col-sm-9">
														<select name="country_id" id="" required="" class="form-control">
															<option value="">Select Country</option>
															<?php foreach ($countries as $country): ?>
																<option value="<?php echo $country['id'] ?>-<?php echo $country['country_code'] ?>" <?php if($sub_client['country_id'] == $country['id']) echo 'selected' ?>><?php echo $country['country_name'] ?>- <?php echo $country['country_code'] ?></option>
															<?php endforeach ?>
														</select>
												</div>
										</div>
<div class="form-group row">
<label for="example-text-input" class="col-sm-3 col-form-label">Contact<span class="required">*</span></label>
<div class="col-sm-3">
<input class="form-control" type="text" name="client_contact" value="<?php echo $sub_client['client_contact'] ?>" id="phone-number" maxlength="20" placeholder="" required="">
</div>
<label for="example-text-input" class="col-sm-2 col-form-label">Email<span class="required">*</span></label>
<div class="col-sm-4">
<input class="form-control" type="email" name="email" value="<?php echo $sub_client['email'] ?>" id="example-text-input" placeholder="" required="">
</div>
										</div>
										<?php 
                      $notification_email = explode(',', $client['notification_email']);
                      for ($i=0; $i < sizeof($notification_email); $i++) { 
                    ?>
                    <div class="form-group row after-add-sub">

                        <label for="example-text-input" class="col-sm-3 col-form-label">Notification Email<span class="required">*</span></label>
                        <div class="col-sm-7 ">
                           <input type="text" name="notification_email[]" class="form-control" value="<?php echo $notification_email[$i] ?>">

                        </div>
                        <?php 
                          if ($i == 0) {
                        ?>
                        <div class="col-lg-2 delet">
                            <button type="button" class="add-sub btn btn-success ">Add More</button>
                        </div>
                        <?php } else { ?>
                        <div class="col-lg-2 delet">
                          <a class="btn btn-danger remove"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>  <a class="btn btn-success add-sub"><strong> + </strong> </a>
                        </div>
                        <?php } ?>

                    </div>
                    <?php } ?>
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
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Website<span class="required">*</span></label>
												<div class="col-sm-9">
														<input class="form-control" type="text" name="website" pattern="www.+.com" value="<?php echo $sub_client['website'] ?>" id="example-text-input" placeholder="" required="">
												</div>
										</div>

										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Assign Manager</label>
												<div class="col-sm-9">
														<select name="employee_id" id="" class="form-control">
															<option value="">Select Employee</option>
															<?php foreach ($employees as $employee): ?>
																<option value="<?php echo $employee['id'] ?>" <?php if($employee['id'] == $sub_client['employee_id']) echo 'selected' ?>><?php echo $employee['employee_name'] ?></option>
															<?php endforeach ?>
														</select>
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Reg No<span class="required">*</span></label>
												<div class="col-sm-3">
														<input class="form-control" type="text" name="reg_num" value="<?php echo $sub_client['reg_num'] ?>" id="example-text-input" placeholder="">
												</div>
												<label for="example-text-input" class="col-sm-2 col-form-label">Tax No<span class="required">*</span></label>
												<div class="col-sm-4">
														<input class="form-control" type="text" name="tax_num" value="<?php echo $sub_client['tax_num'] ?>" id="example-text-input" placeholder="">
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Client Services<span class="required">*</span></label>
												<div class="col-sm-3 checkbox checkbox-primary s">
													<?php
														$scount=1;
														$serve = explode(',', $sub_client['service_id']);
													 foreach ($services as $service): ?>
													 <?php 
						                              $key = array_search($service['service_name'],$serve);
						                              if (array_key_exists($key,$serve)) {
						                                $checked = 'checked';
						                              }
						                              else{
						                                $checked = '';
						                              }
						                            ?>
														<input id="checkbox<?php echo $scount ?>" class="r" type="checkbox" value="<?php echo $service['service_name'] ?>" name="service_id[]" <?php echo $checked ?>>
																<label for="checkbox<?php echo $scount ?>" class="r" ><?php echo $service['service_name'] ?></label>
													<?php
														$scount++;
													endforeach ?>


												</div>
												<label for="example-text-input" class="col-sm-2 col-form-label">Type<span class="required">*</span></label>
												<div class="col-sm-3">
														<label class="rad inline">
																	<input type="radio" name="client_type" value="INT"  <?php if('INT' == $sub_client['client_type']) echo 'checked' ?>>
																	<span> International </span>
															 </label>
															<label class="rad inline margen">
																	<input type="radio" name="client_type" value="LC"  <?php if('LC' == $sub_client['client_type']) echo 'checked' ?>>
																	<span> Local </span>
															</label>
												</div>
										</div>
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Contract Start Date<span class="required">*</span></label>
												<div class="col-sm-3">
														<input class="form-control" type="text" name="contract_start_date" value="<?php echo $sub_client['contract_start_date'] ?>" id="txtFromDate" placeholder="">
												</div>
												<label for="example-text-input" class="col-sm-2 col-form-label">Contract End Date<span class="required">*</span></label>
												<div class="col-sm-4">
														<input class="form-control" type="text" name="contract_end_date" value="<?php echo $sub_client['contract_end_date'] ?>" id="txtToDate" placeholder="">
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
														<input class="form-control" type="date" name="reg_date" min="<?php echo date('Y-m-d',strtotime($sub_client['reg_date']))?>" value="<?php echo $sub_client['reg_date'] ?>" id="example-text-input" placeholder="">
												</div>
												<label for="example-text-input" class="col-sm-2 col-form-label">Status<span class="required">*</span></label>
												<div class="col-sm-4">
														<label class="rad inline">
																	<input type="radio" name="status" value="1"  <?php if('1' == $sub_client['status']) echo 'checked' ?>>
																	<span> Active </span>
															 </label>
															<label class="rad inline margen">
																	<input type="radio" name="status" value="0" <?php if('0' == $sub_client['status']) echo 'checked' ?>>
																	<span> Blocked </span>
															</label>
												</div>
												</div>
												<div class="form-group row">

												<br><br><br>
												<hr>
<div class="col-sm-12 lobipanel-parent-sortable ui-sortable" >
<div class="panel-body">
<div class="table-responsive">
<table id="example2" class="footable table table-hover footable-loaded">
<thead>
		<tr>
		<th class="footable-sortable">Check<span class="footable-sort-indicator"></span></th>
				<th class="footable-sortable">Product Name<span class="footable-sort-indicator"></span></th>
				<th class="footable-sortable">Price ($)<span class="footable-sort-indicator"></span></th>
				<th class="footable-sortable">TAT (Days)<span class="footable-sort-indicator"></span></th>
		</tr>
</thead>
							<tbody>
																			 <?php
																				$scopecount=1;
																			 foreach ($scopes as $scope): 
$key = array_search($scope['id'], array_column($assign_client_services, 'scope_id'));
                                          if (array_key_exists($key,$assign_client_services)) {
                                            $checked = 'checked';
                                            $price = $assign_client_services[$key]['price'];
                                            $tat = $assign_client_services[$key]['avg_tat'];
                                          }
                                          else{
                                            $checked = '';
                                            $price = '';
                                            $tat = '';
                                          }
																			 	?>
																							<tr class="footable-even" style="display: table-row;">
<td><span class="checkbox checkbox-primary">
<input id="scopecheck<?php echo $scopecount?>" type="checkbox" name="scope_id[]" value="<?php echo $scope['id'] ?>"  <?php echo $checked ?>>
<label for="scopecheck<?php echo $scopecount?>"></label>
</span></td>
<td><span class="footable-toggle"></span><?php echo $scope['scope_name'] ?> </td>
<td><input type="text" name="price[]" value="<?php echo $price ?>"></td>
<td><input type="text" name="avg_tat[]" value="<?php echo $tat ?>"></td>

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
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
								<i class="pe-7s-note2"></i>
						</div>
						<div class="header-title">
								<h1>New Case Request</h1>
								<small></small>
								<ol class="breadcrumb">
										<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
										<li class="active">New Case Request</li>
								</ol>
						</div>
				</div> <!-- /. Content Header (Page header) -->


				<div class="row">
						<div class="col-sm-12">
				<form method="post" class="show_form" action="<?php echo base_url() ?>admin/insert_case" enctype="multipart/form-data">
					<input type="hidden" name="subject_files_id[]">
					<input type="hidden" name="activity_files_id[]">
								<div class="panel panel-bd ">
										<div class="panel-heading">
												<div class="panel-title">
														<h4>Case Request</h4>
												</div>
										</div>
								<div class="panel-body">
										<div class="form-group row">
												<label for="example-text-input" class="col-sm-3 col-form-label">Client Reference No<span class="required">*</span></label>
												<div class="col-sm-3">
														<input class="form-control" type="text" name="client_reference" value="" id="example-text-input" placeholder="" required>
												</div>
												 <label for="example-text-input" class="col-sm-2 col-form-label">Select Region<span class="required">*</span></label>
												<div class="col-sm-4">
														<input class="form-control" type="hidden" name="case_date" value="<?php echo date("d-m-Y h:i:s") ?>" id="example-text-input" placeholder="" readonly>

							 <select name="country_id" id="country_id" class="form-control" required="">
                              <option value="">Select Country</option>
                              <?php foreach ($countries as $country): ?>
                                <option value="<?php echo $country['country_code'] ?>"><?php echo $country['country_name'] ?>- <?php echo $country['country_code'] ?></option>
                              <?php endforeach ?>
                            </select>

												</div>
										</div>
										<div class="form-group row">

												<label for="example-text-input" class="col-sm-3 col-form-label">ITGS Reference No<span class="required">*</span></label>
												<div class="col-sm-3">


														<!--<input class="form-control" type="text" name="reference_code" value="<?php echo $_SESSION['reference_code'] ?>-00<?php echo $id; ?>" id="example-text-input" placeholder="" readonly>-->
									<?php

									 $last_id=$this->db->select('reference_code')->where('client_id',$_SESSION['client_id'])->order_by('id','desc')->limit(1)->get('case_request')->row('reference_code');
											 ?>
											<input type="text" name="reference_code" id="reference_code" readonly class="form-control">


												</div>
												 <label for="example-text-input" class="col-sm-2 col-form-label">Due Date<span class="required">*</span></label>
												<div class="col-sm-4">
														<label class="rad inline">
																	<input type="radio" name="due_date_type" value="2" checked required="">
																	<span> Component Wise </span>
															 </label>
															<label class="rad inline margen">
																	<input type="radio" name="due_date_type" value="3" required="">
																	<span> Combined</span>
															</label>
												</div>
										</div>
										 <div id="Cars3" class="form-group row desc" style="display: none;">
												<label for="example-text-input" class="col-sm-3 col-form-label">Due Date (Combined)<span class="required">*</span></label>
												<div class="col-sm-3">
														<input class="form-control datess" type="date" name="case_due_date" min="<?php echo date('Y-m-d',strtotime("+0 days"))?>" value="" id="example-text-input" placeholder="">
												</div>
										</div>



											<div class="multi-field-wrapper">
											<div class="form-group row">

											<!-- <div class="col-lg-12 pull-right">
											 <button type="button" class="btn btn-success pull-right add-field">+ Add Subject</button>
											</div> -->
											</div>
													<div class="multi-fields">
															<div class="multi-field">



	<br><br><br>
<script type="text/javascript">
		
		function onClick() {
			setTimeout(function() {
				var clicks = 1;
				$('.clicks-c').each(function() {
					//alert(clicks)
					$(this).html(clicks)
					clicks ++;
				})
			}, 300)
			
				
				//document.getElementById("clicks").innerHTML = clicks;
		};

				//document.getElementById("clicks").innerHTML = clicks;
		</script>
		<script type="text/javascript">
			$('input[name="due_date_type"]').change(function() {
				if ($(this).is(':checked') && $(this).attr('value') == '2') {
					$('.datess').val('')
					$('.due_date').val('')
					$('.due_date').attr('readonly', false)
				}
			})
			$('.datess').change(function() {
				var val = $(this).val()
				$('input[name="due_date_type"]').each(function() {
					if ($(this).is(':checked') && $(this).attr('value') == '3') {
						$('.due_date').val(val)
						$('.due_date').attr('readonly', true)
					}
				})

			})
		</script>


	 <div class="panel-group field_wrapper " id="accordion">
									<div class="panel panel-default  panel-bd">
										<div class="panel-heading" style="background-color: #7dbbdf;">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count;?>">Subject  <a id="clicks" class="clicks-c">1</a>
													</a>
											</h4><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count;?>"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
										</div>
										<div id="collapse<?php echo $count;?>" class="panel-collapse collapse in">
											<div class="panel-body">

												<div class="form-group row">
				<label for="example-text-input" class="col-sm-3 col-form-label">Subject Name<span class="required">*</span></label>
				<div class="col-sm-3">
						<input class="form-control" type="text" name="subject_name[]" required id="example-text-input" placeholder="">
				</div>
				 <label for="example-text-input" class="col-sm-2 col-form-label">Type <span class="required">*</span></label>
				<div class="col-sm-4">

				<select name="subject_type[]" id="" required class="select form-control">
					<option value="">Select Type</option>
					<option value="Individual">Individual</option>
					<option value="Corporate ">Corporate</option>
				</select>


				</div>
		</div>
		<div class="form-group row">
				<label for="example-text-input" class="col-sm-3 col-form-label">Other Detail<span class="required">*</span></label>
				<div class="col-sm-9">
					 <textarea class="form-control" id="exampleTextarea" name="other_details[]" rows="2"></textarea>
				</div>
		</div>
		 <div class="form-group row">
				<label for="example-text-input" class="col-sm-3 col-form-label">Subject Attachment<span class="required">*</span></label>
				<div class="col-sm-9">
				 <input class="form-control subject_file" name="subject_attachement[0][]" multiple class="" type="File" value="" id="example-text-input">
				 <small>Attachment Size < 25mb</small><br>
				 <small>Supported File Types : PDF, JPG, DOCX, RAR, PNG</small>
				 <div>
					<ul>
						<!-- <li>asdsad</li>
						<li>asdsad</li>
						<li>asdsad</li> -->
						<br><br>
						<table class="table table-responsive" style="display: none">
							<thead>
								<tr>
									<th style="border: 1px solid #ccc;">S.no</th>
									<th style="border: 1px solid #ccc;">Uploaded File</th>

									<th style="border: 1px solid #ccc;">Action</th>
								</tr>
							</thead>
							<tbody>
								<!-- <tr>
									<th style="border: 1px solid #ccc;">1</th>
									<td style="border: 1px solid #ccc;">asd</td>
									<td style="border: 1px solid #ccc;"><img src="<?php echo base_url() ?>admin_assets//img/cancel.png" title="delete" alt="delete" width="25" height="25"></td>
								</tr> -->
							</tbody>
						</table>
					</ul>
				</div>
				</div>
				

<table class="table table-responsive">
   <th>Action</th>
   <th>Activities</th>
   <th>File</th>
   <th>Due Date</th>
 <?php
              $k=1;

              foreach ($services as $activity): ?>

              <tr>
                  <input type="hidden"  name="case_id" value="<?php echo $client_details['id'] ?>" id="case_id">

                <td><input type="checkbox" name="scope_id[0][]" class="scope_value" value="<?php echo $activity['scope_id'] ?>" id="<?php echo $activity['scope_id'] ?>" >
                </td>
                <td><?php echo $activity['scope_name'] ?></td>
                <td>
                  <input type="file" class="file_name" name="" multiple disabled="">
                  <input type="hidden" class="act_file_id">
                  	<table class="table table-responsive activity_files" style="display: none">
						<thead>
							<tr>
								<th style="border: 1px solid #ccc;">S.no</th>
								<th style="border: 1px solid #ccc;">Uploaded File</th>
								<th style="border: 1px solid #ccc;">Action</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
                 </td>

                <td>
                    <input type="date" class="due_date" min="<?php echo date('Y-m-d',strtotime("+0 days"))?>" name="" >
                    </td>

              </tr>

              <?php
              $k++;
               endforeach ?>
		</table>
		</div>

											</div>
										</div>
									</div>
								</div>

<!-- <a class='btn btn-danger remove-field'><i class='fa fa-trash-o' aria-hidden='true'></i> </a>
	 -->


<button type="button" onclick="onClick()" class="btn btn-block btn-social add-field btn-success pull-left" style=" width: 159px; ">
					<span class="fa fa-plus" style="font-size: 13px;"></span> Add Subject
			</button>
			 <button type="button" class="btn btn-block btn-social remove-field btn-success pull-left" style="width: 159px; margin-left: 5px; margin-top: 1px;">
					<span class="fa fa-trash-o" style="font-size: 13px;"></span> Remove Subject
			</button></div>
													</div>
											</div>



										<div class="form-group row">

												<div class="col-sm-11">
												<!-- <button type="button" class="btn btn-danger pull-right">Cancel</button> -->
												</div>
												<div class="col-sm-1">
												<button type="submit" class="btn btn-primary pull-right">Next</button>
												</div>
										</div>

<div class="errors"></div>



</div>
</div>

			 </form>
			<div class="panel panel-bd lobidisable lobipanel show_sammry lobipanel-sortable" data-inner-id="itMhsQ0PHV" data-index="0">

																		<div class="panel-title" style="max-width: calc(100% - 90px);">
																				<h4 style="margin-left: 18px;">Case Summary </h4>
																		</div>

																<div class="panel-body">

																	 <?php if ($_GET['case_id']): ?>
																		<div class="table-responsive">
																				<table class="table table-striped table-hover">
																						<thead>
																								<tr>
																										<th>Client Ref</th>
																										<th>ITGS Ref</th>
																										<th>Subject</th>
																										<th>Scope Of Work</th>
																										
																								</tr>
																						</thead>
																						<tbody>

																							<?php

											$query = "SELECT case_request.client_reference,case_request.reference_code,subject_case.subject_name,scope_of_work.scope_name,
											subject_activities.activity_id,assign_client_services.price from case_request inner join subject_case on
											(subject_case.case_id=case_request.id) INNER join subject_activities on (subject_case.id=subject_activities.subject_id)
											inner join scope_of_work on (scope_of_work.id=subject_activities.activity_id)
											INNER join assign_client_services on (assign_client_services.scope_id=subject_activities.activity_id)
											where subject_case.case_id='".$_GET['case_id']."' and assign_client_services.client_id='".$_SESSION['client_id']."' ORDER BY subject_activities.subject_id DESC" ;

											 $res = $this->db->query($query)->result_array();

																							?>
																<?php

																$total=0;
																foreach ($res as $case): ?>
																	<tr>
		 <td><span class="footable-toggle"></span><?php echo $case['client_reference'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['subject_name'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['scope_name'] ?></td>
	</tr>
						<?php
						$total+=$case['price'];
						endforeach

						?>

						

						<div id="result"></div>

<script type="text/javascript">

</script>
																						</tbody>
																				</table>
																				<a href="<?php echo base_url() ?>admin/view_case_back/<?php echo $_GET['case_id'] ?>" class="btn btn-info pull-right">Back</a>

																				<a href="<?php echo base_url() ?>admin/approve_case/<?php echo $_GET['case_id'] ?>" class="btn btn-success pull-right">Confirm</a>
																		</div>
																	<?php else: ?>
																		No Case Summary
																								<?php endif ?>

																</div>
														</div>
				</div>
				</div>



</div> <!-- /.main content -->
</div><!-- /#page-wrapper -->
<div style="height:490px"></div>
</div><!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<script type="text/javascript">
 $(document).ready(function() {
		$("body").on("click",".add-mor",function(){
				var html = $(".after-add-mor").first().clone();
				//  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
					$(html).find(".chang").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-mor"><strong> + </strong> </a>');
				$(".after-add-mor").last().after(html);
		});
		$("body").on("click",".remove",function(){
				$(this).parents(".after-add-mor").remove();
		});
});
</script>
<script type="text/javascript">
 $(document).ready(function() {
		$("body").on("click",".add-mo",function(){
				var html = $(".after-add-mo").first().clone();
				//  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
					$(html).find(".chan").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-mo"><strong> + </strong> </a>');
				$(".after-add-mo").last().after(html);
		});
		$("body").on("click",".remove",function(){
				$(this).parents(".after-add-mo").remove();
		});
});



$('.scope_value').change(function() {
	var con = 0;
	$('.multi-field').each(function() {
		$(this).find('.scope_value').each(function() {
			if($(this).is(':checked')){
				$(this).parent().parent().find('.due_date').attr('name', 'due_date['+con+'][]');
				$(this).parent().parent().find('.due_date').attr('required', true);
				var val = $(this).attr('id');
		    	$(this).parent().parent().find('.file_name').attr('name', 'activity_attachment['+con+']['+val+'][]');
		    	$(this).parent().parent().find('.file_name').attr('disabled', false)
		    	$(this).parent().parent().find('.act_file_id').attr('name', 'act_file_id['+con+']['+val+'][]')
			}
			else{
				$(this).parent().parent().find('.due_date').attr('name', '');
				$(this).parent().parent().find('.due_date').attr('required', false);
				var val = $(this).attr('id');
		    	$(this).parent().parent().find('.file_name').attr('name', '');
		    	$(this).parent().parent().find('.file_name').attr('disabled', true)
		    	$(this).parent().parent().find('.act_file_id').attr('name', '');
			}
		})
		//console.log(con)
		con++
	})
})

 $('.multi-field-wrapper').each(function() {
		var $wrapper = $('.multi-fields', this);
		$(".add-field", $(this)).click(function(e) {
			var con = 0;
				$('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input,textarea').val('').focus();
				$('.multi-field').last().find('ul table tbody').empty()
				$('.multi-field').last().find('ul table').hide()
				$('.multi-field').last().find('table.activity_files tbody').empty()
				$('.multi-field').last().find('table.activity_files').hide()
				 $('.multi-field').last().find('input[type="checkbox"]').attr('checked', false)
				$('.scope_value').each(function() {
					var val = $(this).attr('id');
					$(this).attr('value', val);
				})
				$('.multi-field').each(function() {
					$(this).find('.subject_file').attr('name', 'subject_attachement['+con+'][]');
					$(this).find('.scope_value').attr('name', 'scope_id['+con+'][]');
					$(this).find('.scope_value').each(function() {
						if($(this).is(':checked')){
							$(this).parent().parent().find('.due_date').attr('name', 'due_date['+con+'][]');
							$(this).parent().parent().find('.due_date').attr('required', true);
							var val = $(this).attr('id');
    				    	$(this).parent().parent().find('.file_name').attr('name', 'activity_attachment['+con+']['+val+'][]');
    				    	$(this).parent().parent().find('.file_name').attr('disabled', false)
    				    	$(this).parent().parent().find('.act_file_id').attr('name', 'act_file_id['+con+']['+val+'][]')
						}
						else{
							$(this).parent().parent().find('.due_date').attr('name', '');
							$(this).parent().parent().find('.due_date').attr('required', false);
							var val = $(this).attr('id');
					    	$(this).parent().parent().find('.file_name').attr('name', '');
					    	$(this).parent().parent().find('.file_name').attr('disabled', true)
					    	$(this).parent().parent().find('.act_file_id').attr('name', '');
						}
					})
					/*$(this).find('.due_date').attr('name', 'due_date['+con+'][]');
    				$('.scope_value').each(function() {
    					var val = $(this).attr('id');
    				    $(this).parent().parent().find('.file_name').attr('name', 'activity_attachment['+con+']['+val+'][]');

    				})*/
					con++
				})
				var val = $('.datess').val()
				$('input[name="due_date_type"]').each(function() {
					if ($(this).is(':checked') && $(this).attr('value') == '3') {
						$('.due_date').val(val)
						$('.due_date').attr('readonly', true)
					}
				})
		});
		$('.multi-field .remove-field', $wrapper).click(function() {
				if ($('.multi-field', $wrapper).length > 1)
						$(this).parent('.multi-field').remove();
		});
});

</script>
<script type="text/javascript">
$(document).ready(function() {
		$("input[name$='due_date_type']").click(function() {
				var test = $(this).val();

				$("div.desc").hide();
				$("#Cars" + test).show();
		});
});
</script>

<script type="text/javascript">
$(document).ready(function() {
		$("input[name$='cars']").click(function() {
				var test = $(this).val();

				$("div.desc").hide();
				$("#Cars" + test).show();
		});
});
</script>


<?php $d=explode("-",$last_id); ?>


<script type="text/javascript">

$('.show_form').submit(function(e) {
	$('.errors').empty()
	var error = 0;
	var form = $(this)
	e.preventDefault()
	$('[name="due_date_type"]').each(function() {
		if($(this).is(':checked')){
			if($(this).val() == 3){
				if($('[name="case_due_date"]').val() == null || $('[name="case_due_date"]').val() == ''){
					error = 1
					$('.errors').append('<div class="alert alert-danger"><strong>Error!</strong> Due Date (Combined) is required.</div>')
				}
			}
		}
	})
	if($('.scope_value').is(':checked') == false){
		error = 1
		$('.errors').append('<div class="alert alert-danger"><strong>Error!</strong> at least select one activity</div>')
	}
	if(error == 0){
		form.submit()
	}
})
function delete_file() {
	$('.delete-file').click(function() {
		var th = $(this)
		var id = $(this).attr('data-id');
		jQuery.ajax({
		    url: '<?php echo base_url() ?>/admin/delete_subject_file/'+id,
		    dataType: 'json',
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'GET',
		    type: 'GET', // For jQuery < 1.9
		    complete: function(response){
		    	th.parent().parent().remove()
		    }
		})
	})
}
function delete_act_file() {
	$('.delete-act-file').click(function() {
		var th = $(this)
		var id = $(this).attr('data-id');
		jQuery.ajax({
		    url: '<?php echo base_url() ?>/admin/delete_act_file/'+id,
		    dataType: 'json',
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'GET',
		    type: 'GET', // For jQuery < 1.9
		    complete: function(response){
		    	th.parent().parent().remove()
		    }
		})
	})
}
$('#country_id').change(function(){

var number='<?php echo $d[5]+1?>';



var itgs_reference="ITGS-"+'<?php echo $_SESSION[client_type]?>'+"-"+'<?php echo $_SESSION[abbreviation]?>'+"-"+$(this).val()+"-"+"<?php echo date('Y')?>"+"-"+number;

$('#reference_code').val(itgs_reference);
});

var activity_file = []
$('.file_name').on("change", function (e) {
	var left = $(this).offset().left
	left = parseInt(left) + parseInt($(this).width() / 2)
	var top = $(this).offset().top
	top = parseInt(top) + parseInt($(this).height() + 15)
	$('.img-loader').css('position', 'absolute')
	$('.img-loader').css('left', left+'px')
	$('.img-loader').css('top', top+'px')
	$('.img-loader').css('z-index', '99')
	$('.img-loader').show()
	var th = $(this)
	var data = new FormData();
    data.append('type', 'activity');
    var id = $(this).attr('name')
    id = id.split('activity_attachment[').join('')
    id = id.split(']')
    var ids = id[0]
    var act_id = id[1]
    act_id = act_id.split('[').join('')
    data.append('subject_id', ids);
    data.append('id', act_id);
	jQuery.each($(this)[0].files, function(i, file) {
	    data.append('file[]', file);
	});
	jQuery.ajax({
	    url: '<?php echo base_url() ?>/admin/activity_dummy',
	    data: data,
	    // dataType: 'json',
	    cache: false,
	    contentType: false,
	    processData: false,
	    method: 'POST',
	    type: 'POST', // For jQuery < 1.9
	    complete: function(response){
	    	response = response.responseText
	    	response = response.split('[').join('')
	    	response = response.split(']').join(',')
	    	if( ids in activity_file ) {
	    		if( act_id in activity_file[ids] ) {
	    			activity_file[ids][act_id] += response
	    		}
	    		else{
	    			activity_file[ids][act_id] = response
	    		}
		        //activity_file[ids] += response
		    }
		    else{
		    	activity_file[ids] = []
		    	activity_file[ids][act_id] = response
		    }
		    var total = activity_file[ids][act_id].split(',')
		    total = total.filter(function(e){return e});
		    var formData = new FormData(); //Array  
		    formData.append('id', total);
		    jQuery.ajax({
			    url: '<?php echo base_url() ?>/admin/get_activity_file',
			    data: formData,
			    dataType: 'json',
			    cache: false,
			    contentType: false,
			    processData: false,
			    method: 'POST',
			    type: 'POST', // For jQuery < 1.9
			    success: function(response){
			    	th.parent().find('tbody').empty()
			    	th.parent().find('tbody').parent().show()
			    	for (var i = 0; i < response.length; i++) {
			    		th.parent().find('tbody').append('<tr>')
			    		th.parent().find('tbody').append('</tr>')
			    		th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ (i + 1) +'</td>')
			    		th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ response[i].file +'</td>')
			    		th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;"><img src="<?php echo base_url() ?>/admin_assets//img/cancel.png" class="delete-act-file" data-id="'+ response[i].id +'" title="delete" alt="delete" width="25" height="25"></td>')
			    	}
			    	delete_act_file()
			    	th.parent().find('.act_file_id').val(total.join(','))	
			    	$('.img-loader').hide();
			    	// console.log(activity_file)
			    	// $('[name="activity_files_id[]"]').val(JSON.stringify(activity_file))
			    }
			})
	    }
	})
});


var subject_file = []
$('.subject_file').on("change", function (e) {
	var left = $(this).offset().left
	left = parseInt(left) + parseInt($(this).width() / 2)
	var top = $(this).offset().top
	top = parseInt(top) + parseInt($(this).height() + 15)
	$('.img-loader').css('position', 'absolute')
	$('.img-loader').css('left', left+'px')
	$('.img-loader').css('top', top+'px')
	$('.img-loader').css('z-index', '99')
	$('.img-loader').show()
	var th = $(this)
	var data = new FormData();
    data.append('type', 'subject');
    var id = $(this).attr('name')
    id = id.split('subject_attachement[').join('')
    id = id.split('][]').join('')
    data.append('id', id);
	jQuery.each($(this)[0].files, function(i, file) {
	    data.append('file[]', file);
	});
	jQuery.ajax({
	    url: '<?php echo base_url() ?>/admin/subject_dummy',
	    data: data,
	    // dataType: 'json',
	    cache: false,
	    contentType: false,
	    processData: false,
	    method: 'POST',
	    type: 'POST', // For jQuery < 1.9
	    complete: function(response){
	    	response = response.responseText
	    	response = response.split('[').join('')
	    	response = response.split(']').join(',')
	    	if( id in subject_file ) {
		        subject_file[id] += response
		    }
		    else{
		    	subject_file[id] = response
		    }
		    var total = subject_file[id].split(',')
		    total = total.filter(function(e){return e});
		    var formData = new FormData(); //Array  
		    formData.append('id', total);
		    jQuery.ajax({
			    url: '<?php echo base_url() ?>/admin/get_subject_file',
			    data: formData,
			    dataType: 'json',
			    cache: false,
			    contentType: false,
			    processData: false,
			    method: 'POST',
			    type: 'POST', // For jQuery < 1.9
			    success: function(response){
			    	th.parent().find('tbody').parent().show()
			    	th.parent().find('tbody').empty()
			    	for (var i = 0; i < response.length; i++) {
			    		th.parent().find('tbody').append('<tr>')
			    		th.parent().find('tbody').append('</tr>')
			    		th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ (i + 1) +'</td>')
			    		th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ response[i].file +'</td>')
			    		th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;"><img src="<?php echo base_url() ?>/admin_assets//img/cancel.png" class="delete-file" data-id="'+ response[i].id +'" title="delete" alt="delete" width="25" height="25"></td>')
			    	}
			    	delete_file()
			    	$('[name="subject_files_id[]"]').val(subject_file)
			    	$('.img-loader').hide()		  
			    }
			})
	    }
	});
});

</script>
<?php 
	if (isset($_GET['case_id']) && $_GET['case_id'] != null) {
		echo '<style>.show_form{display:none}</style>';
	}
	else{
		echo '<style>.show_sammry{display:none}</style>';
	}
?>
<div class="img-loader" style="display: none"><img src="<?php echo base_url('admin_assets/img/Ajax-loader.gif') ?>"></div>
	<style type="text/css">
   .score{
    color:black;
   } 
   .progbar{
    color: black;
   }
  </style>

  		<div class="control-sidebar-bg"></div>
			<div id="page-wrapper">
				<div class="content">
					<div class="content-header">
						<div class="header-icon" style="margin-top: -9px;">
							<i class="pe-7s-display2"></i>
						</div>
						<div class="header-title">
							<h1>Case Dashboard</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">Case Dashboard</li>
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>
                      Case DashBoard
                    </h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
		<table id="dataTableoprations" class="table table-bordered table-striped table-hover">
      <div class="col-md-12">
        <div class="col-md-3">
          <label>Export Full Report</label>
        </div>
        <div class="col-md-6">
          <select class="export-report pull-right form-control">
            <option>Select Type</option>
            <option value="csv">CSV</option>
            <option value="xlsx">EXCEL</option>
          </select>
        </div>
      </div><br><br>
			<thead>
				<tr>
          <th>ID</th>
					<th>Client Ref</th>
					<th>ITGS Ref</th>
					<th>Start date</th>
					<th>Due date</th>
					<th>Status</th>
					<th>Action</th>
          <th>Progress Bar</th>
				</tr>
			</thead>
			<tbody>

<?php
$scopecount=1;
foreach ($cases as $case): 

$progress_subject = $this->db->query("SELECT c.id as case_id, s.sid as total_subject, sc.scid as assign_subject, sa.said as total_activity, a.aid as assign_activity, ac.acid as completed_activity, av.avid as assign_vendor_activity, acv.acvid as completed_vendor_request from case_request c left join (select COUNT(s.id) as sid, s.case_id from subject_case s group by s.case_id) as s on s.case_id = c.id left join (select COUNT(sc.id) as scid, sc.case_id from subject_case sc WHERE sc.is_assigned = 1 group by sc.case_id) as sc on sc.case_id = c.id left join (select COUNT(sa.id) as said, sa.case_id from subject_activities sa group by sa.case_id) as sa on sa.case_id = c.id left join (select COUNT(a.id) as aid, a.case_id from assign_activity_to_user a group by a.case_id) as a on a.case_id = c.id left join (select COUNT(ac.id) as acid, ac.case_id from assign_activity_to_user ac WHERE ac.is_report = 1 group by ac.case_id) as ac on ac.case_id = c.id left join (select COUNT(av.id) as avid, av.case_id from assign_vendor_request av group by av.case_id) as av on av.case_id = c.id left join (select COUNT(acv.id) as acvid, acv.case_id from assign_vendor_request acv WHERE acv.is_report = 1 group by acv.case_id) as acv on acv.case_id = c.id where c.id = ".$case['id']." GROUP by c.id")->row_array();
  if($case['case_status']==1){
    $progress = 0;
  }
  else if($case['case_status']==4){
    $progress = 0;
  }
  else if($case['case_status']==5){
    $progress = 100;
  }
  else{
    $per = 0;
    $totalper = 100;
    // subject persantage 
    // $sub = $progress_subject['assign_subject'] * 100 / $progress_subject['total_subject'];
    // $per = $per + $sub;
    // $act = $progress_subject['assign_activity'] * 100 / $progress_subject['total_activity'];
    // $per = $per + $act;
    $actc = $progress_subject['completed_activity'] * 100 / $progress_subject['total_activity'];
    $per = $per + $actc;
    if (!empty($progress_subject['assign_vendor_activity'])) {
      $actv = $progress_subject['completed_vendor_request'] * 100 / $progress_subject['assign_vendor_activity'];
      $totalper = $totalper + 100;
      $per = $per + $actv;
    }
    $per = $per * 100 / $totalper;
    if ($per == 100) {
      $per = 90;
    } 
    $progress = $per;

  }
  ?>

				<tr>
	<td><span class="footable-toggle"></span><?php echo $case['id'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['client_reference'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo date('d-m-Y h:i:s', strtotime($case['case_date'])) ?></td>
	<td><span class="footable-toggle"></span>

	<?php if($case['due_date_type']==2){
	echo "Component Wise";
	}else if($case['due_date_type']==3){
	echo $case['case_due_date'];
	} ?>

	</td>
	<td><span class="footable-toggle"></span>

	<?php if($case['case_status']==1){
	echo "New Case";
	}else if($case['case_status']==2){
	echo "In Progress";
	}else if($case['case_status']==3){
	echo "On Hold";
	}else if($case['case_status']==4){
  echo "Cancelled";
  }else if($case['case_status']==7){
  echo "In Progress";
  }else if($case['case_status']==8){
	echo "OnHold";
	}else if($case['case_status']==5){
	echo "<a href='".base_url()."admin/view_report_submission/".$case['id']."' style='color:black;'>Completed</a>";
	} ?>

	</td>
	<td>
		<!--  <select class="form-control" id="exampleSelect1" onchange="location = this.a;">

	        <option><a href="<?php echo base_url() ?>admin/view_case/<?php echo $case['id'] ?>">View Case</a></option>
	        <option><a href="<?php echo base_url() ?>admin/form1/<?php echo $case['id'] ?>">Edit view Case</a></option>
	        <option><a href="<?php echo base_url() ?>admin/edit_case_request/<?php echo $case['id'] ?>">Edit Case</a></option>
	        <option data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">Modal</option>
	    </select>  -->





	<!-- <a href="<?php echo base_url() ?>admin/view_case/<?php echo $case['id'] ?>"><img src="http://e-zbook.com/sme-new/assets/vv-icon.png" title="View Lead" alt="Process for Approval" width="25" height="25"></a> -->
	<a href="<?php echo base_url() ?>admin/edit_case_request/<?php echo $case['id'] ?>"><img src="<?php echo base_url() ?>admin_assets//img/edit.png" title="Edit Case" alt="Edit Case" width="25" height="25"></a>
	<a href="<?php echo base_url() ?>admin/form1/<?php echo $case['id'] ?>"><img src="<?php echo base_url() ?>admin_assets//img/view.png" title="View Detail" alt="View Detail" width="25" height="25"></a>

	<!-- <a href="" id="#myModal" onclick="req(asd)" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><img src="https://cdn3.iconfinder.com/data/icons/3d-printing-icon-set/512/Delete.png" title="View Detail" alt="Process for Approval" width="25" height="25"></a> -->
<!-- <button type="button" onclick="client_chat(<?php echo $case['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#myModal">
</button>	 -->
<a href="" data-toggle="modal" data-target="#myModal1" class="chat-con" onclick="client_chat( <?php echo $case['id'] ?>,<?php echo $case['employee_id'] ?>,'employee')">
  <img src="<?php echo base_url() ?>admin_assets//img/chat.png"  title="Start Chat" alt="Start Chat" width="25" height="25">
  <?php if ($case['chat'] > 0) {
    echo '<span class="con-chat">'.$case['chat'].'</span>';
  } ?>
</a>
<a href="" data-toggle="modal"
<?php if($case['case_status']==5){ ?>
 onclick="alert('The Case has been Completed & can not be Cancelled')"

    <?php }else{ ?>
data-target="#myModal" onclick="cancel_id_assign(<?php echo $case['id'] ?>,'<?php echo $case['client_reference'] ?>')"
<?php } ?>
    ><img src="<?php echo base_url() ?>admin_assets//img/cancel.png" title="Cancel Request" alt="Cancel Request" width="25" height="25"></a>


   <a href="<?php echo base_url() ?>admin/view_report_submission/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" title="View Report" alt="" width="25" height="25"></a>
<a href="<?php echo base_url() ?>admin/case_status_report/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo base_url() ?>admin_assets/img/status_log.png" title="Status log Report" alt="" width="25" height="25"></a>
 </td>
   <td>
    <div class="progress">
        <div class="progress-bar progbar progress-bar-striped active">
            <p class="font"><span class="score"><?php echo round($progress) ?></span>%</p>
        </div>
    </div>
  </td>
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
					</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 857px; margin-left: -122px">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h1 class="modal-title">Cancel Case Request</h1>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url()?>admin/insert_modal_value" enctype="multipart/form-data">

                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
              <div class="panel panel-bd" >

                <div class="panel-body" >

                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">ITGS Ref <span class="required">*</span></label>
                      <div class="col-sm-3">
                          <input class="form-control" type="text" name="itgs_reference" value="<?php echo $_SESSION['reference_code'] ?>" id="" placeholder="" required>

                          <input type="hidden" name="client_id" value="<?php echo $_SESSION['client_id'] ?>">
                      </div>
                      <input type="hidden" name="case_id_cancel" >
                       <label for="example-text-input" class="col-sm-3 col-form-label">Client Ref <span class="required">*</span></label>
                      <div class="col-sm-3">
                          <input class="form-control" type="text" name="client_ref" value="" id="" placeholder="" required>
                      </div>
                  </div>




                    <div class="form-group row" >
                   <label for="example-text-input" class="col-sm-3 col-form-label">Reason<span class="required">*</span></label>
                   <div class="col-sm-9">
                   <div class="checkbox checkbox-primary">
                    <input id="checkbox1" name="reason[]" type="checkbox" value="Wrong Generated">
                    <label for="checkbox1">Wrongly Generated</label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox2" name="reason[]" type="checkbox" value="Delayed Service">
                    <label for="checkbox2">Delayed Service</label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox3" name="reason[]" type="checkbox" value="No Document">
                    <label for="checkbox3">Complete Documents Not Avaibale</label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox4" name="reason[]" type="checkbox" value="Other">
                     <label for="checkbox4">Other</label>
                </div>
                      </div>
                    </div>
                    <div class="form-group row" id="dvPassport" style="display: none">
                   <label for="example-text-input" class="col-sm-3 col-form-label">Please Specify</label>
                   <div class="col-sm-9">
                          <textarea class="form-control" name="other_specify" id="exampleTextarea" rows="2"></textarea>
                      </div>
                    </div>
                    <div class="form-group row" >
                   <label for="example-text-input" class="col-sm-3 col-form-label">Suggestion<small>(if any)</small></label>
                   <div class="col-sm-9">
                         <textarea class="form-control" name="suggestion" id="exampleTextarea" rows="2"></textarea>
                      </div>
                    </div>
                  </div>
                <div class=panel-footer>
                  <div class="form-group row">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            </form>
                    </div>
                    <div class="modal-footer">
                    <!--    <p class="pull-right">Poworwed by </ -->
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h1 class="modal-title">Chat</h1>
										</div>

										<div class="modal-body" >
										   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
							<div class="panel panel-bd">

								<div class="panel-body" style="height: 400px;overflow: auto;">
									<ul class="chat_list" id='load_chat' >


									</ul>
								</div>
								<div class=panel-footer>
									<div class=input-group>
										<form id="chat_form" >
											<!-- <input type="hidden" id="subject_id" name="subject_id"> -->
                        <input type="hidden" name="employee_id">
                        <input type="hidden" name="employee_type">
										    <input type="hidden" value="<?php echo $_SESSION['client_name'] ?>" name="sender_id">
										    <input type="hidden" id="case_id" name="case_id">
										    <input type="hidden" value="<?php echo date("d-m-Y h:i:s a") ?>" name="chat_date_time">

										<input class="form-control emojionearea" placeholder="Your Message. . . " name="message">

										<input type="file" name="attachement" >
										</form>
										<span class=input-group-btn>
											<button class="btn btn-success chat_btn" type="button">Send</button>
										</span>

									</div>
								</div>
							</div>
						</div>
										</div>


										<div class="modal-footer">
										<!-- 		<p class="pull-right">Poworwed by	</ -->
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div>
			</div>
              </form>
              <div style="height: 440px;"></div>
</div>
</div>
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->

<script type="text/javascript">


        $(function () {
            $("#checkbox4").click(function () {
            	var passedID = $(this).data('cas_id');
                if ($(this).is(":checked")) {
                    $("#dvPassport").show();
                    // $('model_id').pass.value(<?php echo $_SESSION['client_id']?>);
                } else {
                    $("#dvPassport").hide();
                }
            });
        });
 $("#chat_form").submit(function(e) {
   e.preventDefault();
   $('.chat_btn').click()
 })
  $('.chat_btn').click(function() {

        var formData = new FormData( $("#chat_form")[0] );
        $.ajax({
            url: '<?php echo base_url(); ?>admin/add_client_chat',
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
    load_client_chat($('#case_id').val());
            }
        });
  });


  function load_client_chat(case_id) {
    $.ajax({
      url:"<?php echo base_url() ?>admin/load_client_chat",
      data:{case_id:case_id},
      type:"post",
      success:function(resp) {
        document.getElementById("chat_form").reset();
        $('#load_chat').html(resp);
      }
    });
  }


function client_chat(case_id,u_id,type) {

    $('[name=case_id]').val(case_id);
    $('#chat_form [name=employee_id]').val(u_id);
    $('#chat_form [name=employee_type]').val(type);
    load_client_chat(case_id);

  }


function cancel_id_assign(case_id,refrance) {

    $('[name=case_id_cancel]').val(case_id);
    $('[name=client_ref]').val(refrance);

  }



    </script>
<style type="text/css">
    .progress {
  height: 35px;
}


.progress-bar {
  text-align: left;
  transition-duration: 3s;
  height: 35px;
}
.font{
      margin-top: 7px;
    margin-left: 10px;
    font-size: 18px;
}

  </style>

<script type="text/javascript">
  $(document).ready(function(){
  
  $('.score').each( function() {

  var score = $( this ).text().trim();
    $( this ).closest( '.progbar' ).css('width', score + '%');
    
  var bar = $( this ).closest( '.progbar' );

  var parent = $( '.score' ).closest( 'progbar' );
  
  if (score == 0){
    $( bar ).css('width', '0');
  } else if (score <= 100 && score >= 74){
    $( bar ).css( 'background-color', 'rgba( 53, 182, 103, .5)' );
    
  } else if (score <= 75 && score >= 51){
    $( bar ).css( 'background-color', 'rgba( 24, 133, 157, .5)' );
    
  } else if (score <= 50 && score >= 25){
    $( bar ).css( 'background-color', 'rgba( 239, 149, 33, .5)' );
  } else if (score < 24){
    $( bar ).css( 'background-color', 'rgba( 198, 32, 55, .5)' );
  } else if ( score === 100 && score.parent().hasClass( '.report' ) ){//this is where it falls apart
    $( bar ).css( 'background-color', 'rgba(0, 0, 0, .5)' );
    alert('hasClass');
  }
  });
});
</script>
<script type="text/javascript">
  $('.export-report').change(function() {
    var value = $(this).val()
    window.location.href = '<?php echo base_url('admin/export_client_report/') ?>'+value
  })
  $('.chat-con').click(function() {
    $(this).find('.con-chat').hide()
  })
</script>
<style type="text/css">
  span.con-chat {
    position: absolute;
    z-index: 999999;
    width: 15px;
    height: 15px;
    background: orange;
    border-radius: 50%;
    margin-left: -17px;
    margin-top: -8px;
    text-align: center;
    padding: 0;
    line-height: 15px;
    color: #fff;
    font-size: 10px;
  }
</style>
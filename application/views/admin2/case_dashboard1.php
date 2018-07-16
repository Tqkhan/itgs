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
										<h4>Case DashBoard</h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
		<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Client Ref</th>
					<th>ITGS Ref</th>
					<th>Start date</th>
					<th>Due date</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

<?php 
$scopecount=1;
foreach ($cases as $case): ?>

				<tr>
	<td><span class="footable-toggle"></span><?php echo $case['client_reference'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['case_date'] ?></td>
	<td><span class="footable-toggle"></span>
	
	<?php if($case['due_date_type']==2){
	echo "Component Wise";
	}else if($case['due_date_type']==3){
	echo $case['case_due_date'];
	} ?>
	
	</td>
	<td><span class="footable-toggle"></span>
	
	<?php if($case['case_status']==1){
	echo "Panding";
	}else if($case['case_status']==2){
	echo "In Progress";
	}else if($case['case_status']==3){
	echo "On Hold";
	}else if($case['case_status']==4){
	echo "Cancelled";
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
	<!--<a href="<?php echo base_url() ?>admin/edit_case_request/<?php echo $case['id'] ?>"><img src="<?php echo base_url() ?>admin_assets//img/edit.png" title="Edit Case" alt="Edit Case" width="25" height="25"></a>-->
	<a href="<?php echo base_url() ?>admin/form1/<?php echo $case['id'] ?>"><img src="<?php echo base_url() ?>admin_assets//img/view.png" title="View Detail" alt="View Detail" width="25" height="25"></a>

	<!-- <a href="" id="#myModal" onclick="req(asd)" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><img src="https://cdn3.iconfinder.com/data/icons/3d-printing-icon-set/512/Delete.png" title="View Detail" alt="Process for Approval" width="25" height="25"></a> -->
<!-- <button type="button" onclick="client_chat(<?php echo $case['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#myModal">
</button>	 -->
<a href="" data-toggle="modal" data-target="#myModal1" onclick="client_chat( <?php echo $case['id'] ?>)"><img src="<?php echo base_url() ?>admin_assets//img/chat.png"  title="Start Chat" alt="Start Chat" width="25" height="25"></a>
<!--<a href="" data-toggle="modal"  -->
<!--<?php if($case['case_status']==5){ ?>-->
<!-- onclick="alert('The Case has been Completed & can not be Cancelled')"-->
    
<!--    <?php }else{ ?>-->
<!--data-target="#myModal" onclick="cancel_id_assign(<?php echo $case['id'] ?>)"-->
<!--<?php } ?>-->
<!--    ><img src="<?php echo base_url() ?>admin_assets//img/cancel.png" title="Cancel Request" alt="Cancel Request" width="25" height="25"></a>-->
	
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
                    <input id="checkbox1" name="reason[]" type="checkbox" value="wrong_generated">
                    <label for="checkbox1">Wrongly Generated</label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox2" name="reason[]" type="checkbox" value="delayed_service">
                    <label for="checkbox2">Delayed Service</label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox3" name="reason[]" type="checkbox" value="no_document">
                    <label for="checkbox3">Complete Documents Not Avaibale</label>
                </div>
                <div class="checkbox checkbox-primary">
                    <input id="checkbox4" name="reason[]" type="checkbox" value="other">
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
        $('#load_chat').html(resp);
      }
    });
  }
  
  
function client_chat(case_id) {

    $('[name=case_id]').val(case_id);
    load_client_chat(case_id);

  }

  
function cancel_id_assign(case_id) {

    $('[name=case_id_cancel]').val(case_id);

  }

  

    </script>


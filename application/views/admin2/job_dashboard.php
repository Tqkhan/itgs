			<div class="control-sidebar-bg"></div>
			<div id="page-wrapper">
				<div class="content">
					<div class="content-header">
						<div class="header-icon" style="margin-top: -9px;">
							<i class="pe-7s-display2"></i>
						</div>
						<div class="header-title">
							<h1>Job Dashboard</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">Job Dashboard</li>
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Job DashBoard</h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
									    <?php if($_SESSION['role']=="Internal Auditor"){ ?>
		<table id="dataTableoprations" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>S.no</th>
					<th>ITGS Ref</th>
					<th>Type of Services</th>
					<!-- <th>Sub Category</th> -->
					<th>Employee Name</th>
					<th>Date</th>
					<th>Payment Mode</th>
					<th>Official Fee</th>
					<th>Total</th>
					<th>Attachment</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

<?php 
$scopecount=1;
$con = 0;
foreach ($jobs as $case): 
$con++;
?>

<?php $total=$case['official_fee']+$case['vendor_changes']+$case['easy_paisa_charges']+$case['mobi_cash_charges']+$case['bank_commission']+$case['postage_courier']+$case['other_charges'];

?>
				<tr>
	<td><span class="footable-toggle"></span><?php echo $case['id'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $con ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['scope_name'] ?></td>
<!-- 	<td><span class="footable-toggle"></span><?php echo $case['sub_category'] ?></td>
 -->		<td><span class="footable-toggle"></span><?php echo $case['employee_name'] ?></td>
<td><span class="footable-toggle"></span><?php echo $case['date_time'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['mode_of_payment'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['official_fee'] ?></td>

	<td><span class="footable-toggle"></span>
	<?php echo $total; ?></td>
	<td>
		<?php 
			$files = explode(',', $case['file']);
			//print_r($files);
			for ($i=0; $i < sizeof($files); $i++) { 
				if ($files[$i]) {
					echo '<a download href="'.base_url('/uploads/attachment/'.$files[$i]).'">View Attachment</a>';
				}
			}
		?>
	</td>
		<td><span class="footable-toggle"></span>
	
	<?php 
	if($case['is_approved']==0){
	    echo "Pending";
	}else if($case['is_approved']==1){
	    echo "Approved";
	}else if($case['is_approved']==2){
	    echo "Rejected";
	}
	?>
	
	</td>
	
<td>
                                                   
   <?php if ($case['subject_id'] == 0 && $case['activity_id'] == 0) {?>
   <?php if ($case['is_approved']==0) { ?>
   <a href="<?php echo base_url() ?>admin/fund_request_update?request_id=<?php echo $case['id'] ?>&case_id=<?php echo $case['case_id'] ?>&status=1" class="btn btn-success">Approve</a>
   <a href="<?php echo base_url() ?>admin/fund_request_update?request_id=<?php echo $case['id'] ?>&case_id=<?php echo $case['case_id'] ?>&status=2" class="btn btn-danger">Reject</a>
   <?php } } else{ ?>                                                 
                                                    
<a href="<?php echo base_url() ?>admin/fund_request_view/<?php echo $case['case_id'] ?>/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo $detail_url; ?>" title="View Detail" alt="View Detail" width="25" height="25"></a>
<?php } ?>
                                                    
                                                    

                                                </td>
				</tr>

<?php 

$scopecount++;
   endforeach ?>

			</tbody>
		</table>
		<?php 
		}else if($_SESSION['role']=="Manager Finance"){
		    ?>
		
			<table id="dataTableoprations" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>ITGS Ref</th>
					<th>Type of Services</th>
					<!-- <th>Sub Category</th> -->
					<th>Employee Name</th>
					<th>Date</th>
					<th>Payment Mode</th>
					<th>Official Fee</th>
					<th>Total</th>
					<th>Attachment</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

<?php 
$scopecount=1;
foreach ($jobs as $case): ?>

<?php $total=$case['official_fee']+$case['vendor_changes']+$case['easy_paisa_charges']+$case['mobi_cash_charges']+$case['bank_commission']+$case['postage_courier']+$case['other_charges'];

?>
				<tr>
	<td><span class="footable-toggle"></span><?php echo $case['id'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['scope_name'] ?></td>
<!-- 	<td><span class="footable-toggle"></span><?php echo $case['sub_category'] ?></td>
 -->	<td><span class="footable-toggle"></span><?php echo $case['employee_name'] ?></td>
	<td><span class="footable-toggle"></span><?php echo date('d M Y', strtotime($case['date_time'])) ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['mode_of_payment'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['official_fee'] ?></td>

	<td><span class="footable-toggle"></span>
	<?php echo $total; ?></td>
	<td>
		<?php 
			$files = explode(',', $case['file']);
			for ($i=0; $i < sizeof($files); $i++) { 
				if ($files[$i]) {
					echo '<a download href="'.base_url('/uploads/attachment/'.$files[$i]).'">View Attachment</a>';
				}
				
			}
		?>
	</td>
		<td><span class="footable-toggle"></span>
	
	<?php 
	if($case['is_issue']==0){
	    echo "Pending";
	}else if($case['is_issue']==1){
	    echo "Approved";
	}else if($case['is_issue']==2){
	    echo "Rejected";
	}
	?>
	
	</td>
	
<td>
 <?php 
if ($case['fid'] <= 0) {
 ?>                                                  
 <a href="" data-toggle="modal" data-target="#myModal11" onclick="fund_paid(<?php echo $case['id'] ?>,<?php echo $total ?>)">Payment Issue</a>    
 <a href="<?php echo base_url() ?>admin/fund_request_update?request_id=<?php echo $case['id'] ?>&case_id=<?php echo $case['case_id'] ?>&status=2" class="btn btn-danger">Reject</a>                                               
<?php } ?> 
<a href="<?php echo base_url() ?>admin/fund_request_view/<?php echo $case['case_id'] ?>/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Detail" alt="View Detail" width="25" height="25"></a>
                                                    
                                                    
<?php 

if($case['is_issue']==1){
	?>
<a href="<?php echo base_url('admin/fund_invoice/'.$case['id']) ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Voucher" alt="View Voucher" width="25" height="25"></a>
<?php } ?>	
                                                </td>
				</tr>

<?php 

$scopecount++;
   endforeach ?>

			</tbody>
		</table>    
		    <?php }
		    else{
		        ?>
		    <table id="dataTableoprations" class="table table-bordered table-striped table-hover">
		    	<?php 
						if ($_SESSION['role'] != 'vendor') {
					?>
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
      <?php } ?>
			<thead>
				<tr>
					<th>Id</th>
					<th>S.no</th>
					<th>ITGS Ref</th>
					<th>Subject Name</th>
					<th>Activity Name</th>
					<?php 
						if ($_SESSION['role'] == 'vendor') {
					?>
					<th>Sub Category</th>
					<?php } ?>
					<th>Attecment</th>
					<?php 
						if ($_SESSION['role'] == 'vendor') {
					?>
					<th>Status</th>
					<th>Start Date</th>
					<?php } ?>
					<?php 
						if ($_SESSION['role'] != 'vendor') {
					?>
					<th>Status</th>

					<?php } ?>
					
					<th>Due date</th>
					<?php 
						if ($_SESSION['role'] == 'vendor') {
					?>
					<th>Remarks</th>
					<?php } ?>

					<?php 
						if ($_SESSION['role'] == 'TM') {
							echo '<th>Report</th>';
							echo "<th>Fund Request</th>";
						}
					?>

					<th>Action</th>
				</tr>
			</thead>
			<tbody>

<?php 
$scopecount=1;
$detail_url = base_url('admin_assets//img/view.png');
$con = 0;
foreach ($jobs as $case): 
$con++;
	?>

				<tr>
	<td><span class="footable-toggle"></span><?php echo $case['asid'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $con ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['subject_name'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['scope_name'] ?></td>
	<?php 
		if ($_SESSION['role'] == 'vendor') {
	?>
	<td><span class="footable-toggle"></span><?php echo $case['sub_category'] ?></td>
	<?php } ?>
	<td><span class="footable-toggle"></span>
		<?php 
			if ($_SESSION['role'] == 'CM' || $_SESSION['role'] == 'TL' || $_SESSION['role'] == 'manager') {
		?>
		<a href="<?php echo base_url() ?>admin/form1/<?php echo $case['case_id'] ?>"><img src="<?php echo $detail_url; ?>" title="View Detail" alt="View Detail" width="25" height="25"></a>
		<?php
		}
			else{
		?>
		<?php 
		if ($case['file']) {
		$file = explode(',', $case['file']);
			for ($i=0; $i < sizeof($file); $i++) { 
		?>
		<?php 
			if ($_SESSION['role'] != 'vendor') {
		?>
		<a target="_blank" href="<?php echo base_url() ?><?php echo $file[$i] ?>">View file</a>
		<?php } else{ ?>
		<a target="_blank" href="<?php echo base_url() ?>uploads/attachment/<?php echo $file[$i] ?>">View file</a>
		<?php } ?>
		<?php } } ?>
		<?php } ?>
	</td>
<?php 
	if ($_SESSION['role'] == 'vendor') {
?>
<?php if ($case['is_report'] == 0) { ?>
<td>Pending</td>
<?php  } else { ?>
<td>Completed</td>
<?php } ?>
<td><?php echo $case['created_at'] ?></td>
<?php } ?>
	<?php 
	$vendor = $this->db->get_where('assign_vendor_request',array('activity_id'=>$case['activity_id'],'case_id'=>$case['case_id'],'subject_id'=>$case['subject_id'],'is_report'=>0))->row_array();
	//echo '<pre>';print_r($vendor);
	$vendor_report = $this->db->get_where('vendor_report',array('assign_vendor_id'=>$vendor['id']))->row_array();
if ($_SESSION['role'] == 'vendor') {
?>

<td><span class="footable-toggle"></span><?php echo $case['date_time'] ?></td>
<?php }else{ ?> 
<?php if ($case['is_report'] == 1) { ?>    
<td><span class="footable-toggle"></span>Completed</td>
<?php } else{ ?>
<?php 
$case_mem=$this->db->query('select team_member_id from case_team_members where subject_id ='.$case['subject_id'])->row_array();
 //print_r($case['subject_id']);
	
	if ($case['total_fund'] >= 1){
		$type = 'IA';
	}
	elseif (!empty($vendor)) {
		$type = 'Vendor';
	}
	else if($case_mem['team_member_id']== $_SESSION['id']){
		$type = 'Self';
	}
	else{
		$type = 'Team';
	}
?>
<td><span class="footable-toggle"></span>Pending At <?php echo $type ?></td>
<?php } ?>

	<td><span class="footable-toggle"></span><?php echo $case['due_date'] ?></td>
	<?php } ?>
<?php 
	if ($_SESSION['role'] == 'vendor') {
?>
<td><?php echo $case['remarks'] ?></td>
<?php } ?>
<?php 
		if ($_SESSION['role'] == 'TM') {
			if ($vendor_report) {
				echo '<td>Report Received</td>';
			}
			else{
				echo '<td>Report not Received</td>';
			}
			$f = 'Not Initiated';
			if ($case['total_fund'] >= 0){ 
				$this->db->select('*')
						 ->from('fund_request_activity')
						 ->where('activity_id',$case['activity_id'])
						 ->where('subject_id',$case['subject_id'])
						 ->where('case_id',$case['case_id'])
						 ->order_by('id', 'desc');
				$fund = $this->db->get()->row_array();
				//$fund = $this->db->get_where('fund_request_activity',array('activity_id'=>$case['activity_id'],'subject_id'=>$case['subject_id'],'case_id'=>$case['case_id']))->row_array();
				if ($fund) {
					if ($fund['is_issue'] == 1) {
						$f = 'Approve';
					}
					elseif ($fund['is_approved'] == 2) {
						$f = 'Reject';
					}
					elseif (empty($fund['is_approved'])) {
						$f = 'Pending';
					}
				}
			}
			echo '<td>'.$f.'</td>';
		}
	?>
<td>

                                                    <!--<a href="<?php echo base_url() ?>admin/delete_employee/employee_personal_information/userID/<?php echo $key['userID'] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="25" height="25"></a>-->
 <?php 
if ($_SESSION['role'] != 'vendor') {
?>                                                   
                                                    
                                                    
<!-- <a href="<?php echo base_url() ?>admin/form1/<?php echo $case['case_id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Detail" alt="View Detail" width="25" height="25"></a> -->
<?php 
if ($case['total_fund'] == '0'){ 
	$fund = 'data-toggle="modal" data-target="#myModal"';
} 
else {
	$fund = 'class="sweets-alert"';
	echo '<a class="open-modal" style="display:none" data-toggle="modal" data-target="#myModal"></a>';
} 
?>
                                                    <a <?php echo $fund ?> onclick="fund_request_assign_id(<?php echo $case['case_id'] ?>,<?php echo $case['subject_id'] ?>,<?php echo $case['activity_id'] ?>,'<?php echo $case['reference_code']?>','<?php echo $case['subject_name'];?>','<?php echo $case['scope_name'] ?>')"><img src="<?php echo base_url(); ?>/admin_assets/img/found.png" title="Fund Request" alt="" width="25" height="25"></a>
<?php 
if (empty($vendor)) {
?>
                                                    <a href="" data-toggle="modal" data-target="#myModal2" onclick="vendor_assign_id(<?php echo $case['case_id'] ?>,<?php echo $case['subject_id'] ?>,<?php echo $case['activity_id'] ?>,'<?php echo $case['reference_code'] ?>','<?php echo $case['scope_name'] ?>','<?php echo $case['subject_name'] ?>')"><img src="<?php echo base_url(); ?>/admin_assets/img/task.png" title="Assign Vendor" alt="" width="25" height="25"></a>
<?php } else{ ?>
<a class="sweets-alert2" onclick="vendor_assign_id(<?php echo $case['case_id'] ?>,<?php echo $case['subject_id'] ?>,<?php echo $case['activity_id'] ?>,'<?php echo $case['reference_code'] ?>','<?php echo $case['scope_name'] ?>','<?php echo $case['subject_name'] ?>',<?php echo $vendor['id'] ?>)"><img src="<?php echo base_url(); ?>/admin_assets/img/task.png" title="View Vendor" alt="" width="25" height="25"></a>
<?php echo '<a class="open-modal2" style="display:none" data-toggle="modal" data-target="#myModal2"></a>'; ?>
<!-- <a href="" data-toggle="modal" data-target="#myModal26" onclick="vendor_view(<?php echo $vendor['id'] ?>)"><img src="<?php echo base_url(); ?>/admin_assets/img/task.png" title="View Vendor" alt="" width="25" height="25"></a> -->
<?php } ?> 
<?php 
if ($_SESSION['role'] != 'vendor') {
	if ($case['is_report'] != 1) { 
		if ($case['hold_status'] == 0) {
?> 
<a href="<?php echo base_url('admin/activity_hold/'.$case['asid']) ?>"><button class="btn btn-warning">Put on hold</button></a>
<?php }
else{?>
<a href="<?php echo base_url('admin/activity_unhold/'.$case['asid']) ?>"><button class="btn btn-warning">Put on unhold</button></a>
<?php
 } 
} } ?>
<?php if ($case['is_report'] == 0) { ?>

<?php if($case['type']==1)
{?>
	 <a href="" data-toggle="modal" data-target="#myModal4" onclick="nadra(<?php echo $case['asid'] ?>)"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php  } ?>
<?php if($case['type']==2){?>
	 <a href="" data-toggle="modal" data-target="#myModal5" onclick="fbr(<?php echo $case['asid'] ?>)"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php  } ?>
     <?php if($case['type']==3){?>
	<a href="" data-toggle="modal" data-target="#myModal7" onclick="regulatory( <?php echo $case['asid'] ?>)"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php  } ?>
     <?php if($case['type']==4){?>
	  <a href="" data-toggle="modal" data-target="#myModal8" onclick="litigation(<?php echo $case['asid'] ?>)"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php  } ?>
     <?php if($case['type']==5){?>
	<a href="" data-toggle="modal" data-target="#myModaledu" onclick="education(<?php echo $case['asid'] ?>)"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php  } ?>
     <?php if($case['type']==6){?>
	<a href="" data-toggle="modal" data-target="#myModalcr" onclick="crimnal(<?php echo $case['asid'] ?>)"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php  } ?>
<?php if($case['type']==7){?>
	<a href="" data-toggle="modal" data-target="#myModalpast" onclick="past(<?php echo $case['asid'] ?>)"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php  } ?>


<?php if($case['type']==0){?>

<a href="" data-toggle="modal" data-target="#myModalc" onclick="customized_report(<?php echo $case['asid'] ?>,'<?php echo $case['scope_name'] ?>','<?php echo $case['reference_code'] ?>','<?php echo $case['due_date'] ?>')"><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>" title="Customized Report"" alt="Customized Report" width="25" height="25"></a>
<?php  } ?>


<?php } else{ ?>

<!-- <a href="<?php echo base_url() ?>admin/view_report_case/<?php echo $case['id'] ?>/<?php echo $case['asid'] ?>" target="_blank"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Report" alt="View Report" width="25" height="25"></a> -->
<!-- <a href="<?php echo base_url() ?>admin/edit_report/<?php echo $case['id'] ?>/<?php echo $case['asid'] ?>" target="_blank"><img src="<?php echo base_url(); ?>/admin_assets/img/edit.png" title="Edit Report" alt="Edit Report" width="25" height="25"></a> -->

<?php } ?>


                                                    <?php } else{ ?>
                                                    <?php if ($case['is_report'] == 0) { ?>

                                                   <a <?php if($case['case_status']!=4 && $case['case_status']!=5) { ?> href="" data-toggle="modal" data-target="#myModal10" <?php } else{ echo 'href="#"'; } ?>  onclick="report_submission(<?php echo $case['id'] ?>,<?php echo $case['van_id'] ?>)" ><img src="<?php echo base_url('admin_assets//img/article-icon.png') ?>"  title="Report Submission" alt="Report Submission" width="25" height="25"></a>
                                                    <?php } } ?>
                                                    <a href="<?php echo base_url() ?>admin/view_report_case/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" title="View Report" alt="View Report" width="25" height="25"></a>
                                                </td>
				</tr>

<?php 

$scopecount++;
   endforeach ?>

			</tbody>
		</table>
		    <?php
		}
		?>
		
									</div>
								</div>
							</div>
						</div>
					</div>

					
					 

<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 857px; margin-left: -122px">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h1 class="modal-title">Case Report Submission</h1>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url()?>admin/insert_report_vendor" enctype="multipart/form-data">

                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
              <div class="panel panel-bd" >

                <div class="panel-body" >

                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Report Attached <span class="required">*</span></label>
                      <div class="col-sm-9">
                          
                          <input class="form-control subject_file" multiple="" type="file" name="attachment"  id="" placeholder="" required>
                          <input type="hidden" name="file_id">
                          <div>
                            <ul>
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
                                </tbody>
                              </table>
                            </ul>
                          </div>
                          <input type="hidden" name="employee_id" value="<?php echo $_SESSION['id'] ?>">
                          <input type="hidden" name="case_id_report" id="case_id_report">
                          <input type="hidden" name="assign_vendor_id" id="activity_id_report">
                      </div>
                      
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Remarks <span class="required">*</span></label>
                      <div class="col-sm-9">
                          <textarea name="remarks" class="form-control"></textarea>
                          
                          
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




<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 857px; margin-left: -122px">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h1 class="modal-title">Issue Payment</h1>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url()?>admin/issue_payment" enctype="multipart/form-data">
<input type="hidden" name="fund_id">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
              <div class="panel panel-bd" >

                <div class="panel-body" >

                  <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Date</label>
                                            <input name="date" type="date" class="form-control" required="This Field is Required...">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Amount</label>
                                            <input name="amount" type="number" class="form-control" required="This Field is Required...">
                                        </div>
                                    </div>

                  <div class="form-group row">
                  	<div class="form-group col-lg-6">
                        <label for="">Payment Type</label><br>
                        <input name="type" type="radio" class="" required="This Field is Required..." value="1" checked="">
                        <label>Cash</label>&nbsp;&nbsp;
                        <input name="type" type="radio" class="" required="This Field is Required..." value="2">
                        <label>Chaque</label>&nbsp;&nbsp;
                        <input name="type" type="radio" class="" required="This Field is Required..." value="3">
                        <label>Payorder</label>&nbsp;&nbsp;
                    </div>
                    <?php 
                    	$this->db->select('*')
                    			 ->from('fund_approve')
                    			 ->where('STR_TO_DATE(date, "%Y-%m-%d") >=', date('Y-m-d'))
                    			 ->where('STR_TO_DATE(date, "%Y-%m-%d") <=', date('Y-m-t'))
                    			 ->order_by('slip', 'desc');
                    	$slip = $this->db->get()->row_array();
                    	$slip = $slip['slip'];
                    	$slip = $slip + 1;
                    ?>
                    <!-- <?php 
                    	$this->db->select('*')
                    			 ->from('fund_approve')
                    			 ->where('STR_TO_DATE(date, "%Y-%M-%d") >=', date('Y-m-d'))
                    			 ->where('STR_TO_DATE(date, "%Y-%M-%d") <=', date('Y-m-t'))
                    			 ->order_by('payorder', 'desc');
                    	$payorder = $this->db->get()->row_array();
                    	$payorder = $payorder['payorder'];
                    	$payorder = $payorder + 1;
                    ?>
                    <?php 
                    	$this->db->select('*')
                    			 ->from('fund_approve')
                    			 ->where('STR_TO_DATE(date, "%Y-%M-%d") >=', date('Y-m-d'))
                    			 ->where('STR_TO_DATE(date, "%Y-%M-%d") <=', date('Y-m-t'))
                    			 ->order_by('chaque', 'desc');
                    	$chaque = $this->db->get()->row_array();
                    	$chaque = $chaque['chaque'];
                    	$chaque = $chaque + 1;
                    ?> -->
                    <?php 
                    	$this->db->select('*')
                    			 ->from('fund_approve')
                    			 ->where('STR_TO_DATE(date, "%Y-%M-%d") >=', date('Y-m-d'))
                    			 ->where('STR_TO_DATE(date, "%Y-%M-%d") <=', date('Y-m-t'))
                    			 ->where('type != ', '1')
                    			 ->order_by('id', 'desc');
                    	$payorder = $this->db->get()->row_array();
                    	$payorder = $payorder['payorder'];
                    	if ($slip['type'] == 2) {
	                        $payorder = $payorder['chaque'];
	                    }
	                    elseif ($payorder['type'] == 3) {
	                        $payorder = $payorder['payorder'];
	                    }
	                    else{
	                        $payorder = 0;
	                    }
                    	$payorder = $payorder + 1;
                    ?>
                    <div class="form-group col-lg-6 change-type type-1">
                    	<label>Slip No#</label>
                    	<input name="" type="text" class="form-control" value="<?php echo 'CPV'.$slip ?>" readonly>
                    	<input type="hidden" name="slip" value="<?php echo $slip ?>">
                    </div>
                    <div class="form-group col-lg-6 change-type type-2" style="display: none">
                    	<label>Chaque No#</label>
                    	<input name="" type="text" class="form-control" value="<?php echo 'BPV'.$payorder ?>" readonly>
                    	<input type="hidden" name="chaque" value="<?php echo $payorder ?>">
                    </div>
                    <div class="form-group col-lg-6 change-type type-3" style="display: none">
                    	<label>Payorder No#</label>
                    	<input name="" type="text" class="form-control" value="<?php echo 'BPV'.$payorder ?>" readonly>
                    	<input type="hidden" name="payorder" value="<?php echo $payorder ?>">
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





					

<form method="POST" action="<?php echo base_url()?>admin/fbr_records" enctype="multipart/form-data">
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">FBR Records </h1>
                        </div>
<input type="hidden" name="fbr_id">
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>VERIFICATION RESULTS</th>
                                                        <th>CANDIDATE CLAIMS </th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>
                                                            <input type="text" name="name" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Category </td>
                                                        <td>
                                                            <input type="text" name="category" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>National Tax Number  </td>
                                                        <td>
                                                            <input type="text" name="ntn" class="form-control" >
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>CNIC Number</td>
                                                        <td>
                                                            <input type="text" name="cnic" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Principle Activity </td>
                                                        <td>
                                                            <input type="text" name="principle_activity" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Business Nature </td>
                                                        <td>
                                                            <input type="text" name="business_nature" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Registered for Income tax</td>
                                                        <td>
                                                            <input type="text" name="registered_for_income_tax" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Income Tax Office </td>
                                                        <td>
                                                            <input type="text" name="income_tax_office" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Evidence</td>
                                                        <td>
                                                        	<input class="form-control subject_file" name="evidence" type="File" value="" id="example-text-input">
                                                           	<input type="hidden" name="file_id">
									                          <div>
									                            <ul>
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
									                                </tbody>
									                              </table>
									                            </ul>
									                          </div>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>
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
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>

					<form method="POST" action="<?php echo base_url()?>admin/insert_nadra" enctype="multipart/form-data">
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">NADRA / NATIONAL I.D VERIFICATION </h1>
                        </div>
                        <input type="hidden" name="subject_id">


                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Requirements</th>
                                                        <th>Fields</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>
                                                            <input type="text" name="name" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Father Name </td>
                                                        <td>
                                                            <input type="text" name="father_name" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Mother Name  </td>
                                                        <td>
                                                            <input type="text" name="mother_name" class="form-control" >
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>CNIC Number/ Passport No:</td>
                                                        <td>
                                                            <input type="text" name="cnic" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Nationality </td>
                                                        <td>
                                                            <input type="text" name="nationality" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Religion  </td>
                                                        <td>
                                                            <input type="text" name="religion" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Present Address</td>
                                                        <td>
                                                            <input type="text" name="present_address" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Permanent Address </td>
                                                        <td>
                                                            <input type="text" name="permanent_address" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Date Of Birth </td>
                                                        <td>
                                                            <input type="date" name="date_of_birth" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Place of Birth</td>
                                                        <td>
                                                           <input type="text" name="place_of_birth" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Country of Stay</td>
                                                        <td>
                                                           <input type="text" name="country_stay" class="form-control">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Evidence</td>
                                                        <td>
                                                        	<input class="form-control subject_file" name="evidence" type="File" value="" id="example-text-input">
                                                           <input type="hidden" name="file_id">
								                          <div>
								                            <ul>
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
								                                </tbody>
								                              </table>
								                            </ul>
								                          </div>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>
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
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>

					 <form method="POST" action="<?php echo base_url()?>admin/insert_customized_report" enctype="multipart/form-data">
                     <div class="modal fade" id="myModalc" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Customized Reports</h1>
                                        </div>
										<input type="hidden" name="s_id">
                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">ITGS Ref</label>
                                            <input name="itgs_reference" type="text" class="form-control" required="This Field is Required...">
<input type="hidden" class="attacment_custamize_id" name="attacment_custamize_id[]">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Activity Name</label>
                                            <input name="activity_name" type="text" class="form-control" required="This Field is Required...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Due Date</label>
                                            <input name="due_date" type="date" class="form-control" required="This Field is Required...">

                                        </div>

                                    </div>
                                    <div class="form-group row">
											<div class="form-group col-lg-12">
                                            <label for="">Remarks</label>
                                            <textarea required="This Field is Required..." class="form-control" id="exampleTextarea" name="remarks" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">Attachment</label>
                                           <input type="file" class="attacment_custamize" name="contact_detail[]" multiple="">
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
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
					<form method="POST" action="<?php echo base_url()?>admin/insert_fund_request" enctype="multipart/form-data">
					    
					     <input type="hidden" name="fund_case_id" >
                         <input type="hidden" name="fund_subject_id" >
                         <input type="hidden" name="fund_activity_id" >

                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Fund Request</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Date</label>
                                            <input name="date_time" required="" type="date" class="form-control" value="<?php echo date('Y-m-d') ?>">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">ITGS Caes Ref No</label>
                                            <input name="client_reference" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Name Of Subject</label>
                                            <input name="name_of_subject" type="text" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Type of Service</label>
                                            <input name="type_of_service" required="" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">Degree Type</label>
                                        <select class="form-control" name="degree_type" required="">
                                        	<option>Select Type</option>
                                        	<option value="Masters">Masters</option>
                                        	<option value="Bachelors">Bachelors</option>
                                        	<option value="Inter">Inter</option>
                                        	<option value="Matric">Matric</option>
                                        	<option value="Diploma">Diploma</option>
                                        	<option value="N/A">N/A</option>
                                        </select>
                                            <!-- <input name="degree_type" required="" type="text" class="form-control"> -->
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Name Of IA</label>
                                            <input name="name_of_ia" required="" type="text" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Mode of Payment Ffor Official Fee</label>
                                            <div class=" checkbox-info checkbox-circle">
                                                        <input id="checkbox8" type="radio" required=""  name="mode_of_payment" value="Cash">
                                                        <label for="checkbox8">Cash</label>
                                                         <input id="checkbox9" type="radio" required=""  name="mode_of_payment" value="Payorder">
                                                        <label style="margin-left: 34px;" for="checkbox9">Payorder</label>
                                                    </div>
                                                   
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="" class="col-md-3">Attachment</label>
                                        <div class="col-md-9">
                                            <input class="form-control subject_file" multiple="" type="file" name="attachment"  id="" placeholder="" required>
                                            <input type="hidden" name="file_id">
                                            <div>
                                                <ul>
                                                  <br><br>
                                                  <table class="table table-responsive agreement" style="display: none">
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Official Fee</label>
                                            <input name="official_fee" type="number" required="" class="form-control num">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Vendor Charges</label>
                                            <input name="vendor_changes" type="number" required="" class="form-control num">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Easy Paisa Charges</label>
                                            <input name="easy_paisa_charges" type="number" required="" class="form-control num">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Mobi Cash Charges</label>
                                            <input name="mobi_cash_charges" type="number" required="" class="form-control num">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Bank Commission</label>
                                            <input name="bank_commission" type="number" required="" class="form-control num">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Postage & Couries Charges</label>
                                            <input name="postage_courier" type="number" required="" class="form-control num">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Other Charges</label>
                                            <input name="other_charges" type="number" required="" class="form-control num">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Total Cost</label>
                                            <input name="total_cost" required="" type="number" class="form-control totals" readonly="">
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
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- modal 2 -->
                        <form method="POST" action="<?php echo base_url()?>admin/assign_vendor_request" enctype="multipart/form-data">
                            
                         <input type="hidden" name="vendor_case_id" >
                         <input type="hidden" name="vendor_subject_id" >
                         <input type="hidden" name="vendor_activity_id" >
                         <input type="hidden" name="last_assign">

                     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Vendor</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Name of Vendor</label>
                                    <?php 
                                    $vendors=$this->db->get_where('employee_itgs',['role'=>'vendor'])->result_array();
                                    ?>
                                            <select class="form-control" required="" name="vendor_id">
                                                <option value="">Select Vendor</option>
                                                <?php 
                                                foreach($vendors as $vendor){
                                                    ?>
                                                    
                                                    <option value="<?php echo $vendor['id'] ?>"><?php echo $vendor['employee_name'] ?></option>
                                                    
                                                    <?php
                                                    
                                                }
                                                ?>
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Due Date</label>
                                            <input name="date_time" required="" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<div class="form-group col-lg-12">
                                            <label for="">Subject</label>
                                            <input name="" required="" type="text" id="ven_subject" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">File</label>
                                            <input name="file" type="file" class="form-control subject_file">
                                        	<input type="hidden" name="file_id">
					                          <div>
					                            <ul>
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
					                                </tbody>
					                              </table>
					                            </ul>
					                          </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Type of Service</label>
                                            <input name="type_of_service" required="" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<div class="form-group col-lg-12">
                                            <label for="">Sub Category</label>
                                            <select class="form-control sub_category" name="sub_category">
                                            	<option value="">Select Sub Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Itgs Ref No</label>
                                            <input type="text" name="" class="itgs-code form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Vendor Charges</label>
                                            <input type="number" name="charges" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">Remarks</label>
                                        <textarea class="form-control" name="remarks"></textarea>
                                        </div>
                                    </div>
                                    <!--<div class="form-group row">-->
                                    <!--    <div class="form-group col-lg-6">-->
                                    <!--    <label for="">Activity</label>-->
                                    <!--        <select class="form-control" name="activity">-->
                                    <!--            <option>Select Activity</option>-->
                                    <!--            <option value="1">1</option>-->
                                    <!--            <option value="2">2</option>-->
                                    <!--            <option value="3">3</option>-->
                                    <!--            <option value="4">4</option>-->
                                    <!--        </select>-->
                                        
                                    <!--    </div>-->
                                    <!--</div>-->
                                     
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
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- modal 3 -->
<!-- view Vendor -->
<form method="POST" action="<?php echo base_url()?>admin/assign_vendor_request" enctype="multipart/form-data">
                            
                         <input type="hidden" name="vendor_case_id" >
                         <input type="hidden" name="vendor_subject_id" >
                         <input type="hidden" name="vendor_activity_id" >

                     <div class="modal fade" id="myModal26" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Vendor</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Name of Vendor</label>
                                    <?php 
                                    $vendors=$this->db->get_where('employee_itgs',['role'=>'vendor'])->result_array();
                                    ?>
                                            <select class="form-control" required="" name="vendor_id" readonly>
                                                <option value="">Select Vendor</option>
                                                <?php 
                                                foreach($vendors as $vendor){
                                                    ?>
                                                    
                                                    <option value="<?php echo $vendor['id'] ?>"><?php echo $vendor['employee_name'] ?></option>
                                                    
                                                    <?php
                                                    
                                                }
                                                ?>
                                                
                                            </select>
                                            
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Due Date</label>
                                            <input name="date_time" required="" type="date" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<div class="form-group col-lg-6">
                                            <label for="">Subject</label>
                                            <input name="" required="" type="text" id="ven_subject" class="form-control" readonly="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Type of Service</label>
                                            <input name="type_of_service" required="" type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Itgs Ref No</label>
                                            <input type="text" name="" class="itgs-code form-control" readonly>
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Vendor Charges</label>
                                            <input type="number" name="charges" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">Remarks</label>
                                        <textarea class="form-control" name="remarks" readonly></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class=panel-footer>
                                    <div class="form-group row">
                                                <div class="col-sm-12">
                                                <!-- <button type="submit" class="btn btn-primary pull-right">Submit</button> -->
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
<!-- end view Vendor -->











<form method="POST" action="<?php echo base_url()?>admin/past_employment" enctype="multipart/form-data">
            <div class="modal fade" id="myModalpast" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">PAST EMPLOYMENT CHECK </h1>
                        </div>

                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">
                                    <div class="panel-body">
                                       <input type="hidden" name="assign_activity_id">

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Employer Name </label>
                                                <input type="text" name="employee_name" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Address </label>
                                                <input type="text" name="address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Name of Verifier  </label>
                                                <textarea class="form-control" name="verifier" id="exampleTextarea" rows="1"></textarea>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Designation of Verifier </label>
                                                <input type="text" name="designation_verifier" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Contact Details of Verifier </label>
                                                <input type="text" name="contact_verifier" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Email Address of Verifier </label>
                                                <input type="text" name="email_verifier" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="">Evidence</label>
                                                <input type="file" name="evidence" class="form-control subject_file">
                                                <input type="hidden" name="file_id">
						                          <div>
						                            <ul>
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
						                                </tbody>
						                              </table>
						                            </ul>
						                          </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>VERIFICATION RESULTS</th>
                                                        <th>CANDIDATE CLAIMS </th>
                                                        <th>VERIFICATION STATUS </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Name <input type="hidden" name="key[]" value="Name"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father Name <input type="hidden" name="key[]" value="Father Name"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nature of Employment  <input type="hidden" name="key[]" value="Nature of Employment"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control" placeholder="Permanent">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control" placeholder="Verified ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Job Title / Designation<input type="hidden" name="key[]" value="Job Title / Designation"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Employee Code <input type="hidden" name="key[]" value="Employee Code"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Period of Employment  <input type="hidden" name="key[]" value="Period of Employment"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Remunerations<input type="hidden" name="key[]" value="Remunerations"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Reason for Leaving <input type="hidden" name="key[]" value="Reason for Leaving"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Eligibility of Rehire <input type="hidden" name="key[]" value="Eligibility of Rehire"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Additional Comments by Verifier<input type="hidden" name="key[]" value="Additional Comments by Verifier"></td>
                                                        <td>
                                                           <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                           <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
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
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>



        <form method="POST" action="<?php echo base_url()?>admin/crimnal_background" enctype="multipart/form-data">
            <div class="modal fade" id="myModalcr" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">CRIMINAL BACKGROUND CHECK </h1>
                        </div>
<input type="hidden" name="assign_activity_id">
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">
                                    <div class="panel-body">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Name of Police Station</label>
                                                <input type="text" name="police_station" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Name of Verifier </label>
                                                <input type="text" name="verifier" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Designation of Verifier  </label>
                                                <input type="text" name="designation_verifier" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Address of Police Station</label>
                                                <textarea class="form-control" name="address_police_station" id="exampleTextarea" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Period of Criminal Record Check </label>
                                                <input type="text" name="crimnal_record" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Evidence of Verification </label>
                                                <input type="file" name="evidence" class="form-control subject_file">
                                                <input type="hidden" name="file_id">
						                          <div>
						                            <ul>
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
						                                </tbody>
						                              </table>
						                            </ul>
						                          </div>
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
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <form method="POST" action="<?php echo base_url()?>admin/education_verification" enctype="multipart/form-data">
            <div class="modal fade" id="myModaledu" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">Education Verification </h1>
                        </div>
<input type="hidden" name="assign_activity_id">
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">
                                    <div class="panel-body">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Name of Institute/University/College</label>
                                                <input type="text" name="name_of_ia" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Type of Degree</label>
                                                <input type="text" name="degree" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Address of Institute/University/College </label>
                                                <input type="text" name="address_of_ia" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Contact Number of Institute/University/College</label>
                                                <input type="text" name="contact_of_a" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Dates Attended </label>
                                                <input type="date" name="date_attended" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Date Certificate Received </label>
                                                <input type="date" name="date_certificate" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Student ID </label>
                                                <input type="text" name="student_id" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">NAME OF VERIFIER </label>
                                                <input type="text" name="verifier" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Designation of Verifier </label>
                                                <textarea class="form-control" name="designation_verifier" id="exampleTextarea" rows="1"></textarea>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Contact Number of Verifier</label>
                                                <input type="text" name="contact_verifier" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Date of Verification </label>
                                                <input type="date" name="date_verifier" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Evidence of Verification</label>
                                                <input type="file" name="evidence" class="form-control subject_file">
                                                <input type="hidden" name="file_id">
					                          <div>
					                            <ul>
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
					                                </tbody>
					                              </table>
					                            </ul>
					                          </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>CANDIDATE CLAIMS </th>
                                                        <th>VERIFICATION STATUS </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Type of Degree <input type="hidden" name="key[]" value="Type of Degree"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Serial Number <input type="hidden" name="key[]" value="Serial Number"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Registration Number <input type="hidden" name="key[]" value="Registration Number"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Enrolment Number<input type="hidden" name="key[]" value="Enrolment Number"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Roll Number <input type="hidden" name="key[]" value="Roll Number"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seat Number <input type="hidden" name="key[]" value="Seat Number"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name of Candidate<input type="hidden" name="key[]" value="Name of Candidate"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father Name <input type="hidden" name="key[]" value="Father Name"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Division <input type="hidden" name="key[]" value="Division"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CGPA<input type="hidden" name="key[]" value="CGPA"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Grade <input type="hidden" name="key[]" value="Grade"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dates attended from / to <input type="hidden" name="key[]" value="Dates attended from / to"></td>
                                                        <td>
                                                        	<input type="hidden" name="value1[]" class="form-control">
                                                            <input type="date" name="1_start_date" class="form-control">
                                                            <input type="date" name="1_end_date" class="form-control">
                                                        </td>
                                                        <td>
                                                        	<input type="hidden" name="value2[]" class="form-control">
                                                            <input type="date" name="2_start_date" class="form-control">
                                                            <input type="date" name="2_end_date" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Session <input type="hidden" name="key[]" value="Session"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                         </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Year of Passing<input type="hidden" name="key[]" value="Year of Passing"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Examination Year <input type="hidden" name="key[]" value="Examination Year"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Certificate / Degree Received <input type="hidden" name="key[]" value="Certificate / Degree Received"></td>
                                                        <td>
                                                            <input type="text" name="value1[]" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="text" name="value2[]" class="form-control">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>



        <form method="POST" action="<?php echo base_url()?>admin/litigation_check" enctype="multipart/form-data">
            <div class="modal fade" id="myModal8" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">Litigation Checks </h1>
                        </div>
<input type="hidden" name="lit_id">
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">
                                    <div class="panel-body">
                                      <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Status</label>
                                                <input type="text" name="status" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Type of result</label>
                                                <input type="text" name="type_of_result" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Sources</label>
                                                <select class="form-control" id="exampleSelect1" name="sources">
                                                        <option>Pelease Select</option>
                                                        <option value="Sindh High Court">Sindh High Court</option>
                                                        <option value="Supreme Court Of Pakistan">Supreme Court Of Pakistan</option>

                                                    </select>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Note</label>
                                                <textarea class="form-control" name="note" id="exampleTextarea" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="">Evidence</label>
                                                <input class="form-control subject_file" name="evidence" type="File" value="" id="example-text-input">
                                                <input type="hidden" name="file_id">
						                          <div>
						                            <ul>
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
						                                </tbody>
						                              </table>
						                            </ul>
						                          </div>
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
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <form method="POST" action="<?php echo base_url()?>admin/regulatory_checks" enctype="multipart/form-data">
            <div class="modal fade" id="myModal7" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">Regulatory Checks </h1>
                        </div>
<input type="hidden" name="reg_id">
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">
                                    <div class="panel-body">
                                      <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Name</label>
                                                <input type="text" name="name" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Result</label>
                                                <input type="text" name="result" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="">Evidence</label>
                                                <input class="form-control subject_file" name="evidence" type="File" value="" id="example-text-input">
                                                <input type="hidden" name="file_id">
						                          <div>
						                            <ul>
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
						                                </tbody>
						                              </table>
						                            </ul>
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
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>


















                        
                        <form method="POST" action="<?php echo base_url()?>admin/create_report_request" enctype="multipart/form-data">
                     <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
                         
                         <input type="hidden" name="report_case_id" >
                         <input type="hidden" name="report_subject_id" >
                         <input type="hidden" name="report_activity_id" >
                         
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Create Report</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Name of Applicant</label>
                                            <input name="aplicant_name" type="text" class="form-control" required="This Field is Required...">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Father Nmae</label>
                                            <input name=father_name type="text" class="form-control" required="This Field is Required...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">NIC</label>
                                            <input name="cnic" type="text" class="form-control" required="This Field is Required...">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Address</label>
                                            <input name="address" type="text" class="form-control" required="This Field is Required...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">Contact Detail</label>
                                            <textarea required="This Field is Required..." class="form-control" id="exampleTextarea" name="contact_detail" rows="2"></textarea>
                                        
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
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        

					
</div>
			</div>
              <!--</form>-->
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
  function regulatory(asid) {
	$('[name=reg_id]').val(asid);
}
function nadra(asid) {
	$('[name=subject_id]').val(asid);
}  
  function fbr(asid) {
	$('[name=fbr_id]').val(asid);
}
function client_chat(case_id) {

    $('[name=case_id]').val(case_id);
    load_client_chat(case_id);

  }

  
function cancel_id_assign(case_id) {

    $('[name=case_id_cancel]').val(case_id);

  }

function fund_request_assign_id(case_id,subject_id,activity_id,client_reference,subject_name,type){
    
    $('[name=fund_case_id]').val(case_id);
    $('[name=client_reference]').val(client_reference).text();
    $('[name=fund_subject_id]').val(subject_id);
    $('[name=fund_activity_id]').val(activity_id);
    $('[name=name_of_subject]').val(subject_name);
    $('[name=type_of_service]').val(type);
}
  
function create_report_assign_id(case_id,subject_id,activity_id){
    
    $('[name=report_case_id]').val(case_id);
    $('[name=report_subject_id]').val(subject_id);
    $('[name=report_activity_id]').val(activity_id);
    
}
  
function vendor_assign_id(case_id,subject_id,activity_id,code,type,subject,vendor = null){
    jQuery.ajax({
	    url: '<?php echo base_url() ?>/admin/get_sub_category/'+activity_id,
	    dataType: 'json',
	    cache: false,
	    contentType: false,
	    processData: false,
	    method: 'GET',
	    type: 'GET', // For jQuery < 1.9
	    success: function(response){
	    	//$('.sub_category option').hide()
	    	//console.log(response)
	    	//alert(response)
	    	$('.sub_category option').not('option:first').remove()
	    	if(response.length >= 1){
	    		$('.sub_category').parent().parent().show()
	    	}
	    	else{
	    		$('.sub_category').parent().parent().hide()
	    	}
	    	for (var i = 0; i < response.length; i++) {
	    		$('.sub_category').append('<option value="'+response[i].id+'">'+response[i].name+'</option>')
	    	}
	    }
	})
    $('[name=vendor_case_id]').val(case_id);
    $('[name=vendor_subject_id]').val(subject_id);
    $('[name=vendor_activity_id]').val(activity_id);
    $('.itgs-code').val(code);
    $('[name=type_of_service]').val(type);
    $('#ven_subject').val(subject);
    if(vendor != null){
    	$('[name=last_assign]').val(vendor);
    }
    else{
    	$('[name=last_assign]').val('');
    }
    
}

function vendor_view(id) {
	jQuery.ajax({
	    url: '<?php echo base_url() ?>/admin/get_assign_vendor/'+id,
	    dataType: 'json',
	    cache: false,
	    contentType: false,
	    processData: false,
	    method: 'GET',
	    type: 'GET', // For jQuery < 1.9
	    success: function(response){
	    	console.log(response)
	    	$('#myModal26 [name="vendor_id"] option[value="'+response.vendor_id+'"]').attr('selected', true)
	    	$('#myModal26 [name="type_of_service"]').val(response.type_of_service)
	    	$('#myModal26 [name="remarks"]').val(response.remarks)
	    	$('#myModal26 [name="date_time"]').val(response.date_time)
	    	$('#myModal26 #ven_subject').val(response.subject_name)
	    	$('#myModal26 .itgs-code').val(response.reference_code)
	    	$('#myModal26 [name="charges"]').val(response.charges)
	    }
	})
}
function litigation(asid) {
	$('[name=lit_id]').val(asid);
}
function fund_paid(id,amount) {
	var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today = yyyy+'-'+mm+'-'+dd
//var today = dd+'/'+mm+'/'+yyyy;
	$('[name="fund_id"]').val(id)
	$('[name="amount"]').val(amount)
	$('#myModal11 [name="date"]').val(today)
}
  function customized_report(asid,activity_name,reference_code,date){
	$('[name=s_id]').val(asid);
    $('[name=itgs_reference]').val(reference_code);
    $('[name=activity_name]').val(activity_name);
    $('[name=due_date]').val(date);
    $('#myModalc tbody').empty()
    $('#myModalc table').hide()
    $('.attacment_custamize_id').val('')
    attacment_custamize = []
}
function crimnal(id) {
	$('[name=assign_activity_id]').val(id);
}
function education(id) {
	$('[name=assign_activity_id]').val(id);
}
function past(id) {
	$('[name=assign_activity_id]').val(id);
}
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

var attacment_custamize = []
$('.attacment_custamize').on("change", function (e) {
	var left = $(this).offset().left
	left = parseInt(left) + parseInt($(this).width() / 2)
	var top = $(this).offset().top
	top = parseInt(top) + parseInt($(this).height() + 15)
	$('.img-loader').css('position', 'absolute')
	$('.img-loader').css('left', left+'px')
	$('.img-loader').css('top', top+'px')
	$('.img-loader').css('z-index', '9999')
	$('.img-loader').show()
	var th = $(this)
	var data = new FormData();
    data.append('type', 'subject');
    var id = '0'
    data.append('id', id);
	jQuery.each($(this)[0].files, function(i, file) {
	    data.append('file[]', file);
	});
	jQuery.ajax({
	    url: '<?php echo base_url() ?>/admin/subject_dummy',
	    data: data,
	    cache: false,
	    contentType: false,
	    processData: false,
	    method: 'POST',
	    type: 'POST', // For jQuery < 1.9
	    complete: function(response){
	    	response = response.responseText
	    	response = response.split('[').join('')
	    	response = response.split(']').join(',')
	    	if( 0 in attacment_custamize ) {
		        attacment_custamize[0] += response
		    }
		    else{
		    	attacment_custamize[0] = response
		    }
		    var total = attacment_custamize[id].split(',')
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
			    	$('[name="attacment_custamize_id[]"]').val(attacment_custamize)
			    	$('.img-loader').hide() 
			    }
			})
	    }
	});
})


function report_submission(case_id,ven_id){
	subject_file = []
    $('#case_id_report').parent().parent().parent().find('input').val('')
    $('#case_id_report').parent().parent().parent().find('textarea').val('')
    $('#case_id_report').parent().parent().parent().find('tbody').empty()
    $('#case_id_report').parent().parent().parent().find('table').hide()
          $('#case_id_report').val(case_id);
$('#activity_id_report').val(ven_id)
      
  }
  $('[name="type"]').change(function() {
  	var id = $(this).val()
  	$('.change-type').hide()
  	$('.type-'+id).show()
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



var subject_file = []
$('.subject_file').on("change", function (e) {
  var left = $(this).offset().left
  left = parseInt(left) + parseInt($(this).width() / 2)
  var top = $(this).offset().top
  top = parseInt(top) + parseInt($(this).height() + 15)
  $('.img-loader').css('position', 'absolute')
  $('.img-loader').css('left', left+'px')
  $('.img-loader').css('top', top+'px')
  $('.img-loader').css('z-index', '9999')
  $('.img-loader').show()
  var th = $(this)
  var data = new FormData();
    data.append('type', 'subject');
    var id = 0
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
            $('[name="file_id"]').val(subject_file)
            $('.img-loader').hide() 
          }
      })
      }
  });
});
    </script>
<script type="text/javascript">
  $('.export-report').change(function() {
    var value = $(this).val()
    window.location.href = '<?php echo base_url('admin/export_tm_report/') ?>'+value
  })
  $('.sweets-alert').click(function() {
  	swal({
	  title: "Are you sure?",
	  text: "Fund request has already been generated against this activity would you like to continue?",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Continue",
	  closeOnConfirm: false
	},
	function(){
		swal.close()
		$('.open-modal').first().click()
	  //swal("Deleted!", "Your imaginary file has been deleted.", "success");
	});
  })
  $('.sweets-alert2').click(function() {
  	swal({
	  title: "Are you sure?",
	  text: "The case has already been assigned to vendor. Would you like to continue?",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Continue",
	  closeOnConfirm: false
	},
	function(){
		swal.close()
		$('.open-modal2').first().click()
	  //swal("Deleted!", "Your imaginary file has been deleted.", "success");
	});
  })
  $('.num').keyup(function() {
  	var total = 0
  	$('.num').each(function() {
  		var val = 0
  		if($(this).val() != null && $(this).val() != ''){
  			val = parseInt($(this).val());
  		}
  		total = total + val;
  	})
  	$('.totals').val(total)
  })
</script>
<div class="img-loader" style="display: none"><img src="<?php echo base_url('admin_assets/img/Ajax-loader.gif') ?>"></div>
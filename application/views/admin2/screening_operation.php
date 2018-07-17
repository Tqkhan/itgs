  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript">
      $(document).on('keyup','#tags',function(){
    $( "#tags" ).autocomplete({
      source:function(request,response){
                  $.post("<?= base_url('admin/get_case_reference') ?>",{'name':$( "#tags" ).val()}).done(function(data, status){

                    response(JSON.parse(data));
        });
      }
    });
});
    </script>

    	<!-- /.Navbar  Static Side -->
			<div class="control-sidebar-bg"></div>
			<!-- Page Content -->
			<div id="page-wrapper">
				<!-- main content -->
				<div class="content">
					<!-- Content Header (Page header) -->
					<div class="content-header">
						<div class="header-icon">
							<i class="pe-7s-box1"></i>
						</div>
						<div class="header-title">
							<h1>Screening Operation</h1>

							<ol class="breadcrumb">
								 <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">Screening Operation</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Screening Operation</h4>
									</div>
								</div>
								<div class="panel-body">
<div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body panel-bd panel">

                              <?php if ($_SESSION['role']!="PM"): ?>
                                 <form action="<?php echo base_url()?>admin/screening_operation" method="post">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-4">
                                        <label for="">Start Date</label>
                                        <input type="date" name="start_date" class="form-control" >
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="">End Date</label>
                                            <input type="date" class="form-control" id="" name="end_date">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="">Status</label>
                                            <select name="status" class="form-control">
                                              <option value="">Select Status</option>
                                              <option value="1">Pending</option>
                                              <option value="7">In Progress</option>
                                              <option value="5">Completed</option>
                                              <option value="4">Cancel</option>
                                              <option value="8">On Hold</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                         <button type="submit" class="btn btn-primary pull-right">Search</button>
                                        </div>
                                    </div>
                                    </form>
                             <?php else: ?>

                             <form action="<?php echo base_url()?>admin/screening_operation" method="get">
                                    <div class="form-group row">
                                       
                                        <div class="form-group col-lg-4">
                                            <label for="">Search Case By ITGS Reference</label>
                                            <input type="text" name="reference_code" id="tags" class="form-control" value="<?php echo $_GET['reference_code'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                         <button type="submit" class="btn btn-primary pull-right">Search</button>
                                        </div>
                                    </div>
                                    </form>
  
                              <?php endif; ?>
                               


                                    </div>
                                    </div>
                                    </div>
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
          <th>Id</th>
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
//print_r($progress_subject);

  $subject_array = $this->db->get_where('subject_case',array('case_id'=>$case['id']))->result_array();
  if ($_SESSION['role'] == 'CM' || $_SESSION['role'] == 'manger') {
   $assign = $this->db->get_where('subject_case',array('case_id'=>$case['id'],'is_assigned'=>'0'))->result_array();
  }
  else{
    // $this->db->select('count(ctm.id) as cid')
    //          ->from('subject_case s')
    //          ->join('case_request c', 's.case_id = c.id')
    //          ->join('client cl', 'cl.client_id = c.client_id')
    //          ->join('case_team_members ctm', 'ctm.subject_id = s.id', 'left')
    //          ->join('case_team ct', 'ct.subject_id = s.id', 'left')
    //          ->where('c.id',$case['id'])
    //          ->where('ct.team_lead_id', $_SESSION['id'])
    //          ->or_where('cl.employee_id', $_SESSION['id'])
    //          //->where('s.is_assigned', '1')
    //          ->group_by('s.id')
    //          ->having("cid = 0", null, false);
    // $assign = $this->db->get()->result_array();
    $assign = $this->db->query("SELECT count(ctm.id) as cid FROM `subject_case` `s` JOIN `case_request` `c` ON `s`.`case_id` = `c`.`id` JOIN `client` `cl` ON `cl`.`client_id` = `c`.`client_id` LEFT JOIN `case_team_members` `ctm` ON `ctm`.`subject_id` = `s`.`id` LEFT JOIN `case_team` `ct` ON `ct`.`subject_id` = `s`.`id` WHERE `c`.`id` = '".$case['id']."' AND (`ct`.`team_lead_id` = '".$_SESSION['id']."' OR `cl`.`employee_id` = '".$_SESSION['id']."') GROUP BY `s`.`id` HAVING cid = 0")->result_array();
    //print_r($this->db->last_query());die;
//$assign = $this->db->get_where('subject_case',array('case_id'=>$case['id'],'is_assigned'=>'0'))->result_array();
}

$this->db->select('s.*','count(c.id) as cid')
             ->from('subject_case s')
             ->join('case_aplicant c', ' c.assigned_subject_id=s.id','left')
             ->where('s.case_id',$case['id'])
             ->group_by('s.id')
             ->having("count(c.id) <= 0");
$result=$this->db->get()->result_array();
  ?>

				<tr>
	<td><span class="footable-toggle"></span><?php echo $case['id'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['client_reference'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo date('d-m-Y H:i:s', strtotime($case['case_date'])) ?></td>
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
	echo "Completed";
	} ?>
	
	</td>
	<?php
	//$chat_url = 'http://www.itgsverify.com/admin_assets//img/chat.png';
  $chat_url = base_url('admin_assets/img/chat.png');
	//$detail_url = 'http://www.itgsverify.com/admin_assets//img/view.png';
  $detail_url = base_url('admin_assets/img/view.png');
	//$report_url = 'http://www.itgsverify.com/admin_assets//img/article-icon.png';
  $report_url = base_url('admin_assets/img/article-icon.png');
	?>
	
	<td>

    <?php if ($_SESSION['role']!="PM"): ?>
      
	   <!-- <a href="" data-toggle="modal" data-target="#myModals" onclick="fund_request_assign_id(<?php echo $case['id'] ?>,'<?php echo $case['reference_code']?>')"><img src="<?php echo base_url(); ?>/admin_assets/img/found.png" title="Fund Request" alt="" width="25" height="25"></a> -->


	    <a href="" class="chat-con" data-toggle="modal" data-target="#myModal1" onclick="client_chat( <?php echo $case['id'] ?>,<?php echo $case['client_id'] ?>,'client')">
        <img src="<?php echo $chat_url; ?>"  title="Start Chat" alt="Start Chat" width="25" height="25">
        <?php if ($case['chat'] > 0) {
    echo '<span class="con-chat">'.$case['chat'].'</span>';
  } ?>
      </a>
	    
	<a href="<?php echo base_url() ?>admin/form1/<?php echo $case['id'] ?>"><img src="<?php echo $detail_url; ?>" title="View Detail" alt="View Detail" width="25" height="25"></a>
       <?php if ($case['employee_id'] == $_SESSION['id']) {?>
       <a <?php if($case['case_status']!=4 && $case['case_status']!=5) { ?> href="" data-toggle="modal" data-target="#myModal2" <?php } else{ echo 'href="#"'; } ?>  onclick="report_submission(<?php echo $case['id'] ?>,<?php echo $case['client_id'] ?>)" ><img src="<?php echo $report_url; ?>"  title="Report Submission" alt="Start Chat" width="25" height="25"></a>

<?php } ?>
       <a href="<?php echo base_url() ?>admin/view_report_case/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" title="View Report" alt="View Report" width="25" height="25"></a>
<?php
if ($case['employee_id'] == $_SESSION['id']) {

if(!empty($result)){?>
 <a href="" data-toggle="modal" data-target="#myModal" onclick='applicant(<?php echo $case['id'] ?>,<?php echo json_encode($result); ?>)'><img src="<?php echo base_url('admin_assets/img/report.png') ?>" title="Create Report" alt="Create Report" width="25" height="25"></a>
<?php } else { ?>
<a href="<?php echo base_url() ?>admin/edit_report_case/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo base_url('admin_assets/img/edit.png') ?>" title="Edit Report" alt="Edit Report" width="25" height="25"></a>
<?php } }else{?>
<a <?php if($case['case_status']!=4 && $case['case_status']!=5) { ?> href="" data-toggle="modal" data-target="#myModal20" <?php } else{ echo 'href="#"'; } ?>  onclick="report_tl_submission(<?php echo $case['id'] ?>)" ><img src="<?php echo $report_url; ?>"  title="Report Submission" alt="Start Chat" width="25" height="25"></a>
<?php } ?>
<?php 
  if (!empty($assign)) {
    ?>
       <a href="" data-toggle="modal" data-target="#myModal6" onclick='assign_vendor(<?php echo $case['id'] ?>,<?php echo json_encode($subject_array); ?>)'><img src="<?php echo base_url('admin_assets/img/found.png') ?>"  title="Assign to Vendor" alt="Assign to Vendor" width="25" height="25"></a>
       <?php } ?>
   <a href="" data-toggle="modal" data-target="#myModal22" onclick='status_report(<?php echo $case['id'] ?>,<?php echo $case['client_id'] ?>)'><img src="<?php echo base_url('admin_assets/img/status_update.png') ?>" title="Status Update" alt="Status Update" width="25" height="25"></a>    
   <a href="<?php echo base_url() ?>admin/case_status_report/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo base_url() ?>admin_assets/img/status_log.png" title="Status log Report" alt="" width="25" height="25"></a>


<!-- team -->
<?php 
  if (!empty($assign)) {
    ?>
      <a href="<?php echo base_url() ?>admin/assign_team/<?php echo $case['id'] ?>"  <?php if($case['case_status']==4 || $case['case_status']==5) { echo "onclick='return false;'"; } ?>><img src="<?php echo base_url('admin_assets/img/assign_team.png') ?>" title="Assign Team" alt="Assign Team" width="25" height="25"></a>
      <a href="<?php echo base_url() ?>admin/itself/<?php echo $case['id'] ?>"  <?php if($case['case_status']==4 || $case['case_status']==5) { echo "onclick='return false;'"; } ?>><img src="<?php echo base_url('admin_assets/img/self.png') ?>" title="Self" alt="Self" width="25" height="25"></a>
  <?php } else{ ?>
  <a href="<?php echo base_url() ?>admin/edit_team/<?php echo $case['id'] ?>"  <?php if($case['case_status']==4 || $case['case_status']==5) { echo "onclick='return false;'"; } ?>><img src="<?php echo base_url('admin_assets/img/edit_team.png') ?>" title="Edit Team" alt="Edit Team" width="25" height="25"></a>
  <?php } ?>

    <?php else: ?>
        <a href="<?php echo base_url() ?>admin/form1/<?php echo $case['id'] ?>"><img src="<?php echo $detail_url; ?>" title="View Detail" alt="View Detail" width="25" height="25"></a>

    <?php endif ?>

<!-- team -->
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
				</div> <!-- /.main content -->
        <form method="POST" action="<?php echo base_url()?>admin/insert_fund_request_case" enctype="multipart/form-data">
              
               <input type="hidden" name="fund_case_id" >
                         <input type="hidden" name="fund_subject_id" >
                         <input type="hidden" name="fund_activity_id" >

                     <div class="modal fade" id="myModals" tabindex="-1" role="dialog" >
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
                                            <input name="date_time" required="" type="date" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">ITGS Caes Ref No</label>
                                            <input name="client_reference" type="text" class="form-control">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        
                                        <div class="form-group col-lg-12">
                                            <label for="">Mode of Payment for Official Fee</label>
                                            <div class=" checkbox-info checkbox-circle">
                                                        <input id="checkbox8" type="radio" required=""  name="mode_of_payment" value="Cash">
                                                        <label for="checkbox8">Cash</label>
                                                         <input id="checkbox9" type="radio" required=""  name="mode_of_payment" value="Payorder">
                                                        <label style="margin-left: 34px;" for="checkbox9">Payorder</label>
                                                    </div>
                                                   
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Official Fee</label>
                                            <input name="official_fee" type="text" required="" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Vendor Charges</label>
                                            <input name="vendor_changes" type="text" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Easy Paisa Charges</label>
                                            <input name="easy_paisa_charges" type="text" required="" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Mobi Cash Charges</label>
                                            <input name="mobi_cash_charges" type="text" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Bank Commission</label>
                                            <input name="bank_commission" type="text" required="" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Postage & Couries Charges</label>
                                            <input name="postage_courier" type="text" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Other Charges</label>
                                            <input name="other_charges" type="text" required="" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Total Cost</label>
                                            <input name="total_cost" required="" type="text" class="form-control">
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
        <form  method="POST" action="<?php echo base_url()?>admin/insert_status" enctype="multipart/form-data">
            <div class="modal fade" id="myModal22" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">Status Update Report</h1>
                        </div>
                            <input type="hidden" id="case_id" name="case_id">
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">

                                    <div class="panel-body">

                                        <div class="form-group row">
                                            <div class="form-group col-lg-12">
                                                <label for="">Remarks</label>
                                                <input type="hidden" name="employee_id">
                                                <input type="text" name="remarks" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="">Attachment</label>
                                                <input type="file" name="file" class="form-control" id="" placeholder="">
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
        <form  method="POST" action="<?php echo base_url()?>admin/insert_aplicant" enctype="multipart/form-data">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="modal-title">APPLICANT / SUBJECT INFORMATION</h1>
                        </div>
                        <form id="insert">
                            <input type="hidden" id="case_id" name="case_id">
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-bd">

                                    <div class="panel-body">

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Reference Number</label>
                                                <input type="text" name="reference_number" value="<?php echo $case['client_reference'] ?>" class="form-control" id="" readonly placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Date Requested</label>
                                                <input type="text" name="request_date" readonly value="<?php echo $case['case_date'] ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Reporting Date </label>
                                                <input type="text" name="report_date" value="<?php echo $case['case_due_date'] ?>" readonly class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Address </label>
                                                <input type="text" name="address" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Father/Husband Name</label>
                                                <input type="text" name="father_husband_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Mother Name </label>
                                                <input type="text" name="mother_name" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Date of Birth </label>
                                                <input type="date" name="date_of_birth" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Place of Birth </label>
                                                <input type="text" name="place_of_birth" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Passport Number</label>
                                                <input type="text" name="passport_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">National ID Number (CNIC#) </label>
                                                <input type="text" name="cnic" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">National Tax Number (NTN)</label>
                                                <input type="text" name="ntn" class="form-control">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Assign Subject</label>

                                                 <select name="subject_id" class="form-control subjects">
                                               <option value="">Select Subject</option>
                                                  </select>
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
                      </form>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                        <input type="hidden" value="<?php echo $_SESSION['employee_name'] ?>" name="sender_id">
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
                    <!--    <p class="pull-right">Poworwed by </ -->
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 857px; margin-left: -122px">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h1 class="modal-title">Case Report Submission</h1>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url()?>admin/insert_report" enctype="multipart/form-data">

                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
              <div class="panel panel-bd" >

                <div class="panel-body" >

                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Report Attached <span class="required">*</span></label>
                      <div class="col-sm-9">
                          
                          <input class="form-control subject_file" type="file" name="attachment" multiple=""  id="" placeholder="" required>
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
                          <input type="hidden" name="c_id">
                          <input type="hidden" name="case_id_report" id="case_id_report">
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


<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 857px; margin-left: -122px">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h1 class="modal-title">Case Report Submission</h1>
                    </div>

                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url()?>admin/insert_tl_report" enctype="multipart/form-data">

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
                          <input type="hidden" name="case_id_report" id="case_id_tl_report">
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


<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                  <div class="modal-content" style="width: 857px; margin-left: -122px">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h1 class="modal-title">Assign To Vendor</h1>
                    </div>

                    <div class="modal-body">
                      <form method="POST" action="<?php echo base_url()?>admin/vendor_assign" enctype="multipart/form-data">
<input type="hidden" name="case_id" class="vendor_case_id">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
              <div class="panel panel-bd" >

                <div class="panel-body" >
                  <div class="form-group row" style="display: none">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Subject <span class="required">*</span></label>
                      <div class="col-sm-9">
                          
                          <select name="subject_id[]" multiple="" class="form-control selectpicker1 subject_array">
                            <option value="">Select Subject</option>
                          </select>
                          
                      </div>
                      
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Vendor <span class="required">*</span></label>
                      <div class="col-sm-9">
                          
                          <select name="team_lead" class="form-control ">
                            <option value="">Select Vendor</option>
                            <?php
                             foreach ($members as $member) {
                                echo '<option value="'.$member['id'].'">'.$member['employee_name'].'</option>';
                              } 
                            ?>
                          </select>
                          
                      </div>
                      
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Vendor Charges <span class="required">*</span></label>
                      <div class="col-sm-9">
                          
                          <input type="number" name="charges" class="form-control">
                          
                      </div>
                      
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Report Attached <span class="required">*</span></label>
                      <div class="col-sm-9">
                          
                          <input class="form-control subject_file" type="file" multiple="" name="attachment"  id="" placeholder="" required>
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
                  
<div class="form-group row">
                      <label for="example-text-input" class="col-sm-3 col-form-label">Remarks</label>
                      <div class="col-sm-9">
                          
                          <textarea class="form-control" name="remarks"></textarea>
                          
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
			</div><!-- /#page-wrapper -->
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->

<script>
$(document).ready(function() {
  $(".selectpicker1").selectpicker();
})
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
    load_client_chat($('#chat_form [name=case_id]').val());
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
    $('#chat_form [name=case_id]').val(case_id);
    $('#chat_form [name=employee_id]').val(u_id);
    $('#chat_form [name=employee_type]').val(type);
    load_client_chat(case_id);

  }
  
  
  function report_submission(case_id,u_id){
    subject_file = []
    $('#case_id_report').parent().parent().parent().find('input').val('')
    $('#case_id_report').parent().parent().parent().find('textarea').val('')
    $('#case_id_report').parent().parent().parent().find('tbody').empty()
    $('#case_id_report').parent().parent().parent().find('table').hide()
    $('#case_id_report').val(case_id);
    $('#myModal2 [name=c_id]').val(u_id);

      
  }
  function report_tl_submission(case_id){
    subject_file = []
    $('#case_id_tl_report').parent().parent().parent().find('input').val('')
    $('#case_id_tl_report').parent().parent().parent().find('textarea').val('')
    $('#case_id_tl_report').parent().parent().parent().find('tbody').empty()
    $('#case_id_tl_report').parent().parent().parent().find('table').hide()
          $('#case_id_tl_report').val(case_id);

      
  }
function applicant(case_id,subjects) {
    // alert(subject_id+ " "+case_id);
    $('#case_id').val(case_id);
    $('select.subjects').empty()
    $('select.subjects').append('<option value="">Select Subject</option>')
    for (var i = 0; i < subjects.length; i++) {
      $('select.subjects').append('<option value="'+subjects[i]['id']+'">'+subjects[i]['subject_name']+'</option>')
    }
  }
  function fund_request_assign_id(case_id,client_reference){
    
    $('[name=fund_case_id]').val(case_id);
    $('[name=client_reference]').val(client_reference).text();
}
  function assign_vendor(id,subjects) {
    subject_file = []
    $('.vendor_case_id').parent().parent().parent().find('input').val('')
    $('.vendor_case_id').parent().parent().parent().find('textarea').val('')
    $('.vendor_case_id').parent().parent().parent().find('tbody').empty()
    $('.vendor_case_id').parent().parent().parent().find('table').hide()
    $('.vendor_case_id').val(id)
    $('select.subject_array').empty()
    $('select.subject_array').append('<option value="">Select Subject</option>')
    for (var i = 0; i < subjects.length; i++) {
      $('select.subject_array').append('<option value="'+subjects[i]['id']+'" selected>'+subjects[i]['subject_name']+'</option>')
      if(i + 1 == subjects.length){
        $('.selectpicker1').selectpicker('refresh');
      }
    }
  }
  function status_report(id,u_id) {
    $('#myModal22 #case_id').val(id);
    $('#myModal22 [name="employee_id"]').val(u_id);
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
<style type="text/css">
  .dropdown-menu.open {
    z-index: 99;
}
</style>
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
    window.location.href = '<?php echo base_url('admin/export_cm_report/') ?>'+value
  })
</script>
<div class="img-loader" style="display: none"><img src="<?php echo base_url('admin_assets/img/Ajax-loader.gif') ?>"></div>
<script type="text/javascript">
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
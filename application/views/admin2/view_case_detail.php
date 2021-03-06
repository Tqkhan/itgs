

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
                <h1>View Case Request</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url() ?>admin/case_dashboard">Case Dashboard</a></li>
                    <li class="active">View Case Request</li>
                </ol>
            </div>
        </div> <!-- /. Content Header (Page header) -->


        <div class="row">
      <div class="col-sm-12">
        <form method="post" action="<?php echo base_url() ?>admin/insert_training_hr" enctype="multipart/form-data">
          <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Case Request</h4>
                </div>
            </div>
            
             <div class="panel-body">
              <h4><strong>Case Details:</strong> </h4>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Client Refrence:</dt> <dd><?php echo $client_details['client_reference'] ?></dd>
                    <dt>ITGS Refrence:</dt> <dd><?php echo $client_details['reference_code'] ?></dd>
                    <dt>Date:</dt> <dd>  <?php echo $client_details['case_date'] ?></dd>

                </dl>
              </div>
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Due Date:</dt> <dd>
                        <?php
                         if($client_details['due_date_type']==2){
                        echo "Component Wise";
                        }else if($client_details['due_date_type']==3)
                        {
                        echo $client_details['case_due_date'];
                        }
                        ?>
                        </dd>
                    <dt>Vendor Name:</dt> <dd>  <?php echo $vendor['employee_name'] ?></dd>
                </dl>
              </div>
            </div>
            <?php
            $j=1;
            foreach ($subjects as $subject):

             $activities=$this->db->query("select subject_activities.*,scope_of_work.scope_name, assign_activity_to_user.id as aid, assign_activity_to_user.is_report, assign_activity_to_user.hold_status from subject_activities inner JOIN scope_of_work on (subject_activities.activity_id=scope_of_work.id) left join assign_activity_to_user on assign_activity_to_user.activity_id = subject_activities.activity_id and assign_activity_to_user.case_id = subject_activities.case_id where subject_activities.subject_id='".$subject['id']."'")->result_array();
             ?>
             <div class="panel-default panel">
  <div class="panel-heading" style="background-color: #7dbbdf;">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $j; ?>">Subject <?php echo $j ?> Details:</a>
    </h4><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $j; ?>"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="false"></i></span></a>
  </div>
  <div id="collapse<?php echo $j; ?>" class="panel-collapse collapse after-add-more">
    <div class="panel-body">
      <div class="row">
          <div class="col-lg-5">
          <dl class="dl-horizontal">

              <dt>Subject Name:</dt> <dd><?php echo $subject['subject_name'] ?></dd>
              <dt>Details:</dt> <dd><?php echo $subject['other_details'] ?></dd>
          </dl>
        </div>
        <div class="col-lg-5">
          <dl class="dl-horizontal">
              <dt>Subject Type:</dt> <dd><?php echo $subject['subject_type'] ?></dd>
              <dt>Attachement:</dt> <dd>

                  <?php if($subject['subject_attachement']!=""){ 
                    $subject_attachement=explode(",",$subject['subject_attachement']);
                    for($l=0;$l<count($subject_attachement);$l++){
                    ?>
                  <a download=""  target="_blank" href="<?php echo base_url() ?>uploads/attachment/<?php echo $subject_attachement[$l] ?>">View Attachement</a>
                  <?php } }else{ ?>

                  No Attachment
                  <?php } ?>
                  </dd>
          </dl>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
           <div> <p><strong><u>Subject Activities:</u></strong></p></div>
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Serial #</th>
                  <th>Name</th>
                  <th>Attachment</th>
                  <th>Due Date</th>
                  <?php 
                    if ($_SESSION['client_id']) {
                      # code...
                    }
                    else{
                      echo "<th>Status</th>";
                    }
                  ?>
                </tr>
              </thead>
            <tbody>
              <?php
              $k=1;
              foreach ($activities as $activity): ?>
              <tr>
                <td><?php echo $k; ?></td>
                <td><?php echo $activity['scope_name'] ?></td>
                <td>

                 <?php if($activity['activity_attachement']!=""){
                $activity_attachement=explode(",",$activity['activity_attachement']);
                for($l=0;$l<count($activity_attachement);$l++){
                ?>
                    <a download href="<?php echo base_url() ?>uploads/activity_attachment/<?php echo $activity_attachement[$l] ?>">View Attachment</a>
                    <?php
                }

                //$without=$str=ltrim($activity['activity_attachement']);
                // echo $without;
                }
                else if ($activity['activity_attachement']==""){
                    echo "No Attachment";
                    } ?></td>
                <td><?php echo $activity['due_date'] ?></td>
                <?php 
                  if ($_SESSION['client_id']) {
                    # code...
                  }
                  else{
                    if ($activity['aid']) {
                      if ($activity['is_report'] == 1) {
                        echo '<td>Completed</td>';
                      }
                      elseif ($activity['hold_status'] == 1) {
                        echo '<td>OnHold</td>';
                      }
                      else{
                        $vendor = $this->db->query('select id from assign_vendor_request where case_id = '.$subject['id'].' and activity_id ='.$activity['activity_id'])->result_array();
                        $fund = $this->db->query('select id from fund_request_activity where case_id = '.$subject['id'].' and activity_id ='.$activity['activity_id'])->result_array();
                        if (!empty($vendor)) {
                          $type = 'Vendor';
                        }
                        elseif (!empty($fund)) {
                          $type = 'IA';
                        }
                        else{
                          $type = 'Team';
                        }
                        echo '<td>Pending at '.$type.'</td>';
                      }
                    }
                    else{
                      echo '<td>Pending</td>';
                    }
                  }
                ?>
              </tr>
              <?php
              $k++;
               endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <?php
              $j++;
             endforeach ?>
             <?php if ($_SESSION['role'] == 'CM' || $_SESSION['role'] == 'TL') {
             ?>
             <?php
              if($client_details['case_status'] == 4 || $client_details['case_status'] == 5) {
             ?>
      <?php 
        } else if($client_details['case_status'] != 8){
      ?>
      <a href="<?= base_url() ?>admin/put_onhold/<?php echo $client_details['id'] ?>" class="btn btn-warning pull-right">Put OnHold</a>
      <?php 
        } else{
      ?>
      <a href="<?= base_url() ?>admin/put_unhold/<?php echo $client_details['id'] ?>" class="btn btn-warning pull-right">Put UnHold</a>
      <?php 
        } }
      ?>

</div>
             </div>
            </form>
            <?php
            $select_request=$this->db->get_where('modal_form1',['case_id'=>$client_details['id']])->row_array();

            if(!$_SESSION['client_id']){ ?>
               <?php if($select_request){ ?>


           <table class="table table-responsive">
              <thead>
                <tr>
                  <th>ITGS Refrence</th>
                  <th>Reason</th>
                  <th>Other Specification</th>
                  <th>Suggestion</th>
                </tr>
              </thead>
            <tbody>

              <tr>
                <td><?php echo $select_request['itgs_reference'] ?></td>
                <td><?php echo $select_request['reason'] ?></td>
                <td><?php echo $select_request['other_specification'] ?></td>
                <td><?php echo $select_request['suggestion'] ?></td>

              </tr>

            </tbody>
          </table>
         <a href="<?php echo base_url() ?>admin/cancel_case/<?php echo $client_details['id'] ?>?approve=4" class="btn btn-danger pull-right">Approve</a>
         <a href="<?php echo base_url() ?>admin/cancel_case/<?php echo $client_details['id'] ?>?approve=6" class="btn btn-info pull-right">Reject</a>

           <?php }
           } ?>

           <?php
                if ($_SESSION['role'] == 'Internal Auditor' && $f['is_approve'] == 0) {
            ?>
            <a href="<?php echo base_url() ?>admin/update_case_fund?request_id=<?php echo $id ?>&case_id=<?php echo $client_details['id'] ?>&status=1" class="btn btn-success">Approve</a>
            <a href="<?php echo base_url() ?>admin/update_case_fund?request_id=<?php echo $id ?>&case_id=<?php echo $client_details['id'] ?>&status=2" class="btn btn-danger">Reject</a>
            <?php } ?>
<div style="height:180px;"></div>
</div><!-- /#wrapper -->
</div>
</div>
</div>
</div>
<!-- START CORE PLUGINS -->




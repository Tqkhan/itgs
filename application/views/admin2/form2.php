

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
.bootstrap-select .bootstrap-select {
    display: none !important;
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
                <h1>Assign Team</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Assign Team</li>
                </ol>
            </div>
        </div> <!-- /. Content Header (Page header) -->


        <div class="row">
      <div class="col-sm-12">
          <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Team Detail</h4>
                </div>
            </div>
            <div class="panel-body">
              <h4><strong>Client Details:</strong> </h4>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Name:</dt> <dd><?php echo $client_details['client_name'] ?></dd>
                    <dt>Reference Code:</dt> <dd>  <?php echo $client_details['reference_code'] ?></dd>
                    <dt>Services:</dt> <dd><?php echo $client_details['service_id'] ?></dd>
                    <dt>Email:</dt> <dd><?php echo $client_details['email'] ?></dd>
                    
                </dl>
              </div> 
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Type:</dt> <dd><?php echo $client_details['client_type'] ?></dd>
                    <dt>Country / Region:</dt> <dd><?php echo $client_details['country_name'] ?>- <?php echo $client_details['country_code'] ?></dd>
                    <dt>Status:</dt> <dd> <?php if ($client_details['status']==1){ ?>
                      Active
                    <?php }else{
                      echo "Inactive";
                    } ?></dd>
                    <dt>Contract Start Date:</dt> <dd>  <?php echo $client_details['contract_start_date'] ?></dd>
                    <dt>Contract End Date:</dt> <dd>  <?php echo $client_details['contract_end_date'] ?></dd>

                </dl>
              </div>
            </div>
             <div class="panel-body">
              <h4><strong>Case Details:</strong> </h4>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Client Refrence:</dt> <dd><?php echo $client_details['client_reference'] ?></dd>
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
                </dl>
              </div>
            </div>
            <?php 
            $j=1;
            $set = 0;
            foreach ($subjects as $subject):
              if ($_SESSION['role'] == 'CM') {
                $assigned_sub=$this->db->get_where('case_team',['subject_id'=>$subject['id']])->row_array();
                if (empty($assigned_sub)) {
                  $set = 1;
                }
                else{
                  $set = 0;
                }
              }
              else{
                $set = 1;
              }

             $activities=$this->db->query("select subject_activities.*,scope_of_work.scope_name from subject_activities inner JOIN scope_of_work on (subject_activities.activity_id=scope_of_work.id) where subject_activities.subject_id='".$subject['id']."'")->result_array();
             // print_r($activities);
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
                  <th>Date</th>
                </tr>
              </thead>
            <tbody>
              <?php 
              $k=1; 
              foreach ($activities as $activity): ?>
              <tr>
                <td><?php echo $k; ?></td>
                <td><?php echo $activity['scope_name'] ?></td>
                <td><?php if($activity['activity_attachement']!=""){ 
                $activity_attachement=explode(",",$activity['activity_attachement']);
                for($l=0;$l<count($activity_attachement);$l++){
                ?>
                    <a download href="<?php echo base_url() ?>uploads/activity_attachment/<?php echo $activity_attachement[$l] ?>">View Attachment</a>,
                    <?php 
                    // echo $activity['activity_attachement'];
                }
                }else{
                    echo "No Attachment";
                    } ?>
                    </td>
                <td><?php echo $activity['due_date'] ?></td>
                
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
</div>
             </div>

  <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd ">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Assign Team</h4>
                                    </div>
                                </div>
<div class="panel-body">
    <div class="row">
         <div class="col-lg-1"></div>
        <div class="col-sm-12 col-md-8 col-lg-10 text-center">
            <form method="post" class="f1" action="<?php echo base_url() ?>admin/insert_team">
                <h3 class="m-t-0">Create Your Team</h3>
                
                <fieldset>
<?php if($set == 1){ ?>                    
<br><br>
                    <input type="hidden" value="<?php echo $subject['case_id'] ?>" name="case_id">
                    <div class="form-group row">
                           <div class="col-lg-3">
                               <label for="example-text-input" class="col-sm-12 col-form-label">Select Subject : </label>
                           </div>
                       <div class="col-lg-9">
                           
                           
                         <select class="form-control selectpicker" multiple id="select" name="subject_id[]">
                             <option>Please Select</option>
 <?php foreach ($subjects as $subject):
 
 
                             $assigned_sub=$this->db->get_where('case_team_members',['subject_id'=>$subject['id']])->row_array();
                             
                            
                             
                             if(!$assigned_sub){
 ?>
                                <option value="<?php echo $subject['id'] ?>"><?php echo $subject['subject_name'] ?></option>
                                          <?php
                             }else{
                                 ?>
                                 
                                 <option disabled="" value="<?php echo $subject['id'] ?>"><?php echo $subject['subject_name'] ?> - Already Assigned</option>
                                 <?php
                             }
                                          endforeach ?>
                         </select>
                       </div>
                    </div>

                    <div id="company1" class="con"   >
                       <?php 
                                    if ($_SESSION['role'] == 'CM') {
                                  ?>
                    <div class="form-group row">
                                  <label for="example-text-input" class="col-sm-3 col-form-label">Select Team Lead<span class="required">*</span></label>
                                   <div class="col-sm-9">
                                 
                                        <select class="form-control" id="team" name="team_lead">
                                            <option value="">Please Select</option>
                                          <?php foreach ($members as $member): ?>
                                            <option value="<?php echo $member['id'] ?>"><?php echo $member['employee_name'] ?></option>
                                          <?php endforeach ?>
                                        </select>
                                  
                                    </div>
                    </div>
                    <?php
                                    } elseif ($_SESSION['role'] == 'TL'){ 
                                  ?>
                                  <input type="hidden" name="team_lead" value="<?php echo $_SESSION['id'] ?>">
                                  <?php 
                                    }
                                  ?>
                    <div class="form-group row team_member">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Assign Team Members<span class="required">*</span></label>
                                   <div class="col-sm-9">
                                       <select   class="selectpicker form-control" multiple name="team_member[]">
                                         <option>Select Member</option>
                                          <?php foreach ($members1 as $member1): ?>
                                            <option value="<?php echo $member1['id'] ?>"><?php echo $member1['employee_name'] ?></option>
                                          <?php endforeach ?>
                                         
                                       </select>
                                    </div>
                    </div>
                    </div>

                    <div class="f1-buttons">
                        <button type="submit" class="btn btn-success btn-submit">Submit</button>
                    </div>
                    <?php } ?>
                    <div>
                        <a href="<?php echo base_url()?>/admin/full_case_summary/<?php echo $subject['case_id'] ?>" class="btn btn-info btn-submit">View Team</a>
                    </div>
                </fieldset>
               
              
            </form>
        </div>
         <div class="col-lg-1"></div>
    </div>
</div>
                            </div>
                        </div>
                    </div>
</div> <!-- /.main content -->
</div><!-- /#wrapper -->
</div>
</div>
<!-- START CORE PLUGINS -->
<?php 
  if ($_SESSION['role'] == 'CM') {
?>
<script type="text/javascript">
  $('#team').change(function() {
    if($(this).val() != null && $(this).val() != ''){
      $('.team_member').hide()
    }
    else{
      $('.team_member').show()
    }
  })
</script>                           
<?php } ?>   
<style type="text/css">
  .dropdown-menu.open {
    z-index: 99;
}
</style>
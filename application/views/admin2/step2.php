

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
                <h1>New Case Request</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url() ?>admin/case_dashboard">Case Dashboard</a></li>
                    <li class="active">New Case Request</li>
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
                    <dt>Client Reference:</dt> <dd><?php echo $client_details['client_reference'] ?></dd>
                    <dt>ITGS Reference:</dt> <dd><?php echo $client_details['reference_code'] ?></dd>
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
                        ?></dd>
                </dl>
              </div>
            </div>
            
            <h3>Subjects</h3>
            
            <?php 
            
            $j=1;
            foreach ($subjects as $subject):
            $check_activity=$this->db->get_where('subject_activities',['subject_id'=>$subject['id']])->row_array();
            if(!$check_activity){
          ?>
                 <div class="row ">
          <div class="col-lg-5">
          <dl class="dl-horizontal">

              <dt>Subject Name:</dt> <dd><?php echo $subject['subject_name'] ?></dd>
              <dt>Details:</dt> <dd><?php echo $subject['other_details'] ?></dd>
          </dl>
        </div> 
        <div class="col-lg-5">
          <dl class="dl-horizontal">
              <dt>Subject Type:</dt> <dd><?php echo $subject['subject_type'] ?></dd>
              <dt>Attachment:</dt> <dd>
              <?php if($subject['subject_attachement']!=""){ ?>
                  <a download=""  target="_blank" href="<?php echo base_url() ?>uploads/attachment/<?php echo $subject['subject_attachement'] ?>">View Attachment</a>
                  <?php }else{ ?>
                  
                  No Attachment
                  <?php } ?>
              </dd>
          </dl>
            <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal" onclick="set_id(<?php echo $subject['id'] ?>,<?php echo $client_details['id'] ?>)">Assign Activities</button>

        </div>
      </div>
            <?php  
            }
            $j++;
            
            endforeach ?>
</div>
             </div>
            </form>   
</div> <!-- /.main content -->

<div class="panel panel-bd lobidisable lobipanel lobipanel-sortable" data-inner-id="itMhsQ0PHV" data-index="0">


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
																										<th>Price</th>
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
	<td class="price"><span class="footable-toggle"></span><?php echo $case['price'] ?></td>
	</tr>
						<?php
						$total+=$case['price'];
						endforeach

						?>
						
						<tr>
						    <td></td>
						    <td></td>
						    <td></td>
						    <td>Total</td>
						    <td><?php echo $total;?> </td>
						</tr>
						<div id="result"></div>

<script type="text/javascript">
	
</script>
																						</tbody>
																				</table>
																				<a href="<?php echo base_url() ?>admin/approve_case/<?php echo $_GET['case_id'] ?>" class="btn btn-success pull-right">Confirm</a><a href="<?php echo base_url() ?>admin/client_dashboard/<?php echo $_GET['case_id'] ?>" class="btn btn-danger pull-right">Cancel</a>
																		</div>
																	<?php else: ?>
																		No Case Summary
																								<?php endif ?>

																</div>
														</div>



</div><!-- /#wrapper -->
</div>
</div>
<!-- START CORE PLUGINS -->



<div class="container">
    
    
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:700px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Assign Activites</h4>
        </div>
        <div class="modal-body" >
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
                <form id="activity_form">
                                      <input type="hidden"  name="subject_id" id="subject_id">

              <?php 
              $k=1; 
              foreach ($services as $activity): ?>
              <tr>
                  <input type="hidden"  name="case_id" value="<?php echo $client_details['id'] ?>" id="case_id">
                  
                <td><input type="checkbox" name="scope_id[]" value="<?php echo $activity['scope_id'] ?>" ></td>
                <td><?php echo $activity['scope_name'] ?></td>
                <td>
                  <input type="file" name="activity_attachment[<?php echo $k ?>][]" multiple> 
                 </td>
                 
                <td>
                    <?php if($client_details['due_date_type']==2){ ?>
                    <input type="date" min="<?php echo date('Y-m-d',strtotime("+0 days"))?>" name="due_date[]" >
                    <?php }else if ($client_details['due_date_type']==3){ ?>
                    
                      <input type="date" min="<?php echo date('Y-m-d',strtotime("+0 days"))?>" name="due_date[]" value="<?php echo $client_details['case_due_date'] ?>" readonly="">

                    <?php } ?>
                    </td>
                
              </tr>  
              <?php
              $k++;
               endforeach ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <img src="<?php echo base_url() ?>assets/Spinner.gif" width="40" style="display:none;" ><button type="button" id="btn_activity" class="pull-right btn btn-success"> Save
                    
                </button></td>
                
            </tr>
            </form>
            </tbody>
          </table>
        </div>
      </div>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


                           
   <script>
      
      function set_id(subject_id,case_id){
          $('#subject_id').val(subject_id);
      }
   
       $('#btn_activity').click(function(){
            var formData = new FormData( $("#activity_form")[0] );
        $.ajax({
            url: '<?php echo base_url(); ?>admin/insert_subject_activity',
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            
            success : function(data) {
                alert(data);
                window.location.href='<?php echo base_url().'admin/step2/'.$client_details['id'] ?>?case_id=<?php echo $client_details['id'] ?>';
//   $('#myModal').modal('toggle');
            }
        });
       });
   </script>

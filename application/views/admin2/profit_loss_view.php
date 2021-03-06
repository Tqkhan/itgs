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
									    <?php  if($_SESSION['role']=="Manager Finance"){
		    ?>
		
			<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ITGS Ref</th>
					<th>Type of Services</th>
					<th>Payment Mode</th>
					<th>Official Fee</th>
					<th>Assigned Price</th>
					<th>Total</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

<?php 

$scopecount=1;
foreach ($jobs as $case): 


$activity_price=$this->db->get_where('assign_client_services',['client_id'=>$case['client_id']])->row_array();

?>

<?php $total=$case['official_fee']+$case['vendor_changes']+$case['easy_paisa_charges']+$case['mobi_cash_charges']+$case['bank_commission']+$case['postage_courier']+$case['other_charges'];

?>
				<tr>
	<td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['scope_name'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['mode_of_payment'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['official_fee'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $activity_price['price'] ?></td>

	<td><span class="footable-toggle"></span>
	<?php echo $activity_price['price'] - $total; ?></td>
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
                                                   
                                                    
                                                    
                                                    
<a href="<?php echo base_url() ?>admin/fund_request_view/<?php echo $case['case_id'] ?>/<?php echo $case['id'] ?>" target="_blank"><img src="<?php echo $detail_url; ?>" title="View Detail" alt="View Detail" width="25" height="25"></a>

                                                    
                                                    

                                                </td>
				</tr>

<?php 

$scopecount++;
   endforeach ?>

			</tbody>
		</table>    
		    <?php }
		   
		?>
		
									</div>
								</div>
							</div>
						</div>
					</div>
				
                     
					
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

function fund_request_assign_id(case_id,subject_id,activity_id,client_reference,subject_name='abc'){
    
    $('[name=fund_case_id]').val(case_id);
    $('[name=client_reference]').val(client_reference).text();
    $('[name=fund_subject_id]').val(subject_id);
    $('[name=fund_activity_id]').val(activity_id);
    $('[name=name_of_subject]').val(subject_name);
}
  
function create_report_assign_id(case_id,subject_id,activity_id){
    
    $('[name=report_case_id]').val(case_id);
    $('[name=report_subject_id]').val(subject_id);
    $('[name=report_activity_id]').val(activity_id);
    
}
  
function vendor_assign_id(case_id,subject_id,activity_id){
    
    $('[name=vendor_case_id]').val(case_id);
    $('[name=vendor_subject_id]').val(subject_id);
    $('[name=vendor_activity_id]').val(activity_id);
    
}
  

    </script>



<?php 

// echo "<pre>";
// die(print_r($jobs));
?>
        	<div class="control-sidebar-bg"></div>
			<div id="page-wrapper">
				<div class="content">
					<div class="content-header">
						<div class="header-icon" style="margin-top: -9px;">
							<i class="pe-7s-display2"></i>
						</div>
						<div class="header-title">
							<h1>Case Report</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">Case Report</li>
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Case Report</h4>

                                        <div class="btn-group pull-right">

                                            <div class="dropdown" style="margin-right: 7px;margin-top: -4px;">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="glyphicon glyphicon-th-list"></span> Convert

                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="    z-index: 99;">

                            <li>
                                <a href="#" class="change_in_usd">
                                
                                    Change To USD</a>
                            </li>

                            <li>
                                <a href="#" class="change_in_pkr">
                              
                                    Change To PKR</a>
                            </li>

                                                </ul>
                                            </div>

                                           
                                        </div>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
									    <?php if($_SESSION['role']=="Manager Finance" || $_SESSION['role']=="Ceo"){
		    ?>
		
			<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
                    <th>Date Of Receving</th>
                    <th>Date Of Insufficieny Raised</th>
                    <th>Date Of Insufficieny Closed</th>
                    <th>Date Of Completion</th>
                    <th>TAT</th>
                    <th>Client Ref #</th>
                    <th>ITGS Ref #</th>
                    <th>Name Of Subject</th>
                    <th>Name Of Activity</th>
                    <th>Type</th>
                    <th>Name Of I/A</th>
                    <th>Voucher #</th>
                    <th>Mode Of Costing</th>
                    <th>Complete Cost Breakup</th>
                    <th>Assigned Price</th>
                    <th>Total Cost</th>
                    <th>Total Price</th>
                    <th>Profit/Lose Per Case</th>
                    <th>% Profit/Lose</th>
                    <th>Status</th>
                    <th>Invoiced To Customer</th>
                    <th>Invoiced To Vonder</th>
                    <th>Action?</th>
					
				</tr>
			</thead>
			<tbody>

<?php 
$scopecount=1;
foreach ($jobs as $case): 
 


     $price_data=array(
     'case_id'=>$case['case_id'],
     'subject_id'=>$case['subject_id'],
     'activity_id'=>$case['activity_id']
    );
$activity_price=$this->db->get_where('subject_activities',$price_data)->row_array();



$all_subject=$this->db->select('GROUP_CONCAT( subject_name separator "," ) as sub_name')
                       ->from('subject_case')
                       ->where('case_id',$case['case_id']);
$all_sub=$this->db->get()->row_array();



$all_activity=$this->db->select('GROUP_CONCAT(sow.scope_name separator ",") as act_name , SUM(sa.activity_price) as assigned_price , sa.conversion_rate as c_rate')
                        ->from('scope_of_work sow')
                        ->join('subject_activities sa','sow.id=sa.activity_id','left')
                        ->where('sa.case_id',$case['case_id']);
$all_act=$this->db->get()->row_array();




$detail_url = base_url('admin_assets/img/view.png');


	?>

<?php 


$funds_total=$this->db->query('Select SUM(fund_request_activity.official_fee) as of, SUM(fund_request_activity.vendor_changes) as vc,  SUM(fund_request_activity.easy_paisa_charges) as epc, SUM(fund_request_activity.mobi_cash_charges) as mcc, SUM(fund_request_activity.bank_commission) as bc, SUM(fund_request_activity.postage_courier) as pcr, SUM(fund_request_activity.other_charges) as otc 
       from 
      fund_request_activity where is_approved=1 and case_id='.$case['case_id'])->row_array();

$vendor_total=$this->db->query("select SUM(charges) as charges from case_fund_request where  is_approve=1 and case_id=".$case['case_id'])->row_array();

$total=$funds_total['of']+$funds_total['vc']+$funds_total['epc']+$funds_total['mcc']+$funds_total['bc']+$funds_total['pcr']+$funds_total['otc']+$vendor_total['charges'];

?>
				<tr>
    <td><span class="footable-toggle"><?php echo $case['date_of_receiving']; ?></span></td>
    <td><span class="footable-toggle"><?php echo $case['hold_date']; ?></span></td>
    <td><span class="footable-toggle"><?php echo $case['unhold_date']; ?></span></td>
    <td><span class="footable-toggle"><?php echo ""; ?></span></td>
    <td><span class="footable-toggle"><?php echo ""; ?></span></td>
    <td><span class="footable-toggle"><?php echo $case['client_reference']; ?></span></td>
    <td><span class="footable-toggle"><?php echo ""; ?></span><?php echo $case['reference_code'] ?></td>
    <td><span class="footable-toggle"></span><?php echo $all_sub['sub_name'] ?></td>
    <td><span class="footable-toggle"></span><?php echo $all_act['act_name'] ?></td>
    <td><span class="footable-toggle"></span><?php echo $case['type_of_service'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['name_of_ia'] ?></td>
    <td><span class="footable-toggle"></span><?php echo $case['official_fee'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $case['mode_of_payment'] ?></td>
    <td><span class="footable-toggle"></span><?php  ?></td>
    <td><span class="footable-toggle"></span>

             
        <?php 
          if ($case['client_type']=="INT") {
               ?>
               <p class="dollar"> <?php echo $all_act['assigned_price'] ?> $ </p>
               <p class="pkr"> <?php echo round($all_act['assigned_price']*$all_act['c_rate']) ?> PKR </p>
              
          <?php 
          }
          else{
            ?>
            <p class="dollar"> <?php echo round($all_act['assigned_price']/$all_act['c_rate']); ?> $ </p>
               <p class="pkr"> <?php echo $all_act['assigned_price'] ?> PKR </p>
         <?php 
          }         
         ?>

    </td>
	<td><span class="footable-toggle"></span>

        <?php  if ($case['client_type']=="INT") {
               ?>
               <p class="dollar"> <?php echo $total; ?> $ </p>
               <p class="pkr"> <?php echo round($total*$all_act['c_rate']); ?> PKR </p>
              
          <?php 
          }else{
            ?>

               <p class="dollar"> <?php echo rount($total*$all_act['c_rate']); ?> $ </p>
               <p class="pkr"> <?php echo $total; ?> PKR </p>
            <?php
          }
          ?>

    </td>
    <td><span class="footable-toggle"></span>
    </td>
	<td><span class="footable-toggle"></span>
    
    <?php  if ($case['client_type']=="INT") {
               ?>
               <p class="dollar"> <?php echo ($all_act['assigned_price'] - $total); ?> $ </p>
               <p class="pkr"> <?php echo round(($all_act['assigned_price'] - $total)*$all_act['c_rate']); ?> PKR </p>
              
          <?php 
          }else{

            ?>

            <p class="dollar"> <?php echo round($total*$all_act['c_rate']); ?> $ </p>
               <p class="pkr"> <?php echo $total; ?> PKR </p>

            <?php
          }
           ?>

    </td>
    


    <td><span class="footable-toggle"></span>

      <?php  if ($case['client_type']=="INT") {
    ?>

    <p class="dollar">
    <?php  echo round((($all_act['assigned_price'] - $total)/$all_act['assigned_price'])*100); ?>
    %</p>

    <p class="pkr">
        
        <?php  echo
         round((($all_act['assigned_price'] - $total)/$all_act['assigned_price'])*100);

            ?>
            %
    </p>
    
            

<?php

            }else{

                ?>
           <p class="dollar"><?php  echo
         round((($all_act['assigned_price'] - $total)/$all_act['assigned_price'])*100); ?>
           </p>
           <p class="pkr"><?php  echo
         round((($all_act['assigned_price'] - $total)/$all_act['assigned_price'])*100); ?>
           </p>

                <?php


            }
              
           ?>
            
 

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
      <?php 
      $client_invoice =$this->db->get_where('client_invoice',['case_id'=>$case['case_id']])->row_array();
     if ($client_invoice) {
       # code...
      echo $client_invoice['invoice_no'];
     }else{
      echo "Invoice Not Generated";
     }
       ?>
     

    </td>
    <td>
      <?php 
      $client_invoice =$this->db->get_where('client_invoice',['case_id'=>$case['casedsa_id']])->row_array();
     if ($client_invoice) {
       # code...
      echo $client_invoice['invoice_no'];
     }else{
      echo "Invoice Not Generated";
     }
       ?>
     

    </td>
    
	
<td>
                                                   
<a href="<?php echo base_url() ?>admin/fund_request_view/<?php echo $case['case_id'] ?>" target="_blank"><img src="<?php echo $detail_url; ?>" title="View Detail" alt="View Detail" width="25" height="25"></a>

<a href="<?php echo base_url() ?>admin/subject_report/<?php echo $case['case_id'] ?>" target="_blank"><img src="<?php echo $detail_url; ?>" title="View Subject Report" alt="View Subject Report" width="25" height="25"></a>
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
                                            <input name="date_time" required="" type="date" class="form-control">
                                        
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
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Official Fee</label>
                                            <input name="official_fee" type="number" required="" class="form-control sum">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Vendor Charges</label>
                                            <input name="vendor_changes" type="number" required="" class="form-control sum">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Easy Paisa Charges</label>
                                            <input name="easy_paisa_charges" type="number" required="" class="form-control sum">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Mobi Cash Charges</label>
                                            <input name="mobi_cash_charges" type="number" required="" class="form-control sum">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Bank Commission</label>
                                            <input name="bank_commission" type="number" required="" class="form-control sum">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Postage & Couries Charges</label>
                                            <input name="postage_courier" type="number" required="" class="form-control sum">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Other Charges</label>
                                            <input name="other_charges" type="number" required="" class="form-control sum">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Total Cost</label>
                                            <input name="total_cost" required="" readonly id="result" type="number" class="form-control">
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
                                            <label for="">Date</label>
                                            <input name="date_time" required="" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">File</label>
                                            <input name="file" type="file" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Type of Service</label>
                                            <input name="type_of_service" required="" type="text" class="form-control">
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
                        <!-- modal 3 -->
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
              </form>
              <div style="height: 440px;"></div>
</div> 
</div>
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->

<script type="text/javascript">

$('.sum').keyup(function() {
    var con = 0
    var length = $('.sum').length - 1
    $('.sum').each(function(e) {
    	if($(this).val() != null && $(this).val() != ''){
    		con = con + parseInt($(this).val());
    	}
        if (e == length) {
            $('#result').val(con)
        }
    })

});
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

function fund_request_assign_id(case_id,subject_id,activity_id,client_reference,subject_name='abc',scope_name){
    $('[name=fund_case_id]').val(case_id);
    $('[name=client_reference]').val(client_reference).text();
    $('[name=fund_subject_id]').val(subject_id);
    $('[name=fund_activity_id]').val(activity_id);
    $('[name=name_of_subject]').val(subject_name);
    $('[name=type_of_service]').val(scope_name);
    Date.prototype.yyyymmdd = function() {
	  var yyyy = this.getFullYear().toString();
	  var mm = (this.getMonth()+1).toString(); // getMonth() is zero-based
	  var dd  = this.getDate().toString();
	  return yyyy + "-" + (mm[1]?mm:"0"+mm[0]) + "-" + (dd[1]?dd:"0"+dd[0]); // padding
	};
    var d = new Date();
    $('[name="date_time"]').val(d.yyyymmdd())
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

   
     $('.dollar').each(function() {
         $(this).hide();
     });

$('.change_in_usd').click(function() {
    
     $('.pkr').each(function() {
         $(this).hide();
     });
     $('.dollar').each(function() {
         $(this).show();
     });
   
});

$('.change_in_pkr').click(function() {
    
     $('.dollar').each(function() {
         $(this).hide();
     });
     $('.pkr').each(function() {
         $(this).show();
     });
   
});

  

    </script>


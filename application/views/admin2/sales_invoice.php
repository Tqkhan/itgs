  <style type="text/css">

  .print_time_show{
    display: none !important;
   }
   .panel-heading{
    height: 44px;
   }


@media print {
      table{
          font-size:1vw;
          font-family: Garamond, Serif;
      }
      .sidebar{
        display: none;

      }
      .but{
        display: none;

      }
      .nav-container{
        display: none;

      }
      .content-header, .hidden-print{
        display: none;

      }
      .footer-bottom {
         visibility: hidden;
      }
      .panel-body{
        border-color: #ffffff;

      }
      .print_time_show{
    display: block !important;
        margin-top: -4px !important;
   }
   .panel-heading{
    height: 70px;
   }
   .panel-title {
    
    text-align: center;
}

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
							<i class="pe-7s-display2"></i>
						</div>
						<div class="header-title">
							<h1>INVOICE FORMAT  </h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>
								<li class="active"> INVOICE FORMAT  </li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row hidden-print">
            <div class="col-md-12">
              <div class="panel panel-bd">
                <form method="post" action="">
                  <input type="hidden" name="client" value="<?php echo $id ?>">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label>Start Date</label>
                      <input type="date" name="start" class="form-control" required="">
                    </div>
                    <div class="col-md-6">
                      <label>End Date</label>
                      <input type="date" name="end" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <button class="btn btn-info pull-right">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
                  <div class="panel-title">
                    <h4 class="print_time_show cen" style="display: none;">INGENIOUSTRIBE GLOBAL SOLUTIONS (PRIVATE) LIMITED</h4>
                    <h4 class="mar" style="margin-bottom: -25px;">INVOICE FORMAT </h4><br>
                    
                  </div>
									
								</div>
								<div class="panel-body">

									<div class="table-responsive">
		<form method="post" action="<?php echo base_url() ?>admin/submit_client_invoice">

    <table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
      <div class="col-md-12 hidden-print" id="">
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
					<th>S.No</th>
					<th>Our Case Ref :</th>
					<th>Subject Name</th>
          <th>Check</th>
          <th>Amount (Excluding Sales Tax)</th>
          <th>Sales Tax</th>
          <th>Amount (Including Sales Tax)</th>
          <th>Currency Symbol</th>
     
          
         
				</tr>
			</thead>
			<tbody>
<?php 
$count = 1;
  foreach ($cases as $c) {


  $price_data=array(
     'case_id'=>$c['case_id'],
     'subject_id'=>$c['subject_id'],
     'id'=>$c['activity_id']
    );
$activity_price=$this->db->get_where('subject_activities',$price_data)->row_array();

// echo $activity_price['case_id'];
?>
				<tr>
    <input type="hidden" name="start" value="<?php echo $start; ?>"/>
    <input type="hidden" name="end" value="<?php echo $end ?>"/>
    <input type="hidden" name="case_id[]" value="<?php echo $c['case_id'] ?>"/>
    <input type="hidden" name="client_id" value="<?php echo $c['client_id'] ?>"/>
    <?php $ref=explode("-", $c['reference_code']);
     ?>
    <input type="hidden" name="invoice_no" value="<?php echo $c['client_name'].'-'.date('Y-m-d').'-'.$ref[5]; ?>">
      
	<td><?php echo $count ?></td>
	<td><?php echo $c['reference_code'] ?></td>
	<td><?php echo $c['subject_name'] ?></td>
  <td><?php echo $c['scope_name'] ?></td>
  <?php if ($activity_price['is_int']==1 && $c['client_type']=="INT"): ?>
  <td><?php echo $activity_price['activity_price']; 
          $activity_price_total+=$activity_price['activity_price'];
  ?></td>
  
  <td><?php echo $activity_price['activity_price']*13/100; 
          $activity_tax_total+=$activity_price['activity_price']*13/100;

  ?></td>

  <td><?php echo  $activity_price['activity_price'] +$activity_price['activity_price']*13/100; 
  $activity_pricetax_total+=$activity_price['activity_price'] +$activity_price['activity_price']*13/100; 

  ?></td>
  <td><?php echo "$"; ?></td>

  <?php else: ?>

    <td><?php echo $activity_price['activity_price']; 
          $activity_price_total+=$activity_price['activity_price'];
  ?></td>
  
  <td><?php echo $activity_price['activity_price']*13/100; 
          $activity_tax_total+=$activity_price['activity_price']*13/100;

  ?></td>

  <td><?php echo  $activity_price['activity_price'] +$activity_price['activity_price']*13/100; 
  $activity_pricetax_total+=$activity_price['activity_price'] +$activity_price['activity_price']*13/100; 

  ?></td> 
  <td><?php if ($c['client_type']=="INT") {
  echo "$"; 
  }else{
  echo "PKR";
  } 
  ?></td>
  <?php endif ?>


				</tr>
<?php 
$count++;
} 
?>        


			</tbody>
      <tfoot style="background-color: #a1b5c1;"><tr> <td> </td> <td>   </td>  <td> <strong>Total</strong></td> <td>   </td>    </td> <td><strong>   <?php echo $activity_price_total  ?> </strong> </td> <td><strong>  <?php echo $activity_tax_total  ?> </strong> </td> <td><strong>   <?php echo $activity_pricetax_total  ?> </strong> </td>  

  <td>   <?php if ( $c['client_type']=="INT"){
        echo "$";
       }else{
        echo "PKR";
       }?> </td></tr></tfoot>
		</table>
<input type="hidden" name="activity_price_total" value="<?php echo $activity_price_total ?>">
<input type="hidden" name="activity_tax_total" value="<?php echo $activity_tax_total ?>">
<input type="hidden" name="activity_pricetax_total" value="<?php echo $activity_pricetax_total ?>">
   <?php if ($cases): ?>
    <input type="submit" value="Submit Invoice" class="btn btn-primary pull-right">
     
   <?php endif ?>
  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        

<button type="button" class="btn but btn-primary" onclick="myFunction()">Print this page</button>
              <div style="height: 440px;"></div>
</div> 
</div>
    </div><!-- /#wrapper -->
    <!-- START CORE PLUGINS -->

<script>
function myFunction() {
    window.print();
}
</script>
<script>
function myFunction() {
    window.print();
}
</script>
<script language="javascript" type="text/javascript">
var tds = document.getElementById('ex').getElementsByTagName('td');
var sum1 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell1') {
   var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum1 += isNaN(value) ? 0 : parseInt(value);
}
}
var sum2 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell2') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum2 += isNaN(value) ? 0 : parseInt(value);
}
}
var sum3 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell3') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum3 += isNaN(value) ? 0 : parseInt(value);
// }
// }

// // document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td> </td> <td>   </td>  <td> <strong>Total</strong></td> <td>   </td>    </td> <td><strong>  ' + sum1 + '</strong> </td> <td><strong>  ' + sum2 + '</strong> </td> <td><strong>  ' + sum3 + '</strong> </td>  <td>   </td></tr></tfoot>';</script>
<script type="text/javascript">
  $('.export-report').change(function() {
    var value = $(this).val()
    window.location.href = '<?php echo base_url('admin/export_account_report/'.$id.'/') ?>'+value
  })
</script>
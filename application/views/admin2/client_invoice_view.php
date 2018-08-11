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
   .cent{
    text-align: center !important;
   } 
   h4.cen {
   margin-left: 235px !important;
    /* margin-right: 110px; */
}
h4.mar {
   margin-left: 450px !important;
    /* margin-right: 110px; */
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
							<h1>Client Invoices </h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>
								<li class="active"> Client Invoice </li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								
								<div class="panel-body">

									<div class="table-responsive">
		<table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>S.No</th>
          <th>Invoice #</th>
          <th>Client Name</th>
					<th>Client Ref: Code</th>
					<th>Client Type</th>
          <th>Case Reference</th>
         <th>Amount (Excluding Sales Tax)</th>
          <th>Sales Tax</th>
          <th>Amount (Including Sales Tax)</th>
          <th>Paid?</th>
          <th>Action?</th>
         
				</tr>
			</thead>
			<tbody>
<?php
$count = 1;
foreach ($results as $row) {

?>

<tr>
  <td><?php echo $count; ?></td>
  <td><?php echo $row['invoice_no'] ?></td>
  <td><?php echo $row['client_name'] ?></td>
  <td><?php echo $row['reference_code'] ?></td>
  <td><?php echo $row['client_type'] ?></td>
  <td><?php echo $row['client_reference'] ?></td>
  <td><?php echo $row['activity_price_total'] ?></td>
  <td><?php echo $row['activity_tax_total'] ?></td>
  <td><?php echo $row['activity_pricetax_total'] ?></td>
  <td><?php echo $row['paid_status']==0 ? "Unpaid" :"Paid";  ?></td>
  <td>
    <a href="<?php echo base_url() ?>admin/sales_invoice?client=<?php echo $row['client_id'] ?>&start=<?php echo $row['start_date'] ?>&end=<?php echo $row['end_date'] ?>" target="_blank" ><i class="fa fa-eye"></i></a>
    <a href="<?php echo base_url() ?>admin/update_client_case_status?client=<?php echo $row['client_id'] ?>&caseID=<?php echo $row['caseID'] ?>" class="sweets-alert" target="_blank" ><i class="fa fa-dollar"></i></a>
   
  </td>
</tr>
	

<?php 
$count++;
} ?>
			</tbody>
		</table>
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

</script>
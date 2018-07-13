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
      .content-header{
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
    height: 110px;
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
							<h1>Profit Loss Per Case</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">Profit Loss Per Case</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
                    <h4 class="print_time_show cen" style="display: none;">INGENIOUSTRIBE GLOBAL SOLUTIONS (PRIVATE) LIMITED</h4>
                    <h4 class="mar" style="margin-bottom: -25px;">Profit Loss Per Case</h4><br>
                    <h5 class="print_time_show cent" style="margin-bottom: -25px;">SERVICE Wise</h5><br>
										<h5 class="print_time_show cent" style="margin-bottom: -25px;">From 01 Jan 2018 to 31 Jan 2018</h5>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive section">
		<table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Date of Receiving</th>
					<th>Date of Completion</th>
					<th>Voucher#</th>
          <th>Case Ref: No</th>
          <th>Name of Subject</th>
          <th>Service</th>
          <th>Type of Degree</th>
          <th>Name of IA</th>
          <th>O - Fee</th>
          <th>Vendor Charges </th>
          <th>Easy Paisa Chareges</th>
          <th>Mobi Cash Chareges</th>
          <th>Courier Charges</th>
          <th>Bank Commission</th>
          <th>Other Misc. Charges</th>
          <th>Grand Total</th>
          <th>Selling Price</th>
					<th>Profit / (Loss)</th>
				</tr>
			</thead>
			<tbody>

<?php 
$con = 1;
foreach ($cases as $c) {
?>
				<tr>
  <td><?php echo $con ?></td>
  <td><?php echo date('d F, Y', strtotime($c['case_date'])) ?></td>
  <td><?php echo date('d F, Y', strtotime($c['complete'])) ?></td>
  <td><?php echo $c['types'].''.$c['voucher'] ?></td>
  <td><?php echo $c['reference_code'] ?></td>
  <td><?php echo $c['subject_name'] ?></td>
  <td><?php echo $c['scope_name'] ?></td>
  <td><?php echo $c['degree_type'] ?></td>
  <td><?php echo $c['name_of_ia'] ?></td>
  <td class="fieldCell1"><?php echo $c['official_fee'] ?></td>
  <td class="fieldCell2"><?php echo $c['vendor_changes'] ?></td>
  <td class="fieldCell3"><?php echo $c['easy_paisa_charges'] ?></td>
  <td class="fieldCell4"><?php echo $c['mobi_cash_charges'] ?></td>
  <td class="fieldCell5"><?php echo $c['postage_courier'] ?></td>
  <td><?php echo $c['bank_commission'] ?></td>
  <td class="fieldCell6"><?php echo $c['other_charges'] ?></td>
  <?php 
    $total = $c['official_fee'] + $c['vendor_changes'] + $c['easy_paisa_charges'] + $c['mobi_cash_charges'] + $c['postage_courier'] + $c['bank_commission'] + $c['other_charges'];
  ?>
  <td class="fieldCell7"><?php echo $total ?></td>
  <td class="fieldCell8"><?php echo $c['price'] ?></td>
  <?php $main = $c['price'] - $total; ?>
  <td class="fieldCell9"><?php echo ($main < 0 ? "(".abs($main).")" : $main) ?></td>


        </tr>
<?php 
$con++;
} 
?>        
        


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
}
}
var sum4 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell4') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum4 += isNaN(value) ? 0 : parseInt(value);
}
}
var sum5 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell5') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum5 += isNaN(value) ? 0 : parseInt(value);
}
}
var sum6 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell6') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum6 += isNaN(value) ? 0 : parseInt(value);
}
}
var sum7 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell7') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum7 += isNaN(value) ? 0 : parseInt(value);
}
}
var sum8 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell8') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum8 += isNaN(value) ? 0 : parseInt(value);
}
}
var sum9 = 0;
for(var i = 0; i < tds.length; i ++) {
if(tds[i].className == 'fieldCell9') {
  var value = tds[i].innerHTML
  var a = value.indexOf("(")
  if (a > -1) {
    value = value.split('(').join('')
    value = value.split(')').join('')
    value = '-'+value
    //console.log(value)
  }
sum9 += isNaN(value) ? 0 : parseInt(value);
}
}

document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td> </td> <td> </td>  <td> </td>  <td> </td> <td> </td>   <td> <strong>Total</strong></td> </td>   <td> </td>   <td> </td>   <td>  </td> <td><strong>  ' + sum1 + '</strong> </td> <td><strong>  ' + sum2 + '</strong> </td> <td><strong>  ' + sum3 + '</strong> </td> <td><strong>  ' + sum4 + '</strong> </td> <td><strong>  ' + sum5 + '</strong> </td> <td><strong> </strong> </td> <td><strong>  ' + sum6 + '</strong> </td> <td><strong>  ' + sum7 + '</strong> </td> <td><strong>  ' + sum8 + '</strong> </td> <td><strong>  ' + sum9 + '</strong> </td> </tr></tfoot>';</script>
    

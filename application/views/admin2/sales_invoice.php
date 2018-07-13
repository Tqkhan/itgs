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
     
          
         
				</tr>
			</thead>
			<tbody>

<?php 
$count = 1;
  foreach ($cases as $c) {
?>
				<tr>
	<td><?php echo $count ?></td>
	<td><?php echo $c['reference_code'] ?></td>
	<td><?php echo $c['subject_name'] ?></td>
  <td><?php echo $c['scope_name'] ?></td>
  <td class="fieldCell1"><?php echo $c['price'] ?></td>
  <td class="fieldCell2"><?php echo $c['price'] * 13 / 100 ?></td>
  <td class="fieldCell3"><?php echo $c['price'] + ($c['price'] * 13 / 100) ?></td>
 

   


				</tr>
<?php 
$count++;
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

document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td> </td> <td>   </td>  <td> <strong>Total</strong></td> <td>   </td>    </td> <td><strong>  ' + sum1 + '</strong> </td> <td><strong>  ' + sum2 + '</strong> </td> <td><strong>  ' + sum3 + '</strong> </td> </tr></tfoot>';</script>
<script type="text/javascript">
  $('.export-report').change(function() {
    var value = $(this).val()
    window.location.href = '<?php echo base_url('admin/export_account_report/'.$id.'/') ?>'+value
  })
</script>
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
							<h1>Payment Analysis</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>
								<li class="active"> Payment Analysis</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
                  <div class="panel-title">
                    <h4 class="print_time_show cen" style="display: none;">INGENIOUSTRIBE GLOBAL SOLUTIONS (PRIVATE) LIMITED</h4>
                    <h4 class="mar" style="margin-bottom: -25px;">Ofice Fee Mode Of Payment Analysis</h4><br>
                    <h5 class="print_time_show cent" style="margin-bottom: -25px;">Client Wise</h5><br>
                    <h5 class="print_time_show cent" style="margin-bottom: -25px;">From 01 Jan 2018 to 31 Jan 2018</h5>
                  </div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
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
          <th>Mode of Payment</th>
         
				</tr>
			</thead>
			<tbody>

<?php 
$con =1;
foreach ($fees as $f) {
$voucher = "";
$mode = "";
switch ($f['type']) {
    case "2":
        $voucher = $f['chaque'];
        $mode = "Chaque";
        break;
    case "3":
        $voucher = $f['payorder'];
        $mode = "Payorder";
        break;
    default:
        $voucher = $f['slip'];
        $mode = "Cash";
}
?>
				<tr>
  <td><?php echo $con ?></td>
  <td><?php echo date('d F, Y', strtotime($f['date_time'])) ?></td>
  <td><?php echo date('d F, Y', strtotime($f['date'])) ?></td>
  <td><?php echo $voucher ?></td>
  <td><?php echo $f['reference_code'] ?></td>
  <td><?php echo $f['subject_name'] ?></td>
  <td><?php echo $f['scope_name'] ?></td>
  <td><?php echo $f['degree_type'] ?></td>
  <td><?php echo $f['name_of_ia'] ?></td>
  <td class="fieldCell1"><?php echo $f['amount'] ?></td>
  <td><?php echo $mode ?></td>
   


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


document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td> </td> <td> </td>  <td> </td>  <td> </td> <td> </td>   <td> <strong>Total</strong></td> </td>   <td> </td>   <td> </td>   <td>  </td> <td><strong>  ' + sum1 + '</strong> </td> <td> </td> ';</script>





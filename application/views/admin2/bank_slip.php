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
    height: 120px;
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
							<h1>BANK PAYMENT VOUCHER </h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>
								<li class="active"> BANK PAYMENT VOUCHER </li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
                  <div class="panel-title">
                    <h4 class="print_time_show cen" style="display: none;">INGENIOUSTRIBE GLOBAL SOLUTIONS (PRIVATE) LIMITED</h4>
                    <h4 class="mar" style="margin-bottom: -25px;">BANK PAYMENT VOUCHER</h4><br>
                    <h5 class="print_time_show cent" style="margin-bottom: -25px;">CPV # 01</h5><br>
                    <h5 class="print_time_show cent" style="margin-bottom: -25px;">Date : <?php echo date('d M Y', strtotime($detail['date'])) ?></h5>
                  </div>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
                		<table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                			<thead>
                				<tr>
                					<th>S.No</th>
                          <th>Voucher#</th>
                					<th>Case Ref: No</th>
                					<th>Name of Subject</th>
                          <th>Service</th>
                          <th>Type of Degree</th>
                          <th>Name of IA</th>
                          <th >O-Fee</th>
                     
                          
                         
                				</tr>
                			</thead>
                			<tbody>
                        <?php 
                        if ($detail['chaque']) {
                          $no = 'B.P.V'.$detail['chaque'];
                        }
                        elseif ($detail['payorder']) {
                          $no = 'B.P.V'.$detail['payorder'];
                        }
                        ?>
				                <tr>
                          <td>1</td>
                          <td><?php echo $no ?></td>
                          <td><?php echo $detail['reference_code'] ?></td>
                          <td><?php echo $detail['subject_name'] ?></td>
                          <td><?php echo $detail['scope_name'] ?></td>
                          <td><?php echo $detail['degree_type'] ?></td>
                          <td><?php echo $detail['name_of_ia'] ?></td>
                          <td class="fieldCell1"><?php echo $detail['official_fee'] + $detail['vendor_changes'] + $detail['easy_paisa_charges'] + $detail['mobi_cash_charges'] + $detail['postage_courier'] + $detail['bank_commission'] + $detail['other_charges'] ?></td>
                        </tr>
                      </tbody>
                    </table>
		              </div>
                  <div class="col-md-4" style="float: left; width: 33.33%">
                    <h5 class="print_time_show cent" style="display: none;">Sender : <?php echo $detail['employee_name'] ?></h5>
                  </div>
                  <div class="col-md-4" style="float: left; width: 33.33%">
                    <h5 class="print_time_show cent" style="display: none;">Internal Auditor : <?php echo $internal['employee_name'] ?></h5>
                  </div>
                  <div class="col-md-4" style="float: left; width: 33.33%">
                    <h5 class="print_time_show cent" style="display: none;">Finance Manager : <?php echo $finance['employee_name'] ?></h5>
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


document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td> </td><td> </td> <td>   </td>  <td> <strong>Total</strong></td> <td>   </td>  <td>   </td> <td>   </td>   </td> <td><strong>  ' + sum1 + '</strong> </td> </tr></tfoot>';</script>



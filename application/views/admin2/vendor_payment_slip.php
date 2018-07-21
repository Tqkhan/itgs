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
							<h1>Vendor for monthly payment </h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>
								<li class="active"> Vendor for monthly payment </li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->
          <div class="row hidden-print">
            <div class="col-md-12">
              <div class="panel panel-bd">
                <form method="post" action="">
                  <input type="hidden" name="vendor" value="<?php echo $id ?>">
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
                    <h4 class="mar" style="margin-bottom: -25px;">Vendor for monthly payment</h4><br>
                    
                  </div>
									
								</div>
								<div class="panel-body">

									<div class="table-responsive">
		<table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>S.No</th>
          <th>Vendor Name</th>
					<th>Case Ref: No</th>
					<th>Name of Subject</th>
          <th>Service</th>
          <th>Voucher No#</th>
          <th>Type of Degree</th>
          <th>Name of IA</th>
          <th>Vendor Charges</th>
          <th>Currency Symbol</th>
     
          
         
				</tr>
			</thead>
			<tbody>
<?php
$count = 1;
foreach ($payments as $p) {
?>

				<tr>
  <td><?php echo $count ?></td>
  <td><?php echo $p['employee_name'] ?></td>
  <td><?php echo $p['reference_code'] ?></td>
  <td><?php echo $p['subject_name'] ?></td>
  <td><?php echo $p['scope_name'] ?></td>
  <td>J.V<?php echo $p['voucher'] ?></td>
  <td>sfssdf</td>
  <td><?php echo $p['vendor_type']; ?></td>
  <td class="fieldCell1">
<?php 

  $url='https://www.xe.com/currencyconverter/convert/?Amount=1&From=PKR&To=USD';


$page = file_get_contents($url);
$doc = new DOMDocument();
@$doc->loadHTML($page);
$divs = $doc->getElementsByTagName('span');
foreach($divs as $div) {
 
    if ($div->getAttribute('class') === 'uccInverseResultUnit') {
         $conversion_rate= $div->nodeValue;
    }
}


     $filter_conversion=explode('=', $conversion_rate);
        $further_filter=explode(' ',$filter_conversion[1]);
    

  //   if ($p['vendor_type'] == "INT") {
  //    $in_dollar=$p['charges']/10;
  // echo $in_dollar;
  //  }else{
        ?>



   <?php if ($p['vendor_type']=="INT"): ?>
     <?php 
   
  
   echo number_format((float) $p['charges']/$further_filter[1], 2, '.', '');  

      ?>
   <?php else:  
   echo $p['charges'];          

    ?>
   
   <?php endif ?>

    </td>
 
  <td><?php if ($p['vendor_type']=="INT"): ?>
     <?php 
   
  
   echo "$";  

      ?>
   <?php else:  
   echo "PKR";          

    ?>
   
   <?php endif ?></td>
 

   


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


document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td><strong>Total</strong> </td><td> </td> <td> </td>  <td>  </td> </td>   <td> </td> <td> </td>  <td> </td>   <td>  </td> <td><strong>  ' + sum1 + '</strong> </td></td> <td></td>';</script>


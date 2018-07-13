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
							<h1>Courier for monthly payment </h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>
								<li class="active"> Courier for monthly payment </li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
                   <div class="panel-title">
                    <h4 class="print_time_show cen" style="display: none;">INGENIOUSTRIBE GLOBAL SOLUTIONS (PRIVATE) LIMITED</h4>
                    <h4 class="mar" style="margin-bottom: -25px;">Courier for monthly payment</h4><br>
                    
                  </div>
                  
                </div>
								<div class="panel-body">

									<div class="table-responsive">
		<table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Case Ref: No</th>
					<th>Name of Subject</th>
          <th>Service</th>
          <th>Type of Degree</th>
          <th>Name of IA</th>
          <th>O - Fee</th>
     
          
         
				</tr>
			</thead>
			<tbody>

<?php 
$count = 1;
foreach ($charges as $c) {
?>
				<tr>
	<td><?php echo $count ?></td>
	<td><?php echo $c['reference_code'] ?></td>
	<td><?php echo $c['subject_name'] ?></td>
  <td><?php echo $c['scope_name'] ?></td>
  <td><?php echo $c['degree_type'] ?></td>
  <td><?php echo $c['name_of_ia'] ?></td>
  <td class="fieldCell1" ><?php echo $c['postage_courier'] ?></td>
 

   


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


document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td> </td> <td> </td>  <td>  <strong>Total</strong></td> </td>   <td> </td>   <td> </td>   <td>  </td> <td><strong>  ' + sum1 + '</strong> </td>';</script>



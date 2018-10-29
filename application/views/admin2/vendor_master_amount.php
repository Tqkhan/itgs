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

      a{

        display: none;

      }

      span.e{

        display: block !important;

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

   .cent{

    text-align: center !important;

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

							<h1>MASTER FILE </h1>



							<ol class="breadcrumb">

								<li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>

								<li class="active"> MASTER FILE </li>

							</ol>

						</div>

					</div> <!-- /. Content Header (Page header) -->



					<div class="row">

						<div class="col-sm-12">

							<div class="panel panel-bd">

								<div class="panel-heading">

                  <div class="panel-title">

                    <h4 class="print_time_show cen" style="display: none;">INGENIOUSTRIBE GLOBAL SOLUTIONS (PRIVATE) LIMITED</h4>

                    <h4 class="mar" style="margin-bottom: -25px;">MASTER FILE</h4><br>

                   

                  </div>

									

								</div>

								<div class="panel-body">



									<div class="table-responsive">

		<table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">

			<thead>

				<tr>

					<th>S . No</th>

					<th>List of Vendor</th>

          <th>Type</th>

          <th>Amount in USD</th>

					<th>Amount in PKR</th>

					

          

         

				</tr>

			</thead>

			<tbody>

<?php 

$con = 1;

foreach ($amounts as $a) {

?>



			 <tr>

  <td><span class="footable-toggle"></span><?php echo $con ?></td>

  <td><span class="footable-toggle"></span><a href="#"><?php echo $a['employee_name'] ?></a><span class="e" style="display: none;"><?php echo $a['employee_name'] ?></span></td>

  <td></td>

  <td></td>

  <td class="fieldCell1"><?php echo $a['amount'] ?></td>

  



   





        </tr>  

<?php 

$con++;

} 

?>        



      

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





document.getElementById('ex').innerHTML += '<tfoot style="background-color: #a1b5c1;"><tr> <td> </td> <td> <strong>Total</strong></td> </td> <td><strong>  </strong> </td> <td><strong>  </strong> </td> <td><strong>  ' + sum1 + '</strong> </td> ';</script>










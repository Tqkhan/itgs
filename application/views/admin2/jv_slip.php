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

    height: 80px;

   }

   .cent{

    text-align: center !important;

   } 

.panel-title {

    

    text-align: center;

}

table{

    font-size:1vw;

    

}

.section{

  width: 900px;

    resize: both;

    overflow: auto;

    margin-left: -5px;



}

.panel-bd, .panel-danger, .panel-info, .panel-inverse, .panel-primary, .panel-success, .panel-warning {

    border: none ;

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

              <h1>Journal VOUCHER</h1>



              <ol class="breadcrumb">

                <li><a href="<?php echo base_url() ?>admin/client_index""><i class="pe-7s-home"></i> Home</a></li>

                <li class="active"> Journal VOUCHER</li>

              </ol>

            </div>

          </div> <!-- /. Content Header (Page header) -->



          <div class="row">

            <div class="col-sm-12">

              <div class="panel panel-bd">

                <div class="panel-heading">

                  <div class="panel-title">

                    <h4 class="print_time_show cen" style="display: none;">INGENIOUSTRIBE GLOBAL SOLUTIONS (PRIVATE) LIMITED</h4>

                    <h4 class="mar" style="margin-bottom: -25px;">Journal VOUCHER</h4><br>

                    <h5 class="print_time_show cent" style="margin-bottom: -25px;">Date : <?php echo date('d M Y', strtotime($detail['date'])) ?></h5>

                  </div>

                </div>

                <div class="panel-body">

                  <div class="table-responsive section">

                    <table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">

                      <thead>

                        <tr>

                          <th>S.No</th>

                          <th>Date of Receiving</th>

                          <th>Vendor Name</th>

                          <th>Date of Completion</th>

                          <th>Voucher#</th>

                          <th>Case Ref: No</th>

                          <th>Name of Subject</th>

                          <th>Service</th>

                          <!-- <th>Type of Degree</th>

                          <th>Name of IA</th>

                          <th>O - Fee</th>

                          <th>Vendor Charges </th>

                          <th>Easy Paisa Chareges</th>

                          <th>Mobi Cash Chareges</th>

                          <th>Courier Charges</th>

                          <th>Bank Commission</th>

                          <th>Other Misc. Charges</th> -->

                          <th>Grand Total</th>

                        </tr>

                      </thead>

                      <tbody>

                        <tr>

                          <td>1</td>

                          <td><?php echo $detail['created_at'] ?></td>

                          <td><?php echo $detail['employee_name'] ?></td>

                          <td><?php echo $detail['date'] ?></td>

                          <td>JV <?php echo $detail['slip'] ?></td>

                          <td><?php echo $detail['reference_code'] ?></td>

                          <td><?php echo $detail['subject_name'] ?></td>

                          <td><?php echo $detail['scope_name'] ?></td>

                          <!-- <td><?php echo $detail['degree_type'] ?></td>

                          <td><?php echo $detail['name_of_ia'] ?></td>

                          <td class="fieldCell1"><?php echo $detail['official_fee'] ?></td>

                          <td class="fieldCell2"><?php echo $detail['vendor_changes'] ?></td>

                          <td class="fieldCell3"><?php echo $detail['easy_paisa_charges'] ?></td>

                          <td class="fieldCell4"><?php echo $detail['mobi_cash_charges'] ?></td>

                          <td class="fieldCell4"><?php echo $detail['postage_courier'] ?></td>

                          <td><?php echo $detail['bank_commission'] ?></td>

                          <td><?php echo $detail['other_charges'] ?></td> -->

                          <td class="fieldCell6"><?php echo $detail['charges'] ?></td>

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

        



<button type="button" class="btn but btn-primary tab" onclick="myFunction()">Print this page</button>

              <div style="height: 440px;"></div>

</div> 

</div>

    </div><!-- /#wrapper -->

    <!-- START CORE PLUGINS -->



<script>

function myFunction() {

        $(".section").removeClass("table-responsive");

    window.print();

    

        $(".section").addClass("table-responsive");



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




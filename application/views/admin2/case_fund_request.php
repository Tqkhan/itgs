

            <!-- /.Navbar  Static Side -->

            <div class="control-sidebar-bg"></div>

            <!-- Page Content -->

            <div id="page-wrapper">

                <!-- main content -->

                <div class="content">

                    <!-- Content Header (Page header) -->

                    <div class="content-header">

                        <div class="header-icon">

                            <i class="pe-7s-box1"></i>

                        </div>

                        <div class="header-title">

                            <h1>SME- ERP</h1>

                            <small> </small>

                            <ol class="breadcrumb">

                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>



                                <li class="active">SME- ERP</li>

                            </ol>

                        </div>

                    </div> <!-- /. Content Header (Page header) -->

                    <div class="panel-body">

                    <div class="row">

                        <div class="col-sm-12">

                            <div class="panel panel-bd">

                                <div class="panel-heading">

                                    <div class="panel-title">

                                        <h4>Case Fund Request</h4>

                                    </div>

                                </div>

                                <div class="panel-body">



                                    <div class="table-responsive">

                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->

                                        <table id="dataTableoprations" class="table table-bordered table-striped table-hover">

                                            <thead>

                                                <tr>

                                                    <th>Id</th>

                                                    <th>Client Ref</th>

                                                    <th>ITGS Ref</th>

                                                    <th>Employee Name</th>

                                                    <th>Date Received</th>

                                                    <th>Vendor Name</th>

                                                    <th>Subject</th>

                                                    <th>Activity</th>

                                                    <th>Sub Category</th>

                                                    <th>Attachment</th>

                                                    <th>Charges</th>

                                                    <th>Remarks</th>

                                                    <th>Date Processed</th>

                                                    <?php 

                                                      if ($_SESSION['role'] == 'Manager Finance') {

                                                        echo '<th>Status</th>';

                                                      }

                                                    ?>

                                                    <th>Action</th>

                                                </tr>

                                            </thead>

                                           <tbody>

                                            <?php

                                              foreach ($fund_requests as $f) {

                                                  $detail_url = base_url('admin_assets/img/view.png');



                                            ?>

                                              <tr>

                                                 

                                                 <td><?php echo $f['id'] ?></td>

                                                 <td><?php echo $f['client_reference'] ?></td>

                                                 <td><?php echo $f['reference_code'] ?></td>

                                                 <td><?php echo $f['employee_name'] ?></td>

                                                 <td><?php echo date('d M Y', strtotime($f['created_at'])) ?></td>

                                                 <td><?php echo $f['vendor'] ?></td>

                                                 <td><?php echo $f['subject_name'] ?></td>

                                                 <td><?php echo $f['scope_name'] ?></td>

                                                 <td><?php echo $f['sub_category'] ?></td>

                                                 <td>

                                                  <?php 

                                                    $files = explode(',', $case['attachment']);

                                                    for ($i=0; $i < sizeof($files); $i++) { 

                                                      if ($files[$i]) {

                                                        echo '<a download href="'.base_url('/uploads/attachment/'.$files[$i]).'">View Attachment</a>';

                                                      }

                                                      

                                                    }

                                                  ?>

                                                 </td>

                                                 <td><?php echo $f['charges'] ?> <?php echo ($f['vendor_type'] == 'INT') ? 'USD' : 'PKR' ?></td>

                                                 <td><?php echo $f['remarks'] ?></td>

                                                 <td><?php echo $f['date_processed'] ?></td>

                                                 <?php 

                                                    if ($_SESSION['role'] == 'Manager Finance') {

                                                      if ($f['is_issue'] == 0) {

                                                        $status = 'Pending';

                                                      }

                                                      elseif ($f['is_issue'] == 1) {

                                                        $status = 'Approve';

                                                      }

                                                      elseif ($f['is_approve'] == 2) {

                                                        $status = 'Reject';

                                                      }

                                                      echo '<td>'.$status.'</td>';

                                                    }

                                                  ?>

                                                 <td>

                                                    <?php

                                                        if ($f['is_approve'] == 0) {

                                                    ?>

                                                    <a href="<?php echo base_url() ?>admin/update_case_fund?request_id=<?php echo $f['id'] ?>&case_id=<?php echo $f['case_id'] ?>&status=1" class="btn btn-success">Approve</a>

                                                    <a href="<?php echo base_url() ?>admin/update_case_fund?request_id=<?php echo $f['id'] ?>&case_id=<?php echo $f['case_id'] ?>&status=2" class="btn btn-danger">Reject</a>

                                                    <?php   

                                                        } 

                                                    ?>

                                                    <a href="<?php echo base_url() ?>admin/view_case_detail/<?php echo $f['case_id'] ?>/<?php echo $f['id'] ?>" target="_blank"><img src="<?php echo $detail_url; ?>" title="View Detail" alt="View Detail" width="25" height="25"></a>

                                                    <?php if ($_SESSION['role'] == 'Manager Finance' && $f['is_issue'] == 0) { ?>

                                                    <a href="" data-toggle="modal" data-target="#myModal11" onclick="fund_paid(<?php echo $f['id'] ?>,<?php echo $f['charges'] ?>)"><img src="<?php echo base_url('admin_assets/img/Add_to_vendor.png') ?>" title="Add to Vendor" alt="Add to Vendor" width="25" height="25"></a>  

                                                    <a href="<?php echo base_url() ?>admin/update_case_fund?request_id=<?php echo $f['id'] ?>&case_id=<?php echo $f['case_id'] ?>&status=2"><img src="<?php echo base_url('admin_assets//img/reject.png') ?>" title="Reject" alt="Reject" width="25" height="25"></a>

                                                    <?php } ?>

                                                    <?php 
                                                    if($f['is_issue']==1){

                                                    ?>
                                                    <a href="<?php echo base_url('admin/fund_case_invoice/'.$f['id']) ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Voucher" alt="View Voucher" width="25" height="25"></a>
                                                    <?php } ?>  

                                                 </td>

                                             </tr>

                                            <?php    

                                              }

                                            ?>

                                             

                                           

                                           </tbody>

                                        </table>

                                        <!-- <button type="submit" class="btn btn-primary pull-right">Submit</button> -->

                                        <!-- <a href="<?php echo base_url() ?>admin/view_emp"><button type="" class="btn btn-primary pull-right">Submit</button></a> -->

                                        <!-- </form> -->

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                </div> <!-- /.main content -->

            </div><!-- /#page-wrapper -->



        </div><!-- /#wrapper -->

        <!-- START CORE PLUGINS -->

        <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" >

                <div class="modal-dialog" role="document">

                  <div class="modal-content" style="width: 857px; margin-left: -122px">

                    <div class="modal-header">

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                      <h1 class="modal-title">Issue Payment</h1>

                    </div>



                    <div class="modal-body">

                        <form method="POST" action="<?php echo base_url()?>admin/issue_case_payment" enctype="multipart/form-data">

<input type="hidden" name="fund_id">

                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >

              <div class="panel panel-bd" >



                <div class="panel-body" >



                  <div class="form-group row">

                                        <div class="form-group col-lg-6">

                                        <label for="">Date</label>

                                            <input name="date" type="date" class="form-control" required="This Field is Required..." readonly="">

                                        

                                        </div>

                                        <div class="form-group col-lg-6">

                                            <label for="">Amount</label>

                                            <input name="amount" type="number" class="form-control" required="This Field is Required..." readonly="">

                                        </div>

                                    </div>



                  <div class="form-group row">

                    <div class="form-group col-lg-6">

                        <label for="">Payment Type</label><br>

                       

                        <label>Journal Voucher</label>&nbsp;&nbsp;

                        <input type="hidden" name="type" value="1">

                    </div>

                    <!-- <?php 

                      $this->db->select('*')

                           ->from('fund_case_approve')

                           ->where('STR_TO_DATE(date, "%Y-%M-%d") >=', date('Y-m-d'))

                           ->where('STR_TO_DATE(date, "%Y-%M-%d") <=', date('Y-m-t'))

                           ->order_by('slip', 'desc');

                      $slip = $this->db->get()->row_array();

                      $slip = $slip['slip'];

                      $slip = $slip + 1;

                    ?>

                    <?php 

                      $this->db->select('*')

                           ->from('fund_case_approve')

                           ->where('STR_TO_DATE(date, "%Y-%M-%d") >=', date('Y-m-d'))

                           ->where('STR_TO_DATE(date, "%Y-%M-%d") <=', date('Y-m-t'))

                           ->order_by('payorder', 'desc');

                      $payorder = $this->db->get()->row_array();

                      $payorder = $payorder['payorder'];

                      $payorder = $payorder + 1;

                    ?>

                    <?php 

                      $this->db->select('*')

                           ->from('fund_case_approve')

                           ->where('STR_TO_DATE(date, "%Y-%M-%d") >=', date('Y-m-d'))

                           ->where('STR_TO_DATE(date, "%Y-%M-%d") <=', date('Y-m-t'))

                           ->order_by('chaque', 'desc');

                      $chaque = $this->db->get()->row_array();

                      $chaque = $chaque['chaque'];

                      $chaque = $chaque + 1;

                    ?> -->

                    <?php 

                    // if (date('d')>29) {

                    //   $slip1 = 1;

                    // }else{





                      $this->db->select('*')

                           ->from('fund_case_approve')

                           ->where('type',1)
                           ->where('date >=', date('Y-m-1'))
                           ->where('date <=', date('Y-m-t'))

                           ->order_by('id', 'desc');

                      $slip = $this->db->get()->row_array();           
                      //print_r($this->db->last_query());
                      //print_r($slip);

                      $slip1 = $slip['slip'] + 1;

                      //}

                    //echo 1;

                    ?>

                    <div class="form-group col-lg-6 change-type type-1">

                      <label>Journal Voucher #</label>

                      <input name="" type="text" class="form-control" value="<?php echo 'JV'.$slip1 ?>" readonly>

                      <input type="hidden" name="slip" value="<?php echo $slip1 ?>">

                    </div>

                 

                   </div>





                

                  </div>

                <div class=panel-footer>

                  <div class="form-group row">

                        <div class="col-sm-12">

                        <button type="submit" class="btn btn-primary pull-right">Submit</button>

                        </div>

                    </div>

                </div>

              </div>

            </div>

            </form>

                    </div>

                    <div class="modal-footer">

                    <!--    <p class="pull-right">Poworwed by </ -->

                    </div>

                  </div><!-- /.modal-content -->

                </div><!-- /.modal-dialog -->

              </div>

<script type="text/javascript">

  $('.check_all').change(function() {

    if($(this).is(':checked')){

      $('.add_check').removeAttr('checked');

      $('.add_check').click();

      //$('.add_check').attr('checked', true);

    }

    else{

      $('.add_check').removeAttr('checked');

    }

    //$('.add_check').click();

  })

  function fund_paid(id,amount) {

    var today = new Date();

var dd = today.getDate();

var mm = today.getMonth()+1; //January is 0!



var yyyy = today.getFullYear();

if(dd<10){

    dd='0'+dd;

} 

if(mm<10){

    mm='0'+mm;

} 

var today = yyyy+'-'+mm+'-'+dd

//var today = dd+'/'+mm+'/'+yyyy;

    $('[name="fund_id"]').val(id)

    $('[name="amount"]').val(amount)

    $('#myModal11 [name="date"]').val(today)

}

</script>


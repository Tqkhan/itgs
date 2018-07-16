
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
                            <h1>Fund Request</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Fund Request</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Fund Request</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="dataTableoprations" class="table table-bordered table-striped table-hover">
                                          <thead>
                                            <tr>
                                              <th>Id</th>
                                              <th>ITGS Ref</th>
                                              <th>Type of Services</th>
                                              <th>Employee Name</th>
                                              <th>Date</th>
                                              <th>Payment Mode</th>
                                              <th>Official Fee</th>
                                              <th>Total</th>
                                              <th>Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>

<?php 
$scopecount=1;
foreach ($jobs as $case): ?>

<?php $total=$case['official_fee']+$case['vendor_changes']+$case['easy_paisa_charges']+$case['mobi_cash_charges']+$case['bank_commission']+$case['postage_courier']+$case['other_charges'];

?>
        <tr>
  <td><span class="footable-toggle"></span><?php echo $case['id'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['scope_name'] ?></td>
    <td><span class="footable-toggle"></span><?php echo $case['employee_name'] ?></td>
<td><span class="footable-toggle"></span><?php echo date('d M Y', strtotime($case['date_time'])) ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['mode_of_payment'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['official_fee'] ?></td>

  <td><span class="footable-toggle"></span>
  <?php echo $total; ?></td>
    <td><span class="footable-toggle"></span>
  
  <?php 
  if($case['is_approved']==0){
      echo "Pending";
  }else if($case['is_approved']==1){
      echo "Approved";
  }else if($case['is_approved']==2){
      echo "Rejected";
  }
  ?>
  
  </td>
  


<?php 

$scopecount++;
   endforeach ?>

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
</script>

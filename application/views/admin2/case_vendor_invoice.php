
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
                                        <h4>Case Vendor Invoice</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->
                                        <table id="dataTableExamplecase_vendor_invoice" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <!-- <th><input type="checkbox"/ class="check_all"> </th> -->
                                                    <th>S.no</th>
                                                    <th>Reference Code</th>
                                                    <th>Total Subject</th>
                                                    <th>Total Activity</th>
                                                    <th>Case Expance</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              $con = 1;
                                              foreach ($case as $employee) {
                                            ?>
                                              <tr>
                                                 
                                                 <td><?php echo $con ?></td>
                                                 <td><?php echo $employee['reference_code'] ?></td>
                                                 <td><?php echo $employee['total_subject'] ?></td>
                                                 <td><?php echo $employee['total_activity'] ?></td>
                                                 <td><?php echo $employee['case_amount'] ?></td>
                                             </tr>
                                            <?php    
                                              $con++;
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


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
                                        <h4>Analytics Report</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ITGS Ref No</th>
                                                    <th>Subject Name</th>
                                                    <th>Activity Name</th>
                                                    <th>Reciving Date</th>
                                                    <th>Due Date</th>
                                                    <th>Submission Date</th>
                                                    <th>Aging (Days)</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($reports as $r) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $r['reference_code'] ?></td>
                                                    <td><?php echo $r['subject_name'] ?></td>
                                                    <td><?php echo $r['scope_name'] ?></td>
                                                    <td><?php echo date('Y-m-d', strtotime($r['created_at'])) ?></td>
                                                    <td><?php echo $r['date_time'] ?></td>
                                                    <td><?php echo $r['report_time'] ?></td>
                                                    <?php 
                                                        $date1 = new DateTime($r['created_at']);
                                                        $date2 = new DateTime($r['report_time']);
                                                        $diff = $date2->diff($date1)->format("%a");
                                                    ?>
                                                    <td><?php echo $diff ?></td>
                                                    <td><?php echo $r['charges'] ?></td>
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

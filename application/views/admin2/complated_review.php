
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
                            <h1>Complated Review</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Performance Review</a></li>

                                <li class="active">Complated Review</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Complated Review</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <!-- <th><input type="checkbox"/ class="check_all"> </th> -->
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Designation</th>
                                                    <th>Department</th>
                                                    <th>Month</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($employees as $employee) {
                                            ?>
                                              <tr>
                                                 
                                                 <td><?php echo $employee['employee_name'] ?></td>
                                                 <td><?php echo $employee['role'] ?></td>
                                                 <td><?php echo $employee['designation'] ?></td>
                                                 <td><?php echo $employee['department'] ?></td>
                                                 <td><?php echo date('F', strtotime($employee['date'])) ?></td>
                                                 <td><?php echo date('d M Y',strtotime($employee['created_at'])) ?></td>
                                                 <td><a href="<?php echo base_url('admin/view_review/'.$employee['id'].'/'.$employee['eid']) ?>"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" width="25" heigth="25" title="View Report"></a><a style="margin-right: 5px;" href="<?php echo base_url('admin/year_view_review/'.$employee['id'].'/'.$employee['eid']) ?>"><img src="<?php echo base_url('admin_assets/img/view_cv.png') ?>" title="View Year Report" width="25" heigth="25"></a></td>
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

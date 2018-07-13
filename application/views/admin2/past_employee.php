
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
                  
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Employees</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Father Name</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Date of Birth</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                <?php
                                                    foreach ($employees as $employee) {
                                                ?>
                                               <tr>
                                                    <td><?php echo $employee['full_name'] ?></td>
                                                    <td><?php echo $employee['father_name'] ?></td>
                                                    <td><?php echo $employee['mobile'] ?></td>
                                                    <td><?php echo $employee['gender'] ?></td>
                                                    <td><?php echo $employee['dob'] ?></td>
                                                    <td><a href="<?php echo base_url() ?>admin/employee_detail/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Detail" alt="View Detail" width="25" height="25"></a>
                                                    <a href="<?php echo base_url() ?>admin/employee_edit/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/edit.png" title="Edit Detail" alt="View Detail" width="25" height="25"></a>
                                                    <a href="<?php echo base_url() ?>admin/employee_enable/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/task.png" title="Restore Employee" alt="View Detail" width="25" height="25"></a></td>
                                                </tr>
                                                <?php 
                                                    }
                                                ?>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
     
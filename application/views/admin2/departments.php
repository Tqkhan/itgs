
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
                            <h1>Department</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                
                                <li class="active">Department</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Departments</h4>
                                        <a href="<?php echo base_url('admin/add_department') ?>"><button style="    margin-top: -4px;" type="button" class="btn btn-primary pull-right">Add Department</button></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Parent Department</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                <?php
                                                    foreach ($departments as $department) {
                                                ?>
                                               <tr>
                                                    <td><?php echo $department['name'] ?></td>
                                                    <td><?php echo $department['parent_name'] ?></td>
                                                    <td><a href="<?php echo base_url() ?>admin/department_edit/<?php echo $department['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/edit.png" title="Edit Detail" alt="Edit Detail" width="25" height="25"></a>
                                                    <a href="<?php echo base_url() ?>admin/department_delete/<?php echo $department['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/cancel.png" title="Delete Department" alt="Delete Department" width="25" height="25"></a></td>
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
                            </div>
                            <div style="height: 250px;"></div>
                        </div>
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
     
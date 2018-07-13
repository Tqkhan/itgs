
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
                            <h1>View Course</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                  <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                
                                <li >Course Management</li>
                                
                                <li class="active">View Course</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                  
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Course</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Teacher</th>
                                                    <th>Detail</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php 
                                                foreach ($courses as $course) {
                                            ?>
                                               <tr>
                                                    <td><?php echo $course['title'] ?></td>
                                                    <td><?php echo $course['description'] ?></td>
                                                    <td><?php if(!empty($course['employee_name'])) echo $course['employee_name']; else echo $course['teacher_name'] ?></td>
                                                    <td><?php echo $course['detail'] ?></td>
                                                    <td><a href="<?php echo base_url('admin/edit_course/'.$course['id']) ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/edit.png" title="Edit Course" alt="" width="25" height="25"></a>&nbsp;&nbsp;<a href="<?php echo base_url('admin/com_course/'.$course['id']) ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/report_submit.png" title="Edit Course" alt="" width="25" height="25"></a></td>
                                                </tr>
                                                <?php } ?>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                         <div style="height:350px;"></div>
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
     
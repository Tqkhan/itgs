
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
                                                    <th>Name</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Reason</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                <?php
                                                    foreach ($records as $r) {
                                                ?>
                                               <tr>
                                                    <td><?php echo $r['employee_name'] ?></td>
                                                    <td><?php echo $r['department'] ?></td>
                                                    <td><?php echo $r['designation'] ?></td>
                                                    <td><?php echo $r['requested_date'] ?></td>
                                                    <td><?php if($r['status'] == 0){echo 'Panding';}else{echo 'Completed';} ?></td>
                                                    <td><?php echo $r['remarks'] ?></td>
                                                    <td>
                                                        <?php if($r['status'] == 0){?>
                                                        <a href="<?php echo base_url('admin/approve_resignation/'.$r['id'].'/'.$r['employee_id']) ?>"><button class="btn btn-success">Approve</button></a>
                                                        <?php } ?>
                                                    </td>
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
      
                        
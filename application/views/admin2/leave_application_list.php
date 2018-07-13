
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
                            <h1>Leaves Application</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Leaves Application</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                   
                                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Leaves Application</h4>
                                         <a href="<?php echo base_url() ?>admin/leave_application"><button style="margin-top: -4px;" type="" class="btn btn-primary pull-right">Create</button></a>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <!-- <th><input type="checkbox"/ class="check_all"> </th> -->
                                                    <th>Employee Name</th>
                                                    <th>Employee ID</th>
                                                    <th>Nature of Leave</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <!-- <th>Total Leaves</th>
                                                    <th>Sick Leaves</th>
                                                    <th>Casual Leaves</th>
                                                    <th>Annual Leaves</th> -->
                                                    <th>Total Days</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($lists as $list) {
                                            ?>
                                              <tr>
                                                <?php 
                                                    if ($list['is_approve']==0) {
                                                        $status = 'Panding';
                                                    }
                                                    elseif ($list['is_approve']==1) {
                                                        $status = 'Reject By HOD';
                                                    }
                                                    elseif ($list['is_approve']==2) {
                                                        $status = 'Panding By Hr';
                                                    }
                                                    elseif ($list['is_approve']==3) {
                                                        $status = 'Reject By hr';
                                                    }
                                                    elseif ($list['is_approve']==4) {
                                                        $status = 'Approve By Hr';
                                                    }
                                                    elseif ($list['is_approve']==5) {
                                                        $status = 'Panding By Finance';
                                                    }
                                                    elseif ($list['is_approve']==6) {
                                                        $status = 'Reject By Finance';
                                                    }
                                                    elseif ($list['is_approve']==7) {
                                                        $status = 'Approve By Finance';
                                                    }
                                                    $old_date = $list['start_date'];
                                                    $old_date_timestamp = strtotime($old_date);
                                                    $new_date = date('d-M-y', $old_date_timestamp);
                                                    $old_date = $list['end_date'];
                                                    $old_date_timestamp = strtotime($old_date);
                                                    $new_date1 = date('d-M-y', $old_date_timestamp);
                                                    if($list['total_leaves']){$le = $list['total_leaves'];}else{$le = 0;}
                                                ?> 
                                                 <td><?php echo $list['employee_name'] ?></td>
                                                 <td><?php echo $list['employee_id'] ?></td>
                                                 <td><?php echo $list['nature_of_leave'] ?></td>
                                                 <td><?php echo $new_date ?></td>
                                                 <td><?php echo $new_date1 ?></td>
<!--                                                  <td><?php echo $le ?></td>
                                                 <td><?php echo $list['sick_leave'] ?></td>
                                                 <td><?php echo $list['casual_leave'] ?></td>
                                                 <td><?php echo $list['annual_leave'] ?></td> -->
                                                 <td><?php echo $list['total_days'] ?></td>
                                                 <td><?php echo $status ?></td>
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
                        <div style="height: 450px;"></div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

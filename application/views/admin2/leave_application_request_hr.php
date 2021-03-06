
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
                            <h1>Leave Application</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Leave Application</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Leave Application Request</h4>
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
                                                    <th>Employee Status</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Total Days</th>
                                                    <th>Balance</th>
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
                                                        $status = 'Pending';
                                                    }
                                                    elseif ($list['is_approve']==1) {
                                                        $status = 'Reject By HOD';
                                                    }
                                                    elseif ($list['is_approve']==2) {
                                                        $status = 'Pending By Hr';
                                                    }
                                                    elseif ($list['is_approve']==3) {
                                                        $status = 'Reject By hr';
                                                    }
                                                    elseif ($list['is_approve']==4) {
                                                        $status = 'Approve By Hr';
                                                    }
                                                    elseif ($list['is_approve']==5) {
                                                        $status = 'Pending By Finance';
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
                                                ?> 
                                                 <td><?php echo $list['employee_name'] ?></td>
                                                 <td><?php echo $list['employee_id'] ?></td>
                                                 <td><?php echo $list['nature_of_leave'] ?></td>
                                                 <td><?php echo $list['status'] ?></td>
                                                 <td><?php echo $new_date ?></td>
                                                 <td><?php echo $new_date1 ?></td>
                                                 <td><?php echo $list['total_days'] ?></td>
                                                 <td><?php echo $list['leaves'] - $list['balance'] ?></td>
                                                <?php 
                                                    if ($list['is_approve']==2) {
                                                ?>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin/leave_application_approve_hr/<?php echo $list['id'] ?>"><button type="" class="btn btn-primary">Approve</button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() ?>admin/leave_application_reject_hr/<?php echo $list['id'] ?>"><button type="" class="btn btn-danger">Reject</button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() ?>admin/leave_application_send/<?php echo $list['id'] ?>"><button type="" class="btn btn-danger">Unpaid Leave</button></a></td>
                                                <?php }else{ ?>
                                                <td><?php echo $status ?>
                                                </td>
                                                <?php } ?>
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
                        <div style="height: 90px;"></div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

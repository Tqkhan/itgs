
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
                            <h1>Loan Application</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                               <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Loan Application</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Loan Application Finance</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Employee Name</th>
                                                    <th>Employee ID</th>
                                                    <th>Requested Loan Amount</th>
                                                    <th>Loan Application Date</th>
                                                    <th>Monthly Deduction</th>
                                                    <th>Requested Pay Back Period</th>
                                                    <th>Joining Date</th>
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
                                                        $status = 'Approve';
                                                    }
                                                    elseif ($list['is_approve']==2) {
                                                        $status = 'Reject';
                                                    }
                                                ?> 
                                                 <td><?php echo $list['employee_name'] ?></td>
                                                 <td><?php echo $list['employee_id'] ?></td>
                                                 <td><?php echo $list['requested_loan_amount'] ?></td>
                                                 <td><?php echo $list['loan_application_date'] ?></td>
                                                 <td><?php echo $list['monthly_deduction'] ?></td>
                                                 <td><?php echo $list['pay_back_period'] ?></td>
                                                 <td><?php echo $list['joining_date'] ?></td>
                                                <?php 
                                                    if ($list['is_approve']==0) {
                                                ?>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin/load_application_approve/<?php echo $list['id'] ?>/1"><button type="" class="btn btn-primary">Approve</button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() ?>admin/load_application_approve/<?php echo $list['id'] ?>/2"><button type="" class="btn btn-danger">Reject</button></a></td>
                                                <?php }else{ ?>
                                                <td><?php echo $status ?></td>
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
                        <div style="height:190px;"></div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

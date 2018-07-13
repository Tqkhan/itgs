
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
                            <h1>Expense Form List</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>


                                <li class="active">Expense Form List</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                               
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Expense Form List</h4>
                                        <a href="<?php echo base_url() ?>admin/expense_form"><button style="margin-top: -4px;" type="" class="btn btn-primary pull-right">Create</button></a>    
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
                                                    <th>Expense Head</th>
                                                    <th>Amount</th>
                                                    <th>Expense Date</th>
                                                    <th>Comments</th>
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
                                                        $status = 'Panding By Admin';
                                                    }
                                                    elseif ($list['is_approve']==2) {
                                                        $status = 'Reject By HOD';
                                                    }
                                                    elseif ($list['is_approve']==3) {
                                                        $status = 'Approve';
                                                    }
                                                    elseif ($list['is_approve']==4) {
                                                        $status = 'Reject By Admin';
                                                    }
                                                ?> 
                                                 <td><?php echo $list['employee_name'] ?></td>
                                                 <td><?php echo $list['employee_id'] ?></td>
                                                 <td><?php echo $list['expense_head'] ?></td>
                                                 <td><?php echo $list['amount'] ?></td>
                                                 <td><?php echo $list['expense_date'] ?></td>
                                                 <td><?php echo $list['comments'] ?></td>
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
                        </div>
                        <div style="height: 450px;"></div>
                        </div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->


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
                            <h1>Complaint Form Request</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Complaint Form Request</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <?php if ($create == 0) {?>
                    <a href="<?php echo base_url() ?>admin/complaint_form"><button type="" class="btn btn-primary pull-right">Create</button></a>   
                    <?php } ?>            
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Visiting Card Request</h4>
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
                                                    <th>Date of Incident</th>
                                                    <th>Time of Incident</th>
                                                    <th>Location of Incident</th>
                                                    <th>Nature of Incident</th>
                                                    <th>Witnessed</th>
                                                    <th>Send To</th>
                                                    <th>Response</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($lists as $list) {
                                            ?>
                                              <tr>
                                                <?php 
                                                    if ($list['send']=='CM') {
                                                        $status = 'HOD';
                                                    }
                                                    elseif ($list['send']=='Hr') {
                                                        $status = 'HR';
                                                    }
                                                    elseif ($list['send']=='Admin') {
                                                        $status = 'CEO';
                                                    }
                                                ?> 
                                                 <td><?php echo $list['employee_name'] ?></td>
                                                 <td><?php echo $list['employee_id'] ?></td>
                                                 <td><?php echo $list['date_of_incident'] ?></td>
                                                 <td><?php echo $list['time_of_incident'] ?></td>
                                                 <td><?php echo $list['location_of_incident'] ?></td>
                                                 <td><?php echo $list['nature_of_incident'] ?></td>
                                                 <td><?php echo $list['witnessed'] ?></td>
                                                  <td><?php echo $status ?></td>
                                                 <?php
                                                    if ($_SESSION['role'] == $list['send']) {
                                                ?>
                                                <td>
                                                    <?php if ($list['response'] == null || $list['response'] == '') {
                                                    ?>
                                                    <form method="post" action="<?php echo base_url('admin/update_complaint_form') ?>">
                                                        <input type="hidden" name="id" value="<?php echo $list['id'] ?>">
                                                        <input type="text" name="response">
                                                    </form>
                                                    <?php } else{
                                                        echo $list['response'];
                                                    } ?>
                                                </td>
                                                <?php
                                                    } else{
                                                 ?>
                                               <td><?php echo $list['response'] ?></td>
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
                            </div>
                            </div>
                            <div style="height: 350px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

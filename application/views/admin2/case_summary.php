
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
                            <h1>Case Summary</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Assign Team</li>
                                <li class="active">Case Summary</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Case Detail </h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Client Ref#</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                             <tr>
                                                <td><?php echo $case['client_reference']; ?> </td>
                                                <td><?php echo $case['case_date']; ?> </td>
                                                <td><?php echo $case['case_due_date']; ?> </td>
                                            </tr>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Case Subject Details </h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Subject Name</th>
                                                    <th>Subject Type</th>
                                                    <th>Details</th>
                                                    <th>Attachement</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                   <?php foreach ($subjects as $key): ?>
                                             <tr>
                                                <td><?php echo $key['subject_name']; ?> </td>
                                                <td><?php echo $key['subject_type']; ?> </td>
                                                <td><?php echo $key['other_details']; ?> </td>
                                                <td><?php echo $key['subject_attachement']; ?> </td>
                                            </tr>
                                        <?php endforeach ?>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Subject Activity Details </h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Scope Name</th>
                                                    <th>Due Date</th>
                                                    <th>Attachement</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                   <?php foreach ($activities as $key): ?>
                                             <tr>
                                                <td><?php echo $key['scope_name']; ?> </td>
                                                <td><?php echo $key['due_date']; ?> </td>
                                                <td><?php echo $key['activity_attachement']; ?> </td>
                                            </tr>
                                        <?php endforeach ?>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Case Team Detail</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Subject Name</th>
                                                    <th>Team Lead</th>
                                                    <th>Team Member</th>
                                                    
                                                </tr>
                                            </thead>
                                           <tbody>
                                                   <?php foreach ($team_members as $key): ?>
                                             <tr>
                                                <td><?php echo $teams['subject_name']; ?> </td>
                                                <td><?php echo $teams['team_lead']; ?> </td>
                                                <td><?php echo $key['team_member']; ?> </td>
                                                
                                            </tr>
                                        <?php endforeach ?>
                                           </tbody>
                                        </table>
<a href="<?php echo base_url()?>admin/assign_team/<?php echo $case['id'] ?>" class="btn btn-success pull-right">Assign New Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 450px;"></div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->


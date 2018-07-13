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
                <h1>Hold Cases & Task</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">Hold Cases & Task</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="panel-body">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Hold Cases</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Employee Name</th>
                                            <th>Employee ID</th>
                                            <th>No of Case</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                              foreach ($employees as $e) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $e['employee_name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $e['employee_id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $e['total'] ?>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Hold task</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Employee Name</th>
                                            <th>Employee ID</th>
                                            <th>No of Case</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                              foreach ($task as $e) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $e['employee_name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $e['employee_id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $e['total'] ?>
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
        </div>
        <div style="height: 450px;"></div>
    </div>
</div>
</div>
</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
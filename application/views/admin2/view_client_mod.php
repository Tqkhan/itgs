  <!-- /.Navbar  Static Side -->
           <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="header-title">
                                <h1>View Employee</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">View Employee</li>
                                </ol>
                            </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd ">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Employee</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Login Name</th>
                                                    <th>Password</th>
                                                    <th>Contact #</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                           <?php foreach ($clients as $client): ?>
                                             <tr>
                                                <td><?php echo $client['client_name']; ?> </td>
                                                <td><?php echo $client['login_name']; ?> </td>
                                                <td><?php echo $client['password']; ?> </td>
                                                <td><?php echo $client['client_contact']; ?> </td>
                                                <td><?php echo $client['email']; ?> </td>
                                                <td><a href="<?php echo base_url() ?>admin/edit_client/<?php echo $client['client_id'] ?>"><img src="<?php echo base_url('admin_assets/img/edit.png') ?>" title="Edit Report" alt="Edit Report" width="25" height="25"></a></td>


                                            </tr>
                                        <?php endforeach ?>
                                               <!-- <tr>
                                                    <td>Name</td>
                                                    <td>Email</td>
                                                    <td>Phone</td>
                                                    <td>Address</td>
                                                    <td>Order Type</td>
                                                    <td>Company Name</td>
                                                    <td>Status</td>
                                                    <td>Payment Status</td>
                                                    <td><a href="http://e-zbook.com/sme-erp/admin/edit_rfq/1"><img src="http://e-zbook.com/sme-erp/assets/vv-icon.png" title="View Quotation" alt="Process for Approval" width="42" height="42"></a>
                                                    <a href="http://e-zbook.com/sme-erp/admin/delete/rfq/rfqID/1"><img src="https://cdn2.iconfinder.com/data/icons/e-business-helper/240/627249-delete3-256.png" title="Delete" alt="Delete" width="35" height="35"></a></td>
                                                </tr> -->
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

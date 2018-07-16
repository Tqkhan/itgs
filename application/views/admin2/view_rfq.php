
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
                                        <h4>DataTables with HTML5 export buttons </h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Order Type</th>
                                                    <th>Company Name</th>
                                                    <th>Status</th>
                                                    <th>Payment Status</th>
                                                    <th>Action &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                   <?php foreach ($records as $key): ?>
                                             <tr>
                                                <td><?php echo $key['client_name']; ?> </td>
                                                <td><?php echo $key['client_email']; ?> </td>
                                                <td><?php echo $key['client_phone']; ?> </td>
                                                <td><?php echo $key['client_address']; ?> </td>
                                                <td><?php echo $key['order_type']; ?> </td>
                                                <td><?php echo $key['company_name']; ?> </td>
                                                <td><?php echo $key['status']; ?> </td>
                                                <td><?php if($key['is_paid']==1){
                                                    echo "Received";
                                                    }else{
                                                        echo "Pending";
                                                        } ?> </td>
                                                <td>

<?php if ($key['file']=="" ): ?>
                  <a href="<?php echo base_url() ?>admin/edit_rfq/<?php echo $key['rfqID'] ?>"><img src="<?php echo base_url() ?>assets/vv-icon.png" title="View Quotation" alt="Process for Approval" width="42" height="42"></a>

<?php endif ?>
<?php if ($key['file']!="" && $_SESSION['role']=="Sales"): ?>
                  <a href="<?php echo base_url() ?>uploads/<?php echo $key['file'] ?>"><img src="<?php echo base_url() ?>assets/d-icon2.png" title="Download Quotation" alt="Process for Approval" width="38" ></a>
                  <a href="<?php echo base_url() ?>admin/create_lead"><img src="<?php echo base_url() ?>assets/p-icon.png" title="Download Quotation" alt="Process for Approval" width="42" height="42"></a>



<?php endif ?>



                                                <a href="<?php echo base_url() ?>admin/delete/rfq/rfqID/<?php echo $key['rfqID'] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="35" height="35"></a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                           </tbody>
                                        </table>
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


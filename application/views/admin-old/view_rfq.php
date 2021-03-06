
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME- ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Leads</a>
                        </li>
                        <li class="active">
                            <strong>View Leads</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Leads</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover"  id="editable">
                                     <thead>
                                            <tr>
                                                <th id="name">Name</th>
                                                <th id="email">Email</th>
                                                <th id="phone">phone</th>
                                                <th id="address">Address</th>
                                                <th id="order">Order Type</th>
                                                <th id="order">Company Name</th>
                                                <th id="order">Status</th>
                                                <th id="order">Payment Status</th>
                                                <th id="order">Action</th>
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
     

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
										<h4>View Lead</h4>
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
														echo "Panding";
														} ?> </td>
												<td>

<?php if ($key['status']=="process" || $key['status']=="approved"): ?>
                  <a href="<?php echo base_url() ?>admin/create_quote/<?php echo $key['leadID'] ?>"><img src="<?php echo base_url() ?>assets/vv-icon.png" title="Process for Approval" alt="Process for Approval" width="42" height="42"></a>

<?php endif ?>
<?php if ($key['status']=="pending"): ?>
                                   <a href="<?php echo base_url() ?>admin/change_status/<?php echo $key['leadID'] ?>/process"><img src="<?php echo base_url() ?>assets/p-icon.png" title="Process for Approval" alt="Process for Approval" width="42" height="42"></a>

<?php endif ?>




                                      <a href="<?php echo base_url() ?>admin/create_invoice/<?php echo $key['leadID'] ?>?invoice=1"><img src="<?php echo base_url() ?>assets/i-icon.png" title="Process for Invoice" alt="Process for Invoice" width="35" height="35"></a>




                                                <a href="<?php echo base_url() ?>admin/delete/<?php echo $key['leadID'] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="35" height="35"></a>
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


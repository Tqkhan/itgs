
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
										<h4>All Leads </h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													  <th id="name">Name</th>
                                                <th id="email">Email</th>
                                                <th id="phone">phone</th>
                                                <th id="address">Address</th>
                                                <th id="order">Order Type</th>
                                                <th id="order">Status</th>
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
                                                <td><?php echo $key['status']; ?> </td>
                                                <td>

                  <a href="<?php echo base_url() ?>admin/add_payment_form/<?php echo $key['leadID'] ?>"><i class="fa fa-edit"> </i> Add Payment</a>

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


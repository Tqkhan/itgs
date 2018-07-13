	<!-- /.Navbar  Static Side -->
			<div class="control-sidebar-bg"></div>
			<!-- Page Content -->
			<div id="page-wrapper">
				<!-- main content -->
				<div class="content">
					<!-- Content Header (Page header) -->
					<div class="content-header">
						<div class="header-icon" style="margin-top: -9px;">
							<i class="pe-7s-users"></i>
						</div>
						<div class="header-title">
							<h1>Client View</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">Client View</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>Client View</h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
		<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Client Name</th>
					<th>Reference code</th>
					<th>Address</th>
					<th>Client Contact</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>

<?php
$scopecount=1;
foreach ($clients as $client): ?>

				<tr>
	<td><span class="footable-toggle"></span><?php echo $client['client_name'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $client['reference_code'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $client['address'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $client['client_contact'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $client['email'] ?></td>




	</td>

				</tr>

<?php

                                        $scopecount++;
                                       endforeach ?>

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


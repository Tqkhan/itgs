	<!-- /.Navbar  Static Side -->
			<div class="control-sidebar-bg"></div>
			<!-- Page Content -->
			<div id="page-wrapper">
				<!-- main content -->
				<div class="content">
					<!-- Content Header (Page header) -->
					<div class="content-header" >
						<div class="header-icon" style="margin-top: -9px;">
							<i class="pe-7s-user"></i>
						</div>
						<div class="header-title">
							<h1>View Reports</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url()?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">View Reports</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Reports</h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
		<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Client Ref</th>
					<th>ITGS Ref</th>
					<th>Report</th>
					<th>Remarks</th>
					<th>Submission Time</th>

				</tr>
			</thead>
			<tbody>

<?php
$scopecount=1;
foreach ($requests as $request): ?>

				<tr>
	<td><span class="footable-toggle"></span><?php echo $request['client_reference'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $request['reference_code'] ?></td>
	
	<td><span class="footable-toggle"></span>
	<?php  
		$file = explode(',', $request['attachment']);
		for ($i=0; $i < sizeof($file); $i++) { 
	?>
		<a download=""  target="_blank" href="<?php echo base_url() ?>uploads/attachment/<?php echo $file[$i] ?>">View Attachement</a>
	<?php } ?>
	</td>
	<td><span class="footable-toggle"></span><?php echo $request['remarks'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $request['date_time'] ?></td>
	

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

</div>
</div>
<div style="height:270px;"></div>
</div>

		<!-- /#wrapper -->
		<!-- START CORE PLUGINS -->

<script type="text/javascript">
				$(function () {
						$("#checkbox4").click(function () {
							var passedID = $(this).data('cas_id');
								if ($(this).is(":checked")) {
										$("#dvPassport").show();
										// $('model_id').pass.value(<?php echo $_SESSION['client_id']?>);
								} else {
										$("#dvPassport").hide();
								}
						});
				});

		</script>


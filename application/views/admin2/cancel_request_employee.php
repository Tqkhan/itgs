	<!-- /.Navbar  Static Side -->
			<div class="control-sidebar-bg"></div>
			<!-- Page Content -->
			<div id="page-wrapper">
				<!-- main content -->
				<div class="content">
					<!-- Content Header (Page header) -->
					<div class="content-header" >
						<div class="header-icon" style="margin-top: -9px;">
							<i class="pe-7s-delete-user"></i>
						</div>
						<div class="header-title">
							<h1>View Cancel Request</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url()?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">View Cancel Request</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Cancel Request</h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
		<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th style="">Client Ref</th>
					<th style="width:225px;">ITGS Ref</th>
					<th>Reason</th>
					<th>Time</th>
					<th>Specification</th>
					<th>Suggestion</th>
					<th>Status</th>
					<th>View</th>

				</tr>
			</thead>
			<tbody>

<?php
$scopecount=1;
foreach ($requests as $request): ?>

				<tr>
	<td><span class="footable-toggle"></span><?php echo $request['client_ref'] ?></td>
	<td ><span class="footable-toggle"></span><?php echo $request['itgs_reference'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $request['reason'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $request['cancel_time'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $request['suggestion'] ?></td>
	<td><span class="footable-toggle"></span><?php echo $request['other_specification'] ?></td>
		<td><span class="footable-toggle"></span>
	<?php if($request['case_status']==4){
	echo "Case Cancelled";
	}else if($request['case_status']==6){
	 echo "Case Rejected";
	}else{
	echo "Cancellation Panding";
	} ?></td>
	
	<td><span class="footable-toggle"></span><a href="<?php echo base_url() ?>admin/form1/<?php echo $request['case_id'] ?>" class="fa fa-eye"></a></td>

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


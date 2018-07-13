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
							<h1>View Case</h1>

							<ol class="breadcrumb">
								<li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

								<li class="active">View Case</li>
							</ol>
						</div>
					</div> <!-- /. Content Header (Page header) -->

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Case</h4>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">

										<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
											
											<thead>
												<tr>
													<th>Subject Name</th>
													<th>Scope Of Work</th>
													<th>Price</th>
													<th>Start Date</th>
													<th>Due Date</th>
													<th>Contact</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($subjects as $subject): ?>
													<tr>
													<td><?php echo $subject['subject_name'] ?></td>
													<td><?php echo $subject['scope_name'] ?></td>
													<td><?php echo $subject['price'] ?></td>
													<td><?php echo $subject['case_date'] ?></td>
													<td><?php echo $subject['due_date'] ?></td>
													<td><button type="button" onclick="client_chat(<?php echo $subject['id']?>, <?php echo $subject['case_id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#myModal">
														Start Chat
														</button> 
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
				</div> <!-- /.main content -->

				<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h1 class="modal-title">Chat</h1>
										</div>
										
										<div class="modal-body" >
										   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
							<div class="panel panel-bd">

								<div class="panel-body" style="height: 400px;overflow: auto;">
									<ul class="chat_list" id='load_chat' >
										

									</ul>
								</div>
								<div class=panel-footer>
									<div class=input-group>
										<form id="chat_form" >
											<!-- <input type="hidden" id="subject_id" name="subject_id"> -->
										    <input type="hidden" value="<?php echo $_SESSION['client_name'] ?>" name="sender_id">
										    <input type="hidden" id="case_id" name="case_id">
										    <input type="hidden" value="<?php echo date("d-m-Y h:i:s a") ?>" name="chat_date_time">
										
										<input class="form-control emojionearea" placeholder="Your Message. . . " name="message">

										<input type="file" name="attachement" >
										</form>
										<span class=input-group-btn>
											<button class="btn btn-success chat_btn" type="button">Send</button>
										</span>

									</div>
								</div>
							</div>
						</div>
										</div>
										<div class="modal-footer">
										<!-- 		<p class="pull-right">Poworwed by	</ -->
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div>
			</div><!-- /#page-wrapper -->
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->



<script type="text/javascript">
	function client_chat(subject_id,case_id) {
		// alert(subject_id+ " "+case_id);
		$('#subject_id').val(subject_id);
		$('#case_id').val(case_id);
		load_client_chat(case_id);

	}
	
	function case_modal(case_id) {
		// alert(subject_id+ " "+case_id);

		$('#case_id').val(case_id);
		load_case_modal(case_id);

	}

	$('.chat_btn').click(function() {
		
        var formData = new FormData( $("#chat_form")[0] );
        $.ajax({
            url: '<?php echo base_url(); ?>admin/add_client_chat',
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
		load_client_chat($('#subject_id').val());
            }
        });
	});


	function load_client_chat(case_id) {
		$.ajax({
			url:"<?php echo base_url() ?>admin/load_client_chat",
			data:{case_id:case_id},
			type:"post",
			success:function(resp) {
				$('#load_chat').html(resp);
			}
		});
	}
	
</script>
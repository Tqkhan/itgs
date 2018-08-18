			<div class="control-sidebar-bg"></div>
			<div id="page-wrapper">
				<div class="content">
					<div class="content-header">
						<div class="header-icon" style="margin-top: -9px;">
							<i class="pe-7s-display2"></i>
						</div>
						<div class="header-title">
							<h1>Memo</h1>

							<ol class="breadcrumb">
								<li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
								<li class="active">View Memo</li>
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-bd">
								<div class="panel-heading">
									<div class="panel-title">
										<h4>View Memo</h4>
                                        <div class="btn-group pull-right">

                                           
                                        </div>
									</div>
								</div>
								<div class="panel-body">

									<div class="table-responsive">
								
		
			<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
          <th>Memo ID</th>
					<th>Title</th>
          <th>Assigned By</th>
					<th>Memo Date</th>
					<th>Due Date</th>
					<th>Priority</th>
          <th>Description</th>
          <th>File</th>
          <th>Action?</th>
				</tr>
			</thead>
			<tbody>


      <?php foreach ($memos as $memo): ?>
        <tr>
         <td><?php echo $memo['id'] ?></td>
         <td><?php echo $memo['title'] ?></td>
         <td><?php echo $memo['assigned_by'] ?></td>
         <td><?php echo $memo['date_time'] ?></td>
         <td><?php echo $memo['due_date'] ?></td>
         <td><?php echo $memo['priority'] ?></td>
         <td><?php echo $memo['description'] ?></td>
         <td><?php if ($memo['file']): ?>
           <img src="<?php echo base_url().'uploads/memo/'.$memo['file'] ?> " width="80" />
         <?php else: ?>
          No File
         <?php endif ?></td>
         <td><?php if ($memo['user_id']==$_SESSION['id']):  ?>
          <a href="<?php echo base_url() ?>admin/delete_memo/<?php echo $memo['id'] ?>" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash"></i></a>
         <?php endif ?>
          <a data-toggle="modal" href='#modal-id' onclick="passMemoID(<?php echo $memo['id'] ?>)">Detail</a>
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
                       

					
</div>
			</div>
              </form>
              <div style="height: 440px;"></div>
</div> 
</div>
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->


<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Memo Detail</h4>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
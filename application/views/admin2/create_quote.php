
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
								<h1>Edit RFQ</h1>
								<small></small>
								<ol class="breadcrumb">
									<li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
									<li class="active">Edit RFQ</li>
								</ol>
							</div>
						</div> <!-- /. Content Header (Page header) -->

								<form method="post" action="<?php echo base_url() ?>admin/insert_quote" enctype="multipart/form-data">

						<div class="row">
						<div class="col-sm-12">
								<div class="panel panel-bd ">

									<div class="panel-body">
											<h3><strong>Contract with  <u><?php echo $records['client_name'] ?></u></strong> </h3>
       <dl class="dl-horizontal">

                                    <?php
if($records['status']=="pending"){
$text="Pending";
$class="label-warning";
}else if($records['status']=="process"){
$class="label-info";
$text="In Process";
}else if($records['status']=="approved"){
$class="label-info";
$text="Approved";
}else if($records['status']=="completed"){
$class="label-primary";
$text="Completed";
}
                                     ?>
                                        <dt>Status:</dt> <dd><span class="label <?php echo $class; ?>"><?php echo $text; ?></span></dd>
                                    </dl>
                                </div>
                                   <div class="row">
                                <div class="col-lg-5">
                                    <dl class="dl-horizontal">

                                        <dt>Created by:</dt> <dd><?php echo $records['login_name'] ?></dd>
                                        <dt>Messages:</dt> <dd>  <?php echo count($replies); ?></dd>
                                        <dt>Attachments:</dt> <dd><a href="<?php echo base_url() ?>uploads/<?php echo $records['file'] ?>" class="text-navy"><?php echo $records['file'] ?> </a> </dd>
                                    </dl>
                                </div>  <div class="col-lg-5">
                                    <dl class="dl-horizontal">

                                        <dt>Client Name:</dt> <dd><?php echo $records['client_name'] ?></dd>
                                        <dt>Client Email:</dt> <dd>  <?php echo $records['client_email'] ?></dd>
                                        <dt>Client Company:</dt> <dd> <?php echo $records['company_name'] ?></dd>
                                        <dt>Client Phone:</dt> <dd>  <?php echo $records['client_phone'] ?></dd>
                                        <dt>Client Address:</dt> <dd>  <?php echo $records['client_address'] ?></dd>

                                    </dl>
                                </div>
                              <!--   <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal" >

                                        <dt>Last Updated:</dt> <dd><?php echo date("d-m-Y h:i:s a") ?></dd>
                                        <dt>Created:</dt> <dd> 	<?php echo $records['updated_at'] ?> </dd>

                                    </dl>
                                </div> -->
                            </div>
		<hr>


					   </form>

					</div>
<div class="col-xs-12 col-sm-12 col-md-12 m-b-20">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Users messages</a></li>

                            </ul>
                            <!-- Tab panels -->

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab1">
                                    <div class="panel-body">
                                    	<?php foreach ($replies as $reply): ?>
                                        <div class="row">
                                            <div class="col-sm-1">
                                            <div class="">
                                            <img class="img-responsive  img-circle" src="http://e-zbook.com/sme-erp/uploads/profile/a34.jpg">
                                            </div><!-- /thumbnail -->
                                            </div><!-- /col-sm-1 -->
                                            <div class="col-sm-11">
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                            	<small class="pull-right"><?php echo $reply['date_time'] ?></small>
                                            <strong><?php echo $reply['login_name'] ?></strong> Replied on <strong><?php echo $records['client_name'] ?>'s</strong> Lead <br>
                                            </div>
                                            <div class="panel-body">
                                            <?php echo $reply['message'] ?>
                                                   <?php if ($reply['files']!=""): ?>
                                                     <br>
                                                     <br>
                                                       <a href="<?php echo base_url() ?>uploads/<?php echo $reply['files'] ?>"><?php echo $reply['files'] ?></a>
                                                   <?php endif ?>
                                            </div><!-- /panel-body -->
                                            </div><!-- /panel panel-default -->
                                            </div><!-- /col-sm-5 -->
                                        </div>
<?php endforeach; ?>
                                       <div class="well row" style="height: 226px;">
<form name="comment" method="post" action="<?php echo base_url() ?>admin/insert_quote" enctype="multipart/form-data">
                                <div class="form-group push-up-20">
                                    <label>Quick Reply</label>

                                </div>
                                <div class="form-group push-up-20">
                                    <textarea name="message" placeholder="" class="form-control" id="f1-about-yourself" rows="2"></textarea>
                                    <div class="form-group push-up-20">

                                    </div>
                                <div class="form-group push-up-20">
                                    <input type="file" class="form-control" value="" name="file">
                                </div>
      <input type="hidden" name="employeeID" value="<?php echo $_SESSION['login_id'] ?>">
                            <input type="hidden" name="requestID" value="<?php echo $records['leadID'] ?>">
                                </div>
                                <div class="form-group row">

             <?php if ($_SESSION['role']!="Sales"): ?>




<?php if ($records['status']=="approved"): ?>

     <a href="<?php echo base_url() ?>admin/change_status/<?php echo $records['leadID'] ?>/completed" class="btn btn-primary pull-right">Complete</a>


<?php endif ?>

<?php if ($records['status']!="completed"  && $records['status']!="approved"): ?>


                               <a href="<?php echo base_url() ?>admin/change_status/<?php echo $records['leadID'] ?>/approved/<?php echo $records['clientID'] ?>" class="btn btn-info pull-right">Approve</a>

<?php endif ?>

                           <?php endif ?>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
</form>
                                    </div>

                                </div>
                            </div>
                        </div>



					</div>


				</div> <!-- /.main content -->
			</div><!-- /#page-wrapper -->
		</div><!-- /#wrapper -->
		<!-- START CORE PLUGINS -->

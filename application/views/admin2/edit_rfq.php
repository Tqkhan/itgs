
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

                                <form method="post" action="<?php echo base_url() ?>admin/update_rfq" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">

                                    <div class="panel-body">
                                            <h2>Contract with <u><?php echo $records['client_name'] ?></u></h2>

        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Status : </label>
            <div class="col-sm-4">
                <?php echo $records['status'] ?>
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Last Updated :</label>
            <div class="col-sm-4">
                <?php echo date("d-m-Y h:i:s a") ?>
            </div>


        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Created by :</label>
            <div class="col-sm-4">
                <?php echo $records['login_name'] ?>
            </div>

            <label for="example-text-input" class="col-sm-2 col-form-label">Created :</label>

            <div class="col-sm-4">
                	<?php echo $records['updated_at'] ?>
            </div>


        </div>

        <hr>


                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div class="feed-activity-list">




                                        <div class="feed-element">

                                            <div class="media-body ">
                                                <small class="pull-right"><?php echo date("d-m-Y h:i:s a") ?></small>
                                                <div class="clearfix"></div>
                                                <div class="well">
                         <form name="comment" method="post" action="<?php echo base_url() ?>admin/update_rfq" enctype="multipart/form-data">
                                <div class="form-group push-up-20">
                                    <label>Quick Reply</label>

                                </div>
                                <div class="form-group push-up-20">
                                    <input type="file" class="form-control" value="" name="file">
                                </div>
							<input type="hidden" name="employeeID" value="<?php echo $_SESSION['login_id'] ?>">
                            <input type="hidden" name="rfqID" value="<?php echo $records['rfqID'] ?>">
                            <div class="panel-footer">
                                <input type="submit" value="Submit Quotation" name="submit" class="btn btn-success pull-right">
                            </div>
                        </form>
                         <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </form>

                    </div>




                    </div>


                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

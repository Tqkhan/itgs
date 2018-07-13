
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>SME-ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Leads</a>
                        </li>
                        <li class="active">
                            <strong>Lead Details</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">

        <?php 
// echo "<pre>";
// print_r($records);
         ?>
            <div class="col-lg-10">
                <div class="wrapper wrapper-content animated fadeInUp">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <h2>Contract with <u><?php echo $records['client_name'] ?></u></h2>
                                    </div>
                                    <dl class="dl-horizontal">
                                        <dt>Status:</dt> <dd><span class="label "><?php echo $records['status'] ?></span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <dl class="dl-horizontal">

                                        <dt>Created by:</dt> <dd><?php echo $records['login_name'] ?></dd>
                                    </dl>
                                </div>
                                <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal" >

                                        <dt>Last Updated:</dt> <dd><?php echo date("d-m-Y h:i:s a") ?></dd>
                                        <dt>Created:</dt> <dd> 	<?php echo $records['updated_at'] ?> </dd>
                                       
                                    </dl>
                                </div>
                            </div>
                          
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

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
                                    <!-- <textarea class="form-control summernote_lite" name="message" rows="3" placeholder="Click to get editor"></textarea> -->
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

                                </div>
                           
                                </div>

                                </div>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
 

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
                                        <dt>Messages:</dt> <dd>  <?php echo count($replies); ?></dd>
                                        <dt>Client:</dt> <dd><a href="#" class="text-navy"> <?php echo $records['company_name'] ?></a> </dd>
                                        <dt>Attachments:</dt> <dd><a href="<?php echo base_url() ?>uploads/<?php echo $records['file'] ?>" class="text-navy"><?php echo $records['file'] ?> </a> </dd>
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
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Users messages</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div class="feed-activity-list">


<?php foreach ($replies as $reply): ?>
    
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="<?php echo base_url() ?>uploads/profile/<?php echo $reply['profile_img'] ?>">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right"><?php echo $reply['date_time'] ?></small>
                                                <strong><?php echo $reply['login_name'] ?></strong> Replied on <strong><?php echo $records['client_name'] ?>'s</strong> Lead <br>
                                                <div class="well">
                                                   <?php echo $reply['message'] ?>
                                                   <?php if ($reply['files']!=""): ?>
                                                     <br>
                                                     <br>
                                                       <a href="<?php echo base_url() ?>uploads/<?php echo $reply['files'] ?>"><?php echo $reply['files'] ?></a>
                                                   <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                       
                                   
                                        <div class="feed-element">
                                            
                                            <div class="media-body ">
                                                <small class="pull-right"><?php echo date("d-m-Y h:i:s a") ?></small>
                                                <div class="clearfix"></div>
                                                <div class="well">
                          <form name="comment" method="post" action="<?php echo base_url() ?>admin/insert_quote" enctype="multipart/form-data">
                                <div class="form-group push-up-20">
                                    <label>Quick Reply</label>
                                    <textarea class="form-control summernote_lite" name="message" rows="3" placeholder="Click to get editor"></textarea>
                                </div>
                                <div class="form-group push-up-20">
                                    <input type="file" class="form-control" value="" name="file">
                                </div>
                            <input type="hidden" name="employeeID" value="<?php echo $_SESSION['login_id'] ?>">
                            <input type="hidden" name="requestID" value="<?php echo $records['leadID'] ?>">
                            
                  
                      <div class="panel-footer">
                           <?php if ($_SESSION['role']!="Sales"): ?>
                               

                              

<?php if ($records['status']=="approved"): ?>
    
     <a href="<?php echo base_url() ?>admin/change_status/<?php echo $records['leadID'] ?>/completed" class="btn btn-primary pull-right">Complete</a>

                             
<?php endif ?>

<?php if ($records['status']!="completed"  && $records['status']!="approved"): ?>
    

                               <a href="<?php echo base_url() ?>admin/change_status/<?php echo $records['leadID'] ?>/approved/<?php echo $records['clientID'] ?>" class="btn btn-info pull-right">Approve</a>

<?php endif ?>
    
                           <?php endif ?>

                                <input type="submit" value="Post Reply" name="submit" class="btn btn-success pull-right">

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
 
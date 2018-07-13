
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
                                <h1>SME- ERP</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Change Password</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/update_admin_password" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Change Password</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                     
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Old Password<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="password" value="" name="old" id="example-text-input" placeholder="">
            </div>
            <?php if ($this->session->flashdata('old_msg')): ?>
                <a class="btn btn-danger block full-width m-b"><?php echo $this->session->flashdata('old_msg'); ?></a>

<?php endif ?>
             
        </div>

        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">New Password<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="password" value="" name="new" id="example-text-input" placeholder="">
            </div>
             
        </div>

        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Confirm Password<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="password" value="" name="confirm" id="example-text-input" placeholder="">
            </div>
             <?php if ($this->session->flashdata('confirm_msg')): ?>
                <a class="btn btn-danger block full-width m-b"><?php echo $this->session->flashdata('confirm_msg'); ?></a>

<?php endif ?>
        </div>
          
         <div class="form-group row">
            
             
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>  
        

        

                                     
                                        
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


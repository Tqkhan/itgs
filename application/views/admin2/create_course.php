
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
                                <h1>Create Course</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                      <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                
                                <li >Course Management</li>
                                    <li class="active">Create Course</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/insert_course" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Create Course</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                     
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Course Title<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="" name="title" id="example-text-input" placeholder="">
            </div>
             
        </div>
          <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Description<span class="required">*</span></label>
           <div class="col-sm-9">
                <textarea placeholder="" name="description" class="form-control" id="f1-about-yourself" rows="2"></textarea>
            </div>
             
        </div> 
         <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Start Timeing<span class="required">*</span></label>
           <div class="col-sm-3">
                <input class="form-control" type="time" value="" name="start_timeing" id="example-text-input" placeholder="">
            </div>
               <label for="example-text-input" class="col-sm-3 col-form-label">End Timeing<span class="required">*</span></label>
           <div class="col-sm-3">
                <input class="form-control" type="time" value="" name="end_timeing" id="example-text-input" placeholder="">
            </div>
        </div> 
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Detail<span class="required">*</span></label>
           <div class="col-sm-9">
                <textarea  placeholder="" name="detail" class="form-control" id="f1-about-yourself" rows="2"></textarea>
            </div>
             
        </div> 
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Teacher<span class="required">*</span></label>
           <div class="col-sm-9">
               <select class="form-control" id="Select Teacher" name="teacher_id">
                   <option>Select Teacher</option>
                   <?php 
                    foreach ($records as $record) {
                      echo '<option value="'.$record['id'].'">'.$record['employee_name'].'</option>';
                    }
                   ?>

               </select>            
            </div>

        </div>

        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Teacher Name<span class="required">*</span></label>
           <div class="col-sm-9">
                <input placeholder="" name="teacher_name" class="form-control">
            </div>
             
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


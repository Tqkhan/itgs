<?php $course = $course[0] ?>
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
                                    <li class="active">Edit Course</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/update_course" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $course['id'] ?>">
                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Course</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                     
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Course Title<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="<?php echo $course['title'] ?>" name="title" id="example-text-input" placeholder="">
            </div>
             
        </div>
          <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Description<span class="required">*</span></label>
           <div class="col-sm-9">
                <textarea placeholder="" name="description" value="<?php echo $course['description'] ?>" class="form-control" id="f1-about-yourself" rows="2"><?php echo $course['description'] ?></textarea>
            </div>
             
        </div> 
         <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Start Timeing<span class="required">*</span></label>
           <div class="col-sm-3">
                <input class="form-control" type="time" value="<?php echo $course['start_timeing'] ?>" name="start_timeing" id="example-text-input" placeholder="">
            </div>
               <label for="example-text-input" class="col-sm-3 col-form-label">End Timeing<span class="required">*</span></label>
           <div class="col-sm-3">
                <input class="form-control" type="time" value="<?php echo $course['end_timeing'] ?>" name="end_timeing" id="example-text-input" placeholder="">
            </div>
        </div> 
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Detail<span class="required">*</span></label>
           <div class="col-sm-9">
                <textarea  placeholder="" name="detail" class="form-control" id="f1-about-yourself" rows="2"><?php echo $course['detail'] ?></textarea>
            </div>
             
        </div> 
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Teacher<span class="required">*</span></label>
           <div class="col-sm-9">
               <select class="form-control" id="Select Teacher" name="teacher_id">
                   <option>Select Teacher</option>
                   <?php 
                    foreach ($records as $record) {
                      if ($course['teacher_id'] == $record['id']) {
                        $sel = 'selected';
                      }
                      else{
                        $sel = '';
                      }
                      echo '<option value="'.$record['id'].'" '.$sel.'>'.$record['employee_name'].'</option>';
                    }
                   ?>

               </select>            
            </div>

        </div>

        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Teacher Name<span class="required">*</span></label>
           <div class="col-sm-9">
                <input placeholder="" name="teacher_name" value="<?php echo $course['teacher_name'] ?>" class="form-control">
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


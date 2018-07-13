
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
                                <h1>Add Training Form</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                   <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                   <li> Training & Development</li>
                                    <li class="active">Add Training Form</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/insert_training" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Create New Training</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        <div class="form-group row">
            <label for="example-text-input" class="col-sm-3 col-form-label">Title of Training<span class="required">*</span></label>
            <div class="col-sm-9">
                <input class="form-control" type="text" value="" name="title" id="example-text-input" placeholder="">
            </div>
           
        </div> 
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-3 col-form-label">Start Date<span class="required">*</span></label>
            <div class="col-sm-9">
                <input class="form-control" type="date" value="" name="start_date" id="example-text-input" placeholder="">
            </div>
           
        </div>
        
        <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-3 col-form-label">End Date<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="date" value="" name="end_date" id="example-text-input" placeholder="">
            </div>
             
        </div>
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Start Timings<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="time" value="" name="timings" id="example-text-input" placeholder="">
            </div>
             
        </div>

        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">End Timings<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="time" value="" name="end_timings" id="example-text-input" placeholder="">
            </div>
             
        </div>

        <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-3 col-form-label">Venue<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="" name="venue" id="example-text-input" placeholder="">
            </div>
             
        </div>
         <div class="form-group row">
          <label for="example-text-input" class="col-sm-3 col-form-label">Training Details<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="" name="training_details" id="example-text-input" placeholder="">
            </div>
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Training Material<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="file" value="" name="training_material" id="example-text-input" placeholder="">
            </div>
            
        </div>
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Graded Training<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" name="graded_trainin" value="1" data-on="Yes" data-off="No">
             
            </div>
            
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Evaluation Test<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="" name="evaluation_test" id="example-text-input" placeholder="">
            </div>
           
        </div>
        <div class="form-group row">
           
              <label for="example-text-input" class="col-sm-3 col-form-label">Completion Certificate<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" name="completion_certificate" data-on="Yes" data-off="No">
            </div>
           
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Training Badge Earned<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" name="training_badge_earned" value="1" data-on="Yes" data-off="No">
            </div>
           
        </div>
        <div class="form-group row">
           
              <label for="example-text-input" class="col-sm-3 col-form-label">Trainer Details<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="" name="trainer_details" id="example-text-input" placeholder="">
            </div>
           
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Self Enrollment Allowed<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" name="self_enrollment_allowed" value="1" data-on="Yes" data-off="No">
            </div>
            
        </div> 
        
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Mandatory<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" name="mandatory" value="1" data-on="Yes" data-off="No">
            </div>
            
        </div> 

         <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-3 col-form-label">Apply to group/department<span class="required">*</span></label>
           <div class="col-sm-9">
                <select multiple="" class="selectpicker form-control" name="apply[]">
                    <option value="">Select Department</option>
                    <?php
                        foreach ($departments as $department) {
                             echo '<option value="'.$department['id'].'">'.$department['name'].'</option>';
                         } 
                    ?>
                </select>
            </div>
            
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Publish on the T & D board<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" name="publish" value="1" data-on="Yes" data-off="No">
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

<style type="text/css">
    .bootstrap-select .bootstrap-select {
    display: none !important;
}
</style>

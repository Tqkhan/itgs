<?php $training = $training[0] ?>
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
                                <h1>Edit Training Form</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Edit Training Form</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/update_training" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $training['id'] ?>">
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
                <input class="form-control" type="text" value="<?php echo $training['title'] ?>" name="title" id="example-text-input" placeholder="">
            </div>
           
        </div> 
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-3 col-form-label">Start Date<span class="required">*</span></label>
            <div class="col-sm-9">
                <input class="form-control" type="date" value="<?php echo $training['start_date'] ?>" name="start_date" id="example-text-input" placeholder="">
            </div>
           
        </div>
        
        <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-3 col-form-label">End Date<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="date" value="<?php echo $training['end_date'] ?>" name="end_date" id="example-text-input" placeholder="">
            </div>
             
        </div>
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Start Timings<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="time" value="<?php echo $training['timings'] ?>" name="timings" id="example-text-input" placeholder="">
            </div>
             
        </div>

        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">End Timings<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="time" value="<?php echo $training['end_timings'] ?>" name="end_timings" id="example-text-input" placeholder="">
            </div>
             
        </div>

        <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-3 col-form-label">Venue<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="<?php echo $training['venue'] ?>" name="venue" id="example-text-input" placeholder="">
            </div>
             
        </div>
         <div class="form-group row">
          <label for="example-text-input" class="col-sm-3 col-form-label">Training Details<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="<?php echo $training['training_details'] ?>" name="training_details" id="example-text-input" placeholder="">
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
                <input type="checkbox" data-toggle="toggle" <?php if($training['graded_trainin'] == 1) echo 'checked' ?> name="graded_trainin" value="1" data-on="Yes" data-off="No">
             
            </div>
            
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Evaluation Test<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="<?php echo $training['evaluation_test'] ?>" name="evaluation_test" id="example-text-input" placeholder="">
            </div>
           
        </div>
        <div class="form-group row">
           
              <label for="example-text-input" class="col-sm-3 col-form-label">Completion Certificate<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" <?php if($training['completion_certificate'] == 1) echo 'checked' ?> name="completion_certificate" value="1" data-on="Yes" data-off="No">
            </div>
           
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Training Badge Earned<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" <?php if($training['training_badge_earned'] == 1) echo 'checked' ?> name="training_badge_earned" value="1" data-on="Yes" data-off="No">
            </div>
           
        </div>
        <div class="form-group row">
           
              <label for="example-text-input" class="col-sm-3 col-form-label">Trainer Details<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="<?php echo $training['trainer_details'] ?>" name="trainer_details" id="example-text-input" placeholder="">
            </div>
           
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Self Enrollment Allowed<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" <?php if($training['self_enrollment_allowed'] == 1) echo 'checked' ?> name="self_enrollment_allowed" value="1" data-on="Yes" data-off="No">
            </div>
            
        </div> 
        
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Mandatory<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" name="mandatory" <?php if($training['mandatory'] == 1) echo 'checked' ?> value="1" data-on="Yes" data-off="No">
            </div>
            
        </div> 

         <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-3 col-form-label">Apply to group/department<span class="required">*</span></label>
           <div class="col-sm-9">
                <select multiple="" class="selectpicker form-control" name="apply[]">
                    <option value="">Select Department</option>
                    <?php
                        foreach ($departments as $department) {
                          $key = array_search($department['id'], array_column($training_departments, 'deparment_id'));
                          if (array_key_exists($key, $training_departments)) {
                            echo '<option value="'.$department['id'].'" selected>'.$department['name'].'</option>';
                          }
                          else{
                            echo '<option value="'.$department['id'].'">'.$department['name'].'</option>';
                          }
                        } 
                    ?>
                </select>
            </div>
            
        </div>
        <div class="form-group row">
           
             <label for="example-text-input" class="col-sm-3 col-form-label">Publish on the T & D board<span class="required">*</span></label>
           <div class="col-sm-9">
                <input type="checkbox" data-toggle="toggle" <?php if($training['publish'] == 1) echo 'checked' ?> name="publish" value="1" data-on="Yes" data-off="No">
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
<script type="text/javascript">
  // $('[data-toggle="toggle"]').change(function() {
  //   if($(this).attr('checked')){
  //     $(this).attr('value', '0')
  //   }
  //   else{
  //     $(this).attr('value', '1')
  //   }
  // })
</script>
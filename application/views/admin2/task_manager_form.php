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
            <h1>Task manager</h1>
            <small></small>
            <ol class="breadcrumb">
               <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
               <li class="active">Task manager</li>
            </ol>
         </div>
      </div>
      <!-- /. Content Header (Page header) -->
      <form method="post" action="<?php echo base_url() ?>/admin/task_manager_form_submit" enctype="multipart/form-data">
         <div class="row">
            <div class="col-sm-12">
               <div class="panel panel-bd ">
                  <div class="panel-heading">
                     <div class="panel-title">
                        <h4>Add Task </h4>
                     </div>
                  </div>
                  <div class="panel-body">
                   <div class="form-group col-lg-6">
                        <label for="Department">Department</label>
                        <select class="form-control req" required="" id="department" name="department">
                            <option value="">Select Department</option>
                            <?php
                                foreach ($departments as $department) {
                                    echo '<option value="'.$department['id'].'">'.$department['name'].'</option>';
                                }
                            ?>
                         
                           
                        </select>
                    </div>

                    <div class="form-group col-lg-6">
                        <label for="Department">Employes</label>
                       <select class="form-control req" required="" multiple="" id="employes" name="employes[]">
                       
                             <?php
                                  foreach ($employees as $employe) :
                              ?>
                              <option <?php if( $employe['id'] == $task_form_data['assign_user_id']  ){ echo 'selected'; }   ?> value="<?php echo $employe['id']; ?>">
                                  <?php echo $employe['employee_name']; ?>
                              </option>

                              <?php endforeach; ?>
                        </select>
                    </div>

                       <div class="form-group col-lg-6">
                            <label for="Current_Date">Current Date</label>
                            <input type="text" name="assign_date" id="assign_date" class="form-control req" value="<?php echo date('Y-m-d'); ?>" readonly >
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="due_date">Due Date</label>
                            <input type="date" name="due_date" id="due_date" class="form-control req" required="" >
                        </div>



                    <div class="form-group row">
                        <div class="form-group col-lg-6">
                            <label for="parity">Priority </label>
                            <select class="form-control req" required="" name="priority" >
                                <option value="">Select Priority </option>
                                <option value="High">High </option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                            </select>
                        </div>

                         <div class="form-group col-lg-6">
                            <label for="subject">Subject</label>
                             <input type="text" name="subject" id="subject" class="form-control req" required="">
                         </div>
                    </div>

                   <div class="form-group col-lg-12">
                        <label for="">Description</label>
                        <textarea class="form-control" id="Description" name="description" rows="2"></textarea>
                    </div>
                    
                     <div class="col-lg-6" id="profile-container">
                        <input id="file" type="file" name="file_image" placeholder="Photo" capture>
                    </div>

                     <div class="form-group row">
                        <div class="col-sm-12">
                           <button type="submit" class="btn btn-primary pull-right">Add</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>

<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->

<script type="text/javascript">
  
  $('#department').change(function(){
    var departmentID=$("#department option:selected").val();
    $.ajax({
      url:"<?php echo base_url() ?>admin/change_user_by_department",
      type:"get",
      data:{departmentID:departmentID},
      success:function(resp){
        $('#employes').html(resp);
      } 

    });
});

</script> 
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
      <form method="post" action="<?php echo base_url() ?>/admin/task_manager_edit_update/<?php echo $task_form_data['id'];  ?> " enctype="multipart/form-data">
      <input type="hidden" name="task_id" value="<?php echo $task_form_data['id'];  ?>">
         <div class="row">
            <div class="col-sm-12">
               <div class="panel panel-bd ">
                  <div class="panel-heading">
                     <div class="panel-title">
                        <h4>Edit Task </h4>
                     </div>
                  </div>
                  <div class="panel-body">
                   <div class="form-group col-lg-6">
                        <label for="Department">Department</label>
                        <select class="form-control req" required="" id="department" name="department">
                            <option value="Department 1">Select Department</option>
                            <?php
                                foreach ($departments as $department) : ?>
                                <option <?php if( $department['id'] == $task_form_data['department']  ){ echo 'selected'; }   ?> value="<?php echo $department['id']; ?>">
                                  <?php echo $department['name']; ?>
                                </option>   
                            <?php endforeach  ?>
                        </select>
                    </div>
<?php 
 $employee_task=explode(",", $task_employee['employee_id']);
 ?>
                    <div class="form-group col-lg-6">
                        <label for="Department">Employes</label>
                       <select class="form-control req" required="" multiple="" id="employes" name="employes[]">
                       
                             <?php

                                  foreach ($employees as $employe) :
                              ?>
                              <option <?php if( in_array($employe['id'] ,$employee_task) ){ echo 'selected'; }   ?> value="<?php echo $employe['id']; ?>">
                                  <?php echo $employe['employee_name']; ?>
                              </option>

                              <?php endforeach; ?>
                        </select>
                    </div>

                       <div class="form-group col-lg-6">
                            <label for="Current_Date">Current Date</label>
                            <input type="text" name="assign_date" id="assign_date" class="form-control req" value="<?php echo $task_form_data['assign_date'] ?>" readonly >
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="due_date">Due Date</label>
                            <input type="date" name="due_date" id="due_date" class="form-control req" required=""  value="<?php echo $task_form_data['due_date'] ?>">
                        </div>



                    <div class="form-group row">
                        <div class="form-group col-lg-6">
                            <label for="parity">Priority </label>
                            <select class="form-control req" required="" name="priority" >
                                <option <?php if( $task_form_data['priority'] == 1  ){ echo 'selected'; }   ?>  value="High">High </option>
                                <option <?php if( $task_form_data['priority'] == 2  ){ echo 'selected'; }   ?>  value="Medium">Medium</option>
                                <option <?php if( $task_form_data['priority'] == 3  ){ echo 'selected'; }   ?>   value="Low">Low</option>
                            </select>
                        </div>

                         <div class="form-group col-lg-6">
                            <label for="subject">Subject</label>
                             <input type="text" name="subject" id="subject" class="form-control req" value="<?php echo $task_form_data['subject'] ?>"  required="">
                         </div>
                    </div>

                   <div class="form-group col-lg-12">
                        <label for="">Description</label>
                        <textarea class="form-control" id="Description" name="description" rows="2"><?php echo $task_form_data['description'] ?></textarea>
                    </div>
                      

                     <div class="col-lg-6" id="profile-container">
                        <input id="file" type="file" name="file_image" placeholder="Photo" capture>
                        <img src="<?php  echo base_url(); ?>/uploads/task/<?php echo $task_form_data['file']; ?> " width=81>
                    </div>

                     <div class="form-group row">
                        <div class="col-sm-12">
                           <button type="submit" class="btn btn-primary pull-right">Update</button>
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
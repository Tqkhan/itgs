<style type="text/css">
   .print_time_show{
   display: none !important;
   }
   .panel-heading{
   height: 44px;
   }
   @media print {
   table{
   font-size:1vw;
   font-family: Garamond, Serif;
   }
   .sidebar{
   display: none;
   }
   .but{
   display: none;
   }
   .nav-container{
   display: none;
   }
   .content-header{
   display: none;
   }
   .footer-bottom {
   visibility: hidden;
   }
   .panel-body{
   border-color: #ffffff;
   }
   .print_time_show{
   display: block !important;
   margin-top: -4px !important;
   }
   .panel-heading{
   height: 70px;
   }
   .cent{
   text-align: center !important;
   } 
   .panel-title {
   text-align: center;
   }
   }
</style>
<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
   <!-- main content -->
   <div class="content">
      <!-- Content Header (Page header) -->
      <div class="content-header">
         <div class="header-icon" style="margin-top: -9px;">
            <i class="pe-7s-display2"></i>
         </div>
         <div class="header-title">
            <h1></h1>
            <ol class="breadcrumb">
               <li><a href=""><i class="pe-7s-home"></i> Home</a></li>
               <li class="active">Task Notifications</li>
            </ol>
         </div>
      </div>
      <!-- /. Content Header (Page header) -->
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd">
               <div class="panel-heading">
                  <div class="panel-title">
                     <h4 class="print_time_show cen" style="display: none;">Task Notifications</h4>
                     <h4 class="mar" style="margin-bottom: -25px;"></h4>
                     <br>
                  </div>
               </div>
               <div class="panel-body">
                  <div class="table-responsive">
                     <table id="ex" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>S.No</th>
                              <th>Dapartment</th>
                              <th>Subject</th>
                              <th>Description</th>
                              <th>Priority</th>
                              <th>Due_date</th>
                              <th>Assign By </th>
                              <th>Assigned To </th>
                              <th>status</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                        	
                           <?php 
                              foreach ($task_notification_data as $task_notification) :
                              ?>

                           <?php //print_r($task_notification); ?>
                           <tr>
                              <td><?php echo $task_notification['task_manager_id']; ?></td>
                              <td><?php echo $task_notification['departments_id']; ?></td>
                              <td><?php echo $task_notification['subject']; ?></td>
                              <td><?php echo $task_notification['description']; ?></td>
                              <td><?php echo $task_notification['priority']; ?></td>
                              <td><?php echo $task_notification['due_date']; ?></td>
                              <td><?php echo $task_notification['assigned_by'] ?></td>
                              <td><?php echo $task_notification['assigned'] ?></td>
                              <td><?php echo $task_notification['status'] ?></td>
                              <td>

                              <?php 

                              if($task_notification['user_id'] == $_SESSION['id']) :?>      
                                 <a href="<?php echo base_url(); ?>/admin/task_notification_destroy/<?php echo
                                  $task_notification['task_manager_id'];?>/<?php echo
                                  $task_notification['emp_id'];?>" onclick="return confirm('Are You Sure?')">Delete</a>
                                 
                                 <a href="<?php echo base_url(); ?>/admin/task_manager_form_edit/<?php echo $task_notification['task_manager_id'];?>"> Edit </a>
                              <?php endif;  ?>   
                              
                              <?php if($task_notification['employee_id'] == $_SESSION['id']) :?>
                                  <a href="" data-toggle="modal" onclick="get_data(<?php echo $task_notification['task_manager_id'] ?>)" data-target="#myModal10">response</a>
                              <?php endif; ?>   

                              </td>
                           </tr>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
     

   </div>
</div>
</div><!-- /#wrapper -->




<script type="text/javascript">
   function get_data(id) {
     $('[name=task_manager_id]').val(id);
   }
</script>

<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" >



   <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 857px; margin-left: -122px">
    


   
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h1 class="modal-title"></h1>
         </div>
         <div class="modal-body">
               
         <form  method="POST" action="<?php echo base_url()?>admin/response_of_task_form" class="dropzone">
              
              <input type="text" name="task_manager_id" value="<?php echo $task_notification['task_manager_id'] ?>">
              <input type="text" name="session_id" value="<?php echo $_SESSION['id'] ?>"> 

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                  <div class="panel panel-bd" >
                     <div class="panel-body" >
                     
                        <div class="form-group row">
                           <label for="example-text-input" class="col-sm-3 col-form-label">response<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <textarea name="response" class="form-control"></textarea>
                           </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="task_status_response">Status </label>
                            <select class="form-control req" required="" name="task_status_response">
                                <option value="">Select Priority </option>
                                <option value="hold">Hold </option>
                                <option value="pending ">Pending</option>
                                <option value="complete">Complete</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                          <div class="fallback">
                            <input name="file" type="file" multiple />
                          </div>
                        </div>  


                     </div>
                     <div class=panel-footer>
                        <div class="form-group row">
                           <div class="col-sm-12">
                              <button type="submit" class="btn btn-primary pull-right">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
        



         <div class="modal-footer">
          
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>


            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-box1"></i>
                        </div>
                        <div class="header-title">
                            <h1>Interview Manager</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                 <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Interview Manager</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Interview Manager</h4><small>(step 1)</small>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>Phone</th>
                                                    <th>Postion</th>
                                                    <th>Interview</th>
                                                    <th>Status</th>
                                                    <th>Action </th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                           
                                            <?php

                                              foreach ($cvs as $cv) {
                                            ?>

                                               <tr>
                                                    <td><?php echo $cv['first_name'] ?></td>
                                                   <td><?php echo $cv['father_name'] ?></td>
                                                   <td><?php echo $cv['phone'] ?></td>
                                                   <td><?php echo $cv['position_name'] ?></td>
                                                   <td><?php echo $cv['total_interview'] ?> Interview</td>
                                                   <td>
                                                       <?php 
                                                            if (isset($cv['interview'][0]) && $cv['interview'][0]['con'] == 0) {
                                                                echo 'Panding';
                                                            }
                                                            elseif (isset($cv['interview'][0]) && $cv['interview'][0]['con'] > 0) {
                                                                echo 'Complete';
                                                            }
                                                            
                                                        ?>
                                                   </td>
													<td>
                                                        <a download="" style="margin-right: 5px;" href="<?php echo base_url().''.$cv['file'] ?>"><img src="<?php echo base_url('admin_assets/img/view_cv.png') ?>" width="25" heigth="25" title="View CV"></a>
                                                        <a style="margin-right: 5px;" href="<?php echo base_url() ?>/admin/recruitment_detail/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_details.png') ?>" width="25" heigth="25" title="View Detail"></a>
                                                        <a href="<?php echo base_url() ?>/admin/recruitment_score/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" width="25" heigth="25" title="View Score Card"></a>
                                                    <a href="<?php echo base_url() ?>admin/delete_interview/<?php echo $cv['iid'] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="25" height="25"></a>
                                                     <?php 
                                                        if ($cv['latter'] == 0) {
                                                            if ($cv['cid'] == 0 && $cv['pid'] == 0) {
                                                    ?>
                                                    <?php
                                                        if ($cv['type'] == 'in per') {
                                                    ?>
                                                    <a href="" class="get_id" data-toggle="modal" data-id="<?php echo $cv['iid'] ?>" data-target="#myModal1" onclick="client_chat1(<?php echo $cv['iid'] ?>,'<?php echo $cv['first_name'] ?>','<?php echo $cv['position_name'] ?>','<?php echo $cv['date'] ?>','<?php echo $cv['father_name'] ?>','<?php echo $cv['current_salary_number'] ?>','<?php echo $cv['expected_salary_word'] ?>')"><img src="<?php echo base_url('admin_assets/img/schedule.png') ?>" width="25" heigth="25" title="Take Interview"></a>
                                                    <?php
                                                            
                                                        }
                                                        else{
                                                    ?>
                                                    <a href="" class="get_id" data-toggle="modal" data-id="<?php echo $cv['iid'] ?>" data-target="#myModal" onclick="client_chat(<?php echo $cv['iid'] ?>,'<?php echo $cv['first_name'] ?>','<?php echo $cv['position_name'] ?>','<?php echo $cv['date'] ?>','<?php echo $cv['time'] ?>')"><img src="<?php echo base_url('admin_assets/img/schedule.png') ?>" width="25" heigth="25" title="Take Interview"></a>
                                                    <?php

                                                        } } }
                                                    ?>
                                                    <!-- <a href="" data-toggle="modal" data-target="#myModal1" onclick="client_chat( 195)"><img src="http://icons.iconarchive.com/icons/alecive/flatwoken/128/Apps-Google-Drive-Forms-icon.png" title="" alt="" width="25" height="25"></a> -->
                                                </td>
                                                </tr>
                                            <?php    
                                              }
                                            ?>  
                                           </tbody>
                                        </table>
                                    </div>
                                    <a href="<?php echo base_url() ?>admin/interview_step_2"><button type="" class="btn btn-primary pull-right">Next</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="<?php echo base_url()?>admin/add_pre_interview" >
                        <input type="hidden" name="employee_id" value="<?php echo $_SESSION['id'] ?>">
                        <input type="hidden" name="interview_id" class="rid">
                     <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Pre Interview</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >

                                 <div class="form-group col-lg-12">
                                            
                                        </div>
                                    
                                  
                                         <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Date</label>
                                            <input name="date" readonly type="date" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Name</label>
                                            <input name="name" readonly type="text" class="form-control">
                                        </div>
                                    </div>

                                    
                                   
                                         <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Father’s/Husband’s Name</label>
                                            <input name="father" readonly type="text" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Position applied for</label>
                                            <input name="postion" readonly type="text" class="form-control">
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Date of Birth</label>
                                            <input name="dob" type="date" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Religion and Gender</label>
                                            <input name="religion_and_gender" type="text" class="form-control">
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Marital Status</label>
                                            <input name="marital" type="text" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Last Degree</label>
                                            <input name="degree" type="text" class="form-control">
                                        
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="">Total Work Experience</label>
                                            <input name="experience" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Medical Limitations (if any)</label>
                                            <input name="medical" type="text" class="form-control">
                                        
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="">Email & Contact Details</label>
                                            <input name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Current Company name</label>
                                            <input name="company" type="text" class="form-control">
                                        
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="">Designation</label>
                                            <input name="designation" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Major Responsibilities and tasks</label>
                                            <input name="responsibilities"  type="text" class="form-control">
                                        
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="">Current Salary Package</label>
                                            <input name="current_salary" readonly type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Expected Salary</label>
                                            <input name="expected_salary" readonly type="text" class="form-control">
                                        
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="">How did you know about us (Source)</label>
                                            <input name="source" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Define yourself in one word</label>
                                            <input name="yourself" type="text" class="form-control">
                                        
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="">Strengths -Any 3</label>
                                            <input name="strengths" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Weakness -Any 3</label>
                                            <input name="weakness" type="text" class="form-control">
                                        
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Score out of 10</label>
                                            <input type="number" name="point" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Recommended</label>
                                            <select name="recommended" class="form-control">
                                                <option value="">Select Recommended</option>
                                                <option value="0">Approve</option>
                                                <option value="1">Reject</option>
                                                <option value="2">Next Interview</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        
                                        <div class="form-group col-lg-12">
                                            <label for="">What is your definition of a satisfied job</label>
                                            <textarea rows="1" class="form-control" name="definition" ></textarea>
                                        </div>
                                  
                                    
                                     </div>
                                     <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">What do you think what will be your biggest contribution to our organization if you hired for this position</label>
                                            <textarea rows="2" class="form-control" cols="96" name="hired" ></textarea>
                                        </div>
                                       
                                  
                                    
                                     </div>
                                     </div>
                                        
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
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                   <form method="POST" action="<?php echo base_url()?>admin/add_call_interview" enctype="multipart/form-data">
                    <input type="hidden" name="employee_id" value="<?php echo $_SESSION['id'] ?>">
                    <input type="hidden" name="interview_id" class="rid">
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Telephone Interview</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >

                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Candidate’s Name</label>
                                        <input type="text" name="name" readonly class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Applied for</label>
                                            <input type="text" name="applied" readonly class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Time </label>
                                        <input type="time" name="time" readonly class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Date</label>
                                            <input type="date" name="date" readonly class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">Tell something about yourself</label>
                                        <textarea class="form-control" name="yourself" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">How would you describe your relationship with your current reporting manager</label>
                                        <textarea class="form-control" name="relationship_manager" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Why are you seeking a new position  </label>
                                        <textarea class="form-control" name="new_position" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Briefly describe your employment experience </label>
                                        <textarea class="form-control" name="employment_experience" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Availability</label>
                                        <textarea class="form-control" name="availability" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                        <label for="">Current Salary & Expected Salary</label>
                                        <textarea class="form-control" name="salary" id="exampleTextarea" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Score out of 10</label>
                                            <input type="number" name="point" class="form-control" id=""  placeholder="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Recommended</label>
                                            <select name="recommended" class="form-control">
                                                <option value="">Select Recommended</option>
                                                <option value="0">Approve</option>
                                                <option value="1">Reject</option>
                                                <option value="2">Next Interview</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                        <label for="">Remarks</label>
                                        <textarea class="form-control" name="remarks" id="exampleTextarea" rows="2"></textarea>
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
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
<div style="height:237px;"></div>
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

<script type="text/javascript">
    function client_chat(id,name,position,date,time) {
        $('.rid').val(id)
        $('[name="name"]').val(name)
        $('[name="applied"]').val(position)
        $('[name="date"]').val(date)
        $('[name="time"]').val(time)
    }
    function client_chat1(id,name,position,date,father,current,expacted) {
        $('.rid').val(id)
        $('[name="name"]').val(name)
        $('[name="postion"]').val(position)
        $('[name="date"]').val(date)
        $('[name="father"]').val(father)
        $('[name="current_salary"]').val(current)
        $('[name="expected_salary"]').val(expacted)
    }
    // $('.get_id').click(function() {
    //     $('.rid').val($(this).attr('data-id'))
    // })
</script>
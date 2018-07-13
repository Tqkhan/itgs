<style type="text/css">
    .pan {display: none;}

</style>
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
                            <h1>SME- ERP</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">SME- ERP</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Interview Manager</h4><small>(step 2)</small>
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
                                                    <th>Action </th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                           
                                            <?php

                                              foreach ($cvs as $cv) {
                                                if ($cv['cid'] > 0 || $cv['pid'] > 0 ) {
                                                
                                            ?>

                                               <tr>
                                                    <td><?php echo $cv['first_name'] ?></td>
                                                   <td><?php echo $cv['father_name'] ?></td>
                                                   <td><?php echo $cv['phone'] ?></td>
                                                   <td><?php echo $cv['position_name'] ?></td>
                                                   
                                                    <td>
                                                        <a download="" style="margin-right: 5px;" href="<?php echo base_url().''.$cv['file'] ?>"><img src="<?php echo base_url('admin_assets/img/view_cv.png') ?>" width="25" heigth="25" title="View CV"></a>
                                                        <a style="margin-right: 5px;" href="<?php echo base_url() ?>/admin/recruitment_detail/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_details.png') ?>" width="25" heigth="25" title="View Detail"></a>
                                                        <a href="<?php echo base_url() ?>/admin/recruitment_score/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" width="25" heigth="25" title="View Score Card"></a>
                                                    <a href="<?php echo base_url() ?>admin/delete_employee/employee_personal_information/userID/<?php echo $cv['id'] ?>"><img src="<?php echo base_url() ?>assets/d-icon.png" title="Delete" alt="Delete" width="25" height="25"></a>
                                                    <?php 
                                                        if ($cv['latter'] == 0) {
                                                    ?>
                                                    <a href="" class="get_id" data-toggle="modal" data-id="<?php echo $cv['id'] ?>" data-target="#myModal" onclick="client_chat( 195)"><img src="<?php echo base_url('admin_assets/img/schedule.png') ?>" width="25" heigth="25" title="Interview Reschedule"></a>
                                                    <a href="<?php echo base_url() ?>/admin/latter_recruitment/<?php echo $cv['id'] ?>" ><img src="<?php echo base_url('admin_assets/img/schedule.png') ?>" width="25" heigth="25" title="Create Latter"></a>
                                                    <?php } ?>

                                                    
                                                </td>
                                                </tr>
                                            <?php  
                                            }  
                                              }
                                            ?>
                                               
                                                
                                           </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <form method="POST" action="<?php echo base_url()?>admin/add_new_interview" enctype="multipart/form-data">
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Interview Scheduled</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >

                                 <div class="form-group col-lg-12">
                                            <label for="">Interview Types</label>
                                            <select class="form-control" name="pay_back" id="sectionChooser">
                                                <option value="">Please Select</option>
                                                <option value="call_now">Call Now</option>
                                                <option value="in_per">IN Per</option>
                                                <option value="call_int">Call Intervew</option>
                                            </select>
                                            <input type="hidden" name="rid" class="rid">
                                        </div>
                                    
                                    <div class="pan" id="call_now">
                                         <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Date</label>
                                            <input name="cn_date" type="date" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Time</label>
                                            <input name="cn_time" type="time" class="form-control">
                                        </div>
                                    </div>

                                    </div>
                                    <div class="pan" id="in_per">
                                         <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Interviewer</label>
                                            <!-- <input name="ip_interviewer" type="text" class="form-control"> -->
                                            <select class="form-control" name="ip_interviewer">
                                                <option value="">Select Interviewer</option>
                                                <?php 
                                                    foreach ($employees as $employee) {
                                                        echo '<option value="'. $employee['id'] .'">'. $employee['employee_name'] .'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Date</label>
                                            <input name="ip_date" type="date" class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                         <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Time</label>
                                            <input name="ip_time" type="time" class="form-control">
                                        
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Venue</label>
                                            <input name="ip_venue" type="text" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="pan" id="call_int">
                                         <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Interviewer</label>
                                            <!-- <input name="ci_interviewer" type="text" class="form-control"> -->
                                            <select class="form-control" name="ci_interviewer">
                                                <option value="">Select Interviewer</option>
                                                <?php 
                                                    foreach ($employees as $employee) {
                                                        echo '<option value="'. $employee['id'] .'">'. $employee['employee_name'] .'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Date</label>
                                            <input name="ci_date" type="date" class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                         <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Time</label>
                                            <input name="ci_time" type="time" class="form-control">
                                        
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
                </div> <!-- /.main content -->
                <div style="height:450px;"></div>
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->

<script type="text/javascript">
    $('#sectionChooser').change(function(){
    var myID = $(this).val();
    $('.pan').each(function(){
        myID === $(this).attr('id') ? $(this).show() : $(this).hide();
    });
});
    $('.get_id').click(function() {
        $('.rid').val($(this).attr('data-id'))
    })
</script>
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
                <h1>View Training Form</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                    <li> Training & Development</li>
                    <li class="active">View Training Form</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/insert_employee" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>View Training Form</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                         <table class="table table-bordered table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>Title of Training :  </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php echo $training['title'] ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Venue : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php echo $training['venue'] ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Start Date </td>
                                                        <td>
                                                            <input type="date" name="" class="form-control" value="<?php echo $training['start_date'] ?>" value="20/12/2014" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>End Date</td>
                                                        <td>
                                                            <input type="date" name="" class="form-control" value="<?php echo $training['end_date'] ?>" value="20/12/2014" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Start Timings : </td>
                                                        <td>
                                                            <input type="time" name="" class="form-control" value="<?php echo $training['timings'] ?>" value="09:45" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>End Timings : </td>
                                                        <td>
                                                            <input type="time" name="" class="form-control" value="<?php echo $training['end_timings'] ?>" value="09:45" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Training Details :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php echo $training['training_details'] ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Training Material :</td>
                                                        <td>
                                                            <a href="<?php echo base_url() ?><?php echo $training['training_material'] ?>">View File</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Graded Training :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php if($training['graded_trainin'] == 1) echo 'Yes'; else echo 'No'; ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Evaluation Test :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php echo $training['evaluation_test'] ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Completion Certificate :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php if($training['completion_certificate'] == 1) echo 'Yes'; else echo 'No'; ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Training Badge Earned :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php if($training['training_badge_earned'] == 1) echo 'Yes'; else echo 'No'; ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Trainer Details :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php echo $training['trainer_details'] ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Self Enrollment Allowed :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php if($training['self_enrollment_allowed'] == 1) echo 'Yes'; else echo 'No'; ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mandatory :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php if($training['mandatory'] == 1) echo 'Yes'; else echo 'No'; ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apply to group/department :</td>
                                                        <?php
                                                            $content = ''; 
                                                            foreach ($departments as $department) {
                                                              $key = array_search($department['id'], array_column($training_departments, 'deparment_id'));
                                                              if (array_key_exists($key, $training_departments)) {
                                                                $content .= $department['name'].',';
                                                              }
                                                            } 
                                                        ?>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php echo $content ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Publish on the T & D board :</td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" value="<?php if($training['publish'] == 1) echo 'Yes'; else echo 'No'; ?>" readonly="">
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
<?php if(!$_SESSION['login_id']){ 
if($training['mandatory'] != 1){
    if(empty($id)){
    ?>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <a href="<?php echo base_url('admin/add_training_emp/'.$training['id'].'/2') ?>"><button type="button" class="btn btn-danger pull-right">Reject</button></a>
                                     <a href="<?php echo base_url('admin/add_training_emp/'.$training['id'].'/1') ?>"><button  style="margin-right: 8px;" type="button" class="btn btn-success pull-right">Approve</button></a>

                                </div>
                            </div>
<?php } } }?>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>

</div>
<!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->


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
                            <h1>View Training</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                   <li> Training & Development</li>
                                <li class="active">View Training</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Trainings</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <!-- <th><input type="checkbox"/ class="check_all"> </th> -->
                                                    <th>Title</th>
                                                    <th>Training Detail</th>
                                                    <th>Trainer Detail</th>
                                                    <th>Training Material</th>
                                                    <?php if($_SESSION['role'] == 'Hr'){ ?>
                                                    <th>Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($trainings as $training) {
                                            ?>
                                              <tr>
                                                 
                                                 <!-- <td><input type="checkbox" class="add_check" name="id[]" value="<?php echo $cv['id'] ?>"> </td> -->
                                                 <td><?php echo $training['title'] ?></td>
                                                 <td><?php echo $training['training_details'] ?></td>
                                                 <td><?php echo $training['trainer_details'] ?></td>
                                                 <td><a target="_blank" href="<?php echo base_url(); ?><?php echo $training['training_material'] ?>">View File</a></td>
                                                 <?php if($_SESSION['role'] == 'Hr'){ ?>
                                                 <td>
                                                  
                                                  <a href="<?php echo base_url() ?>admin/edit_training_hr/<?php echo $training['id'] ?>"><button type="" class="btn btn-primary pull-right">Edit</button></a>
                                                  
                                                </td>
                                                <?php } ?>
                                             </tr>
                                            <?php    
                                              }
                                            ?>
                                             
                                           
                                           </tbody>
                                        </table>
                                        <!-- <button type="submit" class="btn btn-primary pull-right">Submit</button> -->
                                        <!-- <a href="<?php echo base_url() ?>admin/view_emp"><button type="" class="btn btn-primary pull-right">Submit</button></a> -->
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div style="height:350px;"></div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
<script type="text/javascript">
  $('.check_all').change(function() {
    if($(this).is(':checked')){
      $('.add_check').removeAttr('checked');
      $('.add_check').click();
      //$('.add_check').attr('checked', true);
    }
    else{
      $('.add_check').removeAttr('checked');
    }
    //$('.add_check').click();
  })
</script>

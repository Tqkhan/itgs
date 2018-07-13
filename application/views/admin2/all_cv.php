
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
                            <h1>Resume Bank</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Resume Bank</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body panel-bd panel">
                                <form action="<?php echo base_url()?>admin/all_cv" method="post">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                        <label for="">Start Date</label>
                                        <input type="date" name="start_date" class="form-control"  >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">End Date</label>
                                            <input type="date" class="form-control" id="" name="end_date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-12">
                                         <button type="submit" class="btn btn-primary pull-right">Search</button>
                                        </div>
                                    </div>
                                    </form>
                                    </div>
                                    </div>
                                    </div>
                                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Resume Bank</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <!-- <form method="post" action="<?php echo base_url() ?>admin/recruitment_parser"> -->
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <!-- <th><input type="checkbox"/ class="check_all"> </th> -->
                                                    <th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>CNIC</th>
                                                    <th>Phone</th>
                                                    <th>Postion</th>
                                                    <th>View Detail</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($cvs as $cv) {
                                            ?>
                                              <tr>
                                                 
                                                 <!-- <td><input type="checkbox" class="add_check" name="id[]" value="<?php echo $cv['id'] ?>"> </td> -->
                                                 <td><?php echo $cv['first_name'] ?></td>
                                                 <td><?php echo $cv['father_name'] ?></td>
                                                 <td><?php echo $cv['cnic'] ?></td>
                                                 <td><?php echo $cv['phone'] ?></td>
                                                 <td><?php echo $cv['position_name'] ?></td>
                                                 <td><a style="margin-right: 5px;" href="<?php echo base_url().''.$cv['file'] ?>"><img src="<?php echo base_url('admin_assets/img/view_cv.png') ?>" width="25" heigth="25" title="View CV"></a><a style="margin-right: 5px;" href="<?php echo base_url() ?>/admin/recruitment_detail/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_details.png') ?>" width="25" heigth="25" title="View Detail"></a><a style="margin-right: 5px;" href="<?php echo base_url() ?>/admin/recruitment_score/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" width="25" heigth="25" title="View Score Card"></a></td>
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

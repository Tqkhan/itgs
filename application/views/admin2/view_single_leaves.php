
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
                            <h1>View Single Leaves</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><i class="pe-7s-home"></i> Home</li>

                                <li class="active">View Single Leaves</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body panel-bd panel">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="" readonly="" value="<?php echo $employees[0]['employee_name'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Employee ID</label>
                                        <input type="text" class="form-control" name="" readonly="" value="<?php echo $employees[0]['employee_id'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label>Total Leaves</label>
                                        <input type="text" class="form-control" name="" readonly="" value="30">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Balance Leaves</label>
                                        <input type="text" class="form-control" name="" readonly="" value="<?php echo 30 - $old_leaves ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>               
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Single Leaves</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nature of Leave</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Total Days</th>
                                                    <th>Status</th>
                                                    <th>Type</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($employees as $list) {
                                            ?>
                                              <tr>
                                               <td><?php echo $list['nature_of_leave'] ?></td>
                                               <td><?php echo $list['start_date'] ?></td>
                                               <td><?php echo $list['end_date'] ?></td>
                                               <td><?php echo $list['total_days'] ?></td>
                                               <?php
                                                    if ($list['is_approve'] == 4 || $list['is_approve'] == 7) {
                                                        $status= 'Approve';
                                                    } 
                                                    else{
                                                        $status= 'Reject';
                                                    }

                                                    if ($list['is_approve'] != 7) {
                                                        $type = 'Paid Leave';
                                                    }
                                                    else{
                                                        $type = 'Unpaid Leave';
                                                    }
                                                ?>
                                               <td><?php echo $status ?></td>
                                               <td><?php echo $type ?></td>
                                             </tr>
                                            <?php    
                                              }
                                            ?>
                                             
                                           
                                           </tbody>
                                        </table>
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
    $('.late').keyup(function() {
        var val = $(this).val()
        val = val / 3;
        $(this).parent().parent().find('.total-late').text(parseInt(val))
        var absent = $(this).parent().parent().find('.absent').val()
        if(absent != ''){
            $(this).parent().parent().find('.total-absent').text(parseInt(val) + parseInt(absent))
            $(this).parent().parent().find('[name="total_absent[]"]').val(parseInt(val) + parseInt(absent))
        }
        else{
            $(this).parent().parent().find('.total-absent').text(parseInt(val))
            $(this).parent().parent().find('[name="total_absent[]"]').val(parseInt(val))
        }
    })
    $('.absent').keyup(function() {
        var val = $(this).val()
        var absent = $(this).parent().parent().find('.total-late').text()
        if(absent != ''){
            $(this).parent().parent().find('.total-absent').text(parseInt(val) + parseInt(absent))
            $(this).parent().parent().find('[name="total_absent[]"]').val(parseInt(val) + parseInt(absent))
        }
        else{
            $(this).parent().parent().find('.total-absent').text(parseInt(val))
            $(this).parent().parent().find('[name="total_absent[]"]').val(parseInt(val))
        }
    })
</script>
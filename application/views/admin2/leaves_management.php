
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
                            <h1>Leaves Management</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Leaves Management</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body panel-bd panel">
                                <form method="post" action="<?php echo base_url('admin/leaves_management') ?>">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Current Month</label>
                                            <input type="text" class="form-control" name="" readonly="" value="<?php echo date('F Y', strtotime($first)) ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Month</label>
                                            <select class="form-control" name="month">
                                                <option>Select Month</option>
                                                <?php
                                                    for($i = 1 ; $i <= 12; $i++)
                                                    {
                                                        echo '<option value="'.$i.'">'.date("F",mktime(0,0,0,$i,1,date("Y"))).'</option>';
                                                    }
                                                ?>
                                            </select>
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
                                        <h4>Leaves Management</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <form method="post" action="<?php echo base_url() ?>admin/insert_absent_leave">
                                            <input type="hidden" name="first" value="<?php echo $first ?>">
                                            <input type="hidden" name="last" value="<?php echo $last ?>">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <!-- <th><input type="checkbox"/ class="check_all"> </th> -->
                                                    <th>Employee Name</th>
                                                    <th>Employee ID</th>
                                                    <th>Balance</th>
                                                    <!-- <th>Late</th>
                                                    <th>Absent Count Late</th>
                                                    <th>Absent</th> -->
                                                    <th>Total Days Detection</th>
                                                    <th>Type</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($employees as $list) {
                                                $detect = 0;
                                                if($list['leaves'] > 0){
                                                    $leave = $list['leaves'];
                                                }
                                                else{
                                                    $leave = 0;
                                                }
                                                if($list['late'] > 0){
                                                    $late = $list['late'];
                                                }
                                                else{
                                                    $late = 0;
                                                }
                                                if($list['hafe']){
                                                    $hafe = explode(',', $list['hafe']); 
                                                    $hafe = sizeof($hafe);
                                                }
                                                else{
                                                    $hafe = 0;
                                                }
                                                if($list['short']){
                                                    $short = explode(',', $list['short']); 
                                                    $short = sizeof($hafe);
                                                }
                                                else{
                                                    $short = 0;
                                                }
                                                if($list['approved'] > 0){
                                                    $approved = $list['approved'];
                                                }
                                                else{
                                                    $approved = 0;
                                                }
                                                if($list['short_approved'] > 0){
                                                    $short_approved = $list['short_approved'];
                                                }
                                                else{
                                                    $short_approved = 0;
                                                }
                                                $detect = $leave - $approved;
                                                $l_hafe = $hafe + $short;
                                                $l_hafe = $l_hafe - $short_approved;
                                                $l_hafe = $l_hafe / 3;
                                                $detect = $detect + $l_hafe;
                                                $h_late = $late / 3;
                                                $detect = $detect + $h_late;
                                                $detect = (int) $detect;
                                            ?>
                                              <tr>
                                               <td><?php echo $list['employee_name'] ?></td>
                                               <td><input type="hidden" name="employee_id[]" value="<?php echo $list['employee_id'] ?>"><?php echo $list['employee_id'] ?></td>
                                               <td><?php echo $list['total_leaves'] - round($list['old_leaves']) ?></td>
                                               <!-- <td><input type="number" name="late[]" class="late"></td>
                                               <td><span class="total-late">0</span></td>
                                               <td><input type="number" name="absent[]" class="absent"></td> -->
                                               <td><span class="total-absent"><?php echo $detect ?></span><input type="hidden" name="total_absent[]" value="<?php echo $detect ?>"></td>
                                               <td>
                                                    <select name="type[]">
                                                        <option value="">Select Type</option>
                                                        <option value="4">Paid Leave</option>
                                                        <option value="7">Unpaid Leave</option>
                                                    </select>
                                                </td>
                                             </tr>
                                            <?php    
                                              }
                                            ?>
                                             
                                           
                                           </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        <!-- <a href="<?php echo base_url() ?>admin/view_emp"><button type="" class="btn btn-primary pull-right">Submit</button></a> -->
                                        </form>
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
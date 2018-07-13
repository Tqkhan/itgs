
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
                            <h1>View Leaves</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">View Leaves</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body panel-bd panel">
                                <form method="post" action="<?php echo base_url('admin/view_leaves') ?>">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Current Month</label>
                                            <input type="text" class="form-control" name="" readonly="" value="<?php echo date('F Y', strtotime($current)) ?>">
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
                                        <h4>View Leaves</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Employee Name</th>
                                                    <th>Employee ID</th>
                                                    <th>Total</th>
                                                    <th>Month Leaves</th>
                                                    <th>Balance</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($employees as $list) {
                                                $leaves = 0;
                                                if ($list['leaves']) {
                                                    $leaves = $list['leaves'];
                                                }
                                            ?>
                                              <tr>
                                               <td><?php echo $list['employee_name'] ?></td>
                                               <td><?php echo $list['employee_id'] ?></td>
                                               <td><?php echo $leaves ?></td>
                                               <td><?php echo $list['month_leaves'] ?></td>
                                               <td><?php echo $leaves - $list['old_leaves'] ?></td>
                                               <td><a href="<?php echo base_url('admin/view_single_leaves/'.$list['id']) ?>"><img src="<?php echo base_url('admin_assets/img/view_details.png') ?>" title="View Leave" width="25" height="25"></a></td>
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
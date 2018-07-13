<style type="text/css">
    .pan {
        display: none;
    }
</style>
<style type="text/css">
    table.minimalistBlack {
  
  width: 100%;
  height: 200px;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
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
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel-body panel-bd panel">
                    <form method="post" action="<?php echo base_url('admin/attendance') ?>">
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
                            <h4>View Sheet</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive print-div">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="8">
                                            <center>Attendance <?php echo date('F', strtotime($current)) ?></center>
                                        </th>
                                        <th colspan=""></th>
                                    </tr>
                                </thead>
                            </table>
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Names</th>
                                        <th>Leaves</th>
                                        <th>Lates</th>
                                        <th>Half day</th>
                                        <th>Short Leave</th>
                                        <th>No. of days Deduction</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $con = 1; foreach ($employees as $e) {?>
                                    <?php 
                                        $detect = 0;
                                        if($e['leaves'] > 0){
                                            $leave = $e['leaves'];
                                        }
                                        else{
                                            $leave = 0;
                                        }
                                        if($e['late'] > 0){
                                            $late = $e['late'];
                                        }
                                        else{
                                            $late = 0;
                                        }
                                        if($e['hafe']){
                                            $hafe = explode(',', $e['hafe']); 
                                            $hafe = sizeof($hafe);
                                        }
                                        else{
                                            $hafe = 0;
                                        }
                                        if($e['short']){
                                            $short = explode(',', $e['short']); 
                                            $short = sizeof($hafe);
                                        }
                                        else{
                                            $short = 0;
                                        }
                                        if($e['approved'] > 0){
                                            $approved = $e['approved'];
                                        }
                                        else{
                                            $approved = 0;
                                        }
                                        if($e['short_approved'] > 0){
                                            $short_approved = $e['short_approved'];
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
                                        <td>
                                            <center>
                                                <?php echo $con ?>
                                            </center>
                                        </td>
                                        <td>
                                            <?php echo $e['employee_name'] ?>
                                        </td>
                                        </td>
                                        <td>
                                            <center>
                                                <?php echo $leave ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php echo $late ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php echo $hafe ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php echo $short ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <?php echo $detect.' days deduction' ?>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                As per policy
                                            </center>
                                        </td>
                                    </tr>
                                    <?php $con++; } ?>
                                </tbody>
                            </table>
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
                            <h4>Attendance</h4>
                            <button type="button" class="btn btn-success pull-right" style="margin-right: 10px;color: white !important;" data-toggle="modal" data-target="#myModal">Import Sheet</button>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Employee id</th>
                                        <!-- <th>Designation</th> -->
                                        <th>Department</th>
                                        <th>Date</th>
                                        <th>Clock In</th>
                                        <th>Clock Out</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      foreach ($attendance as $a) {
                                    ?>
                                        <tr>
                                            <td><?php echo $a['employee_name'] ?></td>
                                            <td><?php echo $a['employee_id'] ?></td>
                                            <!-- <td><?php echo $a['designation'] ?></td> -->
                                            <td><?php echo $a['department'] ?></td>
                                            <td><?php echo $a['date'] ?></td>
                                            <td><?php echo $a['clock_in'] ?></td>
                                            <td><?php echo $a['clock_out'] ?></td>
                                            <td>
                                                <?php 
                                                    if (strtotime($a['clock_in']) > strtotime('09:15:59')) {
                                                        echo 'Late';
                                                    }
                                                    else{
                                                        echo 'Ontime';
                                                    }
                                                ?>
                                            </td>
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
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<div style="height:237px;"></div>
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">Attendance Sheet</h1>
            </div>
            <div class="modal-body">

                <form method="post" id="restrict_file" action="<?php echo base_url() ?>admin/attendance_upload" enctype="multipart/form-data">
                    <input type="file" name="csv_name" id="csv_check" accept=".csv,.xlsx,.xls">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger csvbtn">Submit</button>

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
    if (!$('#csv_check').val()) {
        $('.csvbtn').attr('disabled', true);
    }
    $('#csv_check').change(function() {
        if ($(this).val()) {
            $('.csvbtn').attr('disabled', false);
        }
    });
</script>
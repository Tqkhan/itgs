
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
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body panel-bd panel">
                                <form method="post" action="<?php echo base_url('admin/payrole') ?>">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>Current Month</label>
                                            <input type="text" class="form-control" name="" readonly="" value="<?php echo date('F Y', strtotime($one)) ?>">
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
                                        <h4>Resume Bank</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <form method="post" action="<?php echo base_url('admin/insert_salary') ?>">
                                            <input type="hidden" name="month" value="<?php echo $one ?>">
                                        <table id="dataTableExamplepayrole" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Employee Name</th>
                                                    <th>Employee ID</th>
                                                    <th>D.O.J</th>
                                                    <th>Gross Salary</th>
                                                    <th>House Rent</th>
                                                    <th>Medical</th>
                                                    <th>Conveyance</th>
                                                    <th>Utility</th>
                                                    <th>Total</th>
                                                    <th>Days Deduction</th>
                                                    <th>Advance/Loan/Other</th>
                                                    <th>Income Tax</th>
                                                    <th>Net Payble</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($employees as $list) {
                                            ?>
                                              <tr>
                                               <td><input type="hidden" name="id[]" value="<?php echo $list['id'] ?>"><?php echo $list['employee_name'] ?></td>
                                               <td><?php echo $list['employee_id'] ?></td>
                                               <td><?php echo date('d-F-y', strtotime($list['join_date'])) ?></td>
                                               <?php 
                                                    $increment = $list['increment'];
                                                    $increment = explode(',', $increment);
                                                    $increment = array_sum($increment);
                                               ?>
                                               <td><?php echo $list['salary'] + $increment ?></td>
                                               <td><?php echo $list['house_rent'] ?></td>
                                               <td><?php echo $list['medical'] ?></td>
                                               <td><?php echo $list['conveyance'] ?></td>
                                               <td><?php echo $list['utility'] ?></td>
                                               <?php $total =  $list['salary'] + $list['house_rent'] + $list['medical'] + $list['conveyance'] + $list['utility'] ?>
                                               <td><?php echo $total ?></td>
                                               <td><?php echo $list['days'] ?></td>
                                               <td><?php echo $list['loan'] ?></td>
                                               <?php 
                                                $days = date('t', strtotime($one)); 
                                                $amount = $total / $days;
                                                $amount = $amount * $list['days'];
                                                $amount = $total - $amount;
                                                $amount = $amount - $list['loan'];
                                                ?>
                                               <td><input type="number" name="" class="income-text"></td>
                                               <td>
                                                    <input type="hidden" name="main_gross[]" value="<?php echo round($amount) ?>">
                                                    <input type="hidden" name="gross[]" value="<?php echo round($amount) ?>">
                                                    <span class="total"><?php echo round($amount) ?></span>
                                                </td>
                                             </tr>
                                            <?php    
                                              }
                                            ?>
                                             
                                           
                                           </tbody>
                                        </table>
                                         <button type="submit" class="btn btn-primary pull-right">Submit</button>
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
    $('.income-text').keyup(function() {
        if($(this).val() != null && $(this).val() != ''){
            var val = parseInt($(this).val())
        }
        else{
            var val = parseInt(0)
        }
        var gross = parseInt($(this).parent().parent().find('[name="main_gross[]"]').val())
        $(this).parent().parent().find('.total').text(gross - val)
        $(this).parent().parent().find('[name="gross[]"]').val(gross - val)
    })
</script>
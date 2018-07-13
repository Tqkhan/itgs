
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
                            <h1>Pay Slip</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><i class="pe-7s-home"></i> Home</li>

                                <li class="active">Pay Slip</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">                   
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Pay Slips</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
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
                                               <td><?php echo $list['employee_name'] ?></td>
                                               <td><?php echo $list['employee_id'] ?></td>
                                               <td><?php echo date('d-F-y', strtotime($list['join_date'])) ?></td>
                                               <td><?php echo $list['salary'] ?></td>
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
                                                $tax = $amount - $list['paid_salary'];
                                                ?>
                                               <td><?php echo round($tax) ?></td>
                                               <td><span class="total"><?php echo $list['paid_salary'] ?></span></td>
                                             </tr>
                                            <?php    
                                              }
                                            ?>
                                             
                                           
                                           </tbody>
                                        </table>
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
        $(this).parent().parent().find('.total').text(gross + val)
        $(this).parent().parent().find('[name="gross[]"]').val(gross + val)
    })
</script>
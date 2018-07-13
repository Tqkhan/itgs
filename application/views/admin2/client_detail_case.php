<div class="control-sidebar-bg"></div>
<div id="page-wrapper">
    <div class="content">
        <div class="content-header">
            <div class="header-icon" style="margin-top: -9px;">
                <i class="pe-7s-display2"></i>
            </div>
            <div class="header-title">
                <h1>Profit & Loss Report</h1>

                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Profit & Loss Report</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Profit & Loss Report</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        
                        <div class="table-responsive">
                            <?php if($_SESSION['role']=="Manager Finance"){?>
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ITGS Ref</th>
                                        <th>Subject Name</th>
                                        <th>Type of Services</th>
                                        <th>Date</th>
                                        <th>Due Date</th>
                                        <th>Date of Insuffciency Raised</th>
                                        <th>Date of Insuffciency Closed</th>
                                        <th>Complete Date</th>
                                        <th>TAT in Net Working Days</th>
                                        <th>Total</th>
                                        <th>Assigned Price</th>
                                        <th>Profit / Loss</th>
                                        <th>Profit Loss in %</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $scopecount=1;
                                        foreach ($cases as $case): 
                                            if ($case['case_date'] != null && $case['case_date'] != '') {
                                                $old_date = $case['case_date']; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date = '';
                                            }
                                            if ($case['hold_date'] != null && $case['hold_date'] != '') {
                                                $old_date = $case['hold_date']; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date1 = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date1 = '';
                                            }
                                            if ($case['unhold_date'] != null && $case['unhold_date'] != '') {
                                                $old_date = $case['unhold_date']; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date2 = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date2 = '';
                                            }
                                            $date;
                                            if ($case['u_id'] > 0) {
                                                $date = date('Y-m-d', strtotime($case['user_date']));
                                            }
                                            elseif ($case['v_id'] > 0) {
                                                $date = date('Y-m-d', strtotime($case['vendor_date']));
                                            }
                                            if ($date != null && $date != '') {
                                                $old_date = $date; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date3 = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date3 = '';
                                            }
                                            $date1=date_create($new_date1);
                                            $date2=date_create($new_date2);
                                            $diff=date_diff($date1,$date2);
                                            $dated1 = $diff->format("%a");
                                            $date1=date_create($new_date);
                                            $date2=date_create($new_date3);
                                            $diff=date_diff($date1,$date2);
                                            $dated2 = $diff->format("%a");
                                            $dated = $dated2 - $dated1;
                                     ?>                                    
                                    <tr>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['reference_code'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['subject_name'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['scope_name'] ?>
                                        </td>


                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['case_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['due_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['hold_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['unhold_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php 
                                                if ($case['u_id'] > 0) {
                                                    echo $case['user_date'];
                                                }
                                                elseif ($case['v_id'] > 0) {
                                                    echo $case['vendor_date'];
                                                }
                                            ?>
                                        </td>
                                        <td><span class="footable-toggle"></span><?php echo $dated ?></td>

                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['total'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['amount'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php $net = $case['amount'] - $case['total']; echo $net; ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo round($net / $case['amount'] * 100).'%';  ?>
                                        </td>
                                    </tr>

                                    <?php 
                                        $scopecount++;
                                        endforeach 
                                    ?>
                                </tbody>
                            </table>
                            <?php } elseif ($_SESSION['client_id']) {?>
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ITGS Ref</th>
                                        <th>Subject Name</th>
                                        <th>Type of Services</th>
                                        <!-- <th>Date</th>
                                        <th>Due Date</th>
                                        <th>Date of Insuffciency Raised</th>
                                        <th>Date of Insuffciency Closed</th>
                                        <th>Complete Date</th>
                                        <th>TAT in Net Working Days</th>
                                        <th>Total</th> -->
                                        <th>Price</th>
                                        <!-- <th>Profit / Loss</th>
                                        <th>Profit Loss in %</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $scopecount=1;
                                        foreach ($cases as $case): 
                                            if ($case['case_date'] != null && $case['case_date'] != '') {
                                                $old_date = $case['case_date']; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date = '';
                                            }
                                            if ($case['hold_date'] != null && $case['hold_date'] != '') {
                                                $old_date = $case['hold_date']; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date1 = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date1 = '';
                                            }
                                            if ($case['unhold_date'] != null && $case['unhold_date'] != '') {
                                                $old_date = $case['unhold_date']; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date2 = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date2 = '';
                                            }
                                            $date;
                                            if ($case['u_id'] > 0) {
                                                $date = date('Y-m-d', strtotime($case['user_date']));
                                            }
                                            elseif ($case['v_id'] > 0) {
                                                $date = date('Y-m-d', strtotime($case['vendor_date']));
                                            }
                                            if ($date != null && $date != '') {
                                                $old_date = $date; 
                                                $old_date_timestamp = strtotime($old_date);
                                                $new_date3 = date('d-M-y', $old_date_timestamp);
                                            }
                                            else{
                                                $new_date3 = '';
                                            }
                                            $date1=date_create($new_date1);
                                            $date2=date_create($new_date2);
                                            $diff=date_diff($date1,$date2);
                                            $dated1 = $diff->format("%a");
                                            $date1=date_create($new_date);
                                            $date2=date_create($new_date3);
                                            $diff=date_diff($date1,$date2);
                                            $dated2 = $diff->format("%a");
                                            $dated = $dated2 - $dated1;
                                     ?>                                    
                                    <tr>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['reference_code'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['subject_name'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['scope_name'] ?>
                                        </td>


                                        <!-- <td><span class="footable-toggle"></span>
                                            <?php echo $case['case_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['due_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['hold_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['unhold_date'] ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php 
                                                if ($case['u_id'] > 0) {
                                                    echo $case['user_date'];
                                                }
                                                elseif ($case['v_id'] > 0) {
                                                    echo $case['vendor_date'];
                                                }
                                            ?>
                                        </td>
                                        <td><span class="footable-toggle"></span><?php echo $dated ?></td>

                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['total'] ?>
                                        </td> -->
                                        <td><span class="footable-toggle"></span>
                                            <?php echo $case['amount'] ?>
                                        </td>
                                        <!-- <td><span class="footable-toggle"></span>
                                            <?php $net = $case['amount'] - $case['total']; echo $net; ?>
                                        </td>
                                        <td><span class="footable-toggle"></span>
                                            <?php echo round($net / $case['amount'] * 100).'%';  ?>
                                        </td> -->
                                    </tr>

                                    <?php 
                                        $scopecount++;
                                        endforeach 
                                    ?>
                                </tbody>
                            </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<div style="height: 440px;"></div>
</div>
</div>
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->

<script type="text/javascript">
    $('.sum').keyup(function() {
        var con = 0
        var length = $('.sum').length - 1
        $('.sum').each(function(e) {
            if ($(this).val() != null && $(this).val() != '') {
                con = con + parseInt($(this).val());
            }
            if (e == length) {
                $('#result').val(con)
            }
        })

    });
    $(function() {
        $("#checkbox4").click(function() {
            var passedID = $(this).data('cas_id');
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
                // $('model_id').pass.value(<?php echo $_SESSION['client_id']?>);
            } else {
                $("#dvPassport").hide();
            }
        });
    });

    $('.chat_btn').click(function() {

        var formData = new FormData($("#chat_form")[0]);
        $.ajax({
            url: '<?php echo base_url(); ?>admin/add_client_chat',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                load_client_chat($('#case_id').val());
            }
        });
    });


    function load_client_chat(case_id) {
        $.ajax({
            url: "<?php echo base_url() ?>admin/load_client_chat",
            data: {
                case_id: case_id
            },
            type: "post",
            success: function(resp) {
                $('#load_chat').html(resp);
            }
        });
    }


    function client_chat(case_id) {

        $('[name=case_id]').val(case_id);
        load_client_chat(case_id);

    }


    function cancel_id_assign(case_id) {

        $('[name=case_id_cancel]').val(case_id);

    }

    function fund_request_assign_id(case_id, subject_id, activity_id, client_reference, subject_name = 'abc', scope_name) {
        $('[name=fund_case_id]').val(case_id);
        $('[name=client_reference]').val(client_reference).text();
        $('[name=fund_subject_id]').val(subject_id);
        $('[name=fund_activity_id]').val(activity_id);
        $('[name=name_of_subject]').val(subject_name);
        $('[name=type_of_service]').val(scope_name);
        Date.prototype.yyyymmdd = function() {
            var yyyy = this.getFullYear().toString();
            var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
            var dd = this.getDate().toString();
            return yyyy + "-" + (mm[1] ? mm : "0" + mm[0]) + "-" + (dd[1] ? dd : "0" + dd[0]); // padding
        };
        var d = new Date();
        $('[name="date_time"]').val(d.yyyymmdd())
    }

    function create_report_assign_id(case_id, subject_id, activity_id) {

        $('[name=report_case_id]').val(case_id);
        $('[name=report_subject_id]').val(subject_id);
        $('[name=report_activity_id]').val(activity_id);

    }

    function vendor_assign_id(case_id, subject_id, activity_id) {

        $('[name=vendor_case_id]').val(case_id);
        $('[name=vendor_subject_id]').val(subject_id);
        $('[name=vendor_activity_id]').val(activity_id);

    }
    $('.cases').change(function() {
        window.location.href = '<?php echo base_url('
        admin / profit_loss_report / ') ?>' + $(this).val()
    })
</script>
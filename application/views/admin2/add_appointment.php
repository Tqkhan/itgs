<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Appointment Letter</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Appointment Letter</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Create Appointment Letter</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-body">
                                    <form method="post" action="<?php echo base_url() ?>admin/insert_appointment">
                                        <input type="hidden" name="recruitment_id" value="<?php echo $id ?>">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Full Name</label>
                                                <input type="text" name="full_name" class="form-control" id="" placeholder="" value="<?php echo $list['full_name'] ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Appointment Date</label>
                                                <input type="date" name="appointment_date" class="form-control" id="" value="<?php echo date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Department</label>
                                                <input type="text" name="department" class="form-control" value="<?php echo $list['name'] ?>">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="">Designation</label>
                                                <input type="text" name="designation" class="form-control" value="<?php echo $list['designation'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Basic Salary</label>
                                                <input type="text" name="basic_salary" class="form-control sum" value="<?php echo $list['salary'] ?>">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="">House Rent Allowance</label>
                                                <input type="text" name="house_rent_allowance" class="form-control sum" value="<?php echo $list['house_rent'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Medical Allowance</label>
                                                <input type="text" name="medical_allowance" class="form-control sum" value="<?php echo $list['medical'] ?>">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="">Conveyance Allowance</label>
                                                <input type="text" name="conveyance_allowance" class="form-control sum" value="<?php echo $list['conveyance'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Utility Allowance</label>
                                                <input type="text" name="utility_allowance" class="form-control sum" value="<?php echo $list['utility'] ?>">
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="">Total</label>
                                                <input type="text" id="result" name="total" readonly="" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Create</button>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 80px;"></div>
    </div>
</div>
<!-- /.main content -->

</div>
<script type="text/javascript">
    var con = 0
    var length = $('.sum').length - 1
    $('.sum').each(function(e) {
        if($(this).val() != '' && $(this).val() != null){
            con = con + parseInt($(this).val());
        }
        if (e == length) {
            $('#result').val(con)
        }
    })
    $('.sum').keyup(function() {
        var con = 0
        var length = $('.sum').length - 1
        $('.sum').each(function(e) {
            if($(this).val() != '' && $(this).val() != null){
                con = con + parseInt($(this).val());
            }
            if (e == length) {
                $('#result').val(con)
            }
        })

    });
</script>
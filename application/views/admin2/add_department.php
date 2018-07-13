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
                    <li class="active">Department</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Create Department</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-body">
                                    <form method="post" action="<?php echo base_url() ?>admin/create_department">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-3">
                                                <label for="">Name</label>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="text" name="name" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-3">
                                                <label for="">Full Name</label>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <select class="form-control" name="parent_id">
                                                    <option value="">Select Department</option>
                                                    <?php
                                                        foreach ($departments as $department) {
                                                            echo '<option value="'.$department['id'].'">'.$department['name'].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <center><button type="submit" class="btn btn-primary">Create</button></center>
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
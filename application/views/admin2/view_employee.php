
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
                  <div class=row>
            <?php foreach ($record as $r) {?>
            <a href="<?php echo base_url() ?>admin/view_ceo_emp/<?php echo $r['job_type'] ?>">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="statistic-box statistic-filled-3 border set-bg-color" >
                        <div class="small" style="color: black"><?php echo $r['job_type'] ?> </div>
                        <h4 style="color: black"><span class="count-number"><strong><?php echo $r['total'] ?></strong></span></h4>
                         <i class="material-icons statistic_icon set-icon" >account_box</i>

                    </div>
                </div>
            </a>
            <?php } ?>
        </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>View Employees</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="table-responsive">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Father Name</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Date of Birth</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <tbody>
                                                <?php
                                                    foreach ($employees as $employee) {
                                                ?>
                                               <tr>
                                                    <td><?php echo $employee['full_name'] ?></td>
                                                    <td><?php echo $employee['father_name'] ?></td>
                                                    <td><?php echo $employee['mobile'] ?></td>
                                                    <td><?php echo $employee['gender'] ?></td>
                                                    <td><?php echo $employee['dob'] ?></td>
                                                    <td><a href="<?php echo base_url() ?>admin/employee_detail/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Detail" alt="View Detail" width="25" height="25"></a>
                                                    <a href="<?php echo base_url() ?>admin/employee_edit/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/edit.png" title="Edit Detail" alt="View Detail" width="25" height="25"></a>
                                                    <a href="<?php echo base_url() ?>admin/employee_disable/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/cancel.png" title="Delete Employee" alt="View Detail" width="25" height="25"></a>
                                                    <?php
                                                        if ($employee['aid'] == 0) {
                                                    ?>
                                                    <a href="<?php echo base_url() ?>admin/add_appointment/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/edit.png" title="Create Appointment Latter" alt="Create Appointment Latter" width="25" height="25"></a>
                                                    <?php } else{ ?>
                                                    <a href="<?php echo base_url() ?>admin/appointment_latter/<?php echo $employee['appoint_id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Appointment Latter" alt="View Appointment Latter" width="25" height="25"></a>
                                                    <?php } if ($employee['job_kpi'] == 0) {?>
                                                    <a href="#" data-toggle="modal" data-target="#myModal3" onclick="job_kpi('<?php echo $employee['employee_code'] ?>')"><img src="<?php echo base_url(); ?>/admin_assets/img/article-icon.png" title="Create Jon Kpi" alt="Create Job Kpi" width="25" height="25"></a>
                                                    <?php } ?>
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
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
      
                        <form method="POST" action="<?php echo base_url()?>admin/insert_job_kpi" enctype="multipart/form-data">
                     <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
                         
                         <input type="hidden" name="employee_id" >
                         
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="width: 857px; margin-left: -122px">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="modal-title">Create Job Kpi</h1>
                                        </div>

                                        <div class="modal-body">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <div class="panel panel-bd" >

                                <div class="panel-body" >
                                    <div class="form-group row after-add-sub">

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                            <label for="">Job Kpi</label>
                                                <input name="kpi[]" type="text" class="form-control kpi" required="This Field is Required...">
                                                <input type="hidden" name="kpi_id[]">
                                                <ul class="modal_auto"></ul>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Assign Weightage</label>
                                                <input name="weightage[]" type="text" class="form-control" required="This Field is Required...">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 delet pull-right">
                                            <button type="button" class="add-sub btn btn-success ">Add More</button>
                                        </div>

                                    </div>
                                     
                                </div>
                                <div class=panel-footer>
                                    <div class="form-group row">
                                                <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                                </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
<script type="text/javascript">
$(document).ready(function() {
    $("body").on("click",".add-sub",function(){
        var html = $(".after-add-sub").first().clone();
          $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".after-add-sub").last().after(html);
        $(".after-add-sub").last().find('input').not('input[type="radio"]').val('')
        $(".after-add-sub").last().find('ul').empty()
        $(".after-add-sub").last().find('ul').hide()
        autocomplete()
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-sub").remove();
    });
});
function job_kpi(id) {
    $('[name="employee_id"]').val(id)
    $('.after-add-sub').not('.after-add-sub:first-child').remove()
}
function autocomplete() {
    $('.kpi').keyup(function() {
        $('.modal_auto').hide()
        var th = $(this) 
        var value = $(this).val()
        var formData = new FormData(); //Array  
        formData.append('name', value);
        jQuery.ajax({
            url: '<?php echo base_url() ?>/admin/get_job_kpi',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(response){
                if(response.length >= 1){
                    var ul = th.parent().find('ul')
                    ul.empty()
                    for (var i = 0; i < response.length; i++) {
                        ul.append('<li data-id="'+response[i]['id']+'">'+response[i]['name']+'</li>')
                    }
                    ul.show()
                    click_auto()
                }
            }
        })
    })
}
autocomplete()
function click_auto() {
    $('ul.modal_auto li').click(function() {
        var th = $(this)
        var value = th.text()
        var id = th.attr('data-id')
        th.parent().hide()
        th.parent().parent().find('.kpi').val(value)
        th.parent().parent().find('[name="kpi_id"]').val(id)
    })
}
</script>
<style type="text/css">
    ul.modal_auto {
        position: absolute;
        border: 1px solid #ccc;
        width: 100%;
        padding: 0;
        list-style: none;
        display: none;
        z-index: 9999;
    }

    .form-group.col-lg-6 {
        position: relative;
    }

    ul.modal_auto li {
        padding: 5px 10px;
        border-bottom: 1px solid #ccc;
        background: #f7f9fa;
        color: #000;
        cursor: pointer;
    }

    ul.modal_auto li:last-child {
        border: none;
    }
</style>
<style type="text/css">
    .statistic-box .small {

    margin-bottom: -5px !important;
    text-transform: capitalize;
}
.set-bg-color{
    padding: 31px;
    background-color: #fff !important;
}
.set-icon{
    font-size: 45px;
    padding: 13px;
    color: #969595;
}
</style>
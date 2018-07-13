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
                <h1>View Employees</h1>
                <small> </small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Employees</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

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
                                        <th>Role</th>
                                        <th>Employee Code</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($employees as $employee) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $employee['employee_name'] ?>
                                            </td>
                                            <td>
                                                <?php echo $employee['role'] ?>
                                            </td>
                                            <td>
                                                <?php echo $employee['employee_id'] ?>
                                            </td>
                                            <td>
                                                <?php echo $employee['designation'] ?>
                                            </td>
                                            <td>
                                                <?php echo $employee['department'] ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/view_emp_details/<?php echo $employee['id'] ?>"><img src="<?php echo base_url(); ?>/admin_assets/img/view.png" title="View Complete Profile" alt="View Complete Profile" width="25" height="25"></a>
                                                <a href="#" data-toggle="modal" data-target="#myModal3" onclick="job_kpi('<?php echo $employee['employee_id'] ?>')"><img src="<?php echo base_url(); ?>/admin_assets/img/article-icon.png" title="Salary Increment" alt="Salary Increment" width="25" height="25"></a>
                                                <a href="#" data-toggle="modal" data-target="#myModal4" onclick="job_kpi('<?php echo $employee['id'] ?>')"><img src="<?php echo base_url(); ?>/admin_assets/img/article-icon.png" title="Attachments" alt="Attachments" width="25" height="25"></a>
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
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<form method="POST" action="<?php echo base_url()?>admin/salary_increment" enctype="multipart/form-data">
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">

        <input type="hidden" name="employee_id">

        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 857px; margin-left: -122px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h1 class="modal-title">Salary Increment</h1>
                </div>

                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-body">
                                <div class="form-group row">
                                    <div class="form-group col-lg-12">
                                        <label for="" class="col-md-3">Add Salary</label>
                                        <div class="col-md-9">
                                            <input name="salary" type="text" class="form-control" required="This Field is Required...">
                                        </div>
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
<form method="POST" action="<?php echo base_url()?>admin/emp_attachments" enctype="multipart/form-data">
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

        <input type="hidden" name="employee_id">

        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 857px; margin-left: -122px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h1 class="modal-title">Attachments</h1>
                </div>

                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-body">
                                <div class="form-group row">
                                    <div class="form-group col-lg-12">
                                        <label for="" class="col-md-3">Agreement</label>
                                        <div class="col-md-9">
                                            <input class="form-control subject_file" data-type="agreement" multiple="" type="file" name="attachment"  id="" placeholder="" required>
                                            <input type="hidden" name="file_id" data-type="agreement">
                                            <div>
                                                <ul>
                                                  <br><br>
                                                  <table class="table table-responsive agreement" style="display: none">
                                                    <thead>
                                                      <tr>
                                                        <th style="border: 1px solid #ccc;">S.no</th>
                                                        <th style="border: 1px solid #ccc;">Uploaded File</th>

                                                        <th style="border: 1px solid #ccc;">Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                  </table>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="" class="col-md-3">NDA</label>
                                        <div class="col-md-9">
                                            <input class="form-control subject_file1" data-type="agreement" multiple="" type="file" name="attachment"  id="" placeholder="" required>
                                            <input type="hidden" name="file_id1" data-type="agreement">
                                            <div>
                                                <ul>
                                                  <br><br>
                                                  <table class="table table-responsive agreement" style="display: none">
                                                    <thead>
                                                      <tr>
                                                        <th style="border: 1px solid #ccc;">S.no</th>
                                                        <th style="border: 1px solid #ccc;">Uploaded File</th>

                                                        <th style="border: 1px solid #ccc;">Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                  </table>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="" class="col-md-3">Verification Attachment</label>
                                        <div class="col-md-9">
                                            <input class="form-control subject_file2" data-type="agreement" multiple="" type="file" name="attachment"  id="" placeholder="" required>
                                            <input type="hidden" name="file_id2" data-type="agreement">
                                            <div>
                                                <ul>
                                                  <br><br>
                                                  <table class="table table-responsive agreement" style="display: none">
                                                    <thead>
                                                      <tr>
                                                        <th style="border: 1px solid #ccc;">S.no</th>
                                                        <th style="border: 1px solid #ccc;">Uploaded File</th>

                                                        <th style="border: 1px solid #ccc;">Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                  </table>
                                                </ul>
                                            </div>
                                        </div>
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
    function job_kpi(id) {
        $('[name="employee_id"]').val(id)
    }
</script>
<script type="text/javascript">
var subject_file = []
$('.subject_file').on("change", function (e) {
  var left = $(this).offset().left
  left = parseInt(left) + parseInt($(this).width() / 2)
  var top = $(this).offset().top
  top = parseInt(top) + parseInt($(this).height() + 15)
  $('.img-loader').css('position', 'absolute')
  $('.img-loader').css('left', left+'px')
  $('.img-loader').css('top', top+'px')
  $('.img-loader').css('z-index', '9999')
  $('.img-loader').show()
  var th = $(this)
  var data = new FormData();
    data.append('type', 'subject');
    var id = 0
    data.append('id', id);
  jQuery.each($(this)[0].files, function(i, file) {
      data.append('file[]', file);
  });
  jQuery.ajax({
      url: '<?php echo base_url() ?>/admin/subject_dummy',
      data: data,
      // dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST', // For jQuery < 1.9
      complete: function(response){
        response = response.responseText
        response = response.split('[').join('')
        response = response.split(']').join(',')
        if( id in subject_file ) {
            subject_file[id] += response
        }
        else{
          subject_file[id] = response
        }
        var total = subject_file[id].split(',')
        total = total.filter(function(e){return e});
        var formData = new FormData(); //Array  
        formData.append('id', total);
        jQuery.ajax({
          url: '<?php echo base_url() ?>/admin/get_subject_file',
          data: formData,
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          method: 'POST',
          type: 'POST', // For jQuery < 1.9
          success: function(response){
            th.parent().find('tbody').parent().show()
            th.parent().find('tbody').empty()
            for (var i = 0; i < response.length; i++) {
              th.parent().find('tbody').append('<tr>')
              th.parent().find('tbody').append('</tr>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ (i + 1) +'</td>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ response[i].file +'</td>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;"><img src="<?php echo base_url() ?>/admin_assets//img/cancel.png" class="delete-file" data-id="'+ response[i].id +'" title="delete" alt="delete" width="25" height="25"></td>')
            }
            delete_file()
            $('[name="file_id"]').val(subject_file)
            $('.img-loader').hide() 
          }
      })
      }
  });
});
var subject_file1 = []
$('.subject_file1').on("change", function (e) {
  var left = $(this).offset().left
  left = parseInt(left) + parseInt($(this).width() / 2)
  var top = $(this).offset().top
  top = parseInt(top) + parseInt($(this).height() + 15)
  $('.img-loader').css('position', 'absolute')
  $('.img-loader').css('left', left+'px')
  $('.img-loader').css('top', top+'px')
  $('.img-loader').css('z-index', '9999')
  $('.img-loader').show()
  var th = $(this)
  var data = new FormData();
    data.append('type', 'subject');
    var id = 0
    data.append('id', id);
  jQuery.each($(this)[0].files, function(i, file) {
      data.append('file[]', file);
  });
  jQuery.ajax({
      url: '<?php echo base_url() ?>/admin/subject_dummy',
      data: data,
      // dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST', // For jQuery < 1.9
      complete: function(response){
        response = response.responseText
        response = response.split('[').join('')
        response = response.split(']').join(',')
        if( id in subject_file1 ) {
            subject_file1[id] += response
        }
        else{
          subject_file1[id] = response
        }
        var total = subject_file1[id].split(',')
        total = total.filter(function(e){return e});
        var formData = new FormData(); //Array  
        formData.append('id', total);
        jQuery.ajax({
          url: '<?php echo base_url() ?>/admin/get_subject_file',
          data: formData,
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          method: 'POST',
          type: 'POST', // For jQuery < 1.9
          success: function(response){
            th.parent().find('tbody').parent().show()
            th.parent().find('tbody').empty()
            for (var i = 0; i < response.length; i++) {
              th.parent().find('tbody').append('<tr>')
              th.parent().find('tbody').append('</tr>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ (i + 1) +'</td>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ response[i].file +'</td>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;"><img src="<?php echo base_url() ?>/admin_assets//img/cancel.png" class="delete-file" data-id="'+ response[i].id +'" title="delete" alt="delete" width="25" height="25"></td>')
            }
            delete_file()
            $('[name="file_id1"]').val(subject_file1)
            $('.img-loader').hide() 
          }
      })
      }
  });
});
var subject_file2 = []
$('.subject_file2').on("change", function (e) {
  var left = $(this).offset().left
  left = parseInt(left) + parseInt($(this).width() / 2)
  var top = $(this).offset().top
  top = parseInt(top) + parseInt($(this).height() + 15)
  $('.img-loader').css('position', 'absolute')
  $('.img-loader').css('left', left+'px')
  $('.img-loader').css('top', top+'px')
  $('.img-loader').css('z-index', '9999')
  $('.img-loader').show()
  var th = $(this)
  var data = new FormData();
    data.append('type', 'subject');
    var id = 0
    data.append('id', id);
  jQuery.each($(this)[0].files, function(i, file) {
      data.append('file[]', file);
  });
  jQuery.ajax({
      url: '<?php echo base_url() ?>/admin/subject_dummy',
      data: data,
      // dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      method: 'POST',
      type: 'POST', // For jQuery < 1.9
      complete: function(response){
        response = response.responseText
        response = response.split('[').join('')
        response = response.split(']').join(',')
        if( id in subject_file2 ) {
            subject_file2[id] += response
        }
        else{
          subject_file2[id] = response
        }
        var total = subject_file2[id].split(',')
        total = total.filter(function(e){return e});
        var formData = new FormData(); //Array  
        formData.append('id', total);
        jQuery.ajax({
          url: '<?php echo base_url() ?>/admin/get_subject_file',
          data: formData,
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          method: 'POST',
          type: 'POST', // For jQuery < 1.9
          success: function(response){
            th.parent().find('tbody').parent().show()
            th.parent().find('tbody').empty()
            for (var i = 0; i < response.length; i++) {
              th.parent().find('tbody').append('<tr>')
              th.parent().find('tbody').append('</tr>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ (i + 1) +'</td>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;">'+ response[i].file +'</td>')
              th.parent().find('tbody tr').last().append('<td style="border: 1px solid #ccc;"><img src="<?php echo base_url() ?>/admin_assets//img/cancel.png" class="delete-file" data-id="'+ response[i].id +'" title="delete" alt="delete" width="25" height="25"></td>')
            }
            delete_file()
            $('[name="file_id2"]').val(subject_file2)
            $('.img-loader').hide() 
          }
      })
      }
  });
});
function delete_file() {
  $('.delete-file').click(function() {
    var th = $(this)
    var id = $(this).attr('data-id');
    jQuery.ajax({
        url: '<?php echo base_url() ?>/admin/delete_subject_file/'+id,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        method: 'GET',
        type: 'GET', // For jQuery < 1.9
        complete: function(response){
          th.parent().parent().remove()
        }
    })
  })
}
</script>
<div class="img-loader" style="display: none"><img src="<?php echo base_url('admin_assets/img/Ajax-loader.gif') ?>"></div>
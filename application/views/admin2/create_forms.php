<!-- /.Navbar  Static Side -->
<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Create Document & Forms</h1>
                <small></small>
                <ol class="breadcrumb">
                     <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Create Document & Forms</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/insert_forms" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Create Document & Forms</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Tilte<span class="required">*</span></label>
                                <div class="col-sm-9">
                                     <input type="text" name="name" class="form-control">
                                </div>

                            </div>
                            <div class="form-group row after-add-sub">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Attechments<span class="required">*</span></label>
                                <div class="col-sm-3">
                                   <input type="text" name="title[]" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                   <input type="file" name="subject_attachement[0]" class="form-control file_name" multiple="">
                                   <input type="hidden" name="files_id[]" class="act_file_id">
                                </div>
                                <div class="col-lg-2 delet">
                                    <button type="button" class="add-sub btn btn-success ">Add More</button>
                                </div>
                                <table class="table table-responsive activity_files" style="display: none">
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
                            </div>
                            
                        
                          

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <button type="submit" class=" btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
     </div>
                        </div>
                         <div style="height:350px;"></div>
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
<script type="text/javascript">
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
$(document).ready(function() {
    $("body").on("click",".add-sub",function(){
        var html = $(".after-add-sub").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".after-add-sub").last().after(html);
        $(".after-add-sub").last().find('input').not('input[type="radio"]').val('')
        $(".after-add-sub").last().find('tbody').empty()
        $(".after-add-sub").last().find('table').hide()
        var con = 0;
        $('.after-add-sub').each(function() {
            $(this).find('.file_name').attr('name', 'subject_attachement['+con+'][]');
            con++
        });
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-sub").remove();
        var con = 0;
        $('.after-add-sub').each(function() {
            $(this).find('.file_name').attr('name', 'subject_attachement['+con+'][]');
            con++
        });
    });
});
var subject_file = []
$('body').on("change",'.file_name', function (e) {
    var left = $(this).offset().left
    left = parseInt(left) + parseInt($(this).width() / 2)
    var top = $(this).offset().top
    top = parseInt(top) + parseInt($(this).height() + 15)
    $('.img-loader').css('position', 'absolute')
    $('.img-loader').css('left', left+'px')
    $('.img-loader').css('top', top+'px')
    $('.img-loader').css('z-index', '99')
    $('.img-loader').show()
    var th = $(this).parent()
    var data = new FormData();
    data.append('type', 'subject');
    var id = $(this).attr('name')
    id = id.split('subject_attachement[').join('')
    id = id.split('][]').join('')
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
                    th.find('.act_file_id').val(subject_file[id])
                    $('.img-loader').hide()       
                }
            })
        }
    });
});
</script>

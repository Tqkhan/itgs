<style type="text/css">
    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        background-color: #e2e2e2;
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
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <h1>Create Course</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                
                                <li >Course Management</li>
                    <li class="active">Create Course</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/insert_content" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Create Course</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Course Title<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="change_course" name="course_id">
                                        <option>Select Course</option>
                                        <?php
                                            foreach ($courses as $course) {
                                                echo '<option value="'.$course['id'].'">'.$course['title'].'</option>';
                                            } 
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Chapter<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="change_chapter" name="chapter_id">
                                        <option>Select Chapter</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row after-add-sub">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Section<span class="required">*</span></label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="change_section" name="section_id">
                                        <option>Select Section</option>
                                        <option>Section 1</option>
                                        <option>Section 2</option>
                                    </select>

                                </div>

                            </div>
                            <div class="form-group row ">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Question type<span class="required">*</span></label>
                                <div class="col-sm-9 ">

                                    <input id="" name="type" value="0" type="radio" checked="">
                                    <label for="" style="margin-right: 24px;">Quection</label>
                                    <input id="" name="type" value="1" type="radio">
                                    <label for="" style="margin-right: 29px;">Image</label>
                                    <input id="" name="type" value="2" type="radio">
                                    <label for="" style="margin-right: 35px;">Video</label>
                                    <input id="" name="type" value="3" type="radio">
                                    <label for="">File</label>

                                </div>

                            </div>
                            <div class="form-group row change-type type-0">

                                <label for="example-text-input" class="col-sm-3 col-form-label ">Question <span class="required">*</span></label>
                                <div class="col-sm-9 ">

                                    <textarea class="form-control" name="question" id="exampleTextarea" rows="2"></textarea>

                                </div>

                            </div>
                            <div class="form-group row change-type type-1" style="display: none">

                                <label for="example-text-input" class="col-sm-3 col-form-label ">Image<span class="required">*</span></label>
                                <div class="col-sm-9 ">

                                    <input class="form-control" name="image[]" multiple="" type="file" value="" id="example-text-input" placeholder="" accept="image/*">

                                </div>

                            </div>
                            <div class="form-group row change-type type-2" style="display: none">

                                <label for="example-text-input" class="col-sm-3 col-form-label ">Video<span class="required">*</span></label>
                                <div class="col-sm-9 ">

                                    <input class="form-control" name="video[]" multiple="" type="file" value="" id="example-text-input" placeholder="" accept="video/mp4,video/x-m4v,video/*">

                                </div>

                            </div>
                            <div class="form-group row change-type type-3" style="display: none">

                                <label for="example-text-input" class="col-sm-3 col-form-label ">File<span class="required">*</span></label>
                                <div class="col-sm-9 ">

                                    <input class="form-control" name="file[]" multiple="" type="file" value="" id="example-text-input" placeholder="" accept=".pdf, .doc, .docx, .rtf, .txt, .xlsx, .xls, .pptx">

                                </div>

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
    $(document).ready(function() {
        $("body").on("click", ".add-sub", function() {
            var html = $(".after-add-sub").first().clone();
            //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
            $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
            $(".after-add-sub").last().after(html);
            $(".after-add-sub").last().find('input').not('input[type="radio"]').val('')
        });
        $("body").on("click", ".remove", function() {
            $(this).parents(".after-add-sub").remove();
        });
    });
</script>
<script type="text/javascript">
    $('[name="type"]').change(function() {
        var id = $(this).val()
        $('.change-type').hide()
        $('.type-' + id).show()
    })
    $('#change_course').change(function() {
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>admin/get_chapter/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                $('#change_chapter').empty()
                $('#change_chapter').append('<option value="">Select Chapter</option>')
                if(res.length >= 1){
                    for (var i = 0; i < res.length; i++) {
                        $('#change_chapter').append('<option value="'+res[i]['id']+'">'+res[i]['chapter']+'</option>')
                    }
                }
            }
        });
    })
    $('#change_chapter').change(function() {
        var id = $(this).val()
        $.ajax({
            url: "<?php echo base_url() ?>admin/get_section/"+id,
            type: 'GET',
            dataType: 'json', // added data type
            success: function(res) {
                $('#change_section').empty()
                $('#change_section').append('<option value="">Select Section</option>')
                if(res.length >= 1){
                    for (var i = 0; i < res.length; i++) {
                        $('#change_section').append('<option value="'+res[i]['id']+'">'+res[i]['section']+'</option>')
                    }
                }
            }
        });
    })
</script>
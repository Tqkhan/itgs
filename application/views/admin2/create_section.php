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
                <h1>Create Section</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                
                                <li >Course Management</li>
                    <li class="active">Create Section</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <form method="post" action="<?php echo base_url() ?>admin/insert_section" enctype="multipart/form-data">

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Create Section</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group row">

                                <label for="example-text-input" class="col-sm-3 col-form-label">Course<span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="change_course" name="course_id">
                                        <option value="">Select Course</option>
                                        <?php 
                                            foreach ($courses as $course) {
                                                echo '<option value="'. $course['id'].'">'. $course['title'].'</option>';
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
                                <div class="col-sm-7 ">
                                   <input class="form-control" name="section[]" type="text" value="" id="example-text-input" placeholder="">

                                </div>
                                <div class="col-lg-2 delet">
                                    <button type="button" class="add-sub btn btn-success ">Add More</button>
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
    $("body").on("click",".add-sub",function(){
        var html = $(".after-add-sub").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".after-add-sub").last().after(html);
        $(".after-add-sub").last().find('input').not('input[type="radio"]').val('')
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-sub").remove();
    });
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
    
});
</script>
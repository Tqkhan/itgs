
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
                            <h1>Recruitment Parser</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                 <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">Recruitment Parser</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel-body panel-bd panel">
                                <form action="<?php echo base_url()?>admin/recruitment_parser" method="post">
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Start Date</label>
                                            <input type="date" name="start_date" class="form-control" value="<?php if(isset($fileds['start_date'])){ echo $fileds['start_date']; } ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">End Date</label>
                                            <input type="date" class="form-control" id="" name="end_date" value="<?php if(isset($fileds['end_date'])){ echo $fileds['end_date']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Qualification</label>
                                            <select class="form-control" name="qualification" value="<?php if(isset($fileds['qualification'])){ echo $fileds['qualification']; } ?>">
                                                <option value="">Select Qualification</option>
                                                <option value="Masters">Masters</option>
                                                <option value="Bachelors">Bachelors</option>
                                                <option value="Phd">Phd</option>
                                                <option value="Inter">Inter</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Certification">Certification</option>
                                            </select>
                                            <!-- <input type="text" name="qualification" class="form-control"  value="<?php if(isset($fileds['qualification'])){ echo $fileds['qualification']; } ?>" > -->
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Degree/Qualification Tittle</label>
                                            <input type="text" class="form-control" id="" name="title" value="<?php if(isset($fileds['title'])){ echo $fileds['title']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Grade/CGPA</label>
                                            <input type="text" name="grade_cgpa" class="form-control"  value="<?php if(isset($fileds['grade_cgpa'])){ echo $fileds['grade_cgpa']; } ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Institution</label>
                                            <input type="text" class="form-control" id="" name="institution" value="<?php if(isset($fileds['institution'])){ echo $fileds['institution']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Award Year</label>
                                            <input type="text" name="award_year" class="form-control"  value="<?php if(isset($fileds['award_year'])){ echo $fileds['award_year']; } ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Field of Study</label>
                                            <input type="text" class="form-control" id="" name="field_of_study" value="<?php if(isset($fileds['field_of_study'])){ echo $fileds['field_of_study']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Experience period</label>
                                            <input type="text" name="experience" class="form-control"  value="<?php if(isset($fileds['experience'])){ echo $fileds['experience']; } ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Company name</label>
                                            <input type="text" class="form-control" id="" name="company_name" value="<?php if(isset($fileds['company_name'])){ echo $fileds['company_name']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Salary Start</label>
                                            <input type="text" name="salary_start" class="form-control"  value="<?php if(isset($fileds['salary_start'])){ echo $fileds['salary_start']; } ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Salary End</label>
                                            <input type="text" class="form-control" id="" name="salary_end" value="<?php if(isset($fileds['salary_end'])){ echo $fileds['salary_end']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Intrests</label>
                                            <input type="text" name="intrests" class="form-control tags-field"  value="<?php if(isset($fileds['intrests'])){ echo $fileds['intrests']; } ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Skills</label>
                                            <input type="text" class="form-control tags-field" id="" name="skills" value="<?php if(isset($fileds['skills'])){ echo $fileds['salary_end']; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-lg-6">
                                            <label for="">Job Code</label>
                                            <input type="text" name="code" class="form-control"  value="<?php if(isset($fileds['code'])){ echo $fileds['code']; } ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="">Position</label>
                                            <input type="text" class="form-control" id="" name="position" value="<?php if(isset($fileds['position'])){ echo $fileds['position']; } ?>">
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
                                        <h4>Resume Parser</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <form method="post" action="<?php echo base_url() ?>admin/update_recruitment">
                                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <th><input type="checkbox"/ class="check_all"> </th>
                                                    <th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>Phone</th>
                                                    <th>Postion</th>
                                                    <th>View Detail</th>
                                                    
                                                </tr>
                                            </thead>
                                           <tbody>
                                            <?php
                                              foreach ($cvs as $cv) {
                                            ?>
                                              <tr>
                                                 
                                                 <td><input type="checkbox" class="add_check" name="id[]" value="<?php echo $cv['id'] ?>"> </td>
                                                 <td><?php echo $cv['first_name'] ?></td>
                                                 <td><?php echo $cv['father_name'] ?></td>
                                                 <td><?php echo $cv['phone'] ?></td>
                                                 <td><?php echo $cv['position_name'] ?></td>
                                                 <td><a download="" style="margin-right: 5px;" href="<?php echo base_url().''.$cv['file'] ?>"><img src="<?php echo base_url('admin_assets/img/view_cv.png') ?>" width="25" heigth="25" title="Download CV"></a><a style="margin-right: 5px;" href="<?php echo base_url() ?>/admin/recruitment_detail/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_details.png') ?>" width="25" heigth="25" title="View Detail"></a><a style="margin-right: 5px;" href="<?php echo base_url() ?>/admin/recruitment_score/<?php echo $cv['id'] ?>"><img src="<?php echo base_url('admin_assets/img/view_report.png') ?>" width="25" heigth="25" title="View Score Card"></a></td>
                                             </tr>
                                            <?php    
                                              }
                                            ?>
                                             
                                           
                                           </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        <!-- <a href="<?php echo base_url() ?>admin/view_emp"><button type="" class="btn btn-primary pull-right">Submit</button></a> -->
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url('admin_assets/assets/plugins/select2/select2.css') ?>">
<script type="text/javascript" src="<?php echo base_url('admin_assets/assets/plugins/select2//select2.js') ?>"></script>
<style type="text/css">
    .select2-container {
        border:  none;
        padding:  0;
    }
</style>
<script type="text/javascript">
  $('.check_all').change(function() {
    if($(this).is(':checked')){
      $('.add_check').removeAttr('checked');
      $('.add_check').click();
      //$('.add_check').attr('checked', true);
    }
    else{
      $('.add_check').removeAttr('checked');
    }
    //$('.add_check').click();
  })
  $(".tags-field").select2({
        tags: true,
        // tokenSeparators: [","]
        createTag: function(tag) {
            return {
                id: tag.term,
                text: tag.term,
                // add indicator:
                isNew: true
            };
        }
    }).on("select2:select", function(e) {
        if (e.params.data.isNew) {
            var tag_value = e.params.data.text;
            var $this = $(this);
            $.ajax({
                url: $('#base_url').val() + 'admin/tags/add',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    tag: tag_value
                },
                success: function(response) {
                    console.log(response);
                    $this.find('[value="' + e.params.data.id + '"]').replaceWith('<option selected value="' + response.data + '">' + e.params.data.text + '</option>');
                },
            })

        }
    });
</script>


            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>Recruitment Detail</h1>
                                <small>Ut enim ad minim veniam</small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">recruitment</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <!-- Form controls -->

                        <form method="post" action="<?php echo base_url() ?>admin/insert_recruitment" enctype="multipart/form-data">


                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Bio Data</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">


                                        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">First Name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" id="example-text-input" name="first_name" value="<?php echo $recruitment['first_name'] ?>" readonly>
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Father's Name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['father_name'] ?>" id="example-text-input" name="father_name" readonly>
            </div>
        </div>

        <div class="form-group row">

            <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number
                                        <span class="required">*</span></label>
           <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['phone_number'] ?>" id="example-text-input" name="phone_number" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">File
                                        <span class="required">*</span></label>
           <div class="col-sm-4">
            <img src="<?php echo base_url() ?>uploads/recruitment/<?php echo $recruitment['file'] ?>" width="150">
            </div>
        </div>

         <div class="panel-title">
            <h4>Qualifications</h4>
            <hr>
        </div>
        <div class="after-add-more">
<?php
$new_qualification_count=$recruitment_qualification['new_qualification'];

$count=count(explode(",",$new_qualification_count));
$new_qualification=explode(",",$recruitment_qualification['new_qualification']);
$qualification_title=explode(",",$recruitment_qualification['qualification_title']);
$start_date=explode(",",$recruitment_qualification['start_date']);
$end_date=explode(",",$recruitment_qualification['end_date']);
$grade=explode(",",$recruitment_qualification['grade']);
$institution=explode(",",$recruitment_qualification['institution']);
$award_year=explode(",",$recruitment_qualification['award_year']);
$field_of_study=explode(",",$recruitment_qualification['field_of_study']);
for ($i = 0 ; $i < $count; $i++) {
?>

<div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Enter new Qualification
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $new_qualification[$i] ?>" id="example-text-input" name="new_qualification[]" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Degree/Qualification Tittle
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $qualification_title[$i] ?>" id="example-text-input" name="qualification_title[]" readonly>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Start Date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="<?php echo $start_date[$i] ?>" id="example-text-input" name="start_date[]" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">End Date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="<?php echo $end_date[$i] ?>" id="example-text-input" name="end_date[]" readonly>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Grade/CGPA
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $grade[$i] ?>" id="example-text-input" name="grade[]" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Institution
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $institution[$i] ?>" id="example-text-input" name="institution[]" readonly>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Award Year
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $award_year[$i] ?>" id="example-text-input" name="award_year[]" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Field of Study
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $field_of_study[$i] ?>" id="example-text-input" name="field_of_study[]" readonly>
            </div>
            </div>
            <hr>
<?php
}
 ?>

        </div>


        <div class="panel-title">
            <h4>Past Experience</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Experience period
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment_past_experience['experience_period'] ?>" id="example-text-input" name="experience_period" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Company name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment_past_experience['company_name'] ?>" id="example-text-input" name="company_name" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Joining date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment_past_experience['joining_date'] ?>" id="example-text-input" name="joining_date" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Other
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment_past_experience['other'] ?>" id="example-text-input" name="other" readonly>
            </div>
        </div>
        <div class="panel-title">
            <h4>Position applied for</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Position name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['position_name'] ?>" id="example-text-input" name="position_name" readonly>
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">other
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['other'] ?>" id="example-text-input" name="other" readonly>
            </div>
        </div>
        <div class="panel-title">
            <h4>Job Code</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Job Code (if any)
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['jobcode'] ?>" id="example-text-input" name="jobcode" readonly>
            </div>

        </div>
         <div class="panel-title">
            <h4>Current Salary</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">in word
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['current_salary_inword'] ?>" id="example-text-input" name="current_salary_inword" readonly>
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">in numbers
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['current_salary_innumbers'] ?>" id="example-text-input" name="current_salary_innumbers" readonly>
            </div>

        </div>
        <div class="panel-title">
            <h4>Expected Salary</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">In Words
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['expected_salary_inword'] ?>" id="example-text-input" name="expected_salary_inword" readonly>
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">In Numbers
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="<?php echo $recruitment['expected_salary_innumber'] ?>" id="example-text-input" name="expected_salary_innumber" readonly>
            </div>

            <label for="example-text-input" class="col-sm-2 col-form-label">&nbsp;</label>
           <!-- <div class="col-sm-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div> -->

        </div>






                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>


                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->


        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url() ?>assets/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/bootsnav/js/bootsnav.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="<?php echo base_url() ?>assets/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->




        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="<?php echo base_url() ?>assets/assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-more",function(){
        var html = $(".after-add-more").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".change").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-more"><strong> + </strong> </a>');
        $(".after-add-more").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-more").remove();
    });
});
</script>
    </body>


</html>

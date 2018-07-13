
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
                                <h1>Recruitment</h1>
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
                <input class="form-control" type="text" value="" id="example-text-input" name="first_name" placeholder="enter your first name">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Father's Name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="father_name" placeholder="enter your father's name">
            </div>
        </div>

        <div class="form-group row">

            <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number
                                        <span class="required">*</span></label>
           <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="phone_number" placeholder="enter your phone number">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">File
                                        <span class="required">*</span></label>
           <div class="col-sm-4">
                <input class="form-control" type="file" value="" id="example-text-input" name="file" placeholder="">
            </div>
        </div>

         <div class="panel-title">
            <h4>Qualifications</h4>
            <hr>
        </div>
        <div class="after-add-more">
            <div class="form-group row">
                <span class="pull-right">
                <div class="col-sm-12 change">
                <a class="btn btn-success add-more pull-right">+ Add More</a>
                </div></span>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Enter new Qualification
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="new_qualification[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Degree/Qualification Tittle
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="qualification_title[]" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Start Date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="" id="example-text-input" name="start_date[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">End Date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="" id="example-text-input" name="end_date[]" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Grade/CGPA
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="grade[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Institution
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="institution[]" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Award Year
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="award_year[]" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Field of Study
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="field_of_study[]" placeholder="">
            </div>
            </div>
        </div>
        <div class="panel-title">
            <h4>Past Experience</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Experience period
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="experience_period" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Company name
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="company_name" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Joining date
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="joining_date" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Other
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="other" placeholder="">
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
                <input class="form-control" type="text" value="" id="example-text-input" name="position_name" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">other
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="other" placeholder="">
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
                <input class="form-control" type="text" value="" id="example-text-input" name="jobcode" placeholder="">
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
                <input class="form-control" type="text" value="" id="example-text-input" name="current_salary_inword" placeholder="">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">in numbers
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="current_salary_innumbers" placeholder="">
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
                <input class="form-control" type="text" value="" id="example-text-input" name="expected_salary_inword" placeholder="">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">In Numbers
                                        <span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" name="expected_salary_innumber" placeholder="">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">&nbsp;</label>
           <div class="col-sm-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>

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

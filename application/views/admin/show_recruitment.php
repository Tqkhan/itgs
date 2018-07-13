<?php
// echo "<pre>";
// print_r($recruitment['first_name']);
// die();
 ?>
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
                                <h1>User Info Form</h1><br>

                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                                    <li class="active">User Info Form</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">


                            <!-- Textual inputs -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>User Info</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                       <div id="page-wrap">

        <img class="img-responsive" src="<?php echo base_url() ?>uploads/recruitment/<?php echo $recruitment['file'] ?>" width="170" id="pic">

        <div id="contact-info" class="vcard">

            <!-- Microformats! -->

            <h1 class="fn" ><?php echo $recruitment['first_name'] ?></h1>


            <p>
                <strong>Father Name:</strong> <span class="tel" value=""><?php echo $recruitment['father_name'] ?></span><br />
                <strong>Cell:</strong> <span class="tel" value=""><?php echo $recruitment['phone_number'] ?></span><br />
            </p>
        </div>



        <div class="clear"></div>

        <dl>
            <dd class="clear"></dd>

            <dt>Qualifications</dt>
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
for ($i = 0 ; $i < $count; $i++)
{
?>
            <dd>

                <p><strong>Qualification : </strong> <?php echo $new_qualification[$i] ?><br/>
                   <strong>Degree/Qualification Tittle :</strong> <?php echo $qualification_title[$i] ?><br>
                   <strong>Start Date :</strong> <?php echo $start_date[$i]?> <strong> End Dat :</strong><?php echo $end_date[$i]?> <br>
                   <strong>Grade/CGPA :</strong> <?php echo $grade[$i]?> <strong> Institution :</strong><?php echo $institution[$i]?><br>
                   <strong>Award Year :</strong> <?php echo $award_year[$i]?> <strong> Field of Study :</strong> <?php echo $field_of_study[$i]?> <br>

                   </p>
            </dd>
<?php
}
 ?>
</div>
            <dd class="clear"></dd>

            <dt>Past Experience</dt>
            <dd>
                 <p><strong>Experience period : </strong><?php echo $recruitment_past_experience['experience_period']?><br />
                   <strong>Company name : </strong> <?php echo $recruitment_past_experience['company_name'] ?><br>
                   <strong>Joining Date : </strong><?php echo $recruitment_past_experience['joining_date'] ?> <br><strong> Other :</strong><?php echo $recruitment['other'] ?> <br>

                   </p>

            </dd>

            <dd class="clear"></dd>

            <dt>Position applied for</dt>
            <dd>
                <p><strong>Position name : </strong> <?php echo $recruitment['position_name'] ?><br />
                   <strong>Other : </strong><?php echo $recruitment['other'] ?>

                   </p>
            </dd>

            <dd class="clear"></dd>

            <dt>Job Code</dt>
            <dd>
                <p><strong>Job Code (if any) : </strong><?php echo $recruitment['jobcode'] ?><br />


                   </p>
            </dd>

            <dd class="clear"></dd>

            <dt>Current Salary</dt>
            <dd>
                <p><strong>in word : </strong> <?php echo $recruitment['current_salary_inword'] ?><br />
                <strong>in numbers : </strong><?php echo $recruitment['current_salary_innumbers'] ?><br />


                   </p>
            </dd>

            <dd class="clear"></dd>

             <dt>Expected Salary</dt>
            <dd>
                <p><strong>in word : </strong><?php echo $recruitment['expected_salary_inword'] ?><br />
                <strong>in numbers : </strong><?php echo $recruitment['expected_salary_innumber'] ?><br />


                   </p>
            </dd>

            <dd class="clear"></dd>
        </dl>

        <div class="clear"></div>
<div>
			<a href="#"><button class="pull-right btn btn-success">Call for Interview</button></a>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#"><button class="pull-right btn btn-danger">Reject</button></a>
		</div>
    </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Checkboxes & Radios -->


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
    </body>

<!-- Mirrored from adminpage.thememinister.com/preview_page/theme/AdminPage_black_v1.0/forms_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 06:37:50 GMT -->
</html>

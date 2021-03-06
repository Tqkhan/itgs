<?php
    $emp = $employee[0];
?>
<style type="text/css">
    #imageUpload {
        display: none;
    }

    #profileImage:hover {
        background-color: #e2e0e0;
    }

    #profileImage {
        cursor: pointer;
    }

    #profile-container {
        width: 150px;
        height: 150px;
        overflow: hidden;
    }

    #profile-container img {
        width: 150px;
        height: 150px;
    }

    input[type="date"]:not(.has-value):before {
        color: lightgray;
        content: attr(placeholder);
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
                <h1>Employee Creation Form</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Employee Creation</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Employee Creation Form</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-sm-12 col-md-8 col-lg-10 text-center">
                                <form method="post" class="f1" action="<?php echo base_url() ?>/admin/edit_emp">
                                    <input type="hidden" name="e_id" value="<?php echo $emp['id'] ?>">
                                    <div class="f1-steps">
                                        <div class="f1-progress">
                                            <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style=""></div>
                                        </div>
                                        <div class="f1-step active" >
                                            <div class="f1-step-icon" data-id="0"><i class="fa fa-user"></i></div></a>
                                            <p>Personal Details</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon" data-id="1"><i class="fa fa-graduation-cap"></i></div>
                                            <p>Education</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon" data-id="2"><i class="fa fa-users"></i></div>
                                            <p>Employment history</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon" data-id="3"><i class="fa fa-map-marker"></i></div>
                                            <p>Other</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon" data-id="4"><i class="fa fa-users"></i></div>
                                            <p>Employment Detail</p>
                                        </div>
                                        <div class="f1-step">
                                            <div class="f1-step-icon" data-id="5"><i class="fa fa-eye"></i></div>
                                            <p>Preview</p>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <fieldset class="change-type type-0">

                                        <!-- 1 strt -->
                                        <div class="form-group row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="full_name">Full Name</label>
                                                    <input name="full_name" type="text" class="form-control req" required="" id="full_name" value="<?php echo $emp['full_name'] ?>" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="m_surname">Maiden Surname</label>
                                                    <input type="text" name="surename" value="<?php echo $emp['surename'] ?>" id="m_surname" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-offset-3 col-lg-4 pull-right" id="profile-container">

                                                <img id="profileImage" src="<?php echo base_url().'/'.$emp['image'] ?>" title="Upload Profile Picture" style="border-color: black; border:9px;" />
                                                <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" capture>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">AKA</label> <small id="emailHelp" class="text-muted">ALSO KNOWN AS</small>
                                                <input type="text" name="aka" value="<?php echo $emp['aka'] ?>" class="form-control" id="aks" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Privious Legal Name</label>
                                                <input type="text" name="privious_legal_name" value="<?php echo $emp['privious_legal_name'] ?>" id="p_l_n" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Gender</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="male" name="gender" <?php if($emp['gender'] == 'male') echo 'checked=""';?>>
                                                        <label for="inlineRadio1"> Male </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="female" name="gender" <?php if($emp['gender'] == 'female') echo 'checked=""';?>>
                                                        <label for="inlineRadio2"> Female </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="mother_name">Mother's Full Name</label>
                                                <input type="text" name="mother_name" value="<?php echo $emp['mother_name'] ?>" id="mother_name" class="form-control req" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="father_name">Father's Name</label>
                                                <input type="text" class="form-control req" required="" value="<?php echo $emp['father_name'] ?>" name="father_name" id="father_name" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Date Of Birth</label>
                                                <input type="date" class="form-control" value="<?php echo $emp['dob'] ?>" name="dob" id="dob" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Plase Of Birth</label>
                                                <input type="text" name="pob" value="<?php echo $emp['pob'] ?>" id="pob" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Relationship Status</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio"  name="relationship_status" id="inlineCheckbox1" value="single" <?php if($emp['relationship_status'] == 'single') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox1"> Single </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" name="relationship_status" id="inlineCheckbox2" value="married" <?php if($emp['relationship_status'] == 'married') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox2"> Married </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" name="relationship_status" id="inlineCheckbox3" value="divorced" <?php if($emp['relationship_status'] == 'divorced') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox3"> Divorced </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio"  name="relationship_status" id="inlineCheckbox4" value="widowed" <?php if($emp['relationship_status'] == 'widowed') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox4"> Widowed </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="n_i_n">National Identification Number</label>
                                                <input type="text" name="national_identification_number" value="<?php echo $emp['national_identification_number'] ?>" class="form-control req" required="" id="n_i_n">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Passport Number</label>
                                                <input type="text" class="form-control" value="<?php echo $emp['passport_name'] ?>" name="passport_name" id="p_n" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Country of Passport Issuance</label>
                                                <input type="text" value="<?php echo $emp['country_of_passport_issuance'] ?>" name="country_of_passport_issuance" class="form-control" id="c_p_i">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">NTN</label>
                                                <input type="text" value="<?php echo $emp['ntn'] ?>" class="form-control" name="ntn" id="ntn" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Social Security Number</label>
                                                <input type="text" name="social_security_number" value="<?php echo $emp['social_security_number'] ?>" class="form-control" id="s_s_n">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Country of Citizenship</label>
                                                <input type="text" class="form-control" value="<?php echo $emp['country_of_citizenship'] ?>" name="country_of_citizenship" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="m_number">Phone Number </label> <small id="emailHelp" class="text-muted"> Mobile</small>
                                                <input type="text" class="form-control req" required="" value="<?php echo $emp['mobile'] ?>" id="m_number" name="mobile" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Phone Number </label> <small id="emailHelp" class="text-muted"> PTCL</small>
                                                <input type="text" name="ptcl" value="<?php echo $emp['ptcl'] ?>" id="p_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="e_c_name">Emergency Contact Name</label>
                                                <input type="text" class="form-control req" required="" value="<?php echo $emp['emergency_contact_name'] ?>" name="emergency_contact_name" id="e_c_name" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="e_c_num">Emergency Contact Number</label>
                                                <input type="text" class="form-control req" required="" value="<?php echo $emp['emergency_contact_number'] ?>" name="emergency_contact_number" id="e_c_num">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Emergency Contact Address</label>
                                                <input type="text" value="<?php echo $emp['emergency_contact_address'] ?>" class="form-control" name="emergency_contact_address" id="e_c_a">
                                            </div>
                                        </div>

                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="button" class="btn btn-success btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset class="change-type type-1">
                                        <?php
                                            $con = 0;
                                            foreach ($employee_educations as $ed) {
                                        ?>
                                        <div class="after-add-more education-append">
                                            <input type="hidden" name="education_id[]" value="<?php echo $ed['id'] ?>">
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="exampleSelect1">Type of school</label>
                                                    <select class="form-control req" required="" id="exampleSelect1" name="school_type[]">
                                                        <option>Pelease Select</option>
                                                        <option value="high school" <?php if($ed['school_type'] == 'high school') echo 'selected';?>>High School</option>
                                                        <option value="college" <?php if($ed['school_type'] == 'college') echo 'selected';?>>College</option>
                                                        <option value="university" <?php if($ed['school_type'] == 'university') echo 'selected';?>>University</option>
                                                        <option value="professional school" <?php if($ed['school_type'] == 'professional school') echo 'selected';?>>Professional School</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="name_of_school">Name of School</label>
                                                    <input type="text" name="name_of_school[]" value="<?php echo $ed['name_of_school'] ?>" id="name_of_school" class="form-control req" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="">Location, Address</label>
                                                    <input type="text" name="school_location[]" value="<?php echo $ed['school_location'] ?>" class="form-control" id="" placeholder="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="in_progress">In Progress</label>
                                                    <select class="form-control" name="in_progress[]">
                                                        <option>Select</option>
                                                        <option value="yes" <?php if($ed['in_progress'] == 'yes') echo 'selected';?>>Yes</option>
                                                        <option value="no" <?php if($ed['in_progress'] == 'no') echo 'selected';?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="school_dgree">Dgree, Majors</label>
                                                    <input type="text" value="<?php echo $ed['school_dgree'] ?>" class="form-control req" required=""  name="school_dgree[]" id="school_dgree" placeholder="">
                                                </div>
                                                <div class="form-group col-lg-6" <?php if($ed['in_progress'] == 'yes') echo 'style="display:none"';?>>
                                                    <label for="school_year_completed">Year Completed</label>
                                                    <input type="date" name="school_year_completed[]" value="<?php echo $ed['school_year_completed'] ?>" class="form-control req" id="school_year_completed" required="">
                                                </div>
                                            </div>
                                            <?php
                                                if ($con == 0) {
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change">
                                                    <a class="btn btn-success add-more pull-right">+ Add More</a>
                                                  </div>
                                                </span>
                                            </div>
                                            <?php
                                                } else{
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change"><a class="btn btn-danger remove"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>  <a class="btn btn-success add-more"><strong> + </strong> </a></div>
                                                </span>
                                            </div>
                                            <?php
                                                }
                                                $con++
                                            ?>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="button" class="btn btn-success btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset class="change-type type-2">

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Service in Army</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio14" value="1" name="army_service" <?php if($emp['army_service'] == '1') echo 'checked=""';?>>
                                                        <label for="inlineRadio14"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio15" value="0" name="army_service" <?php if($emp['army_service'] == '0') echo 'checked=""';?> >
                                                        <label for="inlineRadio15"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Designation Date & year</label>
                                                <input type="text" name="army_des_date" value="<?php echo $emp['army_des_date'] ?>" id="d_d_y" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Previos Experince</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio41" value="1" name="employment_history" <?php if(sizeof($employee_employment_history) >= 1) echo 'checked' ?>>
                                                        <label for="inlineRadio41"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio51" value="0" name="employment_history" <?php if(sizeof($employee_employment_history) < 1) echo 'checked' ?>>
                                                        <label for="inlineRadio51"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $con = 0;
                                            foreach ($employee_employment_history as $eh) {
                                        ?>
                                        <div class="after-add-kpi append-employment_history">
                                            <input type="hidden" name="history_id[]" value="<?php echo $eh['id'] ?>">

                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="name_of_employer">Name Of employer</label>
                                                    <input type="text" name="name_of_employer[]" value="<?php echo $eh['name_of_employer'] ?>" id="name_of_employer" class="form-control req" required="">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">Designation</label>
                                                    <input type="text" name="employer_designation[]"  id="employer_designation" value="<?php echo $eh['employer_designation'] ?>" class="form-control req" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="">Supervisor</label>
                                                    <input type="text" name="employer_supervisor[]" value="<?php echo $eh['employer_supervisor'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="employer_department">Department</label>
                                                    <input type="text" name="employer_department[]" id="employer_department" value="<?php echo $eh['employer_department'] ?>" class="form-control req" required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="">Duration</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="date" class="form-control" name="employer_duration_start[]" value="<?php echo $eh['employer_duration_start'] ?>" placeholder="Form : " onchange="(!=''?' has-value':'')">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="date" class="form-control" name="employer_duration_end[]" value="<?php echo $eh['employer_duration_end'] ?>" placeholder="To : " onchange="(!=''?' has-value':'')">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">Employee Code</label>
                                                    <input type="text" name="employer_code[]" value="<?php echo $eh['employer_code'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="">Nature of Employment</label>
                                                    <input type="text" name="nature_of_employment[]" value="<?php echo $eh['nature_of_employment'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="reason_for_leaving">Reason for Leaving</label>
                                                    <input type="text" name="reason_for_leaving[]" value="<?php echo $eh['reason_for_leaving'] ?>" class="form-control req" id="reason_for_leaving" required="">
                                                </div>
                                            </div>
                                            <?php
                                                if ($con == 0) {
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change">
                                                    <a class="btn btn-success add-kpi pull-right">+ Add More</a>
                                                  </div>
                                                </span>
                                            </div>
                                            <?php
                                                } else{
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change"><a class="btn btn-danger remove"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>  <a class="btn btn-success add-kpi"><strong> + </strong> </a></div>
                                                </span>
                                            </div>
                                            <?php
                                                }
                                                $con++
                                            ?>
                                        </div>
                                        <?php
                                            }
                                        ?>

                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="button" class="btn btn-success btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset class="change-type type-3">
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Means Of Transport </label>
                                                <input type="text" name="means_of_transport" value="<?php echo $emp['means_of_transport'] ?>" id="m_o_t" class="form-control" id="" placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Driver's Licence Number </label>
                                                <input type="text" value="<?php echo $emp['driver_licence_number'] ?>" name="driver_licence_number" id="d_l_n" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Expiration Date</label>
                                                <input type="text" name="expiration_date" value="<?php echo $emp['expiration_date'] ?>" class="form-control" id="" placeholder="" id="exp_date">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">State Of Issue</label>
                                                <input type="text" name="state_of_issue" value="<?php echo $emp['state_of_issue'] ?>" class="form-control" id="stae_issue">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Ever been convicted of crime</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio12" value="1" name="crime"  <?php if($emp['crime'] == '1') echo 'checked=""';?>>
                                                        <label for="inlineRadio12"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio13" value="0" name="crime"  <?php if($emp['crime'] == '0') echo 'checked=""';?>>
                                                        <label for="inlineRadio13"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Detail</label>
                                                <input type="text" name="other_detail" value="<?php echo $emp['other_detail'] ?>" class="form-control" id="e_detail" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Previos Reference</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio42" value="1" name="reference_history" <?php if(sizeof($employee_reference) >= 1) echo 'checked' ?>>
                                                        <label for="inlineRadio42"> Yes </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio52" value="0" name="reference_history" <?php if(sizeof($employee_reference) < 1) echo 'checked' ?>>
                                                        <label for="inlineRadio52"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $con = 0;
                                            foreach ($employee_reference as $er) {
                                        ?>
                                        <div class="after-add-kp append-professional_reference">
                                            <div class="panel-title col-lg-12">
                                                <h4 style="margin-left: -20px;">Professional Reference</h4>
                                                <div style="/* line-height: 51px; */background-color: black;border: 2px;border-color: black;height: 1px;margin-bottom: 4px;margin-top: -7px; width: 785px; margin-left: -20px;"></div>
                                            </div>
                                            <input type="hidden" name="reference_id[]" value="<?php echo $er['id'] ?>">
                                            <div class="form-group row">

                                                <div class="form-group col-lg-6">
                                                    <label for="">Name</label>
                                                    <input type="text" name="ref_name[]" value="<?php echo $er['ref_name'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">Designation</label>
                                                    <input type="text" name="ref_designation[]" value="<?php echo $er['ref_designation'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="form-group col-lg-6">
                                                    <label for="">Company</label>
                                                    <input type="text" name="ref_company[]" value="<?php echo $er['ref_company'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">Phone</label>
                                                    <input type="text" name="ref_phone[]" value="<?php echo $er['ref_phone'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="form-group col-lg-6">
                                                    <label for="">Email</label>
                                                    <input type="email" name="ref_email[]" value="<?php echo $er['ref_email'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">Address</label>
                                                    <input type="text" name="ref_address[]" value="<?php echo $er['ref_address'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <?php
                                                if ($con == 0) {
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change">
                                                    <a class="btn btn-success add-kp pull-right">+ Add More</a>
                                                  </div>
                                                </span>
                                            </div>
                                            <?php
                                                } else{
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change"><a class="btn btn-danger remove"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>  <a class="btn btn-success add-kp"><strong> + </strong> </a></div>
                                                </span>
                                            </div>
                                            <?php
                                                }
                                                $con++
                                            ?>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <div class="panel-title col-lg-12">
                                            <h4 style="margin-left: -20px;">Current Address</h4>
                                            <div style="/* line-height: 51px; */background-color: black;border: 2px;border-color: black;height: 1px;margin-bottom: 4px;margin-top: -7px; width: 785px; margin-left: -20px;"></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="c_address">Address</label>
                                                <input type="text" name="current_address" value="<?php echo $emp['current_address'] ?>" id="c_address" class="form-control req" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="c_city">City</label>
                                                <input type="text" name="current_city" value="<?php echo $emp['current_city'] ?>" id="c_city" class="form-control req" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="form-group col-lg-6">
                                                <label for="">Postal Code</label>
                                                <input type="text" name="current_postal_code" value="<?php echo $emp['current_postal_code'] ?>" id="c_post_code" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Date of Residence</label>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="date" name="current_date_residence_start" value="<?php echo $emp['current_date_residence_start'] ?>" class="form-control" placeholder="Form : " onchange="(!=''?' has-value':'')">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" name="current_date_residence_end" value="<?php echo $emp['current_date_residence_end'] ?>" placeholder="To : " onchange="(!=''?' has-value':'')">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="c_state">State</label>
                                                <input type="text" name="current_state" value="<?php echo $emp['current_state'] ?>" id="c_state" class="form-control req" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="c_country">Country</label>
                                                <input type="text" name="current_country" value="<?php echo $emp['current_country'] ?>" id="c_country" class="form-control req" required="">
                                            </div>
                                        </div>

                                        <!--  -->

                                        <?php
                                            $con = 0;
                                            foreach ($employee_previous_address as $ep) {
                                        ?>
                                        <div class="after-add-k append-previous_address">
                                            <div class="panel-title col-lg-12">
                                                <h4 style="margin-left: -20px;">Previous Address</h4>
                                                <div style="/* line-height: 51px; */background-color: black;border: 2px;border-color: black;height: 1px;margin-bottom: 4px;margin-top: -7px; width: 785px; margin-left: -20px;"></div>
                                            </div>
                                            <input type="hidden" name="previous_address_id[]" value="<?php echo $ep['id'] ?>">
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="">Address</label>
                                                    <input type="text" name="previous_address[]" value="<?php echo $ep['previous_address'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">City</label>
                                                    <input type="text" name="previous_city[]" value="<?php echo $ep['previous_city'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="form-group col-lg-6">
                                                    <label for="">Postal Code</label>
                                                    <input type="text" name="privious_code[]" value="<?php echo $ep['privious_code'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">Date of Residence</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="date" class="form-control" name="priviou_date_residence_start[]" value="<?php echo $ep['priviou_date_residence_start'] ?>" placeholder="Form : " onchange="(!=''?' has-value':'')">
                                                        </div>
                                                        <div class="col-lg-6">

                                                            <input type="date" class="form-control" name="priviou_date_residence_end[]" value="<?php echo $ep['priviou_date_residence_end'] ?>" placeholder="To : " onchange="(!=''?' has-value':'')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group col-lg-6">
                                                    <label for="">State</label>
                                                    <input type="text" name="privious_state[]" value="<?php echo $ep['privious_state'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="">Country</label>
                                                    <input type="text" name="privious_country[]" value="<?php echo $ep['privious_country'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row select-multi">

                                                <div class="form-group col-lg-6">
                                                    <label for="">Are you a citizen of this country?</label>
                                                    <div style="margin-top: 15px;">
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" class="city-zin" id="inlineRadio95" value="1" name="privious_citizen0" <?php if($ep['privious_citizen'] == '1') echo 'checked=""';?>>
                                                            <label for="inlineRadio95"> Yes </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" class="city-zin" id="inlineRadio94" value="0" name="privious_citizen0" checked="">
                                                            <label for="inlineRadio94" <?php if($ep['privious_citizen'] == '0') echo 'checked=""';?>> No </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <?php
                                                if ($con == 0) {
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change">
                                                    <a class="btn btn-success add-k pull-right">+ Add More</a>
                                                  </div>
                                                </span>
                                            </div>
                                            <?php
                                                } else{
                                            ?>
                                            <div class="form-group row">
                                                <span class="pull-right">
                                                  <div class="col-sm-12 change"><a class="btn btn-danger remove"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>  <a class="btn btn-success add-k"><strong> + </strong> </a></div>
                                                </span>
                                            </div>
                                            <?php
                                                }
                                                $con++
                                            ?>
                                        </div>
                                        <?php
                                            }
                                        ?>

                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="button" class="btn btn-success btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset class="change-type type-4">

                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="emp_code">Employee Code</label>
                                                <input type="text" name="employee_code" value="<?php echo $emp['employee_code'] ?>" id="emp_code" class="form-control req" required=""  placeholder="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="e_designation">Designation</label>
                                                <input type="text" name="designation" value="<?php echo $emp['designation'] ?>" id="e_designation" class="form-control req" required=""  placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="employee_department">Department</label>
                                                <select class="form-control" name="employee_department">
                                                    <option value="">Select Department</option>
                                                    <?php
                                                        foreach ($departments as $department) {
                                                            if ($department['id'] ==  $emp['employee_department']) {
                                                                echo '<option value="'.$department['id'].'" selected>'.$department['name'].'</option>';
                                                            }
                                                            else{
                                                                echo '<option value="'.$department['id'].'">'.$department['name'].'</option>';
                                                            }
                                                         }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="employee_report">Report To</label>
                                                <select class="form-control" id="employee_report"  name="employee_report">
                                                    <option value="">Select Employee</option>
                                                    <option value="Ceo" <?php if($emp['employee_report'] == 'Ceo') echo 'selected' ?>>Ceo</option>
                                                    <?php
                                                        foreach ($employees as $employee) {
                                                            if ($employee['id'] ==  $emp['employee_report']) {
                                                                echo '<option value="'.$employee['id'].'" selected>'.$employee['employee_name'].'</option>';
                                                            }
                                                            else{
                                                                echo '<option value="'.$employee['id'].'">'.$employee['employee_name'].'</option>';
                                                            }
                                                         }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">House Rent Allowance</label>
                                                <input type="number" name="house_rent" id="" class="form-control" value="<?php echo $emp['house_rent'] ?>">
                                            </div> 
                                            <div class="form-group col-lg-6">
                                                <label for="">Medical Allowance</label>
                                                <input type="number" name="medical" id="" class="form-control" value="<?php echo $emp['medical'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                             <div class="form-group col-lg-6">
                                                <label for="">Conveyance Allowance</label>
                                                <input type="number" name="conveyance" id="" class="form-control" value="<?php echo $emp['conveyance'] ?>">
                                            </div> 
                                            <div class="form-group col-lg-6">
                                                <label for="">Utility Allowance</label>
                                                <input type="number" name="utility" id="" class="form-control" value="<?php echo $emp['utility'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="e_salary">Salary</label>
                                                <input type="text" name="salary" id="e_salary" value="<?php echo $emp['salary'] ?>" class="form-control req" required="">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">Job Shift</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineCheckbox90" name="job_shift" value="morning" <?php if($emp['job_shift'] == 'morning') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox90"> Morning </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineCheckbox92" name="job_shift" value="evening" <?php if($emp['job_shift'] == 'evening') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox92"> Evening </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio"  id="inlineCheckbox93" name="job_shift" value="night" <?php if($emp['job_shift'] == 'night') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox93"> Night </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                                 <div class="form-group col-lg-6">
                                                <label for="role"> Select Role</label>
                                                <select class="form-control" id="role" name="role">
                                                    <option value="">Select Role</option>
                                                    <option value="CM" <?php if($emp['role'] == 'CM') echo 'selected=""';?>>Client Manager</option>
                                                    <option value="TL" <?php if($emp['role'] == 'TL') echo 'selected=""';?>>Team Leader</option>
                                                    <option value="TM" <?php if($emp['role'] == 'TM') echo 'selected=""';?>>Team Member</option>

                                                </select>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="form-group col-lg-6">
                                                <label for="">Job Type</label>
                                                <div style="margin-top: 15px;">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio"  id="inlineCheckbox94" name="job_type" value="permanent" <?php if($emp['job_type'] == 'permanent') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox94"> Permanent </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineCheckbox95" name="job_type" value="contractual" <?php if($emp['job_type'] == 'contractual') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox95"> Contractual </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineCheckbox96" name="job_type" value="internship" <?php if($emp['job_type'] == 'internship') echo 'checked=""';?>>
                                                        <label for="inlineCheckbox96"> Internship </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label>Sick Leave</label>
                                                <input type="number" name="sick_leave" value="<?php echo $emp['sick_leave'] ?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Casual Leave</label>
                                                <input type="number" name="casual_leave" value="<?php echo $emp['casual_leave'] ?>" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Annual Leave</label>
                                                <input type="number" name="annual_leave" value="<?php echo $emp['annual_leave'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="button" class="btn btn-success btn-next submit-preview">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset class="change-type type-5">
                                        <div class="row">
                                        <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-top: -27px;margin-bottom: 14px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Personal Details</h4>
                                            </div>
                                        </div>


                                            <div class="col-lg-7">

                                                <div class="row">
                                                    <br>
                                                    <div class="col-lg-12">
                                                        <address>
                                                <strong style="font-weight: 600;">Full Name </strong> :
                                                <e class="full_name_value"></e><br>
                                            </address>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <address>
                                                     <strong style="font-weight: 600;">Father's Name </strong> :
                                               <e class="father_name_value"></e><br>
                                            </address>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <address>
                                                     <strong style="font-weight: 600;">Date of Birth </strong> :
                                               <e class="dob_value"></e><br>
                                            </address>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <address>
                                                     <strong style="font-weight: 600;">Maiden Surname </strong> :
                                               <e class="m_surname_value"></e><br>
                                            </address>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-left">

                                                <img src="<?php echo base_url().'/'.$emp['image'] ?>" class="img-responsive pull-left img-src" alt="" style="height: 115px;">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">ALSO KNOWN AS </strong> :
                                               <e class="aks_value"></e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6" style="margin-top: -39px;">
                                                        <address>
                                                     <strong style="font-weight: 600;">Previous Legal Name </strong> :
                                               <e class="p_l_n_value"></e><br>
                                            </address>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Gender </strong> :
                                               <e class="gender_value">Male</e><br>
                                            </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Mother’s Full Name </strong> :
                                               <e class="mother_name_value"></e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Place of Birth </strong> :
                                               <e class="pob_value"></e><br>
                                            </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Relationship Status </strong> :
                                               <e class="relationship_status_value">Single</e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">National Identification Number </strong> :
                                               <e class="n_i_n_value"></e><br>
                                            </address>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Passport Number </strong> :
                                               <e class="p_n_value"></e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Country of Passport Issuance </strong> :
                                               <e class="c_p_i_value"></e><br>
                                            </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">NTN </strong> :
                                               <e class="ntn_value"></e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Social Security Number </strong> :
                                               <e class="s_s_n_value"></e><br>
                                            </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Country of Citizenship </strong> :
                                               <e class="full_name_value"></e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Phone Number (Mobile) </strong> :
                                               <e class="p_number_value"></e><br>
                                            </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Phone Number (PTCL) </strong> :
                                               <e class="m_number_value"></e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Emergency Contact Name </strong> :
                                               <e class="e_c_name_value"></e><br>
                                            </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Emergency Contact Number </strong> :
                                               <e class="e_c_num_value"></e><br>
                                            </address>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <address>
                                                     <strong style="font-weight: 600;">Emergency Contact Address </strong> :
                                               <e class="e_c_a_value"></e><br>
                                            </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Education</h4>
                                            </div>
                                        </div>
                                        <div class="table-responsive ">

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Type of school</th>
                                                        <th>Name of School</th>
                                                        <th>Location, Address</th>
                                                        <th>Year Completed</th>
                                                        <th>Dgree, Majors</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="append-education">
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="table-responsive m-b-20">
                                        <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Employment history</h4>
                                            </div>
                                        </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Service in Army </strong> :
                                               <e class="army_service_value">No</e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Designation Date & year </strong> :
                                               <e class="d_d_y_value"></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Employment history</h4>
                                            </div>
                                        </div>


                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name Of employer</th>

                                                        <th>Designation</th>
                                                        <th>Supervisor</th>
                                                        <th>Department</th>
                                                        <th>Employee Code</th>
                                                        <th>Duration</th>
                                                        <th>Nature of Employment</th>
                                                        <th>Reason for Leaving</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="employment_history-append">
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive m-b-20">

                                              <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Other</h4>
                                            </div>
                                        </div>

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Means Of Transport </strong> :
                                               <e class="m_o_t_value"></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Driver's Licence Number </strong> :
                                               <e class="d_l_n_value"></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Expiration Date </strong> :
                                               <e class="exp_date_value"></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">State Of Issue </strong> :
                                               <e class="stae_issue_value"></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Ever been convicted of crime </strong> :
                                               <e class="crime_value">No</e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Detail </strong> :
                                               <e class="e_detail_value"></e><br>
                                            </address>
                                                </div>
                                            </div>
                                              <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Professional Reference</h4>
                                            </div>
                                        </div>


                                            <table class="table table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Designation</th>
                                                        <th>Company</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Address</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="professional_reference-append">

                                                </tbody>
                                            </table>
                                        </div>


                                            <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Current Address</h4>
                                            </div>
                                        </div>



                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Address </strong> :
                                               <e class="c_address_value"></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">City </strong> :
                                               <e class="c_city_value"></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Postal Code </strong> :
                                               <e class="c_post_code_value"></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Date of Residence </strong> :
                                               <e class="full_name_value"></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">State </strong> :
                                               <e class="c_state_value"></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Country </strong> :
                                               <e class="full_name_value"></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Previous Address</h4>
                                            </div>
                                        </div>
                                            <div class="table-responsive m-b-20">
                                            <table class="table table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th>Address</th>
                                                        <th>City</th>
                                                        <th>Postal Code</th>
                                                        <th>Date of Residence</th>
                                                        <th>State</th>
                                                        <th>Country</th>
                                                        <th>Are you a citizen of this country?</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="previous_address-append">
                                         
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive m-b-20">
                                            <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888; height: 39px;">
                                            <div class="panel-title">
                                                <h4>Employment Detail</h4>
                                            </div>
                                        </div>


                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Employee Code </strong> :
                                                       <e class="emp_code_value"></e><br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Designation </strong> :
                                                       <e class="e_designation_value"></e><br>
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Salary </strong> :
                                                       <e class="e_salary_value"></e><br>
                                                    </address>
                                                </div>

                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Job Shift </strong> :
                                                       <e class="job_shift_value">Part Time</e><br>
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                         <strong style="font-weight: 600;">Job Type </strong> :
                                                   <e class="job_type_value">Full Time</e><br>
                                                </address>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="submit" class="btn btn-success  but">Submit</button>
                                        </div>
                                        <ol style="list-style-type: decimal;" class="errorMessages"></ol>
                                    </fieldset>

                                </form>
                                </div>
                                <div class="col-lg-1"></div>
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
<!-- STRAT PAGE LABEL PLUGINS -->

<script type="text/javascript">
    $(document).ready(function() {
        $("body").on("click", ".add-kp", function() {
            var html = $(".after-add-kp").first().clone();
            //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
            $(html).find(".dele").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-kp"><strong> + </strong> </a>');
            $(".after-add-kp").last().after(html);
        });
        $("body").on("click", ".remove", function() {
            $(this).parents(".after-add-kp").remove();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("body").on("click", ".add-k", function() {
            var html = $(".after-add-k").first().clone();
            //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
            $(html).find(".del").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> " + ' <a class="btn btn-success add-k"><strong> + </strong> </a>');
            $(".after-add-k").last().after(html);
            var con = 0;
            $('.select-multi').each(function() {
                $(this).find('input.city-zin').attr('name', 'privious_citizen' + con)
                con++
            })
        });
        $("body").on("click", ".remove", function() {
            $(this).parents(".after-add-k").remove();
        });
        $('input').keyup(function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('input').not('input[type="radio"],input[type="checkbox"]').change(function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('select').change(function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('input[type="radio"]').click(function() {
            var id = $(this).attr('name')
            if($(this).val() == '1'){
                $('.' + id + '_value').text("Yes")
            }
            else if($(this).val() == '0'){
                $('.' + id + '_value').text("No")
            }
            else{
                $('.' + id + '_value').text($(this).val())
            }
        })
         $('input[type="checkbox"]').click(function() {
            var id = $(this).attr('name')
            if($(this).val() == '1'){
                $('.' + id + '_value').text("Yes")
            }
            else if($(this).val() == '0'){
                $('.' + id + '_value').text("No")
            }
            else{
                $('.' + id + '_value').text($(this).val())
            }
        })
    });
</script>

<script type="text/javascript">
    $("#profileImage").click(function(e) {
        $("#imageUpload").click();
    });

    function fasterPreview(uploader) {
        if (uploader.files && uploader.files[0]) {
            $('#profileImage').attr('src',
                window.URL.createObjectURL(uploader.files[0]));
            $('.img-src').attr('src',
                window.URL.createObjectURL(uploader.files[0]));
        }
    }

    $("#imageUpload").change(function() {
        fasterPreview(this);
    });
    $('.submit-preview').click(function() {

        $('input').not('input[type="radio"],input[type="checkbox"]').each(function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('select').each(function() {
            var id = $(this).attr('id')
            $('.' + id + '_value').text($(this).val())
        })
        $('input[type="radio"]').each(function() {
            var id = $(this).attr('name')
            if($(this).val() == '1'){
                $('.' + id + '_value').text("Yes")
            }
            else if($(this).val() == '0'){
                $('.' + id + '_value').text("No")
            }
            else{
                $('.' + id + '_value').text($(this).val())
            }
        })
         $('input[type="checkbox"]').each(function() {
            var id = $(this).attr('name')
            if($(this).val() == '1'){
                $('.' + id + '_value').text("Yes")
            }
            else if($(this).val() == '0'){
                $('.' + id + '_value').text("No")
            }
            else{
                $('.' + id + '_value').text($(this).val())
            }
        })


        $('.append-education').empty()
        $('.education-append').each(function() {
            var select = $(this).find('select').val()
            $('.append-education').append('<tr><td>'+select+'</td>');
            var length = $(this).find('input').length - 1
            var con = 0
            $(this).find('input').not('input[type="hidden"]').each(function(e) {
                var select = $(this).val()
                $('.append-education tr').last().append('<td>'+select+'</td>');
                if(e == length){
                    con = 1
                }
            })
            var myVar = setInterval(function(){
                if(con == 1){
                    clearInterval(myVar);
                    $('.append-education').append('</tr>');
                }
            }, 300);

        })
        $('.employment_history-append').empty()
        $('.append-employment_history').each(function() {
            $('.employment_history-append').append('<tr>');
            var length = $(this).find('input[type="date"]').length - 1
            $(this).find('input').not('input[type="hidden"]').each(function(e) {
                if($(this).attr('type') == 'date'){
                    $('.employment_history-append tr').last().append('<td></td>');
                }
                else{
                    var select = $(this).val()
                    $('.employment_history-append tr').last().append('<td>'+select+'</td>');
                }

                if(e == length){
                    con = 1
                }
            })
            var date_text = '';
            $(this).find('input[type="date"]').each(function(e) {
                if(e != length){
                    date_text = date_text + $(this).val()
                }
                else{
                    date_text = date_text +' to '+ $(this).val()
                    $('.employment_history-append tr:last-child td:nth-child(4)').text(date_text)
                    $('.employment_history-append tr:last-child td:nth-child(5)').remove()
                }
            })
            $('.employment_history-append').append('</tr>');
        })
        $('.professional_reference-append').empty()
        $('.append-professional_reference').each(function() {
            $('.professional_reference-append').append('<tr>');
            $(this).find('input').not('input[type="hidden"]').each(function(e) {
                var select = $(this).val()
                $('.professional_reference-append tr').last().append('<td>'+select+'</td>');
                if(e == length){
                    con = 1
                }
            })
            $('.professional_reference-append').append('</tr>');
        })
        $('.previous_address-append').empty()
        $('.append-previous_address').each(function() {
            $('.previous_address-append').append('<tr>');
            var length = $(this).find('input[type="date"]').length - 1
            $(this).find('input').not('input[type="hidden"]').each(function(e) {
                var select = $(this).val()
                if(select == '1'){
                    select = "Yes";
                }
                else if(select == '0'){
                    select = "No";
                }
                if($(this).attr('type') == 'radio'){
                    if($(this).is(':checked')){
                        $('.previous_address-append tr').last().append('<td>'+select+'</td>');
                    }
                }
                else if($(this).attr('type') == 'date'){
                    $('.previous_address-append tr').last().append('<td></td>');
                }
                else{
                    $('.previous_address-append tr').last().append('<td>'+select+'</td>');
                }

                if(e == length){
                    con = 1
                }
            })
            var date_text = '';
            $(this).find('input[type="date"]').each(function(e) {
                if(e != length){
                    date_text = date_text + $(this).val()
                }
                else{
                    date_text = date_text +' to '+ $(this).val()
                    $('.previous_address-append tr:last-child td:nth-child(4)').text(date_text)
                    $('.previous_address-append tr:last-child td:nth-child(5)').remove()
                }
            })
            $('.previous_address-append').append('</tr>');
        })
    })
</script>
<script type="text/javascript">

  $('.f1-step-icon').click(function() {
        var id = $(this).attr('data-id')
        $('.change-type').hide();
        $('.type-' + id).show();
        $('.f1-step').removeClass('active');
        $(this).parent().addClass('active');
        var width = $(this).parent().width()
        var left = $(this).parent().position().left
        var total = parseInt(width) + parseInt(left)
        $('.f1-progress-line').width(total)
    })
 </script>
 <style type="text/css">
.errorMessages {
    display: none;
    list-style-type: disc;
    margin: 0 10px 15px 10px;
    padding: 8px 35px 8px 30px;
    color: #B94A48;
    margin-top: 11px !important;
    background-color: #F2DEDE;
    border: 2px solid #EED3D7;
    border-radius: 4px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.errorMessages span {
    font-weight: bold;
}
</style>
<script type="text/javascript">
$(function() {
    var createAllErrors = function() {
        var form = $(this);
        var errorList = $('ol.errorMessages', form);
        
        var showAllErrorMessages = function() {
            errorList.empty();
            
            //Find all invalid fields within the form.
            form.find('.req').each(function(index, node) {
                if ($(this).is(":invalid")) {
                    var label = $('label[for=' + node.id + ']');
                    //Opera incorrectly does not fill the validationMessage property.
                    var message = node.validationMessage || 'Invalid value.';
                    errorList
                        .show()
                        .append('<li><span>' + label.html() + ' : ' + '</span> ' + message + '</li>');
                    //console.log("Invalid value");
                }
                //Find the field's corresponding label
                
            });
        };
        
        $('input[type=submit], .but', form).on('click', showAllErrorMessages);
        $('input[type=text]', form).on('keypress', function(event) {
            //keyCode 13 is Enter
            if (event.keyCode == 13) {
                showAllErrorMessages();
            }
        });
    };
    
    $('form').each(createAllErrors);
});
</script>
<script type="text/javascript">
    $('body').on('change', '[name="in_progress[]"]', function() {
    //$('[name="in_progress[]"]').change(function() {
        var val = $(this).val();
        if(val == 'no'){
            $(this).parent().parent().parent().find('[name="school_year_completed[]"]').parent().show()
        }
        else{
            $(this).parent().parent().parent().find('[name="school_year_completed[]"]').parent().hide()
        }
    })
    $('body').on('change', '[name="employment_history"]', function() {
    //$('[name="employment_history"]').change(function() {
        set = 0
        $('[name="employment_history"]').each(function() {
            if($(this).is(':checked')){
                if($(this).val() == '1'){
                    set = 1
                }
            }
        })
        if(set == 1){
            $('.append-employment_history').show()
        }
        else{
            $('.append-employment_history').hide()
        }
    })
    $('body').on('change', '[name="reference_history"]', function() {
    //$('[name="reference_history"]').change(function() {
        set = 0
        $('[name="reference_history"]').each(function() {
            if($(this).is(':checked')){
                if($(this).val() == '1'){
                    set = 1
                }
            }
        })
        if(set == 1){
            $('.append-professional_reference').show()
        }
        else{
            $('.append-professional_reference').hide()
        }
    })
</script>
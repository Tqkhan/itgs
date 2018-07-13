<?php
    $emp = $employee[0];
?>
<style type="text/css">
    input[type="date"]:not(.has-value):before {
        color: lightgray;
        content: attr(placeholder);
    }
</style>
<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-note"></i>
            </div>
            <div class=header-title>
                <h1>Employee Preview</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><i class=pe-7s-home></i> Home</li>
                    <li class="active">Employee Preview</li>

                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Personal Details</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-body">
                                    <div class="row">

                                        <div class="col-lg-7">

                                            <div class="row">
                                                <br>
                                                <div class="col-lg-12">
                                                    <address>
                                                <strong style="font-weight: 600;">Full Name </strong> :
                                                <e class="full_name_value"><?php echo $emp['full_name'] ?></e><br>
                                            </address>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <address>
                                                     <strong style="font-weight: 600;">Father's Name </strong> :
                                               <e class="father_name_value"><?php echo $emp['father_name'] ?></e><br>
                                            </address>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <address>
                                                     <strong style="font-weight: 600;">Date of Birth </strong> :
                                               <e class="dob_value"><?php echo $emp['dob'] ?></e><br>
                                            </address>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <address>
                                                     <strong style="font-weight: 600;">Maiden Surname </strong> :
                                               <e class="m_surname_value"><?php echo $emp['surename'] ?></e><br>
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
                                               <e class="aks_value"><?php echo $emp['aka'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6" style="margin-top: -39px;">
                                                    <address>
                                                     <strong style="font-weight: 600;">Previous Legal Name </strong> :
                                               <e class="p_l_n_value"><?php echo $emp['privious_legal_name'] ?></e><br>
                                            </address>
                                                </div>

                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Gender </strong> :
                                               <e class="gender_value"><?php echo $emp['gender'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Mother’s Full Name </strong> :
                                               <e class="mother_name_value"><?php echo $emp['mother_name'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Place of Birth </strong> :
                                               <e class="pob_value"><?php echo $emp['pob'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Relationship Status </strong> :
                                               <e class="relationship_status_value"><?php echo $emp['relationship_status'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">National Identification Number </strong> :
                                               <e class="n_i_n_value"><?php echo $emp['national_identification_number'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Passport Number </strong> :
                                               <e class="p_n_value"><?php echo $emp['passport_name'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Country of Passport Issuance </strong> :
                                               <e class="c_p_i_value"><?php echo $emp['country_of_passport_issuance'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">NTN </strong> :
                                               <e class="ntn_value"><?php echo $emp['ntn'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Social Security Number </strong> :
                                               <e class="s_s_n_value"><?php echo $emp['social_security_number'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Country of Citizenship </strong> :
                                               <e class="full_name_value"><?php echo $emp['country_of_citizenship'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Phone Number (Mobile) </strong> :
                                               <e class="p_number_value"><?php echo $emp['mobile'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Phone Number (PTCL) </strong> :
                                               <e class="m_number_value"><?php echo $emp['ptcl'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Emergency Contact Name </strong> :
                                               <e class="e_c_name_value"><?php echo $emp['emergency_contact_name'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Emergency Contact Number </strong> :
                                               <e class="e_c_num_value"><?php echo $emp['emergency_contact_number'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Emergency Contact Address </strong> :
                                               <e class="e_c_a_value"><?php echo $emp['emergency_contact_address'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
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
                                                <?php
                                                    foreach ($employee_educations as $ed) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $ed['school_type'] ?></td>
                                                    <td><?php echo $ed['name_of_school'] ?></td>
                                                    <td><?php echo $ed['school_location'] ?></td>
                                                    <td><?php echo $ed['school_year_completed'] ?></td>
                                                    <td><?php echo $ed['school_dgree'] ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive m-b-20">
                                        <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                            <div class="panel-title">
                                                <h4>Employment history</h4>
                                            </div>
                                        </div>
                                        <?php
                                            if ($emp['army_service'] == '1') {
                                                $army = 'Yes';
                                            }
                                            else{
                                                $army = 'No';
                                            }
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">Service in Army </strong> :
                                               <e class="army_service_value"><?php echo $army ?></e><br>
                                            </address>
                                            </div>
                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">Designation Date & year </strong> :
                                               <e class="d_d_y_value"><?php echo $emp['army_des_date'] ?></e><br>
                                            </address>
                                            </div>
                                        </div>
                                        <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
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
                                            <tbody>
                                                <?php
                                                    foreach ($employee_employment_history as $eh) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $eh['name_of_employer'] ?></td>
                                                    <td><?php echo $eh['employer_designation'] ?></td>
                                                    <td><?php echo $eh['employer_supervisor'] ?></td>
                                                    <td><?php echo $eh['employer_department'] ?></td>
                                                    <td><?php echo $eh['employer_code'] ?></td>
                                                    <td><?php echo $eh['employer_duration_start'] ?> to <?php echo $eh['employer_duration_end'] ?></td>
                                                    <td><?php echo $eh['nature_of_employment'] ?></td>
                                                    <td><?php echo $eh['reason_for_leaving'] ?></td>

                                                </tr>
                                                <?php 
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive m-b-20">

                                        <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                            <div class="panel-title">
                                                <h4>Other</h4>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">Means Of Transport </strong> :
                                               <e class="m_o_t_value"><?php echo $emp['means_of_transport'] ?></e><br>
                                            </address>
                                            </div>
                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">Driver's Licence Number </strong> :
                                               <e class="d_l_n_value"><?php echo $emp['driver_licence_number'] ?></e><br>
                                            </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">Expiration Date </strong> :
                                               <e class="exp_date_value"><?php echo $emp['expiration_date'] ?></e><br>
                                            </address>
                                            </div>
                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">State Of Issue </strong> :
                                               <e class="stae_issue_value"><?php echo $emp['state_of_issue'] ?></e><br>
                                            </address>
                                            </div>
                                        </div>
                                        <?php
                                            if ($emp['crime'] == '1') {
                                                $crime = 'Yes';
                                            }
                                            else{
                                                $crime = 'No';
                                            }
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">Ever been convicted of crime </strong> :
                                               <e class="crime_value"><?php echo $crime ?></e><br>
                                            </address>
                                            </div>
                                            <div class="col-lg-6">
                                                <address>
                                                     <strong style="font-weight: 600;">Detail </strong> :
                                               <e class="e_detail_value"><?php echo $emp['other_detail'] ?></e><br>
                                            </address>
                                            </div>
                                        </div>
                                        <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                            <div class="panel-title">
                                                <h4>Professional Reference</h4>
                                            </div>
                                        </div>

                                        <table class="table table-striped">
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
                                            <tbody>
                                                <?php 
                                                    foreach ($employee_reference as $er) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $er['ref_name'] ?></td>
                                                    <td><?php echo $er['ref_designation'] ?></td>
                                                    <td><?php echo $er['ref_company'] ?></td>
                                                    <td><?php echo $er['ref_phone'] ?></td>
                                                    <td><?php echo $er['ref_email'] ?></td>
                                                    <td><?php echo $er['ref_address'] ?></td>

                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive m-b-20">
                                        <div class="table-responsive m-b-20">
                                            <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                                <div class="panel-title">
                                                    <h4>Current Address</h4>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Address </strong> :
                                               <e class="c_address_value"><?php echo $emp['current_address'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">City </strong> :
                                               <e class="c_city_value"><?php echo $emp['current_city'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Postal Code </strong> :
                                               <e class="c_post_code_value"><?php echo $emp['current_postal_code'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Date of Residence </strong> :
                                               <e class="full_name_value"><?php echo $emp['current_date_residence_start'] ?> to <?php echo $emp['current_date_residence_end'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">State </strong> :
                                               <e class="c_state_value"><?php echo $emp['current_state'] ?></e><br>
                                            </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                     <strong style="font-weight: 600;">Country </strong> :
                                               <e class="full_name_value"><?php echo $emp['current_country'] ?></e><br>
                                            </address>
                                                </div>
                                            </div>
                                            <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                                <div class="panel-title">
                                                    <h4>Previous Address</h4>
                                                </div>
                                            </div>

                                            <table class="table table-striped">
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
                                                <tbody>
                                                    <?php
                                                        foreach ($employee_previous_address as $ep) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $ep['previous_address'] ?></td>
                                                        <td><?php echo $ep['previous_city'] ?></td>
                                                        <td><?php echo $ep['privious_code'] ?></td>
                                                        <td><?php echo $ep['priviou_date_residence_start'] ?> to <?php echo $ep['priviou_date_residence_end'] ?></td>
                                                        <td><?php echo $ep['privious_state'] ?></td>
                                                        <td><?php echo $ep['privious_country'] ?> </td>
                                                        <?php
                                                            if ($ep['privious_citizen'] == '1') {
                                                                $crime = 'Yes';
                                                            }
                                                            else{
                                                                $crime = 'No';
                                                            }
                                                        ?>
                                                        <td><?php echo $crime ?></td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive m-b-20">
                                            <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                                <div class="panel-title">
                                                    <h4>Employment Detail</h4>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Employee Code </strong> :
                                                       <e class="emp_code_value"><?php echo $emp['employee_code'] ?></e><br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Designation </strong> :
                                                       <e class="e_designation_value"><?php echo $emp['designation'] ?></e><br>
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Salary </strong> :
                                                       <e class="e_salary_value"><?php echo $emp['salary'] ?></e><br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                             <strong style="font-weight: 600;">Job Shift </strong> :
                                                       <e class="job_shift_value"><?php echo $emp['job_shift'] ?></e><br>
                                                    </address>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                         <strong style="font-weight: 600;">Job Type </strong> :
                                                   <e class="job_type_value"><?php echo $emp['job_type'] ?></e><br>
                                                </address>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main content -->

</div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        var selector = function(dateStr) {
            var d1 = $('.fromdate').datepicker('getDate');
            var d2 = $('.todate').datepicker('getDate');
            var diff = 0;
            if (d1 && d2) {
                diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000); // ms per day
            }
            $('.calculated').val(diff);
        }
        $(".fromdate").datepicker({
            minDate: new Date(2017, 10 - 18, 8),
            maxDate: new Date(2050, 12 - 1, 28)
        });
        $('.todate').datepicker({
            minDate: new Date(2017, 10 - 18, 9),
            maxDate: new Date(2050, 12 - 1, 28)
        });
        $('.fromdate,.todate').change(selector)
    });
</script>
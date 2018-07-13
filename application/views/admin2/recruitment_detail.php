<style type="text/css">
    .profile-pic {
        position: relative;
    }
    
    .profile-pic img {
        height: 200px;
        border-radius: 50%;
    }
    
    .profile-pic span {
        position: absolute;
        text-align: center;
        top: 170px;
        left: 0;
        right: 0;
        font-size: 0.9em;
        padding: 5px 0;
        margin: 0 auto;
        width: 200px;
        border-radius: 24px;
        text-transform: uppercase;
        font-weight: 900;
    }
    
    .profile-pic span.active {
        background: #4CAF50;
        color: #fff;
    }
    
    .profile-pic span.vacation {
        background: #FFEB3B;
        color: #141311;
    }
    
    .profile .social-link {
        margin-top: 30px;
    }
    
    .profile .social-link li {
        display: inline-block;
    }
    
    .profile .social-link li a {
        display: block;
        font-size: 0.9em;
        height: 32px;
        width: 32px;
        color: #999;
        border-radius: 50%;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        transition: 0.5s all;
    }
    
    .profile .social-link li a:hover {
        background: rgba(0, 0, 0, 0.1);
    }
    
    .profile .social-link li:last-child:after {
        content: "";
    }
    
    .profile-title h2 {
        font-weight: 900;
        text-transform: uppercase;
        font-size: 2em;
        color: #141311;
    }
    
    .profile-title p {
        text-transform: uppercase;
        font-weight: 300;
    }
    
    .profile-title .more-title li {
        display: inline-block;
        color: #999;
    }
    
    .profile-title .more-title li:after {
        content: "\f111";
        position: relative;
        font-family: fontAwesome;
        font-size: 6px;
        margin: 0 5px;
        top: -3px;
    }
    
    .profile-title .more-title li:last-child:after {
        content: "";
    }
    
    .profile-desc {
        color: #999;
        max-width: 620px;
        margin-top: 10px;
        text-align: left;
        font-size: 0.9em;
    }
    
    .profile-desc li {
        margin-bottom: 5px;
    }
    
    .profile-desc li:last-child {
        margin-bottom: 0;
    }
    
    .profile-desc-title {
        display: inline-block;
        color: #777;
        width: 140px;
        font-weight: 900;
        text-transform: uppercase;
    }
    
    .profile-desc-det {
        display: inline-block;
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
                <h1>Show Recruitment Form</h1>
                <br>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Show Recruitment Form</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="row" style="margin-right: 0px !important; ">
                            <div class="col-md-12">
                                <div class="profile">
                                    <div class="row" style="height: 210px;">
                                        <div class="col-md-6">
                                            <div class="profile-title">
                                                 <h2>Persnol Info</h2>
                                                <h2></h2>
                                                
                                                <ul class="profile-desc">
                                                    <li>
                                                        <div class="profile-desc-title">Name</div>
                                                        <div class="profile-desc-det"><?php echo $recruitment[0]['first_name'] ?></div>
                                                    </li>
                                                    <li>
                                                        <div class="profile-desc-title">Father's Name</div>
                                                        <div class="profile-desc-det"><?php echo $recruitment[0]['father_name'] ?></div>
                                                    </li>
                                                    <li>
                                                        <div class="profile-desc-title">Phone</div>
                                                        <div class="profile-desc-det"><?php echo $recruitment[0]['phone'] ?></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profile-title">
                                                 <h2>Other</h2>
                                                <h2></h2>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <ul class="profile-desc">
                                                        <li>
                                                            <div class="profile-desc-title">POSITION NAME</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['position_name'] ?></div>
                                                        </li>
                                                        <li>
                                                        <div class="profile-desc-title">OTHER</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['other'] ?></div>
                                                        </li>
                                                    </ul>
                                                        
                                                      
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <ul class="profile-desc">
                                                    <li>
                                                        <div class="profile-desc-title">Job Code</div>
                                                        <div class="profile-desc-det"><?php echo $recruitment[0]['job_code'] ?></div>
                                                    </li>
                                                    
                                                    </ul>
                                                        
                                                      
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <ul class="profile-desc">
                                                        <li>
                                                            <div class="profile-desc-title" style="width: 189px;">Current Salary In word</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['current_salary_word'] ?></div>
                                                        </li>
                                                        <li>
                                                            <div class="profile-desc-title" style="width: 200px;">Current Salary In numbers</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['current_salary_number'] ?></div>
                                                        </li>

                                                    </ul>
                                                        
                                                      
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <ul class="profile-desc">
                                                        <li>
                                                            <div class="profile-desc-title" style="width: 189px;">Expected Salary In word</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['expected_salary_word'] ?></div>
                                                        </li>
                                                        <li>
                                                            <div class="profile-desc-title" style="width: 208px;">Expected Salary In numbers</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['expected_salary_number'] ?></div>
                                                        </li>

                                                    </ul>
                                                        
                                                      
                                                    </div>
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <ul class="profile-desc">
                                                        <li>
                                                            <div class="profile-desc-title" style="width: 189px;">Intrests</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['intrests'] ?></div>
                                                        </li>
                                                        <li>
                                                            <div class="profile-desc-title" style="width: 189px;">Skills</div>
                                                            <div class="profile-desc-det"><?php echo $recruitment[0]['skills'] ?></div>
                                                        </li>

                                                    </ul>
                                                        
                                                      
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
        <div class="row">
            <div class="col-sm-12 lobipanel-parent-sortable ">
                <div class="panel panel-bd ">
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4>Qualification</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTableExample1_wrapper">
                                <table id="" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" aria-describedby="dataTableExample1_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 139px;">Qualification</th>
                                            <th style="width: 139px;">Degree</th>
                                            <th style="width: 139px;">Start Date</th>
                                            <th style="width: 139px;">End Date</th>
                                            <th style="width: 139px;">Grade/CGPA</th>
                                            <th style="width: 139px;">Institution</th>
                                            <th style="width: 139px;">Award Year </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($recruitment_qualifications as $qualification) {
                                        ?>
                                        <tr role="row" class="odd">
                                            <td style="width: 139px;"><?php echo $qualification['qualification'] ?></td>
                                            <td style="width: 139px;"><?php echo $qualification['title'] ?></td>
                                            <td style="width: 139px;"><?php echo $qualification['start_date'] ?></td>
                                            <td style="width: 139px;"><?php echo $qualification['end_date'] ?></td>
                                            <td style="width: 139px;"><?php echo $qualification['grade_cgpa'] ?></td>
                                            <td style="width: 139px;"><?php echo $qualification['institution'] ?></td>
                                            <td style="width: 139px;"><?php echo $qualification['award_year'] ?></td>
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
        <div class="row">
            <div class="col-sm-12 lobipanel-parent-sortable ">
                <div class="panel panel-bd ">
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4>Past Experience</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTableExample1_wrapper">
                                <table id="" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid" aria-describedby="dataTableExample1_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 139px;">Experience period</th>
                                            <th style="width: 139px;">Company Name</th>
                                            <th style="width: 139px;">Joining date </th>
                                            <th style="width: 139px;">Other</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($recruitment_experiences as $experience) {
                                        ?>
                                        <tr role="row" class="odd">
                                            <td style="width: 139px;"><?php echo $experience['experience_period'] ?></td>
                                            <td style="width: 139px;"><?php echo $experience['company_name'] ?></td>
                                            <td style="width: 139px;"><?php echo $experience['joining_date'] ?></td>
                                            <td style="width: 139px;"><?php echo $experience['other'] ?></td>

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
        <?php 
            if (!empty($per_interview)) {
        ?>
        <div class="row">
            <div class="col-sm-12 lobipanel-parent-sortable ">
                <div class="panel panel-bd ">
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4>PRE INTERVIEW</h4>
                        </div>
                    </div>
                </div>
                <?php
                    foreach ($per_interview as $pre) {
                ?>
                <div class="panel panel-bd ">
                    
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Last Degree </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['degree'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                    <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Total Work Experience</label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['experience'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Medical Limitations </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['medical'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Email & Contact Details </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['email'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Current Company Name </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['company'] ?></p>
                                </div>
                            </div>
                            <div class="row"> 
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Designation </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['designation'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Major Responsibilities and tasks </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['responsibilities'] ?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Current Salary Package </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['current_salary'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Expected Salary  </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['expected_salary'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  How did you know about us   </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['source'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Define yourself in one word   </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['yourself'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Strengths -Any 3   </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['strengths'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Weakness -Any 3   </label>
                                <div class="col-sm-5">
                                    <p><?php echo $pre['weakness'] ?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <?php 
            }
        ?>
        <?php 
            if (!empty($call_interview)) {
        ?>
        <div class="row">
            <div class="col-sm-12 lobipanel-parent-sortable ">
                <div class="panel panel-bd ">
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4>TELEPHONE INTERVIEW </h4>
                        </div>
                    </div>
                </div>
                <?php
                    foreach ($call_interview as $call) {
                ?>
                <div class="panel panel-bd ">

                    <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Tell something about yourself </label>
                                <div class="col-sm-5">
                                    <p><?php echo $call['yourself'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Briefly describe your employment experience  </label>
                                <div class="col-sm-5">
                                    <p><?php echo $call['employment_experience'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">Why are you seeking a new position  </label>
                                <div class="col-sm-5">
                                    <p><?php echo $call['new_position'] ?></p>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Current Salary & Expected Salary  </label>
                                <div class="col-sm-5">
                                    <p><?php echo $call['salary'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  Remarks  </label>
                                <div class="col-sm-5">
                                    <p><?php echo $call['remarks'] ?></p>
                                </div>
                            </div>
                            <div class="row"> 
                                <label for="example-datetime-local-input" class="col-sm-7 col-form-label">  How would you describe your relationship with your current reporting manager  </label>
                                <div class="col-sm-5">
                                    <p><?php echo $call['relationship_manager'] ?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
        <?php 
            }
        ?>
    </div>
</div>
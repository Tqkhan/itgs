<style type="text/css">
    .tab {
        border-collapse: collapse;
    }

    .col {
        border: 1px gray solid;
        padding: 4px;
        width: 5em;
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
                <h1>Individual Background Report</h1>

                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Individual Background Report</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <?php if (!empty($back)) { ?>
                            <div class="panel panel-default panel panel-bd">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Individual Background Screening Reports</a>
                                    </h4>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <?php foreach ($back as $ba) { ?>
                                            <table class="table table-bordered table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>Reference Number : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['reference_number'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date Requested : </td>
                                                        <td>
                                                            <input type="text" name="" value="<?php echo $ba['request_date'] ?>" class="form-control" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Reporting Date : </td>
                                                        <td>
                                                            <input type="text" name="" value="<?php echo $ba['report_date'] ?>" class="form-control" readonly="">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['name'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subject : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['subject'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['address'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father/Husband Name : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['father_husband_name'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Reference Number : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['mother_name'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mother Name : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['reference_number'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Birth : </td>
                                                        <td>
                                                            <input type="date" name="" class="form-control" readonly="" value="<?php echo $ba['date_of_birth'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Place of Birth : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['place_of_birth'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Passport Number : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['passport_number'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>National ID Number (CNIC#) : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['cnic'] ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>National Tax Number (NTN) : </td>
                                                        <td>
                                                            <input type="text" name="" class="form-control" readonly="" value="<?php echo $ba['ntn'] ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <?php } ?>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                        <div class="row download-table" style="display: none;">
                                            <center>
                                                <h4>Individual Background Screening Reports</h4>
                                            </center>
                                            <?php foreach ($back as $ba) { ?>
                                            <center>
                                                <div class="WordSection1">
                                                    <table class="table table-bordered table-striped table-hover tab">
                                                        <tbody>
                                                            <tr>
                                                                <td class="col">Reference Number : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['reference_number'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Date Requested : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['request_date'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Reporting Date : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['report_date'] ?>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td class="col">Name : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['name'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Subject : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['subject'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Address : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['address'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Father/Husband Name : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['father_husband_name'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Reference Number : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['mother_name'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Mother Name : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['reference_number'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Date of Birth : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['date_of_birth'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Place of Birth : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['place_of_birth'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">Passport Number : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['passport_number'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">National ID Number (CNIC#) : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['cnic'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="col">National Tax Number (NTN) : </td>
                                                                <td class="col">
                                                                    <?php echo $ba['ntn'] ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br><br>
                                                </div>
                                            </center>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php
                                $key = array_search($_SESSION['id'], array_column($team_lead, 'team_lead_id'));
                                if (array_key_exists($key,$team_lead) || $_SESSION['role'] == 'TM' && $_SESSION['role'] != 'vendor') {
                            ?>
                                <?php if (!empty($customized)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Custimized Report</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse after-add-more">
                                        <div class="panel-body">
                                            <?php 
                                                foreach ($customized as $cus) {
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $cus['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $cus['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Remarks : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $cus['remarks'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Attechment : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $cus['contact_detail']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>uploads/attachment/<?php echo $cus['contact_detail'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } ?>
                                            <?php 
                                                foreach ($customized as $cus) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $cus['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Custimized Report</h4>
                                                </center>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover tab">
                                                            <tbody class="tab">
                                                                <tr>
                                                                    <td class="col">Remarks : </td>
                                                                    <td class="col">
                                                                        <?php echo $cus['remarks'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col">Attechment : </td>
                                                                    <td class="col">
                                                                        <a download href="<?php echo site_url() ?>uploads/attachment/<?php echo $cus['contact_detail'] ?>">View Attechment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br><br>
                                                    </div>
                                                </center>
                                            </div>
                                            <?php } } ?>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>

                                    </div>
                                </div>
                                <?php } ?>
                                <?php if (!empty($education)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Education | Verification Results </a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php 
                                                foreach ($education as $edu) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $edu['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name of Institute/University/College : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['name_of_ia'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address of Institute/University/College : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['address_of_ia'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact Number of Institute/University/College : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['contact_of_a'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type of Degree : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['degree'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dates Attended : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['date_attended'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date Certificate Received : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['date_certificate'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Student ID : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['student_id'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name Of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Designation Of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['designation_verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact Detail Of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['contact_verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Verification : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $edu['date_verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence of Verification : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $edu['evidence']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $edu['evidence'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php if (!empty($edu['keys'])) { ?>
                                            <div class="table-responsive m-b-20">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Candidate Claims</th>
                                                            <th>Verification Result</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($edu['keys'] as $key) {?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $key['edu_key'] ?> : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $key['value1'] ?>" class="form-control" readonly="">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $key['value1'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } } ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Education | Verification Results</h4>
                                                </center>
                                                <?php 
                                                    foreach ($education as $edu) {
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $edu['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) { 
                                                ?>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover tab">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name of Institute/University/College : </td>
                                                                    <td>
                                                                        <?php echo $edu['name_of_ia'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address of Institute/University/College : </td>
                                                                    <td>
                                                                        <?php echo $edu['address_of_ia'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Number of Institute/University/College : </td>
                                                                    <td>
                                                                        <?php echo $edu['contact_of_a'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type of Degree : </td>
                                                                    <td>
                                                                        <?php echo $edu['degree'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dates Attended : </td>
                                                                    <td>
                                                                        <?php echo $edu['date_attended'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date Certificate Received : </td>
                                                                    <td>
                                                                        <?php echo $edu['date_certificate'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Student ID : </td>
                                                                    <td>
                                                                        <?php echo $edu['student_id'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name Of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $edu['verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Designation Of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $edu['designation_verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Detail Of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $edu['contact_verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date of Verification : </td>
                                                                    <td>
                                                                        <?php echo $edu['date_verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Evidence of Verification : </td>
                                                                    <td>
                                                                        <?php 
                                                            $file = explode(',', $edu['evidence']);
                                                            for ($i=0; $i < sizeof($file); $i++) { 
                                                        ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                        <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $edu['evidence'] ?>">View Attechment</a> -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <?php if (!empty($edu['keys'])) { ?>
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Candidate Claims</th>
                                                                    <th>Verification Result</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($edu['keys'] as $key) {?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $key['edu_key'] ?> : </td>
                                                                    <td>
                                                                        <?php echo $key['value1'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $key['value1'] ?>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php } ?>
                                                </center>
                                                <?php } } ?>
                                            </div>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (!empty($nadra)) {?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Nadra / National I.D Verification</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php 
                                                foreach ($nadra as $na) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $na['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Father Name : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mother Name : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>CNIC Number/ Passport No : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nationality : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Religion : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Present Address : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Permanent Address : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date Of Birth : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Plase Of Birth : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Country of Stay : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $na['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $na['evidence']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $na['evidence'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Nadra / National I.D Verification</h4>
                                                </center>
                                                <?php 
                                                    foreach ($nadra as $na) { 
                                                        $set = 1;
                                                        if ($_SESSION['role'] == 'TM' && $na['member_id'] != $_SESSION['id']) {
                                                            $set = 0;
                                                        }
                                                        if ($set == 1) {
                                                ?>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Father Name : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mother Name : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>CNIC Number/ Passport No : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Nationality : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Religion : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Present Address : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Permanent Address : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date Of Birth : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Plase Of Birth : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Country of Stay : </td>
                                                                    <td>
                                                                        <?php echo $na['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Evidence : </td>
                                                                    <td>
                                                                        <?php 
                                                                $file = explode(',', $na['evidence']);
                                                                for ($i=0; $i < sizeof($file); $i++) { 
                                                            ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                        <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $na['evidence'] ?>">View Attechment</a> -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </center>
                                                <?php } } ?>
                                            </div>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (!empty($fbr)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Federal Board Of Revenue</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php 
                                                foreach ($fbr as $f) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $f['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $f['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Category : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['category'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>National Tax Number : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['ntn'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>CNIC Number : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['cnic'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Principle Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['principle_activity'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Business Nature : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['business_nature'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Registered for Income tax : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['registered_for_income_tax'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Income Tax Office : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php $f['income_tax_office'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $f['evidence']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $f['evidence'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Federal Board Of Revenue</h4>
                                                </center>
                                                <?php 
                                                    foreach ($fbr as $f) { 
                                                        $set = 1;
                                                        if ($_SESSION['role'] == 'TM' && $f['member_id'] != $_SESSION['id']) {
                                                            $set = 0;
                                                        }
                                                        if ($set == 1) {
                                                ?>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name : </td>
                                                                    <td>
                                                                        <?php $f['name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Category : </td>
                                                                    <td>
                                                                        <?php $f['category'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>National Tax Number : </td>
                                                                    <td>
                                                                        <?php $f['ntn'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>CNIC Number : </td>
                                                                    <td>
                                                                        <?php $f['cnic'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Principle Activity : </td>
                                                                    <td>
                                                                        <?php $f['principle_activity'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Business Nature : </td>
                                                                    <td>
                                                                        <?php $f['business_nature'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Registered for Income tax : </td>
                                                                    <td>
                                                                        <?php $f['registered_for_income_tax'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Income Tax Office : </td>
                                                                    <td>
                                                                        <?php $f['income_tax_office'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Evidence : </td>
                                                                    <td>
                                                                        <?php 
                                                                $file = explode(',', $f['evidence']);
                                                                for ($i=0; $i < sizeof($file); $i++) { 
                                                            ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                        <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $f['evidence'] ?>">View Attechment</a> -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </center>
                                                <?php } } ?>
                                            </div>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (!empty($regulatory)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Regulatory Checks</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php 
                                                foreach ($regulatory as $reg) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $reg['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $reg['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $reg['name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Results : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $reg['result'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $reg['evidence']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $reg['evidence'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <div class="row download-table" style="display: none;">
                                            <center>
                                                <h4>Regulatory Checks</h4>
                                            </center>
                                            <?php 
                                                foreach ($regulatory as $reg) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $reg['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <center>
                                                <div class="WordSection1">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Name : </td>
                                                                <td>
                                                                    <?php echo $reg['name'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Results : </td>
                                                                <td>
                                                                    <?php echo $reg['result'] ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Evidence : </td>
                                                                <td>
                                                                    <?php 
                                                                $file = explode(',', $reg['attachment']);
                                                                for ($i=0; $i < sizeof($file); $i++) { 
                                                            ?>
                                                                    <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                    <?php } ?>
                                                                    <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $reg['evidence'] ?>">View Attechment</a> -->
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </center>
                                            <?php } } ?>
                                        </div>
                                        <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (!empty($litigation)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Litigation Checks </a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php 
                                                foreach ($litigation as $lit) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $lit['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $lit['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $lit['status'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type of Results : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $lit['type_of_result'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sources : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $lit['sources'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Note : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $lit['note'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $lit['evidence']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $lit['evidence'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Litigation Checks</h4>
                                                </center>
                                                <?php 
                                                    foreach ($litigation as $lit) { 
                                                        $set = 1;
                                                        if ($_SESSION['role'] == 'TM' && $lit['member_id'] != $_SESSION['id']) {
                                                            $set = 0;
                                                        }
                                                        if ($set == 1) {
                                                ?>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Status : </td>
                                                                    <td>
                                                                        <?php echo $lit['status'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Type of Results : </td>
                                                                    <td>
                                                                        <?php echo $lit['type_of_result'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sources : </td>
                                                                    <td>
                                                                        <?php echo $lit['sources'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Note : </td>
                                                                    <td>
                                                                        <?php echo $lit['note'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Evidence : </td>
                                                                    <td>
                                                                        <?php 
                                                                $file = explode(',', $lit['evidence']);
                                                                for ($i=0; $i < sizeof($file); $i++) { 
                                                            ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                        <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $lit['evidence'] ?>">View Attechment</a> -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </center>
                                                <?php } } ?>
                                            </div>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (!empty($crimnal)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Criminal Check Findings Source</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse9" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php 
                                                foreach ($crimnal as $cri) { 
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $cri['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $cri['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name of Police Station : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $cri['police_station'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $cri['verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Designation of Verifier : </td>
                                                            <td>
                                                                <input designation_verifier="text" name="" value="<?php echo $cri['verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address of Police Station : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $cri['address_police_station'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Period of Criminal Record Checke : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $cri['crimnal_record'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence of Verification : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $cri['evidence']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $cri['evidence'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Criminal Check Findings Source</h4>
                                                </center>
                                                <?php 
                                                    foreach ($crimnal as $cri) { 
                                                        $set = 1;
                                                        if ($_SESSION['role'] == 'TM' && $cri['member_id'] != $_SESSION['id']) {
                                                            $set = 0;
                                                        }
                                                        if ($set == 1) {
                                                ?>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name of Police Station : </td>
                                                                    <td>
                                                                        <?php echo $cri['police_station'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $cri['verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Designation of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $cri['verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address of Police Station : </td>
                                                                    <td>
                                                                        <?php echo $cri['address_police_station'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Period of Criminal Record Checke : </td>
                                                                    <td>
                                                                        <?php echo $cri['crimnal_record'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Evidence of Verification : </td>
                                                                    <td>
                                                                        <?php 
                                                                $file = explode(',', $cri['evidence']);
                                                                for ($i=0; $i < sizeof($file); $i++) { 
                                                            ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                        <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $cri['evidence'] ?>">View Attechment</a> -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </center>
                                                <?php } } ?>
                                            </div>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php if (!empty($past)) {?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Past Employment</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse10" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php  
                                                foreach ($past as $pa) {
                                                    $set = 1;
                                                    if ($_SESSION['role'] == 'TM' && $pa['member_id'] != $_SESSION['id']) {
                                                        $set = 0;
                                                    }
                                                    if ($set == 1) {
                                            ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Type Of Activity : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $pa['scope_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Employer Name : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $pa['employee_name'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $pa['address'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Name of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $pa['verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Designation of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $pa['designation_verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact Details of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $pa['contact_verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email Address of Verifier : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $pa['email_verifier'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence : </td>
                                                            <td>
                                                                <?php 
                                                                    $file = explode(',', $pa['evidence']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                                <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $pa['evidence'] ?>">View Attechment</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php if (!empty($pa['keys'])) {?>
                                            <div class="table-responsive m-b-20">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>VERIFICATION RESULTS</th>
                                                            <th>Candidate Claims</th>
                                                            <th>Verification Result</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($pa['keys'] as $key) {?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $key['past_key'] ?> : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $key['value1'] ?>" class="form-control" readonly="">
                                                            </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $key['value2'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } } } ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Past Employment</h4>
                                                </center>
                                                <?php  
                                                    foreach ($past as $pa) {
                                                        $set = 1;
                                                        if ($_SESSION['role'] == 'TM' && $pa['member_id'] != $_SESSION['id']) {
                                                            $set = 0;
                                                        }
                                                        if ($set == 1) {
                                                ?>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Employer Name : </td>
                                                                    <td>
                                                                        <?php echo $pa['employee_name'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address : </td>
                                                                    <td>
                                                                        <?php echo $pa['address'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Name of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $pa['verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Designation of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $pa['designation_verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Details of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $pa['contact_verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email Address of Verifier : </td>
                                                                    <td>
                                                                        <?php echo $pa['email_verifier'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Evidence : </td>
                                                                    <td>
                                                                        <?php 
                                                            $file = explode(',', $pa['evidence']);
                                                            for ($i=0; $i < sizeof($file); $i++) { 
                                                        ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                        <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $pa['evidence'] ?>">View Attechment</a> -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php if (!empty($pa['keys'])) {?>
                                                    <div class="table-responsive m-b-20">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>VERIFICATION RESULTS</th>
                                                                    <th>Candidate Claims</th>
                                                                    <th>Verification Result</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($pa['keys'] as $key) {?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $key['past_key'] ?> : </td>
                                                                    <td>
                                                                        <?php echo $key['value1'] ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $key['value2'] ?>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php }?>
                                                </center>
                                                <?php } } ?>
                                            </div>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>

                                <?php if (!empty($vendor)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Vendor Report</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php foreach ($vendor as $vn) { ?>
                                            <?php
                                            $this->db->select('*')
                                                     ->from('assign_activity_to_user a') 
                                                     ->where('case_id', $case_id)
                                                     ->where('activity_id', $vn['activity_id'])
                                                     ->where('member_id', $_SESSION['id']);
                                            $result = $this->db->get()->result_array();
                                            if (!empty($result) && $_SESSION['role'] != 'vendor') {
                                        ?>
                                                <div class="row">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Type Of Activity : </td>
                                                                <td>
                                                                    <input type="text" name="" value="<?php echo $vn['scope_name'] ?>" class="form-control" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Remarks : </td>
                                                                <td>
                                                                    <input type="text" name="" value="<?php echo $vn['remarks'] ?>" class="form-control" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>File : </td>
                                                                <td>
                                                                    <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                    <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php } elseif (array_key_exists($key,$team_lead) && $_SESSION['role'] != 'vendor') {?>
                                                <div class="row">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Remarks : </td>
                                                                <td>
                                                                    <input type="text" name="" value="<?php echo $vn['remarks'] ?>" class="form-control" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>File : </td>
                                                                <td>
                                                                    <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                    <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php } elseif ($_SESSION['role'] == 'vendor') {?>
                                                <div class="row">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Remarks : </td>
                                                                <td>
                                                                    <input type="text" name="" value="<?php echo $vn['remarks'] ?>" class="form-control" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>File : </td>
                                                                <td>
                                                                    <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                    <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <?php } elseif ($_SESSION['id'] == $cm_id[0]['employee_id'] && $_SESSION['role'] != 'vendor') { ?>
                                                <div class="row">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Remarks : </td>
                                                                <td>
                                                                    <input type="text" name="" value="<?php echo $vn['remarks'] ?>" class="form-control" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>File : </td>
                                                                <td>
                                                                    <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                    <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn" >Downloads</button></a>
                                                <?php } ?>
                                                <?php } ?>
                                        </div>
                                        <div class="row download-table" style="display: none;">
                                            <center>
                                                <h3>Vendor Report</h3>
                                                <?php foreach ($vendor as $vn) { ?>
                                                <?php
                                                $this->db->select('*')
                                                         ->from('assign_activity_to_user a') 
                                                         ->where('case_id', $case_id)
                                                         ->where('activity_id', $vn['activity_id'])
                                                         ->where('member_id', $_SESSION['id']);
                                                $result = $this->db->get()->result_array();
                                                if (!empty($result) && $_SESSION['role'] != 'vendor') {
                                            ?>
                                                    <div class="row">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Remarks : </td>
                                                                    <td>
                                                                        <?php echo $vn['remarks'] ?>
                                                                </tr>
                                                                <tr>
                                                                    <td>File : </td>
                                                                    <td>
                                                                        <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <br>
                                                    <?php } elseif (array_key_exists($key,$team_lead) && $_SESSION['role'] != 'vendor') {?>
                                                    <div class="row">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Remarks : </td>
                                                                    <td>
                                                                        <?php echo $vn['remarks'] ?>
                                                                </tr>
                                                                <tr>
                                                                    <td>File : </td>
                                                                    <td>
                                                                        <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <br>
                                                    <?php } elseif ($_SESSION['role'] == 'vendor') {?>
                                                    <div class="row">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Remarks : </td>
                                                                    <td>
                                                                        <?php echo $vn['remarks'] ?>
                                                                </tr>
                                                                <tr>
                                                                    <td>File : </td>
                                                                    <td>
                                                                        <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <br>


                                                    <?php } elseif ($_SESSION['id'] == $cm_id[0]['employee_id'] && $_SESSION['role'] != 'vendor') { ?>
                                                    <div class="row">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Remarks : </td>
                                                                    <td>
                                                                        <?php echo $vn['remarks'] ?>
                                                                </tr>
                                                                <tr>
                                                                    <td>File : </td>
                                                                    <td>
                                                                        <?php 
                                                                    $file = explode(',', $vn['file']);
                                                                    for ($i=0; $i < sizeof($file); $i++) { 
                                                                ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                        <!-- <a download href="<?php echo site_url() ?>/uploads/attachment/<?php echo $vn['file'] ?>">View Attechment</a> -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <?php } ?>
                                                    <?php } ?>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($_SESSION['id'] == $cm_id[0]['employee_id'] && $_SESSION['role'] != 'vendor') { ?>
                                <?php if (!empty($tl_report)) { ?>
                                <div class="panel panel-default panel panel-bd">
                                    <div class="panel-heading" id="click_advance">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Team Lead Report</a>
                                        </h4>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="true"></i></span></a>
                                    </div>
                                    <div id="collapse8" class="panel-collapse collapse">
                                        <div class="panel-body ">
                                            <?php foreach ($tl_report as $rep) { ?>
                                            <div class="row">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Remarks : </td>
                                                            <td>
                                                                <input type="text" name="" value="<?php echo $rep['remarks'] ?>" class="form-control" readonly="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Evidence : </td>
                                                            <td>
                                                                <?php 
                                                                $file = explode(',', $rep['attachment']);
                                                                for ($i=0; $i < sizeof($file); $i++) { 
                                                            ?>
                                                                <a download href="<?php echo site_url() ?>/uploads/report/<?php echo $file[$i] ?>">View Attechment</a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } ?>
                                            <div class="row download-table" style="display: none;">
                                                <center>
                                                    <h4>Team Lead Report</h4>
                                                </center>
                                                <?php foreach ($tl_report as $rep) { ?>
                                                <center>
                                                    <div class="WordSection1">
                                                        <table class="table table-bordered table-striped table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Remarks : </td>
                                                                    <td>
                                                                        <?php echo $rep['remarks'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Evidence : </td>
                                                                    <td>
                                                                        <?php 
                                                                        $file = explode(',', $rep['attachment']);
                                                                        for ($i=0; $i < sizeof($file); $i++) { 
                                                                    ?>
                                                                        <a download href="<?php echo site_url() ?>/uploads/report/<?php echo $file[$i] ?>">View Attechment</a>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </center>
                                                <?php } ?>
                                            </div>
                                            <a class="" href=""><button type="button" class="btn btn-primary pull-right download-btn">Downloads</button></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $('.download-btn').click(function() {
        if (!window.Blob) {
            alert('Your legacy browser does not support this action.');
            return;
        }
        var html, link, blob, url, css;
        css = (
            '<style>' +
            '@page WordSection1{size: 1841.95pt 1595.35pt;mso-page-orientation: landscape;}' +
            'div.WordSection1 {page: WordSection1;}' +
            'table{border-collapse:collapse;}td{border:1px gray solid;width:250px;align:center;padding:2px;}' +
            '</style>'
        );
        html = $(this).parent().parent().parent().find('.download-table').html();
        blob = new Blob(['\ufeff', css + html], {
            type: 'application/msword'
        });
        url = URL.createObjectURL(blob);
        link = document.createElement('A');
        link.href = url;

        link.download = $(this).parent().parent().parent().parent().find('h4.panel-title a').text();;
        document.body.appendChild(link);
        if (navigator.msSaveOrOpenBlob) navigator.msSaveOrOpenBlob(blob, 'Background Screening_Reports.doc');
        else link.click();
        document.body.removeChild(link);
    })
</script>
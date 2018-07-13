<?php 
$salary = $detail['salary'] + $detail['house_rent'] + $detail['medical'] + $detail['conveyance'] + $detail['utility'];
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
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <address>
                                                        <strong style="font-weight: 600;">Employee No</strong> :
                                                        <e class="aks_value"><?php echo $employee['employee_id'] ?></e><br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                        <strong style="font-weight: 600;">Designation</strong> :
                                                        <e class="aks_value"><?php echo $employee['designation'] ?></e><br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                        <strong style="font-weight: 600;">Employment Status</strong> :
                                                        <e class="aks_value"><?php echo $detail['job_type'] ?></e><br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                        <strong style="font-weight: 600;">Employment Agreements</strong> :
                                                        <?php 
                                                            $agree = explode(',', $employee['agreement']);
                                                            for ($i=0; $i < sizeof($agree); $i++) { 
                                                                echo '<e class="aks_value"><a target="_blank" href="'.base_url('/uploads/attachment/'.$agree[$i]).'">View Attachment, </a></e>';
                                                            }
                                                        ?>
                                                        
                                                        <br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                        <strong style="font-weight: 600;">Employment NDA</strong> :
                                                        <?php 
                                                            $nda = explode(',', $employee['nda']);
                                                            for ($i=0; $i < sizeof($agree); $i++) { 
                                                                echo '<e class="aks_value"><a target="_blank" href="'.base_url('/uploads/attachment/'.$nda[$i]).'">View Attachment, </a></e>';
                                                            }
                                                        ?>
                                                        
                                                        <br>
                                                    </address>
                                                </div>
                                                <div class="col-lg-6">
                                                    <address>
                                                        <strong style="font-weight: 600;">Employment Verification</strong> :
                                                        <?php 
                                                            $verification = explode(',', $employee['verification']);
                                                            for ($i=0; $i < sizeof($agree); $i++) { 
                                                                echo '<e class="aks_value"><a target="_blank" href="'.base_url('/uploads/attachment/'.$verification[$i]).'">View Attachment, </a></e>';
                                                            }
                                                        ?>
                                                        
                                                        <br>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                        if ($employee_educations) {
                                    ?>
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
                                                    <th>In Progress</th>
                                                    <th>Year Completed</th>
                                                    <th>Dgree, Majors</th>
                                                </tr>
                                            </thead>
                                            <tbody class="append-education">
                                                <?php
                                                    foreach ($employee_educations as $ed) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $ed['school_type'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ed['name_of_school'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ed['school_location'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ed['in_progress'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ed['school_year_completed'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ed['school_dgree'] ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if ($employee_employment_history) {
                                    ?>
                                    <div class="table-responsive m-b-20">
                                        
                                       
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
                                                            <td>
                                                                <?php echo $eh['name_of_employer'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $eh['employer_designation'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $eh['employer_supervisor'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $eh['employer_department'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $eh['employer_code'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $eh['employer_duration_start'] ?> to
                                                                <?php echo $eh['employer_duration_end'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $eh['nature_of_employment'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $eh['reason_for_leaving'] ?>
                                                            </td>

                                                        </tr>
                                                        <?php 
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if ($performance_review) {
                                    ?>
                                    <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                        <div class="panel-title">
                                            <h4>Performance History</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <?php
                                              foreach ($performance_review as $review) {
                                            ?>
                                            <div class="form-group">
                                                <label for="example-text-input" class="cap"><?php echo $review['type'] ?></label>
                                                
                                                   <div class="progress">
                                                       <div class="progress-bar progbar progress-bar-striped active">
                                                           <div class="tooltip fade top in font" role="tooltip" id="tooltip720621" style="top: -30px; left: 17.0156px; display: block; z-index: 999;">
                                                               <div class="tooltip-arrow score" style="left: 50%;"></div>
                                                               <div class="tooltip-inner score font"><?php echo round($review['per']) ?>%</div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                
                                            </div>
                                            <?php
                                              }
                                            ?> 
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12" >
                                                <div class="panel panel-bd">
                                                    
                                                    <div class="panel-body">
                                                        <!-- amcharts -->
                                                        <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12" >
                                                <div class="panel panel-bd" style=" box-shadow: 3px 4px 5px #888888">
                                                    
                                                    <div class="panel-body">
                                                        <h4>Categories which requires immediate action</h4>
                                                        <div style="margin-left: 20px;">
                                                            <small> - Compliance with Company's Policy And Procedures</small>
                                                        </div>
                                                        <br>
                                                        
                                                        <h4>Categories which requires improvement</h4>
                                                        <div style="margin-left: 20px;">
                                                          <?php 
                                                            foreach ($performance_review as $review) {
                                                              if ($review['per'] < 60) {
                                                                echo '<small> - '.$review['type'].'</small><br>';
                                                              }
                                                            }
                                                          ?>
                                                            
                                                        </div>
                                                        <br>
                                                       
                                                        <h4>Traning Requirements</h4>
                                                        <div style="margin-left: 20px;">
                                                          <?php 
                                                            foreach ($performance_review as $review) {
                                                              if ($review['per'] < 60) {
                                                                echo '<small> - '.$review['type'].' Skills</small><br>';
                                                              }
                                                            }
                                                          ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if ($leave_applications) {
                                    ?>
                                    <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                        <div class="panel-title">
                                            <h4>Leave Records</h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive ">

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Status</th>
                                                    <th>Nature of Leave</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Total Days</th>
                                                    <th>Type</th>
                                                </tr>
                                            </thead>
                                            <tbody class="append-education">
                                                <?php
                                                    foreach ($leave_applications as $la) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $la['status'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $la['nature_of_leave'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $la['start_date'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $la['end_date'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $la['total_days'] ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                if ($la['is_approve'] == '4') {
                                                                    echo 'Paid';
                                                                }
                                                                else{
                                                                    echo 'Unpaid';
                                                                } 
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if ($salary) {
                                    ?>
                                    <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                        <div class="panel-title">
                                            <h4>Salary History</h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive ">

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Month</th>
                                                    <th>Amount</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody class="append-education">
                                                <?php
                                                    foreach ($salary as $s) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo date('d M Y', strtotime($s['created_date'])) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo date('F', strtotime('-1 month', strtotime($s['created_date']))) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $s['amount'] ?>
                                                        </td>

                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php } ?>
                                    <?php 
                                        if ($salary_increment) {
                                    ?>
                                    <div class="panel-heading" style="background-color: #bab8b8;border-radius: 7px;margin-bottom: 17px; box-shadow: 10px 10px 5px #888888;">
                                        <div class="panel-title">
                                            <h4>Salary Increment</h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive ">

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Persantage</th>
                                                </tr>
                                            </thead>
                                            <tbody class="append-education">
                                                <?php
                                                    foreach ($salary_increment as $s) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo date('d M Y', strtotime($s['created_at'])) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $s['salary'] ?>
                                                        </td>
                                                        <td><?php echo round($s['salary'] * 100 / $salary); $salary = $salary + $s['salary'] ?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php } ?>
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
<script src="<?php echo base_url()?>admin_assets/assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>admin_assets/assets/plugins/amcharts/pie.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
  
  $('.score').each( function() {

  var score = $( this ).text().trim();
    $( this ).closest( '.progbar' ).css('width', score);
    score = score.split('%').join('')
  var bar = $( this ).closest( '.progbar' );

  var parent = $( '.score' ).closest( 'progbar' );
  
  if (score == 0){
    $( bar ).css('width', '0');
  } else if (score <= 100 && score >= 74){
    $( bar ).css( 'background-color', 'rgba( 53, 182, 103, .5)' );
    
  } else if (score <= 75 && score >= 51){
    $( bar ).css( 'background-color', 'rgba( 24, 133, 157, .5)' );
    
  } else if (score <= 50 && score >= 25){
    $( bar ).css( 'background-color', 'rgba( 239, 149, 33, .5)' );
  } else if (score < 24){
    $( bar ).css( 'background-color', 'rgba( 198, 32, 55, .5)' );
  } else if ( score === 100 && score.parent().hasClass( '.report' ) ){//this is where it falls apart
    $( bar ).css( 'background-color', 'rgba(0, 0, 0, .5)' );
    alert('hasClass');
  }
  });
});
</script>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
        text: ""
    },
    data: [{
        type: "pie",
        startAngle: 240,
        yValueFormatString: "##0.00'%'",
        indexLabel: "{label} {y}",
        dataPoints: [
        <?php 
          foreach ($performance_review as $review) {
            echo '{y: '.round($review['per']).', label: "'.$review['type'].'"},';
          }
        ?>
        ]
    }]
});
chart.render();

}
</script>
<style type="text/css">
    .tooltip-inner{
        background-color: #bab8b8 !important;
    }
   .cap {
            text-transform: capitalize;
    }
</style>
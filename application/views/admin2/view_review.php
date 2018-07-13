<style type="text/css">
    .tooltip-inner{
        background-color: #bab8b8 !important;
    }
   .cap {
            text-transform: capitalize;
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
                <h1>Performance Evaluation</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Performance Evaluation</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Performance Evaluation</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row panel-body">
                            <div class="col-lg-8">
                                <p><strong>Name</strong> : <?php echo $employee['employee_name'] ?></p>
                                <p><strong>Department</strong> : <?php echo $employee['department'] ?></p>
                                <p><strong>Designation</strong> : <?php echo $employee['designation'] ?></p>
                                
                            </div>
                            <div class="col-lg-4" style="border:2px solid; border-color: #bab8b8; box-shadow: 3px 4px 5px #888888">
                                <p><strong>Joing Date : </strong><?php echo date('d/m/Y', strtotime($employee['created_at'])) ?></p>
                                <?php 
                                    $key = sizeof($salary_increment) - 1;
                                    $last_increment = $salary_increment[$key];
                                ?>
                                <p><strong>Salary Increment History : </strong>Rs <?php echo $last_increment['salary'] ?></p>
                                <p><strong><?php echo  date('F Y', strtotime('-1 month', strtotime($last_increment['created_at']))) ?> : </strong>Rs <?php echo $total_salary - $last_increment['salary'] ?></p>
                                <p><strong><?php echo date('F Y') ?> : </strong>Rs <?php echo $total_salary ?></p>
                                <p><strong>Current Salary : </strong>Rs <?php echo $total_salary ?></p>
                            </div>
                            
                        </div>
                        <hr style="border-top: 1px solid #131314;margin-top: -2px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Performance <small>(weighted Average)</small>:</th>
                                                    <th>Less</th>
                                                    <th>Add</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php 
                                                      $sum = 0;
                                                      foreach ($reviews as $review) {
                                                        $sum = $sum + round($review['per']);
                                                      }
                                                      $total = $sum * 100 / (sizeof($reviews) * 100);
                                                    ?>
                                                    <td><e class="main-sum"><?php echo round($total); ?></e>%:</td>
                                                    <?php 
                                                        if (isset($form)) {
                                                    ?>
                                                    <td>
                                                        <?php 
                                                            $less_per = array();
                                                            if ($less) {
                                                                foreach ($less as $l) {
                                                                    echo $l['remarks'].' '.$l['per'];echo '<br>';
                                                                    $less_per[] = $l['per'];
                                                                }
                                                            }
                                                            else{
                                                                echo '<button class="btn btn-info" data-toggle="modal" data-target="#myModal1">Create</button>';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            $add_per = array();
                                                            if ($add) {
                                                                foreach ($add as $l) {
                                                                    echo $l['remarks'].' '.$l['per'];echo '<br>';
                                                                    $add_per[] = $l['per'];
                                                                }
                                                            }
                                                            else{
                                                                echo '<button class="btn btn-info" data-toggle="modal" data-target="#myModal2">Create</button>';
                                                            }
                                                        ?>
                                                    </td>
                                                    <!-- <td><input type="text" name="less" value="<?php echo $review_detail['less'] ?>">%</td>
                                                    <td><input type="text" name="add_o" value="<?php echo $review_detail['add_o'] ?>">%</td> -->
                                                    <?php } else{ ?>
                                                    <td>
                                                        <?php 
                                                            $less_per = array();
                                                            if ($less) {
                                                                foreach ($less as $l) {
                                                                    echo $l['remarks'].' '.$l['per'];echo '<br>';
                                                                    $less_per[] = $l['per'];
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            $add_per = array();
                                                            if ($add) {
                                                                foreach ($add as $l) {
                                                                    echo $l['remarks'].' '.$l['per'];echo '<br>';
                                                                    $add_per[] = $l['per'];
                                                                }
                                                            }
                                                        ?>
                                                    </td>
                                                    <?php } ?>
                                                    <td><strong><e class="total-sum"><?php echo round($total) - array_sum($less_per) + array_sum($add_per); ?></e>%</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <?php
                                  foreach ($reviews as $review) {
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
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12" >
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
                                                foreach ($reviews as $review) {
                                                  if ($review['per'] < 60) {
                                                    echo '<small> - '.$review['type'].'</small><br>';
                                                  }
                                                }
                                                if (isset($form)) {
                                                    if ($improvement) {
                                                        foreach ($improvement as $i) {
                                                            echo '<small> - '.$i['title'].'</small><br>';
                                                        }
                                                    }
                                                    else{
                                                        echo '<button class="btn btn-info" data-toggle="modal" data-target="#myModal3">Create</button>';
                                                    }
                                                }
                                                else{
                                                    foreach ($improvement as $i) {
                                                        echo '<small> - '.$i['title'].'</small><br>';
                                                    }
                                                }
                                              ?>
                                                <!-- <small> - Leadership</small><br>
                                                <small> - Communication</small> -->
                                            </div>
                                            <br>
                                           
                                            <h4>Traning Requirements</h4>
                                            <div style="margin-left: 20px;">
                                              <?php 
                                                foreach ($reviews as $review) {
                                                  if ($review['per'] < 60) {
                                                    echo '<small> - '.$review['type'].' Skills</small><br>';
                                                  }
                                                }
                                                if (isset($form)) {
                                                    if ($traning) {
                                                        foreach ($traning as $i) {
                                                            echo '<small> - '.$i['title'].'</small><br>';
                                                        }
                                                    }
                                                    else{
                                                        echo '<button class="btn btn-info" data-toggle="modal" data-target="#myModal4">Create</button>';
                                                    }
                                                }
                                                else{
                                                    foreach ($traning as $i) {
                                                        echo '<small> - '.$i['title'].'</small><br>';
                                                    }
                                                }
                                              ?>
                                                <!-- <small> - Communication Skills</small><br>
                                                <small> - Leadership Skills</small> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bd-content">
                                    <h4>Performance Deductions</h4>
                                    <strong><hr style="color: black; width: 200px; margin-left: 11px; margin-left: 1px; margin-top: 5px;"></strong>
                                    <?php 
                                        if (isset($form)) {
                                    ?>
                                    <form method="post" action="">
                                        <div class="form-group row">
                                            <label class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">Remarks</label>
                                            <div class="col-md-9">
                                                <input type="text" name="remarks" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </form>
                                    <?php } ?>
                                    <?php 
                                        foreach ($remarks as $r) {
                                    ?>
                                    <p><strong><?php echo $r['title'] ?> :</strong></p>
                                    <p><?php echo $r['remarks'] ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if ($_SESSION['role'] == 'Ceo') {
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bd-content">
                                                <h4>Below form to be completed by CEO only</h4>
                                                <strong><hr style="color: black;"></strong>
                                                <p><strong>Improper Approval For Leaves :</strong></p>
                                                <p>Entitled to Company Benefits:_____________(yes/no)</p>
                                                <p>revised Salary:_____________</p>
                                                <p>Date:_____________</p>
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bd-content pull-right">
                                                
                                                
                                                <p><strong>Approved & Confirmed by</strong></p>
                                                <p class=" pull-right">CEO (mr. Sadaqat Arif)</p>
                                                
                                            </div>
                            </div>
                        </div>
                        <?php } ?>
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
          foreach ($reviews as $review) {
            echo '{y: '.round($review['per']).', label: "'.$review['type'].'"},';
          }
        ?>
        ]
    }]
});
chart.render();

}
$('[name="add_o"]').focusout(function () {
    var add = $(this).val()
    var main = $('.main-sum').text()
    var less = $('[name="less"]').val()
    $('.total-sum').text(parseInt(main) + parseInt(add) - parseInt(less))
    ajax_data('add_o',add)
});
$('[name="less"]').focusout(function () {
    var less = $(this).val()
    var main = $('.main-sum').text()
    var add = $('[name="add_o"]').val()
    $('.total-sum').text(parseInt(main) + parseInt(add) - parseInt(less))
    ajax_data('less',less)
});
function ajax_data(type,number) {
    $.ajax
    ({
      type: "GET",
      url: "<?php echo base_url('admin/update_review/'.$review_detail['id']) ?>/"+type+"/"+number,
      success: function(html)
      {
        console.log(html);
      }
    });
}
</script>
<script type="text/javascript" src="<?php echo base_url()?>admin_assets/pie_chart/canvasjs.min.js"></script>
<style type="text/css">
  .canvasjs-chart-credit{
        display: none;
    }
</style>       
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 857px; margin-left: -122px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">Less</h1>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url()?>admin/add_less/<?php echo $review_detail['id'].'/'.$review_detail['employee_id'] ?>" enctype="multipart/form-data">
                    <input type="hidden" name="review_id" value="<?php echo $review_detail['id'] ?>">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-body">
                                <div class="form-group row less-div">
                                    <div class="form-group col-lg-6">
                                        <label for="">Remarks</label>
                                        <input name="remarks[]" type="text" class="form-control" required="This Field is Required...">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Persantage</label>
                                        <input name="per[]" type="text" class="form-control" required="This Field is Required...">
                                    </div>
                                    <div class="col-lg-2 delet pull-right">
                                        <button type="button" class="add-less btn btn-success ">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class=panel-footer>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!--    <p class="pull-right">Poworwed by </ -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 857px; margin-left: -122px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">Add</h1>
            </div>

            <div class="modal-body">
                <form method="POST" action="<?php echo base_url()?>admin/add_add/<?php echo $review_detail['id'].'/'.$review_detail['employee_id'] ?>" enctype="multipart/form-data">
                    <input type="hidden" name="review_id" value="<?php echo $review_detail['id'] ?>">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-body">
                                <div class="form-group row add-div">
                                    <div class="form-group col-lg-6">
                                        <label for="">Remarks</label>
                                        <input name="remarks[]" type="text" class="form-control" required="This Field is Required...">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">Persantage</label>
                                        <input name="per[]" type="text" class="form-control" required="This Field is Required...">
                                    </div>
                                    <div class="col-lg-2 delet pull-right">
                                        <button type="button" class="add btn btn-success ">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class=panel-footer>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!--    <p class="pull-right">Poworwed by </ -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 857px; margin-left: -122px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">Add Improvement</h1>
            </div>

            <div class="modal-body">
                <form method="POST" action="<?php echo base_url()?>admin/add_improvement/<?php echo $review_detail['id'].'/'.$review_detail['employee_id'] ?>" enctype="multipart/form-data">
                    <input type="hidden" name="review_id" value="<?php echo $review_detail['id'] ?>">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-body">
                                <div class="form-group row improvement-div">
                                    <label for="">Type</label>
                                    <input name="title[]" type="text" class="form-control" required="This Field is Required...">
                                    <div class="col-lg-2 delet pull-right">
                                        <button type="button" class="add-improvement btn btn-success ">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class=panel-footer>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!--    <p class="pull-right">Poworwed by </ -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 857px; margin-left: -122px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title">Add Traning</h1>
            </div>

            <div class="modal-body">
                <form method="POST" action="<?php echo base_url()?>admin/add_traning/<?php echo $review_detail['id'].'/'.$review_detail['employee_id'] ?>" enctype="multipart/form-data">
                    <input type="hidden" name="review_id" value="<?php echo $review_detail['id'] ?>">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-bd">
                            <div class="panel-body">
                                <div class="form-group row traning-div">
                                    <label for="">Type</label>
                                    <input name="title[]" type="text" class="form-control" required="This Field is Required...">
                                    <div class="col-lg-2 delet pull-right">
                                        <button type="button" class="add-traning btn btn-success ">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class=panel-footer>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!--    <p class="pull-right">Poworwed by </ -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script type="text/javascript">
    $("body").on("click",".add-less",function(){
        var html = $(".less-div").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".less-div").last().after(html);
        $(".less-div").last().find('input').not('input[type="radio"]').val('')
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".less-div").remove();
    });

    $("body").on("click",".add",function(){
        var html = $(".add-div").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove1'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".add-div").last().after(html);
        $(".add-div").last().find('input').not('input[type="radio"]').val('')
    });
    $("body").on("click",".remove1",function(){
        $(this).parents(".add-div").remove();
    });
    $("body").on("click",".add-improvement",function(){
        var html = $(".improvement-div").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove2'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".improvement-div").last().after(html);
        $(".improvement-div").last().find('input').not('input[type="radio"]').val('')
    });
    $("body").on("click",".remove2",function(){
        $(this).parents(".improvement-div").remove();
    });

    $("body").on("click",".add-traning",function(){
        var html = $(".traning-div").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".delet").html("<a class='btn btn-danger remove3'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-sub"><strong> + </strong> </a>');
        $(".traning-div").last().after(html);
        $(".traning-div").last().find('input').not('input[type="radio"]').val('')
    });
    $("body").on("click",".remove3",function(){
        $(this).parents(".traning-div").remove();
    });
</script>
<?php 
// function compareOrder($a, $b)
// {
//   return $a['date'] - $b['date'];
// }
// usort($case, 'compareOrder');
// print_r($case);die;
?>
<div class=control-sidebar-bg></div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon style="margin-top: -9px;">
                <i class="pe-7s-graph1"></i>
            </div>
            <div class=header-title>
                <h1>Analytics</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Analytics</li>

                </ol>
            </div>
        </div>
        <?php if ($_SESSION['role']=="Analysis"): ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Form</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <?php if($client) {?>
                                <div class="form-group">
                                    <label class="col-md-3">Clients</label>
                                    <div class="col-md-9">
                                        <select class="form-control get_val">
                                            <option value="">Select Clinet</option>
                                            <?php foreach ($client as $c) {?>
                                            <option value="<?php echo $c['client_id'] ?>"><?php echo $c['client_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if($employees) {?>
                                <div class="form-group">
                                    <label class="col-md-3">Employees</label>
                                    <div class="col-md-9">
                                        <select class="form-control get_val">
                                            <option value="">Select Employee</option>
                                            <?php foreach ($employees as $c) {?>
                                            <option value="<?php echo $c['id'] ?>"><?php echo $c['employee_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <?php } ?>
                                <script type="text/javascript">
                                    $('.get_val').change(function() {
                                        var val = $(this).val()
                                        if(val){
                                            window.location.href = '<?php echo $form_url ?>'+val
                                        }
                                    })
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd ">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Analytics</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <label>Range</label>
                            <button class="btn btn-info range">Daily</button>
                            <button class="btn btn-info range">Monthly</button>
                            <button class="btn btn-info range">Quarterly</button>
                            <button class="btn btn-info range">Half yearly</button>
                            <button class="btn btn-info open-form">Custom</button>
                            <div class="row show-form" style="display: none;">
                                <form method="post" action="<?php echo $url ?>">
                                    <div class="col-md-5">
                                        <label>Start Date</label>
                                        <input type="date" name="start" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <label>End Date</label>
                                        <input type="date" name="end" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-info" style="margin-top: 24px;">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <?php 
                            if (isset($status)) {
                        ?>
                            <?php 
                                $per = round(12 / sizeof($status));
                                foreach ($status as $key => $value) {
                            ?>
                            <div class="col-md-<?php echo $per ?>">
                                <strong><?php echo $key ?>:</strong>
                                <span><?php echo $value ?></span>
                            </div>
                        <?php } } ?> -->
                        </div><br>
                        <div class="row">
                            <?php 
                                if (isset($status)) {
                            ?>
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <?php } else{ ?>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <?php } ?>
                                    <div class="panel panel-bd ">
                                        <div class="panel-body">
                                            <!-- amcharts -->
                                            <div id="chartdiv"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    if (isset($status)) {
                                ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <?php 
                                        if (isset($panding)) {
                                            echo '<button class="btn btn-info panding-case">Show Pending Cases</button>';
                                        }
                                    ?>
                                    <div class="panel panel-bd ">
                                        <div class="panel-body">
                                            <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php 
                                if (isset($panding)) {
                            ?>
                            <div class="row div-panding" style="display: none;">
                                <?php 
                                    $con = 1;
                                    foreach ($panding as $p) {
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading<?php echo $con ?>">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapse<?php echo $con ?>" aria-expanded="true" aria-controls="collapse<?php echo $con ?>" class="trigger collapsed">
                                                <?php echo $p['reference_code'] ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $con ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $con ?>">
                                        <div class="panel-body">
                                            <?php 
                                                $cons = 1;
                                                foreach ($p['subjects'] as $s) {
                                            ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading<?php echo $con ?><?php echo $cons ?>">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" href="#collapse<?php echo $con ?><?php echo $cons ?>" aria-expanded="true" aria-controls="collapse<?php echo $con ?>" class="trigger collapsed">
                                                            <?php echo $s['subject_name'] ?>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse<?php echo $con ?><?php echo $cons ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $con ?><?php echo $con ?>">
                                                    <div class="panel-body">
                                                        <table class="table-responsive col-md-12" border="1">
                                                            <thead>
                                                                <tr>
                                                                    <th class="col-md-2">S.no</th>
                                                                    <th class="col-md-7">Name</th>
                                                                    <th class="col-md-3">Status</th>
                                                                </tr>
                                                            </thead>
                                                            <?php 
                                                                $conss = 1;
                                                                foreach ($s['activity'] as $a) {
                                                            ?>
                                                            <tr>
                                                                <td class="col-md-2">
                                                                    <?php echo $conss ?>
                                                                </td>
                                                                <td class="col-md-7">
                                                                    <?php echo $a['scope_name'] ?>
                                                                </td>
                                                                <?php 
                                                                    $status = '';
                                                                    if ($a['total_fund'] > 0) {
                                                                        $status = 'at IA';
                                                                    }
                                                                    elseif ($a['t_ven'] > 0) {
                                                                        $status = 'at Vendor';
                                                                    }
                                                                    elseif (!empty($a['member_id'])) {
                                                                        if ($a['member_id'] == $p['employee_id']) {
                                                                            $status = 'at Self';
                                                                        }
                                                                        elseif ($a['member_id'] == $s['team_lead_id']) {
                                                                            $status = 'at Team Lead';
                                                                        }
                                                                        else{
                                                                            $status = 'at Team';
                                                                        }
                                                                    }
                                                                    elseif(!empty($s['team_lead_id']) && $p['employee_id'] != $s['team_lead_id']){
                                                                        $status = 'at Team Lead';
                                                                    }
                                                                    else{
                                                                        $status = 'at Self';
                                                                    }
                                                                ?>
                                                                <td class="col-md-3">Pending
                                                                    <?php echo $status ?>
                                                                </td>
                                                            </tr>
                                                            <?php 
                                                                $conss++;
                                                                } 
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                $cons++;
                                                } 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    $con++;
                                    } 
                                ?>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /.main content -->
                    </div>
                    <!-- /#page-wrapper -->
                </div>
                <!-- /#wrapper -->
                <!-- START CORE PLUGINS -->
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .controls {
        margin-bottom: 10px;
    }

    .collapse-group {
        padding: 10px;
        border: 1px solid darkgrey;
        margin-bottom: 10px;
    }

    .panel-title .trigger:before {
        content: '\e082';
        font-family: 'Glyphicons Halflings';
        vertical-align: text-bottom;
    }

    .panel-title .trigger.collapsed:before {
        content: '\e081';
    }
</style>
<script>
    $(document).ready(function() {
        $(".open-button").on("click", function() {
            $(this).closest('.collapse-group').find('.collapse').collapse('show');
        });
        $(".close-button").on("click", function() {
            $(this).closest('.collapse-group').find('.collapse').collapse('hide');
        });
        $('.panding-case').click(function() {
            $('.div-panding').toggle();
        })
        var url = '<?php echo $url ?>'
        $('.range').click(function() {
            var text = $(this).text().toLowerCase().split(' ').join('-')
            window.location.href = url + '/' + text
        })
        $('.open-form').click(function() {
            $('.show-form').toggle()
        })
        "use strict"; // Start of use strict
        //amchart
        var chart = AmCharts.makeChart("chartdiv", {
            "type": "serial",
            "theme": "light",
            "dataDateFormat": "YYYY-MM-DD",
            "precision": 2,
            "valueAxes": [{
                "id": "v1",
                "title": "Total",
                "position": "left",
                "autoGridCount": false,
                "labelFunction": function(value) {
                    return Math.round(value);
                }
            }, {
                "id": "v2",
                "title": "Market Days",
                "gridAlpha": 0,
                "position": "right",
                "autoGridCount": false
            }],
            "graphs": [{
                "id": "g3",
                "valueAxis": "v1",
                "lineColor": "#e1ede9",
                "fillColors": "#e1ede9",
                "fillAlphas": 1,
                "type": "column",
                "title": "Pending",
                "valueField": "pending",
                "clustered": false,
                "columnWidth": 0.5,
                "legendValueText": "[[value]]",
                "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
            }, {
                "id": "g4",
                "valueAxis": "v1",
                "lineColor": "#558B2F",
                "fillColors": "#558B2F",
                "fillAlphas": 1,
                "type": "column",
                "title": "In Progress",
                "valueField": "progess",
                "clustered": false,
                "columnWidth": 0.3,
                "legendValueText": "[[value]]",
                "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
            }, {
                "id": "g1",
                "valueAxis": "v1",
                "lineColor": "#FFB61E",
                "fillColors": "#FFB61E",
                "fillAlphas": 1,
                "type": "column",
                "title": "Completed",
                "valueField": "completed",
                "clustered": false,
                "columnWidth": 0.3,
                "legendValueText": "[[value]]",
                "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
            }, {
                "id": "g2",
                "valueAxis": "v1",
                "lineColor": "#ef2e34",
                "fillColors": "#ef2e34",
                "fillAlphas": 1,
                "type": "column",
                "title": "Cancel",
                "valueField": "cancel",
                "clustered": false,
                "columnWidth": 0.3,
                "legendValueText": "[[value]]",
                "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
            }, {
                "id": "g5",
                "valueAxis": "v1",
                "lineColor": "#558B2F",
                "fillColors": "#558B2F",
                "fillAlphas": 1,
                "type": "column",
                "title": "Onhold",
                "valueField": "onhold",
                "clustered": false,
                "columnWidth": 0.3,
                "legendValueText": "[[value]]",
                "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
            }],
            "chartScrollbar": {
                "graph": "g1",
                "oppositeAxis": false,
                "offset": 30,
                "scrollbarHeight": 50,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.9,
                "selectedBackgroundColor": "#ffffff",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "pan": true,
                "valueLineEnabled": true,
                "valueLineBalloonEnabled": true,
                "cursorAlpha": 0,
                "valueLineAlpha": 0.2
            },
            "categoryField": "date",
            "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
            },
            "legend": {
                "useGraphSettings": true,
                "position": "top"
            },
            "balloon": {
                "borderThickness": 1,
                "shadowAlpha": 0
            },
            "export": {
                "enabled": true
            },
            "dataProvider": <?php echo json_encode($case); ?>
        });
    });
</script>
<script src="<?php echo base_url()?>admin_assets/assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>admin_assets/assets/plugins/amcharts/pie.js" type="text/javascript"></script>
<?php 
    if (isset($status)) {
?>
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
                yValueFormatString: "##0.00''",
                indexLabel: "{label} {y}",
                dataPoints: [
                    <?php 
            foreach ($status as $key => $value) {
                echo '{y: '.round($value).', label: "'.$key.'"},';
            }
        ?>
                ]
            }]
        });
        chart.render();
    }
</script>
<?php } ?>
<script type="text/javascript" src="<?php echo base_url()?>admin_assets/pie_chart/canvasjs.min.js"></script>
<style type="text/css">
    .canvasjs-chart-credit {
        display: none;
    }
</style>

<div class=control-sidebar-bg></div>
            <div id=page-wrapper>
                <div class=content>
                    <div class=content-header>
                        <div class=header-icon style="margin-top: -9px;">
                            <i class="pe-7s-graph1"></i>
                        </div>
                        <div class=header-title>
                            <h1>Fund Request Analytics</h1>
                            <small></small>
                            <ol class=breadcrumb>
                                <li><i class=pe-7s-home></i> Home</li>
                                <li class="active">Fund Request Analytics</li>
                                
                            </ol>
                        </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="panel panel-bd ">
                   <div class="panel-heading">
                   <div class="panel-title">
                   <h4>Fund Request Analytics</h4>
                   </div>
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-bd ">
                                <div class="panel-body">
                                    <!-- amcharts -->
                                    <canvas id="bar-chart" width="800" height="450"></canvas>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
    </div>
  </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script type="text/javascript">
   // Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: [
        <?php for ($i=0; $i < sizeof($fund); $i++) { 
          echo '"'.$fund[$i]['scope_name'].'",';
        } ?>
      ],
      datasets: [
        {
          label: "Amount ",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#8f5ea3","#261b2b", "#8e5ea2","#3cba9f","#c45850","#e8c3b9","#8f5ea3","#261b2b", "#8e5ea2","#3cba9f","#c45850"],
          data: [
            <?php for ($i=0; $i < sizeof($fund); $i++) { 
              echo '"'.$fund[$i]['total'].'",';
            } ?>
          ]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        
      }
    }
});
 </script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
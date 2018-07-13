
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
                                <h1>Status Log Report</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Status Log Report</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->


                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 style="width: 100%">
                                                Status Log Report
                                                        <div class="btn-group pull-right">

                                                <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
     <span class="glyphicon glyphicon-th-list"></span> Dropdown
   
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <!-- <li><a href="#" onclick="$('#exporttable').tableExport({type:'json',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/json.jpg" width="24px"> JSON</a></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/json.jpg" width="24px">JSON (ignoreColumn)</a></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'json',escape:'true'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/json.jpg" width="24px"> JSON (with Escape)</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'xml',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/xml.png" width="24px"> XML</a></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'sql'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/sql.png" width="24px"> SQL</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'csv',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/csv.png" width="24px"> CSV</a></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'txt',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/txt.png" width="24px"> TXT</a></li>
                                <li class="divider"></li>        -->        
                                
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'excel',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/xls.png" width="24px"> XLS</a></li>
                                <!-- <li><a href="#" onclick="$('#exporttable').tableExport({type:'doc',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/word.png" width="24px"> Word</a></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'powerpoint',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/ppt.png" width="24px"> PowerPoint</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'png',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/png.png" width="24px"> PNG</a></li> -->
                                <li><a href="#" onclick="$('#exporttable').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <img src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/images/pdf.png" width="24px"> PDF</a></li>
                                
  </ul>
</div>
</div>
                                                <!-- <a href="<?php echo base_url('admin/export_logs/'.$id) ?>"><button class="btn btn-info pull-right">Export Logs</button></a> -->
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <?php echo date_default_timezone_get(); ?>
<table id="exporttable" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Remarks</th>
            <th>Date</th>
            <th>Time</th>
            <th>Attachment</th>
            <th>Name</th>
        </tr>
    </thead>  
    <tbody>
        <?php 
            foreach ($status as $s) {
        ?>
        <tr>
            <td><?php echo $s['remarks'] ?></td>
            <td><?php echo date('d-m-Y', strtotime($s['created_at'])) ?></td>
            <?php 
$timestamp = strtotime($s['created_at']);
$date = new DateTime("@" . $timestamp);
$date->setTimezone(new DateTimeZone('Asia/Karachi'));
$date = $date->format('h:i:s a');
            ?>
            <td><?php echo $date ?></td>
            <td><?php if($s['file']){ echo '<a href="'.base_url($s['file']).'" target="_blank">View Attachment</a>'; } ?></td>
            <td><?php echo $s['employee_name'] ?></td>
        </tr>
        <?php } ?>
    </tbody>                               
</table>         
        

        

                                     
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    

                
                        
                    </div>
             
                   <div style="height: 300px;"></div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 --><script type="text/javascript" src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/tableExport.js"></script>
<script type="text/javascript" src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/jquery.base64.js"></script>
<script type="text/javascript" src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/html2canvas.js"></script>
<script type="text/javascript" src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/jspdf/jspdf.js"></script>
<script type="text/javascript" src="https://www.phpflow.com/demo/tableExport-jquery-plugin-demo/jspdf/libs/base64.js"></script>
<!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
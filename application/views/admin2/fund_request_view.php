

<style type="text/css">
    /* male femail radio*/
.inline{
  display: inline-block;
}

.rad{
  color:#999;
  font-size:13px;
  position:relative;
}
.rad span{
  position:relative;
   padding-left:20px;
}
.rad span:after{
  content:'';
  width:15px;
  height:15px;
  border:3px solid;
  position:absolute;
  left:0;
  top:1px;
  border-radius:100%;
  -ms-border-radius:100%;
  -moz-border-radius:100%;
  -webkit-border-radius:100%;
  box-sizing:border-box;
  -ms-box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
}
.rad input[type="radio"]{
   cursor: pointer; 
  position:absolute;
  width:100%;
  height:100%;
  z-index: 1;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"
}
.rad input[type="radio"]:checked + span{
  color:#0B8;  
}
.rad input[type="radio"]:checked + span:before{
    content:'';
  width:5px;
  height:5px;
  position:absolute;
  background:#0B8;
  left:5px;
  top:6px;
  border-radius:100%;
  -ms-border-radius:100%;
  -moz-border-radius:100%;
  -webkit-border-radius:100%;
}
.margen{
    margin-left: 10px;
}
.s{
    margin-left: 8px;
}
.r{
    margin-left: 60px;
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
                <h1>View Case Request</h1>
                <small></small>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url() ?>admin/case_dashboard">Case Dashboard</a></li>
                    <li class="active">View Case Request</li>
                </ol>
            </div>
        </div> <!-- /. Content Header (Page header) -->


        <div class="row">
      <div class="col-sm-12 print-div">
        <form method="post" action="<?php echo base_url() ?>admin/insert_training_hr" enctype="multipart/form-data">
          <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Case Request</h4>
                </div>
            </div>
            <?php 
              if ($_SESSION['role'] != 'Internal Auditor') {
            ?>
            <div class="panel-body">
              <h4><strong>Client Details:</strong> </h4>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Name:</dt> <dd><?php echo $client_details['client_name'] ?></dd>
                    
                    <dt>Services:</dt> <dd><?php echo $client_details['service_id'] ?></dd>
                    <dt>Email:</dt> <dd><?php echo $client_details['email'] ?></dd>
                    
                </dl>
              </div> 
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Type:</dt> <dd><?php echo $client_details['client_type'] ?></dd>
                    <dt>Country / Region:</dt> <dd><?php echo $client_details['country_name'] ?>- <?php echo $client_details['country_code'] ?></dd>
                    <dt>Status:</dt> <dd> <?php if ($client_details['status']==1){ ?>
                      Active
                    <?php }else{
                      echo "Inactive";
                    } ?></dd>
                    

                </dl>
              </div>
            </div>
            <?php } ?>
             <div class="panel-body">
              <h4><strong>Case Details:</strong> </h4>
            </div>
            <div class="row">
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Client Refrence:</dt> <dd><?php echo $client_details['client_reference'] ?></dd>
                    <dt>ITGS Refrence:</dt> <dd><?php echo $client_details['reference_code'] ?></dd>
                    <dt>Date:</dt> <dd>  <?php echo $client_details['case_date'] ?></dd>
                </dl>
              </div> 
              <div class="col-lg-5">
                <dl class="dl-horizontal">
                    <dt>Due Date:</dt> <dd>
                        <?php
                         if($client_details['due_date_type']==2){
                        echo "Component Wise";
                        }else if($client_details['due_date_type']==3)
                        {
                        echo $client_details['case_due_date'];    
                        }
                        ?>
                        </dd>
                </dl>
              </div>
            </div>
            <?php 
            $j=1;
            foreach ($funds as $subject):

             
             ?>
             <div class="panel-default panel">
  <div class="panel-heading" style="background-color: #7dbbdf;">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $j; ?>"><?php echo $subject['scope_name'] ?></a>
    </h4><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $j; ?>"><span class="pull-right"><i class="fa fa-arrow-down" aria-hidden="false"></i></span></a>
  </div>
  <div id="collapse<?php echo $j; ?>" class="panel-collapse collapse after-add-more">
    <div class="panel-body"> 
      <div class="row">
          <div class="col-lg-5">
          <dl class="dl-horizontal">

              <dt>Subject Name</dt> <dd><?php echo $subject['subject_name'] ?></dd>
              <dt>Type of Services</dt> <dd><?php echo $subject['type_of_service'] ?></dd>
              <dt>Degree Type</dt> <dd><?php echo $subject['degree_type'] ?></dd>
          </dl>
        </div> 
        <div class="col-lg-5">
          <dl class="dl-horizontal">
              <dt>Name of IA:</dt> <dd><?php echo $subject['name_of_ia'] ?></dd>
              <dt>Payment Mode:</dt> <dd>
                  
<?php echo $subject['mode_of_payment'] ?>
                  </dd>
          </dl>
        </div>
      </div>
      <div class="row">
          
          <?php $total=$subject['official_fee']+$subject['vendor_changes']+$subject['easy_paisa_charges']+$subject['mobi_cash_charges']+$subject['bank_commission']+$subject['postage_courier']+$subject['other_charges']+$subject['other_charges'];

?>
        <div class="col-lg-12">
           <div> <p><strong><u>Subject Activities:</u></strong></p></div>
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>Official Fee</th>
                  <th>Vendor Charges</th>
                  <th>Easy Paisa Charges</th>
                  <th>Mobi Cash Charges</th>
                  <th>Bank Commission</th>
                  <th>Courier Charges</th>
                  <th>Other Charges</th>
                  <th>Total Cost</th>
                  <th>Status</th>
                </tr>
              </thead>
            <tbody>
              <tr>
               <td><?php echo $subject['official_fee'] ?></td>
               <td><?php echo $subject['vendor_changes'] ?></td>
               <td><?php echo $subject['easy_paisa_charges'] ?></td>
               <td><?php echo $subject['mobi_cash_charges'] ?></td>
               <td><?php echo $subject['bank_commission'] ?></td>
               <td><?php echo $subject['postage_courier'] ?></td>
               <td><?php echo $subject['other_charges'] ?></td>
               <td><?php echo $total; ?></td>
               <td><?php 
	if($subject['is_approved']==0){
	    echo "Pending";
	}else if($subject['is_approved']==1){
	    echo "Approved";
	}else if($subject['is_approved']==2){
	    echo "Rejected";
	}
	?></td>
                
              </tr>  
             
            </tbody>
          </table>
          <?php 
            if($subject['is_approved']==0){
                
            
          ?>
          <div class="pull-right">
               <?php if($_SESSION['role']=="Internal Auditor"){ ?>
              <a href="<?php echo base_url() ?>admin/fund_request_update?request_id=<?php echo $subject['id'] ?>&case_id=<?php echo $subject['case_id'] ?>&status=1" class="btn btn-success">Approve</a>
              <a href="<?php echo base_url() ?>admin/fund_request_update?request_id=<?php echo $subject['id'] ?>&case_id=<?php echo $subject['case_id'] ?>&status=2" class="btn btn-danger">Reject</a>
              <?php } ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
    <?php
              $j++;
             endforeach ?>
</div>
             </div>
            </form>   
           
</div> <!-- /.main content -->
<div style="height:180px;"></div>
</div><!-- /#wrapper -->
<button type="button" class="btn btn-info pull-right print-btn">Print</button>   
</div>
</div>
</div>
</div>
<!-- START CORE PLUGINS -->

                           

<script type="text/javascript">
  $('.print-btn').click(function() {
      w = window.open();
      var ht = $('.print-div').html()
      var head = $('head').html()
      w.document.write('<html>');
      w.document.write('<head>');
      w.document.write(head);
      // w.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
      // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap.min.css">');
      // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/bootstrap-responsive.min.css">');
      // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/font-awesome.min.css">');
      // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/style.css">');
      // w.document.write('<link rel="stylesheet" type="text/css" href="' + url + '/assets/css/responsive.css">');
      // w.document.write('<style>h3.product-totle{padding-top:20px}</style>')
      w.document.write('</head>');
      w.document.write('<body>');
      w.document.write(ht);
      w.document.write('<body>');
      w.document.write('</html>');
      setTimeout(function() {
          w.print();
          w.close();
      }, 300);
  })
</script>
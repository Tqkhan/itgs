<!-- /.Navbar  Static Side -->
   <div class="control-sidebar-bg"></div>
   <!-- Page Content -->
   <div id="page-wrapper">
    <!-- main content -->
    <div class="content">
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="header-icon">
       <i class="pe-7s-box1"></i>
      </div>
      <div class="header-title">
       <h1>Edit Case</h1>

       <ol class="breadcrumb">
        <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
        <li class="active">Edit Case</li>
       </ol>
      </div>
     </div> <!-- /. Content Header (Page header) -->

     <div class="row">
      <div class="col-sm-12">
       <div class="panel panel-bd">
        <div class="panel-heading">
         <div class="panel-title">
          <h4>Edit Case Request</h4>
         </div>
        </div>
        <div class="panel-body">

         <div class="table-responsive">
          <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
           <thead>
            <tr>
             <th>Client Ref</th>
             <th>ITGS Ref</th>
             <th>Apply Date</th>
             <th>Start date</th>
             <th>View Case</th>
            </tr>
           </thead>
           <tbody>

<?php 
$scopecount=1;
foreach ($m_cases as $case): ?>

            <tr>
             <td><span class="footable-toggle"></span><?php echo $case['client_reference'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['reference_code'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['case_date'] ?></td>
  <td><span class="footable-toggle"></span><?php echo $case['case_due_date'] ?></td>
             <td><a href="<?php echo base_url() ?>admin/view_case/<?php echo $case['id'] ?>"><img src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Programming-Edit-Property-icon.png" title="View Lead" alt="Process for Approval" width="25" height="25"></a></td>

            </tr>
<?php 

                                        $scopecount++;
                                       endforeach ?>

        
           </tbody>
          </table>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div> <!-- /.main content -->

   </div><!-- /#page-wrapper -->
  </div><!-- /#wrapper -->
  <!-- START CORE PLUGINS -->
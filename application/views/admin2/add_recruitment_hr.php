
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
                                <h1>Recruitment</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Recruitment</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/insert_employee" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Bio Data</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">First Name<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="enter your first name">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Father's Name<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="enter your father's name">
            </div>
        </div>
        
        <div class="form-group row">
           
            <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number<span class="required">*</span></label>
           <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="enter your phone number">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">File<span class="required">*</span></label>
           <div class="col-sm-4">
                <input class="form-control" type="file" value="" id="example-text-input" placeholder="">
            </div>
        </div>

         <div class="panel-title">
            <h4>Qualifications</h4>
            <hr>
        </div>
        <div class="after-add-more">
            <div class="form-group row">
                <span class="pull-right">
                <div class="col-sm-12 change">
                <a class="btn btn-success add-more pull-right">+ Add More</a>
                </div></span>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Enter new Qualification<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Degree/Qualification Tittle<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Start Date<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="" id="example-text-input" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">End Date<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="Date" value="" id="example-text-input" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Grade/CGPA<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Institution<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Award Year<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Field of Study<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            </div>
        </div>
        <div class="panel-title">
            <h4>Past Experience</h4>
            <hr>
        </div>
        <div class=" after-add-kpi">
            <div class="form-group row">
                <span class="pull-right">
                <div class="col-sm-12 delet">
                <a class="btn btn-success add-kpi pull-right">+ Add More</a>
                </div></span>
            </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Experience period<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Company name<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Joining date<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">Other<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
        </div>

        </div>
        <div class="panel-title">
            <h4>Position applied for</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Position name<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             <label for="example-text-input" class="col-sm-2 col-form-label">other<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
        </div>
        <div class="panel-title">
            <h4>Job Code</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Job Code (if any)<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            
        </div>
         <div class="panel-title">
            <h4>Current Salary</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">in word<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">in numbers<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            
        </div>
        <div class="panel-title">
            <h4>Expected Salary</h4>
            <hr>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">In Words<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">In Numbers<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
            
        </div>
         <div class="form-group row">
            
             <label for="example-text-input" class="col-sm-2 col-form-label">
                                        </label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>  
        

        

                                     
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       </form>

                    </div>
                    

                
                        
                    </div>
             
                   
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->


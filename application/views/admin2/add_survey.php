
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
                                <h1>SME- ERP</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Add Survey</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                                <form method="post" action="<?php echo base_url() ?>admin/insert_employee" enctype="multipart/form-data">

                        <div class="row">
                        <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Survey</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                     
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Survey Title<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             
        </div>
          <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Description<span class="required">*</span></label>
           <div class="col-sm-9">
                <textarea name="f1-about-yourself" placeholder="" class="form-control" id="f1-about-yourself" rows="2"></textarea>
            </div>
             
        </div> 
        <hr>
         <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Name<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="t" value="" id="example-text-input" placeholder="">
            </div>
              
        </div>  
        <div class="form-group row">
           
           <label for="example-text-input" class="col-sm-3 col-form-label">Type<span class="required">*</span></label>
           <div class="col-sm-9">
                 <select class="form-control" id="Select Teacher">
                   <option>Select Type</option>
                   <option>Varchar</option>
                   <option>Text</option>
                   <option>Date</option>
                   <option>Time</option>
                   <option>INT</option>
                   <option>Boolean</option>
                   <option>Float</option>

               </select>      
            </div>
              
        </div> 
        <div class="form-group row">
           
          <label for="example-text-input" class="col-sm-3 col-form-label">Length/Values<span class="required">*</span></label>
           <div class="col-sm-9">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="">
            </div>
             
        </div> 
        
         
         <div class="form-group row">
            
             
            <div class="col-sm-12">
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


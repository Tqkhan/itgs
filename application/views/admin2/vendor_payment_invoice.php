
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
                            <h1>SME- ERP</h1>
                            <small> </small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>

                                <li class="active">SME- ERP</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Offer Latters</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <form method="post" action="">
                                      <div class="form-group row">
                                        <label class="col-md-3">Select Vendor</label>
                                        <div class="col-md-6">
                                          <select class="form-control" required="" name="vendor">
                                            <option>Select Vendor</option>
                                            <?php 
                                              foreach ($vendors as $v) {
                                                echo '<option value="'.$v['id'].'">'.$v['employee_name'].'</option>';
                                              }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-3">
                                          <button type="submit" class="btn btn-success">Search</button>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->


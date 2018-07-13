
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
                                        <h4>Cases</h4>
                                    </div>
                                </div>
                                <div class="panel-body">

                                    <form method="post" action="">
                                      <div class="form-group row">
                                        <label class="col-md-3">Select Case</label>
                                        <div class="col-md-6">
                                          <select class="form-control" required="" name="case">
                                            <option>Select Case</option>
                                            <?php 
                                              foreach ($cases as $c) {
                                                $checked = '';
                                                if (isset($case_id) && $case_id == $c['id']) {
                                                    $checked = 'selected';
                                                }
                                                echo '<option value="'.$c['id'].'" '.$checked.'>'.$c['reference_code'].'</option>';
                                              }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-3">
                                          <button type="submit" class="btn btn-success">Search</button>
                                        </div>
                                      </div>
                                    </form>
                                    <ul class="activity-list list-unstyled">
                                        <?php 
                                            foreach ($case_detail as $c) {
                                        ?>
                                        <li class="activity-purple">
                                            <small class="text-muted"><?php echo date('Y-m-d', strtotime($c['start_date'])) ?></small>
                                            <p><?php echo $c['role'] ?> <?php echo $c['name'] ?> Start <span class="label label-success label-pill"><?php echo $c['type'] ?></span> on <?php echo $c['reference_code'] ?> 
                                                <?php if($c['end_date']){ ?>
                                                End  
                                                <span class="label label-success label-pill"><?php echo $c['type'] ?></span> 
                                                <?php echo date('Y-m-d', strtotime($c['end_date'])) ?>
                                                <?php } ?>
                                            </p>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->


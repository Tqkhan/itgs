<div class=control-sidebar-bg>
</div>
<div id=page-wrapper>
    <div class=content>
        <div class=content-header>
            <div class=header-icon>
                <i class=pe-7s-tools style="margin-top: -5px;"></i>
            </div>
            <div class=header-title>
                <h1 style="margin-top: 10px;">Employees</h1>
                <small></small>
                <ol class=breadcrumb>
                    <li><a href="<?php echo base_url() ?>admin/client_index"><i class="pe-7s-home"></i> Home</a></li>
                    <li class=active>Dashboard</li>
                </ol>
            </div>
        </div>
        <div class=row>
            <?php foreach ($records as $r) {?>
            <a href="<?php echo base_url() ?>admin/view_ceo_emp/<?php echo $r['job_type'] ?>">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="statistic-box statistic-filled-3 border set-bg-color" >
                        <div class="small" style="color: black"><?php echo $r['job_type'] ?> </div>
                        <h4 style="color: black"><span class="count-number"><strong><?php echo $r['total'] ?></strong></span></h4>
                         <i class="material-icons statistic_icon set-icon" >account_box</i>

                    </div>
                </div>
            </a>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Employees</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Father Name</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Date of Birth</th>
                                        <th>Job Type</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <?php
                                        foreach ($employees as $employee) {
                                    ?>
                                   <tr>
                                        <td><?php echo $employee['full_name'] ?></td>
                                        <td><?php echo $employee['father_name'] ?></td>
                                        <td><?php echo $employee['mobile'] ?></td>
                                        <td><?php echo $employee['gender'] ?></td>
                                        <td><?php echo $employee['dob'] ?></td>
                                        <td><?php echo $employee['job_type'] ?></td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 290px;"></div>
    </div>

</div>
<style type="text/css">
    .statistic-box .small {

    margin-bottom: -5px !important;
    text-transform: capitalize;
}
.set-bg-color{
    padding: 31px;
    background-color: #fff !important;
}
.set-icon{
    font-size: 45px;
    padding: 13px;
    color: #969595;
}
</style>
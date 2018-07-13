
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME- ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Leads</a>
                        </li>
                        <li class="active">
                            <strong>View Leads</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    
            <div class="row">
                    
                    <a href="<?php echo base_url() ?>admin/view_lead_report"><div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">All Time</span>
                                <h5>Leads</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $total_request; ?></h1>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="<?php echo base_url() ?>admin/view_rfq_report"><div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">All Time</span>
                                <h5>RFQ</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $total_rfq; ?></h1>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a href="<?php echo base_url() ?>admin/view_customer_report"><div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">All Time</span>
                                <h5>Customer</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $total_customer; ?></h1>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
        </div>

                    
                </div>
            </div>
            </div>
       
        </div>
     
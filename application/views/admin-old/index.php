<?php 
echo date("F");
 ?>
            <div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">Low value</span>
                                <h5>Employees</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $total_employee; ?></h1>
                                <small>Total</small>
                            </div>
                        </div>
            </div>
        </div>
                 <div class="row">
         <a href="<?php echo base_url() ?>admin/create_lead">      
            <div class="col-lg-3">
                <div class="widget style1 " style="background: #e0811b!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> Create Lead </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>         
         </a>
                  <a href="<?php echo base_url() ?>admin/view_lead">      

            <div class="col-lg-3">
                <div class="widget style1 " style="background: #348fe2!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> View Lead </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>         
</a>
         <a href="<?php echo base_url() ?>admin/create_rfq">      

             <div class="col-lg-3">
                <div class="widget style1 " style="background: #727cb6!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> Create RFQ </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>              
</a>
         <a href="<?php echo base_url() ?>admin/view_rfq">      

             <div class="col-lg-3">
                <div class="widget style1 " style="background: #ff5b57!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> View RFQ </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>           
</a>
             <a href="<?php echo base_url() ?>admin/add_payment">      

             <div class="col-lg-3">
                <div class="widget style1 " style="background: #0080ff!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> Create Payment </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>         
            
</a>
         <a onclick="alert('Working')">      

             <div class="col-lg-3">
                <div class="widget style1 " style="background: #bf00ff!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> Organogram </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>  
</a>
         <a onclick="alert('Working')">      

             <div class="col-lg-3">
                <div class="widget style1 " style="background: #1b620e!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> Calender </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>         
         
</a>
         <a onclick="alert('Working')">      

             <div class="col-lg-3">
                <div class="widget style1 " style="background: #ffa300!important; color:white;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span class="font-bold"> Discussion Board </span>
                            <h2 class="font-bold"></h2>
                        </div>
                    </div>
                </div>
            </div>         
         
</a>          
                </div>
     <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                    <div>
                                        <span class="pull-right text-right">
                                       
                                            <br/>
                                            All Leads: <?php echo $total_request; ?>
                                        </span>
                                        <h3 class="font-bold no-margins">
                                            Fuill Year Leads
                                        </h3>
                                        <small>Leads</small>
                                    </div>

                                <div>
                                    <canvas id="lineChart" height="70"></canvas>
                                </div>

                                <div class="m-t-md">
                                 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                
                </div>

     
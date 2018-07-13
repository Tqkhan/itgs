
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME - ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Payments</a>
                        </li>
                        <li class="active">
                            <strong>Create Payment</strong>
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
                        <div class="ibox-title">
                            <h5>Create Employee</h5>
                       
                        </div>
                        <div class="ibox-content">
                      
                            <form class="form-horizontal" action="<?php echo base_url() ?>admin/update_payment" method="post" name="tech_form" enctype="multipart/form-data">
                              
                                
 <div class="row">
                                <div class="col-lg-5">
                                    <dl class="dl-horizontal">

                                        <dt>Created by:</dt> <dd><?php echo $records['login_name'] ?></dd>
                                        <dt>Messages:</dt> <dd>  <?php echo count($replies); ?></dd>
                                        <dt>Attachments:</dt> <dd><a href="<?php echo base_url() ?>uploads/<?php echo $records['file'] ?>" class="text-navy"><?php echo $records['file'] ?> </a> </dd>
                                    </dl>
                                </div>  <div class="col-lg-5">
                                    <dl class="dl-horizontal">

                                        <dt>Client Name:</dt> <dd><?php echo $records['client_name'] ?></dd>
                                        <dt>Client Email:</dt> <dd>  <?php echo $records['client_email'] ?></dd>
                                        <dt>Client Company:</dt> <dd> <?php echo $records['company_name'] ?></dd>
                                        <dt>Client Phone:</dt> <dd>  <?php echo $records['client_phone'] ?></dd>
                                        <dt>Client Address:</dt> <dd>  <?php echo $records['client_address'] ?></dd>
                                        
                                    </dl>
                                </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                      
  
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Payment Type</label>
                                                <div class="col-md-6 col-xs-12">
                                               
<input type="hidden" name="leadID" value="<?php echo $records['leadID'] ?>" >
                                                <select name="payment_option" required="" id="" class="form-control select">
                                                    <option value="">Select Payment</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Cheque">Cheque</option>
                                                </select>


                                                 </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Amount</label>
                                                <div class="col-md-6 col-xs-12">
                                                     <input type="text" class="form-control" name="amount" value=""  style="color:#000;" placeholder="Enter Amount  " required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Cheque No</label>
                                                <div class="col-md-6 col-xs-12">
                                            <input type="text" class="form-control" name="cheque_no" value=""  style="color:#000;" placeholder="Enter Cheque No" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Receiving Date</label>
                                                <div class="col-md-6 col-xs-12">
                                                  <input type="date" class="form-control" name="rec_date" value="" placeholder="Enter Phone Number" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Discount</label>
                                                <div class="col-md-6 col-xs-12">
                                                     <input type="text" class="form-control" name="discount" value=""  style="color:#000;" placeholder="Total number of Employees" required/>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                               
                                       <input type="submit" name="submit2" value="Submit Payment" class="btn btn-danger pull-right" action="table-datatables.html"   />
                                            </div>
                                            



                                        </div>

                                     

                            </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
     

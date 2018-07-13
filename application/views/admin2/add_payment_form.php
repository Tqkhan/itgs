
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
								<h1>Create Payment</h1>
								<small></small>
								<ol class="breadcrumb">
									<li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
									<li class="active">Create Payment</li>
								</ol>
							</div>
						</div> <!-- /. Content Header (Page header) -->

								<form method="post" action="<?php echo base_url() ?>admin/update_payment" enctype="multipart/form-data">

						<div class="row">
						<div class="col-sm-12">
								<div class="panel panel-bd ">

									<div class="panel-body">
											<h3><strong>Create Payment</strong> </h3>
                                </div>
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
	<div class="panel-body">
			<div class="form-group row">
			<label for="example-text-input" class="col-sm-2 col-form-label">Payment Type<span class="required">*</span></label>
			<div class="col-sm-4">
			<input type="hidden" name="leadID" value="<?php echo $records['leadID'] ?>" >
                                                <select name="payment_option" required="" id="" class="form-control select">
                                                    <option value="">Select Payment</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Cheque">Cheque</option>
                                                </select>
                                            </div>
                                        </div>
		<div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">  Amount<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" name="amount" id="example-text-input" placeholder="enter amount">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Cheque No<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" name="cheque_no" id="example-text-input" placeholder="enter cheque no">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label"> Recieving Date<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="date" value="" name="rec_date" id="example-text-input" placeholder="enter recieve date">
            </div>
            <label for="example-text-input" class="col-sm-2 col-form-label">Discount<span class="required">*</span></label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" id="example-text-input" placeholder="enter discount">
            </div>
        </div>
         <div class="form-group row">

             <label for="example-text-input" class="col-sm-2 col-form-label">
                                        </label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
        </div>
        </form>
    </div>
                            </div>
			<div style="height: 450px;"></div>
	
   

					   


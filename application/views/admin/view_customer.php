
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>SME- ERP</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Customers</a>
                        </li>
                        <li class="active">
                            <strong>View Customer</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
           
                                    <?php foreach ($customers as $customer): ?>
   <div class="col-lg-4">
                <div class="contact-box">
                    <a href="profile.html">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <img alt="image" class="img-circle m-t-xs img-responsive" src="<?php echo base_url() ?>assets/img/a2.jpg">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <h3><strong><?php echo $customer['client_name'] ?></strong></h3>
                        <p><i class="fa fa-map-marker"></i><?php echo $customer['client_address'] ?></p>
                        <address>
                            <strong><?php echo $customer['client_email'] ?></strong><br>
                           
                            <abbr title="Phone">P:</abbr> <?php echo $customer['client_phone'] ?>
                        </address>
                    </div>
                    <div class="clearfix"></div>
                        </a>
                </div>
            </div>
                                    <?php endforeach ?>

         
        </div>
        </div>
 
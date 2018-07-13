<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>SME-ERP | Admin Login</title>

	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	<link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
<style type="text/css">


/************************************************************
*************************Footer******************************
*************************************************************/

@import url(http://fonts.googleapis.com/css?family=Fjalla+One);
@import url(http://fonts.googleapis.com/css?family=Gudea);
.footer1 {
    background: #fff url("../images/footer/footer-bg.png") repeat scroll left top;
	padding-top: 40px;
	padding-right: 0;
	padding-bottom: 20px;
	padding-left: 0;/*	border-top-width: 4px;
	border-top-style: solid;
	border-top-color: #003;*/
}



.title-widget {
	color: #898989;
	font-size: 20px;
	font-weight: 300;
	line-height: 1;
	position: relative;


	margin-bottom: 25px;

}

.title-widget::before {
    background-color: #ea5644;
    content: "";
    height: 22px;
    left: 0px;
    position: absolute;
    top: -2px;
    width: 5px;
}



.widget_nav_menu ul {
    list-style: outside none none;
    padding-left: 0;
}

.widget_archive ul li {
    background-color: rgba(0, 0, 0, 0.3);
    content: "";
    height: 3px;
    left: 0;
    position: absolute;
    top: 7px;
    width: 3px;
}


.widget_nav_menu ul li {
    font-size: 13px;
    font-weight: 700;
    line-height: 20px;
	position: relative;
    text-transform: uppercase;
	border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    margin-bottom: 7px;
    padding-bottom: 7px;
	width:95%;
}



.title-median {
    color: #636363;
    font-size: 20px;
    line-height: 20px;
    margin: 0 0 15px;
    text-transform: uppercase;
	font-family: Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.footerp p {font-family: Roboto, 'Helvetica Neue', Helvetica, Arial, sans-serif; }


.footer-bottom {
    background-color: #3e454c;
    min-height: 30px;
    width: 100%;
}
.copyright {
    color: #fff;
    line-height: 30px;
    min-height: 30px;
    padding: 7px 0;
    font-size: 12px;
}
.design {
    color: #fff;
    line-height: 30px;
    min-height: 30px;
    padding: 7px 0;
    text-align: right;
}
.design a {
    color: #fff;
}


/************************************************************
*************************Footer******************************
*************************************************************/
    </style>
</head>

<body style="background-image: url(http://www.itgsverify.com/assets/img/bg-wallpaper.jpg); background-size: cover;">
<!-- class ADD loginscreen -->
	<div class="middle-box text-center  animated fadeInDown" style="

	border-top: 5px solid #c62026;
	background: rgba(255, 255, 255, 0.81);
	box-shadow: 0 0 10px 0px; width: 358px; height: 371px; border-radius: 3px; position: fixed;">

<div style="margin-top: -55px;">

				<!-- <h1 class="logo-name"><img src="<?php echo base_url() ?>assets/logo.png"></h1> -->
				<h1 class="logo-name"><img src="http://www.itgsverify.com/assets/img/logo.png" height="67" width="268"></h1>


			<h3 >Welcome to ITGS</h3>

			<p >Login in. To see it in action.</p>
			<form class="m-t" role="form" method="post" action="<?php echo base_url() ?>admin/client_login" style="padding: 10px; margin-top: -1px !important;">
				<div class="form-group">
					<input type="text" class="form-control" name="login_name" placeholder="Username" required="">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Password" required="">
				</div>
				<button type="submit" class="btn btn-primary block full-width m-b">Login</button>

<?php if ($error): ?>
				<a class="btn btn-danger block full-width m-b"><?php echo $error; ?></a>

<?php endif ?>

			</form>

		</div>

	</div>
<div class="footer-bottom" style=" background-size: cover; position:fixed;
   left:0px;
   bottom:0px;
   width:100%;
   " >

	<div class="container">

		<div class="row">

			<center><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<div class="copyright">

					© 2017 Powered by<a href="http://magmacc.com/" style="color: red; font-weight: 400"> Magma Consulting Corp. </a> | All rights reserved


				</div>

			</div></center>
		</div>

	</div>

</div>

	<!-- Mainly scripts -->

	<script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>


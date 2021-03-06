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

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <!-- <h1 class="logo-name"><img src="<?php echo base_url() ?>assets/logo.png"></h1> -->
                <h1 class="logo-name">SME</h1>

            </div>
            <h3>Welcome to SME-ERP</h3>
           
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" action="<?php echo base_url() ?>admin/check_login">
                <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                
<?php if ($error): ?>
                <a class="btn btn-danger block full-width m-b"><?php echo $error; ?></a>
    
<?php endif ?>

            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>

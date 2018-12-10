<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $site['nameweb'] ?></title>

	<link href="<?php echo base_url('dist/uploads/image/thumbs/'.$site['icon']); ?>" rel="apple-touch-icon" type="image/png">
    <link href="<?php echo base_url('dist/uploads/image/thumbs/'.$site['icon']); ?>" rel="icon" type="image/png">
    <link href="<?php echo base_url('dist/uploads/image/thumbs/'.$site['icon']); ?>" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url('dist/admin/css/separate/pages/login.min.css'); ?>  ">
    <link rel="stylesheet" href="<?php echo base_url('dist/admin/css/lib/font-awesome/font-awesome.min.css'); ?>  ">
    <link rel="stylesheet" href="<?php echo base_url('dist/admin/css/lib/bootstrap/bootstrap.min.css'); ?>  ">
    <link rel="stylesheet" href="<?php echo base_url('dist/admin/css/main.css'); ?>  ">
	<link rel="stylesheet" href="<?php echo base_url('dist/admin/plugins/toastr/toastr.min.css');?>">
</head>
<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
								<?php echo form_open('check_login', array('id' => 'form-login','class' => 'sign-box')); ?>
                    <div class="sign-avatar">
                        <img src="<?php echo base_url('dist/uploads/image/thumbs/'.$site['icon']); ?>" alt="">
                    </div>
                    <header class="sign-title">Sign In</header>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail " autofocus name="email" value="<?php echo set_value('email');?>" required/>
                    </div>
                    <div class="form-group">
                        <input name="password" id="hide-show-password" type="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in"/>
                            <label for="signed-in">Keep me signed in</label>
                        </div>
                        <!-- <div class="float-right reset">
                            <a href="#">Reset Password</a>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn-rounded" data-callback="OnSubmit">Sign in</button>

                    <p class="sign-note">Menu Utama <a href="http://pahtsung.lan/">PAHTSUNG.LAN</a></p>
                    <!-- <button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                <?php echo form_close();?>
            </div>
        </div>
    </div><!--.page-center-->


<script src="<?php echo base_url('dist/admin/js/lib/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('dist/admin/js/lib/tether/tether.min.js') ?>"></script>
<script src="<?php echo base_url('dist/admin/js/lib/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('dist/admin/js/plugins.js') ?>"></script>
<script src="<?php echo base_url('dist/admin/js/lib/match-height/jquery.matchHeight.min.js') ?>"></script>

<script src="<?php echo base_url() ?>dist/admin/js/lib/hide-show-password/bootstrap-show-password.min.js"></script>
<script src="<?php echo base_url() ?>dist/admin/js/lib/hide-show-password/bootstrap-show-password-init.js"></script>

<script src="<?php echo base_url('dist/admin/plugins/toastr/toastr.min.js');?>"></script>

        
        <?php if ($this->session->flashdata('msg')=='failed-1') { ?>
            <script>toastr.error('<strong>Sign in failed!</strong><br/>Your account has been blocked.')</script>
        <?php }elseif ($this->session->flashdata('msg')=='failed-2') { ?>
            <script>toastr.error('<strong>Sign in failed!</strong><br/>Username or password is incorrect.')</script>
        <?php }elseif ($this->session->flashdata('msg')=='failed-3') { ?>
            <script>toastr.error("<strong>Sign in failed!</strong><br/>Make sure you're not a robot.")</script>
        <?php }elseif ($this->session->flashdata('msg')=='error') { ?>
            <script>toastr.warning('<strong>Session ends!</strong><br/>Please sign in again.')</script>
        <?php } ?>

        <script>
            // preloader
            $(window).load(function() {
                $("#preloader").fadeOut("slow");
            });
            function onSubmit(token) {
                $("#preloader").fadeIn("slow");
                $("#form-login").submit();
            };
        </script>

		<script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>


</body>
</html>

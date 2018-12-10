<?php
    if(!$this->session->userdata('id_admin')){
        $this->session->set_flashdata('msg', 'error');
        header('location: '.base_url('login'));
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sistem Sarana & Prasarana Pah Tsung</title>

	<link href="<?php echo base_url() ?>dist/admin/img/logo3.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="<?php echo base_url() ?>dist/admin/img/logo3.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="<?php echo base_url() ?>dist/admin/img/logo3.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="<?php echo base_url() ?>dist/admin/img/logo3.png" rel="apple-touch-icon" type="image/png">
	<link href="<?php echo base_url() ?>dist/admin/img/logo3.png" rel="icon" type="image/png">
	<link href="<?php echo base_url() ?>dist/admin/img/favicon.ico" rel="shortcut icon">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/lobipanel/lobipanel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/vendor/lobipanel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/jqueryui/jquery-ui.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/widgets.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/plugins/toastr/toastr.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/elements/steps.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/bootstrap-table/bootstrap-table.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/datatables-net/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/vendor/datatables-net.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/ladda-button/ladda-themeless.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/vendor/context_menu.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/bootstrap-sweetalert/sweetalert.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/vendor/sweet-alert-animations.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/user.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/summernote/summernote.css"/>
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/editor.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/project.min.css">

	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/vendor/tags_editor.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/vendor/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/lib/summernote/summernote.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/editor.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/project.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/activity.min.css">
	<?php if ($menu=='error404') { ?>
		<link rel="stylesheet" href="<?php echo base_url() ?>dist/admin/css/separate/pages/error.min.css">
	<?php } ?>
</head>
<body class="with-side-menu ">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="<?php echo base_url(); ?>" class="site-logo">
	            <img class="hidden-md-down" src="<?php echo base_url() ?>dist/admin/img/logo.png" alt="Pah Tsung">
	            <img class="hidden-lg-up" src="<?php echo base_url() ?>dist/admin/img/logo.png" alt="">
	        </a>
	         <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">

	                    <!-- <div class="dropdown dropdown-notification notif">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i> 
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Notifications
	                                <span class="label label-pill label-danger">4</span>
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="<?php echo base_url() ?>dist/admin/img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Morgan</a> was bothering about something
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="<?php echo base_url('proses/permintaan/') ?>">See more</a>
	                            </div>
	                        </div>
	                    </div> -->

	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="<?php echo base_url() ?>dist/admin/img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#" ><span class="font-icon glyphicon glyphicon-user" ></span><?php echo $this->session->userdata('username'); ?></a>
	                            <a class="dropdown-item" href="<?php echo base_url('dta-user-edit/'.$this->session->userdata('id_admin'));?>"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	                    
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
                    
	                </div><!--.site-header-shown-->

	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <?php if ($this->session->userdata('role')=='Super Admin') { ?>

	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-cogwheel"></span>
	                                Setting
	                            </a>

	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <div class="dropdown-header">MASTER</div>
	                                <div class="dropdown-divider"></div>	                                
	                                <a class="dropdown-item" href="<?php echo base_url('pages/barang') ?>"><span class="font-icon font-icon-globe"></span>General Config</a>
	                                <a class="dropdown-item" href="<?php echo base_url('pages/barang') ?>"><span class="font-icon font-icon-home"></span>Menu</a>
	                                <a class="dropdown-item" href="<?php echo base_url('pages/barang') ?>"><span class="font-icon font-icon-home"></span>Alamat</a>
	                            </div>
	                        </div>

	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="fa fa-user"></span>
	                                User 
	                            </a>

	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <div class="dropdown-header">Pengaturan</div>
	                                <div class="dropdown-divider"></div>	       
	                                <a class="dropdown-item" href="<?php echo base_url('data-user') ?>">
	                                </span> Data User</a>
	                            </div>
	                        </div>
							<?php } ?>

							<?php if ($this->session->userdata('role')=='Super Admin' || $this->session->userdata('role')=='Sarpras') { ?>

							<!-- Master Sarpras -->
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="fa fa-folder"></span>
	                                Master Sarpras
	                            </a>
	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <div class="dropdown-header">
	                                	<span class="fa fa-database"></span> Barang Inventaris</div>
	                                <div class="dropdown-divider"></div>
		                                <a class="dropdown-item" href="<?php echo base_url('data-barang') ?>">Data Barang</a>
		                                <div class="dropdown-divider"></div>
		                                <a class="dropdown-item" href="<?php echo base_url('data-groupsub') ?>">Group & Subroup</a>
		                                <a class="dropdown-item" href="<?php echo base_url('data-satuan') ?>">Satuan Barang</a>
	                                <div class="dropdown-divider"></div>
	                               <!--  <div class="dropdown-more">
	                                   <div class="dropdown-more-caption padding">more...</div>
	                                   <div class="dropdown-more-sub">
	                                       <div class="dropdown-more-sub-in">
	                                       	 
	                                           <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                               
	                                       </div>
	                                   </div>
	                               </div> -->
		                            <div class="dropdown-header">
		                            	<span class="fa fa-key"></span> Ruangan 
		                            </div>
	                              <div class="dropdown-divider"></div>	       
	                                <a class="dropdown-item" href="<?php echo base_url('data-ruangan') ?>">
	                                Data Ruangan</a>
	                                <a class="dropdown-item" href="<?php echo base_url('data-pic-list') ?>">
	                                Data Pic</a>
	                                <!-- <div class="dropdown-more">
	                                   <div class="dropdown-more-caption ">Pic</div>
	                                   <div class="dropdown-more-sub">
	                                       <div class="dropdown-more-sub-in">
	                                       	 
	                                           <a class="dropdown-item" href="<?php echo base_url('data-pic-list') ?>">Data Pic</a>
	                                           <a class="dropdown-item" href="<?php echo base_url('data-pic') ?>">Data Karyawan</a>
	                                	                               
	                                       </div>
	                                   </div>
	                                	                               	</div> -->
	                                
	                            </div>
	                        </div>
	                        <?php } ?>
							
							<?php if ($this->session->userdata('role')=='Super Admin' || $this->session->userdata('role')=='Pembelian') { ?>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="fa fa-folder"></span>
	                                Master Pembelian
	                            </a>

	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <div class="dropdown-header">
	                                	<span class="fa fa-group"></span> Supplier</div>
	                                <div class="dropdown-divider"></div>	       
	                                <a class="dropdown-item" href="<?php echo base_url('data-supplier') ?>">
	                                </span>Data Supplier</a>
	                                
	                            </div>
	                        </div>
	                        <?php } ?>

	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>


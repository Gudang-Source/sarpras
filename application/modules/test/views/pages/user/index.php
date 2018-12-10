
<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Admin') { ?>

    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h3>Data User<small class="text-muted"> </small></h3>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="<?php echo base_url('data-user-add');?>" class="btn btn-rounded">Add User</a>
            </div>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    <div class="container-fluid">
      <div class="row card-user-grid">
        <?php $no=0; foreach ($user as $dataUser) { $no++; ?>
        <div class="col-sm-6 col-md-4 col-xl-3">
          <article class="card-user box-typical">
            <a href="#" class="card-user-action float-left">
              <i class="fa fa-times-circle-o"></i> <?php echo $dataUser->block ?>
            </a>
            <div class="card-user-action float-right">
              <div class="dropdown dropdown-user-menu">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-option-vertical"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="<?php echo base_url('data-user-edit/'.$dataUser->id_admin);?>"><span class="fa fa-pencil"></span> Edit Profil</a>

                  <a class="dropdown-item" href="<?php echo base_url('data-user-block/'.$dataUser->id_admin);?>"><span class="fa fa-times-circle-o"></span> Block</a>

                  <a class="dropdown-item" href="<?php echo base_url('data-user-aktif/'.$dataUser->id_admin);?>"><span class="fa fa-check"></span> Aktifkan</a>

                  <a class="dropdown-item" href="<?php echo base_url('data-user-delete/'.$dataUser->id_admin);?>"><span class="fa fa-trash"></span> Hapus</a>
                </div>
              </div>
            </div>
            <!-- <div class="card-user-photo">
              <img src="<?php echo base_url() ?>dist/admin/img/100x100.jpg" alt="">
            </div> -->
            <div class="card-user-name">
              <?php
                  $out = strlen($dataUser->username) > 15 ? substr($dataUser->username,0,15).'... ' : $dataUser->username;
                    echo $out;
                ?> 
            </div>
            <div class="card-user-status"><?php echo $dataUser->nik ?> <br> 
            
            </div>
            <div class="card-user-info-row">
              <i class="font-icon font-icon-user"></i>
              <?php echo $dataUser->divisi ?>
            </div>
            <?php if ($this->session->userdata('role') == 'Super Admin'): ?>
            <div class="card-user-info-row">
              <i class="font-icon font-icon-notebook"></i>
              <?php echo $dataUser->role ?>
            </div>
            <?php endif ?>
            <div class="card-user-info-row">
              <i class="fa fa-envelope-o"></i>
               <?php
                  $out = strlen($dataUser->email) > 25 ? substr($dataUser->email,0,25).'... ' : $dataUser->email;
                    echo $out;
                ?> 
            </div>
            <div class="card-user-info-row">
              <i class="fa fa-calendar"></i>
              <?php echo $dataUser->date_created ?>
            </div>

            <?php if ($dataUser->block == 'n') { ?>
            <div class="card-user-name"><span class="label label-custom label-pill label-success">Aktif</span></div>
            <?php } else { ?>
              <div class="card-user-name"><span class="label label-custom label-pill label-danger">Nonaktif</span></div>
            <?php } ?>

            <div class="card-user-status"></div>
            <!-- <a href="#" class="btn btn-rounded">Aktif</a> -->

            <!-- <div class="card-user-social">
              <a href="#">
                <i class="font-icon font-icon-fb-fill"></i>
              </a>
              <a href="#">
                <i class="font-icon font-icon-vk-fill"></i>
              </a>
              <a href="#">
                <i class="font-icon font-icon-in-fill"></i>
              </a>
              <a href="#">
                <i class="font-icon font-icon-tw-fill"></i>
              </a>
            </div> -->
            
          </article><!--.card-user-->
        </div>
        <?php } ?>
      </div><!--.card-user-grid-->
    </div><!--.container-fluid-->

<?php }else{ ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>404 Page Not Found</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('backend/dashboard');?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <li class="active">Page not found</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="text-center">
            <span style="font-size: 15em;font-weight: bolder;">404</span>
            <h2 style="margin-top: 0;">You don't have access to this page</h2>
        </div>
    </section>
</div>
<?php } ?>
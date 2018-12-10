<section class="widget widget-user">
    <header class="widget-header-dark with-btn">
        User Info
    </header>
    <div class="widget-user-bg" style="background-image: url(<?php echo base_url('dist/admin/img/widget-user-bg.jpg') ?>)"></div>
    <div class="widget-user-photo">
        <img src="<?php echo base_url() ?>dist/admin/img/avatar-2-256.png" alt="">
    </div>
    <div class="widget-user-name">
        <i class="font-icon font-icon-award"></i>
        <?php echo $this->session->userdata('divisi') ?>
    </div>
    <div> <i class="fa fa-user"></i> <?php echo $this->session->userdata('username') ?></div>
    <div> <i class="fa fa-envelope"></i> <?php echo $this->session->userdata('email') ?></div>
    
</section> <!-- User Info -->
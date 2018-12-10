<nav class="side-menu jspScrollable">
    <ul class="side-menu-list">
        <li class="grey with-sub">
          <a href="<?php echo base_url(); ?>">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl active">Dashboard</span>
            </span>
          </a>
        </li>
        <li class="brown with-sub">
            <span>
                <i class="font-icon glyphicon glyphicon-tint"></i>
                <span class="lbl">ENTRY</span>
            </span>
            <ul>
                <li class="with-sub"><a href="<?php echo base_url('entry'); ?>"> <span class="lbl"> Pengajuan</span></a></li>
                <li class="with-sub"><a href="<?php echo base_url('service'); ?>"><span class="lbl">Service / Maintance</span></a></li>
                <?php  if ($this->session->userdata('role') =='Pembelian') { ?>
                <li>
                    <a href="<?php echo base_url('proses/pembelian-barang'); ?>">
                        <span class="lbl">Pembelian Barang</span>
                    </a>
                </li>
                <?php } ?>

            </ul>
        </li>
        <li class="purple with-sub">
            <span>
                <i class="font-icon font-icon-comments active"></i>
                <span class="lbl">PROSES</span>
            </span>
            <ul>
                <?php if ($this->session->userdata('role') =='Super Admin'|| $this->session->userdata('role') =='User') { ?>

                    <li>
                      <a href="<?php echo base_url('proses/unit-list-barang'); ?>">
                        <span class="lbl">Permintaan Barang</span>
                        <!-- <span class="label label-custom label-pill label-danger">0</span> -->
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('proses/unit-list-atk'); ?>">
                        <span class="lbl">Permintaan ATK</span>
                        
                      </a>
                    </li>

                <?php } elseif ($this->session->userdata('role') =='Kepsek') { ?>
                    <li>
                      <a href="<?php echo base_url('proses/kepunit-list-barang'); ?>">
                        <span class="lbl">Permintaan Barang</span>
                        
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('proses/kepunit-list-atk'); ?>">
                        <span class="lbl">Permintaan ATK</span>
                        
                      </a>
                    </li>
                <?php } elseif ($this->session->userdata('role') =='Sarpras') { ?>
                    <li>
                      <a href="<?php echo base_url('proses/sarpras-list-barang'); ?>">
                        <span class="lbl">Permintaan Barang</span>
                        
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('proses/sarpras-list-atk'); ?>">
                        <span class="lbl">Permintaan ATK</span>
                        
                      </a>
                    </li>

                    <li>
                      <a href="<?php echo base_url('proses/list-terima-barang'); ?>">
                        <span class="lbl">Penerimaan Barang</span>
                        
                      </a>
                    </li>
                <?php } elseif ($this->session->userdata('role') =='Direktur') { ?>
                    <li>
                      <a href="<?php echo base_url('proses/direktur-list-barang'); ?>">
                        <span class="lbl">Permintaan Barang</span>
                        
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('proses/direktur-list-atk'); ?>">
                        <span class="lbl">Permintaan ATK</span>
                        
                      </a>
                    </li>
                

                <?php } elseif ( $this->session->userdata('role') =='Pembelian') { ?>
                    <li>
                        <a href="<?php echo base_url('proses/pembelian-list-barang'); ?>">
                            <span class="lbl">Permintaan Barang</span>
                            
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('proses/pembelian-list-atk'); ?>">
                            <span class="lbl">Permintaan ATK</span>
                            
                        </a>
                    </li>
                    <hr>
                    <li><a href="<?php echo base_url('laporan/pembelian-laporan-barang') ?>"> <span class="lbl"> Pembelian Barang</span></a></li>
                    <li><a href="<?php echo base_url('proses/list-terima-barang') ?>"><span class="lbl">Penerimaan Barang</span></a></li>

                <?php } elseif ($this->session->userdata('role') =='Super Admin' || $this->session->userdata('role') =='Toko') { ?>

                    <li><a href="<?php echo base_url('proses/pembelian-atk') ?>"> <span class="lbl"> Pembelian ATK</span></a></li>
                    <li><a href="<?php echo base_url('proses/list-terima-atk') ?>"><span class="lbl">Penerimaan ATK</span></a></li>

                <?php } ?>

            <?php if ($this->session->userdata('role') =='Super Admin'){ ?>
 
                <li>
                    <a href="<?php echo base_url('proses/penerimaan') ?>">
                        <span class="lbl">Penerimaan Barang</span>
                        
                    </a>
                </li>
            <?php } ?>

            </ul>
        </li>

        <li class="red with-sub">
            <span>
                <i class="fa fa-archive fa-5x"></i>
                <span class="lbl">LAPORAN</span>
            </span>
            <ul>

                <li><a href="<?php echo base_url('laporan/list-laporan-barang') ?>"> <span class="lbl"> Permintaan Barang</span></a></li>
                <li><a href="<?php echo base_url('laporan/list-laporan-atk') ?>"> <span class="lbl"> Permintaan ATK</span></a></li>

                <!-- Laporan Pembelian Barang & ATK -->
                    <?php if ($this->session->userdata('role') =='Super Admin' || $this->session->userdata('role') =='Pembelian') { ?>                
                        <li><a href="<?php echo base_url('laporan/pembelian-laporan-barang') ?>"> <span class="lbl"> Pembelian Barang</span></a></li>
                    <?php } ?>
                    
                    <?php if ($this->session->userdata('role') =='Super Admin' || $this->session->userdata('role') =='Toko') { ?>  
                        <li><a href="<?php echo base_url('laporan/toko-laporan-atk') ?>"> <span class="lbl"> Pembelian ATK</span></a></li>
                    <?php } ?>
                <!-- End -->


                <!-- Laporan Permintaan Batal -->
                    <!-- <?php if ($this->session->userdata('role') =='Super Admin' || $this->session->userdata('role') =='User' || $this->session->userdata('role') =='Sarpras' || $this->session->userdata('role') =='Kepsek') { ?>  
                        <li><a href="<?php echo base_url('laporan/dibatalkan/barang/') ?>"> <span class="lbl"> Permintaan Barang Dibatalkan</span></a></li>

                        <li><a href="<?php echo base_url('laporan/dibatalkan/atk/') ?>"> <span class="lbl"> Permintaan ATK Dibatalkan</span></a></li>
                    <?php } ?> -->

                <!-- End -->

            </ul>

        </li>





    </ul>

    <section style="margin-top: 250px;">
            <header class="side-menu-title"><i class="font-icon glyphicon glyphicon-question-sign"></i> General Problem</header>

            <?php if ($this->session->userdata('role')=='Super Admin'  || $this->session->userdata('divisi')== 'IT'): ?>
                <ul class="side-menu-list">
                    <li>
                        <a href="<?php echo base_url('data-gudang-it') ?>">
                            <i class="tag-color green"></i>
                            <span class="lbl">Gudang Barang</span>
                        </a>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            <?php endif ?>

            <?php if ($this->session->userdata('role')=='Super Admin'  || $this->session->userdata('role')== 'Sarpras'): ?>
                <ul class="side-menu-list">
                    <li>
                        <a href="<?php echo base_url('data-gudang') ?>">
                            <i class="tag-color green"></i>
                            <span class="lbl">Gudang Barang</span>
                        </a>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            <?php endif ?>

            <?php if ($this->session->userdata('role')=='Super Admin'  || $this->session->userdata('role')== 'User'): ?>
                <ul class="side-menu-list">
                    <li>
                        <a href="<?php echo base_url('data-gudang-tu') ?>">
                            <i class="tag-color green"></i>
                            <span class="lbl">Gudang Barang</span>
                        </a>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            <?php endif ?>

            <?php if ($this->session->userdata('role')=='Super Admin'  || $this->session->userdata('role')== 'Pic'): ?>
                <ul class="side-menu-list">
                    <li>
                        <a href="<?php echo base_url('data-gudang-pic') ?>">
                            <i class="tag-color green"></i>
                            <span class="lbl">Gudang Barang</span>
                        </a>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            <?php endif ?>


            
    </section>

 
</nav><!--.side-menu-->

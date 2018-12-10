<!-- Task KepUnit -->
    <?php if ($this->session->userdata('role')=='Kepsek') {?>
    <section class="widget top-tabs">
        <header class="widget-header-dark">Tasks Status </header>
        <!-- Tab Nav -->
        <div class="widget-tabs-nav colored">
            <ul class="tbl-row" role="tablist">
                <li class="nav-item">
                    <a class="nav-link green active" data-toggle="tab" href="#kepunit-tab-1" role="tab">
                        <i class="font-icon font-icon-case-2"></i>
                        Barang <span class="label label-pill label-danger"><?php echo $kepunit_barang; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blue" data-toggle="tab" href="#kepunit-tab-2" role="tab">
                        <i class="font-icon font-icon-notebook-lines"></i>
                        ATK <span class="label label-pill label-danger"><?php echo $kepunit_atk; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange" data-toggle="tab" href="#kepunit-tab-3" role="tab">
                        <i class="font-icon font-icon-cogwheel"></i>
                        Service
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content widget-tabs-content">
            <div class="tab-pane active" id="kepunit-tab-1" role="tabpanel">
                <center><b>Task Status Barang</b></center>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
                            <th><div>Status</div></th>
                            <th align="center"><div>ID Orders#</div></th>
                            <th><div>Nama</div></th>
                            <th align="center"><div>Subjek</div></th>
                        </tr>
                        <?php foreach ($get_barang as $dataBarang) { ?> 
                            <?php if ( $dataBarang->status == 'Kepsek') { ?>                  
                            <tr>
                                <td>
                                    <a href="<?php echo base_url('proses/kepunit-edit-barang/'.$dataBarang->id_order_barang); ?>">
                                        <span class="btn btn-success">Proses</span>
                                    </a>
                                    
                                </td>
                                <td align="center">B-<?php echo $dataBarang->id_order_barang ?></td>
                                <td><?php echo $dataBarang->nama ?></td>
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold"><?php echo $dataBarang->subjek ?></span> </td>
                            </tr>
                            <?php } ?> 
                        <?php } ?>
                    </table>
                </div><!--.box-typical-body-->
            </div>
            <div class="tab-pane" id="kepunit-tab-2" role="tabpanel">
                <center><b>Task Status ATK</b></center>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
                            <th><div>Status</div></th>
                            <th align="center"><div>ID Orders#</div></th>
                            <th><div>Nama</div></th>
                            <th align="center"><div>Subjek</div></th>
                        </tr>
                    <?php foreach ($get_atk as $dataAtk) { ?> 
                        <?php if ( $dataAtk->status == 'Direktur')  { ?>
                                              
                        <tr>
                            <td>
                                <a href="<?php echo base_url('proses/kepunit-edit-atk/'.$dataAtk->id_order_atk); ?>">
                                    <span class="btn btn-success">Proses</span>
                                </a>
                            </td>
                            <td align="center">ATK-<?php echo $dataAtk->id_order_atk ?></td>
                            <td><?php echo $dataAtk->nama ?></td>
                            
                            <td class="color-blue-grey" align="center"><span class="semibold"><?php echo $dataAtk->subjek ?></span> </td>
                        </tr>
                        <?php } ?> 
                    <?php } ?>
                    </table>
                </div><!--.box-typical-body-->
            </div>
            <div class="tab-pane" id="kepunit-tab-3" role="tabpanel">
                <center><b>Task Status Service</b></center>
            </div>
        </div>


    </section>   <!--.widget-task--> 
    <?php } ?>


<!-- Task Sarpras -->
    <?php if ($this->session->userdata('role')=='Sarpras') {?>
        <section class="widget top-tabs">
            <header class="widget-header-dark">Tasks Status Sarpras</header>
            <!-- Tab Nav -->
            <div class="widget-tabs-nav colored">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link green active" data-toggle="tab" href="#sarpras-tab-1" role="tab">
                            <i class="font-icon font-icon-case-2"></i>
                            Barang <span class="label label-pill label-danger"><?php echo $sarpras_barang; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blue" data-toggle="tab" href="#sarpras-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            ATK <span class="label label-pill label-danger"><?php echo $sarpras_atk; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link orange" data-toggle="tab" href="#sarpras-tab-3" role="tab">
                            <i class="font-icon font-icon-cogwheel"></i>
                            Service
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="sarpras-tab-1" role="tabpanel">
                    <center><b>Task Status Barang</b></center>
                    <div class="box-typical-body panel-body">
                        <table class="tbl-typical">
                            <tr>
                                <th><div>Status</div></th>
                                <th align="center"><div>ID Orders#</div></th>
                                <th><div>Nama</div></th>
                                <th align="center"><div>Date</div></th>
                            </tr>
                            <?php foreach ($get_barang as $dataBarang) { ?> 
                                <?php if ( $dataBarang->status == 'Sarpras') { ?>                  
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url('proses/sarpras-edit-barang/'.$dataBarang->id_order_barang); ?>">
                                            <span class="btn btn-success">Proses</span>
                                        </a>
                                        
                                    </td>
                                    <td align="center">B-<?php echo $dataBarang->id_order_barang ?></td>
                                    <td><?php echo $dataBarang->nama ?></td>
                                    <td class="color-blue-grey" nowrap align="center">
                                        <span class="semibold"><?php echo $dataBarang->created_date ?></span> 
                                    </td>
                                </tr>
                                <?php } ?> 
                            <?php } ?>
                        </table>
                    </div><!--.box-typical-body-->
                </div>
                <div class="tab-pane" id="sarpras-tab-2" role="tabpanel">
                    <center><b>Task Status ATK</b></center>
                    <div class="box-typical-body panel-body">
                        <table class="tbl-typical">
                            <tr>
                                <th><div>Status</div></th>
                                <th align="center"><div>ID Orders#</div></th>
                                <th><div>Subject</div></th>
                                <th align="center"><div>Date</div></th>
                            </tr>
                        <?php foreach ($get_atk_sarpras as $dataAtk) { ?> 
                                                  
                            <tr>
                                <td>
                                    <a href="<?php echo base_url('proses/kepunit-edit-atk/'.$dataAtk->id_order_atk); ?>">
                                        <span class="btn btn-success">Proses</span>
                                    </a>
                                </td>
                                <td align="center">ATK-<?php echo $dataAtk->id_order_atk ?></td>
                                <td><?php echo $dataAtk->nama ?></td>
                                
                                <td class="color-blue-grey" ><?php echo $dataAtk->subjek ?></td>
                            </tr>

                        <?php } ?>
                        </table>
                    </div><!--.box-typical-body-->
                </div>
                <div class="tab-pane" id="sarpras-tab-3" role="tabpanel">
                    <center><b>Task Status Service</b></center>
                </div>
            </div>


        </section>   <!--.widget-task--> 

    <?php } ?>


<!-- Task Direktur -->
    <?php if ($this->session->userdata('role')=='Direktur') {?>
    <section class="widget top-tabs">
        <header class="widget-header-dark">Tasks Status Direktur</header>
        <!-- Tab Nav -->
        <div class="widget-tabs-nav colored">
            <ul class="tbl-row" role="tablist">
                <li class="nav-item">
                    <a class="nav-link green active" data-toggle="tab" href="#direktur-tab-1" role="tab">
                        <i class="font-icon font-icon-case-2"></i>
                        Barang <span class="label label-pill label-danger"><?php echo $direktur_barang; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blue" data-toggle="tab" href="#direktur-tab-2" role="tab">
                        <i class="font-icon font-icon-notebook-lines"></i>
                        ATK <span class="label label-pill label-danger"><?php echo $direktur_atk; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange" data-toggle="tab" href="#direktur-tab-3" role="tab">
                        <i class="font-icon font-icon-cogwheel"></i>
                        Service
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content widget-tabs-content">
            <div class="tab-pane active" id="direktur-tab-1" role="tabpanel">
                <center><b>Task Status Barang</b></center>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
                            <th><div>Status</div></th>
                            <th align="center"><div>ID Orders#</div></th>
                            <th><div>Nama</div></th>
                            <th align="center"><div>Subjek</div></th>
                        </tr>
                        <?php foreach ($get_barang as $dataBarang) { ?> 
                            <?php if ( $dataBarang->status == 'Direktur') { ?>                  
                            <tr>
                                <td>
                                    <a href="<?php echo base_url('proses/direktur-edit-barang/'.$dataBarang->id_order_barang); ?>">
                                        <span class="btn btn-success">Proses</span>
                                    </a>
                                    
                                </td>
                                <td align="center">B-<?php echo $dataBarang->id_order_barang ?></td>
                                <td><?php echo $dataBarang->nama ?></td>
                                <td class="color-blue-grey" align="center"><span class="semibold"><?php echo $dataBarang->subjek ?></span> </td>
                            </tr>
                            <?php } ?> 
                        <?php } ?>
                    </table>
                </div><!--.box-typical-body-->
            </div>
            <div class="tab-pane" id="direktur-tab-2" role="tabpanel">
                <center><b>Task Status ATK</b></center>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
                            <th><div>Status</div></th>
                            <th align="center"><div>ID Orders#</div></th>
                            <th><div>Nama</div></th>
                            <th align="center"><div>Subjek</div></th>
                        </tr>
                    <?php foreach ($get_atk as $dataAtk) { ?> 
                        <?php if ( $dataAtk->status == 'Direktur')  { ?>
                                              
                        <tr>
                            <td>
                                <a href="<?php echo base_url('proses/direktur-edit-atk/'.$dataAtk->id_order_atk); ?>">
                                    <span class="btn btn-success">Proses</span>
                                </a>
                            </td>
                            <td align="center">ATK-<?php echo $dataAtk->id_order_atk ?></td>
                            <td><?php echo $dataAtk->nama ?></td>
                            
                            <td class="color-blue-grey"  align="center"><span class="semibold"><?php echo $dataAtk->subjek ?></span> </td>
                        </tr>
                        <?php } ?> 
                    <?php } ?>
                    </table>
                </div><!--.box-typical-body-->
            </div>
            <div class="tab-pane" id="direktur-tab-3" role="tabpanel">
                <center><b>Task Status Service</b></center>
            </div>
        </div>


    </section>   <!--.widget-task--> 
    <?php } ?>

<!-- Task Pembelian -->
    <?php if ($this->session->userdata('role')=='Pembelian') {?>
        <section class="widget top-tabs">
            <header class="widget-header-dark">Tasks Status Pembelian</header>
            <!-- Tab Nav -->
            <div class="widget-tabs-nav colored">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link green active" data-toggle="tab" href="#pembelian-tab-1" role="tab">
                            <i class="font-icon font-icon-case-2"></i>
                            Barang <span class="label label-pill label-danger"><?php echo $pembelian_barang; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blue" data-toggle="tab" href="#pembelian-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            ATK <span class="label label-pill label-danger"><?php echo $pembelian_atk; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link orange" data-toggle="tab" href="#pembelian-tab-3" role="tab">
                            <i class="font-icon font-icon-cogwheel"></i>
                            Service
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link red "  href="<?php echo base_url('proses/pembelian-barang'); ?>" role="tab">
                            <i class="font-icon font-icon-cart"></i>
                            Buat PO 
                            <!-- <span class="label label-pill label-danger"><?php echo $pembelian_barang; ?></span> -->
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="pembelian-tab-1" role="tabpanel">
                    <center><b>Task Status Barang Permintaan</b></center>
                    <div class="box-typical-body panel-body">
                        <table class="tbl-typical">
                            <tr>
                                <th><div>Status</div></th>
                                <th align="center"><div>ID Orders#</div></th>
                                <th><div>Nama</div></th>
                                <th align="center"><div>Date</div></th>
                            </tr>
                            <?php foreach ($get_barang_pembelian as $dataBarang) { ?> 
                                <?php if ( $dataBarang->status == 'Pembelian') {  ?>                  
                                    <tr>
                                        <td>
                                            <?php if ( $dataBarang->status == 'User') { ?> 
                                                <span class="label label-warning">Proses</span>
                                            <?php } elseif ($dataBarang->status == 'Pembelian') { ?>
                                                <span class="label label-success">PO</span>
                                            <?php } elseif ($dataBarang->status == 'Terima') { ?>
                                                <span class="label label-success">Terima</span>
                                            <?php } elseif ($dataBarang->status == 'Dibatalkan') { ?>
                                                <span class="label label-danger">Dibatalkan</span>
                                            <?php } elseif ($dataBarang->status == 'Diterima User') { ?>
                                                <span class="btn btn-success">Terima</span>
                                            <?php } else { ?>
                                                 <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" data-toggle="tooltip" data-placement="top" title="Detail">
                                                     <span class="btn btn-warning">Proses</span>
                                                 </a>
                                            <?php } ?>


                                        </td>

                                        <td align="center">B-<?php echo $dataBarang->id_order_barang ?></td>
                                        <td><?php echo $dataBarang->nama ?></td>
                                        <td class="color-blue-grey" nowrap align="center"><span class="semibold"><?php echo $dataBarang->created_date ?></span> </td>
                                    </tr>

                                <?php } ?> 
                            <?php } ?>
                        </table>
                    </div><!--.box-typical-body-->
                </div>
                <div class="tab-pane" id="pembelian-tab-2" role="tabpanel">
                    <center><b>Task Status ATK</b></center>
                    <div class="box-typical-body panel-body">
                        <table class="tbl-typical">
                            <tr>
                                <th><div>Status</div></th>
                                <th align="center"><div>ID Orders#</div></th>
                                <th><div>Subject</div></th>
                                <th align="center"><div>Date</div></th>
                            </tr>
                        <?php foreach ($get_atk as $dataAtk) { ?> 
                            <?php if ( $dataAtk->status == 'Pembelian')  { ?>
                                                  
                            <tr>
                                <td>
                                    <span class="label label-success">New</span>
                                </td>
                                <td align="center"><?php echo $dataAtk->no_order_atk ?></td>
                                <td><?php echo $dataAtk->subjek ?></td>
                                
                                <td class="color-blue-grey" nowrap align="center"><span class="semibold"><?php echo $dataAtk->created_date ?></span> </td>
                            </tr>
                            <?php } ?> 
                        <?php } ?>
                        </table>
                    </div><!--.box-typical-body-->
                </div>
                <div class="tab-pane" id="pembelian-tab-3" role="tabpanel">
                    <center><b>Task Status Service</b></center>
                </div>
            </div>

        </section> 
    <?php } ?>

      <!--.widget-task--> 

<!-- Task Toko -->
    <?php if ($this->session->userdata('role')=='Toko') {?>
    <section class="widget top-tabs">
        <header class="widget-header-dark">Tasks Status Toko</header>
        <!-- Tab Nav -->
        <div class="widget-tabs-nav colored">
            <ul class="tbl-row" role="tablist">
                <li class="nav-item">
                    <a class="nav-link green active" data-toggle="tab" href="#toko-tab-1" role="tab">
                        <i class="font-icon font-icon-case-2"></i>
                        Barang ATK<span class="label label-pill label-danger"><?php echo $toko_atk; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link red "  href="<?php echo base_url('proses/pembelian-atk'); ?>" role="tab">
                        <i class="font-icon font-icon-notebook-lines"></i>
                        BUAT PO
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link orange" data-toggle="tab" href="#toko-tab-3" role="tab">
                        <i class="font-icon font-icon-cogwheel"></i>
                        Service
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content widget-tabs-content">
            <div class="tab-pane active" id="toko-tab-1" role="tabpanel">
                <center><b>Task Status Barang</b></center>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
                            <th><div>Status</div></th>
                            <th align="center"><div>ID Orders#</div></th>
                            <th><div>Nama</div></th>
                            <th align="center"><div>Subjek</div></th>
                        </tr>
                        <?php foreach ($get_atk_pembelian as $dataBarang) { ?> 
                            <?php if ( $dataBarang->status_barang == 'Toko') { ?>                  
                            <tr>
                                <td>
                                    <a href="<?php echo base_url('proses/toko-edit-barang/'.$dataBarang->id_order_atk); ?>">
                                        <span class="btn btn-success">Proses</span>
                                    </a>
                                    
                                </td>
                                <td align="center">ATK-<?php echo $dataBarang->id_order_atk ?></td>
                                <td><?php echo $dataBarang->nama ?></td>
                                <td class="color-blue-grey" align="center"><?php echo $dataBarang->subjek ?></td>
                            </tr>
                            <?php } ?> 
                        <?php } ?>
                    </table>
                </div><!--.box-typical-body-->
            </div>
            <div class="tab-pane" id="toko-tab-2" role="tabpanel">
                <center><b>Task Status ATK</b></center>
                <div class="box-typical-body panel-body">
                    <table class="tbl-typical">
                        <tr>
                            <th><div>Status</div></th>
                            <th align="center"><div>ID Orders#</div></th>
                            <th><div>Nama</div></th>
                            <th align="center"><div>Subjek</div></th>
                        </tr>
                    <?php foreach ($get_atk as $dataAtk) { ?> 
                        <?php if ( $dataAtk->status == 'Direktur')  { ?>
                                              
                        <tr>
                            <td>
                                <a href="<?php echo base_url('proses/toko-edit-atk/'.$dataAtk->id_order_atk); ?>">
                                    <span class="btn btn-success">Proses</span>
                                </a>
                            </td>
                            <td align="center">ATK-<?php echo $dataAtk->id_order_atk ?></td>
                            <td><?php echo $dataAtk->nama ?></td>
                            
                            <td class="color-blue-grey" nowrap align="center"><span class="semibold"><?php echo $dataAtk->subjek ?></span> </td>
                        </tr>
                        <?php } ?> 
                    <?php } ?>
                    </table>
                </div><!--.box-typical-body-->
            </div>
            <div class="tab-pane" id="toko-tab-3" role="tabpanel">
                <center><b>Task Status Service</b></center>
            </div>
        </div>


    </section>   <!--.widget-task--> 
    <?php } ?>

    
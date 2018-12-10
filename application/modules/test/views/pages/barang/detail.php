 <?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Sarpras' || $this->session->userdata('role') == 'User') { ?>
            
        <div class="box-typical box-typical-padding">
            <header class="page-content-header">
                <div class="tbl">
                  <div class="tbl-row">
                    <div class="tbl-cell">
                      <h2>Detail Barang</h2>
                      <div class="subtitle">Pages / Barang</div>
                    </div>
                    <div class="tbl-cell tbl-cell-action">
                      <a href="#" class="back btn btn-rounded"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                  </div>
                </div>
            </header><!--.page-content-header-->

            <div class="row">
                <div class="col-md-5">
                    <img style="width: 350px;" class="img img-responsive" src="<?php echo base_url('dist/uploads/barang_inventaris/'.$detail_barang->gambar) ?>" alt="">
                    <img style="width: 350px;" class="img img-responsive" src="http://placehold.it/350x350" alt="">
                </div>
                <div class="col-md-7">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped dfTable table-right-left">
                            <tbody>
                            <tr>
                                <td style="width:30%;">Barcode &amp; QRcode</td>
                                <td style="width:70%;">
                                    <img src="<?php echo base_url() ?>test/pages/barang/barcode/<?php echo $detail_barang->id_barang_group; ?>.<?php echo $detail_barang->id_barang_subgroup; ?>.<?php echo $detail_barang->no_barang; ?>.<?php echo $detail_barang->no_tahun; ?>.<?php echo $detail_barang->no_bulan; ?>" >
                                    <a href="<?php echo base_url('data-barang-print-all/'.$detail_barang->id_barang);?>" type="button" class="btn btn-inline btn-secondary-outline"><i class="fa fa-barcode"></i> Print All</a>

                                </td>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td><b><?php echo $detail_barang->nama_barang; ?></b></td>
                            </tr>
                            <tr>
                                <td>No Barang</td>
                                <td><b><?php echo $detail_barang->no_barang; ?></b></td>
                            </tr>
                            <tr>
                                <td>Group</td>
                                <td><?php echo $detail_barang->no_group; ?> | <b><?php echo $detail_barang->nama_group; ?></b></td>
                            </tr>
                            <tr>
                                <td>Subgroup</td>
                                <td><?php echo $detail_barang->no_subgroup; ?> | <b><?php echo $detail_barang->nama_subgroup; ?></b></td>
                            </tr>
                            <tr>
                                <td>Tanggal / Bulan Pembelian</td>
                                <td><b><?php echo $detail_barang->tanggal_beli; ?> </b></td>
                            </tr>
                            <tr>
                                <td>Tahun Ajaran</td>
                                <td><b><?php echo $detail_barang->tahunajar; ?></b></td>
                            </tr>
                            <tr>
                                <td>Unit / Satuan</td>
                                <td><b><?php echo $detail_barang->nama_satuan; ?></b></td>
                            </tr>

                            <tr>
                                <td>Stok Barang</td>
                                <td><b><?php echo $stok_barang; ?></b></td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                
            </div>
        </div><!--.box-typical-->

    <section class="card">
        <?php if (validation_errors() != '') { echo '<span class="text-danger">'.validation_errors().'</span><br/>'; } ?>
        <?php echo form_open('data-barang-detail/'.$detail_barang->id_barang, array('class' => 'row')); ?>

        <input hidden type="text" name="id_barang" value="<?php echo $detail_barang->id_barang; ?>">
            <div class="card-block">
                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h2>Detail Item Barang</h2>
                            </div> 

                            <div class="tbl-cell tbl-cell-action select">
                                <select class="form-control select"  nama="gudang[]" required>
                                    <option >--Pilih Gudang TU--</option>
                                    <option value="tk">TU TK</option>
                                    <option value="sd">TU SD</option>
                                    <option value="smp">TU SMP</option>
                                    <option value="sma">TU SMA</option>
                                    <option value="skr"> Sekretariat</option>
                                </select>
                            </div>
                            <div class="tbl-cell tbl-cell-action button">
                                <button type="submit" class="btn btn-rounded btn-block">Update</button>
                            </div>
                        </div>
                    </div>
                </header>
            </div>


            <div class="card-block">
                <div class="col-md-12">
                    <section class="card">
                        <div class="card-block">

                            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr><th></th>
                                        <th>No.Inventaris</th>
                                        <th>Nama Barang</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($detail_item as $detail) { ?>
                                        <tr>
                                            <td align="center">
                                                    <input type="checkbox" name="id_barang_item[]" id="<?php echo $detail->id_barang_item  ?>" value="<?php echo $detail->id_barang_item  ?>">
                                                  
                                            </td>
                                            <td>
                                                <?php echo $detail_barang->no_group; ?>.
                                                <?php echo $detail_barang->no_subgroup; ?>.
                                                <?php echo $detail_barang->no_barang; ?>.
                                                <?php echo $detail_barang->no_tahun; ?>.
                                                <?php echo $detail_barang->no_bulan; ?>.
                                                <?php echo $detail->no_item; ?>
                                            </td>
                                            <td><?php echo $detail_barang->nama_barang; ?>
                                                <input hidden type="text" name="nama_barang" value="<?php echo $detail_barang->nama_barang; ?>">
                                            </td>
                                 
                                            <td>
                                                <?php if ($detail->gudang=='sarpras' || $detail->gudang=='') { ?>
                                                    <span class="label label-pill label-warning">
                                                     Gudang Sarpras</span>
                                                <?php } else { ?>
                                                    <span class="btn btn-rounded btn-inline btn-success btn-sm">
                                                      <?php echo $detail->gudang; ?></span>

                                                    <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm">Detail</a>
                                                    
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                                              
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        <?php echo form_close(); ?>

    </section>
        
<?php } else { ?>
    
     
<?php } ?>

        
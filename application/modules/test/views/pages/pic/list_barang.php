 <?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Pic' || $this->session->userdata('role') == 'User') { ?>
            
    <header class="page-content-header">

        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Daftar Barang</h2>
              <div class="subtitle">Pages / Barang</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="#" class="back btn btn-rounded"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>
        </div>
    </header><!--.page-content-header-->

    <section class="card">
        <div class="card-block">
            <table id="tableBarang" class="display table table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No.Inventaris</th>
                        <th>Nama Barang</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detail_item as $detail) { ?>
                        <tr>
                            <td><?php echo $detail_barang->no_group; ?>.
                            <?php echo $detail_barang->no_subgroup; ?>.
                            <?php echo $detail_barang->no_barang; ?>.
                            <?php echo $detail_barang->no_tahun; ?>.
                            <?php echo $detail_barang->no_bulan; ?>.
                                <?php echo $detail->no_item; ?>
                            </td>
                            <td><?php echo $detail_barang->nama_barang; ?></td>
                            <td>
                                <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm">Detail</a>
                                <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm"> <?php echo $detail->id_karyawan ?></a>
                            </td>
                            

                            
                            
                        </tr>
                    <?php } ?>
                                              
                </tbody>
            </table>
        </div>
    </section>
           
        
<?php } else { ?>
    
     
<?php } ?>

        
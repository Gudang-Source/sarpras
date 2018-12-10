
    <header class="page-content-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Gudang Barang</h2>
              <div class="subtitle">Pages / Gudang <b><?php echo $this->session->userdata('divisi') ?></b></div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <!-- <a href="<?php echo base_url('data-barang-add');?>" class="btn btn-rounded">Add Barang</a> -->
            </div>
          </div>
        </div>
    </header><!--.page-content-header-->

      <section class="card">
        <div class="card-block">
           <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.Inventaris</th>
                                        <th>Nama Barang</th>
                                        <th>Ruangan</th>
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
                                            
                                            <!-- <td>
                                                <img src="<?php echo base_url() ?>test/pages/barang/barcode/<?php echo $detail_barang->id_barang_group; ?>.<?php echo $detail_barang->id_barang_subgroup; ?>.<?php echo $detail_barang->no_barang; ?>.<?php echo $detail_barang->no_tahun; ?>.<?php echo $detail_barang->no_bulan; ?>.<?php echo $detail->no_item; ?>" >
                                            </td> -->

                                            <?php if (validation_errors() != '') { echo '<span class="text-danger">'.validation_errors().'</span><br/>'; } ?>
                                      <?php echo form_open('data-gudang-pic-update/'.$detail->id_barang_item, array('class' => 'row')); ?>
                                            <td>
                                              <?php if ($detail->id_karyawan=='') { ?>
                                                <select class="form-control select2" name="id_karyawan" required="">
                                                <option >--Select--</option>

                                                <?php foreach ($data_sdm as $dataSdm ) { 
                                                    if ($dataSdm->status_aktif=='1') { ?>
                                                    <option value="<?php echo $dataSdm->nik; ?>"><?php echo $dataSdm->karyawan ?> </option>
                                                <?php } } ?>
                                              <?php } else { ?>
                                                  <?php echo $detail_barang->karyawan; ?>
                                              <?php } ?>


                                            </select>
                                            </td>
                                            <td>
                                              
                                              <?php if ($detail->id_karyawan==''): ?>
                                                <button type="button" class="btn btn-rounded btn-inline btn-warning btn-sm">Update</button>
                                              <?php endif ?>
                                                                                              

                                              <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm">Detail</a>
    
                                              </td>
                                      <?php echo form_close(); ?>     

                                            
                                            
                                        </tr>
                                    <?php } ?>
                                                              
                                </tbody>
                            </table>
                        </div>
        </div>
      </section>

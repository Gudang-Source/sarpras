
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
        <?php if (validation_errors() != '') { echo '<span class="text-danger">'.validation_errors().'</span><br/>'; } ?>
        <?php echo form_open('gudang-update-tu' , array('class' => 'row')); ?>
        


            <div class="card-block">
                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h2>Detail Item Barang</h2>
                            </div>
                            <div class="tbl-cell tbl-cell-action select">
                                <select class="form-control select"  name="id_ruangan">
                                    <option >--Pilih Ruangan--</option>
                                    <?php foreach ($ruangan as $dataRuangan) { ?>

                                       <option value="<?php echo $dataRuangan->id_ruangan; ?>"><?php echo $dataRuangan->no_ruangan ?> </option>

                                    <?php } ?>


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
                                    <?php if ($this->session->userdata('divisi') =='TK') {
                                        if ($detail->gudang=='TK') { ?>
                                            <tr>

                                               <td class="" >
                                                      <div class="checkbox checkbox-only">
                                                        <input type="checkbox" name="id_barang_item[]" id="<?php echo $detail->id_barang_item  ?>" value="<?php echo $detail->id_barang_item  ?>">
                                                        <label for="<?php echo $detail->id_barang_item ?>"></label>
                                                      </div>
                                                </td>
                                                <td>
                                                    <?php echo $detail_barang->no_group; ?>.
                                                    <?php echo $detail_barang->no_subgroup; ?>.
                                                    <?php echo $detail_barang->no_barang; ?>.
                                                    <?php echo $detail_barang->no_tahun; ?>.
                                                    <?php echo $detail_barang->no_bulan; ?>.
                                                    <?php echo $detail->no_item; ?>
                                                </td>
                                                <td><?php echo $detail->nama_barang; ?>
                                                                                                
                                                </td>
                                     
                                                <td>
                                                        <span class="btn btn-rounded btn-inline btn-success btn-sm">
                                                          <?php echo $detail->gudang; ?></span>

                                                        <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm">Detail</a>
                                                        
                                                </td>
                                            </tr>

                                    <?php } } else if ($this->session->userdata('divisi') =='SD')   { 
                                            if ($detail->gudang=='SD') { ?>
                                            <tr>

                                               <td class="" >
                                                      <div class="checkbox checkbox-only">
                                                        <input type="checkbox" name="id_barang_item[]" id="<?php echo $detail->id_barang_item  ?>" value="<?php echo $detail->id_barang_item  ?>">
                                                        <label for="<?php echo $detail->id_barang_item ?>"></label>
                                                      </div>
                                                </td>
                                                <td>
                                                    <?php echo $detail_barang->no_group; ?>.
                                                    <?php echo $detail_barang->no_subgroup; ?>.
                                                    <?php echo $detail_barang->no_barang; ?>.
                                                    <?php echo $detail_barang->no_tahun; ?>.
                                                    <?php echo $detail_barang->no_bulan; ?>.
                                                    <?php echo $detail->no_item; ?>
                                                </td>
                                                <td><?php echo $detail->nama_barang; ?>
                                                                                                
                                                </td>
                                     
                                                <td>
                                                        <span class="btn btn-rounded btn-inline btn-success btn-sm">
                                                          <?php echo $detail->gudang; ?></span>

                                                        <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm">Detail</a>
                                                        
                                                </td>
                                            </tr>
                                    <?php } } else if ($this->session->userdata('divisi') =='SMP')   { 
                                            if ($detail->gudang=='SMP') { ?>
                                            <tr>

                                               <td class="" >
                                                      <div class="checkbox checkbox-only">
                                                        <input type="checkbox" name="id_barang_item[]" id="<?php echo $detail->id_barang_item  ?>" value="<?php echo $detail->id_barang_item  ?>">
                                                        <label for="<?php echo $detail->id_barang_item ?>"></label>
                                                      </div>
                                                </td>
                                                <td>
                                                    <?php echo $detail_barang->no_group; ?>.
                                                    <?php echo $detail_barang->no_subgroup; ?>.
                                                    <?php echo $detail_barang->no_barang; ?>.
                                                    <?php echo $detail_barang->no_tahun; ?>.
                                                    <?php echo $detail_barang->no_bulan; ?>.
                                                    <?php echo $detail->no_item; ?>
                                                </td>
                                                <td><?php echo $detail->nama_barang; ?>
                                                                                                
                                                </td>
                                     
                                                <td>
                                                        <span class="btn btn-rounded btn-inline btn-success btn-sm">
                                                          <?php echo $detail->gudang; ?></span>

                                                        <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm">Detail</a>
                                                        
                                                </td>
                                            </tr>
                                    <?php } } else if ($this->session->userdata('divisi') =='SMA')   { 
                                            if ($detail->gudang=='SMA') { ?>
                                            <tr>

                                               <td class="" >
                                                      <div class="checkbox checkbox-only">
                                                        <input type="checkbox" name="id_barang_item[]" id="<?php echo $detail->id_barang_item  ?>" value="<?php echo $detail->id_barang_item  ?>">
                                                        <label for="<?php echo $detail->id_barang_item ?>"></label>
                                                      </div>
                                                </td>
                                                <td>
                                                    <?php echo $detail_barang->no_group; ?>.
                                                    <?php echo $detail_barang->no_subgroup; ?>.
                                                    <?php echo $detail_barang->no_barang; ?>.
                                                    <?php echo $detail_barang->no_tahun; ?>.
                                                    <?php echo $detail_barang->no_bulan; ?>.
                                                    <?php echo $detail->no_item; ?>
                                                </td>
                                                <td><?php echo $detail->nama_barang; ?>
                                                                                                
                                                </td>
                                     
                                                <td>
                                                        <span class="btn btn-rounded btn-inline btn-success btn-sm">
                                                          <?php echo $detail->gudang; ?></span>

                                                        <a href="<?php echo base_url('item-barang-detail/'.$detail->id_barang_item) ?>" class="btn btn-rounded btn-inline btn-primary btn-sm">Detail</a>
                                                        
                                                </td>
                                            </tr>

                                    <?php } } ?>




                                 <?php } ?> 
                                                              
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        <?php echo form_close(); ?>

    </section>

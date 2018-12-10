
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
                                <select class="form-control select"  name="gudang" >
                                    <option value="">--Pilih Gudang TU--</option>
                                    <option value="TK">TU TK</option>
                                    <option value="SD">TU SD</option>
                                    <option value="SMP">TU SMP</option>
                                    <option value="SMA">TU SMA</option>
                                    <option value="IT"> IT</option>
                                </select>
                            </div>
                            <div class="tbl-cell tbl-cell-action select">
                                <select class="form-control select"  name="id_ruangan">
                                    <option value="">--Pilih Ruangan--</option>
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
                            <table id="tableBarangItem" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>No Item</th>
                                    <th>Nama Barang</th>
                                    <th>Status</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>No Item</th>
                                    <th>Nama Barang</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </tfoot>
                          </table>

                        </div>
                    </section>
                </div>
            </div>


           
        <?php echo form_close(); ?>

    </section>


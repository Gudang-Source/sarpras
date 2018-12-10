 <?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Sarpras') { ?>
      <header class="page-content-header">
      
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Edit Barang</h2>
              <div class="subtitle">Pages / Barang</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="#" class="back btn btn-rounded"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>
        </div>
      </header>

        <div class="box-typical box-typical-padding">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2><b><?php echo $detail_barang->nama_barang; ?></b></h2>
                            <div class="subtitle"></div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-md-5">
                    <img style="width: 350px;" class="img img-responsive" src="<?php echo base_url('dist/uploads/barang_inventaris/'.$detail_barang->gambar) ?>" alt="">
                    <img style="width: 350px;" class="img img-responsive" src="http://placehold.it/350x350?text=No Picture" alt="">
                </div>
                <div class="col-md-7">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped dfTable table-right-left">
                            <tbody>
                            <tr>
                                <td style="width:30%;">Barcode &amp; QRcode</td>
                                <td style="width:70%;">
                                    <img src="<?php echo base_url() ?>test/pages/barang/barcode/<?php echo $detail_barang->no_group; ?>.<?php echo $detail_barang->no_subgroup; ?>.<?php echo $detail_barang->no_barang; ?>.<?php echo $detail_barang->no_tahun; ?>.<?php echo $detail_barang->no_bulan; ?>" >
                                    <a href="<?php echo base_url('data-barang-print-all/'.$detail_barang->id_barang);?>" type="button" class="btn btn-inline btn-secondary-outline"><i class="fa fa-barcode"></i> Print All</a>

                                </td>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td><input type="text" class="form-control" value="<?php echo $detail_barang->nama_barang; ?>"></td>
                            </tr>
                            <tr>
                                <td>No Barang</td>
                                <td><input type="text" class="form-control" value="<?php echo $detail_barang->no_barang; ?>"></td>
                            </tr>
                            <tr>
                                <td>Group</td>
                                <td>
                                    <fieldset class='form-group'>
                                      <label><b>Group</b></label>
                                      <select  class='form-control' id='group' name="group" required>
                                          <option value=''>Selected " <b><?php echo $detail_barang->nama_group ?></b> "</option>
                                          <?php foreach ($group as $dataGroup) { ?>
                                          <option name="group" value="<?php echo $dataGroup['no_group'] ?>"><?php echo $dataGroup['no_group'] ?> | <?php echo $dataGroup['nama_group'] ?></option>
                                          <?php } ?>
                                      </select>
                                      <small><i>Required *</i></small>
                                    </fieldset>
                                </td>
                            </tr>
                            <tr>
                                <td>Subgroup</td>
                                <td>
                                    <div class='form-group'>
                                      <label><b>Subgroup</b> </label>
                                      <select class='form-control' id='subgroup' name="subgroup">
                                        <option value=''>Selected " <b><?php echo $detail_barang->nama_subgroup ?></b> "</option>
                                      </select>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                              <td>Merk</td>
                              <td><input type="text" class="form-control" value="<?php echo $detail_barang->merk ?>"></td>
                            </tr>

                            <tr>
                              <td>Type</td>
                              <td><input type="text" class="form-control" value="<?php echo $detail_barang->type ?>"></td>
                            </tr>

                            <tr>
                              <td>Satuan</td>
                              <td>
                                <fieldset class='form-group'>
                                      <select  class='form-control'' name="satuan" >
                                          <option value=''>Selected " <b><?php echo $detail_barang->nama_satuan ?></b> "</option>
                                          <?php foreach ($dataSatuan as $dataSatuan) { ?>
                                          <option value="<?php echo $dataSatuan['id_barang_satuan'] ?>"><?php echo $dataSatuan['nama_satuan'] ?></option>
                                          <?php } ?>
                                      </select>
                                      <small><i>Required *</i></small>
                                    </fieldset>
                              </td>
                            </tr>

                            <tr>
                              <td>Jumlah Beli</td>
                              <td><input type="text" class="form-control" value="<?php echo $detail_barang->jumlah ?>"></td>
                            </tr>

                            <td>Tahun Ajaran</td>
                              <td><input type="text" class="form-control" value="<?php echo $detail_barang->tahunajar ?>"></td>
                            </tr>

                            <td><b>Stok Gudang</b></td>
                              <td><b><?php echo $detail_barang->jumlah ?> / item</b></td>
                            </tr>
                            
                           
                            </tbody>
                        </table>
                    </div>

                    <section class="proj-page-section">
                      <div class="proj-page-main-controls">
                        <div class="proj-page-main-controls-right">
                          <a href="" class="btn btn-md btn-primary  "><i class="fa fa-save"></i> Save</a>
                        </div>
                      </div>
                    </section>

                </div>
                <div class="clearfix"></div>
                
            </div>
        </div><!--.box-typical-->

        <section class="card">
            <div class="card-block">
              <?php if (validation_errors() != '') { echo '<span class="text-danger">'.validation_errors().'</span><br/>'; } ?>
                <?php echo form_open('test/pages/barang/add_item' , array('class' => 'row')); ?>
                  <input hidden type="text" name="id_barang"    value="<?php echo $detail_barang->id_barang; ?>">
                  <input hidden type="text" name="nama_barang"  value="<?php echo $detail_barang->nama_barang; ?>">
                    <header class="section-header">
                          <div class="tbl">
                            <div class="tbl-row">
                                <div class="tbl-cell ">
                                    <h2>Detail Item Barang</h2>
                                </div>

                                <!-- No Tahun -->
                                <div class="tbl-cell tbl-cell-action select">
                                  <label><b>Tahun</b></label>
                                    <select  class='form-control' id='no_tahun' name="no_tahun" required="">
                                        <option value="">--Pilih--</option>
                                        <option value="11">2011</option>
                                        <option value="12">2012</option>
                                        <option value="13"> 2013 </option>
                                        <option value="14"> 2014 </option>
                                        <option value="15"> 2015 </option>
                                        <option value="16"> 2016 </option>
                                        <option value="17"> 2017 </option>
                                        <option value="18"> 2018 </option>
                                        <option value="19"> 2019 </option>
                                        <option value="20"> 2020 </option>
                                    </select>
                                    <small><i>Required *</i></small>
                                </div>

                                <!-- No Bulan -->
                                <div class="tbl-cell tbl-cell-action select">
                                  <label><b>Bulan</b></label>
                                    <select class='form-control' name="no_bulan" required="">
                                        <option  value="">--Pilih--</option>
                                        <option value='01'>Januari</option>
                                        <option value='02'>February</option>
                                        <option value='03'>Maret</option>
                                        <option value='04'>April</option>
                                        <option value='05'>Mei</option>
                                        <option value='06'>Juni</option>
                                        <option value='07'>Juli</option>
                                        <option value='08'>Agustus</option>
                                        <option value='09'>September</option>
                                        <option value='10'>Oktober</option>
                                        <option value='11'>November</option>
                                        <option value='12'>Desember</option>
                                      </select>
                                      <small><i> Required *</i></small>
                                </div>

                                <!-- Jumlah Item -->
                                <div class="tbl-cell tbl-cell-action select">
                                    <label><b>Tambah Jumlah Item</b></label>
                                    <input type="text" class="form-control" name='jumlah' required>
                                    <input hidden type="text" class="form-control" name='jml_barang' value='<?php echo $detail_barang->jumlah ?>' required>
                                   <input hidden  type="text" class="form-control" name="no_item"  value="<?php echo sprintf("%04s", $detail_barang->jumlah+1); ?>">
                                    <small><i>Required *</i></small>
                                </div>

                                <div class="tbl-cell tbl-cell-action button">
                                    <button type="submit" class="btn btn-rounded btn-block"><i class="fa fa-plus"></i> Add Item</button>
                                </div>  
                            </div>
                          </div>
            
                          <hr>
           
                    </header>
                <?php echo form_close() ?>
            </div>  

        <?php if (validation_errors() != '') { echo '<span class="text-danger">'.validation_errors().'</span><br/>'; } ?>
        <?php echo form_open('test/pages/barang/edit_item' , array('class' => 'row')); ?>
        <input hidden type="text" name="id_barang"    value="<?php echo $detail_barang->id_barang; ?>">
           
            <div class="card-block">
                <header class="section-header">
                  <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                        </div>
                        
                        <!-- No Tahun -->
                        <div class="tbl-cell tbl-cell-action select">
                          <label><b>Tahun</b></label>
                            <select  class='form-control' name="no_tahun" required>
                                <option value="">--Pilih--</option>
                                <option value='11'>2011</option>
                                <option value='12'>2012</option>
                                <option value='13'>2013</option>
                                <option value='14'>2014</option>
                                <option value='15'>2015</option>
                                <option value='16'>2016</option>
                                <option value='17'>2017</option>
                                <option value='18'>2018</option>
                                <option value='19'>2019</option>
                                <option value='20'>2020</option>
                            </select>
                            <small><i>Required *</i></small>
                        </div>

                        <!-- No Bulan -->
                        <div class="tbl-cell tbl-cell-action select">
                          <label><b>Bulan</b></label>
                            <select class='form-control' name="no_bulan" required>
                                <option value="">-- Pilih --</option>
                                <option value='01'>01 | Januari</option>
                                <option value='02'>02 | February</option>
                                <option value='03'>03 | Maret</option>
                                <option value='04'>04 | April</option>
                                <option value='05'>05 | Mei</option>
                                <option value='06'>06 | Juni</option>
                                <option value='07'>07 | Juli</option>
                                <option value='08'>08 | Agustus</option>
                                <option value='09'>09 | September</option>
                                <option value='10'>10 | Oktober</option>
                                <option value='11'>11 | November</option>
                                <option value='12'>12 | Desember</option>
                              </select>
                              <small><i> Required *</i></small>
                        </div>

                        <div class="tbl-cell tbl-cell-action button">
                            <button type="submit" class="btn btn-rounded btn-block"><i class="fa fa-pencil"></i> Edit Item</button>
                        </div>  
                    </div>
                  </div>
                </header>
            </div>

            <div class="col-md-12">  
              <section class="card">
                  <div class="card-block">
                      <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>
                                    <div class="checkbox-toggle">
                                      <input type="checkbox" id="select_all">
                                      <label for="select_all">SelectAll</label>
                                    </div>                                            
                                  </th>
                                  <th>No.Inventaris</th>
                                  <th>Nama Barang</th>
                                  <th>Status</th>
                                  <th>Label / Barcode</th>
                                  <th>Option</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($detail_item as $detail) { ?>
                                  <tr>
                                      <td align="center" class="check-box" >
                                          <div class="checkbox checkbox-only">
                                            <input  type="checkbox" class="checkbox" name="id_barang_item[]" id="<?php echo $detail->id_barang_item  ?>" value="<?php echo $detail->id_barang_item  ?>">
                                            <label for="<?php echo $detail->id_barang_item ?>"></label>
                                          </div>
                                      </td>
                                      <td><?php echo $detail_barang->no_group; ?>.
                                          <?php echo $detail_barang->no_subgroup; ?>.
                                          <?php echo $detail_barang->no_barang; ?>.
                                          <?php echo $detail->no_tahun; ?>.
                                          <?php echo $detail->no_bulan; ?>.
                                          <?php echo $detail->no_item; ?>
                                      </td>

                                      <td><?php echo $detail_barang->nama_barang; ?></td>
                                      <td></td>
                                      <td>
                                          <img src="<?php echo base_url() ?>test/pages/barang/barcode/<?php echo $detail_barang->no_group; ?>.<?php echo $detail_barang->no_subgroup; ?>.<?php echo $detail_barang->no_barang; ?>.<?php echo $detail->no_tahun; ?>.<?php echo $detail->no_bulan; ?>.<?php echo $detail->no_item; ?>" >
                                      </td>
                                      <td>
                                          <div class="dropdown user-menu">
                                          <button class="btn btn-sm btn-inline dropdown-toggle" id="dropdownMenu1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                            
                                              <a class="dropdown-item" href="<?php echo base_url('data-barang-detail-item/'.$detail->id_barang_item);?>">
                                                <i class="fa fa-file-text-o"></i> Detail Item
                                              </a>                                               
                                            
                                              <a class="dropdown-item" href="<?php echo base_url('data-barang-print-barcode/'.$detail->id_barang_item);?>">
                                                <i class="fa fa-print"></i> Print Barcode/Label
                                              </a>
                                         
                                           <div class="dropdown-divider"></div>
                                            
                                              <a class="dropdown-item" href="<?php echo base_url('data-barang-delete/'.$detail->id_barang_item);?>">
                                                <i class="fa fa-trash-o"></i> Delete
                                              </a>
                                         
                                          </ul>
                                        </div>
                                      </td>
                                  </tr>
                              <?php } ?>
                                                        
                          </tbody>
                      </table>
                  </div>
              </section>
            </div>
           
          <?php echo form_close() ?>
        </section>
        
<?php } else { ?>
    
     
<?php } ?>

        
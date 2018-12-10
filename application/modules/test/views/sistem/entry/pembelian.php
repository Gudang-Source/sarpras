
    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Pembelian Barang</h2>
              <div class="subtitle">Proses / Pembelian Barang</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="#" class="back btn btn-rounded">Back</a>
            </div>
          </div>
        </div>
      </div>
    </header>

   
  
        

    


      <section class="card">
 <?php if (validation_errors() != '') {echo '
        <div class="alert alert-danger alert-no-border alert-close alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            Alert : '.validation_errors().'
          </div>
        </div>';} ?>
        <?php echo form_open('entry/pembelian-barang', array('class' => 'card-block' )); ?>
          <div class="row">
            <!-- NO PO -->
            <div class="col-lg-4 ">
              <div class="total-amount">
                <div>
                  <h5 class="m-t-lg with-border m-t-0"> <i class="font-icon font-icon-case-3"></i> Purchase Order </h5>
                </div>
                <div>
                  <b><?php echo $nopo ?>/<?php
                      $array_bulan = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
                      $bulan = $array_bulan[date('n')];
                      echo  "$bulan";
                  ?>/<?php echo date('Y'); ?>
                  <input hidden type="text" name="no_po" value="<?php echo $nopo ?>/<?php
                    $array_bulan = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
                    $bulan = $array_bulan[date('n')];

                    echo  "$bulan";
                  ?>/<?php echo date('Y'); ?>"></b>
                </div>
              </div>
            </div> 
          
            <!-- Perihal -->
            <div class="col-lg-4">
              <div class="total-amount">
                <h5 class="m-t-lg with-border m-t-0"><i class="fa fa-tag"></i>  Perihal</h5>
                <input name="perihal" type="text" class="form-control" placeholder="Perihal" required>
              </div>
            </div>

            <!-- Supplier -->
            <div class="col-lg-4">
                <h5 class="m-t-lg with-border m-t-0"><i class="fa fa-group"></i> Supplier</h5>
                <p class="line-with-icon">
                    <select class="form-control select" name="nama_supplier" id="">
                      <option value="">-- Select --</option>
                      <?php foreach ($supplier as $dataSupplier): ?>
                        <option  value="<?php echo $dataSupplier->nama_supplier; ?>"><?php echo $dataSupplier->nama_supplier; ?></option>
                      <?php endforeach ?>
                    </select>
                </p>

              
            </div>

            
          </div>

       
        
          <div class="row">
            

                <table id="tablePembelian" class="display table table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th >Pilih</th>
                      <th>No Order</th>
                      <th>Unit</th>
                      <th>Nama Barang</th>
                      <th>Satuan</th>
                      <th>Jumlah</th>
                      <th>Keterangan</th>
                      <th>Option</th>
                      
                    </tr>
                  </thead>
                    
                  <tbody>
                    
                    
                    <?php foreach ($barang as $dataBarang): ?>
                      
                      
                      <tr>
                        <?php if ($dataBarang->status =='Pembelian'){ ?>
                        <td class="" >
                              <div class="checkbox checkbox-only">
                                <input type="checkbox" name="id_order_item[]" id="<?php echo $dataBarang->id_order_item  ?>" value="<?php echo $dataBarang->id_order_item  ?>">
                                <label for="<?php echo $dataBarang->id_order_item ?>"></label>
                              </div>
                        </td>
                        <td width="10%">
                          B-<?php echo $dataBarang->id_order_barang; ?>
                          <input hidden type="text" name="id_order_barang[]" value="<?php echo $dataBarang->id_order_barang; ?>" >
                        
                        </td>
                        <td>
                          <?php echo $dataBarang->divisi; ?>
                          <input hidden type="text" name="divisi[]" value="<?php echo $dataBarang->divisi; ?>"  >
                        </td>
                        <td>
                          <?php echo $dataBarang->nama_barang; ?>
                          <input hidden type="text" name="nama_barang[]" value="<?php echo $dataBarang->nama_barang; ?>"  >
                        </td>
                        <td>
                          <?php echo $dataBarang->satuan; ?>
                          <input hidden type="text" name="satuan[]" value="<?php echo $dataBarang->satuan; ?>" > 
                        </td>
                        <td>
                          <?php echo $dataBarang->jumlah_sarpras; ?>
                          <input hidden type="text" name="jumlah[]" value="<?php echo $dataBarang->jumlah_sarpras; ?>" > 
                        </td>
                        <td>
                          <?php echo substr(strip_tags($dataBarang->keterangan), 0, 30)?>...
                          <input hidden type="text" name="keterangan[]" value="<?php echo $dataBarang->keterangan; ?>" > 
                          <input hidden type="text" name="keterangan_sarpras[]" value="<?php echo $dataBarang->keterangan_sarpras; ?>" >
                          <input hidden type="text" name="status_barang[]" value="Po" >
                          <input hidden type="text" name="status[]" value="Penerimaan" >
                        </td>
                                       
                        <td> 
                            <?php if ($dataBarang->file ==''){ ?> 
                                  <a href="#" class="btn btn-sm btn-info btn-flat" ><small><i class="fa fa-eye"></i> Tidak Ada</small></a>
                            <?php } else { ?>
                                  <a href="<?php echo base_url('dist/uploads/').$dataBarang->file;?>" class="btn btn-sm btn-info btn-flat" onclick="window.open(this.href, 'mywin','left=20,top=20,toolbar=0,resizable=0'); return false;"><small><i class="fa fa-eye"></i> View </small></a>
                            <?php  } ?>
                        </td>

                        <?php } ?>
                      </tr>
                      
                    <?php endforeach ?>

                  </tbody>

                </table>

            
          </div>

          <div class="row">
            <div class="col-lg-5 " style="margin-top: 20px;">
              <div class="total-amount">
                
                <div class="actions">
                  <button type="submit" class="btn btn-rounded btn-inline"><i class="font-icon font-icon-notebook"></i> Send</button>
                  <button class="back btn btn-inline btn-secondary btn-rounded">Cancel</button>
                </div>

              </div>
            </div>

            <div class="col-lg-7 terms-and-conditions clearfix">
              <!-- <strong>Terms and Conditions</strong> -->
            </div>
          </div>

          
        <?php echo form_close(); ?>  

        
      </section>



     

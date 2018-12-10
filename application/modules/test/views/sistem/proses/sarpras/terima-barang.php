
    <!-- Content Header (Page header) -->
  <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Terima Barang</h2>
              <div class="subtitle">Proses / Terima Barang</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a class="back btn btn-primary btn-flat btn-xs"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    <!-- Main content -->
    <section class="card" style="padding: 35px;">
      <div class="card-block">
        <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
                
        <?php echo form_open('proses/terima-barang/'.$podetail->id_po, array('class' => 'row')); ?> 
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-3  invoice-col">
              
              <address>
                No.PO <br>
                Perihal  <br>
                Tanggal Permintaan <br>
                Supplier  <br>
              </address>
            </div>

            <div class="col-sm-4  invoice-col">
              
              <address>
                : <strong><?php echo $podetail->no_po; ?></strong> <br>
                : <strong><?php echo $podetail->perihal; ?></strong> <br>
                : <?php echo $podetail->created_date; ?><br>
                <p><?php echo $podetail->nama_supplier; ?></p>
                
                <input hidden name="perihal" type="text" value="<?php echo $podetail->perihal; ?>">
                                
                <input hidden name="created_date" type="text" value="<?php echo $podetail->created_date; ?>">
                             
                
              </address>
            </div>

            <div class="col-sm-5 invoice-col text-center">

              <h2 class="lead" align="center"> SEKOLAH PAH TSUNG <br><img src="<?php echo base_url('dist/img/logo.png') ?>" alt="" align="center">  </h2>
              <!-- <b align="center">No Form : <?php echo $podetail->no_permintaan; ?></b> --><br>  
            </div>

          </div>

          <hr>
          <!-- Table row -->

          <div class="row">
            <div class="col-xs-12 table-responsive">
              
                <table class="table table-striped">
                  <thead class="text-center">
                    <tr align="center">
                      <th align="center">No. Order</th>
                      <th align="center">Nama Barang</th>
                      <th align="center">Unit</th>
                      <th class="text-center">Qty Beli</th>
                      <th class="text-center">Qty Terima</th>
                      <th align="center">Satuan</th>
                      <th align="center">Keterangan</th>
                    </tr>
                  </thead>

                  <tbody>

                  <?php $no=0; foreach ($poitem as $dataBarang) { $no++; ?>
                    <tr>

                      <td class="text-center"><?php echo $dataBarang->id_order_barang;?></td>
                      <td hidden class="text-center"><input name="id_po_item[]" type="text" class="form-control" value="<?php echo $dataBarang->id_po_item; ?>"></td>
                      <td hidden class="text-center"><input name="id_order_barang[]" type="text" class="form-control" value="<?php echo $dataBarang->id_order_barang; ?>"></td>
                      <td hidden class="text-center"><input name="id_order_item[]" type="text" class="form-control" value="<?php echo $dataBarang->id_order_item; ?>"></td>
              
                      <td class="text-center"><?php echo $dataBarang->nama_barang; ?></td>
                      <td class="text-center"><?php echo $dataBarang->divisi; ?></td>

                      <td align="center"><?php echo $dataBarang->jumlah; ?></td>
                      <td align="center">
                          <input name="jumlah_terima[]" type="text" class="form-control" value="<?php echo $dataBarang->jumlah; ?>" required>
                      </td>
                      <td><?php echo $dataBarang->satuan; ?></td>
                      <td width="30%"><?php echo $dataBarang->keterangan; ?></td>

                      <td hidden><input type="text" name="status[]" class="form-control" value="Penerimaan" ></td>
                      <td hidden><input type="text" name="status_barang[]" class="form-control" value="Terima Pembelian" ></td>
                     
                    </tr>

                  <?php } ?>
                  </tbody>

                  
                </table>
                
            </div>
            <!-- /.col -->
          </div>

          <!-- /.row -->
          <hr>
          <div class="row">
            <div class="col-xs-12 pull-right">
             
              <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>  Terima Barang
              </button>

              <button type="button" class="back btn btn-warning pull-right" style="margin-right: 5px;">
                <i class="fa fa-times "></i> Keluar
              </button>
             
           </div>
          </div>


          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->


            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
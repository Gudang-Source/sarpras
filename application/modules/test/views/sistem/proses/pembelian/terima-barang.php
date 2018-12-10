  <script type="text/javascript">
            $(document).ready(function() {
                $('#harga_satuan').keyup(function(){
                <!-- Ambil nilai !-->
                
                var jumlah_terima=parseInt($('#jumlah_terima').val());
                var harga_satuan=parseInt($('#harga_satuan').val());
     
                <!-- Perhitungan  !-->
                var subtotal=jumlah_terima*harga_satuan;
                $('#subtotal').val(subtotal);
                });
            });
  </script>


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

        <input type="text" id="jumlah"  onkeyup="sum();"/> + <input type="text" id="harga" onkeyup="sum();" /> 
        = <input type="text" id="total" />
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

                <input hidden name="status_po" type="text" value="Selesai">                

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
                      <th class="text-center">No. Order</th>
                      <th class="text-center">Nama Barang</th>
                      <th class="text-center">Unit</th>
                      <th class="text-center">Qty Beli</th>
                      <th class="text-center">Qty Terima</th>
                      
                      
                      
                      <?php if ($this->session->userdata('role')=='Sarpras') { ?>
                      <th class="text-center">Satuan</th>
                      <th class="text-center">Keterangan</th>
                      
                        <th class="text-center">Option</th>
                      <?php } else { ?>
                        <th class="text-center">Harga Satuan</th>
                        <th class="text-center">Subtotal</th>
                      <?php } ?>
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
                      <td class="text-center"><?php echo $dataBarang->jumlah; ?></td>

                      <td align="center">
                          <input onkeyup="sum();"  id="jumlah" name="jumlah_terima[]" type="text" class="form-control" value="<?php echo $dataBarang->jumlah; ?>" required>
                      </td>
                      

                      <?php if ($this->session->userdata('role')=='Sarpras') { ?>
                        <td><?php echo $dataBarang->satuan; ?></td>
                        <td class="text-center" width="20%"><?php echo $dataBarang->keterangan; ?></td>
                          <td class="text-center"> 
                              <a href="<?php echo base_url('data-barang-add') ?>" class="label label-primary" target='_blank'><i class="fa fa-plus"></i> Inventaris </a>
                          </td>
                      <?php } else { ?>
                        <td align="center">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">Rp.</div>
                              <input onkeyup="sum();"  id="harga"  name="harga_satuan[]" type="text" class="form-control"  placeholder="Harga Satuan" required>
                            </div>
                          </div>
                        </td>                   

                        <td><input id="total" name="subtotal[]" type="text" class="form-control"  ></td>
                      <?php } ?>

                      <td hidden><input type="text" name="status[]" class="form-control" value="Penerimaan" ></td>
                      <td hidden><input type="text" name="status_barang[]" class="form-control" value="Terima Pembelian" ></td>

                     
                    </tr>

                  <?php } ?>
                  </tbody>

                  
                </table>
                
            </div>
            <!-- /.col -->
          </div>
          <hr>
          <div class="row">
            <div class="col-xs-6">
              <p class="lead"><i class="fa fa-info"></i> Note Pembelian:</p>
              <p class="text-muted" align="justify">
                <textarea name="note_pembelian" cols="60" rows="8" class="form-control"></textarea>
              </p>
            </div>
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

    


            

    <!-- Content Header (Page header) -->
  <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Batal PO</h2>
              <div class="subtitle">Proses / Batal PO</div>
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
                
        <?php echo form_open('proses/pembelian-batal-po/'.$podetail->id_po, array('class' => 'row')); ?> 
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
                
                <input hidden name="status_po" type="text" value="Dibatalkan"> 
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
                      <th align="center">No.</th>
                      <th align="center">Nama Barang</th>
                      <th align="center">Unit</th>
                      <th class="text-center">Qty Beli</th>
                      <th align="center">Satuan</th>
                      <th align="center">Keterangan</th>
                    </tr>
                  </thead>

                  <tbody>

                  <?php $no=0; foreach ($poitem as $dataBarang) { $no++; ?>
                    <tr>

                      <td class="text-center"><?php echo $no;?></td>
                      <td hidden class="text-center"><input name="id_order_barang[]" type="text" class="form-control" value="B-<?php echo $dataBarang->id_order_barang; ?>"></td>
                      <td hidden class="text-center"><input name="id_order_item[]" type="text" class="form-control" value="<?php echo $dataBarang->id_order_item; ?>"></td>

                      <td class="text-center"><?php echo $dataBarang->nama_barang; ?></td>
                      <td class="text-center"><?php echo $dataBarang->divisi; ?></td>
                      <td align="center"><?php echo $dataBarang->jumlah; ?></td>
                      <td><?php echo $dataBarang->satuan; ?></td>
                      <td width="30%"><?php echo $dataBarang->keterangan; ?>

                      <td hidden><input type="text" name="status_barang[]" class="form-control" value="" ></td>
                      <td hidden><input type="text" name="status[]" class="form-control" value="Pembelian" ></td>
                     
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
                <textarea name="note_batal" cols="60" rows="8" class="form-control"></textarea>
              </p>
            </div>
          </div>

          <!-- /.row -->
          <hr>
          <div class="row">
            <div class="col-xs-12 pull-right">
             
              <!-- <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash"></i>  Batal PO
              </button> -->

                <button type="button" class="btn btn-inline btn-danger btn-sm ladda-button pull-right" data-toggle="modal" data-target="#myModalBatal<?php echo $podetail->id_po;?>">Batal</button>

                   <!-- Modal -->
                    <div class="modal fade" id="myModalBatal<?php echo $podetail->id_po;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Batalkan Purchase Order</h4>
                          </div>
                          <div class="modal-body">
                            <h3>Warning!!!</h3> 
                            <p>Item Barang yang ada pada Purchase Order <b><?php echo $podetail->no_po; ?></b> akan dikembalikan pada Proses Pembelian lagi.</p><br>
                            <p><i>*PO yang sudah dibatalkan tidak bisa dilanjutkan lagi</i></p>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash"></i>  Batal PO</button>
                            <!-- <a href="<?php echo base_url('p'.$dataPo->id_po);?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Batal"><i class="fa fa-close"></i> Batal</a> -->
                          </div>
                        </div>
                      </div>
                    </div>

              <button type="button" class="back btn btn-primary pull-right" style="margin-right: 5px;">
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
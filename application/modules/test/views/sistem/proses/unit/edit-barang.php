
    <!-- Content Header (Page header) -->
  <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan Barang Edit</h2>
              <div class="subtitle">Proses / Permintaan Barang Edit</div>
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
                
        <?php echo form_open('proses/unit-edit-barang/'.$barang->id_order_barang, array('class' => 'row')); ?> 
          <!-- info row -->

          <div class="row invoice-info">
            <div class="col-sm-3  invoice-col">
              
              <address>
                No  <br>
                Nama  <br>
                Divisi  <br>
                Tanggal Permintaan <br>
                Subjek  <br>
                
                <!-- Keterangan  <br> -->
              </address>
            </div>

            <div class="col-sm-4  invoice-col">
              
              <address>
                : <strong>B-<?php echo $barang->id_order_barang; ?></strong> <br>
                : <strong><?php echo $barang->nama; ?></strong> <br>
                : <strong><?php echo $barang->divisi; ?></strong> <br>
                : <?php echo $barang->created_date; ?><br>
                <input class="form-control" name="subjek" type="text" value="<?php echo $barang->subjek; ?>">

                
                <input hidden name="nama" type="text" value="<?php echo $barang->nama; ?>">
                
                <input hidden name="created_date" type="text" value="<?php echo $barang->created_date; ?>">
                             
                
              </address>
            </div>
            <!-- /.col -->

            <div class="col-sm-5 invoice-col text-center">

              <h2 class="lead" align="center"> SEKOLAH PAH TSUNG <br><img src="<?php echo base_url('dist/img/logo.png') ?>" alt="" align="center">  </h2>
              <!-- <b align="center">No Form : <?php echo $barang->no_permintaan; ?></b> --><br>  
            </div>

            <!-- /.col -->
          </div>
          <!-- /.row -->
          <hr>
          <!-- Table row -->
          
         

          <div class="row">
            <div class="col-xs-12 table-responsive">
              
                
              
                <table class="table table-striped">
                  <thead class="text-center">
                    <tr align="center">
                      <th align="center">No.</th>
                      <th align="center">Nama Barang</th>
                      <th class="text-center">Qty Unit</th>
                      <th align="center">Satuan</th>
                      <th align="center">Keterangan</th>
                    </tr>
                  </thead>

                  <tbody>

                  <?php $no=0; foreach ($barangitem as $dataBarang) { $no++; ?>
                    <tr>

                      <td class="text-center"><?php echo $no;?></td>
                      <td hidden class="text-center"><input name="id_order_item[]" type="text" class="form-control" value="<?php echo $dataBarang->id_order_item; ?>"></td>

                      <td class="text-center">
                        <input name="nama_barang[]" type="text" class="form-control" value="<?php echo $dataBarang->nama_barang; ?>" >
                      </td>

                      <td align="center">
                          <input name="jumlah[]" type="text" class="form-control" value="<?php echo $dataBarang->jumlah; ?>" >
                      </td>
                      <td>
                        
                        <input name="satuan[]" type="text" class="form-control" value="<?php echo $dataBarang->satuan; ?>" >
                         <!--  <?php echo form_dropdown('nama_satuan', $nama_satuan, $dataBarang->id_satuan , array('class'=>'form-control')); ?> -->
                      </td>
                      <td width="30%"><input type="text" name="keterangan[]" class="form-control" value="<?php echo $dataBarang->keterangan; ?>" ></td>
                     
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
             
              <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>  Simpan
              </button>

              <button type="button" class="back btn btn-danger pull-right" style="margin-right: 5px;">
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
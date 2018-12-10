
    <!-- Content Header (Page header) -->
  <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan Barang</h2>
              <div class="subtitle">Proses / Permintaan Barang</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <!-- <a href="<?php echo base_url('pages/barang/add');?>" class="btn btn-rounded">Add Barang</a> -->
            </div>
          </div>
        </div>
      </div>
  </header><!--.page-content-header-->

  <!-- Main content -->
  <section class="card" style="padding: 35px;">
    <div class="card-block">
      <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
              
      <?php echo form_open('proses/kepunit-edit-atk/'.$barang->id_order_atk, array('class' => 'row')); ?> 
        <!-- info row -->

        <div class="row invoice-info">
          <div class="col-sm-3  invoice-col">
            
            <address>
              No  <br>
              Nama  <br>
              Divisi  <br>
              Subjek  <br>
              Tanggal Permintaan <br>
              File Lampiran  <br>
            </address>
          </div>

          <div class="col-sm-4  invoice-col">
            
            <address>
              : <strong>ATK-<?php echo $barang->id_order_atk; ?></strong> <br>
              : <strong><?php echo $barang->nama; ?></strong> <br>
              : <strong><?php echo $barang->divisi; ?></strong> <br>
              : <strong><?php echo $barang->subjek; ?></strong> <br>
              : <?php echo $barang->created_date; ?><br>
              <?php if ($barang->file ==''){ ?> 
                <a href="#" class="btn btn-sm btn-info btn-flat" ><small><i class="fa fa-eye"></i> Tidak Ada</small></a>
            <?php } else { ?>
                <a href="<?php echo base_url('dist/uploads/').$barang->file;?>" class="btn btn-sm btn-info btn-flat" onclick="window.open(this.href, 'mywin','left=20,top=20,toolbar=0,resizable=0'); return false;"><small><i class="fa fa-eye"></i> View </small></a>
            <?php  } ?><br>

              
              <input hidden name="nama" type="text" value="<?php echo $barang->nama; ?>">
              <input hidden name="subjek" type="text" value="<?php echo $barang->subjek; ?>">
              <input hidden name="created_date" type="text" value="<?php echo $barang->created_date; ?>">
                           
              
            </address>
          </div>
          <!-- /.col -->

          <div class="col-sm-5 invoice-col text-center">

            <h2 class="lead" align="center"> SEKOLAH PAH TSUNG <br><img src="<?php echo base_url('dist/img/logo.png') ?>" alt="" align="center">  </h2>
            <!-- <b align="center">No Form : <?php echo $barang->no_order_atk; ?></b> --><br>  
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
                    <!-- <th class="text-center">Qty Sarpras</th> -->
                    <th align="center">Satuan</th>
                    <th align="center">Keterangan</th>
                  </tr>
                </thead>

                <tbody>

                <?php $no=0; foreach ($barangitem as $dataBarang) { $no++; ?>
                  
                  
                
                  <tr>

                    <td class="text-center"><?php echo $no;?></td>
                    <td hidden class="text-center"><input name="id_order_atk_item[]" type="text" class="form-control" value="<?php echo $dataBarang->id_order_atk_item; ?>"></td>

                    <td >
                      <?php echo $dataBarang->nama_barang; ?>
                      <input name="nama_barang[]" type="text" class="form-control" value="<?php echo $dataBarang->nama_barang; ?>" hidden>
                    </td>

                    <td align="center">
                        <?php echo $dataBarang->jumlah; ?>
                        <input name="jumlah[]" type="text" class="form-control" value="<?php echo $dataBarang->jumlah; ?>" hidden>
                    </td>
                    <td>
                      <?php echo $dataBarang->satuan; ?>
                    </td>
                    <td width="30%"><?php echo $dataBarang->keterangan; ?></td>
                   
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
          <div class="col-xs-6">
           <p class="lead"><i class="fa fa-info"></i> Note Kep. Unit:</p>
           <p class="text-muted" align="justify">
             <textarea name="note_kepsek"  cols="60" rows="8" class="form-control"></textarea>
            </p>
           
         </div>
        </div>


        <!-- this row will not appear when printing -->
        <div class="row no-print">
          <div class="col-xs-12">
            <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->

            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Setujui
            </button>

            <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
              <i class="fa fa-times "></i> Batal
            </button>

          </div>
        </div>
      <?php echo form_close(); ?>
    </div>
  </section>
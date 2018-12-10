
    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan Barang Detail</h2>
              <div class="subtitle">Proses/ Permintaan Barang Detail</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a class="back btn btn-primary btn-flat btn-xs"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

  <!-- Main content -->  
    <section class="card">
      <div class="card-block">

        <div class="row ">
          <div class="col-sm-4 invoice-col">
            <address>
            No  <br>
            Nama  <br>
            Divisi  <br>
            Subjek  <br>
            Tanggal Permintaan <br>
            File Lampiran  <br>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <address>
             : <strong>B-<?php echo $barang->id_order_barang; ?></strong> <br>
             <input name="id_order_barang" type="text" value="<?php echo $barang->id_order_barang; ?>" hidden>
            : <strong><?php echo $barang->nama; ?></strong> <br>
            : <strong><?php echo $barang->divisi; ?></strong> <br>
            : <strong><?php echo $barang->subjek; ?></strong> <br>
            : <?php echo $barang->created_date; ?><br>
            <?php if ($barang->file ==''){ ?> 
                  <a href="#" class="btn btn-sm btn-info btn-flat" ><small><i class="fa fa-eye"></i> Tidak Ada</small></a>
              <?php } else { ?>
                  <a href="<?php echo base_url('dist/uploads/').$barang->file;?>" class="btn btn-sm btn-info btn-flat" onclick="window.open(this.href, 'mywin','left=20,top=20,toolbar=0,resizable=0'); return false;"><small><i class="fa fa-eye"></i> View </small></a>
              <?php  } ?><br><br>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <h2 class="lead" align="center"> SEKOLAH PAH TSUNG <br><img src="<?php echo base_url('dist/img/logo.png') ?>" alt="" align="center">  </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Barang</th>
                  <th>Qty</th>
                  <th>Qty Sarpras</th>
                  <th>Satuan</th>
                  <th>Keterangan Barang</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=0; foreach ($barangitem as $dataBarang) { $no++; ?>
                
                <tr id="row">
                  <td class="text-center"><?php echo $no;?></td>
                  <td><?php echo $dataBarang->nama_barang; ?></td>
                  <td><?php echo $dataBarang->jumlah ?></td>
                  <td><?php echo $dataBarang->jumlah_sarpras ?></td>
                  <td><?php echo $dataBarang->satuan; ?></td>
                  <td width="30%"><?php echo $dataBarang->keterangan; ?></td>
                  <td>
                    <?php if ($dataBarang->status_barang ==''){ ?>
                      <span class="label label-custom label-pill label-warning">Proses</span>
                      <?php }elseif ($dataBarang->status_barang =='Ditolak'){ ?>
                      <span class="label label-custom label-pill label-danger"><?php echo $dataBarang->status_barang; ?></span>
                      <?php }elseif ($dataBarang->status_barang =='Pembelian'){ ?>
                      <span class="label label-custom label-pill label-success"><?php echo $dataBarang->status_barang; ?></span>
                      <?php }elseif ($dataBarang->status_barang =='Po'){ ?>
                      <span class="label label-custom label-pill label-success"><?php echo $dataBarang->status_barang; ?></span>
                    <?php } ?>
                    
                  </td>
                  
                </tr>
                
              <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="card-block">
          <div class="row">
              <div class="col-xs-3">
               <p class="lead"><i class="fa fa-info"></i> Note Kep. Unit:</p>
               <?php if ($barang->status_kepsek ='Approval') { ?>
                   
                  <span class="label label-pill label-success">Approval |
                  <?php echo $barang->kepsek_date ?> </span>
                  

                <?php } ?>
               <p class="text-muted" align="justify">
                 <?php echo $barang->note_kepsek ?>
                </p>
                
               
             </div>
             <div class="col-xs-3">
               <p class="lead"><i class="fa fa-info"></i> Note Sarpras:</p>
               <?php if ($barang->status_sarpras ='Approval') { ?>
                   
                  <span class="label label-pill label-success">Approval |
                  <?php echo $barang->sarpras_date ?> </span>

                <?php } ?>
               <p class="text-muted" align="justify">
                 <?php echo $barang->keterangan_sarpras ?>
                </p>
                
               
             </div>
             <div class="col-xs-3">
              <p class="lead"><i class="fa fa-info"></i> Note Direktur:</p>
              	<?php if ($barang->status_direktur ='Approval') { ?>
                   
                  <span class="label label-pill label-success">Approval |
                  <?php echo $barang->direktur_date ?> </span>

                <?php } ?>
              <p class="text-muted" align="justify">
                <?php echo $barang->note_direktur ?>
              </p>

               
             </div>

          </div>
        </div>

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-6 pull-left">
            
            
            <div class="table-responsive" style="margin-left: 30px;">
              <p style="margin-top: 40px;" class="lead">

              </p><br>

              <small> <a href="<?php echo base_url('proses/print-barang/'.$barang->id_order_barang) ?>" class="btn btn-primary btn-flat btn-xs" target="_blank"><i class="fa fa-print" ></i> Print</a></small>
                            
            </div>
          </div>
          <!-- /.col -->
       
          
        </div>
        <!-- /.row -->
      </div>
    </section>

  <!-- /.content -->
  





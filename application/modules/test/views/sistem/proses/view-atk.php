
    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan ATK Detail</h2>
              <div class="subtitle">Proses/ Permintaan ATK Detail</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a class="back btn btn-primary btn-flat btn-xs"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
      </div>
    </header>

    <section class="card">
      <div class="card-block">

        <div class="row ">
          <div class="col-sm-4 invoice-col">
            <address>
            No  <br>
            Nama  <br>
            Divisi  <br>
            Subjek  <br>
            Tanggal <br>
            File Lampiran  <br>
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <address>
             : <strong>ATK-<?php echo $barang->id_order_atk; ?></strong> <br>
             <input name="id_order_atk" type="text" value="<?php echo $barang->id_order_atk; ?>" hidden>
            : <strong><?php echo $barang->nama; ?></strong> <br>
            : <strong><?php echo $barang->divisi; ?></strong> <br>
            : <strong><?php echo $barang->subjek; ?></strong> <br>
            : <?php echo $barang->created_date; ?><br>
             <?php if ($barang->file ==''){ ?> 
                  <a href="#" class="btn btn-sm btn-info btn-flat" ><small><i class="fa fa-eye"></i> Tidak Ada</small></a>
              <?php } else { ?>
                  <a href="<?php echo base_url('dist/uploads/').$barang->file;?>" class="btn btn-sm btn-info btn-flat" onclick="window.open(this.href, 'mywin','left=20,top=20,toolbar=0,resizable=0'); return false;"><small><i class="fa fa-eye"></i> View </small></a>
              <?php  } ?><br>
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
                  <td><?php echo $dataBarang->satuan; ?></td>
                  <td><?php echo $dataBarang->keterangan; ?></td>
                  <td>
                    <?php if ($dataBarang->status_barang ==''){ ?>
                      <span class="label label-small label-warning">Proses</span>
                      <?php }elseif ($dataBarang->status_barang =='Ditolak'){ ?>
                      <span class="label label-small label-danger"><?php echo $dataBarang->status_barang; ?></span>
                      <?php }elseif ($dataBarang->status_barang =='Toko'){ ?>
                      <span class="label label-small label-success">Pembelian</span>
                      <?php }elseif ($dataBarang->status_barang =='PO'){ ?>
                      <span class="label label-small label-success"><?php echo $dataBarang->status_barang; ?></span>
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
        <hr>
        <div class="card-block">
        <div class="row">
            <div class="col-xs-4">
             <p class="lead"><i class="fa fa-info"></i> Note Kep. Unit:</p>
             <p class="text-muted" align="justify">
               <textarea name="note_kepsek"  cols="60" rows="8" class="form-control" readonly> <?php echo $barang->note_kepsek ?></textarea>
              </p>
             
           </div>
           <div class="col-xs-4">
             <p class="lead"><i class="fa fa-info"></i> Note Direktur:</p>
             <p class="text-muted" align="justify">
               <textarea name="note_kepsek"  cols="60" rows="8" class="form-control" readonly> <?php echo $barang->note_direktur ?></textarea>
              </p>
             
           </div>

           <div class="col-xs-4">
             <p class="lead"><i class="fa fa-info"></i> Note Toko:</p>
             <p class="text-muted" align="justify">
               <textarea name="note_kepsek"  cols="60" rows="8" class="form-control" readonly> <?php echo $barang->note_toko ?></textarea>
              </p>

             
           </div>

        </div></div>

        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-3 pull-left">
            
            
            <div class="table-responsive" style="margin-left: 30px;">
              <p style="margin-top: 40px;" class="lead">

              </p><br>
              <!-- <p style="margin-top: 60px;"><h4><?php echo $this->session->userdata('fullname'); ?></h4></p> -->
              <small>
                <a href="<?php echo base_url('proses/print-atk/'.$barang->id_order_atk) ?>" class="btn btn-primary btn-flat btn-xs" target="_blank"><i class="fa fa-print" ></i> Print</a></small><br>

            </div>
          </div>
          
        </div>
        <!-- /.row -->
      </div>
    </section>
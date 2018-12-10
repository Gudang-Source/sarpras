<body ><!-- onload="window.print();" -->
    <div class="wrapper">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h5 class="page-header">
              <i class="fa fa-task"></i> 
              <small class="pull-right">Date Print: <?php echo date('l, d-M-Y') ?></small>
            </h5>
          </div>
          <!-- /.col -->
        </div>
        <hr>
        <h4>Purchase Order</h4>
        <hr>

        <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-3  invoice-col">
              
              <address>
                No.PO <br>
                Perihal  <br>
                Tanggal Pembelian <br>
                Supplier  <br>
              </address>
            </div>

            <div class="col-sm-4  invoice-col">
              
              <address>
                : <strong><?php echo $podetail->no_atk; ?></strong> <br>
                : <strong><?php echo $podetail->perihal; ?></strong> <br>
                : <?php echo $podetail->created_date; ?><br>
                <p><?php echo $podetail->nama_supplier; ?></p>
                
                <input hidden name="subjek" type="text" value="<?php echo $podetail->perihal; ?>">
                                
                <input hidden name="created_date" type="text" value="<?php echo $podetail->created_date; ?>">
                             
                
              </address>
            </div>

            <div class="col-sm-5 invoice-col text-center">

              <h2 class="lead" align="center"> SEKOLAH PAH TSUNG <br><img src="<?php echo base_url('dist/img/logo.png') ?>" alt="" align="center">  </h2>
              <!-- <b align="center">No Form : <?php echo $podetail->no_permintaan; ?></b> --><br>  
            </div>

          </div>
        <!-- /.row -->
          <br>

        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>No Order</th>
                <th>Nama Barang</th>
                <th>Unit</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Keterangan</th>
              </tr>
              </thead>

              <tbody>
          <?php foreach($poitem as $poitem) { ?>
                <tr>
                  <td>ATK-<?php echo $poitem->id_order_atk?></td>
                  <td><?php echo $poitem->nama_barang?></td>
                  <td><?php echo $poitem->divisi?></td>
                  <td><?php echo $poitem->jumlah?></td>
                  <td><?php echo $poitem->satuan?></td>
                  <td><?php echo $poitem->keterangan?></td>
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
          <!-- accepted payments column -->
          <div class="col-xs-3 pull-left">
            

            <div class="table-responsive" style="margin-left: 30px;">
              <p style="margin-top: 40px;" class="lead">Hormat Kami</p><br>
              <p style="margin-top: 60px;"><h4><?php echo $this->session->userdata('username'); ?></h4></p><small>Divisi Pembelian</small><br>
              

            </div>
          </div>
          
        </div>
        <!-- /.row -->
    </div>

<body ><!-- onload="window.print();" -->
    <div class="wrapper">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h5 class="page-header">
              <i class="fa fa-task"></i> 
              <small class="pull-right">Date : <?php echo date('l, d / M /Y') ?></small>

            </h5>
          </div>
          <!-- /.col -->
        </div>
        <hr>
        <h4>Daftar Barang Di Ruangan <b><?php echo $data_ruangan_print->no_ruangan ?></b></h4>
        <h6><b>Pic :<?php echo $data_ruangan_print->nik ?> / <?php echo $data_ruangan_print->karyawan ?>  </b></h6>
        <hr>
        
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th width="20%">Nama Barang</th>
                <th>Pic Barang</th>
                <th>Barcode</th>
              </tr>
              </thead>

              <tbody>
           <?php $no=0; foreach ($data_ruangan_print_item as $dataBarang) { $no++; ?>
                <tr>
                  <td><?php echo $dataBarang->nama_barang?></td>
                  <td><?php echo $dataBarang->karyawan?></td>
                  <td><img src="<?php echo base_url() ?>test/pages/barang/barcode/<?php echo $dataBarang->id_barang_group; ?>.<?php echo $dataBarang->id_barang_subgroup; ?>.<?php echo $dataBarang->no_barang; ?>.<?php echo $dataBarang->no_tahun; ?>.<?php echo $dataBarang->no_bulan; ?>.<?php echo $dataBarang->no_item; ?>" ></td>

                </tr>

          <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
         
    </div>

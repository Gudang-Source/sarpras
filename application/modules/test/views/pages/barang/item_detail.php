    <header class="page-content-header"> 
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Detail Item Barang</h2>
              <div class="subtitle">Pages / Barang</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="#" class="back btn btn-rounded"><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>
        </div>
    </header><!--.page-content-header-->
            
        <div class="box-typical box-typical-padding">
            <div class="row">
                <div class="col-md-5">
                    <img style="width: 350px;" class="img img-responsive" src="<?php echo base_url('dist/uploads/barang_inventaris/'.$detail_barang->gambar) ?>" alt="">
                    <img style="width: 350px;" class="img img-responsive" src="http://placehold.it/350x350?text=No Picture" alt="">
                </div>
                <div class="col-md-7">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped dfTable table-right-left">
                            <tbody>
                            <!-- Data barang -->
                            <tr>
                                <td><b>DATA BARANG</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="width:30%;">No. Inventaris</td>
                                <td style="width:70%;">
                                    <img src="<?php echo base_url() ?>test/pages/barang/barcode/<?php echo $detail_barang->no_group; ?>.<?php echo $detail_barang->no_subgroup; ?>.<?php echo $detail_barang->no_barang; ?>.<?php echo $detail_barang->no_tahun; ?>.<?php echo $detail_barang->no_bulan; ?>.<?php echo $detail_barang->no_item; ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td><b><?php echo $detail_barang->nama_barang; ?></b></td>
                            </tr>
                            <tr>
                                <td>Type / Model</td>
                                <td><b><?php echo $detail_barang->type; ?> / <?php echo $detail_barang->merk; ?></b></td>
                            </tr>
                            <!-- Data Pic -->
                            <tr>
                                <td><b>DATA PIC</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><b><?php echo $detail_pic->karyawan ?></b></td>
                            </tr>
                            <tr>
                                <td>Nik</td>
                                <td><b><?php echo $detail_pic->nik ?></b></td>
                            </tr>
                            <tr>
                                <td><b>DATA RUANGAN</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>No. Ruangan</td>
                                <td><b><?php echo $detail_barang->no_ruangan ?></b></td>
                            </tr>
                            <tr>
                                <td>Nama Ruangan</td>
                                <td><b><?php echo $detail_barang->nama_ruangan ?></b></td>
                            </tr>
                            

                            
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                
            </div>
        </div><!--.box-typical-->



        
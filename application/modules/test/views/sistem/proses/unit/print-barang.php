<body > <!-- onload="window.print();" -->
  <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #000000;
    color: white;
}
</style>

    <header class="col-lg-12 card-header card-header-lg">
      <strong>Detail Permintaan</strong> | <small class="pull-right">Date Print: <?php echo $barang->created_date ?></small>
    </header>
    <!-- Detail Permintaan -->
      <div class="row">
        <div class="col-lg-6">
          <div class="payment-details">
            
            <table>
              <tbody>
                <tr>
                  <td>No Pengajuan :</td>
                  <td><b>B-<?php echo $barang->id_order_barang; ?></b></td>
                </tr>
                <tr>
                  <td>Subjek/Ket</td>
                  <td><b><?php echo $barang->subjek ?></b></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td><b><?php echo $barang->nama ?></b></td>
                </tr>
                <tr>
                  <td>Divisi</td>
                  <td><b><?php echo $barang->divisi ?></b></td>
                </tr>
                <tr>
                  <td>Tanggal Pengajuan :</td>
                  <td><b> <?php echo $barang->created_date ?></b></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    <!-- Detail Barang -->
      <div class="row ">
        <div class="col-lg-12">
          <table id="customers">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Qty Unit</th>
                <th>Qty Sarpras</th>
                <th>Satuan</th>
                <th>Keterangan</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach($barangitem as $barangitem) { ?>
                <tr>
                  <td><?php echo $barangitem->nama_barang?></td>
                  <td><?php echo $barangitem->jumlah?></td>
                  <td><?php echo $barangitem->jumlah_sarpras?></td>
                  <td><?php echo $barangitem->satuan?></td>
                  <td><?php echo $barangitem->keterangan?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
    
    <!-- Note -->
        <div class="row">
            <div class="col-xs-4">
             <p class="lead"><i class="fa fa-info"></i> Note Kep. Unit:</p>
             <p class="text-muted" align="justify">
              <strong style="font-size: 10px;">Approval | <?php echo $barang->kepsek_date ?> </strong> <br>
               <?php echo $barang->note_kepsek ?>
              </p>
             
           </div>
           <div class="col-xs-4">
             <p class="lead"><i class="fa fa-info"></i> Note Sarpras:</p>
             <p class="text-muted" align="justify">
              <strong style="font-size: 10px;">Approval | <?php echo $barang->sarpras_date ?> </strong> <br>
               <?php echo $barang->keterangan_sarpras ?>
              </p>
             
           </div>

           <div class="col-xs-4">
             <p class="lead"><i class="fa fa-info"></i> Note Toko:</p>
             <p class="text-muted" align="justify">
              <strong style="font-size: 10px;">Approval | <?php echo $barang->direktur_date ?> </strong> <br>
               <?php echo $barang->note_direktur ?>
              </p>

             
           </div>

        </div>


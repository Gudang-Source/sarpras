

    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan Barang</h2>
              <div class="subtitle text-block bs"> 
                  Proses / Permintaan Barang
              </div>
            </div>
            <!-- <div class="tbl-cell tbl-cell-action">
              <a href="<?php echo base_url('pages/barang/add');?>" class="btn btn-rounded">Add Barang</a>
            </div> -->
          </div>
        </div>
      </div>
    </header>

    <section class="card">
      <div class="card-block">
        <table id="tablePengajuan" class="display table table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No Order</th>
              <th>Nama</th>
              <th>Subjek</th>
              <th>Tanggal</th>
              <th>
                <div class="steps-icon-progress">
                  <ul>
                    <li >
                      <div class="caption">Kep.Unit</div>
                    </li>
                    <li >
                      <div class="caption">Sarpras</div>
                    </li>
                    <li >
                      <div class="caption">Direktur</div>
                    </li>
                    <li>
                      <div class="caption">Pembelian</div>
                    </li>
                  </ul>
                </div>
              </th>
              
              <th>Option</th>
              
            </tr>
          </thead>

          <tbody>

          <?php foreach ($barang as $dataBarang) { 
            if ($dataBarang->status=='Direktur') { ?>
            <tr>
              <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
              <td><?php echo $dataBarang->nama;?></td>
              <td width="10%"><?php echo $dataBarang->subjek;?></td>
              <td width="10%"><?php echo $dataBarang->created_date;?></td>
              <td>
                <div class="steps-icon-progress">
                  
                  <ul>
                  <?php  if($dataBarang->status == 'Kepsek' || $dataBarang->status == 'Sarpras' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian'|| $dataBarang->status == 'Penerimaan' || $dataBarang->status == 'Diterima Sarpras' || $dataBarang->status == 'Diterima User' ) { ?>
                    <li class="active">
                      <div class="icon">
                        <i class="font-icon font-icon-cart-2"></i>
                      </div>
                    </li>
                    <?php } else { ?>
                    <li>
                      <div class="icon">
                        <i class="font-icon font-icon-cart-2"></i>
                      </div>
                    </li>

                    <?php } if($dataBarang->status == 'Sarpras' || $dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian'|| $dataBarang->status == 'Penerimaan' || $dataBarang->status == 'Diterima Sarpras' || $dataBarang->status == 'Diterima User') {  ?>
                    <li class="active">
                      <div class="icon">
                        <i class="font-icon font-icon-pin-2"></i>
                      </div>
                    </li>
                    <?php } else { ?>
                    <li>
                      <div class="icon">
                        <i class="font-icon font-icon-pin-2"></i>
                      </div>
                    </li>

                    <?php } if($dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian'|| $dataBarang->status == 'Penerimaan' || $dataBarang->status == 'Diterima Sarpras' || $dataBarang->status == 'Diterima User') { ?>
                    <li class="active">
                      <div class="icon">
                        <i class="font-icon font-icon-card"></i>
                      </div>
                      
                    </li>
                    <?php } else { ?>
                    <li >
                      <div class="icon">
                        <i class="font-icon font-icon-card"></i>
                      </div>
                      
                    </li>
                    <?php  } if($dataBarang->status == 'Pembelian'|| $dataBarang->status == 'Penerimaan' || $dataBarang->status == 'Diterima Sarpras' || $dataBarang->status == 'Diterima User') { ?>
                    <li class="active">
                      <div class="icon">
                        <i class="font-icon font-icon-check-bird"></i>
                      </div>
                      
                    </li>
                    <?php } else { ?>
                    <li >
                      <div class="icon">
                        <i class="font-icon font-icon-check-bird"></i>
                      </div>
                      
                    </li>
                  <?php } ?>
                  </ul>

                </div>
              </td>
              
              <td>
                
                <?php if ( $dataBarang->status == 'Direktur') { ?>
                  <!-- Edit -->
                  <a href="<?php echo base_url('proses/direktur-edit-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-success btn-sm ladda-button" data-toggle="tooltip" data-placement="top" ><i class="fa fa-cash"></i> Proses</a>

                <?php } else {  ?>
                  <!-- Print -->
                  <a href="<?php echo base_url('proses/print-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-info btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Print" target="_blank"><i class="fa fa-print"></i></a>
                  <!-- View -->
                  <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                <?php } ?>

              </td>
            </tr>
          <?php } } ?>
            

          
          </tbody>
        </table>
      </div>
    </section>

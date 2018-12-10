

    <div class="container-fluid">
      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan Barang</h2>
              <div class="subtitle">Proses / Permintaan</div>
            </div>
          </div>
        </div>
      </header> 
    </div><!--.container-fluid-->
   
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
          if ( $dataBarang->status == 'User' ||$dataBarang->status == 'Kepsek'||$dataBarang->status == 'Sarpras'||$dataBarang->status == 'Direktur'||$dataBarang->status == 'Pembelian'||$dataBarang->status == 'Po') { ?>
            <tr>
              <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
              <td><?php echo $dataBarang->nama;?></td>
              <td width="15%"><?php echo $dataBarang->subjek;?></td>
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
              <!-- Menu User -->  
                <td>
                  <!-- Print -->
                    <a href="<?php echo base_url('proses/unit-print-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-info btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Print" target="_blank"><i class="fa fa-print"></i></a>
                    <!-- View -->
                    <a href="<?php echo base_url('proses/unit-view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>

                  <?php if ( $dataBarang->status == 'Kepsek') { ?>

                    <!-- Edit -->
                    <a href="<?php echo base_url('proses/unit-edit-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-warning btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                    
                    <!-- Batal -->
                    <button type="button" class="btn btn-inline btn-danger btn-sm ladda-button" data-toggle="modal" data-target="#myModalBatal<?php echo $dataBarang->id_order_barang ?>" ><i class="fa fa-trash"></i> Batal</button>

                     <!-- Modal -->
                      <div class="modal fade" id="myModalBatal<?php echo $dataBarang->id_order_barang ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Batalkan Purchase Order</h4>
                            </div>
                            <div class="modal-body">
                              <h3>Permintaan Barang NO : <?php echo $dataBarang->id_order_barang; ?></h3> <br>
                              <p>Proses permintaan barang NO <b><?php echo $dataBarang->id_order_barang; ?></b> akan dibatalkan.</p>
                              <br>
                              <p><i>*Permintaan yang sudah dibatalkan tidak bisa dilanjutkan lagi</i></p>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <a href="<?php echo base_url('proses/unit-batal-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Batal"><i class="fa fa-close"></i> Batalkan Permintaan</a>
                            </div>
                          </div>
                        </div>
                      </div>

                  <?php }  ?>
                    

                  
                </td>
							<!-- End Menu User -->
            </tr>
          <?php } } ?>
            

          
          </tbody>
        </table>
      </div>
    </section>
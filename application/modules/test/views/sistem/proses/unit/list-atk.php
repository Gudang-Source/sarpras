
      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan ATK</h2>
              <div class="subtitle">Entry / Permintaan ATK</div>
            </div>
          </div>
        </div>
      </header>

      <section class="card">
        <div class="card-block">
          <table id="tablePengajuanAtk" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Nama</th>
                <th>Subjek</th>
                <th>Tanggal</th>
                <th>
                  <div class="steps-icon-progress-atk" >
                    <ul>
                      <li >
                        <div class="caption">Kep.Unit</div>
                      </li>
                      <li >
                        <div class="caption">Direktur</div>
                      </li>
                      <li>
                        <div class="caption">Toko</div>
                      </li>
                    </ul>
                  </div>
                </th>
                <th>Option</th>
                
              </tr>
            </thead>

            <tbody>

            <?php foreach ($barang as $dataBarang) {  ?>
              <tr>
                <td width="8%">ATK-<?php echo $dataBarang->id_order_atk;?></td>
                <td><?php echo $dataBarang->nama;?></td>
                <td width="20%"><?php echo $dataBarang->subjek;?></td>
                <td width="10%"><?php echo $dataBarang->created_date ?></td>
                <td>
                  <div class="steps-icon-progress">
                    <!-- <li class="active">
                        <div class="icon">
                          <i class="font-icon font-icon-cart-2"></i>
                        </div>
                        <div class="caption">Kepsek</div> -->
                    <ul style="margin-left: 1px !important; margin-right: 1px !important;">
                    <?php  if($dataBarang->status == 'Kepsek' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Toko' ) { ?>
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

                      <?php } if( $dataBarang->status == 'Direktur' || $dataBarang->status == 'Toko') {  ?>
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

                      <?php } if($dataBarang->status == 'Toko') { ?>
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

                    <?php } ?>
                    </ul>

                  </div>
                </td>
                
                <td width="25%" align="center">
                  <!-- Print -->
                  <a href="<?php echo base_url('proses/print-atk/'.$dataBarang->id_order_atk);?>" class="btn btn-inline btn-info btn-sm ladda-button" target="_blank" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a>
                  <!-- View -->
                  <a href="<?php echo base_url('proses/view-atk/'.$dataBarang->id_order_atk);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>

                <?php if ($dataBarang->status_unit == 'Proses') { ?>
                  <!-- Edit -->
                  <a href="<?php echo base_url('proses/unit-edit-atk/'.$dataBarang->id_order_atk);?>" class="btn btn-inline btn-warning btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                  <!-- Batal -->
                  <button type="button" class="btn btn-inline btn-danger btn-sm ladda-button" data-toggle="modal" data-target="#myModalBatal<?php echo $dataBarang->id_order_atk ?>"><i class="fa fa-trash"></i> Batal</button>
                       <!-- Modal -->
                        <div class="modal fade" id="myModalBatal<?php echo $dataBarang->id_order_atk ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Batalkan Purchase Order</h4>
                              </div>
                              <div class="modal-body">
                                <h3>Permintaan Barang NO : <?php echo $dataBarang->id_order_atk; ?></h3> <br>
                                <p>Proses permintaan barang NO <b><?php echo $dataBarang->id_order_atk; ?></b> akan dibatalkan.</p>
                                <br>
                                <p><i>*Permintaan yang sudah dibatalkan tidak bisa dilanjutkan lagi</i></p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="<?php echo base_url('backend/proses/permintaan/user_batal/'.$dataBarang->id_order_atk);?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Batal"><i class="fa fa-close"></i> Batalkan Permintaan</a>
                              </div>
                            </div>
                          </div>
                        </div>
                <?php }  ?>

                </td>
              </tr>
            <?php } ?>
              

            
            </tbody>
          </table>
        </div>
      </section>
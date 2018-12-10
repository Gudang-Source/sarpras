
    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Permintaan Atk</h2>
              <div class="subtitle">Proses / Permintaan Atk</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <!-- <a href="<?php echo base_url('pages/barang/add');?>" class="btn btn-rounded">Add Barang</a> -->
            </div>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    <section class="card">
      <div class="card-block">
        <table id="tablePengajuanAtk" class="display table table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No Order</th>
              <th>Nama</th>
              <th>Divisi</th>
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

          <?php foreach ($barang as $dataBarang) {  
            if ($dataBarang->status=='Direktur') { ?>

            <tr>
              <td width="8%">ATK-<?php echo $dataBarang->id_order_atk;?></td>
              <td width="15%"><?php echo $dataBarang->nama;?></td>
              <td width="10%"><?php echo $dataBarang->divisi;?></td>
              <td width="15%"><?php echo $dataBarang->subjek;?></td>
              <td width="10%"><?php echo $dataBarang->created_date;?></td>
              <td >
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
              
              <td width="15%">
              <?php if ($dataBarang->status == 'Direktur') { ?>
                <!-- Edit -->
                <a href="<?php echo base_url('proses/direktur-edit-atk/'.$dataBarang->id_order_atk);?>" class="btn btn-inline btn-success btn-sm ladda-button" data-toggle="tooltip" data-placement="top" ><i class="fa fa-credit-card"></i> Proses</a>
              <?php } else { ?>
                <!-- Print -->
                <a href="<?php echo base_url('proses/print-atk/'.$dataBarang->id_order_atk);?>" class="btn btn-inline btn-info btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a>
                <!-- View -->
                <a href="<?php echo base_url('proses/view-atk/'.$dataBarang->id_order_atk);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
              <?php } ?>
              </td>
            </tr>
          <?php } } ?>
            

          
          </tbody>
        </table>
      </div>
    </section>

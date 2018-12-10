  <div class="container-fluid">
    <header class="section-header">
      <div class="tbl">
        <div class="tbl-row">
          <div class="tbl-cell">
            <h2>Laporan Permintaan Barang</h2>
            <div class="subtitle">Laporan / Permintaan</div>
          </div>
        </div>
      </div>
    </header> 
  </div><!--.container-fluid-->

  <section class="tabs-section">
    <div class="tabs-section-nav tabs-section-nav-icons">
      <div class="tbl">
        <ul class="nav" role="tablist">
          <?php if ($this->session->userdata('role')=='Direktur') { ?>
            
          
          <li class="nav-item">
            <a class="nav-link" href="#tabs-1-tab-0" role="tab" data-toggle="tab">
              <span class="nav-link-in">
                <i class="fa fa-database"></i>
                Proses
              </span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
              <span class="nav-link-in">
                <i class="font-icon font-icon-cart-2"></i>
                Pembelian / PO
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
              <span class="nav-link-in">
                <span class="fa fa-ban"></span>
                Ditolak / Dibatalkan
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
              <span class="nav-link-in">
                <i class="font-icon font-icon-users"></i>
                Diterima Pembelian
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
              <span class="nav-link-in">
                <i class="font-icon font-icon-users"></i>
                Diterima Sarpras
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabs-1-tab-5" role="tab" data-toggle="tab">
              <span class="nav-link-in">
                <i class="fa fa-check"></i>
                Selesai
              </span>
            </a>
          </li>
          
        </ul>
      </div>
    </div><!--.tabs-section-nav-->

    <div class="tab-content">
      <?php if ($this->session->userdata('role')=='Direktur') { ?>
      <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-0">
          proses
        <table id="tableSupplier" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Nama</th>
                <th>Unit</th>
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
                      <!-- <li>
                        <div class="caption">Terima</div>
                      </li>
                      <li>
                        <div class="caption">Sarpras</div>
                      </li>
                      <li>
                        <div class="caption">Unit</div>
                      </li> -->
                    </ul>
                  </div>
                </th>
                
                <th>Option</th>
                
              </tr>
            </thead>

            <tbody>

              <?php foreach ($barang as $dataBarang) { 
              if ( $dataBarang->status == 'Kepsek'||$dataBarang->status == 'Sarpras') { ?>
                <tr>
                  <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
                  <td width="8%"><?php echo $dataBarang->nama;?></td>
                  <td width="8%"><?php echo $dataBarang->divisi;?></td>
                  <td>
                    <div class="steps-icon-progress">
                      <!-- <li class="active">
                          <div class="icon">
                            <i class="font-icon font-icon-cart-2"></i>
                          </div>
                          <div class="caption">Kepsek</div> -->
                      <ul>
                      <?php  if($dataBarang->status == 'Kepsek' || $dataBarang->status == 'Sarpras' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan' ) { ?>
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

                        <?php } if($dataBarang->status == 'Sarpras' || $dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') {  ?>
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

                        <?php } if($dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <?php  } if($dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <!-- <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li>
                        <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li> -->
                      <?php } ?>
                      </ul>

                    </div>
                  </td>
                  <!-- Menu User -->  
                    <td>
                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    </td>
                  <!-- End Menu User -->
                </tr>
              <?php } } ?>
                
            </tbody>
        </table>
      </div>
      <?php } ?>

      <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1">
        <table id="tableSupplier" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Nama</th>
                <th>Unit</th>
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
                      <!-- <li>
                        <div class="caption">Terima</div>
                      </li>
                      <li>
                        <div class="caption">Sarpras</div>
                      </li>
                      <li>
                        <div class="caption">Unit</div>
                      </li> -->
                    </ul>
                  </div>
                </th>
                
                <th>Option</th>
                
              </tr>
            </thead>

            <tbody>

              <?php foreach ($barang as $dataBarang) { 
              if ( $dataBarang->status == 'Pembelian'||$dataBarang->status == 'Po') { ?>
                <tr>
                  <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
                  <td width="8%"><?php echo $dataBarang->nama;?></td>
                  <td width="8%"><?php echo $dataBarang->divisi;?></td>
                  <td>
                    <div class="steps-icon-progress">
                      <!-- <li class="active">
                          <div class="icon">
                            <i class="font-icon font-icon-cart-2"></i>
                          </div>
                          <div class="caption">Kepsek</div> -->
                      <ul>
                      <?php  if($dataBarang->status == 'Kepsek' || $dataBarang->status == 'Sarpras' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan' ) { ?>
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

                        <?php } if($dataBarang->status == 'Sarpras' || $dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') {  ?>
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

                        <?php } if($dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <?php  } if($dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <!-- <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li>
                        <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li> -->
                      <?php } ?>
                      </ul>

                    </div>
                  </td>
                  <!-- Menu User -->  
                    <td>
                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    </td>
                  <!-- End Menu User -->
                </tr>
              <?php } } ?>
                
            </tbody>
        </table>
      </div><!--.tab-pane-->

      <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
        <table id="tablePengajuan" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Nama</th>
                <th>Unit</th>
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
                      <!-- <li>
                        <div class="caption">Terima</div>
                      </li>
                      <li>
                        <div class="caption">Sarpras</div>
                      </li>
                      <li>
                        <div class="caption">Unit</div>
                      </li> -->
                    </ul>
                  </div>
                </th>
                
                <th>Option</th>
                
              </tr>
            </thead>

            <tbody>

              <?php foreach ($barang as $dataBarang) { 
              if ( $dataBarang->status == 'Dibatalkan') { ?>
                <tr>
                  <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
                  <td width="8%"><?php echo $dataBarang->nama;?></td>
                  <td width="8%"><?php echo $dataBarang->divisi;?></td>
                  <td>
                    <div class="steps-icon-progress">
                      <!-- <li class="active">
                          <div class="icon">
                            <i class="font-icon font-icon-cart-2"></i>
                          </div>
                          <div class="caption">Kepsek</div> -->
                      <ul>
                      <?php  if($dataBarang->status == 'Kepsek' || $dataBarang->status == 'Sarpras' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan' ) { ?>
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

                        <?php } if($dataBarang->status == 'Sarpras' || $dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') {  ?>
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

                        <?php } if($dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <?php  } if($dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <!-- <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li>
                        <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li> -->
                      <?php } ?>
                      </ul>

                    </div>
                  </td>
                  <!-- Menu User -->  
                    <td>
                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    </td>
                  <!-- End Menu User -->
                </tr>
              <?php } } ?>
                
            </tbody>
        </table>
      </div><!--.tab-pane-->

      <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">
        
        <table id="tableBarang" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Nama</th>
                <th>Unit</th>
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
                      <!-- <li>
                        <div class="caption">Terima</div>
                      </li>
                      <li>
                        <div class="caption">Sarpras</div>
                      </li>
                      <li>
                        <div class="caption">Unit</div>
                      </li> -->
                    </ul>
                  </div>
                </th>
                
                <th>Option</th>
                
              </tr>
            </thead>

            <tbody>

              <?php foreach ($barang as $dataBarang) { 
              if ( $dataBarang->status == 'Penerimaan') { ?>
                <tr>
                  <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
                  <td width="8%"><?php echo $dataBarang->nama;?></td>
                  <td width="8%"><?php echo $dataBarang->divisi;?></td>
                  <td>
                    <div class="steps-icon-progress">
                      <!-- <li class="active">
                          <div class="icon">
                            <i class="font-icon font-icon-cart-2"></i>
                          </div>
                          <div class="caption">Kepsek</div> -->
                      <ul>
                      <?php  if($dataBarang->status == 'Kepsek' || $dataBarang->status == 'Sarpras' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan' ) { ?>
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

                        <?php } if($dataBarang->status == 'Sarpras' || $dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') {  ?>
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

                        <?php } if($dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <?php  } if($dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan') { ?>
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
                        <!-- <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li>
                        <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li> -->
                      <?php } ?>
                      </ul>

                    </div>
                  </td>
                  <!-- Menu User -->  
                    <td>
                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    </td>
                  <!-- End Menu User -->
                </tr>
              <?php } } ?>
                
            </tbody>
        </table>
      </div><!--.tab-pane-->

      <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">
        
        <table id="tableBarang" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Nama</th>
                <th>Unit</th>
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
                      <!-- <li>
                        <div class="caption">Terima</div>
                      </li>
                      <li>
                        <div class="caption">Sarpras</div>
                      </li>
                      <li>
                        <div class="caption">Unit</div>
                      </li> -->
                    </ul>
                  </div>
                </th>
                
                <th>Option</th>
                
              </tr>
            </thead>

            <tbody>

              <?php foreach ($barang as $dataBarang) { 
              if ( $dataBarang->status == 'Diterima Sarpras') { ?>
                <tr>
                  <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
                  <td width="8%"><?php echo $dataBarang->nama;?></td>
                  <td width="8%"><?php echo $dataBarang->divisi;?></td>
                  <td>
                    <div class="steps-icon-progress">
                      <!-- <li class="active">
                          <div class="icon">
                            <i class="font-icon font-icon-cart-2"></i>
                          </div>
                          <div class="caption">Kepsek</div> -->
                      <ul>
                      <?php  if($dataBarang->status == 'Kepsek' || $dataBarang->status == 'Sarpras' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) { ?>
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

                        <?php } if($dataBarang->status == 'Sarpras' || $dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) {  ?>
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

                        <?php } if($dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) { ?>
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
                        <?php  } if($dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) { ?>
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
                        <!-- <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li>
                        <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li> -->
                      <?php } ?>
                      </ul>

                    </div>
                  </td>
                  <!-- Menu User -->  
                    <td>
                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                    </td>
                  <!-- End Menu User -->
                </tr>
              <?php } } ?>
                
            </tbody>
        </table>
      </div><!--.tab-pane-->

      <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-5">
        <table id="tableSarpras" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Nama</th>
                <th>Unit</th>
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
                      <!-- <li>
                        <div class="caption">Terima</div>
                      </li>
                      <li>
                        <div class="caption">Sarpras</div>
                      </li>
                      <li>
                        <div class="caption">Unit</div>
                      </li> -->
                    </ul>
                  </div>
                </th>
                
                <th>Option</th>
                
              </tr>
            </thead>

            <tbody>

              <?php foreach ($barang as $dataBarang) { 
              if ( $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai') { ?>
                <tr>
                  <td width="8%">B-<?php echo $dataBarang->id_order_barang;?></td>
                  <td width="8%"><?php echo $dataBarang->nama;?></td>
                  <td width="8%"><?php echo $dataBarang->divisi;?></td>
                  <td>
                    <div class="steps-icon-progress">
                      <!-- <li class="active">
                          <div class="icon">
                            <i class="font-icon font-icon-cart-2"></i>
                          </div>
                          <div class="caption">Kepsek</div> -->
                      <ul>
                      <?php  if($dataBarang->status == 'Kepsek' || $dataBarang->status == 'Sarpras' ||$dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) { ?>
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

                        <?php } if($dataBarang->status == 'Sarpras' || $dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) {  ?>
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

                        <?php } if($dataBarang->status == 'Direktur' || $dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) { ?>
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
                        <?php  } if($dataBarang->status == 'Pembelian' || $dataBarang->status == 'Penerimaan'|| $dataBarang->status == 'Diterima Sarpras'|| $dataBarang->status == 'Diterima User' || $dataBarang->status == 'Selesai' ) { ?>
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
                        <!-- <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li>
                        <li >
                          <div class="icon">
                            <i class="font-icon font-icon-check-bird"></i>
                          </div>
                          
                        </li> -->
                      <?php } ?>
                      </ul>

                    </div>
                  </td>
                  <!-- Menu User -->  
                    <td>
                      <?php if ( $this->session->userdata('role') == 'User') { 
                      if ( $dataBarang->status == 'Diterima User') { ?>

                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-success btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Terima"><i class="fa fa-archive"></i> Terima Barang</a>
                      <?php } } elseif ($dataBarang->status == 'Selesai') { ?>

                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-success btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-archive"></i> Selesai</a>                            
                      <?php } ?>
                        <a href="<?php echo base_url('proses/view-barang/'.$dataBarang->id_order_barang);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View Detail"><i class="fa fa-eye"></i> View</a>

                      
                    </td>
                  <!-- End Menu User -->
                </tr>
              <?php } } ?>
                
            </tbody>
        </table>
      </div><!--.tab-pane-->

    </div><!--.tab-content-->
  </section>    

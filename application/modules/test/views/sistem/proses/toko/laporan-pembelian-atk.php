

    
    <header class="section-header">
      <div class="tbl">
        <div class="tbl-row">
          <div class="tbl-cell">
            <h2>Pembelian ATK</h2>
            <div class="subtitle">Proses / Pembelian</div>
          </div>
        </div>
      </div>
    </header> 
    
    
    <section class="card">
      <div class="card-block">
        <table id="tablePengajuan" class="display table table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No PO</th>
              <th>Perihal</th>
              <th>Supplier</th>
              <th>Tanggal</th>
              <th>Option</th>
              
            </tr>
          </thead>

          <tbody>

          <?php foreach ($po as $dataPo) {  ?>
            <tr>
              <td ><?php echo $dataPo->no_atk;?></td>
              <td><?php echo $dataPo->perihal;?></td>
              <td><?php echo $dataPo->nama_supplier;?></td>
              <td width="10%"><?php echo $dataPo->created_date;?></td>
              <td width="30%" align="center">
                <!-- Button -->
                <?php if ($dataPo->status_po == ''  ){ ?>
                  
                  <!-- <a href="<?php echo base_url('proses/print-po-barang/'.$dataPo->id_po_atk);?>" class="btn btn-inline btn-info btn-sm ladda-button" onclick="window.open(this.href, 'mywin','left=10,top=20,toolbar=0,resizable=0'); return false;"><i class="fa fa-print"></i> Print</a> -->
                  <a href="<?php echo base_url('proses/print-po-atk/'.$dataPo->id_po_atk);?>" class="btn btn-inline btn-info btn-sm ladda-button"  target="_blank"><i class="fa fa-print"></i> Print</a>

                  <a href="<?php echo base_url('proses/terima-atk/'.$dataPo->id_po_atk);?>" class="btn btn-inline btn-success btn-sm ladda-button" ><i class="font-icon font-icon-notebook-bird"></i> Terima</a>

                  <a href="<?php echo base_url('proses/pembelian-batal-po/'.$dataPo->id_po_atk);?>" class="btn btn-inline btn-danger btn-sm ladda-button" ><i class="fa fa-trash"></i> Batal</a>

                  <!-- <button type="button" class="btn btn-inline btn-success btn-sm ladda-button" data-toggle="modal" data-target="#myModal">Terima</button> -->
                  
                 <!--  <button type="button" class="btn btn-inline btn-danger btn-sm ladda-button" data-toggle="modal" data-target="#myModalBatal<?php echo $dataPo->id_po_atk;?>">Batal</button> -->

                   <!-- Modal -->
                    <div class="modal fade" id="myModalBatal<?php echo $dataPo->id_po_atk;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Batalkan Purchase Order</h4>
                          </div>
                          <div class="modal-body">
                            <h3>Warning!!!</h3> <br>
                            <p>Item Barang yang ada pada Purchase Order <b><?php echo $dataPo->no_po; ?></b> akan dikembalikan pada Proses Pembelian lagi.</p><br>
                            <p><i>*PO yang sudah dibatalkan tidak bisa dilanjutkan lagi</i></p>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <a href="<?php echo base_url('backend/laporan/barang/dibatalkan/'.$dataPo->id_po_atk);?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Batal"><i class="fa fa-close"></i> Batal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  <?php } elseif ($dataPo->status_po == 'Dibatalkan') { ?>

                    <a href="" class="btn btn-inline btn-danger btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Batal"><i class="fa fa-close"></i> Dibatalkan</a>

                  <?php }elseif ($dataPo->status_po == 'Selesai'){ ?>

                      <span class="btn btn-inline btn-primary btn-sm ladda-button" ><i class="fa fa-check"></i> Selesai</span>

                      <a href="" class="btn btn-inline btn-info btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i> Print </a>

                      <a href="" class="btn btn-inline btn-warning btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i> View </a>

                <?php } ?>
                  
              </td>
            </tr>
          <?php } ?>
            

          
          </tbody>
        </table>
      </div>
    </section>


  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Penerimaan Barang</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



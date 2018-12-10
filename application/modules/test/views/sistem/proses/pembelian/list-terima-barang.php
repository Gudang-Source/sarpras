

    
    <header class="section-header">
      <div class="tbl">
        <div class="tbl-row">
          <div class="tbl-cell">
            <h2>Penerimaan Barang</h2>
            <div class="subtitle">Proses / Penerimaan</div>
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

          <?php foreach ($po as $dataPo) { 
          if ($dataPo->status_po==''|| $dataPo->status_po=='Selesai') { ?>
            <tr>
              <td ><?php echo $dataPo->no_po;?></td>
              <td><?php echo $dataPo->perihal;?></td>
              <td><?php echo $dataPo->nama_supplier;?></td>
              <td width="10%"><?php echo $dataPo->created_date;?></td>
              <td width="30%" align="center">
                <!-- Button -->
                <?php if ($dataPo->status_po == ''){ ?>

                  <a href="<?php echo base_url('proses/terima-barang/'.$dataPo->id_po);?>" class="btn btn-inline btn-success btn-xl ladda-button" ><i class="fa fa-task"></i> Terima Barang</a>
                
                <?php } elseif ($dataPo->status_po == 'Selesai') { ?>

                  <span class="btn btn-inline btn-primary btn-sm ladda-button" ><i class="fa fa-check"></i> Selesai</span>

                  <span class="btn btn-inline btn-warning btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="View Detail"><i class="fa fa-eye"></i> View</span>

                  <a href="" class="btn btn-inline btn-info btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i> Print </a>

                <?php } ?>
                  
              </td>
            </tr>

          <?php } } ?>
            

          
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



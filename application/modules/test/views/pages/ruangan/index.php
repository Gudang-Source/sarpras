<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Sarpras') { ?>


    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Data Ruangan </h2>
              <div class="subtitle">Pages / Ruangan</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="<?php echo base_url('ruangan-add');?>" class="btn btn-rounded" ><i class="fa fa-plus"></i>Add Ruangan</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="card-block">
                   
                    <div class="card">
                        <div class="card-block">
                            <table id="tableSupplier" class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th width="8%" class="text-center">No Ruangan</th>
                                        <th class="text-center">Nama Ruangan</th>
                                        <th width="25%" class="text-center">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach ($ruangan as $dataRuangan) { $no++; ?>
                                    <tr>
                                        <td><?php echo $dataRuangan->no_ruangan;?></td>
                                        <td><?php echo $dataRuangan->nama_ruangan;?></td>

                                        <td class="text-center">
                                            <?php if ($this->session->userdata('role')=='Pic') { ?>
                                                <a href="<?php echo base_url('ruangan-detail-pic/'.$dataRuangan->id_ruangan);?>" class="btn btn-primary btn-flat btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Ruangan"><i class="fa fa-eye"></i> Detail</a>
                                            <?php } else { ?>
                                                <a href="<?php echo base_url('ruangan-detail/'.$dataRuangan->id_ruangan);?>" class="btn btn-primary btn-flat btn-xs" data-toggle="tooltip" data-placement="top" title="Detail Ruangan"><i class="fa fa-eye"></i> Detail</a>
                                            <?php } ?>

                                            <a href="<?php echo base_url('ruangan-edit/'.$dataRuangan->id_ruangan);?>" class="btn btn-info btn-flat btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                                            <a href="<?php echo base_url('ruangan-block/'.$dataRuangan->id_ruangan);?>" class="btn btn-warning btn-flat btn-xs" data-toggle="tooltip" data-placement="top" title="Block User"><i class="fa fa-ban"></i></a>

                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }else{ ?>
<!-- Content Wrapper. Contains page content -->


<div class="page-error-box">
    <div class="error-code">404</div>
    <div class="error-title">Page not found</div>
    <a href="<?php echo base_url() ?>" class="btn btn-rounded">Main page</a>
</div>

<?php } ?>
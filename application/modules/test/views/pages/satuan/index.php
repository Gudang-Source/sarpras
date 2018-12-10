    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Data Satuan Barang</h2>
              <div class="subtitle">Pages / Satuan</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="<?php echo base_url('data-satuan-add') ?>" class="btn btn-primary btn-flat btn-xs" ><i class="fa fa-plus"></i> Add New</a>            </div><!-- data-toggle="modal" data-target="#myModalSatuan" -->
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    
    <section class="content">
        <div class="row">

        <!-- Group Barang -->
            <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <!-- /.box-header -->
                    <div class="card">
                        <div class="card-block">
                            <table id="example" class="display table table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="5%" class="text-center">No</th>
                                        <th width="20%" class="text-center">Nama Satuan</th>
                                        <th width="20%" class="text-center">Created Date</th>
                                        <th width="10%" class="text-center">#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; foreach ($satuan as $dataSatuan) { $no++; ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ;?></td>
                                        <td><?php echo $dataSatuan->nama_satuan;?></td>
                                        <td><?php echo $dataSatuan->created_date;?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url('data-satuan-edit/'.$dataSatuan->id_barang_satuan);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('data-satuan-delete/'.$dataSatuan->id_barang_satuan);?>" class="btn btn-inline btn-danger btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Group -->

        </div>
    </section>

<!-- Modal Group -->
<div class="modal fade" id="myModalSatuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabelsatuan">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Satuan`</h4>
      </div>
      <div class="modal-body">
         <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>
            <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
            <?php echo form_open_multipart('data-satuan-add', array('class' => 'row')); ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-satuan">
                        <label for="satuan">Nama Satuan <span class="text-danger">*</span></label>
                        <input type="text" name="nama_satuan" class="form-control" required="">
                    </div>
                </div>
                <div class="col-xs-12 modal-footer">
                    <p class="text-danger">* Required</p>
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                </div>
            <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>




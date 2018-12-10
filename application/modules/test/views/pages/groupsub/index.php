    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Data Group & Subgroup Barang</h2>
              <div class="subtitle">Pages / Group & Sub</div>
            </div>
            <!-- <div class="tbl-cell tbl-cell-action">
              <a href="" class="btn btn-rounded" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add Satuan</a>
            </div> -->
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

    
    <section class="content">
        <div class="row">

            <!-- Group Barang -->
                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-block">
                            <h3 class="box-title"><i class="fa fa-th-list"></i> List Group </h3>
                            <div class="pull-right">
                                <a href="" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#myModalgroup"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="card">
                            <div class="card-block">
                                <table id="tableGroup" class="display table table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center">No</th>
                                            <th width="20%" class="text-center">Nama Group</th>
                                            <th width="10%" class="text-center">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach ($datagroup as $dataGroup) { $no++; ?>
                                        <tr>
                                            <td class="text-center"><?php echo $dataGroup->id_barang_group;?></td>
                                            <td><?php echo $dataGroup->nama_group;?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url('data-group-edit/'.$dataGroup->id_barang_group);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('data-group-delete/'.$dataGroup->id_barang_group);?>" class="btn btn-inline btn-danger btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close"></i></a>
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

             <!-- Sub Group Barang -->
                <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                    <section class="card">
                        <div class="card-block">
                            <h3 class="box-title"><i class="fa fa-th-list"></i> List Subgroup</h3>
                            <div class="pull-right">
                                <a href="#" class="btn btn-primary btn-flat btn-xs" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#myModalSubgroup"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                        <!-- /.box-header -->

                        <div class="card">
                            <div class="card-block">
                                <table id="tableSub" class="display table table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="5%">No.Group</th>
                                            <th width="5%">No.Sub</th>                
                                            <th width="10%" class="text-center">Nama Sub Group</th>
                                            <th width="15%" class="text-center">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach ($datasub as $dataSubGroup) { $no++; ?>
                                        <tr>
                                            <td width="3%" class="text-center"><?php echo $dataSubGroup->id_barang_group;?></td>
                                            <td width="3%" class="text-center"><?php echo $dataSubGroup->no_subgroup;?></td>
                                            <td><?php echo $dataSubGroup->nama_subgroup;?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url('backend/pages/groupsub/editsubgroup/'.$dataSubGroup->id_barang_subgroup);?>" class="btn btn-inline btn-primary btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('backend/pages/groupsub/deletesubgroup/'.$dataSubGroup->id_barang_subgroup);?>" class="btn btn-inline btn-danger btn-sm ladda-button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close"></i></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            <!-- End Group -->

        </div>
    </section>

<!-- Modal Group -->
<div class="modal fade" id="myModalgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabelgroup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Group</h4>
      </div>
      <div class="modal-body">
         <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>
            <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
            <?php echo form_open_multipart('data-group-add', array('class' => 'row')); ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="group">Nama Group <span class="text-danger">*</span></label>
                        <input type="text" name="nama_group" class="form-control" required="">
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


<!-- Modal Subgroup-->
<div class="modal fade" id="myModalSubgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Subgroup</h4>
      </div>
      <div class="modal-body">
    
            <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>
            <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
            <?php echo form_open_multipart('test/pages/groupsub/add_subgroup', array('class' => 'row')); ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="title">Group <span class="text-danger">*</span></label>
                        <select class="form-control select select-2" name="group" id="" >
                            <option value="">-- Select Group --</option>
                            <?php foreach ($datagroup as $data_group) { ?>
                                <option value="<?php echo $data_group->id_barang_group ?>"><?php echo $data_group->nama_group ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="title">Nama Sub Group <span class="text-danger">*</span></label>
                        <input type="text" name="nama_subgroup" class="form-control" required="">
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



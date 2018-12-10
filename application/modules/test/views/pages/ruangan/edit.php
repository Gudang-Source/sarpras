<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Sarpras') { ?>

    <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Edit Ruangan </h2>
              <div class="subtitle">Pages / Edit Ruangan</div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a href="#" class="back btn btn-rounded" ><i class="fa fa-arrow-left"></i> Back</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <!-- <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-plus"></i> NO Ruangan :  </h3>
                        </div> -->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?php if (validation_errors() != '') {
                                 echo '<span class="text-danger">'.validation_errors().'</span><br/>';
                                } ?>
                            <?php echo form_open('ruangan-edit/'.$data_ruangan->id_ruangan, array('class' => 'row')); ?>
                                
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="no_ruangan">No. Ruangan <i class="fa fa-users"></i><span class="text-danger">*</span></label>
                                            <input type="text" name="no_ruangan" class="form-control" required="" value="<?php echo $data_ruangan->no_ruangan ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="nama_ruangan">Nama Ruangan <i class="fa fa-users"></i><span class="text-danger">*</span></label>
                                            <input type="text" name="nama_ruangan" class="form-control" required="" value="<?php echo $data_ruangan->nama_ruangan ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="nama_pic">Nama PIC Ruangan <i class="fa fa-users"></i><span class="text-danger">*</span></label>
                                            <input type="text" name="nama_pic" class="form-control" required="" value="<?php echo $data_ruangan->nama_pic ?>">
                                            <!-- <select class="form-control select select-2" name="nama_pic" id="" required="">
                                                <option value="">--Select--</option>
                                                <option value="Nama Test 1">Nama Test 1 </option>
                                                <option value="Nama Test 2">Nama Test 2 </option>
                                                <option value="Nama Test 3">Nama Test 3 </option>
                                            </select> -->
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="username">Lantai <i class="fa fa-envelope"></i> <span class="text-danger">*</span></label>
                                            <input type="text" name="lantai" class="form-control" required="" value="<?php echo $data_ruangan->lantai ?>">
                                            <!-- <select class="form-control select select-2" name="lantai" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select> -->
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="username">Gedung <i class="fa fa-phone"></i> <span class="text-danger">*</span></label>
                                            <input type="text" name="gedung" class="form-control" required="" value="<?php echo $data_ruangan->gedung ?>">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="username">Keterangan : <span class="text-danger">*</span></label>
                                            <input type="text" name="keterangan" class="form-control" required="" value="<?php echo $data_ruangan->keterangan ?>">
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="col-xs-12">
                                    <hr>
                                    <p class="text-danger">* Required</p>
                                    <button type="submit" class="btn btn-primary btn-flat">Save</button>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }else{ ?>

    <section class="content-header">
        <h1>404 Page Not Found</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <li class="active">Page not found</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="text-center">
            <span style="font-size: 15em;font-weight: bolder;">404</span>
            <h2 style="margin-top: 0;">You don't have access to this page</h2>
        </div>
    </section>


<?php } ?>
<!-- <div class="page-content"> -->
  <header class="page-content-header">
      <div class="container-fluid">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <h2>Pengajuan ATK </h2>
              <div class="subtitle">Entry / Pengajuan ATK </div>
            </div>
            <div class="tbl-cell tbl-cell-action">
              <a class="back btn btn-primary btn-flat btn-xs"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
      </div>
    </header><!--.page-content-header-->

     <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>

         <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>

         <?php echo form_open_multipart('entry/proses-atk', array('class' => 'form-horizontal' , 'name' => 'add_name' ,'id' => 'add_name')); ?>
      <div class="box-typical box-typical-padding">

        <h5 class="m-t-lg with-border"><b>User</b></h5>

        <div class="row">
            
            <div class="col-lg-4 col-md-4">
              <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled">Nama</label>
                <input name="nama" type="text" class="form-control" value="<?php echo $this->session->userdata('username') ?>" >
                <input name="id_user" type="text" class="form-control"  value="<?php echo $this->session->userdata('id_admin') ?>" hidden>

              </fieldset>
            </div>
            <div class="col-lg-4 col-md-4">
              <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled">NIK</label>
                <input name="nik" type="text" class="form-control" value="<?php echo $this->session->userdata('nik') ?>" readonly="">
                
              </fieldset>
            </div>
            <div class="col-lg-4 col-md-4">
              <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled">Unit</label>
                <input name="divisi" type="text" class="form-control" value="<?php echo $this->session->userdata('divisi') ?>" readonly="">
              </fieldset>
            </div>
            <div class="col-lg-4 col-md-4">
              <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled">Tahun Ajaran</label>
                <input name="tahunajar" type="text" class="form-control" value="<?php echo $site['tahunajar'] ?>" readonly="">
              </fieldset>
            </div>

            <div class="col-lg-4 col-md-4">
              <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled">File Upload</label>
                  <input type="file" name="userfile" id="file-1" class="inputfile inputfile-1 bg-primary" />
                  <small class="text-danger"><em>Allowed file is PNG, JPG, DOC &amp; PDF / Max File 1 mb</em></small>
                 
              </fieldset>
            </div>  

        </div><!--.row-->



        <h5 class="m-t-lg with-border">
          <b>Detail Barang</b> 
          <span class="pull-right">Tanggal : <?php echo date('l, d/m/y h:i:s') ?></span>
        </h5>

        <div class="row">
          
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label"><b>SUBJECT</b></label>
                  <div class="col-sm-10">
                    <input type="text" name="subjek" class="form-control" placeholder="Subject" required>
                  </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <fieldset class="form-group row">
                    <label class="col-sm-3 form-control-label">Tahun Ajaran</label>
                    <div class="col-sm-9">
                      <select class="form-control select-2" name="tahunajar" id="" required="">
                        <option value="">-- Tahun Ajaran --</option>
                        <option value="2017/2018">2017 / 2018</option>
                        <option value="2018/2019"> 2018 / 2019</option>
                        <option value="2019/2020"> 2019 / 2020</option>
                      </select>
                    </div>
                </fieldset>
            </div>
          
        </div>

        <table class="table table-hover table-bordered" id="dynamic_field">

            <thead>
                <tr>                        
                    <th style="width:20%;" class="text-center">Nama Barang</th>
                    <th style="width:10%;">Jumlah</th> 
                    <th style="width:15%;">Satuan</th>                         
                    <th style="width:15%;">Keterangan Barang</th>                      
                    <th style="width:10%;"></th>

                </tr>
            </thead>

            <tbody>
              <tr id="row" name="id">
                <td> <input type="text" name="nama_barang[]" class="form-control" placeholder="Nama Barang" required=""> </td>
                <td> <input type="text" name="jumlah[]" class="form-control" placeholder="Jumlah" required=""> </td>
                <td> 
                    <select name="id_satuan[]" class="form-control select" required="">
                      <option value="">Pilih Satuan</option>
                      <option value="other">-- Other --</option>
                      <?php foreach ($satuan as $satuan) { ?>
                        <option name="id_satuan[]" value="<?php echo $satuan['nama_satuan'] ?>"  required> <?php echo $satuan['nama_satuan'] ?> </option>.
                      <?php } ?>
                    </select>
                </td>
                <td> <input type="text" name="keterangan[]" class="form-control" placeholder="Keterangan"></td>
                <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus-square"></i> Tambah</button></td>
              </tr>
            </tbody> 
       
        </table>

        <hr>

        <div class="row">
          <fieldset class="form-group" style="margin-top: 20px;">
            <div class="col-sm-offset-2 col-sm-10">
                <button data-loading-text="Loading..." class="btn btn-primary"><i class="glyphicon glyphicon-ok-sign"></i> Send</button>
                      
                <button type="reset" class="btn btn-default" onclick="resetOrderForm()">
                  <i class="glyphicon glyphicon-erase"></i> Reset
                </button>
                    
            </div>
          </fieldset>
        </div>
            
      </div>
      
    <?php echo form_close(); ?> 

<!-- </div> --><!--.page-content-->
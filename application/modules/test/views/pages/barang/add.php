
<style>
	#imagePreview {
	    margin-top: 7px;
	    width: 300px;
	    height: 300px;
	    background-position: center center;
	    background-size: cover;
	    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
	    display: inline-block;
	}
</style>

<?php if ($this->session->userdata('role') == 'Super Admin' || $this->session->userdata('role') == 'Sarpras') { ?>

	<?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>
	<?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
	<?php echo form_open_multipart('data-barang-add', array('class' => 'form-horizontal' , 'name' => 'add_name' ,'id' => 'add_name')); ?>
	<div class="container-fluid">
		<div class="box-typical box-typical-padding documentation"">
			<header class="section-header">
	            <div class="tbl">
	                <div class="tbl-row">
	                    <div class="tbl-cell">
	                        <h2>Tambah Barang</h2>
	                        <div class="subtitle">Tambah Barang Inventaris</div>
	                    </div>
	                </div>
	            </div>
	        <ol class="breadcrumb breadcrumb-clean">
					</ol>
	      
	    </header>

        	
	        <div class="row">
	        				<div class="col-md-3">
	                    <fieldset class='form-group'>
	                        <label><b>Group</b></label>
	                        <select  class='form-control' id='group' name="group" required>
	                            <option value=''>--Pilih--</option>
	                            <?php foreach ($group as $dataGroup) { ?>
	                            <option name="group" value="<?php echo $dataGroup['no_group'] ?>"><?php echo $dataGroup['no_group'] ?> | <?php echo $dataGroup['nama_group'] ?></option>
	                            <?php } ?>
	                        </select>
	                        <small><i>Required *</i></small>
	                    </fieldset>
	                </div>

	                <div class="col-md-3">
	                    <div class='form-group'>
		                    <label><b>Subgroup</b> </label>
		                    <select class='form-control' id='subgroup' name="subgroup">
			                    <option value='0'>--Pilih--</option>
		                    </select>
	                    </div>
	                </div>

	                <div class="col-md-2">
	                	<div class="form-group">
	                		<label><b>No Tahun</b></label>
	                		<select class='form-control' name="no_tahun" required>
	                			<option value=''>--Pilih--</option>
			                    <option value='15'>2015</option>
			                    <option value='16'>2016</option>
			                    <option value='17'>2017</option>
			                    <option value='18'>2018</option>
			                    <option value='19'>2019</option>
			                    <option value='20'>2020</option>
		                    </select>
		                    <small><i>Required *</i></small>
	                	</div>
	                </div>

	                <div class="col-md-2">
	                	<div class="form-group">
	                		<label><b>No Bulan</b></label>
	                		<select class='form-control' name="no_bulan" required>
	                			<option value=''>--Pilih--</option>
			                    <option value='01'>Januari</option>
			                    <option value='02'>February</option>
			                    <option value='03'>Maret</option>
			                    <option value='04'>April</option>
			                    <option value='05'>Mei</option>
			                    <option value='06'>Juni</option>
			                    <option value='07'>Juli</option>
			                    <option value='08'>Agustus</option>
			                    <option value='09'>September</option>
			                    <option value='10'>Oktober</option>
			                    <option value='11'>November</option>
			                    <option value='12'>Desember</option>
		                    </select>
		                    <small><i>Required *</i></small>
	                	</div>
	                </div>

	                <div class="col-md-2">
	                	<div class="form-group">
	                		<label><b>Kode Barang</b></label>
	                		<input type="text" class="form-control" id='nobarang' name='no_barang' required>
	                		<small><i>Required *</i></small>
	                	</div>
	                </div>
	                
                <div class="clearfix"></div>
					
		        	<div class="col-md-7">
		                <div class="table-responsive">
		                    <table class="table table-borderless table-striped dfTable table-right-left">
		                        <tbody>
		                            <tr>
		                                <td>Nama Barang</td>
		                                <td>
		                                	<fieldset class='form-group'>
					                        <small><i>Required *</i></small>
		                                	<input class="form-control" name="nama_barang" type="text" required>
			                                </fieldset>
		                                </td>
		                            </tr>
		                            <tr>
		                            	<td>Tanggal Beli</td>
		                            	<td>
		                            		<small><i>Required *</i></small> 
		                            		<input name="tanggal_beli" class="form-control" type="text" required>
		                            	</td>
		                            </tr>
		                            <tr>
			                            <td>Merk</td>
			                            <td><input class="form-control" name="merk" type="text"></td>
		                            </tr>
		                            <tr>
			                            <td>Type</td>
			                            <td><input class="form-control" name="type" type="text"></td>
		                            </tr>
		                            
									<tr>
			                            <td>Satuan Barang</td>
			                            <td>
			                            	<fieldset class='form-group'>
					                            <small><i>Required *</i></small>
					                            <select  class='form-control' id='satuan' name="satuan" required>
					                                <option value='0'>--pilih--</option>
					                                <?php foreach ($satuan as $dataSatuan) { ?>
					                                <option value="<?php echo $dataSatuan['id_barang_satuan'] ?>"><?php echo $dataSatuan['nama_satuan'] ?></option>
					                                <?php } ?>
					                            </select>
					                        </fieldset>
					                    </td>
		                            </tr>
		                            <tr>
		                                <td>Jumlah Barang</td>
		                                <td>
		                                	<fieldset class='form-group'>
						                        <small><i>Required *</i></small>
			                                	<input class="form-control" name="jumlah" type="text" required>
			                                </fieldset>
		                                </td>
		                            </tr>

		                            
		                            <tr>
		                            	<td>Tahun Ajaran</td>
		                            	<td>
		                            		<fieldset class="form-group">
		                            			<small><i>Required</i></small>
		                            			<select name="tahunajar" id="tahunajar" class="form-control">
		                            				<option value="">-- pilih Tahun Ajaran --</option>
		                            				<option value="2018/2019">2018/2019</option>
		                            				<option value="2017/2018">2017/2018</option>
		                            			</select>
		                            		</fieldset>
		                            	</td>
		                            </tr>
		                            
		                       	</tbody>
		                    </table>
		                </div>
		            </div>

		            <div class="col-md-5">
		            	<fieldset class="form-group">
			                <label class="form-label" for="exampleInputDisabled"><b>File Upload</b></label>
			                <input type="file" name="userfile" id="file" class="inputfile inputfile-1 bg-primary" /><br>
			                <small class="text-danger">
			                	<em>Allowed file is PNG, JPG, JPEG &amp; GIF / Max File 1 mb</em>
			                </small>
			             </fieldset>
				        <div id="imagePreview"> 
				        	<small class="text-danger"> Ukuran 300 x 300 </small> 
					    </div>

		            </div>

	            <div class="clearfix"></div>

		            <div class="col-md-12">
		                <textarea placeholder="Keterangan barang" class="form-control" name="" id="" cols="30" rows="10"></textarea>
		            </div>

		        <div class="clearfix"></div><br>
		        	<div class="col-md-6">
		        		<div class="form-group ">		        			
							<button type="submit" class="btn btn-rounded btn-inline btn-primary">Save</button>
							<button type="button" class="btn back btn-rounded btn-inline btn-warning">Batal</button>
						</div>
					
		        	</div>
		        	<div class="col-md-6">
		        	</div>	

	        </div>

	    </div><!--.box-typical-->

	</div>
		
			
	<?php echo form_close(); ?> 


   
	
<?php }else{ ?>
	<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>404 Page Not Found</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('backend/dashboard');?>"><i class="fa fa-home"></i> Dashboard</a></li>
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
</div>

<?php } ?>

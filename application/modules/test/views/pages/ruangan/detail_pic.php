<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-12 col-lg-12 col-xl-12 col-md-12">
					<section class="box-typical proj-page">
						<section class="proj-page-section proj-page-header">
							<div class="title">
								Detail Barang
								<i class="fa fa-archive"></i>
									<a href="<?php echo base_url('ruangan-print/'.$data_ruangan->id_ruangan);?>" class="btn btn-sm btn-primary  btn-xs" data-toggle="tooltip" data-placement="top" title="Print" target="_blank"><i class="fa fa-print"></i> Print List Barang</a> 
							</div>

							<section class="card">
                  <div class="card-block">
                      	
                          <table id="tableSupplier" class="table table-hover table-bordered">

                              <thead>
                                  <tr>
                                      
                                      <th class="text-center">No Inventaris</th>
                                      <th class="text-center">Nama Barang</th>
                                      <th class="text-center">Pic Barang</th>
                                      <th class="text-center">Option</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $no=0; foreach ($data_ruangan_item as $dataBarang) { $no++; ?>
                                  <tr>
                                      <td><?php echo $dataBarang->id_barang_group; ?>.<?php echo $dataBarang->id_barang_subgroup; ?>.<?php echo $dataBarang->no_barang; ?>.<?php echo $dataBarang->no_tahun; ?>.<?php echo $dataBarang->no_bulan; ?>.<?php echo $dataBarang->no_item; ?>
                                      	
                                      </td>
                                      <td><?php echo $dataBarang->nama_barang;?></td>	


                                    <?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>

                                    <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>

                                    <?php echo form_open_multipart('data-gudang-pic-update/'.$dataBarang->id_barang_item, array('class' => 'form-horizontal' , 'name' => 'add_name' ,'id' => 'add_name')); ?>			
                                      <td>
	                                      <?php if ($dataBarang->id_karyawan==''){ ?>
	                                      	<?php if ($this->session->userdata('role')=='Pic'){ ?>
			                                      <select class="form-control select" name="id_karyawan" required="">
	                                              <option value="">--Select--</option>

	                                              <?php foreach ($data_sdm as $dataSdm ) { 
	                                                  if ($dataSdm->status_aktif=='1') { ?>
	                                                  <option name="id_karyawan" value="<?php echo $dataSdm->nik; ?>"><?php echo $dataSdm->karyawan ?> </option>
	                                              <?php } } ?>
	                                          </select>
	                                      	<?php } }?>

	                                      	<?php echo $dataBarang->karyawan;?>
	                                      		
                                      </td>

                                      <td class="text-center">
	                                      <?php if ($dataBarang->id_karyawan=='') { ?>

	                                      	

	                                      	<button type="sumbit" class="btn btn-sm btn-success  btn-xs" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-plus"></i></button>

	                                      	
	                                      <?php } ?>

	                                      	<a href="<?php echo base_url('item-barang-detail/'.$dataBarang->id_barang_item);?>" class="btn btn-sm btn-primary  btn-xs" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>

	                                      

                                      </td>

                                    <?php echo form_close(); ?>

                                  </tr>
                                  <?php } ?>
                              </tbody>
                              
                          </table>
                   
                  </div>
              </section>
			        
						</section><!--.proj-page-section-->
					</section><!--.proj-page-->
				</div>

			</div><!--.row-->
</div><!--.container-fluid-->
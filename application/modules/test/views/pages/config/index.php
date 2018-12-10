
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<h3><?php echo $menu ?></h3>
					<ol class="breadcrumb breadcrumb-simple">
						<li><i fa class="fa fa-home"></i> <a href="<?php echo base_url() ?>">Dashboard</a></li>
						<li><?php echo $menu ?></li>
					</ol>
				</div>
			</header>

			<section class="card">

				<div class="card-block">

					<?php if($this->session->flashdata('error')){echo '<strong class="text-danger">'.$this->session->flashdata('error').'</strong>';}?>
	        <?php if (validation_errors() != '') {echo '<span class="text-danger">'.validation_errors().'</span><br/>';} ?>
	        <?php echo form_open_multipart('admin/pages/config', array('class' => 'form-horizontal' , 'name' => 'form-signin_v1' ,'id' => 'form-signin_v1')); ?>

						<input type="hidden" name="id_config" value="<?php echo $site['id_config'] ?>">

						<div class="row">

							<div class="col-lg-6">
								<h5 class="m-t-lg with-border m-t-0">General Config</h5>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-university"></i> Name Web <small class="text-danger"><em>*</em></small></label>
										<input name="nameweb"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['nameweb'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-envelope"></i> Email</label>
										<input name="email"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['email'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-phone"></i> No. Telp</label>
										<input name="no_telp"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['no_telp'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-fax"></i> Fax</label>
										<input name="fax"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['fax'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-home"></i> Address</label>
										<input name="address"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['address'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-globe"></i> City</label>
										<input name="city"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['city'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-paper-plane-o"></i> Zip Code</label>
										<input name="zip_code"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['zip_code'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

								
							</div>

							<div class="col-lg-6">
							      
								<h5 class="m-t-lg with-border m-t-0">Social Media</h5>
									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-facebook"></i> Facebook</label>
										<input name="facebook"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['facebook'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

									<fieldset class="form-group">
										<label class="form-label"><i class="fa fa-twitter"></i> Twitter</label>
										<input name="twitter"
											   type="text"
											   class="form-control"
											   value="<?php echo $site['twitter'] ?>"
											   data-validation="[NOTEMPTY]">
									</fieldset>

								<h5 class="m-t-lg with-border m-t-0">Keywords<small class="text-danger"><em>*</em></small></h5>
									<fieldset class="form-group">
										<textarea name="keywords" rows="2" class="form-control maxlength-simple" placeholder="<?php echo $site['keywords'] ?>" required><?php echo $site['keywords'] ?></textarea>
									</fieldset>	

								<h5 class="m-t-lg with-border m-t-0">Metatext<small class="text-danger"><em>*</em></small></h5>
									<fieldset class="form-group">
										<textarea name="metatext" rows="2" class="form-control maxlength-simple" placeholder="<?php echo $site['metatext'] ?>" required><?php echo $site['metatext'] ?></textarea>
									</fieldset>	

								<h5 class="m-t-lg with-border m-t-0">Google Maps<small class="text-danger"><em>*</em></small></h5>
									<fieldset class="form-group">
										<textarea name="maps" rows="2" class="form-control maxlength-simple" placeholder="<?php echo $site['maps'] ?>" required><?php echo $site['maps'] ?></textarea>
									</fieldset>

								<h5 class="m-t-lg with-border m-t-0">Footer Text<small class="text-danger"><em>*</em></small></h5>
									<fieldset class="form-group">
										<textarea name="footer_text" rows="2" class="form-control maxlength-simple" placeholder="<?php echo $site['footer_text'] ?>" value="" required><?php echo $site['footer_text'] ?></textarea>
									</fieldset>		

							</div>

							
						</div>
						
						<hr>				
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<button type="submit" class="btn btn-warning">Update</button>
									<button type="button" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
						<small class="text-danger"><em>* Requerid</em></small>

					<?php echo form_close() ?>

				</div>

			</section>

		</div>


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



	<div class="container-fluid">

		<header class="section-header">
			<div class="tbl">
				<h3><?php echo $menu ?></h3>
				<ol class="breadcrumb breadcrumb-simple">
					<li><a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
					<li><a href="#"><?php echo $menu ?></a></li>
				</ol>
			</div>
		</header>
				<?php
					// Session 
					if($this->session->flashdata('sukses')) { 
						echo '<div class="alert alert-success">';
						echo $this->session->flashdata('sukses');
						echo '</div>';
					} 

					// File upload error
					if(isset($error)) {
						echo '<div class="alert alert-success">';
						echo $error;
						echo '</div>';
					}

					// Error
					echo validation_errors('<div class="alert alert-success">','</div>'); 
				?>
		<section class="card">

			<div class="card-block">
	      
	      		<form action="<?php echo base_url('template/logo') ?>" method="post" enctype="multipart/form-data">

					<input type="hidden" name="id_config" value="<?php echo $site['id_config'] ?>">

					<div class="row">

						<div class="col-lg-6">
							<h5 class="m-t-lg with-border m-t-0">Logo</h5>

								<fieldset class="form-group">
						            <input type="file" name="logo" class="form-control" id="file">
						           	<small class="text-danger"><em>Allowed file is PNG, JPG, JPEG &amp; GIF / Max File 1 mb</em></small>
						            <div id="imagePreview"></div><br><small class="text-danger"> Ukuran 300 x 300 </small>
						         </fieldset>

						</div>

						<div class="col-md-6">
					    	<label>Contoh Ukuran Logo:</label><br>
					        <img src="<?php echo base_url('dist/uploads/image/'.$site['logo']);?>">
					    </div>
						
					</div>
					
					<hr>
				
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<button type="submit" name="submit" class="btn">Save</button>
								<button type="button" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>

					<small class="text-danger"><em>* Requerid</em></small>

				</form>

			</div>

		</section>

	</div>


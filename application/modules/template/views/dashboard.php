	

	<div class="container-fluid">

	    	<div class="row">

					<div class="col-xs-push-12 col-xs-12 col-md-6">
						
						<?php 
							// Widget Task Status
							require_once ('widget/status.php'); 
						?>

						<section class="widget widget-pie-chart">
							<div class="no-padding">
								<div class="tbl tbl-grid">

									<div class="tbl-row">
										<div class="tbl-cell">
											<div class="ggl-pie-chart-container">
												<div class="ggl-pie-chart-title">
													<div class="caption">Total Barang /item</div>
													<div class="number"><?php echo $total_barang ?></div>
												</div>
											</div>
										</div>
										<div class="tbl-cell tbl-cell-340px">
											<div class="col">
												<div class="chart-box-info">
													<div class="number">218</div>
													<div class="caption">Barang</div>
												</div>
											</div>
											<div class="col">
												<div class="chart-box-info">
													<div class="number">715</div>
													<div class="caption">ATK</div>
												</div>
											</div>
											<div class="chart-legend-tbl">
												<div class="title">Status:</div>
												<div class="tbl">
													<div class="tbl-row">
														<div class="tbl-cell tbl-cell-legend">
															<div class="dot green"></div>
															Active <span class="color-blue-grey-lighter"></span>
														</div>
														<div class="tbl-cell tbl-cell-value"> 250 </div>
													</div>
													<div class="tbl-row">
														<div class="tbl-cell tbl-cell-legend">
															<div class="dot red"></div>
															Non-Active <span class="color-blue-grey-lighter"></span>
														</div>
														<div class="tbl-cell tbl-cell-value">173 </div>
													</div>
													<div class="tbl-row">
														<div class="tbl-cell tbl-cell-legend">
															<div class="dot orange"></div>
															Warning <span class="color-blue-grey-lighter"></span>
														</div>
														<div class="tbl-cell tbl-cell-value">209</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<div class="row">
							<div class="col-xl-6">
								<section class="widget widget-simple-sm">
									<div class="widget-simple-sm-statistic">
										<div class="number">1.426</div>
										<div class="caption color-blue">Pengajuan</div>
									</div>
									<div class="widget-simple-sm-bottom statistic">
										<a href=""><span class="arrow color-green">↑</span> View List <strong>1w ago</strong></a>
									</div>
								</section><!--.widget-simple-sm-->
							</div>
							<div class="col-xl-6">
								<section class="widget widget-simple-sm">
									<div class="widget-simple-sm-statistic">
										<div class="number">541</div>
										<div class="caption color-purple">Service</div>
									</div>
									<div class="widget-simple-sm-bottom statistic">
										<a href=""><span class="arrow color-green">↑</span> View List <strong>1w ago</strong></a>
									</div>
								</section><!--.widget-simple-sm-->
							</div>
						</div>

					</div> <!--.col-->

					<div class="col-xs-pull-12 col-xs-12 col-md-6">

					    <?php 
					    	// Widget User Info/Profil 
					        require_once('widget/profil.php');
					        
					        // Widget Jam
					     	require_once('widget/jam.php'); 
					    ?>

				    </div> <!--.col-->

				</div>


	</div>
		<?php
			include "../conf/koneksi.php";
			include "../lib/inc.session.php";
			
			$ed = mysqli_query($connect, "SELECT * FROM gp  WHERE id_gp = '$_GET[id]'");
			while ($r = mysqli_fetch_array($ed)){
		?>
		
		<!-- Main content -->
        <section class="content">
			<div class="row">			
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Detail Data Gully Plug</h3>
						</div><!-- /.box-header -->
				  
						<form role="form" name="form1" action="?page=upUs" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
							<input type='hidden' name='id' value="<?php echo $r['id_gp']; ?>" >
							<div class="box-body">
								<p>
									<div class="row">
										<div class="col-xs-6">
									<div class="form-group">
										<label for="exampleInputSmnr1">Kawasan:</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil-square-o"></i>
											</div>
											<input type="text" class="form-control" name="kawasan" id="exampleInputSmnr1" value="<?php echo $r['kawasan']; ?>" placeholder="Luar kawasan / dalam kawasan" required="required">
										</div>
									</div>											
										</div>
										<div class="col-xs-6">
									<div class="form-group">
										<label for="exampleInputLksSmnr1">Unit:</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-gavel"></i>
											</div>
											<input type="text" name="unit" class="form-control" placeholder="Jumlah GP" value="<?php echo $r['unit']; ?>" required="required">
										</div>
									</div>											
										</div>
									</div>

								</p>
								
								<p>
									<div class="row">
										<div class="col-md-3">
											<label>Kecamatan:</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-university"></i>
												</div>
												<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan lokasi GP" value="<?php echo $r['kecamatan']; ?>" required="required">
											</div>
										</div>
										<div class="col-md-3">
											<label>Desa:</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-home"></i>
												</div>
												<input type="text" name="desa" class="form-control" placeholder="Desa lokasi GP" value="<?php echo $r['desa']; ?>" required="required">
											</div>
										</div>
										<div class="col-md-3">
											<label>Longitude:</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</div>
												<input type="text" name="longitude" class="form-control" placeholder="Koordinat Longitude" value="<?php echo $r['longitude']; ?>" required="required">
											</div>
										</div>
										<div class="col-md-3">
											<label>Latitude:</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</div>
												<input type="text" name="latitude" class="form-control" placeholder="Koordinat Latitude" value="<?php echo $r['latitude']; ?>" required="required">
											</div>
										</div>
									</div>
								</p>

										<p>
											<div class="row">
												<div class="col-xs-4">
													<div class="form-group">
														<label for="exampleInputFile">Ubah Foto</label><a href="" data-toggle="modal" data-target="#exampleModal">
														<?php echo "<img src='gambar/img_gp/$r[gambar]' class='img-responsive'>"; ?></a>
													</div>
													<div class="form-group">

														<input type="file" id="exampleInputFile" name="fupload">
														<p class="help-block">File foto harus bertipe *.jpeg, *.jpg, atau *.png</p>
													</div>											
												</div>
											</div>
										</p>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-left" name="submit">Save changes</button>
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
							</div>
						</form>
					</div>
				</div><!-- /.col-->
			</div><!-- ./row -->
        </section><!-- /.content -->
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel"><?php echo $r['desa']; ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<img src="gambar/img_gp/<?php echo $r['gambar']; ?>" class="img-responsive">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php } ?>
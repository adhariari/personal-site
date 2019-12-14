		<!-- Main content -->
        <section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Tambah Data Gully Plug</h3>
						</div><!-- /.box-header -->
				  
						<form role="form" name="form1" action="?page=svUs" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
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
											<input type="text" class="form-control" name="kawasan" id="exampleInputSmnr1" placeholder="Luar kawasan / dalam kawasan" required="required">
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
											<input type="text" name="unit" class="form-control" placeholder="Jumlah GP" required="required">
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
												<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan lokasi GP" required="required">
											</div>
										</div>
										<div class="col-md-3">
											<label>Desa:</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-home"></i>
												</div>
												<input type="text" name="desa" class="form-control" placeholder="Desa lokasi GP" required="required">
											</div>
										</div>
										<div class="col-md-3">
											<label>Longitude:</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</div>
												<input type="text" name="longitude" class="form-control" placeholder="Koordinat Longitude" required="required">
											</div>
										</div>
										<div class="col-md-3">
											<label>Latitude:</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-map-marker"></i>
												</div>
												<input type="text" name="latitude" class="form-control" placeholder="Koordinat Latitude" required="required">
											</div>
										</div>
									</div>
								</p>

								<p>
									<div class="form-group">
										<label for="exampleInputFile">Foto</label>
										<input type="file" id="exampleInputFile" name="fupload" required>
										<p class="help-block">File foto harus bertipe *.jpeg, *.jpg, atau *.png</p>
									</div>
								</p>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary pull-left" name="submit">Save</button>
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
							</div>
						</form>
					</div>
				</div><!-- /.col-->
			</div><!-- ./row -->
        </section><!-- /.content -->
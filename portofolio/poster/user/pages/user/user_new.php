		<!-- Main content -->
        <section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Upload Poster</h3>
							<!-- tools box -->
							<div class="pull-right box-tools">
								<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							</div><!-- /. tools -->
						</div><!-- /.box-header -->
				  
						<form role="form" name="form1" action="?page=svUs" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
							<div class="box-body">
							<div class="row">
							<div class="col-md-6">
								<p>
									<div class="form-group">
										<label for="exampleInputPengguna1">Judul Poster</label>
										<input type="text" class="form-control" name="judul" id="exampleInputPengguna1" placeholder="Masukkan judul poster" required="required">
									</div>
								</p>

								<p>
									<div class="form-group">
										<label for="exampleInputPengguna1">Kategori</label>
									<select required="required" class="form-control" name="kategori">
									<option value="">-- Pilih Kategori --</option>	
										<option value="Pendidikan">Pendidikan</option>							
										<option value="Lalu-Lintas">Lalu Lintas</option>						
										<option value="Kesehatan">Kesehatan</option>							
										<option value="Lingkungan">Lingkungan</option>							
									</select>
									</div>
								</p>
										
								<p>
									<div class="form-group">
										<label for="exampleInputEmail1">Deskripsi</label>
										<textarea class="form-control" rows="5" name="deskripsi" placeholder="Deskripsikan postermu.." required></textarea>
									</div>
								</p>
							

								<p>
									<div class="form-group">
										<label for="exampleInputFile">Foto</label>
										<input type="file" id="exampleInputFile" name="nama_file">
										<p class="help-block">File foto harus bertipe *.jpeg, *.jpg</p>
									</div>
								</p>
							</div>
							<div class="col-md-6"></div>
							</div>
							</div>
							<div class="box-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
								<button type="submit" class="btn btn-primary pull-right" name="submit">Save</button>
							</div>
						</form>
					</div>
				</div><!-- /.col-->
			</div><!-- ./row -->
        </section><!-- /.content -->
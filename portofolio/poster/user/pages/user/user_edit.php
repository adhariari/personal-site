		<?php
			include "../conf/koneksi.php";
			include "../conf/inc.session.php";
			
			$ed = mysqli_query($connect, "SELECT * FROM poster
			                   WHERE id_poster = '$_GET[id]'");
			while ($r = mysqli_fetch_array($ed)){
		?>
		
		<!-- Main content -->
        <section class="content">
			<div class="row">
			
			<div class="col-xs-12">
				<div class="box box-default">
					<div class="box-header with-border">
					<!-- tools box -->
							<div class="pull-right box-tools">
								<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							</div><!-- /. tools -->
						<i class="fa fa-bullhorn"></i>
						<h3 class="box-title">Kolom Informasi</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="callout callout-info">
							<h4>Perhatian!</h4>
							<p align="justify">Anda dapat mengubah informasi poster di halaman ini.</p>
						</div>
					</div>
				</div>
			</div>
			
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Edit Data Pengguna</h3>
						</div><!-- /.box-header -->
				  
						<form role="form" name="form1" action="?page=upUs" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
							<input type='hidden' name='id' value="<?php echo $r['id_poster']; ?>" >
							<div class="box-body">
							<div class="row">
							<div class="col-md-6">
								<p>
									<div class="form-group">
										<label for="exampleInputPengguna1">Judul</label>
										<input type="text" class="form-control" name="judul" id="exampleInputPengguna1" placeholder="Masukkan judul poster" required="required" value="<?php echo $r['judul']; ?>">
									</div>
								</p>

								<p>
									<div class="form-group">
										<label for="exampleInputPengguna1">Kategori</label>
									<select required="required" class="form-control" name="kategori">
										<?php 
										include "../conf/koneksi.php";
										echo"<option value=$r[kategori] selected>$r[kategori]</option>"; 
										?>						
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
										<textarea class="form-control" rows="20" name="deskripsi" placeholder="Deskripsikan postermu.." required><?php echo $r['deskripsi']; ?></textarea>
									</div>
								</p>
							
								
							</div>
							<div class="col-md-6">
								<p>
									<div class="form-group">
										<?php echo "<img src='img_user/$r[foto]' oncontextmenu='return false;' width=500 height=600>"; ?>
										<!-- script (oncontextmenu='return false;'): mencegah gambar tidak dapat di klik kanan. -->
									</div>
								</p>

								<p>
									<div class="form-group">
										<label for="exampleInputFile">Ubah Poster</label>
										<input type="file" id="exampleInputFile" name="fupload">
										<p class="help-block">File poster harus bertipe *.jpeg, *.jpg</p>
									</div>
								</p>
							</div>
							</div>
							</div>
							<div class="box-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
								<button type="submit" class="btn btn-primary pull-right" name="submit">Save changes</button>
							</div>
						</form>
					</div>
				</div><!-- /.col-->
			</div><!-- ./row -->
        </section><!-- /.content -->
		
		<?php } ?>


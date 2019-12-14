		<?php
			include "../conf/koneksi.php";
			include "../lib/inc.session.php";
			
			$ed = mysqli_query($connect, "SELECT * FROM pengguna
			                   WHERE token_pengguna = '$_GET[tid]'");
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
							<p align="justify">Silahkan ganti password untuk keamanan dan kenyamanan Anda.</p>
							<p align="justify">Hindari penggunaan password dengan tanggal lahir, atau karakter yang mudah diingat oleh orang lain.</p>
							<p align="justify">Selalu gunakan kombinasi huruf dan angka.</p>
							<p align="justify">Ubah password Anda secara berkala.</p>
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
							<input type='hidden' name='tid' value="<?php echo $r['token_pengguna']; ?>" >
							<div class="box-body">
							<div class="row">
							<div class="col-md-6">
								<p>
									<div class="form-group">
										<label for="exampleInputPasswd1">Username Pengguna</label>
										<input type="text" class="form-control" name="user_pengguna" id="exampleInputPasswd1" placeholder="Masukkan nama pengguna" value="<?php echo $r['usernm']; ?>" required="required">
									</div>
								</p>

								<p>
									<div class="form-group">
										<label for="exampleInputPasswd1">Password Pengguna</label>
										<input type="text" class="form-control" name="pass_pengguna" id="exampleInputPasswd1" placeholder="Masukkan nama pengguna" value="<?php echo $r['passwd_origin']; ?>" required="required">
									</div>
								</p>
				  
								<p>
									<div class="form-group">
										<label for="exampleInputPengguna1">Nama Pengguna</label>
										<input type="text" class="form-control" name="nama_pengguna" id="exampleInputPengguna1" placeholder="Masukkan nama pengguna" value="<?php echo $r['nm_lengkap']; ?>" required="required">
									</div>
								</p>
					
								
								<p>
									<div class="form-group">
										<label for="exampleInputEmail1">Email Pengguna</label>
										<input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Masukkan email pengguna (format: nama_email@domain.com)" value="<?php echo $r['email_pengguna']; ?>" required="required">
									</div>
								</p>
					
								<p>
									<div class="form-group">
										<label for="exampleInputHp1">No. HP Pengguna</label>
										<input type="text" class="form-control" name="hp" id="exampleInputHp1" placeholder="Masukkan no. HP pengguna (hanya dapat di isi angka)" value="<?php echo $r['hp_pengguna']; ?>" required="required">
									</div>
								</p>

								<?php
									if ($r['status_pengguna']=='Admin'){
								?>
					
								<p>				
									<div class="form-group">
										<label>Status Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="status_user" id="optionsRadios1" value="Admin" checked> Administrator &nbsp;
										<input type="radio" name="status_user" id="optionsRadios1" value="User" > User
									</div>
								</p>
					
								<?php } else { ?>
					
								<p>				
									<div class="form-group">
										<label>Status Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="status_user" id="optionsRadios1" value="Admin" > Administrator &nbsp;
										<input type="radio" name="status_user" id="optionsRadios1" value="User" checked> User
									</div>
								</p>
					
								<?php } ?>
								</div>
								<div class="col-md-6">
					
								<p>
									<div class="form-group">
										<?php echo "<img src='img_user/$r[img_pengguna]' oncontextmenu='return false;'>"; ?>
										<!-- script (oncontextmenu='return false;'): mencegah gambar tidak dapat di klik kanan. -->
									</div>
								</p>

								<p>
									<div class="form-group">
										<label for="exampleInputFile">Ubah Foto Pengguna</label>
										<input type="file" id="exampleInputFile" name="fupload">
										<p class="help-block">File foto harus bertipe *.jpeg, *.jpg, atau *.png</p>
									</div>
								</p>
	
								<?php
									if ($r['blokir']=='Y'){
								?>
					
								<p>				
									<div class="form-group">
										<label>Blokir Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="blokir" id="optionsRadios1" value="Y" checked> Ya &nbsp;
										<input type="radio" name="blokir" id="optionsRadios1" value="N" > Tidak
									</div>
								</p>
					
								<?php } else { ?>
					
								<p>				
									<div class="form-group">
										<label>Blokir Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="blokir" id="optionsRadios1" value="Y" > Ya &nbsp;
										<input type="radio" name="blokir" id="optionsRadios1" value="N" checked> Tidak
									</div>
								</p>
								</div>
								</div>
								<p>
									<div class="box-body">
										<div class="row">
											<div class="col-xs-4">
												<label>Created by</label>
												<input type="text" class="form-control" value="<?php echo $r['cr_username_pengguna']; ?>" disabled>
											</div>
											<div class="col-xs-4">
												<label>Created at (date)</label>
												<input type="text" class="form-control" value="<?php echo $r['cr_dt_pengguna']; ?>" disabled>
											</div>
											<div class="col-xs-4">
												<label>Created at (time)</label>
												<input type="text" class="form-control" value="<?php echo $r['cr_tm_pengguna']; ?>" disabled>
											</div>
										</div>
									</div>
								</p>
					
								<?php } ?>
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
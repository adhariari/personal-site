<?php
include "../lib/inc.session.php";
?>
<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Tambah Peserta</h3>	
					</div><!-- /.box-header -->
					<form role="form1" name="form1" method="post" action="?page=svPst" enctype="multipart/form-data" onSubmit="return validasi()">
						<div class="box-body">
						<div class="row">
						<div class="col-xs-6">
							<p>
								<div class="form-group">
									<label>Pilih Acara/Seminar</label>
									<select required="required" class="form-control" name="seminar">
										<?php 
										include "conf/koneksi.php";
										echo"<option value=0 selected>- Pilih Seminar -</option>";
										$tampil=mysqli_query($connect, "SELECT * FROM seminar WHERE aktif_seminar = 'Y' 
																		AND seminar.cr_username_seminar = '$_SESSION[username]' 
																		ORDER BY id_seminar");
										while($r=mysqli_fetch_array($tampil)){
											echo "<option value=$r[id_seminar]>$r[nm_seminar]</option>"; 
										}
										?>
									</select>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label>Jenis Identitas</label>
									<select required="required" class="form-control" name="jns_id">
										<?php 
										include "conf/koneksi.php";
										echo"<option value=0 selected>- Pilih Jenis Identitas -</option>";
										$tampil=mysqli_query($connect, "SELECT * FROM kartu_identitas WHERE aktif_kartuid = 'Y' 
																		AND kartu_identitas.cr_username_kartuid = '$_SESSION[username]'
																		ORDER BY id_kartu");
										while($r=mysqli_fetch_array($tampil)){
											echo "<option value=$r[id_kartu]>$r[jns_kartuid]</option>"; 
										}
										?>
									</select>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="noId">Nomor Identitas</label>
									<input type="text" class="form-control" name="no_id" id="noId" placeholder="Ketikkan nomor identitas."  required="required">
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="nama">Nama Peserta</label>
									<input type="text" class="form-control" name="nm_peserta" id="nama" placeholder="Ketikkan nama lengkap peserta."  required="required">
								</div>
							</p>
							<p>				
								<div class="form-group">
									<label>Jenis Kelamin</label>
								</div>

								<div class="form-group">
									<input type="radio" name="kelamin" id="optionsRadios1" value="L" required> Laki-laki &nbsp;
									<input type="radio" name="kelamin" id="optionsRadios1" value="P" required> Perempuan
								</div>
							</p>
							</div>
							<div class="col-xs-6">
							<p>
								<div class="form-group">
									<label>Jurusan</label>
									<select class="form-control" name="pendidikan">
										<?php 
										include "conf/koneksi.php";

										echo"
										<option value=0 selected>- Pilih Jurusan -</option>";
										$tampil=mysqli_query($connect, "SELECT * FROM pendidikan WHERE aktif_pendidikan = 'Y' 
																								AND pendidikan.cr_username_pendidikan = '$_SESSION[username]'
																								ORDER BY id_pendidikan");
										while($r=mysqli_fetch_array($tampil)){
											echo "<option value=$r[id_pendidikan]>$r[pendidikan]</option>"; 
										}
										?>
									</select>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="kelas">Kelas</label>
									<input type="text" class="form-control" name="kelas_peserta" id="kelas" placeholder="Kelas peserta"  required="required">
							</p>
							<p>
								<div class="form-group">
									<label for="noHp">No. Handphone</label>
										<input type="text" class="form-control" name="no_hp" id="noHp" placeholder="Ketikkan nomor HP."  required="required">
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="email1">Email</label>
										<input type="text" class="form-control" name="email" id="email1" placeholder="Ketikkan email."  required="required">
								</div>
							</p>
							</div>
							<p align="right">
								<button type="submit" class="btn btn-primary" name="submit">Submit</button>
								<button type="button" class="btn btn-default" name="reset" onclick="self.history.back()">Cancel</button>
							</p>
						</div>
						</div>
					</form>
				</div>
			</div><!-- /.col-->
		</div><!-- ./row -->
	</section><!-- /.content -->

	<script src="jquery.js"></script>
	</body>
	</html>
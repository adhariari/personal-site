<?php
include "../conf/koneksi.php";
include "../lib/inc.session.php";

$ed = mysqli_query($connect, "SELECT * FROM peserta, seminar, kartu_identitas, pendidikan
	WHERE peserta.id_seminar = seminar.id_seminar
	AND peserta.id_kartu = kartu_identitas.id_kartu
	AND peserta.id_pendidikan = pendidikan.id_pendidikan
	AND peserta.token_peserta = '$_GET[tid]'");
while ($r = mysqli_fetch_array($ed)){
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
						<h3 class="box-title">Detail Data Peserta</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
							<button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
						</div><!-- /. tools -->
					</div><!-- /.box-header -->

					<form role="form1" name="form1" method="post" action="?page=edPst" enctype="multipart/form-data" onSubmit="return validasi()">
					<input type='hidden' name='tid' value="<?php echo $r['token_peserta']; ?>" >
						<div class="box-body">
						<div class="row">
						<div class="col-xs-6">
							<p>
								<div class="form-group">
									<label>Nama Acara/Seminar</label>
									<select required="required" class="form-control" name="seminar" disabled>
										<?php 
										include "conf/koneksi.php";
										echo"<option value=$r[id_seminar] selected>$r[nm_seminar]</option>";
										$tampil=mysqli_query($connect, "SELECT * FROM seminar WHERE aktif_seminar = 'Y' 
											AND seminar.cr_username_seminar = '$_SESSION[username]'
											ORDER BY id_seminar");
										while($l=mysqli_fetch_array($tampil)){
											echo "<option value=$l[id_seminar]>$l[nm_seminar]</option>"; 
										}
										?>
									</select>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="exampleInputNoReg1">No. Registrasi</label>
									<input type="text" class="form-control" name="noreg" id="exampleInputNoReg1" placeholder="No. registrasi." value="<?php echo $r['id_peserta']; ?>" disabled>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="exampleInputTglDaftar1">Tanggal Daftar</label>
									<input type="text" class="form-control" name="tgl_daftar" id="exampleInputTglDaftar1" placeholder="Tanggal daftar." value="<?php echo date("d-F-Y", strtotime("$r[tgl_daftar]")); ?>" disabled>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="exampleInputJamDaftar1">Waktu Daftar</label>
									<input type="text" class="form-control" name="wkt_daftar" id="exampleInputWktDaftar1" placeholder="Waktu daftar." value="<?php echo $r['jam_daftar']; ?>" disabled>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label>Jenis Identitas</label>
									<select required="required" class="form-control" name="jns_id">
										<?php 
										include "conf/koneksi.php";
										echo"<option value=$r[id_kartu] selected>$r[jns_kartuid]</option>";
										$tampil=mysqli_query($connect, "SELECT * FROM kartu_identitas WHERE aktif_kartuid = 'Y' 
											AND kartu_identitas.cr_username_kartuid = '$_SESSION[username]'
											ORDER BY id_kartu");
										while($z=mysqli_fetch_array($tampil)){
											echo "<option value=$z[id_kartu]>$z[jns_kartuid]</option>"; 
										}
										?>
									</select>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="noId">Nomor Identitas</label>
									<input type="text" class="form-control" name="no_id" id="exampleInputNoId1" placeholder="No. identitas." value="<?php echo $r['no_kartuid']; ?>">
								</div>
							</p>
							</div>
							<div class="col-xs-6">
							<p>
								<div class="form-group">
									<label for="nama">Nama Peserta</label>
									<input type="text" class="form-control" name="nm_peserta" id="exampleInputNmPst1" placeholder="Nama peserta." value="<?php echo $r['nama_peserta']; ?>">
								</div>
							</p>
							<p>
								<div class="form-group">
									<label>Jurusan</label>
									<select class="form-control" name="pendidikan">
										<?php 
										include "conf/koneksi.php";
										echo"<option value=$r[id_pendidikan] selected>$r[pendidikan]</option>";
										$tampil=mysqli_query($connect, "SELECT * FROM pendidikan WHERE aktif_pendidikan = 'Y' 
																								AND pendidikan.cr_username_pendidikan = '$_SESSION[username]'
																								ORDER BY id_pendidikan");
										while($t=mysqli_fetch_array($tampil)){
											echo "<option value=$t[id_pendidikan]>$t[pendidikan]</option>"; 
										}
										?>
									</select>
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="kelas">Kelas</label>
									<input type="text" class="form-control" name="kelas_peserta" id="kelas" placeholder="Kelas peserta"  value="<?php 
									echo $r['kelas_peserta'];?>">
							</p>
							<p>
								<div class="form-group">
									<label for="noHp">No. Handphone</label>
										<input type="text" class="form-control" name="no_hp" id="noHp" placeholder="Ketikkan nomor HP."  value="<?php echo $r['no_hp'];?>">
								</div>
							</p>
							<p>
								<div class="form-group">
									<label for="email1">Email</label>
										<input type="text" class="form-control" name="email" id="email1" placeholder="Ketikkan email."  value="<?php echo $r['email_peserta'];?>">
								</div>
							</p>
							<p>				
								<?php
									if ($r['jns_kelamin']=='L'){
								?>
										
								<div class="form-group">
									<label>Jenis Kelamin</label>
								</div>
										
								<div class="form-group">
									<input type="radio" name="kelamin" id="optionsRadios1" value="L" checked disabled> Laki-laki
									<input type="radio" name="kelamin" id="optionsRadios1" value="P" disabled> Perempuan
								</div>
										
								<?php } else { ?>
										
								<div class="form-group">
									<label>Jenis Kelamin</label>
								</div>
										
								<div class="form-group">
									<input type="radio" name="kelamin" id="optionsRadios1" value="L" disabled> Laki-laki
									<input type="radio" name="kelamin" id="optionsRadios1" value="P" checked disabled> Perempuan
								</div>
										
								<?php } ?>
							</p>
							<div class="box-footer">
								<button type="button" class="btn btn-default pull-right" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
								<button type="submit" class="btn btn-primary pull-right" name="submit">Save changes</button>
							</div>
							</div>
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
			<?php } ?>
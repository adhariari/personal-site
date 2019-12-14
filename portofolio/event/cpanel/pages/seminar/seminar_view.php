<?php
include "../lib/inc.session.php";
?>

<!DOCTYPE html>
<html>

<body class="hold-transition skin-blue sidebar-mini">

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
							<p align="justify">Apabila acara telah berlangsung, maka acara dapat di <b>hapus</b> atau di <b>nonaktifkan (Aktif: N)</b> agar acara yang telah berlangsung tidak tampil dalam komponen pemilihan event yang terdapat pada form registrasi peserta untuk pelaksanaan acara berikutnya.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-3">
				<input type="button" class="btn btn-block btn-success" name="addBtnCard" value="Tambah Acara" onclick="window.location='?page=adSmnr'">
			</div>
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Acara</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Acara</th>
									<th>Aktif</th>
									<th>Tanggal Acara</th>
									<th>Kuota Peserta</th>
									<th>Lokasi</th>
									<th>Aksi</th>
								</tr>
							</thead>

							<tbody>

								<?php
								include "../conf/koneksi.php";

								$vw = mysqli_query($connect, "SELECT * FROM seminar WHERE seminar.cr_username_seminar = '$_SESSION[username]' ORDER BY id_seminar ASC");
								$no = 1;
								while ($r = mysqli_fetch_array($vw)){
									?>

									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo "$r[nm_seminar]"; ?></td>
										<td><?php echo "$r[aktif_seminar]"; ?></td>
										<td><?php echo date("d-F-Y", strtotime("$r[tgl_seminar]")); ?></td>
										<td><?php echo "$r[kuota_isi]/$r[kuota]"; ?></td>
										<td><?php echo "$r[lokasi_seminar]"; ?></td>
										<td>
											<div class="btn-group">
												<input type="button" class="btn btn-default" name="submit" value="Edit" onclick="window.location='?page=edSmnr&tid=<?php echo $r['token_seminar']; ?>' ">
												<input type="button" data-toggle="tooltip" title="Becareful!" class="btn btn-danger" name="reset" value="Hapus" onclick="window.location='?page=dlSmnr&tid=<?php echo $r['token_seminar']; ?>&ids=<?php echo $r['id_seminar'];?>'">
											</div>
										</td>
									</tr>

									<?php $no++; } ?>
								</tbody>

							</table>
							</div>
						</div><!-- /.box-body -->
					</div><!-- /.box -->

				</div><!-- /.col -->
			</div><!-- /.row -->
		</section><!-- /.content -->
		
		<!-- jQuery 2.1.4 -->
		<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>


		<!-- script datatables -->
		<script>
			$(function () {
				$("#example1").DataTable();
			});
		</script>

	</body>
	</html>



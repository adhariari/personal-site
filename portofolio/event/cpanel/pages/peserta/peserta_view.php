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
							<p align="justify">Apabila acara telah berlangsung, dan data peserta telah di unduh untuk keperluan selanjutnya (seperti rekapitulasi peserta, pembuatan sertifikat, dll) maka data peserta diperbolehkan untuk di <b>hapus</b>.</p>
							<p align="justify">Klik aksi <b>Detail</b> untuk mendapatkan informasi lebih lanjut mengenai peserta.</p>
							<p align="justify">Admin dapat mengunduh laporan data peserta dalam format yang telah disediakan. klik tombol <b>Export to XLS</b> untuk mengunduh laporan data peserta dalam format Excel, dan klik tombol <b>Export to PDF</b> untuk mengunduh laporan data peserta dalam format PDF.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-3">
				<input type="button" class="btn btn-block btn-success" name="addBtnCard" value="Tambah Peserta" onclick="window.location='?page=nwPst'">
			</div>
			<div class="col-xs-3"></div>

			<form action="pages/peserta/actionexport.php" method="post" name="postform">
				<div class="col-xs-3">
					<!-- <input type="submit" class="btn btn-block btn-primary" name="getXls" value="Export to XLS"> -->
				</div>
			</form>
			
			<form action="pages/peserta/pdf_peserta.php" method="post" name="postform">
				<div class="col-xs-3">
					<input type="submit" class="btn btn-block btn-primary" name="getPdf" value="Export to PDF">
				</div>
			</form>
			
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Peserta</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
      					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Acara</th>
									<th>No. Identitas</th>
									<th>Nama Peserta</th>
									<th>Jurusan</th>
									<th>Kelas</th>
									<th>Aksi</th>
								</tr>
							</thead>
							
							<tbody>
								
								<?php
								include "../conf/koneksi.php";
								
								$vw = mysqli_query($connect, "SELECT * FROM peserta, seminar, pendidikan
									WHERE peserta.id_seminar = seminar.id_seminar
									AND peserta.id_pendidikan = pendidikan.id_pendidikan
									AND peserta.cr_username_peserta = '$_SESSION[username]'
									ORDER BY peserta.id_peserta ASC");
								$no = 1;
								while ($r = mysqli_fetch_array($vw)){
									?>
									
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo "$r[nm_seminar]"; ?></td>
										<td><?php echo "$r[no_kartuid]"; ?></td>
										<td><?php echo "$r[nama_peserta]"; ?></td>
										<td><?php echo "$r[pendidikan]"; ?></td>
										<td><?php echo "$r[kelas_peserta]"; ?></td>
										<td>
											<div class="btn-group">
												<input type="button" class="btn btn-default" name="submit" value="Detail" onclick="window.location='?page=dtPst&tid=<?php echo $r['token_peserta']; ?>' ">
												<input type="button" data-toggle="tooltip" title="Becareful!" class="btn btn-danger" name="reset" value="Hapus" onclick="window.location='?page=dlPst&tid=<?php echo $r['token_peserta'];?>&tis=<?php echo $r['token_seminar']; ?>'">
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



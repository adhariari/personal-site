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
							<p align="justify">Berikut ini adalah tabel saran dan kritik dari pengunjung website.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-3"></div>
			<div class="col-xs-3"></div>

			<form action="pages/peserta/actionexport.php" method="post" name="postform">
				<div class="col-xs-3">
					<!-- <input type="submit" class="btn btn-block btn-primary" name="getXls" value="Export to XLS"> -->
				</div>
			</form>
			
			<form action="pages/peserta/pdf_peserta.php" method="post" name="postform">
				<div class="col-xs-3">
					<!-- <input type="submit" class="btn btn-block btn-primary" name="getPdf" value="Export to PDF"> -->
				</div>
			</form>
			
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Saran dan Kritik</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
      					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="10px">No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Subjek</th>
									<th width="400px">Pesan</th>
									<th width="150px">Aksi</th>
								</tr>
							</thead>
							
							<tbody>
								
								<?php
								include "../conf/koneksi.php";
								
								$vw = mysqli_query($connect, "SELECT * FROM saran ORDER BY id_saran DESC");
								$no = 1;
								while ($r = mysqli_fetch_array($vw)){
									?>
									
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo "$r[nama]"; ?></td>
										<td><?php echo "$r[email]"; ?></td>
										<td><?php echo "$r[subjek]"; ?></td>
										<td><?php echo "$r[pesan]"; ?></td>
										<td><center>
											<div class="btn-group">
												<input type="button" data-toggle="tooltip" title="Becareful!" class="btn btn-danger" name="reset" value="Hapus" onclick="window.location='?page=dlSaran&id=<?php echo $r['id_saran'];?>'">
											</div></center>
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



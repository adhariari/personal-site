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
							<p align="justify">Apabila ingin menambahkan data, pastikan menginput koordinat dalam format <strong>longitude dan latitude</strong>  bukan Degree Minutes Second.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-xs-3">
				<input type="button" class="btn btn-success" name="addBtnCard" value="Tambah Data" onclick="window.location='?page=nwPst'">
			</div>
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
						<h3 class="box-title">Data Dam Penahan</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
      					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kecamatan</th>
									<th>Desa</th>
									<th>Blok</th>
									<th>Longitude</th>
									<th>Latitude</th>
									<th>Foto</th>
									<th>Aksi</th>
								</tr>
							</thead>
							
							<tbody>
								
								<?php
								include "../conf/koneksi.php";
								
								$vw = mysqli_query($connect, "SELECT * FROM dpn ORDER BY id_dpn ASC");
								$no = 1;
								while ($r = mysqli_fetch_array($vw)){
									?>
									
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo "$r[kecamatan]"; ?></td>
										<td><?php echo "$r[desa]"; ?></td>
										<td><?php echo "$r[blok]"; ?></td>
										<td><?php echo "$r[longitude]"; ?></td>
										<td><?php echo "$r[latitude]"; ?></td>
										<td><center><a href="" data-toggle="modal" data-target="<?php echo"#$no"; ?>"><img src="gambar/img_dpn/<?php echo "$r[gambar]"; ?>" width="50"></a></center></td>
										<td><center>
											<div class="btn-group">
												<input type="button" class="btn btn-default" name="submit" value="Detail" onclick="window.location='?page=dtPst&id=<?php echo $r['id_dpn']; ?>' ">
												<input type="button" data-toggle="tooltip" title="Becareful!" class="btn btn-danger" name="reset" value="Hapus" onclick="window.location='?page=dlPst&id=<?php echo $r['id_dpn'];?>'">
											</div></center>
										</td>
									</tr>
										<!-- Modal -->
										<div class="modal fade" id="<?php echo"$no"; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel"><?php echo "$r[blok]"; ?></h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
													<?php echo "<img src='gambar/img_dpn/$r[gambar]' class='img-responsive'>"; ?>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>									
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



<?php
	include "../lib/inc.session.php";
?>

<!DOCTYPE html>
<html>

  <body class="hold-transition skin-blue sidebar-mini">

        <!-- Main content -->
        <section class="content">
          <div class="row">
			<div class="col-xs-3">
				<input type="button" class="btn btn-block btn-success" name="addBtnEdu" value="Tambah Jurusan" onclick="window.location='?page=adEdu'">
			</div>
			<div class="col-xs-12">
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Jurusan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				<div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
						<th>No</th>
                        <th>Jurusan</th>
                        <th>Aktif</th>
                        <th>Created Date</th>
						<th>Created User</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
					
					<tbody>
					
					<?php
						include "../conf/koneksi.php";
						
						$vw = mysqli_query($connect, "SELECT * FROM pendidikan WHERE pendidikan.cr_username_pendidikan = '$_SESSION[username]' ORDER BY id_pendidikan ASC");
						$no = 1;
						while ($r = mysqli_fetch_array($vw)){
					?>
					
                      <tr>
						<td><?php echo $no; ?></td>
                        <td><?php echo "$r[pendidikan]"; ?></td>
                        <td><?php echo "$r[aktif_pendidikan]"; ?></td>
                        <td><?php echo "$r[cr_dt_pendidikan]"; ?></td>
                        <td><?php echo "$r[cr_username_pendidikan]"; ?></td>
						<td>
							<div class="btn-group">
								<input type="button" class="btn btn-default" name="submit" value="Edit" onclick="window.location='?page=edEdu&tid=<?php echo $r['token_pendidikan']; ?>' ">
								<input type="button" data-toggle="tooltip" title="Becareful!" class="btn btn-danger" name="reset" value="Hapus" onclick="window.location='?page=dlEdu&tid=<?php echo $r['token_pendidikan']; ?>' ">
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



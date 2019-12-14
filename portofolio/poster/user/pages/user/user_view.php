<?php
	include "../conf/inc.session.php";
?>

<!DOCTYPE html>
<html>

  <body class="hold-transition skin-blue sidebar-mini">

        <!-- Main content -->
        <section class="content">
          <div class="row">
			<div class="col-xs-3">
				<input type="button" class="btn btn-block btn-primary" name="addBtnUser" value="Upload Poster" onclick="window.location='?page=adUs'">
			</div>
			<div class="col-xs-12">
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Poster</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
					
					<tbody>
					
					<?php
						include "../conf/koneksi.php";
						
						$vw = mysqli_query($connect, "SELECT * FROM poster WHERE id_user = $_SESSION[id_user] ORDER BY id_poster ASC");
						$no = 1;
						while ($r = mysqli_fetch_array($vw)){
					?>
					
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo "$r[judul]"; ?></td>
            <td><?php echo "$r[kategori]"; ?></td>
            <td><?php echo "$r[deskripsi]"; ?></td>
            <?php if($r['status']=='Rejected')
            {
              ?>
            <td class="label pull-left bg-red"><?php echo "$r[status]"; ?></td>
            <?php }else if($r['status']=='Approved'){?>
            <td class="label pull-left bg-green"><?php echo "$r[status]"; ?></td>
            <?php }else{ ?>
            <td class="label pull-left bg-primary"><?php echo "$r[status]"; ?></td>
            <?php } ?>
            <td><center><?php echo "<img src='img_user/$r[foto]' width=200 oncontextmenu='return false;'>"; ?></center></td>
            <td><center>
            <!-- jika poster telah di setujui maka tidak dapat diubah -->
            <?php if($r['status']!=='Approved'){ ?>
                  <a href='?page=edUs&id=<?php echo "$r[id_poster]" ?>' data-toggle="tooltip" title="Edit"> <i class='fa fa-refresh btn btn-primary btn-md'></i></a><?php }?>
                  <a href='?page=dlUs&id=<?php echo "$r[id_poster]" ?>' data-toggle="tooltip" title="Hapus"> <i class='fa fa-trash-o btn btn-primary btn-md'></i></a>
                  <center>
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



<?php
  if (empty($_SESSION['email']) AND empty($_SESSION['password'])){
  echo "<link href='../css/bootstrap.css' rel='stylesheet' type='text/css'>
  	<center><h2>Untuk mengakses modul</h2> <h1>Anda harus login</h1><br>";
  echo "<a href=../index.php><h3>LOGIN</b></h3></center>";
}
else {

?>

<script src="js/jquery-2.0.3.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script  type="text/javascript"  src="tinymce/tinymce.min.js"></script>
<script  type="text/javascript"  src="tinymce/plugins/advlist/plugin.min.js"></script>
<script  type="text/javascript">
            tinymce.init({
			  selector: 'textarea',
			  height: 300,
			  width: 600,
			  menubar: false,
			  plugins: [
			    'advlist autolink lists link image charmap print preview anchor',
			    'searchreplace visualblocks code fullscreen',
			    'insertdatetime media table contextmenu paste code'
			  ],
			  toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			  content_css: '//www.tinymce.com/css/codepen.min.css'
			});
</script>
<?php
	@$act = $_GET['aksi'];

	//Ini script untuk approve
	if($act=='approve'){
		$eb = mysqli_query($connect, "UPDATE poster SET status = 'Approved' WHERE id_poster = '$_GET[id]'");

$cek = mysqli_query($connect, "SELECT * FROM poster WHERE id_poster = '$_GET[id]'");
$r = mysqli_fetch_array($cek);
include "../conf/watermark.php";
$a = "../user/img_user/$r[foto]";
$b = "watermark.png";
$c = "../user/img_user/$r[foto]";
watermark_image($a,$b,$c);

	echo("'<script>location.href='dashboard.php?modul=poster';</script>");
	}
	

	//Ini script untuk reject
	elseif($act=='delete'){
		$d = mysqli_query($connect, "UPDATE poster SET status = 'Rejected' WHERE id_poster = '$_GET[id]'");
	echo("'<script>location.href='dashboard.php?modul=poster';</script>");
	}


	//Ini halaman utama, jika semua modul tidak ditemukan
	else {

	echo "<div class='row-fluid sortable'>						
	<div class='box span12'>
	<div class='box-header well' data-original-title>
		<h2><i class='icon-list'></i> DAFTAR ACARA</h2> <div class='box-icon'>
			</div>
	</div>
	<div class='box-content'>
		<table class='table table-striped table-bordered bootstrap-datatable datatable'>
		  <thead>
			  <tr>
				  <th>No</th>
				  <th>Judul</th>
				  <th>Kategori</th>
				  <th>Deskripsi</th>
				  <th width='250px'>Foto</th>
				  <th>Konfirmasi</th>
			  </tr>
		  </thead>   
		  <tbody>";

		  	$b = mysqli_query($connect, "SELECT * FROM poster WHERE status = 'Pending'");
		  	
		  	$no=1;

		  	while($rb = mysqli_fetch_array($b)){
		  		echo "<tr>";
		  		//Konversi Tanggal versi Indonesia
		  		
		  		echo "<td>$no</td>";
		  		echo "<td>$rb[judul]</td>";
		  		echo "<td>$rb[kategori]</td>";
		  		echo "<td>$rb[deskripsi]</td>";
		  		echo "<td><center><a href='../user/img_user/$rb[foto]' target='_blank'><img src='../user/img_user/$rb[foto]' width=250 height=300/></a></center></td>";
		  		echo "<td>
						<a href='?modul=poster&aksi=approve&id=$rb[id_poster]' class='btn btn-default active' data-toggle='tooltip' title='Approve'><i class='icon-ok icon-color'></i></a>
						<a href='?modul=poster&aksi=delete&id=$rb[id_poster]' class='btn btn-default active' data-toggle='tooltip' title='Reject'><i class='icon-remove icon-color'></i></a>";
				echo "</td>";
		  		echo "</tr>";
		  		$no++;						  		
		  	}
		  
		echo "</tbody>							
	  		</table>";
	?> 
	</div>
</div><!--/span-->
<?php
}
}
?>
			
</div><!--/row-->
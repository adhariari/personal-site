<?php
	include "../conf/koneksi.php";

	$data=mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM poster WHERE id_poster = '$_GET[id]'"));
  	// if ($data['foto']!=''){
    	mysqli_query($connect, "DELETE FROM poster WHERE id_poster = '$_GET[id]'");
     	unlink("img_user/$data[foto]");
     	unlink("img_asli/$data[foto]");
   // }
	
	echo "<script>alert('Poster telah dihapus.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
?>
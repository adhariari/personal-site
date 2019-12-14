<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	$data=mysqli_fetch_array(mysqli_query($connect, "SELECT gambar FROM gp WHERE id_gp = '$_GET[id]'"));
  	if ($data['gambar']!=''){
    	mysqli_query($connect, "DELETE FROM gp WHERE id_gp = '$_GET[id]'");
     	unlink("gambar/img_gp/$data[gambar]");
	}
  	else{
    	mysqli_query($connect, "DELETE FROM gp WHERE id_gp = '$_GET[id]'");
  	}
	
	echo "<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
?>
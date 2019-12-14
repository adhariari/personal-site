<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	
	$data=mysqli_fetch_array(mysqli_query($connect, "SELECT gambar FROM dpn WHERE id_dpn = '$_GET[id]'"));
  	if ($data['gambar']!=''){
    	mysqli_query($connect, "DELETE FROM dpn WHERE id_dpn = '$_GET[id]'");
     	unlink("gambar/img_dpn/$data[gambar]");
	}
  	else{
    	mysqli_query($connect, "DELETE FROM dpn WHERE id_dpn = '$_GET[id]'");
  	}
	
	echo "<meta http-equiv='refresh' content='0;url=?page=vwPst'>";
?>
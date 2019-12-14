<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	
	mysqli_query($connect, "DELETE FROM pendidikan WHERE token_pendidikan = '$_GET[tid]' ");
	
	echo "<script>alert('Data pendidikan sudah terhapus.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=?page=vwEdu'>";
?>
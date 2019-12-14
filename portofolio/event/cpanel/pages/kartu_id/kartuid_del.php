<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	
	mysqli_query($connect, "DELETE FROM kartu_identitas WHERE token_kartuid = '$_GET[tid]' ");
	
	echo "<meta http-equiv='refresh' content='0;url=?page=vwCard'>";
?>
<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	
	mysqli_query($connect, "DELETE FROM peserta WHERE token_peserta = '$_GET[tid]' ");
	mysqli_query($connect, "UPDATE seminar SET kuota_isi = kuota_isi - 1 WHERE  token_seminar = '$_GET[tis]'");
	
	echo "<meta http-equiv='refresh' content='0;url=?page=vwPst'>";
?>
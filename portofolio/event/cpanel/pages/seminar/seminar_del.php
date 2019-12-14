<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	
	mysqli_query($connect, "DELETE FROM seminar WHERE token_seminar = '$_GET[tid]' ");
	mysqli_query($connect, "DELETE FROM peserta WHERE id_seminar = '$_GET[ids]'");
	
	echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
?>
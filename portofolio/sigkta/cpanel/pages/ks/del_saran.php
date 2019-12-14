<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	

    	mysqli_query($connect, "DELETE FROM saran WHERE id_saran = '$_GET[id]'");

	
	echo "<meta http-equiv='refresh' content='0;url=?page=backup'>";
?>
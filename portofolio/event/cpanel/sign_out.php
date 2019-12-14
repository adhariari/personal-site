<?php
	session_unset();
	session_destroy();
	echo "<script>alert('Anda menuju halaman utama'); location.href='../index.php'</script>";
	exit;
?>
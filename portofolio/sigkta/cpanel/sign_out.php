<?php
	session_unset();
	session_destroy();
	echo "<script>alert('Anda keluar dari halaman admin'); location.href='../admin/'</script>";
	exit;
?>
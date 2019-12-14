<?php
if(empty($_SESSION['username'])) {
	echo "<script>alert('Maaf akses ditolak! Anda telah melakukan pelanggaran dengan mencoba mengakses halaman administrator via URL. Silahkan login dengan username dan password Anda untuk dapat mengakses halaman administrator.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
	exit;
}
?>
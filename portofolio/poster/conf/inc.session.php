<?php
if(empty($_SESSION['id_user'])) {
	echo "<script>alert('Silahkan login dengan email dan password Anda untuk dapat mengakses halaman dashboard user.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
	exit;
}
?>
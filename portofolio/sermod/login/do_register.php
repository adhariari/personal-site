<?php
	include "../conf/koneksi.php";

	$nama = $_POST['nama'];
	// $password = $_POST['password'];
	// $email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$motor = $_POST['motor'];
	$servis = $_POST['servis'];

		mysqli_query($connect, "INSERT INTO pesanan (nama,
										  alamat,
										  nohp, 
										  motor, 
										  servis)
                                 VALUES('$nama',
										'$alamat',
										'$nohp',
										'$motor',
										'$servis')");
echo "<script>alert('Pesanan anda telah diterima. Anda akan dihubungi oleh kami dalam 1x24 Jam. Terima kasih');</script>";
echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
?>
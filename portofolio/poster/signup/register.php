<?php
include "../conf/koneksi.php";
include "../conf/library.php";

$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$gender = $_POST['gender'];

// insert data ke database
$a = mysqli_query($connect, "INSERT INTO user (nama,
	password,
	email,
	no_hp,
	gender,
	date_created,
	role)
	VALUES('$nama',
	'$password',
	'$email',
	'$no_hp',
	'$gender',
	'$tgl_sekarang',
	'User')");	

if ($a){
	echo "<script>alert('Data pengguna sudah tersimpan.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=../login/'>";
}else{
		echo "<script>alert('Pendaftaran Gagal.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=../signup/'>";
}	

?>
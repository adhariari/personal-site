<?php
session_start();
include ('../conf/koneksi.php');

$email = $_POST['email'];

$sql=mysqli_query($connect, "select * from user where email='$email'");
$r=mysqli_fetch_row($sql);
$z=mysqli_fetch_array($sql);
$pass = $z['password'];
if ($r>=1){

// kirim email ke user
$to = $email;
$subject = "Password Akun Negeri Poster";
$txt = "Password anda adalah $pass. Silahkan login menggunakan email dan password anda. Terima Kasih";
$headers = "From: mail@negeriposter.web.id";

mail($to,$subject,$txt,$headers);

  echo "<script>alert('Informasi password akun anda sudah terkirim ke email anda. Silahkan cek inbox/spam');window.location = 'index.php'</script>";
}else{
  echo "<script>alert('Email tidak terdaftar.');window.location = 'index.php'</script>";
}

?>


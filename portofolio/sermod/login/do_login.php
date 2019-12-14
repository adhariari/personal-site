<?php
	include "../conf/koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

$sql=mysqli_query($connect, "select * from admin where username='$username' and password='$password' ");

$r=mysqli_fetch_array($sql);
if ($r['username']==$username and $r['password']==$password)

{
  session_start();
  $_SESSION['username']=$r['username'];
  $_SESSION['password']=$r['password'];

  echo "<script>window.location = '../admin/dashboard.php'</script>";
}
else
{
  echo "<script>alert('Maaf! Login gagal. Anda tidak berhak mengakses halaman administrator.');
  window.location = '../index.php'</script>";
}
?>
<?php
session_start();
include ('../conf/koneksi.php');

$email = $_POST['email'];
$password = $_POST['password'];
$time = time();
$check = isset($_POST['setcookie'])?$_POST['setcookie']:'';


$sql=mysqli_query($connect, "select * from user where email='$email' and password='$password'");
$r=mysqli_fetch_array($sql);

// cek email dan password ke database
if ($r['email']==$email and $r['password']==$password and $r['role']=='User'){

// session register
  $_SESSION['email']=$r['email'];
  $_SESSION['password']=$r['password'];
  $_SESSION['id_user']=$r['id_user'];

  $_SESSION['logged'] = 1;
  if($check){
    setcookie("cookielogin[email]", $uname, $time + 3600);
    setcookie("cookielogin[password]", $pass, $time + 3600);
  }
  echo "<script> window.location = '../user/media.php?page=dashboard'</script>";
}
else if ($r['email']==$email and $r['password']==$password and $r['role']=='Admin'){

  $_SESSION['password']=$r['password'];
  $_SESSION['id_user']=$r['id_user'];

  $_SESSION['logged'] = 1;
  if($check){
    setcookie("cookielogin[email]", $uname, $time + 3600);
    setcookie("cookielogin[password]", $pass, $time + 3600);
  }
  echo "<script> window.location = '../admin/dashboard.php?modul=home'</script>";
}
else
{
  echo "<script>alert('Email / Password salah.');window.location = 'index.php'</script>";
}
?>


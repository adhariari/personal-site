<?php 

session_start();
include ('../conf/koneksi.php');

//------ANTI XSS & SQL INJECTION-------//
function antiinjection($data){
	$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  	return $filter_sql;
}

$username = antiinjection($_POST['username']);
$password = antiinjection($_POST['password']);
$time = time();
$check = isset($_POST['setcookie'])?$_POST['setcookie']:'';

//------ANTI XSS & SQL INJECTION-------//

$sql=mysqli_query($connect, "select * from admin where username='$username' and password='$password'");

$r=mysqli_fetch_array($sql);
if ($r['username']==$username and $r['password']==$password)

{

  $_SESSION['username']=$r['username'];
  $_SESSION['password']=$r['password'];

  $_SESSION['logged'] = 1;
  if($check){
    setcookie("cookielogin[user]", $username, $time + 3600);
    setcookie("cookielogin[pswd]", $password, $time + 3600);
  }
   echo "<script> window.location = '../cpanel/media.php?page=dashboard'</script>";
}
else
{
echo "username / password salah";
}
 
?>
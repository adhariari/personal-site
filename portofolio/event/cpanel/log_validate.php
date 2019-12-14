<?php
  session_start();
include ('../conf/koneksi.php');

//------ANTI XSS & SQL INJECTION-------//
function antiinjection($data){
	$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  	return $filter_sql;
}

$uname = antiinjection($_POST['user']);
$pass = antiinjection($_POST['pswd']);
$time = time();
$check = isset($_POST['setcookie'])?$_POST['setcookie']:'';

//------ANTI XSS & SQL INJECTION-------//

$sql=mysqli_query($connect, "select * from pengguna where usernm='$uname' and passwd_origin='$pass'");

$r=mysqli_fetch_array($sql);
if ($r['usernm']==$uname and $r['passwd_origin']==$pass)

{

  $_SESSION['username']=$r['usernm'];
  $_SESSION['passwd']=$r['passwd_origin'];

  $_SESSION['logged'] = 1;
  if($check){
    setcookie("cookielogin[user]", $uname, $time + 3600);
    setcookie("cookielogin[pswd]", $pass, $time + 3600);
  }
  echo "<script> window.location = 'media.php?page=dashboard'</script>";
}
else
{
  echo "<script>alert('Maaf! Login gagal. Anda tidak berhak mengakses halaman administrator.');
  window.location = 'http://eventgunadarma.web.id'</script>";
}
?>


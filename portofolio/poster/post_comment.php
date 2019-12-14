
<?php
include "conf/koneksi.php";
include "conf/library.php";

$id_poster = $_POST['id_poster'];
$id_user = $_POST['id_user'];
$message = $_POST['message'];
$back = $_POST['back'];

// Query simpan ke table comment
$a = mysqli_query($connect, "INSERT INTO comment (id_user, id_poster, message, tgl_komen) VALUES('$id_user','$id_poster','$message','$tgl_sekarang')");
if($a){
echo "<meta http-equiv='refresh' content='0;url=portfolio-single.php?id=$id_poster&user=$back'>";
}
?>
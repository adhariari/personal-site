<?php
include "conf/koneksi.php";
$yg_like = $_GET['yg_like'];
$id_user = $_GET['id_user'];
$id_poster = $_GET['id_poster'];
// insert like ke database
	$hasil = mysqli_query($connect, "INSERT INTO suka (id_user, id_poster, liked) VALUES ('$yg_like','$id_poster','1')");
if($hasil){
			echo "<meta http-equiv='refresh' content='0;url=portfolio-single.php?id=$id_poster&user=$id_user'>";
}


?>
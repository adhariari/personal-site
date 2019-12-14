<?php
include "conf/koneksi.php";
$yg_like = $_GET['yg_like'];
$id_user = $_GET['id_user'];
$id_poster = $_GET['id_poster'];
// query untuk unlike
	$hasil = 	mysqli_query($connect, "DELETE FROM suka WHERE id_user = '$yg_like' AND id_poster = '$id_poster'");
if($hasil){
			echo "<meta http-equiv='refresh' content='0;url=portfolio-single.php?id=$id_poster&user=$id_user'>";
}


?>
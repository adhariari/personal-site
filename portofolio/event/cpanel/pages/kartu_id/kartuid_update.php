<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
	include "../lib/inc.session.php";
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$jns_card   = antiinjection($_POST['jns_kartuid']);
	//------ANTI XSS & SQL INJECTION-------//
	
	$aktif_kartuid = $_POST['aktif'];
	
		mysqli_query($connect, "UPDATE kartu_identitas SET jns_kartuid = '$jns_card',
	                                        aktif_kartuid = '$aktif_kartuid',
											md_dt_kartuid = '$tgl_sekarang',
											md_tm_kartuid = '$jam_sekarang',
											md_username_kartuid = '$_SESSION[username]'
                                      WHERE token_kartuid = '$_POST[tid]'");
	
		echo "<script>alert('Kartu identitas sudah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwCard'>";
	
?>
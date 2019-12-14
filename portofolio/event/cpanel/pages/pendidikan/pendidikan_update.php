<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
	include "../lib/inc.session.php";
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$pendidikan   = antiinjection($_POST['pendidikan']);
	//------ANTI XSS & SQL INJECTION-------//
	
	$aktif_edu = $_POST['aktif'];
	
		mysqli_query($connect, "UPDATE pendidikan SET pendidikan = '$pendidikan',
	                                        aktif_pendidikan = '$aktif_edu',
											md_dt_pendidikan = '$tgl_sekarang',
											md_tm_pendidikan = '$jam_sekarang',
											md_username_pendidikan = '$_SESSION[username]'
                                      WHERE token_pendidikan = '$_POST[tid]'");
	
		echo "<script>alert('Data jurusan sudah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwEdu'>";
	
?>
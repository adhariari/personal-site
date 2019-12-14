<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$jns_id = antiinjection($_POST['jns_id']);
	$no_id = antiinjection($_POST['no_id']);
	$nm_peserta = antiinjection($_POST['nm_peserta']);
	$pendidikan = antiinjection($_POST['pendidikan']);
	$kelas = antiinjection($_POST['kelas_peserta']);
	$no_hp = antiinjection($_POST['no_hp']);
	$email = antiinjection($_POST['email']);
	//------ANTI XSS & SQL INJECTION-------//

		mysqli_query($connect, "UPDATE peserta SET id_kartu = '$jns_id',
											no_kartuid = '$no_id',
											nama_peserta = '$nm_peserta',
											id_pendidikan = '$pendidikan',
											kelas_peserta = '$kelas',
											no_hp = '$no_hp',
											email_peserta = '$email'
                                      WHERE token_peserta = '$_POST[tid]'");
											
		echo "<meta http-equiv='refresh' content='0;url=?page=vwPst'>";
?>
<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
	include "../conf/fungsi_indotgl.php";
	include "../lib/inc.session.php";
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$nm_seminar = antiinjection($_POST['nama_seminar']);
	$tgl = antiinjection($_POST['tgl']);
	$jam = antiinjection($_POST['jam']);
	$lokasi = antiinjection($_POST['lokasi_seminar']);
	$biaya = antiinjection($_POST['biaya']);
	$kuota = antiinjection($_POST['kuota']);
	//------ANTI XSS & SQL INJECTION-------//
	
	$aktif_smnr = $_POST['aktif'];
	
	if (trim($biaya)=="" or ! is_numeric(trim($biaya))) {
		echo "<script>alert('Biaya seminar/workshop hanya dapat di isi oleh angka.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
	}
	else{
		mysqli_query($connect, "UPDATE seminar SET nm_seminar = '$nm_seminar',
											tgl_seminar = '$tgl',
											jam_seminar = '$jam',
											lokasi_seminar = '$lokasi',
											biaya_seminar = '$biaya',
											kuota = '$kuota',
	                                        aktif_seminar = '$aktif_smnr'
                                      WHERE token_seminar = '$_POST[tid]'");
	
		echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
	}
?>
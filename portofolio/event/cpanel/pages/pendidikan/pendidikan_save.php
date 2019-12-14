<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
	include "../lib/inc.session.php";
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$pendidikan = antiinjection($_POST['pendidikan']);
	//------ANTI XSS & SQL INJECTION-------//
	
	/*------------------------------NOMOR OTOMATIS---------------------------------------*/
	// baca current date
	$today = date("ym");

	// baca pendidikan dari nama pendidikan
	$edu = $pendidikan;

	// cari id_pendidikan yang berawalan tanggal hari ini
	$query = "SELECT max(id_pendidikan) AS last FROM pendidikan WHERE id_pendidikan LIKE '$today%'";
	$hasil = mysqli_query($connect, $query);
	$data  = mysqli_fetch_array($hasil);
	$lastEdu = $data['last'];

	// baca nomor urut pendidikan dari pendidikan terakhir
	$lastKdUrut = substr($lastEdu, 5, 4);

	// nomor urut username ditambah 1
	$nextKdUrut = $lastKdUrut + 1;

	// membuat format nomor urut kartu id berikutnya
	$nextKd = $today.sprintf('%04s', $nextKdUrut);
	/*----------------------------------NOMOR OTOMATIS-----------------------------------------*/

    $token_edu = sha1($nextKd);
	
		mysqli_query($connect, "INSERT INTO pendidikan (id_pendidikan,
		                                        pendidikan,
                                                cr_dt_pendidikan,
												cr_username_pendidikan,
												token_pendidikan)
                                 VALUES('$nextKd',
								        '$pendidikan',
										'$tgl_sekarang',
										'$_SESSION[username]',
										'$token_edu')");
										
		echo "<script>alert('Data jurusan sudah tersimpan.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwEdu'>";
?>
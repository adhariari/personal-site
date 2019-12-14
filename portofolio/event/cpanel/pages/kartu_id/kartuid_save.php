<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
	include "../lib/inc.session.php";
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$jns_card = antiinjection($_POST['jns_kartuid']);
	//------ANTI XSS & SQL INJECTION-------//
	
	/*------------------------------NOMOR OTOMATIS---------------------------------------*/
	// baca current date
	$today = date("ym");

	// baca kategori dari nama kartu id
	$jenis_kartu = $jns_card;

	// cari id_kartu yang berawalan tanggal hari ini
	$query = "SELECT max(id_kartu) AS last FROM kartu_identitas WHERE id_kartu LIKE '$today%'";
	$hasil = mysqli_query($connect, $query);
	$data  = mysqli_fetch_array($hasil);
	$lastCard = $data['last'];

	// baca nomor urut kartu id dari kartu id terakhir
	$lastKdUrut = substr($lastCard, 5, 4);

	// nomor urut username ditambah 1
	$nextKdUrut = $lastKdUrut + 1;

	// membuat format nomor urut kartu id berikutnya
	$nextKd = $today.sprintf('%04s', $nextKdUrut);
	/*----------------------------------NOMOR OTOMATIS-----------------------------------------*/

    $token_card = sha1($nextKd);
	
		mysqli_query($connect, "INSERT INTO kartu_identitas (id_kartu,
		                                        jns_kartuid,
                                                cr_dt_kartuid,
												cr_username_kartuid,
												token_kartuid)
                                 VALUES('$nextKd',
								        '$jns_card',
										'$tgl_sekarang',
										'$_SESSION[username]',
										'$token_card')");
										
		echo "<script>alert('Kartu identitas sudah tersimpan.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwCard'>";
?>
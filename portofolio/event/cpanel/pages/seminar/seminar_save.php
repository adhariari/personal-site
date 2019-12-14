<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
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
	
	/*------------------------------NOMOR OTOMATIS---------------------------------------*/
	// baca current date
	$today = date("ym");

	// baca seminar dari nama seminar
	$nm_smnr = $nm_seminar;

	// cari seminar yang berawalan tanggal hari ini
	$query = "SELECT max(id_seminar) AS last FROM seminar WHERE id_seminar LIKE '$today%'";
	$hasil = mysqli_query($connect, $query);
	$data  = mysqli_fetch_array($hasil);
	$lastCard = $data['last'];

	// baca nomor urut id_seminar dari seminar terakhir
	$lastKdUrut = substr($lastCard, 5, 4);

	// nomor urut seminar ditambah 1
	$nextKdUrut = $lastKdUrut + 1;

	// membuat format nomor urut seminar berikutnya
	$nextKd = $today.sprintf('%04s', $nextKdUrut);
	/*----------------------------------NOMOR OTOMATIS-----------------------------------------*/

    $token_smnr = sha1($nextKd);
	
	$cek_smnr = mysqli_num_rows(mysqli_query($connect, "SELECT nm_seminar FROM seminar WHERE nm_seminar='$nm_seminar'"));

	if($cek_smnr > 0){
		echo" <script>alert('Nama seminar sudah digunakan. Silahkan gunakan nama seminar yang lain.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=adSmnr'>";
	}
	else
	if (trim($biaya)=="" or ! is_numeric(trim($biaya))) {
		echo "<script>alert('Biaya seminar/workshop hanya dapat di isi oleh angka.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=adSmnr'>";
	}
	else
	if (trim($nm_seminar)=="" or is_numeric(trim($nm_seminar))) {
		echo "<script>alert('Nama seminar harus mengandung huruf.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=adSmnr'>";
	}
	else
	{
		mysqli_query($connect, "INSERT INTO seminar (id_seminar,
		                                  nm_seminar,
										  tgl_seminar,
										  jam_seminar,
										  lokasi_seminar,
										  biaya_seminar,
										  kuota,
										  aktif_seminar,
										  cr_username_seminar,
										  token_seminar)
                                 VALUES('$nextKd',
								        '$nm_seminar',
										'$tgl',
										'$jam',
										'$lokasi',
										'$biaya',
										'$kuota',
										'Y',
										'$_SESSION[username]',
										'$token_smnr')");
										
		echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
	}
?>
<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
	include "../lib/inc.session.php";
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$seminar = antiinjection($_POST['seminar']);
	$jns_id = antiinjection($_POST['jns_id']);
	$no_id = antiinjection($_POST['no_id']);
	$nm_peserta = antiinjection($_POST['nm_peserta']);
	$kelamin = isset($_POST['kelamin']) ? $_POST['kelamin']: '' ;
	$pendidikan = antiinjection($_POST['pendidikan']);
	$kelas = antiinjection($_POST['kelas_peserta']);
	$no_hp = antiinjection($_POST['no_hp']);
	$email = antiinjection($_POST['email']);
	//------ANTI XSS & SQL INJECTION-------//

	/*------------------------------NOMOR OTOMATIS---------------------------------------*/
	// baca current date
	$today = date("Ym");

	// baca peserta dari nama peserta
	$noid = $no_id;

	// cari id_peserta yang berawalan tanggal hari ini
	$query = "SELECT max(id_peserta) AS last FROM peserta WHERE id_peserta LIKE '$today%'";
	$hasil = mysqli_query($connect, $query);
	$data  = mysqli_fetch_array($hasil);
	$lastCard = $data['last'];

	// baca nomor urut peserta dari id peserta terakhir
	$lastKdUrut = substr($lastCard, 8, 4);

	// nomor urut peserta ditambah 1
	$nextKdUrut = $lastKdUrut + 1;

	// membuat format nomor urut peserta berikutnya
	$nextKd = $today.sprintf('%04s', $nextKdUrut);
	/*----------------------------------NOMOR OTOMATIS-----------------------------------------*/

	/*---------- validasi untuk email -------------*/
	$kar1 = strstr($email, "@");
	$kar2 = strstr($email, ".");
	/*---------------------------------------------*/
	
	/*-----------counter untuk kuota seminar*------*/
	$hasil1 = mysqli_query($connect, "SELECT * FROM seminar WHERE id_seminar = '$seminar'");
	$data1 = mysqli_fetch_array($hasil1);
	$kuota_isi = $data1['kuota_isi'] + 1;
	/*---------------------------------------------*/
    
    $token_pst = sha1($nextKd);

	/*------cek peserta sudah terdaftar/belum------*/
	$cek_peserta = mysqli_num_rows(mysqli_query($connect, "SELECT nama_peserta, no_kartuid FROM peserta
		WHERE nama_peserta = '$nm_peserta'
		AND cr_username_peserta = '$_SESSION[username]'
		AND id_seminar = '$seminar'
		AND no_kartuid = '$no_id'"));

	// $cek_kuota = mysqli_query($connect, "SELECT * FROM seminar WHERE id_seminar = '&seminar'");
	// $ck = mysqli_fetch_array($cek_kuota);


	if($cek_peserta > 0){
		echo" <script>alert('Nama peserta atau no kartu identitas sudah terdaftar.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=nwPst'>";
	}
	else

	if($data1['kuota']==$data1['kuota_isi']){
		echo "<script>alert('Kuota peserta event telah penuh.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=nwPst'>";
		exit;
	}
	else

	
	if (!$kar1 or !$kar2) {
		echo "<script>alert('Format email yang Anda masukkan salah.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=nwPst'>";
		exit;
	}
	else
	
	if (trim($no_hp)=="" or ! is_numeric(trim($no_hp))) {
		echo "<script>alert('No HP peserta hanya dapat di isi oleh angka.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=nwPst'>";
		exit;
	}
	
	else{
		mysqli_query($connect, "INSERT INTO peserta (id_peserta,
										  id_seminar,
		                                  id_kartu,
										  id_pendidikan,
                                          no_kartuid,
										  nama_peserta,
										  kelas_peserta,
										  jns_kelamin,
										  no_hp,
										  email_peserta,
										  tgl_daftar,
										  jam_daftar,
										  cr_username_peserta,
										  token_peserta)
                                 VALUES('$nextKd',
										'$seminar',
								        '$jns_id',
										'$pendidikan',
										'$no_id',
										'$nm_peserta',
										'$kelas',
										'$kelamin',
										'$no_hp',
										'$email',
										'$tgl_sekarang',
										'$jam_sekarang',
										'$_SESSION[username]',
										'$token_pst')");

		mysqli_query($connect, "UPDATE seminar SET kuota_isi='$kuota_isi' WHERE id_seminar='$seminar'");
											
		echo "<meta http-equiv='refresh' content='0;url=?page=vwPst'>";
	}
?>
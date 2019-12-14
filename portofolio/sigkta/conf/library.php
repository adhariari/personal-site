<?php
date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

$tgl_sekarang = date("Ymd");
$tgl_skrg     = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");

//menambahkan 4 minggu kedepan (kurun waktu 1 bulan) pada variabel tgl sekarang
$btstgl       = strtotime (' + 4 week', strtotime($tgl_sekarang));
//memanggil variabel btstgl
$tglakhir     = date('Y-m-j', $btstgl);

$nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei",
                    "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember");
?>

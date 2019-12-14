<?php
// ob_start();
// error_reporting(0);

// include "../../../conf/koneksi.php";

// //memilih nama tabel yang akan di export
// $select = "SELECT peserta.id_peserta, peserta.tgl_daftar, kartu_identitas.jns_kartuid,
//            peserta.no_kartuid, peserta.nama_peserta, seminar.nm_seminar, 
//            peserta.jns_kelamin, peserta.no_hp, peserta.email_peserta
// 		   FROM peserta, seminar, kartu_identitas
//            WHERE peserta.id_seminar = seminar.id_seminar 
// 		   AND peserta.id_kartu = kartu_identitas.id_kartu
// 		   ORDER BY peserta.id_peserta";

// $export = mysqli_query($connect, $select);
// $fields = mysqli_num_fields($export);
// for ($i = 0; $i < $fields; $i++) {
// $header .= mysqli_field_name($export, $i) . "\t";
// }
// while($row = mysqli_fetch_row($export)) {
// $line = '';
// foreach($row as $value) { 
// if ((!isset($value)) OR ($value == "")) {
// $value = "\t";
// } else {
// $value = str_replace('"', '""', $value);
// $value = '"' . $value . '"' . "\t";
// }
// $line .= $value;
// }
// $data .= trim($line)."\n";
// }
// $data = str_replace("\r","",$data);
// if ($data == "") {
// $data = "n(0) Records Found!\n"; 
// } 
header("Content-type: application/ms-excel");
//Penamaan file hasil export data
header("Content-Disposition: attachment; filename=Data_Peserta.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";

?>

<?php
Session_start();
include ('class.ezpdf.php');

$pdf = new Cezpdf('Legal','landscape');

$pdf->ezSetCmMargins(3.5,2,2,2);
$pdf->selectFont('fonts/Helvetica.afm');

$all = $pdf->openObject();
//tampilkan logo
$pdf->setStrokeColor(0, 0, 0, 1);
$pdf->addJpegFromFile('logo.jpg',55,525,69);

$pdf->addText(420, 560, 14,'<b>Event Management</b>');
$pdf->addText(420, 540, 14,'<b>Data Peserta Acara</b>');

//Garis header
$pdf->line(10, 520, 1000, 520);

//Garis footer
$pdf->line(10, 50, 1000, 50);

$pdf->addText(10,34,10,' Dicetak tanggal : ' . date('d M Y'));

$pdf->closeObject();
//tampilkan object di semua halaman
$pdf->addObject($all, 'all');

include "../../../conf/koneksi.php";

$sql=mysqli_query($connect, "SELECT * FROM peserta, seminar, kartu_identitas
           WHERE peserta.id_seminar = seminar.id_seminar 
		   AND peserta.id_kartu = kartu_identitas.id_kartu
		   AND peserta.cr_username_peserta = '$_SESSION[username]'
		   ORDER BY peserta.nama_peserta ASC");
$i=1;
while ($r = mysqli_fetch_array($sql)) {
  $data[$i]=array('<b>No.</b>'=>$i,
                  '<b>Tgl Daftar</b>'=>date("d-F-Y", strtotime("$r[tgl_daftar]")),
				  '<b>Nama Peserta</b>'=>$r['nama_peserta'],
				  '<b>Nama Acara</b>'=>$r['nm_seminar'],
				  '<b>Jenis ID</b>'=>$r['jns_kartuid'],
				  '<b>No. ID</b>'=>$r['no_kartuid'],
				  '<b>No. HP</b>'=>$r['no_hp'],
				  '<b>Email</b>'=>$r['email_peserta'],
				  '<b>TTD 1</b>'=>'     ',
				  '<b>TTD 2</b>'=>'     ');
$i++;
}
$pdf->ezTable($data, '', '', '');

$pdf->ezStartPageNumbers(990, 34, 10);
$pdf->ezStream();
?>

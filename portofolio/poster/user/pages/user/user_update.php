
<?php

include "../conf/koneksi.php";

$id_poster = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$nama_file = $_FILES['fupload']['name'];
$lokasi_file = $_FILES['fupload']['tmp_name'];

if (empty($lokasi_file)){
	mysqli_query ($connect, "UPDATE poster SET judul = '$judul',
		kategori = '$kategori',
		deskripsi = '$deskripsi'	
		WHERE id_poster = '$id_poster'");

	echo "<script>alert('Data poster sudah di update.');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=vwUs'>";
}

else {
	$data_gbr = mysqli_query($connect, "SELECT foto FROM poster WHERE id_poster = '$id_poster'");
	$r    	= mysqli_fetch_array($data_gbr);
	@unlink('img_user/'.$r['foto']);

	$namafoldergambar="../user/img_user/";
	$namafilegambar="";
	$jenis_gambar=$_FILES['fupload']['type'];
	if($jenis_gambar=="image/jpeg"||$jenis_gambar=="image/jpg"||$jenis_gambar=="image/gif"||$jenis_gambar=="image/png"){
		$gambarupload = $namafoldergambar.basename($nama_file);
		$gambarsimpan = $namafilegambar.basename($nama_file);
		if(move_uploaded_file($lokasi_file, $gambarupload)){
			$hasil= 		mysqli_query ($connect, "UPDATE poster SET judul = '$judul',
				kategori = '$kategori',
				deskripsi = '$deskripsi',
				foto = '$gambarsimpan'	
				WHERE id_poster = '$id_poster'");

			if($hasil!=0){
//menampilkan komentar berupa javascript
				echo"<script>alert('Poster berhasil di unggah'); </script>";
				echo"<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
			}else{
				echo'<script language="javascript">alert("Poster Gagal di unggah"); document.location="?page=vwUs";</script>';
			}
}else{ //jika proses upload gagal
	echo"<script>alert('Poster gagal di unggah'); </script>";
	echo"<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
}
}else{
	//jika tipe file tidak sesuai
	echo"<script>alert('Format poster tidak sesuai, silahkan masukan ulang data'); </script>";
	echo"<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
}

}


?>
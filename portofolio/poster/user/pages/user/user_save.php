
<?php
include "../conf/koneksi.php";
include "../conf/inc.session.php";
include "../conf/library.php";

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$nama_file=$_FILES['nama_file']['name'];
$lokasi_file=$_FILES['nama_file']['tmp_name'];

// This is the temporary file created by PHP
$uploadedfile = $_FILES['nama_file']['tmp_name'];

// Create an Image from it so we can do the resize
$src = imagecreatefromjpeg($uploadedfile);

// Capture the original size of the uploaded image
list($width,$height)=getimagesize($uploadedfile);

// For our purposes, I have resized the image to be
// 600 pixels wide, and maintain the original aspect
// ratio. This prevents the image from being “stretched”
// or “squashed”. If you prefer some max width other than
// 600, simply change the $newwidth variable
$newwidth=595;
$newheight=842;
$tmp=imagecreatetruecolor($newwidth,$newheight);

// this line actually does the image resizing, copying from the original
// image into the $tmp image
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

// now write the resized image to disk. I have assumed that you want the
// resized, uploaded image file to reside in the ./images subdirectory.
$filename = "../user/img_user/". $_FILES['nama_file']['name'];
imagejpeg($tmp,$filename,100);

imagedestroy($src);
imagedestroy($tmp); // NOTE: PHP will clean up the temp file it created when the request
// has completed.

if (!empty($_FILES["nama_file"] ["tmp_name"])){ //menangkap data dari form 
	 $namafoldergambar="../user/img_asli/"; //tempat upload file
	$namafilegambar=""; //nama file yang disimpan
	$jenis_gambar=$_FILES['nama_file'] ['type']; //jika tipe file benar, yaitu jpg,gif, atau png
	if($jenis_gambar=="image/jpeg"|| $jenis_gambar=="image/jpg"){
		$gambarupload =
		$namafoldergambar.basename($_FILES['nama_file']['name']);
		$gambarsimpan =
		$namafilegambar.basename($_FILES['nama_file']['name']);
	//proses meng-upload gambar ke server (dalam folder gambar)
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambarupload)){

	// memasukan data dari form ke database
			$hasil =mysqli_query($connect, "INSERT INTO poster (id_user, judul, kategori, deskripsi, foto, status, created, downloaded) VALUES ('$_SESSION[id_user]','$judul','$kategori','$deskripsi','$gambarsimpan','Pending','$tgl_sekarang','0')");

	// jika berhasil input ke database 
			if($hasil!=0){
	// menampilkan komentar berupa javascript
	echo "<script>alert('Poster berhasil disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
			}else{
				echo '<script language="javascript">alert("Poster Gagal disimpan!"); document.location="?page=vwUs";</script>';
			}
}else{ // jika proses upload gagal 
	echo "Gambar gagal dikirim";
}
}else{
// jika tipe file gambar tidak jpg,gif,atau png 
		echo "<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg.');</script>";
	echo "<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
}
}else{
// jika file gambar belum dipilih 
	echo "Anda belum memilih gambar";
}

?>
<?php
	include "../conf/koneksi.php";
	include "../lib/inc.session.php";
	/*--------------- script cegah upload file shell.php via *.jpg -------------*/
	if(isset($_FILES['fupload'])){
		$errors = array();
	/*--------------------------------------------------------------------------*/
	
		$lokasi_file = $_FILES['fupload']['tmp_name'];
		$tipe_file = $_FILES['fupload']['type'];
		$nama_file = $_FILES['fupload']['name'];
		
		/*--------------- script cegah upload file shell.php via *.jpg --------------
		setiap file gambar atau foto memiliki size.
		deklarasi var untuk size gambar/foto.
		----------------------------------------------------------------------------*/
		$file_size      = $_FILES['fupload']['size'];
		/*--------------------------------------------------------------------------*/
	
		$acak           = rand(1,999999);
		$nama_file_unik = $acak.$nama_file;
		
		/*--------------- script cegah upload file shell.php via *.jpg --------------
		explode tipe file dari sebuah file name utuh.
		biasanya file shell.php direname menjadi shell.php.jpg.
		file shell.php.jpg tsb akan di bypass dgn berbagai macam cara untuk
		dapat masuk sebagai file shell.php.
		ekstensi *.php ini akan di filter dgn perintah dibawah ini sehingga
		tidak dapat masuk.
		----------------------------------------------------------------------------*/
		$arr = explode('.',$nama_file);
		$file_ext=strtolower(end($arr));
		/*--------------------------------------------------------------------------*/
	
	
	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$map = antiinjection($_POST['map']);
	$lokasi_sra = antiinjection($_POST['lokasi_sra']);
	$kecamatan = antiinjection($_POST['kecamatan']);
	$desa = antiinjection($_POST['desa']);
	$longitude = antiinjection($_POST['longitude']);
	$latitude = antiinjection($_POST['latitude']);
	$unit = antiinjection($_POST['unit']);
	//------ANTI XSS & SQL INJECTION-------//
	
	function UploadUser($fupload_name){
  //direktori gambar


  $vdir_upload = "gambar/img_sra/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

}

		if (empty($lokasi_file)){
					
	if (! is_numeric(trim($longitude)) OR ! is_numeric(trim($latitude))) {
		echo "<script>alert('Koordinat hanya dapat di isi oleh angka');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
	}
			
			else {
			
				/*-- jika gambar pengguna tidak diganti --*/
		mysqli_query($connect, "UPDATE sra SET lokasi_sra = '$lokasi_sra',
											kecamatan = '$kecamatan',
											desa = '$desa',
											longitude = '$longitude',
											latitude = '$latitude',
											unit = '$unit'
                                      WHERE id_sra = '$_POST[id]'");
	
				echo "<script>alert('Data SRA sudah di update.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
			}
		}
		else {

				if (! is_numeric(trim($longitude)) OR ! is_numeric(trim($latitude))) {
		echo "<script>alert('Koordinat hanya dapat di isi oleh angka');</script>";
		echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
	}
				
				/*------------------ script cegah upload file shell.php via *.jpg ------------------
				mendefinisikan tipe file kedalam array dr gambar atau foto yg akan di upload.
				-----------------------------------------------------------------------------------*/
				$expensions = array("jpeg","jpg","pjpeg","png","gif");
				/*----------------------------------------------------------------------------------*/
				if(in_array($file_ext,$expensions)== false){
					echo "<script>window.alert('Upload foto pengguna gagal, pastikan file yang di upload bertipe *.JPG, *.PNG, *.GIF');
						</script>";
					echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
				}
				
				else {
					$data_gbr = mysqli_query($connect, "SELECT gambar FROM sra WHERE id_sra = '$_POST[id]'");
					$r    	= mysqli_fetch_array($data_gbr);
					@unlink('gambar/img_sra/'.$r['gambar']);
				
					/*------------------ script cegah upload file shell.php via *.jpg ------------------*/
					if(empty($errors)==true){
					/*----------------------------------------------------------------------------------*/
		
						UploadUser($nama_file_unik);
		mysqli_query($connect, "UPDATE sra SET lokasi_sra = '$lokasi_sra',
											kecamatan = '$kecamatan',
											desa = '$desa',
											longitude = '$longitude',
											latitude = '$latitude',
											unit = '$unit',
											gambar = '$nama_file_unik'
                                      WHERE id_sra = '$_POST[id]'");
										
						echo "<script>alert('Data SRA sudah di update.');</script>";
						echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
					}
				}
		}
	
}
?>
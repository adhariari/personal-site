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

		//apabila ada gambar yang di upload
		if (!empty($lokasi_file)){
		
			/*------------------ script cegah upload file shell.php via *.jpg ------------------
			mendefinisikan tipe file kedalam array dr gambar atau foto yg akan di upload.
			-----------------------------------------------------------------------------------*/
			$expensions = array("jpeg","jpg","pjpeg","png","gif");
			if(in_array($file_ext,$expensions)== false){
				echo "<script>window.alert('Upload foto pengguna gagal, pastikan file yang di upload bertipe *.JPG, *.PNG, *.GIF');
					</script>";
				echo "<meta http-equiv='refresh' content='0;url=?page=adSmnr'>";
			}
			/*----------------------------------------------------------------------------------*/
			
			if (! is_numeric(trim($latitude)) or ! is_numeric(trim($longitude))) {
				echo "<script>alert('Koordinat hanya dapat diisi oleh angka.');</script>";
				echo "<meta http-equiv='refresh' content='0;url=?page=adSmnr'>";
				exit;
			}
			
			else {
			
				/*------------------ script cegah upload file shell.php via *.jpg ------------------*/
				if(empty($errors)==true){
				/*----------------------------------------------------------------------------------*/
		
					UploadUser($nama_file_unik);
		mysqli_query($connect, "INSERT INTO sra (id_sra,
		                                  lokasi_sra,
										  kecamatan,
										  desa,
										  longitude,
										  latitude,
										  unit,
										  gambar)
                                 VALUES('',
								        '$lokasi_sra',
										'$kecamatan',
										'$desa',
										'$longitude',
										'$latitude',
										'$unit',
										'$nama_file_unik')");	
										
					echo "<meta http-equiv='refresh' content='0;url=?page=vwSmnr'>";
				}
			}
		}
	}
?>

<?php
	include "../conf/koneksi.php";
	include "../conf/library.php";
	include "../conf/fungsi_thumb.php";
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
	
		/*---------------------------- ANTI XSS & SQL INJECTION -------------------------------*/
		function antiinjection($data){
			$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
			return $filter_sql;
		}

		$nama_user = antiinjection($_POST['nama_pengguna']);
		$username = antiinjection($_POST['user_pengguna']);
		$pass = antiinjection($_POST['pass_pengguna']);
		$email = antiinjection($_POST['email']);
		$hp = antiinjection($_POST['hp']);
		/*--------------------------------------------------------------------------------------*/	

		/*---------- validasi untuk email -------------*/
		$kar1 = strstr($email, "@");
		$kar2 = strstr($email, ".");
		/*---------------------------------------------*/

		$token_user = sha1($username);
	
		//apabila ada gambar yang di upload
		if (!empty($lokasi_file)){
		
			/*------------------ script cegah upload file shell.php via *.jpg ------------------
			mendefinisikan tipe file kedalam array dr gambar atau foto yg akan di upload.
			-----------------------------------------------------------------------------------*/
			$expensions = array("jpeg","jpg","pjpeg","png","gif");
			if(in_array($file_ext,$expensions)== false){
				echo "<script>window.alert('Upload foto pengguna gagal, pastikan file yang di upload bertipe *.JPG, *.PNG, *.GIF');
					</script>";
				echo "<meta http-equiv='refresh' content='0;url=?page=adUs'>";
			}
			/*----------------------------------------------------------------------------------*/
			
			if (!$kar1 or !$kar2) {
				echo "<script>alert('Format email yang Anda masukkan salah.');</script>";
				echo "<meta http-equiv='refresh' content='0;url=?page=adUs'>";
				exit;
			}
			else
			if (trim($hp)=="" or ! is_numeric(trim($hp))) {
				echo "<script>alert('No HP pengguna hanya dapat di isi oleh angka.');</script>";
				echo "<meta http-equiv='refresh' content='0;url=?page=adUs'>";
				exit;
			}
			
			else {
			
				/*------------------ script cegah upload file shell.php via *.jpg ------------------*/
				if(empty($errors)==true){
				/*----------------------------------------------------------------------------------*/
		
					UploadUser($nama_file_unik);
					mysqli_query($connect, "INSERT INTO pengguna (				 usernm,
									   passwd_origin,
								       nm_lengkap,
									   email_pengguna,
									   hp_pengguna,
									   img_pengguna,
									   cr_dt_pengguna,
									   cr_tm_pengguna,
									   cr_username_pengguna,
									   token_pengguna)
                                 VALUES('$username',
								        '$pass',
										'$nama_user',
										'$email',
										'$hp',
										'$nama_file_unik',
										'$tgl_sekarang',
										'$jam_sekarang',
										'$_SESSION[username]',
										'$token_user')");	
										
					echo "<script>alert('Data pengguna sudah tersimpan.');</script>";
					echo "<meta http-equiv='refresh' content='0;url=?page=vwUs'>";
				}
			}
		}
	}
?>
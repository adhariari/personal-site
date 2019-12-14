<?php
	include "conf/koneksi.php";

	//------ANTI XSS & SQL INJECTION-------//
  	function antiinjection($data){
  		$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  		return $filter_sql;
	}

	$name = antiinjection($_POST['name']);
	$email = antiinjection($_POST['email']);
	$subject = antiinjection($_POST['subject']);
	$message = antiinjection($_POST['message']);
	//------ANTI XSS & SQL INJECTION-------//	
	

		mysqli_query($connect, "INSERT INTO saran (id_saran,
		                                  nama,
										  email,
										  subjek,
										  pesan)
                                 VALUES('',
								        '$name',
										'$email',
										'$subject',
										'$message')");	
					echo "<script>window.alert('Kritik dan Saran Anda Telah Terkirim. Terima Kasih');
					</script>";					
					echo "<meta http-equiv='refresh' content='0;url=index.php'>";

?>
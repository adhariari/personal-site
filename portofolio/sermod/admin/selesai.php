<?php
	include "../conf/koneksi.php";

		mysqli_query($connect, "UPDATE pesanan SET status = 'Selesai'
                                      WHERE id_order = '$_GET[id_order]'");
											
		echo "<meta http-equiv='refresh' content='0;url=dashboard.php'>";
?>
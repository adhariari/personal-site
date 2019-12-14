		<?php
			error_reporting(0);
		?>
		
		<section class="content">

          <!-- Default box -->
		  <form action="" method="post" name="postform">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Backup Database</h3>
            </div>
            <div class="box-body">
				<p>Gunakan fasilitas ini untuk melakukan <strong><a href='?page=backup'>backup</a></strong> database. Mohon lakukan backup database secara berkala.</p>
            </div><!-- /.box-body -->
            <div class="box-footer">
				<button type='submit' class='btn btn-primary' name='backup' onClick="return confirm('Anda yakin ingin melakukan backup database ?')">Backup Database</button>
            </div><!-- /.box-footer-->
          </div><!-- /.box -->
		  </form>
		  
		<?php
				if(isset($_POST['backup'])){

					//membuat nama file
					$file = "db_seminar_".date("d-m-Y").'.sql';

					//panggil fungsi dengan memberi parameter untuk koneksi dan nama file untuk backup
					$a = backup_tables("localhost","root","","dbseminar",$file);
			?>

					<p align="center">&nbsp;</p>
						<p align="center"><a style="cursor:pointer" onClick="location.href='../cpanel/pages/backupdb/download_backup_data.php?nama_file=<?php echo $file; ?>'" title="Download">Backup database telah selesai. <br><font color="#0066FF">Download file database</font></a>
					</p> 

			<?php
				}else{
					unset($_POST['backup']);
				}

				/*
				untuk memanggil nama fungsi :: jika anda ingin membackup semua tabel yang ada didalam database, biarkan tanda BINTANG (*) pada variabel $tables = '*'
				jika hanya tabel-table tertentu, masukan nama table dipisahkan dengan tanda KOMA (,)
				*/
				
				date_default_timezone_set("ASIA/JAKARTA");
				function backup_tables($host,$user,$pass,$name,$nama_file,$tables = 'kartu_identitas, pendidikan, seminar, peserta')
				{
					//untuk koneksi database
					$connect = mysqli_connect($host,$user,$pass,$name);

					if($tables == '*')
					{
						$tables = array();
						$result = mysqli_query($connect, 'SHOW TABLES');
						while($row = mysqli_fetch_row($result))
						{
							$tables[] = $row[0];
						}
					}else{
						//jika hanya table-table tertentu
						$tables = is_array($tables) ? $tables : explode(',',$tables);
					}

					//looping dulu
					foreach($tables as $table)
					{
						$result = mysqli_query($connect, 'SELECT * FROM '.$table);
						$num_fields = mysqli_num_fields($result);

						//menyisipkan query drop table untuk nanti hapus table yang lama
						$return.= 'DROP TABLE '.$table.';';
						$row2 = mysqli_fetch_row(mysqli_query($connect, 'SHOW CREATE TABLE '.$table));
						$return.= "\n\n".$row2[1].";\n\n";

						for ($i = 0; $i < $num_fields; $i++)
						{
							while($row = mysqli_fetch_row($result))
							{
								//menyisipkan query Insert. untuk nanti memasukan data yang lama ketable yang baru dibuat. so toy mode : ON
								$return.= 'INSERT INTO '.$table.' VALUES(';
								for($j=0; $j<$num_fields; $j++)
								{
									//akan menelusuri setiap baris query didalam
									$row[$j] = addslashes($row[$j]);
									$row[$j] = ereg_replace("\n","\\n",$row[$j]);
									if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
									if ($j<($num_fields-1)) { $return.= ','; }
								}
								$return.= ");\n";
							}
						}
						$return.="\n\n\n";
					}

					//simpan file di folder yang anda tentukan sendiri. kalo saya sech folder "DATA"
					$nama_file;

					$handle = fopen('../cpanel/pages/backupdb/data/'.$nama_file,'w+');
					fwrite($handle,$return);
					fclose($handle);
				}
			?>

        </section><!-- /.content -->
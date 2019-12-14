<?php
	$pg = isset($_GET['page']) ? $_GET['page'] : '' ;
	switch ($pg) {
				
		//-- sign out --//
		case 'sign-out' :
			if(!file_exists ("../cpanel/sign_out.php"))die("File sign out tidak tersedia.");
			include ("../cpanel/sign_out.php");
			break;
		
		//--------------------------------------------------------------------------------------------------------------------//
	
		//-- dashboard --//
		case 'dashboard' :
			if(!file_exists ("../cpanel/dashboard.php"))die("File dashboard tidak tersedia.");
			include ("../cpanel/dashboard.php");
			break;
	
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- manual book --//
		case 'userguide' :
			if(!file_exists ("../cpanel/manual.php"))die("File user guide tidak tersedia.");
			include ("../cpanel/manual.php");
			break;
	
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- grafik jenis kelamin peserta --//
		case 'grafik-sex' :
			if(!file_exists ("../cpanel/pages/grafik/grafik_jnskel.php"))die("File grafik jenis kelamin tidak tersedia.");
			include ("../cpanel/pages/grafik/grafik_jnskel.php");
			break;
			
		//-- grafik pendidikan peserta --//
		case 'grafik-edu' :
			if(!file_exists ("../cpanel/pages/grafik/grafik_pendidikan.php"))die("File grafik pendidikan tidak tersedia.");
			include ("../cpanel/pages/grafik/grafik_pendidikan.php");
			break;
			
		
		//-- backup database --//
		case 'backup' :
			if(!file_exists ("../cpanel/pages/backupdb/index.php"))die("File backup database tidak tersedia.");
			include ("../cpanel/pages/backupdb/index.php");
			break;
		
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil peserta --//
		case 'vwPst' :
			if(!file_exists ("../cpanel/pages/peserta/peserta_view.php"))die("File tampil peserta tidak tersedia.");
			include ("../cpanel/pages/peserta/peserta_view.php");
			break;
			
		//-- hapus peserta --//
		case 'dlPst' :
			if(!file_exists ("../cpanel/pages/peserta/peserta_del.php"))die("File hapus peserta tidak tersedia.");
			include ("../cpanel/pages/peserta/peserta_del.php");
			break;
			
		//-- detail peserta --//
		case 'dtPst' :
			if(!file_exists ("../cpanel/pages/peserta/peserta_detail.php"))die("File tampil data detail peserta tidak tersedia.");
			include ("../cpanel/pages/peserta/peserta_detail.php");
			break;

		//-- tambah peserta --//
		case 'nwPst':
			if(!file_exists ("../cpanel/pages/peserta/peserta_new.php"))die("File tambah peserta tidak tersedia.");
			include ("../cpanel/pages/peserta/peserta_new.php");
			break;

		//-- save peserta --//
		case 'svPst':
			if(!file_exists ("../cpanel/pages/peserta/peserta_save.php"))die("File save peserta tidak tersedia.");
			include ("../cpanel/pages/peserta/peserta_save.php");
			break;

		//-- tambah peserta --//
		case 'edPst':
			if(!file_exists ("../cpanel/pages/peserta/peserta_edit.php"))die("File edit peserta tidak tersedia.");
			include ("../cpanel/pages/peserta/peserta_edit.php");
			break;
		
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tambah kartu identitas --//
		case 'adCard' :
			if(!file_exists ("../cpanel/pages/kartu_id/kartuid_new.php"))die("File tambah kartu identitas tidak tersedia.");
			include ("../cpanel/pages/kartu_id/kartuid_new.php");
			break;
			
		//-- simpan kartu identitas --//
		case 'svCard' :
			if(!file_exists ("../cpanel/pages/kartu_id/kartuid_save.php"))die("File simpan kartu identitas tidak tersedia.");
			include ("../cpanel/pages/kartu_id/kartuid_save.php");
			break;
			
		//-- tampil kartu identitas --//
		case 'vwCard' :
			if(!file_exists ("../cpanel/pages/kartu_id/kartuid_view.php"))die("File tampil kartu identitas tidak tersedia.");
			include ("../cpanel/pages/kartu_id/kartuid_view.php");
			break;
			
		//-- edit kartu identitas --//
		case 'edCard' :
			if(!file_exists ("../cpanel/pages/kartu_id/kartuid_edit.php"))die("File edit kartu identitas tidak tersedia.");
			include ("../cpanel/pages/kartu_id/kartuid_edit.php");
			break;
			
		//-- update kartu identitas --//
		case 'upCard' :
			if(!file_exists ("../cpanel/pages/kartu_id/kartuid_update.php"))die("File update kartu identitas tidak tersedia.");
			include ("../cpanel/pages/kartu_id/kartuid_update.php");
			break;
			
		//-- hapus kartu identitas --//
		case 'dlCard' :
			if(!file_exists ("../cpanel/pages/kartu_id/kartuid_del.php"))die("File hapus kartu identitas tidak tersedia.");
			include ("../cpanel/pages/kartu_id/kartuid_del.php");
			break;
			
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil pengguna --//
		case 'vwUs' :
			if(!file_exists ("../cpanel/pages/user/user_view.php"))die("File tampil pengguna tidak tersedia.");
			include ("../cpanel/pages/user/user_view.php");
			break;
			
		//-- tambah pengguna --//
		case 'adUs' :
			if(!file_exists ("../cpanel/pages/user/user_new.php"))die("File tambah pengguna tidak tersedia.");
			include ("../cpanel/pages/user/user_new.php");
			break;
			
		//-- simpan pengguna --//
		case 'svUs' :
			if(!file_exists ("../cpanel/pages/user/user_save.php"))die("File simpan pengguna tidak tersedia.");
			include ("../cpanel/pages/user/user_save.php");
			break;
			
		//-- edit pengguna --//
		case 'edUs' :
			if(!file_exists ("../cpanel/pages/user/user_edit.php"))die("File edit pengguna tidak tersedia.");
			include ("../cpanel/pages/user/user_edit.php");
			break;
			
		//-- update pengguna --//
		case 'upUs' :
			if(!file_exists ("../cpanel/pages/user/user_update.php"))die("File update pengguna tidak tersedia.");
			include ("../cpanel/pages/user/user_update.php");
			break;
		
		//-- hapus pengguna --//
		case 'dlUs' :
			if(!file_exists ("../cpanel/pages/user/user_del.php"))die("File hapus pengguna tidak tersedia.");
			include ("../cpanel/pages/user/user_del.php");
			break;
			
			
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil seminar --//
		case 'vwSmnr' :
			if(!file_exists ("../cpanel/pages/seminar/seminar_view.php"))die("File tampil data seminar tidak tersedia.");
			include ("../cpanel/pages/seminar/seminar_view.php");
			break;
			
		//-- tambah seminar --//
		case 'adSmnr' :
			if(!file_exists ("../cpanel/pages/seminar/seminar_new.php"))die("File tambah data seminar tidak tersedia.");
			include ("../cpanel/pages/seminar/seminar_new.php");
			break;
			
		//-- simpan seminar --//
		case 'svSmnr' :
			if(!file_exists ("../cpanel/pages/seminar/seminar_save.php"))die("File simpan data seminar tidak tersedia.");
			include ("../cpanel/pages/seminar/seminar_save.php");
			break;
			
		//-- edit seminar --//
		case 'edSmnr' :
			if(!file_exists ("../cpanel/pages/seminar/seminar_edit.php"))die("File edit data seminar tidak tersedia.");
			include ("../cpanel/pages/seminar/seminar_edit.php");
			break;
			
		//-- update seminar --//
		case 'upSmnr' :
			if(!file_exists ("../cpanel/pages/seminar/seminar_update.php"))die("File update data seminar tidak tersedia.");
			include ("../cpanel/pages/seminar/seminar_update.php");
			break;
			
		//-- hapus seminar --//
		case 'dlSmnr' :
			if(!file_exists ("../cpanel/pages/seminar/seminar_del.php"))die("File hapus data seminar tidak tersedia.");
			include ("../cpanel/pages/seminar/seminar_del.php");
			break;
			
		//--------------------------------------------------------------------------------------------------------------------//
		
		
		//-- tampil pendidikan --//
		case 'vwEdu' :
			if(!file_exists ("../cpanel/pages/pendidikan/pendidikan_view.php"))die("File tampil data pendidikan tidak tersedia.");
			include ("../cpanel/pages/pendidikan/pendidikan_view.php");
			break;
			
		//-- tambah pendidikan --//
		case 'adEdu' :
			if(!file_exists ("../cpanel/pages/pendidikan/pendidikan_new.php"))die("File tambah data pendidikan tidak tersedia.");
			include ("../cpanel/pages/pendidikan/pendidikan_new.php");
			break;
			
		//-- simpan pendidikan --//
		case 'svEdu' :
			if(!file_exists ("../cpanel/pages/pendidikan/pendidikan_save.php"))die("File simpan data pendidikan tidak tersedia.");
			include ("../cpanel/pages/pendidikan/pendidikan_save.php");
			break;
			
		//-- edit pendidikan --//
		case 'edEdu' :
			if(!file_exists ("../cpanel/pages/pendidikan/pendidikan_edit.php"))die("File edit data pendidikan tidak tersedia.");
			include ("../cpanel/pages/pendidikan/pendidikan_edit.php");
			break;
			
		//-- update pendidikan --//
		case 'upEdu' :
			if(!file_exists ("../cpanel/pages/pendidikan/pendidikan_update.php"))die("File update data pendidikan tidak tersedia.");
			include ("../cpanel/pages/pendidikan/pendidikan_update.php");
			break;
			
		//-- hapus pendidikan --//
		case 'dlEdu' :
			if(!file_exists ("../cpanel/pages/pendidikan/pendidikan_del.php"))die("File hapus data pendidikan tidak tersedia.");
			include ("../cpanel/pages/pendidikan/pendidikan_del.php");
			break;
	}
?>
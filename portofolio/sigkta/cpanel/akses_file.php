<?php
	$pg = isset($_GET['page']) ? $_GET['page'] : '' ;
	switch ($pg) {
				
		//-- sign out --//
		case 'sign-out' :
			if(!file_exists ("../cpanel/sign_out.php"))die("File sign out tidak tersedia.");
			include ("../cpanel/sign_out.php");
			break;
		
		//--------------------------------------------------------------------------------------------------------------------//
	
		//-- Del Saran --//
		case 'dlSaran' :
			if(!file_exists ("../cpanel/pages/backupdb/del_saran.php"))die("File del saran tidak tersedia.");
			include ("../cpanel/pages/backupdb/del_saran.php");
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
			if(!file_exists ("../cpanel/manual.php"))die("File gp guide tidak tersedia.");
			include ("../cpanel/manual.php");
			break;
	
		//--------------------------------------------------------------------------------------------------------------------//
	
			
		//-- grafik kta --//
		case 'grafik-edu' :
			if(!file_exists ("../cpanel/pages/grafik/grafik_kta.php"))die("File grafik kta tidak tersedia.");
			include ("../cpanel/pages/grafik/grafik_kta.php");
			break;
			
		
		//-- kritik saran --//
		case 'ks' :
			if(!file_exists ("../cpanel/pages/ks/index.php"))die("File backup kritik saran tidak tersedia.");
			include ("../cpanel/pages/ks/index.php");
			break;
		
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil dpn --//
		case 'vwPst' :
			if(!file_exists ("../cpanel/pages/dpn/dpn_view.php"))die("File tampil dpn tidak tersedia.");
			include ("../cpanel/pages/dpn/dpn_view.php");
			break;
			
		//-- hapus dpn --//
		case 'dlPst' :
			if(!file_exists ("../cpanel/pages/dpn/dpn_del.php"))die("File hapus dpn tidak tersedia.");
			include ("../cpanel/pages/dpn/dpn_del.php");
			break;
			
		//-- detail dpn --//
		case 'dtPst' :
			if(!file_exists ("../cpanel/pages/dpn/dpn_detail.php"))die("File tampil data detail dpn tidak tersedia.");
			include ("../cpanel/pages/dpn/dpn_detail.php");
			break;

		//-- tambah dpn --//
		case 'nwPst':
			if(!file_exists ("../cpanel/pages/dpn/dpn_new.php"))die("File tambah dpn tidak tersedia.");
			include ("../cpanel/pages/dpn/dpn_new.php");
			break;

		//-- save dpn --//
		case 'svPst':
			if(!file_exists ("../cpanel/pages/dpn/dpn_save.php"))die("File save dpn tidak tersedia.");
			include ("../cpanel/pages/dpn/dpn_save.php");
			break;

		//-- tambah dpn --//
		case 'edPst':
			if(!file_exists ("../cpanel/pages/dpn/dpn_edit.php"))die("File edit dpn tidak tersedia.");
			include ("../cpanel/pages/dpn/dpn_edit.php");
			break;
		
			
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil pengguna --//
		case 'vwUs' :
			if(!file_exists ("../cpanel/pages/gp/gp_view.php"))die("File tampil pengguna tidak tersedia.");
			include ("../cpanel/pages/gp/gp_view.php");
			break;
			
		//-- tambah pengguna --//
		case 'adUs' :
			if(!file_exists ("../cpanel/pages/gp/gp_new.php"))die("File tambah pengguna tidak tersedia.");
			include ("../cpanel/pages/gp/gp_new.php");
			break;
			
		//-- simpan pengguna --//
		case 'svUs' :
			if(!file_exists ("../cpanel/pages/gp/gp_save.php"))die("File simpan pengguna tidak tersedia.");
			include ("../cpanel/pages/gp/gp_save.php");
			break;
			
		//-- edit pengguna --//
		case 'edUs' :
			if(!file_exists ("../cpanel/pages/gp/gp_edit.php"))die("File edit pengguna tidak tersedia.");
			include ("../cpanel/pages/gp/gp_edit.php");
			break;
			
		//-- update pengguna --//
		case 'upUs' :
			if(!file_exists ("../cpanel/pages/gp/gp_update.php"))die("File update pengguna tidak tersedia.");
			include ("../cpanel/pages/gp/gp_update.php");
			break;
		
		//-- hapus pengguna --//
		case 'dlUs' :
			if(!file_exists ("../cpanel/pages/gp/gp_del.php"))die("File hapus pengguna tidak tersedia.");
			include ("../cpanel/pages/gp/gp_del.php");
			break;
			
			
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil sra --//
		case 'vwSmnr' :
			if(!file_exists ("../cpanel/pages/sra/sra_view.php"))die("File tampil data sra tidak tersedia.");
			include ("../cpanel/pages/sra/sra_view.php");
			break;
			
		//-- tambah sra --//
		case 'adSmnr' :
			if(!file_exists ("../cpanel/pages/sra/sra_new.php"))die("File tambah data sra tidak tersedia.");
			include ("../cpanel/pages/sra/sra_new.php");
			break;
			
		//-- simpan sra --//
		case 'svSmnr' :
			if(!file_exists ("../cpanel/pages/sra/sra_save.php"))die("File simpan data sra tidak tersedia.");
			include ("../cpanel/pages/sra/sra_save.php");
			break;
			
		//-- edit sra --//
		case 'edSmnr' :
			if(!file_exists ("../cpanel/pages/sra/sra_edit.php"))die("File edit data sra tidak tersedia.");
			include ("../cpanel/pages/sra/sra_edit.php");
			break;
			
		//-- update sra --//
		case 'upSmnr' :
			if(!file_exists ("../cpanel/pages/sra/sra_update.php"))die("File update data sra tidak tersedia.");
			include ("../cpanel/pages/sra/sra_update.php");
			break;
			
		//-- hapus sra --//
		case 'dlSmnr' :
			if(!file_exists ("../cpanel/pages/sra/sra_del.php"))die("File hapus data sra tidak tersedia.");
			include ("../cpanel/pages/sra/sra_del.php");
			break;
			
		//--------------------------------------------------------------------------------------------------------------------//
		
		
	}
?>
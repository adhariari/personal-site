DROP TABLE bank;

CREATE TABLE `bank` (
  `id_bank` int(10) NOT NULL,
  `nm_bank` varchar(30) NOT NULL,
  `bank_seo` varchar(30) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `pemilik_rek` varchar(40) NOT NULL,
  `kantor_cabang` varchar(50) NOT NULL,
  `aktif_bank` enum('Y','N') NOT NULL DEFAULT 'Y',
  `cr_dt_bank` date NOT NULL,
  `cr_tm_bank` time NOT NULL,
  `cr_username_bank` varchar(30) NOT NULL,
  `md_dt_bank` date NOT NULL,
  `md_tm_bank` time NOT NULL,
  `md_username_bank` varchar(30) NOT NULL,
  `token_bank` varchar(50) NOT NULL,
  PRIMARY KEY (`id_bank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bank VALUES("15110001","BCA","bca","1080505911","Doni Andriansyah","Pasar Lama, Kota Tangerang","Y","2015-11-18","23:20:58","2015110002","2015-11-19","10:20:26","2015110002","26cdd3472a1a30220ccb5383673eb0ba03d05bba");



DROP TABLE cara_daftar;

CREATE TABLE `cara_daftar` (
  `id_caradaftar` int(5) NOT NULL AUTO_INCREMENT,
  `isi_caradaftar` text NOT NULL,
  `img_caradaftar` varchar(100) NOT NULL,
  `aktif_caradaftar` enum('Y','N') NOT NULL DEFAULT 'Y',
  `md_dt_caradaftar` date NOT NULL,
  `md_tm_caradaftar` time NOT NULL,
  `md_username_caradaftar` varchar(30) NOT NULL,
  PRIMARY KEY (`id_caradaftar`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO cara_daftar VALUES("1","","906799caradaftar_01.jpg","Y","2015-12-25","09:55:10","2015110002");



DROP TABLE identitas_web;

CREATE TABLE `identitas_web` (
  `id_identitas` int(5) NOT NULL AUTO_INCREMENT,
  `nm_website` varchar(30) NOT NULL,
  `nama_pt` varchar(40) NOT NULL,
  `alamat_pt` varchar(100) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `tlp_pt` varchar(15) NOT NULL,
  `email_pt` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `rekening_pt` varchar(30) NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO identitas_web VALUES("1","Kutuonline Event Creator","Kutuonline Learning Center","Duta Asri Palem 2 Blok AB No.16 Desa Pangadegan, Pasar Kemis","15560","-","doni@localhost","infokutuonline.blogspot.co.id","-","-","-","-","kutuonline event cerator, event seminar dan workshop jakarta, info seminar jakarta, info workshop jakarta, kutuonline learning center","kutuonline, seminar, workshop, event, info");



DROP TABLE kartu_identitas;

CREATE TABLE `kartu_identitas` (
  `id_kartu` int(10) NOT NULL,
  `jns_kartuid` varchar(30) NOT NULL,
  `aktif_kartuid` enum('Y','N') NOT NULL DEFAULT 'Y',
  `cr_dt_kartuid` date NOT NULL,
  `cr_tm_kartuid` time NOT NULL,
  `md_dt_kartuid` date NOT NULL,
  `md_tm_kartuid` time NOT NULL,
  `cr_username_kartuid` varchar(30) NOT NULL,
  `md_username_kartuid` varchar(30) NOT NULL,
  `token_kartuid` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kartu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kartu_identitas VALUES("15120002","SIM","Y","2015-12-13","12:54:46","0000-00-00","00:00:00","2015110002","","38d108dd48b4471b9c860e03157a0547e7f66d7e");
INSERT INTO kartu_identitas VALUES("15120003","Kartu Pelajar","Y","2015-12-13","12:55:03","0000-00-00","00:00:00","2015110002","","2cf3686122acfd44394c45ed7dbb2cf7a0d76a9f");
INSERT INTO kartu_identitas VALUES("15120004","Kartu Mahasiswa (KTM)","Y","2015-12-13","12:55:26","2015-12-13","13:09:03","2015110002","2015110002","f5b0fa139f261d45974bff01fbee5b5733d002d8");
INSERT INTO kartu_identitas VALUES("15120005","KTP","Y","2015-12-13","13:28:45","0000-00-00","00:00:00","2015110002","","702be27618f8ba0b8d97202140802a5c38bcea37");



DROP TABLE pembayaran;

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_peserta` int(10) NOT NULL,
  `id_seminar` int(10) NOT NULL,
  `id_bank` int(10) NOT NULL,
  `bank_transfer` varchar(30) NOT NULL,
  `jml_transfer` double NOT NULL,
  `nm_pemilik_rek` varchar(40) NOT NULL,
  `informasi_tambahan` text NOT NULL,
  `tgl_transfer` date NOT NULL,
  `jam_transfer` time NOT NULL,
  `img_bayar` varchar(100) NOT NULL,
  `status_bayar` enum('Baru','Menunggu','Lunas','Batal') NOT NULL DEFAULT 'Baru',
  `token_bayar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pembayaran VALUES("16020001","2016020001","15120001","15110001","BCA","30000","Robi Darwis","Sudah transfer pembayaran seminar TA","2016-02-06","04:58:26","2788391.jpg","Lunas","af3f891a3d3f4fba02dfd4c0183a4a7eb1694c41");



DROP TABLE pendidikan;

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(10) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `aktif_pendidikan` enum('Y','N') NOT NULL DEFAULT 'Y',
  `cr_dt_pendidikan` date NOT NULL,
  `cr_tm_pendidikan` time NOT NULL,
  `md_dt_pendidikan` date NOT NULL,
  `md_tm_pendidikan` time NOT NULL,
  `cr_username_pendidikan` varchar(30) NOT NULL,
  `md_username_pendidikan` varchar(30) NOT NULL,
  `token_pendidikan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pendidikan VALUES("15120001","SMA/SMK/MA Sederajat","Y","2015-12-27","07:28:42","2015-12-27","07:33:07","2015110002","2015110002","397f17ff4e72dc0df2881fd2a029c2a3e3d4e7ab");
INSERT INTO pendidikan VALUES("15120002","D3","Y","2015-12-27","07:34:53","0000-00-00","00:00:00","2015110002","","38d108dd48b4471b9c860e03157a0547e7f66d7e");
INSERT INTO pendidikan VALUES("15120003","S1","Y","2015-12-27","07:35:02","0000-00-00","00:00:00","2015110002","","2cf3686122acfd44394c45ed7dbb2cf7a0d76a9f");
INSERT INTO pendidikan VALUES("15120004","S2","Y","2015-12-27","07:35:09","0000-00-00","00:00:00","2015110002","","f5b0fa139f261d45974bff01fbee5b5733d002d8");



DROP TABLE pengguna;

CREATE TABLE `pengguna` (
  `usernm` varchar(20) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `passwd_origin` varchar(15) NOT NULL,
  `nm_lengkap` varchar(30) NOT NULL,
  `jns_kelamin` enum('L','P') NOT NULL DEFAULT 'L',
  `alamat_pengguna` varchar(100) NOT NULL,
  `kota_kab_pengguna` varchar(30) NOT NULL,
  `kode_pos_pengguna` int(5) NOT NULL,
  `email_pengguna` varchar(30) NOT NULL,
  `hp_pengguna` varchar(15) NOT NULL,
  `img_pengguna` varchar(100) NOT NULL,
  `status_pengguna` enum('Admin','User') NOT NULL DEFAULT 'User',
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `cr_dt_pengguna` date NOT NULL,
  `cr_tm_pengguna` time NOT NULL,
  `cr_username_pengguna` varchar(50) NOT NULL,
  `md_dt_pengguna` date NOT NULL,
  `md_tm_pengguna` time NOT NULL,
  `md_username_pengguna` varchar(50) NOT NULL,
  `token_pengguna` varchar(100) NOT NULL,
  PRIMARY KEY (`usernm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pengguna VALUES("2015110001","2240684bae321760a570965f31175cfd","28dayslater","Renata","P","pondok arum","kota tangerang","12459","renata@gmail.com","089882625560","794586Finger-Drawings-On-Hands-3.jpg","User","N","2015-11-18","18:34:55","kutuonline","2015-11-18","19:05:11","2015110001","8bc7deaa00d126d8351e23a660fdf18033896b89");
INSERT INTO pengguna VALUES("2015110002","5e5b3443409fca0d43524883482a92f1","56f2472feb","Andriansyah Doni","L","DAP 2 jl. duta II blok AB no.16, pangadegan, pasar kemis","kab tangerang","15560","doni@localhost","081210048252","248047Finger-Drawings-On-Hands-6.jpg","Admin","N","2015-11-18","19:16:08","2015110001","2015-11-19","10:30:27","2015110002","eb2a78d64bfda32bda8028850dabb3fa6147d520");



DROP TABLE peserta;

CREATE TABLE `peserta` (
  `id_peserta` int(10) NOT NULL,
  `id_seminar` int(10) NOT NULL,
  `id_kartu` int(10) NOT NULL,
  `id_pendidikan` int(10) NOT NULL,
  `no_kartuid` char(20) NOT NULL,
  `nama_peserta` varchar(40) NOT NULL,
  `range_usia` varchar(10) NOT NULL,
  `jns_kelamin` enum('L','P') NOT NULL DEFAULT 'L',
  `alamat_peserta` text NOT NULL,
  `kota_kab_peserta` varchar(30) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email_peserta` varchar(40) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jam_daftar` time NOT NULL,
  `kode_aktivasi` varchar(100) NOT NULL,
  `status_aktivasi` enum('Y','N') NOT NULL DEFAULT 'N',
  `password` varchar(15) NOT NULL,
  `token_peserta` varchar(100) NOT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO peserta VALUES("2015120001","15120001","15120005","15120002","3672082404940001","Mumun Munawaroh","17-25","P","Balaraja","Kab Tangerang","15463","089812345678","mumun@localhost","2015-12-27","08:32:14","HZ30LN9SQf","Y","d640d2b737","e8e8576b0c6fb8d137dab2ecbfe485aa536396ba");
INSERT INTO peserta VALUES("2016020001","15120001","15120005","15120003","3671088920870001","Robi Darwis","17-25","L","Jl. Perintis Kemerdekaan I No. 1","Tangerang","15560","08988262556","robi@localhost","2016-02-06","04:51:27","8zeoeharZY","Y","d776619681","b6a714c0278837de3a09b95118eff740b4b437bd");



DROP TABLE profil_web;

CREATE TABLE `profil_web` (
  `id_profil` int(3) NOT NULL AUTO_INCREMENT,
  `isi_profil` text NOT NULL,
  `aktif_profil` enum('Y','N') NOT NULL DEFAULT 'Y',
  `md_dt_profil` date NOT NULL,
  `md_tm_profil` time NOT NULL,
  `md_username_profil` varchar(30) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO profil_web VALUES("1","Kutuonline merupakan salah satu media edukasi yang mengelola informasi dan pendaftaran seminar atau workshop. Untuk mendukung seluruh kegiatan seminar dan workshop kutuonline membutuhkan sebuah sistem yang dapat mengelola kebutuhan tersebut. Inilah yang menjadi alasan mengapa website ini tercipta.","Y","2016-02-06","00:58:35","2015110002");



DROP TABLE seminar;

CREATE TABLE `seminar` (
  `id_seminar` int(10) NOT NULL,
  `nm_seminar` varchar(150) NOT NULL,
  `tgl_seminar` date NOT NULL,
  `jam_seminar` time NOT NULL,
  `lokasi_seminar` varchar(50) NOT NULL,
  `biaya_seminar` double NOT NULL,
  `headline_seminar` text NOT NULL,
  `deskripsi_seminar` text NOT NULL,
  `aktif_seminar` enum('Y','N') NOT NULL DEFAULT 'N',
  `cr_dt_seminar` date NOT NULL,
  `cr_tm_seminar` time NOT NULL,
  `md_dt_seminar` date NOT NULL,
  `md_tm_seminar` time NOT NULL,
  `cr_username_seminar` varchar(30) NOT NULL,
  `md_username_seminar` varchar(30) NOT NULL,
  `token_seminar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_seminar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO seminar VALUES("15120001","Cara Sukses Menghadapi Tugas Akhir","2016-01-25","10:00:00","Aula BSI Cimone","30000","Selamat datang Tugas Akhir. Sudah siapkah diri kamu menghadapi Tugas Akhir? Apa saja yang sudah kamu persiapkan? Simak kiat-kiat nya di seminar Cara Sukses Menghadapi Tugas Akhir.","Seminar yang ditujukan untuk para mahasiswa semester akhir dalam mempersiapkan diri menghadapi Tugas Akhir. Bagaimana caranya memilih outline TA, bagaimana menjalani proses bimbingan yang efektif, bagaimana menyelesaikan TA tepat waktu, hingga proses simulasi sidang.","Y","2015-12-16","10:20:32","2015-12-22","10:32:28","2015110002","2015110002","397f17ff4e72dc0df2881fd2a029c2a3e3d4e7ab");
INSERT INTO seminar VALUES("15120002","Kiat Sukses Menjadi Web Developer Handal","2016-02-20","10:00:00","Ruang Teater BSI BSD","50000","Sejauh mana kompetensi yang kamu miliki untuk menghadapi tantangan dunia kerja terutama dalam bidang IT web developer? Apa saja yang sudah kamu miliki untuk menjadi seorang web developer handal?","Seminar ini diadakan dengan tujuan membangun rasa percaya diri bagi mereka yang ingin menjadi seorang web developer. Hal-hal apa saja yang harus dipersiapkan untuk dapat menjadi web developer yang handal. Output-nya adalah mereka dapat memahami kebutuhan seorang web developer dari awal membangun projek website hingga pengaplikasian web yang telah di bangun nya.","N","2015-12-22","09:46:41","2015-12-22","11:47:25","2015110002","2015110002","38d108dd48b4471b9c860e03157a0547e7f66d7e");




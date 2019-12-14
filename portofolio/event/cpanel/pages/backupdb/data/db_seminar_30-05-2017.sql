DROP TABLE kartu_identitas;

CREATE TABLE `kartu_identitas` (
  `id_kartu` int(10) NOT NULL,
  `jns_kartuid` varchar(30) NOT NULL,
  `aktif_kartuid` enum('Y','N') NOT NULL DEFAULT 'Y',
  `cr_dt_kartuid` date NOT NULL,
  `cr_username_kartuid` varchar(30) NOT NULL,
  `token_kartuid` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kartu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kartu_identitas VALUES("17050001","Kartu Tanda Mahasiswa (KTM)","Y","2017-05-08","admin","38b73c14da030f14b5b219e4024b52dd9a2bea3e");
INSERT INTO kartu_identitas VALUES("17050005","KTM","Y","2017-05-10","bemekonomi","60d54ea0a029ec95972a63ce0c63c66cf03068f2");
INSERT INTO kartu_identitas VALUES("17050006","KTP","Y","2017-05-17","bemfikti","ba9dbf4071fd44e18db3a005d0883c9a95bacc19");
INSERT INTO kartu_identitas VALUES("17050007","Kartu Tanda Mahasiswa (KTM)","Y","2017-05-17","bemfikti","c3dfc53727aa367f09f2746db9c6e0f6d116c834");
INSERT INTO kartu_identitas VALUES("17050008","KTP","Y","2017-05-17","admin","f4a3b7ff924c405c546f66cec3dba4667d9cedc2");



DROP TABLE  pendidikan;

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(10) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `aktif_pendidikan` enum('Y','N') NOT NULL DEFAULT 'Y',
  `cr_dt_pendidikan` date NOT NULL,
  `cr_username_pendidikan` varchar(30) NOT NULL,
  `token_pendidikan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  pendidikan VALUES("17040002","Sistem Komputer - FIKTI","Y","2017-04-29","admin","c7e8c629103f0ebc561ba8a4eff0085b81c00259");
INSERT INTO  pendidikan VALUES("17040003","Manajemen - FE","Y","2017-04-29","admin","bf5e67ab8ebb0182335808ef3dbf3c536fc4d52c");
INSERT INTO  pendidikan VALUES("17040004","Akuntansi - FE","Y","2017-04-29","admin","294c6812f40fa706b5439743d17b3119aec47669");
INSERT INTO  pendidikan VALUES("17040005","Psikolog - FPsi","Y","2017-04-29","admin","d019e557e7a4ab1f26fded0eb2ff0a0626716d6e");
INSERT INTO  pendidikan VALUES("17040006","Teknik Informatika - FTI","Y","2017-04-29","admin","bbbb718c57824d848d7b8efb42ce567df9687b8d");
INSERT INTO  pendidikan VALUES("17040007","Teknik Mesin - FTI","Y","2017-04-29","admin","4a157c2762797348b8e4b3ce06932179b818f079");
INSERT INTO  pendidikan VALUES("17040008","Teknik Elektro - FTI","Y","2017-04-29","admin","51634920138a6bafbfad00e1c5493208072e5454");
INSERT INTO  pendidikan VALUES("17040009","Teknik Industri - FTI","Y","2017-04-29","admin","553d953406e47b025c8917a3a5fca90bee7d7984");
INSERT INTO  pendidikan VALUES("17040010","Teknik Sipil - FTI","Y","2017-04-29","admin","7995b8657b6ceb836fadd398593ae32353f5a2f7");
INSERT INTO  pendidikan VALUES("17040011","Sastra Inggris - FSas","Y","2017-04-29","admin","869557011dd46404cb02d4b321b640919811fb7d");
INSERT INTO  pendidikan VALUES("17050001","Sistem Informasi - FIKTI","Y","2017-05-09","bemfikti","38b73c14da030f14b5b219e4024b52dd9a2bea3e");
INSERT INTO  pendidikan VALUES("17050002","Sistem Komputer - FIKTI","Y","2017-05-09","bemfikti","a39b8849231d932b244bab1858efc119da5c2eca");
INSERT INTO  pendidikan VALUES("17050003","Manajemen - FE","N","2017-05-09","bemfikti","3179929f2ca433837478f8087d07862a5e3596d1");
INSERT INTO  pendidikan VALUES("17050004","Akuntansi - FE","N","2017-05-09","bemfikti","a064a6c60f1224a9aa4ba72f9529de3f33abce02");
INSERT INTO  pendidikan VALUES("17050005","Psikolog - FPsi","N","2017-05-09","bemfikti","60d54ea0a029ec95972a63ce0c63c66cf03068f2");
INSERT INTO  pendidikan VALUES("17050006","Teknik Informatika - FTI","N","2017-05-09","bemfikti","ba9dbf4071fd44e18db3a005d0883c9a95bacc19");
INSERT INTO  pendidikan VALUES("17050007","Teknik Mesin - FTI","N","2017-05-09","bemfikti","c3dfc53727aa367f09f2746db9c6e0f6d116c834");
INSERT INTO  pendidikan VALUES("17050008","Teknik Elektro - FTI","N","2017-05-09","bemfikti","f4a3b7ff924c405c546f66cec3dba4667d9cedc2");
INSERT INTO  pendidikan VALUES("17050009","Teknik Industri - FTI","N","2017-05-09","bemfikti","8a3f02279e070bbd25a59d6252e2f9b3f5721ea7");
INSERT INTO  pendidikan VALUES("17050010","Teknik Sipil - FTI","N","2017-05-09","bemfikti","42e5537357963389b47bf93b517d21d7d7687dbc");
INSERT INTO  pendidikan VALUES("17050012","Manajemen","Y","2017-05-10","bemekonomi","c1789116386502897bfd06911ca86ff7f75fe4c9");
INSERT INTO  pendidikan VALUES("17050013","Sistem Informasi - FIKTI","Y","2017-05-10","admin","90d10d62f2a42127229779d85f77a5dae96ea41d");
INSERT INTO  pendidikan VALUES("17050014","Sastra Inggris - FSas","Y","2017-05-17","bemfikti","2381b0f6b5cae70a7a46682a7694302924bed1d4");



DROP TABLE  seminar;

CREATE TABLE `seminar` (
  `id_seminar` int(10) NOT NULL,
  `nm_seminar` varchar(150) NOT NULL,
  `tgl_seminar` date NOT NULL,
  `jam_seminar` time NOT NULL,
  `lokasi_seminar` varchar(50) NOT NULL,
  `biaya_seminar` double NOT NULL,
  `kuota` int(11) NOT NULL,
  `kuota_isi` int(11) NOT NULL,
  `aktif_seminar` enum('Y','N') NOT NULL,
  `cr_username_seminar` varchar(30) NOT NULL,
  `token_seminar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_seminar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  seminar VALUES("17050002","FIKTI Day","2017-05-13","08:00:00","Auditorium J167 - Kalimalang","15000","250","2","Y","bemfikti","a39b8849231d932b244bab1858efc119da5c2eca");
INSERT INTO  seminar VALUES("17050003","FOSC","2017-05-11","09:00:00","Auditorium D462 - Depok","40000","20","1","Y","bemfikti","3179929f2ca433837478f8087d07862a5e3596d1");
INSERT INTO  seminar VALUES("17050006","Ekonomi","2017-05-12","13:30:00","Auditorium D462 - Depok","10000","2","2","Y","bemekonomi","ba9dbf4071fd44e18db3a005d0883c9a95bacc19");
INSERT INTO  seminar VALUES("17050007","ss","2017-05-26","13:00:00","Auditorium D461 - Depok","3333","443","2","Y","admin","c3dfc53727aa367f09f2746db9c6e0f6d116c834");
INSERT INTO  seminar VALUES("17050008","sss","2017-05-23","13:30:00","Auditorium J167 - Kalimalang","22","32","0","Y","admin","f4a3b7ff924c405c546f66cec3dba4667d9cedc2");



DROP TABLE  peserta;

CREATE TABLE `peserta` (
  `id_peserta` int(10) NOT NULL,
  `id_seminar` int(10) NOT NULL,
  `id_kartu` int(10) NOT NULL,
  `id_pendidikan` int(10) NOT NULL,
  `no_kartuid` char(20) NOT NULL,
  `nama_peserta` varchar(40) NOT NULL,
  `kelas_peserta` varchar(10) NOT NULL,
  `jns_kelamin` enum('L','P') NOT NULL DEFAULT 'L',
  `no_hp` varchar(15) NOT NULL,
  `email_peserta` varchar(40) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jam_daftar` time NOT NULL,
  `cr_username_peserta` varchar(30) NOT NULL,
  `token_peserta` varchar(100) NOT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO  peserta VALUES("2017050014","17050006","17050005","17050012","1","a","1","L","1","ari_ahey@yahoo.co.id","2017-05-10","13:24:31","bemekonomi","4a6e68a56f3e53d18ce0eeebd56102ba49b5e2a7");
INSERT INTO  peserta VALUES("2017050015","17050006","17050005","17050012","6","t","7","P","4","ari_ahey@yahoo.co.id","2017-05-10","14:00:57","bemekonomi","666aff7c900269ba1fb41843c5a877b803261f56");
INSERT INTO  peserta VALUES("2017050016","17050002","17050003","17050001","10114213","Adhari","3KA23","L","085779627790","ariari.ahey@gmail.com","2017-05-17","10:49:47","bemfikti","9c1e33fbd419a515ab2b02ae3b567ee2e4eeadf7");
INSERT INTO  peserta VALUES("2017050017","17050002","17050003","17050001","10114244","Firman","3KA23","P","085779627790","ari_ahey@yahoo.co.id","2017-05-17","10:50:13","bemfikti","226ec81db14055dbe6d50e8b1a99f81434b60a22");
INSERT INTO  peserta VALUES("2017050018","17050003","17050003","17050002","1011","ari","3kbo1","L","12","ari_ahey@yahoo.co.id","2017-05-17","11:04:53","bemfikti","d8372d02302accb89b890990516306bd9d4c13fc");
INSERT INTO  peserta VALUES("2017050019","17050007","17050001","17040002","10114213","Adhari","3KA23","L","1","adhari.ariari@gmail.com","2017-05-19","11:39:41","admin","41e700cbff037de60610891befb39542480f985e");
INSERT INTO  peserta VALUES("2017050020","17050007","17050008","17040002","10006759","ade","3KA23","L","4","ari@mail.com","2017-05-20","12:11:19","admin","ec6ea8cb031528d388a2700e664d3d20a158b94d");
INSERT INTO  peserta VALUES("2017050021","17050007","17050008","17040004","123","ass","2a","P","22","aeiaie@gmail.com","2017-05-21","13:31:40","admin","9d9f3bb94ea7c836ed5aa2f6e750829df579b2bf");
INSERT INTO  peserta VALUES("2017050022","17050007","17050008","17040005","1a","asd","21da","L","22","aeiaie@gmail.com","2017-05-29","19:35:48","admin","d2f30bc32b7ca51b1c877cbe96e5189f146638a7");




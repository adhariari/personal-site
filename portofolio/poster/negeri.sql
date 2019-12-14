-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Nov 2017 pada 13.49
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negeri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_komen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_poster` int(11) NOT NULL,
  `message` text NOT NULL,
  `tgl_komen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_komen`, `id_user`, `id_poster`, `message`, `tgl_komen`) VALUES
(1, 11, 38, 'testt', '2017-10-07'),
(2, 13, 39, 'hahaha keren boy', '2017-11-20'),
(3, 11, 39, 'iyaaa men', '2017-11-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poster`
--

CREATE TABLE `poster` (
  `id_poster` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created` date NOT NULL,
  `downloaded` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poster`
--

INSERT INTO `poster` (`id_poster`, `id_user`, `judul`, `kategori`, `deskripsi`, `foto`, `status`, `created`, `downloaded`) VALUES
(32, 11, 'Pendidikan itu Penting!', 'Pendidikan', 'Dengan perkembangan zaman di dunia pendidikan yang terus berubah dengan signifikan sehingga banyak merubah pola pikir pendidik, dari pola pikir yang awam dan kaku menjadi lebih modern. Hal tersebut sangat berpengaruh dalam kemajuan pendidikan di Indonesia. Menyikapi hal tersebut pakar-pakar pendidikan mengkritisi dengan cara mengungkapkan dan teori pendidikan yang sebenarnya untuk mencapai tujuan pendidikan yang sesungguhnya.\r\n\r\nTujuan pendidikan adalah menciptakan seseorang yang berkwalitas dan berkarakter sehingga memiliki pandangan yang luas kedepan untuk mencapai suatu cita- cita yang di harapkan dan mampu beradaptasi secara cepat dan tepat di dalam berbagai lingkungan. Karena pendidikan itu sendiri memotivasi diri kita untuk lebih baik dalam segala aspek kehidupan.', 'pendidikan.jpg', 'Approved', '2017-10-02', '0'),
(33, 11, 'Kesehatan itu MAHAL Harganya!', 'Kesehatan', 'Kenapa kesehatan itu di bilang mahal harganya karena kesehatan itu memang bener-bener mahal harganya, coba deh kalian bayangkan jika kita sakit atau sampai di rawat di rumah sakit itu membutuhkan banyak biaya yang di keluarkan, belom lagi kalo sakitnya parah yang setiap bulan harus kontrol bolak-balik rumah sakit, berapa uang yang kita keluarkan utuk semua itu?\r\n\r\nMaka dari itu kesehatan itu perlu di jaga dari cara pola makan kita, olah raga, jangan makan-makanan yang sembarangan apalagi terlalu sering mengkonsumsi makanan yang menngandung bahan-bahan pengawet itu sangant tidak baik buat kesehatan kita.\r\n\r\nOlah raga yang teratur juga membuat daya tahan tubuh kita menjadi kuat, tubuh kita jadi bugar, dan seger rasanya kalo kita berolahraga secara teratur, dan jangan lupa mengkonsumsi buah-buahan itu juga penting karana tubuh kita juga membutuhkan vitamin.', 'kesehatan.jpg', 'Approved', '2017-10-02', '0'),
(34, 11, 'Ketentuan dan Denda Resmi Pelanggaran Lalu Lintas ', 'Lalu-Lintas', 'Polisi yang memberhentikan pelanggar wajib menyapa dengan sopan serta menunjukan jati diri dengan jelas. Polisi harus menerangkan dengan jelas kepada pelanggar apa kesalahan yang terjadi, pasal berapa yang telah dilanggar dan tabel berisi jumlah denda yang harus dibayar oleh pelanggar.\r\n\r\nPelanggar dapat memilih untuk menerima kesalahan dan memilih untuk menerima slip biru, kemudian membayar denda di BRI tempat kejadian dan mengambil dokumen yang ditahan di Polsek tempat kejadian, atau menolak kesalahan yang didakwakan dan meminta sidang pengadilan serta menerima slip merah. Pengadilan kemudian yang akan memutuskan apakah pelanggar bersalah atau tidak, dengan mendengarkan keterangan dari polisi bersangkutan dan pelanggar dalam persidangan di kehakiman setempat, pada waktu yang telah ditentukan (biasanya 5 sampai 10 hari kerja dari tanggal pelanggaran).', 'lalulintas.jpg', 'Approved', '2017-10-02', '0'),
(35, 11, 'Pelestarian Lingkungan', 'Lingkungan', 'Pengertian lingkungan adalah segala sesuatu yang ada di sekitar manusia yang memengaruhi perkembangan kehidupan manusia baik langsung maupun tidak langsung. Lingkungan bisa dibedakan menjadi lingkungan biotik dan abiotik. Jika kalian berada di sekolah, lingkungan biotiknya berupa teman-teman sekolah, bapak ibu guru serta karyawan, dan semua orang yang ada di sekolah, juga berbagai jenis tumbuhan yang ada di kebun sekolah serta hewan-hewan yang ada di sekitarnya. Adapun lingkungan abiotik berupa udara, meja kursi, papan tulis, gedung sekolah, dan berbagai macam benda mati yang ada di sekitar.\r\nSeringkali lingkungan yang terdiri dari sesama manusia disebut juga sebagai lingkungan sosial. Lingkungan sosial inilah yang membentuk sistem pergaulan yang besar peranannya dalam membentuk kepribadian seseorang', 'lingkungan.jpg', 'Approved', '2017-10-02', '0'),
(40, 13, 'uyay', 'Lalu-Lintas', 'uyaayy', 'ha ha ha.jpg', 'Approved', '2017-11-20', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suka`
--

CREATE TABLE `suka` (
  `id_like` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_poster` int(11) NOT NULL,
  `liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suka`
--

INSERT INTO `suka` (`id_like`, `id_user`, `id_poster`, `liked`) VALUES
(1, 11, 38, 1),
(2, 13, 39, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_hp`, `gender`, `date_created`, `role`) VALUES
(7, 'Admin', 'admin@mail.com', 'admin', '0812', 'Laki-Laki', '2017-09-25', 'Admin'),
(11, 'Ari', 'ari@mail.com', 'ari', '085779627790', 'Laki-laki', '2017-10-02', 'User'),
(13, 'pradisza', 'pradisza@mail.com', 'tester', '0812', 'laki-laki', '2017-11-20', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id_poster`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id_poster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

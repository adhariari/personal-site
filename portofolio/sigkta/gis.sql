-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 06:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dpn`
--

CREATE TABLE `dpn` (
  `id_dpn` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `blok` varchar(100) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `kawasan` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dpn`
--

INSERT INTO `dpn` (`id_dpn`, `kecamatan`, `desa`, `blok`, `unit`, `kawasan`, `longitude`, `latitude`, `gambar`) VALUES
(1, 'ARJASARI', 'Baros', 'Blok Cimentrik', '1', 'Luar', '107.631167', '-7.060611', '288788cimentrik.jpg'),
(2, 'ARJASARI', 'Wargaluyu', 'Blok Cicarirang', '1', 'Luar', '107.624556', '-7.035667', '370239wargaluyu1.jpg'),
(3, 'ARJASARI', 'Wargaluyu', 'Blok Cicarirang', '1', 'Luar', '107.624556', '-7.035667', '670318wargaluyu2.jpg'),
(4, 'ARJASARI', 'Wargaluyu', 'Blok Singaluyu', '1', 'Luar', '107.619222', '-7.036028', '363342wargaluyu3.jpg'),
(5, 'ARJASARI', 'Wargaluyu', 'Blok Singaluyu', '1', 'Luar', '107.629778', '-7.036889', '199799wargaluyu4.jpg'),
(6, 'ARJASARI', 'Batukarut', 'Blok GPA', '1', 'Luar', '107.602', '-7.048889', '732910batukarut.jpg'),
(7, 'ARJASARI', 'Mangunjaya', 'Blok Cimanis', '1', 'Luar', '106.615389', '-7.075083', '13947mangunjaya.jpg'),
(8, 'ARJASARI', 'Arjasari', 'BLOK CIKALIMOROT', '1', 'Luar', '107.647083', '-7.067611', '381287arjasari1.jpg'),
(9, 'ARJASARI', 'Arjasari', 'BLOK PASIR JAMPANA', '1', 'Luar', '107.652889', '-7.068361', '468231arjasari2.jpg'),
(10, 'ARJASARI', 'Pinggirsari', '-', '1', 'Luar', '107.652889', '-7.068361', '758362pinggirsari.jpg'),
(11, 'Cangkuang', 'Jatisari', '-', '1', 'Luar', '107.539056', '-7.071667', '6928jatis.jpg'),
(12, 'Cangkuang', 'Pananjung', 'Blok Cipicung', '1', 'Luar', '107.527528', '-7.05', ''),
(13, 'Cangkuang', 'Bandasari', 'Blok Cijalupung', '1', 'Luar', '107.527389', '-7.051028', '930664bandasari.jpg'),
(14, 'Banjaran', 'Mekar Jaya', '-', '1', 'Luar', '107.612094', '-7.048625', '285034mekarjaya1.jpg'),
(15, 'Banjaran', 'Mekar Jaya', '-', '1', 'Luar', '107.613711', '-7.049322', '319122mekarjaya2.jpg'),
(16, 'Banjaran', 'Banjaran Wetan', '-', '1', 'Luar', '107.605583', '-7.075944', '395447bw.jpg'),
(17, 'Cimaung', 'Jagabaya', '-', '1', 'Luar', '107.568278', '-7.083278', '761688jagaby.jpg'),
(18, 'Cimaung', 'Campaka Mulya', 'RT 02 RW 05 Kampung Palalangon', '1', 'Luar', '107.594444', '-7.102778', '459961paleleng.jpg'),
(19, 'Cimaung', 'Campaka Mulya', 'Kampung Nyemped', '1', 'Luar', '107.589944', '-7.107889', '652954nyemped.jpg'),
(20, 'Cimaung', 'Sukamaju', 'Kampung Madur Tengah', '1', 'Luar', '107.542639', '-7.103333', '54566sukamaju.jpg'),
(21, 'Cimaung', 'Sukamaju', 'Kampung Madur Tengah', '1', 'Luar', '107.542861', '-7.103028', '886871sukamaju2.jpg'),
(22, 'Cimaung', 'Sukamaju', 'Kampung Madur Tengah', '1', 'Luar', '107.543611', '-7.102806', '12482sukamaju3.jpg'),
(23, 'Cimaung', 'Sukamaju', 'Kampung Ciburuy', '1', 'Luar', '107.547806', '-7.095861', '92591ciburuy.jpg'),
(24, 'Cimaung', 'Sukamaju', 'Kampung Cihanjaro Kidul', '1', 'Luar', '107.540111', '-7.112556', '971618cihanjaro.jpg'),
(25, 'Cimaung', 'Malasari', 'Kampung Ciseupan', '1', 'Luar', '107.5485', '-7.082306', '6983341.jpg'),
(26, 'Cimaung', 'Malasari', 'Kampung Ciseupan', '1', 'Luar', '107.548167', '-7.08225', '3128362.jpg'),
(27, 'Cimaung', 'Warjabakti', 'Kampung Cimulek', '1', 'Dalam', '107.583639', '-7.137', '178955warja.jpg'),
(28, 'Cimaung', 'Mekarsari', 'Kampung Anteman', '1', 'Luar', '107.557528', '-7.110528', '257843mekarsari1.jpg'),
(29, 'Cimaung', 'Mekarsari', 'Kampung Anteman', '1', 'Luar', '107.580169', '-7.113569', '791382mekarsari2.jpg'),
(30, 'Cimaung', 'Mekarsari', 'Kampung Anteman', '1', 'Luar', '107.573986', '-7.137703', '949859mekarsari3.jpg'),
(31, 'Cimaung', 'Mekarsari', 'RT 02 RW 02 Kampung Talun', '1', 'Luar', '107.563667', '-7.117833', '708313talun.jpg'),
(32, 'Pangalengan', 'Tribakti Mulya', '-', '1', 'Luar', '107.563056', '-7.143056', '823242tribakti.jpg'),
(33, 'Pangalengan', 'Tribakti Mulya', '-', '1', 'Dalam', '107.563056', '-7.143056', '91004tribakt2i.jpg'),
(34, 'Pangalengan', 'Tribakti Mulya', '-', '1', 'Dalam', '107.563056', '-7.143056', '7966tribakt3i.jpg'),
(35, 'Pangalengan', 'Marga Mulya', 'Blok Pasir Salam', '1', 'Luar', '107.568056', '-7.172222', '452362pasirsal.jpg'),
(36, 'Pangalengan', 'Marga Mulya', 'Munjul', '1', 'Luar', '107.563611', '-7.171667', '449829munjul.jpg'),
(37, 'Pangalengan', 'Marga Mulya', 'Jembatan Cinyiruan', '1', 'Luar', '107.571667', '-7.167778', '564423ciyunya.jpg'),
(38, 'Pangalengan', 'Marga Mulya', 'Blok Pusaka Sari', '1', 'Luar', '107.568444', '-7.1625', '176606pusaka1.jpg'),
(39, 'Pangalengan', 'Marga Mulya', 'Blok Pusaka Sari', '1', 'Luar', '107.567722', '-7.163336', '289429pusaka2.jpg'),
(40, 'Pangalengan', 'Marga Mukti', 'Kebun Jambu', '1', 'Luar', '107.592556', '-7.185611', '236969jambu.jpg'),
(41, 'Pangalengan', 'Marga Mukti', 'Kebun Jambu', '1', 'Luar', '107.593056', '-7.188333', '595611jambu2.jpg'),
(42, 'Pangalengan', 'Marga Mukti', '-', '1', 'Dalam', '107.634028', '-7.179111', '470276margamukti1.jpg'),
(43, 'Pangalengan', 'Marga Mukti', '-', '1', 'Dalam', '107.633778', '-7.180361', '3235margamukti2.jpg'),
(44, 'Pangalengan', 'Lamajang', 'Blok Ciurug', '1', 'Luar', '107.54475', '-7.115444', '105561ciurug.jpg'),
(45, 'Pangalengan', 'Lamajang', 'Blok Rantaya', '1', 'Luar', '107.533333', '-7.125', '710937rantaya.jpg'),
(46, 'Pangalengan', 'Lamajang', 'Blok Cibihuk', '1', 'Dalam', '107.545833', '-7.1225', '79834cibuhuk.jpg'),
(47, 'Pangalengan', 'Lamajang', 'Blok Kasepen', '1', 'Dalam', '107.550556', '-7.133889', '868927kasepan1.jpg'),
(48, 'Pangalengan', 'Lamajang', 'Blok Kasepen', '1', 'Dalam', '107.550556', '-7.133889', '323090kasepan2.jpg'),
(49, 'Pangalengan', 'Lamajang', 'Blok Cimanglid (Tipar)', '1', 'Luar', '107.545833', '-7.129167', '824157cimanglid.jpg'),
(50, 'Pangalengan', 'Pulosari', 'Blok Pasir Monyet', '1', 'Dalam', '107.545', '-7.184722', '46631pasirmyt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gp`
--

CREATE TABLE `gp` (
  `id_gp` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `kawasan` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp`
--

INSERT INTO `gp` (`id_gp`, `kecamatan`, `desa`, `unit`, `kawasan`, `longitude`, `latitude`, `gambar`) VALUES
(1, 'Arjasari', 'Baros', '1', 'GP (Luar Kawasan)', '107.632', '-7.062', '808105baros1.jpg'),
(2, 'Arjasari', 'Baros', '1', 'GP (Luar Kawasan)', '107.632', '-7.062', '932281baros2.jpg'),
(3, 'Arjasari', 'Baros', '1', 'GP (Luar Kawasan)', '107.633139', '-7.062917', '792297baros3.jpg'),
(4, 'Arjasari', 'Baros', '1', 'GP (Luar Kawasan)', '107.634', '-7.064', '330902baros4.jpg'),
(5, 'Arjasari', 'Baros', '1', 'GP (Luar Kawasan)', '107.635139', '-7.065639', '898193baros5.jpg'),
(6, 'Arjasari', 'Baros', '1', 'GP (Luar Kawasan)', '107.636', '-7.066', '404816baros6.jpg'),
(7, 'Arjasari', 'Wargaluyu', '1', 'GP (Luar Kawasan)', '107.625306', '-7.03625', '861023wargaluyu1.jpg'),
(8, 'Arjasari', 'Wargaluyu', '1', 'GP (Luar Kawasan)', '107.630639', '-7.03725', '134491wargaluyu2.jpg'),
(9, 'Arjasari', 'Lebak Wangi', '1', 'GP (Luar Kawasan)', '107.62025', '-7.047444', '551880lebakk1.jpg'),
(10, 'Arjasari', 'Lebak Wangi', '1', 'GP (Luar Kawasan)', '107.617972', '-7.047861', '469147lebakk2.jpg'),
(11, 'Arjasari', 'Arjasari', '1', 'GP (Luar Kawasan)', '107.645111', '-7.045278', '441803arja1.jpg'),
(12, 'Arjasari', 'Arjasari', '1', 'GP (Luar Kawasan)', '107.645472', '-7.045778', '372223arja2.jpg'),
(13, 'Arjasari', 'Arjasari', '1', 'GP (Luar Kawasan)', '107.644778', '-7.079861', '495911arja3.jpg'),
(14, 'Arjasari', 'Arjasari', '1', 'GP (Luar Kawasan)', '107.643639', '-7.081194', '366821arja4.jpg'),
(15, 'Arjasari', 'Arjasari', '1', 'GP (Luar Kawasan)', '107.646667', '-7.068556', '415527arja5.jpg'),
(16, 'Arjasari', 'Pinggirsari', '1', 'GP (Luar Kawasan)', '107.650889', '-7.078389', '919220pinggir1.jpg'),
(17, 'Arjasari', 'Pinggirsari', '1', 'GP (Luar Kawasan)', '107.651306', '-7.076611', '774749pinggir2.jpg'),
(18, 'Arjasari', 'Pinggirsari', '1', 'GP (Luar Kawasan)', '107.651306', '-7.076611', '27588pinggir3.jpg'),
(19, 'Cangkuang', 'Jatisari', '1', 'GP (Luar Kawasan)', '107.543056', '-7.075111', '258820jatisari1.jpg'),
(20, 'Cangkuang', 'Jatisari', '1', 'GP (Luar Kawasan)', '107.542972', '-7.0755', '435608jatisari2.jpg'),
(21, 'Cangkuang', 'Jatisari', '1', 'GP (Luar Kawasan)', '107.542889', '-7.073667', '76752jatisari3.jpg'),
(22, 'Cangkuang', 'Jatisari', '1', 'GP (Luar Kawasan)', '107.541444', '-7.073111', '320801jatisari4.jpg'),
(23, 'Cangkuang', 'Jatisari', '1', 'GP (Luar Kawasan)', '107.536528', '-7.073278', '47760jatisari5.jpg'),
(24, 'Cangkuang', 'Jatisari', '1', 'GP (Luar Kawasan)', '107.537194', '-7.072972', '94025jatisari6.jpg'),
(25, 'Cangkuang', 'Pananjung', '1', 'GP (Luar Kawasan)', '107.527611', '-7.052306', '109803panjung1.jpg'),
(26, 'Cangkuang', 'Pananjung', '1', 'GP (Luar Kawasan)', '107.529389', '-7.044528', '455139panjung2.jpg'),
(27, 'Cangkuang', 'Pananjung', '1', 'GP (Luar Kawasan)', '107.527389', '-7.051028', '697449panjung3.jpg'),
(28, 'Banjaran', 'Banjaran Wetan', '1', 'GP (Luar Kawasan)', '107.613611', '-7.083639', '254456banjaran.jpg'),
(29, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.593151', '-7.100953', '81147campaka1.jpg'),
(30, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.593211', '-7.100277', '54902campaka2.jpg'),
(31, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.594444', '-7.102778', '226502campaka3.jpg'),
(32, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.590191', '-7.107918', '876434campaka4.jpg'),
(33, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.58602', '-7.107883', '548706campaka5.jpg'),
(34, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.590751', '-7.107602', '748199campaka6.jpg'),
(35, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.591998', '-7.107943', '556091campaka7.jpg'),
(36, 'Cimaung', 'Campaka Mulya', '1', 'GP (Luar Kawasan)', '107.591973', '-7.107687', '21943campaka8.jpg'),
(37, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.5425', '-7.104667', '205658sukamaju1.jpg'),
(38, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.540111', '-7.106472', '552124sukamaju2.jpg'),
(39, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.539917', '-7.106333', '752289sukamaju3.jpg'),
(40, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.541306', '-7.106944', '362213sukamaju4.jpg'),
(41, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.541583', '-7.107', '846649sukamaju5.jpg'),
(42, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.541861', '-7.10725', '529846sukamaju6.jpg'),
(43, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.541528', '-7.107806', '98725sukamaju7.jpg'),
(44, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.539444', '-7.108528', '909057sukamaju8.jpg'),
(45, 'Cimaung', 'Sukamaju', '1', 'GP (Luar Kawasan)', '107.540361', '-7.109056', '526520sukamaju9.jpg'),
(46, 'Cimaung', 'Malasari', '1', 'GP (Luar Kawasan)', '107.546083', '-7.084056', '977355mala1.jpg'),
(47, 'Cimaung', 'Malasari', '1', 'GP (Luar Kawasan)', '107.546194', '-7.084056', '465820mala2.jpg'),
(48, 'Cimaung', 'Malasari', '1', 'GP (Luar Kawasan)', '107.544444', '-7.081806', '314270mala3.jpg'),
(49, 'Cimaung', 'Mekarsari', '1', 'GP (Luar Kawasan)', '107.572731', '-7.117481', '370758mekarsari1.jpg'),
(50, 'Cimaung', 'Mekarsari', '1', 'GP (Luar Kawasan)', '107.572472', '-7.118285', '79346mekarsari2.jpg'),
(51, 'Cimaung', 'Mekarsari', '1', 'GP (Luar Kawasan)', '107.57365', '-7.119022', '400421mekarsari3.jpg'),
(52, 'Cimaung', 'Mekarsari', '1', 'GP (Luar Kawasan)', '107.573402', '-7.118756', '651153mekarsari4.jpg'),
(53, 'Cimaung', 'Mekarsari', '1', 'GP (Luar Kawasan)', '107.574027', '-7.119227', '975921mekarsari5.jpg'),
(54, 'Cimaung', 'Mekarsari', '1', 'GP (Luar Kawasan)', '107.574262', '-7.119237', '18006mekarsari6.jpg'),
(55, 'Pangalengan', 'Tribakti Mulya', '1', 'GP (Dalam Kawasan)', '107.551944', '-8.476389', '598267tribakti1.jpg'),
(56, 'Pangalengan', 'Tribakti Mulya', '1', 'GP (Dalam Kawasan)', '107.551944', '-8.476389', '775299tribakti2.jpg'),
(57, 'Pangalengan', 'Tribakti Mulya', '1', 'GP (Luar Kawasan)', 'NaN', '-7.163056', '820404tribakti57.jpg'),
(58, 'Pangalengan', 'Tribakti Mulya', '1', 'GP (Luar Kawasan)', 'NaN', '-7.163056', '628906tribakti58.jpg'),
(59, 'Pangalengan', 'Tribakti Mulya', '1', 'GP (Luar Kawasan)', 'NaN', '-7.163056', '840820tribakti59.jpg'),
(60, 'Pangalengan', 'Tribakti Mulya', '1', 'GP (Luar Kawasan)', 'NaN', '-7.163056', '983184tribakti60.jpg'),
(61, 'Pangalengan', 'Tribakti Mulya', '1', 'GP (Luar Kawasan)', 'NaN', '-7.163056', '778259tribakti61.jpg'),
(62, 'Pangalengan', 'Marga Mulya', '1', 'GP (Luar Kawasan)', '107.581944', '-7.170742', '680298margamulya62.jpg'),
(63, 'Pangalengan', 'Marga Mulya', '1', 'GP (Luar Kawasan)', '107.567722', '-7.163336', '919708margamulya63.jpg'),
(64, 'Pangalengan', 'Marga Mulya', '1', 'GP (Luar Kawasan)', '107.567722', '-7.163336', '359314margamulya64.jpg'),
(65, 'Pangalengan', 'Marga Mulya', '1', 'GP (Luar Kawasan)', '107.582222', '-7.170556', '323212margamulya65.jpg'),
(66, 'Pangalengan', 'Marga Mulya', '1', 'GP (Luar Kawasan)', '107.582222', '-7.170556', '973724margamulya66.jpg'),
(67, 'Pangalengan', 'Lamajang', '1', 'GP (Luar Kawasan)', '107.533333', '-7.125556', '497437lamajang67.jpg'),
(68, 'Pangalengan', 'Lamajang', '1', 'GP (Luar Kawasan)', '107.533333', '-7.125556', '149506lamajang68.jpg'),
(69, 'Pangalengan', 'Lamajang', '1', 'GP (Luar Kawasan)', '107.533333', '-7.125556', '977lamajang69.JPG'),
(70, 'Pangalengan', 'Lamajang', '1', 'GP (Dalam Kawasan)', '107.543333', '-7.128333', '716705cilamajang70.JPG'),
(71, 'Pangalengan', 'Lamajang', '1', 'GP (Dalam Kawasan)', '107.543333', '-7.131667', '669494cilamajang71.JPG'),
(72, 'Pangalengan', 'Lamajang', '1', 'GP (Dalam Kawasan)', '107.543333', '-7.131667', '729706cibuhuk72.jpg'),
(73, 'Pangalengan', 'Lamajang', '1', 'GP (Dalam Kawasan)', '107.543333', '-7.131667', '839843cibuhuk73.jpg'),
(74, 'Pangalengan', 'Lamajang', '2', 'GP (Luar Kawasan)', '107.548783', '-7.131944', '381745bebera74.jpg'),
(75, 'Pangalengan', 'Lamajang', '2', 'GP (Luar Kawasan)', '107.548783', '-7.131944', '904846bebera75.jpg'),
(76, 'Pangalengan', 'Lamajang', '1', 'GP (Luar Kawasan)', '107.565556', '-7.130278', '658752ciletik75.jpg'),
(77, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.635528', '-7.177222', '500153marga1.jpg'),
(78, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.635111', '-7.177639', '707367marga2.jpg'),
(79, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.635111', '-7.178083', '182862marga3.jpg'),
(80, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.635083', '-7.178222', '910034marga4.jpg'),
(81, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.634472', '-7.175833', '683624marga5.jpg'),
(82, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.634806', '-7.175444', '501160marga6.jpg'),
(83, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.634806', '-7.175444', '132965marga7.jpg'),
(84, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.634639', '-7.175194', '159394marga8.jpg'),
(85, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.634722', '-7.178056', '293183marga9.jpg'),
(86, 'Pangalengan', 'Marga Mukti', '1', 'GP (Dalam Kawasan)', '107.634167', '-7.1775', '516235marga10.jpg'),
(87, 'Pangalengan', 'Sukamanah', '1', 'GP (Dalam Kawasan)', '107.621278', '-7.213861', '916809sukamanah1.jpg'),
(88, 'Pangalengan', 'Sukamanah', '1', 'GP (Dalam Kawasan)', '107.622639', '-7.215', '833892sukamanah2.jpg'),
(89, 'Pangalengan', 'Sukamanah', '1', 'GP (Dalam Kawasan)', '107.623472', '-7.214806', '74677sukamanah3.jpg'),
(90, 'Pangalengan', 'Sukamanah', '1', 'GP (Dalam Kawasan)', '107.624889', '-7.213028', '63630sukamanah4.jpg'),
(91, 'Pangalengan', 'Sukamanah', '1', 'GP (Dalam Kawasan)', '107.624167', '-7.213', '152680sukamanah5.jpg'),
(92, 'Pangalengan', 'Warnasari', '1', 'GP (Dalam Kawasan)', '107.529167', '-7.182222', '721924warnasari1.jpg'),
(93, 'Pangalengan', 'Warnasari', '1', 'GP (Dalam Kawasan)', '107.529167', '-7.1825', '442932warnasari2.jpg'),
(94, 'Pangalengan', 'Warnasari', '1', 'GP (Dalam Kawasan)', '107.528056', '-7.183056', '441437warnasari3.jpg'),
(95, 'Pangalengan', 'Warnasari', '1', 'GP (Dalam Kawasan)', '107.5275', '-7.183333', '859192warnasari4.jpg'),
(96, 'Pangalengan', 'Pulosari', '1', 'GP (Dalam Kawasan)', '107.546667', '-7.185556', '102723pulo1.jpg'),
(97, 'Pangalengan', 'Pulosari', '1', 'GP (Dalam Kawasan)', '107.544444', '-7.185', '372406pulo2.jpg'),
(98, 'Pangalengan', 'Pulosari', '1', 'GP (Dalam Kawasan)', '107.544722', '-7.185', '172119pulo3.jpg'),
(99, 'Pangalengan', 'Pulosari', '1', 'GP (Dalam Kawasan)', '107.546667', '-7.185', '599243pulo4.jpg'),
(100, 'Pangalengan', 'Pulosari', '1', 'GP (Dalam Kawasan)', '107.5425', '-7.185', '125092pulo5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sra`
--

CREATE TABLE `sra` (
  `id_sra` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `lokasi_sra` varchar(100) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sra`
--

INSERT INTO `sra` (`id_sra`, `kecamatan`, `desa`, `lokasi_sra`, `unit`, `longitude`, `latitude`, `gambar`) VALUES
(1, 'Pangalengan', 'Pangalengan', 'Kantor Desa Pangalengan', '2', '107.5698761', '-7.1811563', '707824kantor desa.jpg'),
(2, 'Pangalengan', 'Pangalengan', 'SDN 2/5 Pangalengan', '2', '107.574881', '-7.1774556', '373383sdn 2.jpg'),
(3, 'Pangalengan', 'Pangalengan', 'SDN 4/8 Pangalengan', '2', '107.5701313', '-7.177212', '778564sdn 4.jpg'),
(4, 'Pangalengan', 'Pangalengan', 'SDN 7 Pangalengan', '1', '107.5734965', '-7.1783605', '615265sdn 7.jpg'),
(5, 'Pangalengan', 'Pangalengan', 'SDN Cijembar', '1', '107.5686714', '-7.1840271', '49988sdn cijembar.jpg'),
(6, 'Pangalengan', 'Pangalengan', 'SDN Cibeureum', '1', '107.5991746', '-7.1737067', '981658sdn cibereum.jpg'),
(7, 'Pangalengan', 'Pangalengan', 'SDN Sidamukti', '1', '107.5647424', '-7.177215', '143189sdn sidamukti.jpg'),
(8, 'Pangalengan', 'Pangalengan', 'SDN Ciwidara (Langbong)', '1', '107.579796', '-7.1773189', '171784sdn ciwidara.jpg'),
(9, 'Pangalengan', 'Pangalengan', 'Rumah Bu Ela (Bp. Tigin)', '3', '107.576111', '-7.173889', '273010bu ela.jpg'),
(10, 'Pangalengan', 'Pangalengan', 'SMKN V PANGALENGAN', '4', '107.578242', '-7.1856573', '603607smk.jpg'),
(11, 'Pangalengan', 'Warnasari', 'Kantor Desa Warnasari', '2', '107.543883', '-7.19485', '458283kades.jpg'),
(12, 'Pangalengan', 'Warnasari', 'Puskesmas Warnasari', '1', '107.5425', '-7.194367', '313904puskesmas.jpg'),
(13, 'Pangalengan', 'Warnasari', 'SDN Palayangan ', '1', '107.5429', '-7.194467', '623505palayangan.jpg'),
(14, 'Pangalengan', 'Warnasari', 'SDN Cipangisikan', '2', '107.54215', '-7.201967', '479370cipaning.jpg'),
(15, 'Pangalengan', 'Warnasari', 'SMP Bina Putra', '2', '107.543539', '-7.202189', '690582bp.jpg'),
(16, 'Pangalengan', 'Warnasari', 'SDN Warnasari ', '3', '107.535333', '-7.197267', '795654warnasari.jpg'),
(17, 'Pangalengan', 'Warnasari', 'MTs Jamatulahman', '2', '107.540117', '-7.195683', '728058mts.jpg'),
(18, 'Pangalengan', 'Warnasari', 'Pesantren At-Taslim', '2', '107.535783', '-7.186283', '594421pesantren.jpg'),
(19, 'Pangalengan', 'Pulosari', 'Kantor Desa Pulosari', '1', '107.55815', '-7.190767', '857879kades.jpg'),
(20, 'Pangalengan', 'Pulosari', 'rumah pak kusmayadi', '1', '107.562194', '-7.18325', '197083kusmayaadi.jpg'),
(21, 'Pangalengan', 'Pulosari', 'rumah pak yayat hidayat', '1', '107.561861', '-7.182861', '202484yayat.jpg'),
(22, 'Pangalengan', 'Pulosari', 'rumah bpk jajang yunus', '1', '107.562083', '-7.182861', '650635jajang.jpg'),
(23, 'Pangalengan', 'Pulosari', 'rumah pak uar 04/06', '1', '107.562111', '-7.182528', '868103uar.jpg'),
(24, 'Pangalengan', 'Pulosari', 'rumah pak enjang 04/06', '1', '107.561667', '-7.182306', '170929enjang.jpg'),
(25, 'Pangalengan', 'Pulosari', 'rumah pak heri 02/06', '1', '107.561944', '-7.181444', '26246heri.jpg'),
(26, 'Pangalengan', 'Pulosari', 'rumah pak endang lesmana', '1', '107.561806', '-7.168333', '46265endang.jpg'),
(27, 'Pangalengan', 'Pulosari', 'rumah pak uun surwita', '1', '107.561639', '-7.168414', '605987uun.jpg'),
(28, 'Pangalengan', 'Pulosari', 'sdn mulyasari', '2', '107.565306', '-7.169119', '788757mulyasari.jpg'),
(29, 'Pangalengan', 'Pulosari', 'pabrik kopi 04/14', '1', '107.565444', '-7.169272', '564484pabrik.jpg'),
(30, 'Pangalengan', 'Pulosari', 'Koperasi Desa', '2', '107.56065', '-7.191133', '371185koperasi.jpg'),
(31, 'Pangalengan', 'Pulosari', 'SDN Tri Bakti', '2', '107.553983', '-7.19735', '232086tribakti.jpg'),
(32, 'Pangalengan', 'Pulosari', 'SDN Marga Bakti', '2', '107.562783', '-7.1927', '514832margabakti.jpg'),
(33, 'Pangalengan', 'Pulosari', 'SDN Sirna Sari', '2', '107.561672', '-7.1925', '664062sirnasari.jpg'),
(34, 'Pangalengan', 'Pulosari', 'Madrsah Kampung Dangdang', '1', '107.555417', '-7.186467', '45563madrasah.jpg'),
(35, 'Pangalengan', 'Marga Mekar', 'SDN Kerta Bakti', '2', '107.568467', '-7.200417', ''),
(36, 'Pangalengan', 'Marga Mekar', 'Kantor Desa Marga Mekar', '2', '107.574933', '-7.191717', '649628kades.jpg'),
(37, 'Pangalengan', 'Marga Mekar', 'SDN Dwi Karya', '1', '107.574717', '-7.190983', ''),
(38, 'Pangalengan', 'Marga Mekar', 'SMPN 4 Pangalengan', '3', '107.568633', '-7.202817', ''),
(39, 'Pangalengan', 'Marga Mekar', 'SDN Coblong', '2', '107.566167', '-7.184983', ''),
(40, 'Pangalengan', 'Marga Mukti', 'SD Pelita Utama', '2', '107.611111', '-7.185389', '971008pelita.jpg'),
(41, 'Pangalengan', 'Marga Mukti', 'SD Pelita Jaya', '1', '107.6125', '-7.185417', '310394pelita.jpg'),
(42, 'Pangalengan', 'Marga Mukti', 'Rumah Pa Alit', '2', '107.611111', '-7.185444', '162842pa alit.jpg'),
(43, 'Pangalengan', 'Marga Mukti', 'Madrasah Ishalahul Amanah', '2', '107.613611', '-7.185278', '759552mts.jpg'),
(44, 'Pangalengan', 'Marga Mukti', 'SD Bintang Bangsa', '1', '107.606944', '-7.1855', '902282sdbintang.jpg'),
(45, 'Pangalengan', 'Marga Mukti', 'SDN Karpiah Jaya', '1', '107.609722', '-7.198611', '506805karpiah.jpg'),
(46, 'Pangalengan', 'Marga Mukti', 'SDN Cempaka', '1', '107.612778', '-7.185306', '509155cempaka.jpg'),
(47, 'Pangalengan', 'Marga Mukti', 'TPK LOS CIMAUNG 01/20', '1', '107.611667', '-7.185414', '751495los1.jpg'),
(48, 'Pangalengan', 'Marga Mukti', 'TPK LOS CIMAUNG 01/21', '1', '107.611806', '-7.185431', '620727los2.jpg'),
(49, 'Pangalengan', 'Marga Mukti', 'TPK LOS CIMAUNG 01/22', '1', '107.611389', '-7.185433', '149109los3.jpg'),
(50, 'Pangalengan', 'Marga Mukti', 'RUMAH BAPAK ENCEP SUGAND', '1', '107.611361', '-7.185389', '723541encep.jpg'),
(51, 'Pangalengan', 'Marga Mukti', 'RUMAH IBU SUNENGSIH 02/20', '1', '107.611806', '-7.185439', '951782sunengsih.jpg'),
(52, 'Pangalengan', 'Marga Mukti', 'RUMAH SDR. RIKI 02/20', '1', '107.612083', '-7.185431', '308502riki.jpg'),
(53, 'Pangalengan', 'Marga Mukti', 'POSYANDU ADE IRMA 02/20', '1', '107.612389', '-7.185475', '175354posyandu.jpg'),
(54, 'Pangalengan', 'Marga Mukti', 'RUMAH BAPAK ANDANG 02/18', '1', '107.609083', '-7.185356', '914611adang.jpg'),
(55, 'Pangalengan', 'Marga Mukti', 'RUMAH BAPAK ECEP 04/02', '1', '107.586306', '-7.186889', '257538ecep.jpg'),
(56, 'Pangalengan', 'Marga Mukti', 'RUMAH BAPAK UJANG 04/02', '1', '107.585', '-7.185556', '35859ujang.jpg'),
(57, 'Pangalengan', 'Marga Mulya', 'SDN Pasir Mulya 2', '1', '107.581967', '-7.1714', '963989sdpasir2.jpg'),
(58, 'Pangalengan', 'Marga Mulya', 'SDN Pasir Mulya 1', '1', '107.58505', '-7.171767', '389069pasir1.jpg'),
(59, 'Pangalengan', 'Marga Mulya', 'SMPN 1 Pangalengan', '2', '107.58365', '-7.17195', '707092smp1.jpg'),
(60, 'Pangalengan', 'Marga Mulya', 'SDN Cinta Kasih', '2', '107.588333', '-7.170444', '668548cintakasih.jpg'),
(61, 'Pangalengan', 'Marga Mulya', 'SDN Bojongsari', '1', '107.587222', '-7.17', '300904bojng.jpg'),
(62, 'Pangalengan', 'Marga Mulya', 'SDN Sukalaksana', '1', '107.5616', '-7.156317', '687164suka.jpg'),
(63, 'Pangalengan', 'Marga Mulya', 'Kantor Desa Marga Mulya', '2', '107.561878', '-7.156233', '574524kades.jpg'),
(64, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK DANI', '1', '107.579444', '-7.152617', '826660dani.jpg'),
(65, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK IYEP', '1', '107.568056', '-7.152633', '93598iyep.jpg'),
(66, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK H. KARMAN', '1', '107.579444', '-7.152664', '959075hkarman.jpg'),
(67, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK ASE', '1', '107.568333', '-7.152689', '232697ase.jpg'),
(68, 'Pangalengan', 'Marga Mulya', 'MASJID AS-SALAM', '1', '107.570278', '-7.152722', '531982masjid.jpg'),
(69, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK ADE YAYAN', '1', '107.568333', '-7.152753', '744140adeyaya.jpg'),
(70, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK RAHMAT', '1', '107.552775', '-7.152681', '225037rahmat.jpg'),
(71, 'Pangalengan', 'Marga Mulya', 'RUMAH IBU TITING', '1', '107.552706', '-7.152719', '612701butititng.jpg'),
(72, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK ENDANG', '1', '107.552678', '-7.152703', '488068endang.jpg'),
(73, 'Pangalengan', 'Marga Mulya', 'RUMAH BAPAK JAJANG', '1', '107.579444', '-7.152692', '139954jajang.jpg'),
(74, 'Pangalengan', 'Tribakti Mulya', 'SDN Trikarya', '2', '107.559', '-7.144167', '225434trikar.jpg'),
(75, 'Pangalengan', 'Tribakti Mulya', 'Kantor Desa Tribakti Mulya', '3', '107.558889', '-7.134167', '402100kades.jpg'),
(76, 'Pangalengan', 'Tribakti Mulya', 'Puskesdes ', '1', '107.559028', '-7.142833', '330597puskesdes.jpg'),
(77, 'Pangalengan', 'Tribakti Mulya', 'SDN PLTA', '3', '107.5589', '-7.144283', '310486sdn plta.jpg'),
(78, 'Pangalengan', 'Tribakti Mulya', 'Masjid Al-Hikmah RW 07', '1', '107.558611', '-7.144222', '436981alh.jpg'),
(79, 'Pangalengan', 'Margaluyu', 'SDN Puncak Raya', '2', '107.549617', '-7.209267', '771179sdpuncak.jpg'),
(80, 'Pangalengan', 'Margaluyu', 'Pabrik teh bpk asa rt 03/02', '1', '107.225167', '-7.554389', '341522pabriktehasa.jpg'),
(81, 'Pangalengan', 'Margaluyu', 'masjid sabilus salam', '1', '107.535972', '-7.215389', '118287masjidsabilussalam.jpg'),
(82, 'Pangalengan', 'Margaluyu', 'madrasah darus salam rw 01', '1', '107.536067', '-7.21475', '207428madrasahdarus.jpg'),
(83, 'Pangalengan', 'Margaluyu', 'rumah bpk yayat 03', '1', '107.535747', '-7.229889', '648315rumahpakyayat.jpg'),
(84, 'Pangalengan', 'Margaluyu', 'masjid al ikhlas 03', '1', '107.535819', '-7.230778', '947masjidalikhlas.jpg'),
(85, 'Pangalengan', 'Margaluyu', 'rumah pak kades rw 06', '2', '107.573889', '-7.22825', '583069rumhkades.jpg'),
(86, 'Pangalengan', 'Margaluyu', 'rumah ibu imas', '1', '107.573333', '-7.227972', '908264buimas.jpg'),
(87, 'Pangalengan', 'Margaluyu', 'Kantor Desa Margaluyu', '1', '107.553717', '-7.223217', '605621kadesmargaa.jpg'),
(88, 'Pangalengan', 'Margaluyu', 'SMPN 3 Pangalengan', '2', '107.53705', '-7.224983', '370484smppanga.jpg'),
(89, 'Pangalengan', 'Margaluyu', 'SDN Pasir Malang 1', '1', '107.54065', '-7.222117', '436340sdnpasri.jpg'),
(90, 'Pangalengan', 'Margaluyu', 'SDN Pelita 2', '2', '107.567033', '-7.2231', '649994sdnpelita2.jpg'),
(91, 'Pangalengan', 'Margaluyu', 'SDN Sukagalih', '1', '107.563233', '-7.220383', '304199sdnsukagalih.jpg'),
(92, 'Pangalengan', 'Margaluyu', 'Masjid An-Nur', '1', '107.551289', '-7.220383', '596283masjidan-nur.jpg'),
(93, 'Pangalengan', 'Lamajang', 'Madrasah Toriqul Jannah', '1', '107.56', '-7.1275', '949707MI.jpg'),
(94, 'Pangalengan', 'Lamajang', 'Masjid Asyifa', '1', '107.5501', '-7.12765', '38178masjidassyfa.jpg'),
(95, 'Pangalengan', 'Lamajang', 'Masjid Nurul Huda', '1', '107.548967', '-7.126767', '987823nurulhuda.jpg'),
(96, 'Pangalengan', 'Lamajang', 'PAUD Nurlatifah', '1', '107.546267', '-7.126983', '571930padu.jpg'),
(97, 'Pangalengan', 'Lamajang', 'SDN Lamajang 1', '2', '107.547033', '-7.12695', '644806lamajang1.jpg'),
(98, 'Pangalengan', 'Lamajang', 'SMP Al-Basiriah', '1', '107.548889', '-7.126667', '908874albas.jpg'),
(99, 'Pangalengan', 'Lamajang', 'SDN Lamajang 2', '2', '107.546111', '-7.126944', '866211lamajang2.jpg'),
(100, 'Pangalengan', 'Lamajang', 'SDN Kirtayasa', '1', '107.546944', '-7.126944', '13978kertaaser.jpg'),
(101, 'Cimaung', 'Warjabakti', 'Madrasah sabilul rosyad 03/02', '1', '107.508889', '-7.051111', ''),
(102, 'Cimaung', 'Sukamaju', 'SDN Sukamaju', '2', '107.322917', '-7.063194', ''),
(103, 'Cimaung', 'Sukamaju', 'SMP Pasundan 1 rt 01/04', '2', '107.325472', '-7.054194', ''),
(104, 'Cimaung', 'Sukamaju', 'Kantor Desa Sukamaju', '1', '107.324361', '-7.06', ''),
(105, 'Cimaung', 'Sukamaju', 'Masjid Al-Hidayah Madur', '1', '107.324361', '-7.060833', ''),
(106, 'Cimaung', 'Sukamaju', 'Mts Al-Madani M tengah', '1', '107.323056', '-7.063111', ''),
(107, 'Cimaung', 'Sukamaju', 'SDN Cihanjaro', '1', '107.324111', '-7.060889', ''),
(108, 'Cimaung', 'Sukamaju', 'MTI Nurul Haq dan Masjid Nurul Haq', '2', '107.323361', '-7.060639', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dpn`
--
ALTER TABLE `dpn`
  ADD PRIMARY KEY (`id_dpn`);

--
-- Indexes for table `gp`
--
ALTER TABLE `gp`
  ADD PRIMARY KEY (`id_gp`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `sra`
--
ALTER TABLE `sra`
  ADD PRIMARY KEY (`id_sra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dpn`
--
ALTER TABLE `dpn`
  MODIFY `id_dpn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `gp`
--
ALTER TABLE `gp`
  MODIFY `id_gp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sra`
--
ALTER TABLE `sra`
  MODIFY `id_sra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

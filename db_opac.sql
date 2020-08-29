-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_opac`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `Nama` varchar(100) NOT NULL,
  `NIK` varchar(100) NOT NULL,
  `Kecamatan` varchar(100) NOT NULL,
  `Kelurahan` varchar(100) NOT NULL,
  `JenisKelamin` varchar(20) NOT NULL,
  `Tanggal` varchar(5) NOT NULL,
  `Bulan` varchar(30) NOT NULL,
  `Tahun` varchar(5) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Alamat` varchar(155) NOT NULL,
  `JenisAnggota` varchar(50) NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `NoAnggota` varchar(10) NOT NULL,
  `Level` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`Nama`, `NIK`, `Kecamatan`, `Kelurahan`, `JenisKelamin`, `Tanggal`, `Bulan`, `Tahun`, `Username`, `Password`, `Alamat`, `JenisAnggota`, `NoTelp`, `NoAnggota`, `Level`, `status`) VALUES
('tika', '123456', 'Blimbing', 'Lowokwaru', 'Laki-laki', '3', 'Oktober', '1997', 'tika', 'tika1234', 'bali', 'Mahasiswa', '081', 'USER0001', 'admin', 1),
('tika tes', '123456', 'Klojen', 'Klojen', 'Laki-laki', '18', 'Februari', '2017', 'tiks', 'tiks', 'malang', 'Umum', '081', 'USER0002', 'anggota', 1),
('tes', 'tes', 'Blimbing', 'Rampal Celaket', 'Perempuan', '14', 'Mei', '2000', 'tes', 'tes1234', 'komputer', 'Umum', '1', 'USER0003', 'anggota', 0),
('bintang', '1234', 'Lowokwaru', 'Lowokwaru', 'Laki-laki', '23', 'Agustus', '2000', 'dimsdims', '1234', 'kediri', 'Mahasiswa', '081', 'USER0004', 'admin', 1),
('coba', '12345678910', 'Klojen', 'Samaan', 'Laki-laki', '5', 'Juni', '2000', 'a', 'a', 'a', 'Mahasiswa', '081', 'USER0005', 'anggota', 0),
('I Gede Tika Permana', '5103050310970007', '', '', 'Laki-laki', '3', 'Oktober', '1997', 'tika', '1234', 'jalan danau batur V perumahan taman graha bali', 'Mahasiswa', '081233517323', 'USER0006', 'anggota', 1),
('Bintang Dimas PAR', '12345678910', '', '', 'Laki-laki', '11', 'April', '1997', 'dims', 'dims', 'kediri', 'Mahasiswa', '081', 'USER0007', 'anggota', 1),
('', '', '', '', '', '', '', '', '', '', '', '', '', 'USER0008', '', 0),
('a', 'b', '', '', '', '', '', '', '', '', 'dadwa', 'Mahasiswa', '', 'USER0009', '', 0);

--
-- Triggers `anggota`
--
DELIMITER $$
CREATE TRIGGER `tr_NoAnggota` BEFORE INSERT ON `anggota` FOR EACH ROW BEGIN
SET @hitung = CONVERT((RIGHT((SELECT NoAnggota FROM `anggota` ORDER by NoAnggota DESC LIMIT 1), 4)), UNSIGNED) + 1;
if (@hitung > 1) THEN
if (@hitung < 10) THEN 
SET new.NoAnggota = concat('USER000',@hitung);
ELSEIF (@hitung < 100) THEN
SET new.NoAnggota = concat('USER00',@hitung);
ELSEIF (@hitung < 1000) THEN
SET new.NoAnggota = concat('USER0',@hitung);
ELSE
SET new.NoAnggota = concat('USER',@hitung);
END IF;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `databuku`
--

CREATE TABLE `databuku` (
  `Judul` varchar(100) NOT NULL,
  `Cetakan` varchar(10) NOT NULL,
  `Pengarang` varchar(100) NOT NULL,
  `Penerbit` varchar(100) NOT NULL,
  `Jilid` varchar(10) NOT NULL,
  `Edisi` varchar(30) NOT NULL,
  `DeskripsiBuku` varchar(100) NOT NULL,
  `Bahasa` varchar(100) NOT NULL,
  `Jumlah` varchar(10) NOT NULL,
  `Subyek` varchar(100) NOT NULL,
  `NoPanggil` varchar(100) NOT NULL,
  `NoRegis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `JenisKoleksi` varchar(50) NOT NULL,
  `Sampul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databuku`
--

INSERT INTO `databuku` (`Judul`, `Cetakan`, `Pengarang`, `Penerbit`, `Jilid`, `Edisi`, `DeskripsiBuku`, `Bahasa`, `Jumlah`, `Subyek`, `NoPanggil`, `NoRegis`, `tanggal`, `JenisKoleksi`, `Sampul`) VALUES
('ini bagian tes', 'tes', 'tes', 'tes', '', '', '', '', '', '', '', '', '2018-08-15', '', 'sampulboi.jpg'),
('ini buku kedua produksi tes', 'tes', 'tes', 'tes', 'tes', '2', 'tebal', 'indo', '2', 'a', '11', '1', '2018-08-29', '', '175.png'),
('Interfacing komputer dan mikrokontroler', '2', 'Widodo Budiharto', 'Elex Media Komputindo', '-', '-', 'xiii, 218 hal.; 21 cm', 'Indonesia', '1', 'Komputer , Pemrograman', '.-005.1-WID-i-2004', '100044339', '2004-11-24', 'biasa', ''),
('Seleksi CPNS Departemen Kesehatan', '1', 'Siregar, Amir', 'Pustaka Widyatama', '-', '-', '110 hal ; 17 cm', 'Indonesia', '3', 'Tes Bakat', '.-153.94-SIR-s-2006', '100048167', '2006-08-14', '', ''),
('Manajemen dan logistik bantuan dalam sektor kesehatan', '1', 'Andri Lukmana', 'EGC', '-', '-', 'xiii, 177 hal ; 24 cm', 'Indonesia', '1', 'Bencana Bantuan', '.-363.348-MAN-m-2006', '100048410', '2017-09-12', '', ''),
('Feynman : Genius Fisika Paling Cool Sedunia', '-', 'Febdian Rusydi; Feynman, Richard', 'Mizan', '-', '-', '294 hal ; ilus ; 19 cm', 'Indonesia', '1', 'Biografi ; Feynman', '.-925-FEY-f-2006', '100048503 ', '2018-08-23', '', 'wkwkwk.jpg'),
('Aspek hukum pengawasan melekat dalam lingkungan aparatur pemerintahan', '2', 'Situmorang, Victor M', 'Rineka Cipta', '-', '-', 'viii, 216 hal ; 21 cm', 'Indonesia', '1', 'Pengawasan Melekat (Pemerintah)', '.-353.009-SIT-a-1998', '100048576 ', '2018-04-17', '', ''),
('Hukum Lingkungan di Indonesia', '1', 'Supriadi', 'Sinar Grafika', '-', '-', 'vii, 381 hal ; 23 cm', 'Indonesia', '1', 'Hukum Lingkungan', '.-344.46-SUP-h-2006', '100048616', '2018-08-01', '', ''),
('Kesehatan mental', '1', 'Yustinus Semiun', 'Kanisius', '3', '-', '656 hal ; ilus ; 22 cm', 'Indonesia', '1', 'Kesehatan Jiwa', '.-362.2-YUS-k-2006', '100048736', '2018-02-12', '', ''),
('Etika komputer dan tanggung jawab profesionaldi bidang teknologi informasi', '-', 'Teguh Wahyono', 'Andi', '-', '-', 'xi, 256 hal ; 23 cm', 'Indonesia', '1', 'Komputer', '.-004-TEG-e-2006', '100048740 ', '2018-02-27', '', ''),
('Mudah merakit komputer', '-', 'Rachmad Hakim S', 'Elex Media Komputindo', '-', '-', 'vii, 136 hal ; illus ; 21 cm', 'Indonesia', '1', 'Komputer, Teknik', '.-621.381 5-RAC-m-2006', '100048752', '2018-08-04', '', ''),
('Analisis dan aspek kesehatan : Bahan tambahan pangan', '1', 'Wisnu Cahyadi', 'Bumi Aksara', '-', '-', 'ix, 297 hal ; 23 cm', 'Indonesia', '2', 'Teknologi Pangan', '.-664-WIS-a-2006', '100069170', '2017-10-20', '', ''),
('tes', 'tes', 'tes', 'tes', '1', '1', 'tes', 'indo', '1', 'tes', '1111', '11112', '2017-06-12', '', ''),
('Kamus Istilah Komputer dan Teknologi Informasi', '1', 'Mandiri Information System', 'Anindya', '-', '1', '272 hal; 21 cm', 'Indonesia', '1', 'Komputer - Kamus', 'REF-004.03-KAM-k-2004', '200005571', '2018-08-29', '', ''),
('Pengetahuan komputer dan teknologi informasi', '1', 'Jack Febrian', 'Informatika', '-', '-', 'vi, 513 hal.; 24 cm', 'Indonesia', '1', 'Komputer - Kamus', 'REF-004.03-JAC-p-2004', '200005576', '2018-08-01', 'refrensi', ''),
('Kamus ringkas kedokteran Stedman untuk profesi kesehatan', '-', 'Huriawati Hartanto, Huriawati Hartanto (at.al), John H Dirckx, Tiara Mahatmi Nisa', 'EGC', '-', '4', 'xxv, 1251 hal.; gambar/ilus.; 24 cm', 'Indonesia', '-', 'Kedokteran - Kamus', 'REF-610.3-KAM-k-2005', '200005590', '2005-10-03', 'refrensi', ''),
('Rekonstruksi sistem Hukum Pabean Indonesia', '3', 'Eddhi Sutarto; Yayat Sri Hayati', 'Erlangga', '-', '-', 'xi ,122 hlm. : ilus. ; 25 cm', 'Indonesia', '3', 'Bea dan Cukai - Indonesia; Pajak dan Perpajakan', '.-336.260 891-EDD-r-2012', '2012112631', '2017-02-06', '', ''),
('Hukum Divertasi di indonesia', '-', 'H. Salim HS; Yayat Sri Hayati', 'Erlangga', '-', '-', 'ix, 245 hlm. ; 21 cm', 'Indonesia', '3', 'Investasi', '.-346.9-SAL-h-2012', '2012112637', '2012-09-19', '', ''),
('Aspek hukum dan realitas perusahaan grup di indonesia', '-', 'Sulistiowati; Yayat Sri Hayati', 'Erlangga', '-', '-', 'viii, 184 hlm. : ilus. ; 21 cm', 'Indonesia', '3', 'Hukum Dagang', '.-346.065-SUL-a-2012', '2012112640', '2012-09-03', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `gambar` text NOT NULL,
  `judulgaleri` text NOT NULL,
  `kegiatan` text NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`gambar`, `judulgaleri`, `kegiatan`, `waktu`, `id`) VALUES
('il_570xN.928213134_de1t.jpg', '', 'z', 'z', 1),
('il_570xN.1005081593_lzoh.jpg', '', 'ini yg baru', '', 2),
('770cb7efaf636ead8908f894274ce266.jpg', '', 'sdfcv', 'sdf', 3),
('boat_sea_clouds_123096_2560x1080.jpg', '', 'sadfg', 'daws', 4),
('large_ad5fc1ba539e65b7.png', '', '', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`NoAnggota`);

--
-- Indexes for table `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`NoRegis`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

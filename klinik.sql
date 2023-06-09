-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2023 at 10:32 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(200) NOT NULL,
  `tgl_reservasi` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2023-02-13-062313', 'App\\Database\\Migrations\\User', 'default', 'App', 1678091191, 1),
(3, '2023-02-13-062818', 'App\\Database\\Migrations\\Treatment', 'default', 'App', 1678091191, 1),
(4, '2023-02-13-062313', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1683345639, 2),
(5, '2023-05-06-041139', 'App\\Database\\Migrations\\Create', 'default', 'App', 1683346325, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `sesi_reservasi` enum('08.00 - 10.00','10.00 - 12.00','12.45 - 15.00','15.00 - 17.00') NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `nama_treatment` varchar(225) NOT NULL,
  `total` int(20) NOT NULL,
  `status_pembayaran` enum('Dalam Proses','Proses','Batal','Selesai') NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `tgl_reservasi`, `sesi_reservasi`, `nama_lengkap`, `alamat`, `nomor_telepon`, `nama_treatment`, `total`, `status_pembayaran`, `user_id`) VALUES
(6, '2023-06-10', '15.00 - 17.00', 'B', 'Jalan ditempat', '0123456789', 'Facial Basic', 0, 'Dalam Proses', 54),
(7, '2023-06-10', '08.00 - 10.00', 'B', 'Jalan ditempat', '0123456789', 'Facial Basic', 0, 'Dalam Proses', 54),
(8, '2023-06-10', '15.00 - 17.00', 'B', 'Jalan ditempat', '0123456789', 'Facial Basic', 0, 'Dalam Proses', 54),
(9, '2023-06-10', '15.00 - 17.00', 'B', 'Jalan ditempat', '0123456789', 'Facial Basic', 0, 'Dalam Proses', 54);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int(11) NOT NULL,
  `nama_treatment` varchar(45) NOT NULL,
  `desc_treatment` text NOT NULL,
  `jenis_treatment` enum('Facial','Chemical Peeling','Laser','Glowing Glass Skin','Body Treatment','Hair Treatment','Other Treatment') NOT NULL,
  `harga_treatment` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id_treatment`, `nama_treatment`, `desc_treatment`, `jenis_treatment`, `harga_treatment`) VALUES
(1, 'Facial Basic', 'description 1', 'Facial', 55000),
(2, 'Facial Anti Acne', 'description 2', 'Facial', 55000),
(3, 'Facial Gold Snail Whitening', 'description 3', 'Facial', 55000),
(4, 'Facial Oksigen Detox', 'description 4', 'Facial', 55000),
(5, 'Facial Oksigen Regular', 'description 5', 'Facial', 55000),
(6, 'Facial Oksigen Intensif', 'description 6', 'Facial', 55000),
(7, 'Facial Skin Glass (Include Masker Wet Paper)', 'description 7', 'Facial', 55000),
(8, 'Facial Scrubber', 'description 8', 'Facial', 55000),
(9, 'Facial Ice Globe Roller (Include Masker WetP)', 'description 9', 'Facial', 55000),
(10, 'Chemical Peeling', 'description 10', 'Chemical Peeling', 55000),
(11, 'Double Chemical Peeling (Whitening / Acne)', 'description 11', 'Chemical Peeling', 55000),
(12, 'Chemical Peeling Bibir (Include Masker Bibir)', 'description 12', 'Chemical Peeling', 55000),
(13, 'Chemical Peeling Ketiak (Include Masker WetP)', 'description 13', 'Chemical Peeling', 55000),
(14, 'Chemical Peeling Leher (Depan dan Belakang)', 'description 14', 'Chemical Peeling', 55000),
(15, 'Laser Bibir (Include Masker Bibir)', 'description 15', 'Laser', 55000),
(16, 'Laser Black Doll Ketiak', 'description 16', 'Laser', 55000),
(17, 'Laser Wajah', 'description 17', 'Laser', 55000),
(18, 'Kulit Wajah', 'description 18', 'Glowing Glass Skin', 55000),
(19, 'Kulit Ketiak', 'description 19', 'Glowing Glass Skin', 55000),
(20, 'Kulit Leher', 'description 20', 'Glowing Glass Skin', 55000),
(21, 'Kulit Bibir', 'description 21', 'Glowing Glass Skin', 55000),
(22, 'Paket Injeksi Vitamin C Collagen', 'description 22', 'Body Treatment', 55000),
(23, 'Paket Injeksi Whitening Premium', 'description 23', 'Body Treatment', 55000),
(24, 'Injeksi Vitamin C Collagen', 'description 24', 'Body Treatment', 55000),
(25, 'Injeksi Whitening Premium', 'description 25', 'Body Treatment', 55000),
(26, 'Hair SPA', 'description 26', 'Hair Treatment', 55000),
(27, 'Hair Mask', 'description 27', 'Hair Treatment', 55000),
(28, 'Hair Creambath', 'description 28', 'Hair Treatment', 55000),
(29, 'Cuci dan Vitamin Rambut', 'description 29', 'Hair Treatment', 55000),
(30, 'Biolifting / Radiofrekuensi', 'description 30', 'Other Treatment', 55000),
(31, 'Puffy Eyes (Biolifting)', 'description 31', 'Other Treatment', 55000),
(32, 'Mikrodermabrasi', 'description 32', 'Other Treatment', 55000),
(33, 'Mikrodermabrasi Kelopak Mata', 'description 33', 'Other Treatment', 55000),
(34, 'HIFU Include Masker PeelOff', 'description 34', 'Other Treatment', 55000),
(35, 'Pket HIFU (FULL)', 'description 35', 'Other Treatment', 55000),
(36, 'Nanoterapi / Microterapi Needle', 'description 36', 'Other Treatment', 55000),
(37, 'Cauterasi', 'description 37', 'Other Treatment', 55000),
(38, 'Skin Booster', 'description 38', 'Other Treatment', 55000),
(39, 'Aqua Peel / Mikro Oxybubble (Include Masker)', 'description 39', 'Other Treatment', 55000),
(40, 'BB Glow Skin', 'description 40', 'Other Treatment', 55000),
(41, 'Korean Black Doll (Laser Carbon)', 'description 41', 'Other Treatment', 55000),
(42, 'Paket Black Doll (FULL)', 'description 42', 'Other Treatment', 55000),
(43, 'Totok Wajah', 'description 43', 'Other Treatment', 55000),
(44, 'Facial Gold Snail Whitening', 'description 44', 'Facial', 55000),
(45, 'Facial Oksigen Detox', 'description 45', 'Facial', 55000),
(46, 'Facial Oksigen Regular', 'description 46', 'Facial', 55000),
(47, 'Facial Oksigen Intensif', 'description 47', 'Facial', 55000),
(48, 'Facial Skin Glass (Include Masker Wet Paper)', 'description 48', 'Facial', 55000),
(49, 'Facial Scrubber', 'description 49', 'Facial', 55000),
(50, 'Facial Ice Globe Roller (Include Masker WetP)', 'description 50', 'Facial', 55000),
(51, 'Chemical Peeling', 'description 51', 'Chemical Peeling', 55000),
(52, 'Double Chemical Peeling (Whitening / Acne)', 'description 52', 'Chemical Peeling', 55000),
(53, 'Chemical Peeling Bibir (Include Masker Bibir)', 'description 53', 'Chemical Peeling', 55000),
(54, 'Chemical Peeling Ketiak (Include Masker WetP)', 'description 54', 'Chemical Peeling', 55000),
(55, 'Chemical Peeling Leher (Depan dan Belakang)', 'description 55', 'Chemical Peeling', 55000),
(56, 'Laser Bibir (Include Masker Bibir)', 'description 56', 'Laser', 55000),
(57, 'Laser Black Doll Ketiak', 'description 57', 'Laser', 55000),
(58, 'Laser Wajah', 'description 58', 'Laser', 55000),
(59, 'Kulit Wajah', 'description 59', 'Glowing Glass Skin', 55000),
(60, 'Kulit Ketiak', 'description 60', 'Glowing Glass Skin', 55000),
(61, 'Kulit Leher', 'description 61', 'Glowing Glass Skin', 55000),
(62, 'Kulit Bibir', 'description 62', 'Glowing Glass Skin', 55000),
(63, 'Paket Injeksi Vitamin C Collagen', 'description 63', 'Body Treatment', 55000),
(64, 'Paket Injeksi Whitening Premium', 'description 64', 'Body Treatment', 55000),
(65, 'Injeksi Vitamin C Collagen', 'description 65', 'Body Treatment', 55000),
(66, 'Injeksi Whitening Premium', 'description 66', 'Body Treatment', 55000),
(67, 'Hair SPA', 'description 67', 'Hair Treatment', 55000),
(68, 'Hair Mask', 'description 68', 'Hair Treatment', 55000),
(69, 'Hair Creambath', 'description 69', 'Hair Treatment', 55000),
(70, 'Cuci dan Vitamin Rambut', 'description 70', 'Hair Treatment', 55000),
(71, 'Biolifting / Radiofrekuensi', 'description 71', 'Other Treatment', 55000),
(72, 'Puffy Eyes (Biolifting)', 'description 72', 'Other Treatment', 55000),
(73, 'Mikrodermabrasi', 'description 73', 'Other Treatment', 55000),
(74, 'Mikrodermabrasi Kelopak Mata', 'description 74', 'Other Treatment', 55000),
(75, 'HIFU Include Masker PeelOff', 'description 75', 'Other Treatment', 55000),
(76, 'Paket HIFU (FULL)', 'description 76', 'Other Treatment', 55000),
(77, 'Nanoterapi / Microterapi Needle', 'description 77', 'Other Treatment', 55000),
(78, 'Cauterasi', 'description 78', 'Other Treatment', 55000),
(79, 'Skin Booster', 'description 79', 'Other Treatment', 55000),
(80, 'Aqua Peel / Mikro Oxybubble (Include Masker)', 'description 80', 'Other Treatment', 55000),
(81, 'BB Glow Skin', 'description 81', 'Other Treatment', 55000),
(82, 'Korean Black Doll (Laser Carbon)', 'description 82', 'Other Treatment', 55000),
(83, 'Paket Black Doll (FULL)', 'description 83', 'Other Treatment', 55000),
(84, 'Totok Wajah', 'description 84', 'Other Treatment', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telepon` varchar(13) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(62) NOT NULL,
  `level_user` enum('Admin','Pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `alamat`, `nomor_telepon`, `username`, `password`, `level_user`) VALUES
(1, 'Oktavia Lahumma', 'Ngujung', '089522167387', 'Oktavia', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(3, 'uitdhibtyb', '', '', 'trufusrft', '46d045ff5190f6ea93739da6c0aa19bc', 'Admin'),
(10, 'Dwi Susanti', 'Magetan', '089567234511', 'Dwi', '7b260a07ad497be1952529e53d8464b9', 'Admin'),
(11, 'Oktavia Lahumma T', 'Ngujung', '089522167389', 'Oktavia', 'c054eb15c3931c33dbfb525b0b73c13d', 'Admin'),
(12, 'Dwi Susanti', 'Magetan', '0893456781290', 'Susan', '202cb962ac59075b964b07152d234b70', 'Admin'),
(13, 'Octavia LT', 'Maospati', '085708079290', 'Octa', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
(14, 'Oktavia Lahumma', 'Gemantar', '029484759556', 'Lahumma', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(15, 'Dwi Susanti', 'Magetan', '0988400487448', 'Dwi', '202cb962ac59075b964b07152d234b70', ''),
(16, 'gyhuj', 'bykik', '0918763900381', 'aaaa', '81dc9bdb52d04dc20036dbd8313ed055', 'Pelanggan'),
(17, 'frufgtog', 'gnjj', '123456', 'bb', 'c20ad4d76fe97759aa27a0c99bff6710', 'Pelanggan'),
(18, 'bbb', 'btujij', '14567609', 'b', '25d55ad283aa400af464c76d713c07ad', 'Pelanggan'),
(19, 'Nananananan', 'cpcmorcr', '085708079290', 'Na', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(20, 'Oktavia Lahumma T', 'Ngujung', '085123458901', 'via', '81dc9bdb52d04dc20036dbd8313ed055', 'Pelanggan'),
(21, 'Oktavia Lahumma', 'Gemantar', '089567234511', 'aaaa', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(22, 'Oktavia Lahumma T', 'Ngujung', '0893456781290', 'tata', '81dc9bdb52d04dc20036dbd8313ed055', 'Pelanggan'),
(23, 'oktaa', 'fgthy', '098765', 'Okt', '25d55ad283aa400af464c76d713c07ad', 'Pelanggan'),
(24, 'Oktavia Lahumma T', 'Ngujung', '089708079290', 'Oktavia', '25d55ad283aa400af464c76d713c07ad', 'Pelanggan'),
(25, 'Oktavia LT', 'ngujung', '089708907647', 'Okta', '432f45b44c432414d2f97df0e5743818', 'Pelanggan'),
(26, 'Okta', 'Mpt', '0895271890126', 'Okta', '827ccb0eea8a706c4c34a16891f84e7b', 'Pelanggan'),
(27, '', '', '', '', 'e0323a9039add2978bf5b49550572c7c', 'Pelanggan'),
(28, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Pelanggan'),
(29, 'Oktaviaa', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Pelanggan'),
(30, 'Oktaa', 'Mgt', '098768155890', 'Okt', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(31, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Pelanggan'),
(32, 'Oktaaaa', 'Bks', '085708079290', 'Okt', 'c20ad4d76fe97759aa27a0c99bff6710', 'Pelanggan'),
(33, 'kmofvv', 'vnijv', '0983764020', 'wfvjvv', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(34, 'komp', 'kdon', '092793002803', 'sbi', '25d55ad283aa400af464c76d713c07ad', 'Pelanggan'),
(35, 'Oktaaaaaa', 'dfg', '123566', 'Okt', '202cb962ac59075b964b07152d234b70', 'Pelanggan'),
(36, 'okya', 'bh', '123455', 'vbt', 'd41d8cd98f00b204e9800998ecf8427e', 'Pelanggan'),
(37, 'MAKALAH Krisis Identitas nasional Generasi Z', 'vnijv', '0983764020', 'aaa', '152404f4e09df36d23bf1cf63fd0fe64', 'Pelanggan'),
(38, 'wahyu', 'vnijv', '0983764020', 'wahyu', '0db57bbd58756d028c70560f80f7ab26', 'Pelanggan'),
(39, 'qw', '12', '12', 'qw', '8ce87b8ec346ff4c80635f667d1592ae', 'Pelanggan'),
(40, 'Oktavia Lahumma T', 'Ngujung', '0856273899719', 'Okt', '25d55ad283aa400af464c76d713c07ad', 'Pelanggan'),
(41, 'fgtht', 'hj8', '084393', 'ff', '', 'Pelanggan'),
(42, 'Oktavia Lahuma ', 'Desa Ngujung RT 13/RW 05, Kec. Maospati, Kab. Magetan', '085708079290', 'Oktavia', '25d55ad283aa400af464c76d713c07ad', 'Pelanggan'),
(43, 'Indy Aulia Okta Rossana', 'Desa Gerih RT 08/RW 02, Kec. Gerih, Kab. Ngawi', '0897683451239', 'Indy', '25f9e794323b453885f5181f1b624d0b', 'Pelanggan'),
(44, 'Oktavia Lahuma T', 'Ngwi', '2457', 'Lahuma', 'fd68f9e514f70a73303c25e911058919', 'Pelanggan'),
(45, 'Octavia Lahumma', 'ngujung', '57689', 'Lahumma', '432f45b44c432414d2f97df0e5743818', 'Pelanggan'),
(46, 'bdkjv', 'vrrw', '1345', 'vfkv', '', 'Pelanggan'),
(47, 'chgcj', 'iui', '', 'bi', '', 'Pelanggan'),
(48, 'Oktavia Lahumma', 'fdh', '', 'Taug', '', 'Pelanggan'),
(49, 'Oktavia', 'vm', '0987', 'Okta', '', 'Admin'),
(50, 'Arief Darma Syahputra', 'mpt', '097648', 'Arif', '', 'Pelanggan'),
(51, 'Oktavia Lahumma Taufhani', 'Pesu, Maospati', '', 'Oktavia', '', 'Pelanggan'),
(52, 'Oktavia', 'Pesu', '', 'Okta', '', 'Pelanggan'),
(53, 'b', 'jalan jalan', '0123456789', 'b', '8068c76c7376bc08e2836ab26359d4a4', 'Admin'),
(54, 'c', 'jalan ditempat', '0123456789', 'c', '8068c76c7376bc08e2836ab26359d4a4', 'Pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

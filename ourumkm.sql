-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 02:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourumkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `type`, `email`, `password`, `lvl`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin123', 1),
(3, 'Adit', 'pembeli', 'adit@gmail.com', 'adit123', 2),
(7, 'dio', 'penjual', 'dea34@gmail.com', 'dio123', 2),
(8, 'a', 'penjual', 'a@gmail.com', 'a', 2),
(9, 'b', 'penjual', 'b@gmail.com', 'b', 2),
(10, 'c', 'penjual', 'c@gmail.com', 'c', 2),
(11, 'd', 'penjual', 'd@gmail.com', 'd', 2),
(12, 'e', 'penjual', 'e@gmail.com', 'e', 2),
(13, 'f', 'penjual', 'f@gmail.com', 'f', 2),
(14, 'g', 'penjual', 'g@gmail.com', 'g', 2),
(15, 'h', 'penjual', 'h@gmail.com', 'h', 2),
(16, 'i', 'penjual', 'i@gmail.com', 'i', 2),
(17, 'j', 'penjual', 'j@gmail.com', 'j', 2),
(18, 'k', 'penjual', 'k@gmail.com', 'k', 2),
(19, 'l', 'penjual', 'l@gmail.com', 'l', 2),
(23, 'hades', 'penjual', 'hades12@gmail.com', '1', 2),
(25, 'zeus', 'pembeli', 'zeus@gmail.com', '1', 2),
(26, 'poseidon', 'penjual', 'poseidon12@gmail.com', '1', 2),
(28, 'apollo', 'pembeli', 'apollo@gmail.com', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_makanan`
--

CREATE TABLE `data_makanan` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_makanan`
--

INSERT INTO `data_makanan` (`id`, `type`, `nama_produk`, `harga`, `gambar`) VALUES
(4, 'makanan', 'Ayam Geprek', '10000', '1702152696ayam geprek.jpg'),
(5, 'makanan', 'Basreng', '5000', '1702152963basreng.jpg'),
(6, 'makanan', 'Keripik', '7000', '1702152993keripik.jpg'),
(7, 'makanan', 'Kuping Gajah', '15000', '1702153053kupinggajah.jpg'),
(8, 'makanan', 'mochi', '9000', '1702153091mochi.jpg'),
(9, 'makanan', 'Risol', '2000', '1702153133risol.jpg'),
(11, 'makanan', 'lontong sate', '15000', '1702211780Lontong_Sate.jpg'),
(12, 'makanan', 'kebab', '20000', '1702214706Kebab.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_pakaian`
--

CREATE TABLE `data_pakaian` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pakaian`
--

INSERT INTO `data_pakaian` (`id`, `type`, `nama_produk`, `harga`, `gambar`) VALUES
(1, 'pakaian', 'Baju Koko', '100000', '1702153744bajukoko.jpg'),
(2, 'pakaian', 'Gamis', '150000', '1702153892gamis.jpg'),
(3, 'pakaian', 'Kemeja Wanita', '120000', '1702153926kemejawanita.jpg'),
(4, 'pakaian', 'Kerudung', '25000', '1702153963kerudung.jpg'),
(5, 'pakaian', 'pashmina', '50000', '1702153985pashmina.jpg'),
(6, 'pakaian', 'Sarung', '80000', '1702154012sarung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_user`
--

CREATE TABLE `keranjang_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang_user`
--

INSERT INTO `keranjang_user` (`id`, `user_id`, `nama_produk`, `harga`, `gambar`, `total`) VALUES
(14, 25, 'lontong sate', '15000', '../assets/makanan/1702211780Lontong_Sate.jpg', '15000'),
(16, 25, 'Baju Koko', '100000', '../assets/pakaian/1702153744bajukoko.jpg', '100000'),
(17, 28, 'kebab', '20000', '../assets/makanan/1702214706Kebab.jpg', '20000'),
(20, 28, 'Sarung', '80000', '../assets/pakaian/1702154012sarung.jpg', '80000');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `toko` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `toko`, `type`, `nama_produk`, `harga`, `status`) VALUES
(4, 'usada', 'usada45', 'makanan', 'Soto', '7000', 'Disetujui'),
(5, 'a', 'a', 'makanan', 'Ayam Geprek', '10000', 'Disetujui'),
(6, 'b', 'b', 'makanan', 'Basreng', '5000', 'Disetujui'),
(7, 'c', 'c', 'makanan', 'Keripik', '7000', 'Disetujui'),
(8, 'd', 'd', 'makanan', 'Kuping Gajah', '15000', 'Disetujui'),
(9, 'e', 'e', 'makanan', 'mochi', '9000', 'Disetujui'),
(10, 'f', 'f', 'makanan', 'Risol', '2000', 'Disetujui'),
(11, 'g', 'g', 'pakaian', 'Baju Koko', '100000', 'Disetujui'),
(12, 'h', 'h', 'pakaian', 'Gamis', '150000', 'Disetujui'),
(13, 'i', 'i', 'pakaian', 'Kemeja Wanita', '120000', 'Disetujui'),
(14, 'j', 'j', 'pakaian', 'Kerudung', '25000', 'Disetujui'),
(15, 'k', 'k', 'pakaian', 'pashmina', '50000', 'Disetujui'),
(16, 'l', 'l', 'pakaian', 'Sarung', '80000', 'Disetujui'),
(24, 'hades', 'hades12', 'makanan', 'kebab', '15000', 'Disetujui'),
(25, 'poseidon', 'poseidon23', 'makanan', 'kebab', '20000', 'Disetujui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_makanan`
--
ALTER TABLE `data_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pakaian`
--
ALTER TABLE `data_pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang_user`
--
ALTER TABLE `keranjang_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `data_makanan`
--
ALTER TABLE `data_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_pakaian`
--
ALTER TABLE `data_pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keranjang_user`
--
ALTER TABLE `keranjang_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang_user`
--
ALTER TABLE `keranjang_user`
  ADD CONSTRAINT `keranjang_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `akun` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

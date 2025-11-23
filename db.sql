-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2025 at 04:01 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_liburan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `role`) VALUES
(1, 'finn', '12345', 'User'),
(2, 'dewa', '12345', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int NOT NULL,
  `nama_destinasi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `lokasi`, `deskripsi`) VALUES
(201, 'Pantai Pink', 'Komodo National Park (Kabupaten Manggarai Barat, Flores / NTT)', 'Pasirnya berwarna pink karena campuran kerang merah.'),
(202, 'Pantai Kelor', 'Pulau Kelor, sekitar 30 menit dengan perahu dari Labuan Bajo.', 'Pasir putih, air jernih, cocok untuk snorkeling.'),
(203, 'Pantai Sebayur', 'Taman Nasional Komodo, Kecamatan Komodo, Manggarai Barat.', 'Pasir putih dan laut biru jernih — tempat bagus untuk snorkeling.'),
(204, 'Pulau Komodo', 'Kabupaten Manggarai Barat, NTT', 'Pulau terbesar di kawasan Taman Nasional Komodo. Dikenal sebagai habitat asli komodo, memiliki jalur trekking ke bukit savana, pantai berpasir merah muda (Pink Beach), serta panorama laut biru yang memanjakan mata.'),
(205, 'Pulau Rinca', 'Kabupaten Manggarai Barat, NTT', 'Pulau alternatif untuk melihat komodo dengan trek yang lebih pendek. Lanskapnya didominasi bukit savana, laut biru jernih, dan sering menjadi pilihan wisatawan yang ingin pengalaman melihat komodo dengan jalur lebih mudah.'),
(206, 'Pulau Padar', 'Taman Nasional Komodo, Manggarai Barat', 'Ikon fotografi Labuan Bajo yang terkenal dengan formasi tiga teluk berwarna berbeda. Trekking menuju puncaknya menawarkan salah satu pemandangan terbaik di Indonesia. Cocok untuk sunrise atau sunset.'),
(207, 'Pulau Kelor', 'Dekat Labuan Bajo, Manggarai Barat', 'Pulau kecil yang cantik dengan air laut jernih dan bukit kecil untuk trekking singkat. Waktu tempuh hanya sekitar 30 menit dari Labuan Bajo, cocok untuk trip setengah hari atau pembukaan perjalanan.'),
(208, 'Pulau Kanawa', 'Manggarai Barat, NTT', 'Surga snorkeling dengan terumbu karang yang terjaga dan ikan warna-warni. Pantainya tenang dan bersih, cocok untuk healing dan foto underwater.'),
(209, 'Se’i Daging Sapi', 'Kupang, Pulau Timor (NTT)', 'Daging sapi asap khas Timor yang dimasak perlahan menggunakan kayu kosambi. Aromanya harum, tekstur empuk, dan biasanya disajikan dengan sambal lu’at yang pedas dan segar. Menu paling wajib dicoba di NTT.'),
(210, 'Sambal Lu’at', 'Kupang & sekitarnya', 'Sambal khas Timor dengan bahan dasar cabai, jeruk nipis lokal, dan daun lu’at. Rasanya segar, pedas, dan punya aroma khas yang sulit ditiru.'),
(211, 'Jagung Bose', 'Pulau Timor (Kupang, Soe)', 'Makanan tradisional berupa jagung yang ditumbuk kasar lalu dimasak dengan santan. Teksturnya lembut dan sering dijadikan makanan pokok penduduk lokal.');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int NOT NULL,
  `nama_paket` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durasi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `deskripsi`, `durasi`, `harga`) VALUES
(101, 'Paket Pantai', 'Tour santai mengunjungi tiga pantai cantik di Labuan Bajo untuk menikmati pemandangan, snorkeling, dan spot foto terbaik.', '3 Hari', 600),
(102, 'Paket Menjelajah Pulau ', 'Petualangan eksplorasi pulau-pulau ikonik seperti Komodo, Rinca, Padar, Kanawa, dan Kelor dalam satu perjalanan lengkap.', '5 Hari', 700),
(103, 'Paket Kuliner', 'Mencicipi makanan khas NTT seperti Se’i Sapi, Sambal Luat, dan Jagung Bose dalam pengalaman kuliner tradisional.', '1 Hari', 200);

-- --------------------------------------------------------

--
-- Table structure for table `paket_destinasi`
--

CREATE TABLE `paket_destinasi` (
  `id` int NOT NULL,
  `id_paket` int NOT NULL,
  `id_destinasi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int NOT NULL,
  `nama_pelanggan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_paket` int NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `durasi` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_orang` int NOT NULL,
  `total_bayar` int NOT NULL,
  `status` enum('dikonfirmasi','dibatalkan','menunggu') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket_destinasi`
--
ALTER TABLE `paket_destinasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_destinasi` (`id_destinasi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_paket` (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `paket_destinasi`
--
ALTER TABLE `paket_destinasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket_destinasi`
--
ALTER TABLE `paket_destinasi`
  ADD CONSTRAINT `paket_destinasi_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paket_destinasi_ibfk_2` FOREIGN KEY (`id_destinasi`) REFERENCES `destinasi` (`id_destinasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

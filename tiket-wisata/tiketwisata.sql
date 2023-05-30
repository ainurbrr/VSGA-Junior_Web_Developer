-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 07:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `link_pict` longtext NOT NULL,
  `link_yt` text NOT NULL,
  `link_map` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id`, `nama_tempat`, `harga`, `deskripsi`, `link_pict`, `link_yt`, `link_map`) VALUES
(1, 'Hawai Waterpark', 160000, 'Hawai Waterpark memiliki luas 5 hektar yang berisi berbagai wahana air yang pastinya membuat kamu ceria. Memiliki 12 wahana air spektakuler yang dapat dinikmati oleh semua umur tanpa ada tambahan biaya lagi. dan juga berbagai macam pilihan makanan dan minuman tersaji di seluruh area food court dan drink court Hawai Waterpark. Pembelian menggunakan uang tunai dan debit untuk mempermudah dalam bertransaksi.', 'https://1.bp.blogspot.com/-e1pfSe25YGE/XT9LbhilddI/AAAAAAAAC18/7AZY2YijnMQYLm1RAlaRBKTDYLEkamBwQCLcBGAs/s1600/Jejak-Kenzie-hawai-waterpark-malang-02.jpg', 'https://www.youtube.com/embed/Y5YBA5ocN18', 'https://g.page/hawaiwaterpark?share'),
(2, 'Jatim Park', 160000, 'Jawa Timur dikenal memiliki banyak tempat wisata menakjubkan yang bisa dikunjungi pada saat akhir pekan apalagi liburan. Salah satunya Jatim Park 1 Batu Malang. Tempat rekreasi keluarga yang menawarkan berbagai wahana hiburan dan permainan menakjubkan bagi pengunjung.\r\n\r\nTerletak di lereng timur Gunung Panderman berketinggian 850 meter dari permukaan laut. Tak hanya itu, panorama indah dan hawa sejuk khas kota Batu juga dapat membuat pengunjung dapat melepas penat dan merasa rileks.', 'https://www.datawisata.com/wp-content/uploads/2019/07/foto-Jatim-Park-1-Malang-wisata_oke.jpg', 'https://www.youtube.com/embed/Py2iUow8k_k', 'https://goo.gl/maps/146eBLu2vQEfM3j47'),
(3, 'Batu Secret Zoo', 160000, 'Batu Secret Zoo merupakan tempat wisata dan kebun binatang modern yang terletak di Kota Batu, Jawa Timur. Batu Secret Zoo yang berada di tanah seluas 14 hektare tersebut merupakan bagian dari Jatim Park 2, selain Pohon Inn dan Museum Satwa. Beberapa koleksi hewan dari berbagai habitat yang sebagian besar berasal dari Asia dan Afrika dapat ditemukan di kebun binatang ini, antara lain singa putih, kijang afrika, burung macau, dan bermacam-macam reptil.', 'https://anekatempatwisata.com/wp-content/uploads/2020/05/1.jpg', 'https://www.youtube.com/embed/R3Tx7Zvmn3I', 'https://goo.gl/maps/uEyKH5hVYiWPyg8i6');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tempat_wisata` varchar(255) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(255) NOT NULL,
  `pengunjung_anak` int(255) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `total_bayar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_lengkap`, `no_identitas`, `no_hp`, `tempat_wisata`, `tanggal_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_bayar`) VALUES
(1, 'hellol', '78', '0878509959409', '', '2022-09-14', 8, 7, 160000, 1840000),
(2, 'Moh. Ainur Bahtiar Rohman', '554', '0878509959409', '', '2022-09-30', 3, 3, 160000, 720000),
(3, 'Moh. Ainur Bahtiar Rohmann', '8931793798279387', '0878509959409', '', '2022-09-22', 3, 4, 160000, 800000),
(4, 'Moh. Ainur Bahtiar Rohmann', '8931793798279387', '0878509959409', '', '2022-09-22', 3, 4, 160000, 800000),
(5, 'Moh. Ainur Bahtiar Rohman', '44223', '0878509959409', '', '2022-09-16', 5, 5, 160000, 1200000),
(6, 'Moh. Ainur Bahtiar Rohman', '44223', '0878509959409', '', '2022-09-16', 5, 5, 160000, 1200000),
(7, 'hellol', '8931793798279387', '0984839', '', '2022-09-30', 3, 6, 160000, 960000),
(8, 'jago', '1234567891010102', '087850995940', '', '2022-09-22', 2, 1, 160000, 400000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

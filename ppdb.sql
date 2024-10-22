-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 10:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','panitia','ks','cpd') NOT NULL DEFAULT 'cpd',
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'nonaktif',
  `verify` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `email`, `password`, `role`, `status`, `verify`, `token`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$8QisO4n7agbwIQ3cU0dTY.f6y1vU/rlDwJmtxIf5NGH4dtxDRssMC', 'admin', 'aktif', 1, '1bfa698a8d2bdbd12c9c40c107df7b3fa92356b1799db0c6d32b663f5c5d7582'),
(2, 'Panitia', 'panitia@gmail.com', '$2y$10$YaondQBDQ.dZY2ShjJICvuJWhoGQkH.rg.IboONh6Z5yyj8mUMGRK', 'panitia', 'aktif', 1, '1bfa698a8d2bdbd12c9c40c107df7b3fa92356b1799db0c6d32b663f5c5d7589'),
(3, 'Kepala Sekolah', 'ks@gmail.com', '$2y$10$qT5rT3Lt7GzsyN/Knvzcp.0yEAipQJFusbc9bph5GbYcRcX3Urlh2', 'ks', 'aktif', 1, '1bfa698a8d2bdbd12c9c40c107df7b3fa92356b1799db0c6d32b663f5c5d7580');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_beasiswa`
--

CREATE TABLE `data_beasiswa` (
  `id_data_beasiswa` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `jenis_beasiswa` varchar(25) DEFAULT NULL,
  `th_akhir` varchar(4) DEFAULT NULL,
  `status_terima` varchar(10) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id_data_diri` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tmp_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat_skk` text NOT NULL,
  `alamat_domisili` text NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL,
  `penerima_kps` enum('Ya','Tidak') NOT NULL,
  `no_kps` varchar(15) DEFAULT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `status_disabilitas` enum('Ya','Tidak') NOT NULL,
  `status_bmm` enum('Bisa Membaca','Bisa Menulis','Bisa Membaca dan Menulis','Belum Bisa Membaca atau Menulis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id_data_ortu` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(15) NOT NULL,
  `tmp_lahir_ibu` varchar(15) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(15) NOT NULL,
  `tmp_lahir_ayah` varchar(15) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `alamat` text NOT NULL,
  `penghasilan` enum('< Rp 500.000','Rp 500.000 - Rp 999.999','Rp 1.000.000 - Rp 1.999.999','Rp 2.000.000 - Rp 2.999.999','Rp 3.000.000 - Rp 3.999.999','> Rp 4.000.000') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_periodik`
--

CREATE TABLE `data_periodik` (
  `id_data_periodik` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `tinggi_badan` tinyint(3) NOT NULL,
  `berat_badan` tinyint(3) NOT NULL,
  `jarak_rumah` tinyint(3) NOT NULL,
  `waktu_tempuh` tinyint(3) NOT NULL,
  `jml_saudara` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id_data_prestasi` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `jenis_prestasi` varchar(25) DEFAULT NULL,
  `tingkat_prestasi` varchar(25) DEFAULT NULL,
  `nama_prestasi` varchar(25) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `penyelenggara` varchar(25) DEFAULT NULL,
  `peringkat` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` tinyint(1) NOT NULL,
  `mulai` date DEFAULT NULL,
  `selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `mulai`, `selesai`) VALUES
(1, '2024-05-26', '2024-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `paket` enum('PAKET A','PAKET B','PAKET C') NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `klasifikasi` enum('Pagi','Malam','Ponpes') NOT NULL,
  `tgl_daftar` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('Menunggu','Disetujui','Ditolak') NOT NULL DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `periode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `id_akun`, `kode`, `alamat`, `no_hp`, `periode`) VALUES
(1, 1, '12345678765432', 'Jl. Admin 01', '081234561234', '2024-2025'),
(2, 2, '76543456547789', 'Jl. Panitia Yoyo', '0898765678', '2024-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `data_beasiswa`
--
ALTER TABLE `data_beasiswa`
  ADD PRIMARY KEY (`id_data_beasiswa`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id_data_diri`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id_data_ortu`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `data_periodik`
--
ALTER TABLE `data_periodik`
  ADD PRIMARY KEY (`id_data_periodik`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`id_data_prestasi`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_beasiswa`
--
ALTER TABLE `data_beasiswa`
  MODIFY `id_data_beasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_data_diri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id_data_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_periodik`
--
ALTER TABLE `data_periodik`
  MODIFY `id_data_periodik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  MODIFY `id_data_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

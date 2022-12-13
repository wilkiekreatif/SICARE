-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Agu 2021 pada 13.58
-- Versi server: 10.3.30-MariaDB-log-cll-lve
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsintanh_karir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `applicants`
--

CREATE TABLE `applicants` (
  `id` int(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tlp` varchar(14) NOT NULL,
  `files` varchar(100) NOT NULL,
  `status` int(1) DEFAULT NULL COMMENT '0:  baru, 1: skipped, 2: approved, 3: Hidesuspended, 4: Hideapproved',
  `alasan` varchar(250) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT current_timestamp(),
  `tgl_update_data` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `applicants`
--

INSERT INTO `applicants` (`id`, `nik`, `bagian`, `nama`, `email`, `tlp`, `files`, `status`, `alasan`, `tgl_daftar`, `tgl_update_data`) VALUES
(1, '3205076905940004', 'Perawat', 'SITI NURMAYANI', 'sitinurmayani6@gmail.com', '0895326603451', 'files/Perawat-SITI NURMAYANI.pdf', 0, NULL, '2021-08-18 12:23:01', NULL),
(2, '3205076905940004', 'Perawat', 'SITI NURMAYANI', 'sitinurmayani6@gmail.com', '0895326603451', 'files/Perawat-SITI NURMAYANI.pdf', 0, NULL, '2021-08-18 12:26:34', NULL),
(3, '3205156703980001', 'Asisten_Apoteker', 'Dhea Silvia', 'dhea.silvia67@gmail.com', '081563737285', 'files/Asisten_Apoteker-Dhea Silvia.pdf', 0, NULL, '2021-08-19 07:20:45', NULL),
(4, '3205064501990001', 'Perawat', 'Suci Nur Anisa', 'suchinuranisarizqiani@gmail.com', '081949466944', 'files/Perawat-Suci Nur Anisa.pdf', 0, NULL, '2021-08-19 09:06:08', NULL),
(5, '3205076403970001', 'Perawat', 'FIRDHA HADIYANTI', 'firdha.hadiyanti@gmail.com', '082216821297', 'files/Perawat-FIRDHA HADIYANTI.pdf', 0, NULL, '2021-08-19 09:55:19', NULL),
(6, '3203050701990007', 'Perawat', 'Rafi Ramadhan', 'ramadhanraafi94@gmail.com', '081318488948', 'files/Perawat-Rafi Ramadhan.pdf', 0, NULL, '2021-08-19 10:21:38', NULL),
(7, '3210051207930021', 'Rekam_Medis/Pendaftaran', 'MAMAN SUTARMAN', 'maman.sutarman93@gmail.com', '082240345893', 'files/Rekam_Medis/Pendaftaran-MAMAN SUTARMAN.pdf', 0, NULL, '2021-08-19 12:00:57', NULL),
(8, '3205026605960001', 'Perawat', 'Mia Vauziah Lestary', 'miavauziahl339@gmail.com', '+6289661912556', 'files/Perawat-Mia Vauziah Lestary.pdf', 0, NULL, '2021-08-19 13:51:33', NULL),
(9, '3205010509970004', 'Staf', 'Stevan Pratama Septiandi', 'stevanpratama007@gmail.com', '088229293543', 'files/Staf-Stevan Pratama Septiandi.pdf', 0, NULL, '2021-08-19 15:08:54', NULL),
(10, '3205351710980001', 'Perawat', 'Rendi Gumilar', 'rendigumilar73@gmail.com', '085334048480', 'files/Perawat-Rendi Gumilar.pdf', 0, NULL, '2021-08-19 19:44:15', NULL),
(11, '3205016507990004', 'Perawat', 'HANI WINDIA RAHMI', 'haniwindia5@gmail.com', '085722802690', 'files/Perawat-HANI WINDIA RAHMI.pdf', 0, NULL, '2021-08-20 05:55:53', NULL),
(12, '3205355207980003', 'Bidan', 'Resti nuryanti ', 'restinuryanti127@gmail.com', '085314425376', 'files/Bidan-Resti nuryanti .pdf', 0, NULL, '2021-08-20 11:00:53', NULL),
(13, '3205045403990003', 'Perawat', 'REVINA MEGAWANTI', 'vynare1403@gmail.com', '085315484225', 'files/Perawat-REVINA MEGAWANTI.pdf', 0, NULL, '2021-08-21 19:38:01', NULL),
(14, '3205025005000003', 'Perawat', 'Risma Yanti', 'rismayanti7901@gmail.com', '085156278473', 'files/Perawat-Risma Yanti.pdf', 0, NULL, '2021-08-21 19:41:15', NULL),
(15, '3273184607960002', 'Perawat', 'Siti wulandari retno putri', 'Putri534@gmail.com', '085159957755', 'files/Perawat-Siti wulandari retno putri.pdf', 0, NULL, '2021-08-21 23:59:39', NULL),
(16, '3205160503010003', 'Office_Boy', 'RIZKI MAULANA', 'kikisances1933@gmail.com', '083879320107', 'files/Office_Boy-RIZKI MAULANA.pdf', 0, NULL, '2021-08-22 11:44:20', NULL),
(17, '3205160503010003', 'Office_Boy', 'RIZKI MAULANA', 'kikisances1933@gmail.com', '083879320107', 'files/Office_Boy-RIZKI MAULANA.pdf', 0, NULL, '2021-08-22 11:45:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`no`, `nama`) VALUES
(31, 'Dokter_Umum'),
(34, 'Perawat'),
(35, 'Apoteker'),
(37, 'Pramusaji'),
(38, 'Asisten_Apoteker'),
(39, 'Keuangan'),
(40, 'Analis_Kesehatan'),
(41, 'Radiografer'),
(44, 'Staf_Administrasi'),
(45, 'Staf _Marketing'),
(46, 'Digital_Marketing'),
(47, 'Staf_IT'),
(48, 'Kesehatan_Lingkungan'),
(49, 'Staf_Laundry'),
(50, 'Bidan'),
(51, 'Driver'),
(52, 'Staf_Pemeliharaan_Sarana_Prasarana'),
(53, 'Office_Boy'),
(54, 'Rekam_Medis/Pendaftaran'),
(55, 'akuntansi'),
(56, 'Ahli_Gizi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id`, `active`, `keterangan`) VALUES
(1, 1, 'Mohon maaf tidak ada lowongan kerja.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `status` varchar(60) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tipe` int(1) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `bagian` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `tipe`, `jabatan`, `bagian`) VALUES
('siti', '092162ade390e6a342f5c4872313a69e', 'Siti Nurhayati', 0, 'Staff', ''),
('wildan', 'af6b3aa8c3fcd651674359f500814679', 'Wildan Auliana,A.Md.Kom', 0, 'Staff IT', 'IT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `bagian`
--
ALTER TABLE `bagian`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

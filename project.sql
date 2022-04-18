-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jul 2018 pada 14.19
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_calon_mitra`
--

CREATE TABLE `tb_calon_mitra` (
  `id_calon` int(6) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `alamat_domisili` varchar(40) NOT NULL,
  `alamat_usaha` varchar(40) NOT NULL,
  `jenis_usaha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_calon_mitra`
--

INSERT INTO `tb_calon_mitra` (`id_calon`, `nama`, `id_kecamatan`, `alamat_domisili`, `alamat_usaha`, `jenis_usaha`) VALUES
(19, 'Guntoro', 5, 'Jl.Putri Rambut Selako No.01-286 Rt.905', 'Jl.Putri Rambut Selako No.01-286 Rt.905', 'Warung Gorengan'),
(20, 'Rohmawati', 7, 'Jl. Bambang Utoyo Lr.Pusaka Rt.38 No.55', 'Jl. RE.Martadinata Lr.Rukun', 'Jual Sarapan Pagi'),
(21, 'Sugiyanta', 8, 'Jl. Ali Gathmir Lr.Kekapung', 'Keliling', 'Es tung-tung'),
(22, 'Ahmad Kasim', 12, 'Jl. Ki Kemas Rindo', 'Jl. Ki Kemas Rindo', 'Membuat Kandang Ayam'),
(23, 'Rusmini', 14, 'Jl. Mgs HA Rahim No.963 Rt.18', 'Jl. Mgs HA Rahim No.963 Rt.18', 'Jual Dogan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `penerima` int(3) NOT NULL,
  `jumlah_dana` varchar(10) NOT NULL,
  `total_dana` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `kecamatan`, `penerima`, `jumlah_dana`, `total_dana`) VALUES
(1, 'Alang-Alang lebar', 24, '3000000', '72000000'),
(2, 'Bukit Kecil', 62, '3000000', '186000000'),
(3, 'Gandus', 30, '3000000', '90000000'),
(4, 'Ilir Barat I', 44, '3000000', '132000000'),
(5, 'Ilir Barat II', 48, '3000000', '144000000'),
(6, 'Ilir Timur I', 118, '3000000', '354000000'),
(7, 'Ilir Timur II', 52, '3000000', '156000000'),
(8, 'Ilir Timur III', 32, '3000000', '96000000'),
(9, 'Jakabaring', 22, '3000000', '66000000'),
(10, 'Kalidoni', 11, '3000000', '33000000'),
(11, 'Kemuning', 58, '3000000', '174000000'),
(12, 'Kertapati', 10, '3000000', '30000000'),
(13, 'Plaju', 179, '3000000', '537000000'),
(14, 'Sako', 41, '3000000', '123000000'),
(15, 'Seberang Ulu I', 46, '3000000', '138000000'),
(16, 'Seberang Ulu II', 145, '3000000', '435000000'),
(17, 'Sematang Borang', 15, '3000000', '45000000'),
(18, 'Sukarami', 60, '3000000', '180000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lolos`
--

CREATE TABLE `tb_lolos` (
  `id_lolos` int(6) NOT NULL,
  `id_calon` int(6) NOT NULL,
  `id_kecamatan` int(6) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `id_verifikasi` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lolos`
--

INSERT INTO `tb_lolos` (`id_lolos`, `id_calon`, `id_kecamatan`, `kelurahan`, `id_verifikasi`) VALUES
(6, 19, 5, 'Kemang Manis', 10),
(7, 20, 7, '2 Ilir', 12),
(8, 21, 8, '11 Ilir', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `id_mitra` int(6) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `id_kecamatan` int(6) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `alamat_domisili` varchar(40) NOT NULL,
  `alamat_usaha` varchar(40) NOT NULL,
  `jenis_usaha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mitra`
--

INSERT INTO `tb_mitra` (`id_mitra`, `nama`, `id_kecamatan`, `kelurahan`, `alamat_domisili`, `alamat_usaha`, `jenis_usaha`) VALUES
(8, 'Juli Saputra', 1, 'Srijaya', 'Jl. Srijaya Lr.Bersama No.1027', 'Jl. Srijaya Lr.Bersama No.1027', 'Jual Jus Buah'),
(9, 'Kidam Taufik', 2, '24 Ilir', 'Jl. Radial Lr.Cempaka No.1211', 'Jl. Radial Lr.Cempaka No.1211', 'Jual Bak Pau'),
(10, 'Rohmah', 4, 'Bukit Lama', 'Jl. Tanj.Rawo Putri Kembang Dadar', 'Jl. Tanj.Rawo Putri Kembang Dadar', 'Jual Roti Bakar'),
(11, 'Susilawati', 13, 'Plaju Darat', 'Tegal Binangun Lr.Rambutan', 'Tegal Binangun Lr.Rambutan', 'Pempek Model'),
(12, 'Kris Diana', 16, '14 Ulu', 'Jl. Naga Swidak No.32 Rt.30 Rw.03', 'Jl. Naga Swidak No.32 Rt.30 Rw.03', 'Jual Lauk Masak'),
(13, 'Mira', 16, '12 Ulu', 'Lr.Pedatuan Darat Rt.08 Rw.01', 'Lr.Pedatuan Darat Rt.08 Rw.01', 'Kemplang Rentengan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tidak_lolos`
--

CREATE TABLE `tb_tidak_lolos` (
  `id_tl` int(6) NOT NULL,
  `id_calon` int(6) NOT NULL,
  `id_kecamatan` int(6) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `id_verifikasi` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tidak_lolos`
--

INSERT INTO `tb_tidak_lolos` (`id_tl`, `id_calon`, `id_kecamatan`, `kelurahan`, `id_verifikasi`) VALUES
(3, 22, 12, 'Ogan Baru', 13),
(4, 23, 14, 'Sako', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin Koperasi dan UKM', 'adminukm', 'admin1', 'ukm'),
(2, 'Admin BPR', 'adminbpr', 'admin2', 'bpr'),
(3, 'Admin PEMKOT', 'adpemkot', 'admin3', 'pemkot'),
(4, 'kabid Pembd. UKM', 'kabid', 'admin4', 'kabid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_verifikasi`
--

CREATE TABLE `tb_verifikasi` (
  `id_verifikasi` int(6) NOT NULL,
  `id_calon` int(6) NOT NULL,
  `hasil_verifikasi` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_verifikasi`
--

INSERT INTO `tb_verifikasi` (`id_verifikasi`, `id_calon`, `hasil_verifikasi`, `tanggal`, `status`) VALUES
(10, 19, 'Syarat2 data yang disertakan :\r\n1. KTP\r\n2. KK\r\n3. Akte Nikah\r\n4. Rek. Listrik\r\n5. Rekomendasi Camat dan SKU Lurah\r\n6. Pas Foto Berwarna', '2018-06-27', 'Lolos'),
(12, 20, 'Syarat2 data yang disertakan : 1. KTP 2. KK 3. Akte Nikah 4. Rek. Listrik 5. Rekomendasi Camat dan SKU Lurah 6. Pas Foto Berwarna', '2018-06-27', 'Lolos'),
(13, 22, 'Syarat2 data yang disertakan : 1. KTP 2. KK 3. Akte Nikah 4. Rek. Listrik 5. Rekomendasi Camat dan SKU Lurah \r\nNb: tidak ada foto berwarna', '2018-06-27', 'Tidak Lolos'),
(14, 23, 'Syarat2 data yang disertakan : 1. KTP 2. KK 3. Akte Nikah  4. Rekomendasi Camat dan SKU Lurah Nb: tidak ada pas foto dan rek.listrik', '2018-06-27', 'Tidak Lolos'),
(15, 21, 'Syarat2 data yang disertakan : 1. KTP 2. KK 3. Akte Nikah 4. Rek. Listrik 5. Rekomendasi Camat dan SKU Lurah 6. Pas Foto Berwarna', '2018-06-27', 'Lolos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_calon_mitra`
--
ALTER TABLE `tb_calon_mitra`
  ADD PRIMARY KEY (`id_calon`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_lolos`
--
ALTER TABLE `tb_lolos`
  ADD PRIMARY KEY (`id_lolos`),
  ADD KEY `id_calon` (`id_calon`),
  ADD KEY `id_verifikasi` (`id_verifikasi`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`id_mitra`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_tidak_lolos`
--
ALTER TABLE `tb_tidak_lolos`
  ADD PRIMARY KEY (`id_tl`),
  ADD KEY `id_calon` (`id_calon`,`id_kecamatan`,`id_verifikasi`),
  ADD KEY `tb_tidak_lolos_ibfk_1` (`id_kecamatan`),
  ADD KEY `tb_tidak_lolos_ibfk_2` (`id_verifikasi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `id_calon` (`id_calon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_calon_mitra`
--
ALTER TABLE `tb_calon_mitra`
  MODIFY `id_calon` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_lolos`
--
ALTER TABLE `tb_lolos`
  MODIFY `id_lolos` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `id_mitra` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_tidak_lolos`
--
ALTER TABLE `tb_tidak_lolos`
  MODIFY `id_tl` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  MODIFY `id_verifikasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_calon_mitra`
--
ALTER TABLE `tb_calon_mitra`
  ADD CONSTRAINT `tb_calon_mitra_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_lolos`
--
ALTER TABLE `tb_lolos`
  ADD CONSTRAINT `tb_lolos_ibfk_4` FOREIGN KEY (`id_verifikasi`) REFERENCES `tb_verifikasi` (`id_verifikasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_lolos_ibfk_5` FOREIGN KEY (`id_calon`) REFERENCES `tb_calon_mitra` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD CONSTRAINT `tb_mitra_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id_kecamatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_tidak_lolos`
--
ALTER TABLE `tb_tidak_lolos`
  ADD CONSTRAINT `tb_tidak_lolos_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tb_kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tidak_lolos_ibfk_2` FOREIGN KEY (`id_verifikasi`) REFERENCES `tb_verifikasi` (`id_verifikasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tidak_lolos_ibfk_3` FOREIGN KEY (`id_calon`) REFERENCES `tb_calon_mitra` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_verifikasi`
--
ALTER TABLE `tb_verifikasi`
  ADD CONSTRAINT `tb_verifikasi_ibfk_1` FOREIGN KEY (`id_calon`) REFERENCES `tb_calon_mitra` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

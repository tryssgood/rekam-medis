-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2025 pada 03.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kode_dokter` int(50) NOT NULL,
  `kode_poli` int(50) DEFAULT NULL,
  `tanggal_kunjungan` datetime DEFAULT current_timestamp(),
  `kode_user` int(50) DEFAULT NULL,
  `nama_dokter` varchar(100) DEFAULT NULL,
  `sip` varchar(100) DEFAULT NULL,
  `ttl` datetime DEFAULT current_timestamp(),
  `no_tlp` int(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `tanggal_kunjungan` datetime DEFAULT current_timestamp(),
  `kode_passien` int(50) NOT NULL,
  `kode_poli` int(50) DEFAULT NULL,
  `jam_kunjungan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab`
--

CREATE TABLE `lab` (
  `kode_lab` int(50) NOT NULL,
  `no_rm` int(50) DEFAULT NULL,
  `hasil_lab` int(50) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab1`
--

CREATE TABLE `lab1` (
  `kode_lab` int(50) NOT NULL,
  `no_rm` int(50) DEFAULT NULL,
  `hasil_lab` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `kode_user` int(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kode_user`, `username`, `password`) VALUES
(0, 'yahaha', '123'),
(1, 'sahsba', 'busiabs7'),
(123, 'trysthann', '2344'),
(444, 'alif', 'zamzam'),
(1327, 'susaubs', 'sauuh789'),
(27912747, 'trysthan', 'jalkiso8906');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kode_obat` int(50) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `jumlah_obat` int(50) DEFAULT NULL,
  `ukuran` int(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `passien`
--

CREATE TABLE `passien` (
  `no_passien` int(50) NOT NULL,
  `nama_passien` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `ttl` datetime DEFAULT current_timestamp(),
  `usia` varchar(50) DEFAULT NULL,
  `no_ktp` int(50) DEFAULT NULL,
  `no_kk` int(50) DEFAULT NULL,
  `hub_keluarga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `kode_poli` int(50) NOT NULL,
  `nama_poli` varchar(100) DEFAULT NULL,
  `lantai` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `norm` int(50) DEFAULT NULL,
  `kode_tindakan` int(50) NOT NULL,
  `kode_obat` int(50) DEFAULT NULL,
  `kode_user` int(50) DEFAULT NULL,
  `no_passien` int(50) DEFAULT NULL,
  `diagnosa` varchar(100) DEFAULT NULL,
  `resep` varchar(100) DEFAULT NULL,
  `keluhan` varchar(100) DEFAULT NULL,
  `tgl_pemeriksaan` datetime DEFAULT current_timestamp(),
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekmed`
--

CREATE TABLE `rekmed` (
  `norm` int(50) NOT NULL,
  `kode_tindakan` int(50) DEFAULT NULL,
  `kode_obat` int(50) DEFAULT NULL,
  `kode_user` int(50) DEFAULT NULL,
  `no_passien` int(50) DEFAULT NULL,
  `diagnosa` varchar(50) DEFAULT NULL,
  `resep` varchar(50) DEFAULT NULL,
  `keluhan` varchar(50) DEFAULT NULL,
  `tgl_pemeriksaan` datetime DEFAULT current_timestamp(),
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `kode_tindakan` int(50) NOT NULL,
  `nama_tindakan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indeks untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`kode_passien`);

--
-- Indeks untuk tabel `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`kode_lab`);

--
-- Indeks untuk tabel `lab1`
--
ALTER TABLE `lab1`
  ADD PRIMARY KEY (`kode_lab`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indeks untuk tabel `passien`
--
ALTER TABLE `passien`
  ADD PRIMARY KEY (`no_passien`);

--
-- Indeks untuk tabel `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kode_poli`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`kode_tindakan`);

--
-- Indeks untuk tabel `rekmed`
--
ALTER TABLE `rekmed`
  ADD PRIMARY KEY (`norm`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`kode_tindakan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

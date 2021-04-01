-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2021 pada 00.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasirameyza`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `jamaah_id` int(11) NOT NULL,
  `jamaah_nama` varchar(255) DEFAULT NULL,
  `jamaah_no_passport` varchar(255) DEFAULT NULL,
  `jamaah_dateofissue` varchar(100) DEFAULT NULL,
  `jamaah_dateofexpire` varchar(100) DEFAULT NULL,
  `jamaah_tgl_pembuatan_passport` date DEFAULT NULL,
  `jamaah_tgl_berakhir_passport` date DEFAULT NULL,
  `jamaah_ttl` varchar(255) DEFAULT NULL,
  `jamaah_usia` varchar(255) DEFAULT NULL,
  `jamaah_jk` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `jamaah_alamat` varchar(255) DEFAULT NULL,
  `jamaah_pekerjaan` varchar(255) DEFAULT NULL,
  `jamaah_no_hp` varchar(255) DEFAULT NULL,
  `jamaah_ket_pembayaran` varchar(255) DEFAULT NULL,
  `jamaah_tgl_berangkat` datetime DEFAULT NULL,
  `jamaah_foto` varchar(255) DEFAULT NULL,
  `jamaah_foto_ktp` varchar(255) DEFAULT NULL,
  `jamaah_foto_kk` varchar(255) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`jamaah_id`, `jamaah_nama`, `jamaah_no_passport`, `jamaah_dateofissue`, `jamaah_dateofexpire`, `jamaah_tgl_pembuatan_passport`, `jamaah_tgl_berakhir_passport`, `jamaah_ttl`, `jamaah_usia`, `jamaah_jk`, `jamaah_alamat`, `jamaah_pekerjaan`, `jamaah_no_hp`, `jamaah_ket_pembayaran`, `jamaah_tgl_berangkat`, `jamaah_foto`, `jamaah_foto_ktp`, `jamaah_foto_kk`, `paket_id`) VALUES
(13, 'Fauzin', '12345678', NULL, NULL, NULL, NULL, 'KEDIRI, 17 Februari 1995', '26', 'Laki-laki', 'Desa sambirejo', NULL, '12345678', 'Lunas', '1995-02-17 00:00:00', 'privacy_policy2_18.png', 'privacy_policy2_19.png', 'privacy_policy2_20.png', 1),
(14, 'Fauzin2', '12345678', NULL, NULL, NULL, NULL, 'KEDIRI, 17 Februari 1995', '26', 'Laki-laki', 'Desa sambirejo', NULL, '12345678', 'Lunas', '1995-02-17 00:00:00', 'privacy_policy2_18.png', 'privacy_policy2_19.png', 'privacy_policy2_20.png', NULL),
(15, 'irhas', '123456', NULL, NULL, NULL, NULL, 'KEDIRI, 17-02-1997', '21', 'Laki-laki', 'Desa sambirejo', NULL, '12345678', 'Lunas', '1995-02-17 00:00:00', 'images.png', 'images_1.png', 'images_2.png', 1),
(21, 'irhas', '898', '21/12/2022', '31/1/2022', NULL, NULL, '31/01/1997', '24', 'Laki-laki', 'kediri', NULL, '234234', 'lunas', '0000-00-00 00:00:00', '73138171_1.jpg', '139.png', '15-kota-terbaik-di-dunia-untuk-dikunjungi-PEQBX5KzVu_1.jpg', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL,
  `kredit` varchar(255) DEFAULT NULL,
  `debit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_transaksi`, `keterangan`, `tgl_transaksi`, `kredit`, `debit`) VALUES
(8, '367196937', 'pembayaran angsuran Fauzin', '2021-03-21 00:00:00', NULL, '50000'),
(9, '58744182', 'Bensin', '2021-03-21 00:00:00', '10000', NULL),
(10, '718317823', 'pembayaran dp Fauzin', '2021-03-21 00:00:00', NULL, '5000000'),
(11, '622893630', 'Sewa BUS', '2021-03-21 00:00:00', '100000', NULL),
(12, '8453336360', 'pembayaran pelunasan irhas', '0000-00-00 00:00:00', NULL, '1000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `nominal` varchar(255) DEFAULT NULL,
  `tgl_transaksi` datetime DEFAULT NULL,
  `tipe_kas` enum('masuk','keluar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id`, `id_transaksi`, `keterangan`, `nominal`, `tgl_transaksi`, `tipe_kas`) VALUES
(7, '367196937', 'pembayaran angsuran Fauzin', '50000', '2021-03-01 00:00:00', 'masuk'),
(8, '58744182', 'Bensin', '10000', '2021-03-08 00:00:00', 'keluar'),
(9, '718317823', 'pembayaran dp Fauzin', '5000000', '2021-03-16 00:00:00', 'masuk'),
(10, '622893630', 'Sewa BUS', '100000', '2021-03-21 00:00:00', 'keluar'),
(11, '8453336360', 'pembayaran pelunasan irhas', '1000000', '0000-00-00 00:00:00', 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `paket_id` int(11) NOT NULL,
  `paket_nomer` varchar(255) DEFAULT NULL,
  `paket_nama` varchar(255) DEFAULT NULL,
  `paket_jumlah_hari` varchar(255) DEFAULT NULL,
  `paket_tanggal_berangkat` datetime DEFAULT NULL,
  `paket_tanggal_pulang` datetime DEFAULT NULL,
  `paket_harga` varchar(255) DEFAULT NULL,
  `paket_hotel_makah` varchar(255) DEFAULT NULL,
  `paket_hotel_madinah` varchar(255) DEFAULT NULL,
  `paket_pesawat` varchar(255) DEFAULT NULL,
  `paket_jenis` enum('umrah','haji khusus') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`paket_id`, `paket_nomer`, `paket_nama`, `paket_jumlah_hari`, `paket_tanggal_berangkat`, `paket_tanggal_pulang`, `paket_harga`, `paket_hotel_makah`, `paket_hotel_madinah`, `paket_pesawat`, `paket_jenis`) VALUES
(1, '1', 'Paket Umrah 12 Hari', '12', '2021-03-19 00:58:16', '2021-03-31 00:58:19', '10000000', 'Hotel yes', 'Hotel Berkah', 'LION AIR', 'umrah'),
(4, '1', '1', '1', '2021-03-25 02:03:00', '2021-03-11 02:03:00', '1', '1', '1', '1', 'haji khusus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `jamaah_id` int(11) DEFAULT NULL,
  `pembayaran_jumlah` varchar(255) DEFAULT NULL,
  `pembayaran_tanggal` datetime DEFAULT NULL,
  `pembayaran_keterangan` enum('dp','angsuran','pelunasan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`pembayaran_id`, `id_transaksi`, `jamaah_id`, `pembayaran_jumlah`, `pembayaran_tanggal`, `pembayaran_keterangan`) VALUES
(23, '367196937', 1, '50000', '2021-03-21 00:00:00', 'angsuran'),
(24, '718317823', 13, '5000000', '2021-03-21 00:00:00', 'dp'),
(25, '9504803376', 0, '1000000', '0000-00-00 00:00:00', 'dp'),
(26, '8453336360', 15, '1000000', '0000-00-00 00:00:00', 'pelunasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `pengeluaran_id` int(11) NOT NULL,
  `id_transaksi` varchar(255) DEFAULT NULL,
  `pengeluaran_keterangan` varchar(255) DEFAULT NULL,
  `pengeluaran_tanggal` datetime DEFAULT NULL,
  `pengeluaran_nominal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`pengeluaran_id`, `id_transaksi`, `pengeluaran_keterangan`, `pengeluaran_tanggal`, `pengeluaran_nominal`) VALUES
(1, '58744182', 'Bensin', '2021-03-21 00:00:00', '10000'),
(2, '622893630', 'Sewa BUS', '2021-03-21 00:00:00', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perlengkapan`
--

CREATE TABLE `perlengkapan` (
  `perlengkapan_id` int(11) NOT NULL,
  `perlengkapan_nama` varchar(255) DEFAULT NULL,
  `perlengkapan_stok` varchar(255) DEFAULT NULL,
  `perlengkapan_keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `perlengkapan`
--

INSERT INTO `perlengkapan` (`perlengkapan_id`, `perlengkapan_nama`, `perlengkapan_stok`, `perlengkapan_keterangan`) VALUES
(1, 'KOPER', '48', 'KOPER'),
(2, 'TAS CANGKLONG', '50', 'TAS CANGKLONG'),
(3, 'TAS KABIN', '50', 'TAS KABIN'),
(4, 'BANTAL LEHER', '50', 'BANTAL LEHER'),
(5, 'KAIN BATIK', '50', 'KAIN BATIK'),
(6, 'SYAL', '50', 'SYAL'),
(7, 'GAMIS PUTIH', '50', 'GAMIS PUTIH'),
(8, 'JILBAB 2 BUAH', '50', 'JILBAB 2 BUAH'),
(9, 'MUKENA', '50', 'MUKENA'),
(10, 'BUKU DOA', '50', 'BUKU DOA'),
(11, 'KAOS', '50', 'KAOS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perlengkapan_jamaah`
--

CREATE TABLE `perlengkapan_jamaah` (
  `perlengkapan_jamaah_id` int(11) NOT NULL,
  `jamaah_id` int(11) DEFAULT NULL,
  `perlengkapan_id` int(11) DEFAULT NULL,
  `perlengkapan_jamaah_jumlah_diambil` int(255) DEFAULT NULL,
  `perlengkapan_jamaah_tgl_diambil` datetime DEFAULT NULL,
  `perlengkapan_jamaah_jumlah_kembali` int(255) DEFAULT NULL,
  `perlengkapan_jamaah_tgl_kembali` datetime DEFAULT NULL,
  `perlengkapan_jamaah_status` enum('cek','uncek') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `perlengkapan_jamaah`
--

INSERT INTO `perlengkapan_jamaah` (`perlengkapan_jamaah_id`, `jamaah_id`, `perlengkapan_id`, `perlengkapan_jamaah_jumlah_diambil`, `perlengkapan_jamaah_tgl_diambil`, `perlengkapan_jamaah_jumlah_kembali`, `perlengkapan_jamaah_tgl_kembali`, `perlengkapan_jamaah_status`) VALUES
(90, 13, 1, 3, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 'cek'),
(91, 13, 2, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 'cek'),
(92, 13, 3, NULL, NULL, NULL, NULL, 'cek'),
(93, 13, 4, NULL, NULL, NULL, NULL, 'cek'),
(94, 13, 5, NULL, NULL, NULL, NULL, 'cek'),
(95, 13, 6, NULL, NULL, NULL, NULL, 'uncek'),
(96, 13, 7, NULL, NULL, NULL, NULL, 'uncek'),
(97, 13, 8, NULL, NULL, NULL, NULL, 'uncek'),
(98, 13, 9, NULL, NULL, NULL, NULL, 'uncek'),
(99, 13, 10, NULL, NULL, NULL, NULL, 'uncek'),
(100, 13, 11, NULL, NULL, NULL, NULL, 'uncek'),
(107, 15, 1, NULL, NULL, NULL, NULL, 'cek'),
(108, 15, 2, NULL, NULL, NULL, NULL, 'cek'),
(109, 15, 3, NULL, NULL, NULL, NULL, 'cek'),
(110, 15, 4, NULL, NULL, NULL, NULL, 'cek'),
(111, 15, 5, NULL, NULL, NULL, NULL, 'cek'),
(112, 15, 6, NULL, NULL, NULL, NULL, 'cek'),
(113, 15, 7, NULL, NULL, NULL, NULL, 'cek'),
(114, 15, 8, NULL, NULL, NULL, NULL, 'cek'),
(115, 15, 9, NULL, NULL, NULL, NULL, 'cek'),
(116, 15, 10, NULL, NULL, NULL, NULL, 'cek'),
(117, 15, 11, NULL, NULL, NULL, NULL, 'cek'),
(173, 21, 1, NULL, NULL, NULL, NULL, 'uncek'),
(174, 21, 2, NULL, NULL, NULL, NULL, 'uncek'),
(175, 21, 3, NULL, NULL, NULL, NULL, 'uncek'),
(176, 21, 4, NULL, NULL, NULL, NULL, 'uncek'),
(177, 21, 5, NULL, NULL, NULL, NULL, 'uncek'),
(178, 21, 6, NULL, NULL, NULL, NULL, 'uncek'),
(179, 21, 7, NULL, NULL, NULL, NULL, 'uncek'),
(180, 21, 8, NULL, NULL, NULL, NULL, 'uncek'),
(181, 21, 9, NULL, NULL, NULL, NULL, 'uncek'),
(182, 21, 10, NULL, NULL, NULL, NULL, 'uncek'),
(183, 21, 11, NULL, NULL, NULL, NULL, 'uncek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`) VALUES
(4, 'admin1', 'admin1', 'admin1@gmail.com', '$2y$10$qh/DYLhwIvxzQ8KU4.unsuW4QYHsnoAOXNAr5f1OPCdCjbE150MAa'),
(5, 'admin2', 'admin2', 'admin2@gmail.com', '$2y$10$C.UCL6xxDguS3zi2ihQk2eLCQCJP9rYR7f58YAvha2vLiUgRSz3tm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`jamaah_id`) USING BTREE;

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`) USING BTREE;

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`paket_id`) USING BTREE;

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`) USING BTREE;

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`pengeluaran_id`) USING BTREE;

--
-- Indeks untuk tabel `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD PRIMARY KEY (`perlengkapan_id`) USING BTREE;

--
-- Indeks untuk tabel `perlengkapan_jamaah`
--
ALTER TABLE `perlengkapan_jamaah`
  ADD PRIMARY KEY (`perlengkapan_jamaah_id`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `jamaah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `pengeluaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perlengkapan`
--
ALTER TABLE `perlengkapan`
  MODIFY `perlengkapan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `perlengkapan_jamaah`
--
ALTER TABLE `perlengkapan_jamaah`
  MODIFY `perlengkapan_jamaah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL
 Source Server Type    : MySQL
 Source Server Version : 100416
 Source Host           : localhost:3306
 Source Schema         : aplikasirameyza

 Target Server Type    : MySQL
 Target Server Version : 100416
 File Encoding         : 65001

 Date: 28/04/2021 03:45:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jamaah
-- ----------------------------
DROP TABLE IF EXISTS `jamaah`;
CREATE TABLE `jamaah`  (
  `jamaah_id` int(11) NOT NULL AUTO_INCREMENT,
  `jamaah_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_no_passport` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_dateofissue` date NULL DEFAULT NULL,
  `jamaah_dateofexpire` date NULL DEFAULT NULL,
  `jamaah_jenis_identitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_no_identitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_kewarganegaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_tanggal_lahir` date NULL DEFAULT NULL,
  `jamaah_usia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_jk` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_desa_kel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_kota_kab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_ket_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_rencana_berangkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_tgl_berangkat` date NULL DEFAULT NULL,
  `jamaah_haji` enum('ya','tidak') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_foto_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_foto_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_foto_bpih` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_foto_spph` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`jamaah_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jamaah
-- ----------------------------
INSERT INTO `jamaah` VALUES (13, 'Fauzin', '12345678', '2021-04-05', '2021-04-05', NULL, NULL, NULL, 'KEDIRI', '2021-04-28', '26', 'Laki-laki', 'Desa sambirejo', NULL, NULL, NULL, NULL, '12345678', 'Lunas', NULL, '1995-02-17', 'ya', 'privacy_policy2_18.png', 'privacy_policy2_19.png', 'privacy_policy2_20.png', '', NULL, 8);
INSERT INTO `jamaah` VALUES (14, 'Fauzin2', '12345678', '2021-04-05', '2021-04-05', NULL, NULL, NULL, 'KEDIRI', '2021-04-28', '26', 'Laki-laki', 'Desa sambirejo', NULL, NULL, NULL, NULL, '12345678', 'Lunas', NULL, '1995-02-17', 'tidak', 'privacy_policy2_18.png', 'privacy_policy2_19.png', 'privacy_policy2_20.png', NULL, NULL, 11);
INSERT INTO `jamaah` VALUES (21, 'irhas', '898', '2021-04-05', '2021-04-05', NULL, NULL, NULL, NULL, '2021-04-28', '24', 'Laki-laki', 'kediri', NULL, NULL, NULL, NULL, '234234', 'lunas', NULL, '0000-00-00', NULL, '73138171_1.jpg', '139.png', '15-kota-terbaik-di-dunia-untuk-dikunjungi-PEQBX5KzVu_1.jpg', NULL, NULL, 4);
INSERT INTO `jamaah` VALUES (23, 'Rony', '123456789', '2021-04-05', '2021-04-05', NULL, NULL, NULL, 'KEDIRI', '2021-04-28', '26', 'Laki-laki', 'Nganjuk', NULL, NULL, NULL, NULL, '0812345677', 'Lunas', NULL, '2021-04-14', NULL, 'privacy_policy2_24.png', 'privacy_policy2_25.png', 'privacy_policy2_26.png', NULL, NULL, 6);
INSERT INTO `jamaah` VALUES (43, '', '', '2021-04-05', '2021-04-06', NULL, NULL, NULL, 'KEDIRI', '2021-04-28', '', 'Laki-laki', '', NULL, NULL, NULL, NULL, '', '', NULL, '2021-04-05', NULL, '', '', '', NULL, NULL, 9);
INSERT INTO `jamaah` VALUES (46, 'AHMAD BAHRONI ADNAN', 'B 123445', '2021-10-04', '2026-10-04', 'KTP', '123456', '', 'NGANJUK', '1995-04-28', '26', 'Laki-laki', 'JL.MUSI NO 41.BEGADUNG NGANJUK', '', '', '', '', '085736925657', 'UTANG', NULL, '2021-10-10', NULL, 'Capture.PNG', 'Capture_1.PNG', 'Capture_2.PNG', NULL, NULL, 12);
INSERT INTO `jamaah` VALUES (47, 'DEWI NUR KUMALA', 'B 123454', '2021-04-15', '2026-04-15', '', NULL, '', 'KEDIRI', '2021-04-28', '24', 'Perempuan', 'JL.MUSI NO 41.BEGADUNG NGANJUK', '', '', '', '', '085736925657', 'LUNAS', NULL, '2021-04-15', NULL, 'privacy_policy2_33.png', 'privacy_policy2_34.png', 'privacy_policy2_35.png', NULL, NULL, 12);

-- ----------------------------
-- Table structure for jurnal
-- ----------------------------
DROP TABLE IF EXISTS `jurnal`;
CREATE TABLE `jurnal`  (
  `id_jurnal` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `kredit` int(255) NULL DEFAULT NULL,
  `debit` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_jurnal`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jurnal
-- ----------------------------
INSERT INTO `jurnal` VALUES (8, '367196937', 'pembayaran angsuran Fauzin', '2021-03-21 00:00:00', NULL, 50000);
INSERT INTO `jurnal` VALUES (9, '58744182', 'Bensin', '2021-03-21 00:00:00', 10000, NULL);
INSERT INTO `jurnal` VALUES (10, '718317823', 'pembayaran dp Fauzin', '2021-03-21 00:00:00', NULL, 5000000);
INSERT INTO `jurnal` VALUES (11, '622893630', 'Sewa BUS', '2021-03-21 00:00:00', 100000, NULL);
INSERT INTO `jurnal` VALUES (12, '8453336360', 'pembayaran pelunasan irhas', '0000-00-00 00:00:00', NULL, 1000000);
INSERT INTO `jurnal` VALUES (13, '859798420', 'pembayaran pelunasan Rony', '2021-04-15 00:00:00', NULL, 6000000);
INSERT INTO `jurnal` VALUES (14, '6212424234', 'Bensin', '2021-04-14 00:00:00', 100000, NULL);

-- ----------------------------
-- Table structure for kas
-- ----------------------------
DROP TABLE IF EXISTS `kas`;
CREATE TABLE `kas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nominal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `tipe_kas` enum('masuk','keluar') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kas
-- ----------------------------
INSERT INTO `kas` VALUES (7, '367196937', 'pembayaran angsuran Fauzin', '50000', '2021-03-01 00:00:00', 'masuk');
INSERT INTO `kas` VALUES (8, '58744182', 'Bensin', '10000', '2021-03-08 00:00:00', 'keluar');
INSERT INTO `kas` VALUES (9, '718317823', 'pembayaran dp Fauzin', '5000000', '2021-03-16 00:00:00', 'masuk');
INSERT INTO `kas` VALUES (10, '622893630', 'Sewa BUS', '100000', '2021-03-21 00:00:00', 'keluar');
INSERT INTO `kas` VALUES (11, '8453336360', 'pembayaran pelunasan irhas', '1000000', '0000-00-00 00:00:00', 'masuk');
INSERT INTO `kas` VALUES (12, '859798420', 'pembayaran pelunasan Rony', '6000000', '2021-04-15 00:00:00', 'masuk');
INSERT INTO `kas` VALUES (13, '6212424234', 'Bensin', '100000', '2021-04-14 00:00:00', 'keluar');

-- ----------------------------
-- Table structure for paket
-- ----------------------------
DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket`  (
  `paket_id` int(11) NOT NULL AUTO_INCREMENT,
  `paket_nomer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_jumlah_hari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_tanggal_berangkat` date NULL DEFAULT NULL,
  `paket_tanggal_pulang` date NULL DEFAULT NULL,
  `paket_harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_hotel_makah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_hotel_madinah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_pesawat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_jenis` enum('umrah','haji khusus') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`paket_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paket
-- ----------------------------
INSERT INTO `paket` VALUES (8, '2', 'Paket Haji Khusus 14 Hari', '14', '2021-04-14', '2021-04-28', '10000000', 'Hotel Makah', 'Hotel madinah', 'Garuda', 'haji khusus');
INSERT INTO `paket` VALUES (11, 'a', 'a', 'a', '2021-04-01', '2021-04-01', '100000', 'Hotel Berkah', 'Hotel Berkah', 'Garuda', 'haji khusus');
INSERT INTO `paket` VALUES (12, '2021', 'PAKET UMROH PERDANA 2021', '13 HARI', '2021-12-10', '2021-02-10', '25.600.000', 'LE MERIDIEN AJYAD', 'NOZOL ROYAL INN', 'SAUDI AIR LINE', 'umrah');
INSERT INTO `paket` VALUES (13, '2021', 'PAKET UMROH RAMADHAN APRIL', '13 HARI', '2021-04-12', '2021-04-28', '35.500.000', 'ZAM ZAM TOWER', 'MAKKAREM PLAZA', 'SAUDY AIRLINES', 'umrah');
INSERT INTO `paket` VALUES (14, '2021', 'PAKET UMROH AKHIR RAMADHAN 2021', '15 HARI', '2021-04-28', '2021-05-08', '45.000.000', 'ANJUM HOTEL', 'MADINAH AL PLAZA', 'GARUDA INDONESIA', 'umrah');

-- ----------------------------
-- Table structure for pemasukan
-- ----------------------------
DROP TABLE IF EXISTS `pemasukan`;
CREATE TABLE `pemasukan`  (
  `pemasukan_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pemasukan_keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pemasukan_tanggal` datetime(0) NULL DEFAULT NULL,
  `pemasukan_nominal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pemasukan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pemasukan
-- ----------------------------
INSERT INTO `pemasukan` VALUES (1, '58744182', 'terima pinjaman dari rameyza', '2021-03-21 00:00:00', '10000');
INSERT INTO `pemasukan` VALUES (2, '622893630', 'terima h badal a/n habibah ehwan mustopa', '2021-03-21 00:00:00', '100000');
INSERT INTO `pemasukan` VALUES (3, '6212424234', 'terima dari jamaah beli kopyah', '2021-04-14 00:00:00', '100000');

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran`  (
  `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_id` int(11) NULL DEFAULT NULL,
  `pembayaran_jumlah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembayaran_tanggal` datetime(0) NULL DEFAULT NULL,
  `pembayaran_keterangan` enum('dp','angsuran','pelunasan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pembayaran_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
INSERT INTO `pembayaran` VALUES (23, '367196937', 1, '50000', '2021-03-21 00:00:00', 'angsuran');
INSERT INTO `pembayaran` VALUES (24, '718317823', 13, '5000000', '2021-03-21 00:00:00', 'dp');
INSERT INTO `pembayaran` VALUES (25, '9504803376', 0, '1000000', '0000-00-00 00:00:00', 'dp');
INSERT INTO `pembayaran` VALUES (26, '8453336360', 15, '1000000', '0000-00-00 00:00:00', 'pelunasan');
INSERT INTO `pembayaran` VALUES (27, '859798420', 23, '6000000', '2021-04-15 00:00:00', 'pelunasan');

-- ----------------------------
-- Table structure for pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `pengeluaran`;
CREATE TABLE `pengeluaran`  (
  `pengeluaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pengeluaran_keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pengeluaran_tanggal` datetime(0) NULL DEFAULT NULL,
  `pengeluaran_nominal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pengeluaran_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengeluaran
-- ----------------------------
INSERT INTO `pengeluaran` VALUES (1, '58744182', 'Bensin', '2021-03-21 00:00:00', '10000');
INSERT INTO `pengeluaran` VALUES (2, '622893630', 'Sewa BUS', '2021-03-21 00:00:00', '100000');
INSERT INTO `pengeluaran` VALUES (3, '6212424234', 'Bensin', '2021-04-14 00:00:00', '100000');

-- ----------------------------
-- Table structure for perlengkapan
-- ----------------------------
DROP TABLE IF EXISTS `perlengkapan`;
CREATE TABLE `perlengkapan`  (
  `perlengkapan_id` int(11) NOT NULL AUTO_INCREMENT,
  `perlengkapan_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `perlengkapan_stok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `perlengkapan_keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`perlengkapan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perlengkapan
-- ----------------------------
INSERT INTO `perlengkapan` VALUES (1, 'KOPER', '45', 'KOPER');
INSERT INTO `perlengkapan` VALUES (2, 'TAS CANGKLONG', '51', 'TAS CANGKLONG');
INSERT INTO `perlengkapan` VALUES (3, 'TAS KABIN', '50', 'TAS KABIN');
INSERT INTO `perlengkapan` VALUES (4, 'BANTAL LEHER', '49', 'BANTAL LEHER');
INSERT INTO `perlengkapan` VALUES (5, 'KAIN BATIK', '50', 'KAIN BATIK');
INSERT INTO `perlengkapan` VALUES (6, 'SYAL', '50', 'SYAL');
INSERT INTO `perlengkapan` VALUES (7, 'GAMIS PUTIH', '50', 'GAMIS PUTIH');
INSERT INTO `perlengkapan` VALUES (8, 'JILBAB 2 BUAH', '50', 'JILBAB 2 BUAH');
INSERT INTO `perlengkapan` VALUES (9, 'MUKENA', '50', 'MUKENA');
INSERT INTO `perlengkapan` VALUES (10, 'BUKU DOA', '50', 'BUKU DOA');
INSERT INTO `perlengkapan` VALUES (11, 'KAOS', '50', 'KAOS');

-- ----------------------------
-- Table structure for perlengkapan_jamaah
-- ----------------------------
DROP TABLE IF EXISTS `perlengkapan_jamaah`;
CREATE TABLE `perlengkapan_jamaah`  (
  `perlengkapan_jamaah_id` int(11) NOT NULL AUTO_INCREMENT,
  `jamaah_id` int(11) NULL DEFAULT NULL,
  `perlengkapan_id` int(11) NULL DEFAULT NULL,
  `perlengkapan_jamaah_jumlah_diambil` int(255) NULL DEFAULT NULL,
  `perlengkapan_jamaah_tgl_diambil` datetime(0) NULL DEFAULT NULL,
  `perlengkapan_jamaah_jumlah_kembali` int(255) NULL DEFAULT NULL,
  `perlengkapan_jamaah_tgl_kembali` datetime(0) NULL DEFAULT NULL,
  `perlengkapan_jamaah_status` enum('cek','uncek') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`perlengkapan_jamaah_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 470 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perlengkapan_jamaah
-- ----------------------------
INSERT INTO `perlengkapan_jamaah` VALUES (90, 13, 1, 0, '2021-04-14 14:00:03', 0, '2021-04-14 14:00:03', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (91, 13, 2, 0, '2021-04-10 06:51:06', 1, '0000-00-00 00:00:00', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (92, 13, 3, 0, '2021-04-14 13:38:15', 0, '2021-04-14 13:38:15', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (93, 13, 4, 0, '2021-04-14 13:40:57', 0, '2021-04-14 13:40:57', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (94, 13, 5, 0, '2021-04-14 13:40:52', 0, '2021-04-14 13:40:52', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (95, 13, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (96, 13, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (97, 13, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (98, 13, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (99, 13, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (100, 13, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (173, 21, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (174, 21, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (175, 21, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (176, 21, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (177, 21, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (178, 21, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (179, 21, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (180, 21, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (181, 21, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (182, 21, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (183, 21, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (195, 23, 1, 1, '2021-04-14 10:04:00', 1, '2021-04-15 10:04:00', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (196, 23, 2, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (197, 23, 3, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (198, 23, 4, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (199, 23, 5, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (200, 23, 6, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (201, 23, 7, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (202, 23, 8, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (203, 23, 9, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (204, 23, 10, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (205, 23, 11, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (228, 26, 1, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (229, 26, 2, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (230, 26, 3, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (231, 26, 4, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (232, 26, 5, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (233, 26, 6, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (234, 26, 7, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (235, 26, 8, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (236, 26, 9, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (237, 26, 10, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (238, 26, 11, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (338, 36, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (339, 36, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (340, 36, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (341, 36, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (342, 36, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (343, 36, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (344, 36, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (345, 36, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (346, 36, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (347, 36, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (348, 36, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (349, 37, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (350, 37, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (351, 37, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (352, 37, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (353, 37, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (354, 37, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (355, 37, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (356, 37, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (357, 37, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (358, 37, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (359, 37, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (360, 38, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (361, 38, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (362, 38, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (363, 38, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (364, 38, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (365, 38, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (366, 38, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (367, 38, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (368, 38, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (369, 38, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (370, 38, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (371, 39, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (372, 39, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (373, 39, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (374, 39, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (375, 39, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (376, 39, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (377, 39, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (378, 39, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (379, 39, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (380, 39, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (381, 39, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (382, 40, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (383, 40, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (384, 40, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (385, 40, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (386, 40, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (387, 40, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (388, 40, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (389, 40, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (390, 40, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (391, 40, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (392, 40, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (393, 41, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (394, 41, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (395, 41, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (396, 41, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (397, 41, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (398, 41, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (399, 41, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (400, 41, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (401, 41, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (402, 41, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (403, 41, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (404, 42, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (405, 42, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (406, 42, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (407, 42, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (408, 42, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (409, 42, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (410, 42, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (411, 42, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (412, 42, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (413, 42, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (414, 42, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (415, 43, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (416, 43, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (417, 43, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (418, 43, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (419, 43, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (420, 43, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (421, 43, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (422, 43, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (423, 43, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (424, 43, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (425, 43, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (426, 44, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (427, 44, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (428, 44, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (429, 44, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (430, 44, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (431, 44, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (432, 44, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (433, 44, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (434, 44, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (435, 44, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (436, 44, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (437, 45, 1, 6, '2021-04-01 01:04:00', NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (438, 45, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (439, 45, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (440, 45, 4, 1, '0000-00-00 00:00:00', NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (441, 45, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (442, 45, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (443, 45, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (444, 45, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (445, 45, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (446, 45, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (447, 45, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (448, 46, 1, 0, '2021-04-25 08:28:55', 0, '2021-04-25 08:28:55', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (449, 46, 2, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (450, 46, 3, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (451, 46, 4, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (452, 46, 5, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (453, 46, 6, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (454, 46, 7, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (455, 46, 8, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (456, 46, 9, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (457, 46, 10, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (458, 46, 11, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (459, 47, 1, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (460, 47, 2, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (461, 47, 3, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (462, 47, 4, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (463, 47, 5, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (464, 47, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (465, 47, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (466, 47, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (467, 47, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (468, 47, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (469, 47, 11, NULL, NULL, NULL, NULL, 'uncek');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (4, 'admin1', 'admin1', 'admin1@gmail.com', '$2y$10$qh/DYLhwIvxzQ8KU4.unsuW4QYHsnoAOXNAr5f1OPCdCjbE150MAa');
INSERT INTO `users` VALUES (5, 'admin2', 'admin2', 'admin2@gmail.com', '$2y$10$C.UCL6xxDguS3zi2ihQk2eLCQCJP9rYR7f58YAvha2vLiUgRSz3tm');

SET FOREIGN_KEY_CHECKS = 1;

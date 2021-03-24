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

 Date: 24/03/2021 22:37:54
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
  `jamaah_ttl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_usia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_ket_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_tgl_berangkat` datetime(0) NULL DEFAULT NULL,
  `jamaah_foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_foto_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jamaah_foto_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`jamaah_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jamaah
-- ----------------------------
INSERT INTO `jamaah` VALUES (12, '1', '1', '1', '1', '1', '1', '1', '0000-00-00 00:00:00', 'image-3042333_1280-1_21.png', 'image-3042333_1280-1_22.png', 'image-3042333_1280-1_23.png', 4);
INSERT INTO `jamaah` VALUES (13, 'Fauzin', '12345678', '1995-02-17', '26', 'Desa sambirejo', '12345678', 'Lunas', '1995-02-17 00:00:00', 'privacy_policy2_18.png', 'privacy_policy2_19.png', 'privacy_policy2_20.png', 1);

-- ----------------------------
-- Table structure for jurnal
-- ----------------------------
DROP TABLE IF EXISTS `jurnal`;
CREATE TABLE `jurnal`  (
  `id_jurnal` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_transaksi` datetime(0) NULL DEFAULT NULL,
  `kredit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `debit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jurnal`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jurnal
-- ----------------------------
INSERT INTO `jurnal` VALUES (8, '367196937', 'pembayaran angsuran Fauzin', '2021-03-21 00:00:00', NULL, '50000');
INSERT INTO `jurnal` VALUES (9, '58744182', 'Bensin', '2021-03-21 00:00:00', '10000', NULL);
INSERT INTO `jurnal` VALUES (10, '718317823', 'pembayaran dp Fauzin', '2021-03-21 00:00:00', NULL, '5000000');
INSERT INTO `jurnal` VALUES (11, '622893630', 'Sewa BUS', '2021-03-21 00:00:00', '100000', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kas
-- ----------------------------
INSERT INTO `kas` VALUES (7, '367196937', 'pembayaran angsuran Fauzin', '50000', '2021-03-21 00:00:00', 'masuk');
INSERT INTO `kas` VALUES (8, '58744182', 'Bensin', '10000', '2021-03-21 00:00:00', 'keluar');
INSERT INTO `kas` VALUES (9, '718317823', 'pembayaran dp Fauzin', '5000000', '2021-03-21 00:00:00', 'masuk');
INSERT INTO `kas` VALUES (10, '622893630', 'Sewa BUS', '100000', '2021-03-21 00:00:00', 'keluar');

-- ----------------------------
-- Table structure for paket
-- ----------------------------
DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket`  (
  `paket_id` int(11) NOT NULL AUTO_INCREMENT,
  `paket_nomer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_jumlah_hari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_tanggal_berangkat` datetime(0) NULL DEFAULT NULL,
  `paket_tanggal_pulang` datetime(0) NULL DEFAULT NULL,
  `paket_harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_hotel_makah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_hotel_madinah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_pesawat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `paket_jenis` enum('umrah','haji khusus') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`paket_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paket
-- ----------------------------
INSERT INTO `paket` VALUES (1, '1', 'Paket Umrah 12 Hari', '12', '2021-03-19 00:58:16', '2021-03-31 00:58:19', '10000000', 'Hotel yes', 'Hotel Berkah', 'LION AIR', 'umrah');
INSERT INTO `paket` VALUES (4, '1', '1', '1', '2021-03-25 02:03:00', '2021-03-11 02:03:00', '1', '1', '1', '1', 'haji khusus');

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
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
INSERT INTO `pembayaran` VALUES (23, '367196937', 1, '50000', '2021-03-21 00:00:00', 'angsuran');
INSERT INTO `pembayaran` VALUES (24, '718317823', 13, '5000000', '2021-03-21 00:00:00', 'dp');

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengeluaran
-- ----------------------------
INSERT INTO `pengeluaran` VALUES (1, '58744182', 'Bensin', '2021-03-21 00:00:00', '10000');
INSERT INTO `pengeluaran` VALUES (2, '622893630', 'Sewa BUS', '2021-03-21 00:00:00', '100000');

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perlengkapan
-- ----------------------------
INSERT INTO `perlengkapan` VALUES (1, 'KOPER', '48', 'KOPER');
INSERT INTO `perlengkapan` VALUES (2, 'TAS CANGKLONG', '50', 'TAS CANGKLONG');
INSERT INTO `perlengkapan` VALUES (3, 'TAS KABIN', '50', 'TAS KABIN');
INSERT INTO `perlengkapan` VALUES (4, 'BANTAL LEHER', '50', 'BANTAL LEHER');
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
) ENGINE = InnoDB AUTO_INCREMENT = 107 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perlengkapan_jamaah
-- ----------------------------
INSERT INTO `perlengkapan_jamaah` VALUES (85, 12, 1, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (86, 12, 2, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (87, 12, 3, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (88, 12, 4, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (89, 12, 5, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (90, 13, 1, 3, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (91, 13, 2, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (92, 13, 3, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (93, 13, 4, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (94, 13, 5, NULL, NULL, NULL, NULL, 'cek');
INSERT INTO `perlengkapan_jamaah` VALUES (95, 13, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (96, 13, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (97, 13, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (98, 13, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (99, 13, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (100, 13, 11, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (101, 12, 6, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (102, 12, 7, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (103, 12, 8, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (104, 12, 9, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (105, 12, 10, NULL, NULL, NULL, NULL, 'uncek');
INSERT INTO `perlengkapan_jamaah` VALUES (106, 12, 11, NULL, NULL, NULL, NULL, 'uncek');

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

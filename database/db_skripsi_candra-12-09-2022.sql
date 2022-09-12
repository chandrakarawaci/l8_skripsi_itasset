/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : db_skripsi_candra

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 12/09/2022 08:51:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_asset_audit
-- ----------------------------
DROP TABLE IF EXISTS `tbl_asset_audit`;
CREATE TABLE `tbl_asset_audit`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `audit_no` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_asset_location` int NOT NULL,
  `id_auditor_lead` int NOT NULL,
  `selisih` int NOT NULL,
  `tgl_audit` datetime NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_asset_audit_asset_location`(`id_asset_location` ASC) USING BTREE,
  INDEX `fk_asset_audit_user`(`id_auditor_lead` ASC) USING BTREE,
  CONSTRAINT `fk_asset_audit_asset_location` FOREIGN KEY (`id_asset_location`) REFERENCES `tbl_m_asset_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_asset_audit_user` FOREIGN KEY (`id_auditor_lead`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_asset_audit
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_asset_return
-- ----------------------------
DROP TABLE IF EXISTS `tbl_asset_return`;
CREATE TABLE `tbl_asset_return`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asset` int NOT NULL,
  `id_asset_location` int NOT NULL,
  `id_jenis_asset` int NOT NULL,
  `id_user` int NOT NULL,
  `id_transaction` int NOT NULL,
  `keterangan` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `return_no` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tgl_pengembalian` datetime NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_asset_return_assets`(`id_asset` ASC) USING BTREE,
  INDEX `fk_asset_return_assets_location`(`id_asset_location` ASC) USING BTREE,
  INDEX `fk_asset_return_jenis_asset`(`id_jenis_asset` ASC) USING BTREE,
  INDEX `fk_asset_return_user`(`id_user` ASC) USING BTREE,
  INDEX `fk_asset_return_transaction`(`id_transaction` ASC) USING BTREE,
  CONSTRAINT `fk_asset_return_assets` FOREIGN KEY (`id_asset`) REFERENCES `tbl_m_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_asset_return_assets_location` FOREIGN KEY (`id_asset_location`) REFERENCES `tbl_m_asset_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_asset_return_jenis_asset` FOREIGN KEY (`id_jenis_asset`) REFERENCES `tbl_m_jenis_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_asset_return_transaction` FOREIGN KEY (`id_transaction`) REFERENCES `tbl_transactions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_asset_return_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_asset_return
-- ----------------------------
INSERT INTO `tbl_asset_return` VALUES (1, 2, 1, 1, 1, 4, 'udah gak kepake', 'RETRN12345', '2022-08-25 20:57:24', '2022-08-25 20:57:24', NULL, '2022-08-25 20:57:24');
INSERT INTO `tbl_asset_return` VALUES (2, 4, 2, 2, 2, 8, 'mau balikin aja', 'RETRN12346', '2022-08-25 20:57:24', '2022-08-25 20:57:24', NULL, '2022-08-25 20:57:24');

-- ----------------------------
-- Table structure for tbl_detail_asset_audit
-- ----------------------------
DROP TABLE IF EXISTS `tbl_detail_asset_audit`;
CREATE TABLE `tbl_detail_asset_audit`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `condition` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_asset` int NOT NULL,
  `id_asset_audit` int NOT NULL,
  `id_vendor` int NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_detail_asset_audit_user`(`id_vendor` ASC) USING BTREE,
  INDEX `fk_detail_asset_audit_aset_audit`(`id_asset_audit` ASC) USING BTREE,
  INDEX `fk_detail_asset_audit_asset`(`id_asset` ASC) USING BTREE,
  CONSTRAINT `fk_detail_asset_audit_aset_audit` FOREIGN KEY (`id_asset_audit`) REFERENCES `tbl_asset_audit` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_detail_asset_audit_asset` FOREIGN KEY (`id_asset`) REFERENCES `tbl_m_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_detail_asset_audit_user` FOREIGN KEY (`id_vendor`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_detail_asset_audit
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_m_asset
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_asset`;
CREATE TABLE `tbl_m_asset`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_transaction` int NOT NULL,
  `host_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `serial_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kode_asset` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dept` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `division` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_po` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `po_date` datetime NOT NULL,
  `model` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_asset_location` int NOT NULL,
  `id_asset_status` int NOT NULL,
  `id_jenis_asset` int NOT NULL,
  `image` mediumblob NULL,
  `qr_image` mediumblob NULL,
  `url_qr_code` varbinary(255) NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `serial_number`(`serial_number` ASC) USING BTREE,
  UNIQUE INDEX `kode_asset`(`kode_asset` ASC) USING BTREE,
  INDEX `fk_asset_location`(`id_asset_location` ASC) USING BTREE,
  INDEX `fk_asset_status`(`id_asset_status` ASC) USING BTREE,
  INDEX `fk_asset_jenis_asset`(`id_jenis_asset` ASC) USING BTREE,
  CONSTRAINT `fk_asset_jenis_asset` FOREIGN KEY (`id_jenis_asset`) REFERENCES `tbl_m_jenis_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_asset_location` FOREIGN KEY (`id_asset_location`) REFERENCES `tbl_m_asset_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_asset_status` FOREIGN KEY (`id_asset_status`) REFERENCES `tbl_m_asset_status` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_asset
-- ----------------------------
INSERT INTO `tbl_m_asset` VALUES (2, 1, 'host1', '1234567890', 'ASET12345', 'Rihana', 'Finance', 'Finance & Tax', 'POID001', '2022-08-25 20:46:17', 'Lenovo X280', 1, 1, 1, NULL, NULL, NULL, '2022-08-25 20:46:17', '2022-08-25 20:46:17', NULL);
INSERT INTO `tbl_m_asset` VALUES (4, 5, 'host2', '1234567891', 'ASET12346', 'Budi', 'Comsumer Banking Group', 'Treasures Services', 'POID002', '2022-08-25 20:46:17', 'Lenovo M910', 2, 2, 2, NULL, NULL, NULL, '2022-08-25 20:46:17', '2022-08-25 20:46:17', NULL);
INSERT INTO `tbl_m_asset` VALUES (6, 0, 'host3', '1234510101', 'ASET55261', 'Chandra', 'T&O', 'IT Infra', 'POPID003', '2022-08-27 15:10:53', 'Lenovo T480', 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tbl_m_asset_location
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_asset_location`;
CREATE TABLE `tbl_m_asset_location`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kota` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `location_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_asset_location
-- ----------------------------
INSERT INTO `tbl_m_asset_location` VALUES (1, 'Jakarta', 'Jakarta Pusat');
INSERT INTO `tbl_m_asset_location` VALUES (2, 'Jakarta', 'Jakarta Barat');

-- ----------------------------
-- Table structure for tbl_m_asset_status
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_asset_status`;
CREATE TABLE `tbl_m_asset_status`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `desc` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_asset_status
-- ----------------------------
INSERT INTO `tbl_m_asset_status` VALUES (1, 'active', 'active');
INSERT INTO `tbl_m_asset_status` VALUES (2, 'broken', 'broken');

-- ----------------------------
-- Table structure for tbl_m_jenis_asset
-- ----------------------------
DROP TABLE IF EXISTS `tbl_m_jenis_asset`;
CREATE TABLE `tbl_m_jenis_asset`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `desc` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jenis` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_m_jenis_asset
-- ----------------------------
INSERT INTO `tbl_m_jenis_asset` VALUES (1, 'Laptop', 'laptop');
INSERT INTO `tbl_m_jenis_asset` VALUES (2, 'Personal Computer', 'PC');

-- ----------------------------
-- Table structure for tbl_maintenance_asset
-- ----------------------------
DROP TABLE IF EXISTS `tbl_maintenance_asset`;
CREATE TABLE `tbl_maintenance_asset`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asset` int NOT NULL,
  `id_asset_location` int NOT NULL,
  `id_jenis_asset` int NOT NULL,
  `id_user` int NOT NULL,
  `id_transaction` int NOT NULL,
  `keterangan` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `request_mtn_no` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tgl_request_mtn` datetime NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_maintenance_asset`(`id_asset` ASC) USING BTREE,
  INDEX `fk_maintenance_asset_location`(`id_asset_location` ASC) USING BTREE,
  INDEX `fk_maintenance_asset_jenis_asset`(`id_jenis_asset` ASC) USING BTREE,
  INDEX `fk_maintenance_asset_user`(`id_user` ASC) USING BTREE,
  INDEX `fk_maintenance_transaction`(`id_transaction` ASC) USING BTREE,
  CONSTRAINT `fk_maintenance_asset` FOREIGN KEY (`id_asset`) REFERENCES `tbl_m_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_maintenance_asset_jenis_asset` FOREIGN KEY (`id_jenis_asset`) REFERENCES `tbl_m_jenis_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_maintenance_asset_location` FOREIGN KEY (`id_asset_location`) REFERENCES `tbl_m_asset_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_maintenance_asset_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_maintenance_transaction` FOREIGN KEY (`id_transaction`) REFERENCES `tbl_transactions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_maintenance_asset
-- ----------------------------
INSERT INTO `tbl_maintenance_asset` VALUES (1, 2, 1, 1, 1, 3, 'rusak nih', 'REQMTN12345', '2022-08-25 20:55:01', '2022-08-25 20:55:01', NULL, '2022-08-25 20:55:01');
INSERT INTO `tbl_maintenance_asset` VALUES (2, 4, 2, 2, 2, 7, 'kayanya rusak', 'REQMTN12346', '2022-08-25 20:55:01', '2022-08-25 20:55:01', NULL, '2022-08-25 20:55:01');

-- ----------------------------
-- Table structure for tbl_permission
-- ----------------------------
DROP TABLE IF EXISTS `tbl_permission`;
CREATE TABLE `tbl_permission`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_permission
-- ----------------------------
INSERT INTO `tbl_permission` VALUES (1, 'register_asset', 'Asset/register', 'Register New Asset');

-- ----------------------------
-- Table structure for tbl_request_asset
-- ----------------------------
DROP TABLE IF EXISTS `tbl_request_asset`;
CREATE TABLE `tbl_request_asset`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asset` int NOT NULL,
  `id_asset_location` int NOT NULL,
  `id_jenis_asset` int NOT NULL,
  `id_user` int NOT NULL,
  `id_transaction` int NOT NULL,
  `keterangan` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kode_request` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `request_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tgl_request` date NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kode_request`(`kode_request` ASC) USING BTREE,
  INDEX `fk_request_asset`(`id_asset` ASC) USING BTREE,
  INDEX `fk_request_asset_location`(`id_asset_location` ASC) USING BTREE,
  INDEX `fk_request_asset_jenis_asset`(`id_jenis_asset` ASC) USING BTREE,
  INDEX `fk_request_asset_user`(`id_user` ASC) USING BTREE,
  INDEX `fk_request_asset_transaction`(`id_transaction` ASC) USING BTREE,
  CONSTRAINT `fk_request_asset` FOREIGN KEY (`id_asset`) REFERENCES `tbl_m_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_request_asset_jenis_asset` FOREIGN KEY (`id_jenis_asset`) REFERENCES `tbl_m_jenis_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_request_asset_location` FOREIGN KEY (`id_asset_location`) REFERENCES `tbl_m_asset_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_request_asset_transaction` FOREIGN KEY (`id_transaction`) REFERENCES `tbl_transactions` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_request_asset_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_request_asset
-- ----------------------------
INSERT INTO `tbl_request_asset` VALUES (1, 2, 1, 1, 2, 2, 'buat kerja', 'REQ-2022990000001', 'waiting', '2022-08-25', '2022-08-25 20:53:09', NULL, '2022-08-25 20:53:09');
INSERT INTO `tbl_request_asset` VALUES (2, 4, 2, 2, 2, 6, 'Buat main', 'REQ-2022990000002', 'approved', '2022-08-24', '2022-08-25 20:53:09', NULL, '2022-08-25 20:53:09');

-- ----------------------------
-- Table structure for tbl_role
-- ----------------------------
DROP TABLE IF EXISTS `tbl_role`;
CREATE TABLE `tbl_role`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_role
-- ----------------------------
INSERT INTO `tbl_role` VALUES (1, 'role1', 'role test');
INSERT INTO `tbl_role` VALUES (2, 'role2', 'role test 2');

-- ----------------------------
-- Table structure for tbl_transactions
-- ----------------------------
DROP TABLE IF EXISTS `tbl_transactions`;
CREATE TABLE `tbl_transactions`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_asset` int NOT NULL,
  `transaction_date` datetime NOT NULL,
  `transaction_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transaction_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `manual_ref` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `transaction_no`(`transaction_no` ASC) USING BTREE,
  INDEX `fk_transactions_assets`(`id_asset` ASC) USING BTREE,
  CONSTRAINT `fk_transaction_assets` FOREIGN KEY (`id_asset`) REFERENCES `tbl_m_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_transactions_assets` FOREIGN KEY (`id_asset`) REFERENCES `tbl_m_asset` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_transactions
-- ----------------------------
INSERT INTO `tbl_transactions` VALUES (1, 2, '2022-08-26 00:00:20', 'register', 'TRX20220826001', 'ASET12345', '2022-08-26 23:54:03', '2022-08-27 00:00:29', NULL);
INSERT INTO `tbl_transactions` VALUES (2, 2, '2022-08-26 00:00:32', 'request', 'TRX20220826002', 'REQ12345', '2022-08-26 23:54:03', '2022-08-27 00:00:36', NULL);
INSERT INTO `tbl_transactions` VALUES (3, 2, '2022-08-26 00:00:38', 'maintenance', 'TRX20220826003', 'REQMTN12345', '2022-08-26 23:54:03', '2022-08-27 00:00:41', NULL);
INSERT INTO `tbl_transactions` VALUES (4, 2, '2022-08-26 00:00:43', 'return', 'TRX20220826004', 'RETRN12345', '2022-08-26 23:54:03', '2022-08-27 00:00:46', NULL);
INSERT INTO `tbl_transactions` VALUES (5, 4, '2022-08-26 00:00:47', 'register', 'TRX20220826005', 'ASET12346', '2022-08-26 23:54:03', '2022-08-27 00:00:49', NULL);
INSERT INTO `tbl_transactions` VALUES (6, 4, '2022-08-26 00:00:50', 'request', 'TRX20220826006', 'REQ12346', '2022-08-26 23:54:03', '2022-08-27 00:00:52', NULL);
INSERT INTO `tbl_transactions` VALUES (7, 4, '2022-08-26 00:00:53', 'maintenance', 'TRX20220826007', 'REQMTN12346', '2022-08-26 23:54:03', '2022-08-27 00:00:56', NULL);
INSERT INTO `tbl_transactions` VALUES (8, 4, '2022-08-26 00:00:57', 'return', 'TRX20220826008', 'RETRN12346', '2022-08-26 23:54:03', '2022-08-27 00:00:59', NULL);

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_role` int NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_user_role`(`id_role` ASC) USING BTREE,
  CONSTRAINT `fk_user_role` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'user@gmail.com', '123456', 1, '2022-08-25 20:51:39', NULL, '2022-08-25 20:51:39');
INSERT INTO `tbl_user` VALUES (2, 'user2@gmail.com', '123456', 2, '2022-08-25 20:51:39', NULL, '2022-08-25 20:51:39');

-- ----------------------------
-- Table structure for tbl_user_permission
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user_permission`;
CREATE TABLE `tbl_user_permission`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_permission` int NOT NULL,
  `id_user` int NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_user_permission_permission`(`id_permission` ASC) USING BTREE,
  INDEX `fk_user_permission_user`(`id_user` ASC) USING BTREE,
  CONSTRAINT `fk_user_permission_permission` FOREIGN KEY (`id_permission`) REFERENCES `tbl_permission` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_permission_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_user_permission
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Chandra', 'chandra.karawaci@gmail.com', NULL, '$2y$10$HMkXAgMB5YJSnOPXn.jS5.cdOIZ0B9Tfr/Jy0Xi8/2YhbUrrY5Gwe', 'user', 'enabled', NULL, '2022-08-21 16:24:02', '2022-08-21 16:24:02');
INSERT INTO `users` VALUES (2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$HMkXAgMB5YJSnOPXn.jS5.cdOIZ0B9Tfr/Jy0Xi8/2YhbUrrY5Gwe', 'admin', 'enabled', NULL, '2022-08-28 03:18:03', '2022-08-28 03:18:03');
INSERT INTO `users` VALUES (3, 'Ayuni', 'ayuni@gmail.com', NULL, '$2y$10$HMkXAgMB5YJSnOPXn.jS5.cdOIZ0B9Tfr/Jy0Xi8/2YhbUrrY5Gwe', 'manager', 'enabled', NULL, '2022-08-28 13:50:33', '2022-08-28 13:50:39');
INSERT INTO `users` VALUES (4, 'Dedy', 'dedy@gmail.com', NULL, '$2y$10$1KYXWF/pahHBDi2Rfe76YO7nMhkVVHwlN8CBdcnL4fZwsq68TYgru', 'admin', 'enabled', NULL, '2022-08-28 08:36:52', '2022-08-28 08:36:52');
INSERT INTO `users` VALUES (5, 'Fhurqon', 'fhurqon@gmail.com', NULL, '$2y$10$jAKkDmwQzRQDaGPmQ1VoOugOX9PBe4lWq5925n9RXRyT05QTkMGDa', 'admin', 'enabled', NULL, '2022-09-01 15:10:50', '2022-09-01 15:10:50');

SET FOREIGN_KEY_CHECKS = 1;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 05:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bupot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pphnon`
--

CREATE TABLE `dokumen_pphnon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pphnon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pphpasal`
--

CREATE TABLE `dokumen_pphpasal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pphpasal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_09_22_072733_create_dashboard_table', 1),
(11, '2022_09_30_121643_create_pengaturans_table', 1),
(12, '2022_10_12_100537_create_pphsendiri_table', 1),
(13, '2022_10_13_054912_create_pphpasal_table', 1),
(14, '2022_12_08_180900_create_dokumen_pph_table', 1),
(15, '2022_12_16_200611_create_pph_nonresiden_table', 1),
(16, '2022_12_16_202924_create_objek_pajak_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objek_pajak`
--

CREATE TABLE `objek_pajak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `netto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objek_pajak`
--

INSERT INTO `objek_pajak` (`id`, `kode_pajak`, `nama_pajak`, `persen`, `netto`, `created_at`, `updated_at`) VALUES
(1, '22-100-07', '22-100-07 - Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Semen)', '0.0025', NULL, NULL, NULL),
(2, '22-100-08', '22-100-08 - Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Baja)', '0.003', NULL, NULL, NULL),
(3, '22-100-09', '22-100-09 - Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Otomotif)', '0.003', NULL, NULL, NULL),
(4, '22-100-10', '22-100-10 - Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Farmasi)', '0.003', NULL, NULL, NULL),
(5, '22-100-11', '22-100-11 - Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Kertas)', '0.001', NULL, NULL, NULL),
(6, '22-100-12', '22-100-12 - Penjualan Kendaraan Bermotor Di Dalam Negeri Oleh ATPM, APM, dan Importir Umum Kendaraan Bermotor', '0.0045', NULL, NULL, NULL),
(7, '22-100-13', '22-100-13 - Pembelian Oleh Badan Usaha Berupa Komoditas Tambang Batubara, Mineral Logam, dan Mineral Bukan Logam Dari Badan atau Orang Pribadi Pemegang IUP', '0.015', NULL, NULL, NULL),
(8, '22-100-14', '22-100-14 - Penjualan Emas Batangan Di Dalam Negeri Oleh Badan Usaha', '0.0045', NULL, NULL, NULL),
(9, '22-100-15', '22-100-15 - Pembeliaan Bahan Hasil Kehutanan Yang Belum Melalui Proses Industri Manufaktur, Untuk Keperuan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir', '0.0025', NULL, NULL, NULL),
(10, '22-100-16', '22-100-16 - Pembelian Bahan Hasil Perkebunan Belum Melalui Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir', '0.0025', NULL, NULL, NULL),
(11, '22-100-17', '22-100-17 - Pembelian Bahan Hasil Pertanian Belum Melalui Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir', '0.0025', NULL, NULL, NULL),
(12, '22-100-18', '22-100-18 - Pembelian Bahan Hasil Perternakan Belum Melalui Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir', '0.0025', NULL, NULL, NULL),
(13, '22-100-18', '22-100-18 - Pembelian Bahan Hasil Perternakan Belum Melalui Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir', '0.0025\"', NULL, NULL, NULL),
(14, '22-100-19', '22-100-19 - Pembelian Bahan Hasil Perikanan Belum Melalui Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir', '0.0025', NULL, NULL, NULL),
(15, '22-100-20', '22-100-20 - Penjualan BBM Oleh Pertamina/Anak Perusahaan Pertamina Kepada Selain SPBU/Agen/Penyalur (Tidak Final)', '0.003', NULL, NULL, NULL),
(16, '22-100-21', '22-100-21 - Penjualan BBM Oleh Selain Pertamina/Anak Perusahaan Pertamina Kepada Selain SPBU/Agen/Penyalur (Tidak Final)', '0.003', NULL, NULL, NULL),
(17, '22-100-22', '22-100-22 - Penjualan Pelumas Oleh Importir/Produsen', '0.003', NULL, NULL, NULL),
(18, '22-100-23', '22-100-23 - Penjualan Pulsa dan Kartu Perdana Oleh Penyelenggara Distribusi Tingkat Kedua', '0.005', NULL, NULL, NULL),
(19, '22-100-24', '22-100-24 - Penjualan BBG Oleh Produsen/Importir Kepada Selain SPBU /Agen/Penyalur (Tidak Final)', '0.005', NULL, NULL, NULL),
(20, '22-401-01', '22-401-01 - Penjualan BBM Oleh Pertamina/Anak Perusahaan Pertamina Kepada Selain SPBU/Agen/Penyalur (Final)', '0.0025', NULL, NULL, NULL),
(21, '22-401-02', '22-401-02 - Penjualan BBM Oleh Selain Pertamina/Anak Perusahaan Pertamina Kepada Selain SPBU/Agen/Penyalur (Final)', '0.005', NULL, NULL, NULL),
(22, '22-401-03', '22-401-03 - Penjualan BBG Oleh Produsen/Importir Kepada Selain SPBU /Agen/Penyalur (Final)', '0.005', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bertindak_sebagai` enum('pengurus','kuasa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `identitas` enum('npwp','nik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pphpasal`
--

CREATE TABLE `pphpasal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identitas` enum('npwp','nik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_objek_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_pajak_penghasilan` enum('tanpa fasilitas','surat keterangan bebas','pph ditanggung pemerintah','surat keterangan berdasarkan pp no 23 2018','fasilitas lainnya berdasarkan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_penghasilan_bruto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_setor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengaturan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pphsendiri`
--

CREATE TABLE `pphsendiri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_bukti_penyetoran` enum('surat setoran pajak','pemindahbukuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ntpn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_pemindahbukuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_setoran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_objek_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_penghasilan_bruto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_setor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_setor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pph_nonresiden`
--

CREATE TABLE `pph_nonresiden` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengaturan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tahun_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_paspor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_objek_pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_pajak_penghasilan` enum('tanpa fasilitas','surat keterangan bebas','pph ditanggung pemerintah','surat keterangan berdasarkan pp no 23 2018','fasilitas lainnya berdasarkan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_penghasilan_bruto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `netto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_setor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_bukti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `npwp`, `nik`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'syeirin armanda syettia', 'syeirinarmanda09@gmail.com', '12345678', '0987654321', NULL, '$2y$10$PsAvdOv5WmbLmWinscFjAuD.C/18VWxKQFAvsvb.YoJheCU3eQXPC', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_pphnon`
--
ALTER TABLE `dokumen_pphnon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_pphpasal`
--
ALTER TABLE `dokumen_pphpasal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_pphpasal_pphpasal_id_foreign` (`pphpasal_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `objek_pajak`
--
ALTER TABLE `objek_pajak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengaturan_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pphpasal`
--
ALTER TABLE `pphpasal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pphpasal_pengaturan_id_foreign` (`pengaturan_id`);

--
-- Indexes for table `pphsendiri`
--
ALTER TABLE `pphsendiri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pph_nonresiden`
--
ALTER TABLE `pph_nonresiden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pph_nonresiden_pengaturan_id_foreign` (`pengaturan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_npwp_unique` (`npwp`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen_pphnon`
--
ALTER TABLE `dokumen_pphnon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen_pphpasal`
--
ALTER TABLE `dokumen_pphpasal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objek_pajak`
--
ALTER TABLE `objek_pajak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pphpasal`
--
ALTER TABLE `pphpasal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pphsendiri`
--
ALTER TABLE `pphsendiri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pph_nonresiden`
--
ALTER TABLE `pph_nonresiden`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen_pphpasal`
--
ALTER TABLE `dokumen_pphpasal`
  ADD CONSTRAINT `dokumen_pphpasal_pphpasal_id_foreign` FOREIGN KEY (`pphpasal_id`) REFERENCES `pphpasal` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD CONSTRAINT `pengaturan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pphpasal`
--
ALTER TABLE `pphpasal`
  ADD CONSTRAINT `pphpasal_pengaturan_id_foreign` FOREIGN KEY (`pengaturan_id`) REFERENCES `pengaturan` (`id`);

--
-- Constraints for table `pph_nonresiden`
--
ALTER TABLE `pph_nonresiden`
  ADD CONSTRAINT `pph_nonresiden_pengaturan_id_foreign` FOREIGN KEY (`pengaturan_id`) REFERENCES `pengaturan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 11:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesehatanlingkungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `judul`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Kesehatan Lingkungan: Pentingnya Menjaga Lingkungan Demi Kesehatan Kita', '<p>Kesehatan lingkungan adalah cabang ilmu yang mempelajari bagaimana faktor-faktor di sekitar kita mempengaruhi kesehatan manusia. Lingkungan yang bersih dan sehat berperan besar dalam mencegah berbagai penyakit serta meningkatkan kualitas hidup.</p>\r\n\r\n<h3><strong>Mengapa Kesehatan Lingkungan Penting?</strong></h3>\r\n\r\n<p>Lingkungan yang tidak sehat bisa menjadi sarang berbagai masalah kesehatan, seperti:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Penyakit pernapasan</strong> akibat polusi udara.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Gangguan pencernaan</strong> karena air yang tercemar.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Penyakit kulit</strong> dari limbah berbahaya.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Demam berdarah dan malaria</strong> karena genangan air tempat nyamuk berkembang biak.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Cara Menjaga Kesehatan Lingkungan</strong></h3>\r\n\r\n<p>Agar lingkungan tetap sehat dan nyaman, kita bisa melakukan hal-hal berikut:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Mengelola sampah dengan baik</strong> &ndash; Pilah sampah organik dan anorganik, serta daur ulang jika memungkinkan.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menghemat air dan energi</strong> &ndash; Gunakan air secukupnya dan matikan alat listrik yang tidak digunakan.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menanam pohon atau tanaman hijau</strong> &ndash; Tanaman membantu menyaring udara dan menghasilkan oksigen.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Membersihkan tempat tinggal dan lingkungan sekitar</strong> &ndash; Cegah genangan air dan buang barang yang bisa jadi sarang nyamuk.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kurangi penggunaan plastik</strong> &ndash; Plastik sulit terurai dan mencemari tanah serta laut.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3><strong>Kesimpulan</strong></h3>\r\n\r\n<p>Kesehatan lingkungan adalah tanggung jawab kita bersama. Dengan menjaga kebersihan dan kelestarian lingkungan, kita tidak hanya melindungi alam, tetapi juga menjaga kesehatan diri sendiri dan generasi mendatang.</p>\r\n\r\n<p>Mari mulai dari hal kecil, karena perubahan besar dimulai dari tindakan sederhana yang dilakukan setiap hari. 🌱✨</p>', 'bgg.webp', '2025-03-24 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `judul`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Foto Kesehatan Lingkungan', 'DALL·E 2025-03-25 14.24.55 - An illustration showing a vibrant, healthy environment_ a clean park with green trees, clear blue sky, children playing happily, and a small river wit.webp', '2025-03-24 17:00:00', NULL),
(2, 'Foto dua', 'DALL·E 2025-03-25 15.44.13 - A colorful illustration about environmental health_ people cleaning up a beach, planting trees, and biking through a clean, green park. Birds flying, .webp', '2025-03-24 17:00:00', NULL),
(3, 'Foto Tiga', 'DALL·E 2025-03-25 15.44.32 - An inspiring illustration about environmental health_ a thriving community park with people planting trees, children playing, a clean river flowing, w.webp', '2025-03-24 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_03_14_020932_create_foto_table', 1),
(7, '2025_03_14_030755_create_videos_table', 1),
(8, '2025_03_25_060726_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Natalia Lind PhD', 'admin@admin.com', '2025-03-24 23:09:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pZn2Pm1PDR', '2025-03-24 23:09:16', '2025-03-24 23:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `judul`, `video`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Video Kesehatan Lingkungan', 'Animasi Menjaga Kebersihan Diri dan Lingkungan.mp4', '<p>Isi video Kesehatan Lingkungan</p>', '2025-03-24 17:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 05:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_reviews`
--

INSERT INTO `customer_reviews` (`id`, `created_at`, `updated_at`, `username`, `komentar`) VALUES
(1, '2022-12-16 07:32:59', '2022-12-16 07:32:59', 'geekfam', 'Eat Sambel sangat enak, higenis, adminnya ramah, fast-respons, sukses selalu 👍'),
(2, '2022-12-16 07:42:55', '2022-12-16 07:42:55', 'elbert', 'EatSambel sangat enak dan harga yang sangat terjangkau. Sambel Tuna recommeded sekali. Sukses selalu EatSambel'),
(3, '2022-12-16 08:13:57', '2022-12-16 08:39:00', 'hhholmes', 'Sumpah yaa, kamu harus coba guyssss. Dijamin ngakk ada ruginyaa sumpah dehh!!! EatSambel Enakkk Bangett 👍');

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_invoice` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `nama_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_produk` int(11) DEFAULT NULL
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_30_150241_create_produklists_table', 1),
(6, '2022_12_02_200740_create_penggunas_table', 2),
(7, '2022_12_02_201003_create_pesanans_table', 2),
(8, '2022_12_02_201116_create_stokproduks_table', 2),
(9, '2022_12_02_201449_create_invoices_table', 2),
(10, '2022_12_16_142814_create_customer_reviews_table', 3);

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
-- Table structure for table `penggunas`
--

CREATE TABLE `penggunas` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `created_at`, `updated_at`, `id_pengguna`, `username`, `nama`) VALUES
(4, '2022-12-16 07:31:53', '2022-12-16 07:31:53', 123, 'geekfam', 'Geek Fam'),
(5, '2022-12-16 07:40:49', '2022-12-16 07:40:49', 124, 'elbert', 'Elbert'),
(6, '2022-12-16 08:11:48', '2022-12-16 08:11:48', 125, 'hhholmes', 'Holmes');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  `jumlah_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produklists`
--

CREATE TABLE `produklists` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produklists`
--

INSERT INTO `produklists` (`id`, `created_at`, `updated_at`, `id_produk`, `nama_produk`, `harga`, `image`) VALUES
(2, '2022-12-02 14:37:21', '2022-12-02 14:37:21', 1, 'Sambal Ayam Suwir Icikiwir', '30000', 'upload\\sambelayam.png'),
(3, '2022-12-02 14:38:31', '2022-12-02 14:38:31', 2, 'Sambal Cakalang Candu', '30000', 'upload\\sambelcakalang.png'),
(4, '2022-12-02 14:38:56', '2022-12-02 14:38:56', 3, 'Sambal Cumi Ciamik', '30000', 'upload\\sambelcumi.png'),
(5, '2022-12-02 14:39:32', '2022-12-02 14:39:32', 4, 'Sambal Geprek Pedes Ngaco', '49000', 'upload\\sambelgeprek.png'),
(6, '2022-12-02 14:40:38', '2022-12-02 14:40:38', 5, 'Sambal Ikan Nga-Ngenin', '49000', 'upload\\sambelijo.png'),
(7, '2022-12-02 14:41:16', '2022-12-02 14:41:16', 6, 'Sambal Teri-Ngat Kamu', '54000', 'upload\\sambelteri.png'),
(8, '2022-12-02 14:41:53', '2022-12-02 14:41:53', 7, 'Sambal Tuna Asap Sedap Mantap', '49000', 'upload\\sambeltuna.png'),
(9, '2022-12-02 14:42:31', '2022-12-02 14:43:22', 8, 'Set 3 Sambal Jagoan', '138000', 'upload\\sambeltigajagoan.png'),
(10, '2022-12-02 14:42:58', '2022-12-02 14:43:28', 9, 'Set 5 Varian EatSambal', '239000', 'upload\\sambellimavarian.png');

-- --------------------------------------------------------

--
-- Table structure for table `stokproduks`
--

CREATE TABLE `stokproduks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stokproduks`
--

INSERT INTO `stokproduks` (`id`, `created_at`, `updated_at`, `id_produk`, `nama_produk`, `stok_produk`) VALUES
(1, '2022-12-02 14:50:03', '2022-12-02 14:50:03', 1, 'Sambal Ayam Suwir Icikiwir', 10),
(2, '2022-12-02 14:50:29', '2022-12-02 14:50:29', 2, 'Sambal Cakalang Candu', 10),
(3, '2022-12-02 14:50:42', '2022-12-02 14:50:42', 3, 'Sambal Cumi Ciamik', 10),
(4, '2022-12-02 14:50:54', '2022-12-02 14:50:54', 4, 'Sambal Geprek Pedes Ngaco', 10),
(5, '2022-12-02 14:51:08', '2022-12-02 14:51:08', 5, 'Sambal Ikan Nga-Ngenin', 10),
(6, '2022-12-02 14:51:24', '2022-12-02 14:51:24', 6, 'Sambal Teri-Ngat Kamu', 10),
(7, '2022-12-02 14:51:49', '2022-12-02 14:51:49', 7, 'Sambal Tuna Asap Sedap Mantap', 10),
(8, '2022-12-02 14:52:18', '2022-12-02 14:52:18', 8, 'Set 3 Sambal Jagoan', 10),
(9, '2022-12-02 14:52:28', '2022-12-02 14:52:28', 9, 'Set 5 Varian EatSambal', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vreview`
-- (See below for the actual view)
--
CREATE TABLE `vreview` (
`username` varchar(255)
,`nama` varchar(255)
,`komentar` text
);

-- --------------------------------------------------------

--
-- Structure for view `vreview`
--
DROP TABLE IF EXISTS `vreview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vreview`  AS SELECT `ps`.`username` AS `username`, `ps`.`nama` AS `nama`, `cr`.`komentar` AS `komentar` FROM (`penggunas` `ps` join `customer_reviews` `cr` on(`cr`.`username` = `ps`.`username`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
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
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produklists`
--
ALTER TABLE `produklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stokproduks`
--
ALTER TABLE `stokproduks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produklists`
--
ALTER TABLE `produklists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stokproduks`
--
ALTER TABLE `stokproduks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

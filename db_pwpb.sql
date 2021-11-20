-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2021 pada 15.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwpb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nm`, `created_at`, `updated_at`) VALUES
(1, 'Makanan Basah', NULL, '2021-10-12 19:43:11'),
(3, 'Makanan Ringan', '2021-10-12 19:44:19', '2021-10-13 07:58:16'),
(4, 'Makanan Berat', '2021-10-12 21:38:14', '2021-10-12 21:38:14'),
(5, 'Minuman', '2021-10-13 07:58:42', '2021-10-13 07:58:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komens`
--

CREATE TABLE `komens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nmplgn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `katkomen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tnggl` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmbrkomen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komens`
--

INSERT INTO `komens` (`id`, `nmplgn`, `komen`, `katkomen`, `tnggl`, `gmbrkomen`, `created_at`, `updated_at`) VALUES
(1, 'user', 'enak kripiknya', 'Keripik Kaca', '2021-10-31', 'WhatsApp Image 2021-10-13 at 09.48.25.jpeg', '2021-10-31 05:00:04', '2021-10-31 05:00:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2021_07_12_163425_create_users_table', 1),
(3, '2021_07_13_151641_create_kategoris_table', 1),
(4, '2021_07_13_183012_create_produks_table', 1),
(5, '2021_07_16_112612_create_orders_table', 1),
(6, '2021_10_24_132538_create_komens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` bigint(20) DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metodepembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodeunik` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalitem` bigint(20) DEFAULT NULL,
  `totalharga` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `nohp`, `alamat`, `metodepembayaran`, `kodeunik`, `produk`, `totalitem`, `totalharga`, `rekening`, `bukti`, `created_at`, `updated_at`) VALUES
(1, 'siti', 'siti@gmail.com', 89767567464, 'wanaherang', 'cod', 'i79', 'gsgxjskx', 79, '068679', 'jgjkgg', '1.jpg', NULL, NULL),
(2, 'user', 'user@gmail.com', 8989786, 'wanaherang', 'Transfer Bank', 'INV2021103180', 'Keripik Kaca', 1, 'Rp.10000', '75890980808', 'Ipin.jpg', '2021-10-31 05:04:14', '2021-10-31 05:04:15'),
(3, 'user', 'user@gmail.com', 76767, 'wanher', 'Dana|86869685', 'INV202110311', 'Keripik Kaca', 1, 'Rp.10000', '86868', '1.jpeg', '2021-10-31 06:57:28', '2021-10-31 06:57:28'),
(4, 'putri', 'putri@gmail.com', 836486, 'gunungputri', 'BNI|878796', 'INV202111161', 'Toppoki', 2, 'Rp.30000', '8686', '1.JPG', '2021-11-15 23:18:01', '2021-11-15 23:18:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `rasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `kategori`, `nama`, `stok`, `rasa`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Makanan Basah', 'Toppoki', 20, 'Original, Pedas', 15000, 'WhatsApp Image 2021-10-12 at 18.49.15.jpeg', NULL, '2021-10-12 19:46:43'),
(4, 'Makanan Kering', 'Keripik Kaca', 87, 'Original, Pedas, Cabe Ijo, BBQ, Seblak', 10000, 'WhatsApp Image 2021-10-13 at 09.48.25.jpeg', '2021-10-12 09:12:32', '2021-10-12 20:00:16'),
(5, '--Pilih Kategori--', 'Cilok', 23, 'Jagung Bakar, Balado, Pedas', 15000, 'WhatsApp Image 2021-10-05 at 19.46.38 (1).jpeg', '2021-10-12 20:02:08', '2021-10-13 08:08:16'),
(7, '--Pilih Kategori--', 'Pangsit Kering', 45, 'Balado, Ekstrak Pedas', 10000, 'WhatsApp Image 2021-10-13 at 10.03.12 (2).jpeg', '2021-10-12 21:03:10', '2021-10-12 21:22:40'),
(8, 'Makanan Kering', 'Keripik Singkong', 38, 'Balado, Pedas', 10000, 'WhatsApp Image 2021-10-13 at 11.04.03 (2).jpeg', '2021-10-12 21:24:17', '2021-10-12 21:24:17'),
(9, 'Makanan Kering', 'Siomay Kering', 67, 'Balado, Ekstrak Pedas', 10000, 'WhatsApp Image 2021-10-13 at 11.04.39.jpeg', '2021-10-12 21:26:17', '2021-10-12 21:26:17'),
(10, 'Makanan Kering', 'Jamur Crispy', 20, 'Original, Balado, Pedas', 10000, 'WhatsApp Image 2021-10-13 at 11.04.04 (1).jpeg', '2021-10-12 21:27:39', '2021-10-12 21:27:39'),
(11, 'Makanan Kering', 'Cimol Kering', 49, 'Original, Balado, Pedas', 10000, 'WhatsApp Image 2021-10-13 at 11.04.04.jpeg', '2021-10-12 21:28:40', '2021-10-12 21:28:40'),
(12, 'Makanan Berat', 'Ayam Bakar', 12, 'Original, Pedas', 20000, 'WhatsApp Image 2021-10-13 at 11.12.59.jpeg', '2021-10-13 08:00:18', '2021-10-13 08:00:18'),
(13, 'Makanan Ringan', 'Makaroni Spiral', 68, 'Balado, Ekstrak Pedas', 10000, 'WhatsApp Image 2021-10-13 at 11.04.40.jpeg', '2021-10-13 08:01:23', '2021-10-13 08:01:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$XQqygBRh8/7z0OS1z1x.7.KfFaf65mblygKS2MZgeYqLO1ht2SV4O', NULL, '2021-10-31 04:54:59', '2021-10-31 04:54:59'),
(2, 'user', 'user@gmail.com', NULL, 0, '$2y$10$k5jupKJsE1ry9XsXOBiJFOrV7XDyxrJMgSuO6N8aHMkjjLjBLkZ7O', NULL, '2021-10-31 04:54:59', '2021-10-31 04:54:59'),
(3, 'putri', 'putri@gmail.com', NULL, 0, '$2y$10$bwRRXtrPoy3U25cn/yC6se30j2XXiWTKiYFTfQRRVhWmEtPzjR0a6', NULL, '2021-11-15 23:14:27', '2021-11-15 23:14:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komens`
--
ALTER TABLE `komens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komens`
--
ALTER TABLE `komens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

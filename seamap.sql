-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 07:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seamap`
--

-- --------------------------------------------------------

--
-- Table structure for table `babukas`
--

CREATE TABLE `babukas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `village_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('pending','approve') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `babukas`
--

INSERT INTO `babukas` (`id`, `name`, `product_name`, `product_detail`, `phone_number`, `village_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, 'SeaMap', 'Current Direction', 'January 2022', '1', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Fjanuari_current direction_1702645955.gif?alt=media', 'approve', '2023-12-15 13:12:37', '2023-12-15 13:17:07'),
(10, 'SeaMap', 'Current Speed', 'January 2022', '2', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Fjanuari_current speed_1702646002.gif?alt=media', 'approve', '2023-12-15 13:13:25', '2023-12-15 13:17:16'),
(11, 'SeaMap', 'Elevation', 'January 2022', '3', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Fjanuari_elevation_1702646066.gif?alt=media', 'approve', '2023-12-15 13:14:29', '2023-12-15 13:17:22'),
(12, 'SeaMap', 'U - Velocity', 'January 2022', '4', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Fjanuari_u velocity_1702646110.gif?alt=media', 'approve', '2023-12-15 13:15:13', '2023-12-15 13:17:31'),
(13, 'SeaMap', 'V - Velocity', 'January 2022', '5', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Fjanuari_v velocity_1702646146.gif?alt=media', 'approve', '2023-12-15 13:15:50', '2023-12-15 13:17:37'),
(14, 'SeaMap', 'Wind  U - Velocity', 'January 2022', '6', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Fjanuari_wind u velocity_1702646194.gif?alt=media', 'approve', '2023-12-15 13:16:37', '2023-12-15 13:17:44'),
(15, 'SeaMap', 'Current Direction - June', 'June 2022', '1', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FCurrentDirectionJuni_1702647565.gif?alt=media', 'approve', '2023-12-15 13:39:37', '2023-12-15 13:47:59'),
(16, 'SeaMap', 'Current Speed - June', 'June 2022', '2', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FCurrentSpeedJuni_1702647610.gif?alt=media', 'approve', '2023-12-15 13:40:20', '2023-12-15 13:48:13'),
(17, 'SeaMap', 'Surface Elevation - June', 'June 2022', '3', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FSurfaceElevationJuni_1702647803.gif?alt=media', 'approve', '2023-12-15 13:43:37', '2023-12-15 13:48:21'),
(18, 'SeaMap', 'U- Velocity - June', 'June 2022', '4', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FU_VelocityJuni_1702647872.gif?alt=media', 'approve', '2023-12-15 13:44:42', '2023-12-15 13:48:29'),
(19, 'SeaMap', 'V- Velocity - June', 'June 2022', '5', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FV_VelocityJuni_1702647917.gif?alt=media', 'approve', '2023-12-15 13:45:27', '2023-12-15 13:48:37'),
(20, 'SeaMap', 'Wind U - Velocity - June', 'June 2022', '6', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FWind_U_VelocityJuni_1702647990.gif?alt=media', 'approve', '2023-12-15 13:46:40', '2023-12-15 13:48:46'),
(21, 'SeaMap', 'Wind V - Velocity - June', 'June 2022', '7', 1, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FWind_V_VelocityJuni_1702648037.gif?alt=media', 'approve', '2023-12-15 13:47:28', '2023-12-15 13:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `desc`, `icon`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'bppp', 'Category untuk bppp', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(2, 'bkbkkk', 'Category untuk bkbkkk', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(3, 'profile', 'Category untuk profile', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(4, 'visi', 'Category untuk visi', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(5, 'misi', 'Category untuk misi', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(6, 'organitations', 'Category untuk organitations', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(7, 'tugas pokok dan fungsi', 'Category untuk tugas pokok dan fungsi', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(8, 'ketua', 'Category untuk ketua', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(9, 'wakil ketua', 'Category untuk wakil ketua', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(10, 'bendahara', 'Category untuk wakil bendahara', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(11, 'sekretaris', 'Category untuk wakil sekretaris', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(12, 'data pegawai dppkb', 'Category untuk data pegawai dppkb', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(13, 'pengumuman', 'Category untuk pengumuman', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(14, 'agenda', 'Category untuk agenda', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(15, 'artikel', 'Category untuk artikel', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(16, 'tentang ppid', 'Category untuk tentang ppid', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(17, 'link terkait', 'Category untuk link terkait', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(18, 'daftar informasi publik', 'Category untuk daftar informasi publik', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(19, 'daftar informasi dikecualikan', 'Category untuk daftar informasi dikecualikan', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(20, 'banner', 'Category untuk daftar banner', NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `url_file` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `detail`, `category_id`, `type_id`, `url_file`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Oceanography', '<p>test</p>', 3, 2, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Focean_1702472220.jpeg?alt=media', 1, '2023-12-13 07:49:22', '2023-12-13 12:57:02'),
(2, 'Ubah judul visi', 'Ubah detail visi', 4, 2, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(3, 'Ubah judul misi', 'Ubah detail misi', 5, 2, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(4, 'Ubah judul Stuktur Organisasi', 'Ubah detail Stuktur Organisasi', 6, 2, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(5, 'Ubah Nama', 'Ubah Detail', 8, 3, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(6, 'Ubah judul', 'Ubah detail', 16, 9, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(7, 'Ubah judul', 'Ubah detail', 18, 9, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(8, 'Ubah judul', 'Ubah detail', 19, 9, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(9, 'Ubah judul', 'Ubah detail', 1, 1, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(10, 'Ubah judul', 'Ubah detail', 2, 1, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(12, 'Tugas Pokok dan Fungsi', 'Ubah detail', 7, 2, NULL, 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(13, 'SeaMap', '<p>foto</p>', 20, 2, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FSEAMAP (2)_1702466062.png?alt=media', 1, '2023-12-13 11:14:28', '2023-12-13 11:14:28'),
(14, 'SeaMap', '<p>foto</p>', 20, 2, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FSEAMAP 2 (1)_1702466099.png?alt=media', 1, '2023-12-13 11:15:02', '2023-12-13 11:15:02'),
(16, 'TEZ 1.0.0', 'https://data.gns.cri.nz/tez/index.html?map=NZ%20Geology', 17, 2, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FGNS-Science-logo_horizontal_1702466881.png?alt=media', 2, '2023-12-13 11:28:04', '2023-12-13 11:28:04'),
(17, 'Copernicus Marine Service', 'https://data.marine.copernicus.eu/products', 17, 2, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Funnamed_1702466983.jpg?alt=media', 2, '2023-12-13 11:29:45', '2023-12-13 11:29:45'),
(18, 'Arus Current Direction', '<p>Arus Current Direction January 2022</p>', 13, 4, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2Fjanuari_current direction_1702643656.gif?alt=media', 2, '2023-12-13 12:44:49', '2023-12-15 12:34:18'),
(19, 'Gelombang Laut Selat Makassar', 'https://www.arcgis.com/apps/View/index.html?appid=21297dec09494eb1b29c1459c9c27cc5&extent=113.4982,-4.4474,121.0018,-1.0515', 17, 2, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FOIP_1702472911.jpeg?alt=media', 2, '2023-12-13 13:08:33', '2023-12-13 13:08:33');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL,
  `types_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url_file` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `detail`, `types_id`, `url_file`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Globigerinoides Ruber', 'Berikut ini merupakan bentuk dari foraminifera bernama Globigerinoides Ruber, foraminifera ini sebagai bioindikator suhu dan salinitas permukaan laut masa lalu menunjukkan terjadinya perubahan suhu dan salinitas relatif, terkhusus di daerah kajian yakni Selat Makassar. \r\nKelimpahan foraminifera ini lebih luas ke arah barat selat mendekati Pulau Kalimantan bagian barat dari Selat Makassar diketahui memiliki tingkat unsur hara yang tinggi karena limpasan air sungai yang masuk ke perairan selat. Berdasarkan informasi tersebut dapat dikatakan bahwa perairan Selat Makassar memiliki nilai salinitas dan temperatur yang lebih rendah dibandingkan perairan Laut Sulawesi.\r\nBerdasarkan analisis foraminifera tersebut menunjukkan bahwa suhu permukaan laut di Selat Makassar pada masa lampau lebih tinggi dibandingkan saat ini.', 7, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FWhatsApp Image 2023-08-13 at 12.50.31_1702472388.jpeg?alt=media', 2, '2023-12-13 12:59:50', '2023-12-13 12:59:50'),
(2, 'Globigerinoides Ruber', 'Berikut ini merupakan bentuk dari foraminifera bernama Globigerinoides Ruber, foraminifera ini sebagai bioindikator suhu dan salinitas permukaan laut masa lalu menunjukkan terjadinya perubahan suhu dan salinitas relatif, terkhusus di daerah kajian yakni Selat Makassar. \r\nKelimpahan foraminifera ini lebih luas ke arah barat selat mendekati Pulau Kalimantan bagian barat dari Selat Makassar diketahui memiliki tingkat unsur hara yang tinggi karena limpasan air sungai yang masuk ke perairan selat. Berdasarkan informasi tersebut dapat dikatakan bahwa perairan Selat Makassar memiliki nilai salinitas dan temperatur yang lebih rendah dibandingkan perairan Laut Sulawesi.\r\nBerdasarkan analisis foraminifera tersebut menunjukkan bahwa suhu permukaan laut di Selat Makassar pada masa lampau lebih tinggi dibandingkan saat ini.', 7, 'https://firebasestorage.googleapis.com/v0/b/allinstudio-ea4f8.appspot.com/o/Images%2FWhatsApp Image 2023-08-13 at 12.55.34_1702472420.jpeg?alt=media', 2, '2023-12-13 13:00:22', '2023-12-13 13:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `list_villages`
--

CREATE TABLE `list_villages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_villages`
--

INSERT INTO `list_villages` (`id`, `name`, `address`, `location`, `longitude`, `latitude`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Oceanography Data', 'Kalimantan Barat', 'Kalimantan Barat', '117.5068', '0.1077', 1, '2023-12-13 07:53:24', '2023-12-15 07:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_09_144821_create_categories_table', 1),
(6, '2023_11_13_183908_create_types_table', 1),
(7, '2023_11_14_091503_create_contents_table', 1),
(8, '2023_11_14_094324_create_galleries_table', 1),
(9, '2023_11_14_133501_create_products_table', 1),
(10, '2023_11_18_111602_create_suggestions_table', 1),
(11, '2023_11_21_183324_modify_contents_table', 1),
(12, '2023_11_22_123813_create_list_villages_table', 1),
(13, '2023_11_22_132456_create_members_table', 1),
(14, '2023_11_29_000245_create_babukas_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url_link` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `desc`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Layanan', 'Type untuk bppp dan bkbkkk', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(2, 'Profile', 'Type untuk profile, visi, misi, organitations, tugas pokok dan fungsi, profile pejabat struktural, data pegawai dppkb', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(3, 'Profile Pejabat Struktural', 'Type untuk ketua, wakil ketua, sekretaris, bendahara, dan lain-lain menngenai pejabat struktural', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(4, 'pengumuman', 'Type untuk pengumuman', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(5, 'agenda', 'Type untuk agenda', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(6, 'artikel', 'Type untuk artikel', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(7, 'foto', 'Type untuk galeri dalam bentuk foto', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(8, 'video', 'Type untuk galeri dalam bentuk video', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(9, 'ppid', 'Type untuk tentang ppid, daftar informasi publik, daftar informasi dikecualikan', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(10, 'banner', 'Type untuk banner', 1, '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(11, 'arus', 'Type untuk Gallery', 2, '2023-12-15 05:05:08', '2023-12-15 05:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `phone_number`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1', 'admin1@gmail.com', '000000000', '$2y$10$M3BWKMozh24I4c4Gs66cVOK99swj.THsRPbOYPFIY5i1J.qYGZ3F2', '2023-12-13 07:49:22', '2023-12-13 07:49:22'),
(2, 'admin', 'admin', 'admin12@gmail.com', '08782271271', '$2y$10$ZNKUIONnW3/OqieZYlSrsuhXRn4K8pktYGZtcJG16Do3TsL9Bz1nu', '2023-12-13 11:13:52', '2023-12-13 11:13:52'),
(3, 'nadia', 'nadia', 'nadia@gmail.com', '087272727727', '$2y$10$kEvwFux6ONaWoFAhfN/iWOPvnnMU/595R6fiIRrpJN3R6nD69TswC', '2023-12-15 12:29:01', '2023-12-15 12:29:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `babukas`
--
ALTER TABLE `babukas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `babukas_village_id_foreign` (`village_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_category_id_foreign` (`category_id`),
  ADD KEY `contents_type_id_foreign` (`type_id`),
  ADD KEY `contents_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_types_id_foreign` (`types_id`),
  ADD KEY `galleries_user_id_foreign` (`user_id`);

--
-- Indexes for table `list_villages`
--
ALTER TABLE `list_villages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_villages_user_id_foreign` (`user_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`),
  ADD KEY `members_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `types_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `babukas`
--
ALTER TABLE `babukas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_villages`
--
ALTER TABLE `list_villages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `babukas`
--
ALTER TABLE `babukas`
  ADD CONSTRAINT `babukas_village_id_foreign` FOREIGN KEY (`village_id`) REFERENCES `list_villages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `contents_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `contents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_types_id_foreign` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `list_villages`
--
ALTER TABLE `list_villages`
  ADD CONSTRAINT `list_villages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

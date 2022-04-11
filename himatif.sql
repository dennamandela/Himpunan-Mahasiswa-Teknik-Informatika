-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2022 pada 02.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatif`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nim`, `nama_anggota`, `program_studi`, `tanggal_lahir`, `angkatan`, `jenis_kelamin`, `agama`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '214060001', 'Robi Alwi Ibrahim', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648130995_jpg', 18, '2022-03-23 06:57:17', '2022-03-24 07:09:55'),
(2, '214060002', 'Rifky Rifatul Aziz', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648044041_png', 19, '2022-03-23 07:00:41', '2022-03-23 09:36:24'),
(3, '214060003', 'Dandi Septiyadi', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648044132_jpg', 20, '2022-03-23 07:02:12', '2022-03-23 07:02:12'),
(4, '214060004', 'Rizaldy Firmansyah', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648044256_png', 21, '2022-03-23 07:04:16', '2022-03-23 07:04:16'),
(5, '214060005', 'Khotib', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648044354_png', 22, '2022-03-23 07:05:55', '2022-03-23 07:05:55'),
(6, '214060006', 'Muzi Asih', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648044423_png', 23, '2022-03-23 07:07:03', '2022-03-23 07:07:03'),
(7, '214060007', 'Muhammad Bima', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648044524_png', 24, '2022-03-23 07:08:44', '2022-03-23 07:08:44'),
(8, '214060008', 'Ravi Rizki Ramdani', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648044587_png', 25, '2022-03-23 07:09:47', '2022-03-23 07:09:47'),
(9, '214060010', 'Azrul Arifin', 'Teknik Informatika', '2022-03-23', 2021, 'Laki-Laki', 'Islam', '1648045525_png', 26, '2022-03-23 07:25:26', '2022-03-23 07:25:26'),
(10, '214060011', 'Kevin', 'Teknik Informatika', '2022-03-24', 2021, 'Laki-Laki', 'Islam', '1648055294_png', 27, '2022-03-23 10:08:15', '2022-03-23 10:08:15'),
(11, '214060012', 'Naufal', 'Teknik Informatika', '2022-03-25', 2021, 'Laki-Laki', 'Islam', '1648055643_png', 28, '2022-03-23 10:14:04', '2022-03-23 10:14:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan_aspirasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_aspirasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi_masyarakat`
--

CREATE TABLE `aspirasi_masyarakat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilih` enum('dosen','mahasiswa','alumni','publik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `kategori_id`, `judul_berita`, `headline`, `isi_berita`, `foto_berita`, `tanggal_post`, `created_at`, `updated_at`) VALUES
(1, 3, 'Peran Penting Teknologi Informasi di Era Pandemi Covid-19', 'Pandemi Covid - 19 yang melanda seCovid - 19 yang melanda seluluruh dunia pada tahun 2019 memaksa seluruh penduduk untuk aktif menggunakan jaringan internet dan media sosial di seluruh dunia, karena internet dan media sosial menjadi sumber utama informasi dan sarana komunikasi.', 'Pandemi Covid - 19 yang melanda seCovid - 19 yang melanda seluluruh dunia pada tahun 2019 memaksa seluruh penduduk untuk aktif menggunakan jaringan internet dan media sosial di seluruh dunia, karena internet dan media sosial menjadi sumber utama informasi dan sarana komunikasi.', '1648144211_jpg', '2022-03-25 00:48:00', '2022-03-24 10:50:11', '2022-03-24 10:50:11'),
(2, 3, 'Kenapa HP Sekarang Banyak yang Pakai Baterai Tanam?', 'Alasan HP saat ini pakai baterai tanam tak lain karena keunggulannya. Baterai tanam dinilai bisa buat ponsel jadi lebih ramping, aman, dan tahan air.', 'Saat ini tampaknya hampir tidak ada lagi handphone (HP) dengan baterai yang bisa dilepas-pasang (removable battery). Mungkin hingga sekitar tahun 2010, masih bisa dijumpai HP dengan baterai lepasan. Selanjunya, tren penggunaan baterai lepasan pada HP mulai bergeser dengan kehadiran baterai tanam (non-removable battery). Ponsel pabrikan Apple iPhone punya peran dalam mempopulerkan HP yang menggunakan baterai tanam. Apple cukup sukses mengenalkan iPhone yang memiliki bodi ramping dengan performa andal, salah satunya berkat penggunaan baterai tanam untuk mengisi kemampuan perangkat di sektor daya.', '1648296991_jpg', '2022-03-26 19:15:00', '2022-03-26 05:16:31', '2022-03-26 05:16:31'),
(3, 1, 'LKMM: Latihan Kepemimpinan dan Manajemen Mahasiswa', 'LKMM 2022 STMIK Jabar merupakan program kerja dari BEM STMIK Jabar 2021/2022 sebagai sarana pengkaderan untuk mahasiswa dan mahasiswi STMIK Jabar.', 'LKMM 2022 STMIK Jabar merupakan program kerja dari BEM STMIK Jabar 2021/2022 sebagai sarana pengkaderan untuk mahasiswa dan mahasiswi STMIK Jabar.', '1648570709_png', '2022-02-05 23:18:00', '2022-03-29 16:18:29', '2022-03-29 16:18:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(2, 'Buka Bersama', '2022-04-12', '2022-04-13', '2022-04-03 06:38:16', '2022-04-10 06:34:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_drive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Events', '2022-03-24 09:06:48', '2022-03-24 09:14:52'),
(2, 'Info', '2022-03-24 09:23:15', '2022-03-24 09:23:15'),
(3, 'Teknologi', '2022-03-24 10:36:23', '2022-03-24 10:36:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_02_07_182738_create_visi_misi_table', 1),
(5, '2022_02_10_133555_create_berita_table', 1),
(6, '2022_02_18_123647_create_agenda_table', 1),
(7, '2022_02_18_161315_create_event_table', 1),
(8, '2022_02_20_151527_create_kegiatan_table', 1),
(9, '2022_03_10_163246_create_users_table', 1),
(10, '2022_03_10_164020_create_aspirasi_table', 2),
(11, '2022_03_10_164144_create_anggota__table', 2),
(12, '2022_03_10_164232_create_struktur__table', 2),
(13, '2022_03_10_164910_create_aspirasi_table', 3),
(14, '2022_03_10_165023_create_struktur_table', 3),
(15, '2022_03_10_165108_create_anggota_table', 3),
(16, '2022_03_23_124931_create_anggota_table', 4),
(17, '2022_03_24_152656_create_berita_table', 5),
(18, '2022_03_24_153637_create_kategori_table', 5),
(19, '2022_03_24_171037_create_berita_table', 6),
(20, '2022_03_29_214330_create_aspirasi_masyarakat_table', 7),
(21, '2022_04_06_224749_create_galeris_table', 8),
(22, '2022_04_06_232403_create_galeri_table', 9);

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
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id`, `nim`, `nama`, `jabatan`, `foto`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '204060033', 'Denna Mandela', 'Ketua Umum', '1647964187_jpg', 16, '2022-03-22 08:49:47', '2022-03-22 08:49:47'),
(3, '204060014', 'Irpan Wahyudin', 'Wakil Ketua', '1648133199_png', 29, '2022-03-24 07:46:39', '2022-03-24 07:46:39'),
(4, '204060029', 'Tasya Fitri Sawaliyah', 'Sekretaris 1', '1648133420_png', 30, '2022-03-24 07:50:20', '2022-03-24 07:50:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','writer','anggota') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Feby Setia Cipta', 'febysc@gmail.com', NULL, '$2y$10$pH0IgKHISl/AaRUd32Tq3unJ5SRnbqJ0t/tbz46z.5ypjhOOYYHdi', 'anggota', 'KDdC49lIO2Go16d7Qg7zYLUyGOwME9nOOfs7CFxdDBVmwCZqYRr1QnRAyEZ3', '2022-03-10 09:54:00', '2022-03-10 09:54:00'),
(3, 'Muhamm', 'farel@gmail.com', NULL, '$2y$10$GCIfCa1QVLFSPyAz6Dl31.XvczSTUz7WKPUuxotNv9M2cneJFzioG', 'anggota', 'Z0hwJl92YvJKcYfWZQdHT020yZEyrahrWCElts0uJpiZEepk9ql3prmpB3KJ', '2022-03-10 09:59:13', '2022-03-12 12:24:29'),
(4, 'admin', 'admin@gmail.com', NULL, '12345678', 'admin', NULL, NULL, NULL),
(16, 'Denna Mandela', '204060033.mhs@stmikjabar.ac.id', NULL, '$2y$10$n.jgS2R6jJHa2zyrPkrufeahBBDQkP6IKsXIbX8wzd92crrvOyrRe', 'admin', 'GMO6dBkuIuYHzJhzLRviWGjnQhRCyBjtZZI0eKfsGKFeoli4w1nPFw3fCHPf', '2022-03-22 08:49:47', '2022-03-22 08:49:47'),
(18, 'Robi Alwi Ibrahim', '214060001.mhs@stmikjabar.ac.id', NULL, '$2y$10$IP2Sqo4zLa.xGxfyOik13..anhzY43sLQOUGALHJtf/Q2q5sKqUge', 'anggota', 'kLqM6yPYNDDJtWjMtrY6JNHRvzm7UHSPxknZae8G6BHJlSLmGLfRYPE9XCaS', '2022-03-23 06:57:17', '2022-03-23 06:57:17'),
(19, 'Rifky Rifatul Aziz', '214060002.mhs@stmikjabar.ac.id', NULL, '$2y$10$wPKYJtYnkvtkrvPbkIvSyeFzQu3I2YYvOzWokHvZkQwnwNF4tCw26', 'anggota', 'vHruOIMcCYGcYuE3jQbL9MIDdvn1n13pgQGoXN4CrdAUzEQKna5HpLXeRzf9', '2022-03-23 07:00:41', '2022-03-23 07:00:41'),
(20, 'Dandi Septiyadi', '214060003.mhs@stmikjabar.ac.id', NULL, '$2y$10$4tsSkevYIJ5VTvijZl8hwexx6qk1U8W8Dvvy.pEYjIFSePhuCyHw6', 'anggota', '05WyGB32DziACdIWlnTXEliKylxHBi2PPkwxDcCnDPhFU3xm6vNfBOxY2m8E', '2022-03-23 07:02:12', '2022-03-23 07:02:12'),
(21, 'Rizaldy Firmansyah', '214060004.mhs@stmikjabar.ac.id', NULL, '$2y$10$oj8gnbnWN6AQD6JU8M71/ukDLHJPBxZvQ8U7BEcSGpQED1/oTKaV6', 'anggota', 'haqDe9PwUBaysv5EJVLG3Q630WQM3OLZZiCWoobOtUcarcp9Vno7iqHLLrcN', '2022-03-23 07:04:16', '2022-03-23 07:04:16'),
(22, 'Khotib', '214060005.mhs@stmikjabar.ac.id', NULL, '$2y$10$hHd2MmUQ9Lm0Ct3ixq6lDuzx59GZosHNpRZzDD784xy/jjLzJ04ZS', 'anggota', '2aU4EK45ePAthvDR3NvWkONc5Xu3ytHKjfNk8WCVSzK76wAcbyFqKgaAULRP', '2022-03-23 07:05:55', '2022-03-23 07:05:55'),
(23, 'Muzi Asih', '214060006.mhs@stmikjabar.ac.id', NULL, '$2y$10$XHnn9vlwHaVNy8HGNlZYyeo.GuiWTzt0qG99RsSYvm9kKeLGnVy3q', 'anggota', 'TlWtQusYA390o2ONXdmKZN2RwCj65cFFcN7IwMMDDvQyMYCJXntrS3SFJYYd', '2022-03-23 07:07:03', '2022-03-23 07:07:03'),
(24, 'Muhammad Bima', '214060007.mhs@stmikjabar.ac.id', NULL, '$2y$10$Xv4sg8AcnN9STo9LuaGi9Od/CgzcM8PPpa4mLAV8MMRarW3KyLcOq', 'anggota', 'BaTP9rSc31zhg0hwg7bmBpo1BVDxGgCNv3OJopi41RTpozD6ezdKvX4f5Tw0', '2022-03-23 07:08:44', '2022-03-23 07:08:44'),
(25, 'Ravi Rizki Ramdani', '214060008.mhs@stmikjabar.ac.id', NULL, '$2y$10$DnqZgvpJd86gUucJfrTNgeqocpsCHOe6uwKBWV/6.YPk1QqMsoLDW', 'anggota', 'InuBsdMhc7hvH62ABoqhFzONYZjfyhOseUOp9dBijLh0GM7XUtFwta0klJzI', '2022-03-23 07:09:47', '2022-03-23 07:09:47'),
(26, 'Azrul Arifin', '214060010.mhs@stmikjabar.ac.id', NULL, '$2y$10$2EhYt91RoTD.FXf6oEGq.etcpnMSSCdLK64tB/x75r5aIjLsT661C', 'anggota', 'VW1a50vJOSUKjGcivNU5O90OoU2eVR4N5jlgdjULrepkHgrPBfjVQ4NmIxv8', '2022-03-23 07:25:25', '2022-03-23 07:25:25'),
(27, 'Kevin', '214060011.mhs@stmikjabar.ac.id', NULL, '$2y$10$OZhJK5bx5MvlR3rrZPXtM.X9zaKJAFl4YGhy8GnEIIFp3hyJ10sXy', 'anggota', '77b1J1fdKwDRqe3iWO3N5WAWzDxuUKRZFfbA1SHhxENs9CLh7juOG6kGNfqh', '2022-03-23 10:08:15', '2022-03-23 10:08:15'),
(28, 'Naufal', '214060012.mhs@stmikjabar.ac.id', NULL, '$2y$10$yKcs7Or2L39yoW4QVlseBOB1Lbhqwhcte6BMTmK36Il4kAA/HJwmG', 'anggota', 'VlETXeniktVi30Zym4QdntdMBeGXfWXBw9fRhcgTwlEEOe9WxApmdBjj8nhW', '2022-03-23 10:14:04', '2022-03-23 10:14:04'),
(29, 'Irpan Wahyudin', '204060014.mhs@stmikjabar.ac.id', NULL, '$2y$10$qXfskrusEkz75t65Hjvlwe3R3X7x/WO/n0/iRkoTYh1Zeuj46hW8W', 'admin', 'ufCOB5M5z8Y0nGRA6qfx7nKsraMbp8fFui7l74DumYHgpnHsev8IZ3DpCIUd', '2022-03-24 07:46:39', '2022-03-24 07:46:39'),
(30, 'Tasya Fitri Sawaliyah', '204060029.mhs@stmikjabar.ac.id', NULL, '$2y$10$R.oQ8isjvGjY8vZeaCJ5Peuk.n2Cg8U130LquKdzuN1rXps/hmoRa', 'writer', 'bJRJpr1RGzluxY11SMhtCbKW1jS4UTEN0suZ2hP5QSVwcjMXB4kOGXUMyiOu', '2022-03-24 07:50:20', '2022-03-24 07:50:20'),
(31, 'Eka Ajeng Meysa', '204060039.mhs@stmikjabar.ac.id', NULL, '$2y$10$.H4cJhVq6YKc4IAFLjvmA.M3mROKS0gE.dy4xpm1ziIZnG/vRtlou', 'admin', 'fDLWwFyryO8wTJXbglwbfOR6nxp75I6X0DdqZz44dJX53yFkmTTAL8Q8S2uy', '2022-03-24 07:52:08', '2022-03-24 07:52:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aspirasi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `aspirasi_masyarakat`
--
ALTER TABLE `aspirasi_masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kegiatan_event_id_unique` (`event_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `struktur_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `aspirasi_masyarakat`
--
ALTER TABLE `aspirasi_masyarakat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD CONSTRAINT `aspirasi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`);

--
-- Ketidakleluasaan untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD CONSTRAINT `struktur_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

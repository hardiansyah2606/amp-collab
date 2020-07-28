-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2020 pada 14.05
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maniskumpamp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bdd24123pks`
--

CREATE TABLE `bdd24123pks` (
  `noPks` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idVendor` int(11) NOT NULL DEFAULT 0,
  `idMitra` int(11) NOT NULL DEFAULT 0,
  `idLokasikerja` int(11) NOT NULL,
  `idBidangpekerjaan` int(11) NOT NULL,
  `tanggalMulai` date NOT NULL,
  `tanggalBerakhir` date NOT NULL,
  `contacPerson` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `JumlahSDM` int(11) DEFAULT 0,
  `nilaiKontrak` double(15,2) DEFAULT NULL,
  `buktiselesai` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `katalogHCopy` varchar(30) DEFAULT NULL,
  `katalogSCopy` varchar(40) DEFAULT NULL,
  `userLogin` varchar(15) DEFAULT NULL,
  `validasi` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `idKaryawan` int(11) NOT NULL,
  `noktp` varchar(30) CHARACTER SET utf8 NOT NULL,
  `namaKaryawan` varchar(70) CHARACTER SET utf8 DEFAULT '-',
  `agama` varchar(15) CHARACTER SET utf8 DEFAULT '-',
  `jantina` varchar(10) CHARACTER SET utf8 DEFAULT '-',
  `idVendor` int(11) NOT NULL DEFAULT 0,
  `idMitra` int(11) NOT NULL,
  `idLok` int(11) DEFAULT 0,
  `idDivisi` int(11) NOT NULL,
  `idJab` int(11) DEFAULT NULL,
  `pendidikan` varchar(20) CHARACTER SET utf8 DEFAULT '-',
  `noKK` varchar(30) CHARACTER SET utf8 DEFAULT '',
  `alamatSesuaiKTP` varchar(100) CHARACTER SET utf8 DEFAULT '',
  `AlamatDomisili` varchar(100) CHARACTER SET utf8 DEFAULT '-',
  `statRumah` varchar(30) CHARACTER SET utf8 DEFAULT '-',
  `npwp` varchar(24) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '-',
  `statusNikah` varchar(20) CHARACTER SET utf8 DEFAULT '-',
  `tempatLahir` varchar(40) CHARACTER SET utf8 DEFAULT '-',
  `tanggalLahir` date DEFAULT NULL,
  `noHP` varchar(40) CHARACTER SET utf8 DEFAULT '-',
  `email` varchar(40) CHARACTER SET utf8 DEFAULT '-',
  `idBank` int(11) DEFAULT 0,
  `noRekening` varchar(30) CHARACTER SET utf8 DEFAULT '-',
  `PemilikRekening` varchar(50) CHARACTER SET utf8 DEFAULT '-',
  `namaIbuKandung` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `noktpibukandung` varchar(28) CHARACTER SET utf8 DEFAULT '-',
  `tmt` date DEFAULT NULL,
  `tkt` date DEFAULT NULL,
  `keterangan` varchar(75) CHARACTER SET utf8 DEFAULT '',
  `statusKaryawan` varchar(30) CHARACTER SET utf8 DEFAULT '-',
  `referensi` varchar(30) CHARACTER SET utf8 DEFAULT '-',
  `direkrutOleh` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '-',
  `golonganDarah` varchar(5) CHARACTER SET utf8 DEFAULT '-',
  `tinggiBadan` float(6,1) DEFAULT 0.0,
  `beratBadan` float(6,1) DEFAULT 0.0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `noktp`, `namaKaryawan`, `agama`, `jantina`, `idVendor`, `idMitra`, `idLok`, `idDivisi`, `idJab`, `pendidikan`, `noKK`, `alamatSesuaiKTP`, `AlamatDomisili`, `statRumah`, `npwp`, `statusNikah`, `tempatLahir`, `tanggalLahir`, `noHP`, `email`, `idBank`, `noRekening`, `PemilikRekening`, `namaIbuKandung`, `noktpibukandung`, `tmt`, `tkt`, `keterangan`, `statusKaryawan`, `referensi`, `direkrutOleh`, `golonganDarah`, `tinggiBadan`, `beratBadan`) VALUES
(3, '1231231231', 'Ridwan Lawson', 'Islam', 'Lelaki', 1, 4, NULL, 68, NULL, 'S1', '123123123', 'Jl Kebenaran', 'Jl Kaki', 'Kontrak', '897987', 'Kawin Anak 0', 'Padang', '1997-11-27', '085263584966', 'ridwan@gmail.com', 13, '1231231', '12312312', 'Rohaye', '12321312312', '2020-07-10', '2020-07-25', 'Good', 'Aktif', 'Hard', 'Eko', 'a', 139.0, 56.0),
(4, '12312312313', 'Eko', 'Islam', 'Lelaki', 1, 2, 2, 78, 2, 'S3', '123123131231', 'Jl Kaki', 'Jl Pulang', 'Milik Sendiri', '1231312', 'Kawin Anak 2', 'Padang', '1992-11-11', '018310831203', 'eko@gmpgroup.id', 2, '12931083019', '190283019831', 'Ibuku', '1231232131', '2020-07-27', '2020-07-27', 'Mantap Djiwa', 'Aktif', 'Daftar Pustaka', 'Prof. Amrin Lubis', 'AB', 170.0, 68.0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `noktp` int(11) NOT NULL,
  `nm_log` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `noktp`, `nm_log`, `created_at`) VALUES
(1, 232321, 'ridwan menambahkan data karyawan baru dengan nama Eko dari menu master', '2020-07-26 22:14:50'),
(2, 232321, 'ridwan menambahkan data karyawan baru dengan nama Eko dari menu master', '2020-07-26 22:17:48'),
(3, 232321, 'ridwan Mengakses menu bank dari menu master', '2020-07-26 23:46:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbank`
--

CREATE TABLE `mbank` (
  `idBank` int(11) NOT NULL,
  `bank` varchar(70) DEFAULT '-',
  `alamat` varchar(70) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `mbank`
--

INSERT INTO `mbank` (`idBank`, `bank`, `alamat`) VALUES
(1, 'PT. BANK RAKYAT INDONESIA (PERSERO), Tbk', ''),
(2, 'PT. BANK MANDIRI (PERSERO), Tbk', ''),
(3, 'PT. BANK NEGARA INDONESIA (PERSERO), Tbk', ''),
(4, 'BPD SUMATERA BARAT (BANK NAGARI)', ''),
(5, 'PT. BANK BUKOPIN', ''),
(6, 'PT. BANK DANAMON INDONESIA, Tbk', ''),
(7, 'PEMBAYARAN CASH', ''),
(8, 'PT. BANK MUAMALAT INDONESIA', ''),
(9, 'PT. BANK SYARIAH MANDIRI', ''),
(10, 'BANK NAGARI SYARIAH PADANG', ''),
(11, 'PT. BANK MEGA', ''),
(12, 'PT. BANK SUMUT', ''),
(13, 'PT. BANK PANIN', ''),
(14, 'PT. BANK PERMATA', ''),
(15, 'PT. BANK MUAMALAT', ''),
(16, 'PT. BANK TABUNGAN NEGARA (PERSERO)', ''),
(17, 'E-BATARA POS', ''),
(18, 'BANK CENTRAL ASIA (BCA)', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbidangpekerjaan`
--

CREATE TABLE `mbidangpekerjaan` (
  `idBidangpekerjaan` int(11) NOT NULL,
  `BidangPekerjaan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `mbidangpekerjaan`
--

INSERT INTO `mbidangpekerjaan` (`idBidangpekerjaan`, `BidangPekerjaan`) VALUES
(1, 'Warehouse Operator'),
(2, 'Penyediaan Jasa Tenaga Kerja Bidang Sales Force Funding'),
(3, 'Jasa Tenaga Kerja Bidang Micro Business'),
(4, 'Jasa Pengamanan'),
(5, 'Pengadaan Jasa Scanning'),
(6, 'Jasa Cleaning Service'),
(7, 'Bidang Cleaning Service, Operator Telpon, Pemeliharaan Instalasi Air'),
(8, 'Bottle Sorter'),
(9, 'Security, Distribusi dan Pengemudi'),
(1, 'Warehouse Operator'),
(2, 'Penyediaan Jasa Tenaga Kerja Bidang Sales Force Funding'),
(3, 'Jasa Tenaga Kerja Bidang Micro Business'),
(4, 'Jasa Pengamanan'),
(5, 'Pengadaan Jasa Scanning'),
(6, 'Jasa Cleaning Service'),
(7, 'Bidang Cleaning Service, Operator Telpon, Pemeliharaan Instalasi Air'),
(8, 'Bottle Sorter'),
(9, 'Security, Distribusi dan Pengemudi'),
(1, 'Warehouse Operator'),
(2, 'Penyediaan Jasa Tenaga Kerja Bidang Sales Force Funding'),
(3, 'Jasa Tenaga Kerja Bidang Micro Business'),
(4, 'Jasa Pengamanan'),
(5, 'Pengadaan Jasa Scanning'),
(6, 'Jasa Cleaning Service'),
(7, 'Bidang Cleaning Service, Operator Telpon, Pemeliharaan Instalasi Air'),
(8, 'Bottle Sorter'),
(9, 'Security, Distribusi dan Pengemudi'),
(10, 'Jasa Tenaga Kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mdivisi`
--

CREATE TABLE `mdivisi` (
  `iddivisi` int(11) NOT NULL,
  `divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mdivisi`
--

INSERT INTO `mdivisi` (`iddivisi`, `divisi`) VALUES
(79, 'BDD'),
(77, 'Direktur'),
(78, 'Direktur Utama'),
(68, 'Manager'),
(70, 'Sekretaris'),
(73, 'Staff IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjabatan`
--

CREATE TABLE `mjabatan` (
  `idjabatan` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mjabatan`
--

INSERT INTO `mjabatan` (`idjabatan`, `jabatan`) VALUES
(7, 'Direktur'),
(2, 'General Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mlokasikerja`
--

CREATE TABLE `mlokasikerja` (
  `idLok` int(11) NOT NULL,
  `lokasiKerja` varchar(100) CHARACTER SET utf8 DEFAULT '-',
  `idMitra` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `mlokasikerja`
--

INSERT INTO `mlokasikerja` (`idLok`, `lokasiKerja`, `idMitra`) VALUES
(1, 'Siteba, Kota Padang', 3),
(2, 'Cabang Bandar Buat', 3),
(3, 'Cabang Pariaman, Jalan Sudirman', 3),
(4, 'Jalan Lintas Sumatra,Jorong Pasar Kota Baru', 2),
(5, 'Jakarta Barat', 1),
(6, 'Jakarta Pusat', 1),
(7, 'Jati', 0),
(8, 'Jati', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmitra`
--

CREATE TABLE `mmitra` (
  `idMitra` int(11) NOT NULL,
  `Mitra` varchar(100) DEFAULT '-',
  `Alamat` text DEFAULT NULL,
  `telp` varchar(70) DEFAULT NULL,
  `fax` varchar(70) DEFAULT NULL,
  `kota` varchar(70) DEFAULT NULL,
  `namaKaCabang` varchar(100) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `kategoriMitra` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmitra`
--

INSERT INTO `mmitra` (`idMitra`, `Mitra`, `Alamat`, `telp`, `fax`, `kota`, `namaKaCabang`, `email`, `kategoriMitra`, `created_at`, `updated_at`) VALUES
(4, 'PT. BANK DANAMON INDONESIA Tbk.', 'Jalan .Prof DR. Satrio Kav E4-6 Jakarta', '02125537255', '021 255 37 244', 'Jakarta', NULL, NULL, '0', NULL, NULL),
(2, 'PT. BFI FINANCE INDONESIA', 'Jalan Lintas Sumatra,Jorong Pasar Kota Baru ', '0754-71155', '0754-71160', 'Padang', '-', '-', 'Mitra Dalam Negeri', NULL, NULL),
(1, 'PT. BANK DANAMON INDONESIA Tbk.', 'Jalan .Prof DR. Satrio Kav E4-6 Jakarta ', '021 255 37 255', '021 255 37 244', 'Jakarta', '-', '-', 'Mitra Dalam Negeri', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mprovinsi`
--

CREATE TABLE `mprovinsi` (
  `idprovinsi` int(11) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mprovinsi`
--

INSERT INTO `mprovinsi` (`idprovinsi`, `provinsi`) VALUES
(19, 'Jambi'),
(18, 'Kalimantan Barat'),
(21, 'Sumatera Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvendor`
--

CREATE TABLE `mvendor` (
  `idVendor` int(11) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mvendor`
--

INSERT INTO `mvendor` (`idVendor`, `vendor`, `alamat`, `kota`, `email`) VALUES
(1, 'PT. ANDALAN MITRA PRESTASI', 'Jl. S Parman no 80-82-118b', 'Padang', 'andalanmitrapretasi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noktp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `noktp`, `name`, `email`, `divisi`, `jabatan`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '123', 'riki', 'admin@example.com', 0, 0, 0, NULL, '$2y$10$nX9xwTJkjKDOzGxemACRGe2S9PCcbFW9eRmn4Yw2gStRi0fNgLbOi', NULL, NULL, NULL),
(6, '312321', 'sonimm', 'aa@gmail.com', 0, 0, 0, NULL, '$2y$10$EEXARgdBCk6JBZeq94CdSuvEZf4dtxFCCbM3mLVEK18wEDtMyhK0W', NULL, NULL, NULL),
(7, '232321', 'ridwan', 'ridwan@gmail.com', 79, 2, 1, NULL, '$2y$10$d1NPoOa5foTKesmJiyB4/ujJ/1He0l5Pnl.Sf1XPTV0/KtTuFoHD.', NULL, NULL, NULL),
(8, '13123213', 'hardian syahputra', 'hardiansyahputra2606@gmail.com', 0, 0, 0, NULL, '$2y$10$LerO4nQlUEgMpcWmJ7xqau1BzrLJVeg4BfKp89KjjlFfwfDG4t3Di', NULL, NULL, NULL),
(9, '12312312313', 'Eko', 'eko@gmpgroup.id', 78, 2, 0, NULL, '$2y$10$AnXX5pjNRhl/vPVs8t79m.lvmS4vzv0fIbWGNCmFF7HArnMvQlUEe', 'xSzZHlOgCcs7rNvgMOrd0AD2dw1Zk5B5rWH3CVvCfdMgkF9QmHB1Y1WqpJ05', '2020-07-26 22:17:49', NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vkaryawan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vkaryawan` (
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vmitralokasikerja`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vmitralokasikerja` (
`idMitra` int(11)
,`Mitra` varchar(100)
,`alamatMitra` text
,`telpMitra` varchar(70)
,`faxMitra` varchar(70)
,`kotaMitra` varchar(70)
,`namaKaCabangMitra` varchar(100)
,`emailMitra` varchar(80)
,`kategoriMitra` varchar(50)
,`idLok` int(11)
,`lokasiKerja` varchar(100)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vkaryawan`
--
DROP TABLE IF EXISTS `vkaryawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vkaryawan`  AS  select `karyawan`.`noktp` AS `noktp`,`karyawan`.`noid` AS `noid`,`karyawan`.`namaKaryawan` AS `namaKaryawan`,`karyawan`.`agama` AS `agama`,`karyawan`.`jantina` AS `jantina`,`karyawan`.`AlamatDomisili` AS `AlamatDomisili`,`karyawan`.`alamatSesuaiKTP` AS `alamatSesuaiKTP`,`mvendor`.`idVendor` AS `idVendor`,`mvendor`.`vendor` AS `vendor`,`mvendor`.`alamat` AS `alamatVendor`,`mvendor`.`kota` AS `kotaVendor`,`mvendor`.`email` AS `emailVendor`,`mmitra`.`idMitra` AS `idMitra`,`mmitra`.`Mitra` AS `Mitra`,`mmitra`.`Alamat` AS `alamatMitra`,`mmitra`.`telp` AS `telpMitra`,`mmitra`.`fax` AS `faxMitra`,`mmitra`.`kota` AS `kotaMitra`,`mmitra`.`namaKaCabang` AS `namaKaCabang`,`mmitra`.`email` AS `emailMitra`,`mmitra`.`kategoriMitra` AS `kategoriMitra`,`mlokasikerja`.`lokasiKerja` AS `lokasiKerja`,`mlokasikerja`.`idLok` AS `idLok`,`mjabatan`.`idjabatan` AS `idjabatan`,`mjabatan`.`jabatan` AS `jabatan`,`mbank`.`idBank` AS `idBank`,`mbank`.`bank` AS `bank`,`mbank`.`alamat` AS `alamatBank`,`karyawan`.`pendidikan` AS `pendidikan`,`karyawan`.`noKK` AS `noKK`,`karyawan`.`statRumah` AS `statRumah`,`karyawan`.`npwp` AS `npwp`,`karyawan`.`statusNikah` AS `statusNikah`,`karyawan`.`tempatLahir` AS `tempatLahir`,`karyawan`.`tanggalLahir` AS `tanggalLahir`,`karyawan`.`noHP` AS `noHP`,`karyawan`.`email` AS `emailkaryawan`,`karyawan`.`noRekening` AS `noRekening`,`karyawan`.`PemilikRekening` AS `PemilikRekening`,`karyawan`.`namaIbuKandung` AS `namaIbuKandung`,`karyawan`.`noktpibukandung` AS `noktpibukandung`,`karyawan`.`tmt` AS `tmt`,`karyawan`.`tkt` AS `tkt`,`karyawan`.`keterangan` AS `keterangan`,`karyawan`.`statusKaryawan` AS `statusKaryawan`,`karyawan`.`referensi` AS `referensi`,`karyawan`.`direkrutOleh` AS `direkrutOleh`,`karyawan`.`golonganDarah` AS `golonganDarah`,`karyawan`.`tinggiBadan` AS `tinggiBadan`,`karyawan`.`beratBadan` AS `beratBadan` from (((((`mvendor` join `karyawan` on(`mvendor`.`idVendor` = `karyawan`.`idVendor`)) join `mmitra` on(`karyawan`.`idMitra` = `mmitra`.`idMitra`)) join `mlokasikerja` on(`karyawan`.`idLok` = `mlokasikerja`.`idLok`)) join `mjabatan` on(`karyawan`.`idJab` = `mjabatan`.`idjabatan`)) join `mbank` on(`karyawan`.`idBank` = `mbank`.`idBank`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vmitralokasikerja`
--
DROP TABLE IF EXISTS `vmitralokasikerja`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmitralokasikerja`  AS  select `mmitra`.`idMitra` AS `idMitra`,`mmitra`.`Mitra` AS `Mitra`,`mmitra`.`Alamat` AS `alamatMitra`,`mmitra`.`telp` AS `telpMitra`,`mmitra`.`fax` AS `faxMitra`,`mmitra`.`kota` AS `kotaMitra`,`mmitra`.`namaKaCabang` AS `namaKaCabangMitra`,`mmitra`.`email` AS `emailMitra`,`mmitra`.`kategoriMitra` AS `kategoriMitra`,`mlokasikerja`.`idLok` AS `idLok`,`mlokasikerja`.`lokasiKerja` AS `lokasiKerja` from (`mmitra` join `mlokasikerja` on(`mmitra`.`idMitra` = `mlokasikerja`.`idMitra`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bdd24123pks`
--
ALTER TABLE `bdd24123pks`
  ADD PRIMARY KEY (`noPks`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `mbank`
--
ALTER TABLE `mbank`
  ADD PRIMARY KEY (`idBank`),
  ADD UNIQUE KEY `bank` (`bank`);

--
-- Indeks untuk tabel `mdivisi`
--
ALTER TABLE `mdivisi`
  ADD PRIMARY KEY (`iddivisi`),
  ADD UNIQUE KEY `divisi` (`divisi`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mjabatan`
--
ALTER TABLE `mjabatan`
  ADD PRIMARY KEY (`idjabatan`),
  ADD UNIQUE KEY `jabatan` (`jabatan`);

--
-- Indeks untuk tabel `mlokasikerja`
--
ALTER TABLE `mlokasikerja`
  ADD PRIMARY KEY (`idLok`);

--
-- Indeks untuk tabel `mmitra`
--
ALTER TABLE `mmitra`
  ADD PRIMARY KEY (`idMitra`);

--
-- Indeks untuk tabel `mprovinsi`
--
ALTER TABLE `mprovinsi`
  ADD PRIMARY KEY (`idprovinsi`),
  ADD UNIQUE KEY `provinsi` (`provinsi`);

--
-- Indeks untuk tabel `mvendor`
--
ALTER TABLE `mvendor`
  ADD PRIMARY KEY (`idVendor`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idKaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mbank`
--
ALTER TABLE `mbank`
  MODIFY `idBank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mdivisi`
--
ALTER TABLE `mdivisi`
  MODIFY `iddivisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mjabatan`
--
ALTER TABLE `mjabatan`
  MODIFY `idjabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mlokasikerja`
--
ALTER TABLE `mlokasikerja`
  MODIFY `idLok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mmitra`
--
ALTER TABLE `mmitra`
  MODIFY `idMitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mprovinsi`
--
ALTER TABLE `mprovinsi`
  MODIFY `idprovinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `mvendor`
--
ALTER TABLE `mvendor`
  MODIFY `idVendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

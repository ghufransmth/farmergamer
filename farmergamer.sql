-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3308
-- Generation Time: 08 Jul 2018 pada 10.39
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmergamer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dicari`
--

CREATE TABLE `dicari` (
  `id_dicari` int(11) NOT NULL,
  `kd_dicari` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `jenis_dicari` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `nama_dicari` varchar(100) NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_input` date NOT NULL,
  `waktu_input` text NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `favorit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dicari`
--

INSERT INTO `dicari` (`id_dicari`, `kd_dicari`, `id_user`, `id_game`, `jenis_dicari`, `judul`, `nama_dicari`, `kategori`, `harga`, `jumlah`, `tgl_input`, `waktu_input`, `keterangan`, `foto`, `favorit`) VALUES
(1, 'B20205180001', 1, 1, 'Jasa', 'xxxxxx', 'xx', '["Equipment"]', 150000, 1, '2018-05-02', '08:09', 'ABC\r\ndef\r\nghi', '["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg"]', 0),
(2, 'B21005180001', 1, 1, 'jasa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbcccccddeefffffggggggggggghhhhhhhhhhhhhhhhhhhiiiii', 'aaaa', '["gold","equipment"]', 10000, 1, '2018-05-10', '19:52', 'bbbbcde', '["no_image.jpg"]', 0),
(3, 'B21205180001', 1, 2, 'jasa', 'abcde @25000', 'aaaabbb', '["Equipment"]', 25000, 1, '2018-05-12', '09:48', 'bbbb', '["no_image.jpg"]', 0),
(4, 'A20606180001', 33, 1, 'produk', 'bbbcc', 'cccc', '["Gold","Lainnya"]', 15000, 1, '2018-06-06', '23:45', 'bbbbb', '["no_image.jpg"]', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dijual`
--

CREATE TABLE `dijual` (
  `id_dijual` int(11) NOT NULL,
  `kd_dijual` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `jenis_dijual` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `nama_dijual` varchar(150) NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) DEFAULT NULL,
  `harga_diskon` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_input` date NOT NULL,
  `waktu_input` text NOT NULL,
  `keterangan` text,
  `foto` varchar(100) NOT NULL,
  `favorit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dijual`
--

INSERT INTO `dijual` (`id_dijual`, `kd_dijual`, `id_user`, `id_game`, `jenis_dijual`, `judul`, `nama_dijual`, `kategori`, `harga`, `diskon`, `harga_diskon`, `jumlah`, `tgl_input`, `waktu_input`, `keterangan`, `foto`, `favorit`) VALUES
(25, 'B12904180001', 1, 2, 'Jasa', 'aabbcdee 1/5', 'aaaa', '["Equipment"]', 150000, 10, 135000, 1, '2018-04-29', '19:28', 'bbbbb', '["no_image.jpg"]', 0),
(27, 'B13004180001', 2, 1, 'Jasa', 'aaa', 'bbb', '["Equipment","Gold","Lainnya"]', 15000, 10, 13500, 1, '2018-04-30', '08:07', 'cccc', '["no_image.jpg"]', 0),
(28, 'B13004180002', 1, 1, 'Jasa', 'JUAL ABCD @10000 MINAT ONLY NO TIPU2', 'bbbb', '["Equipment","Gold","Lainnya"]', 1000, 90, 100, 1, '2018-04-30', '11:39', 'aabccde', '["10.jpg","2.jpg","3.jpg","4.jpg","1.jpg"]', 0),
(29, 'B10405180001', 1, 2, 'Jasa', 'juaalllllllllllllllllllllllllllllllllllllllllllllllljuaalllllllllllllllllllllllllllllllllllllllllll', 'bbb', '["Gold"]', 10000, 0, 10000, 1, '2018-05-04', '20:21', 'aaaa', '["no_image.jpg"]', 0),
(30, 'A10405180001', 1, 1, 'produk', 'aaaaaaaaaaaaaabbbcccccccccccccccccccdddeeeeeeeeeeeeeeeeffgghhhhhhiijjjjjjjjjjjjjkkkkkkkkkkklmmmmmnnn', 'aaaa', '["equipment","lainnya"]', 15000, 10, 13500, 1, '2018-05-04', '20:31', 'aaa', '["no_image.jpg"]', 0),
(31, 'A10505180001', 1, 3, 'Produk', 'JUAL QWERTY @1500 MINAT ONLY NO TIPU2', 'aaaa', '["Gold","Equipment"]', 1500, 0, 1500, 7, '2018-05-05', '07:52', 'bbbbbbbbbbbbbbccde', '["no_image.jpg"]', 1),
(32, 'A10505180002', 1, 1, 'Produk', 'bbbbc +2000', 'aaaa', '["Lainnya"]', 35000, 10, 31500, 1, '2018-05-05', '08:07', 'bbbccc', '["6.jpg","7.jpg"]', 0),
(33, 'A10505180003', 1, 1, 'produk', 'aaaabb ccdee efgh', '95000', '["gold","equipment","lainnya"]', 150000, 0, 150000, 1, '2018-05-05', '08:19', 'abdeefgh', '["8.jpg"]', 1),
(34, 'A10505180004', 1, 1, 'produk', 'JUAL JUAL JUAL', 'ddde', '["Equipment"]', 7500, 90, 750, 20, '2018-05-05', '08:20', 'aabcde', '["5.jpg"]', 1),
(35, 'A10505180005', 1, 1, 'produk', 'tes gambar', 'abcde', '["equipment"]', 3500, 90, 350, 1, '2018-05-05', '08:32', 'aaabbcde', '["11.jpg"]', 1),
(36, 'A10505180006', 1, 3, 'produk', 'bbbcde', 'aaa', '["equipment"]', 1500, 0, 1500, 1, '2018-05-05', '08:34', 'bbb', '["21.jpg"]', 1),
(37, 'A11205180001', 1, 1, 'produk', 'bbbccde', 'aaa', '["Gold"]', 20000, 10, 18000, 1, '2018-05-12', '09:43', 'bbbb', '["no_image.jpg"]', 1),
(38, 'A12205180001', 2, 1, 'produk', 'TES TES TES TES TES', 'aaaa', '["equipment"]', 15000, 50, 7500, 1, '2018-05-22', '05:08', 'bbbcdde', '["no_image.jpg"]', 0),
(39, 'A10606180001', 33, 2, 'produk', 'ABC DEF GHI', 'ABC DEF', '["Gold"]', 150000, 20, 120000, 10, '2018-06-06', '03:56', 'nice nice', '["camera.jpg"]', 1),
(40, 'A10606180002', 33, 1, 'produk', 'Jam Tangan', 'Jam Tangan', '["lainnya"]', 100000, 10, 90000, 1, '2018-06-06', '03:57', 'murah loh...', '["watch.jpg"]', 1),
(41, 'A10606180003', 33, 1, 'produk', 'External Hdd @150000', 'External Hdd', '["gold"]', 149999, 0, 150000, 5, '2018-06-06', '03:58', 'harga promo external hdd....', '["external-hard-drive.jpg"]', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `judul` text NOT NULL,
  `promotor` text NOT NULL,
  `biaya_pendaftaran` int(11) NOT NULL,
  `hadiah` varchar(200) NOT NULL,
  `kategori_event` varchar(50) NOT NULL COMMENT '"Tournament","Give Away","Gathering","Promo"',
  `min_peserta` int(11) NOT NULL,
  `max_peserta` int(11) NOT NULL,
  `jenis_event` varchar(10) NOT NULL COMMENT '"Single","Team"',
  `jml_personel` int(11) NOT NULL,
  `nama_game` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorit_dicari`
--

CREATE TABLE `favorit_dicari` (
  `id_favorit_dicari` int(11) NOT NULL,
  `id_dicari` int(11) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorit_dijual`
--

CREATE TABLE `favorit_dijual` (
  `id_favorit_dijual` int(11) NOT NULL,
  `id_dijual` int(11) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `favorit_dijual`
--

INSERT INTO `favorit_dijual` (`id_favorit_dijual`, `id_dijual`, `id_user`) VALUES
(36, 31, 2),
(37, 36, 2),
(309, 33, 1),
(318, 34, 1),
(320, 37, 1),
(322, 35, 33),
(335, 40, 33),
(336, 39, 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_item`
--

CREATE TABLE `kategori_item` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_item`
--

INSERT INTO `kategori_item` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Gold'),
(2, 'Equipment'),
(3, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_game`
--

CREATE TABLE `list_game` (
  `id_game` int(11) NOT NULL,
  `nama_game` varchar(100) NOT NULL,
  `jenis_game` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_game`
--

INSERT INTO `list_game` (`id_game`, `nama_game`, `jenis_game`) VALUES
(1, 'RO Return', 'mmorpg'),
(2, 'RF Return', 'mmorpg'),
(3, 'Blade N Soul', 'mmorpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `kode_pembayaran` int(11) NOT NULL,
  `no_rek` text,
  `atas_nama` text,
  `tgl_pembayaran` date DEFAULT NULL,
  `waktu_pembayaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kode_pembayaran`, `no_rek`, `atas_nama`, `tgl_pembayaran`, `waktu_pembayaran`) VALUES
(1, 1232263610, NULL, NULL, NULL, NULL),
(2, 1209525302, NULL, NULL, NULL, NULL),
(3, 1261697015, NULL, NULL, NULL, NULL),
(4, 1027781530, NULL, NULL, NULL, NULL),
(5, 1401305465, NULL, NULL, NULL, NULL),
(6, 1331426155, NULL, NULL, NULL, NULL),
(7, 1011513066, NULL, NULL, NULL, NULL),
(8, 1130835993, NULL, NULL, NULL, NULL),
(9, 1299852821, NULL, NULL, NULL, NULL),
(10, 1274223733, NULL, NULL, NULL, NULL),
(11, 1012701916, NULL, NULL, NULL, NULL),
(12, 1001701931, NULL, NULL, NULL, NULL),
(13, 1033212695, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_event`
--

CREATE TABLE `pendaftaran_event` (
  `id_daftar` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_personel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_dijual`
--

CREATE TABLE `rating_dijual` (
  `id_rating_dijual` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_dijual` int(11) NOT NULL,
  `id_pembeli` int(4) NOT NULL,
  `id_penjual` int(4) NOT NULL,
  `testimoni` text NOT NULL,
  `nilai_rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating_dijual`
--

INSERT INTO `rating_dijual` (`id_rating_dijual`, `id_transaksi`, `id_dijual`, `id_pembeli`, `id_penjual`, `testimoni`, `nilai_rating`) VALUES
(1, 23, 34, 33, 1, 'Respon Penjual Sangat Baik. Harga Item Sangat Baik.', 1),
(2, 23, 32, 33, 1, 'Harga Item Sangat Baik.', 3),
(3, 22, 38, 33, 2, 'Kecepatan Pengiriman Sangat Baik.', 3),
(4, 21, 41, 33, 33, 'Respon Penjual Sangat Baik.', 4),
(5, 20, 38, 33, 2, 'Respon Penjual Sangat Baik.', 5),
(6, 19, 36, 33, 1, 'Harga Item Sangat Baik. Kecepatan Pengiriman Sangat Baik. Respon Penjual Sangat Baik.', 5),
(7, 19, 35, 33, 1, 'Harga Item Sangat Baik. Respon Penjual Sangat Baik.', 3),
(8, 2, 38, 33, 2, 'Respon Penjual Sangat Baik. Harga Item Sangat Baik. Kecepatan Pengiriman Sangat Baik.', 4),
(9, 1, 31, 33, 1, 'Harga Item Sangat Baik.', 1),
(10, 1, 35, 33, 1, 'Kecepatan Pengiriman Sangat Baik.', 1),
(11, 1, 34, 33, 1, 'Harga Item Sangat Baik.', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating_event`
--

CREATE TABLE `rating_event` (
  `id_rating_event` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_pembeli` int(4) NOT NULL,
  `testimoni` text NOT NULL,
  `nilai_rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `no_pesanan` int(11) NOT NULL,
  `tulis_pesan` text NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `waktu_transaksi` text NOT NULL,
  `pembayaran` int(1) NOT NULL COMMENT '0=''belum'',1=''sudah''',
  `selesai` int(1) NOT NULL COMMENT '0=''belum'',1=''sudah''',
  `pengembalian` int(1) NOT NULL COMMENT '0=''belum'',1=''sudah'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pembeli`, `id_pembayaran`, `no_pesanan`, `tulis_pesan`, `id_penjual`, `tgl_transaksi`, `waktu_transaksi`, `pembayaran`, `selesai`, `pengembalian`) VALUES
(1, 33, 1, 2035, '', 1, '2018-06-02', '20:26', 1, 1, 0),
(2, 33, 1, 6835, '', 2, '2018-06-02', '20:26', 1, 1, 0),
(3, 33, 2, 8528, '', 1, '2018-06-02', '20:34', 0, 0, 0),
(4, 33, 2, 7731, '', 2, '2018-06-02', '20:34', 0, 0, 0),
(5, 33, 3, 2698, '', 2, '2018-06-02', '20:40', 0, 0, 0),
(6, 33, 3, 9414, '', 1, '2018-06-02', '20:40', 0, 0, 0),
(7, 33, 4, 6164, '', 2, '2018-06-02', '20:52', 0, 0, 0),
(8, 33, 4, 3041, '', 1, '2018-06-02', '20:52', 0, 0, 0),
(9, 33, 5, 5371, '', 2, '2018-06-02', '22:09', 0, 0, 0),
(10, 33, 5, 7706, '', 1, '2018-06-02', '22:09', 0, 0, 0),
(11, 33, 6, 2449, '', 2, '2018-06-03', '19:51', 0, 0, 0),
(12, 33, 6, 6419, '', 1, '2018-06-03', '19:51', 0, 0, 0),
(13, 33, 7, 1558, '', 1, '2018-06-03', '22:29', 0, 0, 0),
(14, 33, 8, 2530, '', 1, '2018-06-05', '20:51', 0, 0, 0),
(15, 33, 8, 4141, '', 2, '2018-06-05', '20:51', 0, 0, 0),
(16, 33, 9, 3838, '', 33, '2018-06-06', '04:01', 0, 0, 0),
(17, 33, 9, 1298, '', 2, '2018-06-06', '04:01', 0, 0, 0),
(18, 33, 9, 4448, '', 1, '2018-06-06', '04:01', 0, 0, 0),
(19, 33, 10, 5525, '', 1, '2018-06-07', '21:00', 1, 1, 0),
(20, 33, 10, 5236, '', 2, '2018-06-07', '21:00', 1, 1, 0),
(21, 33, 11, 3418, '', 33, '2018-06-08', '04:13', 1, 1, 0),
(22, 33, 11, 6400, '', 2, '2018-06-08', '04:13', 1, 1, 0),
(23, 33, 11, 7293, '', 1, '2018-06-08', '04:13', 1, 1, 0),
(24, 33, 12, 7337, '', 33, '2018-06-23', '16:54', 0, 0, 0),
(25, 33, 12, 3128, '', 2, '2018-06-23', '16:54', 0, 0, 0),
(26, 33, 12, 8314, '', 1, '2018-06-23', '16:54', 0, 0, 0),
(27, 33, 13, 5376, '', 33, '2018-07-08', '14:02', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_dijual`
--

CREATE TABLE `transaksi_dijual` (
  `id_transaksi_dijual` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_dijual` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_dijual`
--

INSERT INTO `transaksi_dijual` (`id_transaksi_dijual`, `id_transaksi`, `id_dijual`, `quantity`, `harga_beli`) VALUES
(1, 1, 31, 1, 0),
(2, 1, 35, 1, 0),
(3, 1, 34, 1, 0),
(4, 2, 38, 1, 0),
(5, 3, 31, 1, 0),
(6, 3, 33, 1, 0),
(7, 4, 38, 1, 0),
(8, 5, 38, 1, 0),
(9, 6, 31, 4, 0),
(10, 6, 34, 10, 0),
(11, 7, 38, 1, 0),
(12, 8, 33, 1, 0),
(13, 8, 35, 1, 0),
(14, 8, 31, 2, 0),
(15, 9, 38, 1, 0),
(16, 10, 34, 1, 0),
(17, 10, 33, 1, 0),
(18, 11, 38, 1, 0),
(19, 12, 35, 1, 0),
(20, 13, 36, 1, 0),
(21, 13, 35, 1, 0),
(22, 14, 37, 1, 0),
(23, 15, 38, 1, 0),
(24, 16, 40, 1, 0),
(25, 17, 38, 1, 0),
(26, 18, 34, 1, 0),
(27, 18, 32, 1, 0),
(28, 19, 36, 1, 0),
(29, 19, 35, 1, 0),
(30, 20, 38, 1, 0),
(31, 21, 41, 1, 150000),
(32, 22, 38, 1, 7500),
(33, 23, 34, 7, 750),
(34, 23, 32, 1, 31500),
(35, 24, 41, 1, 150000),
(36, 25, 38, 1, 7500),
(37, 26, 34, 5, 750),
(38, 27, 40, 1, 90000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_event`
--

CREATE TABLE `transaksi_event` (
  `id_transaksi_event` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengembalian`
--

CREATE TABLE `t_pengembalian` (
  `id_tpengembalian` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `waktu_pengembalian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_selesai`
--

CREATE TABLE `t_selesai` (
  `id_tselesai` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `waktu_selesai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(4) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `image` text NOT NULL,
  `rating_penjual` float NOT NULL,
  `rating_promotor` float NOT NULL,
  `nomor_telepon` text,
  `alamat` text,
  `tgl_lahir` date DEFAULT NULL,
  `negara` varchar(100) DEFAULT NULL,
  `deskripsi_toko` text,
  `game_favorit` text,
  `info_game` text,
  `level` int(1) NOT NULL COMMENT '1=''superadmin'',2=''administrator'',3=''user'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `nama_depan`, `nama_belakang`, `image`, `rating_penjual`, `rating_promotor`, `nomor_telepon`, `alamat`, `tgl_lahir`, `negara`, `deskripsi_toko`, `game_favorit`, `info_game`, `level`) VALUES
(1, 'admin', 'itzmevant@gmail.com', 'admin', '', '', 'Letter-A.ico', 2.6, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'rizky', 'rizky_adrianto17@yahoo.com', 'rizky', '', '', 'Letter-R.ico', 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(7, 'tes', 'tes@yahoo.com', 'tes', 'tes', '123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(8, 'user', 'user@yahoo.com', 'user', 'user', '123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(9, 'adrianto', 'adrianto@yahoo.com', 'adrianto', 'adrianto', '123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(10, 'adr', 'adr@yahoo.com', 'adr', 'adr', '123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(11, 'qwe', 'qwe@yahoo.com', 'qwe', 'qwe', 'qwe', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(12, 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', 'aaaaaa', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(13, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(14, 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(15, 'zxc', 'zxc', 'zxc', 'zxc', 'zxc', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(16, 'fgh', 'fgh', 'fgh', 'fgh', 'fgh', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(17, 'cvb', 'cvb', 'cvbcv', 'cvb', '123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(18, 'qaz', 'qaz', 'qaz', 'qaz', '123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(19, '123123', '213123', '123123123123123', '21331', '3131', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(20, 'qweeqwq', 'weqwewqewqe', 'wewqewqewqewqeqe', 'e', 'wqeqwe', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(21, '5151515', '151', '515151515151515151', '5515', '1515', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(22, 'klm', 'klm@yahoo.com', 'klm', 'klm', '123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(23, 'abc123', 'abc123', 'abc123', 'abc123', 'abc', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(24, 'tess123', 'tess123', 'tess123', 'tess123', 'tess123', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(25, '12323123', '123', '21321', '321312', '32131', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(26, '4124', '141', '4141', '414', '141', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(27, '2322132131', '414', '141', '41411', '131', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(28, 'testestes', 'testestes', 'testestes', 'testestes', 'testestes', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(29, '123456', '123456', '123456', '123456', '123456', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(30, 'rizky99', 'rizky99', 'rizky99', 'rizky99', 'rizky99', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(31, 'rizky90', 'rizky90', 'rizky90', 'rizky90', 'rizky90', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(32, 'tes1234', 'tess@gmail.com', 'tes', 'tes', 'tes', '', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(33, 'coba', 'coba@gmail.com', 'coba', 'coba', 'coba', 'Letter-C.ico', 4, 0, 'aavccdee', 'jl. jalan', '1990-03-17', 'Indonesia', 'bcccde', '["RF Return","Blade N Soul"]', '[{"id_ingame":"abcdef","nama_game":"Blade N Soul"},{"id_ingame":"aaabbcde","nama_game":"RF Return"}]', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dicari`
--
ALTER TABLE `dicari`
  ADD PRIMARY KEY (`id_dicari`);

--
-- Indexes for table `dijual`
--
ALTER TABLE `dijual`
  ADD PRIMARY KEY (`id_dijual`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `favorit_dicari`
--
ALTER TABLE `favorit_dicari`
  ADD PRIMARY KEY (`id_favorit_dicari`);

--
-- Indexes for table `favorit_dijual`
--
ALTER TABLE `favorit_dijual`
  ADD PRIMARY KEY (`id_favorit_dijual`);

--
-- Indexes for table `kategori_item`
--
ALTER TABLE `kategori_item`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `list_game`
--
ALTER TABLE `list_game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pendaftaran_event`
--
ALTER TABLE `pendaftaran_event`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `rating_dijual`
--
ALTER TABLE `rating_dijual`
  ADD PRIMARY KEY (`id_rating_dijual`);

--
-- Indexes for table `rating_event`
--
ALTER TABLE `rating_event`
  ADD PRIMARY KEY (`id_rating_event`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_dijual`
--
ALTER TABLE `transaksi_dijual`
  ADD PRIMARY KEY (`id_transaksi_dijual`);

--
-- Indexes for table `transaksi_event`
--
ALTER TABLE `transaksi_event`
  ADD PRIMARY KEY (`id_transaksi_event`);

--
-- Indexes for table `t_pengembalian`
--
ALTER TABLE `t_pengembalian`
  ADD PRIMARY KEY (`id_tpengembalian`);

--
-- Indexes for table `t_selesai`
--
ALTER TABLE `t_selesai`
  ADD PRIMARY KEY (`id_tselesai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dicari`
--
ALTER TABLE `dicari`
  MODIFY `id_dicari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dijual`
--
ALTER TABLE `dijual`
  MODIFY `id_dijual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favorit_dicari`
--
ALTER TABLE `favorit_dicari`
  MODIFY `id_favorit_dicari` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favorit_dijual`
--
ALTER TABLE `favorit_dijual`
  MODIFY `id_favorit_dijual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;
--
-- AUTO_INCREMENT for table `kategori_item`
--
ALTER TABLE `kategori_item`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `list_game`
--
ALTER TABLE `list_game`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pendaftaran_event`
--
ALTER TABLE `pendaftaran_event`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating_dijual`
--
ALTER TABLE `rating_dijual`
  MODIFY `id_rating_dijual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rating_event`
--
ALTER TABLE `rating_event`
  MODIFY `id_rating_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `transaksi_dijual`
--
ALTER TABLE `transaksi_dijual`
  MODIFY `id_transaksi_dijual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `transaksi_event`
--
ALTER TABLE `transaksi_event`
  MODIFY `id_transaksi_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_pengembalian`
--
ALTER TABLE `t_pengembalian`
  MODIFY `id_tpengembalian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_selesai`
--
ALTER TABLE `t_selesai`
  MODIFY `id_tselesai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

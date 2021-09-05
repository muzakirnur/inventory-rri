-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Sep 2021 pada 16.15
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_gudang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
`id` int(10) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `tipe_barang` varchar(200) NOT NULL,
  `tahun_pengadaan` int(10) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `id_transaksi`, `tanggal`, `ruangan`, `nama_barang`, `merk_barang`, `tipe_barang`, `tahun_pengadaan`, `keterangan`, `satuan`, `jumlah`, `kondisi_barang`) VALUES
(5, 'WG-202140679835', '26/05/2021', 'Multimedia Purpose', 'Tes', 'Tes2', 'tes3', 2005, 'hahknadad', 'Pcs', 1, 'aktif'),
(6, 'WG-202147015936', '', 'Studio Pro 1', 'Mic Kondenser', 'Boom', 'ZX 3 Super', 2010, 'TES', 'Pcs', 10, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mp`
--

CREATE TABLE IF NOT EXISTS `tb_mp` (
`id` int(10) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `tipe_barang` varchar(200) NOT NULL,
  `tahun_pengadaan` int(10) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mp`
--

INSERT INTO `tb_mp` (`id`, `id_transaksi`, `tanggal`, `nama_barang`, `merk_barang`, `tipe_barang`, `tahun_pengadaan`, `keterangan`, `satuan`, `jumlah`, `kondisi_barang`) VALUES
(6, 'WG-202170546231', '2021-08-03', 'Microphone', 'Bohringer', 'Liquid x 3 C2', 2009, 'Keterangan barang 1', 'Pcs', 1, 'aktif'),
(7, 'WG-202102975831', '2021-08-03', 'Microphone', 'Boom', 'J X Minimum', 2008, 'Keterangan', 'Pcs', 3, 'Tidak Aktif'),
(8, 'WG-202136298470', '2021-08-01', 'Speaker', 'DBL', 'KLX', 2001, 'Keterangan', 'Pcs', 6, 'aktif'),
(9, 'WG-202140913268', '2021-08-06', 'tes', 'rs tes', 'tipe 3', 2000, 'jdjjdsi', 'Pcs', 4, 'Tidak Aktif'),
(10, 'WG-202172931560', '2021-08-11', 'Mic Kondenser', 'tes2', 'tes3', 2006, 'jaidji', 'Dus', 1, 'aktif'),
(11, 'WG-202120517436', '2021-08-09', 'Speaker', 'tes23', 'hahah23', 2007, 'jadisjaidj', 'Pcs', 1, 'Tidak Aktif'),
(12, 'WG-202124691703', '2021-08-10', 'Mic Kondenser', 'tes222', 'JJJJJJ', 2999, 'jaisdhih', 'Pcs', 3, 'aktif'),
(13, 'WG-202142908651', '2021-08-02', 'tes', 'tes', 'tes', 2012, 'tes', 'Pcs', 1, 'Tidak Aktif'),
(14, 'WG-202151362908', '2021-08-09', 'tes tes', 'tes tes', 'tes tes', 2010, 'jah', 'Pcs', 1, 'Tidak Aktif'),
(15, 'WG-202187364512', '2021-08-09', 'tes ', 'tes2211', 'tes', 2000, 'jhdiehsuahg', 'Pcs', 2, 'Tidak Aktif'),
(16, 'WG-202134975268', '2021-08-12', 'sepeda', 'sepeda3', 'sepeda 3', 2012, 'sepeda 3', 'Pcs', 6, 'aktif'),
(17, 'WG-202103786154', '2021-08-09', 'Speaker', 'Bohringer', 'ZX 3 Super', 2010, '2qwqd', 'Pcs', 4, 'aktif'),
(18, 'WG-202197803215', '2021-08-11', 'Mic Kondenser', 'tes2', 'tes3', 2015, 'sadasd', 'Pcs', 2, 'aktif'),
(19, 'WG-202158674901', '2021-08-11', 'Speaker', 'tes', 'tipe 3', 2009, 'tes', 'Pcs', 5, 'Tidak Aktif'),
(20, 'WG-202115789406', '2021-08-10', 'Speaker', 'tes2', 'ZX 3 Super', 2021, 'asbdiak', 'Pcs', 2, 'aktif'),
(21, 'WG-202114325768', '2021-08-04', 'Microphone', 'Boom', 'I3 Rx 6', 2010, 'saugidia', 'Pcs', 2, 'aktif'),
(22, 'WG-202117286490', '2021-08-03', 'Speaker', 'Boom', 'ZX 3 Super', 2000, 'adadsa', 'Pcs', 3, 'aktif'),
(23, 'WG-202181976250', '2021-08-04', 'Hhhh', 'YYy', 'yyshsh', 2009, 'gsayiagi', 'Pcs', 3, 'Tidak Aktif'),
(24, 'WG-202154872916', '2021-08-10', 'sepeda', 'tes2', 'I3 Rx 6', 2021, 'yeiusohdao', 'Pcs', 2, 'aktif'),
(25, 'WG-202125104367', '2021-08-16', 'tes', 'Tes2', 'tes3', 2021, 'asdnoiasbfdoa', 'Pcs', 3, 'aktif'),
(26, 'WG-202182649573', '2021-08-12', 'asdada', 'yag8', 'safsaf', 2007, 'sadasd', 'Pcs', 3, 'aktif'),
(27, 'WG-202179436028', '2021-08-10', 'BBBB', 'bbbb', 'bbb', 2012, 'gdassjiudsho', 'Pcs', 3, 'aktif'),
(28, 'WG-202149376125', '2021-08-12', 'asdad', 'sadasc', 'asfcac', 2112, 'uyfu', 'Pcs', 1, 'aktif'),
(29, 'WG-202198620375', '2021-08-01', 'dasd', 'sdaf', 'saca', 2009, 'casbiabsi', 'Pcs', 1, 'Tidak Aktif'),
(30, 'WG-202119578324', '2021-08-09', 'Headphone', 'headphone', 'headphone', 2021, 'wodhoa', 'Pcs', 2, 'aktif'),
(31, 'WG-202105836914', '2021-08-10', 'Headphone', 'Ace', '29 X 2 T', 2008, 'jshadoho', 'Pcs', 2, 'aktif'),
(32, 'WG-202159301426', '2021-08-10', 'asda', 'das', 'sda', 2999, 'asda', 'Pcs', 2, 'Tidak Aktif'),
(33, 'WG-202176052493', '2021-08-31', 'Microphone', 'Bohringer', 'XZ 231', 2002, 'Keterangan barang', 'Pcs', 1, 'aktif'),
(34, 'WG-202154092168', '2021-08-31', 'Tes Barang', 'Merk barang 22', 'Tipe barang 22', 2012, 'Keterangan barang', 'Pcs', 1, 'aktif'),
(35, 'WG-202154703819', '2021-08-31', 'jaosdh', 'ndoasndao', 'nofsao', 1999, 'asmand', 'Pcs', 1, 'aktif'),
(36, 'WG-202102463879', '2021-08-23', 'adnoan', 'asonao', 'sanod', 2000, 'asmdm', 'Pcs', 2, 'aktif'),
(37, 'WG-202185671032', '2021-08-30', 'asodnansd', 'samoan', 'aoddasno', 2009, 'snadn', 'Pcs', 1, 'Tidak Aktif'),
(38, 'WG-202168791305', '2021-08-24', 'iadia', 'ohaohs', 'onado', 2099, 'adodn', 'Pcs', 2, 'Tidak Aktif'),
(39, 'WG-202140896732', '2021-08-17', 'ashoda', 'adnosh', 'danoasd', 2999, 'aojdsasdn', 'Pcs', 2, 'Tidak Aktif'),
(40, 'WG-202139126407', '2021-08-23', 'Microphone', 'merk barang 123', 'nofsao', 1999, 'asdonasnd', 'Pcs', 1, 'aktif'),
(41, 'WG-202158467210', '2021-09-01', 'hsdaih', 'aosdoah', 'asdoa', 2002, 'nands', 'Pcs', 2, 'aktif'),
(42, 'WG-202189367512', '2021-09-01', 'asjod', 'sand', 'asn', 2002, 'sa knd', 'Pcs', 1, 'Tidak Aktif'),
(43, 'WG-202131560248', '2021-09-01', 'asndoa', 'nodsadno', 'sanoda', 2008, 'nasd', 'Pcs', 2, 'aktif'),
(44, 'WG-202185640932', '2021-09-01', 'asdnoja', 'nsaodon', 'asnod', 2008, 'sa dk', 'Pcs', 3, 'aktif'),
(45, 'WG-202156712094', '2021-09-01', 'nosadn', 'snodaon', 'snaod', 2009, 'sankd', 'Pcs', 2, 'aktif'),
(46, 'WG-202156724938', '2021-09-01', 'asdoh', 'sanod', 'dfnosa', 2999, 'sanod', 'Pcs', 2, 'aktif'),
(47, 'WG-202127931850', '2021-09-01', 'ashodobu', 'snopadfasp', 'nofsdons', 2000, 'nasiodonas', 'Pcs', 4, 'aktif'),
(48, 'WG-202192165073', '2021-09-01', 'asodoa', 'honsdah', 'sadno', 2999, 'sndon', 'Pcs', 2, 'aktif'),
(49, 'WG-202106375491', '2021-09-01', 'asbda', 'bsaod', 'bsaodl', 2888, 'bsaidb', 'Pcs', 1, 'Tidak Aktif'),
(50, 'WG-202119673845', '2021-09-01', 'asdboao', 'noasfd', 'dsoba', 2000, 'snahodbna', 'Pcs', 2, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pro1`
--

CREATE TABLE IF NOT EXISTS `tb_pro1` (
`id` int(10) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `tipe_barang` varchar(200) NOT NULL,
  `tahun_pengadaan` int(10) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pro1`
--

INSERT INTO `tb_pro1` (`id`, `id_transaksi`, `tanggal`, `nama_barang`, `merk_barang`, `tipe_barang`, `tahun_pengadaan`, `keterangan`, `satuan`, `jumlah`, `kondisi_barang`) VALUES
(2, 'WG-202198760315', '2021-08-03', 'tes', 'tes 2', 'jaidjao', 2011, 'tes tes', 'Pcs', 3, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pro2`
--

CREATE TABLE IF NOT EXISTS `tb_pro2` (
`id` int(10) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `tipe_barang` varchar(200) NOT NULL,
  `tahun_pengadaan` int(10) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pro2`
--

INSERT INTO `tb_pro2` (`id`, `id_transaksi`, `tanggal`, `nama_barang`, `merk_barang`, `tipe_barang`, `tahun_pengadaan`, `keterangan`, `satuan`, `jumlah`, `kondisi_barang`) VALUES
(1, 'WG-202178590243', '2021-08-19', 'Nama barang 4', 'Merk barang 4', 'tipe 4', 2009, 'tes tes tes', 'Dus', 2, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekaman`
--

CREATE TABLE IF NOT EXISTS `tb_rekaman` (
`id` int(10) NOT NULL,
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk_barang` varchar(200) NOT NULL,
  `tipe_barang` varchar(200) NOT NULL,
  `tahun_pengadaan` int(10) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekaman`
--

INSERT INTO `tb_rekaman` (`id`, `id_transaksi`, `tanggal`, `nama_barang`, `merk_barang`, `tipe_barang`, `tahun_pengadaan`, `keterangan`, `satuan`, `jumlah`, `kondisi_barang`) VALUES
(4, 'WG-202160194573', '2021-08-03', 'Mic Kondenser', 'iaod', 'jkasjda', 2007, 'jskasiali', 'Pcs', 3, 'aktif'),
(5, 'WG-202175016943', '2021-08-17', 'sepeda', 'tes', 'tes', 2007, 'tes', 'Pcs', 1, 'aktif'),
(6, 'WG-202168435107', '2021-08-12', 'sepeda 2', 'sepeda 2', 'sepeda', 2001, 'sepeda 2', 'Pcs', 3, 'aktif'),
(7, 'WG-202172384659', '2021-08-27', 'Tes 2', 'Tes 3 ', 'Tes tes', 2007, 'tes tes tes', 'Pcs', 3, 'aktif'),
(8, 'WG-202161945807', '2021-08-23', 'sepeda 23', 'Merk 123', 'Tipe 212', 2012, 'Keterangan barang', 'Pcs', 3, 'aktif'),
(9, 'WG-202149306517', '2021-08-31', 'tes 33', 'merk barang 123', 'tipe 11', 2007, 'keterangan', 'Pcs', 2, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_satuan`
--

CREATE TABLE IF NOT EXISTS `tb_satuan` (
`id_satuan` int(11) NOT NULL,
  `kode_satuan` varchar(100) NOT NULL,
  `nama_satuan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `kode_satuan`, `nama_satuan`) VALUES
(2, 'Pcs', 'Pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload_gambar_user`
--

CREATE TABLE IF NOT EXISTS `tb_upload_gambar_user` (
`id` int(11) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `nama_file` varchar(220) NOT NULL,
  `ukuran_file` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_upload_gambar_user`
--

INSERT INTO `tb_upload_gambar_user` (`id`, `username_user`, `nama_file`, `ukuran_file`) VALUES
(1, 'zahidin', 'nopic5.png', '6.33'),
(2, 'test', 'nopic4.png', '6.33'),
(3, 'coba', 'logo_unsada1.jpg', '16.69'),
(4, 'admin', '14.jpg', '76.96'),
(5, 'laulliet', 'nopic2.png', '6.33'),
(6, 'sepeda', 'nopic2.png', '6.33'),
(7, 'user2', 'nopic2.png', '6.33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(12) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `last_login` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `last_login`) VALUES
(16, 'test', 'test@gmail.com', '$2y$10$CTjzvmT5B.dxojKZOxsjTeMc4E7.Gwl9slAgX.0lozwGrKSMxzWdO', 1, '16-03-2018 4:46'),
(17, 'coba', 'coba@gmail.com', '$2y$10$WRMyjAi8nnkr3J3QvzvyHuEoqay5dYd5NgMJKxsxtXKCp8.JCxZm.', 1, '15-01-2018 15:41'),
(20, 'admin', 'admin@gmail.com', '$2y$10$3HNkMOtwX8X88Xb3DIveYuhXScTnJ9m16/rPDF1/VTa/VTisxVZ4i', 1, '01-09-2021 5:58'),
(22, 'laulliet', 'muzakir.nurr@gmail.com', '$2y$10$7KUpwkjRR3f4dNpOEdCXSujHLGPLX3ffAPYIERknrf4yQgu2WyLS2', 0, '31-08-2021 5:03'),
(23, 'sepeda', 'sepeda@gmail.com', '$2y$10$hGw44JLbX4lOnfUPPEPjxOIcTd.xYVj9j3xU/YCPo7NSyMjzMTaBu', 0, '12-08-2021 7:49'),
(24, 'user2', 'user2@gmail.com', '$2y$10$kYiV2JOEoegwpdiP1/wmuOe6h8jZI6nzIYid4FIhnVQ9TVbIcJwgC', 0, '12-08-2021 7:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mp`
--
ALTER TABLE `tb_mp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pro1`
--
ALTER TABLE `tb_pro1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pro2`
--
ALTER TABLE `tb_pro2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rekaman`
--
ALTER TABLE `tb_rekaman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
 ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_upload_gambar_user`
--
ALTER TABLE `tb_upload_gambar_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_mp`
--
ALTER TABLE `tb_mp`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tb_pro1`
--
ALTER TABLE `tb_pro1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pro2`
--
ALTER TABLE `tb_pro2`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_rekaman`
--
ALTER TABLE `tb_rekaman`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_upload_gambar_user`
--
ALTER TABLE `tb_upload_gambar_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

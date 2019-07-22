-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2019 pada 15.05
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `akun` varchar(5) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `induk` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `indek` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_transaksi`
--

CREATE TABLE `akun_transaksi` (
  `id` int(11) NOT NULL,
  `akun_besar` varchar(8) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `akun` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `indek` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank_rekening`
--

CREATE TABLE `bank_rekening` (
  `id` int(11) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `nama_bank` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `tanggal` date DEFAULT NULL,
  `pengguna` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `universitas` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `periode` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `nojurnal` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_jurnal` date DEFAULT NULL,
  `no_transaksi` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `no_rekening` varchar(13) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `uraian` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `debet` int(18) DEFAULT NULL,
  `kredit` int(18) DEFAULT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(30) NOT NULL,
  `kode_jurusan` varchar(30) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode_jurusan`, `nama_jurusan`) VALUES
(9, '1.1', 'teknik mesin undip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasharian`
--

CREATE TABLE `kasharian` (
  `no_trans` varchar(25) NOT NULL,
  `cabang` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `pengguna` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `periode` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `akun` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `keterangan` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `debet` int(18) DEFAULT NULL,
  `kredit` int(18) DEFAULT NULL,
  `status` int(18) DEFAULT NULL,
  `tag` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id` int(11) NOT NULL,
  `tgl_input` date NOT NULL,
  `cabang` varchar(10) NOT NULL,
  `universitas` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pengguna` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_kasir` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `akun` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `debet` int(18) NOT NULL,
  `kredit` int(18) NOT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kwitansi` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `topik` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` blob NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nama_univ` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `periode` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_jurusan` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal_periode` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `id_user`, `nama`, `topik`, `tanggal`, `gambar`, `keterangan`, `deskripsi`, `nama_univ`, `periode`, `nama_jurusan`, `tanggal_periode`, `username`) VALUES
(1, '', 'farrel natan', 'kurcaci', '0000-00-00', '', '', 'asdasda', '', '', '', '0000-00-00', ''),
(2, '', 'farrel natan', 'kurcaci', '0000-00-00', '', '', 'asdasd', '', '', '', '0000-00-00', ''),
(3, '', 'farrel natan', 'aaa', '0000-00-00', '', '', 'asdasd', '', '', '', '0000-00-00', ''),
(4, '', 'farrel natan', 'kurcaci', '0000-00-00', '', '', 'asdasda', '', '', '', '0000-00-00', ''),
(5, '', 'farrel natan', 'kurcaci', '0000-00-00', '', '', 'adsasd', '', '', '', '0000-00-00', ''),
(9, '', 'farrel natan', 'kurcaci', '2019-06-16', 0x65303565313730343733623535333832356334333163666434663463393633372e6a7067, '', '', '', '', '', '0000-00-00', ''),
(10, '', 'paijan', 'kurcaci', '2019-06-18', 0x6c6f676f2e706e67, '', '<p>adasdawdad</p>\r\n', '', '', '', '0000-00-00', ''),
(11, '', 'farrel natan', 'asdasda', '2019-06-18', 0x53637265656e73686f74202837292e706e67, '', '<p>ini adalah&nbsp;</p>\r\n\r\n<p>sebuah cuplikan film</p>\r\n\r\n<p>dari nisekoi</p>\r\n', '', '', '', '0000-00-00', ''),
(17, '1.288427347', 'farrel natan', 'kurcaci', '2019-06-18', 0x53637265656e73686f74202839292e706e67, '', '<p>asdawdawdad</p>\r\n', '', '', '', '0000-00-00', ''),
(29, '', 'siti', 'Morfologi Scanning Kaki', '2019-07-01', 0x31353236373731365f313830363933313934393539343938385f3430393235313138303333343339373835315f6e2e6a7067, 'mie goreng 1', '<p>asdawdasdasd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>as</p>\r\n\r\n<p>d</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>aasdas</p>\r\n', '', '', '', '0000-00-00', ''),
(30, '', 'siti', 'Kaki Pelari', '2019-07-08', 0x556e7469746c65642e706e67, 'ini adalah foto otot', 'awdawdawdawd\r\nawd\r\naw\r\ndaw\r\ndawdawda', '', '', '', '0000-00-00', ''),
(31, '', 'siti', 'Tangan Mekanik metakarpal', '2019-07-08', 0x6d617872657364656661756c742e6a7067, 'asirpa chan', 'awneanwdonawdnoawd\r\n\r\nawdnawndoanwd\r\nadja nwod naowdn', '', '', '', '0000-00-00', ''),
(32, '', 'siti', 'Exo Skeleton Gen3', '2019-07-08', 0x6a526b645730632e706e67, 'asirpa chan face', '<p style=\"text-align: center;\">awdawdawdawdawdawd</p>\r\n\r\n<p style=\"text-align: center;\">awd</p>\r\n\r\n<p style=\"text-align: center;\">aw</p>\r\n\r\n<p style=\"text-align: center;\">daw</p>\r\n\r\n<p style=\"text-align: center;\">dawdawdawdawd</p>\r\n', '', '', '', '0000-00-00', ''),
(33, '', 'siti', 'Above Knee With Damper', '2019-07-08', 0x6c6f676f2e706e67, 'logo', '<p>aweadawdawda</p>\r\n', '', '', '', '0000-00-00', ''),
(34, '', 'siti', 'kakipalsu', '2019-07-08', 0x33643133666463386462356164306666323630393831393736356165656262352e6a7067, 'relasi dasar', '<p>awdawdawdawdaw</p>\r\n\r\n<p>dawd</p>\r\n\r\n<p>awdawdawd</p>\r\n', '', '', '', '0000-00-00', ''),
(35, '', 'siti', 'PCU', '2019-07-08', 0x6a526b645730632e706e67, 'asirpa chan', '<p>awdawdawdawda</p>\r\n\r\n<p>awdawdawd</p>\r\n\r\n<p>awdawdadw</p>\r\n', '', '', '', '0000-00-00', ''),
(36, '', 'siti', 'Control Exo Skeleton', '2019-07-08', 0x6c6f676f2e706e67, 'logo', '<p>awdawdawdawdawd</p>\r\n\r\n<p>awd</p>\r\n\r\n<p>aw</p>\r\n\r\n<p>d</p>\r\n\r\n<p>awdawdawd</p>\r\n', '', '', '', '0000-00-00', ''),
(37, '', 'siti', 'Control Exo Skeleton', '2019-07-08', 0x6c6f676f2e706e67, 'logo', '<p>adawdawdawdaw</p>\r\n\r\n<p>dawdawdaw</p>\r\n\r\n<p>dawdawdawd</p>\r\n', '', '', '', '0000-00-00', ''),
(38, '', 'siti', 'Morfologi Scanning Kaki', '2011-06-01', 0x6a526b645730632e706e67, 'awdawdawd', '<p>awdawdawdawda</p>\r\n', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(30) NOT NULL,
  `id_mahasiswa` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat_ktp` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `nim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_mahasiswa`, `nama`, `jurusan`, `jk`, `tanggal_lahir`, `tempat_lahir`, `alamat_ktp`, `no_hp`, `nim`) VALUES
(2, '111111', 'paijo', 'Teknik Mesin Undip', 'Pria', '2019-06-18', 'Semarang', 'yadisitu', 2341231, 2147483647),
(3, '111111', 'paijo', 'Teknik Mesin Undip', 'Pria', '2019-06-18', 'Semarang', 'yadisitu', 2341231, 123123123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kasir`
--

CREATE TABLE `t_kasir` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `topik` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jumlah_barang` int(12) NOT NULL,
  `harga_satuan` int(50) NOT NULL,
  `harga_total` int(50) NOT NULL,
  `nota` blob NOT NULL,
  `keterangan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kasir`
--

INSERT INTO `t_kasir` (`id`, `nama`, `topik`, `tgl_transaksi`, `jumlah_barang`, `harga_satuan`, `harga_total`, `nota`, `keterangan`) VALUES
(1, 'siti', 'Hydroxy Apatit', '0000-00-00', 0, 2000, 6000, '', ''),
(2, 'siti', 'kakipalsu', '0000-00-00', 0, 2000, 6000, '', ''),
(3, 'siti', 'Exo Skeleton Gen3', '0000-00-00', 1, 2000, 2000, '', ''),
(4, 'siti', 'Exo Skeleton Gen3', '0000-00-00', 1, 2000, 2000, '', ''),
(5, 'siti', 'Tangan Mekanik metakarpal', '0000-00-00', 1, 2000, 2000, '', ''),
(6, 'siti', 'kakipalsu', '0000-00-00', 1, 2000, 2000, '', ''),
(8, 'siti', 'kakipalsu', '2019-07-13', 1, 2000, 2000, '', ''),
(9, 'siti', 'kakipalsu', '2019-07-13', 1, 2000, 2000, '', ''),
(10, 'siti', 'kakipalsu', '2019-07-13', 1, 2000, 2000, '', ''),
(11, 'siti', 'kakipalsu', '2019-07-13', 1, 2000, 2000, '', ''),
(12, 'siti', 'kakipalsu', '2019-07-13', 1, 2000, 2000, '', ''),
(13, 'siti', 'Exo Skeleton Gen3', '2019-07-15', 1, 2000, 2000, '', ''),
(14, 'siti', 'kakipalsu', '2019-07-15', 1, 2000, 2000, '', ''),
(15, 'siti', 'kakipalsu', '2019-07-15', 1, 2000, 2000, 0x36363539333136375f3436343038383635313035393536375f383930353239333530323031313637303532385f6e202831292e6a7067, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `id` int(30) NOT NULL,
  `kode_univ` varchar(50) NOT NULL,
  `nama_univ` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`id`, `kode_univ`, `nama_univ`, `alamat`, `kota`, `provinsi`, `negara`) VALUES
(2, '222222', 'UNNES', '<p>jl. aku padamu</p>\r\n', 'Semarang', 'Jawa Tengah', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `universitas` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_user`, `nama`, `universitas`, `username`, `password`, `level`) VALUES
(1, '1', 'admin', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, '2', 'paijo', '', 'paijo', 'e6147128231f34a29c5e501622f7e23e', 'user'),
(3, '3', 'paijan', '', 'paijan', '90bbcda26475720d1265c106ef2eed19', 'user'),
(4, '4', 'siti', 'UNDIP', 'siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bank_rekening`
--
ALTER TABLE `bank_rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasharian`
--
ALTER TABLE `kasharian`
  ADD PRIMARY KEY (`no_trans`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_kasir`
--
ALTER TABLE `t_kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bank_rekening`
--
ALTER TABLE `bank_rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_kasir`
--
ALTER TABLE `t_kasir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

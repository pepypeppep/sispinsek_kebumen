-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2017 pada 15.55
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pindah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`) VALUES
('admin', 'disdik'),
('admin', 'disdik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pindah`
--

CREATE TABLE IF NOT EXISTS `tb_pindah` (
  `nama` varchar(35) NOT NULL,
  `ttl` varchar(35) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `ortu` varchar(30) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `alasan` varchar(30) NOT NULL,
  `memiliki` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `sk_ortu` varchar(10) NOT NULL,
  `sk_skl` varchar(10) NOT NULL,
  `sk_uptd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pindah`
--

INSERT INTO `tb_pindah` (`nama`, `ttl`, `nisn`, `asal`, `kelas`, `ortu`, `keperluan`, `alasan`, `memiliki`, `keterangan`, `sk_ortu`, `sk_skl`, `sk_uptd`) VALUES
('DINA APRILIANA PUTRI', 'Kebumen, 25 April 2008', '0088606352', 'SDN 2 Lembupurwo', 'IV (Empat)', 'Mulyadi', 'Pindah sekolah pada SDN Bojong Kacor 1 kel. Cibenying, Kec. Cimenyan, Kab. Bandung', 'Permintaan orang tua', 'Raport', '-', 'Ada', 'Ada', 'Ada'),
('ERIK ARDIANSYAH', 'Kebumen, 17 Agustus 2006', '1279/0065036692', 'SDN 2 Ngasinan', 'IV (Empat)', 'Erwansyah', 'Pindah Sekolah pada SD Rajawali Estate Provinsi Kalimantan Selatan', 'Permintaan orang tua', 'Raport', '-', 'Ada', 'Ada', 'Ada'),
('RIFQI NUR FADLI', 'Kebumen, 24 April 2008', '2727/0084464030', 'SDN 1 Gunungmujil', 'IV (Empat)', 'Rodiyah', 'Untuk pindah ke SDN Sindangmulya 04, Kec. Sibarusah, Kab. Bekasi Prov. Jabar', 'Mengikuti orang tua', 'Raport', '-', 'Ada', 'Ada', 'Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE IF NOT EXISTS `tb_sekolah` (
  `kode_skl` varchar(10) NOT NULL,
  `asal_skl` varchar(50) NOT NULL,
  `tujuan_skl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`kode_skl`, `asal_skl`, `tujuan_skl`) VALUES
('SKL-1', 'SDN 1 Gunungmujil', 'SDN Sindangmulya 04'),
('SKL-2', 'SDN 2 Lembupurwo', 'SDN Bojong Kacor 1'),
('SKL-3', 'SDN 3 Ngasinan', 'SD Rajawali Estate');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nama`, `kelamin`, `alamat`, `ttl`, `kelas`) VALUES
('0088606352', 'DINA APRILIANA PUTRI', 'Perempuan', 'Lembupurwo', 'Kebumen, 25 April 2008', 'IV'),
('1279/0065036692', 'ERIK ARDIANSYAH', 'Laki-Laki', 'PT Skip Sei, Ds. Sangkingbaru, Kupang, Kalsel', 'Kebumen, 17 Agustus 2006', 'IV'),
('2727/0084464030', 'RIFQI NUR FADLI', 'Laki-Laki', 'Perum Puri Persada Indah Blk BC/4, Sindangmulya', 'Kebumen, 24 April 2008', 'IV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pindah`
--
ALTER TABLE `tb_pindah`
 ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
 ADD PRIMARY KEY (`kode_skl`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Des 2020 pada 16.33
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kadinbatam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_usaha`
--

CREATE TABLE IF NOT EXISTS `data_usaha` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` longtext NOT NULL,
  `no_anggota` varchar(256) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `alamat` longtext NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_usaha` text NOT NULL,
  `nama_penanggungjawab` text NOT NULL,
  `tahun_berdiri` year(4) NOT NULL,
  `kondisi_usaha` text NOT NULL,
  `alamat_usaha` longtext NOT NULL,
  `npwp` varchar(128) NOT NULL,
  `no_hp` int(128) NOT NULL,
  `email_perusahaan` varchar(128) NOT NULL,
  `website_perusahaan` longtext NOT NULL,
  `account_facebook` varchar(128) NOT NULL,
  `account_instagram` varchar(100) NOT NULL,
  `badan_usaha` text NOT NULL,
  `kategori_produk` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `data_usaha`
--

INSERT INTO `data_usaha` (`id`, `id_user`, `nama_lengkap`, `no_anggota`, `jenis_kelamin`, `alamat`, `email`, `nama_usaha`, `nama_penanggungjawab`, `tahun_berdiri`, `kondisi_usaha`, `alamat_usaha`, `npwp`, `no_hp`, `email_perusahaan`, `website_perusahaan`, `account_facebook`, `account_instagram`, `badan_usaha`, `kategori_produk`) VALUES
(26, 8, 'Consequatur Sunt ve', '43', 'Laki-Laki', 'Voluptatem aspernat', 'fihuguh@mailinator.com', 'Sed laboriosam volu', 'Aliqua Perspiciatis', 1990, 'Sudah Tutup', 'Tempore ex velit vo', '87', 41, 'kiqe@mailinator.com', 'https://www.symori.ws', 'Minus explicabo Nos', 'Molestiae neque sequ', 'PT', 'Perikanan'),
(28, 8, 'Sit deserunt eos e', '20', 'Perempuan', 'Asperiores expedita ', 'nyseqasyfu@mailinator.com', 'Vel numquam velit ip', 'Commodi reprehenderi', 2060, 'Masih Berjalan', 'Itaque facere est q', '71', 44, 'humeza@mailinator.com', 'https://www.juxiziwuhovymil.me', 'Quia voluptatem illu', 'Placeat et expedita', 'PT', 'Perdagangan'),
(29, 10, 'Recusandae Voluptas', '34', 'Laki-Laki', 'Aliqua Qui cillum c', 'negofik@mailinator.com', 'Odit repudiandae con', 'Animi consequatur ', 1978, 'Sudah Tutup', 'Ipsa recusandae Ad', '55', 59, 'xaqumo@mailinator.com', 'https://www.kynemitiwody.biz', 'Omnis quos dolor sed', 'Enim ullam ab labore', 'Belum ada', 'Olahan Makanan/Minuman'),
(31, 11, 'Rerum libero et modi', '98', 'Laki-Laki', 'Modi distinctio In ', 'bahyxoqal@mailinator.com', 'Dolor nemo dolor ut ', 'Ipsa quia soluta au', 2009, 'Masih Berjalan', 'Adipisicing ea ea ad', '71', 31, 'tykuwafi@mailinator.com', 'https://www.qur.info', 'Consequatur quia qui', 'Non nulla aliquam et', 'PT', 'Olahan Makanan/Minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` varchar(128) NOT NULL,
  `nama` text NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user_no`, `nama`, `password`) VALUES
(8, '002', 'Jhon', '$2y$10$fQcgEDnyb/IT44su7oNUpuDkv4zxFqD3OqkIUsPfXIRM0oVZ9T/U2'),
(10, '001', 'Pandu', '$2y$10$fQcgEDnyb/IT44su7oNUpuDkv4zxFqD3OqkIUsPfXIRM0oVZ9T/U2'),
(11, '003', 'Joni', '$2y$10$9AHKqIewbgFgBZuYBiS/wexFrm0wJwQ8vNRHaDUHcD5seCstezTpe'),
(12, '004', 'Rudi', '$2y$10$soq3TkB/rAaQ4CBFPI2az.bOn1rvzxpTc3xA.olsKdSpd.QaKgv8a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2022 pada 14.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c45`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtraining`
--

CREATE TABLE `dtraining` (
  `id` int(11) NOT NULL,
  `outlook` varchar(12) NOT NULL,
  `temperature` varchar(8) NOT NULL,
  `humidity` varchar(8) NOT NULL,
  `windy` varchar(8) NOT NULL,
  `play` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dtraining`
--

INSERT INTO `dtraining` (`id`, `outlook`, `temperature`, `humidity`, `windy`, `play`) VALUES
(1, 'Sunny', 'Hot', 'High', 'Weak', 'No'),
(2, 'Sunny', 'Hot', 'High', 'Strong', 'No'),
(3, 'Overcast', 'Hot', 'High', 'Weak', 'Yes'),
(4, 'Rain', 'Mild', 'High', 'Weak', 'Yes'),
(5, 'Rain', 'Cool', 'Normal', 'Weak', 'Yes'),
(6, 'Rain', 'Cool', 'Normal', 'Strong', 'No'),
(7, 'Overcast', 'Cool', 'Normal', 'Strong', 'Yes'),
(8, 'Sunny', 'Mild', 'High', 'Weak', 'No'),
(9, 'Sunny', 'Cool', 'Normal', 'Weak', 'Yes'),
(10, 'Rain', 'Mild', 'Normal', 'Weak', 'Yes'),
(11, 'Sunny', 'Mild', 'Normal', 'Strong', 'Yes'),
(12, 'Overcast', 'Mild', 'High', 'Strong', 'Yes'),
(13, 'Overcast', 'Hot', 'Normal', 'Weak', 'Yes'),
(14, 'Rain', 'Mild', 'High', 'Strong', 'No');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dtraining`
--
ALTER TABLE `dtraining`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dtraining`
--
ALTER TABLE `dtraining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

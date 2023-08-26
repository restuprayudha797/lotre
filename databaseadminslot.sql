-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 12.02
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseadminslot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datalotto`
--

CREATE TABLE `datalotto` (
  `idlotte` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `drawno` varchar(200) NOT NULL,
  `angka1` varchar(100) NOT NULL,
  `angka2` varchar(100) NOT NULL,
  `angka3` varchar(100) NOT NULL,
  `angka4` varchar(100) NOT NULL,
  `angka5` varchar(100) NOT NULL,
  `tanggalupdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datalotto`
--

INSERT INTO `datalotto` (`idlotte`, `kategori`, `drawno`, `angka1`, `angka2`, `angka3`, `angka4`, `angka5`, `tanggalupdate`) VALUES
(2, 'tess', '22', '32', '42', '92', '82', '62', '2023-06-07'),
(3, 'tes', '3', '6', '45', '65', '26', '75', '2023-06-14'),
(4, 'tes', '8', '2', '43', '26', '43', '67', '2023-06-01'),
(2526, 'tes', '64', '1', '2', '3', '4', '5', '2023-06-08'),
(2529, 'Sepesial ramadhan', '78', '5', '4', '3', '2', '1', '2023-06-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategorilotto`
--

CREATE TABLE `kategorilotto` (
  `id_kategori` int(10) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `tanggalinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategorilotto`
--

INSERT INTO `kategorilotto` (`id_kategori`, `kategori`, `tanggalinput`) VALUES
(13, 'Sepesial Tahun Baru', '2023-06-08'),
(14, 'Sepesial ramadhan', '2023-06-08'),
(15, 'tes', '2023-06-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`) VALUES
(5, 'adminlotry@gmail.com', '$2y$10$oe2rWfX052783FZ/hnOKkugNdG6YPfG.dPHuzr4sYe4w/QGa4xkwK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datalotto`
--
ALTER TABLE `datalotto`
  ADD PRIMARY KEY (`idlotte`);

--
-- Indeks untuk tabel `kategorilotto`
--
ALTER TABLE `kategorilotto`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datalotto`
--
ALTER TABLE `datalotto`
  MODIFY `idlotte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2530;

--
-- AUTO_INCREMENT untuk tabel `kategorilotto`
--
ALTER TABLE `kategorilotto`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

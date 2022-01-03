-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2022 pada 04.30
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpuskuy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `pwd`, `alamat`, `nohp`, `hobi`, `image`, `date_created`) VALUES
(2, 'Jangli', 'jangli@ewq.com', 'ewq', NULL, NULL, NULL, NULL, NULL),
(22, 'ini nama', 'asd@asd.com', '$2y$10$7HY2xUIB0g0r7cAeRgP.HeTlvASqrUbOg3rz6xHGNxJew/SbxYvY2', 'Mondstadt No.111', '0833xxxxx', 'Menggokil', 'default.jpg', 1622292497),
(26, 'Diluc', 'diluc@gemink.com', '$2y$10$VVlaKlZWWwau21fgiMkGoearMLwdn7bdzEyHftiYrlzK7tzi0lxVO', 'Mondstadt No.3', '0834xxxxxx', 'Basmi Hilichurls', 'default.jpg', 1622362144),
(27, 'khaidar', 'khaidar@khaidar.com', '$2y$10$oktdi2oa.d1KUlQcoPw6telGg5PKBIa7GSaxQ6dpkGaSZl9K5fBUq', '', '', '', 'default.jpg', 1622465715),
(28, 'zxc', 'zxc@zxc.com', '$2y$10$YT7N1mjKk9xIw0N5UhVS1.znBl5wY.c7rbrCNt9fxJPEiTLAXuoDK', '', '', '', 'default.jpg', 1622467005),
(29, 'Mikey', 'qaz@qaz.com', '$2y$10$OCCX0vr3o0ybsNoWA7wF/uiXtujMCWZthxBGj3V7axWbmEeHSQ5ZS', 'Liyue no 3', '085xxxxxxxxxx', 'Hajar orang', 'default.jpg', 1622469644),
(30, 'Tok Dalang Gemink', 'abah@gemink.com', '$2y$10$GVAY8GYjzDDjEnv2lfzrTeePrCJQGNuTqrPtIuCnpIbFXU.W6ZbVK', 'Kp. Durian Runtuh no 5', '0855xxxxx', 'menggokil', 'default.jpg', 1622471112),
(32, 'Gustian Herlambang', 'gustian@gmail.com', '$2y$10$ZXBI1OXAfa4hNj8MeeCrTe5x7U8owRNVrWP8gsDQeLVQmzydLIjSW', '', '', '', 'default.jpg', 1622685472),
(33, 'Reff', 'revansahdr@gmail.com', '$2y$10$AScyPYEX2dGE7UI9cF4oWOxfpaOQa2xoRbC1SqTEnaUI8WqAWDiSi', 'Mondstadt No.3', '08xxxxxx', 'Minum bareng diluc', 'default.jpg', 1622733404),
(34, 'Irene Adler', 'irene@adler.com', '$2y$10$qNNtJ3pbge.cTqqyFENrb.DW5E0hexWbYrRiNyCyO/5YHNjfcK5IW', 'Far East New York', '+1 516515', 'Solving Riddles, Also Teasing Holmes', 'default.jpg', 1622992251),
(35, 'Irene Adler', 'nenek@gmail.com', '$2y$10$NL0EQBLG8K2iD9sbgZHJwueSf8R5jiy9frlCZdEFa9qIraKlYjfZG', 'Kp. Durian Runtuh no 7', '+62 857 xxxxxx', 'memancing', 'default.jpg', 1623052397),
(36, 'Irene Adler', 'confidential@domain.com', '$2y$10$niPAD84NkuZcbWzXrOIOsOKUx1lkQkv8roUt66VqWUG4mCzFK8V3m', '', '', '', 'default.jpg', 1623058925),
(37, 'Kouta', 'opah@gemink.com', '$2y$10$ZXmEPInwFu1aJGBoSvQA2.j4k8e.X1b/evomhAGfMKA.q2aga5.9C', 'Kp. Durian Runtuh no 5', '+62 857 xxxxxx', 'Menggokil', 'default.jpg', 1623125139);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

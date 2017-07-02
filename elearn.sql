-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jul 2017 pada 04.32
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE `kurikulum` (
  `idkuri` int(10) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `tema` int(10) NOT NULL,
  `kd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `idlevel` int(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`idlevel`, `level`) VALUES
(1, 'Admin'),
(2, 'guru'),
(3, 'ortu'),
(4, 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tema` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`idnilai`, `iduser`, `tema`, `nilai`, `waktu`) VALUES
(7, 4, 6, 100, '2017-04-27 04:21:32'),
(8, 4, 6, 0, '2017-04-27 04:22:43'),
(9, 4, 6, 100, '2017-05-02 02:44:52'),
(10, 4, 6, 100, '2017-06-09 04:32:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendekatan`
--

CREATE TABLE `pendekatan` (
  `idpendekatan` int(11) NOT NULL,
  `tema` int(10) NOT NULL,
  `pendekatan_belajar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz`
--

CREATE TABLE `quiz` (
  `idquiz` int(10) NOT NULL,
  `tema` int(6) NOT NULL,
  `soal` varchar(100) NOT NULL,
  `pilihan_a` varchar(100) NOT NULL,
  `pilihan_b` varchar(100) NOT NULL,
  `pilihan_c` varchar(100) NOT NULL,
  `pilihan_d` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`idquiz`, `tema`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`, `gambar`, `type`) VALUES
(1, 6, 'Sebutkan Nama dari benda di bawah ini ', 'sapu', 'kemoceng', 'sikat', 'pel', 'a', 'kemoceng.png', 1),
(2, 6, 'Apabila diberi sesuatu, kita mengucapkan ..', 'Terima Kasih', 'Sama-sama', 'Sampai Jumpa', 'Maaf', 'a', 'terimakasih.png', 1),
(3, 6, 'Pilihlah gambar yang menunjukkan rumah yang bersih ', 'bersih.jpg', 'kotor1.jpg', 'kotor2.jpg', 'kotor3.jpg', 'a', '', 2),
(4, 6, 'Hitung jumlah tong sampah berikut ini:', '6', '5', '2', '1', 'b', 'tongsampah.jpg', 1),
(5, 6, 'Pilihlah kebiasaan baik dalam menjaga kebersihan', 'menyapu.jpg', 'coret.jpg', 'bs.jpg', 'pk.jpg', 'a', '', 2),
(6, 6, 'Berhitung dengan garis bilangan.\r\n1+2 = ...', '3', '4', '1', '2', 'a', 'garisbilangan.png', 1),
(7, 6, 'Gambar berikut adalah bangun Balok.Manakah gambar yang sebangun ?', 'bola.png', 'balon.jpg', 'kaleng.jpg', 'tisu.jpg', 'd', 'balok.png', 1),
(8, 6, 'Gambar berikut adalah gambar tabung. manakah bangun yang sejenis ?', 'bola.jpg', 'kaleng.jpg', 'tisu.jpg', 'globe.jpg', 'b', 'tabung.png', 1),
(9, 6, 'Andi dan peliharaannya sedang senam agar badan menjadi bugar. Kata senam berawalan huruf....', 'A', 'B', 'S', 'J', 'c', 'senam.gif', 1),
(10, 6, 'Benda Berikut berawalan huruf ?', 'A', 'K', 'J', 'B', 'b', 'kemoceng.jpg', 1),
(11, 7, 'Manakah yang merupakan benda hidup ?', 'batu.jpg', 'ayam.jpg', 'meja.jpg', 'kursi.jpg', 'b', '', 2),
(12, 7, 'Manakah yang merupakan benda mati ?', 'ayam.jpg', 'ikan.jpg', 'batu.jpg', 'sapi.jpg', 'kucing.jpg', '', 2),
(13, 7, 'Dimanakah tempat hidup ikan ?', 'aquarium.jpg', 'langit.jpg', 'gurun.jpg', 'kandang.jpg', 'a', 'ikan.jpg', 2),
(14, 7, 'Hitung jumlah kambing di bawah ini ', '5', '10', '20', '7', '10', 'kambing.jpg', 1),
(15, 7, 'Pilihlah benda yang lebih luas', 'luas.jpg', 'sempit.jpg', '', '', 'a', '', 2),
(16, 7, 'Apakah nama bagian tumbuhan dibawah ini ?', 'Bunga', 'Daun', 'Buah', 'Akar', 'a', 'bunga.jpg', 1),
(17, 7, 'Udin dan Budi  berdiri bersama. Siapakah yanglebih tinggi ?', 'udin.jpg', 'andi.jpg', '', '', 'b', 'andibudi.jpg', 2),
(18, 7, 'Berikut ini adalah gambar lambang pancasila sila ke ?', 'sila ke 4', 'sila ke 1', 'sila ke 2', 'sila ke 3', 'a', 'kepalabanteng.jpg', 1),
(19, 7, 'Berikut ini adalah lambang pancasila. Pilihlah yang merupakan benda hidup', 'bintang.jpg', 'padikapas.jpg', 'rantai.jpg', '', 'b', '', 2),
(20, 7, 'Manusia mengalami pertumbuhan. manusia merupakan benda ?', 'Hidup', 'Mati', '', '', '', 'pertumbuhan.jpg', 1),
(22, 7, 'Manakah binatang yang lebih banyak ?', 'banyak.jpg', 'sedikit.jpg', '', '', '', '', 1),
(23, 7, 'Manakah yang merupakan hewan buas ?', 'buaya.jpg', 'kelinci.jpg', 'ayam.jpg', 'kucing.jpg', 'a', '', 2),
(24, 7, 'Cara Merawat Tumbuhan adalah dengan ...', 'Menyirami', 'Membakar', 'Membuang', 'Menginjak', 'a', 'menyirami.jpg', 1),
(25, 7, 'Banyaknya jambu berikut adalah..', '10', '15', '25', '20', 'b', 'jambu.jpg', 1),
(26, 7, 'Makanan yang berasal dari tanaman adalah..', 'tempe.jpg', 'kentaki.jpg', 'sate.jpg', '', 'a', '', 2),
(27, 8, 'Manakah yang merupakan perlengkapan saat musim hujan ?', 'payung.jpg', 'kacamata.jpg', 'topi.jpg', 'layang-layang.jpg', 'a', 'hujan.jpg', 1),
(28, 8, 'Manakah yang merupakan cuaca hujan ?', 'hujan.jpg', 'panas.jpg', 'mendung.jpg', '', 'a', '', 2),
(29, 8, 'Hitung jumlah bintang dibawah ini:', '20', '10', '5', '15', 'b', 'bintang.jpg', 1),
(30, 8, 'Benda yang digunakan saat musim hujan adalah:', 'layang.jpg', 'payung.jpg', 'kacamata.jpg', '', 'b', 'anakpayung.jpg', 1),
(32, 8, 'Salah satu bencana adalah Banjir. Banjir berawalan huruf....', 'B', 'A', 'C', 'G', 'A', 'banjir.jpg', 1),
(33, 8, 'Cara mencegah banjir adalah ..', 'buangpas.jpg', 'buanggot.jpg', 'buangsungai.jpg', '', 'a', '', 2),
(34, 8, 'Gambar berikut menunjukkan pukul ....', '02.00 ', '01.00', '04.00', '12.00', 'b', 'jamsatu.jpg', 1),
(35, 8, 'Gambar disamping adalah simbol cuaca...', 'hujan', 'panas', 'badai', '', 'a', 'hujan.jpg', 1),
(36, 8, 'Manakah yang merupakan perlengkapan musim panas ?', 'jashujan.jpg', 'topi.jpg', '', '', 'a', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `absen` int(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `level_user` int(5) NOT NULL,
  `nilai_user` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `id_ortu` int(10) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`, `absen`, `kelas`, `level_user`, `nilai_user`, `id_anak`, `id_ortu`, `foto`) VALUES
(1, 'guru', 'guru', 'guru Ana', 0, '0', 2, 0, 0, 0, ''),
(2, 'ortu', 'ortu', 'Mama', 0, '0', 3, 0, 4, 0, ''),
(3, 'admin', 'admin', 'Admin Elearn', 0, '0', 1, 0, 0, 0, ''),
(4, 'siswa', 'siswa', 'Siswa', 1, '1A', 4, 0, 0, 0, ''),
(5, 'adin', 'adin', 'adin', 2, '1A', 4, 0, 0, 0, ''),
(6, 'azza', 'azza', 'azza', 3, '1B', 4, 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`idkuri`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idlevel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indexes for table `pendekatan`
--
ALTER TABLE `pendekatan`
  ADD PRIMARY KEY (`idpendekatan`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`idquiz`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `nilai_user` (`nilai_user`),
  ADD KEY `level_user` (`level_user`),
  ADD KEY `nilai_user_2` (`nilai_user`),
  ADD KEY `id_anak` (`id_anak`),
  ADD KEY `id_ortu` (`id_ortu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `idkuri` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idlevel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pendekatan`
--
ALTER TABLE `pendekatan`
  MODIFY `idpendekatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `idquiz` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `k_level` FOREIGN KEY (`level_user`) REFERENCES `level` (`idlevel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

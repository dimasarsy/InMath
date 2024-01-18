-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 11 Feb 2022 pada 06.53
-- Versi server: 10.5.13-MariaDB-cll-lve
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u267301813_db_inmath`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `no` int(11) NOT NULL,
  `video1` varchar(30) NOT NULL,
  `video2` varchar(30) NOT NULL,
  `video3` varchar(30) NOT NULL,
  `video4` varchar(30) NOT NULL,
  `video5` varchar(30) NOT NULL,
  `rangkuman1` varchar(30) NOT NULL,
  `rangkuman2` varchar(30) NOT NULL,
  `rangkuman3` varchar(30) NOT NULL,
  `lagu1` varchar(30) NOT NULL,
  `lagu2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`no`, `video1`, `video2`, `video3`, `video4`, `video5`, `rangkuman1`, `rangkuman2`, `rangkuman3`, `lagu1`, `lagu2`) VALUES
(1, 'video 1 fix.mp4', 'video 2 fix.mp4', 'video 3 fix.mp4', 'video 4 fix.mp4', 'video 5 fix.mp4', 'bruto.png', 'diskon.png', '3.png', 'lirik.png', 'musik.mp3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `no` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `satu` float NOT NULL,
  `dua` float NOT NULL,
  `tiga` float NOT NULL,
  `empat` float NOT NULL,
  `lima` float NOT NULL,
  `enam` float NOT NULL,
  `tujuh` float NOT NULL,
  `delapan` float NOT NULL,
  `sembilan` float NOT NULL,
  `sepuluh` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`no`, `username`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`, `sembilan`, `sepuluh`) VALUES
(200, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(201, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(202, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(203, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(204, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(205, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(206, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(207, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(208, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(209, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(210, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(211, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(212, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(213, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(214, 'chantiqa', 1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
(215, 'M.albrizy', 0, 1, 0, 1, 1, 1, 1, 1, 0, 1),
(216, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(217, 'Aqila Azka A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(218, 'FelishaRizqy N.', 0, 1, 0, 1, 0, 1, 0, 0, 1, 0),
(219, 'Angga Wijaya', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(220, 'malikaaureliaputri', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(221, 'sampun', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0),
(222, 'M Faiz Razan Ocali', 0, 0, 0, 0, 0, 1, 1, 0, 0, 0),
(223, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(224, 'afrahmaritzaatha', 0, 0, 1, 1, 0, 0, 1, 0, 1, 1),
(225, 'fathyarubieelcayra', 0, 1, 0, 1, 1, 1, 1, 1, 1, 1),
(226, 'aisyahnurtsabita', 1, 0, 1, 1, 0, 0, 0, 1, 0, 1),
(227, 'Angga Wijaya', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(228, 'Aqila Azka A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(229, 'Angga Wijaya', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(230, 'Angga Wijaya', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(231, 'Angga Wijaya', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(232, 'Angga Wijaya', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(233, 'Angga Wijaya', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(234, 'afrahmaritzaatha', 1, 0, 1, 1, 0, 0, 1, 0, 1, 1),
(235, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(236, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(237, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(238, 'chantiqa', 1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
(239, 'sampun', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0),
(240, 'NugrahaFaizin', 1, 0, 1, 1, 1, 0, 0, 0, 0, 0),
(241, 'kaindra', 0, 1, 0, 1, 1, 1, 0, 0, 1, 1),
(242, 'Angga Wijaya', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(243, 'aisyahnurtsabita', 1, 0, 1, 1, 0, 0, 0, 1, 0, 1),
(244, 'Angga Wijaya', 1, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(245, 'chantiqa', 1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
(246, 'afrahmaritzaatha', 1, 0, 1, 1, 0, 0, 1, 0, 1, 1),
(247, 'sampun', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0),
(248, 'sarahaqilahputri', 1, 1, 1, 1, 1, 0, 0, 1, 1, 1),
(249, 'M.albrizy', 1, 1, 0, 1, 1, 1, 1, 1, 0, 1),
(250, 'rafa dwi ramadhan ', 0, 1, 0, 1, 1, 0, 1, 1, 1, 0),
(251, 'Azzam lee rizqullah ', 0, 1, 1, 1, 1, 0, 1, 1, 1, 1),
(252, 'FelishaRizqy N.', 1, 1, 0, 1, 0, 1, 0, 0, 1, 0),
(253, 'fathyarubieelcayra', 0, 1, 0, 1, 1, 1, 1, 1, 1, 1),
(254, 'sampun', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0),
(255, '', 0, 0, 0, 1, 1, 0, 0, 0, 1, 1),
(256, 'lauraaureliamakaminang', 0, 1, 1, 1, 1, 0, 0, 1, 1, 1),
(257, 'dicky', 0, 1, 1, 1, 1, 0, 0, 0, 1, 0),
(258, 'rifqi aunur', 0, 1, 1, 1, 1, 1, 0, 1, 0, 1),
(259, 'sampun', 1, 1, 1, 1, 1, 0, 1, 1, 1, 0),
(260, '', 0, 0, 0, 1, 1, 0, 0, 0, 1, 1),
(261, 'malika', 1, 0, 1, 1, 1, 1, 0, 1, 1, 0),
(262, 'suli ageung permana', 0, 1, 0, 1, 0, 0, 0, 0, 1, 1),
(263, 'dicky', 1, 1, 1, 1, 1, 0, 0, 0, 1, 0),
(264, 'sampun', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(265, 'lauraaureliamakaminang', 1, 1, 1, 1, 1, 0, 0, 1, 1, 1),
(266, 'lauraaureliamakaminang', 1, 1, 1, 1, 1, 0, 0, 1, 1, 1),
(267, 'M Faiz Razan Ocali', 0, 0, 0, 0, 0, 1, 1, 0, 0, 0),
(268, 'Keneslatania Oktovianti', 0, 1, 0, 1, 1, 1, 1, 0, 0, 0),
(269, 'Keneslatania Oktovianti', 0, 1, 0, 1, 1, 1, 1, 0, 0, 0),
(270, 'Janeeta', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(271, 'kaysakarenina', 0, 0, 1, 1, 1, 0, 1, 1, 0, 1),
(272, 'Janeeta', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(273, 'Arini', 0, 1, 0, 1, 0, 0, 0, 0, 1, 0),
(274, 'Janeeta', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(275, 'sayid naufal rakha', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(276, 'sayid naufal rakha', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(277, 'Janeeta', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(278, 'zahira', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(279, 'fathinwafiq.h', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(280, '', 0, 0, 0, 1, 1, 0, 0, 0, 1, 1),
(281, 'mutiara', 0, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(282, 'TriyatnaAuliaPermana', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(283, 'hauraozoraa', 0, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(284, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(285, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(286, 'Arini', 1, 1, 0, 1, 0, 0, 0, 0, 1, 0),
(287, 'Arini', 0, 1, 0, 1, 0, 0, 0, 0, 1, 0),
(288, 'Arini', 1, 1, 0, 1, 0, 0, 0, 0, 1, 0),
(289, 'kenar11', 0, 1, 1, 1, 1, 0, 1, 1, 1, 1),
(290, 'sayid naufal rakha', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(291, 'satria', 0, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(292, 'satria', 0, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(293, 'Daffana', 1, 1, 1, 1, 1, 1, 0, 1, 1, 1),
(294, 'Pratama ', 0, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(295, 'Rizky Bintang Irawan', 0, 1, 0, 1, 1, 0, 1, 0, 1, 1),
(296, 'sayid naufal rakha', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(297, 'Ibnu', 0, 1, 0, 1, 1, 0, 1, 0, 0, 1),
(298, 'kaysakarenina', 0, 0, 1, 1, 1, 0, 1, 1, 0, 1),
(299, 'Annisa Cheza', 0, 0, 1, 1, 1, 0, 1, 1, 1, 1),
(300, 'Daffana', 1, 1, 1, 1, 1, 1, 0, 1, 1, 1),
(301, 'edlinakirana', 0, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(302, 'bunga', 0, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(303, ' Arini', 1, 1, 1, 0, 1, 0, 1, 1, 1, 0),
(304, 'Qania Dzakiyamahira', 1, 1, 1, 0, 0, 1, 0, 1, 0, 1),
(305, 'sayid naufal rakha', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(306, 'Febri Zahra ', 0, 0, 0, 0, 0, 1, 0, 1, 0, 0),
(307, 'Febri Zahra ', 0, 0, 0, 0, 0, 1, 0, 1, 0, 0),
(308, 'Pratama ', 0, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(309, '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(310, 'mayrelliaazana', 1, 1, 1, 1, 1, 1, 0, 1, 0, 1),
(311, 'Maliq Rizqi', 1, 1, 1, 1, 0, 1, 1, 1, 1, 1),
(312, 'kaysakarenina', 1, 0, 1, 1, 1, 0, 1, 1, 0, 1),
(313, 'Keneslatania Oktovianti', 1, 1, 0, 1, 1, 1, 1, 0, 0, 0),
(314, 'Annisa Cheza', 1, 0, 1, 1, 1, 0, 1, 1, 1, 1),
(315, 'sayid naufal rakha', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(316, 'muzzammil', 1, 1, 0, 1, 1, 1, 0, 0, 1, 0),
(317, 'janeeta', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(318, 'Keneslatania Oktovianti', 1, 1, 0, 1, 1, 1, 1, 0, 0, 0),
(319, 'muzzammil', 1, 1, 0, 1, 1, 1, 0, 0, 1, 0),
(320, 'Nayla', 0, 0, 1, 1, 1, 1, 0, 0, 1, 1),
(321, 'Nayla', 1, 0, 1, 1, 1, 1, 0, 0, 1, 1),
(322, ' Arini', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(323, ' Arini', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(324, 'kaysakarenina', 1, 0, 1, 1, 1, 0, 1, 1, 0, 1),
(325, 'Nayla', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(326, 'sayid naufal rakha', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(327, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(328, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(329, 'mutiara', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(330, 'zafirafp', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(331, 'Rasya Putra Alfi Zen', 1, 1, 0, 0, 1, 0, 0, 0, 1, 0),
(332, 'fathinwafiq.h', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(333, 'zahira', 0, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(334, 'fathinwafiq.h', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(335, 'fathinwafiq.h', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(336, 'Saka Pradipa Khairi', 1, 0, 1, 1, 1, 1, 0, 1, 1, 0),
(337, 'maheswari', 0, 0, 0, 0, 0, 1, 1, 0, 1, 0),
(338, 'nafesa7b', 1, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(339, 'khansaaqila_faiha', 0, 1, 1, 0, 0, 1, 1, 1, 0, 0),
(340, 'FelishaRizqy N.', 0, 1, 0, 1, 0, 1, 0, 0, 1, 0),
(341, 'gusti m. zacky', 0, 1, 0, 0, 1, 1, 1, 1, 0, 0),
(342, 'dira', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(343, 'luckyhermawan', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(344, 'luckyhermawan', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(345, 'zahira', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0),
(346, 'Fison taqi gavienanugroho', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(347, 'rafi zalfa syah armadhan', 0, 1, 0, 1, 1, 0, 0, 1, 1, 0),
(348, 'haykalfabiano', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(349, 'Triyatna', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(350, 'Saka Pradipa Khairi', 1, 0, 1, 1, 1, 1, 0, 1, 1, 0),
(351, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(352, 'Chrysilla', 1, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(353, 'hauraozoraa', 1, 1, 1, 1, 1, 1, 1, 0, 1, 1),
(354, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(355, 'luckyhermawan', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(356, 'luckyhermawan', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(357, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(358, 'Saka Pradipa Khairi', 1, 0, 1, 1, 1, 1, 0, 1, 1, 0),
(359, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(360, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(361, 'nafesa7b', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(362, 'nafesa7b', 1, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(363, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(364, 'fathinwafiq.h', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(365, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(366, 'mutiara', 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(367, 'Arsyika', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(368, 'Fison taqi gavienanugroho', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(369, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(370, 'Saka Pradipa Khairi', 1, 0, 1, 1, 1, 1, 0, 1, 1, 0),
(371, 'Triyatna', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(372, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(373, 'Fison taqi gavienanugroho', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(374, 'dira', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(375, 'Fison taqi gavienanugroho', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(376, 'Fison taqi gavienanugroho', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(377, 'Triyatna', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(378, 'dira', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(379, 'khansaaqila_faiha', 0, 1, 1, 0, 0, 1, 1, 1, 0, 0),
(380, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(381, 'FelishaRizqy N.', 0, 1, 0, 1, 0, 1, 0, 0, 1, 0),
(382, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(383, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(384, 'luckyhermawan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(385, 'Haykalfabiano', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(386, 'khansaaqila_faiha', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(387, 'khansaaqila_faiha', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(388, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(389, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(390, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(391, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(392, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(393, 'fara', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(394, 'fara', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai2`
--

CREATE TABLE `nilai2` (
  `no` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `satu` float NOT NULL,
  `dua` float NOT NULL,
  `tiga` float NOT NULL,
  `empat` float NOT NULL,
  `lima` float NOT NULL,
  `enam` float NOT NULL,
  `tujuh` float NOT NULL,
  `delapan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai2`
--

INSERT INTO `nilai2` (`no`, `username`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `delapan`) VALUES
(1, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0),
(2, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'nyla', 0, 1, 0, 0, 0, 0, 0, 0),
(10, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'sampun', 1, 1, 1, 1, 1, 1, 1, 1),
(12, 'sampun', 1, 1, 1, 1, 1, 1, 1, 1),
(13, 'kaindra', 1, 1, 0, 0, 1, 1, 1, 1),
(14, 'Angga Wijaya', 1, 1, 0, 1, 0, 0, 0, 0),
(15, 'chantiqa', 0, 0, 1, 0, 1, 1, 0, 0),
(16, 'NugrahaFaizin', 1, 1, 1, 1, 1, 0, 1, 1),
(17, '', 0, 1, 0, 0, 1, 0, 0, 0),
(18, 'M.albrizy', 0, 1, 1, 0, 1, 0, 0, 0),
(19, 'rifqi aunur', 0, 1, 1, 0, 0, 0, 0, 0),
(20, 'M.albrizy', 1, 1, 1, 0, 1, 0, 0, 0),
(21, 'rafa dwi ramadhan ', 0, 1, 1, 1, 1, 0, 0, 0),
(22, 'Azzam lee rizqullah ', 1, 1, 1, 1, 1, 0, 0, 0),
(23, 'rafa dwi ramadhan ', 1, 1, 1, 1, 1, 0, 0, 0),
(24, 'dicky', 1, 1, 1, 0, 0, 0, 0, 0),
(25, 'fathyarubieelcayra', 1, 0, 1, 0, 0, 0, 0, 0),
(26, 'FelishaRizqy N.', 1, 1, 1, 1, 1, 0, 0, 0),
(27, 'Angga Wijaya', 1, 1, 0, 1, 0, 0, 0, 0),
(28, 'M Faiz Razan Ocali', 0, 0, 1, 0, 1, 0, 0, 1),
(29, 'afrahmaritzaatha', 0, 0, 0, 0, 1, 0, 0, 0),
(30, 'aisyahnurtsabita', 1, 1, 1, 0, 0, 0, 0, 0),
(31, 'suli ageung permana', 1, 1, 1, 0, 0, 0, 0, 0),
(32, 'sarahaqilahputri', 1, 1, 0, 1, 1, 1, 1, 1),
(33, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(34, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0),
(35, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0),
(36, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0),
(37, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(38, 'Keneslatania Oktovianti', 1, 1, 1, 1, 1, 1, 1, 0),
(39, 'Arini', 0, 1, 1, 0, 0, 0, 0, 0),
(40, 'zahira', 0, 1, 1, 1, 1, 1, 1, 0),
(41, '', 0, 1, 0, 0, 1, 0, 0, 0),
(42, 'Arini', 0, 1, 1, 0, 0, 0, 0, 0),
(43, 'Qania Dzakiyamahira', 1, 1, 1, 1, 1, 1, 1, 0),
(44, 'Nayla', 1, 1, 1, 1, 1, 1, 1, 0),
(45, ' Arini', 1, 1, 0, 1, 1, 1, 1, 0),
(46, 'Nayla', 0, 1, 1, 1, 1, 1, 1, 0),
(47, 'Febri Zahra ', 0, 1, 1, 0, 1, 0, 1, 0),
(48, 'janeeta', 1, 1, 1, 1, 1, 1, 1, 0),
(49, 'kenar11', 0, 1, 1, 1, 1, 0, 0, 0),
(50, 'Pratama ', 1, 1, 1, 1, 1, 1, 1, 0),
(51, 'Ibnu', 1, 1, 1, 1, 1, 1, 1, 0),
(52, 'Rizky Bintang Irawan', 1, 1, 0, 0, 1, 1, 1, 0),
(53, 'sayid naufal rakha', 1, 1, 1, 1, 1, 1, 1, 0),
(54, 'Nayla', 1, 1, 1, 1, 1, 1, 1, 0),
(55, 'sayid naufal rakha', 1, 1, 1, 1, 1, 1, 1, 0),
(56, 'Qania Dzakiyamahira', 1, 1, 1, 1, 1, 1, 1, 0),
(57, 'mayrelliaazana', 1, 1, 1, 1, 0, 1, 0, 0),
(58, 'bunga', 1, 1, 1, 0, 1, 1, 1, 0),
(59, 'edlinakirana', 0, 1, 0, 0, 1, 1, 0, 0),
(60, 'Febri Zahra ', 1, 1, 1, 0, 1, 0, 1, 0),
(61, 'Febri Zahra ', 1, 1, 1, 0, 1, 0, 1, 0),
(62, 'Annisa Cheza', 1, 0, 0, 1, 1, 1, 1, 0),
(63, 'kaysakarenina', 1, 1, 0, 0, 1, 0, 0, 0),
(64, 'sayid naufal rakha', 1, 1, 1, 1, 1, 1, 1, 0),
(65, 'Daffana', 1, 1, 1, 1, 0, 1, 0, 0),
(66, 'satria', 1, 1, 1, 1, 0, 1, 0, 0),
(67, 'muzzammil', 1, 1, 0, 0, 0, 0, 0, 0),
(68, 'Daffana', 1, 1, 1, 1, 0, 1, 0, 0),
(69, 'Keneslatania Oktovianti', 1, 1, 1, 1, 1, 1, 1, 0),
(70, 'Keneslatania Oktovianti', 1, 1, 1, 1, 1, 1, 1, 0),
(71, 'Maliq Rizqi', 1, 1, 1, 0, 0, 0, 0, 0),
(72, 'zafirafp', 0, 1, 1, 0, 1, 1, 0, 0),
(73, 'maheswari', 0, 1, 0, 1, 1, 0, 0, 0),
(74, 'fathinwafiq.h', 0, 1, 1, 1, 1, 1, 1, 0),
(75, 'nafesa7b', 1, 1, 1, 0, 1, 0, 0, 0),
(76, 'fathinwafiq.h', 1, 1, 1, 1, 1, 1, 1, 0),
(77, 'gusti m. zacky', 0, 0, 1, 1, 0, 1, 1, 0),
(78, 'Saka Pradipa Khairi', 0, 1, 1, 1, 1, 1, 1, 0),
(79, 'Saka Pradipa Khairi', 1, 1, 1, 1, 1, 1, 1, 0),
(80, 'mutiara', 0, 1, 1, 1, 0, 1, 1, 0),
(81, 'Fison taqi gavienanugroho', 1, 1, 1, 1, 1, 1, 1, 0),
(82, 'zahira', 1, 1, 1, 1, 1, 1, 1, 0),
(83, 'Rasya Putra Alfi Zen', 0, 1, 0, 1, 1, 0, 1, 0),
(84, 'Triyatna', 1, 1, 1, 1, 1, 1, 1, 0),
(85, 'mutiara', 1, 1, 1, 1, 0, 1, 1, 0),
(86, 'rafi zalfa syah armadhan', 1, 1, 1, 1, 1, 1, 0, 0),
(87, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 1, 1, 1, 1, 1, 1, 0, 0),
(88, 'dira', 1, 1, 1, 1, 1, 1, 1, 0),
(89, 'Arsyika', 1, 1, 1, 1, 1, 1, 1, 0),
(90, 'Chrysilla', 1, 1, 1, 1, 1, 1, 1, 0),
(91, 'Chrysilla', 1, 1, 1, 1, 1, 1, 1, 0),
(92, 'hauraozoraa', 1, 1, 1, 1, 1, 1, 1, 0),
(93, 'Haykalfabiano', 1, 1, 1, 1, 1, 1, 1, 0),
(94, 'Chrysilla', 1, 1, 1, 1, 1, 1, 1, 0),
(95, 'Chrysilla', 1, 1, 1, 1, 1, 1, 1, 0),
(96, 'syehudin', 1, 0, 0, 0, 0, 0, 0, 0),
(97, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(98, 'syehudin', 0, 0, 0, 0, 0, 0, 0, 0),
(99, 'fara', 0, 1, 0, 0, 0, 0, 0, 0),
(100, 'fara', 0, 1, 0, 0, 0, 0, 0, 0),
(101, 'fara', 0, 1, 0, 0, 0, 0, 0, 0),
(102, 'fara', 0, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai3`
--

CREATE TABLE `nilai3` (
  `no` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `satu` float NOT NULL,
  `dua` float NOT NULL,
  `tiga` float NOT NULL,
  `empat` float NOT NULL,
  `lima` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai3`
--

INSERT INTO `nilai3` (`no`, `username`, `satu`, `dua`, `tiga`, `empat`, `lima`) VALUES
(1, 'syehudin', 1, 1, 1, 1, 1),
(2, 'syehudin', 1, 1, 1, 1, 1),
(3, 'syehudin', 0, 1, 1, 1, 1),
(4, 'syehudin', 0, 1, 1, 1, 1),
(5, 'syehudin', 0, 1, 1, 1, 1),
(6, 'syehudin', 0, 1, 1, 1, 1),
(7, 'syehudin', 0, 1, 1, 1, 1),
(8, 'sampun', 1, 1, 1, 0, 1),
(9, 'sampun', 1, 1, 1, 0, 1),
(10, 'kaindra', 1, 0, 0, 0, 0),
(11, 'chantiqa', 0, 0, 0, 0, 1),
(12, 'Angga Wijaya', 0, 1, 1, 1, 0),
(13, 'Angga Wijaya', 0, 1, 1, 1, 0),
(14, '', 1, 0, 0, 0, 0),
(15, '', 1, 0, 0, 0, 0),
(16, '', 1, 0, 0, 0, 0),
(17, '', 1, 0, 0, 0, 0),
(18, '', 1, 0, 0, 0, 0),
(19, '', 1, 0, 0, 0, 0),
(20, '', 1, 0, 0, 0, 0),
(21, '', 1, 0, 0, 0, 0),
(22, '', 1, 0, 0, 0, 0),
(23, '', 1, 0, 0, 0, 0),
(24, '', 1, 0, 0, 0, 0),
(25, '', 1, 0, 0, 0, 0),
(26, '', 1, 0, 0, 0, 0),
(27, '', 1, 0, 0, 0, 0),
(28, '', 1, 0, 0, 0, 0),
(29, '', 1, 0, 0, 0, 0),
(30, '', 1, 0, 0, 0, 0),
(31, '', 1, 0, 0, 0, 0),
(32, '', 1, 0, 0, 0, 0),
(33, '', 1, 0, 0, 0, 0),
(34, '', 1, 0, 0, 0, 0),
(35, '', 1, 0, 0, 0, 0),
(36, '', 1, 0, 0, 0, 0),
(37, '', 1, 0, 0, 0, 0),
(38, '', 1, 0, 0, 0, 0),
(39, '', 1, 0, 0, 0, 0),
(40, '', 1, 0, 0, 0, 0),
(41, '', 1, 0, 0, 0, 0),
(42, '', 1, 0, 0, 0, 0),
(43, 'rifqi aunur', 1, 0, 0, 0, 0),
(44, 'rafa dwi ramadhan ', 0, 1, 1, 1, 1),
(45, 'Azzam lee rizqullah ', 1, 1, 1, 1, 1),
(46, 'rafa dwi ramadhan ', 1, 1, 1, 1, 1),
(47, 'M.albrizy', 1, 1, 1, 0, 1),
(48, 'dicky', 0, 1, 0, 1, 0),
(49, 'NugrahaFaizin', 0, 1, 0, 0, 0),
(50, 'FelishaRizqy N.', 0, 0, 0, 0, 0),
(51, 'fathyarubieelcayra', 1, 0, 0, 0, 0),
(52, 'aisyahnurtsabita', 0, 0, 1, 0, 1),
(53, 'afrahmaritzaatha', 0, 0, 1, 0, 0),
(54, 'suli ageung permana', 0, 0, 0, 0, 0),
(55, 'sarahaqilahputri', 0, 1, 0, 0, 0),
(56, 'Arini', 0, 1, 1, 1, 0),
(57, 'Arini', 1, 1, 1, 1, 0),
(58, 'Arini', 1, 1, 1, 1, 0),
(59, 'Arini', 1, 1, 1, 1, 0),
(60, 'Arini', 1, 1, 1, 1, 0),
(61, 'Arini', 1, 1, 1, 1, 0),
(62, 'Arini', 1, 1, 1, 1, 0),
(63, 'Arini', 1, 1, 1, 1, 0),
(64, 'Arini', 1, 1, 1, 1, 0),
(65, 'Arini', 1, 1, 1, 1, 0),
(66, 'Nayla', 0, 1, 1, 1, 1),
(67, 'janeeta', 0, 1, 1, 1, 1),
(68, 'janeeta', 1, 1, 1, 1, 1),
(69, ' Arini', 1, 1, 1, 1, 1),
(70, ' Arini', 1, 1, 1, 1, 1),
(71, 'Febri Zahra ', 1, 1, 1, 1, 1),
(72, 'Febri Zahra ', 1, 1, 1, 1, 1),
(73, 'Nayla', 1, 1, 1, 1, 1),
(74, 'kenar11', 0, 1, 1, 0, 1),
(75, 'Pratama ', 1, 1, 1, 0, 1),
(76, 'Ibnu', 1, 1, 1, 1, 1),
(77, 'Rizky Bintang Irawan', 1, 1, 1, 0, 1),
(78, 'sayid naufal rakha', 1, 1, 1, 1, 1),
(79, 'Qania Dzakiyamahira', 1, 1, 1, 1, 1),
(80, 'Annisa Cheza', 0, 1, 1, 1, 0),
(81, 'mayrelliaazana', 1, 1, 1, 0, 0),
(82, 'bunga', 1, 1, 1, 1, 1),
(83, 'edlinakirana', 0, 1, 1, 0, 0),
(84, 'Qania Dzakiyamahira', 1, 1, 1, 1, 1),
(85, 'sayid naufal rakha', 1, 1, 1, 1, 1),
(86, 'Keneslatania Oktovianti', 1, 0, 0, 0, 0),
(87, 'Arsyika', 0, 0, 1, 0, 0),
(88, 'fathinwafiq.h', 1, 1, 1, 1, 1),
(89, 'zafirafp', 1, 0, 1, 1, 1),
(90, 'nafesa7b', 0, 0, 0, 1, 1),
(91, 'fathinwafiq.h', 1, 1, 1, 1, 1),
(92, 'maheswari', 0, 1, 1, 1, 0),
(93, 'gusti m. zacky', 1, 1, 1, 1, 1),
(94, 'Fison taqi gavienanugroho', 1, 1, 1, 1, 1),
(95, 'Saka Pradipa Khairi', 1, 1, 1, 1, 1),
(96, 'Saka Pradipa Khairi', 1, 1, 1, 1, 1),
(97, 'zahira', 1, 1, 1, 1, 1),
(98, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 0, 1, 1, 1, 1),
(99, 'rafi zalfa syah armadhan', 1, 1, 1, 1, 1),
(100, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 0, 1, 1, 1, 1),
(101, 'dira', 1, 1, 1, 1, 1),
(102, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 1, 1, 1, 1, 1),
(103, 'mutiara', 0, 1, 1, 1, 0),
(104, 'Rasya Putra Alfi Zen', 0, 0, 1, 0, 0),
(105, 'Triyatna', 1, 1, 1, 1, 1),
(106, 'Rasya Putra Alfi Zen', 0, 0, 1, 0, 0),
(107, 'Rasya Putra Alfi Zen', 1, 0, 1, 0, 0),
(108, 'mutiara', 1, 1, 1, 1, 0),
(109, 'Chrysilla', 0, 1, 1, 1, 1),
(110, 'Haykalfabiano', 1, 1, 1, 1, 1),
(111, 'hauraozoraa', 0, 0, 1, 1, 1),
(112, 'Chrysilla', 0, 1, 1, 1, 1),
(113, 'Chrysilla', 0, 1, 1, 1, 1),
(114, 'Chrysilla', 1, 1, 1, 1, 1),
(115, 'syehudin', 1, 1, 1, 1, 1),
(116, 'syehudin', 0, 0, 0, 0, 0),
(117, 'fara', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `nama`, `email`, `username`, `password`, `level`, `status`) VALUES
(1, 'Syehudin', 'syehudin1@gmail.com', 'syehudin', 'syehudin', 'user', 1),
(2, 'Syehudin 2', 'syehudin2@gmail.com', 'syehudin2', 'syehudin2', 'guru', 1),
(5, 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', 1),
(6, 'Warmad', 'warmad@gmail.com', 'warmad', 'warmad', 'siswa', 1),
(7, 'Warmad2', 'warmad2@gmail.com', 'warmad2', 'warmad2', 'siswa', 0),
(8, 'Dua', '', 'Dua', 'Dua', 'user', 1),
(9, 'Kaindra A.K', 'kaindrakaka9@gmail.com', 'Kaindra', 'Kaindra2411', 'user', 1),
(10, 'Kaindra A.K', 'kaindrakaka9@gmail.com', 'Kaindra', 'Kaindra2411', 'user', 1),
(11, 'Fathyarubie Elcayra', 'fathyarubie@gmail.com', 'Fathyarubie', 'Elcayra01', 'user', 1),
(12, 'chantiqa', 'wawan13171@gmail.com', 'chantiqa', 'chantiqa1', 'user', 1),
(14, 'Muhammad albrizy nur alamsyah', 'm.albrizy999@gmail.com', 'M.albrizy', 'albrizydankhaira', 'user', 1),
(15, 'mirza humam asshidik', 'mirza.humam@gmail.com', 'mirza humam asshidik', 'mirza humam asshidik', 'user', 1),
(17, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqi', 'user', 1),
(18, 'chantiqa', 'wawan13171@gmail.com', 'chantiqa', 'chantiqa1', 'user', 1),
(19, 'Azzam lee rizqullah ', 'azzamlee04@gmail.com', 'Azzam lee rizqullah', 'Azzamlee04', 'user', 1),
(20, 'sampun', 'sampunsampun85@gmail.com', 'sampun', 'sampunkkn123', 'user', 1),
(21, 'Muhammad albrizy nur alamsyah', 'm.albrizy999@gmail.com', 'M.albrizy', 'khairadanalbrizy', 'user', 1),
(22, 'alfarabi maulana', 'alfarabimaulana.10@gmail.com', 'alfarabi  maulana', 'Farabi100', 'user', 1),
(23, 'Azzam lee rizqullah ', 'azzamlee04@gmail.com', 'Azzam lee rizqullah', '', 'user', 1),
(24, 'Laura Aurelia Makaminang ', 'lauraaureliamakaminang@gmail.com', 'lauraaureliamakaminang', 'lauraassas', 'user', 1),
(25, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqiaunur123402', 'user', 1),
(26, 'Malika Aurelia Putri', 'malikaaureliputri@gmail.com', 'malikaaureliaputri', 'malikaaureliaputri', 'user', 1),
(27, 'sampun', 'sampunsampun85@gmail.com', 'sampun', 'sampunkkn123', 'user', 1),
(28, 'Azzam lee rizqullah ', 'azzamlee04@gmail.com', 'Azzam lee rizqullah', 'azzamlee04', 'user', 1),
(29, 'Kaindra', 'kaindrakaka9@gmail.com', 'Kaindra', 'kaindra2411', 'user', 1),
(30, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqiaunur12340-2', 'user', 1),
(31, 'Muhammad albrizy nur alamsyah', 'm.albrizy999@gmail.com', 'albrizy', 'albrizydankhaira', 'user', 1),
(34, 'muhammad alfarabi maulana ', 'alfarabimaulana.10@gmail.com', 'alfarabi  maulana', 'Farabi100', 'user', 1),
(35, 'Malika Aurelia Putri', 'malikaaureliputri@gmail.com', 'malikaaureliaputri', 'malikaaureliaputri', 'user', 1),
(36, 'Laura Aurelia Makaminang ', 'lauraaureliamakaminang@gmail.com', 'lauraaureliamakaminang', 'lauraassas', 'user', 1),
(37, 'Afrah Maritza Atha ', 'afrahmaritzaatha@gmail.com', 'afrahmaritzaatha', 'Atha2009', 'user', 1),
(38, 'Kaindra', 'kaindrakaka9@gmail.com', 'Kaindra', 'kaindra2411', 'user', 1),
(39, 'Azzam lee rizqullah ', 'azzamlee04@gmail.com', 'Azzam lee rizqullah', 'azzamlee04', 'user', 1),
(40, 'Felisha Rizqy Nindita', 'felishaa1210@gmail.com', 'FelishaRizqy N.', 'felishajm', 'user', 1),
(41, 'Muhammad albrizy nur alamsyah', 'm.albrizy999@gmail.com', 'albrizy', 'albrizydankhaira', 'user', 1),
(42, 'Laura Aurelia Makaminang ', 'lauraaureliamakaminang@gmail.com', 'lauraaureliamakaminang', 'lauraassas', 'user', 1),
(43, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqi123456', 'user', 1),
(44, 'Azzam lee rizqullah ', 'azzamlee04@gmail.com', 'Azzam lee rizqullah', 'azzamlee04', 'user', 1),
(45, 'Malika Aurelia Putri', 'malikaaureliputri@gmail.com', 'malikaaureliaputri', 'malikaaureliaputri', 'user', 1),
(46, 'Kaindra', 'kaindrakaka9@gmail.com', 'Kaindra', 'kaindra2411', 'user', 1),
(47, 'Suli Ageung Permana Putri', 'suliageung@gmail.com', 'Suli', 'ageung15', 'user', 1),
(48, 'Kaindra', 'kaindrakaka9@gmail.com', 'Kaindra', 'kaindra2411', 'user', 1),
(49, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqi123456', 'user', 1),
(50, 'Fathyarubie Elcayra', 'fathyarubie@gmail.com', 'fathyarubieelcayra', 'Elcayra01', 'user', 1),
(51, 'Aqila Azka A', 'riniastuti2138@gmail.com', 'Aqila Azka A', 'Aca21381', 'user', 1),
(52, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqi123456', 'user', 1),
(53, 'Aisyah Nur Tsabita', 'sureltsa@gmail.com', 'aisyahnurtsabita', 'ts4bita', 'user', 1),
(54, 'muhammad dicky haryadi', 'dickyharyadi591@gmail.com', 'muhammad dicky haryadi', 'digimon1215', 'user', 1),
(55, 'Afrah Maritza Atha ', 'afrahmaritzaatha@gmail.com', 'afrahmaritzaatha', 'Atha2009', 'user', 1),
(56, 'Fathyarubie Elcayra', 'fathyarubie@gmail.com', 'fathyarubieelcayra', 'Elcayra01', 'user', 1),
(57, 'Angga Wijaya', 'sampunpintar@gmail.com', 'Angga Wijaya', 'anggawijayapintar', 'user', 1),
(58, 'Aqila Azka A', 'riniastuti2138@gmail.com', 'Aqila Azka A', 'Aca21381', 'user', 1),
(59, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqi123456', 'user', 1),
(61, 'sampun', 'sampunsampun85@gmail.com', 'sampun', 'sampunkkn123', 'user', 1),
(62, 'rafa dwi ramadhan ', 'rafadwi2709@gmail.com', 'rafa dwi ramadhan ', 'hai', 'user', 1),
(63, 'Nugraha Faizin Dzaky', 'faidz.dzaky@gmail.com', 'NugrahaFaizin', 'never', 'user', 1),
(64, 'rifqi runur rahman', 'rrifqiaunur150201@gimail.com', 'rifqi aunur', 'rifqi123456', 'user', 1),
(65, 'Laura Aurelia Makaminang ', 'lauraaureliamakaminang@gmail.com', 'lauraaureliamakaminang', 'lauraassas', 'user', 1),
(66, 'Angga Wijaya', 'sampunpintar@gmail.com', 'Angga Wijaya', 'anggawijayapintar', 'user', 1),
(67, 'Angga Wijaya', 'sampunpintar@gmail.com', 'Angga Wijaya', 'anggawijayapintar', 'user', 1),
(68, 'Angga Wijaya', 'sampunpintar@gmail.com', 'Angga Wijaya', 'anggawijayapintar', 'user', 1),
(69, 'muhammad dicky haryadi', 'dickyharyadi591@gmail.com', 'muhammad dicky haryadi', 'digimon1215', 'user', 1),
(71, 'M Faiz Razan Ocali ', 'ocali@mail.com', 'M Faiz Razan Ocali', 'politik', 'user', 1),
(72, 'rafa dwi ramadhan ', 'rafadwi2709@gmail.com', 'rafa dwi ramadhan ', 'hai', 'user', 1),
(73, 'M Faiz Razan Ocali ', 'ocali@mail.com', 'M Faiz Razan Ocali', 'politik', 'user', 1),
(74, 'Sarah Aqilah Putri', 'qaqilaq@gmail.com', 'sarahaqilahputri', 'SarahSAP', 'user', 1),
(75, 'Nugraha Faizin Dzaky', 'faidz.dzaky@gmail.com', 'NugrahaFaizin', 'NEVER', 'user', 1),
(76, 'Afrah Maritza Atha ', 'afrahmaritzaatha@gmail.com', 'afrahmaritzaatha', 'aTHA2009', 'user', 1),
(77, 'muhammad dicky haryadi', 'dickyharyadi591@gmail.com', 'muhammad dicky haryadi', 'digimon1215', 'user', 1),
(78, 'M Faiz Razan Ocali ', 'ocali@mail.com', 'M Faiz Razan Ocali', 'politik', 'user', 1),
(79, 'sampun', 'sampunsampun85@gmail.com', 'sampun', 'sampunkkn123', 'user', 1),
(80, 'Sarah Aqilah Putri', 'qaqilaq@gmail.com', 'sarahaqilahputri', 'SarahSAP', 'user', 1),
(81, 'Nugraha Faizin Dzaky', 'faidz.dzaky@gmail.com', 'NugrahaFaizin', 'NEVER', 'user', 1),
(82, 'Suli Ageung Permana Putri', 'suliageung@gmail.com', 'Suli', 'ageung15', 'user', 1),
(83, 'sampun', 'sampunsampun85@gmail.com', 'sampun', 'sampunaja123', 'user', 1),
(84, 'Nyla Farhatul Maula', 'nyla.fara@gmail.com', 'nyla', 'nyla', 'user', 1),
(85, 'Nyla Farhatul Maula', 'nyla.fara@gmail.com', 'Nyla', 'nyla', 'user', 0),
(88, 'mirza humam asshidik', 'mirza.humam@gmail.com', 'mirzahumam', 'mirza humam asshidik', 'user', 1),
(89, 'mirza humam asshidik', 'mirza.humam@gmail.com', 'mirzahumam', 'mirza humam asshidik', 'user', 1),
(90, 'Kaindra 24', 'kaindrakaka9@gmail.com', 'kaindra', 'kaindra2411', 'user', 1),
(91, 'malika aurelia putri', 'malikaaureliputri@gmail.com', 'malika', 'malika', 'user', 1),
(92, 'muhammad dicky haryadi', 'dickyharyadi591@gmail.com', 'dicky', 'diki', 'user', 1),
(93, 'suli', 'suliageung@gmail.com', 'suli ageung permana', 'ageung15', 'user', 1),
(94, 'mirza humam asshidik', 'mirza.humam@gmail.com', 'mirza', 'mirzahumam', 'user', 1),
(95, 'Nyla Fara', '', 'Nyla Fara', '2699', 'user', 1),
(96, 'Qania Dzakiyamahira', 'dzqania@gmail.com', 'Qania Dzakiyamahira', 'Karimun1', 'user', 1),
(97, 'fathya rubie el cayra', 'fathyarubieelcayra@gmail.com', 'fathyarubieelcayra', 'Elcayra01', 'user', 0),
(98, 'Qania Dzakiyamahira', 'dzqania@gmail.com', 'Qania.Dzakiyamahira', 'Elcayra01', 'user', 1),
(99, 'Qania Dzakiyamahira', 'dzqania@gmail.com', 'fathyarubieelcayra', 'Karimun1', 'user', 1),
(100, 'Nayla', 'naylanurjaman75@gmail.com', 'Nayla', '12345', 'user', 1),
(101, 'Qania Dzakiyamahira', 'dzqania@gmail.com', 'Qania Dzakiyamahira', 'Karimun1', 'user', 1),
(102, 'chantiqa', 'chantiqa@gmail.com', 'chantiqa', 'chantiqa1', 'user', 0),
(103, 'mayrellia azana basil', 'mayrelliaazana@gmail.com', 'mayrelliaazana', 'Basil1405', 'user', 1),
(104, 'Nayla', 'naylanurjaman75@gmail.com', 'Nayla', '12345', 'user', 1),
(105, 'kaysa karenina', 'kaysakarenina12@gmail.com', 'kaysakarenina', '161208', 'user', 1),
(106, 'Kenar Ghozali Arief', 'kenar.arief@gmail.com', 'kenar11', 'kenar111', 'user', 1),
(107, 'Keneslatania Oktovianti', 'lataniakenes0@gmail.com', 'Keneslatania Oktovianti', 'lusiparanti213', 'user', 1),
(112, 'Kenar Ghozali Arief', 'kenar.arief@gmail.com', 'kenar11', 'kenar111', 'user', 1),
(113, 'Muhammad Azzam', 'alfarisimuhammadazzam@gmail.com', 'Azzam', '114489', 'user', 1),
(114, 'sayid naufal rakha', 'sayidnaufalrakhasmp31@gmail.com', 'sayid naufal rakha', 'mochinakal', 'user', 1),
(115, 'Febri Zahra', 't49676721@gmail.com', 'Febri Zahra', 'febrizahra123', 'user', 1),
(116, 'pratama ali fatihah', 'pratamaalifatihah@gmail.com', 'Pratama ', 'mikuggwp', 'user', 1),
(117, 'Muhammad Azzam', 'alfarisimuhammadazzam@gmail.com', 'Azzam', '1144898', 'user', 1),
(118, 'Keneslatania Oktovianti', 'lataniakenes0@gmail.com', 'Keneslatania Oktovianti', 'lusiparanti213', 'user', 1),
(119, 'satria wiratama', 'satriawiratama114@gmail.com', 'satria wiratama', 'GAMA 3535', 'user', 1),
(120, 'Arini masalika salamah ', '', 'Arini', '25062009', 'user', 1),
(121, 'Daffana Kamiel Danial Mukhlis', 'kdaffana@gmail.com', 'Daffana', 'AL-QURAN1', 'user', 1),
(122, 'Rizky Bintang Irawan', 'irawanrizkybintang22@gmail.com', 'Rizky Bintang Irawan', 'bintang34', 'user', 1),
(123, 'satria wiratama', 'satriawiratama114@gmail.com', 'satria', 'GAMA 3535', 'user', 1),
(124, 'Edlina Kirana Kalila', 'kaylajeroh@gmail.com', 'edlinakirana', 'bl4n953r3', 'user', 1),
(129, 'Ibnu Dzardy', 'ibnudzardy56@gmail.com', 'ibnu', 'Kyzu12', 'user', 1),
(130, 'Maliq Rizqi Ananda', 'am.rizqi51@gmail.com', 'Maliq Rizqi', 'mugatu31', 'user', 1),
(131, 'Edlina Kirana Kalila', 'kaylajeroh@gmail.com', 'edlinakirana', 'bl4n953r30.', 'user', 1),
(132, 'Nyi Raden Annisa Cheza maharani', 'chezaparamita@gmail.com', 'annisa cheza', 'annisacheza0314', 'user', 1),
(133, 'Edlina Kirana Kalila', 'kaylajeroh@gmail.com', 'edlinakirana', 'bl4n953r3', 'user', 1),
(134, 'Edlina Kirana Kalila', 'kaylajeroh@gmail.com', 'edlinakirana', 'bl4n953r3', 'user', 1),
(135, 'muzzammil omar fiqyh', 'muzzammilomarfiqyh@gmail.com', 'muzzammil omar fiqyh', '11zzaam', 'user', 1),
(136, 'muzzammil omar fiqyh', 'muzzammilomarfiqyh@gmail.com', 'muzzammil', 'izzam', 'user', 1),
(137, 'Rizky Bintang Irawan', 'irawanrizkybintang22@gmail.com', 'Rizky Bintang Irawan', 'bintang34', 'user', 1),
(138, 'Rizky Bintang Irawan', 'irawanrizkybintang22@gmail.com', 'irawanrizkybintang22@gmail.com', 'bintang34', 'user', 1),
(139, 'Janeeta Handoko', 'sandrabadut267@gmail.com', 'Janet', 'SULTANHEKER', 'user', 1),
(140, 'Janeeta Handoko', 'sandrabadut267@gmail.com', 'Janeeta', 'sultanheker', 'user', 1),
(141, 'Nafesa Azzahra Atiqa Andy', 'andynafesa@gmail.com', 'nafesaandy', 'nafesainmath', 'user', 1),
(142, 'Nafesa Azzahra Atiqa Andy', 'andynafesa@gmail.com', 'nafesaandy', 'nafesainmath', 'user', 1),
(143, 'TriyatnaAuliaPermana', 'triyatna703@gmail.com', 'TriyatnaAuliaPermana', 'sendal213', 'user', 1),
(144, 'Fathin Wafiq Hadiwiranata', 'wirawisam@gmail.com', 'fathinwafiq.h', 'wira2009', 'user', 1),
(145, 'zafira fadila putri', 'zafirafadilapp@gmail.com', 'zafirafp', 'zafira', 'user', 1),
(146, 'Saka Pradipa Khairi', 'pradipakhairi@gmail.com', 'Saka Pradipa Khairi', 'yolomaan', 'user', 1),
(147, 'Chrysilla Anindya Putri Indah Puspita', '', '', '', 'user', 1),
(148, 'gusti m.zacky', 'gustizacky123@gmail.com', 'jaky', 'Zacky362009', 'user', 1),
(149, 'khansa aqila faiha', 'khansa.faiha160206@gmail.com', 'khansaaqila_faiha', 'Khansa26301982', 'user', 1),
(151, 'Fison Taqi Gavienanugroho', 'taqifison@gmail.com', 'Fison Taqi Gavienanugroho', 'fi', 'user', 1),
(152, 'Rasya Putra Alfi Zen', 'rasya.putraalfiz@gmail.com', 'Rasya Putra Alfi Zen', 'gantengbanget', 'user', 1),
(169, 'Fison Taqi Gavienanugroho', 'taqifison@gmail.com', 'Fison Taqi Gavienanugroho', 'fisontaqi87', 'user', 1),
(170, 'Saka Pradipa Khairi', 'pradipakhairi@gmail.com', 'Saka Pradipa Khairi', 'yolomaan', 'user', 1),
(171, 'khansa aqila faiha', 'khansa.faiha160206@gmail.com', 'khansaaqila_faiha', 'Khansa26301982', 'user', 1),
(172, 'muhammad haykal fabiano nasution', 'Fabiano052009@gmail.com', 'haykalfabiano', 'FLAXKUN25', 'user', 1),
(173, 'luckyhermawan', 'melli@123gmail.com', 'luckyhermawan', '1234567', 'user', 1),
(174, 'rafi zalfa syah armadhan', 'rafiizalfa239@gmail.com', 'rafi zalfa syah armadhan', 'rafi123', 'user', 1),
(175, 'Rasya Putra Alfi Zen', 'rasya.putraalfiz@gmail.com', 'Rasya Putra Alfi Zen', 'gantengbanget', 'user', 1),
(176, 'gusti m.zacky', 'gustizacky123@gmail.com', 'gusti m. zacky', 'Zacky362009', 'user', 1),
(177, 'andira putri pratama', 'andirapratama778@gmail.com', 'dira', '17062009', 'user', 1),
(178, 'Arini', 'arini@gmail.com', 'Arini', '25062009', 'user', 0),
(179, 'muhammad haykal fabiano nasution', 'Fabiano052009@gmail.com', 'haykalfabiano', 'flaxKUN25', 'user', 1),
(181, 'Chrysilla Anindya Putri Indah Puspita', 'chrsysillasilla@gmail.com', 'Chrysilla', 'cHRYSILLA21', 'user', 1),
(183, 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 'mantapmang123@gmail.com', 'MUHAMMAD AZZAM IBNU ABDURROHMAN', 'CILENGKONG2', 'user', 1),
(184, 'Mutiara Cantika Putri', 'cantikamutiara724@gmail.com', 'mutiara', 'mutiaracantikaputri', 'user', 1),
(185, 'luckyhermawan', 'lucky123@gmail.com', 'luckyhermawan', '1234567', 'user', 1),
(186, 'Maheswari Dahayu Cetta', 'dahayucetta692@gmail.com', 'maheswari', '089', 'user', 1),
(187, 'Haura Rafifa Ozora', 'haurarafifaozora@gmail.com', 'hauraozoraa', '0zora', 'user', 1),
(188, 'Ardian dzakwan antonio ', 'ardiandzakwan@gmail.com', 'Ardian ', 'mantap jiwa ', 'user', 1),
(189, 'zahira alya mukhbita', 'zahiralyamukhbita@gmail.com', 'zahira', 'zahira', 'user', 1),
(190, 'Keneslatania Oktovianti', 'lataniakenes0@gmail.com', 'Keneslatania Oktovianti', 'lusiparanti213', 'user', 1),
(191, 'Fara', 'nyla.fara@gmail.com', 'Fara', 'fara', 'user', 1),
(192, 'Oriana Ardesty P.', 'oriana.andaresty@gmail.com', 'Oriana Ardesty P.', 'Asdf', 'user', 1),
(193, 'Oriana Ardesty P.', 'oriana.andaresty@gmail.com', 'Oriana Ardesty P.', 'Pastel121', 'user', 0),
(194, 'Oriana Ardesty P.', 'oriana.andaresty@gmail.com', 'Oriana Ardesty P.', 'Pastrl121', 'user', 0),
(195, 'Oriana Ardesty P.', 'oriana.andaresty@gmail.com', 'Oriana Ardesty P.', 'Pastel121', 'user', 1),
(196, 'Oriana Ardesty P.', 'oriana.andaresty@gmail.com', 'Oriana Ardesty P.', 'Pastel121', 'user', 0),
(197, 'Oriana Ardesty P.', 'oriana.andaresty@gmail.com', 'Oriana Ardesty P.', 'Pastel121', 'user', 0),
(198, 'Oriana ardesty putri', 'oriana.andaresty@gmail.com', 'Oriana', 'Pastel121', 'user', 1),
(199, 'Oriana ardesty putri', 'oriana.ardesty@gmail.com', 'Oriana', 'Pastel121', 'user', 1),
(200, 'bunga deass buana', 'bungadeass123@gmail.com', 'bunga', 'bungadeass123', 'user', 1),
(201, ' Arini masalika salamah', '', ' Arini', '2009', 'user', 1),
(203, 'MUZZAMMIL OMAR FIQYH', '', 'muzzammil', 'IZZAM', 'user', 1),
(204, 'muzzammil omar fiqyh', '', 'muzzammil', 'izzam', 'user', 1),
(205, 'Khansa', 'khansa.faiha160206@gmail.com', 'khansaaqila', 'Khansa26301982', 'user', 1),
(206, 'Nafesa Azzahra Atiqa Andy', 'andynafesa@gmail.com', 'Nafesa7b', 'nafesainmath', 'user', 1),
(207, 'Khansa', '', 'khansaaqila', 'Khansa26301982', 'user', 1),
(208, 'Khansa', 'khansa.faiha160206@gmail.con', 'khansaaqila', 'Khansa26301982', 'user', 1),
(209, 'Khansa', 'lisna.novita@gmail.con', 'Khansa aqila', 'Khansa26301982', 'user', 1),
(210, 'Arsyika Reyhana Sirly', 'arsyikaforever@gmail.com', 'Arsyika', 'Arsyika2009', 'user', 1),
(211, 'TriyatnaAuliaPermana', 'triyatna703@gmail.com', 'Triyatna', 'sendal213', 'user', 1),
(212, 'Muhammad Dimas Arya Syahputra', 'dimassyah1211@gmail.com', 'dimas', 'dimas', 'guru', 1),
(213, 'Nabil Rizky', 'nabil@gmail.com', 'nabil', 'nabil', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `nilai2`
--
ALTER TABLE `nilai2`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `nilai3`
--
ALTER TABLE `nilai3`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;

--
-- AUTO_INCREMENT untuk tabel `nilai2`
--
ALTER TABLE `nilai2`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `nilai3`
--
ALTER TABLE `nilai3`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

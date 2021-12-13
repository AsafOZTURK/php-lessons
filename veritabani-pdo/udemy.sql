-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 13 Ara 2021, 11:50:34
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `udemy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullaniciID` int(11) NOT NULL,
  `kullaniciAdi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciSoyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciMail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciParola` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullaniciYas` int(3) NOT NULL,
  `kullaniciKayitZamani` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullaniciID`, `kullaniciAdi`, `kullaniciSoyadi`, `kullaniciMail`, `kullaniciParola`, `kullaniciYas`, `kullaniciKayitZamani`) VALUES
(12, 'Mehmet Asaf', 'ÖZTÜRK', 'mehmetasafozturk@gmail.com', '123456789', 20, '2021-12-13 11:14:36'),
(13, 'Mehmet Asaf', 'ÖZTÜRK', 'memet372@gmail.com', '987654321', 20, '2021-12-13 11:15:03'),
(14, 'Egemen ', 'Kutay', 'egemenkutay@hotmail.com', 'qwertyu46', 10, '2021-12-13 11:16:10'),
(15, 'Hakan ', 'Güneş ', 'hakangunes@mail.com', 'asdfg65', 33, '2021-12-13 11:16:33'),
(16, 'Yunus Emre', 'Çelik', 'yemrecelik@gmail.com', 'sanane123', 25, '2021-12-13 11:17:09'),
(17, 'Merve ', 'Hocaoğlu', 'mervehoglu@hotmail.com', '1111111', 65, '2021-12-13 11:17:54'),
(18, 'Neslihan', 'Yavuz', 'nyavuz@gmail.com', 'portakal26', 28, '2021-12-13 11:21:21'),
(20, 'a', 'a', 'a', 'a', 0, '2021-12-13 11:28:36'),
(21, 'b', 'b', 'b', 'b', 0, '2021-12-13 11:28:41'),
(22, 'c', 'c', 'c', 'c', 0, '2021-12-13 11:28:48'),
(23, 'e', 'e', 'e', 'e', 0, '2021-12-13 11:28:52'),
(24, 'd', 'd', 'd', 'd', 0, '2021-12-13 11:29:00'),
(25, 'f', 'f', 'f', 'f', 0, '2021-12-13 11:29:06');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullaniciID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullaniciID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

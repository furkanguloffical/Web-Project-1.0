-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 10 Haz 2024, 00:57:41
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `library_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `writers` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  `book` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(201) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(36, 'mustafa', 'mustafa@hotmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(38, 'yunus', 'yunus@hotmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(39, 'keyvan', 'keyvan@hotmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(43, 'furkan', 'furkan@hotmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(45, 'beytullah@hotmail.com', 'beytullah@hotmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(46, 'beytullah@hotmail.com', 'beytullah@hotmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(47, 'test', 'test@hotmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(48, 'deneme', 'deneme@hotmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(49, 'deneme', 'deneme@hotmail.com', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

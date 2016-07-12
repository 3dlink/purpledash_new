-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2016 a las 20:43:40
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `purpledash`
--

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_12_225102_create_services_table', 1),
('2016_06_16_203351_create_phrases_table', 1),
('2016_06_22_151824_create_works_table', 1);

--
-- Volcado de datos para la tabla `phrases`
--

INSERT INTO `phrases` (`id`, `author`, `quote`, `created_at`, `updated_at`) VALUES
(4, 'albert einstein', 'Logic will get you from A to Z. Imagination will take you everywhere', '2016-06-21 02:15:15', '2016-06-21 02:15:15'),
(5, 'steve jobs', 'Design is not just what it looks like and feels like. Design is how it works', '2016-06-21 02:15:23', '2016-06-21 02:15:23'),
(6, '', 'Design is where science and art break even', '2016-06-21 02:15:31', '2016-06-21 02:24:02'),
(7, '', 'An essential aspect of creativity is not being afraid to fail', '2016-06-21 02:17:38', '2016-06-21 03:14:28');

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(3, 'App Design & Development', 'fa-mobile', '2016-06-21 03:23:01', '2016-06-21 03:23:01'),
(4, 'full corporate identity', 'fa-star', '2016-06-21 03:23:22', '2016-06-21 03:23:22'),
(5, 'graphic design', 'fa-paint-brush', '2016-06-21 03:29:42', '2016-06-21 03:29:42');

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$7K4ZCHHHAcjH01LvNTaeqeL4ZU6/q9LwKi7Ksark.g9JmGuSe6ryS', 'E0fD36IAsENxXX0G0OTxqQX0NTKRf2u9tZ0fdWmNHAZLZsXGi9vRfhIU4V8E', '2016-06-23 02:44:14', '2016-06-27 21:17:30');

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `title`, `category`, `description`, `frontImg`, `originalFront`, `mainImg`, `originalMain`, `created_at`, `updated_at`) VALUES
(1, 'sultanser', 'packaging design + branding', 'test', 'img1466962018BH8.jpg', 'sultanserportada2.jpg', 'img1466962018PLQ.jpg', 'sectionsultanser3baja.jpg', '2016-06-26 21:26:58', '2016-06-26 21:26:58'),
(2, 'epicurean creative', 'branding', 'null', 'img1466961870ARH.jpg', 'ecportadapd.jpg', 'img1466961870MP4.jpg', 'sectionepicureanmarianbaja46.jpg', '2016-06-26 21:24:30', '2016-06-26 21:24:30'),
(3, 'fanpass - clubs', 'web design & development + logo design', 'clubs blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img1466961833HHB.jpg', 'clubdsportadapdbaja.jpg', 'img146696183356L.jpg', 'sectionclubsfinalbajaii.jpg', '2016-06-26 21:23:54', '2016-06-26 21:23:54'),
(4, 'my dealer network', 'web design & development + branding', 'dealer blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img146696138848K.jpg', 'mdnportadawebbaja.jpg', 'img1466961388Q3U.jpg', 'sectionmdnbaja.jpg', '2016-06-26 21:16:28', '2016-06-26 21:16:28'),
(5, 'delft', 'web design & development + logo design', 'delft blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img1466959757NP4.jpg', 'delftportadaweb.jpg', 'img1466959757ADI.jpg', 'delftmainimage.jpg', '2016-06-26 20:49:17', '2016-06-26 20:49:17'),
(6, 'Gail & Judy', 'app design and develpment + branding', 'G&J it''s a blablabla blablabla blablablablablabla blablabla', 'img14669597039XZ.jpg', 'gjportadagoogle.jpg', 'img1466958356RKG.jpg', 'gjmainimage.jpg', '2016-06-26 20:25:56', '2016-06-26 20:48:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

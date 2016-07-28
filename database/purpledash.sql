-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2016 a las 01:39:27
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `p1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `p2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `p3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `abouts`
--

INSERT INTO `abouts` (`id`, `p1`, `p2`, `p3`, `created_at`, `updated_at`) VALUES
(1, 'We are a creative design studio based in Buenos Aires though we offer our services worldwide. We seek for simple and powerful solutions, bold aesthetics and surprising outputs across all platforms. We develop corporate identity, graphic communication, art direction, editorial, web & app: design + development, illustration, motion graphic, and branding, among others', 'We create and redesign B2B and B2C brands for clients ranging from start-ups to global corporations.', 'We have a close relationship with our customers, we like to involve ourselves in every project and obtain the best possible results. We create your brand design based on rational strategy and emotional harmony.', '2016-07-28 01:45:27', '2016-07-28 01:51:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `philosophies`
--

CREATE TABLE `philosophies` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `philosophies`
--

INSERT INTO `philosophies` (`id`, `text`, `created_at`, `updated_at`) VALUES
(2, 'We believe in quality because it is the only thing that stands the test of time.', '2016-07-28 01:59:07', '2016-07-28 01:59:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `p2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `title`, `p1`, `p2`, `created_at`, `updated_at`) VALUES
(1, 'What’s behind The Studio?', 'We have an incredible team of professional and creative people. We craft insanely creative digital experiences throughout the globe! We are enthusiastic people, PASSIONATE about design, technology and all creative things in the world.', 'STAFF: Graphic/ Packaging/ Web &amp; App Designers, Photographers, Web &amp; App Developers, Illustrators, Motion Graphic Designer, among others.', '2016-07-28 02:08:55', '2016-07-28 02:08:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frontImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `originalFront` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `originalMain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `title`, `subtitle`, `category`, `description`, `frontImg`, `originalFront`, `mainImg`, `originalMain`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'sultanser', '<i>sultan</i>', 'packaging design + branding', 'test', 'img1466962018BH8.jpg', 'sultanserportada2.jpg', 'img1466962018PLQ.jpg', 'sectionsultanser3baja.jpg', 0, '2016-06-27 01:26:58', '2016-07-28 01:12:07'),
(2, 'epicurean creative', 'epicurean', 'branding', 'alguna <strong>cosa</strong>', 'img1466961870ARH.jpg', 'ecportadapd.jpg', 'img1466961870MP4.jpg', 'sectionepicureanmarianbaja46.jpg', 1, '2016-06-27 01:24:30', '2016-07-28 02:48:04'),
(3, 'fanpass - clubs', 'fanpass', 'web design & development + logo design', 'clubs blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img1466961833HHB.jpg', 'clubdsportadapdbaja.jpg', 'img146696183356L.jpg', 'sectionclubsfinalbajaii.jpg', 1, '2016-06-27 01:23:54', '2016-07-28 01:09:56'),
(4, 'my dealer network', 'dealer', 'web design & development + branding', 'dealer blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img146696138848K.jpg', 'mdnportadawebbaja.jpg', 'img1466961388Q3U.jpg', 'sectionmdnbaja.jpg', 0, '2016-06-27 01:16:28', '2016-07-28 01:01:10'),
(5, 'delft', 'delft', 'web design & development + logo design', 'delft blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img1466959757NP4.jpg', 'delftportadaweb.jpg', 'img1466959757ADI.jpg', 'delftmainimage.jpg', 1, '2016-06-27 00:49:17', '2016-07-28 01:09:54'),
(6, 'Gail & Judy', 'G&J', 'app design and develpment + branding', 'G&J it''s a blablabla blablabla blablablablablabla blablabla', 'img14669597039XZ.jpg', 'gjportadagoogle.jpg', 'img1466958356RKG.jpg', 'gjmainimage.jpg', 0, '2016-06-27 00:25:56', '2016-07-28 00:25:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `philosophies`
--
ALTER TABLE `philosophies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `philosophies`
--
ALTER TABLE `philosophies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

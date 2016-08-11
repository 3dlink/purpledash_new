-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2016 a las 17:11:06
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
-- Estructura de tabla para la tabla `aims`
--

CREATE TABLE `aims` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `aims`
--

INSERT INTO `aims` (`id`, `text`, `created_at`, `updated_at`) VALUES
(3, 'Our ultimate goal is to make our clients happy. <br> What counts is not that the client comes but that he <strong>comes back</strong>. ', '2016-07-30 03:16:55', '2016-07-30 03:16:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `connects`
--

CREATE TABLE `connects` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `connects`
--

INSERT INTO `connects` (`id`, `text`, `created_at`, `updated_at`) VALUES
(4, 'Do not hesitate! Contact us! We are waiting for you!', '2016-07-30 03:16:40', '2016-07-30 03:16:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `areaCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `webpage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `areaCode`, `phone`, `email`, `webpage`, `city`, `country`, `created_at`, `updated_at`) VALUES
(1, '5411', '5901-2596', 'hello@bepurpledash.com', 'www.bepurpledash.com', 'Buenos Aires', 'Argentina', '2016-07-13 01:15:36', '2016-07-13 01:25:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `originalName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origOrder` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `image`, `originalName`, `origOrder`, `order`, `work_id`, `created_at`, `updated_at`) VALUES
(13, 'img1470872247KY4.jpg', 'gjportadagoogle.jpg', 1, 3, 7, '2016-08-10 21:12:11', '2016-08-11 03:37:27'),
(14, 'img1470849131SM9.jpg', 'delftportadaweb.jpg', 2, 1, 7, '2016-08-10 21:12:11', '2016-08-11 03:08:09'),
(15, 'img1470849131PSW.jpg', 'ecportadapd.jpg', 3, 2, 7, '2016-08-10 21:12:12', '2016-08-11 03:08:09'),
(16, 'img147092373232Z.jpg', 'delftmainimage.jpg', 1, 1, 5, '2016-08-11 17:55:32', '2016-08-11 17:55:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_12_225102_create_services_table', 2),
('2016_06_16_203351_create_phrases_table', 2),
('2016_06_22_151824_create_works_table', 2),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_12_225102_create_services_table', 1),
('2016_06_16_203351_create_phrases_table', 1),
('2016_06_22_151824_create_works_table', 1),
('2016_07_12_203945_create_contacts_table', 3),
('2016_07_27_211706_create_abouts_table', 4),
('2016_07_27_211735_create_philosophies_table', 4),
('2016_07_27_211748_create_teams_table', 4),
('2016_07_29_214542_create_aims_table', 5),
('2016_07_29_214611_create_connects_table', 5),
('2016_07_29_215315_create_service_texts_table', 5),
('2016_08_10_140857_create_images_table', 6);

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
-- Estructura de tabla para la tabla `phrases`
--

CREATE TABLE `phrases` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `phrases`
--

INSERT INTO `phrases` (`id`, `author`, `quote`, `created_at`, `updated_at`) VALUES
(4, 'albert einstein', 'Logic will get you from A to Z. Imagination will take you everywhere', '2016-06-21 02:15:15', '2016-06-21 02:15:15'),
(5, 'steve jobs', 'Design is not just what it looks like and feels like. Design is how it works', '2016-06-21 02:15:23', '2016-06-21 02:15:23'),
(6, '', 'Design is where science and art break even', '2016-06-21 02:15:31', '2016-06-21 02:24:02'),
(7, '', 'An essential aspect of creativity is not being afraid to fail', '2016-06-21 02:17:38', '2016-06-21 03:14:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(3, 'App Design & Development', 'fa-mobile', '2016-06-21 03:23:01', '2016-06-21 03:23:01'),
(4, 'full corporate identity', 'fa-star', '2016-06-21 03:23:22', '2016-06-21 03:23:22'),
(5, 'graphic design', 'fa-paint-brush', '2016-06-21 03:29:42', '2016-06-21 03:29:42'),
(6, 'Dani', 'fa-adn', '2016-08-02 21:25:10', '2016-08-02 21:25:10'),
(7, 'graphic ', 'fa-android', '2016-08-02 21:25:29', '2016-08-02 21:25:29'),
(8, 'admin', 'fa-arrow-circle-right', '2016-08-02 21:25:44', '2016-08-02 21:25:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service_texts`
--

CREATE TABLE `service_texts` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `service_texts`
--

INSERT INTO `service_texts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(4, '<strong>PURPLEDASH</strong> IS A VERSATILE CREATIVE STUDIO FOUNDED BY PROFESSIONALS FROM DIFFERENT FIELDS. WE KNOW HOW TO BRING NEW LIFE TO A BRAND AND HOW TO CREATE ENTIRELY NEW CONCEPTS. WE LIKE TO WORK CLOSELY WITH CLIENTS AND INCLUDE THEM IN OUR DESIGN PROCESS TO CREATE BETTER RESULTS.', '2016-07-30 18:02:09', '2016-07-30 18:02:09');

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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$7K4ZCHHHAcjH01LvNTaeqeL4ZU6/q9LwKi7Ksark.g9JmGuSe6ryS', 'E0fD36IAsENxXX0G0OTxqQX0NTKRf2u9tZ0fdWmNHAZLZsXGi9vRfhIU4V8E', '2016-06-23 02:44:14', '2016-06-27 21:17:30');

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
  `hasImages` tinyint(1) NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `title`, `subtitle`, `category`, `description`, `frontImg`, `originalFront`, `hasImages`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'sultanser', '<i>sultan</i>', 'packaging design + branding', 'test', 'img1466962018BH8.jpg', 'sultanserportada2.jpg', 0, 1, '2016-06-27 01:26:58', '2016-07-28 20:56:39'),
(2, 'epicurean creative', 'epicurean', 'branding', 'alguna <strong>cosa</strong>', 'img1466961870ARH.jpg', 'ecportadapd.jpg', 0, 1, '2016-06-27 01:24:30', '2016-07-28 05:59:42'),
(3, 'fanpass - clubs', 'fanpass', 'web design & development + logo design', 'clubs blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img1466961833HHB.jpg', 'clubdsportadapdbaja.jpg', 0, 1, '2016-06-27 01:23:54', '2016-07-28 01:09:56'),
(4, 'my dealer network', 'dealer', 'web design & development + branding', 'dealer blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img146696138848K.jpg', 'mdnportadawebbaja.jpg', 0, 1, '2016-06-27 01:16:28', '2016-07-28 20:56:38'),
(5, 'delft', 'delft', 'web design & development + logo design', 'delft blablablablablabla blablablablablablablablablablablab lablablablablablabla', 'img1466959757NP4.jpg', 'delftportadaweb.jpg', 1, 1, '2016-06-27 00:49:17', '2016-08-11 17:55:32'),
(6, 'Gail & Judy', 'G&J', 'app design and develpment + branding', 'G&J it''s a blablabla blablabla blablablablablabla blablabla', 'img14669597039XZ.jpg', 'gjportadagoogle.jpg', 0, 0, '2016-06-27 00:25:56', '2016-07-28 00:25:06'),
(7, 'test', 'sultan', 'app design and develpment + branding', 'random shit', 'img1469724702ZX7.png', 'mongodb.png', 1, 1, '2016-07-28 20:51:42', '2016-08-10 21:12:12'),
(8, 'test2', 'sultan', 'branding', 'asdasd', 'img1470923629NJQ.jpg', 'clubdsportadapdbaja.jpg', 0, 0, '2016-08-11 17:53:49', '2016-08-11 17:54:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aims`
--
ALTER TABLE `aims`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `philosophies`
--
ALTER TABLE `philosophies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `phrases`
--
ALTER TABLE `phrases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `service_texts`
--
ALTER TABLE `service_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT de la tabla `aims`
--
ALTER TABLE `aims`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `connects`
--
ALTER TABLE `connects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `philosophies`
--
ALTER TABLE `philosophies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `phrases`
--
ALTER TABLE `phrases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `service_texts`
--
ALTER TABLE `service_texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

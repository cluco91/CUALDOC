-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2015 a las 15:29:08
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_cualdoc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidads`
--

CREATE TABLE IF NOT EXISTS `especialidads` (
`id` int(10) unsigned NOT NULL,
  `especialidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `especialidads`
--

INSERT INTO `especialidads` (`id`, `especialidad`, `created_at`, `updated_at`) VALUES
(2, 'Cardiologias', '2015-11-20 16:57:49', '2015-11-20 18:21:22'),
(3, 'Neurologia', '2015-11-20 18:53:47', '2015-11-20 18:53:47'),
(4, 'Pediatria', '2015-11-28 13:41:19', '2015-11-28 13:41:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacions`
--

CREATE TABLE IF NOT EXISTS `evaluacions` (
`id` int(10) unsigned NOT NULL,
  `calidad_atencion` int(11) NOT NULL,
  `lugar_atencion` int(11) NOT NULL,
  `tiempo_espera` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `evaluacion_general` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_usuario` int(10) unsigned NOT NULL,
  `id_medico` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `evaluacions`
--

INSERT INTO `evaluacions` (`id`, `calidad_atencion`, `lugar_atencion`, `tiempo_espera`, `costo`, `evaluacion_general`, `created_at`, `updated_at`, `id_usuario`, `id_medico`) VALUES
(3, 1, 2, 1, 2, 1, '2015-11-27 15:49:34', '2015-11-27 15:49:34', 15, 1),
(4, 3, 3, 4, 3, 3, '2015-11-28 13:45:07', '2015-11-28 13:45:07', 17, 2),
(5, 1, 1, 1, 1, 1, '2015-11-28 14:04:34', '2015-11-28 14:04:34', 17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
`id` int(10) unsigned NOT NULL,
  `rut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `comuna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_especialidad` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `rut`, `nombre`, `telefono`, `comuna`, `direccion`, `path`, `created_at`, `updated_at`, `id_especialidad`) VALUES
(1, '123-k', 'Dr Dencil ', 1234567, 'Santiago', 'Hospital Chanta', '16r1.jpg', '2015-11-20 23:15:16', '2015-11-21 02:00:22', 2),
(2, '1289-k', 'Dr', 1234567, 'Santiago', 'Hospital X', '8r3.jpg', '2015-11-28 13:41:08', '2015-11-28 13:41:31', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_18_215907_create_especialidads_table', 2),
('2015_11_18_215910_create_medicos_table', 2),
('2015_11_18_215920_create_evaluacions_table', 2),
('2015_11_19_151415_add_deleted_to_users_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ADMIN', 'admin@cualdoc.cl', '$2y$10$gvDqiFC6piUkEnZwpkIu9uoYHN7HAF7uyIZwU8oWKSzrG18DS6VBW', 'YLyV1Xwe1H2DSGcvmrHMBc6cNIYlcEv9rxtCkMPLVUa8SnRoUnr86Zo1lIP3', '0000-00-00 00:00:00', '2015-11-28 13:42:35', NULL),
(15, 'Usuario_2', 'user2@cualdoc.cl', '$2y$10$WmUMt7FC.bzvie2wNqJxquxcbOZv1Tn5uKsCBi2dc7GZw.cuebqA2', '9E0kwrPFFGYTj0bsauQ2zFwohHtBdu022PdSXn5RBFawaCMmP3A6nZxmvnjw', '2015-11-20 13:34:57', '2015-11-28 13:39:14', '2015-11-28 13:39:14'),
(16, 'Usuario_35', 'usuario3@gmail.com', '', NULL, '2015-11-28 13:39:54', '2015-11-28 13:40:02', NULL),
(17, 'CCastillo', 'ccastillo@ciisa.cl', '$2y$10$13f60jXpQBCHwggvMZ91leSl/EA9UiOSElf/NW6ouDQ50VnmjZtm2', 'QkZUPwDo8osIMEnvD29NjSLSN5mvaZDqUhdEtQNB2RN2OQstG7FE0fhnnupY', '2015-11-28 13:42:23', '2015-11-28 14:10:23', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especialidads`
--
ALTER TABLE `especialidads`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacions`
--
ALTER TABLE `evaluacions`
 ADD PRIMARY KEY (`id`), ADD KEY `evaluacions_id_usuario_foreign` (`id_usuario`), ADD KEY `evaluacions_id_medico_foreign` (`id_medico`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
 ADD PRIMARY KEY (`id`), ADD KEY `medicos_id_especialidad_foreign` (`id_especialidad`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especialidads`
--
ALTER TABLE `especialidads`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `evaluacions`
--
ALTER TABLE `evaluacions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evaluacions`
--
ALTER TABLE `evaluacions`
ADD CONSTRAINT `evaluacions_id_medico_foreign` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id`),
ADD CONSTRAINT `evaluacions_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `medicos`
--
ALTER TABLE `medicos`
ADD CONSTRAINT `medicos_id_especialidad_foreign` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidads` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

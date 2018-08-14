-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2018 a las 21:32:49
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `despachos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alistamientos`
--

CREATE TABLE `alistamientos` (
  `id` int(11) NOT NULL,
  `vehiculo_id` int(11) DEFAULT NULL,
  `conductor_id` int(11) DEFAULT NULL,
  `licencia_chk` tinyint(1) DEFAULT NULL,
  `licencia_obs` text COLLATE utf8_spanish_ci,
  `soat_chk` tinyint(1) DEFAULT NULL,
  `soat_obs` text COLLATE utf8_spanish_ci,
  `rtm_chk` tinyint(1) DEFAULT NULL,
  `rtm_obs` text COLLATE utf8_spanish_ci,
  `seguros_chk` tinyint(1) DEFAULT NULL,
  `seguros_obs` text COLLATE utf8_spanish_ci,
  `direcdelante_chk` tinyint(1) DEFAULT NULL,
  `direcdelante_obs` text COLLATE utf8_spanish_ci,
  `direcatras_chk` tinyint(1) DEFAULT NULL,
  `direcatras_obs` text COLLATE utf8_spanish_ci,
  `lucesaltas_chk` tinyint(1) DEFAULT NULL,
  `lucesaltas_obs` text COLLATE utf8_spanish_ci,
  `lucesbajas_chk` tinyint(1) DEFAULT NULL,
  `lucesbajas_obs` text COLLATE utf8_spanish_ci,
  `lucesstops_chk` tinyint(1) DEFAULT NULL,
  `lucesstops_obs` text COLLATE utf8_spanish_ci,
  `lucesreversa_chk` tinyint(1) DEFAULT NULL,
  `lucesreversa_obs` text COLLATE utf8_spanish_ci,
  `lucesparqueo_chk` tinyint(1) DEFAULT NULL,
  `lucesparqueo_obs` text COLLATE utf8_spanish_ci,
  `limpiabrizas_chk` tinyint(1) DEFAULT NULL,
  `limpiabrizas_obs` text COLLATE utf8_spanish_ci,
  `frenoprincipal_chk` tinyint(1) DEFAULT NULL,
  `frenoprincipal_obs` text COLLATE utf8_spanish_ci,
  `frenoemergencia_chk` tinyint(1) DEFAULT NULL,
  `frenoemergencia_obs` text COLLATE utf8_spanish_ci,
  `llantadelante_chk` tinyint(1) DEFAULT NULL,
  `llantadelante_obs` text COLLATE utf8_spanish_ci,
  `llantaatras_chk` tinyint(1) DEFAULT NULL,
  `llantaatras_obs` text COLLATE utf8_spanish_ci,
  `llantarepuesto_chk` tinyint(1) DEFAULT NULL,
  `llantarepuesto_obs` text COLLATE utf8_spanish_ci,
  `espejolateral_chk` tinyint(1) DEFAULT NULL,
  `espejolateral_obs` text COLLATE utf8_spanish_ci,
  `espejoretrovisor_chk` tinyint(1) DEFAULT NULL,
  `espejoretrovisor_obs` text COLLATE utf8_spanish_ci,
  `pito_chk` tinyint(1) DEFAULT NULL,
  `pito_obs` text COLLATE utf8_spanish_ci,
  `fluidofrenos_chk` tinyint(1) DEFAULT NULL,
  `fluidofrenos_obs` text COLLATE utf8_spanish_ci,
  `fluidoaceite_chk` tinyint(1) DEFAULT NULL,
  `fluidoaceite_obs` text COLLATE utf8_spanish_ci,
  `fluidorefrigera_chk` tinyint(1) DEFAULT NULL,
  `fluidorefrigera_obs` text COLLATE utf8_spanish_ci,
  `apoyadelante_chk` tinyint(1) DEFAULT NULL,
  `apoyadelante_obs` text COLLATE utf8_spanish_ci,
  `apoyaatras_chk` tinyint(1) DEFAULT NULL,
  `apoyaatras_obs` text COLLATE utf8_spanish_ci,
  `cinturon_chk` tinyint(1) DEFAULT NULL,
  `cinturon_obs` text COLLATE utf8_spanish_ci,
  `mantenaceite` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mantenaceite_chk` tinyint(1) DEFAULT NULL,
  `mantenaceite_obs` text COLLATE utf8_spanish_ci,
  `mantensincro` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mantensincro_chk` tinyint(1) DEFAULT NULL,
  `mantensincro_obs` text COLLATE utf8_spanish_ci,
  `mantenalinea` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mantenalinea_chk` tinyint(1) DEFAULT NULL,
  `mantenalinea_obs` text COLLATE utf8_spanish_ci,
  `mantenllantas` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mantenllantas_chk` tinyint(1) DEFAULT NULL,
  `mantenllantas_obs` text COLLATE utf8_spanish_ci,
  `tecnomecanica` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tecnomecanica_chk` tinyint(1) DEFAULT NULL,
  `tecnomecanica_obs` text COLLATE utf8_spanish_ci,
  `soatvencimiento` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `soatvencimiento_chk` tinyint(1) DEFAULT NULL,
  `soatvencimiento_obs` text COLLATE utf8_spanish_ci,
  `extintor` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `extintor_chk` tinyint(1) DEFAULT NULL,
  `extintor_obs` text COLLATE utf8_spanish_ci,
  `capaextintor` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `capaextintor_chk` tinyint(1) DEFAULT NULL,
  `capaextintor_obs` text COLLATE utf8_spanish_ci,
  `herramienta_chk` tinyint(1) DEFAULT NULL,
  `herramienta_obs` text COLLATE utf8_spanish_ci,
  `cruceta_chk` tinyint(1) DEFAULT NULL,
  `cruceta_obs` text COLLATE utf8_spanish_ci,
  `gato_chk` tinyint(1) DEFAULT NULL,
  `gato_obs` text COLLATE utf8_spanish_ci,
  `taco_chk` tinyint(1) DEFAULT NULL,
  `taco_obs` text COLLATE utf8_spanish_ci,
  `senales_chk` tinyint(1) DEFAULT NULL,
  `senales_obs` text COLLATE utf8_spanish_ci,
  `chaleco_chk` tinyint(1) DEFAULT NULL,
  `chaleco_obs` text COLLATE utf8_spanish_ci,
  `botiquin_chk` tinyint(1) DEFAULT NULL,
  `botiquin_obs` text COLLATE utf8_spanish_ci,
  `final_obs` text COLLATE utf8_spanish_ci,
  `user_registro` int(11) NOT NULL,
  `user_aprueba` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `fch_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fch_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alistamientos`
--

INSERT INTO `alistamientos` (`id`, `vehiculo_id`, `conductor_id`, `licencia_chk`, `licencia_obs`, `soat_chk`, `soat_obs`, `rtm_chk`, `rtm_obs`, `seguros_chk`, `seguros_obs`, `direcdelante_chk`, `direcdelante_obs`, `direcatras_chk`, `direcatras_obs`, `lucesaltas_chk`, `lucesaltas_obs`, `lucesbajas_chk`, `lucesbajas_obs`, `lucesstops_chk`, `lucesstops_obs`, `lucesreversa_chk`, `lucesreversa_obs`, `lucesparqueo_chk`, `lucesparqueo_obs`, `limpiabrizas_chk`, `limpiabrizas_obs`, `frenoprincipal_chk`, `frenoprincipal_obs`, `frenoemergencia_chk`, `frenoemergencia_obs`, `llantadelante_chk`, `llantadelante_obs`, `llantaatras_chk`, `llantaatras_obs`, `llantarepuesto_chk`, `llantarepuesto_obs`, `espejolateral_chk`, `espejolateral_obs`, `espejoretrovisor_chk`, `espejoretrovisor_obs`, `pito_chk`, `pito_obs`, `fluidofrenos_chk`, `fluidofrenos_obs`, `fluidoaceite_chk`, `fluidoaceite_obs`, `fluidorefrigera_chk`, `fluidorefrigera_obs`, `apoyadelante_chk`, `apoyadelante_obs`, `apoyaatras_chk`, `apoyaatras_obs`, `cinturon_chk`, `cinturon_obs`, `mantenaceite`, `mantenaceite_chk`, `mantenaceite_obs`, `mantensincro`, `mantensincro_chk`, `mantensincro_obs`, `mantenalinea`, `mantenalinea_chk`, `mantenalinea_obs`, `mantenllantas`, `mantenllantas_chk`, `mantenllantas_obs`, `tecnomecanica`, `tecnomecanica_chk`, `tecnomecanica_obs`, `soatvencimiento`, `soatvencimiento_chk`, `soatvencimiento_obs`, `extintor`, `extintor_chk`, `extintor_obs`, `capaextintor`, `capaextintor_chk`, `capaextintor_obs`, `herramienta_chk`, `herramienta_obs`, `cruceta_chk`, `cruceta_obs`, `gato_chk`, `gato_obs`, `taco_chk`, `taco_obs`, `senales_chk`, `senales_obs`, `chaleco_chk`, `chaleco_obs`, `botiquin_chk`, `botiquin_obs`, `final_obs`, `user_registro`, `user_aprueba`, `estado`, `fch_registro`, `fch_updated`) VALUES
(1, 2, 1, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Todo correcto', 1, 4, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(2, 2, 1, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', '', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(3, 2, 1, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Esta todo correcto°!!', 1, 1, 2, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(6, 2, 1, 1, 'Algun comentario', 1, 'Algun comentario', 1, 'Algun comentario', 1, 'Algun comentario', 1, '', 1, '', 1, 'Algun comentario', 1, 'Algun comentario', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'todo correcto para este alistamiento', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(7, 2, 1, NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', 1, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', '', 1, 1, 2, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(8, 2, 1, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Todo esta correcto', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(9, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Todo conforme', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(10, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Todo esta conforme', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(11, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', '', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(12, 9, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Todo esta correcto', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-11 13:04:35'),
(13, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', '', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(14, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Todo correcto', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-01 18:47:46'),
(15, 2, 1, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', '', 1, 1, 1, '0000-00-00 00:00:00', '2018-08-11 13:04:36'),
(16, 9, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Nuevo alistamiento', 1, 1, 1, '2018-08-02 01:42:38', '2018-08-01 18:47:46'),
(17, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Nuevo Alistamiento ', 1, 1, 1, '2018-08-02 01:51:17', '2018-08-11 13:04:36'),
(18, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Otro nuevo Alistamiento', 1, 1, 1, '2018-08-01 18:52:04', NULL),
(19, 3, 2, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Alistamiento todo esta bien', 1, 1, 1, '2018-08-01 18:55:02', '2018-08-01 18:55:30'),
(20, 2, 1, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', NULL, 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 1, '', 'Todo esta ok', 1, 1, 1, '2018-08-11 13:29:23', '2018-08-11 13:34:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `id` int(11) NOT NULL,
  `vehiculo_id` int(11) DEFAULT NULL,
  `conductor_id` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`id`, `vehiculo_id`, `conductor_id`, `fecha`) VALUES
(1, 2, 1, '2018-04-13 09:13:16'),
(2, 3, 2, '2018-04-15 10:09:05'),
(3, 2, 6, '2018-04-27 20:17:26'),
(4, 9, 2, '2018-06-29 01:20:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `id` int(11) NOT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `foto` text,
  `hoja` text,
  `fecha` timestamp NULL DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `num_licencia` varchar(15) NOT NULL,
  `cat_licencia` varchar(15) NOT NULL,
  `fec_licencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`id`, `documento`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `foto`, `hoja`, `fecha`, `estado`, `num_licencia`, `cat_licencia`, `fec_licencia`) VALUES
(1, '46767421', 'luis', 'su casa', NULL, '4545454', 'luis@gmail.com', NULL, NULL, '2018-04-05 08:53:43', 1, '', '', '2018-06-01'),
(2, '10120121', 'juan', ' Perez', 'direccion de juan', '454545', 'juan@gmail.com', '', '', '2018-06-28 11:37:16', 1, '101212', 'categoria 01', '2018-06-30'),
(3, '12131412', 'gean', 'fernandez', 'Calle moquegua 340', '4545454', 'gean@gmail.com', 'user2-160x160.jpg', 'constancia.pdf', '2018-04-05 09:15:24', 1, '', '', '2018-05-29'),
(4, '46767422', 'luis ', 'carpio', 'calle arequipa 430', '', '', '', '', '2018-04-07 20:08:12', 1, '', '', '2018-06-13'),
(5, '46767423', 'karla beatriz', 'rodriguez ponce', 'Calle moquegua 340', '43434345', 'karla@gmail.com', '', '', '2018-04-15 13:40:39', 1, '', '', '2018-05-28'),
(6, '4676745', 'carlos ', 'gutierrez', 'Jr. Moquegua 4390', '', 'carlosg@gmail.com', '', '', '2018-04-07 20:09:46', 0, '', '', '2018-06-01'),
(7, '46767898', 'yony brondy', 'mamani fuentes', 'jr. moquegua 310', '054565454', '', '', '', '2018-04-27 22:07:39', 1, '', '', '2018-06-05'),
(8, '45451213', 'yony brondy', 'mamani fuentes', 'miramar e-13 parte baja', '454123', 'yony@gmail.com', '', '', '2018-05-03 06:36:13', 1, '101a112', 'categoria 01', '2018-05-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nit` varchar(20) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nit`, `nombre`, `direccion`, `telefono`, `correo`, `fecha`, `estado`, `logo`) VALUES
(1, '121212121', 'Empresa Soldadura', 'direccion 01', '3434343', 'empresa01@gmail.com', '2018-04-22 23:55:48', 1, 'Desert.jpg'),
(2, '11110211', 'Empresa 01', 'DIRECCION 02', '4545454', 'empresa02@gmail.com', '2018-04-27 19:55:50', 1, ''),
(3, '454454442', 'empresa 03', 'direccion 03', '4545454', 'empresa03@gmail.com', '2018-04-06 05:00:00', 1, ''),
(4, '5454321', 'empresa 04', 'direccion emprsa 04', '545454', 'empresa04@gmail.com', '2018-04-05 01:51:36', 1, ''),
(5, '12121211', 'empresa robles sa', 'calle pichincha 430', '053545467', 'empresaroblessa@hotmail.com', '2018-04-07 19:43:55', 1, ''),
(6, '10010201', 'Empresa de Seguros', 'calle arica 430', '054545452', 'empresaseguros@gmail.com', '2018-04-15 07:55:46', 1, ''),
(7, '203040512', 'Empresa Textil', 'calle moquegua 430', '4040213', 'empresatextil@gmail.com', '2018-04-27 21:52:25', 1, ''),
(8, '390400112', 'empresa cardenas sa', 'jr abatao 450', '409044', 'empresacardenas@gmail.com', '2018-04-15 08:01:30', 0, ''),
(9, '1020304012', 'empresa brondy', 'Jr abtao 340', '053434343', 'brondy@gmail.com', '2018-04-27 22:07:19', 1, ''),
(10, '10200103', 'Los pierolas s.r.l', 'Calle Arica 320', '454646', 'lospierolassrl@gmail.com', '2018-04-22 23:38:51', 1, 'Koala.jpg'),
(11, '2001020166', 'Carty S.A', 'Av. Sarmiento 430', '', '', '2018-04-22 23:02:17', 1, 'Penguins.jpg'),
(12, '343434312', 'Fernandez S.A', 'Calle Miraflores 340', '', '', '2018-04-27 19:49:38', 1, 'Captura.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `modulo` varchar(200) NOT NULL,
  `accion` varchar(200) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `fecha`, `usuario_id`, `modulo`, `accion`, `descripcion`) VALUES
(1, '2018-04-27 14:37:20', 1, 'Vehiculos', '', 'Inserción de nuevo Vehiculo con placa ahc01'),
(2, '2018-04-27 14:43:06', 1, 'Vehiculos', '', 'Actualización del Vehiculo con placa 001'),
(3, '2018-04-27 14:43:57', 1, 'Vehiculos', '', 'Eliminación del Vehiculo con placa ah1021'),
(4, '2018-04-27 14:49:38', 1, 'Empresas', '', 'Inserción de nueva Empresa con NIT 343434312'),
(5, '2018-04-27 14:55:50', 1, 'Empresas', '', 'Actualización de la Empresa con NIT 11110211'),
(6, '2018-04-27 14:56:12', 1, 'Empresas', '', 'Eliminación de la Empresa con NIT 203040512'),
(7, '2018-04-27 14:58:23', 1, 'Conductores', '', 'Inserción de nuevo Coductor con documento 46767898'),
(8, '2018-04-27 14:59:01', 1, 'Conductores', '', 'Actualización del Conductor con documento 46767898'),
(9, '2018-04-27 14:59:15', 1, 'Conductores', '', 'Eliminación del Conductor con documento 46767898'),
(10, '2018-04-27 15:17:26', 1, 'Asignaciones', '', 'Inserción de nueva Asignaciones del Conductor 4676745  con el Vehiculo 001'),
(11, '2018-04-27 15:33:05', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 8'),
(12, '2018-04-27 15:40:37', 1, 'Vehiculos', '', 'Inserción de nuevo Mantenimiento para el Vehiculo con placa'),
(13, '2018-04-27 15:41:31', 1, 'Vehiculos', '', 'Actualización del Mantenimiento al Vehiculo con placa 001'),
(14, '2018-04-27 15:49:08', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°6'),
(15, '2018-04-27 15:49:18', 1, 'Alistamientos', '', 'No Aprobación del Alistamiento N°7'),
(16, '2018-04-27 15:55:39', 1, 'Usuarios', '', 'Actualización del Usuario julio@gmail.com'),
(17, '2018-04-27 15:55:56', 1, 'Usuarios', '', 'Eliminación del Usuario geanf@gmail.com'),
(18, '2018-04-27 16:52:25', 1, 'Empresas', '', 'Actualización de la Empresa con NIT 203040512'),
(19, '2018-04-27 17:06:53', 1, 'Vehiculos', '', 'Actualización del Vehiculo con placa ahc01'),
(20, '2018-04-27 17:07:19', 1, 'Empresas', '', 'Actualización de la Empresa con NIT 1020304012'),
(21, '2018-04-27 17:07:39', 1, 'Conductores', '', 'Actualización del Conductor con documento 46767898'),
(22, '2018-04-27 17:19:44', 1, 'Usuarios', '', 'Cierre de sesión'),
(23, '2018-04-27 17:20:10', 1, 'Usuarios', '', 'Inicio de sesión'),
(24, '2018-04-28 17:56:49', 1, 'Usuarios', '', 'Inicio de sesión'),
(25, '2018-04-28 17:59:40', 1, 'Proveedores', '', 'Inserción de nuevo Proveedor con NIT 401020010'),
(26, '2018-04-28 18:18:30', 1, 'Proveedores', '', 'Actualización del Proveedor con NIT 401020012'),
(27, '2018-04-28 18:22:20', 1, 'Proveedores', '', 'Eliminación del Proveedor con NIT 401020012'),
(28, '2018-04-28 18:22:32', 1, 'Proveedores', '', 'Actualización del Proveedor con NIT 401020012'),
(29, '2018-04-28 20:37:28', 1, 'Proveedores', '', 'Eliminación del Proveedor con NIT '),
(30, '2018-04-28 23:29:26', 1, 'Usuarios', '', 'Inicio de sesión'),
(31, '2018-05-03 00:07:38', 1, 'Usuarios', '', 'Inicio de sesión'),
(32, '2018-05-03 00:42:06', 1, 'Usuarios', '', 'Inicio de sesión'),
(33, '2018-05-03 01:34:50', 1, 'Usuarios', '', 'Inicio de sesión'),
(34, '2018-05-03 01:36:13', 1, 'Conductores', '', 'Inserción de nuevo Coductor con documento 45451213'),
(35, '2018-05-03 02:12:56', 1, 'Vehiculos', '', 'Inserción de nuevo Vehiculo con placa 1100121'),
(36, '2018-05-03 02:24:38', 1, 'Vehiculos', '', 'Actualización del Vehiculo con placa 1100121'),
(37, '2018-05-03 03:12:29', 1, 'Vehiculos', '', 'Inserción de nuevo Mantenimiento para el Vehiculo con placa001'),
(38, '2018-05-03 05:34:51', 1, 'Usuarios', '', 'Inicio de sesión'),
(39, '2018-05-03 06:45:53', 1, 'Vehiculos', '', 'Actualización del Vehiculo con placa 1100121'),
(40, '2018-05-03 14:38:24', 1, 'Usuarios', '', 'Inicio de sesión'),
(41, '2018-06-07 07:51:39', 1, 'Usuarios', '', 'Inicio de sesión'),
(42, '2018-06-28 05:10:53', 1, 'Usuarios', '', 'Inicio de sesión'),
(43, '2018-06-28 05:12:36', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 9'),
(44, '2018-06-28 05:45:34', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°8'),
(45, '2018-06-28 05:46:34', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 10'),
(46, '2018-06-28 06:17:14', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°9'),
(47, '2018-06-28 06:18:43', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 11'),
(48, '2018-06-28 06:22:44', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°10'),
(49, '2018-06-28 06:22:44', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°11'),
(50, '2018-06-28 06:28:21', 1, 'Conductores', '', 'Actualización del Conductor con documento 10120121'),
(51, '2018-06-28 06:37:17', 1, 'Conductores', '', 'Actualización del Conductor con documento 10120121'),
(52, '2018-06-28 20:19:30', 1, 'Vehiculos', '', 'Inserción de nuevo Vehiculo con placa 091212'),
(53, '2018-06-28 20:20:10', 1, 'Asignaciones', '', 'Inserción de nueva Asignaciones del Conductor 10120121  con el Vehiculo 091212'),
(54, '2018-06-28 20:20:34', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 12'),
(55, '2018-07-25 15:28:14', 1, 'Usuarios', '', 'Inicio de sesión'),
(56, '2018-08-01 17:17:48', 1, 'Usuarios', '', 'Inicio de sesión'),
(57, '2018-08-01 17:18:10', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 13'),
(58, '2018-08-01 17:21:47', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°'),
(59, '2018-08-01 17:23:47', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°'),
(60, '2018-08-01 17:23:53', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°ruta 01'),
(61, '2018-08-01 17:25:00', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 14'),
(62, '2018-08-01 17:28:50', 1, 'Alistamientos', '', 'No Aprobación del Alistamiento N°'),
(63, '2018-08-01 17:43:08', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°'),
(64, '2018-08-01 17:49:12', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°14'),
(65, '2018-08-01 17:49:23', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°13'),
(66, '2018-08-01 20:38:07', 1, 'Usuarios', '', 'Inicio de sesión'),
(67, '2018-08-01 20:38:23', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 15'),
(68, '2018-08-01 20:42:39', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 16'),
(69, '2018-08-01 20:49:41', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°16'),
(70, '2018-08-01 20:51:17', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 17'),
(71, '2018-08-01 20:52:04', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 18'),
(72, '2018-08-01 20:52:57', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°18'),
(73, '2018-08-01 20:55:02', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 19'),
(74, '2018-08-01 20:55:30', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°19'),
(75, '2018-08-02 04:04:59', 1, 'Usuarios', '', 'Inicio de sesión'),
(76, '2018-08-02 04:09:42', 1, 'Vehiculos', '', 'Actualización del Vehiculo con placa 091212'),
(77, '2018-08-02 05:45:10', 1, 'Usuarios', '', 'Inicio de sesión'),
(78, '2018-08-11 15:04:04', 1, 'Usuarios', '', 'Inicio de sesión'),
(79, '2018-08-11 15:04:36', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°12'),
(80, '2018-08-11 15:04:36', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°15'),
(81, '2018-08-11 15:04:36', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°17'),
(82, '2018-08-11 15:29:24', 1, 'Alistamientos', '', 'Inserción de nuevo Alistamiento con número 20'),
(83, '2018-08-11 15:34:01', 1, 'Alistamientos', '', 'Aprobación del Alistamiento N°20'),
(84, '2018-08-14 21:26:11', 1, 'Usuarios', '', 'Inicio de sesión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id` int(11) NOT NULL,
  `vehiculo_id` int(11) NOT NULL,
  `tipomantenimiento_id` int(11) NOT NULL,
  `numfac` varchar(100) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`id`, `vehiculo_id`, `tipomantenimiento_id`, `numfac`, `proveedor`, `descripcion`, `fecha`) VALUES
(1, 4, 1, '1001012', 1, 'MANTENIMIENTO DE SOAT', '2018-04-22'),
(2, 4, 2, '10010', 1, 'REVISION TECNICOMECANICA', '2018-04-21'),
(3, 4, 4, '1021012', 1, 'cambio de aceite', '2018-04-19'),
(4, 4, 1, '1010212', 1, 'cambio de extintor', '2018-04-20'),
(5, 2, 3, 'FAC120012', 1, 'Mantenimiento de Seguros', '2018-04-27'),
(6, 2, 2, '11001', 1, 'mantenimiento de cajas ', '2018-05-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nit` varchar(150) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nit`, `nombre`, `direccion`, `telefono`, `correo`, `fecha`, `estado`) VALUES
(1, '401020012', 'Los Fernandez S.A', 'Calle Arequipa 310', '454522', 'losfernandez@gmail.com', '2018-04-28 18:22:32', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Administrador', NULL, 1),
(2, 'Despachador', NULL, 1),
(3, 'Jefe de Ruta', NULL, 1),
(4, 'Usuario', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mantenimientos`
--

CREATE TABLE `tipo_mantenimientos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_mantenimientos`
--

INSERT INTO `tipo_mantenimientos` (`id`, `nombre`) VALUES
(1, 'Motor'),
(2, 'Cajas de Velocidades'),
(3, 'Suspensión'),
(4, 'Direccion'),
(5, 'Electrico'),
(6, 'Frenos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `sexo` varchar(20) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `imagen` text NOT NULL,
  `hoja` text NOT NULL,
  `firma` text NOT NULL,
  `cedula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `sexo`, `email`, `password`, `estado`, `rol`, `imagen`, `hoja`, `firma`, `cedula`) VALUES
(1, 'Yony Brondy Fuentes', 'M', 'yonybrondy17@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 1, 'avatar51.png', 'ErrorTicket1.pdf', '4.JPG', '45654311'),
(2, 'juan perez', '', 'juan@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 2, '', '', 'Koala.jpg', '45654314'),
(3, 'abel', '', 'abel@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 4, '', '', '', '45654315'),
(4, 'santiago miguel', '', 'santiago@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 3, '', '', 'Lighthouse.jpg', '45654345'),
(5, 'Yessica Fuentes', 'F', 'yessica@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 4, 'imagen_femenino.jpg', '', '', '32123556'),
(6, 'gean  fernandez', 'M', 'geanf@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 4, 'imagen_masculino.jpg', '', '', '45432145'),
(7, 'Julio Grondona Cardona', 'M', 'julio@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 4, 'imagen_masculino.jpg', '', '', '4543222');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `kilometraje` varchar(45) DEFAULT NULL,
  `tarjeta` date DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `licencia` varchar(45) DEFAULT NULL,
  `fv_licencia` date DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `chasis` varchar(50) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(6) NOT NULL,
  `ruta` varchar(50) NOT NULL,
  `soat` varchar(50) NOT NULL,
  `fec_soat` date NOT NULL,
  `fec_revision` date NOT NULL,
  `num_seguros` varchar(50) NOT NULL,
  `fec_seguros` date NOT NULL,
  `fec_extintor` date NOT NULL,
  `propietario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `placa`, `numero`, `kilometraje`, `tarjeta`, `empresa_id`, `fecha`, `licencia`, `fv_licencia`, `estado`, `chasis`, `motor`, `marca`, `modelo`, `ruta`, `soat`, `fec_soat`, `fec_revision`, `num_seguros`, `fec_seguros`, `fec_extintor`, `propietario`) VALUES
(2, '001', '0001', '100 KM/S', '2018-05-16', 1, '2018-04-27', '7678690', '2018-05-01', 1, '', '', '', '', '', '', '2018-06-07', '2018-06-01', '', '0000-00-00', '2018-05-28', ''),
(3, 'placa 01', '1001011', '100 KM/S', '2018-05-24', 1, '2018-04-10', NULL, NULL, 1, '', '', '', '', '', '', '2018-06-01', '2018-05-16', '', '0000-00-00', '2018-05-29', ''),
(4, 'Ahk2343', '001', '176008', '2018-05-22', 1, '2018-04-13', NULL, NULL, 1, '', '', '', '', '', '', '2018-05-31', '2018-06-01', '', '0000-00-00', '2018-06-02', ''),
(5, 'ah1021', '101020', '400031', '2018-04-14', 1, '2018-04-22', '', '2018-04-26', 0, '', '', '', '', '', '', '2018-05-29', '2018-06-08', '', '0000-00-00', '2018-06-07', ''),
(6, 'kaks11', '1012', '100 KM/S', '2018-06-01', 2, '2018-04-27', '101011p1', '2018-04-30', 0, '', '', '', '', '', '', '2018-05-31', '2018-05-01', '', '0000-00-00', '2018-06-05', ''),
(7, 'ahc01', '34341221', '200 ', '2018-06-06', 2, '2018-04-27', '2311201', '2018-04-30', 1, '', '', '', '', '', '', '2018-06-01', '2018-06-01', '', '0000-00-00', '2018-06-03', ''),
(8, '1100121', '1012', '300', '2018-05-02', 4, '2018-05-03', NULL, NULL, 1, 'chasis 01', 'motor 01', 'marca 01', 'modelo', 'ruta 01', '11212121', '2018-05-02', '2018-06-05', '121212', '2018-05-03', '2018-05-02', ''),
(9, '091212', '1209', '100 KM/S', '2018-06-07', 2, '2018-08-02', NULL, NULL, 1, 'chasis 01', 'motor 01', 'marca 01', 'modelo', 'ruta 01', '09-19911', '2018-06-28', '2018-06-28', '12121', '2018-06-28', '2018-06-28', 'Juan Martinez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alistamientos`
--
ALTER TABLE `alistamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_VEHICULO_ALISTAMIENTO_idx` (`vehiculo_id`),
  ADD KEY `fk_conductor_alistamiento_idx` (`conductor_id`),
  ADD KEY `fk_despachador_idx` (`user_registro`);

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_conductores_idx` (`conductor_id`),
  ADD KEY `fk_vehiculos_idx` (`vehiculo_id`);

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculo_id` (`vehiculo_id`),
  ADD KEY `tipomantenimiento_id` (`tipomantenimiento_id`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_mantenimientos`
--
ALTER TABLE `tipo_mantenimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rol_idx` (`rol`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_empresa_idx` (`empresa_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alistamientos`
--
ALTER TABLE `alistamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_mantenimientos`
--
ALTER TABLE `tipo_mantenimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alistamientos`
--
ALTER TABLE `alistamientos`
  ADD CONSTRAINT `FK_VEHICULO_ALISTAMIENTO` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_conductor_alistamiento` FOREIGN KEY (`conductor_id`) REFERENCES `conductores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_despachador` FOREIGN KEY (`user_registro`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `fk_conductores` FOREIGN KEY (`conductor_id`) REFERENCES `conductores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vehiculos` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `mantenimientos_ibfk_1` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculos` (`id`),
  ADD CONSTRAINT `mantenimientos_ibfk_2` FOREIGN KEY (`tipomantenimiento_id`) REFERENCES `tipo_mantenimientos` (`id`),
  ADD CONSTRAINT `mantenimientos_ibfk_3` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

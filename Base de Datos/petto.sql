-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2017 a las 06:58:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aceptarnot`
--

CREATE TABLE `aceptarnot` (
  `id_aceptanot` bigint(250) NOT NULL,
  `emisor` bigint(250) NOT NULL,
  `receptor` bigint(250) NOT NULL,
  `id_mascota` bigint(250) NOT NULL,
  `mascota` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aceptarnot`
--

INSERT INTO `aceptarnot` (`id_aceptanot`, `emisor`, `receptor`, `id_mascota`, `mascota`, `correo`, `estado`) VALUES
(1, 51, 34, 49, 'Mew', 'lydiaas@gmail.com', 2),
(2, 30, 2, 17, 'Willy', 'elchetumal@gmail.com', 2),
(3, 2, 34, 23, 'Pedropancho', 'shaki@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` bigint(250) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` int(1) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` int(1) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `disp_adop` int(1) NOT NULL DEFAULT '1',
  `disp_rep` int(1) NOT NULL DEFAULT '1',
  `id_ubicacion` bigint(200) NOT NULL,
  `id` bigint(250) NOT NULL,
  `latitud` decimal(20,18) NOT NULL,
  `longitud` decimal(20,18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `nombre`, `tipo`, `raza`, `edad`, `sexo`, `foto`, `disp_adop`, `disp_rep`, `id_ubicacion`, `id`, `latitud`, `longitud`) VALUES
(17, 'Willy', 1, 'Pastor AlemÃ¡n', 5, 1, 'pastor-aleman-pelo-largo.jpg', 1, 1, 63, 30, '19.528044312398773000', '-99.278742890917950000'),
(18, 'Misifus', 2, 'Ninguna(Cruza)', 5, 2, 'isbgh8.jpg', 2, 1, 63, 30, '19.528044312398773000', '-99.278742890917950000'),
(19, 'Sol', 1, 'Golden Retriver', 5, 1, 'Golden_retriever2.jpg', 1, 2, 63, 31, '19.517917902630096000', '-99.232862908164980000'),
(23, 'Pedropancho', 1, 'Ninguna(Cruza)', 3, 1, 'cruzados24yqmvb.jpg', 1, 1, 93, 2, '19.450144788860620000', '-99.140788443847670000'),
(25, 'Bella', 1, 'Dogo Argentino', 3, 2, 'doggo.jpg', 1, 2, 68, 35, '19.502712254526720000', '-99.193671563293440000'),
(26, 'Charlie', 1, 'Dogo Argentino', 5, 1, 'doggo222.jpg', 2, 2, 93, 2, '19.450144788860620000', '-99.140788443847670000'),
(37, 'Lucy', 1, 'Pastor AlemÃ¡n', 4, 2, 'nombres para perros pastor aleman3.jpg', 1, 2, 93, 2, '19.450144788860620000', '-99.140788443847670000'),
(38, 'Mitsuki', 2, 'SiamÃ©', 10, 2, 'gato_siames_tradicional.jpg', 1, 2, 64, 30, '19.528044312398773000', '-99.278742890917950000'),
(39, 'Firulais', 1, 'Beagle', 4, 1, '2015_11_02_photo_00000007__1___8805.jpg', 1, 2, 77, 49, '19.369147617374240000', '-99.258854971191400000'),
(40, 'Stung', 1, 'American Pitbull Terrier', 7, 1, 'American-Pitbull-Terrier-lineas.jpg', 1, 2, 77, 49, '19.369147617374240000', '-99.258854971191400000'),
(41, 'Botita', 1, 'Ninguna(Cruza)', 3, 2, '71.jpg', 2, 1, 77, 49, '19.369147617374240000', '-99.258854971191400000'),
(42, 'Bellota', 2, 'Cartujo', 5, 2, 'carsdtujo1.jpg', 1, 2, 78, 50, '19.507592256635043000', '-99.188993390771490000'),
(43, 'Gris', 2, 'Cartujo', 4, 1, '2CN_900.jpg', 1, 2, 77, 49, '19.369147617374240000', '-99.258854971191400000'),
(44, 'Maine', 1, 'Beagle', 4, 2, 'BeagleBayleePurebredDogs8Months2.jpg', 1, 2, 93, 2, '19.450144788860620000', '-99.140788443847670000'),
(45, 'Smoke', 2, 'Cartujo', 6, 1, 'finogatios.jpg', 2, 2, 93, 2, '19.450144788860620000', '-99.140788443847670000'),
(46, 'Ador', 2, 'Ninguna(Cruza)', 5, 2, 'large_anuncio-gato-perdido-madrid-3e3556f1.jpg', 1, 1, 93, 2, '19.450144788860620000', '-99.140788443847670000'),
(47, 'Snowite', 2, 'Snowshoe', 5, 1, 'raza-gato-snowshoe.jpg', 1, 2, 78, 51, '19.417770574877995000', '-99.135956425292990000'),
(48, 'Benga', 2, 'BengalÃ­', 2, 2, 'Bengali_4736.jpg', 1, 2, 78, 51, '19.417770574877995000', '-99.135956425292990000'),
(49, 'Mew', 2, 'Ninguna(Cruza)', 3, 1, 'gato_feral-830x553.jpg', 2, 1, 78, 51, '19.417770574877995000', '-99.135956425292990000'),
(50, 'Mixin', 2, 'Ninguna(Cruza)', 6, 2, 'IMG-20131014-WA0002-620x411.jpg', 2, 2, 78, 51, '19.417770574877995000', '-99.135956425292990000'),
(51, 'Pelusa', 2, 'Ninguna(Cruza)', 3, 1, 'dsgdgfdg56.jpg', 2, 1, 78, 51, '19.417770574877995000', '-99.135956425292990000'),
(52, 'Marcus', 2, 'Ninguna(Cruza)', 5, 1, 'cat-1688109_1280.jpg', 1, 1, 78, 51, '19.417770574877995000', '-99.135956425292990000'),
(53, 'Rayas', 2, 'Ninguna(Cruza)', 6, 1, '1vY_900.jpg', 2, 1, 64, 30, '19.528044312398773000', '-99.278742890917950000'),
(54, 'Sian', 2, 'SiamÃ©', 7, 1, 'gato-siamdes.jpg', 1, 2, 78, 51, '19.417770574877995000', '-99.135956425292990000'),
(55, 'PatrickJr', 1, 'Ninguna(Cruza)', 2, 1, 'perro-sifn-raza.jpg', 2, 1, 93, 34, '19.645534794389345000', '-99.110544441503920000'),
(56, 'Max', 1, 'Ninguna(Cruza)', 5, 1, 'img_cuanto_vive_un_perro_sin_raza_22538_paso_2_600.jpg', 2, 1, 93, 34, '19.645534794389345000', '-99.110544441503920000'),
(57, 'Eyes', 1, 'Ninguna(Cruza)', 2, 2, 'Dia-del-Perro-sinsda-Raza.jpg', 2, 1, 93, 34, '19.645534794389345000', '-99.110544441503920000'),
(58, 'Toms', 2, 'Ninguna(Cruza)', 6, 1, 'tomsd.jpg', 2, 1, 93, 34, '19.645534794389345000', '-99.110544441503920000'),
(59, 'Max', 1, 'Dogo Argentino', 4, 1, 'dogo_argenmaxtino.jpg', 1, 1, 64, 30, '19.528044312398773000', '-99.278742890917950000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id_notificacion` bigint(250) NOT NULL,
  `emisor` bigint(250) NOT NULL,
  `mascotaemisor` bigint(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apepat` varchar(100) NOT NULL,
  `apemat` varchar(100) NOT NULL,
  `receptor` bigint(250) NOT NULL,
  `tipo` int(1) NOT NULL,
  `mascota` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_notificacion`, `emisor`, `mascotaemisor`, `nombre`, `apepat`, `apemat`, `receptor`, `tipo`, `mascota`) VALUES
(5, 34, 57, 'Patricio', 'Hernandez', 'Medina', 2, 2, 23),
(6, 2, 0, 'Shakira Gonzalez', '', '', 49, 1, 41),
(7, 30, 0, 'Ricardo Axel', 'GarcÃ­a', 'DÃ­az', 2, 1, 26),
(8, 2, 0, 'Shakira Gonzalez', '', '', 30, 1, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` int(1) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `contacto` varchar(200) NOT NULL,
  `latitud` decimal(20,18) NOT NULL,
  `longitud` decimal(20,18) NOT NULL,
  `promcal` float(4,2) NOT NULL DEFAULT '2.50'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `nombre`, `descripcion`, `tipo`, `foto`, `contacto`, `latitud`, `longitud`, `promcal`) VALUES
(13, 'Onvinilo', 'ClÃ­nica', 1, 'onvinilo_clinica veterinaria arnedo-v1-med-01.jpg', '55 46 78 34 / 56 45 34 23', '19.492059892307957000', '-99.091388952490200000', 4.00),
(15, 'Parque Atlacomulco', 'Pasea a tus perros', 2, 'campos-eliseos-de-lerida.jpg', '556675859', '19.497185645479610000', '-99.133362859155280000', 2.00),
(16, 'Petco Lindavista', 'Comida, Accesorios, etc.', 3, 'petco.jpg', 'contacto@petco.com / 55 54 83 34 02', '19.497997533325677000', '-99.111957617724610000', 5.00),
(17, 'EstÃ©tica Canina \"Silvana\"', 'Lo mejor para tu mascota', 4, 'estetica5.jpg', 'esteticasilvana@gmail.com', '19.486316576606190000', '-99.080388324365230000', 4.00),
(18, 'Encantador de perros', 'El mejor entrenador', 5, 'Cesar_Millan-Encantador_de_perros-autoridades_MILIMA20141213_0233_11.jpg', 'encantadordp@gmail.com ', '19.503136398560923000', '-99.159855841894510000', 2.67),
(19, 'Harry Paseador', 'Harry, el  mejor mago y paseador.', 6, 'Radcliffe-3_reference.jpg', '55 54 86 56 32', '19.487091414963057000', '-99.154843861962890000', 2.50),
(21, 'Lindsey Dogstyle', 'EstÃ©tica Canina', 4, 'estisd2s.jpg', '56 84 23 79 /lindsey@hotmail.com', '19.469071877481998000', '-99.112296755273400000', 2.50),
(22, 'Parque Naucalli', 'Juegos, Bicis, Andador y mÃ¡s', 2, 'parque-naucalli.jpg', 'parquenaucalli@gmail.com', '19.492572308878117000', '-99.240723380578630000', 3.00),
(23, 'Rod', 'Paseador joven', 6, 'que-es-un-paseador-de-perros_opt-compressor-1-1-1.jpg', '55 87 34 87 59', '19.428382916374380000', '-99.120319322460890000', 2.00),
(24, 'Federico', 'Gran enrtrenador,diferentes horarios', 5, 'ronaldjdsadkas.jpg', '53 49 26 54 71', '19.386560206974840000', '-99.195476570507710000', 4.00),
(25, 'Maskota SatÃ©lite', 'ArtÃ­culos, comida y venta de mascotas', 3, 'masdcsat.jpg', 'maskotasatelite@contacto-mascota.com', '19.510745772806803000', '-99.234248663598630000', 2.50),
(26, 'Veterinaria Alberti', 'Primeros Auxilios, operaciones, etc.', 1, 'frente-safsdflocal.jpg', 'vetalberti@gmail.com / 56 78 93 24', '19.461253462705802000', '-99.256959396044920000', 3.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` bigint(200) NOT NULL,
  `latitud` decimal(20,18) NOT NULL,
  `longitud` decimal(20,18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `latitud`, `longitud`) VALUES
(1, '0.000000000000000000', '0.000000000000000000'),
(2, '24.234435000000000000', '15.234657000000000000'),
(3, '19.522246848606677000', '-99.220176088360570000'),
(4, '19.522005883296774000', '-99.219923567459090000'),
(5, '19.520529590179084000', '-99.216707445477310000'),
(6, '19.525268412621170000', '-99.212970252856450000'),
(7, '19.525499797484784000', '-99.194848577587890000'),
(8, '19.525499797484784000', '-99.194848577587890000'),
(9, '19.521296964301577000', '-99.214806212658690000'),
(10, '19.525171618026400000', '-99.214419574560570000'),
(11, '19.516762921939833000', '-99.212359538037100000'),
(12, '19.524864737475003000', '-99.211662092529310000'),
(13, '19.525691686268196000', '-99.200674364404280000'),
(14, '19.523748801513474000', '-99.195539123095730000'),
(15, '19.520665236165080000', '-99.204118791943360000'),
(16, '19.523880593224153000', '-99.208742049121100000'),
(17, '19.475022759733697000', '-99.180067199169910000'),
(18, '19.491034835567987000', '-99.235868046679680000'),
(19, '19.490249117585478000', '-99.173387105468750000'),
(20, '19.483422022563012000', '-99.145915885156230000'),
(21, '19.500748090898690000', '-99.194332293457020000'),
(22, '19.485853780958940000', '-99.178529846777340000'),
(23, '19.522120403920844000', '-99.220142701852410000'),
(24, '19.518507693488086000', '-99.178333385400380000'),
(25, '19.510305058798018000', '-99.234059202221660000'),
(26, '19.522405165607143000', '-99.197409698242150000'),
(27, '19.496370042027777000', '-99.171323068945300000'),
(28, '19.508202982475236000', '-99.189853397656240000'),
(29, '19.508202982475236000', '-99.189853397656240000'),
(30, '19.505788261516958000', '-99.186607431494170000'),
(31, '19.515007831143766000', '-99.190473012475600000'),
(32, '19.512095702743820000', '-99.208055403613290000'),
(33, '19.499144740984110000', '-99.236735453564450000'),
(34, '19.497995422652583000', '-99.174415273730460000'),
(35, '19.503983846238230000', '-99.191755272802710000'),
(36, '19.500748790989080000', '-99.220250061376930000'),
(37, '19.513884426768694000', '-99.213049083544890000'),
(38, '19.535222881551967000', '-99.193136363818330000'),
(39, '19.497683889838903000', '-99.174235312353520000'),
(40, '19.534241300210784000', '-99.196740252734340000'),
(41, '19.516305627045135000', '-99.212707760790980000'),
(42, '19.516305627045135000', '-99.212707760790980000'),
(43, '19.516305627045135000', '-99.212707760790980000'),
(44, '19.519356875118355000', '-99.220080500000000000'),
(45, '19.517503710032310000', '-99.286468652880840000'),
(46, '0.000000000000000000', '0.000000000000000000'),
(47, '0.000000000000000000', '0.000000000000000000'),
(48, '0.000000000000000000', '0.000000000000000000'),
(49, '0.000000000000000000', '0.000000000000000000'),
(50, '19.507876268026060000', '-99.227969623339850000'),
(51, '0.000000000000000000', '0.000000000000000000'),
(52, '19.510987579145110000', '-99.229343614355460000'),
(53, '19.511745794742627000', '-99.203774369189430000'),
(54, '19.522131811561717000', '-99.220145686508200000'),
(55, '19.522153995564754000', '-99.220069349073810000'),
(56, '19.521463706421947000', '-99.215100520068350000'),
(57, '19.519870062000273000', '-99.214776497314460000'),
(58, '19.514243830584710000', '-99.210001178759740000'),
(59, '19.425803927703928000', '-99.103265347082530000'),
(60, '19.502273322111760000', '-99.176658571630870000'),
(61, '19.336249553273905000', '-99.197246619336000000'),
(62, '19.387178294218916000', '-99.126198574218730000'),
(63, '19.517934087074103000', '-99.232871668283850000'),
(64, '19.522136031323814000', '-99.220128657672150000'),
(65, '19.546508516464755000', '-99.039185716650370000'),
(66, '19.531785074155895000', '-99.221058552917500000'),
(67, '19.504736484650960000', '-99.145482808984350000'),
(68, '19.504700478924430000', '-99.147228388360590000'),
(69, '19.498564919121060000', '-99.135354287744120000'),
(70, '19.514033927354763000', '-99.398095347900380000'),
(71, '19.424608226567923000', '-99.103231131738310000'),
(72, '19.425837905722627000', '-99.104209524536880000'),
(73, '0.000000000000000000', '0.000000000000000000'),
(74, '0.000000000000000000', '0.000000000000000000'),
(75, '0.000000000000000000', '0.000000000000000000'),
(76, '4.000000000000000000', '5.000000000000000000'),
(77, '19.405525008269850000', '-99.334050892968660000'),
(78, '19.324254313213707000', '-99.204772119921930000'),
(79, '0.000000000000000000', '0.000000000000000000'),
(80, '19.503216828329744000', '-99.147620479901100000'),
(81, '19.539027688365326000', '-99.049937683398410000'),
(82, '0.000000000000000000', '0.000000000000000000'),
(83, '19.504865231538435000', '-99.141759220068370000'),
(84, '19.504036178125070000', '-99.136616978759780000'),
(85, '19.508403218850372000', '-99.140249767675750000'),
(86, '0.000000000000000000', '0.000000000000000000'),
(87, '19.508547925944708000', '-99.143860156591810000'),
(88, '19.504652800000002000', '-99.144788540722630000'),
(89, '19.497491080256612000', '-99.174653320312470000'),
(90, '19.462036864448270000', '-99.051791142089770000'),
(91, '19.506689340569476000', '-99.146281955680820000'),
(92, '19.504129367710032000', '-99.145812908984340000'),
(93, '19.505338019411250000', '-99.146213375918590000'),
(94, '19.505123130764480000', '-99.146510154492150000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apepat` varchar(100) NOT NULL,
  `apemat` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `avatar` varchar(300) NOT NULL DEFAULT '93.png',
  `id_ubicacion` bigint(200) DEFAULT NULL,
  `latitud` decimal(20,18) NOT NULL,
  `longitud` decimal(20,18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apepat`, `apemat`, `correo`, `usuario`, `contrasenia`, `avatar`, `id_ubicacion`, `latitud`, `longitud`) VALUES
(2, 'Shakira Gonzalez', '', '', 'shaki@gmail.com', 'Shaki', 'rabiosa', 'Dia-del-Perro-sinsda-Raza.jpg', 93, '19.450144788860620000', '-99.140788443847670000'),
(30, 'Ricardo Axel', 'GarcÃ­a', 'DÃ­az', 'elchetumal@gmail.com', 'Ashel', '120597', '76479dd91dc55c2768ddccfc30a4fbf5.jpg', 64, '19.528044312398773000', '-99.278742890917950000'),
(31, 'Valeria Patricia', 'PÃ¡ez', 'Reyes', 'valepp@gmail.com', 'Copo', 'copito', 'val.jpg', 63, '19.517917902630096000', '-99.232862908164980000'),
(32, 'Ruben', 'Villalobos', 'AlcalÃ¡', 'rubencio97@hotmail.com', 'Rubenciow', 'rrubencio', 'imaasdsadadasges.jpg', 66, '19.532456016655342000', '-99.221524692868060000'),
(34, 'Patricio', 'Hernandez', 'Medina', 'patrick@gmail.com', 'Patrick', 'patrick', '93.png', 1, '19.645534794389345000', '-99.110544441503920000'),
(35, 'Martha', 'Cordero', 'Lopez', 'mcorderol@ipn.mx', 'rosa01', '1234', '93.png', 68, '19.502712254526720000', '-99.193671563293440000'),
(49, 'Alfredo', 'Del Mazo', 'Maza', 'delmazo@gmail.com', 'Del Mazo', 'maza', 'alfredo-del-mazo-maza-pri-edomex.jpg', 77, '19.369147617374240000', '-99.258854971191400000'),
(50, 'Eduardo Rafael', 'GarcÃ­a', 'Valencia', 'eduval@yahoo.com', 'Lalo', 'eduval', '93.png', 1, '19.507592256635043000', '-99.188993390771490000'),
(51, 'Lydia', 'Fernin', 'Lethur', 'lydiaas@gmail.com', 'Lydia', 'lydia', 'lydiadedsfetz.jpg', 78, '19.417770574877995000', '-99.135956425292990000'),
(54, 'dfsdfsd', 'sfdfsdfsd', 'sdfsdf', 'pedro2@gmail.com', 'sdfdsfsd', 'pedro', '93.png', 1, '19.498059231973570000', '-99.238618728710950000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_califica_servicio`
--

CREATE TABLE `usuario_califica_servicio` (
  `Id_cal` bigint(200) NOT NULL,
  `id_usuario` bigint(250) NOT NULL,
  `id_servicio` int(150) NOT NULL,
  `cal` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_califica_servicio`
--

INSERT INTO `usuario_califica_servicio` (`Id_cal`, `id_usuario`, `id_servicio`, `cal`) VALUES
(10, 30, 18, 3),
(11, 30, 15, 3),
(12, 2, 18, 1),
(13, 2, 16, 5),
(14, 2, 15, 1),
(15, 2, 13, 4),
(16, 2, 20, 1),
(17, 32, 24, 4),
(18, 32, 23, 4),
(19, 32, 18, 4),
(20, 32, 17, 4),
(21, 30, 22, 3),
(22, 2, 23, 0),
(23, 30, 26, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aceptarnot`
--
ALTER TABLE `aceptarnot`
  ADD PRIMARY KEY (`id_aceptanot`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `id` (`id`),
  ADD KEY `id_ubicacion` (`id_ubicacion`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id_notificacion`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ubicacion` (`id_ubicacion`);

--
-- Indices de la tabla `usuario_califica_servicio`
--
ALTER TABLE `usuario_califica_servicio`
  ADD PRIMARY KEY (`Id_cal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aceptarnot`
--
ALTER TABLE `aceptarnot`
  MODIFY `id_aceptanot` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_notificacion` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id_ubicacion` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `usuario_califica_servicio`
--
ALTER TABLE `usuario_califica_servicio`
  MODIFY `Id_cal` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`id_ubicacion`) REFERENCES `usuarios` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

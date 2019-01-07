-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 17:37:48
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sireani`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `id_acceso` int(11) NOT NULL,
  `acceso` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id_acceso`, `acceso`) VALUES
(1, 'Casa'),
(2, 'Escuela'),
(3, 'Trabajo'),
(4, 'Café Internet'),
(5, 'Casa de algún amigo o familiar'),
(6, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `id_accion` int(11) NOT NULL,
  `accion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error leyendo datos de la tabla sireani.acciones: #1064 - Algo está equivocado en su sintax cerca 'FROM `sireani`.`acciones`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_hogar`
--

CREATE TABLE `actividades_hogar` (
  `id_actividad` int(11) NOT NULL,
  `actividad` int(11) DEFAULT NULL,
  `familiar` int(11) DEFAULT NULL,
  `relacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividades_hogar`
--

INSERT INTO `actividades_hogar` (`id_actividad`, `actividad`, `familiar`, `relacion`) VALUES
(5, 14, 2, 2),
(6, 15, 2, 2),
(7, 16, 2, 2),
(8, 14, 2, 2),
(9, 15, 2, 2),
(10, 16, 2, 2),
(11, 17, 2, 2),
(24, 14, 1, 8),
(25, 15, 1, 8),
(26, 16, 1, 8),
(27, 17, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `paterno_al` varchar(15) DEFAULT NULL,
  `materno_al` varchar(15) DEFAULT NULL,
  `nombre_al` varchar(25) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `fecha_nacimiento_al` date DEFAULT NULL,
  `pais_nac` text,
  `nacionalidad` text,
  `lugar_nacimiento` text,
  `delegacion_nac` text,
  `municipio_nac` text,
  `entidad` int(11) DEFAULT NULL,
  `secundaria_al` int(11) DEFAULT NULL,
  `promedio` double DEFAULT NULL,
  `turno` int(11) DEFAULT NULL,
  `tel_emergencia` varchar(10) DEFAULT NULL,
  `email` text,
  `alergia` text,
  `edad` int(11) DEFAULT NULL,
  `civil` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `curp`, `paterno_al`, `materno_al`, `nombre_al`, `sexo`, `fecha_nacimiento_al`, `pais_nac`, `nacionalidad`, `lugar_nacimiento`, `delegacion_nac`, `municipio_nac`, `entidad`, `secundaria_al`, `promedio`, `turno`, `tel_emergencia`, `email`, `alergia`, `edad`, `civil`) VALUES
(25, 'SAVR950701HMCNLB05', 'sandoval', 'valencia', 'Rubencio', 'F', '1995-07-02', 'México', 'Mexicano', 'Amecamenca', 'Amecameca', 'Amecameca', 15, 24, 9.6, 1, NULL, NULL, NULL, 17, 'Soltero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_beca`
--

CREATE TABLE `alumno_beca` (
  `id_alumno_beca` int(11) NOT NULL,
  `id_alumno_ab` int(11) DEFAULT NULL,
  `beca` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_beca`
--

INSERT INTO `alumno_beca` (`id_alumno_beca`, `id_alumno_ab`, `beca`) VALUES
(8, NULL, 'Apadrina un niño'),
(9, NULL, 'Apadrina un niño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_trabajo`
--

CREATE TABLE `alumno_trabajo` (
  `id_al_trabajo` int(11) NOT NULL,
  `alumno_at` int(11) DEFAULT NULL,
  `trabajo` text,
  `empresa` text,
  `puesto` text,
  `horario` text,
  `horas_semana` int(11) DEFAULT NULL,
  `inicio` text,
  `hfinal` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_trabajo`
--

INSERT INTO `alumno_trabajo` (`id_al_trabajo`, `alumno_at`, `trabajo`, `empresa`, `puesto`, `horario`, `horas_semana`, `inicio`, `hfinal`) VALUES
(8, 25, 'panaderito', 'panderia', 've', '23-12', 7, '23', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente_socioeconomico`
--

CREATE TABLE `ambiente_socioeconomico` (
  `id_ambiente` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `num_focos` int(11) DEFAULT NULL,
  `num_tvs` int(11) DEFAULT NULL,
  `agua_potable` tinyint(1) DEFAULT NULL,
  `drenaje` tinyint(1) DEFAULT NULL,
  `electricidad` tinyint(1) DEFAULT NULL,
  `lavadora` tinyint(1) DEFAULT NULL,
  `estufa` tinyint(1) DEFAULT NULL,
  `horno` tinyint(1) DEFAULT NULL,
  `refrigerador` tinyint(1) DEFAULT NULL,
  `linea_telefonica` tinyint(1) DEFAULT NULL,
  `computadora` tinyint(1) DEFAULT NULL,
  `laptop` tinyint(1) DEFAULT NULL,
  `tableta` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `tv_paga` tinyint(1) DEFAULT NULL,
  `vhs` tinyint(1) DEFAULT NULL,
  `dvd` tinyint(1) DEFAULT NULL,
  `blue_ray` tinyint(1) DEFAULT NULL,
  `reproductor_personal` tinyint(1) DEFAULT NULL,
  `tableta_personal` tinyint(1) DEFAULT NULL,
  `laptop_personal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ambiente_socioeconomico`
--

INSERT INTO `ambiente_socioeconomico` (`id_ambiente`, `alumno`, `num_focos`, `num_tvs`, `agua_potable`, `drenaje`, `electricidad`, `lavadora`, `estufa`, `horno`, `refrigerador`, `linea_telefonica`, `computadora`, `laptop`, `tableta`, `internet`, `tv_paga`, `vhs`, `dvd`, `blue_ray`, `reproductor_personal`, `tableta_personal`, `laptop_personal`) VALUES
(5, 25, 6, 1, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidades_sust`
--

CREATE TABLE `cantidades_sust` (
  `id_cantidad` int(11) NOT NULL,
  `cantidad` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cantidades_sust`
--

INSERT INTO `cantidades_sust` (`id_cantidad`, `cantidad`) VALUES
(1, 'Una'),
(2, '2 o 3'),
(3, '4 o más'),
(4, '1 a 5'),
(5, '6 a 10'),
(6, '10 o más'),
(7, 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumo_familiar`
--

CREATE TABLE `consumo_familiar` (
  `id_consumo` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `sustancia` int(11) DEFAULT NULL,
  `familiar` int(11) DEFAULT NULL,
  `frecuencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consumo_familiar`
--

INSERT INTO `consumo_familiar` (`id_consumo`, `alumno`, `sustancia`, `familiar`, `frecuencia`) VALUES
(3, 25, 2, 3, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `id_deporte` int(11) NOT NULL,
  `deporte` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error leyendo datos de la tabla sireani.deportes: #1064 - Algo está equivocado en su sintax cerca 'FROM `sireani`.`deportes`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes_practica`
--

CREATE TABLE `deportes_practica` (
  `id_dep_pract` int(11) NOT NULL,
  `id_ejer_dep` int(11) DEFAULT NULL,
  `id_deporte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deportes_practica`
--

INSERT INTO `deportes_practica` (`id_dep_pract`, `id_ejer_dep`, `id_deporte`) VALUES
(1, 3, 1),
(2, 3, 1),
(23, 14, 1),
(24, 14, 2),
(25, 14, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `didscapacidades_fisicas`
--

CREATE TABLE `didscapacidades_fisicas` (
  `id_discapacidad` int(11) NOT NULL,
  `salud` int(11) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `didscapacidades_fisicas`
--

INSERT INTO `didscapacidades_fisicas` (`id_discapacidad`, `salud`, `descripcion`) VALUES
(12, 5, 'visual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id_domicilio` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `calle` text,
  `exterior` int(11) DEFAULT NULL,
  `interior` int(11) DEFAULT NULL,
  `colonia` text,
  `estado` int(11) DEFAULT NULL,
  `municipio` text,
  `delegacion` text,
  `codigoPostal` int(5) DEFAULT NULL,
  `tel_casa` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `tel_emergencia` varchar(10) DEFAULT NULL,
  `entreCalle1` text,
  `entreCalle2` text,
  `referencia` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`id_domicilio`, `alumno`, `calle`, `exterior`, `interior`, `colonia`, `estado`, `municipio`, `delegacion`, `codigoPostal`, `tel_casa`, `celular`, `tel_emergencia`, `entreCalle1`, `entreCalle2`, `referencia`) VALUES
(23, 25, 'chalco', 8, 0, 'Barrio del agua escondida', 15, 'Ozumba', 'Ozumba', 56800, '5979763841', '5541946361', '5534857438', 'Limones', 'Galeana', 'Frente veterinaria ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_tutor`
--

CREATE TABLE `domicilio_tutor` (
  `id_domicilio_tutor` int(11) NOT NULL,
  `calle` text,
  `externo` int(11) DEFAULT NULL,
  `interno` int(11) DEFAULT NULL,
  `colonia` text,
  `entre1` text,
  `entre2` text,
  `referencia` text,
  `alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_deportes`
--

CREATE TABLE `ejercicio_deportes` (
  `id_ejer_dep` int(11) NOT NULL,
  `frecuencia` int(11) DEFAULT NULL,
  `practica_deporte` tinyint(1) DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejercicio_deportes`
--

INSERT INTO `ejercicio_deportes` (`id_ejer_dep`, `frecuencia`, `practica_deporte`, `alumno`) VALUES
(3, NULL, 0, NULL),
(4, NULL, 0, NULL),
(14, 1, 1, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Coahuila de Zaragoza'),
(6, 'Colima'),
(7, 'Chiapas'),
(8, 'Chihuahua'),
(9, 'Ciudad de México'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Hidalgo'),
(14, 'Jalisco'),
(15, 'México'),
(16, 'Michoacán'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo León'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz'),
(31, 'Yucatán'),
(32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `id_familiar` int(11) NOT NULL,
  `paterno` varchar(15) DEFAULT NULL,
  `materno` varchar(15) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `ocupacion` text,
  `parentezco` int(11) DEFAULT NULL,
  `grado_estudio` int(11) DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`id_familiar`, `paterno`, `materno`, `nombre`, `sexo`, `edad`, `ocupacion`, `parentezco`, `grado_estudio`, `alumno`) VALUES
(9, 'paterno', 'materno', 'nombre', 'M', 23, 'estudiante', 7, 7, NULL),
(22, 'Sandoval', 'Valencia', 'Pablo', 'M', 28, 'Estudiante', 3, 8, 25),
(23, 'Bautista', 'Sánchez', 'Tania', 'F', 33, 'Ama de casa', 8, 8, 25),
(26, 'Valencia', 'Martinez', 'Graciela', 'F', 46, 'nada', 4, 1, NULL),
(28, 'Sandoval', 'Bautista', 'Ritzia', 'F', 7, 'estudiante', 7, 2, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencias`
--

CREATE TABLE `frecuencias` (
  `id_frecuencia` int(11) NOT NULL,
  `frecuencia` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frecuencias`
--

INSERT INTO `frecuencias` (`id_frecuencia`, `frecuencia`) VALUES
(1, 'De 1 a 2 veces'),
(2, 'De 3 a 4 veces'),
(3, 'De 5 a 7 veces'),
(4, 'Nunca'),
(5, 'Cada semana'),
(6, 'Cada mes'),
(7, 'Cada seis meses'),
(8, 'Cada año'),
(9, 'Cuando me enfermo'),
(10, 'No los necesito'),
(11, 'Solo para leer'),
(12, 'Si los uso'),
(13, 'Si los necesito pero no los uso'),
(14, 'No lo se'),
(15, 'Diario'),
(16, '1 vez s la semana'),
(17, '3 veces por semana'),
(18, '1 vez al mes'),
(19, 'Ocasionalmente'),
(20, 'Casi nunca'),
(21, 'Nunca'),
(22, '1 a 5'),
(23, '6 a 10'),
(24, '10 o más');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados_estudio`
--

CREATE TABLE `grados_estudio` (
  `id_grado` int(11) NOT NULL,
  `grado_estudio` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grados_estudio`
--

INSERT INTO `grados_estudio` (`id_grado`, `grado_estudio`) VALUES
(1, 'Sin estudios'),
(2, 'Primaria incompleta'),
(3, 'Primaria concluída'),
(4, 'Secundaria incompleta'),
(5, 'Secundaria concluída'),
(6, 'Carrera técnica'),
(7, 'Bachillerato incompleto'),
(8, 'Bachillerato concluído'),
(9, 'Tec. Sup. Universitario'),
(10, 'Licenciatura incompleta'),
(11, 'Licenciatura concluía'),
(12, 'Especialidad'),
(13, 'Maestría'),
(14, 'Doctorado'),
(15, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gustos_intereses`
--

CREATE TABLE `gustos_intereses` (
  `id_gusto_int` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `tiempo_libre` text,
  `ultima_vez_libro` text,
  `gusta_hacer` text,
  `disgusta_hacer` text,
  `num_amigos` int(11) DEFAULT NULL,
  `libro1` text,
  `libro2` text,
  `libro3` text,
  `libro4` text,
  `pelicula1` text,
  `pelicula2` text,
  `pelicula3` text,
  `lugar1` text,
  `lugar2` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gustos_intereses`
--

INSERT INTO `gustos_intereses` (`id_gusto_int`, `alumno`, `tiempo_libre`, `ultima_vez_libro`, `gusta_hacer`, `disgusta_hacer`, `num_amigos`, `libro1`, `libro2`, `libro3`, `libro4`, `pelicula1`, `pelicula2`, `pelicula3`, `lugar1`, `lugar2`) VALUES
(10, 25, 'Salir con mis amigos', 'el año pasado', 'Salir a caminar', 'Tarea', 4, 'Harr Potter', 'Los juegos del hambre', 'Divergente', 'El caballero del armadura oxidada', 'Ratatouille', 'la liga de la justicia', 'aquaman', 'cine', 'parque');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitos_consumos`
--

CREATE TABLE `habitos_consumos` (
  `id_habito` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `fuma` tinyint(1) DEFAULT NULL,
  `cant_cigarros` int(11) DEFAULT NULL,
  `amigo_adiccion` tinyint(1) DEFAULT NULL,
  `adiccion` text,
  `consumen_droga` tinyint(1) DEFAULT NULL,
  `droga` text,
  `consume_cerveza` tinyint(1) DEFAULT NULL,
  `cerveza` int(11) DEFAULT NULL,
  `consume_vino` tinyint(1) DEFAULT NULL,
  `vinos` int(11) DEFAULT NULL,
  `consume_coctel` tinyint(1) DEFAULT NULL,
  `cocteles` int(11) DEFAULT NULL,
  `consume_licor` tinyint(1) DEFAULT NULL,
  `licores` int(11) DEFAULT NULL,
  `consume_otro` tinyint(1) DEFAULT NULL,
  `otros` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitos_consumos`
--

INSERT INTO `habitos_consumos` (`id_habito`, `alumno`, `fuma`, `cant_cigarros`, `amigo_adiccion`, `adiccion`, `consumen_droga`, `droga`, `consume_cerveza`, `cerveza`, `consume_vino`, `vinos`, `consume_coctel`, `cocteles`, `consume_licor`, `licores`, `consume_otro`, `otros`) VALUES
(3, NULL, 0, 7, 1, 'fumar', 1, '', 0, 7, 0, 7, 0, 7, 0, 7, 0, 7),
(4, NULL, 0, 7, 1, 'fumar', 1, '', 0, 7, 0, 7, 0, 7, 0, 7, 0, 7),
(12, 25, 1, 4, 1, 'alguna', 1, 'algunados', 1, 1, 1, 1, 1, 1, 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id_ingreso` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `cantidad_personas` int(11) DEFAULT NULL,
  `dependencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id_ingreso`, `alumno`, `cantidad_personas`, `dependencia`) VALUES
(6, 25, 1, 2),
(8, 25, 1, 2),
(9, 25, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos_familiares`
--

CREATE TABLE `ingresos_familiares` (
  `id_ingreso_familiar` int(11) NOT NULL,
  `personas_ingreso` text,
  `ingreso` int(11) DEFAULT NULL,
  `porcentaje_destinado` int(3) DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingresos_familiares`
--

INSERT INTO `ingresos_familiares` (`id_ingreso_familiar`, `personas_ingreso`, `ingreso`, `porcentaje_destinado`, `alumno`) VALUES
(8, 'Padre', 2, 50, 25),
(9, 'Madre', 2, 50, 25),
(11, 'Hermano', 2, 40, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internet`
--

CREATE TABLE `internet` (
  `id_internet` int(11) NOT NULL,
  `sabe_usar` tinyint(1) DEFAULT NULL,
  `tiene_acceso` tinyint(1) DEFAULT NULL,
  `acceso` int(11) DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL,
  `correo_electronico` tinyint(1) DEFAULT NULL,
  `pag_web_personal` tinyint(1) DEFAULT NULL,
  `red_social` tinyint(1) DEFAULT NULL,
  `webblog` tinyint(1) DEFAULT NULL,
  `intercambiar` tinyint(1) DEFAULT NULL,
  `amistad` tinyint(1) DEFAULT NULL,
  `profesionales` tinyint(1) DEFAULT NULL,
  `pareja` tinyint(1) DEFAULT NULL,
  `entrenimiento` tinyint(1) DEFAULT NULL,
  `amigos` tinyint(1) DEFAULT NULL,
  `comuinicarse` tinyint(1) DEFAULT NULL,
  `otro` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `internet`
--

INSERT INTO `internet` (`id_internet`, `sabe_usar`, `tiene_acceso`, `acceso`, `alumno`, `correo_electronico`, `pag_web_personal`, `red_social`, `webblog`, `intercambiar`, `amistad`, `profesionales`, `pareja`, `entrenimiento`, `amigos`, `comuinicarse`, `otro`) VALUES
(9, 0, 0, 1, 25, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadas`
--

CREATE TABLE `jugadas` (
  `id_jugada` int(11) NOT NULL,
  `pregunta` text,
  `jugador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `usuario` text,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idLogin`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'hop8xJ0kEee6k'),
(2, 'admin', 'hoXSLooj4mvNo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios_familiares`
--

CREATE TABLE `negocios_familiares` (
  `id_negocio` int(11) NOT NULL,
  `relacion` int(11) DEFAULT NULL,
  `actividades_apoyo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `negocios_familiares`
--

INSERT INTO `negocios_familiares` (`id_negocio`, `relacion`, `actividades_apoyo`) VALUES
(1, 2, 'venta de pan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_ingresos`
--

CREATE TABLE `opciones_ingresos` (
  `id_opcion` int(11) NOT NULL,
  `opcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opciones_ingresos`
--

INSERT INTO `opciones_ingresos` (`id_opcion`, `opcion`) VALUES
(1, 'Hasta $2,000'),
(2, '$2,001 a $6,000'),
(3, '$6,001 a $10,000'),
(4, '$10,001 a $20,000'),
(5, '$20,001 a $30,000'),
(6, 'Más de $30,000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_proyectovida`
--

CREATE TABLE `opciones_proyectovida` (
  `id_opcion` int(11) NOT NULL,
  `opcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `opciones_proyectovida`
--

INSERT INTO `opciones_proyectovida` (`id_opcion`, `opcion`) VALUES
(1, 'Porque le gustan las instalaciones'),
(2, 'Porque le gusta el modelo de enseñanza'),
(3, 'La documentación que se obtiene al egresar'),
(4, 'Por mi situación económica'),
(5, 'La carrera de técnico en programación'),
(6, 'Por recomendaciónde familiares o amigos'),
(7, 'Le obligaron sus padres'),
(8, 'Fue otra de sus opciones'),
(9, 'porque quise'),
(10, 'lkj'),
(11, 'lkj'),
(12, 'lkj'),
(13, 'lkj'),
(14, 'me gustó'),
(15, 'otra'),
(16, 'otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizaciones`
--

CREATE TABLE `organizaciones` (
  `id_organizacion` int(11) NOT NULL,
  `organizacion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `organizaciones`
--

INSERT INTO `organizaciones` (`id_organizacion`, `organizacion`) VALUES
(1, 'Estudiantil'),
(2, 'Deportivo'),
(3, 'Beneficiencia'),
(4, 'Religioso'),
(5, 'Político'),
(6, 'Académico'),
(7, 'Otro'),
(8, 'osome'),
(9, 'osome'),
(10, 'Danza'),
(11, 'ballet danza'),
(12, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `org_participacion`
--

CREATE TABLE `org_participacion` (
  `organizacion` int(11) NOT NULL,
  `id_participacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `org_participacion`
--

INSERT INTO `org_participacion` (`organizacion`, `id_participacion`) VALUES
(1, 5),
(3, 5),
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_padre` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `parentezco` int(11) DEFAULT NULL,
  `paterno_padre` text,
  `materno_padre` text,
  `nombre_padre` text,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` text,
  `municipio` text,
  `delegacion` text,
  `entidad` int(11) DEFAULT NULL,
  `pais` text,
  `curp` varchar(18) DEFAULT NULL,
  `trabaja` tinyint(1) DEFAULT NULL,
  `tel_casa` varchar(10) DEFAULT NULL,
  `horas_trabajo` int(11) DEFAULT NULL,
  `tel_trabajo` varchar(10) DEFAULT NULL,
  `cel` varchar(10) DEFAULT NULL,
  `grado_estudio` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `civil` text,
  `correo` text,
  `facebook` text,
  `twitter` text,
  `elector` text,
  `ocupacion` text,
  `nacionalidad` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id_padre`, `alumno`, `parentezco`, `paterno_padre`, `materno_padre`, `nombre_padre`, `fecha_nacimiento`, `lugar_nacimiento`, `municipio`, `delegacion`, `entidad`, `pais`, `curp`, `trabaja`, `tel_casa`, `horas_trabajo`, `tel_trabajo`, `cel`, `grado_estudio`, `edad`, `civil`, `correo`, `facebook`, `twitter`, `elector`, `ocupacion`, `nacionalidad`) VALUES
(19, 25, 1, 'Sandoval', 'Oritz', 'Pablo', '1956-10-30', 'df', 'Ozumba', 'Ozumba', 15, 'México', 'SAOP561030HMCNIB78', 1, '5979763841', 48, '5979760132', '5525083066', 5, 65, 'Casado', 'correopadre@gmail.com', 'fbm', 'ttm', '', 'Empleado', 'Mexicano'),
(23, 25, 2, 'Valencia', 'Martinez', 'María de la ', '1962-03-09', 'df', 'San Pablo', '-', 9, 'México', 'VAMM620309MMCLRR90', 1, '5979760132', 48, '-', '5534857438', 5, 58, 'Casado', 'correomadre@gmail.com', 'fbm', 'tp', '', 'Empleada', 'Mexicano'),
(27, 25, 9, 'Valencia', 'Martínez', 'Antonia María', '1955-07-05', 'df', 'San Pablo', '-', 15, 'México', 'VAMA550705MMCNRT23', 0, NULL, 0, NULL, NULL, 5, 65, 'Soltero', '', 'asdf', 'asdf', '', '', 'Mexicano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentezcos`
--

CREATE TABLE `parentezcos` (
  `id_parentezco` int(11) NOT NULL,
  `parentezco` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parentezcos`
--

INSERT INTO `parentezcos` (`id_parentezco`, `parentezco`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Hermano(a)'),
(4, 'Tío(a)'),
(5, 'Primo(a)'),
(6, 'Abuelo(a)'),
(7, 'Sobrino(a)'),
(8, 'Cuñado(a)'),
(9, 'Tutor'),
(10, 'Persona de servicio'),
(11, 'Yo'),
(12, 'primo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participacion_social`
--

CREATE TABLE `participacion_social` (
  `id_participacion` int(11) NOT NULL,
  `participa` tinyint(1) DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participacion_social`
--

INSERT INTO `participacion_social` (`id_participacion`, `participa`, `alumno`) VALUES
(5, 1, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_personal`
--

CREATE TABLE `perfil_personal` (
  `id_perfil` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `p1` tinyint(1) DEFAULT NULL,
  `p2` tinyint(1) DEFAULT NULL,
  `p3` tinyint(1) DEFAULT NULL,
  `p4` tinyint(1) DEFAULT NULL,
  `p5` tinyint(1) DEFAULT NULL,
  `p6` tinyint(1) DEFAULT NULL,
  `p7` tinyint(1) DEFAULT NULL,
  `p8` tinyint(1) DEFAULT NULL,
  `p9` tinyint(1) DEFAULT NULL,
  `p10` tinyint(1) DEFAULT NULL,
  `p11` tinyint(1) DEFAULT NULL,
  `p12` tinyint(1) DEFAULT NULL,
  `p13` tinyint(1) DEFAULT NULL,
  `p14` tinyint(1) DEFAULT NULL,
  `p15` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil_personal`
--

INSERT INTO `perfil_personal` (`id_perfil`, `alumno`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`) VALUES
(20, NULL, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1),
(22, 25, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `porcentajes`
--

CREATE TABLE `porcentajes` (
  `id_porcentaje` int(11) NOT NULL,
  `porcentaje` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` text,
  `valor` text,
  `puntos` int(11) DEFAULT NULL,
  `tipo_pregutna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problema_salud`
--

CREATE TABLE `problema_salud` (
  `id_problema` int(11) NOT NULL,
  `descripcion` text,
  `salud` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `problema_salud`
--

INSERT INTO `problema_salud` (`id_problema`, `descripcion`, `salud`) VALUES
(4, 'tos', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_opcion`
--

CREATE TABLE `proyecto_opcion` (
  `id_opcion_pv` int(11) NOT NULL,
  `id_proy_pv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto_opcion`
--

INSERT INTO `proyecto_opcion` (`id_opcion_pv`, `id_proy_pv`) VALUES
(1, 30),
(1, 32),
(2, 30),
(3, 30),
(3, 32),
(4, 30),
(5, 30),
(6, 30),
(6, 32),
(7, 30),
(8, 30),
(8, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proy_vida`
--

CREATE TABLE `proy_vida` (
  `id_proy_vida` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `piensa_lograrla` text,
  `estancia` text,
  `termino` tinyint(1) DEFAULT NULL,
  `carrera` text,
  `meta_vida` text,
  `meta_escuela` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proy_vida`
--

INSERT INTO `proy_vida` (`id_proy_vida`, `alumno`, `piensa_lograrla`, `estancia`, `termino`, `carrera`, `meta_vida`, `meta_escuela`) VALUES
(30, NULL, 'estudiando la universidad', 'Aprender', 1, 'ingenieria en sistemas computacionales', 'Tener profesion', 'Aprender mucho '),
(32, 25, 'estudiando la universidad', 'Aprender', 1, 'ingenieria en sistemas computacionales', 'Tener profesion', 'Aprender mucho ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recreacion`
--

CREATE TABLE `recreacion` (
  `actividad` int(11) NOT NULL,
  `alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recreacion`
--

INSERT INTO `recreacion` (`actividad`, `alumno`) VALUES
(1, 25),
(2, 25),
(3, 25),
(4, 25),
(5, 25),
(6, 25),
(7, 25),
(8, 25),
(9, 25),
(10, 25),
(11, 25),
(12, 25),
(18, 25),
(29, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones`
--

CREATE TABLE `relaciones` (
  `id_relacion` int(11) NOT NULL,
  `relacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relaciones`
--

INSERT INTO `relaciones` (`id_relacion`, `relacion`) VALUES
(1, 'Platicamos'),
(2, 'Jugamos'),
(3, 'Hay respeto'),
(4, 'No nos llevamos'),
(5, 'Nos apoyamos'),
(6, 'Siempre estamos peleando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones_sociales`
--

CREATE TABLE `relaciones_sociales` (
  `id_relacion` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `lugar_hermano` int(11) DEFAULT NULL,
  `edad_noviazgo` int(11) DEFAULT NULL,
  `tiene_novio` tinyint(1) DEFAULT NULL,
  `tiempo_novio` text,
  `numero_parejas` int(11) DEFAULT NULL,
  `tiempo_ruptura` text,
  `motivo_ruptura` text,
  `persona_confianza` text,
  `razon` text,
  `toma_decisiones` int(11) DEFAULT NULL,
  `flexible_problemas` int(11) DEFAULT NULL,
  `problemas_comunicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `relaciones_sociales`
--

INSERT INTO `relaciones_sociales` (`id_relacion`, `alumno`, `lugar_hermano`, `edad_noviazgo`, `tiene_novio`, `tiempo_novio`, `numero_parejas`, `tiempo_ruptura`, `motivo_ruptura`, `persona_confianza`, `razon`, `toma_decisiones`, `flexible_problemas`, `problemas_comunicacion`) VALUES
(2, NULL, 3, 14, 1, '3 meses', 1, '1 año', 'falta de entendimiento', 'mi tia lulu', 'sabe  escuchar', 3, 1, 2),
(3, NULL, 1, 16, 0, '', 3, 'un año', 'infidelidad', 'michelle', 'es confiable', 3, 3, 3),
(8, 25, 4, 16, 0, '1 mes', 4, 'un año', 'infidelidad', 'amiga michelle', 'es confiable', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_hermanos`
--

CREATE TABLE `relacion_hermanos` (
  `id_relacion_h` int(11) NOT NULL,
  `relacion` int(11) DEFAULT NULL,
  `descripcion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `relacion_hermanos`
--

INSERT INTO `relacion_hermanos` (`id_relacion_h`, `relacion`, `descripcion`) VALUES
(5, 2, 3),
(6, 2, 2),
(7, 2, 1),
(8, 2, 3),
(9, 2, 5),
(10, 2, 2),
(21, 8, 1),
(22, 8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE `salud` (
  `id_salud` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `apariencia` int(11) DEFAULT NULL,
  `estatura` double DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `frec_medico` int(11) DEFAULT NULL,
  `frec_dentista` int(11) DEFAULT NULL,
  `anteojos` int(11) DEFAULT NULL,
  `tipo_sangre` varchar(4) DEFAULT NULL,
  `alergias` text,
  `num_seguro` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salud`
--

INSERT INTO `salud` (`id_salud`, `alumno`, `apariencia`, `estatura`, `peso`, `frec_medico`, `frec_dentista`, `anteojos`, `tipo_sangre`, `alergias`, `num_seguro`) VALUES
(5, 25, 2, 1.7, 58, 5, 6, 12, 'O+', 'ninguna', '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundaria`
--

CREATE TABLE `secundaria` (
  `id_secundaria` int(11) NOT NULL,
  `nombre_sec` text,
  `domicilio_sec` text,
  `delegacion` text,
  `municipio` text,
  `entidad_sec` int(3) DEFAULT NULL,
  `cct` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secundaria`
--

INSERT INTO `secundaria` (`id_secundaria`, `nombre_sec`, `domicilio_sec`, `delegacion`, `municipio`, `entidad_sec`, `cct`) VALUES
(1, 'Josefa Ortiz De Dominguez', 'Abasolo', 'Ozumba', 'Ozumba', 15, NULL),
(2, 'ESTIC', 'Allende', 'Ozumba', 'Ozumba', 15, NULL),
(5, 'Juan Rulfo', 'Allende', 'Ozumba', 'Ozumba', 15, NULL),
(7, 'Juan de la Barrera', 'Allende', 'Ozumba', 'Ozumba', 15, NULL),
(8, 'Sor Juana Inés de la Cruz', 'Alzate', 'Ozumba', 'Ozumba', 15, NULL),
(9, 'Gandhi', 'Alzate', 'Ozumba', 'Ozumba', 15, NULL),
(10, 'Santillana', 'Alzate', 'Ozumba', 'Ozumba', 15, NULL),
(11, 'escuela1', 'domicilio1', 'Chalco', 'Chalco', 15, NULL),
(12, 'CBT', 'Juchitepec', 'Juchitepec', 'Juchitepec', 15, NULL),
(13, 'Colegio de Estudios Científicos Y Tecnológicos del Estado de México', 'Atlatula, Santo Domingo', 'Atlautla', 'Atlautla', 15, NULL),
(14, 'CECYTEM', 'ATLAUTLA', 'AMECAMECA', 'AMECAMECA', 15, NULL),
(15, 'Juaca de asbaje', 'nepantla', 'Nepantla', 'Tepetlixpa', 15, NULL),
(16, 'ESTIC #27', 'Allende', 'Ozumba', 'Ozumba', 15, NULL),
(17, 'ESTIC N.0009 \"LIC. ADOLFO L. MATEOS\"', 'Calle pipila #8', 'cocotitlan', 'Cocotitlan', 15, NULL),
(18, 'Escuela Secundaria Técnica Industrial y Comercial', 'Allende', 'Ozumba', 'Ozumba', 15, NULL),
(19, 'Escuela Secundaria Técnica Industrial y Comercial No 27', ' Allende s/n', 'Ozumba', 'Ozumba', 15, NULL),
(20, 'ESTIC No 27', 'Allende', 'Ozumba', 'Ozumba', 15, NULL),
(21, 'ESTIC No 27 \"Niños Héroes\"', 'Allende', 'Ozumba', 'Ozumba', 15, 'asdfasdf'),
(22, 'ESTIC 27', 'Allende', 'Ozumba', 'Ozumba', 15, 'asdf'),
(23, 'Escuela no 27', 'Allende', 'Ozumba', 'Ozumba', 15, 'asdf'),
(24, 'Escuela no 27', 'Allende', 'Ozumba', 'Ozumba', 15, 'fasd'),
(25, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_salud`
--

CREATE TABLE `servicio_salud` (
  `servicio` int(11) NOT NULL,
  `salud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio_salud`
--

INSERT INTO `servicio_salud` (`servicio`, `salud`) VALUES
(1, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sustancias`
--

CREATE TABLE `sustancias` (
  `id_sustancia` int(11) NOT NULL,
  `sustancia` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sustancias`
--

INSERT INTO `sustancias` (`id_sustancia`, `sustancia`) VALUES
(1, 'Alcohol'),
(2, 'Cigarros'),
(3, 'Alguna Droga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tel_movil`
--

CREATE TABLE `tel_movil` (
  `id_tel_movil` int(11) NOT NULL,
  `alumno` int(11) DEFAULT NULL,
  `tiene_cel` tinyint(1) DEFAULT NULL,
  `acceso_int` tinyint(1) DEFAULT NULL,
  `correo` text,
  `facebook` text,
  `twitter` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tel_movil`
--

INSERT INTO `tel_movil` (`id_tel_movil`, `alumno`, `tiene_cel`, `acceso_int`, `correo`, `facebook`, `twitter`) VALUES
(8, 25, 0, 0, 'rubenvalencia@gmail.com', 'Ruben Valencia', 'r.u.b.e.n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_serv_salud`
--

CREATE TABLE `tipo_serv_salud` (
  `id_tipo_servicio` int(11) NOT NULL,
  `servicio` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_serv_salud`
--

INSERT INTO `tipo_serv_salud` (`id_tipo_servicio`, `servicio`) VALUES
(1, 'IMSS'),
(2, 'ISSTE'),
(3, 'PEMEX'),
(4, 'Ejercito o Marina'),
(5, 'Secretaría de Salud'),
(6, 'Seguro Popular'),
(7, 'Médico privado'),
(8, 'Otro'),
(9, 'nsalud'),
(10, 'otro'),
(11, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento_medico`
--

CREATE TABLE `tratamiento_medico` (
  `id_tratamiento` int(11) NOT NULL,
  `salud` int(11) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tratamiento_medico`
--

INSERT INTO `tratamiento_medico` (`id_tratamiento`, `salud`, `descripcion`) VALUES
(5, 5, 'nada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento_psicologico`
--

CREATE TABLE `tratamiento_psicologico` (
  `id_tratamiento` int(11) NOT NULL,
  `salud` int(11) DEFAULT NULL,
  `f_inicio` date DEFAULT NULL,
  `f_final` date DEFAULT NULL,
  `ubicacion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(11) NOT NULL,
  `turno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `turno`) VALUES
(1, 'Matutino'),
(2, 'Vespertino'),
(3, 'Mixto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usos`
--

CREATE TABLE `usos` (
  `id_uso` int(11) NOT NULL,
  `uso` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usos`
--

INSERT INTO `usos` (`id_uso`, `uso`) VALUES
(1, 'Intercambiar información'),
(2, 'Relaciones de amistad'),
(3, 'Relaciones Profesionales'),
(4, 'Buscar pareja'),
(5, 'Entretenimiento'),
(6, 'Buscar amigos'),
(7, 'Comunicarte'),
(8, 'Otro');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `view_estados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `view_estados` (
`registro` mediumtext
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_consumo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_consumo` (
`alumno` int(11)
,`sustancia` text
,`parentezco` text
,`frecuencia` text
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_consumo_familiar`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_consumo_familiar` (
`alumno` int(11)
,`sustancia` int(11)
,`frecuencia` int(11)
,`parentezco` text
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_domicilio`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_domicilio` (
`id_domicilio` int(11)
,`alumno` int(11)
,`calle` text
,`exterior` int(11)
,`interior` int(11)
,`entreCalle1` text
,`entreCalle2` text
,`colonia` text
,`referencia` text
,`estado` text
,`dom_delegacion` mediumtext
,`codigoPostal` int(5)
,`tel_casa` varchar(10)
,`celular` varchar(10)
,`tel_emergencia` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_domicilio2`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_domicilio2` (
`id_domicilio` int(11)
,`alumno` int(11)
,`calle` text
,`exterior` int(11)
,`interior` int(11)
,`entreCalle1` text
,`entreCalle2` text
,`colonia` text
,`referencia` text
,`estado` text
,`est` int(11)
,`municipio` text
,`delegacion` text
,`codigoPostal` int(5)
,`tel_casa` varchar(10)
,`celular` varchar(10)
,`tel_emergencia` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_enfermedad`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_enfermedad` (
`descripcion` text
,`salud` int(11)
,`id_alumno` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_familiares`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_familiares` (
`id_familiar` int(11)
,`alumno` int(11)
,`apellidos` varchar(31)
,`nombre` varchar(25)
,`sexo` varchar(1)
,`edad` int(11)
,`ocupacion` text
,`parentezco` text
,`grado_estudio` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_generales_secundaria`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_generales_secundaria` (
`id_alumno` int(11)
,`paterno_al` varchar(15)
,`materno_al` varchar(15)
,`nombre_al` varchar(25)
,`sexo` varchar(1)
,`fecha_nacimiento_al` date
,`lugar_nacimiento` text
,`municipio_nac` text
,`delegacion_nac` text
,`estado_nacimiento` text
,`entidad` int(11)
,`pais_nac` text
,`nacionalidad` text
,`curp` varchar(18)
,`nombre_sec` text
,`domicilio_sec` text
,`cct` varchar(15)
,`mun_del_sec` mediumtext
,`entidad_sec` int(3)
,`mun_sec` text
,`del_sec` text
,`estado_secundaria` text
,`turno` int(11)
,`promedio` double
,`tel_emergencia` varchar(10)
,`edad` int(11)
,`civil` text
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ingresos_familiares`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_ingresos_familiares` (
`id_ingreso` int(11)
,`alumno` int(11)
,`depenencia` text
,`cantidad_personas` int(11)
,`dep` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ingresos_mensuales`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_ingresos_mensuales` (
`id_ingreso_familiar` int(11)
,`personas_ingreso` text
,`opcion` varchar(20)
,`porcentaje_destinado` int(3)
,`alumno` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_organizaciones`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_organizaciones` (
`org` text
,`organizacion` int(11)
,`id_participacion` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_padres`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_padres` (
`id_padre` int(11)
,`alumno` int(11)
,`paterno_padre` text
,`materno_padre` text
,`nombre_padre` text
,`fecha_nacimiento` date
,`lugar_nacimiento` text
,`mun_delegacion` mediumtext
,`municipio` text
,`delegacion` text
,`estado` text
,`entidad` int(11)
,`pais` text
,`curp` varchar(18)
,`grado_estudio` varchar(30)
,`ge` int(11)
,`trabaja` tinyint(1)
,`horas_trabajo` int(11)
,`tel_casa` varchar(10)
,`tel_trabajo` varchar(10)
,`cel` varchar(10)
,`parentezco` int(11)
,`edad` int(11)
,`civil` text
,`correo` text
,`facebook` text
,`twitter` text
,`elector` text
,`ocupacion` text
,`nacionalidad` text
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_proyecto_opcion`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_proyecto_opcion` (
`id_opcion_pv` int(11)
,`id_proy_pv` int(11)
,`opcion` text
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_recreacion`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_recreacion` (
`actividad` int(11)
,`alumno` int(11)
,`accion` text
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_servicio_salud`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_servicio_salud` (
);

-- --------------------------------------------------------

--
-- Estructura para la vista `view_estados`
--
DROP TABLE IF EXISTS `view_estados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_estados`  AS  (select concat('<option value=',`estados`.`id_estado`,'>',`estados`.`estado`,'</option>') AS `registro` from `estados`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_consumo`
--
DROP TABLE IF EXISTS `v_consumo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_consumo`  AS  (select `consumo_familiar`.`alumno` AS `alumno`,`sustancias`.`sustancia` AS `sustancia`,`parentezcos`.`parentezco` AS `parentezco`,`frecuencias`.`frecuencia` AS `frecuencia` from (((`consumo_familiar` join `sustancias` on((`sustancias`.`id_sustancia` = `consumo_familiar`.`sustancia`))) join `parentezcos` on((`parentezcos`.`id_parentezco` = `consumo_familiar`.`familiar`))) join `frecuencias` on((`frecuencias`.`id_frecuencia` = `consumo_familiar`.`frecuencia`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_consumo_familiar`
--
DROP TABLE IF EXISTS `v_consumo_familiar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_consumo_familiar`  AS  (select `consumo_familiar`.`alumno` AS `alumno`,`consumo_familiar`.`sustancia` AS `sustancia`,`consumo_familiar`.`frecuencia` AS `frecuencia`,`parentezcos`.`parentezco` AS `parentezco` from (`consumo_familiar` join `parentezcos` on((`parentezcos`.`id_parentezco` = `consumo_familiar`.`familiar`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_domicilio`
--
DROP TABLE IF EXISTS `v_domicilio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_domicilio`  AS  (select `domicilios`.`id_domicilio` AS `id_domicilio`,`domicilios`.`alumno` AS `alumno`,`domicilios`.`calle` AS `calle`,`domicilios`.`exterior` AS `exterior`,`domicilios`.`interior` AS `interior`,`domicilios`.`entreCalle1` AS `entreCalle1`,`domicilios`.`entreCalle2` AS `entreCalle2`,`domicilios`.`colonia` AS `colonia`,`domicilios`.`referencia` AS `referencia`,`estados`.`estado` AS `estado`,concat(`domicilios`.`municipio`,'-',`domicilios`.`delegacion`) AS `dom_delegacion`,`domicilios`.`codigoPostal` AS `codigoPostal`,`domicilios`.`tel_casa` AS `tel_casa`,`domicilios`.`celular` AS `celular`,`domicilios`.`tel_emergencia` AS `tel_emergencia` from (`domicilios` join `estados`) where (`estados`.`id_estado` = `domicilios`.`estado`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_domicilio2`
--
DROP TABLE IF EXISTS `v_domicilio2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_domicilio2`  AS  (select `domicilios`.`id_domicilio` AS `id_domicilio`,`domicilios`.`alumno` AS `alumno`,`domicilios`.`calle` AS `calle`,`domicilios`.`exterior` AS `exterior`,`domicilios`.`interior` AS `interior`,`domicilios`.`entreCalle1` AS `entreCalle1`,`domicilios`.`entreCalle2` AS `entreCalle2`,`domicilios`.`colonia` AS `colonia`,`domicilios`.`referencia` AS `referencia`,`estados`.`estado` AS `estado`,`domicilios`.`estado` AS `est`,`domicilios`.`municipio` AS `municipio`,`domicilios`.`delegacion` AS `delegacion`,`domicilios`.`codigoPostal` AS `codigoPostal`,`domicilios`.`tel_casa` AS `tel_casa`,`domicilios`.`celular` AS `celular`,`domicilios`.`tel_emergencia` AS `tel_emergencia` from (`domicilios` join `estados`) where (`estados`.`id_estado` = `domicilios`.`estado`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_enfermedad`
--
DROP TABLE IF EXISTS `v_enfermedad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_enfermedad`  AS  (select `problema_salud`.`descripcion` AS `descripcion`,`problema_salud`.`salud` AS `salud`,`alumno`.`id_alumno` AS `id_alumno` from ((`problema_salud` join `salud` on((`salud`.`id_salud` = `problema_salud`.`salud`))) join `alumno` on((`alumno`.`id_alumno` = `salud`.`alumno`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_familiares`
--
DROP TABLE IF EXISTS `v_familiares`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_familiares`  AS  (select `familiares`.`id_familiar` AS `id_familiar`,`familiares`.`alumno` AS `alumno`,concat(`familiares`.`paterno`,' ',`familiares`.`materno`) AS `apellidos`,`familiares`.`nombre` AS `nombre`,`familiares`.`sexo` AS `sexo`,`familiares`.`edad` AS `edad`,`familiares`.`ocupacion` AS `ocupacion`,`parentezcos`.`parentezco` AS `parentezco`,`grados_estudio`.`grado_estudio` AS `grado_estudio` from ((`familiares` join `parentezcos`) join `grados_estudio`) where ((`grados_estudio`.`id_grado` = `familiares`.`grado_estudio`) and (`parentezcos`.`id_parentezco` = `familiares`.`parentezco`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_generales_secundaria`
--
DROP TABLE IF EXISTS `v_generales_secundaria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_generales_secundaria`  AS  (select `alumno`.`id_alumno` AS `id_alumno`,`alumno`.`paterno_al` AS `paterno_al`,`alumno`.`materno_al` AS `materno_al`,`alumno`.`nombre_al` AS `nombre_al`,`alumno`.`sexo` AS `sexo`,`alumno`.`fecha_nacimiento_al` AS `fecha_nacimiento_al`,`alumno`.`lugar_nacimiento` AS `lugar_nacimiento`,`alumno`.`municipio_nac` AS `municipio_nac`,`alumno`.`delegacion_nac` AS `delegacion_nac`,`estados`.`estado` AS `estado_nacimiento`,`alumno`.`entidad` AS `entidad`,`alumno`.`pais_nac` AS `pais_nac`,`alumno`.`nacionalidad` AS `nacionalidad`,`alumno`.`curp` AS `curp`,`secundaria`.`nombre_sec` AS `nombre_sec`,`secundaria`.`domicilio_sec` AS `domicilio_sec`,`secundaria`.`cct` AS `cct`,concat(`secundaria`.`municipio`,'-',`secundaria`.`delegacion`) AS `mun_del_sec`,`secundaria`.`entidad_sec` AS `entidad_sec`,`secundaria`.`municipio` AS `mun_sec`,`secundaria`.`delegacion` AS `del_sec`,`estados`.`estado` AS `estado_secundaria`,`alumno`.`turno` AS `turno`,`alumno`.`promedio` AS `promedio`,`alumno`.`tel_emergencia` AS `tel_emergencia`,`alumno`.`edad` AS `edad`,`alumno`.`civil` AS `civil` from ((`alumno` join `estados`) join `secundaria`) where ((`estados`.`id_estado` = `alumno`.`entidad`) and (`alumno`.`secundaria_al` = `secundaria`.`id_secundaria`) and (`secundaria`.`entidad_sec` = `estados`.`id_estado`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ingresos_familiares`
--
DROP TABLE IF EXISTS `v_ingresos_familiares`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ingresos_familiares`  AS  (select `ingresos`.`id_ingreso` AS `id_ingreso`,`ingresos`.`alumno` AS `alumno`,`parentezcos`.`parentezco` AS `depenencia`,`ingresos`.`cantidad_personas` AS `cantidad_personas`,`ingresos`.`dependencia` AS `dep` from (`ingresos` join `parentezcos`) where (`parentezcos`.`id_parentezco` = `ingresos`.`dependencia`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ingresos_mensuales`
--
DROP TABLE IF EXISTS `v_ingresos_mensuales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ingresos_mensuales`  AS  (select `ingresos_familiares`.`id_ingreso_familiar` AS `id_ingreso_familiar`,`ingresos_familiares`.`personas_ingreso` AS `personas_ingreso`,`opciones_ingresos`.`opcion` AS `opcion`,`ingresos_familiares`.`porcentaje_destinado` AS `porcentaje_destinado`,`ingresos_familiares`.`alumno` AS `alumno` from (`ingresos_familiares` join `opciones_ingresos`) where (`opciones_ingresos`.`id_opcion` = `ingresos_familiares`.`ingreso`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_organizaciones`
--
DROP TABLE IF EXISTS `v_organizaciones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_organizaciones`  AS  (select `organizaciones`.`organizacion` AS `org`,`org_participacion`.`organizacion` AS `organizacion`,`org_participacion`.`id_participacion` AS `id_participacion` from (`org_participacion` join `organizaciones` on((`org_participacion`.`organizacion` = `organizaciones`.`id_organizacion`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_padres`
--
DROP TABLE IF EXISTS `v_padres`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_padres`  AS  (select `padres`.`id_padre` AS `id_padre`,`padres`.`alumno` AS `alumno`,`padres`.`paterno_padre` AS `paterno_padre`,`padres`.`materno_padre` AS `materno_padre`,`padres`.`nombre_padre` AS `nombre_padre`,`padres`.`fecha_nacimiento` AS `fecha_nacimiento`,`padres`.`lugar_nacimiento` AS `lugar_nacimiento`,concat(`padres`.`municipio`,'-',`padres`.`delegacion`) AS `mun_delegacion`,`padres`.`municipio` AS `municipio`,`padres`.`delegacion` AS `delegacion`,`estados`.`estado` AS `estado`,`padres`.`entidad` AS `entidad`,`padres`.`pais` AS `pais`,`padres`.`curp` AS `curp`,`grados_estudio`.`grado_estudio` AS `grado_estudio`,`padres`.`grado_estudio` AS `ge`,`padres`.`trabaja` AS `trabaja`,`padres`.`horas_trabajo` AS `horas_trabajo`,`padres`.`tel_casa` AS `tel_casa`,`padres`.`tel_trabajo` AS `tel_trabajo`,`padres`.`cel` AS `cel`,`padres`.`parentezco` AS `parentezco`,`padres`.`edad` AS `edad`,`padres`.`civil` AS `civil`,`padres`.`correo` AS `correo`,`padres`.`facebook` AS `facebook`,`padres`.`twitter` AS `twitter`,`padres`.`elector` AS `elector`,`padres`.`ocupacion` AS `ocupacion`,`padres`.`nacionalidad` AS `nacionalidad` from ((`padres` join `estados`) join `grados_estudio`) where ((`estados`.`id_estado` = `padres`.`entidad`) and (`grados_estudio`.`id_grado` = `padres`.`grado_estudio`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_proyecto_opcion`
--
DROP TABLE IF EXISTS `v_proyecto_opcion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_proyecto_opcion`  AS  (select `proyecto_opcion`.`id_opcion_pv` AS `id_opcion_pv`,`proyecto_opcion`.`id_proy_pv` AS `id_proy_pv`,`opciones_proyectovida`.`opcion` AS `opcion` from (`proyecto_opcion` join `opciones_proyectovida` on((`opciones_proyectovida`.`id_opcion` = `proyecto_opcion`.`id_opcion_pv`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_recreacion`
--
DROP TABLE IF EXISTS `v_recreacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_recreacion`  AS  (select `recreacion`.`actividad` AS `actividad`,`recreacion`.`alumno` AS `alumno`,`acciones`.`accion` AS `accion` from (`recreacion` join `acciones` on((`acciones`.`id_accion` = `recreacion`.`actividad`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_servicio_salud`
--
DROP TABLE IF EXISTS `v_servicio_salud`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_servicio_salud`  AS  (select `tipo_serv_salud`.`servicio` AS `serv`,`servicio_salud`.`servicio` AS `servicio`,`servicio_salud`.`salud` AS `salud` from (`servicio_salud` join `tipo_serv_salud` on((`tipo_serv_salud`.`id_tipo_servicio` = `servicio_salud`.`servicio`)))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`id_acceso`);

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id_accion`);

--
-- Indices de la tabla `actividades_hogar`
--
ALTER TABLE `actividades_hogar`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `actividad` (`actividad`),
  ADD KEY `familiar` (`familiar`),
  ADD KEY `relacion` (`relacion`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `entidad` (`entidad`),
  ADD KEY `secundaria_al` (`secundaria_al`),
  ADD KEY `turno` (`turno`);

--
-- Indices de la tabla `alumno_beca`
--
ALTER TABLE `alumno_beca`
  ADD PRIMARY KEY (`id_alumno_beca`),
  ADD KEY `id_alumno_ab` (`id_alumno_ab`);

--
-- Indices de la tabla `alumno_trabajo`
--
ALTER TABLE `alumno_trabajo`
  ADD PRIMARY KEY (`id_al_trabajo`),
  ADD KEY `alumno_at` (`alumno_at`);

--
-- Indices de la tabla `ambiente_socioeconomico`
--
ALTER TABLE `ambiente_socioeconomico`
  ADD PRIMARY KEY (`id_ambiente`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `cantidades_sust`
--
ALTER TABLE `cantidades_sust`
  ADD PRIMARY KEY (`id_cantidad`);

--
-- Indices de la tabla `consumo_familiar`
--
ALTER TABLE `consumo_familiar`
  ADD PRIMARY KEY (`id_consumo`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `sustancia` (`sustancia`),
  ADD KEY `familiar` (`familiar`),
  ADD KEY `frecuencia` (`frecuencia`);

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`id_deporte`);

--
-- Indices de la tabla `deportes_practica`
--
ALTER TABLE `deportes_practica`
  ADD PRIMARY KEY (`id_dep_pract`),
  ADD KEY `id_ejer_dep` (`id_ejer_dep`),
  ADD KEY `id_deporte` (`id_deporte`);

--
-- Indices de la tabla `didscapacidades_fisicas`
--
ALTER TABLE `didscapacidades_fisicas`
  ADD PRIMARY KEY (`id_discapacidad`),
  ADD KEY `salud` (`salud`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id_domicilio`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `domicilio_tutor`
--
ALTER TABLE `domicilio_tutor`
  ADD PRIMARY KEY (`id_domicilio_tutor`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `ejercicio_deportes`
--
ALTER TABLE `ejercicio_deportes`
  ADD PRIMARY KEY (`id_ejer_dep`),
  ADD KEY `frecuencia` (`frecuencia`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD PRIMARY KEY (`id_familiar`),
  ADD KEY `parentezco` (`parentezco`),
  ADD KEY `grado_estudio` (`grado_estudio`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `frecuencias`
--
ALTER TABLE `frecuencias`
  ADD PRIMARY KEY (`id_frecuencia`);

--
-- Indices de la tabla `grados_estudio`
--
ALTER TABLE `grados_estudio`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `gustos_intereses`
--
ALTER TABLE `gustos_intereses`
  ADD PRIMARY KEY (`id_gusto_int`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `habitos_consumos`
--
ALTER TABLE `habitos_consumos`
  ADD PRIMARY KEY (`id_habito`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `cant_cigarros` (`cant_cigarros`),
  ADD KEY `cerveza` (`cerveza`),
  ADD KEY `vinos` (`vinos`),
  ADD KEY `cocteles` (`cocteles`),
  ADD KEY `licores` (`licores`),
  ADD KEY `otros` (`otros`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `dependencia` (`dependencia`);

--
-- Indices de la tabla `ingresos_familiares`
--
ALTER TABLE `ingresos_familiares`
  ADD PRIMARY KEY (`id_ingreso_familiar`),
  ADD KEY `ingreso` (`ingreso`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `internet`
--
ALTER TABLE `internet`
  ADD PRIMARY KEY (`id_internet`),
  ADD KEY `acceso` (`acceso`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `jugadas`
--
ALTER TABLE `jugadas`
  ADD PRIMARY KEY (`id_jugada`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`);

--
-- Indices de la tabla `negocios_familiares`
--
ALTER TABLE `negocios_familiares`
  ADD PRIMARY KEY (`id_negocio`),
  ADD KEY `relacion` (`relacion`);

--
-- Indices de la tabla `opciones_ingresos`
--
ALTER TABLE `opciones_ingresos`
  ADD PRIMARY KEY (`id_opcion`);

--
-- Indices de la tabla `opciones_proyectovida`
--
ALTER TABLE `opciones_proyectovida`
  ADD PRIMARY KEY (`id_opcion`);

--
-- Indices de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  ADD PRIMARY KEY (`id_organizacion`);

--
-- Indices de la tabla `org_participacion`
--
ALTER TABLE `org_participacion`
  ADD PRIMARY KEY (`id_participacion`,`organizacion`),
  ADD KEY `organizacion` (`organizacion`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id_padre`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `parentezco` (`parentezco`),
  ADD KEY `entidad` (`entidad`),
  ADD KEY `grado_estudio` (`grado_estudio`);

--
-- Indices de la tabla `parentezcos`
--
ALTER TABLE `parentezcos`
  ADD PRIMARY KEY (`id_parentezco`);

--
-- Indices de la tabla `participacion_social`
--
ALTER TABLE `participacion_social`
  ADD PRIMARY KEY (`id_participacion`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `perfil_personal`
--
ALTER TABLE `perfil_personal`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `porcentajes`
--
ALTER TABLE `porcentajes`
  ADD PRIMARY KEY (`id_porcentaje`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `problema_salud`
--
ALTER TABLE `problema_salud`
  ADD PRIMARY KEY (`id_problema`),
  ADD KEY `salud` (`salud`);

--
-- Indices de la tabla `proyecto_opcion`
--
ALTER TABLE `proyecto_opcion`
  ADD PRIMARY KEY (`id_opcion_pv`,`id_proy_pv`),
  ADD KEY `id_proy_pv` (`id_proy_pv`);

--
-- Indices de la tabla `proy_vida`
--
ALTER TABLE `proy_vida`
  ADD PRIMARY KEY (`id_proy_vida`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `recreacion`
--
ALTER TABLE `recreacion`
  ADD PRIMARY KEY (`alumno`,`actividad`),
  ADD KEY `actividad` (`actividad`);

--
-- Indices de la tabla `relaciones`
--
ALTER TABLE `relaciones`
  ADD PRIMARY KEY (`id_relacion`);

--
-- Indices de la tabla `relaciones_sociales`
--
ALTER TABLE `relaciones_sociales`
  ADD PRIMARY KEY (`id_relacion`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `toma_decisiones` (`toma_decisiones`);

--
-- Indices de la tabla `relacion_hermanos`
--
ALTER TABLE `relacion_hermanos`
  ADD PRIMARY KEY (`id_relacion_h`),
  ADD KEY `relacion` (`relacion`),
  ADD KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
  ADD PRIMARY KEY (`id_salud`),
  ADD KEY `alumno` (`alumno`),
  ADD KEY `frec_medico` (`frec_medico`),
  ADD KEY `frec_dentista` (`frec_dentista`),
  ADD KEY `anteojos` (`anteojos`);

--
-- Indices de la tabla `secundaria`
--
ALTER TABLE `secundaria`
  ADD PRIMARY KEY (`id_secundaria`),
  ADD KEY `entidad_sec` (`entidad_sec`);

--
-- Indices de la tabla `servicio_salud`
--
ALTER TABLE `servicio_salud`
  ADD PRIMARY KEY (`salud`,`servicio`),
  ADD KEY `servicio` (`servicio`);

--
-- Indices de la tabla `sustancias`
--
ALTER TABLE `sustancias`
  ADD PRIMARY KEY (`id_sustancia`);

--
-- Indices de la tabla `tel_movil`
--
ALTER TABLE `tel_movil`
  ADD PRIMARY KEY (`id_tel_movil`),
  ADD KEY `alumno` (`alumno`);

--
-- Indices de la tabla `tipo_serv_salud`
--
ALTER TABLE `tipo_serv_salud`
  ADD PRIMARY KEY (`id_tipo_servicio`);

--
-- Indices de la tabla `tratamiento_medico`
--
ALTER TABLE `tratamiento_medico`
  ADD PRIMARY KEY (`id_tratamiento`),
  ADD KEY `salud` (`salud`);

--
-- Indices de la tabla `tratamiento_psicologico`
--
ALTER TABLE `tratamiento_psicologico`
  ADD PRIMARY KEY (`id_tratamiento`),
  ADD KEY `salud` (`salud`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `usos`
--
ALTER TABLE `usos`
  ADD PRIMARY KEY (`id_uso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id_accion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `actividades_hogar`
--
ALTER TABLE `actividades_hogar`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `alumno_beca`
--
ALTER TABLE `alumno_beca`
  MODIFY `id_alumno_beca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `alumno_trabajo`
--
ALTER TABLE `alumno_trabajo`
  MODIFY `id_al_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `ambiente_socioeconomico`
--
ALTER TABLE `ambiente_socioeconomico`
  MODIFY `id_ambiente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cantidades_sust`
--
ALTER TABLE `cantidades_sust`
  MODIFY `id_cantidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `consumo_familiar`
--
ALTER TABLE `consumo_familiar`
  MODIFY `id_consumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `id_deporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `deportes_practica`
--
ALTER TABLE `deportes_practica`
  MODIFY `id_dep_pract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `didscapacidades_fisicas`
--
ALTER TABLE `didscapacidades_fisicas`
  MODIFY `id_discapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `id_domicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `domicilio_tutor`
--
ALTER TABLE `domicilio_tutor`
  MODIFY `id_domicilio_tutor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ejercicio_deportes`
--
ALTER TABLE `ejercicio_deportes`
  MODIFY `id_ejer_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `familiares`
--
ALTER TABLE `familiares`
  MODIFY `id_familiar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `frecuencias`
--
ALTER TABLE `frecuencias`
  MODIFY `id_frecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `grados_estudio`
--
ALTER TABLE `grados_estudio`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `gustos_intereses`
--
ALTER TABLE `gustos_intereses`
  MODIFY `id_gusto_int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `habitos_consumos`
--
ALTER TABLE `habitos_consumos`
  MODIFY `id_habito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ingresos_familiares`
--
ALTER TABLE `ingresos_familiares`
  MODIFY `id_ingreso_familiar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `internet`
--
ALTER TABLE `internet`
  MODIFY `id_internet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `jugadas`
--
ALTER TABLE `jugadas`
  MODIFY `id_jugada` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `negocios_familiares`
--
ALTER TABLE `negocios_familiares`
  MODIFY `id_negocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `opciones_ingresos`
--
ALTER TABLE `opciones_ingresos`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `opciones_proyectovida`
--
ALTER TABLE `opciones_proyectovida`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  MODIFY `id_organizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_padre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `parentezcos`
--
ALTER TABLE `parentezcos`
  MODIFY `id_parentezco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `participacion_social`
--
ALTER TABLE `participacion_social`
  MODIFY `id_participacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `perfil_personal`
--
ALTER TABLE `perfil_personal`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `porcentajes`
--
ALTER TABLE `porcentajes`
  MODIFY `id_porcentaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `problema_salud`
--
ALTER TABLE `problema_salud`
  MODIFY `id_problema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proy_vida`
--
ALTER TABLE `proy_vida`
  MODIFY `id_proy_vida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `relaciones`
--
ALTER TABLE `relaciones`
  MODIFY `id_relacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `relaciones_sociales`
--
ALTER TABLE `relaciones_sociales`
  MODIFY `id_relacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `relacion_hermanos`
--
ALTER TABLE `relacion_hermanos`
  MODIFY `id_relacion_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `salud`
--
ALTER TABLE `salud`
  MODIFY `id_salud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `secundaria`
--
ALTER TABLE `secundaria`
  MODIFY `id_secundaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `sustancias`
--
ALTER TABLE `sustancias`
  MODIFY `id_sustancia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tel_movil`
--
ALTER TABLE `tel_movil`
  MODIFY `id_tel_movil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipo_serv_salud`
--
ALTER TABLE `tipo_serv_salud`
  MODIFY `id_tipo_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tratamiento_medico`
--
ALTER TABLE `tratamiento_medico`
  MODIFY `id_tratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tratamiento_psicologico`
--
ALTER TABLE `tratamiento_psicologico`
  MODIFY `id_tratamiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usos`
--
ALTER TABLE `usos`
  MODIFY `id_uso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades_hogar`
--
ALTER TABLE `actividades_hogar`
  ADD CONSTRAINT `actividades_hogar_ibfk_1` FOREIGN KEY (`actividad`) REFERENCES `acciones` (`id_accion`),
  ADD CONSTRAINT `actividades_hogar_ibfk_2` FOREIGN KEY (`familiar`) REFERENCES `parentezcos` (`id_parentezco`),
  ADD CONSTRAINT `actividades_hogar_ibfk_3` FOREIGN KEY (`relacion`) REFERENCES `relaciones_sociales` (`id_relacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`entidad`) REFERENCES `estados` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`secundaria_al`) REFERENCES `secundaria` (`id_secundaria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`turno`) REFERENCES `turnos` (`id_turno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno_beca`
--
ALTER TABLE `alumno_beca`
  ADD CONSTRAINT `alumno_beca_ibfk_1` FOREIGN KEY (`id_alumno_ab`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno_trabajo`
--
ALTER TABLE `alumno_trabajo`
  ADD CONSTRAINT `alumno_trabajo_ibfk_1` FOREIGN KEY (`alumno_at`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ambiente_socioeconomico`
--
ALTER TABLE `ambiente_socioeconomico`
  ADD CONSTRAINT `ambiente_socioeconomico_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consumo_familiar`
--
ALTER TABLE `consumo_familiar`
  ADD CONSTRAINT `consumo_familiar_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consumo_familiar_ibfk_2` FOREIGN KEY (`sustancia`) REFERENCES `sustancias` (`id_sustancia`),
  ADD CONSTRAINT `consumo_familiar_ibfk_3` FOREIGN KEY (`familiar`) REFERENCES `parentezcos` (`id_parentezco`),
  ADD CONSTRAINT `consumo_familiar_ibfk_4` FOREIGN KEY (`frecuencia`) REFERENCES `frecuencias` (`id_frecuencia`);

--
-- Filtros para la tabla `deportes_practica`
--
ALTER TABLE `deportes_practica`
  ADD CONSTRAINT `deportes_practica_ibfk_1` FOREIGN KEY (`id_ejer_dep`) REFERENCES `ejercicio_deportes` (`id_ejer_dep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deportes_practica_ibfk_2` FOREIGN KEY (`id_deporte`) REFERENCES `deportes` (`id_deporte`);

--
-- Filtros para la tabla `didscapacidades_fisicas`
--
ALTER TABLE `didscapacidades_fisicas`
  ADD CONSTRAINT `didscapacidades_fisicas_ibfk_1` FOREIGN KEY (`salud`) REFERENCES `salud` (`id_salud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD CONSTRAINT `domicilios_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `domicilios_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `domicilio_tutor`
--
ALTER TABLE `domicilio_tutor`
  ADD CONSTRAINT `domicilio_tutor_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejercicio_deportes`
--
ALTER TABLE `ejercicio_deportes`
  ADD CONSTRAINT `ejercicio_deportes_ibfk_1` FOREIGN KEY (`frecuencia`) REFERENCES `frecuencias` (`id_frecuencia`),
  ADD CONSTRAINT `ejercicio_deportes_ibfk_2` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD CONSTRAINT `familiares_ibfk_1` FOREIGN KEY (`parentezco`) REFERENCES `parentezcos` (`id_parentezco`),
  ADD CONSTRAINT `familiares_ibfk_2` FOREIGN KEY (`grado_estudio`) REFERENCES `grados_estudio` (`id_grado`),
  ADD CONSTRAINT `familiares_ibfk_3` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gustos_intereses`
--
ALTER TABLE `gustos_intereses`
  ADD CONSTRAINT `gustos_intereses_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `habitos_consumos`
--
ALTER TABLE `habitos_consumos`
  ADD CONSTRAINT `habitos_consumos_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `habitos_consumos_ibfk_2` FOREIGN KEY (`cant_cigarros`) REFERENCES `cantidades_sust` (`id_cantidad`),
  ADD CONSTRAINT `habitos_consumos_ibfk_3` FOREIGN KEY (`cerveza`) REFERENCES `cantidades_sust` (`id_cantidad`),
  ADD CONSTRAINT `habitos_consumos_ibfk_4` FOREIGN KEY (`vinos`) REFERENCES `cantidades_sust` (`id_cantidad`),
  ADD CONSTRAINT `habitos_consumos_ibfk_5` FOREIGN KEY (`cocteles`) REFERENCES `cantidades_sust` (`id_cantidad`),
  ADD CONSTRAINT `habitos_consumos_ibfk_6` FOREIGN KEY (`licores`) REFERENCES `cantidades_sust` (`id_cantidad`),
  ADD CONSTRAINT `habitos_consumos_ibfk_7` FOREIGN KEY (`otros`) REFERENCES `cantidades_sust` (`id_cantidad`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresos_ibfk_2` FOREIGN KEY (`dependencia`) REFERENCES `parentezcos` (`id_parentezco`);

--
-- Filtros para la tabla `ingresos_familiares`
--
ALTER TABLE `ingresos_familiares`
  ADD CONSTRAINT `ingresos_familiares_ibfk_1` FOREIGN KEY (`ingreso`) REFERENCES `opciones_ingresos` (`id_opcion`),
  ADD CONSTRAINT `ingresos_familiares_ibfk_2` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `internet`
--
ALTER TABLE `internet`
  ADD CONSTRAINT `internet_ibfk_1` FOREIGN KEY (`acceso`) REFERENCES `accesos` (`id_acceso`),
  ADD CONSTRAINT `internet_ibfk_2` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `negocios_familiares`
--
ALTER TABLE `negocios_familiares`
  ADD CONSTRAINT `negocios_familiares_ibfk_1` FOREIGN KEY (`relacion`) REFERENCES `relaciones_sociales` (`id_relacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `org_participacion`
--
ALTER TABLE `org_participacion`
  ADD CONSTRAINT `org_participacion_ibfk_1` FOREIGN KEY (`organizacion`) REFERENCES `organizaciones` (`id_organizacion`),
  ADD CONSTRAINT `org_participacion_ibfk_2` FOREIGN KEY (`id_participacion`) REFERENCES `participacion_social` (`id_participacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `padres_ibfk_2` FOREIGN KEY (`parentezco`) REFERENCES `parentezcos` (`id_parentezco`),
  ADD CONSTRAINT `padres_ibfk_3` FOREIGN KEY (`entidad`) REFERENCES `estados` (`id_estado`),
  ADD CONSTRAINT `padres_ibfk_4` FOREIGN KEY (`grado_estudio`) REFERENCES `grados_estudio` (`id_grado`);

--
-- Filtros para la tabla `participacion_social`
--
ALTER TABLE `participacion_social`
  ADD CONSTRAINT `participacion_social_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `perfil_personal`
--
ALTER TABLE `perfil_personal`
  ADD CONSTRAINT `perfil_personal_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `problema_salud`
--
ALTER TABLE `problema_salud`
  ADD CONSTRAINT `problema_salud_ibfk_1` FOREIGN KEY (`salud`) REFERENCES `salud` (`id_salud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto_opcion`
--
ALTER TABLE `proyecto_opcion`
  ADD CONSTRAINT `proyecto_opcion_ibfk_1` FOREIGN KEY (`id_opcion_pv`) REFERENCES `opciones_proyectovida` (`id_opcion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyecto_opcion_ibfk_2` FOREIGN KEY (`id_proy_pv`) REFERENCES `proy_vida` (`id_proy_vida`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proy_vida`
--
ALTER TABLE `proy_vida`
  ADD CONSTRAINT `proy_vida_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recreacion`
--
ALTER TABLE `recreacion`
  ADD CONSTRAINT `recreacion_ibfk_1` FOREIGN KEY (`actividad`) REFERENCES `acciones` (`id_accion`),
  ADD CONSTRAINT `recreacion_ibfk_2` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `relaciones_sociales`
--
ALTER TABLE `relaciones_sociales`
  ADD CONSTRAINT `relaciones_sociales_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relaciones_sociales_ibfk_2` FOREIGN KEY (`toma_decisiones`) REFERENCES `parentezcos` (`id_parentezco`),
  ADD CONSTRAINT `relaciones_sociales_ibfk_3` FOREIGN KEY (`toma_decisiones`) REFERENCES `parentezcos` (`id_parentezco`),
  ADD CONSTRAINT `relaciones_sociales_ibfk_4` FOREIGN KEY (`toma_decisiones`) REFERENCES `parentezcos` (`id_parentezco`);

--
-- Filtros para la tabla `relacion_hermanos`
--
ALTER TABLE `relacion_hermanos`
  ADD CONSTRAINT `relacion_hermanos_ibfk_1` FOREIGN KEY (`relacion`) REFERENCES `relaciones_sociales` (`id_relacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_hermanos_ibfk_2` FOREIGN KEY (`descripcion`) REFERENCES `relaciones` (`id_relacion`);

--
-- Filtros para la tabla `salud`
--
ALTER TABLE `salud`
  ADD CONSTRAINT `salud_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salud_ibfk_2` FOREIGN KEY (`frec_medico`) REFERENCES `frecuencias` (`id_frecuencia`),
  ADD CONSTRAINT `salud_ibfk_3` FOREIGN KEY (`frec_dentista`) REFERENCES `frecuencias` (`id_frecuencia`),
  ADD CONSTRAINT `salud_ibfk_4` FOREIGN KEY (`anteojos`) REFERENCES `frecuencias` (`id_frecuencia`);

--
-- Filtros para la tabla `secundaria`
--
ALTER TABLE `secundaria`
  ADD CONSTRAINT `secundaria_ibfk_1` FOREIGN KEY (`entidad_sec`) REFERENCES `estados` (`id_estado`);

--
-- Filtros para la tabla `servicio_salud`
--
ALTER TABLE `servicio_salud`
  ADD CONSTRAINT `servicio_salud_ibfk_1` FOREIGN KEY (`servicio`) REFERENCES `tipo_serv_salud` (`id_tipo_servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicio_salud_ibfk_2` FOREIGN KEY (`salud`) REFERENCES `salud` (`id_salud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tel_movil`
--
ALTER TABLE `tel_movil`
  ADD CONSTRAINT `tel_movil_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamiento_medico`
--
ALTER TABLE `tratamiento_medico`
  ADD CONSTRAINT `tratamiento_medico_ibfk_1` FOREIGN KEY (`salud`) REFERENCES `salud` (`id_salud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamiento_psicologico`
--
ALTER TABLE `tratamiento_psicologico`
  ADD CONSTRAINT `tratamiento_psicologico_ibfk_1` FOREIGN KEY (`salud`) REFERENCES `salud` (`id_salud`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

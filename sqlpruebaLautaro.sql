-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2020 a las 17:29:19
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appchat2`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertar_respuesta` (IN `respuestaVar` VARCHAR(2), IN `preguntaIdVar` INT, IN `encuestaIdVar` INT, IN `usuarioIdVar` INT)  BEGIN
insert into respuesta (detalle_respuesta, pregunta_id_pregunta, encuesta_id_encuesta, usuario_id_usuario) values (respuestaVar,preguntaIdVar,encuestaIdVar,usuarioIdVar);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tabla_datos` ()  BEGIN
select us.usuario as usuario, us.rut as rut_usuario, en.nombre_encuesta as encuesta, pr.pregunta as pregunta, re.detalle_respuesta as respuesta, re.fecha as fecha from respuesta re join usuario us on(re.usuario_id_usuario=us.id_usuario) join pregunta pr on(re.pregunta_id_pregunta=pr.id_pregunta) join encuesta en on(re.encuesta_id_encuesta=en.id_encuesta) order by fecha desc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas` ()  BEGIN
select DISTINCT(select count(detalle_respuesta) from respuesta where detalle_respuesta='si') as si, (select count(detalle_respuesta) from respuesta where detalle_respuesta='no') as no from respuesta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas_asignacion` ()  BEGIN
select DISTINCT(select count(detalle_respuesta) from respuesta where detalle_respuesta='si' and encuesta_id_encuesta=4) as si, (select count(detalle_respuesta) from respuesta where detalle_respuesta='no' and encuesta_id_encuesta=4) as no from respuesta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas_cuota` ()  BEGIN
select DISTINCT(select count(detalle_respuesta) from respuesta where detalle_respuesta='si' and encuesta_id_encuesta=1) as si, (select count(detalle_respuesta) from respuesta where detalle_respuesta='no' and encuesta_id_encuesta=1) as no from respuesta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas_memoria` ()  BEGIN
select DISTINCT(select count(detalle_respuesta) from respuesta where detalle_respuesta='si' and encuesta_id_encuesta=6) as si, (select count(detalle_respuesta) from respuesta where detalle_respuesta='no' and encuesta_id_encuesta=6) as no from respuesta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas_remanente` ()  BEGIN
select DISTINCT(select count(detalle_respuesta) from respuesta where detalle_respuesta='si' and encuesta_id_encuesta=2) as si, (select count(detalle_respuesta) from respuesta where detalle_respuesta='no' and encuesta_id_encuesta=2) as no from respuesta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas_usuario` (IN `usuarioIdVar` INT)  BEGIN
select count(*) from respuesta where usuario_id_usuario=usuarioIdVar;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas_usuario_no` (IN `usuarioIdVar` INT)  BEGIN
select count(*) from respuesta where detalle_respuesta='no' and usuario_id_usuario=usuarioIdVar; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_total_respuestas_usuario_si` (IN `usuarioIdVar` INT)  BEGIN
select count(*) from respuesta where detalle_respuesta='si' and usuario_id_usuario=usuarioIdVar;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_validar` (IN `idencu` INT, IN `iduser` INT)  BEGIN
select validar(idencu,iduser);
END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `validar` (`idencu` INT, `iduser` INT) RETURNS CHAR(1) CHARSET utf8 BEGIN
    DECLARE variable CHAR(1);
    DECLARE cantidad INT;
    DECLARE cursorRespuesta CURSOR FOR select count(detalle_respuesta) from respuesta where encuesta_id_encuesta=idencu and usuario_id_usuario=iduser;
    
    OPEN cursorRespuesta; 
    REPEAT
    FETCH cursorRespuesta into cantidad;
    IF cantidad =1 THEN 
    SET variable = '1';
    ELSE SET variable = '2';
    END IF;
    UNTIL cantidad END REPEAT;
	RETURN variable;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `fecha` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `mensaje` varchar(1000) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id_encuesta` int(11) NOT NULL,
  `nombre_encuesta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id_encuesta`, `nombre_encuesta`) VALUES
(1, 'Item Fijar Cuota Social'),
(2, 'Item Distribucion de Remanente'),
(4, 'Item Fijar Asignación de Consejeros'),
(5, 'Item Auditoria Externa'),
(6, 'Item Memoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `encuesta_id_encuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `pregunta`, `encuesta_id_encuesta`) VALUES
(2, '¿Usted esta de acuerdo con Distrubución?', 2),
(3, '¿Usted esta de acuerdo con Asignacion?', 4),
(4, '¿Usted esta de acuerdo con Cuota?', 1),
(5, '¿Usted esta de acuerdo con Memoria?', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_respuesta` int(11) NOT NULL,
  `detalle_respuesta` varchar(2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `pregunta_id_pregunta` int(11) NOT NULL,
  `encuesta_id_encuesta` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_respuesta`, `detalle_respuesta`, `fecha`, `pregunta_id_pregunta`, `encuesta_id_encuesta`, `usuario_id_usuario`) VALUES
(2, 'si', '2020-03-31 15:53:30', 2, 2, 1),
(3, 'no', '2020-03-31 15:53:35', 4, 1, 1),
(4, 'no', '2020-03-31 15:53:40', 3, 4, 1),
(10, 'si', '2020-03-31 17:17:14', 5, 6, 1),
(17, 'si', '2020-03-31 19:43:33', 5, 6, 4),
(18, 'no', '2020-03-31 19:45:38', 2, 2, 4),
(19, 'no', '2020-03-31 19:46:11', 4, 1, 4),
(20, 'no', '2020-03-31 19:46:25', 3, 4, 4),
(27, 'si', '2020-04-01 13:23:39', 5, 6, 2),
(28, 'no', '2020-04-01 20:12:27', 2, 2, 2),
(29, 'si', '2020-04-01 20:13:38', 4, 1, 2),
(30, 'no', '2020-04-06 14:44:57', 3, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `rut` varchar(8) NOT NULL,
  `dv` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contrasena`, `email`, `rut`, `dv`) VALUES
(1, 'nicolas', '123456', 'nicousm46@gmail.com', '18817532', '5'),
(2, 'javiera', '123456', 'javiera@gmail.com', '19406828', 'k'),
(3, 'admin', 'admin', 'admin@gmail.com', '12345678', '9'),
(4, 'juan', '123456', 'juan@gmail.com', '12345678', '9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `fk_chat_usuario1_idx` (`usuario_id_usuario`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_encuesta`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `fk_pregunta_encuesta1_idx` (`encuesta_id_encuesta`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `fk_respuesta_pregunta1_idx` (`pregunta_id_pregunta`),
  ADD KEY `fk_respuesta_encuesta1_idx` (`encuesta_id_encuesta`),
  ADD KEY `fk_respuesta_usuario1_idx` (`usuario_id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_chat_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `fk_pregunta_encuesta1` FOREIGN KEY (`encuesta_id_encuesta`) REFERENCES `encuesta` (`id_encuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_respuesta_encuesta1` FOREIGN KEY (`encuesta_id_encuesta`) REFERENCES `encuesta` (`id_encuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_respuesta_pregunta1` FOREIGN KEY (`pregunta_id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_respuesta_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2021 a las 02:15:13
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `descripcionc` varchar(150) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `isbn` varchar(14) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `numpag` int(10) NOT NULL,
  `edicion` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `anio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `descripcionc`, `imagen`, `descripcion`, `isbn`, `editorial`, `numpag`, `edicion`, `pais`, `anio`) VALUES
(1, 'La chica de nieve', 'Javier Castillo', '¿Dónde está Kiera Templeton? Nueva York, 1998, cabalgata de Acción de Gracias. Kiera Templeton, desaparece entre la multitud. Tras una...', '1615441432_b6e033dbe7f4482e27bf.jpg', 'Una niña de tres años desaparecida. ¿Dónde está Kiera Templeton? Nueva York, 1998, cabalgata de Acción de Gracias. Kiera Templeton, desaparece entre la multitud. Tras una búsqueda frenética por toda la ciudad, alguien encuentra unos mechones de pelo junto a la ropa que llevaba puesta la pequeña. En 2003, el día que Kiera habría cumplido ocho años, sus padres, Aaron y Grace Templeton, reciben en casa un extraño paquete: una cinta VHS con la grabación de un minuto de Kiera jugando en una habitación desconocida. Tras vender más de 650.000 ejemplares de sus anteriores novelas, Javier Castillo vuelve a poner en jaque la cordura conLa chica de nieve,un oscuro viaje a las profundidades de Miren Triggs, una estudiante de periodismo que inicia una investigación paralela y descubre que tanto su vida como la de Kiera están llenas de incógnitas.', '9788491292661', 'SUMA', 512, 'Kindle', 'México', '2020'),
(2, 'Romeo y Julieta', 'William Shakespeare', 'Una de las mejores obras de la literatura universal, que nos habla de una historia de amor que sin embargo genera violencia...', '1615409515_744cab5cc9f949d86c66.jpg', 'Una de las mejores obras de la literatura universal, que nos habla de una historia de amor que sin embargo genera violencia. Romeo y Julieta se enamoran y, sin embargo, sus familias, los Montesco y los Capuleto, se oponen a su relación. Ellos se irán a vivir juntos a pesar de las protestas de su entorno, lo que acabará provocando una tragedia. Magistral obra, epítome del amor juvenil, que presume de un lenguaje excepcional.', '9788420651408', 'Espasa Calpe, S.A.', 192, 'Primera edición', 'Reino de Inglaterra', '1597'),
(3, 'Fahrenheit 451', 'Ray Bradbury', '¿Ciencia ficción? ¿Realidad? \'Fahrenheit 451\' no es un libro fácil de leer, porque nos lleva a una situación que no tiene nada de fantástica...', '1615415374_c6fcc4fda90cbd4a84ae.jpg', '¿Ciencia ficción? ¿Realidad? \'Fahrenheit 451\' no es un libro fácil de leer, porque nos lleva a una situación que no tiene nada de fantástica. Estamos en un país donde no se puede leer. De hecho, el trabajo del bombero Montag, el protagonista, no es apagar incendios, sino provocarlos. Se dedica a quemar libros para evitar que la población piense y se la pueda manipular; ya lo decían los romanos: \"Panem et circenses\".', '9781451673319', 'Ballantine Books', 159, 'Conmemorativa', 'Estados Unidos', '1953'),
(4, 'Lo que el viento se llevó', 'Margaret Mitchell', 'Si te gusta la película, es imprescindible que leas la obra original de Margaret Mitchell en la que se inspiró. Es un novelón y sí, hay que decir...', '1615520694_15fae379a2cccb735a00.jpg', 'Si te gusta la película, es imprescindible que leas la obra original de Margaret Mitchell en la que se inspiró. Es un novelón y sí, hay que decirlo, es mucho mejor que el filme de Victor Fleming y George Cukor. El personaje de Escarlata O\'Hara tiene muchos más matices y aparecen muchos segmentos de la historia que conoces que no fueron adaptados.', '9788496778450', 'B De Bolsillo', 984, 'Primera edición', 'Estados Unidos', '1941'),
(5, 'Agnes Gray', 'Anne Brontë', '“¡Qué maravilloso sería convertirse en una institutriz! Salir al mundo...ganar mi propio sustento... ¡Enseñar a madurar a los jóvenes!\"....', '1615565586_69dec77785e9af1d72a5.jfif', '“¡Qué maravilloso sería convertirse en una institutriz! Salir al mundo...ganar mi propio sustento... ¡Enseñar a madurar a los jóvenes!” Éste es el sueño de la hija de un modesto vicario, un ideal de independencia económica y personal, y de entrega a una noble tarea como la educación.', '9788491048954', 'Alianza Editorial', 272, 'Primera edición', 'Reino Unido', '1847'),
(6, 'Se regalan dudas', 'Lety S y Ashley F', 'Tenemos tantas dudas que te las queremos regalar. Lety Sahagún y Ashley Frangie, las creadoras del podcast más seguido de México y uno de los...', '1615565800_5a0526a9612444540e60.jfif', 'Tenemos tantas dudas que te las queremos regalar. Lety Sahagún y Ashley Frangie, las creadoras del podcast más seguido de México y uno de los más escuchados de habla hispana, Se Regalan Dudas, nos comparten sus reflexiones, las de cientos de personas de su auditorio y las de autores que admiran, sobre algunas creencias y temas tabú que tanto nos inquietan en relación con el amor, la sexualidad, las relaciones, el cuerpo, la fe, el miedo, el éxito y mucho más.', '9786073196895', 'GRIJALBO', 306, 'Primera edición', 'México', '2020'),
(7, 'La razón de estar contigo', 'W. Bruce Cameron', 'Reconfortante, profunda y repleta de momentos de felicidad y risas, La razón de estar contigo no es tan solo la historia emotiva de las múltiples...', '1615566837_9d1863b8bf854a870a3a.jfif', 'Reconfortante, profunda y repleta de momentos de felicidad y risas, La razón de estar contigo no es tan solo la historia emotiva de las múltiples vidas de un perro, es también la narración de las relaciones de los humanos vistas desde los ojos de un perro y de los inquebrantables lazos que existen entre el hombre y su mejor amigo.', '9788416867219', 'Roca Editorial', 340, 'Primera edición', 'Estados Unidos', '2017'),
(8, 'After', 'Anna Toddoct ', 'Hubo un tiempo antes de que Tessa conociera a Hardin, y luego está todo DESPUÉS... La vida nunca volverá a ser la misma. Tessa es una buena chica...', '1615567111_bbffb269c98f2c1598ec.jfif', 'Hubo un tiempo antes de que Tessa conociera a Hardin, y luego está todo DESPUÉS... La vida nunca volverá a ser la misma. Tessa es una buena chica con un novio dulce y confiable en casa. Tiene dirección, ambición y una madre que tiene la intención de mantenerla así.', '9788408133537', 'Gallery Publishing Group', 352, 'Primera edición', 'España', '2014');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

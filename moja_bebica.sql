-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 09:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moja_bebica`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `idSlika` int(3) NOT NULL,
  `alt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `src` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`idSlika`, `alt`, `src`) VALUES
(1, 'slika1', 'assets/img/gal1.png'),
(2, 'slika2', 'assets/img/gal2.png'),
(3, 'slika3', 'assets/img/gal3.png'),
(4, 'slika4', 'assets/img/gal4.png'),
(5, 'slika5', 'assets/img/gal5.png'),
(6, 'slika6', 'assets/img/gal6.png');

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE `meni` (
  `idMeni` int(3) NOT NULL,
  `href` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`idMeni`, `href`, `naziv`, `priority`) VALUES
(1, '#mu-slider', 'HOME', 0),
(2, '#mu-about-us', 'ABOUT US', 0),
(3, '#mu-restaurant-menu', 'MENU', 0),
(4, '#mu-gallery', 'GALLERY', 0),
(5, '#mu-chef', 'OUR CHEF', 0),
(6, '#mu-contact', 'CONTACT', 0),
(7, 'admin.php', 'ADMIN', 0),
(8, 'register.php', 'REGISTER', 1),
(9, 'login.php', 'LOG IN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `idProizvod` int(3) NOT NULL,
  `proizvodNaziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cena` int(5) NOT NULL,
  `src` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`idProizvod`, `proizvodNaziv`, `cena`, `src`, `alt`, `opis`) VALUES
(1, 'BurgerSplaSh', 6, 'assets/img/item-1.jpg', 'sl1', 'Splash of tasty food'),
(2, 'Cezar salad', 16, 'assets/img/item-2.jpg', 'sl2', 'Crunchy chicken'),
(3, 'FriedChickenS', 11, 'assets/img/item-3.jpg', 'sl3', 'Chill with chicken'),
(4, 'FishSplax', 6, 'assets/img/item-4.jpg', 'sl4', 'Fish lovers favourite'),
(5, 'DoubleCheeseHam', 8, 'assets/img/item-5.jpg', 'sl5', 'Fully taste of german cheese'),
(6, 'Hfish', 5, 'assets/img/item-6.jpg', 'sl6', 'Fish with tzaziki'),
(7, 'CrunchySalad', 6, 'assets/img/item-7.jpg', 'sl7', 'Fully flavour chicken'),
(8, 'GrilledChickenMix', 7, 'assets/img/item-8.jpg', 'sl8', 'Mixed salad chicken nuggets'),
(28, 'FriedChickenSjhhhh', 56, 'assets/img/item-3.jpg', 'slika3', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(3) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `name`) VALUES
(1, 'korisnik'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `slajder`
--

CREATE TABLE `slajder` (
  `idSlajder` int(3) NOT NULL,
  `src` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `naslovI` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slajder`
--

INSERT INTO `slajder` (`idSlajder`, `src`, `alt`, `naslov`, `naslovI`) VALUES
(1, 'assets/img/1.jpg', 'img1', 'Welcome', 'TO THE HUMGER'),
(2, 'assets/img/2.jpg', 'img2', 'Delicious', 'HAMBURGERS AND SALADS'),
(3, 'assets/img/3.jpg', 'img3', 'The Real', 'GOOD FOOD');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(3) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `idRole` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `firstname`, `lastname`, `username`, `password`, `email`, `date`, `idRole`) VALUES
(4, 'Petar', 'Savic', 'pero11', 'pero11p', 'petar_peric@gmail.com', '2019-04-17 22:00:00.000000', 1),
(5, 'Milica', 'Stanic', 'micika45', '9ecbe87241b8d01373c282797cd14f', 'milica@hotmail.com', '2019-04-18 01:16:16.171179', 1),
(6, 'Zoran', 'Vitorovic', 'zoleeee67', 'b05dd4ac9ee410db9c8a8370654ed5', 'zole@gml.com', '2019-04-18 11:30:43.921531', 1),
(7, 'Sofija', 'Vitorovic', 'sofi6', 'sole0610', 'sofija_vitorovic@hotmail.com', '2019-04-17 22:00:00.000000', 2),
(8, 'Milisav', 'Spasic', 'miki_23', '5f372d4be78bb078a020708b0f2978', 'ah@hotmail.com', '2019-04-18 21:00:42.180434', 1),
(9, 'Filip', 'Minic', 'filip_123', '0192023a7bbd73250516f069df18b5', 'filip@gmail.com', '2019-04-19 08:14:07.388983', 1),
(22, 'Lukica', 'Bekic', 'spaaaa_34', '0e63b63066a067fb201eac8cf0f378', 'a@hmail.com', '2019-04-21 18:49:21.652805', 1),
(23, 'Lukica', 'Bekic', 'spaaaa_34', '0e63b63066a067fb201eac8cf0f378', 'a@hmail.com', '2019-04-21 18:49:24.428717', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`idSlika`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
  ADD PRIMARY KEY (`idMeni`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`idProizvod`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `slajder`
--
ALTER TABLE `slajder`
  ADD PRIMARY KEY (`idSlajder`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `idSlika` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
  MODIFY `idMeni` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `idProizvod` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slajder`
--
ALTER TABLE `slajder`
  MODIFY `idSlajder` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

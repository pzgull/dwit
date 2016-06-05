-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2016 at 09:11 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'Art'),
(2, 'Crafting'),
(3, 'Cooking'),
(4, 'Dance'),
(5, 'Gaming'),
(6, 'Musical'),
(7, 'Sport'),
(8, 'Wtf');

-- --------------------------------------------------------

--
-- Table structure for table `defi`
--

CREATE TABLE IF NOT EXISTS `defi` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT './assets/img/challenge.jpg',
  `success` int(11) NOT NULL DEFAULT '0',
  `failed` int(11) NOT NULL DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0',
  `id_categorie` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `defi`
--

INSERT INTO `defi` (`id`, `titre`, `description`, `img`, `success`, `failed`, `like`, `id_categorie`, `date`, `author`) VALUES
(1, 'Recyclage', 'Prendre des canettes vides et en faire une Å“uvre d''art', './assets/img/recyclage.jpg', 0, 0, 0, 1, '2016-06-05 20:00:56', 'jean'),
(3, 'Plat de notre enfance', 'Cuisiner un plat de votre enfance.\r\n-Poster la photo\r\n-Poster la recette\r\n', './assets/img/enfance.jpg', 0, 0, 0, 3, '2016-06-05 20:22:04', 'jean'),
(5, 'Ikea', 'Monter un meuble ikea en moins de 20 minutes.', './assets/img/ikea.jpg', 0, 0, 0, 2, '2016-06-05 20:24:54', 'vincent'),
(6, 'Running man', 'Appelez un de vos potes. Mettez Ã  fond le dansant "My Boo" de Ghost Town DJ''s, tube des annÃ©es 90, faites semblant de courir sur place en vous trÃ©moussant, les coudes pliÃ©s, en rythme avec la musique. Ã‡a y est, vous Ãªtes prÃªt pour participer au "Running Man Challenge". ', './assets/img/running.gif', 0, 0, 0, 4, '2016-06-05 20:35:33', 'vincent'),
(7, 'Portal', 'Finir Portal en moins de 20 minutes.', './assets/img/portal.png', 0, 0, 0, 5, '2016-06-05 20:42:20', 'vincent'),
(8, 'He''s a pirate', 'Jouer "he''s a pirate" au piano ou Ã  la guitare.\r\nLes yeux bander au piano ou la guitare derriÃ¨re la tÃªte.', './assets/img/pirate.jpg', 0, 0, 0, 6, '2016-06-05 20:48:04', 'jean'),
(9, 'Jump', 'Passer le mur du son en chute libre.', './assets/img/jump.jpg', 0, 0, 0, 7, '2016-06-05 20:52:29', 'jean'),
(10, 'TV', 'Passer Ã  la tÃ©lÃ©vision sur m6.', './assets/img/capital.jpg', 0, 0, 0, 8, '2016-06-05 21:00:14', 'jean'),
(11, 'Project Manager', 'Ã‰tre un bon chef de projet.', './assets/img/chef.jpg', 0, 0, 0, 8, '2016-06-05 21:02:57', 'jean');

-- --------------------------------------------------------

--
-- Table structure for table `defi_user`
--

CREATE TABLE IF NOT EXISTS `defi_user` (
  `id_user` int(11) NOT NULL,
  `id_defi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `defi_user`
--

INSERT INTO `defi_user` (`id_user`, `id_defi`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`, `right`) VALUES
(1, 'jean', 'jean', 1),
(2, 'vincent', 'vincent', 0),
(3, 'vincent', 'vincent', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `defi`
--
ALTER TABLE `defi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `defi`
--
ALTER TABLE `defi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

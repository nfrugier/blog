-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Nov 08, 2019 at 11:47 AM
-- Server version: 5.7.28
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `id_author` int(100) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci DEFAULT NULL,
  `date_publication` datetime DEFAULT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_swedish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `id_author`, `id_cat`, `subject`, `date_publication`, `message`) VALUES
(1, 1, 1, 'Lorem title', '2019-11-07 00:00:00', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(2, 1, 1, 'Lorem 2', '2019-11-07 00:00:00', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"'),
(3, 1, 2, 'Lorem 3, yolo', '2019-11-07 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi suscipit enim ac ultricies commodo. Proin tincidunt scelerisque eros, et sagittis dui maximus ac. Nulla nulla odio, hendrerit sit amet vestibulum et, vehicula eu augue. Phasellus vitae urna convallis, volutpat eros ac, vehicula eros. Proin sit amet nibh vitae enim posuere tincidunt. Nunc consequat nisi nisi. Fusce lacus eros, ultrices sit amet ligula vitae, egestas pulvinar dolor. Cras volutpat elementum nisi, eu sagittis enim interdum et. Ut pulvinar pharetra pellentesque. Etiam feugiat fringilla rutrum. Proin vitae lobortis lacus.\r\n\r\nSed erat tortor, vestibulum ut metus non, vestibulum faucibus ligula. Pellentesque tincidunt risus elit, vel mollis diam tempus aliquam. Aliquam aliquam elementum sollicitudin. Praesent at purus efficitur, varius justo quis, viverra libero. Phasellus vel sollicitudin leo, vel ullamcorper nulla. Nam ultricies pretium aliquet. Morbi ut quam id purus molestie blandit in ultrices nulla. Morbi nec magna eu turpis cursus imperdiet. Morbi enim nunc, pellentesque non nunc vel, iaculis sodales dui. In at volutpat magna. Fusce mi quam, lobortis vel massa non, elementum tristique nisi. Nunc interdum, ante rutrum sollicitudin semper, dui libero sagittis nibh, in lobortis sapien nulla non nisi. Duis vel tincidunt ligula. Pellentesque vestibulum eget diam vitae porttitor. Aliquam vitae augue nunc. Proin sed accumsan turpis.\r\n\r\nDonec tempor ipsum enim, in tristique urna ultricies eget. Nam vitae libero arcu. Nullam tempor lacus quis magna efficitur tempor. Maecenas vulputate, ante ut scelerisque egestas, purus mi lobortis nibh, ut ultricies quam risus non nisi. In et felis vel ligula consequat vestibulum. In augue leo, aliquet pulvinar sollicitudin sed, condimentum nec mi. Mauris leo odio, tincidunt vel lectus vel, gravida congue mauris. Pellentesque egestas eros a nulla imperdiet accumsan vel et mi. Nulla efficitur erat quis fermentum finibus. Morbi finibus tortor nec ex viverra elementum. Donec id sem aliquet, auctor lectus vitae, mattis turpis. Nulla ex sapien, lobortis at magna vitae, congue molestie velit. Sed ac porta elit. Curabitur commodo molestie neque at aliquet. Vivamus volutpat scelerisque nibh.\r\n\r\nVivamus lacus eros, aliquet nec metus ut, rhoncus tincidunt tortor. Integer convallis semper sem, euismod molestie eros molestie eu. Maecenas dui ligula, efficitur vitae massa in, auctor suscipit lacus. Curabitur volutpat suscipit fermentum. Vestibulum ornare accumsan vestibulum. Proin semper mollis risus ac imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam tincidunt sodales pulvinar. Morbi sed arcu eu metus suscipit euismod vel eu urna. Vivamus viverra varius augue, ac auctor urna tincidunt id. Donec euismod viverra metus, eu fermentum sapien porttitor eget. Suspendisse potenti. Nullam ut nunc condimentum, accumsan quam porttitor, ornare augue. Nam posuere enim at rutrum pulvinar.\r\n\r\nNulla enim libero, egestas eget tempus non, pulvinar eu quam. Vestibulum tincidunt aliquam lorem ac finibus. Etiam non finibus mi. Phasellus tellus felis, tristique hendrerit dolor non, volutpat volutpat orci. Ut pulvinar lectus id venenatis auctor. Quisque aliquam ut libero nec scelerisque. Aenean sollicitudin magna vitae nisl auctor consectetur.'),
(4, 1, 3, 'Sujet de test, encore', '2019-11-07 00:00:00', 'Plop'),
(5, 7, 1, 'Sujet', '2019-11-08 10:46:49', '        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();        $stmt->debugDumpParams();'),
(6, 7, 2, 'j\'ai pas d\'idÃ©e', '2019-11-08 11:14:36', '&Ã©\"\'(--Ã Ã¨_Ã§Ã Ã¨_Ã©(-Ã¨_Ã§Ã )Ã =)'),
(7, 7, 4, 'boom', '2019-11-08 11:19:23', 'áƒ¡áƒáƒ‘áƒ”áƒ­áƒ“áƒ˜ áƒ“áƒ áƒ¢áƒ˜áƒžáƒáƒ’áƒ áƒáƒ¤áƒ˜áƒ£áƒšáƒ˜ áƒ˜áƒœáƒ“áƒ£áƒ¡áƒ¢áƒ áƒ˜áƒ˜áƒ¡ áƒ£áƒ¨áƒ˜áƒœáƒáƒáƒ áƒ¡áƒ áƒ¢áƒ”áƒ¥áƒ¡áƒ¢áƒ˜áƒ. áƒ˜áƒ’áƒ˜ áƒ¡áƒ¢áƒáƒœáƒ“áƒáƒ áƒ¢áƒáƒ“ 1500-áƒ˜áƒáƒœáƒ˜ áƒ¬áƒšáƒ”áƒ‘áƒ˜áƒ“áƒáƒœ áƒ˜áƒ¥áƒªáƒ, áƒ áƒáƒ“áƒ”áƒ¡áƒáƒª áƒ£áƒªáƒœáƒáƒ‘áƒ›áƒ áƒ›áƒ‘áƒ”áƒ­áƒ“áƒáƒ•áƒ›áƒ áƒáƒ›áƒ¬áƒ§áƒáƒ‘ áƒ“áƒáƒ–áƒ’áƒáƒ–áƒ” áƒ¬áƒ˜áƒ’áƒœáƒ˜áƒ¡ áƒ¡áƒáƒªáƒ“áƒ”áƒšáƒ˜ áƒ”áƒ’áƒ–áƒ”áƒ›áƒžáƒšáƒáƒ áƒ˜ áƒ“áƒáƒ‘áƒ”áƒ­áƒ“áƒ. áƒ›áƒ˜áƒ¡áƒ˜ áƒ¢áƒ”áƒ¥áƒ¡áƒ¢áƒ˜ áƒáƒ áƒáƒ›áƒáƒ áƒ¢áƒ 5 áƒ¡áƒáƒ£áƒ™áƒ£áƒœáƒ˜áƒ¡ áƒ›áƒáƒœáƒ«áƒ˜áƒšáƒ–áƒ” áƒ¨áƒ”áƒ›áƒáƒ áƒ©áƒ, áƒáƒ áƒáƒ›áƒ”áƒ“ áƒ›áƒáƒœ áƒ“áƒ¦áƒ”áƒ›áƒ“áƒ”, áƒ”áƒšáƒ”áƒ¥áƒ¢áƒ áƒáƒœáƒ£áƒšáƒ˜ áƒ¢áƒ˜áƒžáƒáƒ’áƒ áƒáƒ¤áƒ˜áƒ˜áƒ¡ áƒ“áƒ áƒáƒ›áƒ“áƒ”áƒª áƒ£áƒªáƒ•áƒšáƒ”áƒšáƒáƒ“ áƒ›áƒáƒáƒ¦áƒ¬áƒ˜áƒ. áƒ’áƒáƒœáƒ¡áƒáƒ™áƒ£áƒ—áƒ áƒ”áƒ‘áƒ£áƒšáƒ˜ áƒžáƒáƒžáƒ£áƒšáƒáƒ áƒáƒ‘áƒ áƒ›áƒáƒ¡ 1960-áƒ˜áƒáƒœ áƒ¬áƒšáƒ”áƒ‘áƒ¨áƒ˜ áƒ’áƒáƒ›áƒáƒ¡áƒ£áƒšáƒ›áƒ Letraset-áƒ˜áƒ¡ áƒªáƒœáƒáƒ‘áƒ˜áƒšáƒ›áƒ áƒ¢áƒ áƒáƒ¤áƒáƒ áƒ”áƒ¢áƒ”áƒ‘áƒ›áƒ áƒ›áƒáƒ£áƒ¢áƒáƒœáƒ, áƒ£áƒ¤áƒ áƒ áƒ›áƒáƒ’áƒ•áƒ˜áƒáƒœáƒ”áƒ‘áƒ˜áƒ— áƒ™áƒ˜ â€” Aldus PageMaker-áƒ˜áƒ¡ áƒ¢áƒ˜áƒžáƒ˜áƒ¡ áƒ¡áƒáƒ’áƒáƒ›áƒáƒ›áƒªáƒ”áƒ›áƒšáƒ áƒžáƒ áƒáƒ’áƒ áƒáƒ›áƒ”áƒ‘áƒ›áƒ, áƒ áƒáƒ›áƒšáƒ”áƒ‘áƒ¨áƒ˜áƒª Lorem Ipsum-áƒ˜áƒ¡ áƒ¡áƒ®áƒ•áƒáƒ“áƒáƒ¡áƒ®áƒ•áƒ áƒ•áƒ”áƒ áƒ¡áƒ˜áƒ”áƒ‘áƒ˜ áƒ˜áƒ§áƒ áƒ©áƒáƒ¨áƒ”áƒœáƒ”áƒ‘áƒ£áƒšáƒ˜.'),
(8, 8, 3, 'Je suis le meilleur', '2019-11-08 11:24:27', 'Ou pas.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `name`) VALUES
(1, 'Développement'),
(2, 'Divers'),
(3, 'Guillaume Jouve'),
(4, 'Proctologie');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `login`, `email`, `passwd`) VALUES
(1, 'Test', 'test@test.ts', '1234'),
(6, 'Machin', 'machin@truc.fr', 'azer'),
(7, 'Nicolas', 'nicolas@email.com', 'azer'),
(8, 'JÃ©rÃ´me', 'j@r.om', 'aze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `id_article` (`id_article`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

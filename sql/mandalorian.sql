-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 juin 2021 à 15:36
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mandalorian`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `linkimage` varchar(256) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `message`, `linkimage`, `date`) VALUES
(17, 'The Mandalorian, le making-off du tournage', '&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot; style=&quot;background-color: rgb(255, 255, 0);&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et orci venenatis, consequat nulla a, egestas quam. Praesent ullamcorper odio at tellus facilisis, nec venenatis nisl tempor. Praesent eu consequat lectus. Curabitur id viverra nibh. Praesent ac nibh sed mauris bibendum vehicula a eget neque. Maecenas dignissim nisl velit, eu blandit magna viverra quis. Duis faucibus interdum gravida. Ut vitae orci cursus, dictum dolor ut, vehicula sapien. Vestibulum eu quam at metus posuere hendrerit vitae id dui. Nunc ac euismod nibh. Vivamus viverra tincidunt sagittis. Sed semper ipsum ac nisl cursus semper. Nam vestibulum ut ex molestie hendrerit.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;Sed venenatis volutpat vestibulum. Vestibulum nec augue et eros ultricies sagittis et sit amet dui. Curabitur aliquet orci a ipsum semper, eget suscipit eros dignissim. Mauris fermentum mauris ac elit lacinia, quis pharetra justo bibendum. Duis hendrerit luctus elit, a finibus nulla hendrerit quis. Vivamus eget aliquam turpis, eu vehicula ante. Proin laoreet nibh orci, sit amet dapibus quam accumsan et. Phasellus ornare aliquam metus et sagittis. Pellentesque efficitur vitae urna in porta. Pellentesque scelerisque orci ac ante dapibus tempus. Nam posuere felis sed ex tristique, et lacinia nunc feugiat. Nam imperdiet vel ante eget vehicula. Maecenas orci augue, efficitur eget magna in, imperdiet facilisis nisl.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;&lt;b&gt;Aenean in mauris ultricies ex bibendum porttitor. Maecenas tempus, magna quis laoreet consequat, lacus tortor imperdiet tellus, ac venenatis ipsum augue vel nisl. Aenean in mollis enim. Suspendisse potenti. In posuere sagittis diam, sed mattis sem rhoncus eu. Pellentesque blandit dolor ut leo aliquam, eu dictum nulla vestibulum. Sed et varius augue. Etiam quis semper libero. In ut varius lectus.&lt;/b&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;&lt;u&gt;Quisque sit amet risus eget mi aliquam blandit. Mauris interdum pellentesque est eu ultrices. Maecenas non sapien malesuada leo sagittis pulvinar. Integer elementum volutpat lacus nec hendrerit. Proin et tortor ac arcu tincidunt sodales. Curabitur luctus consectetur suscipit. In turpis lacus, facilisis ut lacus rutrum, rhoncus maximus arcu. Aliquam mattis consequat iaculis. Praesent nec rutrum arcu. Etiam id ex congue, suscipit nunc ac, imperdiet ligula. Nam ex nulla, luctus sed lorem vehicula, consectetur cursus libero. Nam eu ullamcorper massa. Praesent tincidunt, diam ut vestibulum ultricies, lacus nunc gravida massa, sit amet dapibus lorem elit a tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;&lt;/u&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;Integer interdum elit nec posuere accumsan. Curabitur eu lacus vehicula, eleifend enim ut, ultricies arcu. Nam hendrerit ornare orci, non venenatis lacus rhoncus sed. Donec sit amet nulla orci. Aenean porttitor id neque quis vestibulum. Nullam malesuada velit arcu, quis mollis mi egestas vel. Nunc porta tellus turpis, nec hendrerit lacus hendrerit non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;&lt;/font&gt;&lt;/p&gt;', 'image/serie1.jpg', '2021-06-02 19:47:18'),
(23, 'The Mandalorian, le making-off du tournage', '&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot; style=&quot;background-color: rgb(255, 255, 0);&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et orci venenatis, consequat nulla a, egestas quam. Praesent ullamcorper odio at tellus facilisis, nec venenatis nisl tempor. Praesent eu consequat lectus. Curabitur id viverra nibh. Praesent ac nibh sed mauris bibendum vehicula a eget neque. Maecenas dignissim nisl velit, eu blandit magna viverra quis. Duis faucibus interdum gravida. Ut vitae orci cursus, dictum dolor ut, vehicula sapien. Vestibulum eu quam at metus posuere hendrerit vitae id dui. Nunc ac euismod nibh. Vivamus viverra tincidunt sagittis. Sed semper ipsum ac nisl cursus semper. Nam vestibulum ut ex molestie hendrerit.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;Sed venenatis volutpat vestibulum. Vestibulum nec augue et eros ultricies sagittis et sit amet dui. Curabitur aliquet orci a ipsum semper, eget suscipit eros dignissim. Mauris fermentum mauris ac elit lacinia, quis pharetra justo bibendum. Duis hendrerit luctus elit, a finibus nulla hendrerit quis. Vivamus eget aliquam turpis, eu vehicula ante. Proin laoreet nibh orci, sit amet dapibus quam accumsan et. Phasellus ornare aliquam metus et sagittis. Pellentesque efficitur vitae urna in porta. Pellentesque scelerisque orci ac ante dapibus tempus. Nam posuere felis sed ex tristique, et lacinia nunc feugiat. Nam imperdiet vel ante eget vehicula. Maecenas orci augue, efficitur eget magna in, imperdiet facilisis nisl.&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;&lt;b&gt;Aenean in mauris ultricies ex bibendum porttitor. Maecenas tempus, magna quis laoreet consequat, lacus tortor imperdiet tellus, ac venenatis ipsum augue vel nisl. Aenean in mollis enim. Suspendisse potenti. In posuere sagittis diam, sed mattis sem rhoncus eu. Pellentesque blandit dolor ut leo aliquam, eu dictum nulla vestibulum. Sed et varius augue. Etiam quis semper libero. In ut varius lectus.&lt;/b&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;&lt;u&gt;Quisque sit amet risus eget mi aliquam blandit. Mauris interdum pellentesque est eu ultrices. Maecenas non sapien malesuada leo sagittis pulvinar. Integer elementum volutpat lacus nec hendrerit. Proin et tortor ac arcu tincidunt sodales. Curabitur luctus consectetur suscipit. In turpis lacus, facilisis ut lacus rutrum, rhoncus maximus arcu. Aliquam mattis consequat iaculis. Praesent nec rutrum arcu. Etiam id ex congue, suscipit nunc ac, imperdiet ligula. Nam ex nulla, luctus sed lorem vehicula, consectetur cursus libero. Nam eu ullamcorper massa. Praesent tincidunt, diam ut vestibulum ultricies, lacus nunc gravida massa, sit amet dapibus lorem elit a tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;&lt;/u&gt;&lt;/font&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 15px; text-align: justify; font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px;&quot;&gt;&lt;font color=&quot;#ffffff&quot;&gt;Integer interdum elit nec posuere accumsan. Curabitur eu lacus vehicula, eleifend enim ut, ultricies arcu. Nam hendrerit ornare orci, non venenatis lacus rhoncus sed. Donec sit amet nulla orci. Aenean porttitor id neque quis vestibulum. Nullam malesuada velit arcu, quis mollis mi egestas vel. Nunc porta tellus turpis, nec hendrerit lacus hendrerit non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;&lt;/font&gt;&lt;/p&gt;', 'image/bg4.jpg', '2021-06-02 19:47:18');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `name`, `message`, `date`) VALUES
(1, 'Elyes', 'test', '2021-06-03 15:31:33');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `prenom`, `nom`, `email`, `message`, `date`) VALUES
(7, 'elyes', 'voisin', 'elyesvoisin@gmail.com', 'ceci est un test', '2021-06-03 14:46:49');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(30) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `email`, `password`, `date`, `role`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$fBHVwuPcOWNkcG4Gk0HDBuh6l3uFcFF4G.UHrtkgSFqJR.xswk09O', '2021-05-31 20:09:30', 'admin'),
(4, 'editor', 'editor@gmail.com', '$2y$10$iokbxxz7ce.acoaY5adXy.QMi0wWsnrZaxKTWoPDSWgKPMsUx7NTG', '2021-05-31 20:22:33', 'editor'),
(10, 'elyes', 'voisin@gmail.com', '$2y$10$ISEuHdkXPcA.YI8sAbvuzu7mcnZgPD.WJp2aaFJXL4ehPwq2ugWEm', '2021-06-01 16:42:07', 'editor'),
(14, 'adel', 'adel@gmail.com', '$2y$10$3HYPKYDUz2o.7AUWbVmMfODpBNcwxbLGkUGPru2txycRW/a3cz4Pq', '2021-06-01 16:58:29', 'admin'),
(12, 'antoine', 'antoine@gmail.com', '$2y$10$k4vcRSYoYumfQbtalzYYeunnCLMi6UXks.fhtNfmXJDiObJauJ8BS', '2021-06-01 16:56:20', 'editor'),
(17, 'dirion', 'eldirion@gmail.com', '$2y$10$AXWPg2tMQ16hfD7lQf8Gs.gLQdbx.LYCMTsOv2KR.2eMVukkPm.Ji', '2021-06-02 11:00:44', 'editor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

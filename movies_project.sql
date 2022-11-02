-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 nov. 2022 à 11:44
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `movies_project`
--
CREATE DATABASE IF NOT EXISTS `movies_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `movies_project`;

-- --------------------------------------------------------

--
-- Structure de la table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('male','femalle') NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `directors`
--

INSERT INTO `directors` (`id`, `first_name`, `last_name`, `gender`, `nationality`, `birth_date`) VALUES
(1, 'Baltasar', ' Kormákur', 'male', 'Iceland', '1966-02-27'),
(2, 'Julius ', 'Avery', 'male', 'Australian', '1978-04-07'),
(3, 'joseph', 'kosinski', 'male', 'USA', '1974-05-03'),
(4, 'PAUL THOMAS ', 'ANDERSON ', 'male', 'USA', '1970-06-26'),
(5, 'MATT ', 'REEVES', 'male', 'USA', '1966-04-27');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descreption` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `descreption`, `poster`, `release_date`, `director_id`) VALUES
(7, 'Le Samaritain', 'Synopsis. Âgé de 13 ans, Sam Cleary suspecte que son mystérieux et solitaire voisin, Mr. Smith, soit en réalité une légende qui se cache au grand jour. Il y a 25 ans, le superpuissant justicier de Granite City, Le Samaritain, a été déclaré mort dans un entrepôt, après un combat tragique avec son rival, Nemesis.', 'https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/001/442/samaritan-affiche-francaise-1442088.jpeg', '2022-08-26', 2),
(8, 'BEAST ', 'The film stars Idris Elba, Iyana Halley, Leah Sava Jeffries, and Sharlto Copley. It follows a widowed father and his two teenage daughters who visit a South African game reserve, but must fight to survive when they are stalked and attacked by a ferocious, rogue, bloodthirsty lion.', 'https://fr.web.img3.acsta.net/pictures/22/08/01/09/09/2162188.jpg', '2022-08-19', 1),
(9, 'TOP GUN ', 'The skilled, but reckless, selfish and rebel pilot Maverick and his partner Goose are assigned to go to Top Gun, a military school for top-notch pilots. Soon he has an affair with the instructor Charlie and a rivalry with Ice Man and Slider . But when Goose dies in an accident, Maverick decides to quit school.', 'https://m.media-amazon.com/images/M/MV5BZWYzOGEwNTgtNWU3NS00ZTQ0LWJkODUtMmVhMjIwMjA1ZmQwXkEyXkFqcGdeQXVyMjkwOTAyMDU@._V1_.jpg', '2022-05-27', 3),
(10, 'THERE WILL BE BLOOD ', 'A story of family, religion, hatred, oil and madness, focusing on a turn-of-the-century prospector in the early days of the business. The intersecting life stories of Daniel Plainview and Eli Sunday in early twentieth century California is presented.', 'https://m.media-amazon.com/images/I/41N77k02aIL._AC_.jpg', '2007-12-26', 4),
(11, 'THE BATMAN', 'A reclusive billionaire who obsessively protects Gotham City as a masked vigilante to cope with his traumatic past. Batman is around 30 years old and is not yet an experienced crime fighter, as director Matt Reeves wanted to explore the character before he becomes \"fully formed\".', 'https://m.media-amazon.com/images/M/MV5BMDdmMTBiNTYtMDIzNi00NGVlLWIzMDYtZTk3MTQ3NGQxZGEwXkEyXkFqcGdeQXVyMzMwOTU5MDk@._V1_FMjpg_UX1000_.jpg', '2022-03-04', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `watchlist`
--

CREATE TABLE `watchlist` (
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `director_id` (`director_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`movie_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`);

--
-- Contraintes pour la table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

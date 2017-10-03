-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 02 Octobre 2017 à 12:08
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Evaluation1`
--

-- --------------------------------------------------------

--
-- Structure de la table `bin`
--

CREATE TABLE `bin` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `name_bin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_project` varchar(255) NOT NULL,
  `text_project` text NOT NULL,
  `date_project` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `id_user`, `name_project`, `text_project`, `date_project`) VALUES
(1, 1, 'testprojet', 'bonjour', '2017-09-30'),
(2, 2, 'testprojet2', 'coucou', '2017-09-29'),
(5, 6, 'ijdi', 'jizdo', '0000-00-00'),
(9, 6, 'izkd', 'odkz', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `step`
--

CREATE TABLE `step` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `name_step` varchar(255) NOT NULL,
  `text_step` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `step`
--

INSERT INTO `step` (`id`, `id_project`, `name_step`, `text_step`) VALUES
(1, 1, 'step1', 'bonjour toi'),
(2, 2, 'step2', 'bonjour toi2'),
(3, 2, 'ko', 'zs'),
(4, 2, 'plsssss', 'j\'en peux plus'),
(8, 2, 'allez', 'allez'),
(9, 1, 'premiere', 'etape'),
(12, 5, 'zdpk', 'zdk'),
(13, 5, 'oj', 'zd'),
(22, 9, 'dozk', 'zdko');

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `id_step` int(11) NOT NULL,
  `name_task` varchar(255) NOT NULL,
  `date_task` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id`, `id_step`, `name_task`, `date_task`) VALUES
(4, 3, 'jid', '2017-09-02'),
(5, 12, 'oko', '2017-09-02'),
(6, 12, 'bonjour toi tu vas bien', '2017-09-02'),
(7, 13, 'blabla', '2017-09-02'),
(9, 1, 'uyug', '2017-09-02'),
(12, 22, 'ok', '2017-09-02');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `name_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `name`, `surname`, `age`, `mail`, `password`) VALUES
(1, '', 'test', 'test', 23, 'test', 'test'),
(2, '', 'test2', 'test2', 20, 'test2', 'test2'),
(3, 'mathieu', 'mat', 'mat', 23, 'mat@laposte.net', '73675debcd8a436be48ec22211dcf44fe0df0a64'),
(6, 'mat', 'mat', 'mat', 2, 'david1@hotmail.fr', 'cc7c5be316e48d137cbb549833b85d91034d799d'),
(7, 'test', 'test', 'test', 0, 'test@hotmail.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bin`
--
ALTER TABLE `bin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_project` (`id_project`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_project` (`id_project`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_step` (`id_step`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_project` (`id_project`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bin`
--
ALTER TABLE `bin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `step`
--
ALTER TABLE `step`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bin`
--
ALTER TABLE `bin`
  ADD CONSTRAINT `bin_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `step`
--
ALTER TABLE `step`
  ADD CONSTRAINT `step_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id`);

--
-- Contraintes pour la table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`id_step`) REFERENCES `step` (`id`);

--
-- Contraintes pour la table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id`);

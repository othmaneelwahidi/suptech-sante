-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 juin 2024 à 13:25
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `suptech_sante`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Tele` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `Nom`, `Prenom`, `Email`, `username`, `password`, `Tele`, `created_at`, `updated_at`) VALUES
(1, 'shama', 'ozn', 'shama@o.zn', 'Shama Ozn', '14121713', '0121221212', '2024-06-03 15:11:50', '2024-06-03 15:11:50');

-- --------------------------------------------------------

--
-- Structure de la table `bourses`
--

CREATE TABLE `bourses` (
  `id` int(11) NOT NULL,
  `code_inscription` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cne` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `nom_pere_complet` varchar(255) NOT NULL,
  `cin_massar` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `nom_mere_complet` varchar(255) NOT NULL,
  `profession_mere` varchar(255) NOT NULL,
  `nom_tuteur_complet` varchar(255) NOT NULL,
  `profession_tuteur` varchar(255) NOT NULL,
  `fichier_complets` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bourses`
--

INSERT INTO `bourses` (`id`, `code_inscription`, `Nom`, `email`, `cne`, `date_naissance`, `telephone`, `adresse`, `nom_pere_complet`, `cin_massar`, `profession`, `nom_mere_complet`, `profession_mere`, `nom_tuteur_complet`, `profession_tuteur`, `fichier_complets`, `created_at`, `updated_at`) VALUES
(1, '290520241da0', 'NAME tst', 'tst@shil3ba.ana', 'gb1554', '2004-05-10', '0666666555', 'HHYG KJIUT 5', 'NAME tst', '123456', 'Père non décédé', 'NAME tst', 'Mère non décédé', 'ccdsg tst', 'Tuteur', NULL, '2024-05-30 12:06:15', '2024-05-30 12:06:15'),
(2, '3005202482f4', 'Money Sadio', 'Sadio@malabsh.3lih', 'MN789502', '2024-05-07', '0650231211', 'mazra3a sa3ida', 'NAME tst', 'R18032010', 'Père non décédé', 'NAME tst', 'Mère non décédé', 'ccdsg tst', 'Tuteur', NULL, '2024-05-30 13:47:13', '2024-05-30 13:47:13');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Tele` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `Full_Name`, `email`, `Tele`, `sujet`, `message`, `created_at`, `updated_at`) VALUES
(1, 'tst', 'tst@shil3ba.anrra', '+21266666555', 'shnu hada', 'hretjhttj', '2024-05-28 12:01:04', '2024-05-28 12:01:04'),
(2, 'tst', 'tst@shil3ba.anrra', '+21266666555', 'shnu hada', 'irjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2024-05-28 12:01:12', '2024-05-28 12:01:12'),
(6, 'Mohammed Badraoui', 'badraoui.fst@uhp.ac.ma', '0650238947', '1254mmm', 'tfrèyr ygutu-rrx urf(dch', '2024-06-05 07:53:13', '2024-06-05 07:53:13');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscrires`
--

CREATE TABLE `inscrires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `cni` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `CIN_MASSAR` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Tele` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `Filiere` varchar(255) NOT NULL,
  `dip` varchar(255) NOT NULL,
  `nat` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `tsrc` varchar(255) DEFAULT NULL,
  `fichier_notes` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code_inscription` varchar(15) NOT NULL,
  `bourse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inscrires`
--

INSERT INTO `inscrires` (`id`, `Nom`, `Prenom`, `cni`, `date_naissance`, `CIN_MASSAR`, `Email`, `Tele`, `Sexe`, `Filiere`, `dip`, `nat`, `ville`, `Adresse`, `tsrc`, `fichier_notes`, `created_at`, `updated_at`, `code_inscription`, `bourse`) VALUES
(7, 'tst', 'NAME', 'MN78952', '2004-06-14', '123456', 'tst@shil3ba.ana', '0666666555', 'femme', 'Cycle ingénieur: Génie Biomédical', 'BAC+2', 'Belge', 'MOHAMMEDIA', 'HHYG KJIUT 5', NULL, NULL, '2024-05-29 11:20:49', '2024-05-29 11:20:49', '2905202460ec', 'bourse_oui'),
(8, 'tst', 'NAME', 'MN78952', '2001-02-12', '123456', 'tst@shil3ba.ana', '0666666555', 'femme', 'Licence Infirmier en Anesthésie et Réanimation (LIAR)', 'BAC+2', 'Algérien', 'ESSAOUIRA', 'HHYG KJIUT 5', NULL, NULL, '2024-05-29 11:41:33', '2024-05-29 11:41:33', '29052024f15a', 'bourse_oui'),
(9, 'tst', 'NAME', 'MN78952', '2001-02-12', '123456', 'tst@shil3ba.ana', '0666666555', 'femme', 'Licence en Génie Industriel et Logistique Hospitalière (LGILH)', 'BAC+2', 'Angolais', 'ESSAOUIRA', 'HHYG KJIUT 5', NULL, NULL, '2024-05-29 13:23:20', '2024-05-29 13:23:20', '290520241da0', 'bourse_oui'),
(10, 'tst', 'NAME', 'MN78952', '2004-04-30', '123456', 'tst@shil3ba.ana', '0666666555', 'femme', 'Classes préparatoires intégrées: 2ème année', 'BAC+2', 'Américain', 'ESSAOUIRA', 'HHYG KJIUT 5', NULL, NULL, '2024-05-30 12:51:09', '2024-05-30 12:51:09', '30052024fd2f', 'bourse_oui'),
(11, 'shama', 'NAME', 'MN789992', '2004-04-18', '123456', 'tst@shil3ba.ana', '0665566339', 'femme', 'Licence en Sciences de Gestion (LSG)', 'BAC+2', 'Bahreïni', 'ESSAOUIRA', 'HHYG KJIUT 5', NULL, NULL, '2024-05-30 12:57:41', '2024-05-30 12:57:41', '30052024c867', 'bourse_oui'),
(12, 'Badraoui', 'Mohammed', 'MN789302', '2024-05-29', 'R18032010', 'badraoui.fst@uhp.ac.ma', '0650238947', 'femme', 'Cycle ingénieur: Génie digital et intelligence Artificielle en santé', 'BAC+2', 'Algérien', 'ESSAOUIRA', 'mazra3a sa3ida', NULL, NULL, '2024-05-30 13:03:00', '2024-05-30 13:03:00', '30052024533f', 'bourse_non'),
(13, 'Sadio', 'Money', 'MN789502', '2024-05-07', 'R18032010', 'Sadio@malabsh.3lih', '0650231211', 'homme', 'Licence Management Et Marketing Digital Du Sport Et Santé', 'BAC', 'Américain', 'ESSAOUIRA', 'mazra3a sa3ida', NULL, NULL, '2024-05-30 13:09:52', '2024-05-30 13:09:52', '3005202482f4', 'bourse_oui');

-- --------------------------------------------------------

--
-- Structure de la table `inscrire_formation_continues`
--

CREATE TABLE `inscrire_formation_continues` (
  `id` int(11) NOT NULL,
  `code_inscription` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `cni` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `CIN_MASSAR` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Tele` varchar(255) NOT NULL,
  `Sexe` varchar(255) DEFAULT NULL,
  `Filiere` varchar(255) NOT NULL,
  `dip` varchar(255) DEFAULT NULL,
  `nat` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `completedFile` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tsrc` varchar(255) DEFAULT NULL,
  `cinpdf` blob NOT NULL,
  `cv` blob NOT NULL,
  `ddo` blob NOT NULL,
  `RecuC` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `inscrire_formation_continues`
--

INSERT INTO `inscrire_formation_continues` (`id`, `code_inscription`, `Nom`, `Prenom`, `cni`, `date_naissance`, `CIN_MASSAR`, `Email`, `Tele`, `Sexe`, `Filiere`, `dip`, `nat`, `ville`, `Adresse`, `completedFile`, `created_at`, `updated_at`, `tsrc`, `cinpdf`, `cv`, `ddo`, `RecuC`) VALUES
(8, '05062024b46a', 'lily', 'was alil g', 'P403022', '2002-02-12', 's214121', 'she@grow.up', '0666666555', 'femme', 'Licence en Sciences de Gestion (LSG)', 'BAC+3', 'Angolais', 'ESSAOUIRA', 'HHYG KJIUT 5', 1, '2024-06-05 08:46:49', '2024-06-05 08:46:49', NULL, 0x747374204e414d455f696e736372697074696f6e2e706466, 0x536164696f204d6f6e6579726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d202831292e706466, 0x4e414d45207473745f426f757273652e706466, 0x536164696f204d6f6e6579726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d202831292e706466),
(9, '050620243534', 'baha', 'oubaha', 'P403022', '2002-02-20', 'm121212', 'baha@o.3li', '02020202', 'homme', 'Licence Infirmier Polyvalent (LIP)', 'BAC+2', 'Belge', 'ESSAOUIRA', 'HHYG KJIUT 5', 1, '2024-06-05 08:56:04', '2024-06-05 08:56:04', NULL, 0x747374204e414d455f696e736372697074696f6e2e706466, 0x747374204e414d45726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x4e414d45207473745f426f757273652e706466, 0x4e414d45207473745f426f757273652e706466),
(10, '05062024c564', 'rgr', 'grr', 'P403022', '2003-03-30', 'gr121212', 'gr@grrrg.gr', '0606060606', 'homme', 'Licence en Génie Industriel et Logistique Hospitalière (LGILH)', 'BAC', 'Andorran', 'ESSAOUIRA', 'HHYG KJIUT 5', 1, '2024-06-05 09:00:51', '2024-06-05 09:00:51', NULL, 0x536164696f204d6f6e6579726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x747374204e414d45726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x4e414d45207473745f426f757273652e706466, 0x747374204e414d45726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466),
(11, '05062024e187', 'mmmm', 'grrnnnnn', 'nn564879', '2003-03-30', 'nn303030', 'gr@grrrg.nn', '2020202020', 'femme', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)', 'BAC+2', 'Belge', 'ESSAOUIRA', 'HHYG KJIUT 5', 1, '2024-06-05 09:02:27', '2024-06-05 09:02:27', NULL, 0x536164696f204d6f6e6579726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x747374204e414d45726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x4e414d45207473745f426f757273652e706466, 0x747374204e414d45726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466),
(12, '05062024bdf4', 'tst', 'NAME', 'hh121001', '2002-02-20', 'F123147789', 'tst@shil3ba.ana', '0666666555', 'femme', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)', 'BAC+2', 'Australien', 'MOHAMMEDIA', 'HHYG KJIUT 5', 1, '2024-06-05 09:07:52', '2024-06-05 09:07:52', NULL, 0x4e414d45207473745f426f757273652e706466, 0x4e414d45207473745f426f757273652e706466, 0x4e414d45207473745f426f757273652e706466, 0x4e414d45207473745f426f757273652e706466),
(13, '05062024755a', 'kh', 'tf', 'kj221155', '2003-03-20', 'kh121212', 'kh@tf.com', '333333333', 'femme', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)', 'BAC+3', 'Américain', 'MOHAMMEDIA', 'HHYG KJIUT 5', 1, '2024-06-05 09:11:33', '2024-06-05 09:11:33', NULL, 0x536164696f204d6f6e6579726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x747374204e414d455f696e736372697074696f6e2e706466, 0x4e414d45207473745f426f757273652e706466, 0x4e414d45207473745f426f757273652e706466),
(17, '050620242495', 'shaaaa', 'ymaaaaaaaaa', 'g121212', '2006-06-15', 'a12125454', 'aaaaymaa@sh.ma', '787878', 'femme', 'Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)', 'BAC', 'Burkinabé', 'MOHAMMEDIA', 'HHYG KJIUT 5', 1, '2024-06-05 09:30:16', '2024-06-05 09:30:16', NULL, 0x747374204e414d45726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x536164696f204d6f6e6579726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x747374204e414d455f696e736372697074696f6e2e706466, 0x747374204e414d455f696e736372697074696f6e2e706466),
(18, '10062024b78e', 'shaaaa', 'ymaaaaaaaaa', 'g1212', '2012-12-12', 'a121254', 'aaaaymaa@sh.ma', '787878', 'femme', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)', 'BAC', 'Américain', 'MOHAMMEDIA', 'HHYG KJIUT 5', 1, '2024-06-10 08:51:35', '2024-06-10 08:51:35', NULL, 0x72677220677272726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466, 0x42616472616f7569204d6f68616d6d65645f696e736372697074696f6e2e706466, 0x726563755f696e736372695f666f726d6174696f6e5f636f6e74696e7565202831292e706466, 0x72677220677272726563755f696e736372695f666f726d6174696f6e5f636f6e74696e75655d2e706466);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `note_s1` float DEFAULT NULL,
  `note_s2` float DEFAULT NULL,
  `moy_A1` float DEFAULT NULL,
  `note_s3` float DEFAULT NULL,
  `note_s4` float DEFAULT NULL,
  `moy_A2` float DEFAULT NULL,
  `note_s5` float DEFAULT NULL,
  `note_s6` float DEFAULT NULL,
  `moy_A3` float DEFAULT NULL,
  `note_s7` float DEFAULT NULL,
  `note_s8` float DEFAULT NULL,
  `moy_A4` float DEFAULT NULL,
  `note_s9` float DEFAULT NULL,
  `note_s10` float DEFAULT NULL,
  `moy_A5` float DEFAULT NULL,
  `inscrire_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'hfsaih.03@gmail.com', NULL, '$2y$10$c4QJ2SntxL7A2AEHWeCDFOz1wR2qKyly2Cw16IIKIwVGpbutx9dm2', NULL, '2023-04-20 09:15:08', '2023-04-20 09:15:08'),
(2, 'abujad', 'abujad@sup.com', NULL, '$2y$10$6gpKmhvdYXJP5E09ieNL2e.pjnT4FVoDKjYBeLZ6yhpwqjSPdAafq', NULL, '2024-06-06 11:00:00', '2024-06-06 11:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bourses`
--
ALTER TABLE `bourses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscrires`
--
ALTER TABLE `inscrires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscrire_formation_continues`
--
ALTER TABLE `inscrire_formation_continues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `bourses`
--
ALTER TABLE `bourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscrires`
--
ALTER TABLE `inscrires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `inscrire_formation_continues`
--
ALTER TABLE `inscrire_formation_continues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

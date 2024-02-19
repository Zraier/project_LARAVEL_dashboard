-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 fév. 2024 à 14:19
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agency`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id_admin`, `name`, `username`, `email`, `phone`, `address`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slim zraier', 'admin', 'slim.zraier@gmail', '51493554', 'Sidi Thabet', 'slim zraier20240207.jpg', 'active', NULL, '2024-02-07 08:41:28');

-- --------------------------------------------------------

--
-- Structure de la table `agencies`
--

CREATE TABLE `agencies` (
  `id_agence` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agencies`
--

INSERT INTO `agencies` (`id_agence`, `name`, `username`, `email`, `phone`, `address`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'traveltodo', 'traveltodo', 'traveltodo@gg.com', '5553', 'ariena', 'traveltodo20240204.jpg', 'inactive', '2024-02-05 15:00:53', '2024-02-16 18:07:51'),
(2, 'corolla', 'corina', 'corina@g.vv', '96969696', 'tunis', 'corina20240206.jpg', 'active', '2024-02-06 10:21:49', '2024-02-07 14:16:33'),
(3, 'booking', 'booking', 'booking@gg.gg', '55555', 'tunis', NULL, 'inactive', '2024-02-06 16:50:07', '2024-02-06 18:16:47'),
(4, 'travel', 'travel', 'travel@g.g', '555', 'ariena', 'travel20240209.jpg', 'active', '2024-02-09 14:14:24', '2024-02-09 14:16:33'),
(5, 'molka', 'molka', 'molka@g.g', '555555', 'lafayet', 'molka20240213.jpg', 'active', '2024-02-13 16:36:59', '2024-02-13 16:37:23');

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

CREATE TABLE `domaines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domaine_activity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaines`
--

INSERT INTO `domaines` (`id`, `domaine_activity`, `created_at`, `updated_at`) VALUES
(1, 'optio', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(2, 'dolor', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(3, 'sint', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(4, 'repudiandae', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(5, 'enim', '2024-02-05 14:22:16', '2024-02-05 14:22:16'),
(6, 'marketing', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `employees`
--

CREATE TABLE `employees` (
  `id_emp` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_ent` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employees`
--

INSERT INTO `employees` (`id_emp`, `name`, `username`, `email`, `phone`, `address`, `photo`, `id_ent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'farid', 'farid', 'farid@gg.vm', '9955696', 'lac 2', 'farid20240207.jpg', 1, 'active', '2024-02-07 15:04:53', '2024-02-07 15:12:41'),
(2, 'hello', 'arena', 'jnknk@bj', '45563156', NULL, 'hello20240207.jpg', 2, 'inactive', '2024-02-07 19:03:00', '2024-02-07 19:03:32'),
(3, 'zied', 'zied', 'zied1@d.d', '5555', 'rades', NULL, 3, 'active', '2024-02-09 14:18:35', '2024-02-09 14:18:35');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id_ent` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_dom` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id_ent`, `name`, `username`, `email`, `phone`, `address`, `photo`, `id_dom`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sofrecom', 'doni', 'sofrecom@gmail.com', '+21622659863', 'lac 1', 'sofrecom20240207.jpg', 3, 'active', '2024-02-05 14:57:15', '2024-02-07 14:44:26'),
(2, 'QJIS', 'QJIS', 'qjis@hh.hh', '696365', 'aouina', 'QJIS20240207.jpg', 2, 'active', '2024-02-06 09:18:24', '2024-02-07 14:45:54'),
(3, 'tunisie maps', 'maps', 'tunismaps@gg.gg', '55555', 'tunis', NULL, 4, 'active', '2024-02-09 14:17:50', '2024-02-09 14:17:50'),
(4, 'everience', 'everience', 'everience.kkk@f.f', '5555', 'kkkkkkk', 'everience20240213.jpg', 6, 'active', '2024-02-13 16:42:39', '2024-02-13 16:42:39');

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
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_voy` varchar(255) NOT NULL,
  `avis` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_emp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `matchmakings`
--

CREATE TABLE `matchmakings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_emp` varchar(255) NOT NULL,
  `id_agence` varchar(255) NOT NULL,
  `ref_voy_user` varchar(255) NOT NULL,
  `ref_voy_agence` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_26_084240_create_domaines_table', 1),
(6, '2024_01_26_084241_create_entreprises_table', 1),
(7, '2024_01_26_084251_create_employees_table', 1),
(8, '2024_01_26_084302_create_agencies_table', 1),
(9, '2024_01_26_084330_create_voy_users_table', 1),
(10, '2024_01_26_084337_create_voy_agencies_table', 1),
(11, '2024_01_29_150857_create_feedback_table', 1),
(12, '2024_01_29_151616_create_matchmakings_table', 1),
(13, '2024_01_31_114703_create_admins_table', 1);

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
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('entreprise','employee','agence','admin') NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$MYFro9iGHBmv/ITjFlARM.TISn9d55cDFC/UIKP5LzPLQCBsGti0O', 'admin', 'active', NULL, NULL, '2024-02-09 14:19:33'),
(2, 'doni', '$2y$12$EINCq0BazYSFGyOh9bbpUOQmNl/1rYuAxg55usgrmxFwlFAk/4wre', 'entreprise', 'active', NULL, '2024-02-05 14:57:16', '2024-02-05 14:57:16'),
(3, 'traveltodo', '$2y$12$CGxu9J8eiHPQr593o3WjNeBRuP2gJPcbIC3Q4Mw6Bfu0nK9jdu5zu', 'agence', 'active', NULL, '2024-02-05 15:00:53', '2024-02-05 15:00:53'),
(4, 'QJIS', '$2y$12$itD0EcVVIdYMk37m3H2FU.EIUJzqF9jCIw3ayWOXGr2q0W9J0ilKi', 'entreprise', 'active', NULL, '2024-02-06 09:18:24', '2024-02-06 09:18:24'),
(5, 'corina', '$2y$12$asdmQ6D7ahfZwig0.eMKyeVqDgzcVrU5.tjh85M2qNi2q8MtMV67a', 'agence', 'active', NULL, '2024-02-06 10:21:50', '2024-02-06 10:21:50'),
(6, 'booking', '111', 'agence', 'active', NULL, NULL, NULL),
(7, 'farid', '$2y$12$70CSatEDzjDbV7Lr7g5pt.M4WydLWWdDw6zeOgPCtW5/jx69yohhS', 'employee', 'active', NULL, '2024-02-07 15:04:53', '2024-02-07 15:04:53'),
(8, 'arena', '$2y$12$zfwy8LIxbZfGj2/ZQkNTuOY4xuBqLZJ58n2/TFVAxSZF8a0sF/1em', 'employee', 'active', NULL, '2024-02-07 19:03:01', '2024-02-07 19:03:01'),
(9, 'travel', '$2y$12$8k8/1IZTFNXH1eUqs/NVxut6kTqf0j4iAxhgk08NXDmwZGK4gTuRm', 'agence', 'active', NULL, '2024-02-09 14:14:25', '2024-02-09 14:14:25'),
(10, 'maps', '$2y$12$D.Kv9EssjeDd0TAk/mVJz.bb8htOx8ZKxMC5U0kAOHJ8Fxt1sP9O2', 'entreprise', 'active', NULL, '2024-02-09 14:17:51', '2024-02-09 14:17:51'),
(11, 'zied', '$2y$12$fvlDicqvQYpdIaSVAb3L0.QjHoa8NgyE1cl.HbIxrYSIaa79y1pt.', 'employee', 'active', NULL, '2024-02-09 14:18:36', '2024-02-09 14:18:36'),
(12, 'molka', '$2y$12$q7PqzOhk42mYSMCwGFUCD.aWS.vclJo0GDAWDOgwJU4LNRYBZIQnq', 'agence', 'active', NULL, '2024-02-13 16:37:00', '2024-02-13 16:37:00'),
(13, 'everience', '$2y$12$Uua/wYjNBgS65UDQoDbUTusVdCvAiFyRSiASHcRXMmwsObdCnM2JK', 'entreprise', 'active', NULL, '2024-02-13 16:42:40', '2024-02-13 16:42:40');

-- --------------------------------------------------------

--
-- Structure de la table `voy_agencies`
--

CREATE TABLE `voy_agencies` (
  `ref_voy_agnce` bigint(20) UNSIGNED NOT NULL,
  `pays` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duree` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_agence` bigint(20) UNSIGNED NOT NULL,
  `status` enum('done','arrive') NOT NULL DEFAULT 'arrive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `voy_users`
--

CREATE TABLE `voy_users` (
  `ref_voy_user` bigint(20) UNSIGNED NOT NULL,
  `pays` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duree` varchar(255) NOT NULL,
  `id_emp` bigint(20) UNSIGNED NOT NULL,
  `status` enum('done','arrive') NOT NULL DEFAULT 'arrive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_username_index` (`username`);

--
-- Index pour la table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id_agence`),
  ADD UNIQUE KEY `agencies_username_unique` (`username`),
  ADD UNIQUE KEY `agencies_email_unique` (`email`),
  ADD KEY `agencies_username_index` (`username`);

--
-- Index pour la table `domaines`
--
ALTER TABLE `domaines`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_emp`),
  ADD UNIQUE KEY `employees_username_unique` (`username`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD KEY `employees_username_index` (`username`),
  ADD KEY `employees_id_ent_foreign` (`id_ent`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id_ent`),
  ADD UNIQUE KEY `entreprises_username_unique` (`username`),
  ADD UNIQUE KEY `entreprises_email_unique` (`email`),
  ADD KEY `entreprises_username_index` (`username`),
  ADD KEY `entreprises_id_dom_foreign` (`id_dom`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matchmakings`
--
ALTER TABLE `matchmakings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
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
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Index pour la table `voy_agencies`
--
ALTER TABLE `voy_agencies`
  ADD PRIMARY KEY (`ref_voy_agnce`),
  ADD KEY `voy_agencies_id_agence_foreign` (`id_agence`);

--
-- Index pour la table `voy_users`
--
ALTER TABLE `voy_users`
  ADD PRIMARY KEY (`ref_voy_user`),
  ADD KEY `voy_users_id_emp_foreign` (`id_emp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id_agence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `domaines`
--
ALTER TABLE `domaines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_emp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id_ent` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matchmakings`
--
ALTER TABLE `matchmakings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `voy_agencies`
--
ALTER TABLE `voy_agencies`
  MODIFY `ref_voy_agnce` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voy_users`
--
ALTER TABLE `voy_users`
  MODIFY `ref_voy_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_id_ent_foreign` FOREIGN KEY (`id_ent`) REFERENCES `entreprises` (`id_ent`) ON DELETE CASCADE;

--
-- Contraintes pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD CONSTRAINT `entreprises_id_dom_foreign` FOREIGN KEY (`id_dom`) REFERENCES `domaines` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `voy_agencies`
--
ALTER TABLE `voy_agencies`
  ADD CONSTRAINT `voy_agencies_id_agence_foreign` FOREIGN KEY (`id_agence`) REFERENCES `agencies` (`id_agence`) ON DELETE CASCADE;

--
-- Contraintes pour la table `voy_users`
--
ALTER TABLE `voy_users`
  ADD CONSTRAINT `voy_users_id_emp_foreign` FOREIGN KEY (`id_emp`) REFERENCES `employees` (`id_emp`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

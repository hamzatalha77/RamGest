-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 18 déc. 2021 à 23:14
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ramgest`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categorie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categorie_name`, `description`, `created_at`, `updated_at`) VALUES
('bat', 'battrie', '2021-12-14 11:03:52', '2021-12-14 11:03:52'),
('connecteur', 'connecteur', '2021-12-14 11:09:07', '2021-12-14 11:09:07'),
('flex', 'flex', '2021-12-14 11:09:41', '2021-12-14 11:09:41'),
('glass normal', 'glass normal', '2021-12-14 11:08:29', '2021-12-14 11:08:29'),
('glass oca', 'glass oca', '2021-12-14 11:07:08', '2021-12-14 11:07:08'),
('lcd', 'lcd without frame', '2021-12-14 11:02:26', '2021-12-14 11:02:26'),
('touch', 'tactile', '2021-12-14 11:04:31', '2021-12-14 11:04:31'),
('wf', 'lcd with frame', '2021-12-14 11:03:10', '2021-12-14 11:03:10');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entrees`
--

CREATE TABLE `entrees` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fornisseur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `quantite` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entrees`
--

INSERT INTO `entrees` (`id`, `reference`, `categorie`, `fornisseur`, `prix`, `total`, `quantite`, `created_at`, `updated_at`) VALUES
(3, 'lcd-a10', 'lcd', 'samsung', 250, 2500, 10, '2021-12-14 21:27:26', '2021-12-14 21:27:26');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fornisseurs`
--

CREATE TABLE `fornisseurs` (
  `fornisseur_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fornisseurs`
--

INSERT INTO `fornisseurs` (`fornisseur_name`, `description`, `created_at`, `updated_at`) VALUES
('honor', 'honor', '2021-12-14 17:50:49', '2021-12-14 17:50:49'),
('huawie', 'huawie', '2021-12-14 17:49:50', '2021-12-14 17:49:50'),
('infinix', 'infinix', '2021-12-14 17:54:43', '2021-12-14 17:54:43'),
('iphone', 'iphone', '2021-12-14 17:49:12', '2021-12-14 17:49:12'),
('oppo', 'oppo', '2021-12-14 17:52:37', '2021-12-14 17:52:37'),
('realmie', 'realmie', '2021-12-14 17:55:26', '2021-12-14 17:55:26'),
('samsung', 'samsung', '2021-12-14 17:48:10', '2021-12-14 17:48:10'),
('vivo', 'vivo', '2021-12-14 17:59:27', '2021-12-14 17:59:27'),
('wiko', 'wiko', '2021-12-14 17:59:58', '2021-12-14 17:59:58'),
('xiamie', 'xiamie', '2021-12-14 17:58:08', '2021-12-14 17:58:08');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_12_104127_create_sessions_table', 1),
(7, '2021_12_12_133715_create_clients_table', 2),
(8, '2021_12_12_133747_create_categories_table', 2),
(9, '2021_12_12_133828_create_fornisseurs_table', 2),
(10, '2021_12_12_145808_create_stocks_table', 3),
(13, '2021_12_12_150928_create_entrees_table', 4),
(14, '2021_12_12_151035_create_sorties_table', 4),
(15, '2021_12_15_094307_create_reteurs_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reteurs`
--

CREATE TABLE `reteurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fornisseur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `quantite` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8YCi1F5544UYr4UZUJgLLC1uOXTFWQ4K0dR1W9lW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiWERBWVJjMGFrWU03U2lGMlpIbFpsRHY3OU40cFROTzZmYVgwcEZseSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vcmFtZ2VzdC50ZXN0L2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRvRUxxNW9rdUVBSHEvTVZyd2lKZkR1WGE2bHg2WU5DazZzQTN1SlNubkhqS2loTG84U0ttVyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkb0VMcTVva3VFQUhxL01WcndpSmZEdVhhNmx4NllOQ2s2c0EzdUpTbm5IaktpaExvOFNLbVciO30=', 1639855940),
('IVSTNRRFTxqXUXLfzGGANOBaqE6HLknxQAbqbt5P', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV0NNZ0M2OUw1Q2NHVWNicWhUdHZzVGpZbEVmWUprUnBFWDlCaks3TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9yYW1nZXN0LnRlc3QvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJG9FTHE1b2t1RUFIcS9NVnJ3aUpmRHVYYTZseDZZTkNrNnNBM3VKU25uSGpLaWhMbzhTS21XIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRvRUxxNW9rdUVBSHEvTVZyd2lKZkR1WGE2bHg2WU5DazZzQTN1SlNubkhqS2loTG84U0ttVyI7fQ==', 1639869164);

-- --------------------------------------------------------

--
-- Structure de la table `sorties`
--

CREATE TABLE `sorties` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fornisseur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `quantite` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

CREATE TABLE `stocks` (
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fornisseur_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL DEFAULT '0',
  `quantite` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stocks`
--

INSERT INTO `stocks` (`reference`, `categorie_name`, `fornisseur_name`, `prix`, `quantite`, `created_at`, `updated_at`) VALUES
('lcd-a02', 'lcd', 'samsung', 280, 0, '2021-12-14 19:54:14', '2021-12-18 15:25:11'),
('lcd-a02s', 'lcd', 'samsung', 280, 100, '2021-12-14 20:01:43', '2021-12-14 20:01:43'),
('lcd-a10', 'lcd', 'samsung', 250, 110, '2021-12-14 21:22:38', '2021-12-14 21:44:32'),
('lcd-a10s', 'lcd', 'samsung', 270, 90, '2021-12-14 20:01:01', '2021-12-18 15:12:49'),
('lcd-a11', 'lcd', 'samsung', 280, 100, '2021-12-14 20:02:34', '2021-12-14 20:02:34'),
('lcd-a12', 'lcd', 'samsung', 280, 100, '2021-12-14 20:03:20', '2021-12-14 20:03:20'),
('lcd-a20s', 'bat', 'samsung', 270, 100, '2021-12-14 20:05:19', '2021-12-14 20:05:19'),
('lcd-j4+', 'lcd', 'samsung', 250, 90, '2021-12-14 20:04:22', '2021-12-18 15:40:31'),
('lcd-m20', 'lcd', 'samsung', 270, 100, '2021-12-14 20:06:08', '2021-12-14 20:06:08'),
('LCD-X606', 'lcd', 'infinix', 250, 100, '2021-12-18 18:32:20', '2021-12-18 18:32:20'),
('lcd-y5-2019', 'lcd', 'huawie', 250, 100, '2021-12-14 20:13:42', '2021-12-14 20:13:42'),
('lcd-y6-2019', 'lcd', 'huawie', 250, 100, '2021-12-14 20:12:36', '2021-12-14 20:12:36'),
('lcd-y7-2019', 'lcd', 'huawie', 250, 100, '2021-12-14 20:11:29', '2021-12-14 20:11:29'),
('lcd-y9-2019', 'lcd', 'huawie', 350, 100, '2021-12-14 20:07:36', '2021-12-14 20:07:36'),
('lcd-y9-prime', 'lcd', 'huawie', 300, 100, '2021-12-14 20:08:24', '2021-12-14 20:08:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'ramgest', 'ramgest@gmail.com', NULL, '$2y$10$oELq5okuEAHq/MVrwiJfDuXa6lx6YNCk6sA3uJSnnHjKihLo8SKmW', NULL, NULL, NULL, NULL, NULL, '2021-12-12 21:49:47', '2021-12-12 21:49:47');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_name`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client`);

--
-- Index pour la table `entrees`
--
ALTER TABLE `entrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entrees_reference_foreign` (`reference`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `fornisseurs`
--
ALTER TABLE `fornisseurs`
  ADD PRIMARY KEY (`fornisseur_name`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `reteurs`
--
ALTER TABLE `reteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reteurs_reference_foreign` (`reference`),
  ADD KEY `reteurs_client_foreign` (`client`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sorties_reference_foreign` (`reference`),
  ADD KEY `sorties_client_foreign` (`client`);

--
-- Index pour la table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`reference`),
  ADD KEY `stocks_fornisseur_name_foreign` (`fornisseur_name`),
  ADD KEY `stocks_categorie_name_foreign` (`categorie_name`);

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
-- AUTO_INCREMENT pour la table `entrees`
--
ALTER TABLE `entrees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reteurs`
--
ALTER TABLE `reteurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sorties`
--
ALTER TABLE `sorties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entrees`
--
ALTER TABLE `entrees`
  ADD CONSTRAINT `entrees_reference_foreign` FOREIGN KEY (`reference`) REFERENCES `stocks` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reteurs`
--
ALTER TABLE `reteurs`
  ADD CONSTRAINT `reteurs_client_foreign` FOREIGN KEY (`client`) REFERENCES `clients` (`client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reteurs_reference_foreign` FOREIGN KEY (`reference`) REFERENCES `stocks` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sorties`
--
ALTER TABLE `sorties`
  ADD CONSTRAINT `sorties_client_foreign` FOREIGN KEY (`client`) REFERENCES `clients` (`client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sorties_reference_foreign` FOREIGN KEY (`reference`) REFERENCES `stocks` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_categorie_name_foreign` FOREIGN KEY (`categorie_name`) REFERENCES `categories` (`categorie_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stocks_fornisseur_name_foreign` FOREIGN KEY (`fornisseur_name`) REFERENCES `fornisseurs` (`fornisseur_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

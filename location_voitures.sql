-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 05 juin 2023 à 20:39
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location_voitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `prix_jour` varchar(255) NOT NULL,
  `dispo` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `marque`, `modele`, `type`, `prix_jour`, `dispo`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Cleo', '5', 'Essence', '300', 1, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-06-04 14:15:22'),
(4, 'Dacia', 'Sandiro', 'Essence', '200', 1, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-06-04 14:16:42'),
(5, 'Dacia', 'Stepway', 'Essence', '200', 0, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-06-04 14:32:19'),
(6, 'Cleo', '4', 'Essence', '300', 0, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-05-31 12:43:29'),
(7, 'Golf', 'Sr 5', 'Diesel', '300', 1, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-06-04 14:54:31'),
(8, 'Golf', 'Sr 4', 'Essence', '300', 1, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-05-31 12:43:29'),
(9, 'Cleo ', '4', 'Essence', '200', 0, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-05-31 12:43:29'),
(10, 'Cleo', '4', 'Diesel', '300', 0, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', NULL, '2023-05-31 12:43:29'),
(11, 'chevrolet', 'camaro', '0', '346', 0, 'Capture d’écran 2022-09-17 155309.png', '2023-06-04 22:29:37', '2023-06-04 22:29:37'),
(12, 'hahahha', 'hihihi', '0', '9', 0, 'Capture d’écran 2022-09-17 155309.png', '2023-06-04 22:33:31', '2023-06-04 22:33:31'),
(13, 'ghj', 'dfghj', '1', '23', 1, 'Capture d’écran 2022-09-17 155309.png', '2023-06-04 22:35:03', '2023-06-04 22:35:03'),
(14, 'chevrolet', 'camaro', '1', '555', 1, 'me.jpg', '2023-06-04 22:42:12', '2023-06-04 22:42:12'),
(15, 'dfghjkjhg', 'vbn', 'diesel', '10', 1, '/images/me.jpg', '2023-06-04 23:06:33', '2023-06-04 23:06:33'),
(16, 'fghj', 'fghjg', 'diesel', '7', 1, '/images/Sans titre.png', '2023-06-04 23:13:09', '2023-06-04 23:13:09'),
(17, 'chevrolet', 'hahah', 'essence', '7', 0, '/images/Sans_titre-removebg-preview.png', '2023-06-04 23:16:47', '2023-06-04 23:16:47'),
(18, 'gfgfggf', 'jdjjdjd', 'diesel', '8', 1, '/images/Sans_titre-removebg-preview.png', '2023-06-04 23:17:19', '2023-06-04 23:17:19'),
(19, 'cvn', 'fdghj', 'diesel', '8', 1, '/images/Sans_titre-removebg-preview.png', '2023-06-04 23:17:57', '2023-06-04 23:17:57'),
(20, 'fghj', 'camaro', 'diesel', '5', 1, '/images/4f68ee30-4b15-4698-888b-33d0b1f0c53f.jpeg', '2023-06-04 23:18:22', '2023-06-04 23:18:22'),
(21, 'chevrolet', 'camaro', 'essence', '4', 1, '/images/Sans_titre-removebg-preview.png', '2023-06-04 23:23:36', '2023-06-04 23:23:36'),
(22, 'golf', 'romeo', 'diesel', '308', 1, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', '2023-06-05 00:25:19', '2023-06-05 00:25:19'),
(23, 'Dacia', 'megan', 'diesel', '304', 0, 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', '2023-06-05 00:28:45', '2023-06-05 00:28:45');

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE `commands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `dateL` datetime NOT NULL,
  `dateR` datetime NOT NULL,
  `prixTTC` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2023_05_26_233846_create_cars_table', 1),
(38, '2023_05_26_234011_create_commands_table', 1),
(39, '2023_06_04_174109_add_is_admin_to_users_table', 2);

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
  `cin` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `cin`, `name`, `tel`, `ville`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, '69276-2674', 'Archibald Kulas', '+1 (320) 429-4723', 'Lake Kadin', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'jakob.konopelski@example.com', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lkUfWpqlfA', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(2, '34804-8725', 'Mrs. Frieda Morar DDS', '1-620-628-8241', 'New Alberthashire', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'jacobson.norbert@example.org', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g2ohE8N2VH', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(3, '77783-2047', 'Daniella Rohan', '+1-631-377-9962', 'New Shanelstad', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'wrau@example.org', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ug1Ps9wpiM', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(4, '93716-7321', 'Elyse Stiedemann', '1-707-636-9215', 'Kassulkeland', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'adele57@example.org', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'L1hgPYYkud', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(5, '00145-5328', 'Ollie Corwin', '253-616-6097', 'Daijaside', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'edd88@example.com', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oRnVVl9yki', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(6, '81103-0399', 'Velda Davis', '(463) 534-7049', 'Lake Karelleton', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'joaquin.quigley@example.net', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PM2njqeImI', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(7, '79239', 'Roger Streich', '+1 (575) 488-5324', 'West Sterling', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'napoleon.effertz@example.com', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'deAicGFNgG', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(8, '26231', 'Carroll Orn', '+1-530-732-2559', 'Port Alainamouth', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'valerie.wuckert@example.org', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iWVTgZxl4h', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(9, '18734-8532', 'Marlee Gleichner DVM', '(561) 923-1393', 'Jonesmouth', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'dejah94@example.org', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd3A4qVJJe3', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(10, '01372', 'Dr. Naomie Considine V', '1-808-422-7516', 'South Imogene', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'haag.mervin@example.net', '2023-05-28 04:11:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xpLeEzuD57', '2023-05-28 04:11:35', '2023-05-28 04:11:35', 0),
(11, '74769-3493', 'Aniya Adams', '+17854567041', 'Ozellachester', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'marvin.lois@example.net', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4xvCNVdagJ', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(12, '20408', 'Garth O\'Reilly', '1-838-889-1291', 'Lake Aminaborough', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'noble.heaney@example.org', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'X2SaJm1XyR', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(13, '85203-4641', 'Prof. Alena Brakus', '1-715-534-9729', 'Winonabury', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'zander71@example.org', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xYlK8CIWfw', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(14, '79470-1856', 'Libby Herman', '+1.463.317.4067', 'North Geo', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'kiera.dooley@example.org', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aN2emm7RdE', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(15, '68486-0238', 'Ms. Kaitlyn Balistreri', '+19724384020', 'East Derrickstad', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'heidenreich.shea@example.com', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yNaASDwAuT', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(16, '53006', 'Ms. Lenna Reynolds', '(608) 649-7127', 'Bernhardton', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'maxie.mckenzie@example.com', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'O884DlhRjs', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(17, '84211-6527', 'Florida Homenick', '+1 (775) 284-0773', 'Simoneburgh', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'goyette.lilian@example.com', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bSaZxBdPBX', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(18, '70787-3518', 'Nedra Lockman', '283.360.1468', 'Millerborough', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'pfeffer.felipe@example.com', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2Voh6G5tHq', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(19, '37129-9303', 'Mr. Garret Ziemann DVM', '775.703.7930', 'Port Gus', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'cooper.stamm@example.org', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 't8msYtbuqt', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(20, '24886', 'Percy Wilderman', '1-337-912-1284', 'South Tiatown', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'melyna.paucek@example.org', '2023-05-28 04:17:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xU9b0LmMYn', '2023-05-28 04:17:43', '2023-05-28 04:17:43', 0),
(21, '38250-8331', 'Edyth Konopelski', '+1.276.418.5994', 'South Austenfort', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'rodrigo.ondricka@example.com', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YwboLPB9sJ', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(22, '25835-7184', 'Tyrique Hickle', '320.443.8877', 'Port Jeff', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'denesik.nedra@example.net', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZHpMxp82e8', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(23, '78263', 'Giovanny Watsica', '1-510-992-7619', 'Walterberg', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'esmeralda.thompson@example.com', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2c70jLK6qy', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(24, '77075', 'Cecilia O\'Keefe', '(614) 884-2677', 'Klingshire', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'boris.hackett@example.net', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ToMJi3gMNC', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(25, '56666-3015', 'Mr. Oda Hilpert V', '+1-201-225-5570', 'Lake Taniashire', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'homenick.gunner@example.com', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Um6HFog6e3', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(26, '53162-0813', 'Monroe Welch', '+1-636-254-1472', 'North Cameron', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'jbartoletti@example.com', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qWEv1iKjXN', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(27, '99639-6526', 'Taurean Brown', '+1-419-956-0066', 'West Karinafort', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'gonzalo.spencer@example.org', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ds65GBQYYt', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(28, '44821', 'Bernadette Gutkowski', '+16785547166', 'Port Arvel', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'koch.frederique@example.org', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'EDmzOeQNBT', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(29, '31180', 'Melvin Green', '(754) 354-3293', 'Jacquelynview', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'arden66@example.com', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MCU7eztQjc', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(30, '19464', 'Ines Rodriguez III', '(423) 817-3088', 'New Gerard', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'scottie17@example.com', '2023-05-28 04:18:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'f6NTRMeFlY', '2023-05-28 04:18:26', '2023-05-28 04:18:26', 0),
(31, 'Z334455', 'hamza', '6789009876', 'tza', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'admin@admin.com', NULL, '$2y$10$aWspdFJztcmTMzJkZZKht.SyhihxKXXKhZUJoHTQjCkqb1x4dajV6', NULL, '2023-05-31 22:59:50', '2023-05-31 22:59:50', 0),
(32, 'z12875', 'amal ben', '062345687', 'TAZA', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'AMALBEN@gmail.com', NULL, '$2y$10$u1l1x4i.um.blJlaSNKaBuazSnmDRr319roOtCvDvSncP9hX/iNWe', NULL, '2023-06-01 13:00:00', '2023-06-01 13:00:00', 0),
(34, 'Z3344677', 'samad', '6789009876', 'taza', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'amalhhh@gmail.com', NULL, '$2y$10$QXCScc0Bvi3xiqSUCZxVDe52ubSifqL0ARk6i.rpKRiXBzuciyieu', NULL, '2023-06-04 11:48:07', '2023-06-04 11:48:07', 0),
(37, 'z556677', 'admin', '123456', 'taza', 'https://img.ecartelera.com/noticias/39500/39591-m.jpg?v=2.0', 'admin@admin.ma', '2023-06-04 16:03:06', '$2y$10$ICCGxp3/cT6TN5LpvyRKfONIK3B8.vIfP/uq6bvObPgbD2Rq/Ddoi', '8HaiqkTW9X', '2023-06-04 16:03:06', '2023-06-04 16:03:06', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commands_user_id_foreign` (`user_id`),
  ADD KEY `commands_car_id_foreign` (`car_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD KEY `password_reset_tokens_email_index` (`email`);

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
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commands`
--
ALTER TABLE `commands`
  ADD CONSTRAINT `cars_pk` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_pk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

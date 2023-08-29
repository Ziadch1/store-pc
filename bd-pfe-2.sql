-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 12:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd-pfe-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_06_140956_create_paniers_table', 2),
(6, '2023_07_02_205545_add_type_to_users', 3),
(7, '2023_07_03_194853_create_paniers_table', 4),
(8, '2023_07_03_195325_create_paniers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `paniers`
--

CREATE TABLE `paniers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL DEFAULT 'default_value',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paniers`
--

INSERT INTO `paniers` (`id`, `title`, `img`, `description`, `prix`, `quantity`, `type`, `user_name`, `created_at`, `updated_at`) VALUES
(3, '170R – INTEL CORE I9-10900K-RTX 3090', 'https://setupgame.ma/wp-content/uploads/2023/04/Pc-Gamer-Core-i5-13400F-RTX-3050-SG-LINES-Setup-Game-Maroc.png.webp\n', 'BOITIER: NZXT H510, CARTE MERE: ASUS ROG STRIX Z490-E GAMING, PROCESSEUR: INTEL CORE I9-10900K (3.7 GHZ / 5.3 GHZ), CARTE GRAPHIQUE: MSI GEFORCE RTX 3090 24GB GAMING X TRIO, RAM: 64GB (32GB X 2) 3600MHZ DDR4 G.SKILL TRIDENT Z NEO RGB, STOCKAGE SSD: SAMSUNG 980 PRO 2TB NVME M.2, PSU: CORSAIR RM1000X 80 PLUS GOLD, WATERCOOLER: NZXT KRAKEN Z73', '58999.00', '3', 'pcgamer', 'default_value', '2023-07-03 19:04:53', '2023-07-03 19:04:53'),
(4, '180R – AMD RYZEN 9 5900X-RTX 3080', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/Pc-Gamer-R5-3600-GTX-1660Ti-SG-LINES-Setup-Game-Maroc.png?resize=300%2C300&ssl=1\n', 'BOITIER: PHANTEKS ECLIPSE P400A, CARTE MERE: ASUS ROG STRIX X570-F GAMING, PROCESSEUR: AMD RYZEN 9 5900X (3.7 GHZ / 4.8 GHZ), CARTE GRAPHIQUE: ASUS ROG STRIX GEFORCE RTX 3080 10GB OC, RAM: 32GB (16GB X 2) 3600MHZ DDR4 G.SKILL TRIDENT Z NEO RGB, STOCKAGE SSD: SAMSUNG 970 EVO PLUS 1TB NVME M.2, PSU: CORSAIR RM850I 80 PLUS GOLD, WATERCOOLER: NZXT KRAKEN Z63', '34999.00', '6', 'zbp', 'default_value', '2023-07-03 19:05:26', '2023-07-03 19:05:26'),
(5, '110R – INTEL CORE I7-12700K-RTX 4080', 'https://setupgame.ma/wp-content/uploads/2023/02/PC-GAMER-RTX-4080-PRIX-MAROC-110R-Setup-Game-300x300.jpg.webp', 'BOITIER: MSI MPG GUNGNIR 110R, CARTE MERE: GIGABYTE Z790 D DDR4, PROCESSEUR: INTEL CORE I7-12700K (3.6 GHZ / 5.0 GHZ), CARTE GRAPHIQUE: PNY GEFORCE RTX 4080 16GB VERTO TRIPLE FAN, RAM: 32GB (16GB X 2) 3200MHZ DDR4 XPG GAMMIX D30 NOIR, STOCKAGE SSD: OCPC 1TO XTL-300 SSD M.2 NVME PCIE 3.0, PSU: AORUS P850W 80PLUS GOLD, WATERCOOLER: M.RED AIO 240MM RGB RAINBOW – AIRW-24', '30799.00', '17', 'douae', 'default_value', '2023-07-03 19:08:36', '2023-07-03 19:08:36'),
(6, 'Dell G5 15 - Core i7 11th, RTX 3050 Ti, 16GB, 1TB SSD', 'https://setupgame.ma/wp-content/uploads/2022/09/Pc-Portable-Gamer-MSI-Pulse-GL76-12UGK-257XMA-Setup-Game-300x300.webp', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-11th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 3050 Ti 4GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 120Hz IPS\r\n      Operating System: Windows 10', '1199.99', '21', 'admin', 'default_value', '2023-07-03 19:13:02', '2023-07-03 19:13:02'),
(7, 'HP Omen 15 - Ryzen 7, RTX 3060, 16GB, 1TB SSD', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/MSI-GF76-Katana-11UE-Setup-Game.webp?resize=300%2C300&ssl=1', 'Screen Size: 15.6 inches\r\n      CPU: AMD Ryzen 7\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 3060 6GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 144Hz IPS\r\n      Operating System: Windows 10', '1299.99', '32', 'admin', 'default_value', '2023-07-03 19:13:09', '2023-07-03 19:13:09'),
(8, 'MSI Optix MAG241C 23.6\" Curved LED 144Hz', 'https://asset.msi.com/resize/image/global/product/product_6_20180612110658_5b1f38d2cf530.png62405b38c58fe0f07fcef2367d8a9ba1/600.png', 'Get immersed in your games with the MSI Optix MAG241C. This curved Full HD monitor features a 23.6-inch VA panel with a 144Hz refresh rate and 1ms response time for smooth and responsive gameplay. It also supports AMD FreeSync for tear-free visuals.', '1999.00', '15', 'admin', 'default_value', '2023-07-03 19:13:27', '2023-07-03 19:13:27'),
(9, 'Logitech G Pro Wireless Gaming Mouse (Noir)', 'https://materielpc.ma/wp-content/uploads/2021/12/61UxfXTUyvL._SL1500_.jpg', 'La souris Logitech G Pro Wireless Gaming Mouse embarque le nouveau capteur optique révolutionnaire HERO 25K de chez Logitech. Il ne génère ni lissage, ni filtrage, ni accélération sur l’ensemble de sa plage de dpi (100 – 25 600) et offre donc une précision inégalée et une réactivité homogène à n’importe quelle vitesse.', '1', '23', 'douae', 'default_value', '2023-07-03 19:20:23', '2023-07-03 19:20:23'),
(10, 'Logitech G Pro Wireless Gaming Mouse (Noir)', 'https://materielpc.ma/wp-content/uploads/2021/12/61UxfXTUyvL._SL1500_.jpg', 'La souris Logitech G Pro Wireless Gaming Mouse embarque le nouveau capteur optique révolutionnaire HERO 25K de chez Logitech. Il ne génère ni lissage, ni filtrage, ni accélération sur l’ensemble de sa plage de dpi (100 – 25 600) et offre donc une précision inégalée et une réactivité homogène à n’importe quelle vitesse.', '1', '23', 'admin', 'default_value', '2023-07-03 19:32:57', '2023-07-03 19:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `img`, `description`, `prix`, `quantity`, `type`, `created_at`, `updated_at`) VALUES
(1, '110R – INTEL CORE I7-12700K-RTX 4080', 'https://setupgame.ma/wp-content/uploads/2023/02/PC-GAMER-RTX-4080-PRIX-MAROC-110R-Setup-Game-300x300.jpg.webp', 'BOITIER: MSI MPG GUNGNIR 110R, CARTE MERE: GIGABYTE Z790 D DDR4, PROCESSEUR: INTEL CORE I7-12700K (3.6 GHZ / 5.0 GHZ), CARTE GRAPHIQUE: PNY GEFORCE RTX 4080 16GB VERTO TRIPLE FAN, RAM: 32GB (16GB X 2) 3200MHZ DDR4 XPG GAMMIX D30 NOIR, STOCKAGE SSD: OCPC 1TO XTL-300 SSD M.2 NVME PCIE 3.0, PSU: AORUS P850W 80PLUS GOLD, WATERCOOLER: M.RED AIO 240MM RGB RAINBOW – AIRW-24', '30799.00', '17', 'pcgamer', NULL, '2023-07-03 13:36:39'),
(2, '110R – INTEL CORE I7-10700K-RTX 3070', 'https://setupgame.ma/wp-content/uploads/2023/02/Pc-Gamer-I7-12700K-RTX-4090-ELITE-BLACK-RAINBOW-ARGB-Maroc-Setup-Game-300x300.jpg.webp\n', 'BOITIER: MSI MPG GUNGNIR 110R, CARTE MERE: GIGABYTE Z490 D DDR4, PROCESSEUR: INTEL CORE I7-10700K (3.8 GHZ / 5.1 GHZ), CARTE GRAPHIQUE: PNY GEFORCE RTX 3070 8GB VERTO TRIPLE FAN, RAM: 32GB (16GB X 2) 3200MHZ DDR4 XPG GAMMIX D30 NOIR, STOCKAGE SSD: OCPC 1TO XTL-300 SSD M.2 NVME PCIE 3.0, PSU: AORUS P750W 80PLUS GOLD, WATERCOOLER: M.RED AIO 240MM RGB RAINBOW – AIRW-24', '22999.00', '12', 'pcgamer', NULL, NULL),
(4, '160R – AMD RYZEN 5 5600X-RTX 3060', 'https://pcgamercasa.ma/9199-large_default/pc-gamer-amd-ryzen-5-5600x-rtx-3060-12gb-Pc-Gamer-Casa-Maroc.jpg', 'BOITIER: COOLER MASTER MASTERBOX NR600, CARTE MERE: ASUS TUF B550-PLUS GAMING, PROCESSEUR: AMD RYZEN 5 5600X (3.7 GHZ / 4.6 GHZ), CARTE GRAPHIQUE: ASUS DUAL GEFORCE RTX 3060 12GB OC, RAM: 16GB (8GB X 2) 3200MHZ DDR4 CORSAIR VENGEANCE LPX, STOCKAGE SSD: CRUCIAL P2 500GB NVME M.2, PSU: CORSAIR TX650M 80 PLUS GOLD, WATERCOOLER: COOLER MASTER MASTERLIQUID ML240L RGB V2', '12811.00', '15', 'pcgamer', NULL, '2023-07-03 01:24:20'),
(5, '170R – INTEL CORE I9-10900K-RTX 3090', 'https://setupgame.ma/wp-content/uploads/2023/04/Pc-Gamer-Core-i5-13400F-RTX-3050-SG-LINES-Setup-Game-Maroc.png.webp\n', 'BOITIER: NZXT H510, CARTE MERE: ASUS ROG STRIX Z490-E GAMING, PROCESSEUR: INTEL CORE I9-10900K (3.7 GHZ / 5.3 GHZ), CARTE GRAPHIQUE: MSI GEFORCE RTX 3090 24GB GAMING X TRIO, RAM: 64GB (32GB X 2) 3600MHZ DDR4 G.SKILL TRIDENT Z NEO RGB, STOCKAGE SSD: SAMSUNG 980 PRO 2TB NVME M.2, PSU: CORSAIR RM1000X 80 PLUS GOLD, WATERCOOLER: NZXT KRAKEN Z73', '58999.00', '3', 'pcgamer', NULL, NULL),
(6, '180R – AMD RYZEN 9 5900X-RTX 3080', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/Pc-Gamer-R5-3600-GTX-1660Ti-SG-LINES-Setup-Game-Maroc.png?resize=300%2C300&ssl=1\n', 'BOITIER: PHANTEKS ECLIPSE P400A, CARTE MERE: ASUS ROG STRIX X570-F GAMING, PROCESSEUR: AMD RYZEN 9 5900X (3.7 GHZ / 4.8 GHZ), CARTE GRAPHIQUE: ASUS ROG STRIX GEFORCE RTX 3080 10GB OC, RAM: 32GB (16GB X 2) 3600MHZ DDR4 G.SKILL TRIDENT Z NEO RGB, STOCKAGE SSD: SAMSUNG 970 EVO PLUS 1TB NVME M.2, PSU: CORSAIR RM850I 80 PLUS GOLD, WATERCOOLER: NZXT KRAKEN Z63', '34999.00', '6', 'pcgamer', NULL, NULL),
(7, '190R – INTEL CORE I9-11900K-RTX 3080', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/STARDUST-MINI-R5-5500-RTX-3050-Setup-Game.webp?resize=300%2C300&ssl=1https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/Pc-Gamer-R5-4600G-SG-LINES-Setup-Game-Maroc.png?resize=300%2C300&ssl=1', 'BOITIER: NZXT H710, CARTE MERE: ASUS ROG STRIX Z590-F GAMING WIFI, PROCESSEUR: INTEL CORE I9-11900K (3.5 GHZ / 5.3 GHZ), CARTE GRAPHIQUE: ASUS ROG STRIX GEFORCE RTX 3080 10GB OC, RAM: 32GB (16GB X 2) 4000MHZ DDR4 G.SKILL TRIDENT Z RGB, STOCKAGE SSD: SAMSUNG 970 EVO PLUS 1TB NVME M.2, PSU: CORSAIR RM850I 80 PLUS GOLD, WATERCOOLER: NZXT KRAKEN Z63', '34999.00', '6', 'pcgamer', NULL, NULL),
(8, '200R – AMD RYZEN 7 5800X-RTX 3070 Ti', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/STARDUST-MINI-R5-5500-RTX-3050-Setup-Game.webp?resize=300%2C300&ssl=1https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/Pc-Gamer-R5-4600G-SG-LINES-Setup-Game-Maroc.png?resize=300%2C300&ssl=1', 'BOITIER: PHANTEKS ECLIPSE P500A, CARTE MERE: ASUS ROG STRIX X570-E GAMING, PROCESSEUR: AMD RYZEN 7 5800X (3.8 GHZ / 4.7 GHZ), CARTE GRAPHIQUE: GIGABYTE GEFORCE RTX 3070 Ti 8GB GAMING OC, RAM: 32GB (16GB X 2) 3600MHZ DDR4 CORSAIR VENGEANCE RGB PRO, STOCKAGE SSD: WD BLACK SN850 1TB NVME M.2, PSU: CORSAIR RM750X 80 PLUS GOLD, WATERCOOLER: NZXT KRAKEN X73', '23000.00', '9', 'pcgamer', NULL, '2023-07-03 01:23:07'),
(9, '210R – INTEL CORE I5-11600K-RTX 3060 Ti', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/Pc-Gamer-R5-3600-RX580-SG-LINES-Setup-Game-Maroc.png?resize=300%2C300&ssl=1\n', 'BOITIER: LIAN LI LANCOOL II MESH RGB, CARTE MERE: ASUS TUF GAMING B560M-PLUS WIFI, PROCESSEUR: INTEL CORE I5-11600K (3.9 GHZ / 4.9 GHZ), CARTE GRAPHIQUE: ZOTAC GEFORCE RTX 3060 Ti 8GB TWIN EDGE OC, RAM: 16GB (8GB X 2) 3200MHZ DDR4 CRUCIAL BALLISTIX BLACK, STOCKAGE SSD: WD BLUE SN550 500GB NVME M.2, PSU: CORSAIR CV550 80 PLUS BRONZE, WATERCOOLER: COOLER MASTER MASTERLIQUID ML240 RGB', '15999.00', '8', 'pcgamer', NULL, NULL),
(10, '220R – AMD RYZEN 9 5950X-RTX 3090', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/03/170-TG-AMD-RYZEN-9-5950X-RTX-3070-Setup-Game.webp?resize=300%2C300&ssl=1\n', 'BOITIER: CORSAIR CRYSTAL 680X RGB, CARTE MERE: ASUS ROG CROSSHAIR VIII HERO, PROCESSEUR: AMD RYZEN 9 5950X (3.4 GHZ / 4.9 GHZ), CARTE GRAPHIQUE: MSI GEFORCE RTX 3090 24GB SUPRIM X, RAM: 64GB (32GB X 2) 3600MHZ DDR4 G.SKILL TRIDENT Z NEO RGB, STOCKAGE SSD: SAMSUNG 980 PRO 2TB NVME M.2, PSU: CORSAIR RM1000X 80 PLUS GOLD, WATERCOOLER: CORSAIR iCUE H150i ELITE CAPELLIX', '77999.00', '2', 'pcgamer', NULL, NULL),
(11, '230R – INTEL CORE I9-10900K-RTX 3080', 'https://www.tera.ma/wp-content/uploads/2020/07/p_1_9_1_0_1910-COUGAR-Turret-RGB-Boitier-Gamer.jpg', 'BOITIER: NZXT H710I, CARTE MERE: ASUS ROG STRIX Z490-H GAMING, PROCESSEUR: INTEL CORE I9-10900K (3.7 GHZ / 5.3 GHZ), CARTE GRAPHIQUE: GIGABYTE GEFORCE RTX 3080 10GB GAMING OC, RAM: 32GB (16GB X 2) 3600MHZ DDR4 G.SKILL TRIDENT Z NEO RGB, STOCKAGE SSD: SAMSUNG 970 EVO PLUS 1TB NVME M.2, PSU: CORSAIR RM850X 80 PLUS GOLD, WATERCOOLER: NZXT KRAKEN X73', '36999.00', '4', 'pcgamer', NULL, NULL),
(12, 'MSI GF63 11SC-658XMA - Core™ i5 11th, GTX 1650, 8GB, 512GB', 'https://www.tera.ma/wp-content/uploads/2022/09/MSI-GF63-THIN-11SC-658XMA.jpg', 'TAILLE DE L\'ÉCRAN: 15,6″ pouces\r\n      CPU : Intel® Core™ i5-11400H\r\n      RAM : 8Gb DDR4\r\n      Disque dur : 512GB SSD\r\n      GPU : NVIDIA® GeForce® GTX™ 1650 4Go GDDR6\r\n      Écran : 15,6″ Full-HD (1920 x 1080 pixels) 144Hz IPS\r\n      Système d’Exploitation : Free DOS', '8999.00', '20', 'pcportable', NULL, NULL),
(14, 'Dell G5 15 - Core i7 11th, RTX 3050 Ti, 16GB, 1TB SSD', 'https://setupgame.ma/wp-content/uploads/2022/09/Pc-Portable-Gamer-MSI-Pulse-GL76-12UGK-257XMA-Setup-Game-300x300.webp', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-11th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 3050 Ti 4GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 120Hz IPS\r\n      Operating System: Windows 10', '1199.99', '21', 'pcportable', NULL, NULL),
(15, 'HP Omen 15 - Ryzen 7, RTX 3060, 16GB, 1TB SSD', 'https://i0.wp.com/setupgame.ma/wp-content/uploads/2023/02/MSI-GF76-Katana-11UE-Setup-Game.webp?resize=300%2C300&ssl=1', 'Screen Size: 15.6 inches\r\n      CPU: AMD Ryzen 7\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 3060 6GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 144Hz IPS\r\n      Operating System: Windows 10', '1299.99', '32', 'pcportable', NULL, NULL),
(16, 'Lenovo Legion 5 - Core i7 11th, GTX 1660 Ti, 16GB, 512GB', 'https://www.cdiscount.com/pdt2/2/0/2/1/400x400/MSI4711377044202/rw/pc-portable-gamer-msi-katana-15-b12vgk-240xfr.jpg', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-11th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 512GB SSD\r\n      GPU: NVIDIA GeForce GTX 1660 Ti 6GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 120Hz IPS\r\n      Operating System: Windows 10', '1199.99', '22', 'pcportable', NULL, NULL),
(17, 'MSI GL65 Leopard - Core i7 10th, RTX 2070, 16GB, 1TB SSD', 'https://c1.neweggimages.com/ProductImage/34-155-641-V19.jpg', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-10th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 2070 8GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 144Hz IPS\r\n      Operating System: Windows 10', '1499.99', '9', 'pcportable', NULL, NULL),
(18, 'ASUS ROG Strix G15 - Core i7 11th, RTX 3070, 16GB, 1TB SSD', 'https://www.fullpix.ma/wp-content/uploads/2023/01/asus-rog-strix-g15-g513ic-hn004-amd-ryzen-7-4800h-16gb-512gb-ssd-rtx-3050-fhd-144hz-15-6.png', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-11th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 3070 8GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 300Hz IPS\r\n      Operating System: Windows 10', '1799.99', '10', 'pcportable', NULL, NULL),
(19, 'Razer Blade 15 - Core i7 11th, RTX 3080, 16GB, 1TB SSD', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR41sukOkt_OcmqcTmhjNZcchurcWrGXzoAho1vTrqEPE5yrqTbMXv1lZQhWimA1ESTC4k&usqp=CAU', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-11th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 3080 8GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 360Hz IPS\r\n      Operating System: Windows 10', '2499.99', '20', 'pcportable', NULL, NULL),
(20, 'Gigabyte Aorus 15G - Core i7 11th, RTX 3060, 16GB, 512GB', 'https://cdn.ratake.com/md5_c12bfd14e885333f4c5d3ff6be3b051c.small.jpg', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-11th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 512GB SSD\r\n      GPU: NVIDIA GeForce RTX 3060 6GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 240Hz IPS\r\n      Operating System: Windows 10', '1699.99', '28', 'pcportable', NULL, NULL),
(21, 'Alienware m15 R4 - Core i7 10th, RTX 3080, 16GB, 1TB SSD', 'https://pc-gamer.ma/wp-content/uploads/2020/09/1_2_3.jpg.webp', 'Screen Size: 15.6 inches\r\n      CPU: Intel Core i7-10th Gen\r\n      RAM: 16GB DDR4\r\n      Storage: 1TB SSD\r\n      GPU: NVIDIA GeForce RTX 3080 8GB GDDR6\r\n      Display: 15.6\" Full HD (1920 x 1080) 300Hz IPS\r\n      Operating System: Windows 10', '2699.99', '40', 'pcportable', NULL, NULL),
(22, 'MSI Optix MAG241C 23.6\" Curved LED 144Hz', 'https://asset.msi.com/resize/image/global/product/product_6_20180612110658_5b1f38d2cf530.png62405b38c58fe0f07fcef2367d8a9ba1/600.png', 'Get immersed in your games with the MSI Optix MAG241C. This curved Full HD monitor features a 23.6-inch VA panel with a 144Hz refresh rate and 1ms response time for smooth and responsive gameplay. It also supports AMD FreeSync for tear-free visuals.', '1999.00', '15', 'monitors', NULL, NULL),
(23, 'AOC CQ32G1 31.5\" Curved LED 144Hz', 'https://m.media-amazon.com/images/I/81awCv2BspL.jpg', 'Enhance your gaming experience with the AOC CQ32G1. This curved QHD monitor offers a 31.5-inch VA panel with a 144Hz refresh rate and 1ms response time. It provides vivid visuals and smooth gameplay, making it ideal for competitive gaming.', '2499.00', '27', 'monitors', NULL, NULL),
(24, 'LG 24GL650F-B 23.6\" LED 144Hz', 'https://ngs-maroc.ma/1149-large_default/moniteur-lg-238-gaming-ultragear.jpg', 'The LG 24GL650F-B is a high-performance gaming monitor with a 23.6-inch Full HD display. It boasts a 144Hz refresh rate and 1ms response time, delivering fluid visuals and quick response in fast-paced games. It also supports AMD FreeSync for a tear-free gaming experience.', '1799.00', '12', 'monitors', NULL, NULL),
(25, 'BenQ EX2780Q 27\" LED 144Hz', 'https://m.media-amazon.com/images/I/81kU7dNyEML._AC_SL1500_.jpg', 'Immerse yourself in stunning visuals with the BenQ EX2780Q. This 27-inch QHD monitor features a 144Hz refresh rate and 1ms response time, offering smooth gameplay and crisp images. It also includes built-in speakers and HDR support for an enhanced multimedia experience.', '2999.00', '11', 'monitors', NULL, NULL),
(26, 'ViewSonic XG2405 23.8\" LED 144Hz', 'https://www.viewsonic.com/vsAssetFile/in/img/slides/_lcd_display_%28new%29/XG2405/XG2405_RF02.jpg', 'The ViewSonic XG2405 is a 23.8-inch Full HD gaming monitor that delivers smooth and responsive gameplay. With a 144Hz refresh rate and 1ms response time, it provides an immersive experience for competitive gaming. It also features AMD FreeSync technology for tear-free visuals.', '1799.00', '13', 'monitors', NULL, NULL),
(27, 'Acer Nitro VG240Y Pbiip 23.8\" LED 144Hz', 'https://m.media-amazon.com/images/I/71WLJlnALXL._AC_SL1500_.jpg', 'Step up your gaming with the Acer Nitro VG240Y Pbiip. This 23.8-inch Full HD monitor offers a 144Hz refresh rate and 1ms response time for seamless gameplay. It also features AMD FreeSync technology to eliminate screen tearing and stuttering.', '30', '29', 'monitors', NULL, NULL),
(41, 'Logitech G Pro Wireless Gaming Mouse (Noir)', 'https://materielpc.ma/wp-content/uploads/2021/12/61UxfXTUyvL._SL1500_.jpg', 'La souris Logitech G Pro Wireless Gaming Mouse embarque le nouveau capteur optique révolutionnaire HERO 25K de chez Logitech. Il ne génère ni lissage, ni filtrage, ni accélération sur l’ensemble de sa plage de dpi (100 – 25 600) et offre donc une précision inégalée et une réactivité homogène à n’importe quelle vitesse.', '1', '23', 'accessoires', NULL, '2023-07-03 12:28:55'),
(42, 'Souris Gaming Razer Deathadder V2', 'https://stationdetravail.ma/wp-content/uploads/2022/02/LD0005572877_2.jpg', 'Avec la souris Razer DeathAdder v2, offrez-vous une arme redoutable pour venir à bout des plus coriaces adversaires. En effet, elle intègre un capteur optique Razer Focus+ de 20000 dpi afin de vous offrir une précision inégalée.', '599.00', '22', 'accessoires', '2023-07-03 12:45:37', '2023-07-03 12:45:37'),
(43, 'Écran de gaming Dell 27 - G2722HS', 'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/peripherals/monitors/g-series/g2422hs/media-gallery/monitor-g2422hs-gallery-2.psd?fmt=pjpg&pscan=auto&scl=1&wid=4250&hei=3578&qlt=100,1&resMode=sharp2&size=4250,3578&chrss=full&imwidth=5000', 'Élevez votre niveau de jeu. Ajoutez un écran de 27 pouces à votre configuration et augmentez votre expérience de jeu : des graphismes fluides et sans déchirures grâce à un écran très réactif.', '2699.00', '16', 'monitors', '2023-07-03 12:51:32', '2023-07-03 12:51:32'),
(45, 'FGDGDFGD', 'https://stationdetravail.ma/wp-content/uploads/2022/02/LD0005572877_2.jpg', 'GHJ?K.', '5464', '16', 'accessoires', '2023-07-03 12:57:32', '2023-07-03 12:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'hamid', 'hamid@gmail.com', NULL, '$2y$10$5Kye3u4bMxexQ5iCfXppHOTsKqoTNzDtA7z7.NpZgvNZ2sF5Eq90m', NULL, '2023-07-02 19:13:35', '2023-07-02 19:13:35', 'user'),
(2, 'douae', 'doae@gmail.com', NULL, '$2y$10$Ty4zklOaYG5q6K2smf9qsOiuNPYbbpi0MGBt1VLKPMt9NAX7E//3a', '4xy9FtxnzHJQodK9U5pikpwD2nitQVksvmgHrCZ3OJnW2USFqR0aU8kGix9s', '2023-07-02 19:24:32', '2023-07-02 19:24:32', 'user'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$2pWIS1zX6muUvZ4hPyWB.e0h38ZIsHQ9xYj3sdz9FRPtW7Kl52iRy', NULL, '2023-07-02 19:52:17', '2023-07-02 19:52:17', 'admin'),
(4, 'hamdi', 'hamdi@gmail.com', NULL, '$2y$10$b.uVtxhPoO2Y.TitnCuu/ukYooSITbB/kvq2So1rktNxCiHXSujaW', NULL, '2023-07-03 19:46:09', '2023-07-03 19:46:09', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

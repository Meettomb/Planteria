-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 07:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloge`
--

CREATE TABLE `bloge` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `contant` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloge`
--

INSERT INTO `bloge` (`id`, `title`, `image`, `date`, `contant`, `created_at`, `updated_at`) VALUES
(2, 'How To Care for The Chinese Money Plant', 'blog1.jpg', '2024-02-23', 'You may not have known about the Chinese Money Plant prior to this but we bet you\'ll remember it after! Its quirky, whimsical leaves and button-like growth will leave you mesmerized and wanting more.\r\n\r\nAdditionally, the care for this plant is relatively easy as it is low maintenance and not so demanding. So, here\'s everything you need to know about the Chinese Money Plant, also called the Pilea Plant.\r\n\r\n\r\n\r\n\r\nWhen you look at the Chinese Money Plant, you\'ll probably understand immediately why it is referred to as the Pancake plant. Not just that but its other nicknames are astoundingly exact as well, such as the Coin Plant and the UFO Plant. \r\n\r\nScientifically called Pilea Peperomioides, this plant makes for a wonderful indoor plant and its overall quirky appearance makes it a natural charmer. It is a flowering plant found in China and extensively found at the foothills of the Himalayas. \r\n\r\nThis flowering plant grows small white flowers when grown outdoors but you must remember that as an indoor charmer, it remains a foliage plant. \r\n\r\n\r\n\r\n\r\n# Chinese Money Plant Care Tips  #\r\nThe Pancake plant thrives in indirect sunlight but remember to avoid direct exposure to prevent leaf scorching. It also prefers temperatures between 65°F to 75°F (18°C to 24°C) and moderate humidity levels.\r\n\r\nKeep this plant away from drafty windows or heating vents for stable temperatures, as it does not do well with sudden temperature changes.', NULL, NULL),
(3, 'How Does Seaweed Extract Help Plants?', 'blog2.jpg', '2024-02-26', 'Seaweed fertilizer as been used to feed plants for quite a while now. There has been historical evidence of its use and proof that seaweed is a natural fertilizer that provides a multitude of benefits for growing crops and enhancing soil. So, what really are these benefits and how can you make use of them?\r\n\r\n\r\n\r\n1. Nutrient-Rich Composition of Seaweed Fertilizer\r\nSeaweed extract for plants is packed with essential nutrients such as nitrogen, phosphorus, potassium, and trace minerals, which are vital for plant growth and development.\r\n\r\n\r\n\r\n2. Seaweed Extract Stimulates Root Growth\r\nThe natural hormones present in seaweed extract, such as auxins, cytokinins, and gibberellins, promote root development, leading to healthier and more robust root systems.\r\n\r\n\r\n\r\n3. Effect of Seaweed Extract on Plant Growth\r\nSeaweed extract contains amino acids and vitamins that aid in the synthesis of proteins and enzymes, facilitating overall plant growth and vigor. These are called ‘phytostimulatory’ properties that allow for faster and optimal plant growth.\r\n\r\n\r\n\r\n4. Seaweed Fertilizer to Improve Stress Tolerance\r\nThe bioactive compounds in seaweed extract help plants withstand environmental stresses like drought, heat, and disease, enhancing their resilience and survival rates.', NULL, NULL),
(6, 'What You Should Know When Growing Apricots', 'blog3.jpg', '2024-03-01', 'Scientifically known as Prunus armeniaca, Apricots are a kind of stone fruit. They closely resemble peaches in appearance and nutritional value but there are a few things that, of course, set them apart. \r\n\r\nApricots are often beloved for their health benefits, sweet flavors, and vibrant appearance. Consuming home-grown fruits as compared to the commercial, store-bought ones is always a delight. So, why not grow those that bring multiple health benefits to the table with them!\r\n\r\nHere\'s what you should know about growing apricots and the fruit in general: \r\n\r\n\r\n1. Rich in Nutrients\r\nApricots are packed with essential vitamins and minerals, including vitamin A, vitamin C, potassium, and dietary fiber. These nutrients support overall health and well-being.\r\n\r\n\r\n\r\n2. Eye Health\r\nApricots are an excellent source of beta-carotene, which is converted into vitamin A in the body. Vitamin A is crucial for maintaining good vision and eye health, helping to prevent conditions such as age-related macular degeneration and cataracts.\r\n\r\n\r\n\r\n3. Heart Health\r\nThe high potassium content in apricots helps regulate blood pressure and maintain a healthy cardiovascular system. Additionally, the dietary fiber in apricots can help lower cholesterol levels, reducing the risk of heart disease.\r\n\r\n\r\n\r\n4. Digestive Health\r\nApricots are rich in dietary fiber, which promotes healthy digestion by supporting regular bowel movements and preventing constipation. Fiber also helps maintain a healthy gut microbiome.\r\n\r\n\r\n\r\n5. Antioxidant Properties\r\nApricots contain various antioxidants, including vitamins A and C, which help neutralize harmful free radicals in the body. This antioxidant activity may help reduce the risk of chronic diseases and slow down the aging process.\r\n\r\n\r\n\r\n6. Skin Health\r\nThe vitamins and antioxidants in apricots contribute to healthy skin by promoting collagen production, improving skin elasticity, and protecting against UV damage. Apricot oil, extracted from apricot kernels, is also used in skincare products for its moisturizing and nourishing properties.\r\n\r\n\r\n\r\n7. Weight Management\r\nApricots are low in calories and fat while being high in fiber, making them a satisfying and nutritious snack option for those looking to manage their weight.\r\n\r\n\r\n\r\n8. Cancer Prevention\r\nSome studies suggest that the antioxidants in apricots may have protective effects against certain types of cancer, although more research is needed to confirm these findings.\r\n\r\n \r\n\r\n \r\n\r\n• Growing Apricots in Pots\r\nApricots in Pots\r\n\r\nIf you happen to be one of those who enjoy planting and growing their own fruits and vegetables, the idea of apricot planting need not be so far-fetched! There are various different ways to grow fruits and vegetables and figuring out which way works best for the ones you want to grow is the first step to success! \r\n\r\nIf you\'re falling short of space, growing apricots in pots is a great idea and works well. You only have to keep in mind your watering schedules, the kind of pots you make use of, and the potting soil that you use to support your plant.\r\n\r\nFor that, here are a few care tips that you must make use of in order to be able to grow apricots successfully:\r\n\r\n \r\n\r\n \r\n\r\n• Apricot Plant Care Tips\r\nGrowing Apricots in Garden\r\n1. Sunlight\r\nApricot trees thrive in full sunlight, so choose a planting location that receives at least 6 to 8 hours of direct sunlight per day.\r\n\r\n\r\n\r\n2. Soil\r\nApricots prefer well-draining soil with a pH level between 6.0 and 7.5. Avoid planting them in soil that is prone to waterlogging, as this can lead to root rot.\r\n\r\n\r\n\r\n3. Watering\r\nWhile apricot trees are relatively drought-tolerant once established, they still require regular watering, especially during dry periods and the growing season. Provide deep, infrequent watering to encourage deep root growth. Avoid overwatering, as this can lead to root rot.\r\n\r\n\r\n\r\n4. Fertilization\r\nApply a balanced fertilizer in early spring before new growth begins. Use a fertilizer specifically formulated for fruit trees and follow the manufacturer\'s instructions for application rates.\r\n\r\n\r\n\r\n5. Pruning\r\nPruning an Apricot Plant Branch\r\n\r\nWhen to prune apricot trees? Pruning is essential for maintaining the health and shape of apricot trees. Prune them in late winter or early spring while they are dormant. Remove any dead, diseased, or crossing branches, as well as any water sprouts or suckers that emerge from the base of the tree.\r\n\r\n\r\n\r\n6. Pollination\r\nMost apricot varieties are self-pollinating, but when growing apricot, you can keep in mind that planting multiple trees can increase fruit production. Bees are the primary pollinators of apricot flowers, so encourage bee activity by planting bee-friendly flowers nearby.\r\n\r\n\r\n\r\n7. Thinning\r\nThin the fruit clusters when they are still small to ensure that the remaining fruits have enough space to grow and develop properly. Thin apricots to about 4 to 6 inches apart on the branches.\r\n\r\n\r\n\r\n8. Pest and Disease Management\r\nKeep an eye out for common pests and diseases that affect apricot trees, such as aphids, spider mites, peach twig borer, bacterial canker, and brown rot. Use organic or chemical controls as necessary to manage pest and disease problems.\r\n\r\n\r\n\r\nBuy Pest Control\r\n\r\n\r\n9. Winter Protection\r\nRipe Apricots\r\n\r\nIf you live in areas with cold winters, protect your apricot trees from frost damage by wrapping the trunks with tree wrap or using frost blankets during freezing temperatures.\r\n\r\n\r\n\r\n10. Harvesting\r\nHarvest apricots when they are fully ripe but still firm. They should have a deep orange color and a sweet aroma. Remember to handle the fruit carefully to avoid any bruising, and store them in the refrigerator for extended freshness.\r\n\r\n \r\n\r\n \r\n\r\n• When to Plant Apricot Trees: The Best Apricot Growing Season\r\nApricot Tree\r\n\r\nIn India, the timing for planting apricot trees varies depending on the region\'s climate. In cooler northern regions like Himachal Pradesh and Jammu and Kashmir, planting in early spring or late fall is suitable. In warmer regions like parts of Punjab and Haryana, planting in fall or winter may be preferable to avoid extreme summer heat.\r\n\r\nIf you are growing apricots in pots, it can be done year-round in suitable weather. Starting seeds indoors in late winter applies to regions with colder winters.\r\n\r\n \r\n\r\nNow that you know so much about growing apricots, when will you be growing them?\r\n\r\n \r\n\r\nBuy Fruit Seeds\r\n \r\n\r\nShare\r\nOpens in a new window.\r\nTweet\r\nOpens in a new window.\r\nPin it\r\nOpens in a new window.\r\nEmail\r\nOpens in a new window.\r\nWhatsapp\r\nTranslation missing: en.general.social.alt_text.share_on_whatsapp\r\nBACK TO GARDENING BASICS\r\nCreating A Garden For Pollinators: Things You Can Do\r\nHow Does Seaweed Extract Help Plants?\r\nPlant Protection and Organic Fertilisers\r\n\r\n\r\nYou may also like\r\nMushroom Growing in a Plant Pot\r\nHow to Get Rid of Mushrooms in Houseplants\r\nFEBRUARY 07, 2024\r\n5 Must-Have Pruning Tools for Your Garden\r\n5 Must-Have Pruning Tools for Your Garden\r\nNOVEMBER 21, 2023\r\nProfessional Garden Maintenance\r\nGarden Maintenance Services: Everything You Need to Know\r\nNOVEMBER 01, 2023\r\nDoes Burned Soil Affect Seed Germination?\r\nDoes Burned Soil Affect Seed Germination?\r\nOCTOBER 30, 2023\r\nVIEW ALL\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nplants grow people\r\nMumbai\r\nPune\r\nDelhi\r\nBangalore\r\nHyderabad\r\nChennai\r\nKolkata\r\nABOUT US\r\nOur Story\r\nCareers\r\nContact Us\r\nLocate Stores\r\nOwn Grown\r\nGarden Services & Maintenance\r\nCUSTOMER CARE\r\nTake The Plant Quiz\r\nTrack Order\r\nShipping Policy\r\nTerms and Conditions\r\nPrivacy Policy\r\nFAQs\r\nTerms of Service\r\nRefund policy\r\nOFFERS & REWARDS\r\nPlant Parent Rewards Club\r\nUgaoo Coupons\r\nGET IN TOUCH\r\nCall : +91-9129-9129-91\r\n\r\nEmail : support@ugaoo.com\r\n\r\nSIGN UP FOR OUR NEWSLETTER\r\nFor plant care tips, our featured plant of the week, exclusive offers and discounts\r\n\r\nEnter email address\r\nEnter email address\r\nFOLLOW US\r\nFacebook\r\nTwitter\r\nInstagram\r\nLinkedIn\r\nYouTube\r\nSITEMAP\r\n© 2024, Ugaoo. All rights reserved.\r\nPayment methods', NULL, NULL),
(7, 'Garden Maintenance Services: Everything You Need to Know', 'blog4.jpg', '2024-03-04', 'Gardening is not only a therapeutic and calming process, but if you know about plants then you might know that they have many more benefits than meet the eye at first sight. Maintaining your home garden and making new additions to it regularly could often help with keeping you content and your home green. But maintaining the perfect, calming garden can be a difficult process to do on your own. This is where professional garden maintenance comes into play.\r\nIf you have been considering getting professional help for garden maintenance but have also been unsure about where to start and how to go about it, stick around because we will answer all your questions in this article.\r\n\r\n\r\n\r\nGarden maintenance services include a wide range of activities designed to keep your home garden in the best shape. These projects go beyond simple garden maintenance and transcend into getting to know your land in order to determine the plan of action.\r\n\r\nAt Ugaoo, that is how we begin. Once we get a lay of your land, we believe your plants have a way of letting their care requirements be known. Under the vast umbrella of garden maintenance services, we offer a variety of sub-services that will allow you to get timely, cost-effective, and the best possible care for your plants.\r\n\r\n• Garden Maintenance According to your Garden Design\r\nWe believe that getting a lay of your land also means keeping your garden design in mind. However that may be, there are multiple services that will help you achieve your desired result. Here are a few of the services that we offer at Ugaoo for garden maintenance: \r\n\r\n2. Pest control and Fertigation:\r\nA big aspect of effective garden care is pest control. Making sure that pests like aphids, caterpillars, and other mites are not feeding off of your plants is crucial. Ugaoo provides the right kind of care for your home garden and makes sure your plants are safe.\r\nMoreover, we also offer fertigation services, which means getting fertilizers to your plants through an effective irrigation system.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pid` varchar(255) DEFAULT NULL,
  `p_image` varchar(150) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `main_price` varchar(255) DEFAULT NULL,
  `dis_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `uid`, `uname`, `email`, `pid`, `p_image`, `product_name`, `main_price`, `dis_price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, '11', 'abc', 'b@b.b', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(2, '11', 'abc', 'b@b.b', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(3, '12', 'abc', 'b@b.c', '2', '', 'Cosmos', '300', '150', '1', NULL, NULL),
(23, '12', 'abc', 'b@b.c', '1', '', 'Ajwain Plant', '400', '299', '1', NULL, NULL),
(24, '12', 'abc', 'b@b.c', '26', 'plant_packeg1.jpg', '4 Best Indoor Plants Pack', '3000', '2000', '1', NULL, NULL),
(25, '14', 'Meet', 'Patel@gmail.com', '2', 'seed1.jpg', 'Cosmos', '300', '150', '1', NULL, NULL),
(26, '14', 'Meet', 'Patel@gmail.com', '6', 'Bamboo Palm Plant.jpg', 'Bamboo Palm Plant', '499', '399', '1', NULL, NULL);

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
-- Table structure for table `login_clients`
--

CREATE TABLE `login_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female','Prefer not to say') NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `isactive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_clients`
--

INSERT INTO `login_clients` (`id`, `first_name`, `last_name`, `gender`, `dob`, `email`, `phone`, `address`, `pincode`, `password`, `role`, `isactive`, `created_at`, `updated_at`) VALUES
(19, 'Meet', 'Patel', 'Male', '2005-03-23', 'patelmeet23032005@gmail.com', '9725254775', 'Jivrajpark', '380051', '$2y$12$rvnv5gIVtToIoE8Ss.QZqu1dlVBbqKkR8xBm7guRykkAaSjJ3exQW', 'user', 1, NULL, NULL),
(20, 'Admin', 'Master', 'Male', '2005-03-23', 'ourplanteria@gmail.com', '1552155762', 'Planteria', '454525', '$2y$12$A10AFOI3IR8P.slwo9.FnugednrLdQmY3/UrKbQsV8NJqB/Jngpya', 'admin', 1, NULL, NULL);

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
(5, '2024_02_29_144757_create_plants_table', 1),
(6, '2024_03_01_091105_create_login_clients_table', 2),
(7, '2024_03_01_093438_create_carts_table', 3),
(8, '2024_03_01_095124_create_carts_table', 4),
(9, '2024_03_01_131701_create_login_clients_table', 5),
(10, '2024_03_01_150155_create_product_datas_table', 6),
(11, '2024_03_01_150604_create_product_data_table', 7),
(12, '2024_03_02_093042_create_carts_table', 8),
(13, '2024_03_03_141311_create_bloge_table', 9),
(14, '2024_03_14_215642_create_order_carts_table', 10),
(15, '2024_03_15_045915_create_orders_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `order_id` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `email`, `first_name`, `last_name`, `address`, `city`, `state`, `pincode`, `phone`, `price`, `payment_method`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(3, '19', 'patelmeet23032005@gmail.com', 'Meet', 'Patel', 'Jivrajpark', 'Ahmedabad', 'Gujarat', '380051', '9725254775', '319', 'COD', 3848452, 'pending', '2024-08-05 10:47:04', '2024-08-05 10:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_carts`
--

CREATE TABLE `order_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pid` varchar(255) DEFAULT NULL,
  `p_image` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `dis_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `order_id` bigint(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_carts`
--

INSERT INTO `order_carts` (`id`, `uid`, `uname`, `email`, `pid`, `p_image`, `product_name`, `dis_price`, `quantity`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(5, '19', 'Meet', 'patelmeet23032005@gmail.com', '3', 'pesce_lily.jpg', 'Peace Lily Plant', '319', '1', 3848452, 'pending', '2024-08-05 10:47:04', '2024-08-05 10:47:04'),
(6, '19', 'Meet', 'patelmeet23032005@gmail.com', '1', 'Ajwain Plant.jpg', 'Ajwain Plant', '320', '1', 3249749, 'pending', '2024-08-05 10:47:44', '2024-08-05 10:47:44'),
(7, '19', 'Meet', 'patelmeet23032005@gmail.com', '2', 'seed1.jpg', 'Cosmos', '120', '1', 3249749, 'pending', '2024-08-05 10:47:44', '2024-08-05 10:47:44');

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
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plants_image1` varchar(255) NOT NULL,
  `plants_image2` varchar(255) DEFAULT NULL,
  `plants_name` varchar(255) NOT NULL,
  `plants_category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `plants_benefits` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `plants_image1`, `plants_image2`, `plants_name`, `plants_category`, `price`, `description`, `plants_benefits`, `created_at`, `updated_at`) VALUES
(8, 'Borneo-Giant.jpg', NULL, 'Rarest Borneo Elephant Ear Plant', 'Indoor Plant', '700', 'Alocasia Elephant Ear  Live Plant can be container grown. Alocasia elephant ear plant also known as Alocasia macrorrhiza is also known as the ‘Giant Elephant Ear’. It is a fantastic specimen plant for that tropical look, and is also a great indoor plant. It has large, glossy emerald green leaves 4-6 feet long, held stiffly upwards, with prominent veining on the underside of the leaves. The plant will easily grow to 9 feet in good conditions in the ground. If grown in a pot, it will not reach its full potential, but still, expect at least 3 to 4 feet (or more) if your pot is large enough.', NULL, NULL, NULL),
(9, 'Peace Lily Plant.jpg', NULL, 'Peace Lily Plant', 'Indoor Plant', '300', 'The bigger cousin of the beautiful peace lily, the Spathiphyllum Sensation is one of the most loved peace lily varieties in the world. In addition to its majestic white flowers, it has large, glossy, oblong leaves that are excellent air purifiers. The best part is its ease of growth and low-maintenance nature which makes it a perfect choice for first-time gardeners.', NULL, NULL, NULL),
(10, 'Ajwain Plant.jpg', NULL, 'Ajwain Plant', 'Kitchen Plant', '500', 'A staple in Indian kitchens deserves a place in your garden. Also famous as Indian borage or a Mexican mint, use the leaves as mouth fresheners or dry them to use as spices. A great addition to your indoor spaces with beautiful leaves that also make your home smell great at all times. Growing your herbs also means, no pesticides for sure.', NULL, NULL, NULL),
(11, 'kesar-mango-plant.jpg', NULL, 'Kesar Mango Plant', 'Fruit Plant', '1000', 'Mango, the king of fruits, is truly the favourite fruit of Indian people. This summer staple is easy to grow and care for and needs a spot in your garden with at least 6 hours of full sun and a rich well-draining soil. Plant the mango sapling directly into the ground and protect it from small animals and strong winds till the plant establishes itself. The Ugaoo mango plant has been grown organically under expert care to ensure that your tree has a strong foundation for a healthy produce. The tree produces large sized, sweet, and succulent Kesar mangoes in the summer season.\r\n\r\nMango Plant\r\n\r\nMango is a tropical fruit that is native to India and has been grown in the region for thousands of years. It is one of the most popular and beloved fruits in the country, and the mango plant is also an important part of Indian cuisine and culture.\r\nThere are many different varieties of mango plants in India, including Alphonso, Kesar, Dasheri, Chausa, and Langra. Each variety has its own unique flavour, texture, and appearance.\r\n\r\nGrowing mangoes from seed is not so difficult.\r\nTo grow a mango plant from seed in India, follow these steps:\r\n\r\n1. Start with a fresh mango seed from a ripe mango fruit.\r\n2. Soak the seed in water for a few days to soften the outer layer.\r\n3. Remove the seed from the water and gently scrub it with a soft brush to remove any remaining flesh.\r\n4. Plant the seed in a pot filled with well-draining soil, with the pointed end facing down.\r\n5. Water the soil and place the pot in a warm, sunny location.\r\n6. Keep the soil moist but not waterlogged, and be patient as it can take several weeks for the seed to germinate.\r\n7. When the seedling is large enough, transplant the mango tree plant into a larger pot or into the ground.\r\n\r\nMango Plant Care\r\n\r\nHere are some tips for caring for mango trees at home:\r\n\r\n1. Plant your mango tree in a sunny location with well-draining soil. Mango trees require plenty of sunlight to produce fruit, and they do not tolerate waterlogged soil.\r\n2. Water your mango tree regularly, but be careful not to over-water as this can lead to root rot. Water the tree deeply and allow the soil to dry out slightly between watering.\r\n3. Fertilise your mango tree with a well-balanced fertiliser. Mango trees require a fertiliser that is high in nitrogen, phosphorus, and potassium to promote healthy growth and fruit production.\r\n4. Prune your mango tree to remove any damaged, diseased, or overcrowded branches. This will help to promote healthy growth and improve airflow around the tree.\r\n5. Protect your mango tree from pests and diseases. Common pests that can affect mango trees include scale insects, mango hoppers, and mango mealybugs. To prevent these pests, keep the tree clean and free of debris, and use an appropriate pest control product if necessary.\r\n6. Mulch around the base of the tree to help retain moisture and suppress weeds.\r\n7. Consider protecting your mango tree from extreme weather conditions, such as strong winds or extreme heat. This can be done by using stakes or windbreaks, or by providing shade for the tree.\r\n\r\nIf you prefer, you can also buy a mango tree plant online or at a local nursery. Mango trees can be found for sale online at Ugaoo, Be sure to research the seller and carefully read the plant descriptions to ensure that you are getting a healthy, high-quality plant.', NULL, NULL, NULL),
(12, 'Twisted Hoya.jpg', NULL, 'Twisted Hoya', 'Hanging Basket Plant', '1100', 'Hoya carnosa has twisted, waxy leaves that emerge on long rope-like vines, making this Hoya perfect as a hanging plant. Sometimes known by its nicknames, Hindu Rope Hoya and Indian Rope Hoya, it will eventually produce beautiful clusters of star-shaped pink flowers as it matures. Also called the Krinkle Curl plant and this conversation starter will add a unique touch to your home.', NULL, NULL, NULL),
(13, 'Bamboo Palm Plant.jpg', NULL, 'Bamboo Palm Plant', 'Air Plant', '400', 'Its lush green foliage swaying daintily in the breeze is sure to remind you of tropical resorts. The stunning green leaves grow directly from the stem and over time the spread of the plant increases to fill up the pot. An excellent air purifier the bamboo palm is easy to grow and maintain, it makes a great centrepiece in a quirky pot.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_data`
--

CREATE TABLE `product_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `pm_category` varchar(255) NOT NULL,
  `ps_category` varchar(255) NOT NULL,
  `main_price` varchar(255) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `dis_price` int(255) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `description` longtext DEFAULT NULL,
  `p_benefits` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_data`
--

INSERT INTO `product_data` (`id`, `p_image`, `p_name`, `pm_category`, `ps_category`, `main_price`, `percentage`, `dis_price`, `quantity`, `description`, `p_benefits`, `created_at`, `updated_at`) VALUES
(1, 'Ajwain Plant.jpg', 'Ajwain Plant', 'Plants', 'Indoor plants', '400', '20', 320, '6', 'A staple in Indian kitchens deserves a place in your garden. Also famous as Indian borage or a Mexican mint, use the leaves as mouth fresheners or dry them to use as spices. A great addition to your indoor spaces with beautiful leaves that also make your home smell great at all times. Growing your herbs also means, no pesticides for sure.', 'Ajwain seeds are renowned for their digestive properties. They contain thymol, an active compound that aids in relieving indigestion, flatulence, and bloating. Incorporating ajwain into your diet can promote a healthy digestive system.', NULL, NULL),
(2, 'seed1.jpg', 'Cosmos', 'Seeds', 'Fruir Seed', '300', '60', 120, '3', 'asbdjadjao', 'good', NULL, NULL),
(3, 'pesce_lily.jpg', 'Peace Lily Plant', 'Plants', 'Indoor Plants', '399', '20', 319, '9', 'In the bustling world we live in today, finding pockets of tranquility can be a challenging endeavor. However, there\'s a simple yet powerful way to infuse peace and serenity into your surroundings - the Peace Lily plant (Spathiphyllum). Known for its lush green leaves and elegant white blooms, the Peace Lily is more than just a decorative houseplant. It\'s a natural air-purifying houseplant, an emblem of serenity and well-being, and a symbol of peace Lily benefits. In this comprehensive guide, we\'ll explore the benefits of Peace Lily, where to keep it, Peace Lily care tips, and the importance of Peace Lily in indoor plant care and houseplant decoration.', '→Air Purification:\r\nPeace Lilies are renowned for their air-purifying abilities. They remove common indoor pollutants such as formaldehyde, benzene, and ammonia, making the air cleaner and healthier to breathe. This makes them an excellent addition to homes and offices.\r\n→Low Maintenance:\r\nPeace Lilies are incredibly easy to care for, making them suitable for both novice and experienced gardeners. They thrive in low to moderate light and are forgiving when it comes to watering.', NULL, NULL),
(4, 'Peace Lily Plant - Set of 2.jpg', 'Peace Lily Plant - Set of 2', 'Plants', 'Indoor Plants', '1999', '20', 1599, '', 'The bigger cousin of the beautiful peace lily, the Spathiphyllum Sensation is one of the most loved peace lily varieties in the world. In addition to its majestic white flowers, it has large, glossy, oblong leaves that are excellent air purifiers. The best part is its ease to grow and low maintenance nature that makes it a perfect choice first time gardeners.', '→Air Purification:\r\nPeace Lilies are renowned for their air-purifying abilities. They remove common indoor pollutants such as formaldehyde, benzene, and ammonia, making the air cleaner and healthier to breathe. This makes them an excellent addition to homes and offices.\r\n→Low Maintenance:\r\nPeace Lilies are incredibly easy to care for, making them suitable for both novice and experienced gardeners. They thrive in low to moderate light and are forgiving when it comes to watering.', NULL, NULL),
(5, 'Anthurium Red Plant.jpg', 'Anthurium Red Plant', 'Plants', 'Flower Plants', '999', '20', 799, '', 'In the world of indoor gardening, the Anthurium Red Plant, also known as the Red Anthurium or Red Flamingo Plant, stands out as a captivating and vibrant addition to any home or office space. With its stunning red anthurium flowers, this plant not only adds aesthetic appeal but also offers a host of benefits. In this comprehensive guide, we\'ll delve into the world of the Anthurium Plant, discussing its care tips, benefits, and why it has become such a sought-after indoor plant.\r\nThe Anthurium Red Plant, scientifically known as Anthurium andraeanum, is native to the tropical regions of Central and South America. Its striking red anthurium flowers, resembling a heart-shaped bouquet, make it a symbol of love and admiration. This vibrant plant is an evergreen perennial that thrives indoors when provided with the right care.', 'Air Purification:\r\nAnthurium Red Plants are renowned for their air-purifying abilities. They can effectively remove toxins like formaldehyde, ammonia, and xylene from the air, improving indoor air quality.\r\n\r\nAesthetic Appeal:\r\nThe captivating red anthurium flowers add a burst of color and elegance to any indoor space. They make for a perfect centerpiece or a stylish decorative element.', NULL, NULL),
(6, 'Bamboo Palm Plant.jpg', 'Bamboo Palm Plant', 'Plants', 'Air Plants', '499', '20', 399, '', 'The bamboo palm plant, also known as the lady palm or parlour palm, is a popular houseplant that is native to Mexico and Central America. It is a low-maintenance plant that is known for its lush green foliage and air-purifying properties. Bamboo palms are relatively slow-growing plants, but they can reach heights of up to 10 feet indoors.', 'Improved air quality:\r\nBamboo palms are effective at removing harmful toxins from the air, such as formaldehyde, benzene, and toluene. This can help to improve indoor air quality and reduce the risk of respiratory problems.\r\n\r\nStudies have shown that being around plants can help to reduce stress levels and improve mood. Bamboo palms are no exception. Their lush green foliage and calming presence can help to create a more relaxing and inviting environment.', NULL, NULL),
(7, 'Monstera Deliciosa Plant.jpg', 'Monstera Deliciosa Plant', 'Plants', 'Air Plants', '1499', '20', 1199, '', 'You might have seen it in a million home decor posts on social media, the absolute reigning king, the Monstera Deliciosa, or the Swiss Cheese Plant is a prepossessing tropical delight with shiny large leaves with natural holes that resemble those in Swiss Cheese. Its mere presence adds happiness to a home and elevates your decor.', 'In conclusion, the Monstera plant is not only a visually stunning addition to your living space but also an effective air purifier. With its ability to remove harmful pollutants and maintain healthy humidity levels, a Monstera plant can help you breathe easier and improve your overall well-being.', NULL, NULL),
(8, 'Philodendron Melinonii Golden.jpg', 'Philodendron Melinonii Golden', 'Plants', 'Outdoor Plants', '2299', '20', 1839, '', 'A non-vining and big-leafed member of the philodendron family, the Philodendron melinonii green is a fuss-free plant. This dark green philodendron variety is an excellent choice if you are looking to add a tropical vibe to your indoor garden and looks equally stunning in shaded outdoor gardens. The leaves are large and a glossy dark green with clearly defined veins supported by a thick leaf stalk that can range in colour from light green to coppery red. In its natural habitat, the Philodendron melinonii can grow as an epiphyte on the top of trees forming a crown. A rare and new plant for Indian gardens, it is extremely easy to care for and loves the indian tropical growing conditions.', 'removes airborne toxins such as formaldehyde, benzene, and trichloroethylene from the atmosphere.', NULL, NULL),
(9, 'Sapota Plant (Chiku).jpg', 'Sapota Plant (Chiku)', 'Plants', 'Fruit Plants', '1299', '20', 1039, '', 'The chicoo plant (also known as sapodilla or sapota) is native to Mexico, Central America, and the Caribbean, and it has been grown in these regions for hundreds of years. It was introduced to India and other tropical countries by Spanish and Portuguese colonists, and it has become an important fruit crop in these regions.\r\nChiku plant care\r\nTo care for a sapota plant, follow these guidelines-', 'How To grow a chiku (also known as sapodilla) plant, follow these steps:\r\n\r\n1. Start with a fresh chiku seed from a ripe fruit.\r\nSoak the seed in water for a few days to soften the outer layer.\r\n2. Remove the seed from the water and gently scrub it with a soft brush to remove any remaining flesh.\r\n3. Plant the seed in a pot filled with well-draining soil, with the pointed end facing down.\r\nWater the soil and place the pot in a warm, sunny location.\r\n4. Keep the soil moist but not waterlogged, and be patient as it can take several weeks for the seed to germinate.\r\nWhen the seedling is large enough, transplant it into a larger pot or into the ground.', NULL, NULL),
(10, 'Song of India.jpg', 'Song of India', 'Plants', 'Outdoor Plants', '1449', '20', 1159, '', 'A non-vining and big-leafed member of the philodendron family, the Philodendron melinonii green is a fuss-free plant. This dark green philodendron variety is an excellent choice if you are looking to add a tropical vibe to your indoor garden and looks equally stunning in shaded outdoor gardens. The leaves are large and a glossy dark green with clearly defined veins supported by a thick leaf stalk that can range in colour from light green to coppery red. In its natural habitat, the Philodendron melinonii can grow as an epiphyte on the top of trees forming a crown. A rare and new plant for Indian gardens, it is extremely easy to care for and loves the indian tropical growing conditions.', 'Air purification: Song of India plant removes indoor air pollutants like benzene, formaldehyde, and trichloroethylene. 2 Humidity boost: It increases indoor humidity levels, which can benefit people with dry skin, respiratory problems, and cold/flu symptoms.', NULL, NULL),
(11, 'kesar-mango-plant.jpg', 'Kesar Mango Plant', 'Plants', 'Fruit Plants', '1249', '20', 999, '', 'Mango, the king of fruits, is truly the favourite fruit of Indian people. This summer staple is easy to grow and care for and needs a spot in your garden with at least 6 hours of full sun and a rich well-draining soil. Plant the mango sapling directly into the ground and protect it from small animals and strong winds till the plant establishes itself. The Ugaoo mango plant has been grown organically under expert care to ensure that your tree has a strong foundation for a healthy produce. The tree produces large sized, sweet, and succulent Kesar mangoes in the summer season.', 'Mango is a tropical fruit that is native to India and has been grown in the region for thousands of years. It is one of the most popular and beloved fruits in the country, and the mango plant is also an important part of Indian cuisine and culture.\r\nThere are many different varieties of mango plants in India, including Alphonso, Kesar, Dasheri, Chausa, and Langra. Each variety has its own unique flavour, texture, and appearance.', NULL, NULL),
(12, 'Orange Fruit, Santra - Plant.jpg', 'Orange Fruit, Santra - Plant', 'Plants', 'Fruit Plants', '599', '20', 479, '', 'Orange trees are widely grown in tropical and subtropical climates for their sweet fruit. The fruit of the orange tree can be eaten fresh, or processed for its juice or fragrant peel.\r\n\r\nCitrus trees grown as ornamental container plants may take up to five years to produce fruit. Container-grown ornamental orange trees are usually the dwarf varieties which grow to a height of 4 to 10 feet. Limited root space has the effect of stunting tree growth even if it is a standard variety.\r\n\r\nCitrus trees are damaged at frost temperature but can be grown in wintertime indoo', 'Care and maintenance of the tree to keep it pest free will bring the rewards of fruit which ripens in the winter. They need pruning each year to maintain attractive shape. Cut all deadwood and crossing branches. Prune ornamental citrus to open the crown foliage to let in light and air.', NULL, NULL),
(13, 'Apple Tree (Grafted) - Plant.jpg', 'Apple Tree - Plant', 'Plants', 'Fruit Plants', '599', '20', 479, '', 'The apple tree is a deciduous tree in the rose family best in terms of sweetness, richness, and flavor.\r\n\r\nThe apple tree is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree and is the most widely grown species in the genus Malus.It is cultivated worldwide as a fruit tree.', 'Apple plantation is done from June to December. Normally, this plant is planted at a spacing of 4 x 4 m into pits of 60 cm x 60 cm x 60 cm. At the time of planting, mix organic manure in the soil.\r\nAlso, you can plant in the planter using the potting mix as the soil, vermicompost, and coco peat (1:1:1).', NULL, NULL),
(14, 'tomato.jpg', 'Tomato Plants', 'Plants', 'Vegetable Plants', '400', '20', 320, '', 'The most popular garden vegetable crop, tomatoes come in a wide range of sizes, shapes and colo Choose determinate varieties for early harvest or cool conditions. Compact varieties are also good choices for containers and planting in flower beds.Tomatoes are an incredibly versatile food.', 'They are often considered as a vegetable, though ideally they are a citrus fruit. They are a rich source of Vitamin C and help in increasing your immunity. Not just this, tomatoes also provide several other vitamins, magnesium, phosphorus and copper, all of which are necessary for good health.The best part is that they can be eaten either raw, in salads, sandwiches or in vegetables.', NULL, NULL),
(15, 'Cucumber.jpg', 'Cucumber', 'Plants', 'Vegetable Plants', '500', '20', 400, '', 'No summer garden should be without cucumbe They are very easy to grow and are very prolific. Planted in a section of the garden that receives full sun and has an evenly moist, fertile soil, success is almost guaranteed.', 'Lifecycle: annualEase-of-care: easy, Cucumbers are not hard to grow if you provide good soil, plenty of moisture and full sun, wait for soil and weather to warm before planting, and use fabric row covers if pests are a problem.Height: 1 to 6 feet, Vining varieties can climb up to 6 feet with support, or hug the ground if allowed to sprawl.Spread: 1 to 6 feet, Bush varieties take up only 2 or 3 square feet, while unsupported vining varieties can run along the ground for 6 or more feet.Savour the taste of summer with your own home grown cucumbe Cucumbers are an essential ingredient for adding to sandwiches, delicious salads, and those long, cool summer drinks on the patio.', NULL, NULL),
(16, 'sleep-better-bundle.jpg', 'The Sleep Better Bundle', 'Plants', 'Air Plants', '1699', '20', 1359, '', 'Air is something we require at all moments of our life and yet overlook the most. This plant bundle is curated to help clean a majority of pollutants commonly found in indoor air, from VOCs to carbon monoxide. Sleep like a baby and get up refreshed with our Sleep Better plant bundle that will purify your ambient air, make your home healthier and increase oxygen saturation while you sleep.', 'The Golden Pothos has long, leafy vines that clean the air, while the Sansevieria Hahnii releases oxygen at night, boosting your bedroom\'s oxygen levels.', NULL, NULL),
(17, 'The Clean Air Bundle.jpg', 'The Clean Air Bundle', 'Plants', 'Air Plants', '1499', '20', 1199, '', 'Good health is directly linked to good breathing and clean air. This clean air plant bundle has been curated especially to eliminate indoor air toxins and increase oxygen saturation in your home. The plants are easy to care for and also add a bust of greenery to your home. The plants are perfect for indoor spaces and low to medium light areas.', 'The Golden Pothos has long, leafy vines that clean the air, while the Sansevieria Hahnii releases oxygen at night, boosting your bedroom\'s oxygen levels.', NULL, NULL),
(18, 'Kalanchoe Plant - Yellow.jpg', 'Kalanchoe Plant - Yellow', 'Plants', 'Flower Plants', '599', '20', 479, '', 'Looking for a succulent that blooms? Look no further than the Kalanchoe Yellow. An evergreen succulent featuring ovate, glossy green leaves and striking flame-orange flowers, it will add a burst of colour and happiness to any space. True to its family genes, it thrives on very little care and makes a great choice for first time gardeners.', 'The Kalanchoe plant is a popular blooming succulent houseplant. It is low-maintenance, modern and stunningly beautiful with its bright blooms. There are many studies about the benefits of plants increasing mood and health. The Kalanchoe plant makes a great gift for any', NULL, NULL),
(19, 'Ixora (Rugmini) Plant - Pink.jpg', 'Ixora (Rugmini) Plant - Pink', 'Plants', 'Flower Plants', '749', '20', 599, '', 'Also known as Jungle Geraniums, Ixoras are small tropical shrubs that will reward you with beautiful clusters of flowers in bright pink with very little care. Perfect for balcony gardens, these hardy plants need full sun and very little space to grow. The flowers bloom in a tight ball like cluster of tiny blooms that attract hummingbirds, butterflies, and bees with their fragrance.', 'Perfect for balcony gardens, these hardy plants need full sun and very little space to grow. The flowers bloom in a tight ball like cluster of tiny blooms that attract hummingbirds, butterflies, and bees with their fragrance.', NULL, NULL),
(20, 'Wandering Jew With Hanging Pot.jpg', 'Wandering Jew', 'Plants', 'Hanging Plants', '1199', '1', 1187, '', 'Named aptly after its habit of growing rapidly and unchecked and wandering to the ends of the earth if left to its own devices, the Wandering Jew is an easy plant to grow. Also known as spiderwort, the Wandering Jew is used both in hanging baskets and also as ground cover. The stunning leaves are striped in shades of purple and add instant colour to your garden. Very easy to care for, this plant is stunning in its hanging planter and does well in brightly lit areas.', 'The plant\'s leaves are applied topically to treat swellings, hemorrhoids, and blood in the stools. It is eaten orally to treat kidney infections. The plant is also used to purify the blood. In Mexico, a mixture of sweetened decoction leaves of inch pant and lemon juice known as “Matali” is consumed cold as a tonic.', NULL, NULL),
(21, 'Money Plant Golden.jpg', 'Money Plant Golden', 'Plants', 'Hanging Plants', '1199', '1', 1187, '', 'A darling of home gardeners everywhere, the Money Plant Golden is famous for its never give up attitude. This plant can survive neglect and adapt to almost all growing conditions to fill your space with a trailing growth of bright green coloured foliage in no time. An air purifier that can be styled for any space to give it an easy tropical look.', 'Money plants add value to a healthy lifestyle by removing airborne pollutants from indoor air, such as benzene, carbon monoxide, formaldehyde, and xylene. The air in the room with the money plant is known to have more oxygen & helps in easy breathing.', NULL, NULL),
(22, 'Turtle Vine.jpg', 'Turtle Vine', 'Plants', 'Hanging Plants', '1199', '1', 1187, '', 'The Turtle Vine Plant is a delicate perennial that grows quickly and profusely with minimum care. If you are a gardening novice and want to add beautiful hanging plants that require minimum care, the turtle vine is your answer. This resilient variety thrives in bright indirect light and grows with abandon and is extremely easy to propagate', 'The Turtle Vine plant, with its captivating appearance and ease of care, is an excellent choice for both beginners and experienced plant lovers. Its air-purifying qualities, versatility in decor, and potential medicinal uses only add to its appeal.', NULL, NULL),
(23, 'English Ivy Plant In Hanging Planter.jpg', 'English Ivy Plant In Hanging Planter', 'Plants', 'Hanging Plants', '999', '1', 989, '', 'Growing English Ivy indoors is pure unadulterated joy with its quirkily shaped leaves that are both glossy and fleshy. The leaves are a beautiful dark green in colour and grow profusely on rapidly spreading vines and will easily climb walls and race across ground. They grow exceedingly well in containers and look beautifully tropical and lush in hanging planters.', 'English ivy is known for its antioxidant, anti-allergic and anti-spasmodic properties. It helps in reducing cough, asthma and bronchitis. Besides, English ivy can be used topically to soothe burn injuries, infection, joint pain, swollen joints and nervous disorder.', NULL, NULL),
(24, 'Peperomia Green Creeper with Hanging Planter.jpg', 'Peperomia Green Creeper with Hanging Planter', 'Plants', 'Hanging Plants', '800', '1', 792, '', 'A rising favourite in the indoor plant world, the peperomia green creeper plants boasts of glossy green heart shaped leaves on thick trailing stems. Excellent for both table tops and hanging baskets, they look especially striking when grown on a trellis. These tropical beauties are a perfect addition to indoor spaces.', 'The Peperomia Green Creeper is a natural air purifier, effectively removing indoor pollutants like formaldehyde and xylene, contributing to cleaner and healthier indoor air.', NULL, NULL),
(25, 'Open media 1 in modal.jpg', 'Philodendron Oxycardium Golden', 'Plants', 'Hanging Plants', '1299', '1', 1286, '', 'Another classic climber from the Philodendron family, the Philodendron Oxycardium Golden is an evergreen houseplant that features stunning golden-green and glossy foliage which will instantly brighten your space. A proud recipient of the Royal Horticultural Society’s Award for garden merit, it is the preferred choice of house plant for first time gardeners.', 'Philodendron oxycardium golden plants are the top air-purifier plants that purify indoor pollutants & toxins.\r\nPhilodendron heart leaf plants reduce stress levels & improve good sleep.\r\nThis plant is used for low-maintenance indoor plants.', NULL, NULL),
(26, 'plant_packeg1.jpg', '4 Best Indoor Plants Pack', 'Package', 'Plants Packages', '3000', '55', 1350, '', '4 Pcs air purifier plants#\r\n1 Rubber Plant in White Plastic Pot #\r\n1 Spider Plant in Blue Plastic pot#\r\n1 Snake Plant in Green Plastic Pot#\r\n1 Money Plant in Pink Plastic Pot#', NULL, NULL, NULL),
(27, 'Bedroom Plant Bundle – Pack of 4.jpg', 'Bedroom Plant Bundle – Pack of 4', 'Package', 'Plants Packages', '2100', '55', 945, '', 'Bedroom Plant Bundle contains 1 ZZ Plant + 1 Aglaonema lipstick plant + 1 Peace Lily + 1 Boston Fern potted potted in plastic pots.', 'You will get 4  potted Bedroom plants in a single pack.#\r\nPlants in this pack are easy to care and require low maintenance.#\r\nPlants in this pack can be placed indoors on a location that receives indirect bright light.#\r\nThese plants will increase the aesthetic look of your house with their beautiful look.#\r\nPopular house plant with attractive foliage.#', NULL, NULL),
(28, 'Low Maintenance Indoor Plant Bundle – Pack of 4.jpg', 'Low Maintenance Indoor Plant Bundle – Pack of 4', 'Package', 'Plants Packages', '1900', '55', 855, '', 'This Plant bundle contains 1 Peperomia Green + 1 Snake Hahnii + 1 Syngonium Hybrid + 1 Rhoeo potted potted in plastic pots.', 'You will get 4  potted table top plants in a single pack.#\r\nPlants in this pack are easy to care and require low maintenance.#\r\nPlants in this pack can be placed indoors on a location that receives indirect bright light.#\r\nThese plants will increase the aesthetic look of your house with their beautiful look.#\r\nPopular house plant with attractive foliage.#', NULL, NULL),
(29, '6 Packet Vegetable Seeds.jpg', '6 Packet Vegetable Seeds', 'Package', 'Seed Packages', '1000', '55', 450, '', '6 Packet Vegetable Seeds Contain Beetroot Seeds, Chili Seeds, Red Onion Seeds, Spinach Seeds, Tomato Seeds, Brinjal Seeds Fresh Vegetables Seeds.', 'Each Pack Of Hybric & Organic Beetroot Seeds, Chili Seeds, Red Onion Seeds, Spinach Seeds, Tomato Seeds, Brinjal Seeds Comes With A Free E-Book For Gardening, Providing Valuable Tips & Guidance To Help You Maximize Your Garden\'s Potential.', NULL, NULL),
(30, 'Summer Flowers Seeds.jpg', 'Summer Flowers Seeds', 'Package', 'Seed Packages', '800', '55', 360, '', 'PACKAGE CONTENTS : 6 Packet of Summer Flower Seeds | 1 Packet Cosmos Seeds | 1 Packet Balsam Seeds | 1 Packet Gomphrena Seeds | 1 Packet Gaillardia Double Mix Seeds | 1 Packet Sunflower Seeds | 1 Packet Zinnia Mix Seeds', 'SEEDS QUANTITY : Balsam - 50 seeds, Cosmos - 50 seeds, Gomphrena - 100 seeds, Gaillardia - 100 seeds, Sunflower - 30 seeds, Zinnia - 40 seeds', NULL, NULL),
(31, 'Organic Italian Herb Garden Seed.jpg', 'Organic Italian Herb Garden Seed', 'Package', 'Seed Packages', '1500', '55', 675, '', 'Certified Organic, non-GMO, Italian culinary herb garden seeds\r\nChosen for maximum flavor intensity for delicious home-cooked meals', 'Includes Oregano, Thyme, Basil, Sage, Cilantro seeds with growing tips\r\nCertified Organic by OTCO, Non-GMO, and Open Pollinated with high germination rate', NULL, NULL),
(32, 'MUSK MELON GOLDEN.jpg', 'MUSK MELON GOLDEN', 'Seeds', 'Fruit Seed', '200', '60', 80, '', 'Golden melon or honey-melon is a fruit for everyone. The balance in its taste, color, crunchiness and water content is a perfect combination for anyone hoping to consume a delight. The golden melon was originally from Europe and Africa before spreading to other parts of the world. Golden melon is a great constituent of essential minerals and nutrients such as vitamin C, pantothenic acid, calcium, zinc, vitamin B6, fiber, magnesium, iron, potassium, vitamin A and omega-3 & 6. The intake of golden melon helps to regulate blood pressure level due to the presence of potassium in it. The Omega 3 & 6 fatty acids also makes it effective for maintaining a healthy heart. Puree and use your melons to make sauces, smoothies, and cocktails. The sweet flavor is complemented by cucumber, mint, basil, red onion, blueberries, mango, robust cheese varieties, salted meats, honey, cream, black pepper and balsamic vinegar.', 'The productiveness of any seed we sell is subject to your local climatic conditions*, the sowing method you adopt, and your commitment to the planting process. We give no warranty, expressed or implied, and are in no way responsible for the produce.', NULL, NULL),
(33, 'WATERMELON.jpg', 'WATERMELON - ROUND BLACK SEEDS', 'Seeds', 'Fruit Seed', '150', '60', 60, '', 'People growing in the tropical countries have a very sweet association with hot summery days – the huge large Watermelon! It is one of the sweetest, juiciest, and cooling fruits that you can find in nature. It\'s interesting to note that the Watermelon is actually a berry! It is classified so because botanically it\'s called a Pepo – or a berry which has a hard rind but no internal division! First grown in the Kalahari desert of Africa, the first records of harvesting this popular heat-dasher, dates back to 5000 years ago. In India there presence was recorded in the 7th century. More than just a fruit, the watermelon also has special connotations in the Freedom struggle of Africans and also became a symbol of their freedom. Eventually, they also found their way into the warmer parts of the Mediterranean region. The flowering plant belongs to the flowering vine-like family called the Cucurbitaceae and is an annual. It is usually grown for the special edible fruit.', 'The productiveness of any seed we sell is subject to your local climatic conditions*, the sowing method you adopt, and your commitment to the planting process. We give no warranty, expressed or implied, and are in no way responsible for the produce.', NULL, NULL),
(34, 'YELLOW MELON SEEDS.jpg', 'YELLOW MELON SEEDS', 'Seeds', 'Fruit Seed', '200', '60', 80, '', 'his gorgeous looking, sweet-tasting, and healthful fruit belongs to the gourd family! Hard to believe, but yes the Melons or Kharbooza (urdu word) as they are popularly known in the Indian subcontinent and Pakistan are very popular summer fruit which find themselves vying with the watermelon in the middle of summer. They usually grow in semiarid conditions and are cultivated for their inner flesh. The origin of this fruit which the West refers to as Cantaloupe dates back to Egypt\'s Nile Valley, about 2000 B.C. Historians sometimes also suggest that along with Egypt the muskmelons were also being cultivated in Greece, India, Persia, and Armenia. Today, they are widely consumed and can be found in almost every part of the world. What makes this Honey-like sweet fruit so refreshing and bountiful? The enormous amount of naturally occurring nutrients such as Vitamin A, Vitamin C, Potassium, Beta-carotene, Folate, and other minerals and micronutrients. The health benefits of the Melon are also many. Melons are notably great for smokers to fight against the active intake of carcinogenic substances. There is a compound called Adenosine which is found in abundance in the Melons which is known to have blood-thinning properties and hence is great for people with high blood pressure. Recommended to maintain healthy skin, weight, and maintaining optimal eyesight, Melons can safely be called a power fruit!', 'The productiveness of any seed we sell is subject to your local climatic conditions*, the sowing method you adopt, and your commitment to the planting process. We give no warranty, expressed or implied, and are in no way responsible for the produce.', NULL, NULL),
(35, 'BROCCOLI SEEDS.jpg', 'BROCCOLI SEEDS', 'Seeds', 'Vegetable Seed', '100', '60', 40, '', 'The productiveness of any seed we sell is subject to your local climatic conditions*, the sowing method you adopt, and your commitment to the planting process. We give no warranty, expressed or implied, and are in no way responsible for the produce.', 'Broccoli is a man-made vegetable. It was bred by Italian farmers. They carefully bred wild varieties of wild cauliflower and came up with one of the most nutritious vegetables available today. It\'s literally a phytonutrient bomb! Indeed, broccoli is one of the highest sources of dietary fibres and proteins in the plant kingdom.', NULL, NULL),
(36, 'CHERRY TOMATO SEEDS.jpg', 'CHERRY TOMATO SEEDS', 'Seeds', 'Vegetable Seed', '150', '60', 60, '', 'The productiveness of any seed we sell is subject to your local climatic conditions*, the sowing method you adopt, and your commitment to the planting process. We give no warranty, expressed or implied, and are in no way responsible for the produce.', 'Beautiful to look at, and very tasty to savor, the Cherry tomatoes will be an excellent way to beautify and add nourishment to your gardens. Get started, shop the seeds with us. Botanical Name: Solanum lycopersicum var. cerasiforme', NULL, NULL),
(37, 'Green Chilli Seeds.jpg', 'Green Chilli Seeds', 'Seeds', 'Vegetable Seed', '199', '60', 79, '', 'ndian cuisine is synonymous with the use of chilli and it is a pantry staple in every Indian household. One of the easiest and most rewarding plants to grow for any food grower, the green chilli is an essential in every kitchen garden. Add them to curries, make a spice mix or pickle them, they taste good in all forms and are a great source of Vitamin A.', 'The productiveness of any seed we sell is subject to your local climatic conditions*, the sowing method you adopt, and your commitment to the planting process. We give no warranty, expressed or implied, and are in no way responsible for the produce.', NULL, NULL),
(38, 'CARROT RED SEEDS.jpg', 'CARROT RED SEEDS', 'Seeds', 'Vegetable Seed', '199', '60', 79, '', 'Carrots make for a great mid-meal snack too. Simply pick a carefully washed and peeled one and munch on the fresh goodness. Even for salads you can play around a bit and experiment with interesting shapes. You can grate, shred, julienne, or slice them in sticks or roundels. Even if you want to cook them, make sure not to expose them to heat for longer periods as it will considerably reduce the benefits of beta-carotene and other antioxidants.', 'The productiveness of any seed we sell is subject to your local climatic conditions*, the sowing method you adopt, and your commitment to the planting process. We give no warranty, expressed or implied, and are in no way responsible for the produce.', NULL, NULL),
(39, 'Gardening Pots - Terracotta Color.jpg', 'Gardening Pots - Terracotta Color', 'Pots', 'Plastic Pots', '149', '40', 89, '', 'If you are looking for a simple black/terracotta color planter that is strong, durable, weather proof, and can be used outdoors as terrace planters, as lobby planters, as balcony planters, or even as liner pots for indoor planters then the Gro Pro series planters are just for you. Made of 100% recyclable plastic, this simple plastic planter is sturdy, holds its shape, has a raised bottom for easy drainage, and an easy grip to facilitate easy handling.', 'Their compact shape allows you to stack them against each other to create a plant border/boundary in your balcony and the plant friendly material does not leach chemicals into the soil. The planter can be reused again and again and the exterior matte finish means that it can be used as is in any setting. It can also be used as liner pots for decorative indoor planters that do not have drainage holes. The planter comes in various sizes and two colors, so select one that suits your plant size.', NULL, NULL),
(40, 'Gardening Plates - Black.jpg', 'Gardening Plates - Black', 'Pots', 'Plastic Pots', '149', '40', 89, '', 'Every plant needs a planter with drainage holes and this means that there is inadvertently a need for drainage trays. The plastic tray is made from highly durable and 100% recyclable plastic material that can take the load of the heaviest plants without any damage. It\'s all-weather proof nature means that it can be used both indoors and outdoors', 'The drainage tray is molded to the right size to fit their respective planters and have just enough depth to avoid spillage but not promote water stagnation. Use the plastic trays under your indoor planters and outdoor planters to avoid water spillage onto the floors and keep your garden clean.', NULL, NULL),
(41, 'Krish Self Watering Planter - Set of 5.jpg', 'Krish Self Watering Planter - Set of 5', 'Pots', 'Plastic Pots', '599', '40', 359, '', 'Ergonomically designed self-watering planters in premium grade recyclable plastic that lasts for several years over seasons and through regular use. The detachable base also works as a water reservoir for storing water that can be taken up by the plant as and when required through the capillary action.', 'This State Of The Art Design Reduces Watering Stress On Gardeners.', NULL, NULL),
(42, 'This State Of The Art Design Reduces Watering Stress On Gardeners.jpg', 'Nursery plant poly bag (Pack of 50 Bags)', 'Pots', 'Plastic Pots', '599', '40', 359, '', 'Set of 50 nursery poly bags in black made of hgh-grade plastic for your all your gardening requirements, the poly bags are the perfect size for growing all your plants, transplanting them or simply gifting it to your friends and family.', 'The poly bags are strong enough to be moved around without tearing and has ample drainage holes for proper drainage.', NULL, NULL),
(43, 'Self Watering Planter.jpg', 'Self Watering Planter Pots', 'Pots', 'Plastic Pots', '1499', '40', 899, '', 'Ergonomically designed self-watering planters in premium grade recyclable plastic that lasts for several years over seasons and through regular use.', 'The detachable base also works as a water reservoir for storing water that can be taken up by the plant as and when required through the capillary action. This state of the art design reduces watering stress on gardeners.', NULL, NULL),
(44, 'Elegance Wooden Pot.jpg', 'Elegance Wooden Pot', 'Pots', 'Wooden Pots', '1499', '40', 899, '', 'Discover the perfect blend of form and function with our Oblique Elegance Medium Wooden Pot. Crafted using advanced 3D printed technology, this pot boasts a medium size that accommodates a variety of plants. The oblique design adds a touch of sophistication, while the use of wood and cornstarch materials ensures that your style statement is also an eco-friendly one.', 'Elevate your decor with this medium-sized pot that strikes the perfect balance between elegance and sustainability.', NULL, NULL),
(45, 'Ridged Waves Wooden Pot.jpg', 'Ridged Waves Wooden Pot', 'Pots', 'Wooden Pots', '1499', '40', 899, '', 'transporting plants to new locations, starting seeds, patio and indoor cultivation of plants, and the growing of tender plants in colder regions indoors.', NULL, NULL, NULL),
(46, 'Faceted prism Wooden Pot.jpg', 'Faceted prism Wooden Pot', 'Pots', 'Wooden Pots', '1299', '40', 779, '', 'Introducing the Faceted Prism Wooden Pot – a marriage of modern design and ecological responsibility. This pot, crafted with 3D printed technology, features a faceted prism pattern that adds a contemporary flair to your living space. Made from a blend of wood and cornstarch, it not only captures attention but also contributes to a sustainable lifestyle, making it a conscientious choice for the environmentally aware.', NULL, NULL, NULL),
(47, 'Aurelius Round Ceramic Pot.jpg', 'Aurelius Round Ceramic Pot', 'Pots', 'Ceramic Pots', '999', '40', 599, '', 'Elevate your plant display with Aurelius Round Pots, where classical beauty meets modern design. Crafted from high-quality ceramic, these pots feature a glossy finish and golden rims, creating a luxurious aesthetic. The smooth, round design adds sophistication to any space,indoors or outdoors.', 'Ideal for various plants, the timeless elegance of these pots ensures they become a cherished part of your decor, blending seamlessly with any style.', NULL, NULL),
(48, 'Roma Ceramic Pot.jpg', 'Roma Ceramic Pot', 'Pots', 'Ceramic Pots', '499', '40', 299, '', 'Introducing the exquisite Roma Pot, a stunning ceramic masterpiece inspired by the timeless beauty of old Roman architecture. Reminiscent of majestic pillars, this unique pot brings an air of elegance and grandeur to your indoor or outdoor space. Crafted with meticulous attention to detail, the Roma Pot showcases a design that pays homage to the classical aesthetics of ancient Rome. Its cylindrical shape, adorned with intricate patterns and textured details, evokes a sense of history and sophistication.', 'Made from high-quality ceramic, this pot combines durability with refined craftsmanship. Its sturdy construction ensures long-lasting performance, while the smooth glazed finish adds a touch of luxury. The Roma Pot is built to withstand the test of time, making it an ideal choice for both interior and exterior environments.', NULL, NULL),
(49, 'Apple Ceramic Pot.jpg', 'Apple Ceramic Pot', 'Pots', 'Ceramic Pots', '1099', '40', 659, '', 'An elegant companion for your plant babies, this curved planter has the most beautiful glaze that lends a chic but fun vibe to any space. Made of premium quality ceramic, it sports a weighted bottom with a drainage hole to save your plants from overwatering.', 'A happy trooper in a plant cluster and an attention grabber as a stand alone, versatility is its name.', NULL, NULL),
(50, 'Argyle Ceramic Pot.jpg', 'Argyle Ceramic Pot', 'Pots', 'Ceramic Pots', '899', '40', 539, '', 'A sophisticated premium grade ceramic planter with intricate surface details to add depth and texture to your home garden. The planter has a weighted base with a drainage hole to facilitate proper drainage of extra water. Its glossy glaze and chic finish adds an instant charm to your home.', 'This ceramic planter can be used to directly plant your plants.', NULL, NULL),
(51, 'Football Ceramic Pot .jpg', 'Football Ceramic Pot', 'Pots', 'Ceramic Pots', '599', '40', 359, '', 'Made of premium quality ceramic in the fun and quirky shape of a football to add some sunshine yellow to your home. The planter is handcrafted with a weighted base for great balance and a well-placed drainage hole for proper drainage to avoid root rot in plants.', 'This football planter comes with a top class yellow glaze for a glossy finish and a perfect size for your shelves and tables.', NULL, NULL),
(52, 'Square Ceramic Pot.jpg', 'Square Ceramic Pot', 'Pots', 'Ceramic Pots', '399', '40', 239, '', '\"Suitable for direct potting, these lovely white planters are trendy and will never go out of fashion.', 'You can simply add these to your decor and give a tidy look to your patio, entrance, balcony, and porch.\"', NULL, NULL),
(53, 'Neem Cake Powder - 5 kg.jpg', 'Neem Cake Powder - 5 kg', 'Equipments', 'Fertilizer', '599', '45', 329, '', 'Made of dehydrated neem leaves, kernels, and bark, the neem cake powder works as an organic fertiliser with various micro and macro nutrients, as well as protects roots from pests.', 'It controls soil based pathogens like soil grubs, termites, and nematodes. It improves the efficiency of fertilisers (nitrogen) essential for plant health and growth and also makes the soil more well draining.', NULL, NULL),
(54, 'Neem Guard Spray - 500 Ml.jpg', 'Neem Guard Spray - 500 ml', 'Equipments', 'Fertilizer', '399', '45', 219, '', 'Defend your garden against pests and diseases with NeemGuard, a potent neem oil pest control spray. Applied as a foliar spray, this natural solution provides a protective shield against aphids, mealybugs, and fungal threats. Safeguarding foliage and nurturing plant health, NeemGuard is eco-friendly and safe for plants.', 'Protect your green haven by applying NeemGuard regularly, ensuring a pest-free environment while promoting natural plant growth and resilience.', NULL, NULL),
(55, 'Pot-O-Mix - 5 Kg.jpg', 'Pot-O-Mix - 5 Kg', 'Equipments', 'Fertilizer', '599', '45', 329, '', 'Ugaoo Pot-O-Mix is ready to use potting mix for all your ornamental and flowering plants. This highly enriched soil-less mix ensures optimum growth and protects the plants from pest infestations.', 'It is lightweight and hence can be used in all types of pots and vertical gardens too.', NULL, NULL),
(56, 'Garden Soil.jpg', 'Garden Soil', 'Equipments', 'Fertilizer', '499', '45', 274, '', 'This soil mix is an excellent blend of nutrient-rich red soil and cow manure. The mixture can be readily used by both urban and commercial growersCompletely organic in nature, it can be utilized for ornamental plants, as well as vegetables.', 'The watering schedule for indoor plants would be approximately once per week with this mix, remove any excess water from pot saucer. Keep plant dry during the winter months as plant has a slight dormancy.', NULL, NULL),
(57, 'Rat Trap Glue Pad.JPG', 'Rat Trap Glue Pad', 'Equipments', 'Pets Control', '375', '45', 206, '', 'An integrated pest management (IPM) tool, extremely effective in mass trapping when used in recommended quantities. The traps are an eco-friendly alternative that help in sustainable organic cultivation.', 'They attract and trap Aphids, Brown plant hopper, Cabbage root fly, Cabbage white butterfly, Capsids, Cucumber beetles, Diamondback moth, Flea beetles, Frog hoppers, Fungus gnats, Jassids, Leafhoppers, Leaf miners, Midges, Onion fly, Sciarides, Shore flies, Stink bug, Tea mosquito bug.', NULL, NULL),
(58, 'Mini Solar Light Insect Trap.JPG', 'Mini Solar Light Insect Trap', 'Equipments', 'Pets Control', '2499', '45', 1374, '', 'Introducing the Ugaoo Mini Solar Light Insect Trap – your ultimate insect control solution. With its remarkable capability to capture over 1200 different insect species, this device is a game-changer for farmers everywhere. Powered by the abundant and renewable energy of the sun, it not only safeguards your crops but also champions sustainable agriculture practices. Covering an impressive 1 to 1.5 acres, it\'s a truly eco-conscious product, a one-time investment that cuts costs by reducing the reliance on chemical insecticides.', 'Its easy installation and long-lasting performance across a diverse range of crops make it a must-have for forward-thinking farmers. Elevate your farming methods with the Ugaoo Mini Solar Light Insect Trap.', NULL, NULL),
(59, 'Allstriker - Propoxure 20% EC.jpg', 'Allstriker - Propoxure 20% EC', 'Equipments', 'Pets Control', '320', '45', 176, '', 'Meet UGAOO Allstriker, the pinnacle of household insecticides. This high-performance solution swiftly controls common flying and crawling pests in homes, institutions, and public spaces. With a 20% emulsifiable concentrate (EC) containing propoxure as its active ingredient, Allstriker targets a wide spectrum of nuisances, from bedbugs and cockroaches to mosquitoes, flies, and more. Safe for humans and non-target animals, Allstriker boasts a non-staining, non-greasy, and non-irritating formula.', 'Its cost-effectiveness and simple application, just 25ml diluted in 1 liter of water, make it the ideal choice for hassle-free, potent pest control in your surroundings.', NULL, NULL),
(60, 'Blockroach - Fipronil 0.05% Gel.jpg', 'Blockroach - Fipronil 0.05% Gel', 'Equipments', 'Pets Control', '399', '45', 219, '', 'UGAOO presents an innovative DIY pest control solution with our Cockroach Control Gel, designed to eliminate those pesky intruders. This kitchen-safe gel offers an effective, odorless approach to cockroach infestations. When roaches consume the gel, they return to their nest and perish, eradicating other cockroaches they come into contact with. With one-time application, enjoy up to 45 days of cockroach-free living, and each UGAOO Blockroach Anti Roach Gel tube lasts for an impressive 6 months.', 'Use it along cupboard door hinges, shelf edges, crevices, nooks, and frequented cockroach areas for fast, convenient results. Say goodbye to unwanted guests with just 20 dots of UGAOO Blockroach Cockroach Control Gel.', NULL, NULL),
(61, 'Single-Edge Sickle.jpg', 'Single-Edge Sickle', 'Equipments', 'Garden Tools', '365', '45', 200, '', 'The Ugaoo Single-Edge Sickle with Wooden Handle is portable, durable and long lasting in nature. It proves to be an aid for hassle-free cutting of overgrown plants and weeds', 'It has a high-quality carbon steel blades with wooden handle for a good grip.', NULL, NULL),
(62, 'Single Prong Weeder.jpg', 'Single Prong Weeder', 'Equipments', 'Garden Tools', '255', '45', 140, '', 'The Pyramid Single Prong Weeder is an essential tool that is used for weeding and small root removal as well also to dig holes to sow seeds.', 'comes with a wooden handle for a powerful and firm grip and is perfectly sized for flower beds and small vegetable gardens.', NULL, NULL),
(63, 'Handy Clipper.jpg', 'Handy Clipper', 'Equipments', 'Garden Tools', '799', '45', 439, '', 'The Ugaoo Handy Clipper Pruner is a small and durable tool that is mainly used for Bonsai tree cutting or for cutting flowers.', 'The Ugaoo Handy Clipper Pruner is a small and durable tool that is mainly used for Bonsai tree cutting or for cutting flowers.', NULL, NULL),
(64, 'Handy Bypass Pruner.jpg', 'Handy Bypass Pruner', 'Equipments', 'Garden Tools', '799', '45', 439, '', 'The Ugaoo Handy Bypass Pruner is a small and durable tool that is mainly used for Bonsai tree cutting or for cutting flowers. The very useful narrow SK5 Japanese blades of this secateur cut very smoothly.', 'It has a fixed blade with a hard PVC grip.', NULL, NULL),
(65, 'Jhai Kal 3 Pcs Gardening Hand Tool.jpg', 'Jhai Kal 3 Pcs Gardening Hand Tool', 'Package', 'Equipments Packages', '399', '55', 179, '', 'Material: This tools are made with export-quality stainless steel and wood handle to provide long life.\r\n3 PC Gardening Tools Kit: Perfect for digging, weeding, transplanting and cultivating. The most useful gardening tools for yourself or a person who loves gardening.', 'Usage: You can use this hand tool kit for any kind of gardening, including weeding and transplanting and will be the perfect addition to any home gardener\'s tool kit. The handles of the garden tools are ergonomically designed for better grip and comfortable use.', NULL, NULL),
(66, 'Essential Gardening Hand Tools - 6 pieces.jpg', 'Essential Gardening Hand Tools - 6 pieces', 'Package', 'Equipments Packages', '799', '55', 359, '', 'Material: Made of iron, plastic gloves and khurpi are made of high-quality stainless steel. Metal parts are black powder coated for corrosion and rust protection.\r\nThe tool box contains 1 pc each- Hand Cultivator, Hand Fork, Hand Trowel, Hand Weeder, 1 pair Garden Hand Gloves, 1 Khurpi.', 'This kit for home gardeners is designed to make gardening easy and you can get the real experience of gardening with right tools in your hand. These tools can be used for digging soil , planting, transplanting sapling while protecting your hands with the protective hand gloves. Khurpi can be used as shovel for flower pots. Small and exquisite appearance bring more fun to your potted life.', NULL, NULL),
(67, 'Grenebo Gardening Tools, 9-Piece.jpg', 'Grenebo Gardening Tools, 9-Piece', 'Package', 'Equipments Packages', '2999', '55', 1349, '', 'Premium Product Quality] Made of high-strength SK-5 carbon steel, this stainless steel gardening tools is durable and rust-proof. Moreover, with highly qualified material like this, these gardening tools are hardly deformed.[One for All Package] Grenebo garden tools set includes a total of 8 tools and 1 storage bag. Pruning Shears, Weedier, Transplanter, Cultivator, etc., nearly everything you need in daily garden maintenance.', 'Extra Garden Tote Bag] The biggest concern of buying a big gardening tool set is storage, but for this consideration, Grenebo gardening tools for gardening come with a heavy-duty storage bag, is floral design with a vintage style, adds additional beauty to your garden. Moreover, there is a specialized hole on each tool handle for hanging them up in the off-season or after use.', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloge`
--
ALTER TABLE `bloge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `login_clients`
--
ALTER TABLE `login_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_clients_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_carts`
--
ALTER TABLE `order_carts`
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
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_data`
--
ALTER TABLE `product_data`
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
-- AUTO_INCREMENT for table `bloge`
--
ALTER TABLE `bloge`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_clients`
--
ALTER TABLE `login_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_carts`
--
ALTER TABLE `order_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_data`
--
ALTER TABLE `product_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2023 lúc 02:32 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `books`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `created_at`, `updated_at`) VALUES
(1, 'Thích Nhất Hạnh', '2023-10-14 18:39:16', '2023-10-14 18:39:16'),
(2, 'Suối Thông', '2023-10-14 18:40:53', '2023-10-14 18:40:53'),
(3, 'Tạ Tiên Lâm', '2023-10-14 18:42:29', '2023-10-14 18:42:29'),
(4, 'William J O’Neil', '2023-10-14 18:44:08', '2023-10-14 18:44:08'),
(5, 'Osho', '2023-10-14 18:45:34', '2023-10-14 18:45:34'),
(6, 'Tạ Tiên Lâm', '2023-10-17 02:13:21', '2023-10-17 02:13:21'),
(7, 'Thích Nhất Hạnh', '2023-10-17 02:39:10', '2023-10-17 02:39:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `promotion_price` int(11) NOT NULL,
  `publishing_year` varchar(255) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `cate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL,
  `producer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `book_name`, `price`, `promotion_price`, `publishing_year`, `quantity`, `cate_id`, `image`, `describe`, `producer_id`, `author_id`, `created_at`, `updated_at`) VALUES
(2, 'Không Diệt Không Sinh Đừng Sợ Hãi', 110000, 88000, '2000', 20, 1, 'images/1699256648media_images_2023_10_05_the-dark-knight-poster-release-date-151733-051023-48.png', 'ádas', 1, 1, '2023-10-14 18:39:16', '2023-11-06 00:44:08'),
(3, 'Thả Trôi Phiền Muộn', 110000, 66000, '2000', 20, 1, 'images/1699256682arrival_1.jpg', 'ABC', 2, 2, '2023-10-14 18:40:53', '2023-11-06 00:44:42'),
(4, 'Bí Quyết Hội Họa', 88000, 74000, '2000', 20, 2, 'images/1699256694arrival_6.jpg', 'A', 3, 3, '2023-10-14 18:42:29', '2023-11-06 00:44:54'),
(5, 'Làm Giàu Qua Chứng Khoán', 165000, 99000, '2000', 20, 3, 'images/1699256719book_12.png', 'A', 4, 4, '2023-10-14 18:44:08', '2023-11-06 00:45:19'),
(6, 'Osho - Cảm Xúc - Chuyển Hóa Nỗi Sợ Hãi, Giận Dữ Và Ghen Tuông', 188000, 159000, '20', 20, 4, 'images/1699256727arrival_9.jpg', 'A', 5, 5, '2023-10-14 18:45:34', '2023-11-06 00:45:27'),
(7, 'Không Diệt Không Sinh Đừng Sợ Hãi', 500000, 88000, '2000', 20, 2, 'images/1699256709arrival_2.jpg', 'A', 6, 6, '2023-10-17 02:13:21', '2023-11-06 00:45:09'),
(8, 'Không Diệt Không Sinh Đừng Sợ Hãi', 110000, 88000, '2000', 20, 4, 'images/1699256746book_1.jpg', 'A', 7, 7, '2023-10-17 02:39:10', '2023-11-06 00:45:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `book_id`, `user_id`, `quantity`, `created_at`, `updated_at`) VALUES
(12, 3, 4, 13, '2023-10-21 07:01:11', '2023-10-21 07:01:31'),
(13, 3, 4, 1, NULL, NULL),
(14, 3, 4, 1, NULL, NULL),
(15, 3, 4, 1, NULL, NULL),
(16, 4, 4, 52, NULL, NULL),
(17, 7, 4, 6, NULL, NULL),
(18, 2, 4, 1, NULL, NULL),
(19, 5, 4, 15, NULL, NULL),
(20, 6, 4, 8, NULL, NULL),
(21, 2, 5, 23, NULL, NULL),
(22, 4, 5, 2, NULL, NULL),
(23, 6, 5, 22, NULL, NULL),
(24, 5, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Tôn Giáo', '2023-10-14 18:39:08', '2023-10-14 18:39:08'),
(2, 'Mỹ Thuật', '2023-10-14 18:41:48', '2023-10-14 18:41:48'),
(3, 'Chứng Khoán -  Bất Động Sản', '2023-10-14 18:42:56', '2023-10-14 18:42:56'),
(4, 'Kỹ Năng Sống', '2023-10-14 18:44:48', '2023-10-14 18:44:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_14_173745_create_promotions_table', 1),
(6, '2023_09_20_040616_create_authors_table', 1),
(7, '2023_09_20_065835_create_categories_table', 1),
(8, '2023_09_20_093227_create_producers_table', 1),
(9, '2023_09_20_070051_create_books_table', 2),
(10, '2023_09_20_091000_create_reviews_table', 3),
(11, '2023_09_20_095919_create_orders_table', 4),
(12, '2023_09_20_100010_create_order_details_table', 5),
(13, '2023_10_06_095611_create_cart_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `delivery` tinyint(4) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` tinyint(4) NOT NULL,
  `discount_code` varchar(255) NOT NULL,
  `total_money` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `producers`
--

CREATE TABLE `producers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producer_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `producers`
--

INSERT INTO `producers` (`id`, `producer_name`, `created_at`, `updated_at`) VALUES
(1, 'Thế Giới', '2023-10-14 18:39:16', '2023-10-14 18:39:16'),
(2, 'Dân Trí', '2023-10-14 18:40:53', '2023-10-14 18:40:53'),
(3, 'Thanh Hóa', '2023-10-14 18:42:29', '2023-10-14 18:42:29'),
(4, 'NXB Hồng Đức', '2023-10-14 18:44:08', '2023-10-14 18:44:08'),
(5, 'Dân Trí', '2023-10-14 18:45:34', '2023-10-14 18:45:34'),
(6, 'Kim Đồng', '2023-10-17 02:13:21', '2023-10-17 02:13:21'),
(7, 'Hàn Quốc', '2023-10-17 02:39:10', '2023-10-17 02:39:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount_code` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `discount_percent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id`, `book_id`, `user_id`, `comment`, `rating`, `created_at`, `updated_at`) VALUES
(15, 4, 4, 'dđ', 2, '2023-10-25 19:34:49', '2023-10-25 19:34:49'),
(16, 2, 4, 'Sách hay', 3, '2023-10-25 20:05:49', '2023-10-25 20:05:49'),
(17, 3, 4, 'xịn', 2, '2023-10-25 20:18:12', '2023-10-25 20:18:12'),
(18, 3, 4, 'sczsc', 3, '2023-10-25 20:19:00', '2023-10-25 20:19:00'),
(19, 3, 4, 'âs', 4, '2023-10-25 20:34:45', '2023-10-25 20:34:45'),
(20, 3, 4, 'sá', 4, '2023-10-25 20:35:50', '2023-10-25 20:35:50'),
(21, 3, 4, 'ấ', 5, '2023-10-25 20:36:39', '2023-10-25 20:36:39'),
(22, 3, 4, 'scasca', 1, '2023-10-25 20:36:49', '2023-10-25 20:36:49'),
(23, 2, 4, 'hay', 5, '2023-10-25 20:40:44', '2023-10-25 20:40:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phoneNumber`, `address`, `birthday`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hoang Huong', 'huohoang9@gmail.com', NULL, '$2y$10$89h5Vc/3OUtKLiUsOOKH1eDH6G11e22lK6NvtZbZqT.o9ku87XlbG', '0398658438', 'HaNoi', '2003-10-19', 0, NULL, '2023-10-14 18:49:05', '2023-10-14 18:49:05'),
(2, 'Hoang Huong', 'Hoangviet50@gmail.com', NULL, '$2y$10$u3fub6vV5O2.kWZGJwuoPudpJClaeH5hZWyeFCdOGomd/K8Hs6VnK', '0398658411', 'HaNoi', '2023-10-20', 0, NULL, '2023-10-20 03:27:50', '2023-10-20 03:27:50'),
(3, 'Hoàng Hưởng', 'Hoangviet51@gmail.com', NULL, '$2y$10$QFZXp0oNnaAHzAfkwoPcMuN.q1uUJ7Tn0bFgewVGTHNKpzTGct/vu', '0398658414', 'HaNoi', '2023-10-21', 1, NULL, '2023-10-20 04:04:52', '2023-10-20 04:04:52'),
(4, 'ABC', 'huohoang91@gmail.com', NULL, '$2y$10$BEQjOEKllk5h7og9ARbXD.wr1F8d8fejX2qWaWT9Hy/MILK0ns0em', '0123456789', 'Nam Định', '2023-10-19', 0, NULL, '2023-10-20 06:28:38', '2023-10-20 06:28:38'),
(5, 'Hoàng Văn Hưởng', 'abc@gmail.com', NULL, '$2y$10$ouVx19Z9QmjQmzKbHlC7FefKWoZ1RihdN/Ja1Nn00IFzsx/Bggd.G', '0123456789', 'Nam Định', '2023-10-19', 0, NULL, '2023-10-22 03:04:23', '2023-10-22 03:04:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_cate_id_foreign` (`cate_id`),
  ADD KEY `books_producer_id_foreign` (`producer_id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_book_id_foreign` (`book_id`),
  ADD KEY `cart_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_book_id_foreign` (`book_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_book_id_foreign` (`book_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `producers`
--
ALTER TABLE `producers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_producer_id_foreign` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

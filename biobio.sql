-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 يناير 2022 الساعة 18:55
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bio`
--

-- --------------------------------------------------------

--
-- بنية الجدول `algorithms`
--

CREATE TABLE `algorithms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `algorithm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `algorithm_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `algorithms`
--

INSERT INTO `algorithms` (`id`, `algorithm_name`, `image`, `algorithm_info`, `created_at`, `updated_at`) VALUES
(1, 'Naive Algorithm', 'naive-Searching-2-1.png', 'A Naive algorithm is usually the most obvious solution when one is asked a problem. It may not be a smart algorithm but will probably get the job done (...eventually.)  Eg. Trying to search for an element in a sorted array. A Naive algorithm would be to use a Linear Search. A Not-So Naive Solution would be to use the Binary Search.', '2022-01-08 21:29:21', '2022-01-08 21:29:21'),
(2, 'Booyer Moore Algorithm', 'Boyeer More.png', 'Boyer Moore is a combination of the following two approaches.  1) Bad Character Heuristic  2) Good Suffix Heuristic  Both of the above heuristics can also be used independently to search a pattern in a text. Let us first understand how two independent approaches work together in the Boyer Moore algorithm. If we take a look at the Naive algorithm, it slides the pattern over the text one by one. KMP algorithm does preprocessing over the pattern so that the pattern can be shifted by more than one. The Boyer Moore algorithm does preprocessing for the same reason. It processes the pattern and creates different arrays for each of the two heuristics. At every step, it slides the pattern by the max of the slides suggested by each of the two heuristics. So it uses greatest offset suggested by the two heuristics at every step.  Unlike the previous pattern searching algorithms, the Boyer Moore algorithm starts matching from the last character of the pattern. In this post, we will discuss the bad character heuristic and the Good Suffix heuristic in the next post.', '2022-01-08 22:33:25', '2022-01-08 22:33:25'),
(3, 'Rabin Karp Algorithm', 'Rabin -karp.jpg', 'The Rabin-Karp algorithm is a string-searching algorithm that uses hashing to find patterns in strings. A string is an abstract data type that consists of a sequence of characters. Letters, words, sentences, and more can be represented as strings.  String matching is a very important application of computer science. If you’ve ever searched through a document for a particular word, then you have benefitted from string-matching technology. String matching can also be used to detect plagiarism by comparing strings in document A with strings in document B.', '2022-01-08 22:40:29', '2022-01-08 22:40:29'),
(4, 'KMP (Knuth Morris Pratt)', 'KMP-Algorithm-Page-2.png', 'The KMP algorithm is a solution to the string search problem wherein we are required to find if a given pattern string occurs in another main string. It is one of the advanced string matching algorithm that was conceived by Donald Knuth, James H. Morris and Vaughan Pratt, hence the name \"KMP algorithm\".  The algorithm keeps a track of the comparison of characters between main text and pattern, thereby ensuring that comparisons that have already been done are not repeated, i.e. backtracking of the main string never occurs. All this results in a linear matching time and a more optimized solution.', '2022-01-08 22:54:07', '2022-01-08 22:54:07'),
(5, 'Dna To Rna Conversion', 'dnatorna.jpg', 'DNA consists of two long polymers of simple units called nucleotides, with backbones made of sugars and phosphate groups joined by ester bonds. These two strands run in opposite directions to each other and are therefore anti-parallel. Attached to each sugar is one of four types of molecules called nucleobases (bases). It is the sequence of these four bases along the backbone that encodes information. The sequence of these bases comprises the genetic code, which subsequently specifies the sequence of the amino acids within proteins. The ends of DNA strands are called the 5′(five prime) and 3′ (three prime) ends. The 5′ end has a terminal phosphate group and the 3′ end a terminal hydroxyl group. One of the major structural differences between DNA and RNA is the sugar, with the 2-deoxyribose in DNA being replaced by ribose in RNA.', '2022-01-08 22:58:44', '2022-01-08 22:58:44'),
(6, 'Rna To Protin Conversion', 'transcription_and_translation_mrna.jpg', 'Translation is the second part of the central dogma of molecular biology: RNA → Protein. It is the process in which the genetic code in mRNA is read, one codon at a time, to make a protein. Figure below shows how this happens. After mRNA leaves the nucleus, it moves to a ribosome, which consists of rRNA and proteins. The ribosome reads the sequence of codons in mRNA. Molecules of tRNA bring amino acids to the ribosome in the correct sequence.', '2022-01-08 23:05:31', '2022-01-08 23:05:31');

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_code`, `book_author`, `image`, `file`, `book_info`, `created_at`, `updated_at`) VALUES
(2, 'Machine Learning', '1245', 'Kevin p Murphy', 'machhine learning.jpg', 'Machine Learning for Humans.pdf.pdf', 'Machine learning is the science of getting computers to act without being explicitly programmed. In the past decade, machine learning has given us self-driving cars, practical speech recognition, effective web search, and a vastly improved understanding of the human genome. Machine learning is so pervasive today that you probably use it dozens of times a day without knowing it. Many researchers also think it is the best way to make progress towards human-level AI. In this class, you will learn about the most effective machine learning techniques, and gain practice implementing them and getting them to work for yourself. More importantly, you\'ll learn about not only the theoretical underpinnings of learning, but also gain the practical know-how needed to quickly and powerfully apply these techniques to new problems. Finally, you\'ll learn about some of Silicon Valley\'s best practices in innovation as it pertains to machine learning and AI.', '2022-01-09 03:11:59', '2022-01-09 03:11:59'),
(3, 'Genetics', '1111', 'Michael R. Speicher', 'ggenetics.jpg', 'genetics.pdf.pdf', 'Genetics is the scientific study of genes and heredity—of how certain qualities or traits are passed from parents to offspring as a result of changes in DNA sequence. A gene is a segment of DNA that contains instructions for building one or more molecules that help the body work. DNA is shaped like a corkscrew-twisted ladder, called a double helix. The two ladder rails are called backbones, and the rungs are pairs of four building blocks (adenine, thymine, guanine, and cytosine) called bases. The sequences of these bases provide the instructions for building molecules, most of which are proteins. Researchers estimate that humans have about 20,000 genes.  All of an organism’s genetic material, including its genes and other elements that control the activity of those genes, is its genome. An organism’s entire genome is found in nearly all of its cells. In human, plant, and animal cells, the genome is housed in a structure called the nucleus. The human genome is mostly the same in all people with just small variations.', '2022-01-09 03:20:48', '2022-01-09 03:20:48'),
(4, 'introduction Of BioInformaticss', '1234', 'Anna Tramontano', 'book intro.jpg', '2019.BioinformaticsConcepts.pdf.pdf.pdf', 'Bioinformatics is an interdisciplinary field mainly involving molecular biology and genetics, computer science, mathematics, and statistics. Data intensive, large-scale biological problems are addressed from a computational point of view. The most common problems are modeling biological processes at the molecular level and making inferences from collected data. A bioinformatics solution usually involves the following steps: Collect statistics from biological data. Build a computational model. Solve a computational modeling problem.', '2022-01-09 17:55:13', '2022-01-09 17:55:13');

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `book_id`, `comment`, `created_at`, `updated_at`) VALUES
(4, 1, 2, 'Bio Informatics is very Interesting', '2022-01-09 16:25:50', '2022-01-09 16:25:50'),
(5, 12, 4, 'that is great', '2022-01-10 11:36:58', '2022-01-10 11:36:58'),
(6, 12, 4, 'fantastic', '2022-01-10 11:46:47', '2022-01-10 11:46:47'),
(7, 12, 4, 'that is great', '2022-01-10 11:54:48', '2022-01-10 11:54:48'),
(8, 13, 4, 'that is great', '2022-01-10 12:06:52', '2022-01-10 12:06:52'),
(9, 12, 4, 'that is great !', '2022-01-10 12:17:22', '2022-01-10 12:17:22'),
(10, 14, 4, 'gggggggg', '2022-01-10 12:30:39', '2022-01-10 12:30:39'),
(11, 17, 4, 'hhhhhhh', '2022-01-10 15:35:46', '2022-01-10 15:35:46');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_04_234949_create_books_table', 2),
(6, '2022_01_04_235206_create_algorithms_table', 2),
(7, '2022_01_05_000233_add_admin_column_to_users', 2),
(8, '2022_01_05_010809_create_books_table', 3),
(9, '2022_01_08_031014_create_whishlist_table', 4),
(10, '2022_01_08_031014_create_wishlist_table', 5),
(11, '2022_01_08_232819_create_algorithms_table', 6),
(12, '2022_01_08_235650_create_books_table', 7),
(13, '2022_01_09_170828_create_comments_books_table', 8),
(14, '2022_01_09_175840_create_comments_table', 9),
(15, '2022_01_09_212940_add_avatar_column_on_users', 10);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(17, 'fatma', 'fatmaes@gmail', '1641835508.jpg', NULL, '$2y$10$VZFbZKwGu4qJYtqhRw1/0uCP7uElUy6USeKpLkb0.bKqoJJIy/dL.', NULL, '2022-01-10 15:25:10', '2022-01-10 15:25:10', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(11, 12, 5, '2022-01-10 12:16:16', '2022-01-10 12:16:16'),
(12, 14, 2, '2022-01-10 12:29:28', '2022-01-10 12:29:28'),
(13, 17, 3, '2022-01-10 15:34:47', '2022-01-10 15:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `algorithms`
--
ALTER TABLE `algorithms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `algorithms`
--
ALTER TABLE `algorithms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

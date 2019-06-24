-- SQL БД для импорта с тестовыми данными

--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgpath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date NOT NULL,
  `middleeducation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `higheducation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `fullname`, `imgpath`, `email`, `phone`, `birthdate`, `middleeducation`, `higheducation`, `city`, `vk`, `inst`, `fb`, `created_at`, `updated_at`) VALUES
(1, 'Королевский Александр Алексеевич', 'https://pp.userapi.com/c630616/v630616373/31fbc/ZhTHWVQ5ygI.jpg', 'korsashak98@mail.ru', '89677120135', '1998-02-11', 'Школа №123', 'СПбГЭТУ \"ЛЭТИ\"', 'Санкт-Петербург', 'https://vk.com/ialeksashai', 'https://instagram.com/ialeksashai', 'https://facebook.com/ialeksashai', NULL, NULL),
(2, 'Иван Владимирович Кузьмин', 'https://pp.userapi.com/c855324/v855324029/376fb/0l_h62tx3sE.jpg', 'kuzmivla@mail.ru', NULL, '1997-02-11', 'Школа №3', NULL, 'Санкт-Петербург', 'https://vk.com/', NULL, NULL, NULL, NULL),
(3, 'Дмитрий Александрович Профин', 'https://pp.userapi.com/c840731/v840731392/7e381/MTr1lAfPv2g.jpg', NULL, '89506217510', '1999-02-11', NULL, NULL, 'Саратов', NULL, NULL, NULL, NULL, NULL),
(4, 'Евгений Викторович Кулебеев', 'https://pp.userapi.com/c850228/v850228609/10e4b2/HIobmy4_ms8.jpg?ava=1', NULL, NULL, '2001-02-11', 'Школа №20', 'СПбГЭТУ \"ЛЭТИ\"', 'Санкт-Петербург', 'https://vk.com/mediynayablad', 'https://vk.com/mediynayablad', NULL, NULL, NULL),
(5, 'Татьяна Викторовна Лугина', 'https://pp.userapi.com/c849532/v849532983/3c34b/cRbx23gJjfU.jpg', 'lugg@gmail.com', '895578330134', '1990-02-11', 'Школа №11', 'СПбГЭТУ \"ЛЭТИ\"', 'Санкт-Петербург', 'https://vk.com/tanya', 'https://instagram.com/tanya', NULL, NULL, NULL),
(6, 'Антон Павлович Чебсен', 'https://pp.userapi.com/c844416/v844416336/19e7e0/2R69Vy9VMIo.jpg', 'an4@gmail.com', NULL, '1990-02-11', 'Школа №15', NULL, 'New-York', 'https://vk.com/anton', 'https://instagram.com/anton', NULL, NULL, NULL),
(7, 'Кирилл Владимирович Шатц', 'https://pp.userapi.com/c850632/v850632622/e49f2/FgFJuDiAHuY.jpg', NULL, '89561375639', '1990-02-11', 'Школа №114', 'МГУ', 'Москва', NULL, NULL, NULL, NULL, NULL),
(8, 'Владимир Сергеевич Листейко', 'https://sun1-27.userapi.com/c845221/v845221032/116888/1VSFm0GEVZg.jpg', NULL, NULL, '1990-02-11', NULL, NULL, 'Москва', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

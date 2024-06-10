-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 10, 2024 lúc 02:19 PM
-- Phiên bản máy phục vụ: 8.0.36
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_wd19303`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dashboard_books`
--

CREATE TABLE `dashboard_books` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `new_book` int NOT NULL,
  `borrowed_times` int NOT NULL,
  `category_id` int NOT NULL,
  `total_copies` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `dashboard_books`
--

INSERT INTO `dashboard_books` (`id`, `name`, `title`, `author`, `description`, `new_book`, `borrowed_times`, `category_id`, `total_copies`, `created_at`, `updated_at`) VALUES
(1, 'Book 1', 'The Great Gatsby', 'F. Scott Fitzgerald', 'A classic novel', 1, 50, 1, 100, '2022-12-31 17:00:00', '2023-05-14 17:00:00'),
(2, 'Book 2', 'To Kill a Mockingbird', 'Harper Lee', 'A timeless story', 0, 30, 2, 75, '2023-02-14 17:00:00', '2023-05-31 17:00:00'),
(3, 'Book 3', 'Harry Potter', 'J.K. Rowling', 'The first book in the series', 1, 100, 3, 150, '2023-02-28 17:00:00', '2023-04-19 17:00:00'),
(4, 'Book 4', 'The Kite Runner', 'Khaled Hosseini', 'A story of friendship', 0, 40, 4, 80, '2023-04-09 17:00:00', '2023-05-24 17:00:00'),
(5, 'Book 5', '1984', 'George Orwell', 'A dystopian novel', 1, 60, 5, 90, '2023-04-30 17:00:00', '2023-05-31 17:00:00'),
(6, 'Book 6', 'Pride and Prejudice', 'Jane Austen', 'A classic romance', 1, 75, 6, 100, '2023-01-14 17:00:00', '2023-03-30 17:00:00'),
(7, 'Book 7', 'The Hunger Games', 'Suzanne Collins', 'The first book in a trilogy', 1, 90, 3, 120, '2023-02-19 17:00:00', '2023-05-09 17:00:00'),
(8, 'Book 8', 'The Da Vinci Code', 'Dan Brown', 'A thriller novel', 0, 70, 7, 110, '2023-03-24 17:00:00', '2023-04-27 17:00:00'),
(9, 'Book 9', 'The Alchemist', 'Paulo Coelho', 'A novel about a shepherd boy', 1, 55, 8, 85, '2023-04-04 17:00:00', '2023-06-01 17:00:00'),
(10, 'Book 10', 'The Fault in Our Stars', 'John Green', 'A young adult novel', 1, 65, 3, 95, '2023-05-04 17:00:00', '2023-05-30 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `form_bandoc`
--

CREATE TABLE `form_bandoc` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `books_borrowed` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `form_bandoc`
--

INSERT INTO `form_bandoc` (`id`, `name`, `email`, `phone`, `address`, `books_borrowed`) VALUES
(8, '34534534534', 'svdcdc@email.com', '45345345345', '34534524fdgrtfgyhrtyerg', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `form_sach`
--

CREATE TABLE `form_sach` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `publication_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `form_sach`
--

INSERT INTO `form_sach` (`id`, `title`, `author`, `publication_year`, `genre`, `quantity`) VALUES
(172, '', 'Văn A', '2014-03', 'non-fiction', 7),
(173, '', 'Văn A', '2014-03', 'poetry', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `form_theloai`
--

CREATE TABLE `form_theloai` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `form_theloai`
--

INSERT INTO `form_theloai` (`id`, `name`, `description`, `quantity`) VALUES
(1, 'wer', 'qwdqw', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly_bandoc`
--

CREATE TABLE `quanly_bandoc` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly_sach`
--

CREATE TABLE `quanly_sach` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  `publication` date NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly_theloai`
--

CREATE TABLE `quanly_theloai` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `publication_year` int NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dashboard_books`
--
ALTER TABLE `dashboard_books`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `form_bandoc`
--
ALTER TABLE `form_bandoc`
  ADD PRIMARY KEY (`id`,`name`,`email`);

--
-- Chỉ mục cho bảng `form_sach`
--
ALTER TABLE `form_sach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `form_theloai`
--
ALTER TABLE `form_theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanly_bandoc`
--
ALTER TABLE `quanly_bandoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanly_sach`
--
ALTER TABLE `quanly_sach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quanly_theloai`
--
ALTER TABLE `quanly_theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dashboard_books`
--
ALTER TABLE `dashboard_books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `form_bandoc`
--
ALTER TABLE `form_bandoc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `form_sach`
--
ALTER TABLE `form_sach`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT cho bảng `form_theloai`
--
ALTER TABLE `form_theloai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `quanly_bandoc`
--
ALTER TABLE `quanly_bandoc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quanly_sach`
--
ALTER TABLE `quanly_sach`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quanly_theloai`
--
ALTER TABLE `quanly_theloai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

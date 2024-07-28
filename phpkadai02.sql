-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-15 10:22:21
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `phpkadai02`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `phpkadai02`
--

CREATE TABLE `phpkadai02` (
  `id` int(11) NOT NULL,
  `book_name` varchar(64) NOT NULL,
  `book_url` text NOT NULL,
  `book_comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `phpkadai02`
--

INSERT INTO `phpkadai02` (`id`, `book_name`, `book_url`, `book_comment`, `date`) VALUES
(1, 'キングダム', 'https://books.google.co.jp/books?id=bCXKCwAAQBAJ&printsec=frontcover&dq=%E3%82%AD%E3%83%B3%E3%82%B0%E3%83%80%E3%83%A0+subject:comics%2Bgraphic%2Bnovels&hl=&cd=2&source=gbs_api#v=onepage&q=%E3%82%AD%E3%83%B3%E3%82%B0%E3%83%80%E3%83%A0%20subject%3Acomics%2Bgraphic%2Bnovels&f=false', '', '2024-07-15 17:00:45');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `phpkadai02`
--
ALTER TABLE `phpkadai02`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `phpkadai02`
--
ALTER TABLE `phpkadai02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

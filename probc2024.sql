-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 6 月 06 日 06:09
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `probc2024`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `ユーザ`
--

CREATE TABLE `ユーザ` (
  `ID` int(11) NOT NULL,
  `氏名` varchar(50) NOT NULL,
  `所属ID` int(11) NOT NULL,
  `電話番号` varchar(50) NOT NULL,
  `メールアドレス` varchar(50) NOT NULL,
  `住所` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `ユーザ`
--

INSERT INTO `ユーザ` (`ID`, `氏名`, `所属ID`, `電話番号`, `メールアドレス`, `住所`) VALUES
(123456, '田中　太郎', 3, '0120224336', 'bunkyo@bunkoy.ac.jp', '神奈川県横浜市'),
(123457, '佐藤　康太', 3, '0703362004', 'hgaoerw@bunkyo.ac.jp', '神奈川県藤沢市');

-- --------------------------------------------------------

--
-- テーブルの構造 `取得物管理状況`
--

CREATE TABLE `取得物管理状況` (
  `ID` int(11) NOT NULL,
  `ユーザID` int(11) NOT NULL,
  `拾得物ID` int(11) NOT NULL,
  `変更日時` varchar(50) DEFAULT NULL,
  `変更内容` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `取得物管理状況`
--

INSERT INTO `取得物管理状況` (`ID`, `ユーザID`, `拾得物ID`, `変更日時`, `変更内容`) VALUES
(1, 123456, 1, '2024/05/28', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `所属`
--

CREATE TABLE `所属` (
  `ID` int(11) NOT NULL,
  `所属分類` varchar(50) DEFAULT NULL,
  `所属` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `所属`
--

INSERT INTO `所属` (`ID`, `所属分類`, `所属`) VALUES
(1, '健康栄養学部健康栄養学科', '健康栄養学科'),
(2, '情報学部情報システム学科', '情報システム学科'),
(3, '情報学部情報社会学科', '情報社会学科'),
(4, '情報学部メディア表現学科', 'メディア表現学科'),
(5, '職員', '職員');

-- --------------------------------------------------------

--
-- テーブルの構造 `拾得物`
--

CREATE TABLE `拾得物` (
  `ID` int(11) NOT NULL,
  `拾得物分類ID` int(11) NOT NULL,
  `拾得場所` varchar(50) NOT NULL,
  `色` varchar(50) DEFAULT NULL,
  `特徴` varchar(50) DEFAULT NULL,
  `画像` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `拾得物`
--

INSERT INTO `拾得物` (`ID`, `拾得物分類ID`, `拾得場所`, `色`, `特徴`, `画像`) VALUES
(1, 1, '体育館', '黒', NULL, '');

-- --------------------------------------------------------

--
-- テーブルの構造 `拾得物分類`
--

CREATE TABLE `拾得物分類` (
  `ID` int(11) NOT NULL,
  `大分類` varchar(50) DEFAULT NULL,
  `物品名` varchar(100) DEFAULT NULL,
  `頭１` varchar(50) DEFAULT NULL,
  `頭２` varchar(50) DEFAULT NULL,
  `五十音` varchar(50) DEFAULT NULL,
  `貴重品` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `拾得物分類`
--

INSERT INTO `拾得物分類` (`ID`, `大分類`, `物品名`, `頭１`, `頭２`, `五十音`, `貴重品`) VALUES
(1, '鞄', 'ナイキリュック', 'か', 'な', 'な', 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `ユーザ`
--
ALTER TABLE `ユーザ`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `所属ID` (`所属ID`);

--
-- テーブルのインデックス `取得物管理状況`
--
ALTER TABLE `取得物管理状況`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `拾得物ID` (`拾得物ID`),
  ADD KEY `取得物管理状況_ibfk_2` (`ユーザID`);

--
-- テーブルのインデックス `所属`
--
ALTER TABLE `所属`
  ADD PRIMARY KEY (`ID`);

--
-- テーブルのインデックス `拾得物`
--
ALTER TABLE `拾得物`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `拾得物分類ID` (`拾得物分類ID`);

--
-- テーブルのインデックス `拾得物分類`
--
ALTER TABLE `拾得物分類`
  ADD PRIMARY KEY (`ID`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `所属`
--
ALTER TABLE `所属`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `拾得物分類`
--
ALTER TABLE `拾得物分類`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `ユーザ`
--
ALTER TABLE `ユーザ`
  ADD CONSTRAINT `ユーザ_ibfk_1` FOREIGN KEY (`所属ID`) REFERENCES `所属` (`ID`);

--
-- テーブルの制約 `取得物管理状況`
--
ALTER TABLE `取得物管理状況`
  ADD CONSTRAINT `取得物管理状況_ibfk_1` FOREIGN KEY (`拾得物ID`) REFERENCES `拾得物` (`ID`),
  ADD CONSTRAINT `取得物管理状況_ibfk_2` FOREIGN KEY (`ユーザID`) REFERENCES `ユーザ` (`ID`);

--
-- テーブルの制約 `拾得物`
--
ALTER TABLE `拾得物`
  ADD CONSTRAINT `拾得物_ibfk_1` FOREIGN KEY (`拾得物分類ID`) REFERENCES `拾得物分類` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 10 2016 г., 10:46
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `velvet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `vl_masters`
--

CREATE TABLE `vl_masters` (
  `master_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `master_title` varchar(100) NOT NULL,
  `master_fio` varchar(255) NOT NULL,
  `master_city` varchar(100) NOT NULL,
  `master_phone` varchar(50) NOT NULL,
  `master_mail` varchar(50) NOT NULL,
  `master_certificate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vl_masters`
--

INSERT INTO `vl_masters` (`master_id`, `date`, `master_title`, `master_fio`, `master_city`, `master_phone`, `master_mail`, `master_certificate`) VALUES
(2, '2016-05-08 22:09:27', 'Андреев', 'Андреев Александр Александрович', 'Казань', '7 (831) 429-13-13', 'example@mail.com', 'ESP/FOO/I3/02/000025'),
(3, '2016-05-08 21:49:35', 'Аседова', 'Аседова Елизавета Виталиевна', 'Звенигород', '7 (831) 429-13-13', '', 'ESP/FOO/I3/02/000025'),
(4, '2016-05-08 21:49:40', 'Валинуров', 'Валинуров Денис Юрьевич', 'Звенигород', '7 (831) 429-13-13', '', 'ESP/FOO/I3/02/000025'),
(5, '2016-05-08 21:49:46', 'Гаранян', 'Гаранян Ованес Суренович', 'Екатеринбург', '7 (831) 429-13-13', '', 'ESP/FOO/I3/02/000025');

-- --------------------------------------------------------

--
-- Структура таблицы `vl_partners`
--

CREATE TABLE `vl_partners` (
  `partner_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `partner_title` varchar(100) NOT NULL,
  `partner_first_name` varchar(100) NOT NULL,
  `partner_last_name` varchar(100) NOT NULL,
  `partner_city` varchar(100) NOT NULL,
  `partner_certificate` varchar(100) NOT NULL,
  `partner_company_name` varchar(255) NOT NULL,
  `partner_address` text NOT NULL,
  `partner_phone` varchar(50) NOT NULL,
  `partner_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vl_partners`
--

INSERT INTO `vl_partners` (`partner_id`, `date`, `partner_title`, `partner_first_name`, `partner_last_name`, `partner_city`, `partner_certificate`, `partner_company_name`, `partner_address`, `partner_phone`, `partner_mail`) VALUES
(3, '2016-05-08 21:44:38', 'Горинова', 'Юлия', 'Горинова', 'Екатеринбург', 'ESP/FOO/I3/02/000025', 'Velvet', 'Россия, г. Новосибирск, ул. Галущака, 2', '+7 (383) 29-990-29', 'example@mail.com'),
(4, '2016-05-08 21:46:44', 'Ермохин', 'Макар', 'Ермохин', 'Дмитров', 'ESP/FOO/I3/02/000025', '', '', '+7 (383) 29-990-29', ''),
(5, '2016-05-08 21:47:14', 'Иванов', 'Павел', 'Иванов', 'Дмитров', 'ESP/FOO/I3/02/000025', '', '', '', 'example@mail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `vl_posts`
--

CREATE TABLE `vl_posts` (
  `post_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_text` text CHARACTER SET utf8 NOT NULL,
  `post_img` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `vl_posts`
--

INSERT INTO `vl_posts` (`post_id`, `date`, `post_title`, `post_text`, `post_img`) VALUES
(70, '2016-05-09 00:00:00', 'верхний_блок-абзац-2', 'Все наши технологи, преподающие курсы и мастер-классы прошли обучение  РЕКОНСТРУКЦИИ ВЕЛЬВЕТ для ресниц и бровей  непосредственно у британских специалистов по международной программе повышения квалификации лэшмэйкеров!', ''),
(71, '2016-05-04 00:00:00', 'верхний_блок-абзац-3', 'На территории РФ  курсы Реконструкции ресниц и бровей Вельвет  «VELVET for L&B» проводятся согласно международному формату обучения.\r\n', ''),
(80, '2016-05-10 09:54:25', 'презентация-слайд-1', '', 'Document-page-001.jpg'),
(82, '2016-05-10 09:54:41', 'презентация-слайд-2', '', 'Document-page-002.jpg'),
(83, '2016-05-02 00:00:00', 'презентация-слайд-3', '', 'Document-page-003.jpg'),
(84, '2016-05-01 00:00:00', 'презентация-слайд-4', '', 'Document-page-004.jpg'),
(85, '2016-05-03 00:00:00', 'презентация-слайд-5', '', 'Document-page-005.jpg'),
(86, '2016-05-10 00:00:00', 'презентация-слайд-6', '', 'Document-page-006.jpg'),
(87, '2016-05-09 00:00:00', 'презентация-слайд-7', '', 'Document-page-007.jpg'),
(88, '2016-05-09 11:14:09', 'нижний_блок-абзац-1', 'Предлагаем вам присоединиться к команде международных профессионалов и стать экспертом инновационной услуги в области ухода и эстетического преображения ресниц и БРОВЕЙ VELVET FOR L&B!\r\n', ''),
(89, '2016-05-17 00:00:00', 'нижний_блок-абзац-2', 'ВАЖНО! Наша компания – эксклюзивный представитель РЕКОНСТРУКЦИИ РЕСНИЦ И БРОВЕЙ VELVET FOR LASHES&BROWS в России! Мы сотрудничаем НАПРЯМУЮ с ЛОНДОНОМ! У нас НЕТ НАКРУТОК от столичных поставщиков! Поэтому НАШ ПРАЙС на продукт ПРЕМИУМ сегмента - МАКСИМАЛЬНО ВЫГОДЕН!\r\n', ''),
(69, '0000-00-00 00:00:00', 'верхний_блок-абзац-1', 'Любишь инновации, любишь быть первым в любой сфере, обожаешь удивлять своих клиентов и понимаешь возможности неограниченных заработков с новинкой в бьюти индустрии, то не упусти шанс – пройди обучение новой британской услуге - РЕКОНСТРУКЦИЯ РЕСНИЦ И БРОВЕЙ VELVET FOR LASHES&BROWS! ', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vl_masters`
--
ALTER TABLE `vl_masters`
  ADD PRIMARY KEY (`master_id`);

--
-- Индексы таблицы `vl_partners`
--
ALTER TABLE `vl_partners`
  ADD PRIMARY KEY (`partner_id`);

--
-- Индексы таблицы `vl_posts`
--
ALTER TABLE `vl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `vl_masters`
--
ALTER TABLE `vl_masters`
  MODIFY `master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `vl_partners`
--
ALTER TABLE `vl_partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `vl_posts`
--
ALTER TABLE `vl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000000;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

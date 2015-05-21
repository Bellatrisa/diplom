-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 11 2015 г., 09:38
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `rid`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
`id` smallint(6) NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `patronymic` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
`id` smallint(6) NOT NULL,
  `id_rid` smallint(6) NOT NULL,
  `id_status_doc` smallint(6) NOT NULL,
  `date` date NOT NULL,
  `file` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `type_doc` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `id_user` smallint(6) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
`id` smallint(6) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `rid_author`
--

CREATE TABLE IF NOT EXISTS `rid_author` (
  `id_rid` varchar(20) NOT NULL,
  `id_author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `rid_organization`
--

CREATE TABLE IF NOT EXISTS `rid_organization` (
  `id_rid` varchar(20) NOT NULL,
  `id_organization` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `rids`
--

CREATE TABLE IF NOT EXISTS `rids` (
`id` smallint(6) NOT NULL,
  `name` text COLLATE latin1_general_ci NOT NULL,
  `id_status` smallint(6) NOT NULL,
  `id_type` smallint(6) NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `date_order_develop` date NOT NULL,
  `date_begin_costs` date NOT NULL,
  `date_create_rid` date DEFAULT NULL,
  `number_case` int(11) NOT NULL,
  `id_patent_specialist` smallint(6) NOT NULL,
  `date_registration_rid` date NOT NULL,
  `date_expertise` date NOT NULL,
  `date_resolution` date NOT NULL,
  `date_patent` date NOT NULL,
  `date_create` date NOT NULL,
  `date_last_change` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `status_documents`
--

CREATE TABLE IF NOT EXISTS `status_documents` (
`id` smallint(6) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `status_documents`
--

INSERT INTO `status_documents` (`id`, `name`) VALUES
(1, 'Новый'),
(2, 'Подписан');

-- --------------------------------------------------------

--
-- Структура таблицы `status_rid`
--

CREATE TABLE IF NOT EXISTS `status_rid` (
`id` smallint(6) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `documents` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `status_rid`
--

INSERT INTO `status_rid` (`id`, `name`, `description`, `documents`) VALUES
(1, 'На рассмотрении', 'Включение РИД в план разработки', 'Служебная записка ректору о включении РИД в план разработки, резолюция ректора'),
(2, 'В разработке', 'Начало учета затрат на разработку', 'Поручение в Структурное подразделение на разработку РИД, Уведомление о начале разработки и о ресурсах, необходимых для разработки, справка из бухгалтерии о начале учета затрат'),
(3, 'Создан', 'Подписание уведомления о создании служебного РИД ректором', 'Уведомление о создании служебного РИД с Приложениями'),
(4, 'Открыто дело на защиту', 'Открытие дела на защиту РИД', 'Соглашение авторов РИД с ректором, справка о регистрации РИД в ЦИСЛИМ, Заявка на регистрацию РИД в ФИПС'),
(6, 'Может быть опубликовано', 'Возможность открытого публикования материалов РИД', 'Заключение комиссии о возможности открытого публикования'),
(7, 'Заявка на экспертизе', 'направления заявочных материалов в ФИПС', 'Служебная записка ректору о перечислении пошлины за регистрацию и проведение формальной экспертизы Заявки, платежное поручение об уплате госпошлины, Уведомление ФИПС о регистрации Заявки'),
(8, 'На экспертизе по существу заявки', 'Проведение экспертизы в ФИПС', 'Заключение по результатам формальной экспертизы, служебная записка о перечислении пошлины за проведение экспертизы, Ходатайство на проведение экспертизы, платежное поручение об уплате госпошлины'),
(9, 'Выдача патента', 'Одобрена выдача патента, сбор необходимых документов', 'Заключение экспертизы по существу Заявки, решение о выдаче патента'),
(10, 'Комерциализация', 'Выплата денежных вознаграждений за разработку РИД', 'Служебная записка о перечислении пошлины за выдачу Патента, платежное поручение об уплате госпошлины, патент');

-- --------------------------------------------------------

--
-- Структура таблицы `type_documents`
--

CREATE TABLE IF NOT EXISTS `type_documents` (
`id` smallint(6) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Дамп данных таблицы `type_documents`
--

INSERT INTO `type_documents` (`id`, `name`) VALUES
(1, 'Служебная записка'),
(2, 'Поручение на разработку РИД'),
(3, 'Справка из бухгалтерии'),
(4, 'Уведомление'),
(5, 'Соглашение авторов с ректором'),
(6, 'Дело на защиту РИД'),
(7, 'Экспертное заключение о возможности публикования'),
(8, 'Платежное поручение об уплате госпошлины'),
(9, 'Уведомление о регистрации заявки'),
(10, 'Заключение формальной экспертизы'),
(11, 'Ходатайство о проведении экспертизы по существу заявки'),
(12, 'Заключение экспертизы по существу заявки'),
(13, 'Патент');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
 ADD PRIMARY KEY (`id`), ADD KEY `id_rid` (`id_rid`,`id_status_doc`,`id_user`);

--
-- Индексы таблицы `organizations`
--
ALTER TABLE `organizations`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rid_author`
--
ALTER TABLE `rid_author`
 ADD KEY `id_rid` (`id_rid`,`id_author`);

--
-- Индексы таблицы `rid_organization`
--
ALTER TABLE `rid_organization`
 ADD KEY `id_rid` (`id_rid`,`id_organization`);

--
-- Индексы таблицы `rids`
--
ALTER TABLE `rids`
 ADD PRIMARY KEY (`id`), ADD KEY `id_status` (`id_status`,`id_type`,`id_patent_specialist`);

--
-- Индексы таблицы `status_documents`
--
ALTER TABLE `status_documents`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status_rid`
--
ALTER TABLE `status_rid`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_documents`
--
ALTER TABLE `type_documents`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `organizations`
--
ALTER TABLE `organizations`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `rids`
--
ALTER TABLE `rids`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `status_documents`
--
ALTER TABLE `status_documents`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `status_rid`
--
ALTER TABLE `status_rid`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `type_documents`
--
ALTER TABLE `type_documents`
MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

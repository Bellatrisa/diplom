-- Дамп структуры базы данных rid
DROP DATABASE IF EXISTS `rid`;
CREATE DATABASE IF NOT EXISTS `rid`;
USE `rid`;

-- Дамп структуры для таблица rid.authors
DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `surname` text CHARACTER SET cp1251 NOT NULL,
  `name` text CHARACTER SET cp1251 NOT NULL,
  `patronymic` text CHARACTER SET cp1251 NOT NULL,
  `post` text CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.authors: ~9 rows (приблизительно)
INSERT INTO `authors` (`id`, `surname`, `name`, `patronymic`, `post`) VALUES
	(1, '132123', '32131', '321313', '113131'),
	(2, 'Путкин', 'Михаил', 'Юрьевич', 'техник'),
	(3, 'Путкин', 'Михаил', 'Юрьевич', 'техник'),
	(4, 'Путкин', 'Михаил', 'Юрьевич', 'техник'),
	(6, 'яяяяяяяяяя', 'яяяяяяяяяяяяя', 'яяяяяяяяяяяяяяяяяяяяя', 'яяяяяяяяяяяя'),
	(7, 'яяяяяяяяяя', 'яяяяяяяяяяяяя', 'яяяяяяяяяяяяяяяяяяяяя', 'яяяяяяяяяяяя'),
	(9, 'Шишкин', 'Василий', 'Петрович', 'изобретатель'),
	(10, 'Шишкин', 'Василий', 'Петрович', 'изобретатель'),
	(11, 'Шишкин', 'Василий', 'Петрович', 'изобретатель'),
	(12, 'rqwer', 'qwerqw', 'erqwer', 'qwerqe');



-- Дамп структуры для таблица rid.documents
DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_rid` smallint(6) NOT NULL,
  `id_status_doc` smallint(6) NOT NULL,
  `date` date NOT NULL,
  `file` text CHARACTER SET cp1251 NOT NULL,
  `type_doc` text CHARACTER SET cp1251 NOT NULL,
  `date_create` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rid` (`id_rid`,`id_status_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.documents: ~7 rows (приблизительно)
INSERT INTO `documents` (`id`, `id_rid`, `id_status_doc`, `date`, `file`, `type_doc`, `date_create`) VALUES
	(2, 9, 1, '0000-00-00', 'uploads/logos2.png', '1', '0000-00-00'),
	(3, 9, 2, '0000-00-00', 'uploads/127_0_0_1.sql', '6', '0000-00-00'),
	(4, 9, 2, '2015-05-16', 'uploads/128.png', '7', '2015-05-27'),
	(5, 3, 1, '2015-05-08', 'uploads/sts35.jpg', '10', '2015-05-27'),
	(6, 3, 1, '2015-05-15', 'uploads/rid3_KY7NTq0TtQU.jpg', '1', '2015-05-27'),
	(7, 9, 1, '2015-05-21', 'uploads/rid9_main-nav.png', '1', '2015-05-27'),
	(8, 7, 1, '2015-05-14', 'uploads/rid7_a_3d299164.jpg', '1', '2015-05-27');

-- Дамп структуры для таблица rid.image
DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;


-- Дамп структуры для таблица rid.organizations
DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.organizations: ~9 rows (приблизительно)
INSERT INTO `organizations` (`id`, `name`) VALUES
	(1, '31'),
	(2, 'солнышко'),
	(3, 'солнышко'),
	(4, 'солнышко'),
	(6, 'яяяяяяяяяяяя'),
	(7, 'яяяяяяяяяяяя'),
	(9, 'Космос'),
	(10, 'Космос'),
	(11, 'Космос'),
	(12, 'rqwerqwe');
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;


-- Дамп структуры для таблица rid.rids
DROP TABLE IF EXISTS `rids`;
CREATE TABLE IF NOT EXISTS `rids` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `id_status` smallint(6) NOT NULL DEFAULT '1',
  `type` text NOT NULL,
  `description` text,
  `referat` text,
  `formula` text,
  `img` text,
  `date_order_develop` date DEFAULT NULL,
  `date_begin_costs` date DEFAULT NULL,
  `date_create_rid` date DEFAULT NULL,
  `number_case` int(11) DEFAULT NULL,
  `id_patent_specialist` smallint(6) DEFAULT NULL,
  `date_registration_rid` date DEFAULT NULL,
  `date_expertise` date DEFAULT NULL,
  `date_resolution` date DEFAULT NULL,
  `date_patent` date DEFAULT NULL,
  `date_create` date DEFAULT NULL,
  `date_last_change` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_status` (`id_patent_specialist`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.rids: ~7 rows (приблизительно)
INSERT INTO `rids` (`id`, `name`, `id_status`, `type`, `description`, `referat`, `formula`, `img`, `date_order_develop`, `date_begin_costs`, `date_create_rid`, `number_case`, `id_patent_specialist`, `date_registration_rid`, `date_expertise`, `date_resolution`, `date_patent`, `date_create`, `date_last_change`) VALUES
	(1, '111111', 8, '32131', NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-07', 2313132, NULL, NULL, NULL, NULL, NULL, '2015-05-22', '2015-05-22'),
	(2, 'Компьтер', 7, 'эвм', NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-09', 356457, NULL, NULL, NULL, NULL, NULL, '2015-05-22', '2015-05-22'),
	(3, 'Компьтер', 7, 'эвм', NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-09', 356457, NULL, NULL, NULL, NULL, NULL, '2015-05-22', '2015-05-22'),
	(4, 'Компьтер', 7, 'эвм', NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-09', 356457, NULL, NULL, NULL, NULL, NULL, '2015-05-22', '2015-05-22'),
	(7, 'велосипед', 1, 'машина', NULL, NULL, 'uploads/rid7_OevCKZmp2Ls.jpg', NULL, NULL, NULL, '2015-05-15', 463782, NULL, NULL, NULL, NULL, NULL, '2015-05-22', '2015-05-27'),
	(8, 'велосипед', 1, 'машина', NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-15', 463782, NULL, NULL, NULL, NULL, NULL, '2015-05-22', '2015-05-21'),
	(9, 'велосипед', 1, 'машина', 'uploads/rid9_blackprophecy-pc-games.jpg', 'fdsa', 'sdfa', 'uploads/rid9_41-19.jpg', NULL, NULL, '2015-05-15', 463782, NULL, NULL, NULL, NULL, NULL, '2015-05-21', '2015-05-27'),
	(10, 'qwerqwe', 1, 'rqerqw', NULL, NULL, NULL, NULL, NULL, NULL, '2015-06-21', 0, NULL, NULL, NULL, NULL, NULL, '2015-06-04', '2015-06-04');


-- Дамп структуры для таблица rid.rid_author
DROP TABLE IF EXISTS `rid_author`;
CREATE TABLE IF NOT EXISTS `rid_author` (
  `id_rid` smallint(6) NOT NULL,
  `id_author` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.rid_author: ~9 rows (приблизительно)
INSERT INTO `rid_author` (`id_rid`, `id_author`) VALUES
	(1, 1),
	(2, 2),
	(3, 3),
	(4, 4),
	(5, 6),
	(6, 7),
	(7, 9),
	(8, 10),
	(9, 11),
	(10, 12);


-- Дамп структуры для таблица rid.rid_image
DROP TABLE IF EXISTS `rid_image`;
CREATE TABLE IF NOT EXISTS `rid_image` (
  `id_rid` smallint(6) NOT NULL,
  `id_image` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.rid_image: ~0 rows (приблизительно)


-- Дамп структуры для таблица rid.rid_organization
DROP TABLE IF EXISTS `rid_organization`;
CREATE TABLE IF NOT EXISTS `rid_organization` (
  `id_rid` smallint(6) NOT NULL,
  `id_organization` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.rid_organization: ~9 rows (приблизительно)
INSERT INTO `rid_organization` (`id_rid`, `id_organization`) VALUES
	(1, 1),
	(2, 2),
	(3, 3),
	(4, 4),
	(5, 6),
	(6, 7),
	(7, 9),
	(8, 10),
	(9, 11),
	(10, 12);


-- Дамп структуры для таблица rid.status_documents
DROP TABLE IF EXISTS `status_documents`;
CREATE TABLE IF NOT EXISTS `status_documents` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.status_documents: ~2 rows (приблизительно)
INSERT INTO `status_documents` (`id`, `name`) VALUES
	(1, 'Новый'),
	(2, 'Подписан');


-- Дамп структуры для таблица rid.status_rid
DROP TABLE IF EXISTS `status_rid`;
CREATE TABLE IF NOT EXISTS `status_rid` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `documents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.status_rid: ~9 rows (приблизительно)
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

-- Дамп структуры для таблица rid.type_documents
DROP TABLE IF EXISTS `type_documents`;
CREATE TABLE IF NOT EXISTS `type_documents` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=cp1251;

-- Дамп данных таблицы rid.type_documents: ~13 rows (приблизительно)
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


-- Дамп структуры для представление rid.wiev_documents
DROP VIEW IF EXISTS `wiev_documents`;
-- Создание временной таблицы для обработки ошибок зависимостей представлений
CREATE TABLE `wiev_documents` (
	`id` SMALLINT(6) NOT NULL,
	`file` TEXT NOT NULL COLLATE 'cp1251_general_ci',
	`date` DATE NOT NULL,
	`type` TEXT NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Дамп структуры для представление rid.wiev_rids
DROP VIEW IF EXISTS `wiev_rids`;
-- Создание временной таблицы для обработки ошибок зависимостей представлений
CREATE TABLE `wiev_rids` (
	`id` SMALLINT(6) NOT NULL,
	`name` TEXT NOT NULL COLLATE 'cp1251_general_ci',
	`authorn` TEXT NOT NULL COLLATE 'cp1251_general_ci',
	`authors` TEXT NOT NULL COLLATE 'cp1251_general_ci',
	`authorp` TEXT NOT NULL COLLATE 'cp1251_general_ci',
	`status` TEXT NOT NULL COLLATE 'cp1251_general_ci',
	`number` INT(11) NULL,
	`date_create` DATE NULL,
	`date_last_change` DATE NULL,
	`type` TEXT NOT NULL COLLATE 'cp1251_general_ci',
	`organization` TEXT NOT NULL COLLATE 'cp1251_general_ci'
) ENGINE=MyISAM;


-- Дамп структуры для представление rid.wiev_documents
DROP VIEW IF EXISTS `wiev_documents`;
-- Удаление временной таблицы и создание окончательной структуры представления
DROP TABLE IF EXISTS `wiev_documents`;
CREATE VIEW `wiev_documents` AS SELECT
	documents.id_rid AS 'id',
	documents.`file` AS 'file',
	documents.date_create AS 'date',
	type_documents.name AS 'type'
FROM
	documents,
	type_documents
WHERE
	type_documents.id = documents.type_doc ;


-- Дамп структуры для представление rid.wiev_rids
DROP VIEW IF EXISTS `wiev_rids`;
DROP TABLE IF EXISTS `wiev_rids`;
CREATE VIEW `wiev_rids` AS select `rids`.`id` AS `id`,`rids`.`name` AS `name`,`authors`.`name` AS `authorn`,`authors`.`surname` AS `authors`,`authors`.`patronymic` AS `authorp`,`status_rid`.`name` AS `status`,`rids`.`number_case` AS `number`,`rids`.`date_create` AS `date_create`,`rids`.`date_last_change` AS `date_last_change`,`rids`.`type` AS `type`,`organizations`.`name` AS `organization` from (((((`rids` join `authors`) join `status_rid`) join `organizations`) join `rid_organization`) join `rid_author`) where ((`rids`.`id_status` = `status_rid`.`id`) and (`rids`.`id` = `rid_author`.`id_rid`) and (`rid_author`.`id_author` = `authors`.`id`) and (`organizations`.`id` = `rid_organization`.`id_organization`) and (`rids`.`id` = `rid_organization`.`id_rid`)) ;

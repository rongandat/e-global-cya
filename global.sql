-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-07-02 09:15:32
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table eglobal_main.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `admin_password` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `admin_contactname` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `admin_username` varchar(30) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.configuration
CREATE TABLE IF NOT EXISTS `configuration` (
  `configuration_id` int(11) NOT NULL AUTO_INCREMENT,
  `configuration_title` varchar(255) NOT NULL DEFAULT '',
  `configuration_key` varchar(255) NOT NULL DEFAULT '',
  `configuration_value` varchar(255) NOT NULL DEFAULT '',
  `configuration_description` varchar(255) NOT NULL DEFAULT '',
  `configuration_group_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(5) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `use_function` varchar(255) DEFAULT NULL,
  `set_function` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`configuration_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.configuration_group
CREATE TABLE IF NOT EXISTS `configuration_group` (
  `configuration_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `configuration_group_title` varchar(64) NOT NULL DEFAULT '',
  `configuration_group_description` varchar(255) NOT NULL DEFAULT '',
  `sort_order` int(5) DEFAULT NULL,
  `visible` int(1) DEFAULT '1',
  PRIMARY KEY (`configuration_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.countries
CREATE TABLE IF NOT EXISTS `countries` (
  `countries_id` int(11) NOT NULL AUTO_INCREMENT,
  `countries_name` varchar(64) NOT NULL DEFAULT '',
  `countries_iso_code_2` char(2) NOT NULL DEFAULT '',
  `countries_iso_code_3` char(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`countries_id`),
  KEY `idx_countries_name_zen` (`countries_name`),
  KEY `idx_iso_2_zen` (`countries_iso_code_2`),
  KEY `idx_iso_3_zen` (`countries_iso_code_3`)
) ENGINE=MyISAM DEFAULT CHARSET=ujis;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.currencies
CREATE TABLE IF NOT EXISTS `currencies` (
  `currencies_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL DEFAULT '',
  `code` char(3) NOT NULL DEFAULT '',
  `symbol_left` varchar(12) DEFAULT NULL,
  `symbol_right` varchar(12) DEFAULT NULL,
  `decimal_point` char(1) DEFAULT NULL,
  `thousands_point` char(1) DEFAULT NULL,
  `decimal_places` char(1) DEFAULT NULL,
  `value` float(13,8) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `sort_order` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`currencies_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.emailtemplates
CREATE TABLE IF NOT EXISTS `emailtemplates` (
  `emailtemplates_id` int(11) NOT NULL AUTO_INCREMENT,
  `emailtemplate_key` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `is_html_email` tinyint(4) NOT NULL DEFAULT '0',
  `emailtemplate_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`emailtemplates_id`)
) ENGINE=MyISAM DEFAULT CHARSET=ujis;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.emailtemplates_description
CREATE TABLE IF NOT EXISTS `emailtemplates_description` (
  `emailtemplates_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `emailtemplate_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `emailtemplate_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emailtemplate_usage` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emailtemplate_subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`emailtemplates_id`,`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.extra_fields
CREATE TABLE IF NOT EXISTS `extra_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `history_id` int(10) NOT NULL,
  `field` varchar(200) NOT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `faqs_id` int(11) NOT NULL AUTO_INCREMENT,
  `faqs_status` tinyint(4) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `is_topic` tinyint(4) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`faqs_id`)
) ENGINE=MyISAM DEFAULT CHARSET=ujis;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.faqs_description
CREATE TABLE IF NOT EXISTS `faqs_description` (
  `faqs_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `faqs_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faqs_description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`faqs_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.info_templates
CREATE TABLE IF NOT EXISTS `info_templates` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_key` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info_content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `language_code` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  `info_usage` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `html_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM DEFAULT CHARSET=ujis;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `language_code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `language_image` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_directory` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_order` int(3) DEFAULT NULL,
  `language_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`language_id`),
  KEY `IDX_LANGUAGES_NAME` (`language_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_subject` varchar(255) NOT NULL,
  `message_content` text NOT NULL,
  `message_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_folder` varchar(8) NOT NULL,
  `from_username` varchar(32) NOT NULL,
  `message_status` tinyint(4) NOT NULL DEFAULT '0',
  `from_userid` int(11) NOT NULL,
  `to_username` varchar(32) NOT NULL,
  `to_userid` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.news
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `news_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_file_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `news_date` date DEFAULT NULL,
  `news_type` tinyint(4) NOT NULL DEFAULT '0',
  `news_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.security_questions
CREATE TABLE IF NOT EXISTS `security_questions` (
  `security_questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `sort_order` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`security_questions_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.security_questions_description
CREATE TABLE IF NOT EXISTS `security_questions_description` (
  `security_questions_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  PRIMARY KEY (`security_questions_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `sesskey` varchar(32) NOT NULL DEFAULT '',
  `expiry` int(11) unsigned NOT NULL DEFAULT '0',
  `value` text NOT NULL,
  PRIMARY KEY (`sesskey`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_number` varchar(16) NOT NULL,
  `from_userid` int(11) NOT NULL,
  `to_userid` int(11) NOT NULL,
  `amount` float NOT NULL,
  `transaction_time` datetime NOT NULL,
  `transaction_memo` mediumtext NOT NULL,
  `from_account` varchar(16) NOT NULL,
  `to_account` varchar(16) NOT NULL,
  `transaction_status` varchar(16) NOT NULL,
  `transaction_currency` varchar(3) NOT NULL,
  `amount_text` varchar(32) NOT NULL,
  `fee` float NOT NULL,
  `fee_text` varchar(32) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.transactions_history
CREATE TABLE IF NOT EXISTS `transactions_history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_number` varchar(16) NOT NULL,
  `from_userid` int(11) DEFAULT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `to_userid` int(11) NOT NULL,
  `amount` float NOT NULL,
  `transaction_time` datetime NOT NULL,
  `transaction_memo` mediumtext NOT NULL,
  `from_account` varchar(16) NOT NULL,
  `to_account` varchar(16) NOT NULL,
  `transaction_status` varchar(16) NOT NULL,
  `description` text,
  `transaction_currency` varchar(3) NOT NULL,
  `amount_text` varchar(32) NOT NULL,
  `fee` float NOT NULL,
  `fee_text` varchar(32) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `signup_date` datetime NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `welcome_message` varchar(255) NOT NULL,
  `language` varchar(2) NOT NULL DEFAULT 'en',
  `phone` varchar(32) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `postcode` varchar(16) NOT NULL,
  `company` varchar(255) NOT NULL,
  `security_question` varchar(255) NOT NULL,
  `security_answer` varchar(255) NOT NULL,
  `login_pin` varchar(8) NOT NULL,
  `master_key` varchar(6) NOT NULL,
  `account_number` varchar(8) NOT NULL,
  `account_type` varchar(32) NOT NULL,
  `referral_count` int(11) NOT NULL,
  `additional_information` varchar(255) NOT NULL,
  `reset_code` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.user_balance
CREATE TABLE IF NOT EXISTS `user_balance` (
  `user_id` int(11) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `balance` float NOT NULL,
  `last_updated` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`currency_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.user_information_settings
CREATE TABLE IF NOT EXISTS `user_information_settings` (
  `user_id` int(11) NOT NULL,
  `address` tinyint(4) NOT NULL,
  `balances` varchar(255) NOT NULL,
  `name` tinyint(4) NOT NULL,
  `phone` tinyint(4) NOT NULL,
  `mobile` tinyint(4) NOT NULL,
  `company` tinyint(4) NOT NULL,
  `email` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.user_wallet
CREATE TABLE IF NOT EXISTS `user_wallet` (
  `user_id` int(11) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `balance` float NOT NULL,
  `last_updated` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`currency_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table eglobal_main.zones
CREATE TABLE IF NOT EXISTS `zones` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `zone_country_id` int(11) NOT NULL DEFAULT '0',
  `zone_code` varchar(32) NOT NULL DEFAULT '',
  `zone_name` varchar(32) NOT NULL DEFAULT '',
  `zone_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`zone_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

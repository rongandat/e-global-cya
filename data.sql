INSERT INTO `configuration` (`configuration_title`, `configuration_key`, `configuration_value`, `configuration_description`, `configuration_group_id`) VALUES ('Fields Extra SCI Limit ', 'FIELDS_EXTRA_SCI_LIMIT', '5', 'Fields Extra SCI Limit ', 1);

ALTER TABLE `transactions_history`
	ADD COLUMN `error_code` VARCHAR(10) NULL AFTER `description`;
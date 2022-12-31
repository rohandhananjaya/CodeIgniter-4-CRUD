CREATE TABLE `student` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(75) NOT NULL COLLATE 'utf8mb4_general_ci',
	`phone` VARCHAR(15) NOT NULL COLLATE 'utf8mb4_general_ci',
	`image` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`status` BIT(1) NOT NULL,
	`timeofcreate` TIMESTAMP NULL DEFAULT current_timestamp(),
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=4
;

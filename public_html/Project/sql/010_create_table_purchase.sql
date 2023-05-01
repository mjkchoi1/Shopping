CREATE TABLE IF NOT EXISTS `Purchase` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `item_id` INT NOT NULL,
    `user_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `unit_price` DECIMAL(10,2) NOT NULL,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

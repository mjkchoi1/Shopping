CREATE TABLE IF NOT EXISTS Cart(
    id int AUTO_INCREMENT PRIMARY  KEY,
    desired_quantity int,
    item_id int,
    unit_price int,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    CHECK (desired_quantity > 0),
    CHECK (unit_price >= 0), -- don't allow negative costs
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    FOREIGN KEY (`item_id`) REFERENCES Products(`id`),
    UNIQUE KEY (`user_id`, `item_id`)
)
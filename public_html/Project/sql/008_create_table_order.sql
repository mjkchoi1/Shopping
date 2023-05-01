CREATE TABLE Orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    item_id int,
    created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    total_price DECIMAL(10, 2) NOT NULL,
    address VARCHAR(255) NOT NULL,
    payment_method ENUM('credit_card', 'paypal', 'cash') NOT NULL,
    money_received TINYINT(1) NOT NULL DEFAULT 0,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

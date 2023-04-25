CREATE TABLE IF NOT EXISTS Accounts(
    id int AUTO_INCREMENT PRIMARY KEY,
    account varchar(12) unique DEFAULT (LPAD(user_id, 12, "0")),
    user_id int,
    balance int DEFAULT 0,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    check ((account != '000000000000') AND (balance >= 0) AND LENGTH(account) = 12),
    FOREIGN KEY (user_id) REFERENCES Users(id)
);
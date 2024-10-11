CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    coins INT(11) NOT NULL
);

CREATE TABLE items (
    id INT PRIMARY KEY AUTO_INCREMENT,
    price FLOAT NOT NULL,
    name VARCHAR(40) NOT NULL,
    path VARCHAR(255) NOT NULL
);

CREATE TABLE users_items (
    users_id INT,
    items_id INT,
    PRIMARY KEY (users_id, items_id),
    FOREIGN KEY (users_id) REFERENCES users(id),
    FOREIGN KEY (items_id) REFERENCES items(id)
);

CREATE TABLE questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    question VARCHAR(255) NOT NULL,
    a VARCHAR(255) NOT NULL,
    b VARCHAR(255) NOT NULL,
    c VARCHAR(255) NOT NULL,
    d VARCHAR(255) NOT NULL,
    correct VARCHAR(1) NOT NULL
);
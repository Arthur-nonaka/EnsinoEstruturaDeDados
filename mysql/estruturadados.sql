CREATE TABLE users (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    coins int(11) NOT NULL
);

CREATE TABLE 'users_items' (
    users_id INT,
    items_id INT,
    PRIMARY KEY (users_id, items_id),
    FOREIGN KEY (users_id) REFERENCES users(id),
    FOREIGN KEY (items_id) REFERENCES items(id),

)

CREATE TABLE items (
    id INT PRIMARY KEY AUTO_INCREMENT,
    price FLOAT NOT NULL,
    name varchar(40) NOT NULL,
    path varchar(255) NOT NULL,
)
CREATE TABLE users (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    coins int(11) NOT NULL
);

CREATE TABLE pages (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE user_pages (
    user_id BIGINT,
    page_id BIGINT,
    PRIMARY KEY (user_id, page_id),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (page_id) REFERENCES pages(id)
);
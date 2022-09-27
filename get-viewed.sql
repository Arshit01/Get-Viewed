CREATE TABLE `users` (
    u_id int(10) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(30) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    GVC int(255),
    PRIMARY KEY (u_id)
);

CREATE TABLE `user_data` (
    link_id int(10) NOT NULL AUTO_INCREMENT,
    u_id int(10) NOT NULL,
    link_url VARCHAR(255) NOT NULL,
    PRIMARY KEY (link_id),
    FOREIGN KEY (u_id) REFERENCES users (u_id)
);

CREATE TABLE `viewed` (
    link_id int(10) NOT NULL,
    u_id int(10) NOT NULL,
    FOREIGN KEY (link_id) REFERENCES user_data (link_id),
    FOREIGN KEY (u_id) REFERENCES users (u_id)
);
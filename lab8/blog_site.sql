-- Lab 08: blog_site database
-- Author: Nguyen Sy Tho (105705546)

CREATE DATABASE IF NOT EXISTS blog_site;
USE blog_site;

DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
	user_id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(50),
	email VARCHAR(100),
	is_active BOOLEAN,
	PRIMARY KEY (user_id)
);

CREATE TABLE posts (
	post_id INT NOT NULL AUTO_INCREMENT,
	user_id INT,
	title VARCHAR(100),
	content TEXT,
	PRIMARY KEY (post_id)
);

INSERT INTO users (username, email, is_active) VALUES ('alex', 'alex@email.com', true);
INSERT INTO users (username, email, is_active) VALUES ('mia', 'mia@email.com', false);

INSERT INTO posts (user_id, title, content) VALUES (1, 'First Post', 'This is my first blog post.');
INSERT INTO posts (user_id, title, content) VALUES (2, 'Hello World', 'Mia is testing her first post.');

CREATE DATABASE form;
USE form;

CREATE TABLE users (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', '123');

SELECT * FROM users;

CREATE TABLE admin_data (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(100) NOT NULL,
  age INT(11) NOT NULL,
  location VARCHAR(100) NOT NULL,
  course VARCHAR(100) NOT NULL,
  major VARCHAR(100) NOT NULL,
  contact VARCHAR(50) NOT NULL
);

INSERT INTO admin_data (fullname, age, location, course, major, contact) 
VALUES ('Christian Lira', 20, 'Makati', 'Technological College', 'Computer Science', '09275244818');

SELECT * FROM admin_data;

CREATE DATABASE IF NOT EXISTS exhibition_db CHARACTER SET utf8mb4;
USE exhibition_db;

CREATE TABLE cars (
    car_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    yom YEAR NOT NULL
);

INSERT INTO cars (make, model, price, yom) VALUES
('Holden', 'Astra', 14000, 2009),
('BMW', 'X3', 35000, 2010),
('Ford', 'Falcon', 39000, 2013),
('Toyota', 'Corolla', 20000, 2012),
('Holden', 'Commodore', 28000, 2009);

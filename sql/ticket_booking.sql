CREATE DATABASE IF NOT EXISTS ticket_booking;
USE ticket_booking;

CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    from_city VARCHAR(50),
    to_city VARCHAR(50),
    mode VARCHAR(20)
);

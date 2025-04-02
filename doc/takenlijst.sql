DROP DATABASE IF EXISTS takenlijst;
CREATE DATABASE IF NOT EXISTS takenlijst 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE takenlijst;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255) NOT NULL,
  username VARCHAR(50) UNIQUE NOT NULL,
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE taken (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titel VARCHAR(255) NOT NULL,
  beschrijving TEXT,
  afdeling VARCHAR(100) NOT NULL,
  status ENUM('To-do', 'In-progress', 'Done') DEFAULT 'To-do',
  deadline DATETIME,
  user_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB;

INSERT INTO users (naam, username, email, password) VALUES 
('Testgebruiker 1', 'user1', 'user1@example.com', '$2y$10$XQwbcsOWgM0KvAbya2Ad2efBwTLra2CzeduJtAuY8.BW9EHx.cFKa'),
('Testgebruiker 2', 'user2', 'user2@example.com', '$2y$10$HoDxSJa/4NcFcJ.U.kj9N.cSBgcm75IwUkdgxJhLjRXY/K2cP8Fl.'),
('Testgebruiker 3', 'user3', 'user3@example.com', '$2y$10$M7vkYfdWMYqLzvCqjlOh7.nPc79zwDxtItUOh/91teGikS/XrpNuO');

INSERT INTO taken (titel, beschrijving, afdeling, status, deadline, user_id) VALUES 
('Website Onderhoud', 'Update website content', 'IT', 'To-do', '2024-05-15 14:30:00', 1),
('Database Optimalisatie', 'Performance verbeteren', 'Backend', 'In-progress', '2024-04-30 10:00:00', 2),
('Design Review', 'UI/UX evaluatie', 'Design', 'Done', '2024-04-20 16:45:00', 3);
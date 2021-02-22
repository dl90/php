CREATE DATABASE music_library;
ALTER DATABASE music_library CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE music_library;

CREATE TABLE songs (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  number_of_stars TINYINT NOT NULL DEFAULT 0,
  created TIMESTAMP NOT NULL DEFAULT NOW()
);

INSERT INTO songs (title, number_of_stars) 
VALUES ("Heartless", 3);
INSERT INTO songs (title, number_of_stars) 
VALUES ("Runaway", 5);
INSERT INTO songs (title, number_of_stars) 
VALUES ("Homecoming", 3);
INSERT INTO songs (title, number_of_stars) 
VALUES ("Facts (Charlie Heat Version)", 1);
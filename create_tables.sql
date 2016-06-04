CREATE TABLE pub_type (
  id INT NOT NULL AUTO_INCREMENT,
  type_name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (type_name)
)ENGINE=InnoDB;

CREATE TABLE genre (
  id INT NOT NULL AUTO_INCREMENT,
  genre_name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (genre_name)
)Engine=InnoDB;

CREATE TABLE publication (
  id INT NOT NULL AUTO_INCREMENT,
  pub_name VARCHAR(255) NOT NULL,
  author VARCHAR(255),
  year_published INT,
  pub_type INT,
  pub_genre INT,
  PRIMARY KEY (id),
  FOREIGN KEY (pub_type) REFERENCES pub_type(id),
  FOREIGN KEY (pub_genre) REFERENCES genre(id)
)ENGINE=InnoDB;

CREATE TABLE award (
  id INT NOT NULL AUTO_INCREMENT,
  award_name VARCHAR(255) NOT NULL,
  award_genre INT,
  PRIMARY KEY (id),
  UNIQUE KEY (award_name),
  FOREIGN KEY (award_genre) REFERENCES genre(id)
)ENGINE=InnoDB;

CREATE TABLE pub_award (
  pid INT,
  aid INT,
  FOREIGN KEY (pid) REFERENCES publication(id),
  FOREIGN KEY (aid) REFERENCES award(id)
)ENGINE=InnoDB;


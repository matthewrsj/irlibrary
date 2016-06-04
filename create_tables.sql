CREATE TABLE pub_type (
  id INT NOT NULL AUTO_INCREMENT,
  type_name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (type_name)
)ENGINE=InnoDB;

CREATE TABLE publication (
  id INT NOT NULL AUTO_INCREMENT,
  pub_name VARCHAR(255) NOT NULL,
  author VARCHAR(255),
  year_published INT,
  pub_type INT,
  PRIMARY KEY (id),
  FOREIGN KEY (pub_type) REFERENCES pub_type(id)
)ENGINE=InnoDB;

CREATE TABLE genre (
  id INT NOT NULL AUTO_INCREMENT,
  genre_name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (genre_name)
)Engine=InnoDB;

CREATE TABLE award (
  id INT NOT NULL AUTO_INCREMENT,
  award_name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY (award_name)
)ENGINE=InnoDB;

CREATE TABLE pub_genre (
  pid INT,
  gid INT,
  FOREIGN KEY (pid) REFERENCES publication(id),
  FOREIGN KEY (gid) REFERENCES genre(id)
)ENGINE=InnoDB;

CREATE TABLE pub_award (
  pid INT,
  aid INT,
  FOREIGN KEY (pid) REFERENCES publication(id),
  FOREIGN KEY (aid) REFERENCES award(id)
)ENGINE=InnoDB;

CREATE TABLE award_genre (
  aid INT,
  gid INT,
  FOREIGN KEY (aid) REFERENCES award(id),
  FOREIGN KEY (gid) REFERENCES genre(id)
)Engine=InnoDB

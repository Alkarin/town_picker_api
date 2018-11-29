## README

#### Running locally
* `cd public`
* `clear && php -S localhost:8888`

## Database commands (mysql)

#### View contents
select * from towns;

#### DELETE
DROP TABLE towns;


#### CREATE TABLES

`CREATE TABLE towns (
   id INT NOT NULL AUTO_INCREMENT,
   name varchar(255),
   state varchar(255),
   timezone DECIMAL(5, 2) NOT NULL,
   lat DECIMAL(10, 8) NOT NULL,
   lng DECIMAL(11, 8) NOT NULL,
   PRIMARY KEY (id)
 ) ENGINE=INNODB;`

`CREATE TABLE towns_type (
  id INT NOT NULL AUTO_INCREMENT,
  towns_id INT,
  type varchar(255),
  INDEX par_ind (towns_id),
  FOREIGN KEY (towns_id) REFERENCES towns(id) ON DELETE CASCADE,
  PRIMARY KEY (id)
) ENGINE=INNODB;`

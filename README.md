## README

#### Running locally
* `cd public`
* `clear && php -S localhost:8888 index.php`

## Database commands (mysql)

#### View contents
select * from towns;

#### DELETE
DROP TABLE towns;


#### CREATE TABLES

`CREATE TABLE towns (
   id INT NOT NULL,
   name varchar(255),
   state varchar(255),
   timezone varchar(255),
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

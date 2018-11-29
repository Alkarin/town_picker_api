## README

#### Running locally
* `cd public`
* `clear && php -S localhost:8888`

## Database commands (mysql)

#### View contents
SELECT * from towns;

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


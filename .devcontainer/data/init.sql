CREATE DATABASE devdb;
USE devdb;
CREATE TABLE example_table(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    animal VARCHAR(100),
    color_hex CHAR(7),
    legs INT
) COMMENT '';

INSERT INTO example_table (animal, color_hex, legs) VALUES ('cat','white',4);
INSERT INTO example_table (animal, color_hex, legs) VALUES ('giraffe','orange',4);
INSERT INTO example_table (animal, color_hex, legs) VALUES ('spider','black',8);
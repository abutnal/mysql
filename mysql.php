// Create a database

CREATE DATABASE user;



// Create a table

CREATE TABLE user_tbl (
user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL,
phone VARCHAR(12),
dob VARCHAR(50),
sex VARCHAR(10),
create_date TIMESTAMP,
modefied_date VARCHAR(50)
)



<!-- Insert Data -->
INSERT INTO `user_table` (`user_id`, `name`, `email`, `phone`, `dob`, `sex`, `create_date`, `modified_date`) VALUES (NULL, 'AB', 'utnal.ab@gmail.com', '8722222996', '12/02/2018', 'Male', CURRENT_TIMESTAMP, '');
/**
 * First create databse users
  */
CREATE DATABASE IF NOT EXISTS Users;


/*
create table users
 */

use Users;
CREATE TABLE if not EXISTS users (
  user_id int(11) not null PRIMARY KEY  AUTO_INCREMENT,
  user_firstname VARCHAR(55) ,
  user_lastname VARCHAR(55),
  user_email VARCHAR(55),
  user_password VARCHAR(80)
);


/*
Databse to hold users ip and browser
 */

CREATE DATABASE IF NOT EXISTS Users_info;
use Users_info;

CREATE  TABLE IF NOT EXISTS users_inf(
  id int(11) not NULL PRIMARY KEY AUTO_INCREMENT,
  users_id VARCHAR(16),
  users_browser TEXT
);


use Users;
insert INTO  users (user_firstname,user_lastname,user_email,user_password) values ('Testing','Example','example@gmail.com','123456');
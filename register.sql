create database if not exists register;
use register;

drop table users;
create table users (
id int(6) unsigned auto_increment primary key,
username varchar(30) unique,
password varchar(255),
email varchar(100) unique,
join_date timestamp
);

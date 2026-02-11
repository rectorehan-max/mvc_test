create database mvc_db;
use mvc_db;

create table users (
	id int auto_increment primary key,
    username varchar(100) not null,
    email varchar(100) not null,
    created_at timestamp default current_timestamp
);

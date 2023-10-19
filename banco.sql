create database banco;
use banco;
create table anuncios(
id int auto_increment primary key,
animal_name varchar(255) not null,
email varchar(255) not null,
phone varchar(20) not null,
imagem varchar(255) not null
);
drop database if exists mialdea;
create database mialdea;
use mialdea;

/*create user 'jap'@'%' identified by 'mialdea';*/
grant all privileges on mialdea.* to 'jap'@'%';

create table jugadores (
	id int auto_increment primary key,
    nombre varchar(20),
    nick varchar(10),
    contr varchar(10),
    personaje enum('null', 'guerrero', 'arquero', 'mago'),
    casa enum('paja', 'madera', 'ladrillo')
);
insert into jugadores values (default, 'Patricia', 'patri', 'holaP123', 'null', 'paja');
select * from jugadores;
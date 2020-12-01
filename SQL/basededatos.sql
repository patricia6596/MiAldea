drop database if exists mialdea;
create database mialdea;
use mialdea;

/*create user 'jap'@'%' identified by 'mialdea';*/
grant all privileges on mialdea.* to 'jap'@'%';

create table jugadores (
	id int auto_increment primary key,
    nombre varchar(20),
    nick varchar(10) unique,
    contr varchar(10),
    personaje enum('null', 'guerrero', 'arquero', 'mago'),
    casa enum('paja', 'madera', 'ladrillo'),
    arma enum('null','nivel1', 'nivel2', 'nivel3'),
    control enum('control')
);
insert into jugadores values (default, 'Patricia', 'patri', 'holaP123', 'null', 'paja', 'nivel1', 'control');
select * from jugadores;
update jugadores set personaje='mago' where nick='patri';
delete from jugadores where nick='patric';
select * from jugadores where nick='nora';
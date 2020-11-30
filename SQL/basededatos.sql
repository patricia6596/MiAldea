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
    casa enum('paja', 'madera', 'ladrillo'),
    arma enum('null','nivel1', 'nivel2', 'nivel3')
);
insert into jugadores values (default, 'Patricia', 'patri', 'holaP123', 'null', 'paja', 'nivel1');
select * from jugadores;
update jugadores set personaje='mago' where nick='patri';
delete from jugadores where nick='patric';
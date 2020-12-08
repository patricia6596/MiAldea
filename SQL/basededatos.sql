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
    personaje enum('guerrero', 'arquero', 'mago'),
    casa enum('paja', 'madera', 'ladrillo'),
    arma enum('nivel1', 'nivel2', 'nivel3'),
    puntos int,
    control enum('control')
);
insert into jugadores values (default, 'Patricia', 'patri', 'holaP123', 'mago', 'paja', 'nivel1', 0, 'control');
select * from jugadores;
update jugadores set personaje='mago' where nick='patri';
update jugadores set casa='paja' where nick='patricia';
update jugadores set arma='nivel1' where nick='patricia';
update jugadores set puntos=30 where nick='patricia';
delete from jugadores where nick='patric';
select * from jugadores where nick='nora';
create database pokedex;
use pokedex;

create table Tipo(
id int,
descripcion varchar(15),
primary key (id));

create table Pokemons(
id int,
tipo int,
nombre varchar(20),
imagen varchar(80),
primary key (id),
foreign key (tipo) references Tipo(id));

insert into Tipo(id,descripcion)
values
(1,'Electrico'),
(2,'Agua');

insert into Pokemons(id,tipo, nombre,imagen)
values
(1,1,'Pikachu','recursos/img/pokemons/pikachu.png'),
(2,2,'Squirtle','recursos/img/pokemons/squirtle.png');
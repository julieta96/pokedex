create database pokedex;
create user 'admin'@'localhost' identified by '12345';
grant all on pokedex.* to 'admin'@'localhost';
use pokedex;
alter user'admin'@'localhost' identified with mysql_native_password by'12345';
create table Pokemons(
id int not null auto_increment,
id_manual int,
nombre varchar(20),
altura varchar(10),
peso varchar(10),
habilidad varchar(30),
tipo varchar(80),
tipo_dos varchar(80),
descripcion varchar(1000),
imagen varchar(80),
primary key (id));

create table Login(
id int not null auto_increment,
usuario varchar(20),
password varchar(20),
primary key (id));

insert into Pokemons(id_manual,nombre, altura, peso, habilidad, tipo, tipo_dos, descripcion, imagen)
values
(10,'Bulbasaur','0.7 M','6.9 KG','Espesura','recursos/img/pokemons/tipo/planta.png','recursos/img/pokemons/tipo/veneno.png','Este Pokémon nace con una semilla en el lomo, que brota con el paso del tiempo','recursos/img/pokemons/bulbasaur.png'),
(20,'Ivysaur','1.0 M','13.0 KG','Espesura','recursos/img/pokemons/tipo/planta.png','recursos/img/pokemons/tipo/veneno.png','Cuando le crece bastante el bulbo del lomo, pierde la capacidad de erguirse sobre las patas traseras','recursos/img/pokemons/ivysaur.png'),
(30,'Charizard','1.7 M','90.5 KG','Mar Llamas','recursos/img/pokemons/tipo/fuego.png','recursos/img/pokemons/tipo/volador.png','Escupe un fuego tan caliente que funde las rocas.<br> Causa incendios forestales sin querer','recursos/img/pokemons/charizard.png'),
(40,'Butterfree','1.1 M','32.0 KG','Ojo Compuesto','recursos/img/pokemons/tipo/bicho.png','recursos/img/pokemons/tipo/volador.png','Aletea a gran velocidad para lanzar al aire sus escamas extremadamente tóxicas','recursos/img/pokemons/butterfree.png'),
(50,'Vileplume','1.2 M','18.6 KG','Clorofila','recursos/img/pokemons/tipo/planta.png','recursos/img/pokemons/tipo/veneno.png','Tiene los pétalos más grandes del mundo. <br>Al caminar, de ellos se desprenden densas nubes de polen tóxico','recursos/img/pokemons/vileplume.png');

insert into Pokemons(id_manual,nombre, altura, peso, habilidad, tipo, descripcion, imagen)
values
(60,'Pikachu','0.4 M','6.0 KG','Electricidad Estatica','recursos/img/pokemons/tipo/electrico.png','Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas','recursos/img/pokemons/pikachu.png'),
(70,'Squirtle','0.5 M','9.0 KG','Torrente','recursos/img/pokemons/tipo/agua.png','Cuando retrae su largo cuello en el caparazón, dispara agua a una presión increíble','recursos/img/pokemons/squirtle.png'),
(80,'Charmander','0.6 M','8.5 KG','Mar Llamas','recursos/img/pokemons/tipo/fuego.png','Prefiere las cosas calientes.<br />Dicen que cuando llueve le sale vapor de la punta de la cola','recursos/img/pokemons/bulbasaur.png'),
(90,'Caterpie','0.3 M','2.9 KG','Polvo Escudo','recursos/img/pokemons/tipo/bicho.png','Para protegerse, despide un hedor horrible por las antenas con el que repele a sus enemigos','recursos/img/pokemons/caterpie.png'),
(100,'Psyduck','0.8 M','19.6 KG','Humedad/Aclimatacion','recursos/img/pokemons/tipo/agua.png','Siempre padece dolores de cabeza. Tras desatar sus misteriosos poderes, la jaqueca remite unos instantes','recursos/img/pokemons/psyduck.png');

insert into Login(usuario, password)
values
('adm_julieta','1234'),
('adm_tabatha','5678'),
('adm_tomas','9101'),
('adm_gaston','1213');
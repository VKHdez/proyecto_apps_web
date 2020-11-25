create database apuntesdb;
use apuntesdb;

create table usuarios(
    id_usuario int not null auto_increment primary key,
    nombre varchar(128) not null,
    apellido varchar(64) not null,
    correo varchar(128) not null,
    contrasenia varchar (64) not null,
    tipo int not null
);


create table apuntes(
    id_apuntes int not null auto_increment primary key,
    materia varchar (64)not null,
    titulo varchar (64) not null,
    resumen varchar (128) not null,
    apunte varchar (128) not null,
    autor varchar (64) not null
);

create table libroApuntes(
    id int not null auto_increment,
    id_apunte int not null,
    id_usuario int not null,
    foreign key(id_apunte) references apuntes(id_apuntes) on delete cascade on update cascade,
    foreign key(id_usuario) references usuarios(id_usuario) on delete cascade on update cascade,
    primary key (id)
);


insert into usuarios(nombre, apellido,correo,contrasenia,tipo) values ('','','','',0);
insert into usuarios(nombre, apellido,correo,contrasenia,tipo) values ('pedro','lopez','pedro@hotmail.com','pedro',2);
insert into usuarios(nombre, apellido,correo,contrasenia,tipo) values ('bernardo','perez','berna_perez@hotmail.com','1a',3);
insert into usuarios(nombre, apellido,correo,contrasenia,tipo) values ('carlos','flores','carlos@gmail.com','1b',3);
insert into usuarios(nombre, apellido,correo,contrasenia,tipo) values ('victor','hernandez','victor@gmail.com','1c',3);
insert into apuntes(titulo,materia,resumen,autor) values ('','','','');
insert into apuntes(titulo,materia,resumen,autor) values ('java1','programacion','java1resumen','Miguel');
insert into apuntes(titulo,materia,resumen,autor) values ('php1','aplicacionesweb','php1resumen','Pedro');

insert into libroApuntes(id_usuario, id_apunte) select usuarios.id_usuario,apuntes.id_apuntes from usuarios,apuntes where usuarios.correo='berna_perez@hotmail.com' and apuntes.id_apuntes=11;
insert into libroApuntes(id_usuario, id_apunte) select usuarios.id_usuario,apuntes.id_apuntes from usuarios,apuntes where usuarios.correo='berna_perez@hotmail.com' and apuntes.id_apuntes=11;
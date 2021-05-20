drop database comercializar;
create database comercializar;
use comercializar;

create table clientes (
	id int primary key auto_increment,
    dni char (8),
    nombres varchar (40),
    direccion varchar (40),
    sexo char (1),
    celular char (9),
    usuario varchar (40),
    passwor varchar (60), 
    
    constraint check_sexo check (sexo in ('m','f'))
);

create table publicacion (
	id int primary key auto_increment,
    nombres varchar (40),
    temas varchar (40),
    descripcion varchar (100),
    id_clientes int,
    
    constraint fk_clientes FOREIGN KEY (id_clientes) REFERENCES clientes(id)
);

create table numero (
	id int primary key auto_increment,
    fecha date,
    resumen varchar (100),
    id_publicacion int,
    
    constraint fk_publicacion FOREIGN KEY (id_publicacion) REFERENCES publicacion(id)
);

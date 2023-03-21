create database practica;

create table usuario.practica(id_usuario int auto_increment not null,nombre varchar(25) not null,
apellidos varchar(110) not null, direccion text not null, telefono int not null, fecha_nacimiento date not null,
email varchar(255) not null, primary key (id_usuario))engine=innodb;

create table plantel.practica(id_plantel int auto_increment not null,n_palntel varchar(25) not null,
c_plantel varchar(110) not null, direccion text not null, telefono int not null, responsable varchar(255) not null,
primary key (id_plantel))engine=innodb;

create table lugar.practica(id_lugar int auto_increment not null,n_lugar varchar(25) not null,
descripcion text not null, telefono int not null, email varchar(255) not null, 
facebook varchar (255) not null, horario date not null,primary key (id_lugar))engine=innodb;
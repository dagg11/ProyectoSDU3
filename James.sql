CREATE DATABASE James;

USE James;

CREATE TABLE Usuario (
  id_usuario int NOT NULL AUTO_INCREMENT,
  nombre_usuario varchar(60) NOT NULL,
  primer_apellido varchar(60) NOT NULL,
  segundo_apellido varchar(60),
  direccion varchar(100),
  correo varchar(60) NOT NULL,
  pass char(32) NOT NULL,
  PRIMARY KEY (id_usuario)
);

INSERT INTO Usuario VALUES (null,'Efren','Cruz','Cruz','San Felipe','efren@gmail.com',md5('efren'));
INSERT INTO Usuario VALUES (null,'Saul','Gomez','Navarte','Jocotitlán','saul@gmail.com',md5('saul'));


CREATE TABLE Curso (
  id_curso int NOT NULL AUTO_INCREMENT,
  nombre_curso varchar(50) NOT NULL,
  descripcion_curso text,
  id_usuario int NOT null,
  PRIMARY KEY (id_curso),
  FOREIGN key (id_usuario) REFERENCES Usuario (id_usuario)
);

INSERT INTO Curso VALUES (null,'Programación web','En este curso aprenderemos todo lo relacionado con la programación web',1);
INSERT INTO Curso VALUES (null,'Programación en Java','En este curso aprenderemos todo lo relacionado con la programación en java',1);
INSERT INTO Curso VALUES (null,'Programación en C++','En este curso aprenderemos todo lo relacionado con la programación en C++',2);
INSERT INTO Curso VALUES (null,'Bases de datos','En este curso aprenderemos todo lo relacionado con las bases de datos',2);

CREATE TABLE Tutorial (
  id_tutorial int NOT NULL AUTO_INCREMENT,
  nombre_tutorial varchar(50) NOT NULL,
  descripcion_tutorial text,
  numero int not null,
  id_curso int NOT NULL,
  PRIMARY KEY (id_tutorial),
  FOREIGN KEY (id_curso) REFERENCES Curso (id_curso)
);

INSERT INTO Tutorial VALUES (null,'Aprendiendo HTML','HTML desde cero, aprende lo básico sobre HTHL',1,1);
INSERT INTO Tutorial VALUES (null,'Aprendiendo PHP','PHP desde cero, aprende lo básico sobre PHP',2,1);
INSERT INTO Tutorial VALUES (null,'Aprendiendo Java','Java desde cero, aprende lo básico sobre Java',1,2);
INSERT INTO Tutorial VALUES (null,'Herencia','Aprende lo básico sobre herencia en Java',2,2);
INSERT INTO Tutorial VALUES (null,'Aprendiendo C++','C++ desde cero, aprende lo básico sobre C++',1,3);
INSERT INTO Tutorial VALUES (null,'Aprendiendo bases de datos','Bases de datos desde cero, aprende lo básico sobre bases de datos',1,4);

create table recursos (
  id_recurso int NOT NULL AUTO_INCREMENT,
  nombre_recurso varchar(50) not null,
  id_tutorial int not null,
  PRIMARY key (id_recurso),
  FOREIGN key (id_tutorial) REFERENCES Tutorial (id_tutorial)
);

CREATE TABLE Comentario (
  id_comentario int NOT NULL AUTO_INCREMENT,
  comentario varchar(200),
  id_usuario int NOT NULL,
  id_tutorial int NOT NULL,
  PRIMARY KEY (id_comentario),
  FOREIGN KEY (id_usuario) REFERENCES Usuario (id_usuario),
  FOREIGN KEY (id_tutorial) REFERENCES Tutorial (id_tutorial)
);

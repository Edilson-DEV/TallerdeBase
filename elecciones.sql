DROP DATABASE IF EXISTS elecciones;
CREATE DATABASE IF NOT EXISTS elecciones;
USE elecciones;

CREATE TABLE departamento(
    idDepartamento INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL UNIQUE
)ENGINE=InnoDB;

CREATE TABLE Localidad(
    idLocalidad INT AUTO_INCREMENT PRIMARY KEY,
#     idDepartemento int not null,
    nombre VARCHAR(20) NOT NULL,
    idDepartamento int not null,
    FOREIGN KEY(idDepartamento) REFERENCES departamento(idDepartamento) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE recintoVotacion(
    idRecintoVotacion INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL,
    idLocalidad int not null,
    FOREIGN KEY(idLocalidad) REFERENCES localidad(idLocalidad) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE mesa(
    idMesa INT AUTO_INCREMENT PRIMARY KEY,
    mesa INT NOT NULL,
    idRecintoVotacion int not null,
    FOREIGN KEY(idRecintoVotacion) REFERENCES recintoVotacion(idRecintoVotacion) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE registro(
    idRegistro INT AUTO_INCREMENT PRIMARY KEY,
    horaInicio DATETIME NOT NULL,
    horaFin DATETIME NOT NULL,
    idMesa int not null,
    FOREIGN KEY(idMesa) REFERENCES mesa(idMesa) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE usuario(
    idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    ci varchar(15) NOT NULL,
    fechaNacimiento DATE NOT NULL,
    idMesa int not null,
#     idRecintoVotacion int not null,
    FOREIGN KEY(idMesa) REFERENCES mesa(idMesa) ON UPDATE CASCADE ON DELETE CASCADE
#     FOREIGN KEY(idRecintoVotacion) REFERENCES recintoVotacion(idRecintoVotacion) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE horario(
    idHorario INT AUTO_INCREMENT PRIMARY KEY,
    hora  datetime not null,
    idUsuario int not null,
    FOREIGN KEY(idUsuario) REFERENCES usuario(idUsuario) ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

-- lista de usuario
select u.ci,u.fechaNacimiento,h.hora,m.mesa,u.idUsuario
from  mesa m inner join usuario u on m.idMesa = u.idMesa  inner join  horario h on u.idUsuario = h.idUsuario

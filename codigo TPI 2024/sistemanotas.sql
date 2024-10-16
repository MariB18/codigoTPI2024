CREATE DATABASE SistemaNotas;
USE SistemaNotas;

CREATE TABLE Alumno (
    IdAlumno INT PRIMARY KEY AUTO_INCREMENT,
    Apellido VARCHAR(100),
    Nombre VARCHAR(100),
    Usuario VARCHAR(100) UNIQUE,
    Contraseña VARCHAR(100),
    Curso VARCHAR(50),
    Division VARCHAR(50)
);

CREATE TABLE Materia (
    IdMateria INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(100)
);

CREATE TABLE Notas (
    IdNota INT PRIMARY KEY AUTO_INCREMENT,
    IdAlumno INT,
    IdMateria INT,
    PrimerInforme DECIMAL(4, 2),
    SegundoInforme DECIMAL(4, 2),
    Cuatrimestre DECIMAL(4, 2),
    NotaFinal DECIMAL(4, 2),
    FOREIGN KEY (IdAlumno) REFERENCES Alumno(IdAlumno),
    FOREIGN KEY (IdMateria) REFERENCES Materia(IdMateria)
);

use Hospital;

CREATE TABLE Paciente 
(
IDPaciente INT NOT NULL,
Nombres VARCHAR (50) NOT NULL,
Apellidos VARCHAR (50) NOT NULL,
Fecha_de_nacimiento DATE,
Dirección VARCHAR(60) NOT NULL,
Teléfono VARCHAR (15) NOT NULL,
Email VARCHAR (50) NOT NULL,
PRIMARY KEY (IDPaciente)
);

use php;

CREATE TABLE Materias_Profesores 
(
cod_materia INT(15) NOT NULL,
cod_profesores INT(15) NOT NULL,
FOREIGN KEY (cod_materia) REFERENCES materias(cod_materia),
FOREIGN KEY (cod_profesores) REFERENCES profesor(cedula)
);
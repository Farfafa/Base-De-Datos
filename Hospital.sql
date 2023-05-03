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

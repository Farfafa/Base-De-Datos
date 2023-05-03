use Hospital;

CREATE TABLE Historial_Vacunas
(
ID INT NOT NULL,
ID_Paciente INT NOT NULL,
ID_Vacuna INT NOT NULL,
Fecha_de_la_primera_dosis DATE NOT NULL,
Fecha_de_la_segunda_dosis DATE NOT NULL,
Nombre_del_profesional_que_administró_la_vacuna VARCHAR (60),
PRIMARY KEY (ID),
FOREIGN KEY (ID_Paciente) REFERENCES Paciente(IDPaciente),
FOREIGN KEY (ID_Vacuna) REFERENCES Vacunas(IDVacunas)
);

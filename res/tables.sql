create table paciente (
  documento varchar(10) primary key,
  nombre varchar(50),
  direccion varchar(80),
  telefono varchar(10),
  fecha_nacimiento date,
  estado varchar(30),
  genero char(1),
  eps varchar(40),
  email varchar(40),
  pass varchar(120)
);

create table especialidad (
  codigo varchar(4) primary key,
  nombre varchar(50),
  descripcion varchar(130)
);

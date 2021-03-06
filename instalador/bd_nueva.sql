-- creacion de la estructura de la sede.
CREATE TABLE sede (
    id_sede int AUTO_INCREMENT NOT NULL,
    n_sede VARCHAR (50) NOT NULL,
    borrar int(2) NOT NULL,
    PRIMARY KEY(id_sede)
);

CREATE TABLE bloque (
    id_bloque int AUTO_INCREMENT NOT NULL,
    n_bloque int NOT NULL,
    id_sede int NOT NULL,
    PRIMARY KEY (id_bloque)
);

CREATE TABLE piso (
    id_piso int AUTO_INCREMENT NOT NULL,
    n_piso int NOT NULL,
    PRIMARY KEY(id_piso)
);
CREATE TABLE ambiente(
    id_ambiente int AUTO_INCREMENT NOT NULL,
    n_ambiente VARCHAR (50) NOT NULL,
    id_piso int NOT NULL,
    PRIMARY KEY(id_ambiente)
);

-- creacion de la estructura de los programas.

CREATE TABLE programas(
    ficha int(15) NOT NULL,
    n_programa VARCHAR (50) NOT NULL,
    cantidad_aprendizes int(5) NOT NULL,
    borrar int (2) NOT NULL,
    PRIMARY KEY(ficha)
);

CREATE TABLE nivel(
    id_nivel INT AUTO_INCREMENT NOT NULL,
    n_nivel varchar (30) NOT NULL,
    PRIMARY KEY(id_nivel)
);
CREATE table pro_nivel(
    ficha int NOT NULL,
    id_nivel int NOT NULL,
    PRIMARY KEY(ficha, id_nivel)
);

-- creacion de la estructura de instructores
CREATE TABLE instructores(
    documento int (15) NOT NULL,
    n_instructor varchar (50) NOT NULL,
    borrar int(2) NOT NULL,
    PRIMARY KEY(documento)
);

-- creando la relacion entre los instructores y los programas
create TABLE prog_inst(
    ficha int(15) NOT NULL,
    documento int(15) NOT NULL,
    PRIMARY KEY(ficha, documento)
);
-- creacion de la relacion del programa y de los instructores
ALTER TABLE prog_inst
    ADD CONSTRAINT prog_inst FOREIGN KEY (`documento`) 
    REFERENCES instructores (`documento`) ON DELETE CASCADE ON UPDATE CASCADE,   
    ADD CONSTRAINT prog_inst1 FOREIGN KEY (ficha) 
    REFERENCES programas (ficha) ON DELETE CASCADE ON UPDATE CASCADE;

-- creacion de la tabla de prestamo de ambientes

CREATE TABLE prestamo_ambientes(
    fecha_registro timestamp NOT NULL,
    jornada VARCHAR (50) NOT NULL,
    id_sede int NOT NULL,
    id_bloque int NOT NULL,
    id_piso int NOT NULL,
    id_ambiente int NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    ficha int NOT NULL,
    lunes int(2) NOT NULL,
    martes int(2) not NULL,
    miercoles int(2) NOT NULL,
    jueves  int(2) NOT NULL,
    viernes int(2) NOT NULL,
    sabado int(2) NOT NULL,
    domingo int(2) NOT NULL
);

-- creacion de la relacion de la tabla prestamo_ambientes con la tabla sede
ALTER TABLE prestamo_ambientes
    ADD CONSTRAINT prestamo_1 FOREIGN KEY (id_sede)
    REFERENCES sede (id_sede) ON DELETE CASCADE ON UPDATE CASCADE,
    -- creacion de la relacion de la tabla prestamo_ambientes con la tabla bloque
    ADD CONSTRAINT prestamo_2 FOREIGN KEY (id_bloque) 
    REFERENCES bloque (id_bloque) ON DELETE CASCADE ON UPDATE CASCADE,
-- creacion de la relacion de la tabla prestamo_ambientes con la tabla piso
    ADD CONSTRAINT prestamo_3 FOREIGN KEY (id_piso) 
    REFERENCES piso (id_piso) ON DELETE CASCADE ON UPDATE CASCADE,
-- creacion de la relacion de la tabla prestamo_ambientes con la tabla ambiente
    ADD CONSTRAINT prestamo_4 FOREIGN KEY (id_ambiente) 
    REFERENCES ambiente (id_ambiente) ON DELETE CASCADE ON UPDATE CASCADE,
    -- creacion de la relacion de la tabla prestamo_ambientes con la tabla programa
    ADD CONSTRAINT prestamo_5 FOREIGN KEY (ficha) 
    REFERENCES programas (ficha) ON DELETE CASCADE ON UPDATE CASCADE;


    DELIMITER //
CREATE PROCEDURE disponibilidad2 (IN fecha DATE, IN fecha_f DATE, IN hi TIME, IN hf TIME,IN a INT, IN sede varchar(30),IN bloque int(10), IN piso int(10), IN l int(2), IN ma int(2), IN mi int(2), IN j int(2), IN v int(2), IN s int(2), IN d int(2))
	BEGIN
    SELECT * FROM prestamo_ambientes WHERE (((((
        (
            
            fecha BETWEEN fecha_inicio AND fecha_fin OR
            fecha_f BETWEEN fecha_inicio AND fecha_fin OR
            fecha_inicio BETWEEN fecha AND fecha_f)
        AND(
            hi BETWEEN hora_inicio AND hora_fin OR
            hf BETWEEN hora_inicio AND hora_fin OR
            hora_ingreso BETWEEN hi AND hf)
        )
        AND sede=id_sede)
        AND bloque = id_bloque)
        AND piso= id_piso)
        AND a=id_ambiente)
        AND (l= lunes
        AND ma=martes
        AND mi=miercoles
        AND j=jueves
        AND v=viernes
        AND s=domingo
        AND d=domingo);
        END //
DELIMITER ;




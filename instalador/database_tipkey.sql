
DROP TABLE IF EXISTS ambientes;
CREATE TABLE ambientes(
    `no` INT(20) NOT NULL AUTO_INCREMENT,
    cede VARCHAR(20)NOT NULL,
    nom_aula VARCHAR(20) NOT NULL,
    PRIMARY KEY (`no`)
);

DROP TABLE IF EXISTS programas;
CREATE TABLE programas(
    ficha int(15) NOT NULL,
    nom_programa VARCHAR(50) NOT NULL,
   
    PRIMARY KEY(ficha)
);

DROP TABLE IF EXISTS instructores;
CREATE TABLE instructores (
    No_documento int(15) NOT NULL,
    nom_instructor varchar (30)NOT NULL,
    PRIMARY KEY (No_documento)
);


CREATE TABLE prog_inst(
    ficha int(15) NOT NULL,
    No_documento int(15) NOT NULL,
    PRIMARY KEY (ficha, No_documento)
);

DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
    id INT(11) NOT NULL AUTO_INCREMENT,
    fecha TIMESTAMP NOT NULL,
    clave VARCHAR(200) NOT NULL,
    correo VARCHAR(30) NOT NULL,
    nombre_usuario VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
);


DROP TABLE IF EXISTS prestamo_ambientes;
CREATE TABLE prestamo_ambientes(
    fecha_registro timestamp NOT NULL,
    No_documento int (15) NOT NULL,
    hora_ingreso TIME NOT NULL,
    hora_salida TIME  NOT NULL,
    observaciones varchar (100),
    `no`INT (20) NOT NULL,
    id int(11) DEFAULT NULL,
    fecha_prestamo date NOT NULL,
    fecha_devolucion date NOT NULL,
    PRIMARY KEY (fecha_registro)
);

DROP TABLE IF EXISTS re_drop;
CREATE TABLE re_drop (
    id int(11) NOT NULL AUTO_INCREMENT,
    descripcion varchar(200) NOT NULL,
    fecha_registro datetime NOT NULL,
    PRIMARY KEY (id)       
);

DROP TABLE IF EXISTS informe;
CREATE TABLE informe
(
indice VARCHAR(50) NULL,
sub_indice VARCHAR(50) NULL,
li VARCHAR(90) NULL,
li2 VARCHAR(90) NULL,
li3 VARCHAR(90) NULL,
li4 VARCHAR(90) NULL,
text VARCHAR(1000) NULL,
text2 VARCHAR(1000) NULL,
text3 VARCHAR(1000) NULL,
text4 VARCHAR(1000) NULL,
text5 VARCHAR(1000) NULL,
text6 VARCHAR(1000) NULL
);


INSERT informe(indice, text, li, li2, li3, li4, text3, text4, text5, text6) VALUES ('PUESTA EN MARCHA', 'Para la óptima instalación del sistema de información usted deberá cumplir con los siguientes requisitos para su óptimo funcionamiento:', '•   Conexión a internet  3G o 4G.','•    Sistema operativo Windows 7 o superior.', '•    Navegador Google Chrome, Firefox, Opera o Safari.', '•   Equipo de 4 gbs de RAM y un Intel core 2 duo o un AMD Athlon.', 'Este sistema de información fue hecho con los lenguajes HTML5, CSS3, JAVASCRIPT, PHP 7.4.12 y como gestor de bases de datos MYSQL en su versión MARIADB.', 'El correo electrónico para el soporte del sistema de información es: davidsanchezblanco22@gmail.com.', 'El personal idóneo para la instalación de este software debe tener conocimientos en programación , para la digitación de datos en la web, debe contar con titulación de programas avanzados técnico o tecnologo, solo deberá tener a la mano el manual de usuario para la instalación y la información a ingresar para la posterior instalación del sistema.', 'Se aclara que este sistema de información no genera gran impacto ambiental ya que se encuentra alojado en un servidor por el cual la unica afectación que tendria seri alguna falla del servidor que se encuentra en uso el cual contiene el aplicativo.');

INSERT informe(indice, text, text2, text3, text4) VALUES ('CONFIDENCIALIDAD, INTEGRIDAD Y DISPONIBILIDAD', 'SEGURIDAD: nuestro sistema de información cuenta con un sistema de seguridad de inicio de sesión con correo y contraseña, las cuales se guardaran en la base de datos y se encriptaran de tal manera que será complicado para un tercero acceder a la información desde fuera del apartado del administrador.', 'El sistema de información cuenta con un sistema de recuperación de contraseña para el administrador que le permitirá modificar dicha contraseña en caso de pérdida de la misma.', 'Por otro lado, nuestro sistema de información no le pedirá al usuario pagos mediante la aplicación, tampoco se dejara ver la información de las empresas sin antes haberse registrado como usuario, esto para garantizar la seguridad de las empresas y así mismo poder confirmar, en caso de extorción u otro delito derivado, que usuario/os probablemente hicieron o cometieron dicha falta.', 'Por último, cabe aclarar que nuestro software no le pedirá al usuario datos muy personales como lo son: Número de tarjeta de crédito, pagos a ciertos convenios, su contraseña de otras redes sociales, dirección de su lugar de estadía ni nada que tenga que ver con su ubicación o datos bancarios.');

INSERT informe(indice, text, text2, text3, text4) VALUES ('COPIAS DE SEGURIDAD Y MIGRACION.','El sistema de información cuenta con un sistema de copia de seguridad de la información semanal el cual le permitirá al administrador tener todos los datos a salvo previniendo una posible falla en el sistema, además de ello el sistema cuenta con una gran adaptabilidad, eficiencia de ejecución y manejo intuitivo para su instalación y migración de información.', 'El proceso de instalación y migración tiene soporte para hacerse tanto desde computadoras hasta dispositivos móviles.', 'Para poder utilizar el sistema de información deberá tener acceso a internet y podrá ver la información allí alojada siempre y cuando ya se haya hecho la previa instalación e inserción de datos por parte del administrador, debido a que, este siempre iniciara con la vista de los usuarios donde tienen varias funciones, que permiten ver la información de todas las empresas, productos y demás apartados públicos.', 'De la parte del administrador podrá ingresar con correo y contraseña al sistema de información, en caso de pérdida de la contraseña se le permitirá cambiarla de manera rápida y eficiente.');

INSERT informe(indice, text, text2, text3, text4) VALUES ('ACCESIBILIDAD, USABILIDAD Y LICENCIAMIENTO', 'El sistema cuenta con un fácil y seguro sistema de acceso para el administrador, debido a que esta es la primera versión del software, el mismo solo tendrá una cuenta de administrador y los usuarios serán todos aquellos que visiten la página, optando así por un modelo de no tener usuarios registrados, por lo cual el sistema será aún más liviano.', 'En el apartado de la usabilidad tenemos que los usuarios podrán interactuar con los botones, podrán ver mucha de la información que es publica, además de poder contactar y ver disponibilidad de productos dependiendo de la empresa.', 'El sistema cuenta con una paleta de colores simple, de tal manera que a pesar de tener poco colores, todos combinan entre si dando armonía al diseño.', 'El código del sistema de información cuenta con código documentado, de manera que cualquier otro programador pueda entender el que, el cómo y el porqué de las diferentes funciones para así poder dar mantenimiento al sistema.');

INSERT informe(indice, text, text2, text3) VALUES ('INFORME ADMINISTRATIVO', 'En nuestro sistema de información podrá encontrar alojado el informe administrativo, con el fin de buscar apartado de interés para las personas, lo cual puede ser los términos y condiciones o demás información importante para el correcto uso del software.', 'Lastimosamente, el software no es perfecto, aún tiene algunas cosas que se pueden mejorar, puesto que esta es la primera versión del mismo, por lo cual hay procesos que no están del todo optimizados, sin embargo, este software se ha hecho lo más eficiente posible para solucionar las problemáticas planteadas por el cliente.','Durante algún tiempo se tuvo inconvenientes con la parte visual, algunas funcionalidades de parte del backend y otras falencias en el código o la lógica aplicada al sistema. Esto ya no ha de ser un problema tan grande, debido a que gracias al tiempo estipulado para entregar el proyecto, se ha ido mejorando poco a poco y reparando algunas falencias encontradas en el camino.
En nuestras fortalezas este sistema cuenta conincriptacion de contraseña el cual proteje la infromación del usuario en este sistema podemos hacer una copia de seguridad de la infromacion que se tiene almacenada en la base de datos');

ALTER TABLE prestamo_ambientes
    ADD CONSTRAINT prestamo_1 FOREIGN KEY (id)
    REFERENCES usuario (id) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT prestamo_2 FOREIGN KEY (`no`) 
    REFERENCES ambientes (`no`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT prestamo_3 FOREIGN KEY (`No_documento`) 
    REFERENCES instructores (`No_documento`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE prog_inst
    ADD CONSTRAINT instructores_1 FOREIGN KEY (`No_documento`) 
    REFERENCES instructores (`No_documento`) ON DELETE CASCADE ON UPDATE CASCADE,   
    ADD CONSTRAINT programas_1 FOREIGN KEY (ficha) 
    REFERENCES programas (ficha) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER //
CREATE PROCEDURE dd (IN fecha DATE, IN fecha_f DATE, IN hi TIME, IN hf TIME,IN a INT)
	BEGIN
    SELECT * FROM prestamo_ambientes WHERE (
        (
            
            fecha BETWEEN fecha_prestamo AND fecha_devolucion OR
            fecha_f BETWEEN fecha_prestamo AND fecha_devolucion OR
            fecha_prestamo BETWEEN fecha AND fecha_f)
        AND(
            hi BETWEEN hora_ingreso AND hora_salida OR
            hf BETWEEN hora_ingreso AND hora_salida OR
            hora_ingreso BETWEEN hi AND hf)
        ) AND
        a=`no`;
        END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE disponibilidad(IN fecha DATE, IN hora TIME)
	BEGIN
    SELECT * FROM prestamo_ambientes WHERE 
    fecha BETWEEN fecha_prestamo AND fecha_devolucion AND
    hora BETWEEN hora_ingreso AND hora_salida;
    END //
DELIMITER ;







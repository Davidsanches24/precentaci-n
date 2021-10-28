-- Copia de seguridad
-- Fecha de creació 2021-10-27 04:56:23
-- IP donde se solicita

SET FOREIGN_KEY_CHECKS=0;truncate table ambientes;
truncate table instructores;
truncate table programas;
truncate table usuario;
truncate table prog_inst;
truncate table prestamo_ambientes;
Insert INTO ambientes(no, cede, nom_aula) VALUES('1', 'modelo', 'sistemas');

Insert INTO instructores(No_documento, nom_instructor) VALUES('100029', 'sena');

Insert INTO programas(ficha, nom_programa) VALUES('3323', 'sistemas');

Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('1', '2021-10-26 21:18:33', '12345', 'correo', 'rrott');

Insert INTO prog_inst(ficha, No_documento) VALUES('3323', '100029');

Insert INTO prestamo_ambientes(fecha_registro, No_documento, hora_ingreso, hora_salida, observaciones, no, id, fecha_prestamo, fecha_devolucion) VALUES('2021-10-26 21:19:17', '100029', '07:11:38', '21:11:38', 'ninguna', '1', '1', '2021-10-27', '2021-10-28');

SET FOREIGN_KEY_CHECKS=1;
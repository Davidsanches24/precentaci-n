-- Copia de seguridad
-- Fecha de creació 2021-10-27 23:06:58
-- IP donde se solicita

SET FOREIGN_KEY_CHECKS=0;truncate table ambientes;
truncate table instructores;
truncate table programas;
truncate table usuario;
truncate table prog_inst;
truncate table prestamo_ambientes;



Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('1', '2021-10-27 21:07:52', '12345', 'davidsaqnchezblanco22@gmail.co', 'david');
Insert INTO usuario(id, fecha, clave, correo, nombre_usuario) VALUES('2', '2021-10-27 21:08:45', '12345', 'davidsanchezblanco22@gmail.com', 'david');



SET FOREIGN_KEY_CHECKS=1;
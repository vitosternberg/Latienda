<?php


/*interting*/
INSERT INTO `comprador`(`id_rut`, `nombre`, `apellido`, `id_direccion`, `id_metPago`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

INSERT INTO `callejero`(`id_comuna`, `id_provincia`, `id_pais`) VALUES ('[value-1]','[value-2]','[value-3]')

INSERT INTO `direccion`(`id_direccion`, `correoElec`, `password`, `calle`, `numero`, `dpto`, `id_comuna`, `id_region`, `id_pais`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')



/*deleting*/
DELETE FROM `direccion` WHERE 0
DELETE FROM `comprador` WHERE 0
DELETE FROM `callejero` WHERE 0

/*updating*/
UPDATE `callejero` SET `id_comuna`='[value-1]',`id_provincia`='[value-2]',`id_pais`='[value-3]' WHERE 1
UPDATE `comprador` SET `nombre`='[value-2]',`apellido`='[value-3]' WHERE 1
UPDATE `direccion` SET `id_direccion`='[value-1]',`correoElec`='[value-2]',`password`='[value-3]',`calle`='[value-4]',`numero`='[value-5]',`dpto`='[value-6]',`id_comuna`='[value-7]',`id_region`='[value-8]',`id_pais`='[value-9]' WHERE 1


INSERT INTO `registro` (`id_registro`, `log_reg`, `user`) VALUES (NULL, '2021-09-22 19:32:33', 'erwin');

INSERT INTO `bitacora` (`id_registro`, `id_usuario`, `fecha`, `asunto`, `descripcion`, `tipo_cambio`, `aut_cambio`) VALUES 
(NULL, 'primagen@gmail.com', '2021-09-25 15:25:41.000000', 'cambio ram gestor BD', 'cambio normar. se aplica en la maquina del gestor de la base de datos. interrupción del servicio de backup durante 1 hora. se aplicará en horario no productivo', 'normal', 'Felipe Morales');

?>
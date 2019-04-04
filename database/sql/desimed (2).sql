-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'cliente'
-- 
-- ---

DROP TABLE IF EXISTS `cliente`;
		
CREATE TABLE `cliente` (
  `idcliente` INTEGER(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `tipo_cliente` INTEGER(2) NULL DEFAULT NULL,
  `idempleado` INTEGER(10) NULL DEFAULT NULL,
  `registro` VARCHAR(30) NULL DEFAULT NULL,
  `fecha_registro` DATE NULL DEFAULT NULL,
  `nombre_apellido` VARCHAR(100) NULL DEFAULT NULL,
  `documento` VARCHAR(30) NULL DEFAULT NULL,
  `sexo` VARCHAR(20) NULL DEFAULT NULL,
  `fecha_nacimiento` DATE NULL DEFAULT NULL,
  `direccion` VARCHAR(20) NULL DEFAULT NULL,
  `telefono` VARCHAR(15) NULL DEFAULT NULL,
  `celular` VARCHAR(15) NULL DEFAULT NULL,
  `email` VARCHAR(200) NULL DEFAULT NULL,
  `dispacidad` VARCHAR(250) NULL DEFAULT NULL,
  `extracto` INTEGER(2) NULL DEFAULT NULL,
  `nombre_beneficiario` VARCHAR(100) NULL DEFAULT NULL,
  `sexo_beneficiario` VARCHAR(50) NULL DEFAULT NULL,
  `documento_beneficiario` VARCHAR(20) NULL DEFAULT NULL,
  `parentesco_beneficiario` VARCHAR(30) NULL DEFAULT NULL,
  `discapacidad_beneficiario` VARCHAR(10) NULL DEFAULT NULL,
  `discapacidad_desc_beneficiario` VARCHAR(250) NULL DEFAULT NULL,
  `nombre_beneficiario2` VARCHAR(200) NULL DEFAULT NULL,
  `sexo_beneficiario2` VARCHAR(10) NULL DEFAULT NULL,
  `documento_beneficiario2` VARCHAR(30) NULL DEFAULT NULL,
  `parentesco_beneficiario2` VARCHAR(60) NULL DEFAULT NULL,
  `discapacidad_beneficiario2` VARCHAR(10) NULL DEFAULT NULL,
  `discapaciadad_desc_beneficiario2` VARCHAR(250) NULL DEFAULT NULL,
  `nombre_beneficiario3` VARCHAR(100) NULL DEFAULT NULL,
  `sexo_beneficiario3` VARCHAR(50) NULL DEFAULT NULL,
  `documento_beneficiario3` VARCHAR(50) NULL DEFAULT NULL,
  `parentesco_beneficiario3` VARCHAR(50) NULL DEFAULT NULL,
  `discapacidad_beneficiario3` VARCHAR(250) NULL DEFAULT NULL,
  `discapacidad_desc_beneficiario3` VARCHAR(300) NULL DEFAULT NULL,
  `nombre_beneficiario4` VARCHAR(250) NULL DEFAULT NULL,
  `sexo_beneficiario4` VARCHAR(50) NULL DEFAULT NULL,
  `documento_beneficiario4` VARCHAR(50) NULL DEFAULT NULL,
  `parentesco_beneficiario4` VARCHAR(50) NULL DEFAULT NULL,
  `discapacidad_beneficiario4` VARCHAR(300) NULL DEFAULT NULL,
  `discapacidad_desc_beneficiario4` VARCHAR(300) NULL DEFAULT NULL,
  `nombre_afiliacion` VARCHAR(200) NULL DEFAULT NULL,
  `sexo_afiliacion` VARCHAR(10) NULL DEFAULT NULL,
  `documento_afiliacion` VARCHAR(30) NULL DEFAULT NULL,
  `parentesco_afiliacion` VARCHAR(60) NULL DEFAULT NULL,
  `discapacidad_afiliacion` VARCHAR(10) NULL DEFAULT NULL,
  `discapaciadad_desc_afiliacion` VARCHAR(250) NULL DEFAULT NULL,
  `nombre_afiliacion2` VARCHAR(200) NULL DEFAULT NULL,
  `sexo_afiliacion2` VARCHAR(10) NULL DEFAULT NULL,
  `documento_afiliacion2` VARCHAR(30) NULL DEFAULT NULL,
  `parentesco_afiliacion2` VARCHAR(60) NULL DEFAULT NULL,
  `discapacidad_afiliacion2` VARCHAR(10) NULL DEFAULT NULL,
  `discapaciadad_desc_afiliacion2` VARCHAR(250) NULL DEFAULT NULL,
  `diabetes` VARCHAR(2) NULL DEFAULT NULL,
  `hipertension` VARCHAR(2) NULL DEFAULT NULL,
  `enf_cardiacas` VARCHAR(2) NULL DEFAULT NULL,
  `estres` VARCHAR(2) NULL DEFAULT NULL,
  `osteoporosis` VARCHAR(2) NULL DEFAULT NULL,
  `artitis` VARCHAR(2) NULL DEFAULT NULL,
  `cancer` VARCHAR(2) NULL DEFAULT NULL,
  `alergias` VARCHAR(2) NULL DEFAULT NULL,
  `migrana` VARCHAR(2) NULL DEFAULT NULL,
  `ets` VARCHAR(2) NULL DEFAULT NULL,
  `anemia` VARCHAR(2) NULL DEFAULT NULL,
  `pulmonia` VARCHAR(2) NULL DEFAULT NULL,
  `otras_cual` VARCHAR(250) NULL DEFAULT NULL,
  `estado` INTEGER(2) NULL DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
);

-- ---
-- Table 'proveedor'
-- 
-- ---

DROP TABLE IF EXISTS `proveedor`;
		
CREATE TABLE `proveedor` (
  `idproveedor` INTEGER(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `razon_social` VARCHAR(200) NULL DEFAULT NULL,
  `etiqueta_contacto` VARCHAR(250) NULL DEFAULT NULL,
  `nombre_contacto` VARCHAR(100) NULL DEFAULT NULL,
  `telefono_contacto` VARCHAR(50) NULL DEFAULT NULL,
  `direccion_contacto` VARCHAR(100) NULL DEFAULT NULL,
  `ciudad_contacto` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`idproveedor`)
);

-- ---
-- Table 'producto'
-- 
-- ---

DROP TABLE IF EXISTS `producto`;
		
CREATE TABLE `producto` (
  `idproducto` INTEGER(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `idproveedor` INTEGER(10) NULL DEFAULT NULL,
  `idlaboratorio` INTEGER(10) NULL DEFAULT NULL,
  `idposicion` INTEGER NULL DEFAULT NULL,
  `etiqueta_producto` VARCHAR(250) NULL DEFAULT NULL,
  `descripcion` VARCHAR(300) NULL DEFAULT NULL,
  `valor` VARCHAR(30) NULL DEFAULT NULL,
  `descuento` INTEGER(10) NULL DEFAULT NULL,
  `iva` INTEGER(10) NULL DEFAULT NULL,
  `estado` INTEGER(2) NULL DEFAULT NULL,
  PRIMARY KEY (`idproducto`)
);

-- ---
-- Table 'laboratorio'
-- 
-- ---

DROP TABLE IF EXISTS `laboratorio`;
		
CREATE TABLE `laboratorio` (
  `idlaboratorio` INTEGER(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `etiqueta_laboratorio` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`idlaboratorio`)
);

-- ---
-- Table 'lote'
-- 
-- ---

DROP TABLE IF EXISTS `lote`;
		
CREATE TABLE `lote` (
  `codigo_lote` INTEGER(10) NULL DEFAULT NULL,
  `idproducto` INTEGER(10) NULL DEFAULT NULL,
  `cantidad` INTEGER(10) NULL DEFAULT NULL,
  `fecha_vencimiento` DATE NULL DEFAULT NULL
);

-- ---
-- Table 'factura'
-- 
-- ---

DROP TABLE IF EXISTS `factura`;
		
CREATE TABLE `factura` (
  `idfactura` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `idcliente` INTEGER(10) NULL DEFAULT NULL,
  `idusuario` INTEGER(10) NULL DEFAULT NULL,
  `fecha_registro` DATETIME NULL DEFAULT NULL,
  `valor_neto` VARCHAR(30) NULL DEFAULT NULL,
  PRIMARY KEY (`idfactura`)
);

-- ---
-- Table 'empleado'
-- 
-- ---

DROP TABLE IF EXISTS `empleado`;
		
CREATE TABLE `empleado` (
  `idempleado` INTEGER(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `tipo_empleado` VARCHAR(50) NULL DEFAULT NULL,
  `rol_empleado` VARCHAR(300) NULL DEFAULT NULL,
  `descripcion_empleado` VARCHAR(500) NULL DEFAULT NULL,
  `nombre_empleado` VARCHAR(200) NULL DEFAULT NULL,
  `documento_empleado` VARCHAR(30) NULL DEFAULT NULL,
  `direccion_empleado` VARCHAR(200) NULL DEFAULT NULL,
  `telefono_empleado` VARCHAR(30) NULL DEFAULT NULL,
  `sexo_empleado` VARCHAR(20) NULL DEFAULT NULL,
  `fecha_nacimiento_empleado` DATE NULL DEFAULT NULL,
  `email_empleado` VARCHAR(200) NULL DEFAULT NULL,
  `idsesion_empleado` INTEGER(10) NULL DEFAULT NULL,
  `estado_empleado` INTEGER(2) NULL DEFAULT NULL,
  PRIMARY KEY (`idempleado`)
);

-- ---
-- Table 'sesion'
-- 
-- ---

DROP TABLE IF EXISTS `sesion`;
		
CREATE TABLE `sesion` (
  `idsesion` INTEGER(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `usuario` VARCHAR(50) NULL DEFAULT NULL,
  `clave` VARCHAR(50) NULL DEFAULT NULL,
  `estado` INTEGER(2) NULL DEFAULT NULL,
  PRIMARY KEY (`idsesion`)
);

-- ---
-- Table 'item_factura'
-- 
-- ---

DROP TABLE IF EXISTS `item_factura`;
		
CREATE TABLE `item_factura` (
  `iditem` INTEGER(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `idfactura` INTEGER(10) NULL DEFAULT NULL,
  `idproducto` INTEGER(10) NULL DEFAULT NULL,
  `cantidad_factura` VARCHAR(30) NULL DEFAULT NULL,
  PRIMARY KEY (`iditem`)
);

-- ---
-- Table 'posicion'
-- 
-- ---

DROP TABLE IF EXISTS `posicion`;
		
CREATE TABLE `posicion` (
  `idposicion` INT(10) NULL AUTO_INCREMENT DEFAULT NULL,
  `etiqueta_posicion` VARCHAR(300) NULL DEFAULT NULL,
  PRIMARY KEY (`idposicion`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `cliente` ADD FOREIGN KEY (idempleado) REFERENCES `empleado` (`idempleado`);
ALTER TABLE `producto` ADD FOREIGN KEY (idproveedor) REFERENCES `proveedor` (`idproveedor`);
ALTER TABLE `producto` ADD FOREIGN KEY (idlaboratorio) REFERENCES `laboratorio` (`idlaboratorio`);
ALTER TABLE `producto` ADD FOREIGN KEY (idposicion) REFERENCES `posicion` (`idposicion`);
ALTER TABLE `lote` ADD FOREIGN KEY (idproducto) REFERENCES `producto` (`idproducto`);
ALTER TABLE `factura` ADD FOREIGN KEY (idcliente) REFERENCES `cliente` (`idcliente`);
ALTER TABLE `factura` ADD FOREIGN KEY (idusuario) REFERENCES `empleado` (`idempleado`);
ALTER TABLE `empleado` ADD FOREIGN KEY (idsesion_empleado) REFERENCES `sesion` (`idsesion`);
ALTER TABLE `item_factura` ADD FOREIGN KEY (idfactura) REFERENCES `factura` (`idfactura`);
ALTER TABLE `item_factura` ADD FOREIGN KEY (idproducto) REFERENCES `producto` (`idproducto`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `cliente` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `proveedor` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `producto` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `laboratorio` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `lote` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `factura` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `empleado` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `sesion` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `item_factura` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `posicion` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `cliente` (`idcliente`,`tipo_cliente`,`idempleado`,`registro`,`fecha_registro`,`nombre_apellido`,`documento`,`sexo`,`fecha_nacimiento`,`direccion`,`telefono`,`celular`,`email`,`dispacidad`,`extracto`,`nombre_beneficiario`,`sexo_beneficiario`,`documento_beneficiario`,`parentesco_beneficiario`,`discapacidad_beneficiario`,`discapacidad_desc_beneficiario`,`nombre_beneficiario2`,`sexo_beneficiario2`,`documento_beneficiario2`,`parentesco_beneficiario2`,`discapacidad_beneficiario2`,`discapaciadad_desc_beneficiario2`,`nombre_beneficiario3`,`sexo_beneficiario3`,`documento_beneficiario3`,`parentesco_beneficiario3`,`discapacidad_beneficiario3`,`discapacidad_desc_beneficiario3`,`nombre_beneficiario4`,`sexo_beneficiario4`,`documento_beneficiario4`,`parentesco_beneficiario4`,`discapacidad_beneficiario4`,`discapacidad_desc_beneficiario4`,`nombre_afiliacion`,`sexo_afiliacion`,`documento_afiliacion`,`parentesco_afiliacion`,`discapacidad_afiliacion`,`discapaciadad_desc_afiliacion`,`nombre_afiliacion2`,`sexo_afiliacion2`,`documento_afiliacion2`,`parentesco_afiliacion2`,`discapacidad_afiliacion2`,`discapaciadad_desc_afiliacion2`,`diabetes`,`hipertension`,`enf_cardiacas`,`estres`,`osteoporosis`,`artitis`,`cancer`,`alergias`,`migrana`,`ets`,`anemia`,`pulmonia`,`otras_cual`,`estado`) VALUES
-- ('','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','');
-- INSERT INTO `proveedor` (`idproveedor`,`razon_social`,`etiqueta_contacto`,`nombre_contacto`,`telefono_contacto`,`direccion_contacto`,`ciudad_contacto`) VALUES
-- ('','','','','','','');
-- INSERT INTO `producto` (`idproducto`,`idproveedor`,`idlaboratorio`,`idposicion`,`etiqueta_producto`,`descripcion`,`valor`,`descuento`,`iva`,`estado`) VALUES
-- ('','','','','','','','','','');
-- INSERT INTO `laboratorio` (`idlaboratorio`,`etiqueta_laboratorio`) VALUES
-- ('','');
-- INSERT INTO `lote` (`codigo_lote`,`idproducto`,`cantidad`,`fecha_vencimiento`) VALUES
-- ('','','','');
-- INSERT INTO `factura` (`idfactura`,`idcliente`,`idusuario`,`fecha_registro`,`valor_neto`) VALUES
-- ('','','','','');
-- INSERT INTO `empleado` (`idempleado`,`tipo_empleado`,`rol_empleado`,`descripcion_empleado`,`nombre_empleado`,`documento_empleado`,`direccion_empleado`,`telefono_empleado`,`sexo_empleado`,`fecha_nacimiento_empleado`,`email_empleado`,`idsesion_empleado`,`estado_empleado`) VALUES
-- ('','','','','','','','','','','','','');
-- INSERT INTO `sesion` (`idsesion`,`usuario`,`clave`,`estado`) VALUES
-- ('','','','');
-- INSERT INTO `item_factura` (`iditem`,`idfactura`,`idproducto`,`cantidad_factura`) VALUES
-- ('','','','');
-- INSERT INTO `posicion` (`idposicion`,`etiqueta_posicion`) VALUES
-- ('','');
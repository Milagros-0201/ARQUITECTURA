DROP DATABASE IF EXISTS db_fuef;

CREATE DATABASE db_fuef;

USE db_fuef;

CREATE TABLE IF NOT EXISTS personas (
  id_persona INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  apellido_pat VARCHAR(45) NOT NULL,
  apellido_mat VARCHAR(45) NOT NULL,
  direccion VARCHAR(45) NOT NULL,
  sexo VARCHAR(45) NOT NULL,
  fecha_nac VARCHAR(45) NOT NULL,
  tipo_persona INT NOT NULL,
  telefono VARCHAR(45) NOT NULL,
  dni VARCHAR(45) NOT NULL,
  nacionalidad VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_persona))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table padres
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS padres (
  id_padre INT NOT NULL AUTO_INCREMENT,
  id_persona INT NOT NULL,
  tipo_padre INT NOT NULL,
  PRIMARY KEY (id_padre, id_persona)
)
ENGINE = InnoDB;

alter table padres ADD 
  CONSTRAINT fk_padres_personas
    FOREIGN KEY (id_persona)
    REFERENCES personas (id_persona)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


-- -----------------------------------------------------
-- Table operaciones
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS operaciones (
  id_operacion INT NOT NULL AUTO_INCREMENT,
  id_persona INT NOT NULL,
  nombre_op VARCHAR(45) NOT NULL,
  fecha_op DATE NOT NULL,
  PRIMARY KEY (id_operacion, id_persona)
  )
ENGINE = InnoDB;


alter table operaciones ADD 
  CONSTRAINT fk_operaciones_personas1
    FOREIGN KEY (id_persona)
    REFERENCES personas (id_persona)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


-- -----------------------------------------------------
-- Table enfermedad_cronicas
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS enfermedad_cronicas (
  id_enfermedad_cro INT NOT NULL AUTO_INCREMENT,
  id_persona INT NOT NULL,
  nombre_cro VARCHAR(45) NOT NULL,
  fecha_cro DATE NOT NULL,
  PRIMARY KEY (id_enfermedad_cro, id_persona)
  )
ENGINE = InnoDB;

alter table enfermedad_cronicas ADD 
  CONSTRAINT fk_enfermedad_cronicas_personas1
    FOREIGN KEY (id_persona)
    REFERENCES personas (id_persona)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;



-- -----------------------------------------------------
-- Table habilidades_especiales
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS habilidades_especiales (
  id_habilidades_especial INT NOT NULL AUTO_INCREMENT,
  id_persona INT NOT NULL,
  nombre_ha VARCHAR(45) NOT NULL,
  fecha_ha DATE NOT NULL,
  PRIMARY KEY (id_habilidades_especial, id_persona)
  )
ENGINE = InnoDB;


alter table habilidades_especiales ADD 
  CONSTRAINT fk_habilidades_especiales_personas1
    FOREIGN KEY (id_persona)
    REFERENCES personas (id_persona)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


-- -----------------------------------------------------
-- Table instituciones
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS instituciones (
  id_institucion INT NOT NULL AUTO_INCREMENT,
  nombre_ins VARCHAR(45) NOT NULL,
  cod_modular VARCHAR(45) NOT NULL,
  tipo_ins INT NOT NULL,
  nivel INT NOT NULL,
  region VARCHAR(45) NOT NULL,
  provincia VARCHAR(45) NOT NULL,
  distrito VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_institucion))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table detalle_ingreso_ins
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS detalle_ingreso_ins (
  id_dtingreso INT NOT NULL AUTO_INCREMENT,
  id_institucion INT NOT NULL,
  anio DATE NOT NULL,
  grado VARCHAR(45) NOT NULL,
  seccion VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_dtingreso, id_institucion)
  )
ENGINE = InnoDB;


alter table detalle_ingreso_ins ADD 
  CONSTRAINT fk_detalle_ingreso_ins_instituciones1
    FOREIGN KEY (id_institucion)
    REFERENCES instituciones (id_institucion)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


-- -----------------------------------------------------
-- Table persona_ingresos
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS persona_ingresos (
  id_persona_ing INT NOT NULL AUTO_INCREMENT,
  id_persona INT NOT NULL,
  id_dtingreso INT NOT NULL,
  PRIMARY KEY (id_persona_ing, id_persona, id_dtingreso)
  )
ENGINE = InnoDB;


alter table persona_ingresos ADD 
  CONSTRAINT fk_persona_ingresos_personas1
    FOREIGN KEY (id_persona)
    REFERENCES personas (id_persona)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

alter table persona_ingresos ADD 
  CONSTRAINT fk_persona_ingresos_detalle_ingreso_ins1
    FOREIGN KEY (id_dtingreso)
    REFERENCES detalle_ingreso_ins (id_dtingreso)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;



-- -----------------------------------------------------
-- Table medida_antro
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS medida_antro (
  id_medida_antro INT NOT NULL AUTO_INCREMENT,
  id_dtingreso INT NOT NULL,
  envergadura VARCHAR(45) NOT NULL,
  talla VARCHAR(45) NOT NULL,
  peso VARCHAR(45) NOT NULL,
  lmc VARCHAR(45) NOT NULL,
  test_snellen VARCHAR(45) NOT NULL,
  man VARCHAR(45) NOT NULL,
  pie1 VARCHAR(45) NOT NULL,
  pie2 VARCHAR(45) NOT NULL,
  pulso VARCHAR(45) NOT NULL,
  capacidad_vital VARCHAR(45) NOT NULL,
  test_flexible VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_medida_antro, id_dtingreso)
  )
ENGINE = InnoDB;


alter table medida_antro ADD 
  CONSTRAINT fk_medida_antro_detalle_ingreso_ins1
    FOREIGN KEY (id_dtingreso)
    REFERENCES detalle_ingreso_ins (id_dtingreso)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;


-- -----------------------------------------------------
-- Table valoracion_psicomotrices
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS valoracion_psicomotrices (
  id_vpsicomotrices INT NOT NULL AUTO_INCREMENT,
  id_dtingreso INT NOT NULL,
  esquema_corporal VARCHAR(45) NOT NULL,
  lateralidad VARCHAR(45) NOT NULL,
  relacion VARCHAR(45) NOT NULL,
  oculo_manual VARCHAR(45) NOT NULL,
  oculo_podal VARCHAR(45) NOT NULL,
  estatico VARCHAR(45) NOT NULL,
  dinamico VARCHAR(45) NOT NULL,
  ritmo VARCHAR(45) NOT NULL,
  otro VARCHAR(45) NOT NULL,
  nla VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_vpsicomotrices, id_dtingreso)
  )
ENGINE = InnoDB;


alter table valoracion_psicomotrices ADD 
  CONSTRAINT fk_valoracion_psicomotrices_detalle_ingreso_ins1
    FOREIGN KEY (id_dtingreso)
    REFERENCES detalle_ingreso_ins (id_dtingreso)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

-- -----------------------------------------------------
-- Table logro_grado
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS logro_grado (
  id_logro_grado INT NOT NULL AUTO_INCREMENT,
  id_dtingreso INT NOT NULL,
  da_dsp_01 VARCHAR(45) NOT NULL,
  da_dsp_02 VARCHAR(45) NOT NULL,
  da_dsp_03 VARCHAR(45) NOT NULL,
  da_dsp_04 VARCHAR(45) NOT NULL,
  da_nla VARCHAR(45) NOT NULL,
  as_dsp_01 VARCHAR(45) NOT NULL,
  as_dsp_02 VARCHAR(45) NOT NULL,
  as_dsp_03 VARCHAR(45) NOT NULL,
  as_dsp_04 VARCHAR(45) NOT NULL,
  as_dsp_05 VARCHAR(45) NOT NULL,
  as_nla VARCHAR(45) NOT NULL,
  ih_dsp_01 VARCHAR(45) NOT NULL,
  ih_dsp_02 VARCHAR(45) NOT NULL,
  ih_dsp_03 VARCHAR(45) NOT NULL,
  ih_nla VARCHAR(45) NOT NULL,
  PRIMARY KEY (id_logro_grado, id_dtingreso)
  )
ENGINE = InnoDB;


alter table logro_grado ADD 
  CONSTRAINT fk_logro_grado_detalle_ingreso_ins1
    FOREIGN KEY (id_dtingreso)
    REFERENCES detalle_ingreso_ins (id_dtingreso)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;

-- -----------------------------------------------------
-- Procedure Table personas
-- -----------------------------------------------------

DELIMITER $$
CREATE PROCEDURE up_registrar_persona(
  IN _nombre              VARCHAR(45),
  IN _apellido_pat        VARCHAR(45),
  IN _apellido_mat        VARCHAR(45),
  IN _direccion           VARCHAR(45),
  IN _sexo                VARCHAR(45),   
  IN _fecha_nac           DATE,
  IN _tipo_persona        INT(11),
  IN _telefono            VARCHAR(45),
  IN _dni                 VARCHAR(45),
  IN _nacionalidad        VARCHAR(45)
)BEGIN
  INSERT INTO personas (nombre, apellido_pat, apellido_mat, direccion, sexo, fecha_nac, tipo_persona, telefono, dni, nacionalidad) 
  VALUES (_nombre, _apellido_pat, _apellido_mat, _direccion, _sexo, _fecha_nac, _tipo_persona, _telefono, _dni, _nacionalidad);
END $$

DELIMITER $$
CREATE  PROCEDURE up_actualizar_persona(
  IN _id_persona          INT(11),
  IN _nombre              VARCHAR(45),
  IN _apellido_pat        VARCHAR(45),
  IN _apellido_mat        VARCHAR(45),
  IN _direccion           VARCHAR(45),
  IN _sexo                VARCHAR(45),   
  IN _fecha_nac           DATE,
  IN _tipo_persona        INT(11),
  IN _telefono            VARCHAR(45),
  IN _dni                 VARCHAR(45),
  IN _nacionalidad        VARCHAR(45)
)  BEGIN

    IF _id_persona IS NOT NULL AND _id_persona != '' THEN 
       IF (SELECT 1 FROM personas WHERE id_persona = _id_persona LIMIT 1)  THEN
            UPDATE personas SET
               nombre        = _nombre,
               apellido_pat  = _apellido_pat,
               apellido_mat  = _apellido_mat,
               direccion     = _direccion,
               sexo          = _sexo,
               fecha_nac     = _fecha_nac,
               tipo_persona  = _tipo_persona
               telefono      = _telefono,
               dni           = _dni,
               nacionalidad  = _nacionalidad               
               WHERE 
               id_persona        = _id_persona;
        ELSE
            signal sqlstate '45000' set message_text = 'La persona que desea actualizar no existe en el sistema!!!';
        END IF;

    ELSE
          signal sqlstate '45000' set message_text = 'Ingrese los datos de manera correcta!!!';
    END IF;
END$$

-- -----------------------------------------------------
-- Procedure Table instituciones 
-- -----------------------------------------------------

DELIMITER $$
CREATE PROCEDURE up_registrar_institucion(
  IN _nombre_ins           VARCHAR(45),
  IN _cod_modular          VARCHAR(45),
  IN _tipo_ins             INT(11),
  IN _nivel                INT(11), 
  IN _region               VARCHAR(45),
  IN _provincia            VARCHAR(45),
  IN _distrito             VARCHAR(11) 
)BEGIN
  INSERT INTO instituciones (nombre_ins, cod_modular, tipo_ins, nivel, region, provincia, distrito) 
  VALUES (_nombre_ins, _cod_modular, _tipo_ins, _nivel, _region, _provincia, _distrito);
END $$



-- -----------------------------------------------------
-- Procedure Table persona_ingresos 
-- -----------------------------------------------------

DELIMITER $$
CREATE PROCEDURE up_registrar_persona_ingreso(
  IN _id_persona           INT(11),
  IN _id_dtingreso         INT(11) 
)BEGIN
  INSERT INTO persona_ingresos (id_persona, id_dtingreso) 
  VALUES (_id_persona, _id_dtingreso);
END $$



-- -----------------------------------------------------
-- Procedure Table detalle_ingreso_ins 
-- -----------------------------------------------------

DELIMITER $$
CREATE PROCEDURE up_registrar_detalle_ingreso_ins(
  IN _id_institucion       INT(11),
  IN _anio                 DATE, 
  IN _grado                VARCHAR(45),
  IN _seccion              VARCHAR(45)
)BEGIN
  INSERT INTO detalle_ingreso_ins (id_institucion, anio, grado, seccion) 
  VALUES (_id_institucion, _anio, _grado, _seccion);
END $$


-- -----------------------------------------------------
-- Procedure Table enfermedad_cronicas 
-- -----------------------------------------------------

DELIMITER $$
CREATE PROCEDURE up_registrar_enfermedad_cronica(
  IN _id_persona           INT(11),
  IN _nombre_cro           VARCHAR(45), 
  IN _fecha_cro            DATE
)BEGIN
  INSERT INTO enfermedad_cronicas (id_persona, nombre_cro, fecha_cro) 
  VALUES (_id_persona, _nombre_cro, _fecha_cro);
END $$



-- -----------------------------------------------------
-- Procedure Table habilidades_especiales 
-- -----------------------------------------------------

DELIMITER $$
CREATE PROCEDURE up_registrar_habilidades_especiale(
  IN _id_persona           INT(11),
  IN _nombre_ha            VARCHAR(45), 
  IN _fecha_ha             DATE
)BEGIN
  INSERT INTO habilidades_especiales (id_persona, nombre_ha, fecha_ha) 
  VALUES (_id_persona, _nombre_ha, _fecha_ha);
END $$
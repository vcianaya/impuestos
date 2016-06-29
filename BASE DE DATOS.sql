CREATE TABLE `impuestos`.`equipo` (
  `id_equ` INT NOT NULL AUTO_INCREMENT,
  `des_equ` VARCHAR(100) NULL,
  `se_equ` VARCHAR(45) NULL,
  `cs_equ` VARCHAR(45) NULL,
  `mar_equ` VARCHAR(50) NULL,
  `mod_equ` VARCHAR(100) NULL,
  `pro_equ` VARCHAR(45) NULL,
  `ip_equ` VARCHAR(45) NULL,
  `nom_equ` VARCHAR(100) NULL,
  `so_equ` VARCHAR(45) NULL,
  `dis_equ` INT NULL,
  `area` INT NULL,
  PRIMARY KEY (`id_equ`));



CREATE TABLE `impuestos`.`usuario` (
  `id_usu` INT NOT NULL AUTO_INCREMENT,
  `ci_usu` INT NOT NULL,
  `nom_usu` VARCHAR(45) NULL,
  `app_usu` VARCHAR(45) NULL,
  `apm_usu` VARCHAR(45) NULL,
  `car_usu` VARCHAR(45) NULL,
  `tel_usu` INT NULL,
  `cel_usu` INT NULL,
  `nick_usu` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `email_usu` VARCHAR(45) NULL,
  `equipo` INT NULL,
  `area` INT NULL,
  PRIMARY KEY (`id_usu`));


  CREATE TABLE `impuestos`.`siniestro` (
  `id_sin` INT NOT NULL AUTO_INCREMENT,
  `equipo` INT NULL,
  `usuario` INT NULL,
  `area` INT NULL,
  `fecha` date NULL,
  `observaciones` TEXT NULL,
  PRIMARY KEY (`id_sin`));

CREATE TABLE `impuestos`.`area` (
  `id_are` INT NOT NULL AUTO_INCREMENT,
  `nom_are` VARCHAR(100) NULL,
  `des_are` VARCHAR(200) NULL,
  PRIMARY KEY (`id_are`));



ALTER TABLE `impuestos`.`equipo` 
ADD INDEX `equipoArea_idx` (`area` ASC);
ALTER TABLE `impuestos`.`equipo` 
ADD CONSTRAINT `equipoArea`
  FOREIGN KEY (`area`)
  REFERENCES `impuestos`.`area` (`id_are`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `impuestos`.`siniestro` 
ADD INDEX `siniestroEquipo_idx` (`equipo` ASC);
ALTER TABLE `impuestos`.`siniestro` 
ADD CONSTRAINT `siniestroEquipo`
  FOREIGN KEY (`equipo`)
  REFERENCES `impuestos`.`equipo` (`id_equ`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `impuestos`.`siniestro` 
ADD INDEX `siniestroUsuario_idx` (`usuario` ASC);
ALTER TABLE `impuestos`.`siniestro` 
ADD CONSTRAINT `siniestroUsuario`
  FOREIGN KEY (`usuario`)
  REFERENCES `impuestos`.`usuario` (`id_usu`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


ALTER TABLE `impuestos`.`siniestro` 
ADD INDEX `siniestroArea_idx` (`area` ASC);
ALTER TABLE `impuestos`.`siniestro` 
ADD CONSTRAINT `siniestroArea`
  FOREIGN KEY (`area`)
  REFERENCES `impuestos`.`area` (`id_are`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `impuestos`.`usuario` 
ADD INDEX `usuarioEquipo_idx` (`equipo` ASC);
ALTER TABLE `impuestos`.`usuario` 
ADD CONSTRAINT `usuarioEquipo`
  FOREIGN KEY (`equipo`)
  REFERENCES `impuestos`.`equipo` (`id_equ`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
ALTER TABLE `impuestos`.`usuario` 
ADD INDEX `usuarioArea_idx` (`area` ASC);
ALTER TABLE `impuestos`.`usuario` 
ADD CONSTRAINT `usuarioArea`
  FOREIGN KEY (`area`)
  REFERENCES `impuestos`.`area` (`id_are`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

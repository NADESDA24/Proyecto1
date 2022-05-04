
    create database `bd_todo`;
	use `bd_todo`;

CREATE TABLE `t_usuarios` 
( 
    `ID` INT NOT NULL AUTO_INCREMENT ,
     `usuario` VARCHAR(100) NOT NULL ,
      `contraseña` VARCHAR(100) NOT NULL ,
       PRIMARY KEY (`ID`)
       ) ENGINE = InnoDB;

CREATE TABLE `t_tarea` 
(
     `ID_tarea` INT NOT NULL AUTO_INCREMENT ,
      `tarea` VARCHAR(500) NOT NULL ,
       `usuario` VARCHAR(100) NOT NULL 
       , PRIMARY KEY (`ID_tarea`)
       ) ENGINE = InnoDB;

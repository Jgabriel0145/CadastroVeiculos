-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_veiculos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_veiculos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_veiculos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `db_veiculos` ;

-- -----------------------------------------------------
-- Table `db_veiculos`.`combustiveis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_veiculos`.`combustiveis` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_veiculos`.`fabricantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_veiculos`.`fabricantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL DEFAULT NULL,
  `cnpj` CHAR(14) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_veiculos`.`marcas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_veiculos`.`marcas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_veiculos`.`tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_veiculos`.`tipos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_veiculos`.`veiculos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_veiculos`.`veiculos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `modelo` VARCHAR(255) NULL DEFAULT NULL,
  `ano` YEAR NULL DEFAULT NULL,
  `cor` VARCHAR(255) NULL DEFAULT NULL,
  `numero_chassi` CHAR(17) NULL DEFAULT NULL,
  `km` DOUBLE NULL DEFAULT NULL,
  `revisao` TINYINT NULL DEFAULT 0,
  `sinistro` TINYINT NULL DEFAULT 0,
  `roubo_furto` TINYINT NULL DEFAULT 0,
  `aluguel` TINYINT(1) NULL DEFAULT 0,
  `venda` TINYINT(1) NULL DEFAULT 0,
  `particular` TINYINT(1) NULL DEFAULT 0,
  `observacao` VARCHAR(255) NULL DEFAULT NULL,
  `id_marca` INT NULL DEFAULT NULL,
  `id_fabricante` INT NULL DEFAULT NULL,
  `id_tipo` INT NULL DEFAULT NULL,
  `id_combustivel` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_marca` (`id_marca` ASC) VISIBLE,
  INDEX `id_fabricante` (`id_fabricante` ASC) VISIBLE,
  INDEX `id_tipo` (`id_tipo` ASC) VISIBLE,
  INDEX `id_combustivel` (`id_combustivel` ASC) VISIBLE,
  CONSTRAINT `veiculos_ibfk_1`
    FOREIGN KEY (`id_marca`)
    REFERENCES `db_veiculos`.`marcas` (`id`),
  CONSTRAINT `veiculos_ibfk_2`
    FOREIGN KEY (`id_fabricante`)
    REFERENCES `db_veiculos`.`fabricantes` (`id`),
  CONSTRAINT `veiculos_ibfk_3`
    FOREIGN KEY (`id_tipo`)
    REFERENCES `db_veiculos`.`tipos` (`id`),
  CONSTRAINT `veiculos_ibfk_4`
    FOREIGN KEY (`id_combustivel`)
    REFERENCES `db_veiculos`.`combustiveis` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



create user if not exists 'admin'@'localhost' identified by 'admin';
GRANT ALL PRIVILEGES ON db_veiculos.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;


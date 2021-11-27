-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CentralMarket` DEFAULT CHARACTER SET utf8 ;
USE `CentralMarket` ;

-- -----------------------------------------------------
-- Table `CentralMarket`.`Catalogo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Catalogo` (
  `idCatalogo` INT NOT NULL,
  `categoría` VARCHAR(45) NOT NULL,
  `no.Categoria` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `foto` LONGBLOB NOT NULL,
  PRIMARY KEY (`idCatalogo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Producto` (
  `idProducto` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(90) NULL,
  `precio` DECIMAL NULL,
  `vigencia` DATETIME NULL,
  `estatus` VARCHAR(45) NULL,
  `Catalogo_idCatalogo` INT NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `fk_Producto_Catalogo1_idx` (`Catalogo_idCatalogo` ASC) ,
  CONSTRAINT `fk_Producto_Catalogo1`
    FOREIGN KEY (`Catalogo_idCatalogo`)
    REFERENCES `CentralMarket`.`Catalogo` (`idCatalogo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`Vendedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Vendedor` (
  `idVendedor` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `direccionLocal` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `foto` LONGBLOB NOT NULL,
  PRIMARY KEY (`idVendedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasenia` VARCHAR(45) NOT NULL,
  `Vendedor_idVendedor` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_Usuario_Vendedor1_idx` (`Vendedor_idVendedor` ASC),
  CONSTRAINT `fk_Usuario_Vendedor1`
    FOREIGN KEY (`Vendedor_idVendedor`)
    REFERENCES `CentralMarket`.`Vendedor` (`idVendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Cliente` (
  `idCliente` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  `domicilio` VARCHAR(45) NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`idCliente`),
  INDEX `fk_Cliente_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Cliente_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `CentralMarket`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`Ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Ticket` (
  `idTicket` INT NOT NULL,
  `fecha` DATETIME NOT NULL,
  `IVA` DECIMAL NOT NULL,
  `subtotal` DECIMAL NOT NULL,
  `total` DECIMAL NOT NULL,
  PRIMARY KEY (`idTicket`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`Pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Pedido` (
  `idPedido` INT NOT NULL,
  `estatus` VARCHAR(50) NULL,
  `cantidad` INT NULL,
  `total` FLOAT NULL,
  `Producto_idProducto` INT NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  `Ticket_idTicket` INT NOT NULL,
  PRIMARY KEY (`idPedido`),
  INDEX `fk_Pedido_Producto1_idx` (`Producto_idProducto` ASC),
  INDEX `fk_Pedido_Cliente1_idx` (`Cliente_idCliente` ASC),
  INDEX `fk_Pedido_Ticket1_idx` (`Ticket_idTicket` ASC),
  CONSTRAINT `fk_Pedido_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `CentralMarket`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `CentralMarket`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_Ticket1`
    FOREIGN KEY (`Ticket_idTicket`)
    REFERENCES `CentralMarket`.`Ticket` (`idTicket`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`GestionProducto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`GestionProducto` (
  `Vendedor_idVendedor` INT NOT NULL,
  `Producto_idProducto` INT NOT NULL,
  PRIMARY KEY (`Vendedor_idVendedor`, `Producto_idProducto`),
  INDEX `fk_Vendedor_has_Producto_Producto1_idx` (`Producto_idProducto` ASC),
  INDEX `fk_Vendedor_has_Producto_Vendedor1_idx` (`Vendedor_idVendedor` ASC),
  CONSTRAINT `fk_Vendedor_has_Producto_Vendedor1`
    FOREIGN KEY (`Vendedor_idVendedor`)
    REFERENCES `CentralMarket`.`Vendedor` (`idVendedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Vendedor_has_Producto_Producto1`
    FOREIGN KEY (`Producto_idProducto`)
    REFERENCES `CentralMarket`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CentralMarket`.`Tarjeta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CentralMarket`.`Tarjeta` (
  `idTarjeta` INT NOT NULL,
  `CVV` INT NOT NULL,
  `fechaVencer` DATE NOT NULL,
  `nombrePropietario` VARCHAR(45) NOT NULL,
  `noTarjeta` INT NOT NULL,
  `Cliente_idCliente` INT NOT NULL,
  PRIMARY KEY (`idTarjeta`),
  INDEX `fk_Tarjeta_Cliente1_idx` (`Cliente_idCliente` ASC),
  CONSTRAINT `fk_Tarjeta_Cliente1`
    FOREIGN KEY (`Cliente_idCliente`)
    REFERENCES `CentralMarket`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

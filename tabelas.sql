CREATE TABLE `Produto` (
    `Codigo` INT NOT NULL AUTO_INCREMENT,
    `Descricao` VARCHAR(255) NOT NULL,
    `Preco` FLOAT NOT NULL,
    KEY `Descricao` (`Descricao`) USING BTREE,
    PRIMARY KEY (`Codigo`)
);

CREATE TABLE `Documento` (
    `Numero` INT NOT NULL AUTO_INCREMENT,
    `Total` FLOAT NOT NULL,
    `Confirmado` BIT NOT NULL,
    KEY `Confirmado` (`Confirmado`) USING BTREE,
    PRIMARY KEY (`Numero`)
);

CREATE TABLE `Item` (
    `DocumentoId` INT NOT NULL REFERENCES documento,
    `ProdutoId` INT NOT NULL REFERENCES produto,
    PRIMARY KEY (`DocumentoId`, `ProdutoId`)
);
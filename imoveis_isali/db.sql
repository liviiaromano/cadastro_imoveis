CREATE DATABASE cadastro_imovel;

USE cadastro_imovel;

CREATE TABLE imovel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(10) NOT NULL,
    localizacao VARCHAR(100) NOT NULL,
    valor VARCHAR(100) NOT NULL,
    tipo VARCHAR(10) NOT NULL,

);
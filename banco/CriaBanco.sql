DROP DATABASE IF EXISTS  IFSP;

CREATE DATABASE IF NOT EXISTS IFSP;

USE IFSP;

CREATE TABLE cidade (
    id INT AUTO_INCREMENT,
    nome VARCHAR (100),
    estado VARCHAR (002),
    PRIMARY KEY (id)
);

CREATE TABLE cliente (
    id INT AUTO_INCREMENT,
    nome VARCHAR (100),
    email VARCHAR (100),
    senha VARCHAR (050),
    ativo BOOL,
    id_cidade INT,
    PRIMARY KEY (id),
    CONSTRAINT FK_ClienteCidade
    FOREIGN KEY (id_cidade) REFERENCES cidade (id)
);
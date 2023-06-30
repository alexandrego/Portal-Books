# Portal-Books
Projeto WEB II - Uniasselvi

# Script do Banco de Dados

## Criando Banco de Dados
CREATE DATABASE portalbooks;

## Criando Tabela Leitor
USE portalbooks;
CREATE TABLE IF NOT EXISTS  leitor(
id int(4) AUTO_INCREMENT,
nome varchar(30) NOT NULL,
ultimo_nome varchar(30) NOT NULL,
nome_usuario varchar(30) NOT NULL,
email varchar(70),
senha varchar(500),
PRIMARY KEY (id)
);

## Criando Tabela Livro
USE portalbooks;
CREATE TABLE IF NOT EXISTS  livro(
id int(4) AUTO_INCREMENT,
id_leitor int(4) NOT NULL,
titulo_livro varchar(30) NOT NULL,
autor_livro varchar(30) NOT NULL,
descricao_livro varchar(30) NOT NULL,
quant_pagina int(5),
capa_livro blob,
PRIMARY KEY (id)
);
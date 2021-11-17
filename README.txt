SEGUE ABAIXO COMO FAZER A PARTE DO MYSQL:

-----************-----------
CREATE DATABASE suafesta

USE suafesta

\\\ - TABELA CADASTRO

	CREATE TABLE cadastro(
	cd_cadastro INT(11) AUTO_INCREMENT,
	nm_cadastro VARCHAR (255),
	email VARCHAR(255),
	usuario VARCHAR(255),
	senha VARCHAR(16),
	confirmasenha VARCHAR(16),
	PRIMARY KEY (cd_cadastro)
	)

\\\ - TABELA FORMULARIO
	
	CREATE TABLE formulario(
	nm_formulario VARCHAR(45),	
	sobrenome VARCHAR(45),
	apelido VARCHAR(45),
	email VARCHAR(45),
	itens VARCHAR(45),
	data DATE,
	hora TIME
	)

\\\ - TABELA DE ITENS
	
	CREATE TABLE itens(
	cd_item INT(11) AUTO_INCREMENT,
	nome_item VARCHAR(45),
	PRIMARY KEY (cd_item)
	)

\\\ - TABELA RECADO
	
	CREATE TABLE recado(
	id_recado INT(11) AUTO_INCREMENT,
	nome VARCHAR(100),
	recado VARCHAR(200),
	data DATE,
	hora TIME,
	PRIMARY JEY (id_recado)
	)

	
	
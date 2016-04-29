
/*  SCRIPT SQL para o controle_ru
*
*
*
*
 *
 */

CREATE DATABASE IF NOT EXISTS RU;

USE RU;

CREATE TABLE IF NOT EXISTS Bilhete(
  cod INT(11) NOT NULL AUTO_INCREMENT,
  valor varchar(32) NOT NULL,
  CONSTRAINT bilhete_pk PRIMARY KEY (cod)
) ;

CREATE TABLE IF NOT EXISTS  Pessoa (
   Id varchar(16) NOT NULL,
  email varchar(30) NOT NULL,
  login varchar(20) NOT NULL,
  funcao varchar(13) NOT NULL,
   adm int(1) NOT NULL,
  senha varchar(32) NOT NULL,
  id_bilhete INT(11) NOT NULL,
  CONSTRAINT pessoa_pk PRIMARY KEY (Id),
  CONSTRAINT bilhete_fk FOREIGN KEY(id_bilhete) REFERENCES Bilhete(cod)
) ;

CREATE TABLE IF NOT EXISTS Pratos (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome varchar(30) NOT NULL,
  img varchar(30) NOT NULL,
  id_pessoa VARCHAR(16) NOT NULL,
  CONSTRAINT pratos_pk PRIMARY KEY (id),
  CONSTRAINT pessoa_fk FOREIGN KEY(id_pessoa) REFERENCES Pessoa(Id)
) ;

/*CREATE TABLE IF NOT EXISTS  Ingredientes(
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome varchar(30) NOT NULL,
  CONSTRAINT ingredientes_pk PRIMARY KEY (id)
) ;

CREATE TABLE IF NOT EXISTS IngredientesPratos (
  id INT(11) NOT NULL AUTO_INCREMENT,
  Quantidade varchar(10) NOT NULL,
  id_pratos INT(11) NOT NULL,
  id_ingredientes INT(11) NOT NULL,
  CONSTRAINT ingrpratos_pk PRIMARY KEY (id),
  CONSTRAINT pratos1_fk FOREIGN KEY(id_pratos) REFERENCES Pratos(id),
  CONSTRAINT ingr1_fk FOREIGN KEY(id_ingredientes) REFERENCES Ingredientes(id)
) ;*/

CREATE TABLE IF NOT EXISTS  Cardapio(
  cod INT(11) NOT NULL AUTO_INCREMENT,
  Data timestamp NOT NULL,
  CONSTRAINT cardapio_pk PRIMARY KEY (cod)
) ;

CREATE TABLE IF NOT EXISTS PratosCardapio(
  id INT(11) NOT NULL AUTO_INCREMENT,
  id_pratos INT(11) NOT NULL,
  id_cardapio INT(11) NOT NULL,
  CONSTRAINT ingrcardapio_pk PRIMARY KEY (id),
  CONSTRAINT pratos2_fk FOREIGN KEY(id_pratos) REFERENCES Pratos(id),
  CONSTRAINT cardapio_fk FOREIGN KEY(id_cardapio) REFERENCES Cardapio(cod)
) ;

CREATE TABLE IF NOT EXISTS Compras (
  id INT(11) NOT NULL AUTO_INCREMENT,
  Nota float,
  Comentario varchar(40),
  id_pessoa VARCHAR(16) NOT NULL,
  id_cardapio INT(11) NOT NULL,
  CONSTRAINT compras_pk PRIMARY KEY (id),
  CONSTRAINT pessoa1_fk FOREIGN KEY(id_pessoa) REFERENCES Pessoa(Id),
  CONSTRAINT cardapio1_fk FOREIGN KEY(id_cardapio) REFERENCES Cardapio(cod)
) ;
INSERT INTO Bilhete VALUES (0,0);
INSERT INTO Bilhete VALUES (0,0);
INSERT INTO Bilhete VALUES (0,0);
INSERT INTO Pessoa VALUES (1212121002,'akan@uffs.edu.br','akan.reimos','estudante', 0, '1234', 1);
INSERT INTO Pessoa VALUES (2244398,'juvencia@uffs.edu.br','juvencia.akal','professor', 0, '????', 2);
INSERT INTO Pessoa VALUES (07611457404,'admin@uffs.edu.br','grandAdmin','externo', 1, '4321', 3);
/*INSERT INTO Ingredientes VALUES (0, 'Cenoura');
INSERT INTO Ingredientes VALUES (0, 'Alface');
INSERT INTO Ingredientes VALUES (0, 'Carne Moída');*/
INSERT INTO Pratos VALUES (0, 'Carne Selvagem',07611457404);
INSERT INTO Pratos VALUES (0, 'Salada',07611457404);
INSERT INTO Cardapio VALUES (0, '2015-11-11');
INSERT INTO Cardapio VALUES (0, '2014-12-12');
INSERT INTO Compras VALUES (0, 10, 'Sensacional!!!!!', 1212121002,1);
INSERT INTO Compras VALUES (0, 2.5, 'Até que vai. Mas por esse preço? Nunca!', 1212121002,2);
INSERT INTO PratosCardapio VALUES (0,1, 1);
INSERT INTO PratosCardapio VALUES (0,2, 1);
/*INSERT INTO IngredientesPratos VALUES (0,200, 1, 2);
INSERT INTO IngredientesPratos VALUES (0,200, 1, 3);
INSERT INTO IngredientesPratos VALUES (0,200, 2, 1);
INSERT INTO IngredientesPratos VALUES (0,200, 2, 2);
/*

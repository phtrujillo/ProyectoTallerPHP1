CREATE DATABASE tienda;

USE tienda;

CREATE TABLE categoria (
id_cat INT(11) NOT NULL AUTO_INCREMENT,
descripcion VARCHAR(30) NOT NULL,
PRIMARY KEY(id_cat)
);

INSERT INTO categoria (descripcion) VALUES
('Bebidas'),
('Jugos'),
('Limpieza'),
('Tragos'),
('Abarrotes'),
('Electronica');

DROP TABLE producto;

CREATE TABLE producto (
cod_pro INT(11) NOT NULL AUTO_INCREMENT,
id_cat INT(11) NOT NULL,
descripcion VARCHAR(50) NOT NULL,
precio VARCHAR(10) NOT NULL,
stock INT(11),
PRIMARY KEY(cod_pro),
CONSTRAINT producto_fk 
FOREIGN KEY (id_cat) REFERENCES categoria (id_cat)
);

INSERT INTO producto VALUES (1,1,'Pepsicola','2',20);
INSERT INTO producto VALUES (2,3,'Cocacola','3',16);
INSERT INTO producto VALUES (3,3,'KR','7',10);
INSERT INTO producto VALUES (4,5,'Inka Kola','3',20);
INSERT INTO producto VALUES (5,6,'Don Isacc','1.5',8);

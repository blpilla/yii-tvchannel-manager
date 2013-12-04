CREATE TABLE marca_tv(
id_marca int AUTO_INCREMENT,
nome varchar(200) NOT NULL,
PRIMARY KEY (id_marca)
);

CREATE TABLE tvs(
id_tv int AUTO_INCREMENT,
fk_marca int(8) NOT NULL,
modelo varchar(200) NOT NULL,
tamanho int(3) NOT NULL,
PRIMARY KEY (id_tv),
FOREIGN KEY (fk_marca) REFERENCES marca_tv(id_marca)
);
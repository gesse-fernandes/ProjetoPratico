-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Usuario (
id int PRIMARY KEY auto_increment,
login VARCHAR(80),
nome VARCHAR(80),
senha VARCHAR(80)
);

CREATE TABLE Produto (
id int PRIMARY KEY auto_increment,
imagem VARCHAR(80),
nomeProduto VARCHAR(80),
descricao text,
preco decimal(10,2)
);

CREATE TABLE autentifica (
idProduto int,
-- Erro: nome do campo duplicado nesta tabela!
idUsuario int,
FOREIGN KEY(idProduto) REFERENCES Produto (id),
FOREIGN KEY(idUsuario) REFERENCES Usuario (id)
)


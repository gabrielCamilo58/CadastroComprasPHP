CREATE DATABASE testecompras;
USE testecompras;

CREATE TABLE produtos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeProduto VARCHAR(100),
    valorUnitario FLOAT NOT NULL,
    quatidade INT
);

CREATE TABLE clientes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeCliente VARCHAR(10) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email NCHAR(10) 
);

CREATE TABLE pedidos (
   id INT AUTO_INCREMENT PRIMARY KEY,
   cliente_Id INT,
   produto_Id INT,
   FOREIGN KEY (cliente_Id) REFERENCES clientes(id) ON DELETE CASCADE,
   FOREIGN KEY (produto_Id) REFERENCES produtos(id) ON DELETE CASCADE
);


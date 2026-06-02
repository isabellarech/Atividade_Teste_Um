-- Criação do banco de dados e da tabela de usuários
CREATE DATABASE sistema_simples;
-- Seleciona o banco de dados para uso
USE sistema_simples;

-- A tabela "usuarios" é criada para armazenar as informações de login dos usuários, incluindo um ID único, o nome de usuário e a senha
CREATE TABLE usuarios (
    -- Definição das colunas da tabela
    id INT AUTO_INCREMENT PRIMARY KEY,
    -- O campo "usuario" é do tipo VARCHAR (limite de 255 caracteres e não pode ser nulo), garantindo que cada usuário tenha um nome de usuário válido
    usuario VARCHAR(255) NOT NULL,
    -- O campo "senha" é do tipo VARCHAR (limite de 255 caracteres e não pode ser nulo), garantindo que cada usuário tenha uma senha válida
    senha VARCHAR(255) NOT NULL
);

-- Insere um usuário padrão na tabela
-- O comando "INSERT INTO" é usado para adicionar um novo registro à tabela "usuarios"
-- O nome de usuário definido é "admin" e a senha é "123456"
INSERT INTO usuarios (usuario, senha) VALUES ('admin', '123456');
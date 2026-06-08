-- Cria o banco de dados usado pela aplicação.
CREATE DATABASE sistema_simples_m1;

-- Seleciona o banco recém-criado para executar os próximos comandos.
USE sistema_simples_m1;

-- Cria a tabela responsável por armazenar os usuários do sistema.
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- Insere um usuário inicial para permitir o teste imediato do login.
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');
-- Comando 'CREATE DATABASE'
-- Função: Cria um banco de dados (esquema) totalmente novo no servidor MySQL.
-- O nome escolhido para identificar este banco é 'sistema_simples_m1'.
CREATE DATABASE sistema_simples_m1;

-- Comando 'USE'
-- Função: Seleciona e ativa o banco de dados recém-criado.
-- Isso diz ao servidor MySQL que todas as tabelas criadas a partir de agora vão morar dentro dele.
USE sistema_simples_m1;

-- Comando 'CREATE TABLE'
-- Função: Cria uma tabela física (uma estrutura de linhas e colunas) chamada 'usuarios'.
CREATE TABLE usuarios (
    
    -- Coluna 'id' com as funções 'INT', 'AUTO_INCREMENT' e 'PRIMARY KEY'
    -- INT: Define que este campo só aceita números inteiros.
    -- AUTO_INCREMENT: Faz o banco de dados somar +1 automaticamente a cada novo cadastro (1, 2, 3...).
    -- PRIMARY KEY: Define esta coluna como a Chave Primária (o identificador único e exclusivo de cada usuário).
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    --  Coluna 'usuario' com as funções 'VARCHAR(87)' e 'NOT NULL'
    -- VARCHAR(87): Define que o campo aceita texto (letras, números e símbolos) de até 87 caracteres.
    -- NOT NULL: É uma restrição que obriga o preenchimento deste campo (não pode ficar vazio).
    usuario VARCHAR(87) NOT NULL,
    
    -- Coluna 'senha' com as funções 'VARCHAR(255)' e 'NOT NULL'
    -- VARCHAR(255): Permite armazenar textos de até 255 caracteres (ótimo espaço para futuras senhas criptografadas).
    -- NOT NULL: Garante que é obrigatório cadastrar uma senha para o usuário.
    senha VARCHAR(255) NOT NULL
);

-- Comando 'INSERT INTO ... VALUES'
-- Função: Insere registros (dados reais) para dentro das colunas da tabela.
-- Aqui, ele grava o texto 'admin' na coluna 'usuario' e o texto '123' na coluna 'senha'.
-- O 'id' não precisa ser passado aqui porque o AUTO_INCREMENT resolve isso sozinho, gerando o número 1.
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');